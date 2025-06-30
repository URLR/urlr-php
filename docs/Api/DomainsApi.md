# URLR\DomainsApi

All URIs are relative to https://urlr.me/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDomain()**](DomainsApi.md#createDomain) | **POST** /domains/create | Create a domain |


## `createDomain()`

```php
createDomain($createDomainRequest): \URLR\Model\CreateDomain200Response
```

Create a domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new URLR\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$createDomainRequest = new \URLR\Model\CreateDomainRequest(); // \URLR\Model\CreateDomainRequest | You can use this endpoint to add a custom domain to URLR.

try {
    $result = $apiInstance->createDomain($createDomainRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->createDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createDomainRequest** | [**\URLR\Model\CreateDomainRequest**](../Model/CreateDomainRequest.md)| You can use this endpoint to add a custom domain to URLR. | [optional] |

### Return type

[**\URLR\Model\CreateDomain200Response**](../Model/CreateDomain200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
