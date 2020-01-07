<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PricingRecommendationsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class PricingRecommendationsType extends AbstractStructBase
{
    /**
     * The ProductInfo
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\ProductInfoType
     */
    public $ProductInfo;
    /**
     * Constructor method for PricingRecommendationsType
     * @uses PricingRecommendationsType::setProductInfo()
     * @param \StructType\ProductInfoType $productInfo
     */
    public function __construct(\StructType\ProductInfoType $productInfo = null)
    {
        $this
            ->setProductInfo($productInfo);
    }
    /**
     * Get ProductInfo value
     * @return \StructType\ProductInfoType|null
     */
    public function getProductInfo()
    {
        return $this->ProductInfo;
    }
    /**
     * Set ProductInfo value
     * @param \StructType\ProductInfoType $productInfo
     * @return \StructType\PricingRecommendationsType
     */
    public function setProductInfo(\StructType\ProductInfoType $productInfo = null)
    {
        $this->ProductInfo = $productInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PricingRecommendationsType
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
