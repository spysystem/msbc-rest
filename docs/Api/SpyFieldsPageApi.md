# Spy\MsbcRestClient\SpyFieldsPageApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX/Production/ODataV4/Company(&#39;XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX&#39;), except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createField()**](SpyFieldsPageApi.md#createField) | **POST** /SpyFieldsPage |  |
| [**deleteField()**](SpyFieldsPageApi.md#deleteField) | **DELETE** /SpyFieldsPage({TableNo},{FieldNo}) |  |
| [**editField()**](SpyFieldsPageApi.md#editField) | **PATCH** /SpyFieldsPage({TableNo},{FieldNo}) |  |
| [**getField()**](SpyFieldsPageApi.md#getField) | **GET** /SpyFieldsPage({TableNo},{FieldNo}) |  |
| [**getFields()**](SpyFieldsPageApi.md#getFields) | **GET** /SpyFieldsPage |  |


## `createField()`

```php
createField($spy_fields, $select): \Spy\MsbcRestClient\Model\SpyFieldsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyFieldsPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$spy_fields = new \Spy\MsbcRestClient\Model\SpyFields(); // \Spy\MsbcRestClient\Model\SpyFields
$select = 'select_example'; // string

try {
    $result = $apiInstance->createField($spy_fields, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyFieldsPageApi->createField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **spy_fields** | [**\Spy\MsbcRestClient\Model\SpyFields**](../Model/SpyFields.md)|  | |
| **select** | **string**|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyFieldsResponse**](../Model/SpyFieldsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteField()`

```php
deleteField($table_no, $field_no)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyFieldsPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$table_no = 'table_no_example'; // string | The TableNo of the Field to retrieve
$field_no = 'field_no_example'; // string | The FieldNo of the Field to retrieve

try {
    $apiInstance->deleteField($table_no, $field_no);
} catch (Exception $e) {
    echo 'Exception when calling SpyFieldsPageApi->deleteField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **table_no** | **string**| The TableNo of the Field to retrieve | |
| **field_no** | **string**| The FieldNo of the Field to retrieve | |

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

## `editField()`

```php
editField($table_no, $field_no, $if_match, $spy_fields, $select): \Spy\MsbcRestClient\Model\SpyFieldsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyFieldsPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$table_no = 'table_no_example'; // string | The TableNo of the Field to retrieve
$field_no = 'field_no_example'; // string | The FieldNo of the Field to retrieve
$if_match = 'if_match_example'; // string | The ETag of the Entity to update
$spy_fields = new \Spy\MsbcRestClient\Model\SpyFields(); // \Spy\MsbcRestClient\Model\SpyFields
$select = 'select_example'; // string

try {
    $result = $apiInstance->editField($table_no, $field_no, $if_match, $spy_fields, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyFieldsPageApi->editField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **table_no** | **string**| The TableNo of the Field to retrieve | |
| **field_no** | **string**| The FieldNo of the Field to retrieve | |
| **if_match** | **string**| The ETag of the Entity to update | |
| **spy_fields** | [**\Spy\MsbcRestClient\Model\SpyFields**](../Model/SpyFields.md)|  | |
| **select** | **string**|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyFieldsResponse**](../Model/SpyFieldsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getField()`

```php
getField($table_no, $field_no, $data_access_intent, $select): \Spy\MsbcRestClient\Model\SpyFieldsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyFieldsPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$table_no = 'table_no_example'; // string | The TableNo of the Field to retrieve
$field_no = 'field_no_example'; // string | The FieldNo of the Field to retrieve
$data_access_intent = 'ReadOnly'; // string | Data Access Intent
$select = 'select_example'; // string

try {
    $result = $apiInstance->getField($table_no, $field_no, $data_access_intent, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyFieldsPageApi->getField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **table_no** | **string**| The TableNo of the Field to retrieve | |
| **field_no** | **string**| The FieldNo of the Field to retrieve | |
| **data_access_intent** | **string**| Data Access Intent | [optional] [default to &#39;ReadOnly&#39;] |
| **select** | **string**|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyFieldsResponse**](../Model/SpyFieldsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFields()`

```php
getFields($filter, $select, $data_access_intent): \Spy\MsbcRestClient\Model\SpyFieldsListResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyFieldsPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string
$select = 'select_example'; // string
$data_access_intent = 'ReadOnly'; // string | Data Access Intent

try {
    $result = $apiInstance->getFields($filter, $select, $data_access_intent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyFieldsPageApi->getFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |
| **select** | **string**|  | [optional] |
| **data_access_intent** | **string**| Data Access Intent | [optional] [default to &#39;ReadOnly&#39;] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyFieldsListResponse**](../Model/SpyFieldsListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
