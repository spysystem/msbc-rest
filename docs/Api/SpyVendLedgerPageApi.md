# Spy\MsbcRestClient\SpyVendLedgerPageApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX/Production/ODataV4/Company(&#39;XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX&#39;), except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSupplierLedgerEntry()**](SpyVendLedgerPageApi.md#createSupplierLedgerEntry) | **POST** /SpyVendLedgerPage |  |
| [**deleteSupplierLedgerEntry()**](SpyVendLedgerPageApi.md#deleteSupplierLedgerEntry) | **DELETE** /SpyVendLedgerPage({Entry_No}) |  |
| [**editSupplierLedgerEntry()**](SpyVendLedgerPageApi.md#editSupplierLedgerEntry) | **PATCH** /SpyVendLedgerPage({Entry_No}) |  |
| [**getSupplierLedgerEntries()**](SpyVendLedgerPageApi.md#getSupplierLedgerEntries) | **GET** /SpyVendLedgerPage |  |
| [**getSupplierLedgerEntry()**](SpyVendLedgerPageApi.md#getSupplierLedgerEntry) | **GET** /SpyVendLedgerPage({Entry_No}) |  |


## `createSupplierLedgerEntry()`

```php
createSupplierLedgerEntry($spy_vend_ledger, $select): \Spy\MsbcRestClient\Model\SpyVendLedgerResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyVendLedgerPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$spy_vend_ledger = new \Spy\MsbcRestClient\Model\SpyVendLedger(); // \Spy\MsbcRestClient\Model\SpyVendLedger
$select = 'select_example'; // string

try {
    $result = $apiInstance->createSupplierLedgerEntry($spy_vend_ledger, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyVendLedgerPageApi->createSupplierLedgerEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **spy_vend_ledger** | [**\Spy\MsbcRestClient\Model\SpyVendLedger**](../Model/SpyVendLedger.md)|  | |
| **select** | **string**|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyVendLedgerResponse**](../Model/SpyVendLedgerResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSupplierLedgerEntry()`

```php
deleteSupplierLedgerEntry($entry_no)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyVendLedgerPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entry_no = 56; // int | The Entry_No of the SupplierLedgerEntry to retrieve

try {
    $apiInstance->deleteSupplierLedgerEntry($entry_no);
} catch (Exception $e) {
    echo 'Exception when calling SpyVendLedgerPageApi->deleteSupplierLedgerEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entry_no** | **int**| The Entry_No of the SupplierLedgerEntry to retrieve | |

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

## `editSupplierLedgerEntry()`

```php
editSupplierLedgerEntry($entry_no, $if_match, $spy_vend_ledger, $select): \Spy\MsbcRestClient\Model\SpyVendLedgerResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyVendLedgerPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entry_no = 56; // int | The Entry_No of the SupplierLedgerEntry to retrieve
$if_match = 'if_match_example'; // string | The ETag of the Entity to update
$spy_vend_ledger = new \Spy\MsbcRestClient\Model\SpyVendLedger(); // \Spy\MsbcRestClient\Model\SpyVendLedger
$select = 'select_example'; // string

try {
    $result = $apiInstance->editSupplierLedgerEntry($entry_no, $if_match, $spy_vend_ledger, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyVendLedgerPageApi->editSupplierLedgerEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entry_no** | **int**| The Entry_No of the SupplierLedgerEntry to retrieve | |
| **if_match** | **string**| The ETag of the Entity to update | |
| **spy_vend_ledger** | [**\Spy\MsbcRestClient\Model\SpyVendLedger**](../Model/SpyVendLedger.md)|  | |
| **select** | **string**|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyVendLedgerResponse**](../Model/SpyVendLedgerResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSupplierLedgerEntries()`

```php
getSupplierLedgerEntries($filter, $select, $data_access_intent): \Spy\MsbcRestClient\Model\SpyVendLedgerListResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyVendLedgerPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string
$select = 'select_example'; // string
$data_access_intent = 'ReadOnly'; // string | Data Access Intent

try {
    $result = $apiInstance->getSupplierLedgerEntries($filter, $select, $data_access_intent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyVendLedgerPageApi->getSupplierLedgerEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |
| **select** | **string**|  | [optional] |
| **data_access_intent** | **string**| Data Access Intent | [optional] [default to &#39;ReadOnly&#39;] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyVendLedgerListResponse**](../Model/SpyVendLedgerListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSupplierLedgerEntry()`

```php
getSupplierLedgerEntry($entry_no, $data_access_intent, $select): \Spy\MsbcRestClient\Model\SpyVendLedgerResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyVendLedgerPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entry_no = 56; // int | The Entry_No of the SupplierLedgerEntry to retrieve
$data_access_intent = 'ReadOnly'; // string | Data Access Intent
$select = 'select_example'; // string

try {
    $result = $apiInstance->getSupplierLedgerEntry($entry_no, $data_access_intent, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyVendLedgerPageApi->getSupplierLedgerEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entry_no** | **int**| The Entry_No of the SupplierLedgerEntry to retrieve | |
| **data_access_intent** | **string**| Data Access Intent | [optional] [default to &#39;ReadOnly&#39;] |
| **select** | **string**|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyVendLedgerResponse**](../Model/SpyVendLedgerResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
