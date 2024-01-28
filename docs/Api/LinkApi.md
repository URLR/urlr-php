# URLR\LinkApi

All URIs are relative to https://urlr.me/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**reduceLink()**](LinkApi.md#reduceLink) | **POST** /reduce-link | Reduce a link |


## `reduceLink()`

```php
reduceLink($reduceLinkRequest): \URLR\Model\ReduceLink200Response
```

Reduce a link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = URLR\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new URLR\Api\LinkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reduceLinkRequest = new \URLR\Model\ReduceLinkRequest(); // \URLR\Model\ReduceLinkRequest | Infos of the link to reduce

try {
    $result = $apiInstance->reduceLink($reduceLinkRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkApi->reduceLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reduceLinkRequest** | [**\URLR\Model\ReduceLinkRequest**](../Model/ReduceLinkRequest.md)| Infos of the link to reduce | [optional] |

### Return type

[**\URLR\Model\ReduceLink200Response**](../Model/ReduceLink200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
