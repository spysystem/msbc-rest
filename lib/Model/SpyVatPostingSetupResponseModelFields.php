<?php
/**
 * SpyVatPostingSetupResponseModelFields
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Spy\MsbcRestClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Microsoft Business Center API
 *
 * The Microsoft Business Center API is a RESTful API that provides an interface to the Microsoft Business Center service.
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Spy\MsbcRestClient\Model;

/**
 * SpyVatPostingSetupResponseModelFields Class Doc Comment
 *
 * @category Class
 * @package  Spy\MsbcRestClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SpyVatPostingSetupResponseModelFields
{
    public string $strAtOdataContext = '@odata.context';
    public string $strAtOdataEtag = '@odata.etag';
    public string $strVatBusPostingGroup = 'VAT_Bus_Posting_Group';
    public string $strVatProdPostingGroup = 'VAT_Prod_Posting_Group';
    public string $strDescription = 'Description';
    public string $strBlocked = 'Blocked';
    public string $strVatIdentifier = 'VAT_Identifier';
    public string $strVatPercent = 'VAT_Percent';
    public string $strVatCalculationType = 'VAT_Calculation_Type';
    public string $strUnrealizedVatType = 'Unrealized_VAT_Type';
    public string $strAdjustForPaymentDiscount = 'Adjust_for_Payment_Discount';
    public string $strSalesVatAccount = 'Sales_VAT_Account';
    public string $strSalesVatUnrealAccount = 'Sales_VAT_Unreal_Account';
    public string $strPurchaseVatAccount = 'Purchase_VAT_Account';
    public string $strPurchVatUnrealAccount = 'Purch_VAT_Unreal_Account';
    public string $strReverseChrgVatAcc = 'Reverse_Chrg_VAT_Acc';
    public string $strReverseChrgVatUnrealAcc = 'Reverse_Chrg_VAT_Unreal_Acc';
    public string $strVatClauseCode = 'VAT_Clause_Code';
    public string $strEuService = 'EU_Service';
    public string $strCertificateOfSupplyRequired = 'Certificate_of_Supply_Required';
    public string $strTaxCategory = 'Tax_Category';
}

