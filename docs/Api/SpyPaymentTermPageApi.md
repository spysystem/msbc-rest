# Spy\MsbcRestClient\SpyPaymentTermPageApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX/Production/ODataV4/Company(&#39;XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX&#39;), except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPaymentTerm()**](SpyPaymentTermPageApi.md#createPaymentTerm) | **POST** /SpyPaymentTerm |  |
| [**deletePaymentTerm()**](SpyPaymentTermPageApi.md#deletePaymentTerm) | **DELETE** /SpyPaymentTerm(\&#39;{code}\&#39;) |  |
| [**editPaymentTerm()**](SpyPaymentTermPageApi.md#editPaymentTerm) | **PATCH** /SpyPaymentTerm(\&#39;{code}\&#39;) |  |
| [**getPaymentTerm()**](SpyPaymentTermPageApi.md#getPaymentTerm) | **GET** /SpyPaymentTerm(\&#39;{code}\&#39;) |  |
| [**getPaymentTerms()**](SpyPaymentTermPageApi.md#getPaymentTerms) | **GET** /SpyPaymentTerm |  |


## `createPaymentTerm()`

```php
createPaymentTerm($spy_payment_term): \Spy\MsbcRestClient\Model\SpyPaymentTermResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyPaymentTermPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$spy_payment_term = new \Spy\MsbcRestClient\Model\SpyPaymentTerm(); // \Spy\MsbcRestClient\Model\SpyPaymentTerm

try {
    $result = $apiInstance->createPaymentTerm($spy_payment_term);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyPaymentTermPageApi->createPaymentTerm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **spy_payment_term** | [**\Spy\MsbcRestClient\Model\SpyPaymentTerm**](../Model/SpyPaymentTerm.md)|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyPaymentTermResponse**](../Model/SpyPaymentTermResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePaymentTerm()`

```php
deletePaymentTerm($code)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyPaymentTermPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | The code of the PaymentTerm to retrieve

try {
    $apiInstance->deletePaymentTerm($code);
} catch (Exception $e) {
    echo 'Exception when calling SpyPaymentTermPageApi->deletePaymentTerm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| The code of the PaymentTerm to retrieve | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `editPaymentTerm()`

```php
editPaymentTerm($code, $if_match, $spy_payment_term): \Spy\MsbcRestClient\Model\SpyPaymentTermResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyPaymentTermPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | The code of the PaymentTerm to retrieve
$if_match = 'if_match_example'; // string | The ETag of the Entity to update
$spy_payment_term = new \Spy\MsbcRestClient\Model\SpyPaymentTerm(); // \Spy\MsbcRestClient\Model\SpyPaymentTerm

try {
    $result = $apiInstance->editPaymentTerm($code, $if_match, $spy_payment_term);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyPaymentTermPageApi->editPaymentTerm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| The code of the PaymentTerm to retrieve | |
| **if_match** | **string**| The ETag of the Entity to update | |
| **spy_payment_term** | [**\Spy\MsbcRestClient\Model\SpyPaymentTerm**](../Model/SpyPaymentTerm.md)|  | |

### Return type

[**\Spy\MsbcRestClient\Model\SpyPaymentTermResponse**](../Model/SpyPaymentTermResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentTerm()`

```php
getPaymentTerm($code, $data_access_intent): \Spy\MsbcRestClient\Model\SpyPaymentTermResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyPaymentTermPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | The code of the PaymentTerm to retrieve
$data_access_intent = 'ReadOnly'; // string | Data Access Intent

try {
    $result = $apiInstance->getPaymentTerm($code, $data_access_intent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyPaymentTermPageApi->getPaymentTerm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| The code of the PaymentTerm to retrieve | |
| **data_access_intent** | **string**| Data Access Intent | [optional] [default to &#39;ReadOnly&#39;] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyPaymentTermResponse**](../Model/SpyPaymentTermResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentTerms()`

```php
getPaymentTerms($filter, $select, $data_access_intent): \Spy\MsbcRestClient\Model\SpyPaymentTermListResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyPaymentTermPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string
$select = 'select_example'; // string
$data_access_intent = 'ReadOnly'; // string | Data Access Intent

try {
    $result = $apiInstance->getPaymentTerms($filter, $select, $data_access_intent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyPaymentTermPageApi->getPaymentTerms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |
| **select** | **string**|  | [optional] |
| **data_access_intent** | **string**| Data Access Intent | [optional] [default to &#39;ReadOnly&#39;] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyPaymentTermListResponse**](../Model/SpyPaymentTermListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
