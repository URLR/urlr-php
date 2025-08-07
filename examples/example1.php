<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once(__DIR__ . '/vendor/autoload.php');

$username = getenv('URLR_API_USERNAME'); // to be defined on your side
$password = getenv('URLR_API_PASSWORD'); // to be defined on your side

// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
$client =  new GuzzleHttp\Client();

$configuration = URLR\Configuration::getDefaultConfiguration();

// Access Tokens

$accessTokensApi = new URLR\Api\AccessTokensApi($client, $configuration);
$createAccessTokensRequest = new \URLR\Model\CreateAccessTokenRequest([
    'username' => $username,
    'password' => $password,
]);

try {
    $token = $accessTokensApi->createAccessToken($createAccessTokensRequest)->getToken();
} catch (Exception $e) {
    echo 'Exception when calling AccessTokensApi->createAccessToken: ', $e->getMessage(), PHP_EOL;
    exit;
}

$configuration->setAccessToken($token);

// Workspaces - get workspace id

$workspacesApi = new URLR\Api\WorkspacesApi($client, $configuration);
try {
    $workspaces = $workspacesApi->getTeams();
    $workspaceId = $workspaces['teams'][0]['id'];
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->createLink: ', $e->getMessage(), PHP_EOL;
}

// Create a link

$linksApi = new URLR\Api\LinksApi($client, $configuration);

$createLinkRequest = new \URLR\Model\CreateLinkRequest([
    'url' => 'https://github.com/URLR',
    'teamId' => $workspaceId,
]);

try {
    $link = $linksApi->createLink($createLinkRequest);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->createLink: ', $e->getMessage(), PHP_EOL;
}

// Get statistics

$statisticsApi = new URLR\Api\StatisticsApi($client, $configuration);

$getStatisticsRequest = new \URLR\Model\GetStatisticsRequest([
    'linkId' => $link['id'],
]);

try {
    $statistics = $statisticsApi->getStatistics($getStatisticsRequest);
    print_r($statistics);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->getStatistics: ', $e->getMessage(), PHP_EOL;
}
