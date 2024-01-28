# URLR\StatsApi

All URIs are relative to https://urlr.me/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**stats()**](StatsApi.md#stats) | **POST** /stats | Get statistics of a link |


## `stats()`

```php
stats($statsRequest): \URLR\Model\Stats200Response
```

Get statistics of a link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = URLR\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new URLR\Api\StatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$statsRequest = new \URLR\Model\StatsRequest(); // \URLR\Model\StatsRequest | Infos to provide to get statistics of a link

try {
    $result = $apiInstance->stats($statsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->stats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **statsRequest** | [**\URLR\Model\StatsRequest**](../Model/StatsRequest.md)| Infos to provide to get statistics of a link | [optional] |

### Return type

[**\URLR\Model\Stats200Response**](../Model/Stats200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
