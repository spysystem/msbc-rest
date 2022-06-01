# Spy\MsbcRestClient\SpySupplierTransPageApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX/Production/ODataV4/Company(&#39;XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX&#39;), except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSupplierTransaction()**](SpySupplierTransPageApi.md#createSupplierTransaction) | **POST** /SpySupplierTrans |  |
| [**deleteSupplierTransaction()**](SpySupplierTransPageApi.md#deleteSupplierTransaction) | **DELETE** /SpySupplierTrans({Entry_No}) |  |
| [**editSupplierTransaction()**](SpySupplierTransPageApi.md#editSupplierTransaction) | **PATCH** /SpySupplierTrans({Entry_No}) |  |
| [**getSupplierTransaction()**](SpySupplierTransPageApi.md#getSupplierTransaction) | **GET** /SpySupplierTrans({Entry_No}) |  |
| [**getSupplierTransactions()**](SpySupplierTransPageApi.md#getSupplierTransactions) | **GET** /SpySupplierTrans |  |


## `createSupplierTransaction()`

```php
createSupplierTransaction($spy_supplier_trans): \Spy\MsbcRestClient\Model\SpySupplierTransResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpySupplierTransPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$spy_supplier_trans = new \Spy\MsbcRestClient\Model\SpySupplierTrans(); // \Spy\MsbcRestClient\Model\SpySupplierTrans

try {
    $result = $apiInstance->createSupplierTransaction($spy_supplier_trans);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpySupplierTransPageApi->createSupplierTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **spy_supplier_trans** | [**\Spy\MsbcRestClient\Model\SpySupplierTrans**](../Model/SpySupplierTrans.md)|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpySupplierTransResponse**](../Model/SpySupplierTransResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSupplierTransaction()`

```php
deleteSupplierTransaction($entry_no)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpySupplierTransPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entry_no = 56; // int | The Entry_No of the SupplierTransaction to retrieve

try {
    $apiInstance->deleteSupplierTransaction($entry_no);
} catch (Exception $e) {
    echo 'Exception when calling SpySupplierTransPageApi->deleteSupplierTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entry_no** | **int**| The Entry_No of the SupplierTransaction to retrieve | |

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

## `editSupplierTransaction()`

```php
editSupplierTransaction($entry_no, $if_match, $spy_supplier_trans): \Spy\MsbcRestClient\Model\SpySupplierTransResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpySupplierTransPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entry_no = 56; // int | The Entry_No of the SupplierTransaction to retrieve
$if_match = 'if_match_example'; // string | The ETag of the Entity to update
$spy_supplier_trans = new \Spy\MsbcRestClient\Model\SpySupplierTrans(); // \Spy\MsbcRestClient\Model\SpySupplierTrans

try {
    $result = $apiInstance->editSupplierTransaction($entry_no, $if_match, $spy_supplier_trans);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpySupplierTransPageApi->editSupplierTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entry_no** | **int**| The Entry_No of the SupplierTransaction to retrieve | |
| **if_match** | **string**| The ETag of the Entity to update | |
| **spy_supplier_trans** | [**\Spy\MsbcRestClient\Model\SpySupplierTrans**](../Model/SpySupplierTrans.md)|  | |

### Return type

[**\Spy\MsbcRestClient\Model\SpySupplierTransResponse**](../Model/SpySupplierTransResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSupplierTransaction()`

```php
getSupplierTransaction($entry_no, $data_access_intent): \Spy\MsbcRestClient\Model\SpySupplierTransResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpySupplierTransPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entry_no = 56; // int | The Entry_No of the SupplierTransaction to retrieve
$data_access_intent = 'ReadOnly'; // string | Data Access Intent

try {
    $result = $apiInstance->getSupplierTransaction($entry_no, $data_access_intent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpySupplierTransPageApi->getSupplierTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entry_no** | **int**| The Entry_No of the SupplierTransaction to retrieve | |
| **data_access_intent** | **string**| Data Access Intent | [optional] [default to &#39;ReadOnly&#39;] |

### Return type

[**\Spy\MsbcRestClient\Model\SpySupplierTransResponse**](../Model/SpySupplierTransResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSupplierTransactions()`

```php
getSupplierTransactions($filter, $select, $data_access_intent): \Spy\MsbcRestClient\Model\SpySupplierTransListResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpySupplierTransPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string
$select = 'select_example'; // string
$data_access_intent = 'ReadOnly'; // string | Data Access Intent

try {
    $result = $apiInstance->getSupplierTransactions($filter, $select, $data_access_intent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpySupplierTransPageApi->getSupplierTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |
| **select** | **string**|  | [optional] |
| **data_access_intent** | **string**| Data Access Intent | [optional] [default to &#39;ReadOnly&#39;] |

### Return type

[**\Spy\MsbcRestClient\Model\SpySupplierTransListResponse**](../Model/SpySupplierTransListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
