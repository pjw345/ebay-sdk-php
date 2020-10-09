<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CatalogProductType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class CatalogProductType extends AbstractStructBase
{
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * The DetailsURL
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $DetailsURL;
    /**
     * The StockPhotoURL
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $StockPhotoURL;
    /**
     * The DisplayStockPhotos
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $DisplayStockPhotos;
    /**
     * The ItemCount
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $ItemCount;
    /**
     * The ProductReferenceID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $ProductReferenceID;
    /**
     * The AttributeSetID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $AttributeSetID;
    /**
     * The ItemSpecifics
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \ArrayType\NameValueListArrayType
     */
    public $ItemSpecifics;
    /**
     * The ReviewCount
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $ReviewCount;
    /**
     * The ReviewDetails
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\ReviewDetailsType
     */
    public $ReviewDetails;
    /**
     * The ProductState
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ProductState;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for CatalogProductType
     * @uses CatalogProductType::setTitle()
     * @uses CatalogProductType::setDetailsURL()
     * @uses CatalogProductType::setStockPhotoURL()
     * @uses CatalogProductType::setDisplayStockPhotos()
     * @uses CatalogProductType::setItemCount()
     * @uses CatalogProductType::setProductReferenceID()
     * @uses CatalogProductType::setAttributeSetID()
     * @uses CatalogProductType::setItemSpecifics()
     * @uses CatalogProductType::setReviewCount()
     * @uses CatalogProductType::setReviewDetails()
     * @uses CatalogProductType::setProductState()
     * @uses CatalogProductType::setAny()
     * @param string $title
     * @param string $detailsURL
     * @param string $stockPhotoURL
     * @param bool $displayStockPhotos
     * @param int $itemCount
     * @param int $productReferenceID
     * @param int $attributeSetID
     * @param \ArrayType\NameValueListArrayType $itemSpecifics
     * @param int $reviewCount
     * @param \StructType\ReviewDetailsType $reviewDetails
     * @param string $productState
     * @param \DOMDocument $any
     */
    public function __construct($title = null, $detailsURL = null, $stockPhotoURL = null, $displayStockPhotos = null, $itemCount = null, $productReferenceID = null, $attributeSetID = null, \ArrayType\NameValueListArrayType $itemSpecifics = null, $reviewCount = null, \StructType\ReviewDetailsType $reviewDetails = null, $productState = null, \DOMDocument $any = null)
    {
        $this
            ->setTitle($title)
            ->setDetailsURL($detailsURL)
            ->setStockPhotoURL($stockPhotoURL)
            ->setDisplayStockPhotos($displayStockPhotos)
            ->setItemCount($itemCount)
            ->setProductReferenceID($productReferenceID)
            ->setAttributeSetID($attributeSetID)
            ->setItemSpecifics($itemSpecifics)
            ->setReviewCount($reviewCount)
            ->setReviewDetails($reviewDetails)
            ->setProductState($productState)
            ->setAny($any);
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \StructType\CatalogProductType
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->Title = $title;
        return $this;
    }
    /**
     * Get DetailsURL value
     * @return string|null
     */
    public function getDetailsURL()
    {
        return $this->DetailsURL;
    }
    /**
     * Set DetailsURL value
     * @param string $detailsURL
     * @return \StructType\CatalogProductType
     */
    public function setDetailsURL($detailsURL = null)
    {
        // validation for constraint: string
        if (!is_null($detailsURL) && !is_string($detailsURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailsURL, true), gettype($detailsURL)), __LINE__);
        }
        $this->DetailsURL = $detailsURL;
        return $this;
    }
    /**
     * Get StockPhotoURL value
     * @return string|null
     */
    public function getStockPhotoURL()
    {
        return $this->StockPhotoURL;
    }
    /**
     * Set StockPhotoURL value
     * @param string $stockPhotoURL
     * @return \StructType\CatalogProductType
     */
    public function setStockPhotoURL($stockPhotoURL = null)
    {
        // validation for constraint: string
        if (!is_null($stockPhotoURL) && !is_string($stockPhotoURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stockPhotoURL, true), gettype($stockPhotoURL)), __LINE__);
        }
        $this->StockPhotoURL = $stockPhotoURL;
        return $this;
    }
    /**
     * Get DisplayStockPhotos value
     * @return bool|null
     */
    public function getDisplayStockPhotos()
    {
        return $this->DisplayStockPhotos;
    }
    /**
     * Set DisplayStockPhotos value
     * @param bool $displayStockPhotos
     * @return \StructType\CatalogProductType
     */
    public function setDisplayStockPhotos($displayStockPhotos = null)
    {
        // validation for constraint: boolean
        if (!is_null($displayStockPhotos) && !is_bool($displayStockPhotos)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($displayStockPhotos, true), gettype($displayStockPhotos)), __LINE__);
        }
        $this->DisplayStockPhotos = $displayStockPhotos;
        return $this;
    }
    /**
     * Get ItemCount value
     * @return int|null
     */
    public function getItemCount()
    {
        return $this->ItemCount;
    }
    /**
     * Set ItemCount value
     * @param int $itemCount
     * @return \StructType\CatalogProductType
     */
    public function setItemCount($itemCount = null)
    {
        // validation for constraint: int
        if (!is_null($itemCount) && !(is_int($itemCount) || ctype_digit($itemCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemCount, true), gettype($itemCount)), __LINE__);
        }
        $this->ItemCount = $itemCount;
        return $this;
    }
    /**
     * Get ProductReferenceID value
     * @return int|null
     */
    public function getProductReferenceID()
    {
        return $this->ProductReferenceID;
    }
    /**
     * Set ProductReferenceID value
     * @param int $productReferenceID
     * @return \StructType\CatalogProductType
     */
    public function setProductReferenceID($productReferenceID = null)
    {
        // validation for constraint: int
        if (!is_null($productReferenceID) && !(is_int($productReferenceID) || ctype_digit($productReferenceID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($productReferenceID, true), gettype($productReferenceID)), __LINE__);
        }
        $this->ProductReferenceID = $productReferenceID;
        return $this;
    }
    /**
     * Get AttributeSetID value
     * @return int|null
     */
    public function getAttributeSetID()
    {
        return $this->AttributeSetID;
    }
    /**
     * Set AttributeSetID value
     * @param int $attributeSetID
     * @return \StructType\CatalogProductType
     */
    public function setAttributeSetID($attributeSetID = null)
    {
        // validation for constraint: int
        if (!is_null($attributeSetID) && !(is_int($attributeSetID) || ctype_digit($attributeSetID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($attributeSetID, true), gettype($attributeSetID)), __LINE__);
        }
        $this->AttributeSetID = $attributeSetID;
        return $this;
    }
    /**
     * Get ItemSpecifics value
     * @return \ArrayType\NameValueListArrayType|null
     */
    public function getItemSpecifics()
    {
        return $this->ItemSpecifics;
    }
    /**
     * Set ItemSpecifics value
     * @param \ArrayType\NameValueListArrayType $itemSpecifics
     * @return \StructType\CatalogProductType
     */
    public function setItemSpecifics(\ArrayType\NameValueListArrayType $itemSpecifics = null)
    {
        $this->ItemSpecifics = $itemSpecifics;
        return $this;
    }
    /**
     * Get ReviewCount value
     * @return int|null
     */
    public function getReviewCount()
    {
        return $this->ReviewCount;
    }
    /**
     * Set ReviewCount value
     * @param int $reviewCount
     * @return \StructType\CatalogProductType
     */
    public function setReviewCount($reviewCount = null)
    {
        // validation for constraint: int
        if (!is_null($reviewCount) && !(is_int($reviewCount) || ctype_digit($reviewCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($reviewCount, true), gettype($reviewCount)), __LINE__);
        }
        $this->ReviewCount = $reviewCount;
        return $this;
    }
    /**
     * Get ReviewDetails value
     * @return \StructType\ReviewDetailsType|null
     */
    public function getReviewDetails()
    {
        return $this->ReviewDetails;
    }
    /**
     * Set ReviewDetails value
     * @param \StructType\ReviewDetailsType $reviewDetails
     * @return \StructType\CatalogProductType
     */
    public function setReviewDetails(\StructType\ReviewDetailsType $reviewDetails = null)
    {
        $this->ReviewDetails = $reviewDetails;
        return $this;
    }
    /**
     * Get ProductState value
     * @return string|null
     */
    public function getProductState()
    {
        return $this->ProductState;
    }
    /**
     * Set ProductState value
     * @uses \EnumType\ProductStateCodeType::valueIsValid()
     * @uses \EnumType\ProductStateCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $productState
     * @return \StructType\CatalogProductType
     */
    public function setProductState($productState = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ProductStateCodeType::valueIsValid($productState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ProductStateCodeType', is_array($productState) ? implode(', ', $productState) : var_export($productState, true), implode(', ', \EnumType\ProductStateCodeType::getValidValues())), __LINE__);
        }
        $this->ProductState = $productState;
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
     * @return \StructType\CatalogProductType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
