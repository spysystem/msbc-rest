<?php
/**
 * SpyExtensionInfo
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
 * Generator version: 7.6.0
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
 * SpyExtensionInfo Class Doc Comment
 *
 * @category Class
 * @package  Spy\MsbcRestClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SpyExtensionInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return SpyExtensionInfoModelFields
      */
    public static function GetModelFields(): SpyExtensionInfoModelFields
    {
        return new SpyExtensionInfoModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return SpyExtensionInfoModelAttributes
      */
    public static function GetModelAttributes(): SpyExtensionInfoModelAttributes
    {
        return new SpyExtensionInfoModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SpyExtensionInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'at_odata_etag' => 'string',
        'msbc_application_build' => 'string',
        'msbc_application_version' => 'string',
        'msbc_build_branch' => 'string',
        'msbc_build_file_version' => 'string',
        'msbc_original_application_version' => 'string',
        'msbc_platform_file_version' => 'string',
        'msbc_platform_product_version' => 'string',
        'spy_extension_app_version' => 'string',
        'spy_extension_data_version' => 'string',
        'spy_extension_name' => 'string',
        'spy_extension_publisher' => 'string'
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
        'msbc_application_build' => null,
        'msbc_application_version' => null,
        'msbc_build_branch' => null,
        'msbc_build_file_version' => null,
        'msbc_original_application_version' => null,
        'msbc_platform_file_version' => null,
        'msbc_platform_product_version' => null,
        'spy_extension_app_version' => null,
        'spy_extension_data_version' => null,
        'spy_extension_name' => null,
        'spy_extension_publisher' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'at_odata_etag' => false,
        'msbc_application_build' => false,
        'msbc_application_version' => false,
        'msbc_build_branch' => false,
        'msbc_build_file_version' => false,
        'msbc_original_application_version' => false,
        'msbc_platform_file_version' => false,
        'msbc_platform_product_version' => false,
        'spy_extension_app_version' => false,
        'spy_extension_data_version' => false,
        'spy_extension_name' => false,
        'spy_extension_publisher' => false
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
        'msbc_application_build' => 'msbcApplicationBuild',
        'msbc_application_version' => 'msbcApplicationVersion',
        'msbc_build_branch' => 'msbcBuildBranch',
        'msbc_build_file_version' => 'msbcBuildFileVersion',
        'msbc_original_application_version' => 'msbcOriginalApplicationVersion',
        'msbc_platform_file_version' => 'msbcPlatformFileVersion',
        'msbc_platform_product_version' => 'msbcPlatformProductVersion',
        'spy_extension_app_version' => 'spyExtensionAppVersion',
        'spy_extension_data_version' => 'spyExtensionDataVersion',
        'spy_extension_name' => 'spyExtensionName',
        'spy_extension_publisher' => 'spyExtensionPublisher'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'at_odata_etag' => 'setAtOdataEtag',
        'msbc_application_build' => 'setMsbcApplicationBuild',
        'msbc_application_version' => 'setMsbcApplicationVersion',
        'msbc_build_branch' => 'setMsbcBuildBranch',
        'msbc_build_file_version' => 'setMsbcBuildFileVersion',
        'msbc_original_application_version' => 'setMsbcOriginalApplicationVersion',
        'msbc_platform_file_version' => 'setMsbcPlatformFileVersion',
        'msbc_platform_product_version' => 'setMsbcPlatformProductVersion',
        'spy_extension_app_version' => 'setSpyExtensionAppVersion',
        'spy_extension_data_version' => 'setSpyExtensionDataVersion',
        'spy_extension_name' => 'setSpyExtensionName',
        'spy_extension_publisher' => 'setSpyExtensionPublisher'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'at_odata_etag' => 'getAtOdataEtag',
        'msbc_application_build' => 'getMsbcApplicationBuild',
        'msbc_application_version' => 'getMsbcApplicationVersion',
        'msbc_build_branch' => 'getMsbcBuildBranch',
        'msbc_build_file_version' => 'getMsbcBuildFileVersion',
        'msbc_original_application_version' => 'getMsbcOriginalApplicationVersion',
        'msbc_platform_file_version' => 'getMsbcPlatformFileVersion',
        'msbc_platform_product_version' => 'getMsbcPlatformProductVersion',
        'spy_extension_app_version' => 'getSpyExtensionAppVersion',
        'spy_extension_data_version' => 'getSpyExtensionDataVersion',
        'spy_extension_name' => 'getSpyExtensionName',
        'spy_extension_publisher' => 'getSpyExtensionPublisher'
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
        $this->setIfExists('at_odata_etag', $data ?? [], null);
        $this->setIfExists('msbc_application_build', $data ?? [], null);
        $this->setIfExists('msbc_application_version', $data ?? [], null);
        $this->setIfExists('msbc_build_branch', $data ?? [], null);
        $this->setIfExists('msbc_build_file_version', $data ?? [], null);
        $this->setIfExists('msbc_original_application_version', $data ?? [], null);
        $this->setIfExists('msbc_platform_file_version', $data ?? [], null);
        $this->setIfExists('msbc_platform_product_version', $data ?? [], null);
        $this->setIfExists('spy_extension_app_version', $data ?? [], null);
        $this->setIfExists('spy_extension_data_version', $data ?? [], null);
        $this->setIfExists('spy_extension_name', $data ?? [], null);
        $this->setIfExists('spy_extension_publisher', $data ?? [], null);
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
     * Gets msbc_application_build
     *
     * @return string|null
     */
    public function getMsbcApplicationBuild()
    {
        return $this->container['msbc_application_build'];
    }

    /**
     * Sets msbc_application_build
     *
     * @param string|null $msbc_application_build msbc_application_build
     *
     * @return self
     */
    public function setMsbcApplicationBuild($msbc_application_build)
    {
        if (is_null($msbc_application_build)) {
            throw new \InvalidArgumentException('non-nullable msbc_application_build cannot be null');
        }
        $this->container['msbc_application_build'] = $msbc_application_build;

        return $this;
    }

    /**
     * Gets msbc_application_version
     *
     * @return string|null
     */
    public function getMsbcApplicationVersion()
    {
        return $this->container['msbc_application_version'];
    }

    /**
     * Sets msbc_application_version
     *
     * @param string|null $msbc_application_version msbc_application_version
     *
     * @return self
     */
    public function setMsbcApplicationVersion($msbc_application_version)
    {
        if (is_null($msbc_application_version)) {
            throw new \InvalidArgumentException('non-nullable msbc_application_version cannot be null');
        }
        $this->container['msbc_application_version'] = $msbc_application_version;

        return $this;
    }

    /**
     * Gets msbc_build_branch
     *
     * @return string|null
     */
    public function getMsbcBuildBranch()
    {
        return $this->container['msbc_build_branch'];
    }

    /**
     * Sets msbc_build_branch
     *
     * @param string|null $msbc_build_branch msbc_build_branch
     *
     * @return self
     */
    public function setMsbcBuildBranch($msbc_build_branch)
    {
        if (is_null($msbc_build_branch)) {
            throw new \InvalidArgumentException('non-nullable msbc_build_branch cannot be null');
        }
        $this->container['msbc_build_branch'] = $msbc_build_branch;

        return $this;
    }

    /**
     * Gets msbc_build_file_version
     *
     * @return string|null
     */
    public function getMsbcBuildFileVersion()
    {
        return $this->container['msbc_build_file_version'];
    }

    /**
     * Sets msbc_build_file_version
     *
     * @param string|null $msbc_build_file_version msbc_build_file_version
     *
     * @return self
     */
    public function setMsbcBuildFileVersion($msbc_build_file_version)
    {
        if (is_null($msbc_build_file_version)) {
            throw new \InvalidArgumentException('non-nullable msbc_build_file_version cannot be null');
        }
        $this->container['msbc_build_file_version'] = $msbc_build_file_version;

        return $this;
    }

    /**
     * Gets msbc_original_application_version
     *
     * @return string|null
     */
    public function getMsbcOriginalApplicationVersion()
    {
        return $this->container['msbc_original_application_version'];
    }

    /**
     * Sets msbc_original_application_version
     *
     * @param string|null $msbc_original_application_version msbc_original_application_version
     *
     * @return self
     */
    public function setMsbcOriginalApplicationVersion($msbc_original_application_version)
    {
        if (is_null($msbc_original_application_version)) {
            throw new \InvalidArgumentException('non-nullable msbc_original_application_version cannot be null');
        }
        $this->container['msbc_original_application_version'] = $msbc_original_application_version;

        return $this;
    }

    /**
     * Gets msbc_platform_file_version
     *
     * @return string|null
     */
    public function getMsbcPlatformFileVersion()
    {
        return $this->container['msbc_platform_file_version'];
    }

    /**
     * Sets msbc_platform_file_version
     *
     * @param string|null $msbc_platform_file_version msbc_platform_file_version
     *
     * @return self
     */
    public function setMsbcPlatformFileVersion($msbc_platform_file_version)
    {
        if (is_null($msbc_platform_file_version)) {
            throw new \InvalidArgumentException('non-nullable msbc_platform_file_version cannot be null');
        }
        $this->container['msbc_platform_file_version'] = $msbc_platform_file_version;

        return $this;
    }

    /**
     * Gets msbc_platform_product_version
     *
     * @return string|null
     */
    public function getMsbcPlatformProductVersion()
    {
        return $this->container['msbc_platform_product_version'];
    }

    /**
     * Sets msbc_platform_product_version
     *
     * @param string|null $msbc_platform_product_version msbc_platform_product_version
     *
     * @return self
     */
    public function setMsbcPlatformProductVersion($msbc_platform_product_version)
    {
        if (is_null($msbc_platform_product_version)) {
            throw new \InvalidArgumentException('non-nullable msbc_platform_product_version cannot be null');
        }
        $this->container['msbc_platform_product_version'] = $msbc_platform_product_version;

        return $this;
    }

    /**
     * Gets spy_extension_app_version
     *
     * @return string|null
     */
    public function getSpyExtensionAppVersion()
    {
        return $this->container['spy_extension_app_version'];
    }

    /**
     * Sets spy_extension_app_version
     *
     * @param string|null $spy_extension_app_version spy_extension_app_version
     *
     * @return self
     */
    public function setSpyExtensionAppVersion($spy_extension_app_version)
    {
        if (is_null($spy_extension_app_version)) {
            throw new \InvalidArgumentException('non-nullable spy_extension_app_version cannot be null');
        }
        $this->container['spy_extension_app_version'] = $spy_extension_app_version;

        return $this;
    }

    /**
     * Gets spy_extension_data_version
     *
     * @return string|null
     */
    public function getSpyExtensionDataVersion()
    {
        return $this->container['spy_extension_data_version'];
    }

    /**
     * Sets spy_extension_data_version
     *
     * @param string|null $spy_extension_data_version spy_extension_data_version
     *
     * @return self
     */
    public function setSpyExtensionDataVersion($spy_extension_data_version)
    {
        if (is_null($spy_extension_data_version)) {
            throw new \InvalidArgumentException('non-nullable spy_extension_data_version cannot be null');
        }
        $this->container['spy_extension_data_version'] = $spy_extension_data_version;

        return $this;
    }

    /**
     * Gets spy_extension_name
     *
     * @return string|null
     */
    public function getSpyExtensionName()
    {
        return $this->container['spy_extension_name'];
    }

    /**
     * Sets spy_extension_name
     *
     * @param string|null $spy_extension_name spy_extension_name
     *
     * @return self
     */
    public function setSpyExtensionName($spy_extension_name)
    {
        if (is_null($spy_extension_name)) {
            throw new \InvalidArgumentException('non-nullable spy_extension_name cannot be null');
        }
        $this->container['spy_extension_name'] = $spy_extension_name;

        return $this;
    }

    /**
     * Gets spy_extension_publisher
     *
     * @return string|null
     */
    public function getSpyExtensionPublisher()
    {
        return $this->container['spy_extension_publisher'];
    }

    /**
     * Sets spy_extension_publisher
     *
     * @param string|null $spy_extension_publisher spy_extension_publisher
     *
     * @return self
     */
    public function setSpyExtensionPublisher($spy_extension_publisher)
    {
        if (is_null($spy_extension_publisher)) {
            throw new \InvalidArgumentException('non-nullable spy_extension_publisher cannot be null');
        }
        $this->container['spy_extension_publisher'] = $spy_extension_publisher;

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


