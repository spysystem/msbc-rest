# Spy\MsbcRestClient\SpyVatPostingSetupPageApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX/Production/ODataV4/Company(&#39;XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX&#39;), except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSpyVatSetting()**](SpyVatPostingSetupPageApi.md#createSpyVatSetting) | **POST** /SpyVatPostingSetup |  |
| [**deleteSpyVatSetting()**](SpyVatPostingSetupPageApi.md#deleteSpyVatSetting) | **DELETE** /SpyVatPostingSetup(\&#39;{VatBusPostingGroup}\&#39;,\&#39;{VatProdPostingGroup}\&#39;) |  |
| [**editSpyVatSetting()**](SpyVatPostingSetupPageApi.md#editSpyVatSetting) | **PATCH** /SpyVatPostingSetup(\&#39;{VatBusPostingGroup}\&#39;,\&#39;{VatProdPostingGroup}\&#39;) |  |
| [**getSpyVatSetting()**](SpyVatPostingSetupPageApi.md#getSpyVatSetting) | **GET** /SpyVatPostingSetup(\&#39;{VatBusPostingGroup}\&#39;,\&#39;{VatProdPostingGroup}\&#39;) |  |
| [**getSpyVatSettings()**](SpyVatPostingSetupPageApi.md#getSpyVatSettings) | **GET** /SpyVatPostingSetup |  |


## `createSpyVatSetting()`

```php
createSpyVatSetting($spy_vat_posting_setup, $select): \Spy\MsbcRestClient\Model\SpyVatPostingSetupResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyVatPostingSetupPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$spy_vat_posting_setup = new \Spy\MsbcRestClient\Model\SpyVatPostingSetup(); // \Spy\MsbcRestClient\Model\SpyVatPostingSetup
$select = 'select_example'; // string

try {
    $result = $apiInstance->createSpyVatSetting($spy_vat_posting_setup, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyVatPostingSetupPageApi->createSpyVatSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **spy_vat_posting_setup** | [**\Spy\MsbcRestClient\Model\SpyVatPostingSetup**](../Model/SpyVatPostingSetup.md)|  | |
| **select** | **string**|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyVatPostingSetupResponse**](../Model/SpyVatPostingSetupResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSpyVatSetting()`

```php
deleteSpyVatSetting($vat_bus_posting_group, $vat_prod_posting_group)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyVatPostingSetupPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vat_bus_posting_group = 'vat_bus_posting_group_example'; // string | The VatBusPostingGroup of the SpyVatSetting to retrieve
$vat_prod_posting_group = 'vat_prod_posting_group_example'; // string | The VatProdPostingGroup of the SpyVatSetting to retrieve

try {
    $apiInstance->deleteSpyVatSetting($vat_bus_posting_group, $vat_prod_posting_group);
} catch (Exception $e) {
    echo 'Exception when calling SpyVatPostingSetupPageApi->deleteSpyVatSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vat_bus_posting_group** | **string**| The VatBusPostingGroup of the SpyVatSetting to retrieve | |
| **vat_prod_posting_group** | **string**| The VatProdPostingGroup of the SpyVatSetting to retrieve | |

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

## `editSpyVatSetting()`

```php
editSpyVatSetting($vat_bus_posting_group, $vat_prod_posting_group, $if_match, $spy_vat_posting_setup, $select): \Spy\MsbcRestClient\Model\SpyVatPostingSetupResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyVatPostingSetupPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vat_bus_posting_group = 'vat_bus_posting_group_example'; // string | The VatBusPostingGroup of the SpyVatSetting to retrieve
$vat_prod_posting_group = 'vat_prod_posting_group_example'; // string | The VatProdPostingGroup of the SpyVatSetting to retrieve
$if_match = 'if_match_example'; // string | The ETag of the Entity to update
$spy_vat_posting_setup = new \Spy\MsbcRestClient\Model\SpyVatPostingSetup(); // \Spy\MsbcRestClient\Model\SpyVatPostingSetup
$select = 'select_example'; // string

try {
    $result = $apiInstance->editSpyVatSetting($vat_bus_posting_group, $vat_prod_posting_group, $if_match, $spy_vat_posting_setup, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyVatPostingSetupPageApi->editSpyVatSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vat_bus_posting_group** | **string**| The VatBusPostingGroup of the SpyVatSetting to retrieve | |
| **vat_prod_posting_group** | **string**| The VatProdPostingGroup of the SpyVatSetting to retrieve | |
| **if_match** | **string**| The ETag of the Entity to update | |
| **spy_vat_posting_setup** | [**\Spy\MsbcRestClient\Model\SpyVatPostingSetup**](../Model/SpyVatPostingSetup.md)|  | |
| **select** | **string**|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyVatPostingSetupResponse**](../Model/SpyVatPostingSetupResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSpyVatSetting()`

```php
getSpyVatSetting($vat_bus_posting_group, $vat_prod_posting_group, $data_access_intent, $select): \Spy\MsbcRestClient\Model\SpyVatPostingSetupResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyVatPostingSetupPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vat_bus_posting_group = 'vat_bus_posting_group_example'; // string | The VatBusPostingGroup of the SpyVatSetting to retrieve
$vat_prod_posting_group = 'vat_prod_posting_group_example'; // string | The VatProdPostingGroup of the SpyVatSetting to retrieve
$data_access_intent = 'ReadOnly'; // string | Data Access Intent
$select = 'select_example'; // string

try {
    $result = $apiInstance->getSpyVatSetting($vat_bus_posting_group, $vat_prod_posting_group, $data_access_intent, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyVatPostingSetupPageApi->getSpyVatSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vat_bus_posting_group** | **string**| The VatBusPostingGroup of the SpyVatSetting to retrieve | |
| **vat_prod_posting_group** | **string**| The VatProdPostingGroup of the SpyVatSetting to retrieve | |
| **data_access_intent** | **string**| Data Access Intent | [optional] [default to &#39;ReadOnly&#39;] |
| **select** | **string**|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyVatPostingSetupResponse**](../Model/SpyVatPostingSetupResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSpyVatSettings()`

```php
getSpyVatSettings($filter, $select, $data_access_intent): \Spy\MsbcRestClient\Model\SpyVatPostingSetupListResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyVatPostingSetupPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string
$select = 'select_example'; // string
$data_access_intent = 'ReadOnly'; // string | Data Access Intent

try {
    $result = $apiInstance->getSpyVatSettings($filter, $select, $data_access_intent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyVatPostingSetupPageApi->getSpyVatSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |
| **select** | **string**|  | [optional] |
| **data_access_intent** | **string**| Data Access Intent | [optional] [default to &#39;ReadOnly&#39;] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyVatPostingSetupListResponse**](../Model/SpyVatPostingSetupListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
