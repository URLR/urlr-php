# Link

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Link API ID | [optional]
**url** | **string** | Original URL | [optional]
**workspaceId** | **string** | Workspace API ID | [optional]
**folderId** | **string** | Folder API ID | [optional]
**user** | **string** | User | [optional]
**domain** | **string** | Domain | [optional]
**code** | **string** | Short code | [optional]
**label** | **string** | Label | [optional]
**password** | **string** | Password: \&quot;**********\&quot; means a password exists; null means no password. | [optional]
**createdAt** | **\DateTime** | Creation date | [optional]
**updatedAt** | **\DateTime** | Modification date | [optional]
**deleteAt** | **\DateTime** | Scheduled deletion date | [optional]
**expiredAt** | **\DateTime** | Scheduled expiration date | [optional]
**expiredUrl** | **string** | The URL to which users will be redirected after the link has expired | [optional]
**expiredTitle** | **string** | The title displayed on the expiration page | [optional]
**expiredText** | **string** | The text displayed on the expiration page | [optional]
**deleteAfterExpiration** | **bool** | Whether the link should be deleted once it has expired | [optional] [default to false]
**tags** | [**\URLR\Model\LinkTagsInner[]**](LinkTagsInner.md) | Tags | [optional]
**qrcode** | [**\URLR\Model\LinkQrcode**](LinkQrcode.md) |  | [optional]
**utm** | [**\URLR\Model\LinkUtm**](LinkUtm.md) |  | [optional]
**metatag** | [**\URLR\Model\LinkMetatag**](LinkMetatag.md) |  | [optional]
**geolinks** | [**\URLR\Model\LinkGeolinksInner[]**](LinkGeolinksInner.md) | Dynamic routing conditions | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
