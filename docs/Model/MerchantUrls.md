# # MerchantUrls

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**confirmation** | **string** | URL of the merchant confirmation page. The consumer will be redirected back to the confirmation page if the consumer is sent to the redirect URL after placing the order. Insert {session.id} and/or {order.id} as placeholder to connect either of those IDs to the URL(max 2000 characters). | [optional]
**notification** | **string** | URL for notifications on pending orders. Insert {session.id} and/or {order.id} as placeholder to connect either of those IDs to the URL (max 2000 characters). | [optional]
**push** | **string** | URL that will be requested when an order is completed. Should be different than checkout and confirmation URLs. Insert {session.id} and/or {order.id} as placeholder to connect either of those IDs to the URL (max 2000 characters). | [optional]
**authorization** | **string** | URL for receiving the authorization token when payment is completed. Used for Authorization Callback. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
