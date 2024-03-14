<?php
/**
 * CreateJournalLine
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
 * CreateJournalLine Class Doc Comment
 *
 * @category Class
 * @package  Spy\MsbcRestClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateJournalLine implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return CreateJournalLineModelFields
      */
    public static function GetModelFields(): CreateJournalLineModelFields
    {
        return new CreateJournalLineModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return CreateJournalLineModelAttributes
      */
    public static function GetModelAttributes(): CreateJournalLineModelAttributes
    {
        return new CreateJournalLineModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'createJournalLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'spy_batch_id' => 'string',
        'spy_status' => 'string',
        'template_name' => 'string',
        'journal_name' => 'string',
        'document_number' => 'string',
        'document_type' => 'string',
        'country_type' => 'string',
        'account' => 'string',
        'description' => 'string',
        'amount' => 'float',
        'entry_type' => 'string',
        'posting_date' => 'string',
        'delivery_account' => 'string',
        'post_type' => 'string',
        'invoice_no' => 'string',
        'currency' => 'string',
        'amount_base_currency' => 'float',
        'county_us_tax_account' => 'string',
        'state_us_tax_account' => 'string',
        'vat_code' => 'string',
        'vat_area' => 'string',
        'tax_title' => 'string',
        'tax_percentage' => 'float',
        'due_date' => 'string',
        'payment_term' => 'string',
        'cash_discount_date' => 'string',
        'cust_group' => 'string',
        'spy_dimensions' => '\Spy\MsbcRestClient\Model\SpyDimension[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'spy_batch_id' => null,
        'spy_status' => null,
        'template_name' => null,
        'journal_name' => null,
        'document_number' => null,
        'document_type' => null,
        'country_type' => null,
        'account' => null,
        'description' => null,
        'amount' => null,
        'entry_type' => null,
        'posting_date' => null,
        'delivery_account' => null,
        'post_type' => null,
        'invoice_no' => null,
        'currency' => null,
        'amount_base_currency' => null,
        'county_us_tax_account' => null,
        'state_us_tax_account' => null,
        'vat_code' => null,
        'vat_area' => null,
        'tax_title' => null,
        'tax_percentage' => null,
        'due_date' => null,
        'payment_term' => null,
        'cash_discount_date' => null,
        'cust_group' => null,
        'spy_dimensions' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'spy_batch_id' => false,
		'spy_status' => false,
		'template_name' => false,
		'journal_name' => false,
		'document_number' => false,
		'document_type' => false,
		'country_type' => false,
		'account' => false,
		'description' => false,
		'amount' => false,
		'entry_type' => false,
		'posting_date' => false,
		'delivery_account' => false,
		'post_type' => false,
		'invoice_no' => false,
		'currency' => false,
		'amount_base_currency' => false,
		'county_us_tax_account' => false,
		'state_us_tax_account' => false,
		'vat_code' => false,
		'vat_area' => false,
		'tax_title' => false,
		'tax_percentage' => false,
		'due_date' => false,
		'payment_term' => false,
		'cash_discount_date' => false,
		'cust_group' => false,
		'spy_dimensions' => false
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
        'spy_batch_id' => 'spyBatchId',
        'spy_status' => 'spyStatus',
        'template_name' => 'templateName',
        'journal_name' => 'journalName',
        'document_number' => 'documentNumber',
        'document_type' => 'documentType',
        'country_type' => 'countryType',
        'account' => 'account',
        'description' => 'description',
        'amount' => 'amount',
        'entry_type' => 'entryType',
        'posting_date' => 'postingDate',
        'delivery_account' => 'deliveryAccount',
        'post_type' => 'postType',
        'invoice_no' => 'invoiceNo',
        'currency' => 'currency',
        'amount_base_currency' => 'amountBaseCurrency',
        'county_us_tax_account' => 'countyUSTaxAccount',
        'state_us_tax_account' => 'stateUSTaxAccount',
        'vat_code' => 'vatCode',
        'vat_area' => 'vatArea',
        'tax_title' => 'taxTitle',
        'tax_percentage' => 'taxPercentage',
        'due_date' => 'dueDate',
        'payment_term' => 'paymentTerm',
        'cash_discount_date' => 'cashDiscountDate',
        'cust_group' => 'custGroup',
        'spy_dimensions' => 'spyDimensions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'spy_batch_id' => 'setSpyBatchId',
        'spy_status' => 'setSpyStatus',
        'template_name' => 'setTemplateName',
        'journal_name' => 'setJournalName',
        'document_number' => 'setDocumentNumber',
        'document_type' => 'setDocumentType',
        'country_type' => 'setCountryType',
        'account' => 'setAccount',
        'description' => 'setDescription',
        'amount' => 'setAmount',
        'entry_type' => 'setEntryType',
        'posting_date' => 'setPostingDate',
        'delivery_account' => 'setDeliveryAccount',
        'post_type' => 'setPostType',
        'invoice_no' => 'setInvoiceNo',
        'currency' => 'setCurrency',
        'amount_base_currency' => 'setAmountBaseCurrency',
        'county_us_tax_account' => 'setCountyUsTaxAccount',
        'state_us_tax_account' => 'setStateUsTaxAccount',
        'vat_code' => 'setVatCode',
        'vat_area' => 'setVatArea',
        'tax_title' => 'setTaxTitle',
        'tax_percentage' => 'setTaxPercentage',
        'due_date' => 'setDueDate',
        'payment_term' => 'setPaymentTerm',
        'cash_discount_date' => 'setCashDiscountDate',
        'cust_group' => 'setCustGroup',
        'spy_dimensions' => 'setSpyDimensions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'spy_batch_id' => 'getSpyBatchId',
        'spy_status' => 'getSpyStatus',
        'template_name' => 'getTemplateName',
        'journal_name' => 'getJournalName',
        'document_number' => 'getDocumentNumber',
        'document_type' => 'getDocumentType',
        'country_type' => 'getCountryType',
        'account' => 'getAccount',
        'description' => 'getDescription',
        'amount' => 'getAmount',
        'entry_type' => 'getEntryType',
        'posting_date' => 'getPostingDate',
        'delivery_account' => 'getDeliveryAccount',
        'post_type' => 'getPostType',
        'invoice_no' => 'getInvoiceNo',
        'currency' => 'getCurrency',
        'amount_base_currency' => 'getAmountBaseCurrency',
        'county_us_tax_account' => 'getCountyUsTaxAccount',
        'state_us_tax_account' => 'getStateUsTaxAccount',
        'vat_code' => 'getVatCode',
        'vat_area' => 'getVatArea',
        'tax_title' => 'getTaxTitle',
        'tax_percentage' => 'getTaxPercentage',
        'due_date' => 'getDueDate',
        'payment_term' => 'getPaymentTerm',
        'cash_discount_date' => 'getCashDiscountDate',
        'cust_group' => 'getCustGroup',
        'spy_dimensions' => 'getSpyDimensions'
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

    public const SPY_STATUS__NEW = 'New';
    public const SPY_STATUS_COMMITTED = 'Committed';
    public const SPY_STATUS_DELETED = 'Deleted';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSpyStatusAllowableValues()
    {
        return [
            self::SPY_STATUS__NEW,
            self::SPY_STATUS_COMMITTED,
            self::SPY_STATUS_DELETED,
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
        $this->setIfExists('spy_batch_id', $data ?? [], null);
        $this->setIfExists('spy_status', $data ?? [], null);
        $this->setIfExists('template_name', $data ?? [], null);
        $this->setIfExists('journal_name', $data ?? [], null);
        $this->setIfExists('document_number', $data ?? [], null);
        $this->setIfExists('document_type', $data ?? [], null);
        $this->setIfExists('country_type', $data ?? [], null);
        $this->setIfExists('account', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('entry_type', $data ?? [], null);
        $this->setIfExists('posting_date', $data ?? [], null);
        $this->setIfExists('delivery_account', $data ?? [], null);
        $this->setIfExists('post_type', $data ?? [], null);
        $this->setIfExists('invoice_no', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('amount_base_currency', $data ?? [], null);
        $this->setIfExists('county_us_tax_account', $data ?? [], null);
        $this->setIfExists('state_us_tax_account', $data ?? [], null);
        $this->setIfExists('vat_code', $data ?? [], null);
        $this->setIfExists('vat_area', $data ?? [], null);
        $this->setIfExists('tax_title', $data ?? [], null);
        $this->setIfExists('tax_percentage', $data ?? [], null);
        $this->setIfExists('due_date', $data ?? [], null);
        $this->setIfExists('payment_term', $data ?? [], null);
        $this->setIfExists('cash_discount_date', $data ?? [], null);
        $this->setIfExists('cust_group', $data ?? [], null);
        $this->setIfExists('spy_dimensions', $data ?? [], null);
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

        if (!is_null($this->container['spy_batch_id']) && (mb_strlen($this->container['spy_batch_id']) > 20)) {
            $invalidProperties[] = "invalid value for 'spy_batch_id', the character length must be smaller than or equal to 20.";
        }

        $allowedValues = $this->getSpyStatusAllowableValues();
        if (!is_null($this->container['spy_status']) && !in_array($this->container['spy_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'spy_status', must be one of '%s'",
                $this->container['spy_status'],
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
     * Gets spy_batch_id
     *
     * @return string|null
     */
    public function getSpyBatchId()
    {
        return $this->container['spy_batch_id'];
    }

    /**
     * Sets spy_batch_id
     *
     * @param string|null $spy_batch_id spy_batch_id
     *
     * @return self
     */
    public function setSpyBatchId($spy_batch_id)
    {
        if (is_null($spy_batch_id)) {
            throw new \InvalidArgumentException('non-nullable spy_batch_id cannot be null');
        }
        if ((mb_strlen($spy_batch_id) > 20)) {
            throw new \InvalidArgumentException('invalid length for $spy_batch_id when calling CreateJournalLine., must be smaller than or equal to 20.');
        }

        $this->container['spy_batch_id'] = $spy_batch_id;

        return $this;
    }

    /**
     * Gets spy_status
     *
     * @return string|null
     */
    public function getSpyStatus()
    {
        return $this->container['spy_status'];
    }

    /**
     * Sets spy_status
     *
     * @param string|null $spy_status spy_status
     *
     * @return self
     */
    public function setSpyStatus($spy_status)
    {
        if (is_null($spy_status)) {
            throw new \InvalidArgumentException('non-nullable spy_status cannot be null');
        }
        $allowedValues = $this->getSpyStatusAllowableValues();
        if (!in_array($spy_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'spy_status', must be one of '%s'",
                    $spy_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['spy_status'] = $spy_status;

        return $this;
    }

    /**
     * Gets template_name
     *
     * @return string|null
     */
    public function getTemplateName()
    {
        return $this->container['template_name'];
    }

    /**
     * Sets template_name
     *
     * @param string|null $template_name template_name
     *
     * @return self
     */
    public function setTemplateName($template_name)
    {
        if (is_null($template_name)) {
            throw new \InvalidArgumentException('non-nullable template_name cannot be null');
        }
        $this->container['template_name'] = $template_name;

        return $this;
    }

    /**
     * Gets journal_name
     *
     * @return string|null
     */
    public function getJournalName()
    {
        return $this->container['journal_name'];
    }

    /**
     * Sets journal_name
     *
     * @param string|null $journal_name journal_name
     *
     * @return self
     */
    public function setJournalName($journal_name)
    {
        if (is_null($journal_name)) {
            throw new \InvalidArgumentException('non-nullable journal_name cannot be null');
        }
        $this->container['journal_name'] = $journal_name;

        return $this;
    }

    /**
     * Gets document_number
     *
     * @return string|null
     */
    public function getDocumentNumber()
    {
        return $this->container['document_number'];
    }

    /**
     * Sets document_number
     *
     * @param string|null $document_number document_number
     *
     * @return self
     */
    public function setDocumentNumber($document_number)
    {
        if (is_null($document_number)) {
            throw new \InvalidArgumentException('non-nullable document_number cannot be null');
        }
        $this->container['document_number'] = $document_number;

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
        $this->container['document_type'] = $document_type;

        return $this;
    }

    /**
     * Gets country_type
     *
     * @return string|null
     */
    public function getCountryType()
    {
        return $this->container['country_type'];
    }

    /**
     * Sets country_type
     *
     * @param string|null $country_type country_type
     *
     * @return self
     */
    public function setCountryType($country_type)
    {
        if (is_null($country_type)) {
            throw new \InvalidArgumentException('non-nullable country_type cannot be null');
        }
        $this->container['country_type'] = $country_type;

        return $this;
    }

    /**
     * Gets account
     *
     * @return string|null
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param string|null $account account
     *
     * @return self
     */
    public function setAccount($account)
    {
        if (is_null($account)) {
            throw new \InvalidArgumentException('non-nullable account cannot be null');
        }
        $this->container['account'] = $account;

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
     * Gets entry_type
     *
     * @return string|null
     */
    public function getEntryType()
    {
        return $this->container['entry_type'];
    }

    /**
     * Sets entry_type
     *
     * @param string|null $entry_type entry_type
     *
     * @return self
     */
    public function setEntryType($entry_type)
    {
        if (is_null($entry_type)) {
            throw new \InvalidArgumentException('non-nullable entry_type cannot be null');
        }
        $this->container['entry_type'] = $entry_type;

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
     * Gets delivery_account
     *
     * @return string|null
     */
    public function getDeliveryAccount()
    {
        return $this->container['delivery_account'];
    }

    /**
     * Sets delivery_account
     *
     * @param string|null $delivery_account delivery_account
     *
     * @return self
     */
    public function setDeliveryAccount($delivery_account)
    {
        if (is_null($delivery_account)) {
            throw new \InvalidArgumentException('non-nullable delivery_account cannot be null');
        }
        $this->container['delivery_account'] = $delivery_account;

        return $this;
    }

    /**
     * Gets post_type
     *
     * @return string|null
     */
    public function getPostType()
    {
        return $this->container['post_type'];
    }

    /**
     * Sets post_type
     *
     * @param string|null $post_type post_type
     *
     * @return self
     */
    public function setPostType($post_type)
    {
        if (is_null($post_type)) {
            throw new \InvalidArgumentException('non-nullable post_type cannot be null');
        }
        $this->container['post_type'] = $post_type;

        return $this;
    }

    /**
     * Gets invoice_no
     *
     * @return string|null
     */
    public function getInvoiceNo()
    {
        return $this->container['invoice_no'];
    }

    /**
     * Sets invoice_no
     *
     * @param string|null $invoice_no invoice_no
     *
     * @return self
     */
    public function setInvoiceNo($invoice_no)
    {
        if (is_null($invoice_no)) {
            throw new \InvalidArgumentException('non-nullable invoice_no cannot be null');
        }
        $this->container['invoice_no'] = $invoice_no;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets amount_base_currency
     *
     * @return float|null
     */
    public function getAmountBaseCurrency()
    {
        return $this->container['amount_base_currency'];
    }

    /**
     * Sets amount_base_currency
     *
     * @param float|null $amount_base_currency amount_base_currency
     *
     * @return self
     */
    public function setAmountBaseCurrency($amount_base_currency)
    {
        if (is_null($amount_base_currency)) {
            throw new \InvalidArgumentException('non-nullable amount_base_currency cannot be null');
        }
        $this->container['amount_base_currency'] = $amount_base_currency;

        return $this;
    }

    /**
     * Gets county_us_tax_account
     *
     * @return string|null
     */
    public function getCountyUsTaxAccount()
    {
        return $this->container['county_us_tax_account'];
    }

    /**
     * Sets county_us_tax_account
     *
     * @param string|null $county_us_tax_account county_us_tax_account
     *
     * @return self
     */
    public function setCountyUsTaxAccount($county_us_tax_account)
    {
        if (is_null($county_us_tax_account)) {
            throw new \InvalidArgumentException('non-nullable county_us_tax_account cannot be null');
        }
        $this->container['county_us_tax_account'] = $county_us_tax_account;

        return $this;
    }

    /**
     * Gets state_us_tax_account
     *
     * @return string|null
     */
    public function getStateUsTaxAccount()
    {
        return $this->container['state_us_tax_account'];
    }

    /**
     * Sets state_us_tax_account
     *
     * @param string|null $state_us_tax_account state_us_tax_account
     *
     * @return self
     */
    public function setStateUsTaxAccount($state_us_tax_account)
    {
        if (is_null($state_us_tax_account)) {
            throw new \InvalidArgumentException('non-nullable state_us_tax_account cannot be null');
        }
        $this->container['state_us_tax_account'] = $state_us_tax_account;

        return $this;
    }

    /**
     * Gets vat_code
     *
     * @return string|null
     */
    public function getVatCode()
    {
        return $this->container['vat_code'];
    }

    /**
     * Sets vat_code
     *
     * @param string|null $vat_code vat_code
     *
     * @return self
     */
    public function setVatCode($vat_code)
    {
        if (is_null($vat_code)) {
            throw new \InvalidArgumentException('non-nullable vat_code cannot be null');
        }
        $this->container['vat_code'] = $vat_code;

        return $this;
    }

    /**
     * Gets vat_area
     *
     * @return string|null
     */
    public function getVatArea()
    {
        return $this->container['vat_area'];
    }

    /**
     * Sets vat_area
     *
     * @param string|null $vat_area vat_area
     *
     * @return self
     */
    public function setVatArea($vat_area)
    {
        if (is_null($vat_area)) {
            throw new \InvalidArgumentException('non-nullable vat_area cannot be null');
        }
        $this->container['vat_area'] = $vat_area;

        return $this;
    }

    /**
     * Gets tax_title
     *
     * @return string|null
     */
    public function getTaxTitle()
    {
        return $this->container['tax_title'];
    }

    /**
     * Sets tax_title
     *
     * @param string|null $tax_title tax_title
     *
     * @return self
     */
    public function setTaxTitle($tax_title)
    {
        if (is_null($tax_title)) {
            throw new \InvalidArgumentException('non-nullable tax_title cannot be null');
        }
        $this->container['tax_title'] = $tax_title;

        return $this;
    }

    /**
     * Gets tax_percentage
     *
     * @return float|null
     */
    public function getTaxPercentage()
    {
        return $this->container['tax_percentage'];
    }

    /**
     * Sets tax_percentage
     *
     * @param float|null $tax_percentage tax_percentage
     *
     * @return self
     */
    public function setTaxPercentage($tax_percentage)
    {
        if (is_null($tax_percentage)) {
            throw new \InvalidArgumentException('non-nullable tax_percentage cannot be null');
        }
        $this->container['tax_percentage'] = $tax_percentage;

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
     * Gets payment_term
     *
     * @return string|null
     */
    public function getPaymentTerm()
    {
        return $this->container['payment_term'];
    }

    /**
     * Sets payment_term
     *
     * @param string|null $payment_term payment_term
     *
     * @return self
     */
    public function setPaymentTerm($payment_term)
    {
        if (is_null($payment_term)) {
            throw new \InvalidArgumentException('non-nullable payment_term cannot be null');
        }
        $this->container['payment_term'] = $payment_term;

        return $this;
    }

    /**
     * Gets cash_discount_date
     *
     * @return string|null
     */
    public function getCashDiscountDate()
    {
        return $this->container['cash_discount_date'];
    }

    /**
     * Sets cash_discount_date
     *
     * @param string|null $cash_discount_date cash_discount_date
     *
     * @return self
     */
    public function setCashDiscountDate($cash_discount_date)
    {
        if (is_null($cash_discount_date)) {
            throw new \InvalidArgumentException('non-nullable cash_discount_date cannot be null');
        }
        $this->container['cash_discount_date'] = $cash_discount_date;

        return $this;
    }

    /**
     * Gets cust_group
     *
     * @return string|null
     */
    public function getCustGroup()
    {
        return $this->container['cust_group'];
    }

    /**
     * Sets cust_group
     *
     * @param string|null $cust_group cust_group
     *
     * @return self
     */
    public function setCustGroup($cust_group)
    {
        if (is_null($cust_group)) {
            throw new \InvalidArgumentException('non-nullable cust_group cannot be null');
        }
        $this->container['cust_group'] = $cust_group;

        return $this;
    }

    /**
     * Gets spy_dimensions
     *
     * @return \Spy\MsbcRestClient\Model\SpyDimension[]|null
     */
    public function getSpyDimensions()
    {
        return $this->container['spy_dimensions'];
    }

    /**
     * Sets spy_dimensions
     *
     * @param \Spy\MsbcRestClient\Model\SpyDimension[]|null $spy_dimensions spy_dimensions
     *
     * @return self
     */
    public function setSpyDimensions($spy_dimensions)
    {
        if (is_null($spy_dimensions)) {
            throw new \InvalidArgumentException('non-nullable spy_dimensions cannot be null');
        }
        $this->container['spy_dimensions'] = $spy_dimensions;

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


