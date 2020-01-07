<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPromotionalSaleDetailsResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response type for the <b>GetPromotionalSaleDetails</b> call. This call retrieves information about promotional sales set up by an eBay store owner.
 * @subpackage Structs
 */
class GetPromotionalSaleDetailsResponseType extends AbstractResponseType
{
    /**
     * The PromotionalSaleDetails
     * Meta information extracted from the WSDL
     * - documentation: This container consists of an array of one or more promotional sales for an eBay store owner. A <b>PromotionalSaleDetails.PromotionalSale</b> container is returned for each promotional sale that matches the input criteria in the call
     * request.
     * - minOccurs: 0
     * @var \ArrayType\PromotionalSaleArrayType
     */
    public $PromotionalSaleDetails;
    /**
     * Constructor method for GetPromotionalSaleDetailsResponseType
     * @uses GetPromotionalSaleDetailsResponseType::setPromotionalSaleDetails()
     * @param \ArrayType\PromotionalSaleArrayType $promotionalSaleDetails
     */
    public function __construct(\ArrayType\PromotionalSaleArrayType $promotionalSaleDetails = null)
    {
        $this
            ->setPromotionalSaleDetails($promotionalSaleDetails);
    }
    /**
     * Get PromotionalSaleDetails value
     * @return \ArrayType\PromotionalSaleArrayType|null
     */
    public function getPromotionalSaleDetails()
    {
        return $this->PromotionalSaleDetails;
    }
    /**
     * Set PromotionalSaleDetails value
     * @param \ArrayType\PromotionalSaleArrayType $promotionalSaleDetails
     * @return \StructType\GetPromotionalSaleDetailsResponseType
     */
    public function setPromotionalSaleDetails(\ArrayType\PromotionalSaleArrayType $promotionalSaleDetails = null)
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
     * @return \StructType\GetPromotionalSaleDetailsResponseType
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
