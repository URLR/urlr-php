<?php

require_once(__DIR__ . '/vendor/autoload.php');

// Access tokens

$accessTokensApi = new URLR\Api\AccessTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accessTokensRequest = new \URLR\Model\AccessTokensRequest([
    'username' => '',
    'password' => '',
]); // \URLR\Model\AccessTokensRequest | Your credentials

try {
    $token = $accessTokensApi->createAccessToken($accessTokensRequest)->getToken();
} catch (Exception $e) {
    echo 'Exception when calling AccessTokensApi->createAccessToken: ', $e->getMessage(), PHP_EOL;
    exit;
}

$config = URLR\Configuration::getDefaultConfiguration()->setAccessToken($token);

// Link shortening

$linksApi = new URLR\Api\LinksApi(null, $config);

$createLinkRequest = new \URLR\Model\CreateLinkRequest([
    'url' => '',
    'teamId' => ''
]); // \URLR\Model\CreateLinkRequest | Infos of the link to shorten

try {
    $result = $linksApi->createLink($createLinkRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->createLink: ', $e->getMessage(), PHP_EOL;
}

// Statistics

$statisticsApi = new URLR\Api\StatisticsApi(null, $config);

$statisticsRequest = new \URLR\Model\StatisticsRequest([
    'linkId' => ''
]); // \URLR\Model\StatisticsRequest | Infos to provide to get statistics of a link

try {
    $result = $statisticsApi->getStatistics($statisticsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->getStatistics: ', $e->getMessage(), PHP_EOL;
}
