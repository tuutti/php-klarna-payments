# # Order

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**authorized_payment_method** | [**\Klarna\Payments\Model\AuthorizedPaymentMethod**](AuthorizedPaymentMethod.md) |  | [optional]
**fraud_status** | **string** | Fraud status for the order. Either ACCEPTED or PENDING. If ACCEPTED, the order could be captured. If PENDING, please wait till you receive the notification from Klarna in the notification URL that the order has been approved. You can find additional information here. | [optional]
**order_id** | **string** | Unique order ID of the transaction. This ID will be used for all order management processes. |
**redirect_url** | **string** | URL to redirect the customer to after placing the order. This is a Klarna URL to which the merchant should redirect the customer to. Klarna will place a cookie in the customer’s browser (if redirected) and redirect the customer back to the confirmation URL provided by the merchant. This is not a mandatory step but a recommended one to improve the returning customer’s experience. It is a spontaneous step and does not harm the customer’s experience. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
