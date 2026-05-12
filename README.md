# URLR@3.0.0

![Packagist Version](https://img.shields.io/packagist/v/urlr/urlr-php) ![Packagist Downloads](https://img.shields.io/packagist/dm/urlr/urlr-php) ![Packagist License](https://img.shields.io/packagist/l/urlr/urlr-php)

This SDK is automatically generated with the [OpenAPI Generator](https://openapi-generator.tech) project.

- API version: 2.0.0
- Package version: 3.0.0
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

// Create a link

$linksApi = new URLR\Api\LinksApi($client, $configuration);

$createLinkRequest = new \URLR\Model\CreateLinkRequest([
    'url' => '',
    'teamId' => '',
]);

try {
    $link = $linksApi->createLink($createLinkRequest);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->createLink: ', $e->getMessage(), PHP_EOL;
}
```

A complete example is [available here](examples/example1.php).

## API Endpoints

All URIs are relative to *https://urlr.me/api/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DomainsApi* | [**domainCreate**](docs/Api/DomainsApi.md#domaincreate) | **POST** /domains | Create a domain
*DomainsApi* | [**domainGet**](docs/Api/DomainsApi.md#domainget) | **GET** /domains/{domain_id} | Get a domain
*DomainsApi* | [**domainList**](docs/Api/DomainsApi.md#domainlist) | **GET** /domains | List domains
*FoldersApi* | [**folderCreate**](docs/Api/FoldersApi.md#foldercreate) | **POST** /folders | Create a folder
*FoldersApi* | [**folderGet**](docs/Api/FoldersApi.md#folderget) | **GET** /folders/{folder_id} | Get a folder
*FoldersApi* | [**folderList**](docs/Api/FoldersApi.md#folderlist) | **GET** /folders | List folders
*LinksApi* | [**linkCreate**](docs/Api/LinksApi.md#linkcreate) | **POST** /links | Create a link
*LinksApi* | [**linkDelete**](docs/Api/LinksApi.md#linkdelete) | **DELETE** /links/{link_id} | Delete a link
*LinksApi* | [**linkEdit**](docs/Api/LinksApi.md#linkedit) | **PATCH** /links/{link_id} | Edit a link
*LinksApi* | [**linkGet**](docs/Api/LinksApi.md#linkget) | **GET** /links/{link_id} | Get a link
*LinksApi* | [**linkList**](docs/Api/LinksApi.md#linklist) | **GET** /links | List links
*QRCodesApi* | [**qrcodeCreate**](docs/Api/QRCodesApi.md#qrcodecreate) | **POST** /qrcodes | Create a QR Code
*StatisticsApi* | [**statisticGet**](docs/Api/StatisticsApi.md#statisticget) | **GET** /statistics | Get statistics
*WorkspacesApi* | [**workspaceGet**](docs/Api/WorkspacesApi.md#workspaceget) | **GET** /workspaces/{workspace_id} | Get a workspace
*WorkspacesApi* | [**workspaceList**](docs/Api/WorkspacesApi.md#workspacelist) | **GET** /workspaces | List workspaces of user


## Models

- [Domain](docs/Model/Domain.md)
- [DomainCreate409Response](docs/Model/DomainCreate409Response.md)
- [DomainCreate429Response](docs/Model/DomainCreate429Response.md)
- [DomainCreateRequest](docs/Model/DomainCreateRequest.md)
- [DomainGet401Response](docs/Model/DomainGet401Response.md)
- [DomainGet404Response](docs/Model/DomainGet404Response.md)
- [DomainGet422Response](docs/Model/DomainGet422Response.md)
- [DomainList200Response](docs/Model/DomainList200Response.md)
- [Folder](docs/Model/Folder.md)
- [FolderCreateRequest](docs/Model/FolderCreateRequest.md)
- [FolderList200Response](docs/Model/FolderList200Response.md)
- [Link](docs/Model/Link.md)
- [LinkBaseRequest](docs/Model/LinkBaseRequest.md)
- [LinkBaseRequestMetatag](docs/Model/LinkBaseRequestMetatag.md)
- [LinkBaseRequestQrcode](docs/Model/LinkBaseRequestQrcode.md)
- [LinkCreateRequest](docs/Model/LinkCreateRequest.md)
- [LinkDelete500Response](docs/Model/LinkDelete500Response.md)
- [LinkEditRequest](docs/Model/LinkEditRequest.md)
- [LinkGeolinksInner](docs/Model/LinkGeolinksInner.md)
- [LinkGeolinksInnerConditionsInner](docs/Model/LinkGeolinksInnerConditionsInner.md)
- [LinkList200Response](docs/Model/LinkList200Response.md)
- [LinkMetatag](docs/Model/LinkMetatag.md)
- [LinkQrcode](docs/Model/LinkQrcode.md)
- [LinkTagsInner](docs/Model/LinkTagsInner.md)
- [LinkUtm](docs/Model/LinkUtm.md)
- [QrcodeCreateRequest](docs/Model/QrcodeCreateRequest.md)
- [QrcodeCreateRequestOneOf](docs/Model/QrcodeCreateRequestOneOf.md)
- [QrcodeCreateRequestOneOf1](docs/Model/QrcodeCreateRequestOneOf1.md)
- [StatisticGet200Response](docs/Model/StatisticGet200Response.md)
- [Workspace](docs/Model/Workspace.md)
- [WorkspaceList200Response](docs/Model/WorkspaceList200Response.md)

## Authorization


### ApiKeyAuth

- **Type**: API key
- **API key parameter name**: X-API-KEY
- **Location**: HTTP header



## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Get help / support

Please contact [contact@urlr.me](mailto:contact@urlr.me?subject=[GitHub]%urlr-php) and we can take more direct action toward finding a solution.
