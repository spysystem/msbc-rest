<?php
/**
 * SpyExchangeRatesResponseModelFields
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
 * SpyExchangeRatesResponseModelFields Class Doc Comment
 *
 * @category Class
 * @package  Spy\MsbcRestClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SpyExchangeRatesResponseModelFields
{
    public string $strAtOdataContext = '@odata.context';
    public string $strAtOdataEtag = '@odata.etag';
    public string $strCurrencyCode = 'Currency_Code';
    public string $strStartingDate = 'Starting_Date';
    public string $strRelationalCurrencyCode = 'Relational_Currency_Code';
    public string $strExchangeRateAmount = 'Exchange_Rate_Amount';
    public string $strRelationalExchRateAmount = 'Relational_Exch_Rate_Amount';
    public string $strAdjustmentExchRateAmount = 'Adjustment_Exch_Rate_Amount';
    public string $strRelationalAdjmtExchRateAmt = 'Relational_Adjmt_Exch_Rate_Amt';
    public string $strFixExchangeRateAmount = 'Fix_Exchange_Rate_Amount';
}
