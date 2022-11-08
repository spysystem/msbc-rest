# Spy\MsbcRestClient\SpyCustomerTemplatePageApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX/Production/ODataV4/Company(&#39;XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX&#39;), except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCustomerTemplate()**](SpyCustomerTemplatePageApi.md#createCustomerTemplate) | **POST** /SpyCustomerTemplate |  |
| [**deleteCustomerTemplate()**](SpyCustomerTemplatePageApi.md#deleteCustomerTemplate) | **DELETE** /SpyCustomerTemplate(\&#39;{Code}\&#39;) |  |
| [**editCustomerTemplate()**](SpyCustomerTemplatePageApi.md#editCustomerTemplate) | **PATCH** /SpyCustomerTemplate(\&#39;{Code}\&#39;) |  |
| [**getCustomerTemplate()**](SpyCustomerTemplatePageApi.md#getCustomerTemplate) | **GET** /SpyCustomerTemplate(\&#39;{Code}\&#39;) |  |
| [**getCustomerTemplates()**](SpyCustomerTemplatePageApi.md#getCustomerTemplates) | **GET** /SpyCustomerTemplate |  |


## `createCustomerTemplate()`

```php
createCustomerTemplate($spy_customer_template, $select): \Spy\MsbcRestClient\Model\SpyCustomerTemplateResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyCustomerTemplatePageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$spy_customer_template = new \Spy\MsbcRestClient\Model\SpyCustomerTemplate(); // \Spy\MsbcRestClient\Model\SpyCustomerTemplate
$select = 'select_example'; // string

try {
    $result = $apiInstance->createCustomerTemplate($spy_customer_template, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyCustomerTemplatePageApi->createCustomerTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **spy_customer_template** | [**\Spy\MsbcRestClient\Model\SpyCustomerTemplate**](../Model/SpyCustomerTemplate.md)|  | |
| **select** | **string**|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyCustomerTemplateResponse**](../Model/SpyCustomerTemplateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCustomerTemplate()`

```php
deleteCustomerTemplate($code)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyCustomerTemplatePageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | The Code of the CustomerTemplate to retrieve

try {
    $apiInstance->deleteCustomerTemplate($code);
} catch (Exception $e) {
    echo 'Exception when calling SpyCustomerTemplatePageApi->deleteCustomerTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| The Code of the CustomerTemplate to retrieve | |

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

## `editCustomerTemplate()`

```php
editCustomerTemplate($code, $if_match, $spy_customer_template, $select): \Spy\MsbcRestClient\Model\SpyCustomerTemplateResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyCustomerTemplatePageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | The Code of the CustomerTemplate to retrieve
$if_match = 'if_match_example'; // string | The ETag of the Entity to update
$spy_customer_template = new \Spy\MsbcRestClient\Model\SpyCustomerTemplate(); // \Spy\MsbcRestClient\Model\SpyCustomerTemplate
$select = 'select_example'; // string

try {
    $result = $apiInstance->editCustomerTemplate($code, $if_match, $spy_customer_template, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyCustomerTemplatePageApi->editCustomerTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| The Code of the CustomerTemplate to retrieve | |
| **if_match** | **string**| The ETag of the Entity to update | |
| **spy_customer_template** | [**\Spy\MsbcRestClient\Model\SpyCustomerTemplate**](../Model/SpyCustomerTemplate.md)|  | |
| **select** | **string**|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyCustomerTemplateResponse**](../Model/SpyCustomerTemplateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerTemplate()`

```php
getCustomerTemplate($code, $data_access_intent, $select): \Spy\MsbcRestClient\Model\SpyCustomerTemplateResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyCustomerTemplatePageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | The Code of the CustomerTemplate to retrieve
$data_access_intent = 'ReadOnly'; // string | Data Access Intent
$select = 'select_example'; // string

try {
    $result = $apiInstance->getCustomerTemplate($code, $data_access_intent, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyCustomerTemplatePageApi->getCustomerTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| The Code of the CustomerTemplate to retrieve | |
| **data_access_intent** | **string**| Data Access Intent | [optional] [default to &#39;ReadOnly&#39;] |
| **select** | **string**|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyCustomerTemplateResponse**](../Model/SpyCustomerTemplateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerTemplates()`

```php
getCustomerTemplates($filter, $select, $data_access_intent): \Spy\MsbcRestClient\Model\SpyCustomerTemplateListResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyCustomerTemplatePageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string
$select = 'select_example'; // string
$data_access_intent = 'ReadOnly'; // string | Data Access Intent

try {
    $result = $apiInstance->getCustomerTemplates($filter, $select, $data_access_intent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyCustomerTemplatePageApi->getCustomerTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |
| **select** | **string**|  | [optional] |
| **data_access_intent** | **string**| Data Access Intent | [optional] [default to &#39;ReadOnly&#39;] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyCustomerTemplateListResponse**](../Model/SpyCustomerTemplateListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
