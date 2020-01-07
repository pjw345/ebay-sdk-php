<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReviseSellingManagerProductResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response for revising a Selling Manager product.
 * @subpackage Structs
 */
class ReviseSellingManagerProductResponseType extends AbstractResponseType
{
    /**
     * The SellingManagerProductDetails
     * Meta information extracted from the WSDL
     * - documentation: The details of the product.
     * - minOccurs: 0
     * @var \StructType\SellingManagerProductDetailsType
     */
    public $SellingManagerProductDetails;
    /**
     * Constructor method for ReviseSellingManagerProductResponseType
     * @uses ReviseSellingManagerProductResponseType::setSellingManagerProductDetails()
     * @param \StructType\SellingManagerProductDetailsType $sellingManagerProductDetails
     */
    public function __construct(\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null)
    {
        $this
            ->setSellingManagerProductDetails($sellingManagerProductDetails);
    }
    /**
     * Get SellingManagerProductDetails value
     * @return \StructType\SellingManagerProductDetailsType|null
     */
    public function getSellingManagerProductDetails()
    {
        return $this->SellingManagerProductDetails;
    }
    /**
     * Set SellingManagerProductDetails value
     * @param \StructType\SellingManagerProductDetailsType $sellingManagerProductDetails
     * @return \StructType\ReviseSellingManagerProductResponseType
     */
    public function setSellingManagerProductDetails(\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null)
    {
        $this->SellingManagerProductDetails = $sellingManagerProductDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReviseSellingManagerProductResponseType
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
