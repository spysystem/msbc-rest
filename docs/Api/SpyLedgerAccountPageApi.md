# Spy\MsbcRestClient\SpyLedgerAccountPageApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX/Production/ODataV4/Company(&#39;XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX&#39;), except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createLedgerAccount()**](SpyLedgerAccountPageApi.md#createLedgerAccount) | **POST** /SpyLedgerAccount |  |
| [**deleteLedgerAccount()**](SpyLedgerAccountPageApi.md#deleteLedgerAccount) | **DELETE** /SpyLedgerAccount(\&#39;{No}\&#39;) |  |
| [**editLedgerAccount()**](SpyLedgerAccountPageApi.md#editLedgerAccount) | **PATCH** /SpyLedgerAccount(\&#39;{No}\&#39;) |  |
| [**getLedgerAccount()**](SpyLedgerAccountPageApi.md#getLedgerAccount) | **GET** /SpyLedgerAccount(\&#39;{No}\&#39;) |  |
| [**getLedgerAccounts()**](SpyLedgerAccountPageApi.md#getLedgerAccounts) | **GET** /SpyLedgerAccount |  |


## `createLedgerAccount()`

```php
createLedgerAccount($spy_ledger_account, $select): \Spy\MsbcRestClient\Model\SpyLedgerAccountResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyLedgerAccountPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$spy_ledger_account = new \Spy\MsbcRestClient\Model\SpyLedgerAccount(); // \Spy\MsbcRestClient\Model\SpyLedgerAccount
$select = 'select_example'; // string

try {
    $result = $apiInstance->createLedgerAccount($spy_ledger_account, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyLedgerAccountPageApi->createLedgerAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **spy_ledger_account** | [**\Spy\MsbcRestClient\Model\SpyLedgerAccount**](../Model/SpyLedgerAccount.md)|  | |
| **select** | **string**|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyLedgerAccountResponse**](../Model/SpyLedgerAccountResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteLedgerAccount()`

```php
deleteLedgerAccount($no)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyLedgerAccountPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$no = 'no_example'; // string | The No of the LedgerAccount to retrieve

try {
    $apiInstance->deleteLedgerAccount($no);
} catch (Exception $e) {
    echo 'Exception when calling SpyLedgerAccountPageApi->deleteLedgerAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **no** | **string**| The No of the LedgerAccount to retrieve | |

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

## `editLedgerAccount()`

```php
editLedgerAccount($no, $if_match, $spy_ledger_account, $select): \Spy\MsbcRestClient\Model\SpyLedgerAccountResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyLedgerAccountPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$no = 'no_example'; // string | The No of the LedgerAccount to retrieve
$if_match = 'if_match_example'; // string | The ETag of the Entity to update
$spy_ledger_account = new \Spy\MsbcRestClient\Model\SpyLedgerAccount(); // \Spy\MsbcRestClient\Model\SpyLedgerAccount
$select = 'select_example'; // string

try {
    $result = $apiInstance->editLedgerAccount($no, $if_match, $spy_ledger_account, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyLedgerAccountPageApi->editLedgerAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **no** | **string**| The No of the LedgerAccount to retrieve | |
| **if_match** | **string**| The ETag of the Entity to update | |
| **spy_ledger_account** | [**\Spy\MsbcRestClient\Model\SpyLedgerAccount**](../Model/SpyLedgerAccount.md)|  | |
| **select** | **string**|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyLedgerAccountResponse**](../Model/SpyLedgerAccountResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLedgerAccount()`

```php
getLedgerAccount($no, $data_access_intent, $select): \Spy\MsbcRestClient\Model\SpyLedgerAccountResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyLedgerAccountPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$no = 'no_example'; // string | The No of the LedgerAccount to retrieve
$data_access_intent = 'ReadOnly'; // string | Data Access Intent
$select = 'select_example'; // string

try {
    $result = $apiInstance->getLedgerAccount($no, $data_access_intent, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyLedgerAccountPageApi->getLedgerAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **no** | **string**| The No of the LedgerAccount to retrieve | |
| **data_access_intent** | **string**| Data Access Intent | [optional] [default to &#39;ReadOnly&#39;] |
| **select** | **string**|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyLedgerAccountResponse**](../Model/SpyLedgerAccountResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLedgerAccounts()`

```php
getLedgerAccounts($filter, $select, $data_access_intent): \Spy\MsbcRestClient\Model\SpyLedgerAccountListResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyLedgerAccountPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string
$select = 'select_example'; // string
$data_access_intent = 'ReadOnly'; // string | Data Access Intent

try {
    $result = $apiInstance->getLedgerAccounts($filter, $select, $data_access_intent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyLedgerAccountPageApi->getLedgerAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |
| **select** | **string**|  | [optional] |
| **data_access_intent** | **string**| Data Access Intent | [optional] [default to &#39;ReadOnly&#39;] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyLedgerAccountListResponse**](../Model/SpyLedgerAccountListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
