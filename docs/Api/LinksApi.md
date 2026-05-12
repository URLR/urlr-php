# URLR\LinksApi

All URIs are relative to https://urlr.me/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**linkCreate()**](LinksApi.md#linkCreate) | **POST** /links | Create a link |
| [**linkDelete()**](LinksApi.md#linkDelete) | **DELETE** /links/{link_id} | Delete a link |
| [**linkEdit()**](LinksApi.md#linkEdit) | **PATCH** /links/{link_id} | Edit a link |
| [**linkGet()**](LinksApi.md#linkGet) | **GET** /links/{link_id} | Get a link |
| [**linkList()**](LinksApi.md#linkList) | **GET** /links | List links |


## `linkCreate()`

```php
linkCreate($linkCreateRequest): \URLR\Model\Link
```

Create a link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = URLR\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = URLR\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new URLR\Api\LinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$linkCreateRequest = new \URLR\Model\LinkCreateRequest(); // \URLR\Model\LinkCreateRequest | Info of the link to create

try {
    $result = $apiInstance->linkCreate($linkCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->linkCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **linkCreateRequest** | [**\URLR\Model\LinkCreateRequest**](../Model/LinkCreateRequest.md)| Info of the link to create | [optional] |

### Return type

[**\URLR\Model\Link**](../Model/Link.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `linkDelete()`

```php
linkDelete($linkId): \URLR\Model\Link
```

Delete a link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = URLR\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = URLR\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new URLR\Api\LinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$linkId = 'linkId_example'; // string | Link API ID

try {
    $result = $apiInstance->linkDelete($linkId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->linkDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **linkId** | **string**| Link API ID | |

### Return type

[**\URLR\Model\Link**](../Model/Link.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `linkEdit()`

```php
linkEdit($linkId, $linkEditRequest): \URLR\Model\Link
```

Edit a link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = URLR\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = URLR\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new URLR\Api\LinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$linkId = 'linkId_example'; // string | Link API ID
$linkEditRequest = new \URLR\Model\LinkEditRequest(); // \URLR\Model\LinkEditRequest | Info of the link to edit

try {
    $result = $apiInstance->linkEdit($linkId, $linkEditRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->linkEdit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **linkId** | **string**| Link API ID | |
| **linkEditRequest** | [**\URLR\Model\LinkEditRequest**](../Model/LinkEditRequest.md)| Info of the link to edit | [optional] |

### Return type

[**\URLR\Model\Link**](../Model/Link.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `linkGet()`

```php
linkGet($linkId): \URLR\Model\Link
```

Get a link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = URLR\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = URLR\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new URLR\Api\LinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$linkId = 'linkId_example'; // string | Link API ID

try {
    $result = $apiInstance->linkGet($linkId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->linkGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **linkId** | **string**| Link API ID | |

### Return type

[**\URLR\Model\Link**](../Model/Link.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `linkList()`

```php
linkList($workspaceId, $folderId, $tagId, $limit, $page): \URLR\Model\LinkList200Response
```

List links

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = URLR\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = URLR\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new URLR\Api\LinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspaceId = 'workspaceId_example'; // string | Filter by Workspace API ID
$folderId = 'folderId_example'; // string | Filter by Folder API ID
$tagId = 'tagId_example'; // string | Filter by Tag API ID
$limit = 10; // int | Number of items per page
$page = 1; // int | Page number

try {
    $result = $apiInstance->linkList($workspaceId, $folderId, $tagId, $limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->linkList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspaceId** | **string**| Filter by Workspace API ID | [optional] |
| **folderId** | **string**| Filter by Folder API ID | [optional] |
| **tagId** | **string**| Filter by Tag API ID | [optional] |
| **limit** | **int**| Number of items per page | [optional] [default to 10] |
| **page** | **int**| Page number | [optional] [default to 1] |

### Return type

[**\URLR\Model\LinkList200Response**](../Model/LinkList200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
