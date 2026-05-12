# URLR\StatisticsApi

All URIs are relative to https://urlr.me/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**statisticGet()**](StatisticsApi.md#statisticGet) | **GET** /statistics | Get statistics |


## `statisticGet()`

```php
statisticGet($linkId, $from, $to): \URLR\Model\StatisticGet200Response
```

Get statistics

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = URLR\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = URLR\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new URLR\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$linkId = 'linkId_example'; // string | Link API ID
$from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Get statistics from this date
$to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Get statistics until this date

try {
    $result = $apiInstance->statisticGet($linkId, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->statisticGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **linkId** | **string**| Link API ID | |
| **from** | **\DateTime**| Get statistics from this date | [optional] |
| **to** | **\DateTime**| Get statistics until this date | [optional] |

### Return type

[**\URLR\Model\StatisticGet200Response**](../Model/StatisticGet200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
