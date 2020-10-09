<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ProductType extends AbstractStructBase
{
    /**
     * The CharacteristicsSet
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\CharacteristicsSetType
     */
    public $CharacteristicsSet;
    /**
     * The DetailsURL
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $DetailsURL;
    /**
     * The NumItems
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $NumItems;
    /**
     * The MinPrice
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $MinPrice;
    /**
     * The MaxPrice
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $MaxPrice;
    /**
     * The ProductReferenceID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ProductReferenceID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * The productID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - use: optional
     * @var string
     */
    public $productID;
    /**
     * The stockPhotoURL
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var string
     */
    public $stockPhotoURL;
    /**
     * The title
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var string
     */
    public $title;
    /**
     * Constructor method for ProductType
     * @uses ProductType::setCharacteristicsSet()
     * @uses ProductType::setDetailsURL()
     * @uses ProductType::setNumItems()
     * @uses ProductType::setMinPrice()
     * @uses ProductType::setMaxPrice()
     * @uses ProductType::setProductReferenceID()
     * @uses ProductType::setAny()
     * @uses ProductType::setProductID()
     * @uses ProductType::setStockPhotoURL()
     * @uses ProductType::setTitle()
     * @param \StructType\CharacteristicsSetType $characteristicsSet
     * @param string $detailsURL
     * @param int $numItems
     * @param \StructType\AmountType $minPrice
     * @param \StructType\AmountType $maxPrice
     * @param string $productReferenceID
     * @param \DOMDocument $any
     * @param string $productID
     * @param string $stockPhotoURL
     * @param string $title
     */
    public function __construct(\StructType\CharacteristicsSetType $characteristicsSet = null, $detailsURL = null, $numItems = null, \StructType\AmountType $minPrice = null, \StructType\AmountType $maxPrice = null, $productReferenceID = null, \DOMDocument $any = null, $productID = null, $stockPhotoURL = null, $title = null)
    {
        $this
            ->setCharacteristicsSet($characteristicsSet)
            ->setDetailsURL($detailsURL)
            ->setNumItems($numItems)
            ->setMinPrice($minPrice)
            ->setMaxPrice($maxPrice)
            ->setProductReferenceID($productReferenceID)
            ->setAny($any)
            ->setProductID($productID)
            ->setStockPhotoURL($stockPhotoURL)
            ->setTitle($title);
    }
    /**
     * Get CharacteristicsSet value
     * @return \StructType\CharacteristicsSetType|null
     */
    public function getCharacteristicsSet()
    {
        return $this->CharacteristicsSet;
    }
    /**
     * Set CharacteristicsSet value
     * @param \StructType\CharacteristicsSetType $characteristicsSet
     * @return \StructType\ProductType
     */
    public function setCharacteristicsSet(\StructType\CharacteristicsSetType $characteristicsSet = null)
    {
        $this->CharacteristicsSet = $characteristicsSet;
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
     * @return \StructType\ProductType
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
     * Get NumItems value
     * @return int|null
     */
    public function getNumItems()
    {
        return $this->NumItems;
    }
    /**
     * Set NumItems value
     * @param int $numItems
     * @return \StructType\ProductType
     */
    public function setNumItems($numItems = null)
    {
        // validation for constraint: int
        if (!is_null($numItems) && !(is_int($numItems) || ctype_digit($numItems))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numItems, true), gettype($numItems)), __LINE__);
        }
        $this->NumItems = $numItems;
        return $this;
    }
    /**
     * Get MinPrice value
     * @return \StructType\AmountType|null
     */
    public function getMinPrice()
    {
        return $this->MinPrice;
    }
    /**
     * Set MinPrice value
     * @param \StructType\AmountType $minPrice
     * @return \StructType\ProductType
     */
    public function setMinPrice(\StructType\AmountType $minPrice = null)
    {
        $this->MinPrice = $minPrice;
        return $this;
    }
    /**
     * Get MaxPrice value
     * @return \StructType\AmountType|null
     */
    public function getMaxPrice()
    {
        return $this->MaxPrice;
    }
    /**
     * Set MaxPrice value
     * @param \StructType\AmountType $maxPrice
     * @return \StructType\ProductType
     */
    public function setMaxPrice(\StructType\AmountType $maxPrice = null)
    {
        $this->MaxPrice = $maxPrice;
        return $this;
    }
    /**
     * Get ProductReferenceID value
     * @return string|null
     */
    public function getProductReferenceID()
    {
        return $this->ProductReferenceID;
    }
    /**
     * Set ProductReferenceID value
     * @param string $productReferenceID
     * @return \StructType\ProductType
     */
    public function setProductReferenceID($productReferenceID = null)
    {
        // validation for constraint: string
        if (!is_null($productReferenceID) && !is_string($productReferenceID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productReferenceID, true), gettype($productReferenceID)), __LINE__);
        }
        $this->ProductReferenceID = $productReferenceID;
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
     * @return \StructType\ProductType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
    /**
     * Get productID value
     * @return string|null
     */
    public function getProductID()
    {
        return $this->productID;
    }
    /**
     * Set productID value
     * @param string $productID
     * @return \StructType\ProductType
     */
    public function setProductID($productID = null)
    {
        // validation for constraint: string
        if (!is_null($productID) && !is_string($productID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productID, true), gettype($productID)), __LINE__);
        }
        $this->productID = $productID;
        return $this;
    }
    /**
     * Get stockPhotoURL value
     * @return string|null
     */
    public function getStockPhotoURL()
    {
        return $this->stockPhotoURL;
    }
    /**
     * Set stockPhotoURL value
     * @param string $stockPhotoURL
     * @return \StructType\ProductType
     */
    public function setStockPhotoURL($stockPhotoURL = null)
    {
        // validation for constraint: string
        if (!is_null($stockPhotoURL) && !is_string($stockPhotoURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stockPhotoURL, true), gettype($stockPhotoURL)), __LINE__);
        }
        $this->stockPhotoURL = $stockPhotoURL;
        return $this;
    }
    /**
     * Get title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * Set title value
     * @param string $title
     * @return \StructType\ProductType
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->title = $title;
        return $this;
    }
}
