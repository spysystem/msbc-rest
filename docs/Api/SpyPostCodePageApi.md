# Spy\MsbcRestClient\SpyPostCodePageApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX/Production/ODataV4/Company(&#39;XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX&#39;), except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPostalCode()**](SpyPostCodePageApi.md#createPostalCode) | **POST** /SpyPostCode |  |
| [**deletePostalCode()**](SpyPostCodePageApi.md#deletePostalCode) | **DELETE** /SpyPostCode(\&#39;{Code}\&#39;,\&#39;{City}\&#39;) |  |
| [**editPostalCode()**](SpyPostCodePageApi.md#editPostalCode) | **PATCH** /SpyPostCode(\&#39;{Code}\&#39;,\&#39;{City}\&#39;) |  |
| [**getPostalCode()**](SpyPostCodePageApi.md#getPostalCode) | **GET** /SpyPostCode(\&#39;{Code}\&#39;,\&#39;{City}\&#39;) |  |
| [**getPostalCodes()**](SpyPostCodePageApi.md#getPostalCodes) | **GET** /SpyPostCode |  |


## `createPostalCode()`

```php
createPostalCode($spy_post_code, $select): \Spy\MsbcRestClient\Model\SpyPostCodeResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyPostCodePageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$spy_post_code = new \Spy\MsbcRestClient\Model\SpyPostCode(); // \Spy\MsbcRestClient\Model\SpyPostCode
$select = 'select_example'; // string

try {
    $result = $apiInstance->createPostalCode($spy_post_code, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyPostCodePageApi->createPostalCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **spy_post_code** | [**\Spy\MsbcRestClient\Model\SpyPostCode**](../Model/SpyPostCode.md)|  | |
| **select** | **string**|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyPostCodeResponse**](../Model/SpyPostCodeResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePostalCode()`

```php
deletePostalCode($code, $city)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyPostCodePageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | The Code of the PostalCode to retrieve
$city = 'city_example'; // string | The City of the PostalCode to retrieve

try {
    $apiInstance->deletePostalCode($code, $city);
} catch (Exception $e) {
    echo 'Exception when calling SpyPostCodePageApi->deletePostalCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| The Code of the PostalCode to retrieve | |
| **city** | **string**| The City of the PostalCode to retrieve | |

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

## `editPostalCode()`

```php
editPostalCode($code, $city, $if_match, $spy_post_code, $select): \Spy\MsbcRestClient\Model\SpyPostCodeResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyPostCodePageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | The Code of the PostalCode to retrieve
$city = 'city_example'; // string | The City of the PostalCode to retrieve
$if_match = 'if_match_example'; // string | The ETag of the Entity to update
$spy_post_code = new \Spy\MsbcRestClient\Model\SpyPostCode(); // \Spy\MsbcRestClient\Model\SpyPostCode
$select = 'select_example'; // string

try {
    $result = $apiInstance->editPostalCode($code, $city, $if_match, $spy_post_code, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyPostCodePageApi->editPostalCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| The Code of the PostalCode to retrieve | |
| **city** | **string**| The City of the PostalCode to retrieve | |
| **if_match** | **string**| The ETag of the Entity to update | |
| **spy_post_code** | [**\Spy\MsbcRestClient\Model\SpyPostCode**](../Model/SpyPostCode.md)|  | |
| **select** | **string**|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyPostCodeResponse**](../Model/SpyPostCodeResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPostalCode()`

```php
getPostalCode($code, $city, $data_access_intent, $select): \Spy\MsbcRestClient\Model\SpyPostCodeResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyPostCodePageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | The Code of the PostalCode to retrieve
$city = 'city_example'; // string | The City of the PostalCode to retrieve
$data_access_intent = 'ReadOnly'; // string | Data Access Intent
$select = 'select_example'; // string

try {
    $result = $apiInstance->getPostalCode($code, $city, $data_access_intent, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyPostCodePageApi->getPostalCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| The Code of the PostalCode to retrieve | |
| **city** | **string**| The City of the PostalCode to retrieve | |
| **data_access_intent** | **string**| Data Access Intent | [optional] [default to &#39;ReadOnly&#39;] |
| **select** | **string**|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyPostCodeResponse**](../Model/SpyPostCodeResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPostalCodes()`

```php
getPostalCodes($filter, $select, $data_access_intent): \Spy\MsbcRestClient\Model\SpyPostCodeListResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyPostCodePageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string
$select = 'select_example'; // string
$data_access_intent = 'ReadOnly'; // string | Data Access Intent

try {
    $result = $apiInstance->getPostalCodes($filter, $select, $data_access_intent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyPostCodePageApi->getPostalCodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |
| **select** | **string**|  | [optional] |
| **data_access_intent** | **string**| Data Access Intent | [optional] [default to &#39;ReadOnly&#39;] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyPostCodeListResponse**](../Model/SpyPostCodeListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
