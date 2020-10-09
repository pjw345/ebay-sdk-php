<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSellingManagerProductResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response for deleting a Selling Manager product.
 * @subpackage Structs
 */
class DeleteSellingManagerProductResponseType extends AbstractResponseType
{
    /**
     * The DeletedSellingManagerProductDetails
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the unique identifier and name of the Seller Manager product.
     * - minOccurs: 0
     * @var \StructType\SellingManagerProductDetailsType
     */
    public $DeletedSellingManagerProductDetails;
    /**
     * Constructor method for DeleteSellingManagerProductResponseType
     * @uses DeleteSellingManagerProductResponseType::setDeletedSellingManagerProductDetails()
     * @param \StructType\SellingManagerProductDetailsType $deletedSellingManagerProductDetails
     */
    public function __construct(\StructType\SellingManagerProductDetailsType $deletedSellingManagerProductDetails = null)
    {
        $this
            ->setDeletedSellingManagerProductDetails($deletedSellingManagerProductDetails);
    }
    /**
     * Get DeletedSellingManagerProductDetails value
     * @return \StructType\SellingManagerProductDetailsType|null
     */
    public function getDeletedSellingManagerProductDetails()
    {
        return $this->DeletedSellingManagerProductDetails;
    }
    /**
     * Set DeletedSellingManagerProductDetails value
     * @param \StructType\SellingManagerProductDetailsType $deletedSellingManagerProductDetails
     * @return \StructType\DeleteSellingManagerProductResponseType
     */
    public function setDeletedSellingManagerProductDetails(\StructType\SellingManagerProductDetailsType $deletedSellingManagerProductDetails = null)
    {
        $this->DeletedSellingManagerProductDetails = $deletedSellingManagerProductDetails;
        return $this;
    }
}
