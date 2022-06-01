# Spy\MsbcRestClient\SpyCustomerPageApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX/Production/ODataV4/Company(&#39;XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX&#39;), except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCustomer()**](SpyCustomerPageApi.md#createCustomer) | **POST** /SpyCustomer |  |
| [**deleteCustomer()**](SpyCustomerPageApi.md#deleteCustomer) | **DELETE** /SpyCustomer(\&#39;{account}\&#39;) |  |
| [**editCustomer()**](SpyCustomerPageApi.md#editCustomer) | **PATCH** /SpyCustomer(\&#39;{account}\&#39;) |  |
| [**getCustomer()**](SpyCustomerPageApi.md#getCustomer) | **GET** /SpyCustomer(\&#39;{account}\&#39;) |  |
| [**getCustomers()**](SpyCustomerPageApi.md#getCustomers) | **GET** /SpyCustomer |  |


## `createCustomer()`

```php
createCustomer($spy_customer): \Spy\MsbcRestClient\Model\SpyCustomerResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyCustomerPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$spy_customer = new \Spy\MsbcRestClient\Model\SpyCustomer(); // \Spy\MsbcRestClient\Model\SpyCustomer

try {
    $result = $apiInstance->createCustomer($spy_customer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyCustomerPageApi->createCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **spy_customer** | [**\Spy\MsbcRestClient\Model\SpyCustomer**](../Model/SpyCustomer.md)|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyCustomerResponse**](../Model/SpyCustomerResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCustomer()`

```php
deleteCustomer($account)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyCustomerPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 'account_example'; // string | The account of the Customer to retrieve

try {
    $apiInstance->deleteCustomer($account);
} catch (Exception $e) {
    echo 'Exception when calling SpyCustomerPageApi->deleteCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **string**| The account of the Customer to retrieve | |

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

## `editCustomer()`

```php
editCustomer($account, $if_match, $spy_customer): \Spy\MsbcRestClient\Model\SpyCustomerResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyCustomerPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 'account_example'; // string | The account of the Customer to retrieve
$if_match = 'if_match_example'; // string | The ETag of the Entity to update
$spy_customer = new \Spy\MsbcRestClient\Model\SpyCustomer(); // \Spy\MsbcRestClient\Model\SpyCustomer

try {
    $result = $apiInstance->editCustomer($account, $if_match, $spy_customer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyCustomerPageApi->editCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **string**| The account of the Customer to retrieve | |
| **if_match** | **string**| The ETag of the Entity to update | |
| **spy_customer** | [**\Spy\MsbcRestClient\Model\SpyCustomer**](../Model/SpyCustomer.md)|  | |

### Return type

[**\Spy\MsbcRestClient\Model\SpyCustomerResponse**](../Model/SpyCustomerResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomer()`

```php
getCustomer($account, $data_access_intent): \Spy\MsbcRestClient\Model\SpyCustomerResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyCustomerPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = 'account_example'; // string | The account of the Customer to retrieve
$data_access_intent = 'ReadOnly'; // string | Data Access Intent

try {
    $result = $apiInstance->getCustomer($account, $data_access_intent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyCustomerPageApi->getCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | **string**| The account of the Customer to retrieve | |
| **data_access_intent** | **string**| Data Access Intent | [optional] [default to &#39;ReadOnly&#39;] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyCustomerResponse**](../Model/SpyCustomerResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomers()`

```php
getCustomers($filter, $select, $data_access_intent): \Spy\MsbcRestClient\Model\SpyCustomerListResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyCustomerPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string
$select = 'select_example'; // string
$data_access_intent = 'ReadOnly'; // string | Data Access Intent

try {
    $result = $apiInstance->getCustomers($filter, $select, $data_access_intent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyCustomerPageApi->getCustomers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |
| **select** | **string**|  | [optional] |
| **data_access_intent** | **string**| Data Access Intent | [optional] [default to &#39;ReadOnly&#39;] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyCustomerListResponse**](../Model/SpyCustomerListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
