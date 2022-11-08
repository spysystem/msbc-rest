# Spy\MsbcRestClient\SpyApplyCustomerTemplatesCodeUnitApi

All URIs are relative to https://api.businesscentral.dynamics.com/v2.0/XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX/Production/ODataV4/Company(&#39;XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX&#39;), except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**applyCustomerTemplates()**](SpyApplyCustomerTemplatesCodeUnitApi.md#applyCustomerTemplates) | **POST** /SpyApplyCustomerTemplates_ApplyTemplates |  |


## `applyCustomerTemplates()`

```php
applyCustomerTemplates($company, $spy_apply_customer_templates)
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


$apiInstance = new Spy\MsbcRestClient\Api\SpyApplyCustomerTemplatesCodeUnitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | Company ID
$spy_apply_customer_templates = new \Spy\MsbcRestClient\Model\SpyApplyCustomerTemplates(); // \Spy\MsbcRestClient\Model\SpyApplyCustomerTemplates

$hostIndex = 0;
$variables = [
    'tenantID' => 'YOUR_VALUE',
    'environment' => 'YOUR_VALUE',
];

try {
    $apiInstance->applyCustomerTemplates($company, $spy_apply_customer_templates, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling SpyApplyCustomerTemplatesCodeUnitApi->applyCustomerTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| Company ID | |
| **spy_apply_customer_templates** | [**\Spy\MsbcRestClient\Model\SpyApplyCustomerTemplates**](../Model/SpyApplyCustomerTemplates.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
