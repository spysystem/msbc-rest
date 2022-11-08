# Spy\MsbcRestClient\SpyJournalPageApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX/Production/ODataV4/Company(&#39;XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX&#39;), except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createJournalEntry()**](SpyJournalPageApi.md#createJournalEntry) | **POST** /SpyJournalPage |  |
| [**deleteJournalEntry()**](SpyJournalPageApi.md#deleteJournalEntry) | **DELETE** /SpyJournalPage(\&#39;{JournalTemplateName}\&#39;,\&#39;{JournalBatchName}\&#39;,{LineNo}) |  |
| [**editJournalEntry()**](SpyJournalPageApi.md#editJournalEntry) | **PATCH** /SpyJournalPage(\&#39;{JournalTemplateName}\&#39;,\&#39;{JournalBatchName}\&#39;,{LineNo}) |  |
| [**getJournalEntries()**](SpyJournalPageApi.md#getJournalEntries) | **GET** /SpyJournalPage |  |
| [**getJournalEntry()**](SpyJournalPageApi.md#getJournalEntry) | **GET** /SpyJournalPage(\&#39;{JournalTemplateName}\&#39;,\&#39;{JournalBatchName}\&#39;,{LineNo}) |  |


## `createJournalEntry()`

```php
createJournalEntry($spy_journal_entry, $select): \Spy\MsbcRestClient\Model\SpyJournalEntryResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyJournalPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$spy_journal_entry = new \Spy\MsbcRestClient\Model\SpyJournalEntry(); // \Spy\MsbcRestClient\Model\SpyJournalEntry
$select = 'select_example'; // string

try {
    $result = $apiInstance->createJournalEntry($spy_journal_entry, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyJournalPageApi->createJournalEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **spy_journal_entry** | [**\Spy\MsbcRestClient\Model\SpyJournalEntry**](../Model/SpyJournalEntry.md)|  | |
| **select** | **string**|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyJournalEntryResponse**](../Model/SpyJournalEntryResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteJournalEntry()`

```php
deleteJournalEntry($journal_template_name, $journal_batch_name, $line_no)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyJournalPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$journal_template_name = 'journal_template_name_example'; // string | The Journal Template Name of the JournalEntry to retrieve
$journal_batch_name = 'journal_batch_name_example'; // string | The Journal Batch Name of the JournalEntry to retrieve
$line_no = 56; // int | The Line No of the JournalEntry to retrieve

try {
    $apiInstance->deleteJournalEntry($journal_template_name, $journal_batch_name, $line_no);
} catch (Exception $e) {
    echo 'Exception when calling SpyJournalPageApi->deleteJournalEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **journal_template_name** | **string**| The Journal Template Name of the JournalEntry to retrieve | |
| **journal_batch_name** | **string**| The Journal Batch Name of the JournalEntry to retrieve | |
| **line_no** | **int**| The Line No of the JournalEntry to retrieve | |

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

## `editJournalEntry()`

```php
editJournalEntry($journal_template_name, $journal_batch_name, $line_no, $if_match, $spy_journal_entry, $select): \Spy\MsbcRestClient\Model\SpyJournalEntryResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyJournalPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$journal_template_name = 'journal_template_name_example'; // string | The Journal Template Name of the JournalEntry to retrieve
$journal_batch_name = 'journal_batch_name_example'; // string | The Journal Batch Name of the JournalEntry to retrieve
$line_no = 56; // int | The Line No of the JournalEntry to retrieve
$if_match = 'if_match_example'; // string | The ETag of the Entity to update
$spy_journal_entry = new \Spy\MsbcRestClient\Model\SpyJournalEntry(); // \Spy\MsbcRestClient\Model\SpyJournalEntry
$select = 'select_example'; // string

try {
    $result = $apiInstance->editJournalEntry($journal_template_name, $journal_batch_name, $line_no, $if_match, $spy_journal_entry, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyJournalPageApi->editJournalEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **journal_template_name** | **string**| The Journal Template Name of the JournalEntry to retrieve | |
| **journal_batch_name** | **string**| The Journal Batch Name of the JournalEntry to retrieve | |
| **line_no** | **int**| The Line No of the JournalEntry to retrieve | |
| **if_match** | **string**| The ETag of the Entity to update | |
| **spy_journal_entry** | [**\Spy\MsbcRestClient\Model\SpyJournalEntry**](../Model/SpyJournalEntry.md)|  | |
| **select** | **string**|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyJournalEntryResponse**](../Model/SpyJournalEntryResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getJournalEntries()`

```php
getJournalEntries($filter, $select, $data_access_intent): \Spy\MsbcRestClient\Model\SpyJournalEntriesListResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyJournalPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string
$select = 'select_example'; // string
$data_access_intent = 'ReadOnly'; // string | Data Access Intent

try {
    $result = $apiInstance->getJournalEntries($filter, $select, $data_access_intent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyJournalPageApi->getJournalEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |
| **select** | **string**|  | [optional] |
| **data_access_intent** | **string**| Data Access Intent | [optional] [default to &#39;ReadOnly&#39;] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyJournalEntriesListResponse**](../Model/SpyJournalEntriesListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getJournalEntry()`

```php
getJournalEntry($journal_template_name, $journal_batch_name, $line_no, $data_access_intent, $select): \Spy\MsbcRestClient\Model\SpyJournalEntryResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyJournalPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$journal_template_name = 'journal_template_name_example'; // string | The Journal Template Name of the JournalEntry to retrieve
$journal_batch_name = 'journal_batch_name_example'; // string | The Journal Batch Name of the JournalEntry to retrieve
$line_no = 56; // int | The Line No of the JournalEntry to retrieve
$data_access_intent = 'ReadOnly'; // string | Data Access Intent
$select = 'select_example'; // string

try {
    $result = $apiInstance->getJournalEntry($journal_template_name, $journal_batch_name, $line_no, $data_access_intent, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyJournalPageApi->getJournalEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **journal_template_name** | **string**| The Journal Template Name of the JournalEntry to retrieve | |
| **journal_batch_name** | **string**| The Journal Batch Name of the JournalEntry to retrieve | |
| **line_no** | **int**| The Line No of the JournalEntry to retrieve | |
| **data_access_intent** | **string**| Data Access Intent | [optional] [default to &#39;ReadOnly&#39;] |
| **select** | **string**|  | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\SpyJournalEntryResponse**](../Model/SpyJournalEntryResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
