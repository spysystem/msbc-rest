# Spy\MsbcRestClient\SpyLedgerTransPageApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX/Production/ODataV4/Company(&#39;XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX&#39;), except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createLedgerTransactionEntry()**](SpyLedgerTransPageApi.md#createLedgerTransactionEntry) | **POST** /SpyLedgerTrans |  |
| [**deleteLedgerTransactionEntry()**](SpyLedgerTransPageApi.md#deleteLedgerTransactionEntry) | **DELETE** /SpyLedgerTrans({Entry_No}) |  |
| [**editLedgerTransactionEntry()**](SpyLedgerTransPageApi.md#editLedgerTransactionEntry) | **PATCH** /SpyLedgerTrans({Entry_No}) |  |
| [**getLedgerTransactionEntries()**](SpyLedgerTransPageApi.md#getLedgerTransactionEntries) | **GET** /SpyLedgerTrans |  |
| [**getLedgerTransactionEntry()**](SpyLedgerTransPageApi.md#getLedgerTransactionEntry) | **GET** /SpyLedgerTrans({Entry_No}) |  |


## `createLedgerTransactionEntry()`

```php
createLedgerTransactionEntry($spy_ledger_trans, $select): \Spy\MsbcRestClient\Model\SpyLedgerTransResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyLedgerTransPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$spy_ledger_trans = new \Spy\MsbcRestClient\Model\SpyLedgerTrans(); // \Spy\MsbcRestClient\Model\SpyLedgerTrans
$select = 'select_example'; // string

try {
    $result = $apiInstance->createLedgerTransactionEntry($spy_ledger_trans, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyLedgerTransPageApi->createLedgerTransactionEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **spy_ledger_trans** | [**\Spy\MsbcRestClient\Model\SpyLedgerTrans**](../Model/SpyLedgerTrans.md)|  | |
| **select** | **string**|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyLedgerTransResponse**](../Model/SpyLedgerTransResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteLedgerTransactionEntry()`

```php
deleteLedgerTransactionEntry($entry_no)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyLedgerTransPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entry_no = 56; // int | The Entry_No of the LedgerTransactionEntry to retrieve

try {
    $apiInstance->deleteLedgerTransactionEntry($entry_no);
} catch (Exception $e) {
    echo 'Exception when calling SpyLedgerTransPageApi->deleteLedgerTransactionEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entry_no** | **int**| The Entry_No of the LedgerTransactionEntry to retrieve | |

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

## `editLedgerTransactionEntry()`

```php
editLedgerTransactionEntry($entry_no, $if_match, $spy_ledger_trans, $select): \Spy\MsbcRestClient\Model\SpyLedgerTransResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyLedgerTransPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entry_no = 56; // int | The Entry_No of the LedgerTransactionEntry to retrieve
$if_match = 'if_match_example'; // string | The ETag of the Entity to update
$spy_ledger_trans = new \Spy\MsbcRestClient\Model\SpyLedgerTrans(); // \Spy\MsbcRestClient\Model\SpyLedgerTrans
$select = 'select_example'; // string

try {
    $result = $apiInstance->editLedgerTransactionEntry($entry_no, $if_match, $spy_ledger_trans, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyLedgerTransPageApi->editLedgerTransactionEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entry_no** | **int**| The Entry_No of the LedgerTransactionEntry to retrieve | |
| **if_match** | **string**| The ETag of the Entity to update | |
| **spy_ledger_trans** | [**\Spy\MsbcRestClient\Model\SpyLedgerTrans**](../Model/SpyLedgerTrans.md)|  | |
| **select** | **string**|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyLedgerTransResponse**](../Model/SpyLedgerTransResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLedgerTransactionEntries()`

```php
getLedgerTransactionEntries($filter, $select, $data_access_intent): \Spy\MsbcRestClient\Model\SpyLedgerTransListResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyLedgerTransPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string
$select = 'select_example'; // string
$data_access_intent = 'ReadOnly'; // string | Data Access Intent

try {
    $result = $apiInstance->getLedgerTransactionEntries($filter, $select, $data_access_intent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyLedgerTransPageApi->getLedgerTransactionEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |
| **select** | **string**|  | [optional] |
| **data_access_intent** | **string**| Data Access Intent | [optional] [default to &#39;ReadOnly&#39;] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyLedgerTransListResponse**](../Model/SpyLedgerTransListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLedgerTransactionEntry()`

```php
getLedgerTransactionEntry($entry_no, $data_access_intent, $select): \Spy\MsbcRestClient\Model\SpyLedgerTransResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyLedgerTransPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entry_no = 56; // int | The Entry_No of the LedgerTransactionEntry to retrieve
$data_access_intent = 'ReadOnly'; // string | Data Access Intent
$select = 'select_example'; // string

try {
    $result = $apiInstance->getLedgerTransactionEntry($entry_no, $data_access_intent, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyLedgerTransPageApi->getLedgerTransactionEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entry_no** | **int**| The Entry_No of the LedgerTransactionEntry to retrieve | |
| **data_access_intent** | **string**| Data Access Intent | [optional] [default to &#39;ReadOnly&#39;] |
| **select** | **string**|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyLedgerTransResponse**](../Model/SpyLedgerTransResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
