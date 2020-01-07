<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemTotalsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ItemTotalsType extends AbstractStructBase
{
    /**
     * The TotalQuantity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TotalQuantity;
    /**
     * The TotalValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $TotalValue;
    /**
     * Constructor method for ItemTotalsType
     * @uses ItemTotalsType::setTotalQuantity()
     * @uses ItemTotalsType::setTotalValue()
     * @param int $totalQuantity
     * @param \StructType\AmountType $totalValue
     */
    public function __construct($totalQuantity = null, \StructType\AmountType $totalValue = null)
    {
        $this
            ->setTotalQuantity($totalQuantity)
            ->setTotalValue($totalValue);
    }
    /**
     * Get TotalQuantity value
     * @return int|null
     */
    public function getTotalQuantity()
    {
        return $this->TotalQuantity;
    }
    /**
     * Set TotalQuantity value
     * @param int $totalQuantity
     * @return \StructType\ItemTotalsType
     */
    public function setTotalQuantity($totalQuantity = null)
    {
        // validation for constraint: int
        if (!is_null($totalQuantity) && !(is_int($totalQuantity) || ctype_digit($totalQuantity))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalQuantity, true), gettype($totalQuantity)), __LINE__);
        }
        $this->TotalQuantity = $totalQuantity;
        return $this;
    }
    /**
     * Get TotalValue value
     * @return \StructType\AmountType|null
     */
    public function getTotalValue()
    {
        return $this->TotalValue;
    }
    /**
     * Set TotalValue value
     * @param \StructType\AmountType $totalValue
     * @return \StructType\ItemTotalsType
     */
    public function setTotalValue(\StructType\AmountType $totalValue = null)
    {
        $this->TotalValue = $totalValue;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ItemTotalsType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
