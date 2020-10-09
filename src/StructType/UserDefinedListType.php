<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserDefinedListType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the items, searches and sellers that the user has saved to this list using the "Add to list" feature. The name of the list is given by the "Name" element.
 * @subpackage Structs
 */
class UserDefinedListType extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: The user's chosen name for this list.
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The ItemCount
     * Meta information extracted from the WSDL
     * - documentation: The value in this field indicates the total number of items in the user-defined list. The number of <b>Item</b> nodes in the <b>ItemArray</b> should match this value.
     * - minOccurs: 0
     * @var int
     */
    public $ItemCount;
    /**
     * The FavoriteSearcheCount
     * Meta information extracted from the WSDL
     * - documentation: This field is not supported.
     * - minOccurs: 0
     * @var int
     */
    public $FavoriteSearcheCount;
    /**
     * The FavoriteSellerCount
     * Meta information extracted from the WSDL
     * - documentation: The value in this field indicates the total number of favorite sellers in the user-defined list. The number of <b>FavoriteSeller</b> nodes returned in the response should match this value.
     * - minOccurs: 0
     * @var int
     */
    public $FavoriteSellerCount;
    /**
     * The ItemArray
     * Meta information extracted from the WSDL
     * - documentation: An array of Items that the user has added to the user-defined list.
     * - minOccurs: 0
     * @var \ArrayType\ItemArrayType
     */
    public $ItemArray;
    /**
     * The FavoriteSearches
     * Meta information extracted from the WSDL
     * - documentation: An array of Favorite Searches that the user has added to the user-defined list.
     * - minOccurs: 0
     * @var \StructType\MyeBayFavoriteSearchListType
     */
    public $FavoriteSearches;
    /**
     * The FavoriteSellers
     * Meta information extracted from the WSDL
     * - documentation: An array of Favorite Sellers that the user has added to the user-defined list.
     * - minOccurs: 0
     * @var \StructType\MyeBayFavoriteSellerListType
     */
    public $FavoriteSellers;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for UserDefinedListType
     * @uses UserDefinedListType::setName()
     * @uses UserDefinedListType::setItemCount()
     * @uses UserDefinedListType::setFavoriteSearcheCount()
     * @uses UserDefinedListType::setFavoriteSellerCount()
     * @uses UserDefinedListType::setItemArray()
     * @uses UserDefinedListType::setFavoriteSearches()
     * @uses UserDefinedListType::setFavoriteSellers()
     * @uses UserDefinedListType::setAny()
     * @param string $name
     * @param int $itemCount
     * @param int $favoriteSearcheCount
     * @param int $favoriteSellerCount
     * @param \ArrayType\ItemArrayType $itemArray
     * @param \StructType\MyeBayFavoriteSearchListType $favoriteSearches
     * @param \StructType\MyeBayFavoriteSellerListType $favoriteSellers
     * @param \DOMDocument $any
     */
    public function __construct($name = null, $itemCount = null, $favoriteSearcheCount = null, $favoriteSellerCount = null, \ArrayType\ItemArrayType $itemArray = null, \StructType\MyeBayFavoriteSearchListType $favoriteSearches = null, \StructType\MyeBayFavoriteSellerListType $favoriteSellers = null, \DOMDocument $any = null)
    {
        $this
            ->setName($name)
            ->setItemCount($itemCount)
            ->setFavoriteSearcheCount($favoriteSearcheCount)
            ->setFavoriteSellerCount($favoriteSellerCount)
            ->setItemArray($itemArray)
            ->setFavoriteSearches($favoriteSearches)
            ->setFavoriteSellers($favoriteSellers)
            ->setAny($any);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\UserDefinedListType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
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
     * @return \StructType\UserDefinedListType
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
     * Get FavoriteSearcheCount value
     * @return int|null
     */
    public function getFavoriteSearcheCount()
    {
        return $this->FavoriteSearcheCount;
    }
    /**
     * Set FavoriteSearcheCount value
     * @param int $favoriteSearcheCount
     * @return \StructType\UserDefinedListType
     */
    public function setFavoriteSearcheCount($favoriteSearcheCount = null)
    {
        // validation for constraint: int
        if (!is_null($favoriteSearcheCount) && !(is_int($favoriteSearcheCount) || ctype_digit($favoriteSearcheCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($favoriteSearcheCount, true), gettype($favoriteSearcheCount)), __LINE__);
        }
        $this->FavoriteSearcheCount = $favoriteSearcheCount;
        return $this;
    }
    /**
     * Get FavoriteSellerCount value
     * @return int|null
     */
    public function getFavoriteSellerCount()
    {
        return $this->FavoriteSellerCount;
    }
    /**
     * Set FavoriteSellerCount value
     * @param int $favoriteSellerCount
     * @return \StructType\UserDefinedListType
     */
    public function setFavoriteSellerCount($favoriteSellerCount = null)
    {
        // validation for constraint: int
        if (!is_null($favoriteSellerCount) && !(is_int($favoriteSellerCount) || ctype_digit($favoriteSellerCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($favoriteSellerCount, true), gettype($favoriteSellerCount)), __LINE__);
        }
        $this->FavoriteSellerCount = $favoriteSellerCount;
        return $this;
    }
    /**
     * Get ItemArray value
     * @return \ArrayType\ItemArrayType|null
     */
    public function getItemArray()
    {
        return $this->ItemArray;
    }
    /**
     * Set ItemArray value
     * @param \ArrayType\ItemArrayType $itemArray
     * @return \StructType\UserDefinedListType
     */
    public function setItemArray(\ArrayType\ItemArrayType $itemArray = null)
    {
        $this->ItemArray = $itemArray;
        return $this;
    }
    /**
     * Get FavoriteSearches value
     * @return \StructType\MyeBayFavoriteSearchListType|null
     */
    public function getFavoriteSearches()
    {
        return $this->FavoriteSearches;
    }
    /**
     * Set FavoriteSearches value
     * @param \StructType\MyeBayFavoriteSearchListType $favoriteSearches
     * @return \StructType\UserDefinedListType
     */
    public function setFavoriteSearches(\StructType\MyeBayFavoriteSearchListType $favoriteSearches = null)
    {
        $this->FavoriteSearches = $favoriteSearches;
        return $this;
    }
    /**
     * Get FavoriteSellers value
     * @return \StructType\MyeBayFavoriteSellerListType|null
     */
    public function getFavoriteSellers()
    {
        return $this->FavoriteSellers;
    }
    /**
     * Set FavoriteSellers value
     * @param \StructType\MyeBayFavoriteSellerListType $favoriteSellers
     * @return \StructType\UserDefinedListType
     */
    public function setFavoriteSellers(\StructType\MyeBayFavoriteSellerListType $favoriteSellers = null)
    {
        $this->FavoriteSellers = $favoriteSellers;
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
     * @return \StructType\UserDefinedListType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
