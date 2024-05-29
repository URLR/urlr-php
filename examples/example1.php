<?php

require_once(__DIR__ . '/vendor/autoload.php');

// Acc

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
    $token = $accessTokensApi->create_access_token($accessTokensRequest)->getToken();
} catch (Exception $e) {
    echo 'Exception when calling AccessTokensApi->create_access_token: ', $e->getMessage(), PHP_EOL;
    exit;
}

$config = URLR\Configuration::getDefaultConfiguration()->setAccessToken($token);

// Link shortening

$linksApi = new URLR\Api\LinksApi(null, $config);

$createLinkRequest = new \URLR\Model\CreateLinkRequest([
    'url' => '',
    'team_id' => ''
]); // \URLR\Model\CreateLinkRequest | Infos of the link to shorten

try {
    $result = $apiInstance->createLink($createLinkRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->createLink: ', $e->getMessage(), PHP_EOL;
}

// Statistics

$apiInstance = new URLR\Api\StatisticsApi(null, $config);

$statisticsRequest = new \URLR\Model\StatisticsRequest([
    'link_id' => ''
]); // \URLR\Model\StatisticsRequest | Infos to provide to get statistics of a link

try {
    $result = $apiInstance->statistics($statisticsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->statistics: ', $e->getMessage(), PHP_EOL;
}
