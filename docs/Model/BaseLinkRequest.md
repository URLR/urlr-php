# # BaseLinkRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | URL to shorten | [optional]
**folderId** | **string** | Folder API ID | [optional]
**domain** | **string** | Domain | [optional]
**code** | **string** | Custom short code | [optional]
**label** | **string** | Label | [optional]
**tags** | **string[]** | Tags | [optional]
**password** | **string** | Password | [optional]
**qrcode** | [**\URLR\Model\BaseLinkRequestQrcode**](BaseLinkRequestQrcode.md) |  | [optional]
**utm** | [**\URLR\Model\GetLink200ResponseUtm**](GetLink200ResponseUtm.md) |  | [optional]
**metatag** | [**\URLR\Model\BaseLinkRequestMetatag**](BaseLinkRequestMetatag.md) |  | [optional]
**geolinks** | [**\URLR\Model\GetLink200ResponseGeolinksInner[]**](GetLink200ResponseGeolinksInner.md) | Dynamic routing conditions | [optional]
**deleteAt** | **\DateTime** | Scheduled deletion date | [optional]
**expiredAt** | **\DateTime** | Scheduled expiration date | [optional]
**expiredUrl** | **string** | Expiration URL | [optional]
**deleteAfterExpiration** | **bool** | Whether or not to remove the link after the expiry date | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
