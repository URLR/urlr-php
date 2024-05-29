# URLR\AccessTokensApi

All URIs are relative to https://urlr.me/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAccessToken()**](AccessTokensApi.md#createAccessToken) | **POST** /access_tokens/create | Get an access token |
| [**refreshAccessToken()**](AccessTokensApi.md#refreshAccessToken) | **POST** /access_tokens/refresh | Refresh an access token |


## `createAccessToken()`

```php
createAccessToken($createAccessTokenRequest): \URLR\Model\CreateAccessToken200Response
```

Get an access token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new URLR\Api\AccessTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$createAccessTokenRequest = new \URLR\Model\CreateAccessTokenRequest(); // \URLR\Model\CreateAccessTokenRequest | You can use this endpoint to get an access token to access the API.

try {
    $result = $apiInstance->createAccessToken($createAccessTokenRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessTokensApi->createAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createAccessTokenRequest** | [**\URLR\Model\CreateAccessTokenRequest**](../Model/CreateAccessTokenRequest.md)| You can use this endpoint to get an access token to access the API. | [optional] |

### Return type

[**\URLR\Model\CreateAccessToken200Response**](../Model/CreateAccessToken200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refreshAccessToken()`

```php
refreshAccessToken($refreshAccessTokenRequest): \URLR\Model\CreateAccessToken200Response
```

Refresh an access token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new URLR\Api\AccessTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$refreshAccessTokenRequest = new \URLR\Model\RefreshAccessTokenRequest(); // \URLR\Model\RefreshAccessTokenRequest | You can use this endpoint to refresh your access token without credentials.

try {
    $result = $apiInstance->refreshAccessToken($refreshAccessTokenRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessTokensApi->refreshAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **refreshAccessTokenRequest** | [**\URLR\Model\RefreshAccessTokenRequest**](../Model/RefreshAccessTokenRequest.md)| You can use this endpoint to refresh your access token without credentials. | [optional] |

### Return type

[**\URLR\Model\CreateAccessToken200Response**](../Model/CreateAccessToken200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
