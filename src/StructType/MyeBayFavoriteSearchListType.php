<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyeBayFavoriteSearchListType StructType
 * Meta information extracted from the WSDL
 * - documentation: A list of favorite searches a user has saved on the My eBay page.
 * @subpackage Structs
 */
class MyeBayFavoriteSearchListType extends AbstractStructBase
{
    /**
     * The TotalAvailable
     * Meta information extracted from the WSDL
     * - documentation: The total number of favorite searches saved.
     * - minOccurs: 0
     * @var int
     */
    public $TotalAvailable;
    /**
     * The FavoriteSearch
     * Meta information extracted from the WSDL
     * - documentation: A favorite search the user has saved, with a name and a search query.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\MyeBayFavoriteSearchType[]
     */
    public $FavoriteSearch;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MyeBayFavoriteSearchListType
     * @uses MyeBayFavoriteSearchListType::setTotalAvailable()
     * @uses MyeBayFavoriteSearchListType::setFavoriteSearch()
     * @uses MyeBayFavoriteSearchListType::setAny()
     * @param int $totalAvailable
     * @param \StructType\MyeBayFavoriteSearchType[] $favoriteSearch
     * @param \DOMDocument $any
     */
    public function __construct($totalAvailable = null, array $favoriteSearch = array(), \DOMDocument $any = null)
    {
        $this
            ->setTotalAvailable($totalAvailable)
            ->setFavoriteSearch($favoriteSearch)
            ->setAny($any);
    }
    /**
     * Get TotalAvailable value
     * @return int|null
     */
    public function getTotalAvailable()
    {
        return $this->TotalAvailable;
    }
    /**
     * Set TotalAvailable value
     * @param int $totalAvailable
     * @return \StructType\MyeBayFavoriteSearchListType
     */
    public function setTotalAvailable($totalAvailable = null)
    {
        // validation for constraint: int
        if (!is_null($totalAvailable) && !(is_int($totalAvailable) || ctype_digit($totalAvailable))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalAvailable, true), gettype($totalAvailable)), __LINE__);
        }
        $this->TotalAvailable = $totalAvailable;
        return $this;
    }
    /**
     * Get FavoriteSearch value
     * @return \StructType\MyeBayFavoriteSearchType[]|null
     */
    public function getFavoriteSearch()
    {
        return $this->FavoriteSearch;
    }
    /**
     * This method is responsible for validating the values passed to the setFavoriteSearch method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFavoriteSearch method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFavoriteSearchForArrayConstraintsFromSetFavoriteSearch(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $myeBayFavoriteSearchListTypeFavoriteSearchItem) {
            // validation for constraint: itemType
            if (!$myeBayFavoriteSearchListTypeFavoriteSearchItem instanceof \StructType\MyeBayFavoriteSearchType) {
                $invalidValues[] = is_object($myeBayFavoriteSearchListTypeFavoriteSearchItem) ? get_class($myeBayFavoriteSearchListTypeFavoriteSearchItem) : sprintf('%s(%s)', gettype($myeBayFavoriteSearchListTypeFavoriteSearchItem), var_export($myeBayFavoriteSearchListTypeFavoriteSearchItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FavoriteSearch property can only contain items of type \StructType\MyeBayFavoriteSearchType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set FavoriteSearch value
     * @throws \InvalidArgumentException
     * @param \StructType\MyeBayFavoriteSearchType[] $favoriteSearch
     * @return \StructType\MyeBayFavoriteSearchListType
     */
    public function setFavoriteSearch(array $favoriteSearch = array())
    {
        // validation for constraint: array
        if ('' !== ($favoriteSearchArrayErrorMessage = self::validateFavoriteSearchForArrayConstraintsFromSetFavoriteSearch($favoriteSearch))) {
            throw new \InvalidArgumentException($favoriteSearchArrayErrorMessage, __LINE__);
        }
        $this->FavoriteSearch = $favoriteSearch;
        return $this;
    }
    /**
     * Add item to FavoriteSearch value
     * @throws \InvalidArgumentException
     * @param \StructType\MyeBayFavoriteSearchType $item
     * @return \StructType\MyeBayFavoriteSearchListType
     */
    public function addToFavoriteSearch(\StructType\MyeBayFavoriteSearchType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\MyeBayFavoriteSearchType) {
            throw new \InvalidArgumentException(sprintf('The FavoriteSearch property can only contain items of type \StructType\MyeBayFavoriteSearchType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FavoriteSearch[] = $item;
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
     * @return \StructType\MyeBayFavoriteSearchListType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
