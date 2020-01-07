<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetPromotionalSaleRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Creates or modifies a promotional sale. Promotional sales enable sellers to apply discounts and/or free shipping across many listings. To use this call, the seller must be a registered eBay Store owner.
 * @subpackage Structs
 */
class SetPromotionalSaleRequestType extends AbstractRequestType
{
    /**
     * The Action
     * Meta information extracted from the WSDL
     * - documentation: The seller must include this field and set it to 'Add' to create a new promotional sale, or set it to 'Update' to modify an existing promotional sale, or set it to 'Delete' to delete a promotional sale.
     * - minOccurs: 0
     * @var string
     */
    public $Action;
    /**
     * The PromotionalSaleDetails
     * Meta information extracted from the WSDL
     * - documentation: This container must be included in each <b>SetPromotionalSale</b> call. The fields of this container that will be used will depend on whether the seller is adding a new promotional sale, updating an existing promotional sale, or
     * deleting an existing promotional sale.
     * - minOccurs: 0
     * @var \StructType\PromotionalSaleType
     */
    public $PromotionalSaleDetails;
    /**
     * Constructor method for SetPromotionalSaleRequestType
     * @uses SetPromotionalSaleRequestType::setAction()
     * @uses SetPromotionalSaleRequestType::setPromotionalSaleDetails()
     * @param string $action
     * @param \StructType\PromotionalSaleType $promotionalSaleDetails
     */
    public function __construct($action = null, \StructType\PromotionalSaleType $promotionalSaleDetails = null)
    {
        $this
            ->setAction($action)
            ->setPromotionalSaleDetails($promotionalSaleDetails);
    }
    /**
     * Get Action value
     * @return string|null
     */
    public function getAction()
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @uses \EnumType\ModifyActionCodeType::valueIsValid()
     * @uses \EnumType\ModifyActionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $action
     * @return \StructType\SetPromotionalSaleRequestType
     */
    public function setAction($action = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ModifyActionCodeType::valueIsValid($action)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ModifyActionCodeType', is_array($action) ? implode(', ', $action) : var_export($action, true), implode(', ', \EnumType\ModifyActionCodeType::getValidValues())), __LINE__);
        }
        $this->Action = $action;
        return $this;
    }
    /**
     * Get PromotionalSaleDetails value
     * @return \StructType\PromotionalSaleType|null
     */
    public function getPromotionalSaleDetails()
    {
        return $this->PromotionalSaleDetails;
    }
    /**
     * Set PromotionalSaleDetails value
     * @param \StructType\PromotionalSaleType $promotionalSaleDetails
     * @return \StructType\SetPromotionalSaleRequestType
     */
    public function setPromotionalSaleDetails(\StructType\PromotionalSaleType $promotionalSaleDetails = null)
    {
        $this->PromotionalSaleDetails = $promotionalSaleDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SetPromotionalSaleRequestType
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
