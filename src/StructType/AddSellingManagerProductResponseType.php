<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddSellingManagerProductResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response for the <b>AddSellingManagerProduct</b> call.
 * @subpackage Structs
 */
class AddSellingManagerProductResponseType extends AbstractResponseType
{
    /**
     * The SellingManagerProductDetails
     * Meta information extracted from the WSDL
     * - documentation: This container includes the same information that was passed into the <b>SellingManagerProductDetails</b> container in the request, as well as a new <b>ProductID</b> value if the new product was successfully created.
     * - minOccurs: 0
     * @var \StructType\SellingManagerProductDetailsType
     */
    public $SellingManagerProductDetails;
    /**
     * Constructor method for AddSellingManagerProductResponseType
     * @uses AddSellingManagerProductResponseType::setSellingManagerProductDetails()
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
     * @return \StructType\AddSellingManagerProductResponseType
     */
    public function setSellingManagerProductDetails(\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null)
    {
        $this->SellingManagerProductDetails = $sellingManagerProductDetails;
        return $this;
    }
}
