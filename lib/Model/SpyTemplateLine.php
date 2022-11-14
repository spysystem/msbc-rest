<?php
/**
 * SpyTemplateLine
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
 * SpyTemplateLine Class Doc Comment
 *
 * @category Class
 * @package  Spy\MsbcRestClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SpyTemplateLine implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return SpyTemplateLineModelFields
      */
    public static function GetModelFields(): SpyTemplateLineModelFields
    {
        return new SpyTemplateLineModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return SpyTemplateLineModelAttributes
      */
    public static function GetModelAttributes(): SpyTemplateLineModelAttributes
    {
        return new SpyTemplateLineModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SpyTemplateLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'at_odata_etag' => 'string',
        'template' => 'string',
        'line_no' => 'int',
        'type' => 'string',
        'field_id' => 'int',
        'field_name' => 'string',
        'table_id' => 'int',
        'table_name' => 'string',
        'template_code' => 'string',
        'template_description' => 'string',
        'default_value' => 'string'
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
        'template' => null,
        'line_no' => null,
        'type' => null,
        'field_id' => null,
        'field_name' => null,
        'table_id' => null,
        'table_name' => null,
        'template_code' => null,
        'template_description' => null,
        'default_value' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'at_odata_etag' => false,
		'template' => false,
		'line_no' => false,
		'type' => false,
		'field_id' => false,
		'field_name' => false,
		'table_id' => false,
		'table_name' => false,
		'template_code' => false,
		'template_description' => false,
		'default_value' => false
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
        'template' => 'Template',
        'line_no' => 'Line_No',
        'type' => 'Type',
        'field_id' => 'Field_ID',
        'field_name' => 'FieldName',
        'table_id' => 'Table_ID',
        'table_name' => 'Table_Name',
        'template_code' => 'Template_Code',
        'template_description' => 'Template_Description',
        'default_value' => 'DefaultValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'at_odata_etag' => 'setAtOdataEtag',
        'template' => 'setTemplate',
        'line_no' => 'setLineNo',
        'type' => 'setType',
        'field_id' => 'setFieldId',
        'field_name' => 'setFieldName',
        'table_id' => 'setTableId',
        'table_name' => 'setTableName',
        'template_code' => 'setTemplateCode',
        'template_description' => 'setTemplateDescription',
        'default_value' => 'setDefaultValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'at_odata_etag' => 'getAtOdataEtag',
        'template' => 'getTemplate',
        'line_no' => 'getLineNo',
        'type' => 'getType',
        'field_id' => 'getFieldId',
        'field_name' => 'getFieldName',
        'table_id' => 'getTableId',
        'table_name' => 'getTableName',
        'template_code' => 'getTemplateCode',
        'template_description' => 'getTemplateDescription',
        'default_value' => 'getDefaultValue'
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

    public const TYPE_FIELD = 'Field';
    public const TYPE_TEMPLATE = 'Template';
    public const TYPE_RELATED_TEMPLATE = 'Related Template';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_FIELD,
            self::TYPE_TEMPLATE,
            self::TYPE_RELATED_TEMPLATE,
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
        $this->setIfExists('template', $data ?? [], null);
        $this->setIfExists('line_no', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('field_id', $data ?? [], null);
        $this->setIfExists('field_name', $data ?? [], null);
        $this->setIfExists('table_id', $data ?? [], null);
        $this->setIfExists('table_name', $data ?? [], null);
        $this->setIfExists('template_code', $data ?? [], null);
        $this->setIfExists('template_description', $data ?? [], null);
        $this->setIfExists('default_value', $data ?? [], null);
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

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
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
     * Gets template
     *
     * @return string|null
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     *
     * @param string|null $template template
     *
     * @return self
     */
    public function setTemplate($template)
    {

        if (is_null($template)) {
            throw new \InvalidArgumentException('non-nullable template cannot be null');
        }

        $this->container['template'] = $template;

        return $this;
    }

    /**
     * Gets line_no
     *
     * @return int|null
     */
    public function getLineNo()
    {
        return $this->container['line_no'];
    }

    /**
     * Sets line_no
     *
     * @param int|null $line_no line_no
     *
     * @return self
     */
    public function setLineNo($line_no)
    {

        if (is_null($line_no)) {
            throw new \InvalidArgumentException('non-nullable line_no cannot be null');
        }

        $this->container['line_no'] = $line_no;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }

        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets field_id
     *
     * @return int|null
     */
    public function getFieldId()
    {
        return $this->container['field_id'];
    }

    /**
     * Sets field_id
     *
     * @param int|null $field_id field_id
     *
     * @return self
     */
    public function setFieldId($field_id)
    {

        if (is_null($field_id)) {
            throw new \InvalidArgumentException('non-nullable field_id cannot be null');
        }

        $this->container['field_id'] = $field_id;

        return $this;
    }

    /**
     * Gets field_name
     *
     * @return string|null
     */
    public function getFieldName()
    {
        return $this->container['field_name'];
    }

    /**
     * Sets field_name
     *
     * @param string|null $field_name field_name
     *
     * @return self
     */
    public function setFieldName($field_name)
    {

        if (is_null($field_name)) {
            throw new \InvalidArgumentException('non-nullable field_name cannot be null');
        }

        $this->container['field_name'] = $field_name;

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
     * Gets table_name
     *
     * @return string|null
     */
    public function getTableName()
    {
        return $this->container['table_name'];
    }

    /**
     * Sets table_name
     *
     * @param string|null $table_name table_name
     *
     * @return self
     */
    public function setTableName($table_name)
    {

        if (is_null($table_name)) {
            throw new \InvalidArgumentException('non-nullable table_name cannot be null');
        }

        $this->container['table_name'] = $table_name;

        return $this;
    }

    /**
     * Gets template_code
     *
     * @return string|null
     */
    public function getTemplateCode()
    {
        return $this->container['template_code'];
    }

    /**
     * Sets template_code
     *
     * @param string|null $template_code template_code
     *
     * @return self
     */
    public function setTemplateCode($template_code)
    {

        if (is_null($template_code)) {
            throw new \InvalidArgumentException('non-nullable template_code cannot be null');
        }

        $this->container['template_code'] = $template_code;

        return $this;
    }

    /**
     * Gets template_description
     *
     * @return string|null
     */
    public function getTemplateDescription()
    {
        return $this->container['template_description'];
    }

    /**
     * Sets template_description
     *
     * @param string|null $template_description template_description
     *
     * @return self
     */
    public function setTemplateDescription($template_description)
    {

        if (is_null($template_description)) {
            throw new \InvalidArgumentException('non-nullable template_description cannot be null');
        }

        $this->container['template_description'] = $template_description;

        return $this;
    }

    /**
     * Gets default_value
     *
     * @return string|null
     */
    public function getDefaultValue()
    {
        return $this->container['default_value'];
    }

    /**
     * Sets default_value
     *
     * @param string|null $default_value default_value
     *
     * @return self
     */
    public function setDefaultValue($default_value)
    {

        if (is_null($default_value)) {
            throw new \InvalidArgumentException('non-nullable default_value cannot be null');
        }

        $this->container['default_value'] = $default_value;

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


