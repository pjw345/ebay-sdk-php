<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSellingManagerProductRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Deletes a Selling Manager product. This call is subject to change without notice; the deprecation process is inapplicable to this call.
 * @subpackage Structs
 */
class DeleteSellingManagerProductRequestType extends AbstractRequestType
{
    /**
     * The ProductID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the Selling Manager product to be deleted.
     * - minOccurs: 0
     * @var int
     */
    public $ProductID;
    /**
     * Constructor method for DeleteSellingManagerProductRequestType
     * @uses DeleteSellingManagerProductRequestType::setProductID()
     * @param int $productID
     */
    public function __construct($productID = null)
    {
        $this
            ->setProductID($productID);
    }
    /**
     * Get ProductID value
     * @return int|null
     */
    public function getProductID()
    {
        return $this->ProductID;
    }
    /**
     * Set ProductID value
     * @param int $productID
     * @return \StructType\DeleteSellingManagerProductRequestType
     */
    public function setProductID($productID = null)
    {
        // validation for constraint: int
        if (!is_null($productID) && !(is_int($productID) || ctype_digit($productID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($productID, true), gettype($productID)), __LINE__);
        }
        $this->ProductID = $productID;
        return $this;
    }
}
