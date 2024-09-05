# Spy\MsbcRestClient\SpyPaymentTermPageApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX/Production/ODataV4/Company(&#39;XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX&#39;), except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPaymentTerm()**](SpyPaymentTermPageApi.md#createPaymentTerm) | **POST** /SpyPaymentTerm |  |
| [**createPaymentTermV2()**](SpyPaymentTermPageApi.md#createPaymentTermV2) | **POST** /SpyPaymentTermV2 |  |
| [**deletePaymentTerm()**](SpyPaymentTermPageApi.md#deletePaymentTerm) | **DELETE** /SpyPaymentTerm(\&#39;{code}\&#39;) |  |
| [**deletePaymentTermV2()**](SpyPaymentTermPageApi.md#deletePaymentTermV2) | **DELETE** /SpyPaymentTermV2({systemId}) |  |
| [**editPaymentTerm()**](SpyPaymentTermPageApi.md#editPaymentTerm) | **PATCH** /SpyPaymentTerm(\&#39;{code}\&#39;) |  |
| [**editPaymentTermV2()**](SpyPaymentTermPageApi.md#editPaymentTermV2) | **PATCH** /SpyPaymentTermV2({systemId}) |  |
| [**getPaymentTerm()**](SpyPaymentTermPageApi.md#getPaymentTerm) | **GET** /SpyPaymentTerm(\&#39;{code}\&#39;) |  |
| [**getPaymentTermV2()**](SpyPaymentTermPageApi.md#getPaymentTermV2) | **GET** /SpyPaymentTermV2({systemId}) |  |
| [**getPaymentTerms()**](SpyPaymentTermPageApi.md#getPaymentTerms) | **GET** /SpyPaymentTerm |  |
| [**getPaymentTermsV2()**](SpyPaymentTermPageApi.md#getPaymentTermsV2) | **GET** /SpyPaymentTermV2 |  |


## `createPaymentTerm()`

```php
createPaymentTerm($spy_payment_term, $select): \Spy\MsbcRestClient\Model\SpyPaymentTermResponse
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
$select = 'select_example'; // string

try {
    $result = $apiInstance->createPaymentTerm($spy_payment_term, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyPaymentTermPageApi->createPaymentTerm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **spy_payment_term** | [**\Spy\MsbcRestClient\Model\SpyPaymentTerm**](../Model/SpyPaymentTerm.md)|  | |
| **select** | **string**|  | [optional] |

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

## `createPaymentTermV2()`

```php
createPaymentTermV2($spy_payment_term_v2, $select): \Spy\MsbcRestClient\Model\SpyPaymentTermV2Response
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
$spy_payment_term_v2 = new \Spy\MsbcRestClient\Model\SpyPaymentTermV2(); // \Spy\MsbcRestClient\Model\SpyPaymentTermV2
$select = 'select_example'; // string

try {
    $result = $apiInstance->createPaymentTermV2($spy_payment_term_v2, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyPaymentTermPageApi->createPaymentTermV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **spy_payment_term_v2** | [**\Spy\MsbcRestClient\Model\SpyPaymentTermV2**](../Model/SpyPaymentTermV2.md)|  | |
| **select** | **string**|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyPaymentTermV2Response**](../Model/SpyPaymentTermV2Response.md)

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

## `deletePaymentTermV2()`

```php
deletePaymentTermV2($system_id)
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
$system_id = 'system_id_example'; // string | The systemId of the PaymentTerm to retrieve

try {
    $apiInstance->deletePaymentTermV2($system_id);
} catch (Exception $e) {
    echo 'Exception when calling SpyPaymentTermPageApi->deletePaymentTermV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **system_id** | **string**| The systemId of the PaymentTerm to retrieve | |

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
editPaymentTerm($code, $if_match, $spy_payment_term, $select): \Spy\MsbcRestClient\Model\SpyPaymentTermResponse
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
$select = 'select_example'; // string

try {
    $result = $apiInstance->editPaymentTerm($code, $if_match, $spy_payment_term, $select);
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
| **select** | **string**|  | [optional] |

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

## `editPaymentTermV2()`

```php
editPaymentTermV2($system_id, $if_match, $spy_payment_term_v2, $select): \Spy\MsbcRestClient\Model\SpyPaymentTermV2Response
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
$system_id = 'system_id_example'; // string | The systemId of the PaymentTerm to retrieve
$if_match = 'if_match_example'; // string | The ETag of the Entity to update
$spy_payment_term_v2 = new \Spy\MsbcRestClient\Model\SpyPaymentTermV2(); // \Spy\MsbcRestClient\Model\SpyPaymentTermV2
$select = 'select_example'; // string

try {
    $result = $apiInstance->editPaymentTermV2($system_id, $if_match, $spy_payment_term_v2, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyPaymentTermPageApi->editPaymentTermV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **system_id** | **string**| The systemId of the PaymentTerm to retrieve | |
| **if_match** | **string**| The ETag of the Entity to update | |
| **spy_payment_term_v2** | [**\Spy\MsbcRestClient\Model\SpyPaymentTermV2**](../Model/SpyPaymentTermV2.md)|  | |
| **select** | **string**|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyPaymentTermV2Response**](../Model/SpyPaymentTermV2Response.md)

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
getPaymentTerm($code, $data_access_intent, $select): \Spy\MsbcRestClient\Model\SpyPaymentTermResponse
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
$select = 'select_example'; // string

try {
    $result = $apiInstance->getPaymentTerm($code, $data_access_intent, $select);
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
| **select** | **string**|  | [optional] |

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

## `getPaymentTermV2()`

```php
getPaymentTermV2($system_id, $data_access_intent, $select): \Spy\MsbcRestClient\Model\SpyPaymentTermV2Response
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
$system_id = 'system_id_example'; // string | The systemId of the PaymentTerm to retrieve
$data_access_intent = 'ReadOnly'; // string | Data Access Intent
$select = 'select_example'; // string

try {
    $result = $apiInstance->getPaymentTermV2($system_id, $data_access_intent, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyPaymentTermPageApi->getPaymentTermV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **system_id** | **string**| The systemId of the PaymentTerm to retrieve | |
| **data_access_intent** | **string**| Data Access Intent | [optional] [default to &#39;ReadOnly&#39;] |
| **select** | **string**|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyPaymentTermV2Response**](../Model/SpyPaymentTermV2Response.md)

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

## `getPaymentTermsV2()`

```php
getPaymentTermsV2($filter, $select, $data_access_intent): \Spy\MsbcRestClient\Model\SpyPaymentTermV2ListResponse
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
    $result = $apiInstance->getPaymentTermsV2($filter, $select, $data_access_intent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyPaymentTermPageApi->getPaymentTermsV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |
| **select** | **string**|  | [optional] |
| **data_access_intent** | **string**| Data Access Intent | [optional] [default to &#39;ReadOnly&#39;] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyPaymentTermV2ListResponse**](../Model/SpyPaymentTermV2ListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
