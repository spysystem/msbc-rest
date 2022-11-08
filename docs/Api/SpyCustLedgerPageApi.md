# Spy\MsbcRestClient\SpyCustLedgerPageApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX/Production/ODataV4/Company(&#39;XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX&#39;), except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCustomerLedgerEntry()**](SpyCustLedgerPageApi.md#createCustomerLedgerEntry) | **POST** /SpyCustLedgerPage |  |
| [**deleteCustomerLedgerEntry()**](SpyCustLedgerPageApi.md#deleteCustomerLedgerEntry) | **DELETE** /SpyCustLedgerPage({Entry_No}) |  |
| [**editCustomerLedgerEntry()**](SpyCustLedgerPageApi.md#editCustomerLedgerEntry) | **PATCH** /SpyCustLedgerPage({Entry_No}) |  |
| [**getCustomerLedgerEntries()**](SpyCustLedgerPageApi.md#getCustomerLedgerEntries) | **GET** /SpyCustLedgerPage |  |
| [**getCustomerLedgerEntry()**](SpyCustLedgerPageApi.md#getCustomerLedgerEntry) | **GET** /SpyCustLedgerPage({Entry_No}) |  |


## `createCustomerLedgerEntry()`

```php
createCustomerLedgerEntry($spy_cust_ledger, $select): \Spy\MsbcRestClient\Model\SpyCustLedgerResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyCustLedgerPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$spy_cust_ledger = new \Spy\MsbcRestClient\Model\SpyCustLedger(); // \Spy\MsbcRestClient\Model\SpyCustLedger
$select = 'select_example'; // string

try {
    $result = $apiInstance->createCustomerLedgerEntry($spy_cust_ledger, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyCustLedgerPageApi->createCustomerLedgerEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **spy_cust_ledger** | [**\Spy\MsbcRestClient\Model\SpyCustLedger**](../Model/SpyCustLedger.md)|  | |
| **select** | **string**|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyCustLedgerResponse**](../Model/SpyCustLedgerResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCustomerLedgerEntry()`

```php
deleteCustomerLedgerEntry($entry_no)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyCustLedgerPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entry_no = 'entry_no_example'; // string | The Entry_No of the CustomerLedgerEntry to retrieve

try {
    $apiInstance->deleteCustomerLedgerEntry($entry_no);
} catch (Exception $e) {
    echo 'Exception when calling SpyCustLedgerPageApi->deleteCustomerLedgerEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entry_no** | **string**| The Entry_No of the CustomerLedgerEntry to retrieve | |

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

## `editCustomerLedgerEntry()`

```php
editCustomerLedgerEntry($entry_no, $if_match, $spy_cust_ledger, $select): \Spy\MsbcRestClient\Model\SpyCustLedgerResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyCustLedgerPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entry_no = 'entry_no_example'; // string | The Entry_No of the CustomerLedgerEntry to retrieve
$if_match = 'if_match_example'; // string | The ETag of the Entity to update
$spy_cust_ledger = new \Spy\MsbcRestClient\Model\SpyCustLedger(); // \Spy\MsbcRestClient\Model\SpyCustLedger
$select = 'select_example'; // string

try {
    $result = $apiInstance->editCustomerLedgerEntry($entry_no, $if_match, $spy_cust_ledger, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyCustLedgerPageApi->editCustomerLedgerEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entry_no** | **string**| The Entry_No of the CustomerLedgerEntry to retrieve | |
| **if_match** | **string**| The ETag of the Entity to update | |
| **spy_cust_ledger** | [**\Spy\MsbcRestClient\Model\SpyCustLedger**](../Model/SpyCustLedger.md)|  | |
| **select** | **string**|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyCustLedgerResponse**](../Model/SpyCustLedgerResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerLedgerEntries()`

```php
getCustomerLedgerEntries($filter, $select, $data_access_intent): \Spy\MsbcRestClient\Model\SpyCustLedgerListResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyCustLedgerPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string
$select = 'select_example'; // string
$data_access_intent = 'ReadOnly'; // string | Data Access Intent

try {
    $result = $apiInstance->getCustomerLedgerEntries($filter, $select, $data_access_intent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyCustLedgerPageApi->getCustomerLedgerEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |
| **select** | **string**|  | [optional] |
| **data_access_intent** | **string**| Data Access Intent | [optional] [default to &#39;ReadOnly&#39;] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyCustLedgerListResponse**](../Model/SpyCustLedgerListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerLedgerEntry()`

```php
getCustomerLedgerEntry($entry_no, $data_access_intent, $select): \Spy\MsbcRestClient\Model\SpyCustLedgerResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyCustLedgerPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entry_no = 'entry_no_example'; // string | The Entry_No of the CustomerLedgerEntry to retrieve
$data_access_intent = 'ReadOnly'; // string | Data Access Intent
$select = 'select_example'; // string

try {
    $result = $apiInstance->getCustomerLedgerEntry($entry_no, $data_access_intent, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyCustLedgerPageApi->getCustomerLedgerEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entry_no** | **string**| The Entry_No of the CustomerLedgerEntry to retrieve | |
| **data_access_intent** | **string**| Data Access Intent | [optional] [default to &#39;ReadOnly&#39;] |
| **select** | **string**|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyCustLedgerResponse**](../Model/SpyCustLedgerResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
