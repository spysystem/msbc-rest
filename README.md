# OpenAPIClient-php

The Microsoft Business Center API is a RESTful API that provides an interface to the Microsoft Business Center service.



## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/spysystem/msbc-rest.git"
    }
  ],
  "require": {
    "spysystem/msbc-rest": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

try {
    $result = $apiInstance->authenticate($grant_type, $client_id, $client_secret, $scope);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticateApi->authenticate: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.businesscentral.dynamics.com/v2.0/XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX/Production/ODataV4/Company(&#39;XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX&#39;)*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthenticateApi* | [**authenticate**](docs/Api/AuthenticateApi.md#authenticate) | **POST** /token | 
*BatchApi* | [**callBatchService**](docs/Api/BatchApi.md#callbatchservice) | **POST** /$batch | 
*CompanyApi* | [**getCompanies**](docs/Api/CompanyApi.md#getcompanies) | **GET** /companies | 
*JournalLinesPageApi* | [**deleteTempJournalLine**](docs/Api/JournalLinesPageApi.md#deletetempjournalline) | **DELETE** /journalLines(\&#39;{id}\&#39;) | 
*SpyAccountingPeriodsApi* | [**getSpyAccountingPeriods**](docs/Api/SpyAccountingPeriodsApi.md#getspyaccountingperiods) | **GET** /SpyAccountingPeriods | 
*SpyApplyCustomerTemplatesCodeUnitApi* | [**applyCustomerTemplates**](docs/Api/SpyApplyCustomerTemplatesCodeUnitApi.md#applycustomertemplates) | **POST** /SpyApplyCustomerTemplates_ApplyTemplates | 
*SpyCalcCustomerBalanceCodeUnitApi* | [**calcCustomerBalance**](docs/Api/SpyCalcCustomerBalanceCodeUnitApi.md#calccustomerbalance) | **POST** /SpyCalcCustomerBalance_calcCustomerBalance | 
*SpyCountryPageApi* | [**createSpyCountry**](docs/Api/SpyCountryPageApi.md#createspycountry) | **POST** /SpyCountryPage | 
*SpyCountryPageApi* | [**deleteSpyCountry**](docs/Api/SpyCountryPageApi.md#deletespycountry) | **DELETE** /SpyCountryPage(\&#39;{Code}\&#39;) | 
*SpyCountryPageApi* | [**editSpyCountry**](docs/Api/SpyCountryPageApi.md#editspycountry) | **PATCH** /SpyCountryPage(\&#39;{Code}\&#39;) | 
*SpyCountryPageApi* | [**getSpyCountries**](docs/Api/SpyCountryPageApi.md#getspycountries) | **GET** /SpyCountryPage | 
*SpyCountryPageApi* | [**getSpyCountry**](docs/Api/SpyCountryPageApi.md#getspycountry) | **GET** /SpyCountryPage(\&#39;{Code}\&#39;) | 
*SpyCustLedgerPageApi* | [**createCustomerLedgerEntry**](docs/Api/SpyCustLedgerPageApi.md#createcustomerledgerentry) | **POST** /SpyCustLedgerPage | 
*SpyCustLedgerPageApi* | [**deleteCustomerLedgerEntry**](docs/Api/SpyCustLedgerPageApi.md#deletecustomerledgerentry) | **DELETE** /SpyCustLedgerPage({Entry_No}) | 
*SpyCustLedgerPageApi* | [**editCustomerLedgerEntry**](docs/Api/SpyCustLedgerPageApi.md#editcustomerledgerentry) | **PATCH** /SpyCustLedgerPage({Entry_No}) | 
*SpyCustLedgerPageApi* | [**getCustomerLedgerEntries**](docs/Api/SpyCustLedgerPageApi.md#getcustomerledgerentries) | **GET** /SpyCustLedgerPage | 
*SpyCustLedgerPageApi* | [**getCustomerLedgerEntry**](docs/Api/SpyCustLedgerPageApi.md#getcustomerledgerentry) | **GET** /SpyCustLedgerPage({Entry_No}) | 
*SpyCustomerPageApi* | [**createCustomer**](docs/Api/SpyCustomerPageApi.md#createcustomer) | **POST** /SpyCustomer | 
*SpyCustomerPageApi* | [**deleteCustomer**](docs/Api/SpyCustomerPageApi.md#deletecustomer) | **DELETE** /SpyCustomer(\&#39;{account}\&#39;) | 
*SpyCustomerPageApi* | [**editCustomer**](docs/Api/SpyCustomerPageApi.md#editcustomer) | **PATCH** /SpyCustomer(\&#39;{account}\&#39;) | 
*SpyCustomerPageApi* | [**getCustomer**](docs/Api/SpyCustomerPageApi.md#getcustomer) | **GET** /SpyCustomer(\&#39;{account}\&#39;) | 
*SpyCustomerPageApi* | [**getCustomers**](docs/Api/SpyCustomerPageApi.md#getcustomers) | **GET** /SpyCustomer | 
*SpyCustomerTemplatePageApi* | [**createCustomerTemplate**](docs/Api/SpyCustomerTemplatePageApi.md#createcustomertemplate) | **POST** /SpyCustomerTemplate | 
*SpyCustomerTemplatePageApi* | [**deleteCustomerTemplate**](docs/Api/SpyCustomerTemplatePageApi.md#deletecustomertemplate) | **DELETE** /SpyCustomerTemplate(\&#39;{Code}\&#39;) | 
*SpyCustomerTemplatePageApi* | [**editCustomerTemplate**](docs/Api/SpyCustomerTemplatePageApi.md#editcustomertemplate) | **PATCH** /SpyCustomerTemplate(\&#39;{Code}\&#39;) | 
*SpyCustomerTemplatePageApi* | [**getCustomerTemplate**](docs/Api/SpyCustomerTemplatePageApi.md#getcustomertemplate) | **GET** /SpyCustomerTemplate(\&#39;{Code}\&#39;) | 
*SpyCustomerTemplatePageApi* | [**getCustomerTemplates**](docs/Api/SpyCustomerTemplatePageApi.md#getcustomertemplates) | **GET** /SpyCustomerTemplate | 
*SpyCustomerTransPageApi* | [**createCustomerTransaction**](docs/Api/SpyCustomerTransPageApi.md#createcustomertransaction) | **POST** /SpyCustomerTrans | 
*SpyCustomerTransPageApi* | [**deleteCustomerTransaction**](docs/Api/SpyCustomerTransPageApi.md#deletecustomertransaction) | **DELETE** /SpyCustomerTrans({Entry_No}) | 
*SpyCustomerTransPageApi* | [**editCustomerTransaction**](docs/Api/SpyCustomerTransPageApi.md#editcustomertransaction) | **PATCH** /SpyCustomerTrans({Entry_No}) | 
*SpyCustomerTransPageApi* | [**getCustomerTransaction**](docs/Api/SpyCustomerTransPageApi.md#getcustomertransaction) | **GET** /SpyCustomerTrans({Entry_No}) | 
*SpyCustomerTransPageApi* | [**getCustomerTransactions**](docs/Api/SpyCustomerTransPageApi.md#getcustomertransactions) | **GET** /SpyCustomerTrans | 
*SpyDefaultDimensionPageApi* | [**createDefaultDimension**](docs/Api/SpyDefaultDimensionPageApi.md#createdefaultdimension) | **POST** /SpyDefaultDimension | 
*SpyDefaultDimensionPageApi* | [**deleteDefaultDimension**](docs/Api/SpyDefaultDimensionPageApi.md#deletedefaultdimension) | **DELETE** /SpyDefaultDimension({TableID},\&#39;{No}\&#39;,\&#39;{DimensionCode}\&#39;) | 
*SpyDefaultDimensionPageApi* | [**editDefaultDimension**](docs/Api/SpyDefaultDimensionPageApi.md#editdefaultdimension) | **PATCH** /SpyDefaultDimension({TableID},\&#39;{No}\&#39;,\&#39;{DimensionCode}\&#39;) | 
*SpyDefaultDimensionPageApi* | [**getDefaultDimension**](docs/Api/SpyDefaultDimensionPageApi.md#getdefaultdimension) | **GET** /SpyDefaultDimension({TableID},\&#39;{No}\&#39;,\&#39;{DimensionCode}\&#39;) | 
*SpyDefaultDimensionPageApi* | [**getDefaultDimensions**](docs/Api/SpyDefaultDimensionPageApi.md#getdefaultdimensions) | **GET** /SpyDefaultDimension | 
*SpyExchangeRatesPageApi* | [**createExchangeRate**](docs/Api/SpyExchangeRatesPageApi.md#createexchangerate) | **POST** /SpyExchangeRates | 
*SpyExchangeRatesPageApi* | [**deleteExchangeRate**](docs/Api/SpyExchangeRatesPageApi.md#deleteexchangerate) | **DELETE** /SpyExchangeRates(\&#39;{CurrencyCode}\&#39;,{StartingDate}) | 
*SpyExchangeRatesPageApi* | [**editExchangeRate**](docs/Api/SpyExchangeRatesPageApi.md#editexchangerate) | **PATCH** /SpyExchangeRates(\&#39;{CurrencyCode}\&#39;,{StartingDate}) | 
*SpyExchangeRatesPageApi* | [**getExchangeRate**](docs/Api/SpyExchangeRatesPageApi.md#getexchangerate) | **GET** /SpyExchangeRates(\&#39;{CurrencyCode}\&#39;,{StartingDate}) | 
*SpyExchangeRatesPageApi* | [**getExchangeRates**](docs/Api/SpyExchangeRatesPageApi.md#getexchangerates) | **GET** /SpyExchangeRates | 
*SpyExtensionInfoApi* | [**getSpyExtensionInfo**](docs/Api/SpyExtensionInfoApi.md#getspyextensioninfo) | **GET** /SpyExtensionInfo | 
*SpyFieldsPageApi* | [**createField**](docs/Api/SpyFieldsPageApi.md#createfield) | **POST** /SpyFieldsPage | 
*SpyFieldsPageApi* | [**deleteField**](docs/Api/SpyFieldsPageApi.md#deletefield) | **DELETE** /SpyFieldsPage({TableNo},{FieldNo}) | 
*SpyFieldsPageApi* | [**editField**](docs/Api/SpyFieldsPageApi.md#editfield) | **PATCH** /SpyFieldsPage({TableNo},{FieldNo}) | 
*SpyFieldsPageApi* | [**getField**](docs/Api/SpyFieldsPageApi.md#getfield) | **GET** /SpyFieldsPage({TableNo},{FieldNo}) | 
*SpyFieldsPageApi* | [**getFields**](docs/Api/SpyFieldsPageApi.md#getfields) | **GET** /SpyFieldsPage | 
*SpyInsertPostCodeCodeUnitApi* | [**insertPostCode**](docs/Api/SpyInsertPostCodeCodeUnitApi.md#insertpostcode) | **POST** /SpyInsertPostCode_InsertPostCode | 
*SpyJournalPageApi* | [**createJournalEntry**](docs/Api/SpyJournalPageApi.md#createjournalentry) | **POST** /SpyJournalPage | 
*SpyJournalPageApi* | [**deleteJournalEntry**](docs/Api/SpyJournalPageApi.md#deletejournalentry) | **DELETE** /SpyJournalPage(\&#39;{JournalTemplateName}\&#39;,\&#39;{JournalBatchName}\&#39;,{LineNo}) | 
*SpyJournalPageApi* | [**editJournalEntry**](docs/Api/SpyJournalPageApi.md#editjournalentry) | **PATCH** /SpyJournalPage(\&#39;{JournalTemplateName}\&#39;,\&#39;{JournalBatchName}\&#39;,{LineNo}) | 
*SpyJournalPageApi* | [**getJournalEntries**](docs/Api/SpyJournalPageApi.md#getjournalentries) | **GET** /SpyJournalPage | 
*SpyJournalPageApi* | [**getJournalEntry**](docs/Api/SpyJournalPageApi.md#getjournalentry) | **GET** /SpyJournalPage(\&#39;{JournalTemplateName}\&#39;,\&#39;{JournalBatchName}\&#39;,{LineNo}) | 
*SpyLedgerAccountPageApi* | [**createLedgerAccount**](docs/Api/SpyLedgerAccountPageApi.md#createledgeraccount) | **POST** /SpyLedgerAccount | 
*SpyLedgerAccountPageApi* | [**deleteLedgerAccount**](docs/Api/SpyLedgerAccountPageApi.md#deleteledgeraccount) | **DELETE** /SpyLedgerAccount(\&#39;{No}\&#39;) | 
*SpyLedgerAccountPageApi* | [**editLedgerAccount**](docs/Api/SpyLedgerAccountPageApi.md#editledgeraccount) | **PATCH** /SpyLedgerAccount(\&#39;{No}\&#39;) | 
*SpyLedgerAccountPageApi* | [**getLedgerAccount**](docs/Api/SpyLedgerAccountPageApi.md#getledgeraccount) | **GET** /SpyLedgerAccount(\&#39;{No}\&#39;) | 
*SpyLedgerAccountPageApi* | [**getLedgerAccounts**](docs/Api/SpyLedgerAccountPageApi.md#getledgeraccounts) | **GET** /SpyLedgerAccount | 
*SpyLedgerTransPageApi* | [**createLedgerTransactionEntry**](docs/Api/SpyLedgerTransPageApi.md#createledgertransactionentry) | **POST** /SpyLedgerTrans | 
*SpyLedgerTransPageApi* | [**deleteLedgerTransactionEntry**](docs/Api/SpyLedgerTransPageApi.md#deleteledgertransactionentry) | **DELETE** /SpyLedgerTrans({Entry_No}) | 
*SpyLedgerTransPageApi* | [**editLedgerTransactionEntry**](docs/Api/SpyLedgerTransPageApi.md#editledgertransactionentry) | **PATCH** /SpyLedgerTrans({Entry_No}) | 
*SpyLedgerTransPageApi* | [**getLedgerTransactionEntries**](docs/Api/SpyLedgerTransPageApi.md#getledgertransactionentries) | **GET** /SpyLedgerTrans | 
*SpyLedgerTransPageApi* | [**getLedgerTransactionEntry**](docs/Api/SpyLedgerTransPageApi.md#getledgertransactionentry) | **GET** /SpyLedgerTrans({Entry_No}) | 
*SpyPaymentTermPageApi* | [**createPaymentTerm**](docs/Api/SpyPaymentTermPageApi.md#createpaymentterm) | **POST** /SpyPaymentTerm | 
*SpyPaymentTermPageApi* | [**createPaymentTermV2**](docs/Api/SpyPaymentTermPageApi.md#createpaymenttermv2) | **POST** /SpyPaymentTermV2 | 
*SpyPaymentTermPageApi* | [**deletePaymentTerm**](docs/Api/SpyPaymentTermPageApi.md#deletepaymentterm) | **DELETE** /SpyPaymentTerm(\&#39;{code}\&#39;) | 
*SpyPaymentTermPageApi* | [**deletePaymentTermV2**](docs/Api/SpyPaymentTermPageApi.md#deletepaymenttermv2) | **DELETE** /SpyPaymentTermV2({systemId}) | 
*SpyPaymentTermPageApi* | [**editPaymentTerm**](docs/Api/SpyPaymentTermPageApi.md#editpaymentterm) | **PATCH** /SpyPaymentTerm(\&#39;{code}\&#39;) | 
*SpyPaymentTermPageApi* | [**editPaymentTermV2**](docs/Api/SpyPaymentTermPageApi.md#editpaymenttermv2) | **PATCH** /SpyPaymentTermV2({systemId}) | 
*SpyPaymentTermPageApi* | [**getPaymentTerm**](docs/Api/SpyPaymentTermPageApi.md#getpaymentterm) | **GET** /SpyPaymentTerm(\&#39;{code}\&#39;) | 
*SpyPaymentTermPageApi* | [**getPaymentTermV2**](docs/Api/SpyPaymentTermPageApi.md#getpaymenttermv2) | **GET** /SpyPaymentTermV2({systemId}) | 
*SpyPaymentTermPageApi* | [**getPaymentTerms**](docs/Api/SpyPaymentTermPageApi.md#getpaymentterms) | **GET** /SpyPaymentTerm | 
*SpyPaymentTermPageApi* | [**getPaymentTermsV2**](docs/Api/SpyPaymentTermPageApi.md#getpaymenttermsv2) | **GET** /SpyPaymentTermV2 | 
*SpyPostCodePageApi* | [**createPostalCode**](docs/Api/SpyPostCodePageApi.md#createpostalcode) | **POST** /SpyPostCode | 
*SpyPostCodePageApi* | [**deletePostalCode**](docs/Api/SpyPostCodePageApi.md#deletepostalcode) | **DELETE** /SpyPostCode(\&#39;{Code}\&#39;,\&#39;{City}\&#39;) | 
*SpyPostCodePageApi* | [**editPostalCode**](docs/Api/SpyPostCodePageApi.md#editpostalcode) | **PATCH** /SpyPostCode(\&#39;{Code}\&#39;,\&#39;{City}\&#39;) | 
*SpyPostCodePageApi* | [**getPostalCode**](docs/Api/SpyPostCodePageApi.md#getpostalcode) | **GET** /SpyPostCode(\&#39;{Code}\&#39;,\&#39;{City}\&#39;) | 
*SpyPostCodePageApi* | [**getPostalCodes**](docs/Api/SpyPostCodePageApi.md#getpostalcodes) | **GET** /SpyPostCode | 
*SpySupplierPageApi* | [**createSupplier**](docs/Api/SpySupplierPageApi.md#createsupplier) | **POST** /SpySupplier | 
*SpySupplierPageApi* | [**deleteSupplier**](docs/Api/SpySupplierPageApi.md#deletesupplier) | **DELETE** /SpySupplier(\&#39;{No}\&#39;) | 
*SpySupplierPageApi* | [**editSupplier**](docs/Api/SpySupplierPageApi.md#editsupplier) | **PATCH** /SpySupplier(\&#39;{No}\&#39;) | 
*SpySupplierPageApi* | [**getSupplier**](docs/Api/SpySupplierPageApi.md#getsupplier) | **GET** /SpySupplier(\&#39;{No}\&#39;) | 
*SpySupplierPageApi* | [**getSuppliers**](docs/Api/SpySupplierPageApi.md#getsuppliers) | **GET** /SpySupplier | 
*SpySupplierTransPageApi* | [**createSupplierTransaction**](docs/Api/SpySupplierTransPageApi.md#createsuppliertransaction) | **POST** /SpySupplierTrans | 
*SpySupplierTransPageApi* | [**deleteSupplierTransaction**](docs/Api/SpySupplierTransPageApi.md#deletesuppliertransaction) | **DELETE** /SpySupplierTrans({Entry_No}) | 
*SpySupplierTransPageApi* | [**editSupplierTransaction**](docs/Api/SpySupplierTransPageApi.md#editsuppliertransaction) | **PATCH** /SpySupplierTrans({Entry_No}) | 
*SpySupplierTransPageApi* | [**getSupplierTransaction**](docs/Api/SpySupplierTransPageApi.md#getsuppliertransaction) | **GET** /SpySupplierTrans({Entry_No}) | 
*SpySupplierTransPageApi* | [**getSupplierTransactions**](docs/Api/SpySupplierTransPageApi.md#getsuppliertransactions) | **GET** /SpySupplierTrans | 
*SpyTemplateLinePageApi* | [**createTemplateLine**](docs/Api/SpyTemplateLinePageApi.md#createtemplateline) | **POST** /SpyTemplateLine | 
*SpyTemplateLinePageApi* | [**deleteTemplateLine**](docs/Api/SpyTemplateLinePageApi.md#deletetemplateline) | **DELETE** /SpyTemplateLine(\&#39;{Template}\&#39;,{LineNo}) | 
*SpyTemplateLinePageApi* | [**editTemplateLine**](docs/Api/SpyTemplateLinePageApi.md#edittemplateline) | **PATCH** /SpyTemplateLine(\&#39;{Template}\&#39;,{LineNo}) | 
*SpyTemplateLinePageApi* | [**getTemplateLine**](docs/Api/SpyTemplateLinePageApi.md#gettemplateline) | **GET** /SpyTemplateLine(\&#39;{Template}\&#39;,{LineNo}) | 
*SpyTemplateLinePageApi* | [**getTemplateLines**](docs/Api/SpyTemplateLinePageApi.md#gettemplatelines) | **GET** /SpyTemplateLine | 
*SpyVatPostingSetupPageApi* | [**createSpyVatSetting**](docs/Api/SpyVatPostingSetupPageApi.md#createspyvatsetting) | **POST** /SpyVatPostingSetup | 
*SpyVatPostingSetupPageApi* | [**deleteSpyVatSetting**](docs/Api/SpyVatPostingSetupPageApi.md#deletespyvatsetting) | **DELETE** /SpyVatPostingSetup(\&#39;{VatBusPostingGroup}\&#39;,\&#39;{VatProdPostingGroup}\&#39;) | 
*SpyVatPostingSetupPageApi* | [**editSpyVatSetting**](docs/Api/SpyVatPostingSetupPageApi.md#editspyvatsetting) | **PATCH** /SpyVatPostingSetup(\&#39;{VatBusPostingGroup}\&#39;,\&#39;{VatProdPostingGroup}\&#39;) | 
*SpyVatPostingSetupPageApi* | [**getSpyVatSetting**](docs/Api/SpyVatPostingSetupPageApi.md#getspyvatsetting) | **GET** /SpyVatPostingSetup(\&#39;{VatBusPostingGroup}\&#39;,\&#39;{VatProdPostingGroup}\&#39;) | 
*SpyVatPostingSetupPageApi* | [**getSpyVatSettings**](docs/Api/SpyVatPostingSetupPageApi.md#getspyvatsettings) | **GET** /SpyVatPostingSetup | 
*SpyVendLedgerPageApi* | [**createSupplierLedgerEntry**](docs/Api/SpyVendLedgerPageApi.md#createsupplierledgerentry) | **POST** /SpyVendLedgerPage | 
*SpyVendLedgerPageApi* | [**deleteSupplierLedgerEntry**](docs/Api/SpyVendLedgerPageApi.md#deletesupplierledgerentry) | **DELETE** /SpyVendLedgerPage({Entry_No}) | 
*SpyVendLedgerPageApi* | [**editSupplierLedgerEntry**](docs/Api/SpyVendLedgerPageApi.md#editsupplierledgerentry) | **PATCH** /SpyVendLedgerPage({Entry_No}) | 
*SpyVendLedgerPageApi* | [**getSupplierLedgerEntries**](docs/Api/SpyVendLedgerPageApi.md#getsupplierledgerentries) | **GET** /SpyVendLedgerPage | 
*SpyVendLedgerPageApi* | [**getSupplierLedgerEntry**](docs/Api/SpyVendLedgerPageApi.md#getsupplierledgerentry) | **GET** /SpyVendLedgerPage({Entry_No}) | 
*TempJournalLinesPageApi* | [**commitToJournalLine**](docs/Api/TempJournalLinesPageApi.md#committojournalline) | **POST** /SpyCreateJournalLine_commitToJournalLine | 
*TempJournalLinesPageApi* | [**commitToJournalLineWithFileData**](docs/Api/TempJournalLinesPageApi.md#committojournallinewithfiledata) | **POST** /SpyCreateJournalLine_commitToJournalLineWithFileData | 
*TempJournalLinesPageApi* | [**createTempJournalLine**](docs/Api/TempJournalLinesPageApi.md#createtempjournalline) | **POST** /journalLines | 
*TempJournalLinesPageApi* | [**deleteAllTempJournalLines**](docs/Api/TempJournalLinesPageApi.md#deletealltempjournallines) | **POST** /SpyCreateJournalLine_deleteAllEntries | 
*TempJournalLinesPageApi* | [**editTempJournalLine**](docs/Api/TempJournalLinesPageApi.md#edittempjournalline) | **PATCH** /journalLines(\&#39;{id}\&#39;) | 
*TempJournalLinesPageApi* | [**getTempJournalLine**](docs/Api/TempJournalLinesPageApi.md#gettempjournalline) | **GET** /journalLines(\&#39;{id}\&#39;) | 
*TempJournalLinesPageApi* | [**getTempJournalLines**](docs/Api/TempJournalLinesPageApi.md#gettempjournallines) | **GET** /journalLines | 

## Models

- [AuditFields](docs/Model/AuditFields.md)
- [AuthenticateErrorResponse](docs/Model/AuthenticateErrorResponse.md)
- [AuthenticateResponse](docs/Model/AuthenticateResponse.md)
- [BaseEntity](docs/Model/BaseEntity.md)
- [BatchRequest](docs/Model/BatchRequest.md)
- [BatchRequestItem](docs/Model/BatchRequestItem.md)
- [BatchResponse](docs/Model/BatchResponse.md)
- [BatchResponseItem](docs/Model/BatchResponseItem.md)
- [CommitToJournalLineWithFileData](docs/Model/CommitToJournalLineWithFileData.md)
- [Companies](docs/Model/Companies.md)
- [CompaniesList](docs/Model/CompaniesList.md)
- [CompaniesListResponse](docs/Model/CompaniesListResponse.md)
- [CreateJournalLine](docs/Model/CreateJournalLine.md)
- [Error](docs/Model/Error.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [JournalLine](docs/Model/JournalLine.md)
- [JournalLineList](docs/Model/JournalLineList.md)
- [JournalLineListResponse](docs/Model/JournalLineListResponse.md)
- [JournalLineResponse](docs/Model/JournalLineResponse.md)
- [ODataEnvelope](docs/Model/ODataEnvelope.md)
- [SpyAccountingPeriod](docs/Model/SpyAccountingPeriod.md)
- [SpyAccountingPeriodList](docs/Model/SpyAccountingPeriodList.md)
- [SpyAccountingPeriodsResponse](docs/Model/SpyAccountingPeriodsResponse.md)
- [SpyApplyCustomerTemplates](docs/Model/SpyApplyCustomerTemplates.md)
- [SpyCountry](docs/Model/SpyCountry.md)
- [SpyCountryList](docs/Model/SpyCountryList.md)
- [SpyCountryListResponse](docs/Model/SpyCountryListResponse.md)
- [SpyCountryResponse](docs/Model/SpyCountryResponse.md)
- [SpyCreateJournalLineCommitToJournalLineResponse](docs/Model/SpyCreateJournalLineCommitToJournalLineResponse.md)
- [SpyCustLedger](docs/Model/SpyCustLedger.md)
- [SpyCustLedgerList](docs/Model/SpyCustLedgerList.md)
- [SpyCustLedgerListResponse](docs/Model/SpyCustLedgerListResponse.md)
- [SpyCustLedgerResponse](docs/Model/SpyCustLedgerResponse.md)
- [SpyCustomer](docs/Model/SpyCustomer.md)
- [SpyCustomerList](docs/Model/SpyCustomerList.md)
- [SpyCustomerListResponse](docs/Model/SpyCustomerListResponse.md)
- [SpyCustomerResponse](docs/Model/SpyCustomerResponse.md)
- [SpyCustomerTemplate](docs/Model/SpyCustomerTemplate.md)
- [SpyCustomerTemplateList](docs/Model/SpyCustomerTemplateList.md)
- [SpyCustomerTemplateListResponse](docs/Model/SpyCustomerTemplateListResponse.md)
- [SpyCustomerTemplateResponse](docs/Model/SpyCustomerTemplateResponse.md)
- [SpyCustomerTrans](docs/Model/SpyCustomerTrans.md)
- [SpyCustomerTransList](docs/Model/SpyCustomerTransList.md)
- [SpyCustomerTransListResponse](docs/Model/SpyCustomerTransListResponse.md)
- [SpyCustomerTransResponse](docs/Model/SpyCustomerTransResponse.md)
- [SpyDefaultDimension](docs/Model/SpyDefaultDimension.md)
- [SpyDefaultDimensionList](docs/Model/SpyDefaultDimensionList.md)
- [SpyDefaultDimensionListResponse](docs/Model/SpyDefaultDimensionListResponse.md)
- [SpyDefaultDimensionResponse](docs/Model/SpyDefaultDimensionResponse.md)
- [SpyDimension](docs/Model/SpyDimension.md)
- [SpyExchangeRates](docs/Model/SpyExchangeRates.md)
- [SpyExchangeRatesList](docs/Model/SpyExchangeRatesList.md)
- [SpyExchangeRatesListResponse](docs/Model/SpyExchangeRatesListResponse.md)
- [SpyExchangeRatesResponse](docs/Model/SpyExchangeRatesResponse.md)
- [SpyExtensionInfo](docs/Model/SpyExtensionInfo.md)
- [SpyExtensionInfoList](docs/Model/SpyExtensionInfoList.md)
- [SpyExtensionInfoResponse](docs/Model/SpyExtensionInfoResponse.md)
- [SpyFields](docs/Model/SpyFields.md)
- [SpyFieldsList](docs/Model/SpyFieldsList.md)
- [SpyFieldsListResponse](docs/Model/SpyFieldsListResponse.md)
- [SpyFieldsResponse](docs/Model/SpyFieldsResponse.md)
- [SpyInsertPostCode](docs/Model/SpyInsertPostCode.md)
- [SpyJournalEntriesList](docs/Model/SpyJournalEntriesList.md)
- [SpyJournalEntriesListResponse](docs/Model/SpyJournalEntriesListResponse.md)
- [SpyJournalEntry](docs/Model/SpyJournalEntry.md)
- [SpyJournalEntryResponse](docs/Model/SpyJournalEntryResponse.md)
- [SpyLedgerAccount](docs/Model/SpyLedgerAccount.md)
- [SpyLedgerAccountList](docs/Model/SpyLedgerAccountList.md)
- [SpyLedgerAccountListResponse](docs/Model/SpyLedgerAccountListResponse.md)
- [SpyLedgerAccountResponse](docs/Model/SpyLedgerAccountResponse.md)
- [SpyLedgerTrans](docs/Model/SpyLedgerTrans.md)
- [SpyLedgerTransList](docs/Model/SpyLedgerTransList.md)
- [SpyLedgerTransListResponse](docs/Model/SpyLedgerTransListResponse.md)
- [SpyLedgerTransResponse](docs/Model/SpyLedgerTransResponse.md)
- [SpyPaymentTerm](docs/Model/SpyPaymentTerm.md)
- [SpyPaymentTermList](docs/Model/SpyPaymentTermList.md)
- [SpyPaymentTermListResponse](docs/Model/SpyPaymentTermListResponse.md)
- [SpyPaymentTermResponse](docs/Model/SpyPaymentTermResponse.md)
- [SpyPaymentTermV2](docs/Model/SpyPaymentTermV2.md)
- [SpyPaymentTermV2List](docs/Model/SpyPaymentTermV2List.md)
- [SpyPaymentTermV2ListResponse](docs/Model/SpyPaymentTermV2ListResponse.md)
- [SpyPaymentTermV2Response](docs/Model/SpyPaymentTermV2Response.md)
- [SpyPostCode](docs/Model/SpyPostCode.md)
- [SpyPostCodeList](docs/Model/SpyPostCodeList.md)
- [SpyPostCodeListResponse](docs/Model/SpyPostCodeListResponse.md)
- [SpyPostCodeResponse](docs/Model/SpyPostCodeResponse.md)
- [SpySupplier](docs/Model/SpySupplier.md)
- [SpySupplierList](docs/Model/SpySupplierList.md)
- [SpySupplierListResponse](docs/Model/SpySupplierListResponse.md)
- [SpySupplierResponse](docs/Model/SpySupplierResponse.md)
- [SpySupplierTrans](docs/Model/SpySupplierTrans.md)
- [SpySupplierTransList](docs/Model/SpySupplierTransList.md)
- [SpySupplierTransListResponse](docs/Model/SpySupplierTransListResponse.md)
- [SpySupplierTransResponse](docs/Model/SpySupplierTransResponse.md)
- [SpyTemplateLine](docs/Model/SpyTemplateLine.md)
- [SpyTemplateLineList](docs/Model/SpyTemplateLineList.md)
- [SpyTemplateLineListResponse](docs/Model/SpyTemplateLineListResponse.md)
- [SpyTemplateLineResponse](docs/Model/SpyTemplateLineResponse.md)
- [SpyVatPostingSetup](docs/Model/SpyVatPostingSetup.md)
- [SpyVatPostingSetupList](docs/Model/SpyVatPostingSetupList.md)
- [SpyVatPostingSetupListResponse](docs/Model/SpyVatPostingSetupListResponse.md)
- [SpyVatPostingSetupResponse](docs/Model/SpyVatPostingSetupResponse.md)
- [SpyVendLedger](docs/Model/SpyVendLedger.md)
- [SpyVendLedgerList](docs/Model/SpyVendLedgerList.md)
- [SpyVendLedgerListResponse](docs/Model/SpyVendLedgerListResponse.md)
- [SpyVendLedgerResponse](docs/Model/SpyVendLedgerResponse.md)
- [SystemId](docs/Model/SystemId.md)

## Authorization

Authentication schemes defined for the API:
### bearerAuth

- **Type**: Bearer authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
    - Generator version: `7.6.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
