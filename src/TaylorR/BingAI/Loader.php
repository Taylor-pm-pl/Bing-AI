<?php

declare(strict_types=1);

namespace TaylorR\BingAI;

use MaximeRenou\BingAI\BingAI;
use pocketmine\plugin\PluginBase;
use pocketmine\plugin\PluginException;

class Loader extends PluginBase {

    protected array $config;

    protected BingAI $ai;

    protected function onLoad(): void
    {
        if ($phar = \Phar::running() === "") {
            throw new PluginException("Cannot be run from source.");
        }

        require_once $phar . "/vendor/autoload.php";
    }

    protected function onEnable(): void
    {
        $this->saveDefaultConfig();
        $this->config = $this->getConfig()->getAll();
        $this->ai = new BingAI($this->getCookie());
        $this->checkCookie();
    }

    protected function getCookie(): string {
        return $this->config["cookie"];
    }

    private function checkCookie(): void {
        if (!$this->ai->checkCookie()) {
            $this->getLogger()->info("Cookie is invalid!");
        }
    }
}