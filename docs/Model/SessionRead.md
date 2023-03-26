# # SessionRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**acquiring_channel** | **string** | The acquiring channel in which the session takes place. Ecommerce is default unless specified. Any other values should be defined in the agreement. | [optional]
**attachment** | [**\Klarna\Payments\Model\Attachment**](Attachment.md) |  | [optional]
**authorization_token** | **string** | Authorization token. | [optional] [readonly]
**billing_address** | [**\Klarna\Payments\Model\Address**](Address.md) |  | [optional]
**client_token** | **string** | Token to be passed to the JS client | [optional] [readonly]
**custom_payment_method_ids** | **string[]** | Promo codes - The array could be used to define which of the configured payment options within a payment category (pay_later, pay_over_time, etc.) should be shown for this purchase. Discuss with the delivery manager to know about the promo codes that will be configured for your account. The feature could also be used to provide promotional offers to specific customers (eg: 0% financing). Please be informed that the usage of this feature can have commercial implications. | [optional]
**customer** | [**\Klarna\Payments\Model\CustomerRead**](CustomerRead.md) |  | [optional]
**design** | **string** | Design package to use in the session. This can only by used if a custom design has been implemented for Klarna Payments and agreed upon in the agreement. It might have a financial impact. Delivery manager will provide the value for the parameter. | [optional]
**expires_at** | **\DateTime** | Session expiration date | [optional] [readonly]
**locale** | **string** | Used to define the language and region of the customer. The locale follows the format of (RFC 1766)[https://datatracker.ietf.org/doc/rfc1766/], meaning its value consists of language-country. The following values are applicable:  AT: \&quot;de-AT\&quot;, \&quot;de-DE\&quot;, \&quot;en-DE\&quot; BE: \&quot;be-BE\&quot;, \&quot;nl-BE\&quot;, \&quot;fr-BE\&quot;, \&quot;en-BE\&quot; CH: \&quot;it-CH\&quot;, \&quot;de-CH\&quot;, \&quot;fr-CH\&quot;, \&quot;en-CH\&quot; DE: \&quot;de-DE\&quot;, \&quot;de-AT\&quot;, \&quot;en-DE\&quot; DK: \&quot;da-DK\&quot;, \&quot;en-DK\&quot; ES: \&quot;es-ES\&quot;, \&quot;ca-ES\&quot;, \&quot;en-ES\&quot; FI: \&quot;fi-FI\&quot;, \&quot;sv-FI\&quot;, \&quot;en-FI\&quot; GB: \&quot;en-GB\&quot; IT: \&quot;it-IT\&quot;, \&quot;en-IT\&quot; NL: \&quot;nl-NL\&quot;, \&quot;en-NL\&quot; NO: \&quot;nb-NO\&quot;, \&quot;en-NO\&quot; PL: \&quot;pl-PL\&quot;, \&quot;en-PL\&quot; SE: \&quot;sv-SE\&quot;, \&quot;en-SE\&quot; US: \&quot;en-US\&quot;. | [optional]
**merchant_data** | **string** | Pass through field to send any information about the order to be used later for reference while retrieving the order details (max 6000 characters) | [optional]
**merchant_reference1** | **string** | Used for storing merchant&#39;s internal order number or other reference. | [optional]
**merchant_reference2** | **string** | Used for storing merchant&#39;s internal order number or other reference. The value is available in the settlement files. (max 255 characters). | [optional]
**merchant_urls** | [**\Klarna\Payments\Model\MerchantUrls**](MerchantUrls.md) |  | [optional]
**options** | [**\Klarna\Payments\Model\Options**](Options.md) |  | [optional]
**order_amount** | **int** | Total amount of the order including tax and any available discounts. The value should be in non-negative minor units. Eg: 25 Euros should be 2500. | [optional]
**order_lines** | [**\Klarna\Payments\Model\OrderLine[]**](OrderLine.md) | The array containing list of line items that are part of this order. Maximum of 1000 line items could be processed in a single order. | [optional]
**order_tax_amount** | **int** | Total tax amount of the order. The value should be in non-negative minor units. Eg: 25 Euros should be 2500. | [optional]
**payment_method_categories** | [**\Klarna\Payments\Model\PaymentMethodCategory[]**](PaymentMethodCategory.md) | Available payment method categories | [optional] [readonly]
**purchase_country** | **string** | The purchase country of the customer. The billing country always overrides purchase country if the values are different. Formatted according to ISO 3166 alpha-2 standard, e.g. GB, SE, DE, US, etc. | [optional]
**purchase_currency** | **string** | The purchase currency of the order. Formatted according to ISO 4217 standard, e.g. USD, EUR, SEK, GBP, etc. | [optional]
**shipping_address** | [**\Klarna\Payments\Model\Address**](Address.md) |  | [optional]
**status** | **string** | The current status of the session. Possible values: &#39;complete&#39;, &#39;incomplete&#39; where &#39;complete&#39; is set when the order has been placed. | [optional] [readonly]
**intent** | **string** | Intent for the session. The field is designed to let partners inform Klarna of the purpose of the customer’s session. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
