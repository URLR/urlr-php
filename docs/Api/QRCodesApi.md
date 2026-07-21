# URLR\QRCodesApi

All URIs are relative to https://urlr.me/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**qrcodeCreate()**](QRCodesApi.md#qrcodeCreate) | **POST** /qrcodes | Create a QR Code |


## `qrcodeCreate()`

```php
qrcodeCreate($qrcodeCreateRequest): \SplFileObject
```

Create a QR Code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = URLR\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = URLR\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new URLR\Api\QRCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$qrcodeCreateRequest = new \URLR\Model\QrcodeCreateRequestOneOf(); // \URLR\Model\QrcodeCreateRequest | Info of the QR Code to create

try {
    $result = $apiInstance->qrcodeCreate($qrcodeCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QRCodesApi->qrcodeCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **qrcodeCreateRequest** | [**\URLR\Model\QrcodeCreateRequest**](../Model/QrcodeCreateRequest.md)| Info of the QR Code to create | [optional] |

### Return type

**\SplFileObject**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `image/png`, `image/webp`, `image/svg+xml`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
