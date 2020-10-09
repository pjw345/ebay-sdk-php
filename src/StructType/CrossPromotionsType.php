<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrossPromotionsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class CrossPromotionsType extends AbstractStructBase
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The PrimaryScheme
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $PrimaryScheme;
    /**
     * The PromotionMethod
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $PromotionMethod;
    /**
     * The SellerID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $SellerID;
    /**
     * The ShippingDiscount
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var bool
     */
    public $ShippingDiscount;
    /**
     * The StoreName
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $StoreName;
    /**
     * The PromotedItem
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\PromotedItemType[]
     */
    public $PromotedItem;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for CrossPromotionsType
     * @uses CrossPromotionsType::setItemID()
     * @uses CrossPromotionsType::setPrimaryScheme()
     * @uses CrossPromotionsType::setPromotionMethod()
     * @uses CrossPromotionsType::setSellerID()
     * @uses CrossPromotionsType::setShippingDiscount()
     * @uses CrossPromotionsType::setStoreName()
     * @uses CrossPromotionsType::setPromotedItem()
     * @uses CrossPromotionsType::setAny()
     * @param string $itemID
     * @param string $primaryScheme
     * @param string $promotionMethod
     * @param string $sellerID
     * @param bool $shippingDiscount
     * @param string $storeName
     * @param \StructType\PromotedItemType[] $promotedItem
     * @param \DOMDocument $any
     */
    public function __construct($itemID = null, $primaryScheme = null, $promotionMethod = null, $sellerID = null, $shippingDiscount = null, $storeName = null, array $promotedItem = array(), \DOMDocument $any = null)
    {
        $this
            ->setItemID($itemID)
            ->setPrimaryScheme($primaryScheme)
            ->setPromotionMethod($promotionMethod)
            ->setSellerID($sellerID)
            ->setShippingDiscount($shippingDiscount)
            ->setStoreName($storeName)
            ->setPromotedItem($promotedItem)
            ->setAny($any);
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
     * @return \StructType\CrossPromotionsType
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
     * Get PrimaryScheme value
     * @return string|null
     */
    public function getPrimaryScheme()
    {
        return $this->PrimaryScheme;
    }
    /**
     * Set PrimaryScheme value
     * @uses \EnumType\PromotionSchemeCodeType::valueIsValid()
     * @uses \EnumType\PromotionSchemeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $primaryScheme
     * @return \StructType\CrossPromotionsType
     */
    public function setPrimaryScheme($primaryScheme = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PromotionSchemeCodeType::valueIsValid($primaryScheme)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\PromotionSchemeCodeType', is_array($primaryScheme) ? implode(', ', $primaryScheme) : var_export($primaryScheme, true), implode(', ', \EnumType\PromotionSchemeCodeType::getValidValues())), __LINE__);
        }
        $this->PrimaryScheme = $primaryScheme;
        return $this;
    }
    /**
     * Get PromotionMethod value
     * @return string|null
     */
    public function getPromotionMethod()
    {
        return $this->PromotionMethod;
    }
    /**
     * Set PromotionMethod value
     * @uses \EnumType\PromotionMethodCodeType::valueIsValid()
     * @uses \EnumType\PromotionMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $promotionMethod
     * @return \StructType\CrossPromotionsType
     */
    public function setPromotionMethod($promotionMethod = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PromotionMethodCodeType::valueIsValid($promotionMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\PromotionMethodCodeType', is_array($promotionMethod) ? implode(', ', $promotionMethod) : var_export($promotionMethod, true), implode(', ', \EnumType\PromotionMethodCodeType::getValidValues())), __LINE__);
        }
        $this->PromotionMethod = $promotionMethod;
        return $this;
    }
    /**
     * Get SellerID value
     * @return string|null
     */
    public function getSellerID()
    {
        return $this->SellerID;
    }
    /**
     * Set SellerID value
     * @param string $sellerID
     * @return \StructType\CrossPromotionsType
     */
    public function setSellerID($sellerID = null)
    {
        // validation for constraint: string
        if (!is_null($sellerID) && !is_string($sellerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerID, true), gettype($sellerID)), __LINE__);
        }
        $this->SellerID = $sellerID;
        return $this;
    }
    /**
     * Get ShippingDiscount value
     * @return bool|null
     */
    public function getShippingDiscount()
    {
        return $this->ShippingDiscount;
    }
    /**
     * Set ShippingDiscount value
     * @param bool $shippingDiscount
     * @return \StructType\CrossPromotionsType
     */
    public function setShippingDiscount($shippingDiscount = null)
    {
        // validation for constraint: boolean
        if (!is_null($shippingDiscount) && !is_bool($shippingDiscount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($shippingDiscount, true), gettype($shippingDiscount)), __LINE__);
        }
        $this->ShippingDiscount = $shippingDiscount;
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
     * @return \StructType\CrossPromotionsType
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
     * Get PromotedItem value
     * @return \StructType\PromotedItemType[]|null
     */
    public function getPromotedItem()
    {
        return $this->PromotedItem;
    }
    /**
     * This method is responsible for validating the values passed to the setPromotedItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPromotedItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePromotedItemForArrayConstraintsFromSetPromotedItem(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $crossPromotionsTypePromotedItemItem) {
            // validation for constraint: itemType
            if (!$crossPromotionsTypePromotedItemItem instanceof \StructType\PromotedItemType) {
                $invalidValues[] = is_object($crossPromotionsTypePromotedItemItem) ? get_class($crossPromotionsTypePromotedItemItem) : sprintf('%s(%s)', gettype($crossPromotionsTypePromotedItemItem), var_export($crossPromotionsTypePromotedItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PromotedItem property can only contain items of type \StructType\PromotedItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set PromotedItem value
     * @throws \InvalidArgumentException
     * @param \StructType\PromotedItemType[] $promotedItem
     * @return \StructType\CrossPromotionsType
     */
    public function setPromotedItem(array $promotedItem = array())
    {
        // validation for constraint: array
        if ('' !== ($promotedItemArrayErrorMessage = self::validatePromotedItemForArrayConstraintsFromSetPromotedItem($promotedItem))) {
            throw new \InvalidArgumentException($promotedItemArrayErrorMessage, __LINE__);
        }
        $this->PromotedItem = $promotedItem;
        return $this;
    }
    /**
     * Add item to PromotedItem value
     * @throws \InvalidArgumentException
     * @param \StructType\PromotedItemType $item
     * @return \StructType\CrossPromotionsType
     */
    public function addToPromotedItem(\StructType\PromotedItemType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PromotedItemType) {
            throw new \InvalidArgumentException(sprintf('The PromotedItem property can only contain items of type \StructType\PromotedItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PromotedItem[] = $item;
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
     * @return \StructType\CrossPromotionsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
