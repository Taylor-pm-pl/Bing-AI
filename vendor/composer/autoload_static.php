<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1a8f855de6ee0e9399ff4061de515f2f
{
    public static $files = array (
        'ad155f8f1cf0d418fe49e248db8c661b' => __DIR__ . '/..' . '/react/promise/src/functions_include.php',
        '972fda704d680a3a53c68e34e193cb22' => __DIR__ . '/..' . '/react/promise-timer/src/functions_include.php',
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        '3be16222a6efa6dd226a219eaaff823b' => __DIR__ . '/..' . '/ratchet/pawl/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Taylor\\BingAi\\' => 14,
        ),
        'R' => 
        array (
            'React\\Stream\\' => 13,
            'React\\Socket\\' => 13,
            'React\\Promise\\Timer\\' => 20,
            'React\\Promise\\' => 14,
            'React\\EventLoop\\' => 16,
            'React\\Dns\\' => 10,
            'React\\Cache\\' => 12,
            'Ratchet\\RFC6455\\' => 16,
            'Ratchet\\Client\\' => 15,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'M' => 
        array (
            'MaximeRenou\\BingAI\\' => 19,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Taylor\\BingAi\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'React\\Stream\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/stream/src',
        ),
        'React\\Socket\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/socket/src',
        ),
        'React\\Promise\\Timer\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/promise-timer/src',
        ),
        'React\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/promise/src',
        ),
        'React\\EventLoop\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/event-loop/src',
        ),
        'React\\Dns\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/dns/src',
        ),
        'React\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/cache/src',
        ),
        'Ratchet\\RFC6455\\' => 
        array (
            0 => __DIR__ . '/..' . '/ratchet/rfc6455/src',
        ),
        'Ratchet\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/ratchet/pawl/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-factory/src',
            1 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'MaximeRenou\\BingAI\\' => 
        array (
            0 => __DIR__ . '/..' . '/maximerenou/bing-ai/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'E' => 
        array (
            'Evenement' => 
            array (
                0 => __DIR__ . '/..' . '/evenement/evenement/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Evenement\\EventEmitter' => __DIR__ . '/..' . '/evenement/evenement/src/Evenement/EventEmitter.php',
        'Evenement\\EventEmitterInterface' => __DIR__ . '/..' . '/evenement/evenement/src/Evenement/EventEmitterInterface.php',
        'Evenement\\EventEmitterTrait' => __DIR__ . '/..' . '/evenement/evenement/src/Evenement/EventEmitterTrait.php',
        'GuzzleHttp\\Psr7\\AppendStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/AppendStream.php',
        'GuzzleHttp\\Psr7\\BufferStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/BufferStream.php',
        'GuzzleHttp\\Psr7\\CachingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/CachingStream.php',
        'GuzzleHttp\\Psr7\\DroppingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/DroppingStream.php',
        'GuzzleHttp\\Psr7\\Exception\\MalformedUriException' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Exception/MalformedUriException.php',
        'GuzzleHttp\\Psr7\\FnStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/FnStream.php',
        'GuzzleHttp\\Psr7\\Header' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Header.php',
        'GuzzleHttp\\Psr7\\HttpFactory' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/HttpFactory.php',
        'GuzzleHttp\\Psr7\\InflateStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/InflateStream.php',
        'GuzzleHttp\\Psr7\\LazyOpenStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LazyOpenStream.php',
        'GuzzleHttp\\Psr7\\LimitStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LimitStream.php',
        'GuzzleHttp\\Psr7\\Message' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Message.php',
        'GuzzleHttp\\Psr7\\MessageTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MessageTrait.php',
        'GuzzleHttp\\Psr7\\MimeType' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MimeType.php',
        'GuzzleHttp\\Psr7\\MultipartStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MultipartStream.php',
        'GuzzleHttp\\Psr7\\NoSeekStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/NoSeekStream.php',
        'GuzzleHttp\\Psr7\\PumpStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/PumpStream.php',
        'GuzzleHttp\\Psr7\\Query' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Query.php',
        'GuzzleHttp\\Psr7\\Request' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Request.php',
        'GuzzleHttp\\Psr7\\Response' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Response.php',
        'GuzzleHttp\\Psr7\\Rfc7230' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Rfc7230.php',
        'GuzzleHttp\\Psr7\\ServerRequest' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/ServerRequest.php',
        'GuzzleHttp\\Psr7\\Stream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Stream.php',
        'GuzzleHttp\\Psr7\\StreamDecoratorTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamDecoratorTrait.php',
        'GuzzleHttp\\Psr7\\StreamWrapper' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamWrapper.php',
        'GuzzleHttp\\Psr7\\UploadedFile' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UploadedFile.php',
        'GuzzleHttp\\Psr7\\Uri' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Uri.php',
        'GuzzleHttp\\Psr7\\UriComparator' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriComparator.php',
        'GuzzleHttp\\Psr7\\UriNormalizer' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriNormalizer.php',
        'GuzzleHttp\\Psr7\\UriResolver' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriResolver.php',
        'GuzzleHttp\\Psr7\\Utils' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Utils.php',
        'MaximeRenou\\BingAI\\BingAI' => __DIR__ . '/..' . '/maximerenou/bing-ai/src/BingAI.php',
        'MaximeRenou\\BingAI\\Chat\\Conversation' => __DIR__ . '/..' . '/maximerenou/bing-ai/src/Chat/Conversation.php',
        'MaximeRenou\\BingAI\\Chat\\Message' => __DIR__ . '/..' . '/maximerenou/bing-ai/src/Chat/Message.php',
        'MaximeRenou\\BingAI\\Chat\\MessageType' => __DIR__ . '/..' . '/maximerenou/bing-ai/src/Chat/MessageType.php',
        'MaximeRenou\\BingAI\\Chat\\Prompt' => __DIR__ . '/..' . '/maximerenou/bing-ai/src/Chat/Prompt.php',
        'MaximeRenou\\BingAI\\Chat\\Tone' => __DIR__ . '/..' . '/maximerenou/bing-ai/src/Chat/Tone.php',
        'MaximeRenou\\BingAI\\Images\\ImageCreator' => __DIR__ . '/..' . '/maximerenou/bing-ai/src/Images/ImageCreator.php',
        'MaximeRenou\\BingAI\\Tools' => __DIR__ . '/..' . '/maximerenou/bing-ai/src/Tools.php',
        'Psr\\Http\\Message\\MessageInterface' => __DIR__ . '/..' . '/psr/http-message/src/MessageInterface.php',
        'Psr\\Http\\Message\\RequestFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/RequestFactoryInterface.php',
        'Psr\\Http\\Message\\RequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/RequestInterface.php',
        'Psr\\Http\\Message\\ResponseFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/ResponseFactoryInterface.php',
        'Psr\\Http\\Message\\ResponseInterface' => __DIR__ . '/..' . '/psr/http-message/src/ResponseInterface.php',
        'Psr\\Http\\Message\\ServerRequestFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/ServerRequestFactoryInterface.php',
        'Psr\\Http\\Message\\ServerRequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/ServerRequestInterface.php',
        'Psr\\Http\\Message\\StreamFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/StreamFactoryInterface.php',
        'Psr\\Http\\Message\\StreamInterface' => __DIR__ . '/..' . '/psr/http-message/src/StreamInterface.php',
        'Psr\\Http\\Message\\UploadedFileFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/UploadedFileFactoryInterface.php',
        'Psr\\Http\\Message\\UploadedFileInterface' => __DIR__ . '/..' . '/psr/http-message/src/UploadedFileInterface.php',
        'Psr\\Http\\Message\\UriFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/UriFactoryInterface.php',
        'Psr\\Http\\Message\\UriInterface' => __DIR__ . '/..' . '/psr/http-message/src/UriInterface.php',
        'Ratchet\\Client\\Connector' => __DIR__ . '/..' . '/ratchet/pawl/src/Connector.php',
        'Ratchet\\Client\\WebSocket' => __DIR__ . '/..' . '/ratchet/pawl/src/WebSocket.php',
        'Ratchet\\RFC6455\\Handshake\\ClientNegotiator' => __DIR__ . '/..' . '/ratchet/rfc6455/src/Handshake/ClientNegotiator.php',
        'Ratchet\\RFC6455\\Handshake\\InvalidPermessageDeflateOptionsException' => __DIR__ . '/..' . '/ratchet/rfc6455/src/Handshake/InvalidPermessageDeflateOptionsException.php',
        'Ratchet\\RFC6455\\Handshake\\NegotiatorInterface' => __DIR__ . '/..' . '/ratchet/rfc6455/src/Handshake/NegotiatorInterface.php',
        'Ratchet\\RFC6455\\Handshake\\PermessageDeflateOptions' => __DIR__ . '/..' . '/ratchet/rfc6455/src/Handshake/PermessageDeflateOptions.php',
        'Ratchet\\RFC6455\\Handshake\\RequestVerifier' => __DIR__ . '/..' . '/ratchet/rfc6455/src/Handshake/RequestVerifier.php',
        'Ratchet\\RFC6455\\Handshake\\ResponseVerifier' => __DIR__ . '/..' . '/ratchet/rfc6455/src/Handshake/ResponseVerifier.php',
        'Ratchet\\RFC6455\\Handshake\\ServerNegotiator' => __DIR__ . '/..' . '/ratchet/rfc6455/src/Handshake/ServerNegotiator.php',
        'Ratchet\\RFC6455\\Messaging\\CloseFrameChecker' => __DIR__ . '/..' . '/ratchet/rfc6455/src/Messaging/CloseFrameChecker.php',
        'Ratchet\\RFC6455\\Messaging\\DataInterface' => __DIR__ . '/..' . '/ratchet/rfc6455/src/Messaging/DataInterface.php',
        'Ratchet\\RFC6455\\Messaging\\Frame' => __DIR__ . '/..' . '/ratchet/rfc6455/src/Messaging/Frame.php',
        'Ratchet\\RFC6455\\Messaging\\FrameInterface' => __DIR__ . '/..' . '/ratchet/rfc6455/src/Messaging/FrameInterface.php',
        'Ratchet\\RFC6455\\Messaging\\Message' => __DIR__ . '/..' . '/ratchet/rfc6455/src/Messaging/Message.php',
        'Ratchet\\RFC6455\\Messaging\\MessageBuffer' => __DIR__ . '/..' . '/ratchet/rfc6455/src/Messaging/MessageBuffer.php',
        'Ratchet\\RFC6455\\Messaging\\MessageInterface' => __DIR__ . '/..' . '/ratchet/rfc6455/src/Messaging/MessageInterface.php',
        'React\\Cache\\ArrayCache' => __DIR__ . '/..' . '/react/cache/src/ArrayCache.php',
        'React\\Cache\\CacheInterface' => __DIR__ . '/..' . '/react/cache/src/CacheInterface.php',
        'React\\Dns\\BadServerException' => __DIR__ . '/..' . '/react/dns/src/BadServerException.php',
        'React\\Dns\\Config\\Config' => __DIR__ . '/..' . '/react/dns/src/Config/Config.php',
        'React\\Dns\\Config\\HostsFile' => __DIR__ . '/..' . '/react/dns/src/Config/HostsFile.php',
        'React\\Dns\\Model\\Message' => __DIR__ . '/..' . '/react/dns/src/Model/Message.php',
        'React\\Dns\\Model\\Record' => __DIR__ . '/..' . '/react/dns/src/Model/Record.php',
        'React\\Dns\\Protocol\\BinaryDumper' => __DIR__ . '/..' . '/react/dns/src/Protocol/BinaryDumper.php',
        'React\\Dns\\Protocol\\Parser' => __DIR__ . '/..' . '/react/dns/src/Protocol/Parser.php',
        'React\\Dns\\Query\\CachingExecutor' => __DIR__ . '/..' . '/react/dns/src/Query/CachingExecutor.php',
        'React\\Dns\\Query\\CancellationException' => __DIR__ . '/..' . '/react/dns/src/Query/CancellationException.php',
        'React\\Dns\\Query\\CoopExecutor' => __DIR__ . '/..' . '/react/dns/src/Query/CoopExecutor.php',
        'React\\Dns\\Query\\ExecutorInterface' => __DIR__ . '/..' . '/react/dns/src/Query/ExecutorInterface.php',
        'React\\Dns\\Query\\FallbackExecutor' => __DIR__ . '/..' . '/react/dns/src/Query/FallbackExecutor.php',
        'React\\Dns\\Query\\HostsFileExecutor' => __DIR__ . '/..' . '/react/dns/src/Query/HostsFileExecutor.php',
        'React\\Dns\\Query\\Query' => __DIR__ . '/..' . '/react/dns/src/Query/Query.php',
        'React\\Dns\\Query\\RetryExecutor' => __DIR__ . '/..' . '/react/dns/src/Query/RetryExecutor.php',
        'React\\Dns\\Query\\SelectiveTransportExecutor' => __DIR__ . '/..' . '/react/dns/src/Query/SelectiveTransportExecutor.php',
        'React\\Dns\\Query\\TcpTransportExecutor' => __DIR__ . '/..' . '/react/dns/src/Query/TcpTransportExecutor.php',
        'React\\Dns\\Query\\TimeoutException' => __DIR__ . '/..' . '/react/dns/src/Query/TimeoutException.php',
        'React\\Dns\\Query\\TimeoutExecutor' => __DIR__ . '/..' . '/react/dns/src/Query/TimeoutExecutor.php',
        'React\\Dns\\Query\\UdpTransportExecutor' => __DIR__ . '/..' . '/react/dns/src/Query/UdpTransportExecutor.php',
        'React\\Dns\\RecordNotFoundException' => __DIR__ . '/..' . '/react/dns/src/RecordNotFoundException.php',
        'React\\Dns\\Resolver\\Factory' => __DIR__ . '/..' . '/react/dns/src/Resolver/Factory.php',
        'React\\Dns\\Resolver\\Resolver' => __DIR__ . '/..' . '/react/dns/src/Resolver/Resolver.php',
        'React\\Dns\\Resolver\\ResolverInterface' => __DIR__ . '/..' . '/react/dns/src/Resolver/ResolverInterface.php',
        'React\\EventLoop\\ExtEvLoop' => __DIR__ . '/..' . '/react/event-loop/src/ExtEvLoop.php',
        'React\\EventLoop\\ExtEventLoop' => __DIR__ . '/..' . '/react/event-loop/src/ExtEventLoop.php',
        'React\\EventLoop\\ExtLibevLoop' => __DIR__ . '/..' . '/react/event-loop/src/ExtLibevLoop.php',
        'React\\EventLoop\\ExtLibeventLoop' => __DIR__ . '/..' . '/react/event-loop/src/ExtLibeventLoop.php',
        'React\\EventLoop\\ExtUvLoop' => __DIR__ . '/..' . '/react/event-loop/src/ExtUvLoop.php',
        'React\\EventLoop\\Factory' => __DIR__ . '/..' . '/react/event-loop/src/Factory.php',
        'React\\EventLoop\\Loop' => __DIR__ . '/..' . '/react/event-loop/src/Loop.php',
        'React\\EventLoop\\LoopInterface' => __DIR__ . '/..' . '/react/event-loop/src/LoopInterface.php',
        'React\\EventLoop\\SignalsHandler' => __DIR__ . '/..' . '/react/event-loop/src/SignalsHandler.php',
        'React\\EventLoop\\StreamSelectLoop' => __DIR__ . '/..' . '/react/event-loop/src/StreamSelectLoop.php',
        'React\\EventLoop\\Tick\\FutureTickQueue' => __DIR__ . '/..' . '/react/event-loop/src/Tick/FutureTickQueue.php',
        'React\\EventLoop\\TimerInterface' => __DIR__ . '/..' . '/react/event-loop/src/TimerInterface.php',
        'React\\EventLoop\\Timer\\Timer' => __DIR__ . '/..' . '/react/event-loop/src/Timer/Timer.php',
        'React\\EventLoop\\Timer\\Timers' => __DIR__ . '/..' . '/react/event-loop/src/Timer/Timers.php',
        'React\\Promise\\CancellablePromiseInterface' => __DIR__ . '/..' . '/react/promise/src/CancellablePromiseInterface.php',
        'React\\Promise\\CancellationQueue' => __DIR__ . '/..' . '/react/promise/src/CancellationQueue.php',
        'React\\Promise\\Deferred' => __DIR__ . '/..' . '/react/promise/src/Deferred.php',
        'React\\Promise\\Exception\\LengthException' => __DIR__ . '/..' . '/react/promise/src/Exception/LengthException.php',
        'React\\Promise\\ExtendedPromiseInterface' => __DIR__ . '/..' . '/react/promise/src/ExtendedPromiseInterface.php',
        'React\\Promise\\FulfilledPromise' => __DIR__ . '/..' . '/react/promise/src/FulfilledPromise.php',
        'React\\Promise\\LazyPromise' => __DIR__ . '/..' . '/react/promise/src/LazyPromise.php',
        'React\\Promise\\Promise' => __DIR__ . '/..' . '/react/promise/src/Promise.php',
        'React\\Promise\\PromiseInterface' => __DIR__ . '/..' . '/react/promise/src/PromiseInterface.php',
        'React\\Promise\\PromisorInterface' => __DIR__ . '/..' . '/react/promise/src/PromisorInterface.php',
        'React\\Promise\\RejectedPromise' => __DIR__ . '/..' . '/react/promise/src/RejectedPromise.php',
        'React\\Promise\\Timer\\TimeoutException' => __DIR__ . '/..' . '/react/promise-timer/src/TimeoutException.php',
        'React\\Promise\\UnhandledRejectionException' => __DIR__ . '/..' . '/react/promise/src/UnhandledRejectionException.php',
        'React\\Socket\\Connection' => __DIR__ . '/..' . '/react/socket/src/Connection.php',
        'React\\Socket\\ConnectionInterface' => __DIR__ . '/..' . '/react/socket/src/ConnectionInterface.php',
        'React\\Socket\\Connector' => __DIR__ . '/..' . '/react/socket/src/Connector.php',
        'React\\Socket\\ConnectorInterface' => __DIR__ . '/..' . '/react/socket/src/ConnectorInterface.php',
        'React\\Socket\\DnsConnector' => __DIR__ . '/..' . '/react/socket/src/DnsConnector.php',
        'React\\Socket\\FdServer' => __DIR__ . '/..' . '/react/socket/src/FdServer.php',
        'React\\Socket\\FixedUriConnector' => __DIR__ . '/..' . '/react/socket/src/FixedUriConnector.php',
        'React\\Socket\\HappyEyeBallsConnectionBuilder' => __DIR__ . '/..' . '/react/socket/src/HappyEyeBallsConnectionBuilder.php',
        'React\\Socket\\HappyEyeBallsConnector' => __DIR__ . '/..' . '/react/socket/src/HappyEyeBallsConnector.php',
        'React\\Socket\\LimitingServer' => __DIR__ . '/..' . '/react/socket/src/LimitingServer.php',
        'React\\Socket\\SecureConnector' => __DIR__ . '/..' . '/react/socket/src/SecureConnector.php',
        'React\\Socket\\SecureServer' => __DIR__ . '/..' . '/react/socket/src/SecureServer.php',
        'React\\Socket\\Server' => __DIR__ . '/..' . '/react/socket/src/Server.php',
        'React\\Socket\\ServerInterface' => __DIR__ . '/..' . '/react/socket/src/ServerInterface.php',
        'React\\Socket\\SocketServer' => __DIR__ . '/..' . '/react/socket/src/SocketServer.php',
        'React\\Socket\\StreamEncryption' => __DIR__ . '/..' . '/react/socket/src/StreamEncryption.php',
        'React\\Socket\\TcpConnector' => __DIR__ . '/..' . '/react/socket/src/TcpConnector.php',
        'React\\Socket\\TcpServer' => __DIR__ . '/..' . '/react/socket/src/TcpServer.php',
        'React\\Socket\\TimeoutConnector' => __DIR__ . '/..' . '/react/socket/src/TimeoutConnector.php',
        'React\\Socket\\UnixConnector' => __DIR__ . '/..' . '/react/socket/src/UnixConnector.php',
        'React\\Socket\\UnixServer' => __DIR__ . '/..' . '/react/socket/src/UnixServer.php',
        'React\\Stream\\CompositeStream' => __DIR__ . '/..' . '/react/stream/src/CompositeStream.php',
        'React\\Stream\\DuplexResourceStream' => __DIR__ . '/..' . '/react/stream/src/DuplexResourceStream.php',
        'React\\Stream\\DuplexStreamInterface' => __DIR__ . '/..' . '/react/stream/src/DuplexStreamInterface.php',
        'React\\Stream\\ReadableResourceStream' => __DIR__ . '/..' . '/react/stream/src/ReadableResourceStream.php',
        'React\\Stream\\ReadableStreamInterface' => __DIR__ . '/..' . '/react/stream/src/ReadableStreamInterface.php',
        'React\\Stream\\ThroughStream' => __DIR__ . '/..' . '/react/stream/src/ThroughStream.php',
        'React\\Stream\\Util' => __DIR__ . '/..' . '/react/stream/src/Util.php',
        'React\\Stream\\WritableResourceStream' => __DIR__ . '/..' . '/react/stream/src/WritableResourceStream.php',
        'React\\Stream\\WritableStreamInterface' => __DIR__ . '/..' . '/react/stream/src/WritableStreamInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1a8f855de6ee0e9399ff4061de515f2f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1a8f855de6ee0e9399ff4061de515f2f::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit1a8f855de6ee0e9399ff4061de515f2f::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit1a8f855de6ee0e9399ff4061de515f2f::$classMap;

        }, null, ClassLoader::class);
    }
}
