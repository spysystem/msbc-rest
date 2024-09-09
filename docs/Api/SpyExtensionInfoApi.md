# Spy\MsbcRestClient\SpyExtensionInfoApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX/Production/ODataV4/Company(&#39;XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX&#39;), except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSpyExtensionInfo()**](SpyExtensionInfoApi.md#getSpyExtensionInfo) | **GET** /SpyExtensionInfo |  |


## `getSpyExtensionInfo()`

```php
getSpyExtensionInfo(): \Spy\MsbcRestClient\Model\SpyExtensionInfoResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Spy\MsbcRestClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Spy\MsbcRestClient\Api\SpyExtensionInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSpyExtensionInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpyExtensionInfoApi->getSpyExtensionInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Spy\MsbcRestClient\Model\SpyExtensionInfoResponse**](../Model/SpyExtensionInfoResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
