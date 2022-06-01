<?php
/**
 * SpyExchangeRates
 *
 * PHP version 7.4
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

use \ArrayAccess;
use \Spy\MsbcRestClient\ObjectSerializer;

/**
 * SpyExchangeRates Class Doc Comment
 *
 * @category Class
 * @package  Spy\MsbcRestClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SpyExchangeRates implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return SpyExchangeRatesModelFields
      */
    public static function GetModelFields(): SpyExchangeRatesModelFields
    {
        return new SpyExchangeRatesModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return SpyExchangeRatesModelAttributes
      */
    public static function GetModelAttributes(): SpyExchangeRatesModelAttributes
    {
        return new SpyExchangeRatesModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SpyExchangeRates';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'at_odata_etag' => 'string',
        'currency_code' => 'string',
        'starting_date' => 'string',
        'relational_currency_code' => 'string',
        'exchange_rate_amount' => 'float',
        'relational_exch_rate_amount' => 'float',
        'adjustment_exch_rate_amount' => 'float',
        'relational_adjmt_exch_rate_amt' => 'float',
        'fix_exchange_rate_amount' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'at_odata_etag' => null,
        'currency_code' => null,
        'starting_date' => null,
        'relational_currency_code' => null,
        'exchange_rate_amount' => null,
        'relational_exch_rate_amount' => null,
        'adjustment_exch_rate_amount' => null,
        'relational_adjmt_exch_rate_amt' => null,
        'fix_exchange_rate_amount' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'at_odata_etag' => false,
		'currency_code' => false,
		'starting_date' => false,
		'relational_currency_code' => false,
		'exchange_rate_amount' => false,
		'relational_exch_rate_amount' => false,
		'adjustment_exch_rate_amount' => false,
		'relational_adjmt_exch_rate_amt' => false,
		'fix_exchange_rate_amount' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'at_odata_etag' => '@odata.etag',
        'currency_code' => 'Currency_Code',
        'starting_date' => 'Starting_Date',
        'relational_currency_code' => 'Relational_Currency_Code',
        'exchange_rate_amount' => 'Exchange_Rate_Amount',
        'relational_exch_rate_amount' => 'Relational_Exch_Rate_Amount',
        'adjustment_exch_rate_amount' => 'Adjustment_Exch_Rate_Amount',
        'relational_adjmt_exch_rate_amt' => 'Relational_Adjmt_Exch_Rate_Amt',
        'fix_exchange_rate_amount' => 'Fix_Exchange_Rate_Amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'at_odata_etag' => 'setAtOdataEtag',
        'currency_code' => 'setCurrencyCode',
        'starting_date' => 'setStartingDate',
        'relational_currency_code' => 'setRelationalCurrencyCode',
        'exchange_rate_amount' => 'setExchangeRateAmount',
        'relational_exch_rate_amount' => 'setRelationalExchRateAmount',
        'adjustment_exch_rate_amount' => 'setAdjustmentExchRateAmount',
        'relational_adjmt_exch_rate_amt' => 'setRelationalAdjmtExchRateAmt',
        'fix_exchange_rate_amount' => 'setFixExchangeRateAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'at_odata_etag' => 'getAtOdataEtag',
        'currency_code' => 'getCurrencyCode',
        'starting_date' => 'getStartingDate',
        'relational_currency_code' => 'getRelationalCurrencyCode',
        'exchange_rate_amount' => 'getExchangeRateAmount',
        'relational_exch_rate_amount' => 'getRelationalExchRateAmount',
        'adjustment_exch_rate_amount' => 'getAdjustmentExchRateAmount',
        'relational_adjmt_exch_rate_amt' => 'getRelationalAdjmtExchRateAmt',
        'fix_exchange_rate_amount' => 'getFixExchangeRateAmount'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const FIX_EXCHANGE_RATE_AMOUNT_CURRENCY = 'Currency';
    public const FIX_EXCHANGE_RATE_AMOUNT_RELATIONAL_CURRENCY = 'Relational Currency';
    public const FIX_EXCHANGE_RATE_AMOUNT_BOTH = 'Both';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFixExchangeRateAmountAllowableValues()
    {
        return [
            self::FIX_EXCHANGE_RATE_AMOUNT_CURRENCY,
            self::FIX_EXCHANGE_RATE_AMOUNT_RELATIONAL_CURRENCY,
            self::FIX_EXCHANGE_RATE_AMOUNT_BOTH,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('at_odata_etag', $data ?? [], null);
        $this->setIfExists('currency_code', $data ?? [], null);
        $this->setIfExists('starting_date', $data ?? [], null);
        $this->setIfExists('relational_currency_code', $data ?? [], null);
        $this->setIfExists('exchange_rate_amount', $data ?? [], null);
        $this->setIfExists('relational_exch_rate_amount', $data ?? [], null);
        $this->setIfExists('adjustment_exch_rate_amount', $data ?? [], null);
        $this->setIfExists('relational_adjmt_exch_rate_amt', $data ?? [], null);
        $this->setIfExists('fix_exchange_rate_amount', $data ?? [], 'Currency');
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getFixExchangeRateAmountAllowableValues();
        if (!is_null($this->container['fix_exchange_rate_amount']) && !in_array($this->container['fix_exchange_rate_amount'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'fix_exchange_rate_amount', must be one of '%s'",
                $this->container['fix_exchange_rate_amount'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets at_odata_etag
     *
     * @return string|null
     */
    public function getAtOdataEtag()
    {
        return $this->container['at_odata_etag'];
    }

    /**
     * Sets at_odata_etag
     *
     * @param string|null $at_odata_etag If-Match header for updates
     *
     * @return self
     */
    public function setAtOdataEtag($at_odata_etag)
    {

        if (is_null($at_odata_etag)) {
            throw new \InvalidArgumentException('non-nullable at_odata_etag cannot be null');
        }

        $this->container['at_odata_etag'] = $at_odata_etag;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string|null $currency_code currency_code
     *
     * @return self
     */
    public function setCurrencyCode($currency_code)
    {

        if (is_null($currency_code)) {
            throw new \InvalidArgumentException('non-nullable currency_code cannot be null');
        }

        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets starting_date
     *
     * @return string|null
     */
    public function getStartingDate()
    {
        return $this->container['starting_date'];
    }

    /**
     * Sets starting_date
     *
     * @param string|null $starting_date starting_date
     *
     * @return self
     */
    public function setStartingDate($starting_date)
    {

        if (is_null($starting_date)) {
            throw new \InvalidArgumentException('non-nullable starting_date cannot be null');
        }

        $this->container['starting_date'] = $starting_date;

        return $this;
    }

    /**
     * Gets relational_currency_code
     *
     * @return string|null
     */
    public function getRelationalCurrencyCode()
    {
        return $this->container['relational_currency_code'];
    }

    /**
     * Sets relational_currency_code
     *
     * @param string|null $relational_currency_code relational_currency_code
     *
     * @return self
     */
    public function setRelationalCurrencyCode($relational_currency_code)
    {

        if (is_null($relational_currency_code)) {
            throw new \InvalidArgumentException('non-nullable relational_currency_code cannot be null');
        }

        $this->container['relational_currency_code'] = $relational_currency_code;

        return $this;
    }

    /**
     * Gets exchange_rate_amount
     *
     * @return float|null
     */
    public function getExchangeRateAmount()
    {
        return $this->container['exchange_rate_amount'];
    }

    /**
     * Sets exchange_rate_amount
     *
     * @param float|null $exchange_rate_amount exchange_rate_amount
     *
     * @return self
     */
    public function setExchangeRateAmount($exchange_rate_amount)
    {

        if (is_null($exchange_rate_amount)) {
            throw new \InvalidArgumentException('non-nullable exchange_rate_amount cannot be null');
        }

        $this->container['exchange_rate_amount'] = $exchange_rate_amount;

        return $this;
    }

    /**
     * Gets relational_exch_rate_amount
     *
     * @return float|null
     */
    public function getRelationalExchRateAmount()
    {
        return $this->container['relational_exch_rate_amount'];
    }

    /**
     * Sets relational_exch_rate_amount
     *
     * @param float|null $relational_exch_rate_amount relational_exch_rate_amount
     *
     * @return self
     */
    public function setRelationalExchRateAmount($relational_exch_rate_amount)
    {

        if (is_null($relational_exch_rate_amount)) {
            throw new \InvalidArgumentException('non-nullable relational_exch_rate_amount cannot be null');
        }

        $this->container['relational_exch_rate_amount'] = $relational_exch_rate_amount;

        return $this;
    }

    /**
     * Gets adjustment_exch_rate_amount
     *
     * @return float|null
     */
    public function getAdjustmentExchRateAmount()
    {
        return $this->container['adjustment_exch_rate_amount'];
    }

    /**
     * Sets adjustment_exch_rate_amount
     *
     * @param float|null $adjustment_exch_rate_amount adjustment_exch_rate_amount
     *
     * @return self
     */
    public function setAdjustmentExchRateAmount($adjustment_exch_rate_amount)
    {

        if (is_null($adjustment_exch_rate_amount)) {
            throw new \InvalidArgumentException('non-nullable adjustment_exch_rate_amount cannot be null');
        }

        $this->container['adjustment_exch_rate_amount'] = $adjustment_exch_rate_amount;

        return $this;
    }

    /**
     * Gets relational_adjmt_exch_rate_amt
     *
     * @return float|null
     */
    public function getRelationalAdjmtExchRateAmt()
    {
        return $this->container['relational_adjmt_exch_rate_amt'];
    }

    /**
     * Sets relational_adjmt_exch_rate_amt
     *
     * @param float|null $relational_adjmt_exch_rate_amt relational_adjmt_exch_rate_amt
     *
     * @return self
     */
    public function setRelationalAdjmtExchRateAmt($relational_adjmt_exch_rate_amt)
    {

        if (is_null($relational_adjmt_exch_rate_amt)) {
            throw new \InvalidArgumentException('non-nullable relational_adjmt_exch_rate_amt cannot be null');
        }

        $this->container['relational_adjmt_exch_rate_amt'] = $relational_adjmt_exch_rate_amt;

        return $this;
    }

    /**
     * Gets fix_exchange_rate_amount
     *
     * @return string|null
     */
    public function getFixExchangeRateAmount()
    {
        return $this->container['fix_exchange_rate_amount'];
    }

    /**
     * Sets fix_exchange_rate_amount
     *
     * @param string|null $fix_exchange_rate_amount fix_exchange_rate_amount
     *
     * @return self
     */
    public function setFixExchangeRateAmount($fix_exchange_rate_amount)
    {
        $allowedValues = $this->getFixExchangeRateAmountAllowableValues();
        if (!is_null($fix_exchange_rate_amount) && !in_array($fix_exchange_rate_amount, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'fix_exchange_rate_amount', must be one of '%s'",
                    $fix_exchange_rate_amount,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($fix_exchange_rate_amount)) {
            throw new \InvalidArgumentException('non-nullable fix_exchange_rate_amount cannot be null');
        }

        $this->container['fix_exchange_rate_amount'] = $fix_exchange_rate_amount;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return (string)json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


