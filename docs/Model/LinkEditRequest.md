# LinkEditRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | URL to shorten | [optional]
**folderId** | **string** | Folder API ID | [optional]
**domain** | **string** | Domain | [optional]
**code** | **string** | Custom short code | [optional]
**label** | **string** | Label | [optional]
**password** | **string** | Password | [optional]
**deleteAt** | **\DateTime** | Scheduled deletion date | [optional]
**expiredAt** | **\DateTime** | Scheduled expiration date | [optional]
**expiredUrl** | **string** | The URL to which users will be redirected after the link has expired | [optional]
**expiredTitle** | **string** | The title displayed on the expiration page | [optional]
**expiredText** | **string** | The text displayed on the expiration page | [optional]
**deleteAfterExpiration** | **bool** | Whether the link should be deleted once it has expired | [optional] [default to false]
**tags** | **string[]** | Tags | [optional]
**qrcode** | [**\URLR\Model\LinkBaseRequestQrcode**](LinkBaseRequestQrcode.md) |  | [optional]
**utm** | [**\URLR\Model\LinkUtm**](LinkUtm.md) |  | [optional]
**metatag** | [**\URLR\Model\LinkBaseRequestMetatag**](LinkBaseRequestMetatag.md) |  | [optional]
**geolinks** | [**\URLR\Model\LinkGeolinksInner[]**](LinkGeolinksInner.md) | Dynamic routing conditions | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
