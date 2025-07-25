# URLR@2.10.0

![Packagist Version](https://img.shields.io/packagist/v/urlr/urlr-php) ![Packagist Downloads](https://img.shields.io/packagist/dm/urlr/urlr-php) ![Packagist License](https://img.shields.io/packagist/l/urlr/urlr-php)

This SDK is automatically generated with the [OpenAPI Generator](https://openapi-generator.tech) project.

- API version: 1.10
- Package version: 2.10.0
- Build package: urlr/urlr-php

For more information, please visit [https://urlr.me/en](https://urlr.me/en).

## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

You can install the bindings via [Composer](http://getcomposer.org/). Run the following command:

```bash
composer require urlr/urlr-php
```

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/URLR/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php

require_once(__DIR__ . '/vendor/autoload.php');

// Access Tokens

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
    $result = $apiInstance->createLink($createLinkRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->createLink: ', $e->getMessage(), PHP_EOL;
}
```

A complete example is [available here](examples/example1.php).

## API Endpoints

All URIs are relative to *https://urlr.me/api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccessTokensApi* | [**createAccessToken**](docs/Api/AccessTokensApi.md#createaccesstoken) | **POST** /access_tokens/create | Get an access token
*AccessTokensApi* | [**refreshAccessToken**](docs/Api/AccessTokensApi.md#refreshaccesstoken) | **POST** /access_tokens/refresh | Refresh an access token
*DomainsApi* | [**createDomain**](docs/Api/DomainsApi.md#createdomain) | **POST** /domains/create | Create a domain
*FoldersApi* | [**getFolders**](docs/Api/FoldersApi.md#getfolders) | **GET** /folders/{team_id} | Get folders of workspace
*LinksApi* | [**createLink**](docs/Api/LinksApi.md#createlink) | **POST** /links/create | Create a link
*LinksApi* | [**editLink**](docs/Api/LinksApi.md#editlink) | **PATCH** /links/{link_id} | Edit a link
*LinksApi* | [**getLink**](docs/Api/LinksApi.md#getlink) | **GET** /links/{link_id} | Get a link
*QRCodesApi* | [**createQrCode**](docs/Api/QRCodesApi.md#createqrcode) | **POST** /qrcodes/create | Create a QR Code
*StatisticsApi* | [**getStatistics**](docs/Api/StatisticsApi.md#getstatistics) | **POST** /statistics | Get statistics of a link
*WorkspacesApi* | [**getTeams**](docs/Api/WorkspacesApi.md#getteams) | **GET** /teams | Get workspaces of user


## Models

- [CreateAccessToken200Response](docs/Model/CreateAccessToken200Response.md)
- [CreateAccessToken401Response](docs/Model/CreateAccessToken401Response.md)
- [CreateAccessTokenRequest](docs/Model/CreateAccessTokenRequest.md)
- [CreateDomain200Response](docs/Model/CreateDomain200Response.md)
- [CreateDomain409Response](docs/Model/CreateDomain409Response.md)
- [CreateDomainRequest](docs/Model/CreateDomainRequest.md)
- [CreateLink429Response](docs/Model/CreateLink429Response.md)
- [CreateQrCodeRequest](docs/Model/CreateQrCodeRequest.md)
- [CreateQrCodeRequestOneOf](docs/Model/CreateQrCodeRequestOneOf.md)
- [CreateQrCodeRequestOneOf1](docs/Model/CreateQrCodeRequestOneOf1.md)
- [EditLink500Response](docs/Model/EditLink500Response.md)
- [GetFolders200Response](docs/Model/GetFolders200Response.md)
- [GetFolders200ResponseFoldersInner](docs/Model/GetFolders200ResponseFoldersInner.md)
- [GetLink200Response](docs/Model/GetLink200Response.md)
- [GetLink200ResponseGeolinksInner](docs/Model/GetLink200ResponseGeolinksInner.md)
- [GetLink200ResponseGeolinksInnerConditionsInner](docs/Model/GetLink200ResponseGeolinksInnerConditionsInner.md)
- [GetLink200ResponseMetatag](docs/Model/GetLink200ResponseMetatag.md)
- [GetLink200ResponseQrcode](docs/Model/GetLink200ResponseQrcode.md)
- [GetLink200ResponseTagsInner](docs/Model/GetLink200ResponseTagsInner.md)
- [GetLink200ResponseUtm](docs/Model/GetLink200ResponseUtm.md)
- [GetLink401Response](docs/Model/GetLink401Response.md)
- [GetLink404Response](docs/Model/GetLink404Response.md)
- [GetLink422Response](docs/Model/GetLink422Response.md)
- [GetStatistics200Response](docs/Model/GetStatistics200Response.md)
- [GetStatisticsRequest](docs/Model/GetStatisticsRequest.md)
- [GetTeams200Response](docs/Model/GetTeams200Response.md)
- [GetTeams200ResponseTeamsInner](docs/Model/GetTeams200ResponseTeamsInner.md)
- [LinkBaseRequest](docs/Model/LinkBaseRequest.md)
- [LinkBaseRequestMetatag](docs/Model/LinkBaseRequestMetatag.md)
- [LinkBaseRequestQrcode](docs/Model/LinkBaseRequestQrcode.md)
- [LinkCreateRequest](docs/Model/LinkCreateRequest.md)
- [LinkEditRequest](docs/Model/LinkEditRequest.md)
- [RefreshAccessToken401Response](docs/Model/RefreshAccessToken401Response.md)
- [RefreshAccessTokenRequest](docs/Model/RefreshAccessTokenRequest.md)

## Authorization


### bearerAuth

- **Type**: Bearer authentication (JWT)


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Get help / support

Please contact [contact@urlr.me](mailto:contact@urlr.me?subject=[GitHub]%urlr-php) and we can take more direct action toward finding a solution.
