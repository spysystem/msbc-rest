# Spy\MsbcRestClient\SpyCustomerTransPageApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX/Production/ODataV4/Company(&#39;XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX&#39;), except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCustomerTransaction()**](SpyCustomerTransPageApi.md#createCustomerTransaction) | **POST** /SpyCustomerTrans |  |
| [**deleteCustomerTransaction()**](SpyCustomerTransPageApi.md#deleteCustomerTransaction) | **DELETE** /SpyCustomerTrans({Entry_No}) |  |
| [**editCustomerTransaction()**](SpyCustomerTransPageApi.md#editCustomerTransaction) | **PATCH** /SpyCustomerTrans({Entry_No}) |  |
| [**getCustomerTransaction()**](SpyCustomerTransPageApi.md#getCustomerTransaction) | **GET** /SpyCustomerTrans({Entry_No}) |  |
| [**getCustomerTransactions()**](SpyCustomerTransPageApi.md#getCustomerTransactions) | **GET** /SpyCustomerTrans |  |


## `createCustomerTransaction()`

```php
createCustomerTransaction($spy_customer_trans, $select): \Spy\MsbcRestClient\Model\SpyCustomerTransResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyCustomerTransPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$spy_customer_trans = new \Spy\MsbcRestClient\Model\SpyCustomerTrans(); // \Spy\MsbcRestClient\Model\SpyCustomerTrans
$select = 'select_example'; // string

try {
    $result = $apiInstance->createCustomerTransaction($spy_customer_trans, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyCustomerTransPageApi->createCustomerTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **spy_customer_trans** | [**\Spy\MsbcRestClient\Model\SpyCustomerTrans**](../Model/SpyCustomerTrans.md)|  | |
| **select** | **string**|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyCustomerTransResponse**](../Model/SpyCustomerTransResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCustomerTransaction()`

```php
deleteCustomerTransaction($entry_no)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyCustomerTransPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entry_no = 56; // int | The Entry_No of the CustomerTransaction to retrieve

try {
    $apiInstance->deleteCustomerTransaction($entry_no);
} catch (Exception $e) {
    echo 'Exception when calling SpyCustomerTransPageApi->deleteCustomerTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entry_no** | **int**| The Entry_No of the CustomerTransaction to retrieve | |

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

## `editCustomerTransaction()`

```php
editCustomerTransaction($entry_no, $if_match, $spy_customer_trans, $select): \Spy\MsbcRestClient\Model\SpyCustomerTransResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyCustomerTransPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entry_no = 56; // int | The Entry_No of the CustomerTransaction to retrieve
$if_match = 'if_match_example'; // string | The ETag of the Entity to update
$spy_customer_trans = new \Spy\MsbcRestClient\Model\SpyCustomerTrans(); // \Spy\MsbcRestClient\Model\SpyCustomerTrans
$select = 'select_example'; // string

try {
    $result = $apiInstance->editCustomerTransaction($entry_no, $if_match, $spy_customer_trans, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyCustomerTransPageApi->editCustomerTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entry_no** | **int**| The Entry_No of the CustomerTransaction to retrieve | |
| **if_match** | **string**| The ETag of the Entity to update | |
| **spy_customer_trans** | [**\Spy\MsbcRestClient\Model\SpyCustomerTrans**](../Model/SpyCustomerTrans.md)|  | |
| **select** | **string**|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyCustomerTransResponse**](../Model/SpyCustomerTransResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerTransaction()`

```php
getCustomerTransaction($entry_no, $data_access_intent, $select): \Spy\MsbcRestClient\Model\SpyCustomerTransResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyCustomerTransPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entry_no = 56; // int | The Entry_No of the CustomerTransaction to retrieve
$data_access_intent = 'ReadOnly'; // string | Data Access Intent
$select = 'select_example'; // string

try {
    $result = $apiInstance->getCustomerTransaction($entry_no, $data_access_intent, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyCustomerTransPageApi->getCustomerTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entry_no** | **int**| The Entry_No of the CustomerTransaction to retrieve | |
| **data_access_intent** | **string**| Data Access Intent | [optional] [default to &#39;ReadOnly&#39;] |
| **select** | **string**|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyCustomerTransResponse**](../Model/SpyCustomerTransResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerTransactions()`

```php
getCustomerTransactions($filter, $select, $data_access_intent): \Spy\MsbcRestClient\Model\SpyCustomerTransListResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyCustomerTransPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string
$select = 'select_example'; // string
$data_access_intent = 'ReadOnly'; // string | Data Access Intent

try {
    $result = $apiInstance->getCustomerTransactions($filter, $select, $data_access_intent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyCustomerTransPageApi->getCustomerTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |
| **select** | **string**|  | [optional] |
| **data_access_intent** | **string**| Data Access Intent | [optional] [default to &#39;ReadOnly&#39;] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyCustomerTransListResponse**](../Model/SpyCustomerTransListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
