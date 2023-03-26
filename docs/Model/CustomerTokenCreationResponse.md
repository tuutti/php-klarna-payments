# # CustomerTokenCreationResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billing_address** | [**\Klarna\Payments\Model\Address**](Address.md) |  | [optional]
**customer** | [**\Klarna\Payments\Model\CustomerReadCreateToken**](CustomerReadCreateToken.md) |  | [optional]
**payment_method_reference** | **string** | Used to connect customers with payment method when it is present. | [optional]
**redirect_url** | **string** | URL to redirect the customer to after placing the order. This is a Klarna URL where Klarna will place a cookie in the customer’s browser (if redirected) and redirect the customer back to the confirmation URL provided by the merchant. This is not a mandatory step but a recommended one to improve the returning customer’s experience. | [optional]
**token_id** | **string** | Generated customer token. This token will be used to create a new order for the subscription using the Create a New order using token API. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
