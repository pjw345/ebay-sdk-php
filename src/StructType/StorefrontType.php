<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StorefrontType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type defines the <b>Storefront</b> container, which can be used by eBay Stores sellers to list an item under two primary custom categories either by category ID or category name. A custom category is a category that was created
 * by a seller in their eBay store. This container is used by Add/Revise/Relist calls. <br/><br/> The <b>Storefront</b> container is also returned in <b>GetItem</b> and other Trading calls that retrieve Item data. <br/><br/> <span
 * class="tablenote"><b>Note: </b> This type is applicable only for eBay Store sellers. </span>
 * @subpackage Structs
 */
class StorefrontType extends AbstractStructBase
{
    /**
     * The StoreCategoryID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier of a primary custom category in which to list the item. A custom category is a category that the seller created in their eBay Store. eBay Store sellers can create up to three levels of custom categories for their
     * stores, but the API only supports root-level categories. <br> <br> To list an item using the categories in a seller's store, you must set this field to a root-level custom category or a custom category that has no child categories (subcategories). If
     * you attempt to list an item in a category that has subcategories, the call response contains a warning, and the item is listed in the 'Other' store category.
     * @var int
     */
    public $StoreCategoryID;
    /**
     * The StoreCategory2ID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for the secondary custom category in which to list the item. Set this field to a root-level custom category or a custom category that has no child categories (subcategories). <br> <br> The system resets the value to
     * 0 (None) in the following cases: <br> - The values of <b>StoreCategoryID</b> and <b>StoreCategory2ID</b> field are the same <br> - You specify <b>StoreCategory2ID</b> but not <b>StoreCategoryID</b> <br> <br> <br>In other words, <b>StoreCategoryID</b>
     * must be set to a valid custom category and be different from <b>StoreCategory2ID</b>.
     * @var int
     */
    public $StoreCategory2ID;
    /**
     * The StoreCategoryName
     * Meta information extracted from the WSDL
     * - documentation: Category name of a primary custom category in which to list the item. A custom category is a category that the seller created in their eBay Store. eBay Store sellers can create up to three levels of custom categories for their
     * stores, but the API only supports root-level categories. <br> <br> To list an item using a category name from a seller's store, you must set this field to a root-level custom category or a custom category that has no child categories (subcategories).
     * If you attempt to list an item in a category that has subcategories, the call response contains a warning, and the item is listed in the store category called 'Other'.
     * - minOccurs: 0
     * @var string
     */
    public $StoreCategoryName;
    /**
     * The StoreCategory2Name
     * Meta information extracted from the WSDL
     * - documentation: Name of the secondary custom category in which to list the item. Set this field to a root-level custom category or a custom category that has no child categories (subcategories). <br> <br> The system resets the value to 0 (None) in
     * the following cases: <br> - The values of <b>StoreCategoryName</b> and <b>StoreCategory2Name</b> field are the same <br> - You specify <b>StoreCategory2Name</b> but not <b>StoreCategoryName</b> <br> <br> <br>In other words <b>StoreCategoryName</b>
     * must be set to a valid custom category name and be different from <b>StoreCategory2Name</b>.
     * - minOccurs: 0
     * @var string
     */
    public $StoreCategory2Name;
    /**
     * The StoreURL
     * Meta information extracted from the WSDL
     * - documentation: The URL of the seller's eBay Stores page.
     * - minOccurs: 0
     * @var string
     */
    public $StoreURL;
    /**
     * The StoreName
     * Meta information extracted from the WSDL
     * - documentation: The name of the seller's eBay Store.
     * - minOccurs: 0
     * @var string
     */
    public $StoreName;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for StorefrontType
     * @uses StorefrontType::setStoreCategoryID()
     * @uses StorefrontType::setStoreCategory2ID()
     * @uses StorefrontType::setStoreCategoryName()
     * @uses StorefrontType::setStoreCategory2Name()
     * @uses StorefrontType::setStoreURL()
     * @uses StorefrontType::setStoreName()
     * @uses StorefrontType::setAny()
     * @param int $storeCategoryID
     * @param int $storeCategory2ID
     * @param string $storeCategoryName
     * @param string $storeCategory2Name
     * @param string $storeURL
     * @param string $storeName
     * @param \DOMDocument $any
     */
    public function __construct($storeCategoryID = null, $storeCategory2ID = null, $storeCategoryName = null, $storeCategory2Name = null, $storeURL = null, $storeName = null, \DOMDocument $any = null)
    {
        $this
            ->setStoreCategoryID($storeCategoryID)
            ->setStoreCategory2ID($storeCategory2ID)
            ->setStoreCategoryName($storeCategoryName)
            ->setStoreCategory2Name($storeCategory2Name)
            ->setStoreURL($storeURL)
            ->setStoreName($storeName)
            ->setAny($any);
    }
    /**
     * Get StoreCategoryID value
     * @return int|null
     */
    public function getStoreCategoryID()
    {
        return $this->StoreCategoryID;
    }
    /**
     * Set StoreCategoryID value
     * @param int $storeCategoryID
     * @return \StructType\StorefrontType
     */
    public function setStoreCategoryID($storeCategoryID = null)
    {
        // validation for constraint: int
        if (!is_null($storeCategoryID) && !(is_int($storeCategoryID) || ctype_digit($storeCategoryID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($storeCategoryID, true), gettype($storeCategoryID)), __LINE__);
        }
        $this->StoreCategoryID = $storeCategoryID;
        return $this;
    }
    /**
     * Get StoreCategory2ID value
     * @return int|null
     */
    public function getStoreCategory2ID()
    {
        return $this->StoreCategory2ID;
    }
    /**
     * Set StoreCategory2ID value
     * @param int $storeCategory2ID
     * @return \StructType\StorefrontType
     */
    public function setStoreCategory2ID($storeCategory2ID = null)
    {
        // validation for constraint: int
        if (!is_null($storeCategory2ID) && !(is_int($storeCategory2ID) || ctype_digit($storeCategory2ID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($storeCategory2ID, true), gettype($storeCategory2ID)), __LINE__);
        }
        $this->StoreCategory2ID = $storeCategory2ID;
        return $this;
    }
    /**
     * Get StoreCategoryName value
     * @return string|null
     */
    public function getStoreCategoryName()
    {
        return $this->StoreCategoryName;
    }
    /**
     * Set StoreCategoryName value
     * @param string $storeCategoryName
     * @return \StructType\StorefrontType
     */
    public function setStoreCategoryName($storeCategoryName = null)
    {
        // validation for constraint: string
        if (!is_null($storeCategoryName) && !is_string($storeCategoryName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($storeCategoryName, true), gettype($storeCategoryName)), __LINE__);
        }
        $this->StoreCategoryName = $storeCategoryName;
        return $this;
    }
    /**
     * Get StoreCategory2Name value
     * @return string|null
     */
    public function getStoreCategory2Name()
    {
        return $this->StoreCategory2Name;
    }
    /**
     * Set StoreCategory2Name value
     * @param string $storeCategory2Name
     * @return \StructType\StorefrontType
     */
    public function setStoreCategory2Name($storeCategory2Name = null)
    {
        // validation for constraint: string
        if (!is_null($storeCategory2Name) && !is_string($storeCategory2Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($storeCategory2Name, true), gettype($storeCategory2Name)), __LINE__);
        }
        $this->StoreCategory2Name = $storeCategory2Name;
        return $this;
    }
    /**
     * Get StoreURL value
     * @return string|null
     */
    public function getStoreURL()
    {
        return $this->StoreURL;
    }
    /**
     * Set StoreURL value
     * @param string $storeURL
     * @return \StructType\StorefrontType
     */
    public function setStoreURL($storeURL = null)
    {
        // validation for constraint: string
        if (!is_null($storeURL) && !is_string($storeURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($storeURL, true), gettype($storeURL)), __LINE__);
        }
        $this->StoreURL = $storeURL;
        return $this;
    }
    /**
     * Get StoreName value
     * @return string|null
     */
    public function getStoreName()
    {
        return $this->StoreName;
    }
    /**
     * Set StoreName value
     * @param string $storeName
     * @return \StructType\StorefrontType
     */
    public function setStoreName($storeName = null)
    {
        // validation for constraint: string
        if (!is_null($storeName) && !is_string($storeName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($storeName, true), gettype($storeName)), __LINE__);
        }
        $this->StoreName = $storeName;
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
     * @return \StructType\StorefrontType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
