<?php
/**
 * JournalLineAllOf
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
 * OpenAPI Generator version: 6.3.0-SNAPSHOT
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
 * JournalLineAllOf Class Doc Comment
 *
 * @category Class
 * @package  Spy\MsbcRestClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class JournalLineAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return JournalLineAllOfModelFields
      */
    public static function GetModelFields(): JournalLineAllOfModelFields
    {
        return new JournalLineAllOfModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return JournalLineAllOfModelAttributes
      */
    public static function GetModelAttributes(): JournalLineAllOfModelAttributes
    {
        return new JournalLineAllOfModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'journalLine_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'system_created_at' => 'string',
        'system_created_by' => 'string',
        'system_modified_at' => 'string',
        'system_modified_by' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'system_created_at' => null,
        'system_created_by' => null,
        'system_modified_at' => null,
        'system_modified_by' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'system_created_at' => false,
		'system_created_by' => false,
		'system_modified_at' => false,
		'system_modified_by' => false
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
        'id' => 'id',
        'system_created_at' => 'systemCreatedAt',
        'system_created_by' => 'systemCreatedBy',
        'system_modified_at' => 'systemModifiedAt',
        'system_modified_by' => 'systemModifiedBy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'system_created_at' => 'setSystemCreatedAt',
        'system_created_by' => 'setSystemCreatedBy',
        'system_modified_at' => 'setSystemModifiedAt',
        'system_modified_by' => 'setSystemModifiedBy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'system_created_at' => 'getSystemCreatedAt',
        'system_created_by' => 'getSystemCreatedBy',
        'system_modified_at' => 'getSystemModifiedAt',
        'system_modified_by' => 'getSystemModifiedBy'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('system_created_at', $data ?? [], null);
        $this->setIfExists('system_created_by', $data ?? [], null);
        $this->setIfExists('system_modified_at', $data ?? [], null);
        $this->setIfExists('system_modified_by', $data ?? [], null);
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets system_created_at
     *
     * @return string|null
     */
    public function getSystemCreatedAt()
    {
        return $this->container['system_created_at'];
    }

    /**
     * Sets system_created_at
     *
     * @param string|null $system_created_at system_created_at
     *
     * @return self
     */
    public function setSystemCreatedAt($system_created_at)
    {
        if (is_null($system_created_at)) {
            throw new \InvalidArgumentException('non-nullable system_created_at cannot be null');
        }
        $this->container['system_created_at'] = $system_created_at;

        return $this;
    }

    /**
     * Gets system_created_by
     *
     * @return string|null
     */
    public function getSystemCreatedBy()
    {
        return $this->container['system_created_by'];
    }

    /**
     * Sets system_created_by
     *
     * @param string|null $system_created_by system_created_by
     *
     * @return self
     */
    public function setSystemCreatedBy($system_created_by)
    {
        if (is_null($system_created_by)) {
            throw new \InvalidArgumentException('non-nullable system_created_by cannot be null');
        }
        $this->container['system_created_by'] = $system_created_by;

        return $this;
    }

    /**
     * Gets system_modified_at
     *
     * @return string|null
     */
    public function getSystemModifiedAt()
    {
        return $this->container['system_modified_at'];
    }

    /**
     * Sets system_modified_at
     *
     * @param string|null $system_modified_at system_modified_at
     *
     * @return self
     */
    public function setSystemModifiedAt($system_modified_at)
    {
        if (is_null($system_modified_at)) {
            throw new \InvalidArgumentException('non-nullable system_modified_at cannot be null');
        }
        $this->container['system_modified_at'] = $system_modified_at;

        return $this;
    }

    /**
     * Gets system_modified_by
     *
     * @return string|null
     */
    public function getSystemModifiedBy()
    {
        return $this->container['system_modified_by'];
    }

    /**
     * Sets system_modified_by
     *
     * @param string|null $system_modified_by system_modified_by
     *
     * @return self
     */
    public function setSystemModifiedBy($system_modified_by)
    {
        if (is_null($system_modified_by)) {
            throw new \InvalidArgumentException('non-nullable system_modified_by cannot be null');
        }
        $this->container['system_modified_by'] = $system_modified_by;

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


