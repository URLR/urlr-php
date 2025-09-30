# # Link

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Link API ID | [optional]
**url** | **string** | Original URL | [optional]
**teamId** | **string** | Workspace API ID | [optional]
**folderId** | **string** | Folder API ID | [optional]
**domain** | **string** | Domain | [optional]
**code** | **string** | Short code | [optional]
**label** | **string** | Label | [optional]
**tags** | [**\URLR\Model\LinkTagsInner[]**](LinkTagsInner.md) | Tags | [optional]
**password** | **string** | Password: \&quot;**********\&quot; means a password exists; null means no password. | [optional]
**qrcode** | [**\URLR\Model\LinkQrcode**](LinkQrcode.md) |  | [optional]
**utm** | [**\URLR\Model\LinkUtm**](LinkUtm.md) |  | [optional]
**metatag** | [**\URLR\Model\LinkMetatag**](LinkMetatag.md) |  | [optional]
**geolinks** | [**\URLR\Model\LinkGeolinksInner[]**](LinkGeolinksInner.md) | Dynamic routing conditions | [optional]
**createdAt** | **\DateTime** | Creation date | [optional]
**updatedAt** | **\DateTime** | Modification date | [optional]
**deleteAt** | **\DateTime** | Scheduled deletion date | [optional]
**expiredAt** | **\DateTime** | Scheduled expiration date | [optional]
**expiredUrl** | **string** | Expiration URL | [optional]
**deleteAfterExpiration** | **bool** | Whether or not to remove the link after the expiry date | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
