<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerProductDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returned if the user is a Selling Manager user. Defines product information for Selling Manager users.
 * @subpackage Structs
 */
class SellingManagerProductDetailsType extends AbstractStructBase
{
    /**
     * The ProductName
     * Meta information extracted from the WSDL
     * - documentation: The name of a Selling Manager product. The AddSellingManagerProduct call is used to create a Selling Manager product.
     * - minOccurs: 0
     * @var string
     */
    public $ProductName;
    /**
     * The ProductID
     * Meta information extracted from the WSDL
     * - documentation: The ID of a Selling Manager product. When you call AddSellingManagerProduct, a product ID is returned for the product created. When you use this ID to make subsequent calls, such as AddSellingManagerTemplate, the ProductID you
     * provide on input is returned in the output.
     * - minOccurs: 0
     * @var int
     */
    public $ProductID;
    /**
     * The CustomLabel
     * Meta information extracted from the WSDL
     * - documentation: Custom label of this product.
     * - minOccurs: 0
     * @var string
     */
    public $CustomLabel;
    /**
     * The QuantityAvailable
     * Meta information extracted from the WSDL
     * - documentation: Quantity of items in the seller's inventory for this product.
     * - minOccurs: 0
     * @var int
     */
    public $QuantityAvailable;
    /**
     * The UnitCost
     * Meta information extracted from the WSDL
     * - documentation: Cost of each item of this product.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $UnitCost;
    /**
     * The FolderID
     * Meta information extracted from the WSDL
     * - documentation: ID of the inventory folder that contains the product. Value is initially returned in the AddSellingManagerInventoryFolder response.
     * - minOccurs: 0
     * @var int
     */
    public $FolderID;
    /**
     * The RestockAlert
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether a restock alert is triggered for the product or not.
     * - minOccurs: 0
     * @var bool
     */
    public $RestockAlert;
    /**
     * The RestockThreshold
     * Meta information extracted from the WSDL
     * - documentation: Specifies the quantity at which a restock alert should be triggered.
     * - minOccurs: 0
     * @var int
     */
    public $RestockThreshold;
    /**
     * The VendorInfo
     * Meta information extracted from the WSDL
     * - documentation: Primary vendor information. Vendor information is returned only if it has been set.
     * - minOccurs: 0
     * @var \StructType\SellingManagerVendorDetailsType
     */
    public $VendorInfo;
    /**
     * The Note
     * Meta information extracted from the WSDL
     * - documentation: Seller's note about this product.
     * - minOccurs: 0
     * @var string
     */
    public $Note;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellingManagerProductDetailsType
     * @uses SellingManagerProductDetailsType::setProductName()
     * @uses SellingManagerProductDetailsType::setProductID()
     * @uses SellingManagerProductDetailsType::setCustomLabel()
     * @uses SellingManagerProductDetailsType::setQuantityAvailable()
     * @uses SellingManagerProductDetailsType::setUnitCost()
     * @uses SellingManagerProductDetailsType::setFolderID()
     * @uses SellingManagerProductDetailsType::setRestockAlert()
     * @uses SellingManagerProductDetailsType::setRestockThreshold()
     * @uses SellingManagerProductDetailsType::setVendorInfo()
     * @uses SellingManagerProductDetailsType::setNote()
     * @uses SellingManagerProductDetailsType::setAny()
     * @param string $productName
     * @param int $productID
     * @param string $customLabel
     * @param int $quantityAvailable
     * @param \StructType\AmountType $unitCost
     * @param int $folderID
     * @param bool $restockAlert
     * @param int $restockThreshold
     * @param \StructType\SellingManagerVendorDetailsType $vendorInfo
     * @param string $note
     * @param \DOMDocument $any
     */
    public function __construct($productName = null, $productID = null, $customLabel = null, $quantityAvailable = null, \StructType\AmountType $unitCost = null, $folderID = null, $restockAlert = null, $restockThreshold = null, \StructType\SellingManagerVendorDetailsType $vendorInfo = null, $note = null, \DOMDocument $any = null)
    {
        $this
            ->setProductName($productName)
            ->setProductID($productID)
            ->setCustomLabel($customLabel)
            ->setQuantityAvailable($quantityAvailable)
            ->setUnitCost($unitCost)
            ->setFolderID($folderID)
            ->setRestockAlert($restockAlert)
            ->setRestockThreshold($restockThreshold)
            ->setVendorInfo($vendorInfo)
            ->setNote($note)
            ->setAny($any);
    }
    /**
     * Get ProductName value
     * @return string|null
     */
    public function getProductName()
    {
        return $this->ProductName;
    }
    /**
     * Set ProductName value
     * @param string $productName
     * @return \StructType\SellingManagerProductDetailsType
     */
    public function setProductName($productName = null)
    {
        // validation for constraint: string
        if (!is_null($productName) && !is_string($productName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productName, true), gettype($productName)), __LINE__);
        }
        $this->ProductName = $productName;
        return $this;
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
     * @return \StructType\SellingManagerProductDetailsType
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
    /**
     * Get CustomLabel value
     * @return string|null
     */
    public function getCustomLabel()
    {
        return $this->CustomLabel;
    }
    /**
     * Set CustomLabel value
     * @param string $customLabel
     * @return \StructType\SellingManagerProductDetailsType
     */
    public function setCustomLabel($customLabel = null)
    {
        // validation for constraint: string
        if (!is_null($customLabel) && !is_string($customLabel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customLabel, true), gettype($customLabel)), __LINE__);
        }
        $this->CustomLabel = $customLabel;
        return $this;
    }
    /**
     * Get QuantityAvailable value
     * @return int|null
     */
    public function getQuantityAvailable()
    {
        return $this->QuantityAvailable;
    }
    /**
     * Set QuantityAvailable value
     * @param int $quantityAvailable
     * @return \StructType\SellingManagerProductDetailsType
     */
    public function setQuantityAvailable($quantityAvailable = null)
    {
        // validation for constraint: int
        if (!is_null($quantityAvailable) && !(is_int($quantityAvailable) || ctype_digit($quantityAvailable))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantityAvailable, true), gettype($quantityAvailable)), __LINE__);
        }
        $this->QuantityAvailable = $quantityAvailable;
        return $this;
    }
    /**
     * Get UnitCost value
     * @return \StructType\AmountType|null
     */
    public function getUnitCost()
    {
        return $this->UnitCost;
    }
    /**
     * Set UnitCost value
     * @param \StructType\AmountType $unitCost
     * @return \StructType\SellingManagerProductDetailsType
     */
    public function setUnitCost(\StructType\AmountType $unitCost = null)
    {
        $this->UnitCost = $unitCost;
        return $this;
    }
    /**
     * Get FolderID value
     * @return int|null
     */
    public function getFolderID()
    {
        return $this->FolderID;
    }
    /**
     * Set FolderID value
     * @param int $folderID
     * @return \StructType\SellingManagerProductDetailsType
     */
    public function setFolderID($folderID = null)
    {
        // validation for constraint: int
        if (!is_null($folderID) && !(is_int($folderID) || ctype_digit($folderID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($folderID, true), gettype($folderID)), __LINE__);
        }
        $this->FolderID = $folderID;
        return $this;
    }
    /**
     * Get RestockAlert value
     * @return bool|null
     */
    public function getRestockAlert()
    {
        return $this->RestockAlert;
    }
    /**
     * Set RestockAlert value
     * @param bool $restockAlert
     * @return \StructType\SellingManagerProductDetailsType
     */
    public function setRestockAlert($restockAlert = null)
    {
        // validation for constraint: boolean
        if (!is_null($restockAlert) && !is_bool($restockAlert)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($restockAlert, true), gettype($restockAlert)), __LINE__);
        }
        $this->RestockAlert = $restockAlert;
        return $this;
    }
    /**
     * Get RestockThreshold value
     * @return int|null
     */
    public function getRestockThreshold()
    {
        return $this->RestockThreshold;
    }
    /**
     * Set RestockThreshold value
     * @param int $restockThreshold
     * @return \StructType\SellingManagerProductDetailsType
     */
    public function setRestockThreshold($restockThreshold = null)
    {
        // validation for constraint: int
        if (!is_null($restockThreshold) && !(is_int($restockThreshold) || ctype_digit($restockThreshold))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($restockThreshold, true), gettype($restockThreshold)), __LINE__);
        }
        $this->RestockThreshold = $restockThreshold;
        return $this;
    }
    /**
     * Get VendorInfo value
     * @return \StructType\SellingManagerVendorDetailsType|null
     */
    public function getVendorInfo()
    {
        return $this->VendorInfo;
    }
    /**
     * Set VendorInfo value
     * @param \StructType\SellingManagerVendorDetailsType $vendorInfo
     * @return \StructType\SellingManagerProductDetailsType
     */
    public function setVendorInfo(\StructType\SellingManagerVendorDetailsType $vendorInfo = null)
    {
        $this->VendorInfo = $vendorInfo;
        return $this;
    }
    /**
     * Get Note value
     * @return string|null
     */
    public function getNote()
    {
        return $this->Note;
    }
    /**
     * Set Note value
     * @param string $note
     * @return \StructType\SellingManagerProductDetailsType
     */
    public function setNote($note = null)
    {
        // validation for constraint: string
        if (!is_null($note) && !is_string($note)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($note, true), gettype($note)), __LINE__);
        }
        $this->Note = $note;
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
     * @return \StructType\SellingManagerProductDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
