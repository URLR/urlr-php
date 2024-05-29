<?php

require_once(__DIR__ . '/vendor/autoload.php');

// Authentification

$authentificationApi = new URLR\Api\AuthentificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authentificationRequest = new \URLR\Model\AuthentificationRequest([
    'username' => '',
    'password' => '',
]); // \URLR\Model\AuthentificationRequest | Your credentials

try {
    $token = $authentificationApi->authentification($authentificationRequest)->getToken();
} catch (Exception $e) {
    echo 'Exception when calling AuthentificationApi->authentification: ', $e->getMessage(), PHP_EOL;
    exit;
}

$config = URLR\Configuration::getDefaultConfiguration()->setAccessToken($token);

// Link shortening

$linkApi = new URLR\Api\LinkApi(null, $config);

$reduceLinkRequest = new \URLR\Model\ReduceLinkRequest([
    'url' => '',
    'team_id' => ''
]); // \URLR\Model\ReduceLinkRequest | Infos of the link to reduce

try {
    $result = $apiInstance->reduceLink($reduceLinkRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkApi->reduceLink: ', $e->getMessage(), PHP_EOL;
}

// Statistics

$apiInstance = new URLR\Api\StatsApi(null, $config);

$statsRequest = new \URLR\Model\StatsRequest([
    'code' => ''
]); // \URLR\Model\StatsRequest | Infos to provide to get statistics of a link

try {
    $result = $apiInstance->stats($statsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->stats: ', $e->getMessage(), PHP_EOL;
}
