# URLR\FolderApi

All URIs are relative to https://urlr.me/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**folder()**](FolderApi.md#folder) | **GET** /folder | Get folders of team |


## `folder()`

```php
folder($folderRequest): \URLR\Model\Folder200Response
```

Get folders of team

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = URLR\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new URLR\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folderRequest = new \URLR\Model\FolderRequest(); // \URLR\Model\FolderRequest | Infos to provide to get folders of team

try {
    $result = $apiInstance->folder($folderRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->folder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folderRequest** | [**\URLR\Model\FolderRequest**](../Model/FolderRequest.md)| Infos to provide to get folders of team | [optional] |

### Return type

[**\URLR\Model\Folder200Response**](../Model/Folder200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
