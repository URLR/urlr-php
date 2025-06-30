# # GetLink200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Link API ID | [optional]
**url** | **string** | Original URL | [optional]
**teamId** | **string** | Team API ID | [optional]
**folderId** | **string** | Folder API ID | [optional]
**domain** | **string** | Domain | [optional]
**code** | **string** | Short code | [optional]
**label** | **string** | Label | [optional]
**tags** | [**\URLR\Model\GetLink200ResponseTagsInner[]**](GetLink200ResponseTagsInner.md) | Tags | [optional]
**qrcode** | [**\URLR\Model\GetLink200ResponseQrcode**](GetLink200ResponseQrcode.md) |  | [optional]
**utm** | [**\URLR\Model\GetLink200ResponseUtm**](GetLink200ResponseUtm.md) |  | [optional]
**metatag** | [**\URLR\Model\GetLink200ResponseMetatag**](GetLink200ResponseMetatag.md) |  | [optional]
**geolinks** | [**\URLR\Model\GetLink200ResponseGeolinksInner[]**](GetLink200ResponseGeolinksInner.md) | Dynamic routing conditions | [optional]
**createdAt** | **\DateTime** | Creation date | [optional]
**updatedAt** | **\DateTime** | Modification date | [optional]
**deleteAt** | **\DateTime** | Scheduled deletion date | [optional]
**expiredAt** | **\DateTime** | Scheduled expiration date | [optional]
**expiredUrl** | **string** | Expiration URL | [optional]
**deleteAfterExpiration** | **bool** | Whether or not to remove the link after the expiry date | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
