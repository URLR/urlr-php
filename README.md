# URLR@1.0.0

[![Latest Stable Version](http://poser.pugx.org/urlr/urlr-php/v)](https://packagist.org/packages/urlr/urlr-php) [![Total Downloads](http://poser.pugx.org/urlr/urlr-php/downloads)](https://packagist.org/packages/urlr/urlr-php) [![Latest Unstable Version](http://poser.pugx.org/urlr/urlr-php/v/unstable)](https://packagist.org/packages/urlr/urlr-php) [![License](http://poser.pugx.org/urlr/urlr-php/license)](https://packagist.org/packages/urlr/urlr-php)

This SDK is automatically generated with the [OpenAPI Generator](https://openapi-generator.tech) project.

- API version: 0.2
- Package version: 1.0.0
- Build package: urlr/urlr-php

For more information, please visit [https://urlr.me/en](https://urlr.me/en)

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
    'team' => ''
]); // \URLR\Model\ReduceLinkRequest | Infos of the link to reduce

try {
    $result = $apiInstance->reduceLink($reduceLinkRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkApi->reduceLink: ', $e->getMessage(), PHP_EOL;
}
```

A complete example is [available here](examples/example1.php).

## API Endpoints

All URIs are relative to *https://urlr.me/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthentificationApi* | [**authentification**](docs/Api/AuthentificationApi.md#authentification) | **POST** /login_check | Get an access token
*LinkApi* | [**reduceLink**](docs/Api/LinkApi.md#reducelink) | **POST** /reduce-link | Reduce a link
*StatsApi* | [**stats**](docs/Api/StatsApi.md#stats) | **POST** /stats | Get statistics of a link


## Models

- [Authentification200Response](docs/Model/Authentification200Response.md)
- [Authentification401Response](docs/Model/Authentification401Response.md)
- [AuthentificationRequest](docs/Model/AuthentificationRequest.md)
- [ReduceLink200Response](docs/Model/ReduceLink200Response.md)
- [ReduceLink400Response](docs/Model/ReduceLink400Response.md)
- [ReduceLinkRequest](docs/Model/ReduceLinkRequest.md)
- [Stats200Response](docs/Model/Stats200Response.md)
- [Stats400Response](docs/Model/Stats400Response.md)
- [StatsRequest](docs/Model/StatsRequest.md)

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
