# # CreateLinkRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | URL to shorten |
**teamId** | **string** | Team API ID |
**folderId** | **string** | Folder API ID | [optional]
**domain** | **string** | Domain | [optional]
**code** | **string** | Custom short code | [optional]
**label** | **string** | Label | [optional]
**** | **string[]** | Tags | [optional]
**password** | **string** | Password | [optional]
**qrcode** | [**\URLR\Model\CreateLinkRequestQrcode**](CreateLinkRequestQrcode.md) |  | [optional]
**utm** | [**\URLR\Model\GetLink200ResponseUtm**](GetLink200ResponseUtm.md) |  | [optional]
**metatag** | [**\URLR\Model\CreateLinkRequestMetatag**](CreateLinkRequestMetatag.md) |  | [optional]
**deleteAt** | **\DateTime** | Scheduled deletion date | [optional]
**expiredAt** | **\DateTime** | Scheduled expiration date | [optional]
**expiredUrl** | **string** | Expiration URL | [optional]
**deleteAfterExpiration** | **bool** | Whether or not to remove the link after the expiry date | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
