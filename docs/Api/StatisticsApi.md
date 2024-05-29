# URLR\StatisticsApi

All URIs are relative to https://urlr.me/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getStatistics()**](StatisticsApi.md#getStatistics) | **POST** /statistics | Get statistics of a link |


## `getStatistics()`

```php
getStatistics($getStatisticsRequest): \URLR\Model\GetStatistics200Response
```

Get statistics of a link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = URLR\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new URLR\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$getStatisticsRequest = new \URLR\Model\GetStatisticsRequest(); // \URLR\Model\GetStatisticsRequest | Infos to provide to get statistics of a link

try {
    $result = $apiInstance->getStatistics($getStatisticsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->getStatistics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **getStatisticsRequest** | [**\URLR\Model\GetStatisticsRequest**](../Model/GetStatisticsRequest.md)| Infos to provide to get statistics of a link | [optional] |

### Return type

[**\URLR\Model\GetStatistics200Response**](../Model/GetStatistics200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
