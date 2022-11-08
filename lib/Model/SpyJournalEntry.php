<?php
/**
 * SpyJournalEntry
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
 * SpyJournalEntry Class Doc Comment
 *
 * @category Class
 * @package  Spy\MsbcRestClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SpyJournalEntry implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return SpyJournalEntryModelFields
      */
    public static function GetModelFields(): SpyJournalEntryModelFields
    {
        return new SpyJournalEntryModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return SpyJournalEntryModelAttributes
      */
    public static function GetModelAttributes(): SpyJournalEntryModelAttributes
    {
        return new SpyJournalEntryModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SpyJournalEntry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'at_odata_etag' => 'string',
        'journal_template_name' => 'string',
        'journal_batch_name' => 'string',
        'due_date' => 'string',
        'payment_terms_code' => 'string',
        'pmt_discount_date' => 'string',
        'line_no' => 'int',
        'posting_date' => 'string',
        'document_no' => 'string',
        'external_document_no' => 'string',
        'account_no' => 'string',
        'account_type' => 'string',
        'amount' => 'float',
        'currency_code' => 'string',
        'amount_lcy' => 'float',
        'document_type' => 'string',
        'description' => 'string'
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
        'journal_template_name' => null,
        'journal_batch_name' => null,
        'due_date' => null,
        'payment_terms_code' => null,
        'pmt_discount_date' => null,
        'line_no' => null,
        'posting_date' => null,
        'document_no' => null,
        'external_document_no' => null,
        'account_no' => null,
        'account_type' => null,
        'amount' => null,
        'currency_code' => null,
        'amount_lcy' => null,
        'document_type' => null,
        'description' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'at_odata_etag' => false,
		'journal_template_name' => false,
		'journal_batch_name' => false,
		'due_date' => false,
		'payment_terms_code' => false,
		'pmt_discount_date' => false,
		'line_no' => false,
		'posting_date' => false,
		'document_no' => false,
		'external_document_no' => false,
		'account_no' => false,
		'account_type' => false,
		'amount' => false,
		'currency_code' => false,
		'amount_lcy' => false,
		'document_type' => false,
		'description' => false
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
        'journal_template_name' => 'Journal_Template_Name',
        'journal_batch_name' => 'Journal_Batch_Name',
        'due_date' => 'Due_Date',
        'payment_terms_code' => 'Payment_Terms_Code',
        'pmt_discount_date' => 'Pmt_Discount_Date',
        'line_no' => 'Line_No',
        'posting_date' => 'Posting_Date',
        'document_no' => 'Document_No',
        'external_document_no' => 'External_Document_No',
        'account_no' => 'Account_No',
        'account_type' => 'Account_Type',
        'amount' => 'Amount',
        'currency_code' => 'Currency_Code',
        'amount_lcy' => 'Amount_LCY',
        'document_type' => 'Document_Type',
        'description' => 'Description'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'at_odata_etag' => 'setAtOdataEtag',
        'journal_template_name' => 'setJournalTemplateName',
        'journal_batch_name' => 'setJournalBatchName',
        'due_date' => 'setDueDate',
        'payment_terms_code' => 'setPaymentTermsCode',
        'pmt_discount_date' => 'setPmtDiscountDate',
        'line_no' => 'setLineNo',
        'posting_date' => 'setPostingDate',
        'document_no' => 'setDocumentNo',
        'external_document_no' => 'setExternalDocumentNo',
        'account_no' => 'setAccountNo',
        'account_type' => 'setAccountType',
        'amount' => 'setAmount',
        'currency_code' => 'setCurrencyCode',
        'amount_lcy' => 'setAmountLcy',
        'document_type' => 'setDocumentType',
        'description' => 'setDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'at_odata_etag' => 'getAtOdataEtag',
        'journal_template_name' => 'getJournalTemplateName',
        'journal_batch_name' => 'getJournalBatchName',
        'due_date' => 'getDueDate',
        'payment_terms_code' => 'getPaymentTermsCode',
        'pmt_discount_date' => 'getPmtDiscountDate',
        'line_no' => 'getLineNo',
        'posting_date' => 'getPostingDate',
        'document_no' => 'getDocumentNo',
        'external_document_no' => 'getExternalDocumentNo',
        'account_no' => 'getAccountNo',
        'account_type' => 'getAccountType',
        'amount' => 'getAmount',
        'currency_code' => 'getCurrencyCode',
        'amount_lcy' => 'getAmountLcy',
        'document_type' => 'getDocumentType',
        'description' => 'getDescription'
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

    public const ACCOUNT_TYPE_G_L_ACCOUNT = 'G/L Account';
    public const ACCOUNT_TYPE_CUSTOMER = 'Customer';
    public const ACCOUNT_TYPE_VENDOR = 'Vendor';
    public const ACCOUNT_TYPE_BANK_ACCOUNT = 'Bank Account';
    public const ACCOUNT_TYPE_FIXED_ASSET = 'Fixed Asset';
    public const ACCOUNT_TYPE_IC_PARTNER = 'IC Partner';
    public const ACCOUNT_TYPE_EMPLOYEE = 'Employee';
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
    public function getAccountTypeAllowableValues()
    {
        return [
            self::ACCOUNT_TYPE_G_L_ACCOUNT,
            self::ACCOUNT_TYPE_CUSTOMER,
            self::ACCOUNT_TYPE_VENDOR,
            self::ACCOUNT_TYPE_BANK_ACCOUNT,
            self::ACCOUNT_TYPE_FIXED_ASSET,
            self::ACCOUNT_TYPE_IC_PARTNER,
            self::ACCOUNT_TYPE_EMPLOYEE,
        ];
    }

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
        $this->setIfExists('journal_template_name', $data ?? [], null);
        $this->setIfExists('journal_batch_name', $data ?? [], null);
        $this->setIfExists('due_date', $data ?? [], null);
        $this->setIfExists('payment_terms_code', $data ?? [], null);
        $this->setIfExists('pmt_discount_date', $data ?? [], null);
        $this->setIfExists('line_no', $data ?? [], null);
        $this->setIfExists('posting_date', $data ?? [], null);
        $this->setIfExists('document_no', $data ?? [], null);
        $this->setIfExists('external_document_no', $data ?? [], null);
        $this->setIfExists('account_no', $data ?? [], null);
        $this->setIfExists('account_type', $data ?? [], 'G/L Account');
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('currency_code', $data ?? [], null);
        $this->setIfExists('amount_lcy', $data ?? [], null);
        $this->setIfExists('document_type', $data ?? [], ' ');
        $this->setIfExists('description', $data ?? [], null);
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

        $allowedValues = $this->getAccountTypeAllowableValues();
        if (!is_null($this->container['account_type']) && !in_array($this->container['account_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'account_type', must be one of '%s'",
                $this->container['account_type'],
                implode("', '", $allowedValues)
            );
        }

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
     * Gets journal_template_name
     *
     * @return string|null
     */
    public function getJournalTemplateName()
    {
        return $this->container['journal_template_name'];
    }

    /**
     * Sets journal_template_name
     *
     * @param string|null $journal_template_name journal_template_name
     *
     * @return self
     */
    public function setJournalTemplateName($journal_template_name)
    {

        if (is_null($journal_template_name)) {
            throw new \InvalidArgumentException('non-nullable journal_template_name cannot be null');
        }

        $this->container['journal_template_name'] = $journal_template_name;

        return $this;
    }

    /**
     * Gets journal_batch_name
     *
     * @return string|null
     */
    public function getJournalBatchName()
    {
        return $this->container['journal_batch_name'];
    }

    /**
     * Sets journal_batch_name
     *
     * @param string|null $journal_batch_name journal_batch_name
     *
     * @return self
     */
    public function setJournalBatchName($journal_batch_name)
    {

        if (is_null($journal_batch_name)) {
            throw new \InvalidArgumentException('non-nullable journal_batch_name cannot be null');
        }

        $this->container['journal_batch_name'] = $journal_batch_name;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return string|null
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param string|null $due_date due_date
     *
     * @return self
     */
    public function setDueDate($due_date)
    {

        if (is_null($due_date)) {
            throw new \InvalidArgumentException('non-nullable due_date cannot be null');
        }

        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets payment_terms_code
     *
     * @return string|null
     */
    public function getPaymentTermsCode()
    {
        return $this->container['payment_terms_code'];
    }

    /**
     * Sets payment_terms_code
     *
     * @param string|null $payment_terms_code payment_terms_code
     *
     * @return self
     */
    public function setPaymentTermsCode($payment_terms_code)
    {

        if (is_null($payment_terms_code)) {
            throw new \InvalidArgumentException('non-nullable payment_terms_code cannot be null');
        }

        $this->container['payment_terms_code'] = $payment_terms_code;

        return $this;
    }

    /**
     * Gets pmt_discount_date
     *
     * @return string|null
     */
    public function getPmtDiscountDate()
    {
        return $this->container['pmt_discount_date'];
    }

    /**
     * Sets pmt_discount_date
     *
     * @param string|null $pmt_discount_date pmt_discount_date
     *
     * @return self
     */
    public function setPmtDiscountDate($pmt_discount_date)
    {

        if (is_null($pmt_discount_date)) {
            throw new \InvalidArgumentException('non-nullable pmt_discount_date cannot be null');
        }

        $this->container['pmt_discount_date'] = $pmt_discount_date;

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
     * Gets account_no
     *
     * @return string|null
     */
    public function getAccountNo()
    {
        return $this->container['account_no'];
    }

    /**
     * Sets account_no
     *
     * @param string|null $account_no account_no
     *
     * @return self
     */
    public function setAccountNo($account_no)
    {

        if (is_null($account_no)) {
            throw new \InvalidArgumentException('non-nullable account_no cannot be null');
        }

        $this->container['account_no'] = $account_no;

        return $this;
    }

    /**
     * Gets account_type
     *
     * @return string|null
     */
    public function getAccountType()
    {
        return $this->container['account_type'];
    }

    /**
     * Sets account_type
     *
     * @param string|null $account_type account_type
     *
     * @return self
     */
    public function setAccountType($account_type)
    {
        $allowedValues = $this->getAccountTypeAllowableValues();
        if (!is_null($account_type) && !in_array($account_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'account_type', must be one of '%s'",
                    $account_type,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($account_type)) {
            throw new \InvalidArgumentException('non-nullable account_type cannot be null');
        }

        $this->container['account_type'] = $account_type;

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
        $allowedValues = $this->getDocumentTypeAllowableValues();
        if (!is_null($document_type) && !in_array($document_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'document_type', must be one of '%s'",
                    $document_type,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($document_type)) {
            throw new \InvalidArgumentException('non-nullable document_type cannot be null');
        }

        $this->container['document_type'] = $document_type;

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


