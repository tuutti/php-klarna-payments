# # AttachmentDisplayBodyAirReservationDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pnr** | **string** | Trip booking number, e.g. VH67899 | [optional]
**itinerary** | [**\Klarna\Payments\Model\AttachmentDisplayBodyItinerary[]**](AttachmentDisplayBodyItinerary.md) | Itinerary data, one per segment | [optional]
**insurance** | [**\Klarna\Payments\Model\AttachmentDisplayBodyInsurance[]**](AttachmentDisplayBodyInsurance.md) | Insurance data | [optional]
**passengers** | [**\Klarna\Payments\Model\AttachmentDisplayBodyPassengers[]**](AttachmentDisplayBodyPassengers.md) | Passengers data | [optional]
**affiliate_name** | **string** | Name of the affiliate that originated the purchase. If none, leave blank. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)