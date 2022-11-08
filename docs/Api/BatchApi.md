# Spy\MsbcRestClient\BatchApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX/Production/ODataV4/Company(&#39;XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX&#39;), except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**callBatchService()**](BatchApi.md#callBatchService) | **POST** /$batch |  |


## `callBatchService()`

```php
callBatchService($batch_request, $isolation): \Spy\MsbcRestClient\Model\BatchResponse
```
### URI(s):
- https://api.businesscentral.dynamics.com/v2.0 URL for batch access to the Microsoft Business Center API.


### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\BatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_request = new \Spy\MsbcRestClient\Model\BatchRequest(); // \Spy\MsbcRestClient\Model\BatchRequest
$isolation = 'snapshot'; // string

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->callBatchService($batch_request, $isolation, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchApi->callBatchService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **batch_request** | [**\Spy\MsbcRestClient\Model\BatchRequest**](../Model/BatchRequest.md)|  | |
| **isolation** | **string**|  | [optional] [default to &#39;snapshot&#39;] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\BatchResponse**](../Model/BatchResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json;IEEE754Compatible=true`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
