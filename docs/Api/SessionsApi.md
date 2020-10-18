# Klarna\Payments\SessionsApi

All URIs are relative to *https://api.klarna.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCreditSession**](SessionsApi.md#createCreditSession) | **POST** /payments/v1/sessions | Create a new credit session
[**readCreditSession**](SessionsApi.md#readCreditSession) | **GET** /payments/v1/sessions/{session_id} | Read an existing credit session
[**updateCreditSession**](SessionsApi.md#updateCreditSession) | **POST** /payments/v1/sessions/{session_id} | Update an existing credit session



## createCreditSession

> \Klarna\Payments\Model\MerchantSession createCreditSession($body)

Create a new credit session

Use this API call to create a Klarna Payments session.<br/>When a session is created you will receive the available `payment_method_categories` for the session, a `session_id` and a `client_token`. The `session_id` can be used to read or update the session using the REST API. The `client_token` should be passed to the browser.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Klarna\Payments\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Klarna\Payments\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Klarna\Payments\Model\Session(); // \Klarna\Payments\Model\Session | session_request

try {
    $result = $apiInstance->createCreditSession($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->createCreditSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Klarna\Payments\Model\Session**](../Model/Session.md)| session_request |

### Return type

[**\Klarna\Payments\Model\MerchantSession**](../Model/MerchantSession.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## readCreditSession

> \Klarna\Payments\Model\Session readCreditSession($session_id)

Read an existing credit session

Use this API call to read a Klarna Payments session. You can read the Klarna Payments session at any time after it has been created, to get information about it. This will return all data that has been collected during the session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Klarna\Payments\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Klarna\Payments\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = 'session_id_example'; // string | session_id

try {
    $result = $apiInstance->readCreditSession($session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->readCreditSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session_id** | **string**| session_id |

### Return type

[**\Klarna\Payments\Model\Session**](../Model/Session.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCreditSession

> updateCreditSession($session_id, $body)

Update an existing credit session

Use this API call to update a Klarna Payments session with new details, in case something in the order has changed and the checkout has been reloaded. Including if the consumer adds a new item to the cart or if consumer details are updated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Klarna\Payments\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Klarna\Payments\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = 'session_id_example'; // string | session_id
$body = new \Klarna\Payments\Model\Session(); // \Klarna\Payments\Model\Session | session_request

try {
    $apiInstance->updateCreditSession($session_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->updateCreditSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session_id** | **string**| session_id |
 **body** | [**\Klarna\Payments\Model\Session**](../Model/Session.md)| session_request |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

