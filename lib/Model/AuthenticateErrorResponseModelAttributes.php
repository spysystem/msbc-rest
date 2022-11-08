<?php
/**
 * AuthenticateErrorResponseModelAttributes
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
 * OpenAPI Generator version: 6.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Spy\MsbcRestClient\Model;

/**
 * AuthenticateErrorResponseModelAttributes Class Doc Comment
 *
 * @category Class
 * @package  Spy\MsbcRestClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AuthenticateErrorResponseModelAttributes
{
    public string $strError = 'error';
    public string $strErrorDescription = 'error_description';
    public string $strErrorCodes = 'error_codes';
    public string $strTimestamp = 'timestamp';
    public string $strTraceId = 'trace_id';
    public string $strCorrelationId = 'correlation_id';
    public string $strErrorUri = 'error_uri';
}

