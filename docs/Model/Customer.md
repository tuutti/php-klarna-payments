# # Customer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date_of_birth** | **string** | Customer’s date of birth. The format is ‘yyyy-mm-dd’ | [optional]
**gender** | **string** | Customer’s gender - ‘male’ or ‘female’ | [optional]
**last_four_ssn** | **string** | Last four digits of the customer&#39;s social security number. This value is available for US customers. | [optional]
**national_identification_number** | **string** | The customer&#39;s national identification number. This value is available for EU customers utilizing national identification numbers. | [optional]
**organization_entity_type** | **string** | Organization entity type. Only applicable for B2B customers. | [optional]
**organization_registration_id** | **string** | Organization registration id. Only applicable for B2B customers. | [optional]
**title** | **string** | Customer’s Title. Allowed values per country: UK - \&quot;Mr\&quot;, \&quot;Ms\&quot; DE - \&quot;Herr\&quot;, \&quot;Frau\&quot; AT: \&quot;Herr, \&quot;Frau\&quot; CH: de-CH: \&quot;Herr, \&quot;Frau\&quot; it-CH: \&quot;Sig.\&quot;, \&quot;Sig.ra\&quot; fr-CH: \&quot;M\&quot;, \&quot;Mme\&quot;  BE: \&quot;Dhr.\&quot;, \&quot;Mevr.\&quot; NL: \&quot;Dhr.\&quot;, \&quot;Mevr.\&quot; | [optional]
**type** | **string** | Type of customer in the session. If nothing is added, a B2C session will be the default. If it is a b2b-session, you should enter organization to trigger a B2B session. | [optional]
**vat_id** | **string** | VAT ID. Only applicable for B2B customers. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
