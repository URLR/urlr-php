<?php

namespace URLR;

use Http\Client\HttpClient;
use Http\Message\MessageFactory;
use Http\Discovery\HttpClientDiscovery;
use Http\Discovery\MessageFactoryDiscovery;

final class Urlr
{
    public const VERSION = '0.1';

    public const BASE_URL = 'https://urlr.me/api/';

    /**
     * @var HttpClient
     */
    private static $httpClient;

    /**
     * @var MessageFactory
     */
    private static $messageFactory;

    public static function getHttpClient(): HttpClient
    {
        return self::$httpClient;
    }

    public static function setHttpClient(?HttpClient $httpClient): void
    {
        self::$httpClient = $httpClient ?: HttpClientDiscovery::find();
    }

    public static function getMessageFactory(): MessageFactory
    {
        return self::$messageFactory;
    }

    public static function setMessageFactory(): void
    {
        self::$messageFactory = MessageFactoryDiscovery::find();
    }
}
