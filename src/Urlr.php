<?php

namespace URLR;

use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;

final class Urlr
{
    public const VERSION = '0.1';

    public const BASE_URL = 'https://urlr.me/api/';

    /**
     * @var ClientInterface
     */
    private static $httpClient;

    /**
     * @var RequestFactoryInterface
     */
    private static $requestFactory;

    /**
     * @var StreamFactoryInterface
     */
    private static $streamFactory;

    public static function getHttpClient(): ClientInterface
    {
        return self::$httpClient;
    }

    public static function setHttpClient(?ClientInterface $httpClient): void
    {
        self::$httpClient = $httpClient ?: Psr18ClientDiscovery::find();
    }

    public static function getRequestFactory(): RequestFactoryInterface
    {
        return self::$requestFactory;
    }

    public static function setRequestFactory(): void
    {
        self::$requestFactory = Psr17FactoryDiscovery::findRequestFactory();
    }

    public static function getStreamFactory(): StreamFactoryInterface
    {
        return self::$streamFactory;
    }

    public static function setStreamFactory(): void
    {
        self::$streamFactory = Psr17FactoryDiscovery::findStreamFactory();
    }
}
