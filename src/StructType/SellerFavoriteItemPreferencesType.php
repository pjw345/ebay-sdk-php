<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerFavoriteItemPreferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the data for the seller favorite item preferences, i.e. the manual or automatic selection criteria to display items for buyer's favourite seller opt in email marketing.
 * @subpackage Structs
 */
class SellerFavoriteItemPreferencesType extends AbstractStructBase
{
    /**
     * The SearchKeywords
     * Meta information extracted from the WSDL
     * - documentation: The keywords in the item title for the automatic item search criteria.
     * - minOccurs: 0
     * @var string
     */
    public $SearchKeywords;
    /**
     * The StoreCategoryID
     * Meta information extracted from the WSDL
     * - documentation: (For eBay Store owners only) The store custom category for the automatic item search criteria.
     * - minOccurs: 0
     * @var int
     */
    public $StoreCategoryID;
    /**
     * The ListingType
     * Meta information extracted from the WSDL
     * - documentation: The listing format (fixed price, auction, etc) for the automatic item search criteria.
     * - minOccurs: 0
     * @var string
     */
    public $ListingType;
    /**
     * The SearchSortOrder
     * Meta information extracted from the WSDL
     * - documentation: The sort order chosen from the standard ebay sorts for the automatic search criteria.
     * - minOccurs: 0
     * @var string
     */
    public $SearchSortOrder;
    /**
     * The MinPrice
     * Meta information extracted from the WSDL
     * - documentation: Specifies the lower limit of price range for the automatic search criteria.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $MinPrice;
    /**
     * The MaxPrice
     * Meta information extracted from the WSDL
     * - documentation: Specifies the upper limit of price range for the automatic search criteria.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $MaxPrice;
    /**
     * The FavoriteItemID
     * Meta information extracted from the WSDL
     * - documentation: Specifies the list of favorite items. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $FavoriteItemID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellerFavoriteItemPreferencesType
     * @uses SellerFavoriteItemPreferencesType::setSearchKeywords()
     * @uses SellerFavoriteItemPreferencesType::setStoreCategoryID()
     * @uses SellerFavoriteItemPreferencesType::setListingType()
     * @uses SellerFavoriteItemPreferencesType::setSearchSortOrder()
     * @uses SellerFavoriteItemPreferencesType::setMinPrice()
     * @uses SellerFavoriteItemPreferencesType::setMaxPrice()
     * @uses SellerFavoriteItemPreferencesType::setFavoriteItemID()
     * @uses SellerFavoriteItemPreferencesType::setAny()
     * @param string $searchKeywords
     * @param int $storeCategoryID
     * @param string $listingType
     * @param string $searchSortOrder
     * @param \StructType\AmountType $minPrice
     * @param \StructType\AmountType $maxPrice
     * @param string[] $favoriteItemID
     * @param \DOMDocument $any
     */
    public function __construct($searchKeywords = null, $storeCategoryID = null, $listingType = null, $searchSortOrder = null, \StructType\AmountType $minPrice = null, \StructType\AmountType $maxPrice = null, array $favoriteItemID = array(), \DOMDocument $any = null)
    {
        $this
            ->setSearchKeywords($searchKeywords)
            ->setStoreCategoryID($storeCategoryID)
            ->setListingType($listingType)
            ->setSearchSortOrder($searchSortOrder)
            ->setMinPrice($minPrice)
            ->setMaxPrice($maxPrice)
            ->setFavoriteItemID($favoriteItemID)
            ->setAny($any);
    }
    /**
     * Get SearchKeywords value
     * @return string|null
     */
    public function getSearchKeywords()
    {
        return $this->SearchKeywords;
    }
    /**
     * Set SearchKeywords value
     * @param string $searchKeywords
     * @return \StructType\SellerFavoriteItemPreferencesType
     */
    public function setSearchKeywords($searchKeywords = null)
    {
        // validation for constraint: string
        if (!is_null($searchKeywords) && !is_string($searchKeywords)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchKeywords, true), gettype($searchKeywords)), __LINE__);
        }
        $this->SearchKeywords = $searchKeywords;
        return $this;
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
     * @return \StructType\SellerFavoriteItemPreferencesType
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
     * Get ListingType value
     * @return string|null
     */
    public function getListingType()
    {
        return $this->ListingType;
    }
    /**
     * Set ListingType value
     * @uses \EnumType\ListingTypeCodeType::valueIsValid()
     * @uses \EnumType\ListingTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $listingType
     * @return \StructType\SellerFavoriteItemPreferencesType
     */
    public function setListingType($listingType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ListingTypeCodeType::valueIsValid($listingType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ListingTypeCodeType', is_array($listingType) ? implode(', ', $listingType) : var_export($listingType, true), implode(', ', \EnumType\ListingTypeCodeType::getValidValues())), __LINE__);
        }
        $this->ListingType = $listingType;
        return $this;
    }
    /**
     * Get SearchSortOrder value
     * @return string|null
     */
    public function getSearchSortOrder()
    {
        return $this->SearchSortOrder;
    }
    /**
     * Set SearchSortOrder value
     * @uses \EnumType\StoreItemListSortOrderCodeType::valueIsValid()
     * @uses \EnumType\StoreItemListSortOrderCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $searchSortOrder
     * @return \StructType\SellerFavoriteItemPreferencesType
     */
    public function setSearchSortOrder($searchSortOrder = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\StoreItemListSortOrderCodeType::valueIsValid($searchSortOrder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\StoreItemListSortOrderCodeType', is_array($searchSortOrder) ? implode(', ', $searchSortOrder) : var_export($searchSortOrder, true), implode(', ', \EnumType\StoreItemListSortOrderCodeType::getValidValues())), __LINE__);
        }
        $this->SearchSortOrder = $searchSortOrder;
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
     * @return \StructType\SellerFavoriteItemPreferencesType
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
     * @return \StructType\SellerFavoriteItemPreferencesType
     */
    public function setMaxPrice(\StructType\AmountType $maxPrice = null)
    {
        $this->MaxPrice = $maxPrice;
        return $this;
    }
    /**
     * Get FavoriteItemID value
     * @return string[]|null
     */
    public function getFavoriteItemID()
    {
        return $this->FavoriteItemID;
    }
    /**
     * This method is responsible for validating the values passed to the setFavoriteItemID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFavoriteItemID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFavoriteItemIDForArrayConstraintsFromSetFavoriteItemID(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sellerFavoriteItemPreferencesTypeFavoriteItemIDItem) {
            // validation for constraint: itemType
            if (!is_string($sellerFavoriteItemPreferencesTypeFavoriteItemIDItem)) {
                $invalidValues[] = is_object($sellerFavoriteItemPreferencesTypeFavoriteItemIDItem) ? get_class($sellerFavoriteItemPreferencesTypeFavoriteItemIDItem) : sprintf('%s(%s)', gettype($sellerFavoriteItemPreferencesTypeFavoriteItemIDItem), var_export($sellerFavoriteItemPreferencesTypeFavoriteItemIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FavoriteItemID property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set FavoriteItemID value
     * @throws \InvalidArgumentException
     * @param string[] $favoriteItemID
     * @return \StructType\SellerFavoriteItemPreferencesType
     */
    public function setFavoriteItemID(array $favoriteItemID = array())
    {
        // validation for constraint: array
        if ('' !== ($favoriteItemIDArrayErrorMessage = self::validateFavoriteItemIDForArrayConstraintsFromSetFavoriteItemID($favoriteItemID))) {
            throw new \InvalidArgumentException($favoriteItemIDArrayErrorMessage, __LINE__);
        }
        $this->FavoriteItemID = $favoriteItemID;
        return $this;
    }
    /**
     * Add item to FavoriteItemID value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\SellerFavoriteItemPreferencesType
     */
    public function addToFavoriteItemID($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The FavoriteItemID property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FavoriteItemID[] = $item;
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
     * @return \StructType\SellerFavoriteItemPreferencesType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
