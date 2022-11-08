<?php
/**
 * SpyVatPostingSetupAllOf
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
 * SpyVatPostingSetupAllOf Class Doc Comment
 *
 * @category Class
 * @package  Spy\MsbcRestClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SpyVatPostingSetupAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return SpyVatPostingSetupAllOfModelFields
      */
    public static function GetModelFields(): SpyVatPostingSetupAllOfModelFields
    {
        return new SpyVatPostingSetupAllOfModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return SpyVatPostingSetupAllOfModelAttributes
      */
    public static function GetModelAttributes(): SpyVatPostingSetupAllOfModelAttributes
    {
        return new SpyVatPostingSetupAllOfModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SpyVatPostingSetup_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'vat_bus_posting_group' => 'string',
        'vat_prod_posting_group' => 'string',
        'description' => 'string',
        'blocked' => 'bool',
        'vat_identifier' => 'string',
        'vat_percent' => 'float',
        'vat_calculation_type' => 'string',
        'unrealized_vat_type' => 'string',
        'adjust_for_payment_discount' => 'bool',
        'sales_vat_account' => 'string',
        'sales_vat_unreal_account' => 'string',
        'purchase_vat_account' => 'string',
        'purch_vat_unreal_account' => 'string',
        'reverse_chrg_vat_acc' => 'string',
        'reverse_chrg_vat_unreal_acc' => 'string',
        'vat_clause_code' => 'string',
        'eu_service' => 'bool',
        'certificate_of_supply_required' => 'bool',
        'tax_category' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'vat_bus_posting_group' => null,
        'vat_prod_posting_group' => null,
        'description' => null,
        'blocked' => null,
        'vat_identifier' => null,
        'vat_percent' => null,
        'vat_calculation_type' => null,
        'unrealized_vat_type' => null,
        'adjust_for_payment_discount' => null,
        'sales_vat_account' => null,
        'sales_vat_unreal_account' => null,
        'purchase_vat_account' => null,
        'purch_vat_unreal_account' => null,
        'reverse_chrg_vat_acc' => null,
        'reverse_chrg_vat_unreal_acc' => null,
        'vat_clause_code' => null,
        'eu_service' => null,
        'certificate_of_supply_required' => null,
        'tax_category' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'vat_bus_posting_group' => false,
		'vat_prod_posting_group' => false,
		'description' => false,
		'blocked' => false,
		'vat_identifier' => false,
		'vat_percent' => false,
		'vat_calculation_type' => false,
		'unrealized_vat_type' => false,
		'adjust_for_payment_discount' => false,
		'sales_vat_account' => false,
		'sales_vat_unreal_account' => false,
		'purchase_vat_account' => false,
		'purch_vat_unreal_account' => false,
		'reverse_chrg_vat_acc' => false,
		'reverse_chrg_vat_unreal_acc' => false,
		'vat_clause_code' => false,
		'eu_service' => false,
		'certificate_of_supply_required' => false,
		'tax_category' => false
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
        'vat_bus_posting_group' => 'VAT_Bus_Posting_Group',
        'vat_prod_posting_group' => 'VAT_Prod_Posting_Group',
        'description' => 'Description',
        'blocked' => 'Blocked',
        'vat_identifier' => 'VAT_Identifier',
        'vat_percent' => 'VAT_Percent',
        'vat_calculation_type' => 'VAT_Calculation_Type',
        'unrealized_vat_type' => 'Unrealized_VAT_Type',
        'adjust_for_payment_discount' => 'Adjust_for_Payment_Discount',
        'sales_vat_account' => 'Sales_VAT_Account',
        'sales_vat_unreal_account' => 'Sales_VAT_Unreal_Account',
        'purchase_vat_account' => 'Purchase_VAT_Account',
        'purch_vat_unreal_account' => 'Purch_VAT_Unreal_Account',
        'reverse_chrg_vat_acc' => 'Reverse_Chrg_VAT_Acc',
        'reverse_chrg_vat_unreal_acc' => 'Reverse_Chrg_VAT_Unreal_Acc',
        'vat_clause_code' => 'VAT_Clause_Code',
        'eu_service' => 'EU_Service',
        'certificate_of_supply_required' => 'Certificate_of_Supply_Required',
        'tax_category' => 'Tax_Category'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vat_bus_posting_group' => 'setVatBusPostingGroup',
        'vat_prod_posting_group' => 'setVatProdPostingGroup',
        'description' => 'setDescription',
        'blocked' => 'setBlocked',
        'vat_identifier' => 'setVatIdentifier',
        'vat_percent' => 'setVatPercent',
        'vat_calculation_type' => 'setVatCalculationType',
        'unrealized_vat_type' => 'setUnrealizedVatType',
        'adjust_for_payment_discount' => 'setAdjustForPaymentDiscount',
        'sales_vat_account' => 'setSalesVatAccount',
        'sales_vat_unreal_account' => 'setSalesVatUnrealAccount',
        'purchase_vat_account' => 'setPurchaseVatAccount',
        'purch_vat_unreal_account' => 'setPurchVatUnrealAccount',
        'reverse_chrg_vat_acc' => 'setReverseChrgVatAcc',
        'reverse_chrg_vat_unreal_acc' => 'setReverseChrgVatUnrealAcc',
        'vat_clause_code' => 'setVatClauseCode',
        'eu_service' => 'setEuService',
        'certificate_of_supply_required' => 'setCertificateOfSupplyRequired',
        'tax_category' => 'setTaxCategory'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vat_bus_posting_group' => 'getVatBusPostingGroup',
        'vat_prod_posting_group' => 'getVatProdPostingGroup',
        'description' => 'getDescription',
        'blocked' => 'getBlocked',
        'vat_identifier' => 'getVatIdentifier',
        'vat_percent' => 'getVatPercent',
        'vat_calculation_type' => 'getVatCalculationType',
        'unrealized_vat_type' => 'getUnrealizedVatType',
        'adjust_for_payment_discount' => 'getAdjustForPaymentDiscount',
        'sales_vat_account' => 'getSalesVatAccount',
        'sales_vat_unreal_account' => 'getSalesVatUnrealAccount',
        'purchase_vat_account' => 'getPurchaseVatAccount',
        'purch_vat_unreal_account' => 'getPurchVatUnrealAccount',
        'reverse_chrg_vat_acc' => 'getReverseChrgVatAcc',
        'reverse_chrg_vat_unreal_acc' => 'getReverseChrgVatUnrealAcc',
        'vat_clause_code' => 'getVatClauseCode',
        'eu_service' => 'getEuService',
        'certificate_of_supply_required' => 'getCertificateOfSupplyRequired',
        'tax_category' => 'getTaxCategory'
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

    public const VAT_CALCULATION_TYPE_NORMAL_VAT = 'Normal VAT';
    public const VAT_CALCULATION_TYPE_REVERSE_CHARGE_VAT = 'Reverse Charge VAT';
    public const VAT_CALCULATION_TYPE_FULL_VAT = 'Full VAT';
    public const VAT_CALCULATION_TYPE_SALES_TAX = 'Sales Tax';
    public const UNREALIZED_VAT_TYPE_SPACE_1 = ' ';
    public const UNREALIZED_VAT_TYPE_PERCENTAGE = 'Percentage';
    public const UNREALIZED_VAT_TYPE_FIRST = 'First';
    public const UNREALIZED_VAT_TYPE_LAST = 'Last';
    public const UNREALIZED_VAT_TYPE_FIRST_FULLY_PAID = 'First Fully Paid';
    public const UNREALIZED_VAT_TYPE_LAST_FULLY_PAID = 'Last Fully Paid';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVatCalculationTypeAllowableValues()
    {
        return [
            self::VAT_CALCULATION_TYPE_NORMAL_VAT,
            self::VAT_CALCULATION_TYPE_REVERSE_CHARGE_VAT,
            self::VAT_CALCULATION_TYPE_FULL_VAT,
            self::VAT_CALCULATION_TYPE_SALES_TAX,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUnrealizedVatTypeAllowableValues()
    {
        return [
            self::UNREALIZED_VAT_TYPE_SPACE_1,
            self::UNREALIZED_VAT_TYPE_PERCENTAGE,
            self::UNREALIZED_VAT_TYPE_FIRST,
            self::UNREALIZED_VAT_TYPE_LAST,
            self::UNREALIZED_VAT_TYPE_FIRST_FULLY_PAID,
            self::UNREALIZED_VAT_TYPE_LAST_FULLY_PAID,
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
        $this->setIfExists('vat_bus_posting_group', $data ?? [], null);
        $this->setIfExists('vat_prod_posting_group', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('blocked', $data ?? [], null);
        $this->setIfExists('vat_identifier', $data ?? [], null);
        $this->setIfExists('vat_percent', $data ?? [], null);
        $this->setIfExists('vat_calculation_type', $data ?? [], 'Normal VAT');
        $this->setIfExists('unrealized_vat_type', $data ?? [], null);
        $this->setIfExists('adjust_for_payment_discount', $data ?? [], null);
        $this->setIfExists('sales_vat_account', $data ?? [], null);
        $this->setIfExists('sales_vat_unreal_account', $data ?? [], null);
        $this->setIfExists('purchase_vat_account', $data ?? [], null);
        $this->setIfExists('purch_vat_unreal_account', $data ?? [], null);
        $this->setIfExists('reverse_chrg_vat_acc', $data ?? [], null);
        $this->setIfExists('reverse_chrg_vat_unreal_acc', $data ?? [], null);
        $this->setIfExists('vat_clause_code', $data ?? [], null);
        $this->setIfExists('eu_service', $data ?? [], null);
        $this->setIfExists('certificate_of_supply_required', $data ?? [], null);
        $this->setIfExists('tax_category', $data ?? [], null);
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

        $allowedValues = $this->getVatCalculationTypeAllowableValues();
        if (!is_null($this->container['vat_calculation_type']) && !in_array($this->container['vat_calculation_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'vat_calculation_type', must be one of '%s'",
                $this->container['vat_calculation_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getUnrealizedVatTypeAllowableValues();
        if (!is_null($this->container['unrealized_vat_type']) && !in_array($this->container['unrealized_vat_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'unrealized_vat_type', must be one of '%s'",
                $this->container['unrealized_vat_type'],
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
     * Gets vat_prod_posting_group
     *
     * @return string|null
     */
    public function getVatProdPostingGroup()
    {
        return $this->container['vat_prod_posting_group'];
    }

    /**
     * Sets vat_prod_posting_group
     *
     * @param string|null $vat_prod_posting_group vat_prod_posting_group
     *
     * @return self
     */
    public function setVatProdPostingGroup($vat_prod_posting_group)
    {

        if (is_null($vat_prod_posting_group)) {
            throw new \InvalidArgumentException('non-nullable vat_prod_posting_group cannot be null');
        }

        $this->container['vat_prod_posting_group'] = $vat_prod_posting_group;

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
     * Gets blocked
     *
     * @return bool|null
     */
    public function getBlocked()
    {
        return $this->container['blocked'];
    }

    /**
     * Sets blocked
     *
     * @param bool|null $blocked blocked
     *
     * @return self
     */
    public function setBlocked($blocked)
    {

        if (is_null($blocked)) {
            throw new \InvalidArgumentException('non-nullable blocked cannot be null');
        }

        $this->container['blocked'] = $blocked;

        return $this;
    }

    /**
     * Gets vat_identifier
     *
     * @return string|null
     */
    public function getVatIdentifier()
    {
        return $this->container['vat_identifier'];
    }

    /**
     * Sets vat_identifier
     *
     * @param string|null $vat_identifier vat_identifier
     *
     * @return self
     */
    public function setVatIdentifier($vat_identifier)
    {

        if (is_null($vat_identifier)) {
            throw new \InvalidArgumentException('non-nullable vat_identifier cannot be null');
        }

        $this->container['vat_identifier'] = $vat_identifier;

        return $this;
    }

    /**
     * Gets vat_percent
     *
     * @return float|null
     */
    public function getVatPercent()
    {
        return $this->container['vat_percent'];
    }

    /**
     * Sets vat_percent
     *
     * @param float|null $vat_percent vat_percent
     *
     * @return self
     */
    public function setVatPercent($vat_percent)
    {

        if (is_null($vat_percent)) {
            throw new \InvalidArgumentException('non-nullable vat_percent cannot be null');
        }

        $this->container['vat_percent'] = $vat_percent;

        return $this;
    }

    /**
     * Gets vat_calculation_type
     *
     * @return string|null
     */
    public function getVatCalculationType()
    {
        return $this->container['vat_calculation_type'];
    }

    /**
     * Sets vat_calculation_type
     *
     * @param string|null $vat_calculation_type vat_calculation_type
     *
     * @return self
     */
    public function setVatCalculationType($vat_calculation_type)
    {
        $allowedValues = $this->getVatCalculationTypeAllowableValues();
        if (!is_null($vat_calculation_type) && !in_array($vat_calculation_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'vat_calculation_type', must be one of '%s'",
                    $vat_calculation_type,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($vat_calculation_type)) {
            throw new \InvalidArgumentException('non-nullable vat_calculation_type cannot be null');
        }

        $this->container['vat_calculation_type'] = $vat_calculation_type;

        return $this;
    }

    /**
     * Gets unrealized_vat_type
     *
     * @return string|null
     */
    public function getUnrealizedVatType()
    {
        return $this->container['unrealized_vat_type'];
    }

    /**
     * Sets unrealized_vat_type
     *
     * @param string|null $unrealized_vat_type unrealized_vat_type
     *
     * @return self
     */
    public function setUnrealizedVatType($unrealized_vat_type)
    {
        $allowedValues = $this->getUnrealizedVatTypeAllowableValues();
        if (!is_null($unrealized_vat_type) && !in_array($unrealized_vat_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'unrealized_vat_type', must be one of '%s'",
                    $unrealized_vat_type,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($unrealized_vat_type)) {
            throw new \InvalidArgumentException('non-nullable unrealized_vat_type cannot be null');
        }

        $this->container['unrealized_vat_type'] = $unrealized_vat_type;

        return $this;
    }

    /**
     * Gets adjust_for_payment_discount
     *
     * @return bool|null
     */
    public function getAdjustForPaymentDiscount()
    {
        return $this->container['adjust_for_payment_discount'];
    }

    /**
     * Sets adjust_for_payment_discount
     *
     * @param bool|null $adjust_for_payment_discount adjust_for_payment_discount
     *
     * @return self
     */
    public function setAdjustForPaymentDiscount($adjust_for_payment_discount)
    {

        if (is_null($adjust_for_payment_discount)) {
            throw new \InvalidArgumentException('non-nullable adjust_for_payment_discount cannot be null');
        }

        $this->container['adjust_for_payment_discount'] = $adjust_for_payment_discount;

        return $this;
    }

    /**
     * Gets sales_vat_account
     *
     * @return string|null
     */
    public function getSalesVatAccount()
    {
        return $this->container['sales_vat_account'];
    }

    /**
     * Sets sales_vat_account
     *
     * @param string|null $sales_vat_account sales_vat_account
     *
     * @return self
     */
    public function setSalesVatAccount($sales_vat_account)
    {

        if (is_null($sales_vat_account)) {
            throw new \InvalidArgumentException('non-nullable sales_vat_account cannot be null');
        }

        $this->container['sales_vat_account'] = $sales_vat_account;

        return $this;
    }

    /**
     * Gets sales_vat_unreal_account
     *
     * @return string|null
     */
    public function getSalesVatUnrealAccount()
    {
        return $this->container['sales_vat_unreal_account'];
    }

    /**
     * Sets sales_vat_unreal_account
     *
     * @param string|null $sales_vat_unreal_account sales_vat_unreal_account
     *
     * @return self
     */
    public function setSalesVatUnrealAccount($sales_vat_unreal_account)
    {

        if (is_null($sales_vat_unreal_account)) {
            throw new \InvalidArgumentException('non-nullable sales_vat_unreal_account cannot be null');
        }

        $this->container['sales_vat_unreal_account'] = $sales_vat_unreal_account;

        return $this;
    }

    /**
     * Gets purchase_vat_account
     *
     * @return string|null
     */
    public function getPurchaseVatAccount()
    {
        return $this->container['purchase_vat_account'];
    }

    /**
     * Sets purchase_vat_account
     *
     * @param string|null $purchase_vat_account purchase_vat_account
     *
     * @return self
     */
    public function setPurchaseVatAccount($purchase_vat_account)
    {

        if (is_null($purchase_vat_account)) {
            throw new \InvalidArgumentException('non-nullable purchase_vat_account cannot be null');
        }

        $this->container['purchase_vat_account'] = $purchase_vat_account;

        return $this;
    }

    /**
     * Gets purch_vat_unreal_account
     *
     * @return string|null
     */
    public function getPurchVatUnrealAccount()
    {
        return $this->container['purch_vat_unreal_account'];
    }

    /**
     * Sets purch_vat_unreal_account
     *
     * @param string|null $purch_vat_unreal_account purch_vat_unreal_account
     *
     * @return self
     */
    public function setPurchVatUnrealAccount($purch_vat_unreal_account)
    {

        if (is_null($purch_vat_unreal_account)) {
            throw new \InvalidArgumentException('non-nullable purch_vat_unreal_account cannot be null');
        }

        $this->container['purch_vat_unreal_account'] = $purch_vat_unreal_account;

        return $this;
    }

    /**
     * Gets reverse_chrg_vat_acc
     *
     * @return string|null
     */
    public function getReverseChrgVatAcc()
    {
        return $this->container['reverse_chrg_vat_acc'];
    }

    /**
     * Sets reverse_chrg_vat_acc
     *
     * @param string|null $reverse_chrg_vat_acc reverse_chrg_vat_acc
     *
     * @return self
     */
    public function setReverseChrgVatAcc($reverse_chrg_vat_acc)
    {

        if (is_null($reverse_chrg_vat_acc)) {
            throw new \InvalidArgumentException('non-nullable reverse_chrg_vat_acc cannot be null');
        }

        $this->container['reverse_chrg_vat_acc'] = $reverse_chrg_vat_acc;

        return $this;
    }

    /**
     * Gets reverse_chrg_vat_unreal_acc
     *
     * @return string|null
     */
    public function getReverseChrgVatUnrealAcc()
    {
        return $this->container['reverse_chrg_vat_unreal_acc'];
    }

    /**
     * Sets reverse_chrg_vat_unreal_acc
     *
     * @param string|null $reverse_chrg_vat_unreal_acc reverse_chrg_vat_unreal_acc
     *
     * @return self
     */
    public function setReverseChrgVatUnrealAcc($reverse_chrg_vat_unreal_acc)
    {

        if (is_null($reverse_chrg_vat_unreal_acc)) {
            throw new \InvalidArgumentException('non-nullable reverse_chrg_vat_unreal_acc cannot be null');
        }

        $this->container['reverse_chrg_vat_unreal_acc'] = $reverse_chrg_vat_unreal_acc;

        return $this;
    }

    /**
     * Gets vat_clause_code
     *
     * @return string|null
     */
    public function getVatClauseCode()
    {
        return $this->container['vat_clause_code'];
    }

    /**
     * Sets vat_clause_code
     *
     * @param string|null $vat_clause_code vat_clause_code
     *
     * @return self
     */
    public function setVatClauseCode($vat_clause_code)
    {

        if (is_null($vat_clause_code)) {
            throw new \InvalidArgumentException('non-nullable vat_clause_code cannot be null');
        }

        $this->container['vat_clause_code'] = $vat_clause_code;

        return $this;
    }

    /**
     * Gets eu_service
     *
     * @return bool|null
     */
    public function getEuService()
    {
        return $this->container['eu_service'];
    }

    /**
     * Sets eu_service
     *
     * @param bool|null $eu_service eu_service
     *
     * @return self
     */
    public function setEuService($eu_service)
    {

        if (is_null($eu_service)) {
            throw new \InvalidArgumentException('non-nullable eu_service cannot be null');
        }

        $this->container['eu_service'] = $eu_service;

        return $this;
    }

    /**
     * Gets certificate_of_supply_required
     *
     * @return bool|null
     */
    public function getCertificateOfSupplyRequired()
    {
        return $this->container['certificate_of_supply_required'];
    }

    /**
     * Sets certificate_of_supply_required
     *
     * @param bool|null $certificate_of_supply_required certificate_of_supply_required
     *
     * @return self
     */
    public function setCertificateOfSupplyRequired($certificate_of_supply_required)
    {

        if (is_null($certificate_of_supply_required)) {
            throw new \InvalidArgumentException('non-nullable certificate_of_supply_required cannot be null');
        }

        $this->container['certificate_of_supply_required'] = $certificate_of_supply_required;

        return $this;
    }

    /**
     * Gets tax_category
     *
     * @return string|null
     */
    public function getTaxCategory()
    {
        return $this->container['tax_category'];
    }

    /**
     * Sets tax_category
     *
     * @param string|null $tax_category tax_category
     *
     * @return self
     */
    public function setTaxCategory($tax_category)
    {

        if (is_null($tax_category)) {
            throw new \InvalidArgumentException('non-nullable tax_category cannot be null');
        }

        $this->container['tax_category'] = $tax_category;

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


