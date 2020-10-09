<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiscountType StructType
 * Meta information extracted from the WSDL
 * - documentation: The type is used to indicate the discount type and amount applied to an account entry. <br> <br> <span class="tablenote"><b>Note: </b> The discount amount will only be shown if the corresponding fee was deducted from a seller payout
 * for a managed payments seller. </span>
 * @subpackage Structs
 */
class DiscountType extends AbstractStructBase
{
    /**
     * The DiscountType
     * Meta information extracted from the WSDL
     * - documentation: The value in this field indicates the type of discount applied to the corresponding account entry.
     * - minOccurs: 0
     * @var string
     */
    public $DiscountType;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: The amount of the discount in the currency indicated in the <b>currencyID</b> attribute.<br> <br> <span class="tablenote"><b>Note: </b> The discount amount will only be shown if the corresponding fee was deducted from a seller payout
     * for a managed payments seller. </span>
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $Amount;
    /**
     * Constructor method for DiscountType
     * @uses DiscountType::setDiscountType()
     * @uses DiscountType::setAmount()
     * @param string $discountType
     * @param \StructType\AmountType $amount
     */
    public function __construct($discountType = null, \StructType\AmountType $amount = null)
    {
        $this
            ->setDiscountType($discountType)
            ->setAmount($amount);
    }
    /**
     * Get DiscountType value
     * @return string|null
     */
    public function getDiscountType()
    {
        return $this->DiscountType;
    }
    /**
     * Set DiscountType value
     * @param string $discountType
     * @return \StructType\DiscountType
     */
    public function setDiscountType($discountType = null)
    {
        // validation for constraint: string
        if (!is_null($discountType) && !is_string($discountType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($discountType, true), gettype($discountType)), __LINE__);
        }
        $this->DiscountType = $discountType;
        return $this;
    }
    /**
     * Get Amount value
     * @return \StructType\AmountType|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param \StructType\AmountType $amount
     * @return \StructType\DiscountType
     */
    public function setAmount(\StructType\AmountType $amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
}
