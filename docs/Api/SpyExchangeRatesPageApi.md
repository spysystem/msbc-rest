# Spy\MsbcRestClient\SpyExchangeRatesPageApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX/Production/ODataV4/Company(&#39;XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX&#39;), except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createExchangeRate()**](SpyExchangeRatesPageApi.md#createExchangeRate) | **POST** /SpyExchangeRates |  |
| [**deleteExchangeRate()**](SpyExchangeRatesPageApi.md#deleteExchangeRate) | **DELETE** /SpyExchangeRates(\&#39;{CurrencyCode}\&#39;,{StartingDate}) |  |
| [**editExchangeRate()**](SpyExchangeRatesPageApi.md#editExchangeRate) | **PATCH** /SpyExchangeRates(\&#39;{CurrencyCode}\&#39;,{StartingDate}) |  |
| [**getExchangeRate()**](SpyExchangeRatesPageApi.md#getExchangeRate) | **GET** /SpyExchangeRates(\&#39;{CurrencyCode}\&#39;,{StartingDate}) |  |
| [**getExchangeRates()**](SpyExchangeRatesPageApi.md#getExchangeRates) | **GET** /SpyExchangeRates |  |


## `createExchangeRate()`

```php
createExchangeRate($spy_exchange_rates): \Spy\MsbcRestClient\Model\SpyExchangeRatesResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyExchangeRatesPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$spy_exchange_rates = new \Spy\MsbcRestClient\Model\SpyExchangeRates(); // \Spy\MsbcRestClient\Model\SpyExchangeRates

try {
    $result = $apiInstance->createExchangeRate($spy_exchange_rates);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyExchangeRatesPageApi->createExchangeRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **spy_exchange_rates** | [**\Spy\MsbcRestClient\Model\SpyExchangeRates**](../Model/SpyExchangeRates.md)|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyExchangeRatesResponse**](../Model/SpyExchangeRatesResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteExchangeRate()`

```php
deleteExchangeRate($currency_code, $starting_date)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyExchangeRatesPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency_code = 'currency_code_example'; // string | The CurrencyCode of the ExchangeRate to retrieve
$starting_date = 'starting_date_example'; // string | The Starting Date of the ExchangeRate to retrieve

try {
    $apiInstance->deleteExchangeRate($currency_code, $starting_date);
} catch (Exception $e) {
    echo 'Exception when calling SpyExchangeRatesPageApi->deleteExchangeRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency_code** | **string**| The CurrencyCode of the ExchangeRate to retrieve | |
| **starting_date** | **string**| The Starting Date of the ExchangeRate to retrieve | |

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

## `editExchangeRate()`

```php
editExchangeRate($currency_code, $starting_date, $if_match, $spy_exchange_rates): \Spy\MsbcRestClient\Model\SpyExchangeRatesResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyExchangeRatesPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency_code = 'currency_code_example'; // string | The CurrencyCode of the ExchangeRate to retrieve
$starting_date = 'starting_date_example'; // string | The Starting Date of the ExchangeRate to retrieve
$if_match = 'if_match_example'; // string | The ETag of the Entity to update
$spy_exchange_rates = new \Spy\MsbcRestClient\Model\SpyExchangeRates(); // \Spy\MsbcRestClient\Model\SpyExchangeRates

try {
    $result = $apiInstance->editExchangeRate($currency_code, $starting_date, $if_match, $spy_exchange_rates);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyExchangeRatesPageApi->editExchangeRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency_code** | **string**| The CurrencyCode of the ExchangeRate to retrieve | |
| **starting_date** | **string**| The Starting Date of the ExchangeRate to retrieve | |
| **if_match** | **string**| The ETag of the Entity to update | |
| **spy_exchange_rates** | [**\Spy\MsbcRestClient\Model\SpyExchangeRates**](../Model/SpyExchangeRates.md)|  | |

### Return type

[**\Spy\MsbcRestClient\Model\SpyExchangeRatesResponse**](../Model/SpyExchangeRatesResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExchangeRate()`

```php
getExchangeRate($currency_code, $starting_date, $data_access_intent): \Spy\MsbcRestClient\Model\SpyExchangeRatesResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyExchangeRatesPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency_code = 'currency_code_example'; // string | The CurrencyCode of the ExchangeRate to retrieve
$starting_date = 'starting_date_example'; // string | The Starting Date of the ExchangeRate to retrieve
$data_access_intent = 'ReadOnly'; // string | Data Access Intent

try {
    $result = $apiInstance->getExchangeRate($currency_code, $starting_date, $data_access_intent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyExchangeRatesPageApi->getExchangeRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency_code** | **string**| The CurrencyCode of the ExchangeRate to retrieve | |
| **starting_date** | **string**| The Starting Date of the ExchangeRate to retrieve | |
| **data_access_intent** | **string**| Data Access Intent | [optional] [default to &#39;ReadOnly&#39;] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyExchangeRatesResponse**](../Model/SpyExchangeRatesResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExchangeRates()`

```php
getExchangeRates($filter, $select, $data_access_intent): \Spy\MsbcRestClient\Model\SpyExchangeRatesListResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyExchangeRatesPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string
$select = 'select_example'; // string
$data_access_intent = 'ReadOnly'; // string | Data Access Intent

try {
    $result = $apiInstance->getExchangeRates($filter, $select, $data_access_intent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyExchangeRatesPageApi->getExchangeRates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |
| **select** | **string**|  | [optional] |
| **data_access_intent** | **string**| Data Access Intent | [optional] [default to &#39;ReadOnly&#39;] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyExchangeRatesListResponse**](../Model/SpyExchangeRatesListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
