# Spy\MsbcRestClient\AuthenticateApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX/Production/ODataV4/Company(&#39;XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX&#39;), except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**authenticate()**](AuthenticateApi.md#authenticate) | **POST** /token |  |


## `authenticate()`

```php
authenticate($grant_type, $client_id, $client_secret, $scope): \Spy\MsbcRestClient\Model\AuthenticateResponse
```
### URI(s):
- https://login.microsoftonline.com/{tenantID}/oauth2/v2.0 
    - Variables:
      - tenantID: Tenant ID
        - Default value: XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Spy\MsbcRestClient\Api\AuthenticateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$grant_type = 'client_credentials'; // string
$client_id = 'b8f8f8f8-f8f8-f8f8-f8f8-f8f8f8f8f8f8'; // string
$client_secret = 'b8f8f8f8-f8f8-f8f8-f8f8-f8f8f8f8f8f8'; // string
$scope = 'https://api.businesscentral.dynamics.com/.default'; // string

$hostIndex = 0;
$variables = [
    'tenantID' => 'YOUR_VALUE',
];

try {
    $result = $apiInstance->authenticate($grant_type, $client_id, $client_secret, $scope, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticateApi->authenticate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **grant_type** | **string**|  | [optional] [default to &#39;client_credentials&#39;] |
| **client_id** | **string**|  | [optional] [default to &#39;b8f8f8f8-f8f8-f8f8-f8f8-f8f8f8f8f8f8&#39;] |
| **client_secret** | **string**|  | [optional] [default to &#39;b8f8f8f8-f8f8-f8f8-f8f8-f8f8f8f8f8f8&#39;] |
| **scope** | **string**|  | [optional] [default to &#39;https://api.businesscentral.dynamics.com/.default&#39;] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\Spy\MsbcRestClient\Model\AuthenticateResponse**](../Model/AuthenticateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
