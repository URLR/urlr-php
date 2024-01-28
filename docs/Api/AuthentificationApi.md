# URLR\AuthentificationApi

All URIs are relative to https://urlr.me/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**authentification()**](AuthentificationApi.md#authentification) | **POST** /login_check | Get an access token |


## `authentification()`

```php
authentification($authentificationRequest): \URLR\Model\Authentification200Response
```

Get an access token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new URLR\Api\AuthentificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authentificationRequest = new \URLR\Model\AuthentificationRequest(); // \URLR\Model\AuthentificationRequest | Your credentials

try {
    $result = $apiInstance->authentification($authentificationRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthentificationApi->authentification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authentificationRequest** | [**\URLR\Model\AuthentificationRequest**](../Model/AuthentificationRequest.md)| Your credentials | [optional] |

### Return type

[**\URLR\Model\Authentification200Response**](../Model/Authentification200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
