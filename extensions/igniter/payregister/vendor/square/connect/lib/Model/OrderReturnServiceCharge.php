<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * OrderReturnServiceCharge Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class OrderReturnServiceCharge implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'uid' => 'string',
        'source_service_charge_uid' => 'string',
        'name' => 'string',
        'catalog_object_id' => 'string',
        'percentage' => 'string',
        'amount_money' => '\SquareConnect\Model\Money',
        'applied_money' => '\SquareConnect\Model\Money',
        'total_money' => '\SquareConnect\Model\Money',
        'total_tax_money' => '\SquareConnect\Model\Money',
        'calculation_phase' => 'string',
        'taxable' => 'bool',
        'applied_taxes' => '\SquareConnect\Model\OrderLineItemAppliedTax[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'uid' => 'uid',
        'source_service_charge_uid' => 'source_service_charge_uid',
        'name' => 'name',
        'catalog_object_id' => 'catalog_object_id',
        'percentage' => 'percentage',
        'amount_money' => 'amount_money',
        'applied_money' => 'applied_money',
        'total_money' => 'total_money',
        'total_tax_money' => 'total_tax_money',
        'calculation_phase' => 'calculation_phase',
        'taxable' => 'taxable',
        'applied_taxes' => 'applied_taxes'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'uid' => 'setUid',
        'source_service_charge_uid' => 'setSourceServiceChargeUid',
        'name' => 'setName',
        'catalog_object_id' => 'setCatalogObjectId',
        'percentage' => 'setPercentage',
        'amount_money' => 'setAmountMoney',
        'applied_money' => 'setAppliedMoney',
        'total_money' => 'setTotalMoney',
        'total_tax_money' => 'setTotalTaxMoney',
        'calculation_phase' => 'setCalculationPhase',
        'taxable' => 'setTaxable',
        'applied_taxes' => 'setAppliedTaxes'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'uid' => 'getUid',
        'source_service_charge_uid' => 'getSourceServiceChargeUid',
        'name' => 'getName',
        'catalog_object_id' => 'getCatalogObjectId',
        'percentage' => 'getPercentage',
        'amount_money' => 'getAmountMoney',
        'applied_money' => 'getAppliedMoney',
        'total_money' => 'getTotalMoney',
        'total_tax_money' => 'getTotalTaxMoney',
        'calculation_phase' => 'getCalculationPhase',
        'taxable' => 'getTaxable',
        'applied_taxes' => 'getAppliedTaxes'
    );
  
    /**
      * $uid Unique ID that identifies the return service charge only within this order.
      * @var string
      */
    protected $uid;
    /**
      * $source_service_charge_uid `uid` of the Service Charge from the Order containing the original charge of the service charge. `source_service_charge_uid` is `null` for unlinked returns.
      * @var string
      */
    protected $source_service_charge_uid;
    /**
      * $name The name of the service charge.
      * @var string
      */
    protected $name;
    /**
      * $catalog_object_id The catalog object ID of the associated `CatalogServiceCharge`.
      * @var string
      */
    protected $catalog_object_id;
    /**
      * $percentage The percentage of the service charge, as a string representation of a decimal number. For example, a value of `\"7.25\"` corresponds to a percentage of 7.25%.  Exactly one of `percentage` or `amount_money` should be set.
      * @var string
      */
    protected $percentage;
    /**
      * $amount_money The amount of a non-percentage based service charge.  Exactly one of `percentage` or `amount_money` should be set.
      * @var \SquareConnect\Model\Money
      */
    protected $amount_money;
    /**
      * $applied_money The amount of money applied to the order by the service charge, including any inclusive tax amounts, as calculated by Square.  - For fixed-amount service charges, `applied_money` is equal to `amount_money`. - For percentage-based service charges, `applied_money` is the money calculated using the percentage.
      * @var \SquareConnect\Model\Money
      */
    protected $applied_money;
    /**
      * $total_money The total amount of money to collect for the service charge.  __NOTE__: if an inclusive tax is applied to the service charge, `total_money` does not equal `applied_money` plus `total_tax_money` since the inclusive tax amount will already be included in both `applied_money` and `total_tax_money`.
      * @var \SquareConnect\Model\Money
      */
    protected $total_money;
    /**
      * $total_tax_money The total amount of tax money to collect for the service charge.
      * @var \SquareConnect\Model\Money
      */
    protected $total_tax_money;
    /**
      * $calculation_phase The calculation phase after which to apply the service charge. See [OrderServiceChargeCalculationPhase](#type-orderservicechargecalculationphase) for possible values
      * @var string
      */
    protected $calculation_phase;
    /**
      * $taxable Indicates whether the surcharge can be taxed. Service charges calculated in the `TOTAL_PHASE` cannot be marked as taxable.
      * @var bool
      */
    protected $taxable;
    /**
      * $applied_taxes The list of references to `OrderReturnTax` entities applied to the `OrderReturnServiceCharge`. Each `OrderLineItemAppliedTax` has a `tax_uid` that references the `uid` of a top-level `OrderReturnTax` that is being applied to the `OrderReturnServiceCharge`. On reads, the amount applied is populated.
      * @var \SquareConnect\Model\OrderLineItemAppliedTax[]
      */
    protected $applied_taxes;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["uid"])) {
              $this->uid = $data["uid"];
            } else {
              $this->uid = null;
            }
            if (isset($data["source_service_charge_uid"])) {
              $this->source_service_charge_uid = $data["source_service_charge_uid"];
            } else {
              $this->source_service_charge_uid = null;
            }
            if (isset($data["name"])) {
              $this->name = $data["name"];
            } else {
              $this->name = null;
            }
            if (isset($data["catalog_object_id"])) {
              $this->catalog_object_id = $data["catalog_object_id"];
            } else {
              $this->catalog_object_id = null;
            }
            if (isset($data["percentage"])) {
              $this->percentage = $data["percentage"];
            } else {
              $this->percentage = null;
            }
            if (isset($data["amount_money"])) {
              $this->amount_money = $data["amount_money"];
            } else {
              $this->amount_money = null;
            }
            if (isset($data["applied_money"])) {
              $this->applied_money = $data["applied_money"];
            } else {
              $this->applied_money = null;
            }
            if (isset($data["total_money"])) {
              $this->total_money = $data["total_money"];
            } else {
              $this->total_money = null;
            }
            if (isset($data["total_tax_money"])) {
              $this->total_tax_money = $data["total_tax_money"];
            } else {
              $this->total_tax_money = null;
            }
            if (isset($data["calculation_phase"])) {
              $this->calculation_phase = $data["calculation_phase"];
            } else {
              $this->calculation_phase = null;
            }
            if (isset($data["taxable"])) {
              $this->taxable = $data["taxable"];
            } else {
              $this->taxable = null;
            }
            if (isset($data["applied_taxes"])) {
              $this->applied_taxes = $data["applied_taxes"];
            } else {
              $this->applied_taxes = null;
            }
        }
    }
    /**
     * Gets uid
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }
  
    /**
     * Sets uid
     * @param string $uid Unique ID that identifies the return service charge only within this order.
     * @return $this
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
        return $this;
    }
    /**
     * Gets source_service_charge_uid
     * @return string
     */
    public function getSourceServiceChargeUid()
    {
        return $this->source_service_charge_uid;
    }
  
    /**
     * Sets source_service_charge_uid
     * @param string $source_service_charge_uid `uid` of the Service Charge from the Order containing the original charge of the service charge. `source_service_charge_uid` is `null` for unlinked returns.
     * @return $this
     */
    public function setSourceServiceChargeUid($source_service_charge_uid)
    {
        $this->source_service_charge_uid = $source_service_charge_uid;
        return $this;
    }
    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param string $name The name of the service charge.
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Gets catalog_object_id
     * @return string
     */
    public function getCatalogObjectId()
    {
        return $this->catalog_object_id;
    }
  
    /**
     * Sets catalog_object_id
     * @param string $catalog_object_id The catalog object ID of the associated `CatalogServiceCharge`.
     * @return $this
     */
    public function setCatalogObjectId($catalog_object_id)
    {
        $this->catalog_object_id = $catalog_object_id;
        return $this;
    }
    /**
     * Gets percentage
     * @return string
     */
    public function getPercentage()
    {
        return $this->percentage;
    }
  
    /**
     * Sets percentage
     * @param string $percentage The percentage of the service charge, as a string representation of a decimal number. For example, a value of `\"7.25\"` corresponds to a percentage of 7.25%.  Exactly one of `percentage` or `amount_money` should be set.
     * @return $this
     */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;
        return $this;
    }
    /**
     * Gets amount_money
     * @return \SquareConnect\Model\Money
     */
    public function getAmountMoney()
    {
        return $this->amount_money;
    }
  
    /**
     * Sets amount_money
     * @param \SquareConnect\Model\Money $amount_money The amount of a non-percentage based service charge.  Exactly one of `percentage` or `amount_money` should be set.
     * @return $this
     */
    public function setAmountMoney($amount_money)
    {
        $this->amount_money = $amount_money;
        return $this;
    }
    /**
     * Gets applied_money
     * @return \SquareConnect\Model\Money
     */
    public function getAppliedMoney()
    {
        return $this->applied_money;
    }
  
    /**
     * Sets applied_money
     * @param \SquareConnect\Model\Money $applied_money The amount of money applied to the order by the service charge, including any inclusive tax amounts, as calculated by Square.  - For fixed-amount service charges, `applied_money` is equal to `amount_money`. - For percentage-based service charges, `applied_money` is the money calculated using the percentage.
     * @return $this
     */
    public function setAppliedMoney($applied_money)
    {
        $this->applied_money = $applied_money;
        return $this;
    }
    /**
     * Gets total_money
     * @return \SquareConnect\Model\Money
     */
    public function getTotalMoney()
    {
        return $this->total_money;
    }
  
    /**
     * Sets total_money
     * @param \SquareConnect\Model\Money $total_money The total amount of money to collect for the service charge.  __NOTE__: if an inclusive tax is applied to the service charge, `total_money` does not equal `applied_money` plus `total_tax_money` since the inclusive tax amount will already be included in both `applied_money` and `total_tax_money`.
     * @return $this
     */
    public function setTotalMoney($total_money)
    {
        $this->total_money = $total_money;
        return $this;
    }
    /**
     * Gets total_tax_money
     * @return \SquareConnect\Model\Money
     */
    public function getTotalTaxMoney()
    {
        return $this->total_tax_money;
    }
  
    /**
     * Sets total_tax_money
     * @param \SquareConnect\Model\Money $total_tax_money The total amount of tax money to collect for the service charge.
     * @return $this
     */
    public function setTotalTaxMoney($total_tax_money)
    {
        $this->total_tax_money = $total_tax_money;
        return $this;
    }
    /**
     * Gets calculation_phase
     * @return string
     */
    public function getCalculationPhase()
    {
        return $this->calculation_phase;
    }
  
    /**
     * Sets calculation_phase
     * @param string $calculation_phase The calculation phase after which to apply the service charge. See [OrderServiceChargeCalculationPhase](#type-orderservicechargecalculationphase) for possible values
     * @return $this
     */
    public function setCalculationPhase($calculation_phase)
    {
        $this->calculation_phase = $calculation_phase;
        return $this;
    }
    /**
     * Gets taxable
     * @return bool
     */
    public function getTaxable()
    {
        return $this->taxable;
    }
  
    /**
     * Sets taxable
     * @param bool $taxable Indicates whether the surcharge can be taxed. Service charges calculated in the `TOTAL_PHASE` cannot be marked as taxable.
     * @return $this
     */
    public function setTaxable($taxable)
    {
        $this->taxable = $taxable;
        return $this;
    }
    /**
     * Gets applied_taxes
     * @return \SquareConnect\Model\OrderLineItemAppliedTax[]
     */
    public function getAppliedTaxes()
    {
        return $this->applied_taxes;
    }
  
    /**
     * Sets applied_taxes
     * @param \SquareConnect\Model\OrderLineItemAppliedTax[] $applied_taxes The list of references to `OrderReturnTax` entities applied to the `OrderReturnServiceCharge`. Each `OrderLineItemAppliedTax` has a `tax_uid` that references the `uid` of a top-level `OrderReturnTax` that is being applied to the `OrderReturnServiceCharge`. On reads, the amount applied is populated.
     * @return $this
     */
    public function setAppliedTaxes($applied_taxes)
    {
        $this->applied_taxes = $applied_taxes;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
