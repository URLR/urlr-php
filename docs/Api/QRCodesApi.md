# URLR\QRCodesApi

All URIs are relative to https://urlr.me/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createQrCode()**](QRCodesApi.md#createQrCode) | **POST** /qrcodes/create | Create a QR Code |


## `createQrCode()`

```php
createQrCode($createQrCodeRequest): \SplFileObject
```

Create a QR Code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = URLR\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new URLR\Api\QRCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createQrCodeRequest = new \URLR\Model\CreateQrCodeRequest(); // \URLR\Model\CreateQrCodeRequest | Info of the QR Code to create

try {
    $result = $apiInstance->createQrCode($createQrCodeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QRCodesApi->createQrCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createQrCodeRequest** | [**\URLR\Model\CreateQrCodeRequest**](../Model/CreateQrCodeRequest.md)| Info of the QR Code to create | [optional] |

### Return type

**\SplFileObject**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `image/png`, `image/webp`, `image/svg+xml`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
