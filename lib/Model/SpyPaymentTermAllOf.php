<?php
/**
 * SpyPaymentTermAllOf
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
 * SpyPaymentTermAllOf Class Doc Comment
 *
 * @category Class
 * @package  Spy\MsbcRestClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SpyPaymentTermAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return SpyPaymentTermAllOfModelFields
      */
    public static function GetModelFields(): SpyPaymentTermAllOfModelFields
    {
        return new SpyPaymentTermAllOfModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return SpyPaymentTermAllOfModelAttributes
      */
    public static function GetModelAttributes(): SpyPaymentTermAllOfModelAttributes
    {
        return new SpyPaymentTermAllOfModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SpyPaymentTerm_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'code' => 'string',
        'due_date_calculation' => 'string',
        'discount_date_calculation' => 'string',
        'discount_percent' => 'float',
        'calc_pmt_disc_on_cr_memos' => 'bool',
        'description' => 'string',
        'coupled_to_crm' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'code' => null,
        'due_date_calculation' => null,
        'discount_date_calculation' => null,
        'discount_percent' => null,
        'calc_pmt_disc_on_cr_memos' => null,
        'description' => null,
        'coupled_to_crm' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'code' => false,
		'due_date_calculation' => false,
		'discount_date_calculation' => false,
		'discount_percent' => false,
		'calc_pmt_disc_on_cr_memos' => false,
		'description' => false,
		'coupled_to_crm' => false
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
        'code' => 'Code',
        'due_date_calculation' => 'Due_Date_Calculation',
        'discount_date_calculation' => 'Discount_Date_Calculation',
        'discount_percent' => 'Discount_Percent',
        'calc_pmt_disc_on_cr_memos' => 'Calc_Pmt_Disc_on_Cr_Memos',
        'description' => 'Description',
        'coupled_to_crm' => 'Coupled_to_CRM'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'due_date_calculation' => 'setDueDateCalculation',
        'discount_date_calculation' => 'setDiscountDateCalculation',
        'discount_percent' => 'setDiscountPercent',
        'calc_pmt_disc_on_cr_memos' => 'setCalcPmtDiscOnCrMemos',
        'description' => 'setDescription',
        'coupled_to_crm' => 'setCoupledToCrm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'due_date_calculation' => 'getDueDateCalculation',
        'discount_date_calculation' => 'getDiscountDateCalculation',
        'discount_percent' => 'getDiscountPercent',
        'calc_pmt_disc_on_cr_memos' => 'getCalcPmtDiscOnCrMemos',
        'description' => 'getDescription',
        'coupled_to_crm' => 'getCoupledToCrm'
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
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('due_date_calculation', $data ?? [], null);
        $this->setIfExists('discount_date_calculation', $data ?? [], null);
        $this->setIfExists('discount_percent', $data ?? [], null);
        $this->setIfExists('calc_pmt_disc_on_cr_memos', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('coupled_to_crm', $data ?? [], null);
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
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code code
     *
     * @return self
     */
    public function setCode($code)
    {
        if (is_null($code)) {
            throw new \InvalidArgumentException('non-nullable code cannot be null');
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets due_date_calculation
     *
     * @return string|null
     */
    public function getDueDateCalculation()
    {
        return $this->container['due_date_calculation'];
    }

    /**
     * Sets due_date_calculation
     *
     * @param string|null $due_date_calculation due_date_calculation
     *
     * @return self
     */
    public function setDueDateCalculation($due_date_calculation)
    {
        if (is_null($due_date_calculation)) {
            throw new \InvalidArgumentException('non-nullable due_date_calculation cannot be null');
        }
        $this->container['due_date_calculation'] = $due_date_calculation;

        return $this;
    }

    /**
     * Gets discount_date_calculation
     *
     * @return string|null
     */
    public function getDiscountDateCalculation()
    {
        return $this->container['discount_date_calculation'];
    }

    /**
     * Sets discount_date_calculation
     *
     * @param string|null $discount_date_calculation discount_date_calculation
     *
     * @return self
     */
    public function setDiscountDateCalculation($discount_date_calculation)
    {
        if (is_null($discount_date_calculation)) {
            throw new \InvalidArgumentException('non-nullable discount_date_calculation cannot be null');
        }
        $this->container['discount_date_calculation'] = $discount_date_calculation;

        return $this;
    }

    /**
     * Gets discount_percent
     *
     * @return float|null
     */
    public function getDiscountPercent()
    {
        return $this->container['discount_percent'];
    }

    /**
     * Sets discount_percent
     *
     * @param float|null $discount_percent discount_percent
     *
     * @return self
     */
    public function setDiscountPercent($discount_percent)
    {
        if (is_null($discount_percent)) {
            throw new \InvalidArgumentException('non-nullable discount_percent cannot be null');
        }
        $this->container['discount_percent'] = $discount_percent;

        return $this;
    }

    /**
     * Gets calc_pmt_disc_on_cr_memos
     *
     * @return bool|null
     */
    public function getCalcPmtDiscOnCrMemos()
    {
        return $this->container['calc_pmt_disc_on_cr_memos'];
    }

    /**
     * Sets calc_pmt_disc_on_cr_memos
     *
     * @param bool|null $calc_pmt_disc_on_cr_memos calc_pmt_disc_on_cr_memos
     *
     * @return self
     */
    public function setCalcPmtDiscOnCrMemos($calc_pmt_disc_on_cr_memos)
    {
        if (is_null($calc_pmt_disc_on_cr_memos)) {
            throw new \InvalidArgumentException('non-nullable calc_pmt_disc_on_cr_memos cannot be null');
        }
        $this->container['calc_pmt_disc_on_cr_memos'] = $calc_pmt_disc_on_cr_memos;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets coupled_to_crm
     *
     * @return bool|null
     */
    public function getCoupledToCrm()
    {
        return $this->container['coupled_to_crm'];
    }

    /**
     * Sets coupled_to_crm
     *
     * @param bool|null $coupled_to_crm coupled_to_crm
     *
     * @return self
     */
    public function setCoupledToCrm($coupled_to_crm)
    {
        if (is_null($coupled_to_crm)) {
            throw new \InvalidArgumentException('non-nullable coupled_to_crm cannot be null');
        }
        $this->container['coupled_to_crm'] = $coupled_to_crm;

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


