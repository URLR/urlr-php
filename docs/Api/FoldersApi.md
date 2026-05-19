# URLR\FoldersApi

All URIs are relative to https://urlr.me/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**folderCreate()**](FoldersApi.md#folderCreate) | **POST** /folders | Create a folder |
| [**folderGet()**](FoldersApi.md#folderGet) | **GET** /folders/{folder_id} | Get a folder |
| [**folderList()**](FoldersApi.md#folderList) | **GET** /folders | List folders |


## `folderCreate()`

```php
folderCreate($folderCreateRequest): \URLR\Model\Folder
```

Create a folder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = URLR\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = URLR\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new URLR\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folderCreateRequest = new \URLR\Model\FolderCreateRequest(); // \URLR\Model\FolderCreateRequest | You can use this endpoint to add a folder to URLR.

try {
    $result = $apiInstance->folderCreate($folderCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->folderCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folderCreateRequest** | [**\URLR\Model\FolderCreateRequest**](../Model/FolderCreateRequest.md)| You can use this endpoint to add a folder to URLR. | [optional] |

### Return type

[**\URLR\Model\Folder**](../Model/Folder.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `folderGet()`

```php
folderGet($folderId): \URLR\Model\Folder
```

Get a folder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = URLR\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = URLR\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new URLR\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folderId = 'folderId_example'; // string | Folder API ID

try {
    $result = $apiInstance->folderGet($folderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->folderGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folderId** | **string**| Folder API ID | |

### Return type

[**\URLR\Model\Folder**](../Model/Folder.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `folderList()`

```php
folderList(): \URLR\Model\FolderList200Response
```

List folders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = URLR\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = URLR\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new URLR\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->folderList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->folderList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\URLR\Model\FolderList200Response**](../Model/FolderList200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
