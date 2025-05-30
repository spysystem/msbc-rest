<?php
/**
 * SpyDefaultDimensionResponse
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
 * Generator version: 7.10.0
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
 * SpyDefaultDimensionResponse Class Doc Comment
 *
 * @category Class
 * @package  Spy\MsbcRestClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SpyDefaultDimensionResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return SpyDefaultDimensionResponseModelFields
      */
    public static function GetModelFields(): SpyDefaultDimensionResponseModelFields
    {
        return new SpyDefaultDimensionResponseModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return SpyDefaultDimensionResponseModelAttributes
      */
    public static function GetModelAttributes(): SpyDefaultDimensionResponseModelAttributes
    {
        return new SpyDefaultDimensionResponseModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SpyDefaultDimensionResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'at_odata_context' => 'string',
        'at_odata_etag' => 'string',
        'table_id' => 'int',
        'no' => 'string',
        'dimension_code' => 'string',
        'dimension_value_code' => 'string',
        'value_posting' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'at_odata_context' => null,
        'at_odata_etag' => null,
        'table_id' => null,
        'no' => null,
        'dimension_code' => null,
        'dimension_value_code' => null,
        'value_posting' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'at_odata_context' => false,
        'at_odata_etag' => false,
        'table_id' => false,
        'no' => false,
        'dimension_code' => false,
        'dimension_value_code' => false,
        'value_posting' => false
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
        'at_odata_context' => '@odata.context',
        'at_odata_etag' => '@odata.etag',
        'table_id' => 'Table_ID',
        'no' => 'No',
        'dimension_code' => 'Dimension_Code',
        'dimension_value_code' => 'Dimension_Value_Code',
        'value_posting' => 'Value_Posting'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'at_odata_context' => 'setAtOdataContext',
        'at_odata_etag' => 'setAtOdataEtag',
        'table_id' => 'setTableId',
        'no' => 'setNo',
        'dimension_code' => 'setDimensionCode',
        'dimension_value_code' => 'setDimensionValueCode',
        'value_posting' => 'setValuePosting'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'at_odata_context' => 'getAtOdataContext',
        'at_odata_etag' => 'getAtOdataEtag',
        'table_id' => 'getTableId',
        'no' => 'getNo',
        'dimension_code' => 'getDimensionCode',
        'dimension_value_code' => 'getDimensionValueCode',
        'value_posting' => 'getValuePosting'
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

    public const VALUE_POSTING_SPACE_1 = ' ';
    public const VALUE_POSTING_CODE_MANDATORY = 'Code Mandatory';
    public const VALUE_POSTING_SAME_CODE = 'Same Code';
    public const VALUE_POSTING_NO_CODE = 'No Code';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getValuePostingAllowableValues()
    {
        return [
            self::VALUE_POSTING_SPACE_1,
            self::VALUE_POSTING_CODE_MANDATORY,
            self::VALUE_POSTING_SAME_CODE,
            self::VALUE_POSTING_NO_CODE,
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
        $this->setIfExists('at_odata_context', $data ?? [], null);
        $this->setIfExists('at_odata_etag', $data ?? [], null);
        $this->setIfExists('table_id', $data ?? [], null);
        $this->setIfExists('no', $data ?? [], null);
        $this->setIfExists('dimension_code', $data ?? [], null);
        $this->setIfExists('dimension_value_code', $data ?? [], null);
        $this->setIfExists('value_posting', $data ?? [], null);
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

        $allowedValues = $this->getValuePostingAllowableValues();
        if (!is_null($this->container['value_posting']) && !in_array($this->container['value_posting'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'value_posting', must be one of '%s'",
                $this->container['value_posting'],
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
     * Gets at_odata_context
     *
     * @return string|null
     */
    public function getAtOdataContext()
    {
        return $this->container['at_odata_context'];
    }

    /**
     * Sets at_odata_context
     *
     * @param string|null $at_odata_context at_odata_context
     *
     * @return self
     */
    public function setAtOdataContext($at_odata_context)
    {
        if (is_null($at_odata_context)) {
            throw new \InvalidArgumentException('non-nullable at_odata_context cannot be null');
        }
        $this->container['at_odata_context'] = $at_odata_context;

        return $this;
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
     * Gets table_id
     *
     * @return int|null
     */
    public function getTableId()
    {
        return $this->container['table_id'];
    }

    /**
     * Sets table_id
     *
     * @param int|null $table_id table_id
     *
     * @return self
     */
    public function setTableId($table_id)
    {
        if (is_null($table_id)) {
            throw new \InvalidArgumentException('non-nullable table_id cannot be null');
        }
        $this->container['table_id'] = $table_id;

        return $this;
    }

    /**
     * Gets no
     *
     * @return string|null
     */
    public function getNo()
    {
        return $this->container['no'];
    }

    /**
     * Sets no
     *
     * @param string|null $no no
     *
     * @return self
     */
    public function setNo($no)
    {
        if (is_null($no)) {
            throw new \InvalidArgumentException('non-nullable no cannot be null');
        }
        $this->container['no'] = $no;

        return $this;
    }

    /**
     * Gets dimension_code
     *
     * @return string|null
     */
    public function getDimensionCode()
    {
        return $this->container['dimension_code'];
    }

    /**
     * Sets dimension_code
     *
     * @param string|null $dimension_code dimension_code
     *
     * @return self
     */
    public function setDimensionCode($dimension_code)
    {
        if (is_null($dimension_code)) {
            throw new \InvalidArgumentException('non-nullable dimension_code cannot be null');
        }
        $this->container['dimension_code'] = $dimension_code;

        return $this;
    }

    /**
     * Gets dimension_value_code
     *
     * @return string|null
     */
    public function getDimensionValueCode()
    {
        return $this->container['dimension_value_code'];
    }

    /**
     * Sets dimension_value_code
     *
     * @param string|null $dimension_value_code dimension_value_code
     *
     * @return self
     */
    public function setDimensionValueCode($dimension_value_code)
    {
        if (is_null($dimension_value_code)) {
            throw new \InvalidArgumentException('non-nullable dimension_value_code cannot be null');
        }
        $this->container['dimension_value_code'] = $dimension_value_code;

        return $this;
    }

    /**
     * Gets value_posting
     *
     * @return string|null
     */
    public function getValuePosting()
    {
        return $this->container['value_posting'];
    }

    /**
     * Sets value_posting
     *
     * @param string|null $value_posting value_posting
     *
     * @return self
     */
    public function setValuePosting($value_posting)
    {
        if (is_null($value_posting)) {
            throw new \InvalidArgumentException('non-nullable value_posting cannot be null');
        }
        $allowedValues = $this->getValuePostingAllowableValues();
        if (!in_array($value_posting, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'value_posting', must be one of '%s'",
                    $value_posting,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['value_posting'] = $value_posting;

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


