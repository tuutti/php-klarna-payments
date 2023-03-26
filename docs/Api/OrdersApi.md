# Klarna\Payments\OrdersApi

All URIs are relative to https://api.klarna.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelAuthorization()**](OrdersApi.md#cancelAuthorization) | **DELETE** /payments/v1/authorizations/{authorizationToken} | Cancel an existing authorization |
| [**createOrder()**](OrdersApi.md#createOrder) | **POST** /payments/v1/authorizations/{authorizationToken}/order | Create a new order |
| [**purchaseToken()**](OrdersApi.md#purchaseToken) | **POST** /payments/v1/authorizations/{authorizationToken}/customer-token | Generate a consumer token |


## `cancelAuthorization()`

```php
cancelAuthorization($authorization_token)
```

Cancel an existing authorization

Use this API call to cancel/release an authorization. If the `authorization_token` received during a Klarna Payments won’t be used to place an order immediately you could release the authorization. Read more on **[Cancel an existing authorization](https://docs.klarna.com/klarna-payments/other-actions/cancel-an-authorization/)**.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Klarna\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Klarna\Payments\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization_token = 'authorization_token_example'; // string

try {
    $apiInstance->cancelAuthorization($authorization_token);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->cancelAuthorization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization_token** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrder()`

```php
createOrder($authorization_token, $create_order_request): \Klarna\Payments\Model\Order
```

Create a new order

Use this API call to create a new order. Placing an order towards Klarna means that the Klarna Payments session will be closed and that an order will be created in Klarna's system.<br/>When you have received the `authorization_token` for a successful authorization you can place the order. Among the other order details in this request, you include a URL to the confirmation page for the customer.<br/>When the Order has been successfully placed at Klarna, you need to handle it either through the Merchant Portal or using [Klarna’s Order Management API](#order-management-api). Read more on **[Create a new order](https://docs.klarna.com/klarna-payments/integrate-with-klarna-payments/step-3-create-an-order/)**.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Klarna\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Klarna\Payments\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization_token = 'authorization_token_example'; // string
$create_order_request = new \Klarna\Payments\Model\CreateOrderRequest(); // \Klarna\Payments\Model\CreateOrderRequest

try {
    $result = $apiInstance->createOrder($authorization_token, $create_order_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->createOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization_token** | **string**|  | |
| **create_order_request** | [**\Klarna\Payments\Model\CreateOrderRequest**](../Model/CreateOrderRequest.md)|  | [optional] |

### Return type

[**\Klarna\Payments\Model\Order**](../Model/Order.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseToken()`

```php
purchaseToken($authorization_token, $customer_token_creation_request): \Klarna\Payments\Model\CustomerTokenCreationResponse
```

Generate a consumer token

Use this API call to create a Klarna Customer Token.<br/>After having obtained an `authorization_token` for a successful authorization, this can be used to create a purchase token instead of placing the order. Creating a Klarna Customer Token results in Klarna storing customer and payment method details. Read more on **[Generate a consumer token](https://docs.klarna.com/klarna-payments/in-depth-knowledge/customer-token/)**.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Klarna\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Klarna\Payments\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization_token = 'authorization_token_example'; // string
$customer_token_creation_request = new \Klarna\Payments\Model\CustomerTokenCreationRequest(); // \Klarna\Payments\Model\CustomerTokenCreationRequest

try {
    $result = $apiInstance->purchaseToken($authorization_token, $customer_token_creation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->purchaseToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization_token** | **string**|  | |
| **customer_token_creation_request** | [**\Klarna\Payments\Model\CustomerTokenCreationRequest**](../Model/CustomerTokenCreationRequest.md)|  | [optional] |

### Return type

[**\Klarna\Payments\Model\CustomerTokenCreationResponse**](../Model/CustomerTokenCreationResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
