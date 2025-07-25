# URLR\LinksApi

All URIs are relative to https://urlr.me/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createLink()**](LinksApi.md#createLink) | **POST** /links/create | Create a link |
| [**editLink()**](LinksApi.md#editLink) | **PATCH** /links/{link_id} | Edit a link |
| [**getLink()**](LinksApi.md#getLink) | **GET** /links/{link_id} | Get a link |


## `createLink()`

```php
createLink($linkCreateRequest): \URLR\Model\GetLink200Response
```

Create a link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = URLR\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new URLR\Api\LinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$linkCreateRequest = new \URLR\Model\LinkCreateRequest(); // \URLR\Model\LinkCreateRequest | Info of the link to create

try {
    $result = $apiInstance->createLink($linkCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->createLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **linkCreateRequest** | [**\URLR\Model\LinkCreateRequest**](../Model/LinkCreateRequest.md)| Info of the link to create | [optional] |

### Return type

[**\URLR\Model\GetLink200Response**](../Model/GetLink200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `editLink()`

```php
editLink($linkId, $linkEditRequest): \URLR\Model\GetLink200Response
```

Edit a link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = URLR\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new URLR\Api\LinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$linkId = ffefc6c4-d970-4373-a867-2a69c8be2c89; // string | Link API ID
$linkEditRequest = new \URLR\Model\LinkEditRequest(); // \URLR\Model\LinkEditRequest | Info of the link to edit

try {
    $result = $apiInstance->editLink($linkId, $linkEditRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->editLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **linkId** | **string**| Link API ID | |
| **linkEditRequest** | [**\URLR\Model\LinkEditRequest**](../Model/LinkEditRequest.md)| Info of the link to edit | [optional] |

### Return type

[**\URLR\Model\GetLink200Response**](../Model/GetLink200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLink()`

```php
getLink($linkId): \URLR\Model\GetLink200Response
```

Get a link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = URLR\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new URLR\Api\LinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$linkId = ffefc6c4-d970-4373-a867-2a69c8be2c89; // string | Link API ID

try {
    $result = $apiInstance->getLink($linkId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->getLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **linkId** | **string**| Link API ID | |

### Return type

[**\URLR\Model\GetLink200Response**](../Model/GetLink200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
