# URLR\DomainsApi

All URIs are relative to https://urlr.me/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**domainCreate()**](DomainsApi.md#domainCreate) | **POST** /domains | Create a domain |
| [**domainGet()**](DomainsApi.md#domainGet) | **GET** /domains/{domain_id} | Get a domain |
| [**domainList()**](DomainsApi.md#domainList) | **GET** /domains | List domains |


## `domainCreate()`

```php
domainCreate($domainCreateRequest): \URLR\Model\Domain
```

Create a domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = URLR\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = URLR\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new URLR\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domainCreateRequest = new \URLR\Model\DomainCreateRequest(); // \URLR\Model\DomainCreateRequest | You can use this endpoint to add a custom domain to URLR.

try {
    $result = $apiInstance->domainCreate($domainCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domainCreateRequest** | [**\URLR\Model\DomainCreateRequest**](../Model/DomainCreateRequest.md)| You can use this endpoint to add a custom domain to URLR. | [optional] |

### Return type

[**\URLR\Model\Domain**](../Model/Domain.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainGet()`

```php
domainGet($domainId): \URLR\Model\Domain
```

Get a domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = URLR\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = URLR\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new URLR\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domainId = 'domainId_example'; // string | Domain API ID

try {
    $result = $apiInstance->domainGet($domainId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domainId** | **string**| Domain API ID | |

### Return type

[**\URLR\Model\Domain**](../Model/Domain.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainList()`

```php
domainList(): \URLR\Model\DomainList200Response
```

List domains

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = URLR\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = URLR\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new URLR\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->domainList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\URLR\Model\DomainList200Response**](../Model/DomainList200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
