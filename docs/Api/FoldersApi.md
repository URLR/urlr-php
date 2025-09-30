# URLR\FoldersApi

All URIs are relative to https://urlr.me/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createFolder()**](FoldersApi.md#createFolder) | **POST** /folders/create | Create a folder |
| [**getFolders()**](FoldersApi.md#getFolders) | **GET** /folders/{team_id} | Get folders of workspace |


## `createFolder()`

```php
createFolder($createFolderRequest): \URLR\Model\CreateFolder200Response
```

Create a folder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new URLR\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$createFolderRequest = new \URLR\Model\CreateFolderRequest(); // \URLR\Model\CreateFolderRequest | You can use this endpoint to add a folder to URLR.

try {
    $result = $apiInstance->createFolder($createFolderRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->createFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createFolderRequest** | [**\URLR\Model\CreateFolderRequest**](../Model/CreateFolderRequest.md)| You can use this endpoint to add a folder to URLR. | [optional] |

### Return type

[**\URLR\Model\CreateFolder200Response**](../Model/CreateFolder200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFolders()`

```php
getFolders($teamId): \URLR\Model\GetFolders200Response
```

Get folders of workspace

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = URLR\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new URLR\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$teamId = ffefc6c4-d970-4373-a867-2a69c8be2c89; // string | Workspace API ID

try {
    $result = $apiInstance->getFolders($teamId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->getFolders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **teamId** | **string**| Workspace API ID | |

### Return type

[**\URLR\Model\GetFolders200Response**](../Model/GetFolders200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
