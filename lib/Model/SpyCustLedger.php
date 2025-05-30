<?php
/**
 * SpyCustLedger
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
 * SpyCustLedger Class Doc Comment
 *
 * @category Class
 * @package  Spy\MsbcRestClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SpyCustLedger implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return SpyCustLedgerModelFields
      */
    public static function GetModelFields(): SpyCustLedgerModelFields
    {
        return new SpyCustLedgerModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return SpyCustLedgerModelAttributes
      */
    public static function GetModelAttributes(): SpyCustLedgerModelAttributes
    {
        return new SpyCustLedgerModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SpyCustLedger';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'at_odata_etag' => 'string',
        'entry_no' => 'int',
        'posting_date' => 'string',
        'document_no' => 'string',
        'external_document_no' => 'string',
        'customer_no' => 'string',
        'document_type' => 'string',
        'amount' => 'float',
        'currency_code' => 'string',
        'amount_lcy' => 'float',
        'description' => 'string',
        'date_filter' => 'string'
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
        'entry_no' => null,
        'posting_date' => null,
        'document_no' => null,
        'external_document_no' => null,
        'customer_no' => null,
        'document_type' => null,
        'amount' => null,
        'currency_code' => null,
        'amount_lcy' => null,
        'description' => null,
        'date_filter' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'at_odata_etag' => false,
        'entry_no' => false,
        'posting_date' => false,
        'document_no' => false,
        'external_document_no' => false,
        'customer_no' => false,
        'document_type' => false,
        'amount' => false,
        'currency_code' => false,
        'amount_lcy' => false,
        'description' => false,
        'date_filter' => false
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
        'entry_no' => 'Entry_No',
        'posting_date' => 'Posting_Date',
        'document_no' => 'Document_No',
        'external_document_no' => 'External_Document_No',
        'customer_no' => 'Customer_No',
        'document_type' => 'Document_Type',
        'amount' => 'Amount',
        'currency_code' => 'Currency_Code',
        'amount_lcy' => 'Amount_LCY',
        'description' => 'Description',
        'date_filter' => 'Date_Filter'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'at_odata_etag' => 'setAtOdataEtag',
        'entry_no' => 'setEntryNo',
        'posting_date' => 'setPostingDate',
        'document_no' => 'setDocumentNo',
        'external_document_no' => 'setExternalDocumentNo',
        'customer_no' => 'setCustomerNo',
        'document_type' => 'setDocumentType',
        'amount' => 'setAmount',
        'currency_code' => 'setCurrencyCode',
        'amount_lcy' => 'setAmountLcy',
        'description' => 'setDescription',
        'date_filter' => 'setDateFilter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'at_odata_etag' => 'getAtOdataEtag',
        'entry_no' => 'getEntryNo',
        'posting_date' => 'getPostingDate',
        'document_no' => 'getDocumentNo',
        'external_document_no' => 'getExternalDocumentNo',
        'customer_no' => 'getCustomerNo',
        'document_type' => 'getDocumentType',
        'amount' => 'getAmount',
        'currency_code' => 'getCurrencyCode',
        'amount_lcy' => 'getAmountLcy',
        'description' => 'getDescription',
        'date_filter' => 'getDateFilter'
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

    public const DOCUMENT_TYPE_SPACE_1 = ' ';
    public const DOCUMENT_TYPE_PAYMENT = 'Payment';
    public const DOCUMENT_TYPE_INVOICE = 'Invoice';
    public const DOCUMENT_TYPE_CREDIT_MEMO = 'Credit Memo';
    public const DOCUMENT_TYPE_FINANCE_CHARGE_MEMO = 'Finance Charge Memo';
    public const DOCUMENT_TYPE_REMINDER = 'Reminder';
    public const DOCUMENT_TYPE_REFUND = 'Refund';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDocumentTypeAllowableValues()
    {
        return [
            self::DOCUMENT_TYPE_SPACE_1,
            self::DOCUMENT_TYPE_PAYMENT,
            self::DOCUMENT_TYPE_INVOICE,
            self::DOCUMENT_TYPE_CREDIT_MEMO,
            self::DOCUMENT_TYPE_FINANCE_CHARGE_MEMO,
            self::DOCUMENT_TYPE_REMINDER,
            self::DOCUMENT_TYPE_REFUND,
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
        $this->setIfExists('entry_no', $data ?? [], null);
        $this->setIfExists('posting_date', $data ?? [], null);
        $this->setIfExists('document_no', $data ?? [], null);
        $this->setIfExists('external_document_no', $data ?? [], null);
        $this->setIfExists('customer_no', $data ?? [], null);
        $this->setIfExists('document_type', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('currency_code', $data ?? [], null);
        $this->setIfExists('amount_lcy', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('date_filter', $data ?? [], null);
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

        $allowedValues = $this->getDocumentTypeAllowableValues();
        if (!is_null($this->container['document_type']) && !in_array($this->container['document_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'document_type', must be one of '%s'",
                $this->container['document_type'],
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
     * Gets entry_no
     *
     * @return int|null
     */
    public function getEntryNo()
    {
        return $this->container['entry_no'];
    }

    /**
     * Sets entry_no
     *
     * @param int|null $entry_no entry_no
     *
     * @return self
     */
    public function setEntryNo($entry_no)
    {
        if (is_null($entry_no)) {
            throw new \InvalidArgumentException('non-nullable entry_no cannot be null');
        }
        $this->container['entry_no'] = $entry_no;

        return $this;
    }

    /**
     * Gets posting_date
     *
     * @return string|null
     */
    public function getPostingDate()
    {
        return $this->container['posting_date'];
    }

    /**
     * Sets posting_date
     *
     * @param string|null $posting_date posting_date
     *
     * @return self
     */
    public function setPostingDate($posting_date)
    {
        if (is_null($posting_date)) {
            throw new \InvalidArgumentException('non-nullable posting_date cannot be null');
        }
        $this->container['posting_date'] = $posting_date;

        return $this;
    }

    /**
     * Gets document_no
     *
     * @return string|null
     */
    public function getDocumentNo()
    {
        return $this->container['document_no'];
    }

    /**
     * Sets document_no
     *
     * @param string|null $document_no document_no
     *
     * @return self
     */
    public function setDocumentNo($document_no)
    {
        if (is_null($document_no)) {
            throw new \InvalidArgumentException('non-nullable document_no cannot be null');
        }
        $this->container['document_no'] = $document_no;

        return $this;
    }

    /**
     * Gets external_document_no
     *
     * @return string|null
     */
    public function getExternalDocumentNo()
    {
        return $this->container['external_document_no'];
    }

    /**
     * Sets external_document_no
     *
     * @param string|null $external_document_no external_document_no
     *
     * @return self
     */
    public function setExternalDocumentNo($external_document_no)
    {
        if (is_null($external_document_no)) {
            throw new \InvalidArgumentException('non-nullable external_document_no cannot be null');
        }
        $this->container['external_document_no'] = $external_document_no;

        return $this;
    }

    /**
     * Gets customer_no
     *
     * @return string|null
     */
    public function getCustomerNo()
    {
        return $this->container['customer_no'];
    }

    /**
     * Sets customer_no
     *
     * @param string|null $customer_no customer_no
     *
     * @return self
     */
    public function setCustomerNo($customer_no)
    {
        if (is_null($customer_no)) {
            throw new \InvalidArgumentException('non-nullable customer_no cannot be null');
        }
        $this->container['customer_no'] = $customer_no;

        return $this;
    }

    /**
     * Gets document_type
     *
     * @return string|null
     */
    public function getDocumentType()
    {
        return $this->container['document_type'];
    }

    /**
     * Sets document_type
     *
     * @param string|null $document_type document_type
     *
     * @return self
     */
    public function setDocumentType($document_type)
    {
        if (is_null($document_type)) {
            throw new \InvalidArgumentException('non-nullable document_type cannot be null');
        }
        $allowedValues = $this->getDocumentTypeAllowableValues();
        if (!in_array($document_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'document_type', must be one of '%s'",
                    $document_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['document_type'] = $document_type;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

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
     * Gets amount_lcy
     *
     * @return float|null
     */
    public function getAmountLcy()
    {
        return $this->container['amount_lcy'];
    }

    /**
     * Sets amount_lcy
     *
     * @param float|null $amount_lcy amount_lcy
     *
     * @return self
     */
    public function setAmountLcy($amount_lcy)
    {
        if (is_null($amount_lcy)) {
            throw new \InvalidArgumentException('non-nullable amount_lcy cannot be null');
        }
        $this->container['amount_lcy'] = $amount_lcy;

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
     * Gets date_filter
     *
     * @return string|null
     */
    public function getDateFilter()
    {
        return $this->container['date_filter'];
    }

    /**
     * Sets date_filter
     *
     * @param string|null $date_filter date_filter
     *
     * @return self
     */
    public function setDateFilter($date_filter)
    {
        if (is_null($date_filter)) {
            throw new \InvalidArgumentException('non-nullable date_filter cannot be null');
        }
        $this->container['date_filter'] = $date_filter;

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


