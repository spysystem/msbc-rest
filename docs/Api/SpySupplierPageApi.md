# Spy\MsbcRestClient\SpySupplierPageApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX/Production/ODataV4/Company(&#39;XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX&#39;), except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSupplier()**](SpySupplierPageApi.md#createSupplier) | **POST** /SpySupplier |  |
| [**deleteSupplier()**](SpySupplierPageApi.md#deleteSupplier) | **DELETE** /SpySupplier(\&#39;{No}\&#39;) |  |
| [**editSupplier()**](SpySupplierPageApi.md#editSupplier) | **PATCH** /SpySupplier(\&#39;{No}\&#39;) |  |
| [**getSupplier()**](SpySupplierPageApi.md#getSupplier) | **GET** /SpySupplier(\&#39;{No}\&#39;) |  |
| [**getSuppliers()**](SpySupplierPageApi.md#getSuppliers) | **GET** /SpySupplier |  |


## `createSupplier()`

```php
createSupplier($spy_supplier): \Spy\MsbcRestClient\Model\SpySupplierResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpySupplierPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$spy_supplier = new \Spy\MsbcRestClient\Model\SpySupplier(); // \Spy\MsbcRestClient\Model\SpySupplier

try {
    $result = $apiInstance->createSupplier($spy_supplier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpySupplierPageApi->createSupplier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **spy_supplier** | [**\Spy\MsbcRestClient\Model\SpySupplier**](../Model/SpySupplier.md)|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpySupplierResponse**](../Model/SpySupplierResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSupplier()`

```php
deleteSupplier($no)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpySupplierPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$no = 'no_example'; // string | The No of the Supplier to retrieve

try {
    $apiInstance->deleteSupplier($no);
} catch (Exception $e) {
    echo 'Exception when calling SpySupplierPageApi->deleteSupplier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **no** | **string**| The No of the Supplier to retrieve | |

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

## `editSupplier()`

```php
editSupplier($no, $if_match, $spy_supplier): \Spy\MsbcRestClient\Model\SpySupplierResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpySupplierPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$no = 'no_example'; // string | The No of the Supplier to retrieve
$if_match = 'if_match_example'; // string | The ETag of the Entity to update
$spy_supplier = new \Spy\MsbcRestClient\Model\SpySupplier(); // \Spy\MsbcRestClient\Model\SpySupplier

try {
    $result = $apiInstance->editSupplier($no, $if_match, $spy_supplier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpySupplierPageApi->editSupplier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **no** | **string**| The No of the Supplier to retrieve | |
| **if_match** | **string**| The ETag of the Entity to update | |
| **spy_supplier** | [**\Spy\MsbcRestClient\Model\SpySupplier**](../Model/SpySupplier.md)|  | |

### Return type

[**\Spy\MsbcRestClient\Model\SpySupplierResponse**](../Model/SpySupplierResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSupplier()`

```php
getSupplier($no, $data_access_intent): \Spy\MsbcRestClient\Model\SpySupplierResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpySupplierPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$no = 'no_example'; // string | The No of the Supplier to retrieve
$data_access_intent = 'ReadOnly'; // string | Data Access Intent

try {
    $result = $apiInstance->getSupplier($no, $data_access_intent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpySupplierPageApi->getSupplier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **no** | **string**| The No of the Supplier to retrieve | |
| **data_access_intent** | **string**| Data Access Intent | [optional] [default to &#39;ReadOnly&#39;] |

### Return type

[**\Spy\MsbcRestClient\Model\SpySupplierResponse**](../Model/SpySupplierResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSuppliers()`

```php
getSuppliers($filter, $select, $data_access_intent): \Spy\MsbcRestClient\Model\SpySupplierListResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpySupplierPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string
$select = 'select_example'; // string
$data_access_intent = 'ReadOnly'; // string | Data Access Intent

try {
    $result = $apiInstance->getSuppliers($filter, $select, $data_access_intent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpySupplierPageApi->getSuppliers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |
| **select** | **string**|  | [optional] |
| **data_access_intent** | **string**| Data Access Intent | [optional] [default to &#39;ReadOnly&#39;] |

### Return type

[**\Spy\MsbcRestClient\Model\SpySupplierListResponse**](../Model/SpySupplierListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
