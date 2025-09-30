# URLR\LinksApi

All URIs are relative to https://urlr.me/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createLink()**](LinksApi.md#createLink) | **POST** /links/create | Create a link |
| [**editLink()**](LinksApi.md#editLink) | **PATCH** /links/{link_id} | Edit a link |
| [**getLink()**](LinksApi.md#getLink) | **GET** /links/{link_id} | Get a link |
| [**listLinks()**](LinksApi.md#listLinks) | **GET** /links | List links |


## `createLink()`

```php
createLink($createLinkRequest): \URLR\Model\Link
```

Create a link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = URLR\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new URLR\Api\LinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createLinkRequest = new \URLR\Model\CreateLinkRequest(); // \URLR\Model\CreateLinkRequest | Info of the link to create

try {
    $result = $apiInstance->createLink($createLinkRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->createLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createLinkRequest** | [**\URLR\Model\CreateLinkRequest**](../Model/CreateLinkRequest.md)| Info of the link to create | [optional] |

### Return type

[**\URLR\Model\Link**](../Model/Link.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `editLink()`

```php
editLink($linkId, $editLinkRequest): \URLR\Model\Link
```

Edit a link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = URLR\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new URLR\Api\LinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$linkId = ffefc6c4-d970-4373-a867-2a69c8be2c89; // string | Link API ID
$editLinkRequest = new \URLR\Model\EditLinkRequest(); // \URLR\Model\EditLinkRequest | Info of the link to edit

try {
    $result = $apiInstance->editLink($linkId, $editLinkRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->editLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **linkId** | **string**| Link API ID | |
| **editLinkRequest** | [**\URLR\Model\EditLinkRequest**](../Model/EditLinkRequest.md)| Info of the link to edit | [optional] |

### Return type

[**\URLR\Model\Link**](../Model/Link.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLink()`

```php
getLink($linkId): \URLR\Model\Link
```

Get a link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = URLR\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new URLR\Api\LinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$linkId = ffefc6c4-d970-4373-a867-2a69c8be2c89; // string | Link API ID

try {
    $result = $apiInstance->getLink($linkId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->getLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **linkId** | **string**| Link API ID | |

### Return type

[**\URLR\Model\Link**](../Model/Link.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLinks()`

```php
listLinks($teamId, $folderId, $tagId, $limit, $page): \URLR\Model\ListLinks200Response
```

List links

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = URLR\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new URLR\Api\LinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$teamId = 'teamId_example'; // string | Filter by Workspace API ID
$folderId = 'folderId_example'; // string | Filter by Folder API ID
$tagId = 'tagId_example'; // string | Filter by Tag API ID
$limit = 10; // int | Number of items per page
$page = 1; // int | Page number

try {
    $result = $apiInstance->listLinks($teamId, $folderId, $tagId, $limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->listLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **teamId** | **string**| Filter by Workspace API ID | [optional] |
| **folderId** | **string**| Filter by Folder API ID | [optional] |
| **tagId** | **string**| Filter by Tag API ID | [optional] |
| **limit** | **int**| Number of items per page | [optional] [default to 10] |
| **page** | **int**| Page number | [optional] [default to 1] |

### Return type

[**\URLR\Model\ListLinks200Response**](../Model/ListLinks200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
