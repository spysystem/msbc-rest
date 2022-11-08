# Spy\MsbcRestClient\SpyTemplateLinePageApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX/Production/ODataV4/Company(&#39;XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX&#39;), except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTemplateLine()**](SpyTemplateLinePageApi.md#createTemplateLine) | **POST** /SpyTemplateLine |  |
| [**deleteTemplateLine()**](SpyTemplateLinePageApi.md#deleteTemplateLine) | **DELETE** /SpyTemplateLine(\&#39;{Template}\&#39;,{LineNo}) |  |
| [**editTemplateLine()**](SpyTemplateLinePageApi.md#editTemplateLine) | **PATCH** /SpyTemplateLine(\&#39;{Template}\&#39;,{LineNo}) |  |
| [**getTemplateLine()**](SpyTemplateLinePageApi.md#getTemplateLine) | **GET** /SpyTemplateLine(\&#39;{Template}\&#39;,{LineNo}) |  |
| [**getTemplateLines()**](SpyTemplateLinePageApi.md#getTemplateLines) | **GET** /SpyTemplateLine |  |


## `createTemplateLine()`

```php
createTemplateLine($spy_template_line, $select): \Spy\MsbcRestClient\Model\SpyTemplateLineResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyTemplateLinePageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$spy_template_line = new \Spy\MsbcRestClient\Model\SpyTemplateLine(); // \Spy\MsbcRestClient\Model\SpyTemplateLine
$select = 'select_example'; // string

try {
    $result = $apiInstance->createTemplateLine($spy_template_line, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyTemplateLinePageApi->createTemplateLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **spy_template_line** | [**\Spy\MsbcRestClient\Model\SpyTemplateLine**](../Model/SpyTemplateLine.md)|  | |
| **select** | **string**|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyTemplateLineResponse**](../Model/SpyTemplateLineResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTemplateLine()`

```php
deleteTemplateLine($template, $line_no)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyTemplateLinePageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template = 'template_example'; // string | The Template of the TemplateLine to retrieve
$line_no = 56; // int | The Line No of the TemplateLine to retrieve

try {
    $apiInstance->deleteTemplateLine($template, $line_no);
} catch (Exception $e) {
    echo 'Exception when calling SpyTemplateLinePageApi->deleteTemplateLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template** | **string**| The Template of the TemplateLine to retrieve | |
| **line_no** | **int**| The Line No of the TemplateLine to retrieve | |

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

## `editTemplateLine()`

```php
editTemplateLine($template, $line_no, $if_match, $spy_template_line, $select): \Spy\MsbcRestClient\Model\SpyTemplateLineResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyTemplateLinePageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template = 'template_example'; // string | The Template of the TemplateLine to retrieve
$line_no = 56; // int | The Line No of the TemplateLine to retrieve
$if_match = 'if_match_example'; // string | The ETag of the Entity to update
$spy_template_line = new \Spy\MsbcRestClient\Model\SpyTemplateLine(); // \Spy\MsbcRestClient\Model\SpyTemplateLine
$select = 'select_example'; // string

try {
    $result = $apiInstance->editTemplateLine($template, $line_no, $if_match, $spy_template_line, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyTemplateLinePageApi->editTemplateLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template** | **string**| The Template of the TemplateLine to retrieve | |
| **line_no** | **int**| The Line No of the TemplateLine to retrieve | |
| **if_match** | **string**| The ETag of the Entity to update | |
| **spy_template_line** | [**\Spy\MsbcRestClient\Model\SpyTemplateLine**](../Model/SpyTemplateLine.md)|  | |
| **select** | **string**|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyTemplateLineResponse**](../Model/SpyTemplateLineResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTemplateLine()`

```php
getTemplateLine($template, $line_no, $data_access_intent, $select): \Spy\MsbcRestClient\Model\SpyTemplateLineResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyTemplateLinePageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template = 'template_example'; // string | The Template of the TemplateLine to retrieve
$line_no = 56; // int | The Line No of the TemplateLine to retrieve
$data_access_intent = 'ReadOnly'; // string | Data Access Intent
$select = 'select_example'; // string

try {
    $result = $apiInstance->getTemplateLine($template, $line_no, $data_access_intent, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyTemplateLinePageApi->getTemplateLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template** | **string**| The Template of the TemplateLine to retrieve | |
| **line_no** | **int**| The Line No of the TemplateLine to retrieve | |
| **data_access_intent** | **string**| Data Access Intent | [optional] [default to &#39;ReadOnly&#39;] |
| **select** | **string**|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyTemplateLineResponse**](../Model/SpyTemplateLineResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTemplateLines()`

```php
getTemplateLines($filter, $select, $data_access_intent): \Spy\MsbcRestClient\Model\SpyTemplateLineListResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyTemplateLinePageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string
$select = 'select_example'; // string
$data_access_intent = 'ReadOnly'; // string | Data Access Intent

try {
    $result = $apiInstance->getTemplateLines($filter, $select, $data_access_intent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyTemplateLinePageApi->getTemplateLines: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |
| **select** | **string**|  | [optional] |
| **data_access_intent** | **string**| Data Access Intent | [optional] [default to &#39;ReadOnly&#39;] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyTemplateLineListResponse**](../Model/SpyTemplateLineListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
