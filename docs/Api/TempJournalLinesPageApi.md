# Spy\MsbcRestClient\TempJournalLinesPageApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX/Production/ODataV4/Company(&#39;XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX&#39;), except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**commitToJournalLine()**](TempJournalLinesPageApi.md#commitToJournalLine) | **POST** /SpyCreateJournalLine_commitToJournalLine |  |
| [**createTempJournalLine()**](TempJournalLinesPageApi.md#createTempJournalLine) | **POST** /journalLines |  |
| [**deleteAllTempJournalLines()**](TempJournalLinesPageApi.md#deleteAllTempJournalLines) | **POST** /SpyCreateJournalLine_deleteAllEntries |  |
| [**editTempJournalLine()**](TempJournalLinesPageApi.md#editTempJournalLine) | **PATCH** /journalLines(\&#39;{id}\&#39;) |  |
| [**getTempJournalLine()**](TempJournalLinesPageApi.md#getTempJournalLine) | **GET** /journalLines(\&#39;{id}\&#39;) |  |
| [**getTempJournalLines()**](TempJournalLinesPageApi.md#getTempJournalLines) | **GET** /journalLines |  |


## `commitToJournalLine()`

```php
commitToJournalLine($company)
```
### URI(s):
- https://api.businesscentral.dynamics.com/v2.0/{tenantID}/{environment}/ODataV4 URL for code unit access to the Microsoft Business Center API.
    - Variables:
      - tenantID: Tenant ID
        - Default value: XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX

      - environment: Environment: something like Production or Sandbox
        - Default value: Production



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\TempJournalLinesPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | Company ID

$hostIndex = 0;
$variables = [
    'tenantID' => 'YOUR_VALUE',
    'environment' => 'YOUR_VALUE',
];

try {
    $apiInstance->commitToJournalLine($company, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling TempJournalLinesPageApi->commitToJournalLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| Company ID | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTempJournalLine()`

```php
createTempJournalLine($create_journal_line, $select): \Spy\MsbcRestClient\Model\JournalLineResponse
```
### URI(s):
- https://api.businesscentral.dynamics.com/v2.0/{tenantID}/{environment}/api/spy/integration/v1.0/companies({companyID}) URL for code unit access to the Microsoft Business Center API.
    - Variables:
      - tenantID: Tenant ID
        - Default value: XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX

      - environment: Environment: something like Production or Sandbox
        - Default value: Production

      - companyID: Company ID
        - Default value: XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\TempJournalLinesPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_journal_line = new \Spy\MsbcRestClient\Model\CreateJournalLine(); // \Spy\MsbcRestClient\Model\CreateJournalLine
$select = 'select_example'; // string

$hostIndex = 0;
$variables = [
    'tenantID' => 'YOUR_VALUE',
    'environment' => 'YOUR_VALUE',
    'companyID' => 'YOUR_VALUE',
];

try {
    $result = $apiInstance->createTempJournalLine($create_journal_line, $select, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TempJournalLinesPageApi->createTempJournalLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_journal_line** | [**\Spy\MsbcRestClient\Model\CreateJournalLine**](../Model/CreateJournalLine.md)|  | |
| **select** | **string**|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\JournalLineResponse**](../Model/JournalLineResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAllTempJournalLines()`

```php
deleteAllTempJournalLines($company)
```
### URI(s):
- https://api.businesscentral.dynamics.com/v2.0/{tenantID}/{environment}/ODataV4 URL for code unit access to the Microsoft Business Center API.
    - Variables:
      - tenantID: Tenant ID
        - Default value: XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX

      - environment: Environment: something like Production or Sandbox
        - Default value: Production



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\TempJournalLinesPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | Company ID

$hostIndex = 0;
$variables = [
    'tenantID' => 'YOUR_VALUE',
    'environment' => 'YOUR_VALUE',
];

try {
    $apiInstance->deleteAllTempJournalLines($company, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling TempJournalLinesPageApi->deleteAllTempJournalLines: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| Company ID | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `editTempJournalLine()`

```php
editTempJournalLine($id, $if_match, $journal_line, $select): \Spy\MsbcRestClient\Model\JournalLineResponse
```
### URI(s):
- https://api.businesscentral.dynamics.com/v2.0/{tenantID}/{environment}/api/spy/integration/v1.0/companies({companyID}) URL for code unit access to the Microsoft Business Center API.
    - Variables:
      - tenantID: Tenant ID
        - Default value: XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX

      - environment: Environment: something like Production or Sandbox
        - Default value: Production

      - companyID: Company ID
        - Default value: XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\TempJournalLinesPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of the TempJournalLine to retrieve
$if_match = 'if_match_example'; // string | The ETag of the Entity to update
$journal_line = new \Spy\MsbcRestClient\Model\JournalLine(); // \Spy\MsbcRestClient\Model\JournalLine
$select = 'select_example'; // string

$hostIndex = 0;
$variables = [
    'tenantID' => 'YOUR_VALUE',
    'environment' => 'YOUR_VALUE',
    'companyID' => 'YOUR_VALUE',
];

try {
    $result = $apiInstance->editTempJournalLine($id, $if_match, $journal_line, $select, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TempJournalLinesPageApi->editTempJournalLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id of the TempJournalLine to retrieve | |
| **if_match** | **string**| The ETag of the Entity to update | |
| **journal_line** | [**\Spy\MsbcRestClient\Model\JournalLine**](../Model/JournalLine.md)|  | |
| **select** | **string**|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\JournalLineResponse**](../Model/JournalLineResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTempJournalLine()`

```php
getTempJournalLine($id, $data_access_intent, $select): \Spy\MsbcRestClient\Model\JournalLineResponse
```
### URI(s):
- https://api.businesscentral.dynamics.com/v2.0/{tenantID}/{environment}/api/spy/integration/v1.0/companies({companyID}) URL for code unit access to the Microsoft Business Center API.
    - Variables:
      - tenantID: Tenant ID
        - Default value: XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX

      - environment: Environment: something like Production or Sandbox
        - Default value: Production

      - companyID: Company ID
        - Default value: XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\TempJournalLinesPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of the TempJournalLine to retrieve
$data_access_intent = 'ReadOnly'; // string | Data Access Intent
$select = 'select_example'; // string

$hostIndex = 0;
$variables = [
    'tenantID' => 'YOUR_VALUE',
    'environment' => 'YOUR_VALUE',
    'companyID' => 'YOUR_VALUE',
];

try {
    $result = $apiInstance->getTempJournalLine($id, $data_access_intent, $select, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TempJournalLinesPageApi->getTempJournalLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id of the TempJournalLine to retrieve | |
| **data_access_intent** | **string**| Data Access Intent | [optional] [default to &#39;ReadOnly&#39;] |
| **select** | **string**|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\JournalLineResponse**](../Model/JournalLineResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTempJournalLines()`

```php
getTempJournalLines($expand, $filter, $select, $data_access_intent): \Spy\MsbcRestClient\Model\JournalLineListResponse
```
### URI(s):
- https://api.businesscentral.dynamics.com/v2.0/{tenantID}/{environment}/api/spy/integration/v1.0/companies({companyID}) URL for code unit access to the Microsoft Business Center API.
    - Variables:
      - tenantID: Tenant ID
        - Default value: XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX

      - environment: Environment: something like Production or Sandbox
        - Default value: Production

      - companyID: Company ID
        - Default value: XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\TempJournalLinesPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$expand = spyDimensions; // string | Expand Option
$filter = 'filter_example'; // string
$select = 'select_example'; // string
$data_access_intent = 'ReadOnly'; // string | Data Access Intent

$hostIndex = 0;
$variables = [
    'tenantID' => 'YOUR_VALUE',
    'environment' => 'YOUR_VALUE',
    'companyID' => 'YOUR_VALUE',
];

try {
    $result = $apiInstance->getTempJournalLines($expand, $filter, $select, $data_access_intent, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TempJournalLinesPageApi->getTempJournalLines: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **expand** | **string**| Expand Option | [optional] [default to &#39;spyDimensions&#39;] |
| **filter** | **string**|  | [optional] |
| **select** | **string**|  | [optional] |
| **data_access_intent** | **string**| Data Access Intent | [optional] [default to &#39;ReadOnly&#39;] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\JournalLineListResponse**](../Model/JournalLineListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
