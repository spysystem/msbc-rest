<?php
/**
 * SpyCustomerTemplateResponse
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
 * SpyCustomerTemplateResponse Class Doc Comment
 *
 * @category Class
 * @package  Spy\MsbcRestClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SpyCustomerTemplateResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return SpyCustomerTemplateResponseModelFields
      */
    public static function GetModelFields(): SpyCustomerTemplateResponseModelFields
    {
        return new SpyCustomerTemplateResponseModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return SpyCustomerTemplateResponseModelAttributes
      */
    public static function GetModelAttributes(): SpyCustomerTemplateResponseModelAttributes
    {
        return new SpyCustomerTemplateResponseModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SpyCustomerTemplateResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'at_odata_context' => 'string',
        'at_odata_etag' => 'string',
        'code' => 'string',
        'description' => 'string',
        'contact_type' => 'string',
        'country_region_code' => 'string',
        'territory_code' => 'string',
        'currency_code' => 'string',
        'gen_bus_posting_group' => 'string',
        'vat_bus_posting_group' => 'string',
        'customer_posting_group' => 'string',
        'customer_price_group' => 'string',
        'customer_disc_group' => 'string',
        'allow_line_disc' => 'bool',
        'invoice_disc_code' => 'string',
        'prices_including_vat' => 'bool',
        'payment_terms_code' => 'string',
        'payment_method_code' => 'string',
        'shipment_method_code' => 'string',
        'global_dimension_1_code' => 'string',
        'global_dimension_2_code' => 'string'
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
        'code' => null,
        'description' => null,
        'contact_type' => null,
        'country_region_code' => null,
        'territory_code' => null,
        'currency_code' => null,
        'gen_bus_posting_group' => null,
        'vat_bus_posting_group' => null,
        'customer_posting_group' => null,
        'customer_price_group' => null,
        'customer_disc_group' => null,
        'allow_line_disc' => null,
        'invoice_disc_code' => null,
        'prices_including_vat' => null,
        'payment_terms_code' => null,
        'payment_method_code' => null,
        'shipment_method_code' => null,
        'global_dimension_1_code' => null,
        'global_dimension_2_code' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'at_odata_context' => false,
		'at_odata_etag' => false,
		'code' => false,
		'description' => false,
		'contact_type' => false,
		'country_region_code' => false,
		'territory_code' => false,
		'currency_code' => false,
		'gen_bus_posting_group' => false,
		'vat_bus_posting_group' => false,
		'customer_posting_group' => false,
		'customer_price_group' => false,
		'customer_disc_group' => false,
		'allow_line_disc' => false,
		'invoice_disc_code' => false,
		'prices_including_vat' => false,
		'payment_terms_code' => false,
		'payment_method_code' => false,
		'shipment_method_code' => false,
		'global_dimension_1_code' => false,
		'global_dimension_2_code' => false
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
        'code' => 'Code',
        'description' => 'Description',
        'contact_type' => 'Contact_Type',
        'country_region_code' => 'Country_Region_Code',
        'territory_code' => 'Territory_Code',
        'currency_code' => 'Currency_Code',
        'gen_bus_posting_group' => 'Gen_Bus_Posting_Group',
        'vat_bus_posting_group' => 'VAT_Bus_Posting_Group',
        'customer_posting_group' => 'Customer_Posting_Group',
        'customer_price_group' => 'Customer_Price_Group',
        'customer_disc_group' => 'Customer_Disc_Group',
        'allow_line_disc' => 'Allow_Line_Disc',
        'invoice_disc_code' => 'Invoice_Disc_Code',
        'prices_including_vat' => 'Prices_Including_VAT',
        'payment_terms_code' => 'Payment_Terms_Code',
        'payment_method_code' => 'Payment_Method_Code',
        'shipment_method_code' => 'Shipment_Method_Code',
        'global_dimension_1_code' => 'Global_Dimension_1_Code',
        'global_dimension_2_code' => 'Global_Dimension_2_Code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'at_odata_context' => 'setAtOdataContext',
        'at_odata_etag' => 'setAtOdataEtag',
        'code' => 'setCode',
        'description' => 'setDescription',
        'contact_type' => 'setContactType',
        'country_region_code' => 'setCountryRegionCode',
        'territory_code' => 'setTerritoryCode',
        'currency_code' => 'setCurrencyCode',
        'gen_bus_posting_group' => 'setGenBusPostingGroup',
        'vat_bus_posting_group' => 'setVatBusPostingGroup',
        'customer_posting_group' => 'setCustomerPostingGroup',
        'customer_price_group' => 'setCustomerPriceGroup',
        'customer_disc_group' => 'setCustomerDiscGroup',
        'allow_line_disc' => 'setAllowLineDisc',
        'invoice_disc_code' => 'setInvoiceDiscCode',
        'prices_including_vat' => 'setPricesIncludingVat',
        'payment_terms_code' => 'setPaymentTermsCode',
        'payment_method_code' => 'setPaymentMethodCode',
        'shipment_method_code' => 'setShipmentMethodCode',
        'global_dimension_1_code' => 'setGlobalDimension1Code',
        'global_dimension_2_code' => 'setGlobalDimension2Code'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'at_odata_context' => 'getAtOdataContext',
        'at_odata_etag' => 'getAtOdataEtag',
        'code' => 'getCode',
        'description' => 'getDescription',
        'contact_type' => 'getContactType',
        'country_region_code' => 'getCountryRegionCode',
        'territory_code' => 'getTerritoryCode',
        'currency_code' => 'getCurrencyCode',
        'gen_bus_posting_group' => 'getGenBusPostingGroup',
        'vat_bus_posting_group' => 'getVatBusPostingGroup',
        'customer_posting_group' => 'getCustomerPostingGroup',
        'customer_price_group' => 'getCustomerPriceGroup',
        'customer_disc_group' => 'getCustomerDiscGroup',
        'allow_line_disc' => 'getAllowLineDisc',
        'invoice_disc_code' => 'getInvoiceDiscCode',
        'prices_including_vat' => 'getPricesIncludingVat',
        'payment_terms_code' => 'getPaymentTermsCode',
        'payment_method_code' => 'getPaymentMethodCode',
        'shipment_method_code' => 'getShipmentMethodCode',
        'global_dimension_1_code' => 'getGlobalDimension1Code',
        'global_dimension_2_code' => 'getGlobalDimension2Code'
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

    public const CONTACT_TYPE_COMPANY = 'Company';
    public const CONTACT_TYPE_PERSON = 'Person';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getContactTypeAllowableValues()
    {
        return [
            self::CONTACT_TYPE_COMPANY,
            self::CONTACT_TYPE_PERSON,
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
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('contact_type', $data ?? [], 'Company');
        $this->setIfExists('country_region_code', $data ?? [], null);
        $this->setIfExists('territory_code', $data ?? [], null);
        $this->setIfExists('currency_code', $data ?? [], null);
        $this->setIfExists('gen_bus_posting_group', $data ?? [], null);
        $this->setIfExists('vat_bus_posting_group', $data ?? [], null);
        $this->setIfExists('customer_posting_group', $data ?? [], null);
        $this->setIfExists('customer_price_group', $data ?? [], null);
        $this->setIfExists('customer_disc_group', $data ?? [], null);
        $this->setIfExists('allow_line_disc', $data ?? [], null);
        $this->setIfExists('invoice_disc_code', $data ?? [], null);
        $this->setIfExists('prices_including_vat', $data ?? [], null);
        $this->setIfExists('payment_terms_code', $data ?? [], null);
        $this->setIfExists('payment_method_code', $data ?? [], null);
        $this->setIfExists('shipment_method_code', $data ?? [], null);
        $this->setIfExists('global_dimension_1_code', $data ?? [], null);
        $this->setIfExists('global_dimension_2_code', $data ?? [], null);
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

        $allowedValues = $this->getContactTypeAllowableValues();
        if (!is_null($this->container['contact_type']) && !in_array($this->container['contact_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'contact_type', must be one of '%s'",
                $this->container['contact_type'],
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
     * Gets contact_type
     *
     * @return string|null
     */
    public function getContactType()
    {
        return $this->container['contact_type'];
    }

    /**
     * Sets contact_type
     *
     * @param string|null $contact_type contact_type
     *
     * @return self
     */
    public function setContactType($contact_type)
    {
        $allowedValues = $this->getContactTypeAllowableValues();
        if (!is_null($contact_type) && !in_array($contact_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'contact_type', must be one of '%s'",
                    $contact_type,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($contact_type)) {
            throw new \InvalidArgumentException('non-nullable contact_type cannot be null');
        }

        $this->container['contact_type'] = $contact_type;

        return $this;
    }

    /**
     * Gets country_region_code
     *
     * @return string|null
     */
    public function getCountryRegionCode()
    {
        return $this->container['country_region_code'];
    }

    /**
     * Sets country_region_code
     *
     * @param string|null $country_region_code country_region_code
     *
     * @return self
     */
    public function setCountryRegionCode($country_region_code)
    {

        if (is_null($country_region_code)) {
            throw new \InvalidArgumentException('non-nullable country_region_code cannot be null');
        }

        $this->container['country_region_code'] = $country_region_code;

        return $this;
    }

    /**
     * Gets territory_code
     *
     * @return string|null
     */
    public function getTerritoryCode()
    {
        return $this->container['territory_code'];
    }

    /**
     * Sets territory_code
     *
     * @param string|null $territory_code territory_code
     *
     * @return self
     */
    public function setTerritoryCode($territory_code)
    {

        if (is_null($territory_code)) {
            throw new \InvalidArgumentException('non-nullable territory_code cannot be null');
        }

        $this->container['territory_code'] = $territory_code;

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
     * Gets gen_bus_posting_group
     *
     * @return string|null
     */
    public function getGenBusPostingGroup()
    {
        return $this->container['gen_bus_posting_group'];
    }

    /**
     * Sets gen_bus_posting_group
     *
     * @param string|null $gen_bus_posting_group gen_bus_posting_group
     *
     * @return self
     */
    public function setGenBusPostingGroup($gen_bus_posting_group)
    {

        if (is_null($gen_bus_posting_group)) {
            throw new \InvalidArgumentException('non-nullable gen_bus_posting_group cannot be null');
        }

        $this->container['gen_bus_posting_group'] = $gen_bus_posting_group;

        return $this;
    }

    /**
     * Gets vat_bus_posting_group
     *
     * @return string|null
     */
    public function getVatBusPostingGroup()
    {
        return $this->container['vat_bus_posting_group'];
    }

    /**
     * Sets vat_bus_posting_group
     *
     * @param string|null $vat_bus_posting_group vat_bus_posting_group
     *
     * @return self
     */
    public function setVatBusPostingGroup($vat_bus_posting_group)
    {

        if (is_null($vat_bus_posting_group)) {
            throw new \InvalidArgumentException('non-nullable vat_bus_posting_group cannot be null');
        }

        $this->container['vat_bus_posting_group'] = $vat_bus_posting_group;

        return $this;
    }

    /**
     * Gets customer_posting_group
     *
     * @return string|null
     */
    public function getCustomerPostingGroup()
    {
        return $this->container['customer_posting_group'];
    }

    /**
     * Sets customer_posting_group
     *
     * @param string|null $customer_posting_group customer_posting_group
     *
     * @return self
     */
    public function setCustomerPostingGroup($customer_posting_group)
    {

        if (is_null($customer_posting_group)) {
            throw new \InvalidArgumentException('non-nullable customer_posting_group cannot be null');
        }

        $this->container['customer_posting_group'] = $customer_posting_group;

        return $this;
    }

    /**
     * Gets customer_price_group
     *
     * @return string|null
     */
    public function getCustomerPriceGroup()
    {
        return $this->container['customer_price_group'];
    }

    /**
     * Sets customer_price_group
     *
     * @param string|null $customer_price_group customer_price_group
     *
     * @return self
     */
    public function setCustomerPriceGroup($customer_price_group)
    {

        if (is_null($customer_price_group)) {
            throw new \InvalidArgumentException('non-nullable customer_price_group cannot be null');
        }

        $this->container['customer_price_group'] = $customer_price_group;

        return $this;
    }

    /**
     * Gets customer_disc_group
     *
     * @return string|null
     */
    public function getCustomerDiscGroup()
    {
        return $this->container['customer_disc_group'];
    }

    /**
     * Sets customer_disc_group
     *
     * @param string|null $customer_disc_group customer_disc_group
     *
     * @return self
     */
    public function setCustomerDiscGroup($customer_disc_group)
    {

        if (is_null($customer_disc_group)) {
            throw new \InvalidArgumentException('non-nullable customer_disc_group cannot be null');
        }

        $this->container['customer_disc_group'] = $customer_disc_group;

        return $this;
    }

    /**
     * Gets allow_line_disc
     *
     * @return bool|null
     */
    public function getAllowLineDisc()
    {
        return $this->container['allow_line_disc'];
    }

    /**
     * Sets allow_line_disc
     *
     * @param bool|null $allow_line_disc allow_line_disc
     *
     * @return self
     */
    public function setAllowLineDisc($allow_line_disc)
    {

        if (is_null($allow_line_disc)) {
            throw new \InvalidArgumentException('non-nullable allow_line_disc cannot be null');
        }

        $this->container['allow_line_disc'] = $allow_line_disc;

        return $this;
    }

    /**
     * Gets invoice_disc_code
     *
     * @return string|null
     */
    public function getInvoiceDiscCode()
    {
        return $this->container['invoice_disc_code'];
    }

    /**
     * Sets invoice_disc_code
     *
     * @param string|null $invoice_disc_code invoice_disc_code
     *
     * @return self
     */
    public function setInvoiceDiscCode($invoice_disc_code)
    {

        if (is_null($invoice_disc_code)) {
            throw new \InvalidArgumentException('non-nullable invoice_disc_code cannot be null');
        }

        $this->container['invoice_disc_code'] = $invoice_disc_code;

        return $this;
    }

    /**
     * Gets prices_including_vat
     *
     * @return bool|null
     */
    public function getPricesIncludingVat()
    {
        return $this->container['prices_including_vat'];
    }

    /**
     * Sets prices_including_vat
     *
     * @param bool|null $prices_including_vat prices_including_vat
     *
     * @return self
     */
    public function setPricesIncludingVat($prices_including_vat)
    {

        if (is_null($prices_including_vat)) {
            throw new \InvalidArgumentException('non-nullable prices_including_vat cannot be null');
        }

        $this->container['prices_including_vat'] = $prices_including_vat;

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
     * Gets payment_method_code
     *
     * @return string|null
     */
    public function getPaymentMethodCode()
    {
        return $this->container['payment_method_code'];
    }

    /**
     * Sets payment_method_code
     *
     * @param string|null $payment_method_code payment_method_code
     *
     * @return self
     */
    public function setPaymentMethodCode($payment_method_code)
    {

        if (is_null($payment_method_code)) {
            throw new \InvalidArgumentException('non-nullable payment_method_code cannot be null');
        }

        $this->container['payment_method_code'] = $payment_method_code;

        return $this;
    }

    /**
     * Gets shipment_method_code
     *
     * @return string|null
     */
    public function getShipmentMethodCode()
    {
        return $this->container['shipment_method_code'];
    }

    /**
     * Sets shipment_method_code
     *
     * @param string|null $shipment_method_code shipment_method_code
     *
     * @return self
     */
    public function setShipmentMethodCode($shipment_method_code)
    {

        if (is_null($shipment_method_code)) {
            throw new \InvalidArgumentException('non-nullable shipment_method_code cannot be null');
        }

        $this->container['shipment_method_code'] = $shipment_method_code;

        return $this;
    }

    /**
     * Gets global_dimension_1_code
     *
     * @return string|null
     */
    public function getGlobalDimension1Code()
    {
        return $this->container['global_dimension_1_code'];
    }

    /**
     * Sets global_dimension_1_code
     *
     * @param string|null $global_dimension_1_code global_dimension_1_code
     *
     * @return self
     */
    public function setGlobalDimension1Code($global_dimension_1_code)
    {

        if (is_null($global_dimension_1_code)) {
            throw new \InvalidArgumentException('non-nullable global_dimension_1_code cannot be null');
        }

        $this->container['global_dimension_1_code'] = $global_dimension_1_code;

        return $this;
    }

    /**
     * Gets global_dimension_2_code
     *
     * @return string|null
     */
    public function getGlobalDimension2Code()
    {
        return $this->container['global_dimension_2_code'];
    }

    /**
     * Sets global_dimension_2_code
     *
     * @param string|null $global_dimension_2_code global_dimension_2_code
     *
     * @return self
     */
    public function setGlobalDimension2Code($global_dimension_2_code)
    {

        if (is_null($global_dimension_2_code)) {
            throw new \InvalidArgumentException('non-nullable global_dimension_2_code cannot be null');
        }

        $this->container['global_dimension_2_code'] = $global_dimension_2_code;

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


