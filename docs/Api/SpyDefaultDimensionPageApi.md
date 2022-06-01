# Spy\MsbcRestClient\SpyDefaultDimensionPageApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX/Production/ODataV4/Company(&#39;XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX&#39;), except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDefaultDimension()**](SpyDefaultDimensionPageApi.md#createDefaultDimension) | **POST** /SpyDefaultDimension |  |
| [**deleteDefaultDimension()**](SpyDefaultDimensionPageApi.md#deleteDefaultDimension) | **DELETE** /SpyDefaultDimension({TableID},\&#39;{No}\&#39;,\&#39;{DimensionCode}\&#39;) |  |
| [**editDefaultDimension()**](SpyDefaultDimensionPageApi.md#editDefaultDimension) | **PATCH** /SpyDefaultDimension({TableID},\&#39;{No}\&#39;,\&#39;{DimensionCode}\&#39;) |  |
| [**getDefaultDimension()**](SpyDefaultDimensionPageApi.md#getDefaultDimension) | **GET** /SpyDefaultDimension({TableID},\&#39;{No}\&#39;,\&#39;{DimensionCode}\&#39;) |  |
| [**getDefaultDimensions()**](SpyDefaultDimensionPageApi.md#getDefaultDimensions) | **GET** /SpyDefaultDimension |  |


## `createDefaultDimension()`

```php
createDefaultDimension($spy_default_dimension): \Spy\MsbcRestClient\Model\SpyDefaultDimensionResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyDefaultDimensionPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$spy_default_dimension = new \Spy\MsbcRestClient\Model\SpyDefaultDimension(); // \Spy\MsbcRestClient\Model\SpyDefaultDimension

try {
    $result = $apiInstance->createDefaultDimension($spy_default_dimension);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyDefaultDimensionPageApi->createDefaultDimension: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **spy_default_dimension** | [**\Spy\MsbcRestClient\Model\SpyDefaultDimension**](../Model/SpyDefaultDimension.md)|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyDefaultDimensionResponse**](../Model/SpyDefaultDimensionResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDefaultDimension()`

```php
deleteDefaultDimension($table_id, $no, $dimension_code)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyDefaultDimensionPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$table_id = 56; // int | The TableID of the DefaultDimension to retrieve
$no = 'no_example'; // string | The TableID of the DefaultDimension to retrieve
$dimension_code = 'dimension_code_example'; // string | The TableID of the DefaultDimension to retrieve

try {
    $apiInstance->deleteDefaultDimension($table_id, $no, $dimension_code);
} catch (Exception $e) {
    echo 'Exception when calling SpyDefaultDimensionPageApi->deleteDefaultDimension: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **table_id** | **int**| The TableID of the DefaultDimension to retrieve | |
| **no** | **string**| The TableID of the DefaultDimension to retrieve | |
| **dimension_code** | **string**| The TableID of the DefaultDimension to retrieve | |

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

## `editDefaultDimension()`

```php
editDefaultDimension($table_id, $no, $dimension_code, $if_match, $spy_default_dimension): \Spy\MsbcRestClient\Model\SpyDefaultDimensionResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyDefaultDimensionPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$table_id = 56; // int | The TableID of the DefaultDimension to retrieve
$no = 'no_example'; // string | The TableID of the DefaultDimension to retrieve
$dimension_code = 'dimension_code_example'; // string | The TableID of the DefaultDimension to retrieve
$if_match = 'if_match_example'; // string | The ETag of the Entity to update
$spy_default_dimension = new \Spy\MsbcRestClient\Model\SpyDefaultDimension(); // \Spy\MsbcRestClient\Model\SpyDefaultDimension

try {
    $result = $apiInstance->editDefaultDimension($table_id, $no, $dimension_code, $if_match, $spy_default_dimension);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyDefaultDimensionPageApi->editDefaultDimension: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **table_id** | **int**| The TableID of the DefaultDimension to retrieve | |
| **no** | **string**| The TableID of the DefaultDimension to retrieve | |
| **dimension_code** | **string**| The TableID of the DefaultDimension to retrieve | |
| **if_match** | **string**| The ETag of the Entity to update | |
| **spy_default_dimension** | [**\Spy\MsbcRestClient\Model\SpyDefaultDimension**](../Model/SpyDefaultDimension.md)|  | |

### Return type

[**\Spy\MsbcRestClient\Model\SpyDefaultDimensionResponse**](../Model/SpyDefaultDimensionResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDefaultDimension()`

```php
getDefaultDimension($table_id, $no, $dimension_code, $data_access_intent): \Spy\MsbcRestClient\Model\SpyDefaultDimensionResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyDefaultDimensionPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$table_id = 56; // int | The TableID of the DefaultDimension to retrieve
$no = 'no_example'; // string | The TableID of the DefaultDimension to retrieve
$dimension_code = 'dimension_code_example'; // string | The TableID of the DefaultDimension to retrieve
$data_access_intent = 'ReadOnly'; // string | Data Access Intent

try {
    $result = $apiInstance->getDefaultDimension($table_id, $no, $dimension_code, $data_access_intent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyDefaultDimensionPageApi->getDefaultDimension: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **table_id** | **int**| The TableID of the DefaultDimension to retrieve | |
| **no** | **string**| The TableID of the DefaultDimension to retrieve | |
| **dimension_code** | **string**| The TableID of the DefaultDimension to retrieve | |
| **data_access_intent** | **string**| Data Access Intent | [optional] [default to &#39;ReadOnly&#39;] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyDefaultDimensionResponse**](../Model/SpyDefaultDimensionResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDefaultDimensions()`

```php
getDefaultDimensions($filter, $select, $data_access_intent): \Spy\MsbcRestClient\Model\SpyDefaultDimensionListResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyDefaultDimensionPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string
$select = 'select_example'; // string
$data_access_intent = 'ReadOnly'; // string | Data Access Intent

try {
    $result = $apiInstance->getDefaultDimensions($filter, $select, $data_access_intent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyDefaultDimensionPageApi->getDefaultDimensions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |
| **select** | **string**|  | [optional] |
| **data_access_intent** | **string**| Data Access Intent | [optional] [default to &#39;ReadOnly&#39;] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyDefaultDimensionListResponse**](../Model/SpyDefaultDimensionListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
