<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReviseSellingManagerProductRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Revises a Selling Manager Product. <br><br> This call is subject to change without notice; the deprecation process is inapplicable to this call. The user must have a Selling Manager Pro subscription to use this call.
 * @subpackage Structs
 */
class ReviseSellingManagerProductRequestType extends AbstractRequestType
{
    /**
     * The SellingManagerProductDetails
     * Meta information extracted from the WSDL
     * - documentation: The details of the product that is being revised.
     * - minOccurs: 0
     * @var \StructType\SellingManagerProductDetailsType
     */
    public $SellingManagerProductDetails;
    /**
     * The SellingManagerFolderDetails
     * Meta information extracted from the WSDL
     * - documentation: The details of the folder for this product.
     * - minOccurs: 0
     * @var \StructType\SellingManagerFolderDetailsType
     */
    public $SellingManagerFolderDetails;
    /**
     * The DeletedField
     * Meta information extracted from the WSDL
     * - documentation: Specifies the name of a field to remove from a Selling Manager product. The request can contain zero, one, or many instances of DeletedField (one for each field to be removed). DeletedField accepts the following path names, which
     * remove the corresponding fields:<br><br> SellingManagerProductDetails.CustomLabel<br> SellingManagerProductDetails.QuantityAvailable<br> SellingManagerProductDetails.UnitCost<br> These values are case-sensitive. Use values that match the case of the
     * schema element names.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $DeletedField;
    /**
     * The SellingManagerProductSpecifics
     * Meta information extracted from the WSDL
     * - documentation: Specifies an eBay category associated with the product, defines Item Specifics that are relevant to the product, and defines variations available for the product (which may be used to create multi-variation listings).
     * - minOccurs: 0
     * @var \StructType\SellingManagerProductSpecificsType
     */
    public $SellingManagerProductSpecifics;
    /**
     * Constructor method for ReviseSellingManagerProductRequestType
     * @uses ReviseSellingManagerProductRequestType::setSellingManagerProductDetails()
     * @uses ReviseSellingManagerProductRequestType::setSellingManagerFolderDetails()
     * @uses ReviseSellingManagerProductRequestType::setDeletedField()
     * @uses ReviseSellingManagerProductRequestType::setSellingManagerProductSpecifics()
     * @param \StructType\SellingManagerProductDetailsType $sellingManagerProductDetails
     * @param \StructType\SellingManagerFolderDetailsType $sellingManagerFolderDetails
     * @param string[] $deletedField
     * @param \StructType\SellingManagerProductSpecificsType $sellingManagerProductSpecifics
     */
    public function __construct(\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null, \StructType\SellingManagerFolderDetailsType $sellingManagerFolderDetails = null, array $deletedField = array(), \StructType\SellingManagerProductSpecificsType $sellingManagerProductSpecifics = null)
    {
        $this
            ->setSellingManagerProductDetails($sellingManagerProductDetails)
            ->setSellingManagerFolderDetails($sellingManagerFolderDetails)
            ->setDeletedField($deletedField)
            ->setSellingManagerProductSpecifics($sellingManagerProductSpecifics);
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
     * @return \StructType\ReviseSellingManagerProductRequestType
     */
    public function setSellingManagerProductDetails(\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null)
    {
        $this->SellingManagerProductDetails = $sellingManagerProductDetails;
        return $this;
    }
    /**
     * Get SellingManagerFolderDetails value
     * @return \StructType\SellingManagerFolderDetailsType|null
     */
    public function getSellingManagerFolderDetails()
    {
        return $this->SellingManagerFolderDetails;
    }
    /**
     * Set SellingManagerFolderDetails value
     * @param \StructType\SellingManagerFolderDetailsType $sellingManagerFolderDetails
     * @return \StructType\ReviseSellingManagerProductRequestType
     */
    public function setSellingManagerFolderDetails(\StructType\SellingManagerFolderDetailsType $sellingManagerFolderDetails = null)
    {
        $this->SellingManagerFolderDetails = $sellingManagerFolderDetails;
        return $this;
    }
    /**
     * Get DeletedField value
     * @return string[]|null
     */
    public function getDeletedField()
    {
        return $this->DeletedField;
    }
    /**
     * This method is responsible for validating the values passed to the setDeletedField method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDeletedField method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDeletedFieldForArrayConstraintsFromSetDeletedField(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $reviseSellingManagerProductRequestTypeDeletedFieldItem) {
            // validation for constraint: itemType
            if (!is_string($reviseSellingManagerProductRequestTypeDeletedFieldItem)) {
                $invalidValues[] = is_object($reviseSellingManagerProductRequestTypeDeletedFieldItem) ? get_class($reviseSellingManagerProductRequestTypeDeletedFieldItem) : sprintf('%s(%s)', gettype($reviseSellingManagerProductRequestTypeDeletedFieldItem), var_export($reviseSellingManagerProductRequestTypeDeletedFieldItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DeletedField property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DeletedField value
     * @throws \InvalidArgumentException
     * @param string[] $deletedField
     * @return \StructType\ReviseSellingManagerProductRequestType
     */
    public function setDeletedField(array $deletedField = array())
    {
        // validation for constraint: array
        if ('' !== ($deletedFieldArrayErrorMessage = self::validateDeletedFieldForArrayConstraintsFromSetDeletedField($deletedField))) {
            throw new \InvalidArgumentException($deletedFieldArrayErrorMessage, __LINE__);
        }
        $this->DeletedField = $deletedField;
        return $this;
    }
    /**
     * Add item to DeletedField value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\ReviseSellingManagerProductRequestType
     */
    public function addToDeletedField($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The DeletedField property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DeletedField[] = $item;
        return $this;
    }
    /**
     * Get SellingManagerProductSpecifics value
     * @return \StructType\SellingManagerProductSpecificsType|null
     */
    public function getSellingManagerProductSpecifics()
    {
        return $this->SellingManagerProductSpecifics;
    }
    /**
     * Set SellingManagerProductSpecifics value
     * @param \StructType\SellingManagerProductSpecificsType $sellingManagerProductSpecifics
     * @return \StructType\ReviseSellingManagerProductRequestType
     */
    public function setSellingManagerProductSpecifics(\StructType\SellingManagerProductSpecificsType $sellingManagerProductSpecifics = null)
    {
        $this->SellingManagerProductSpecifics = $sellingManagerProductSpecifics;
        return $this;
    }
}
