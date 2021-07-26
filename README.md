# urlr-php

[![Latest Stable Version](http://poser.pugx.org/urlr/urlr-php/v)](https://packagist.org/packages/urlr/urlr-php) [![Total Downloads](http://poser.pugx.org/urlr/urlr-php/downloads)](https://packagist.org/packages/urlr/urlr-php) [![Latest Unstable Version](http://poser.pugx.org/urlr/urlr-php/v/unstable)](https://packagist.org/packages/urlr/urlr-php) [![License](http://poser.pugx.org/urlr/urlr-php/license)](https://packagist.org/packages/urlr/urlr-php)

PHP library for the [URLR API](https://urlr.stoplight.io/).

## Requirements

PHP 7.3 and later.

## Quick install

You can install the bindings via [Composer](http://getcomposer.org/). Run the following command:

```bash
composer require urlr/urlr-php guzzlehttp/guzzle http-interop/http-factory-guzzle
```

To use the bindings, use Composer's [autoload](https://getcomposer.org/doc/01-basic-usage.md#autoloading):

```php
require_once('vendor/autoload.php');
```

## Getting Started

### Authentication

```php
$urlr = new \URLR\Client();
$urlr->authenticate('username', 'password');
```

### Reduce a link

```php
$response = $urlr->reduceLink([
    'url' => 'https://mydomain.com/?query=param',
    'team' => 11,
    'folder' => 3,
    'code' => 'my_custom_code'
]);
if ($response->code === 200) {
    $code = $response->url_code;
    echo $code;
}
```

### Get statistics of a link

```php
$response = $urlr->getStatistics([
    'code' => 'XXXXX'
]);
if ($response->code === 200) {
    print_r($response);
}
```

## Advanced usage

We are decoupled from any HTTP messaging client with help by [HTTPlug](https://httplug.io).
A list of community provided clients is found here: https://packagist.org/providers/php-http/client-implementation

### Using a different http client

```bash
composer require urlr/urlr-php symfony/http-client nyholm/psr7
```

For example, to set up the URLR client with Symfony HTTP client:

```php
use Symfony\Component\HttpClient\HttplugClient;

$urlr = new \URLR\Client(new HttplugClient());
```

## Support

If you need help with this library, please [contact us on our website](https://urlr.me/contact) and if you find a bug don't hesitate [to create a GitHub issue](https://github.com/URLR/urlr-php/issues).