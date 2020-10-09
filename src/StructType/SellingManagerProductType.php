<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerProductType StructType
 * Meta information extracted from the WSDL
 * - documentation: Describes a Selling Manager Product
 * @subpackage Structs
 */
class SellingManagerProductType extends AbstractStructBase
{
    /**
     * The SellingManagerProductDetails
     * Meta information extracted from the WSDL
     * - documentation: Container for information about the product.
     * - minOccurs: 0
     * @var \StructType\SellingManagerProductDetailsType
     */
    public $SellingManagerProductDetails;
    /**
     * The SellingManagerTemplateDetailsArray
     * Meta information extracted from the WSDL
     * - documentation: Contains the list of the seller's templates contained in the product, one SellingManagerTemplateType object per template.
     * - minOccurs: 0
     * @var \ArrayType\SellingManagerTemplateDetailsArrayType
     */
    public $SellingManagerTemplateDetailsArray;
    /**
     * The SellingManagerProductInventoryStatus
     * Meta information extracted from the WSDL
     * - documentation: Container for statistics about the product.
     * - minOccurs: 0
     * @var \StructType\SellingManagerProductInventoryStatusType
     */
    public $SellingManagerProductInventoryStatus;
    /**
     * The SellingManagerProductSpecifics
     * Meta information extracted from the WSDL
     * - documentation: Specifies an eBay category associated with the product, defines Item Specifics that are relevant to the product, and defines variations available for the product (which may be used to create multivariation listings).
     * - minOccurs: 0
     * @var \StructType\SellingManagerProductSpecificsType
     */
    public $SellingManagerProductSpecifics;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellingManagerProductType
     * @uses SellingManagerProductType::setSellingManagerProductDetails()
     * @uses SellingManagerProductType::setSellingManagerTemplateDetailsArray()
     * @uses SellingManagerProductType::setSellingManagerProductInventoryStatus()
     * @uses SellingManagerProductType::setSellingManagerProductSpecifics()
     * @uses SellingManagerProductType::setAny()
     * @param \StructType\SellingManagerProductDetailsType $sellingManagerProductDetails
     * @param \ArrayType\SellingManagerTemplateDetailsArrayType $sellingManagerTemplateDetailsArray
     * @param \StructType\SellingManagerProductInventoryStatusType $sellingManagerProductInventoryStatus
     * @param \StructType\SellingManagerProductSpecificsType $sellingManagerProductSpecifics
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null, \ArrayType\SellingManagerTemplateDetailsArrayType $sellingManagerTemplateDetailsArray = null, \StructType\SellingManagerProductInventoryStatusType $sellingManagerProductInventoryStatus = null, \StructType\SellingManagerProductSpecificsType $sellingManagerProductSpecifics = null, \DOMDocument $any = null)
    {
        $this
            ->setSellingManagerProductDetails($sellingManagerProductDetails)
            ->setSellingManagerTemplateDetailsArray($sellingManagerTemplateDetailsArray)
            ->setSellingManagerProductInventoryStatus($sellingManagerProductInventoryStatus)
            ->setSellingManagerProductSpecifics($sellingManagerProductSpecifics)
            ->setAny($any);
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
     * @return \StructType\SellingManagerProductType
     */
    public function setSellingManagerProductDetails(\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null)
    {
        $this->SellingManagerProductDetails = $sellingManagerProductDetails;
        return $this;
    }
    /**
     * Get SellingManagerTemplateDetailsArray value
     * @return \ArrayType\SellingManagerTemplateDetailsArrayType|null
     */
    public function getSellingManagerTemplateDetailsArray()
    {
        return $this->SellingManagerTemplateDetailsArray;
    }
    /**
     * Set SellingManagerTemplateDetailsArray value
     * @param \ArrayType\SellingManagerTemplateDetailsArrayType $sellingManagerTemplateDetailsArray
     * @return \StructType\SellingManagerProductType
     */
    public function setSellingManagerTemplateDetailsArray(\ArrayType\SellingManagerTemplateDetailsArrayType $sellingManagerTemplateDetailsArray = null)
    {
        $this->SellingManagerTemplateDetailsArray = $sellingManagerTemplateDetailsArray;
        return $this;
    }
    /**
     * Get SellingManagerProductInventoryStatus value
     * @return \StructType\SellingManagerProductInventoryStatusType|null
     */
    public function getSellingManagerProductInventoryStatus()
    {
        return $this->SellingManagerProductInventoryStatus;
    }
    /**
     * Set SellingManagerProductInventoryStatus value
     * @param \StructType\SellingManagerProductInventoryStatusType $sellingManagerProductInventoryStatus
     * @return \StructType\SellingManagerProductType
     */
    public function setSellingManagerProductInventoryStatus(\StructType\SellingManagerProductInventoryStatusType $sellingManagerProductInventoryStatus = null)
    {
        $this->SellingManagerProductInventoryStatus = $sellingManagerProductInventoryStatus;
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
     * @return \StructType\SellingManagerProductType
     */
    public function setSellingManagerProductSpecifics(\StructType\SellingManagerProductSpecificsType $sellingManagerProductSpecifics = null)
    {
        $this->SellingManagerProductSpecifics = $sellingManagerProductSpecifics;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        $domDocument = null;
        if (!empty($this->any) && !$asString) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asString ? $this->any : $domDocument;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument $any
     * @return \StructType\SellingManagerProductType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
