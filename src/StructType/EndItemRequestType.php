<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EndItemRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Ends the specified item listing before the date and time at which it would normally end per the listing duration.
 * @subpackage Structs
 */
class EndItemRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: Unique item ID that identifies the listing that you want to end. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The EndingReason
     * Meta information extracted from the WSDL
     * - documentation: The seller's reason for ending the listing early is input into this required field. The seller is not allowed to use the <code>ProductDeleted</code> value, as this ending reason can only be used internally by eBay to administratively
     * end a listing due to the associated Catalog product being removed from the eBay Catalog.
     * - minOccurs: 0
     * @var string
     */
    public $EndingReason;
    /**
     * The SellerInventoryID
     * Meta information extracted from the WSDL
     * - documentation: This field was previously only used to identify and end Half.com listings, and since the Half.com site has been shut down, this element is no longer applicable.
     * - minOccurs: 0
     * @var string
     */
    public $SellerInventoryID;
    /**
     * Constructor method for EndItemRequestType
     * @uses EndItemRequestType::setItemID()
     * @uses EndItemRequestType::setEndingReason()
     * @uses EndItemRequestType::setSellerInventoryID()
     * @param string $itemID
     * @param string $endingReason
     * @param string $sellerInventoryID
     */
    public function __construct($itemID = null, $endingReason = null, $sellerInventoryID = null)
    {
        $this
            ->setItemID($itemID)
            ->setEndingReason($endingReason)
            ->setSellerInventoryID($sellerInventoryID);
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \StructType\EndItemRequestType
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemID, true), gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Get EndingReason value
     * @return string|null
     */
    public function getEndingReason()
    {
        return $this->EndingReason;
    }
    /**
     * Set EndingReason value
     * @uses \EnumType\EndReasonCodeType::valueIsValid()
     * @uses \EnumType\EndReasonCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $endingReason
     * @return \StructType\EndItemRequestType
     */
    public function setEndingReason($endingReason = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\EndReasonCodeType::valueIsValid($endingReason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EndReasonCodeType', is_array($endingReason) ? implode(', ', $endingReason) : var_export($endingReason, true), implode(', ', \EnumType\EndReasonCodeType::getValidValues())), __LINE__);
        }
        $this->EndingReason = $endingReason;
        return $this;
    }
    /**
     * Get SellerInventoryID value
     * @return string|null
     */
    public function getSellerInventoryID()
    {
        return $this->SellerInventoryID;
    }
    /**
     * Set SellerInventoryID value
     * @param string $sellerInventoryID
     * @return \StructType\EndItemRequestType
     */
    public function setSellerInventoryID($sellerInventoryID = null)
    {
        // validation for constraint: string
        if (!is_null($sellerInventoryID) && !is_string($sellerInventoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerInventoryID, true), gettype($sellerInventoryID)), __LINE__);
        }
        $this->SellerInventoryID = $sellerInventoryID;
        return $this;
    }
}
