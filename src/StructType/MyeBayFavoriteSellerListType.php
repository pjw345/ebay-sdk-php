<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyeBayFavoriteSellerListType StructType
 * Meta information extracted from the WSDL
 * - documentation: A list of favorite sellers the user has saved on the My eBay page.
 * @subpackage Structs
 */
class MyeBayFavoriteSellerListType extends AbstractStructBase
{
    /**
     * The TotalAvailable
     * Meta information extracted from the WSDL
     * - documentation: The total number of favorite sellers saved.
     * - minOccurs: 0
     * @var int
     */
    public $TotalAvailable;
    /**
     * The FavoriteSeller
     * Meta information extracted from the WSDL
     * - documentation: A favorite seller the user has saved, with a user ID and store name.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\MyeBayFavoriteSellerType[]
     */
    public $FavoriteSeller;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MyeBayFavoriteSellerListType
     * @uses MyeBayFavoriteSellerListType::setTotalAvailable()
     * @uses MyeBayFavoriteSellerListType::setFavoriteSeller()
     * @uses MyeBayFavoriteSellerListType::setAny()
     * @param int $totalAvailable
     * @param \StructType\MyeBayFavoriteSellerType[] $favoriteSeller
     * @param \DOMDocument $any
     */
    public function __construct($totalAvailable = null, array $favoriteSeller = array(), \DOMDocument $any = null)
    {
        $this
            ->setTotalAvailable($totalAvailable)
            ->setFavoriteSeller($favoriteSeller)
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
     * @return \StructType\MyeBayFavoriteSellerListType
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
     * Get FavoriteSeller value
     * @return \StructType\MyeBayFavoriteSellerType[]|null
     */
    public function getFavoriteSeller()
    {
        return $this->FavoriteSeller;
    }
    /**
     * This method is responsible for validating the values passed to the setFavoriteSeller method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFavoriteSeller method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFavoriteSellerForArrayConstraintsFromSetFavoriteSeller(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $myeBayFavoriteSellerListTypeFavoriteSellerItem) {
            // validation for constraint: itemType
            if (!$myeBayFavoriteSellerListTypeFavoriteSellerItem instanceof \StructType\MyeBayFavoriteSellerType) {
                $invalidValues[] = is_object($myeBayFavoriteSellerListTypeFavoriteSellerItem) ? get_class($myeBayFavoriteSellerListTypeFavoriteSellerItem) : sprintf('%s(%s)', gettype($myeBayFavoriteSellerListTypeFavoriteSellerItem), var_export($myeBayFavoriteSellerListTypeFavoriteSellerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FavoriteSeller property can only contain items of type \StructType\MyeBayFavoriteSellerType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set FavoriteSeller value
     * @throws \InvalidArgumentException
     * @param \StructType\MyeBayFavoriteSellerType[] $favoriteSeller
     * @return \StructType\MyeBayFavoriteSellerListType
     */
    public function setFavoriteSeller(array $favoriteSeller = array())
    {
        // validation for constraint: array
        if ('' !== ($favoriteSellerArrayErrorMessage = self::validateFavoriteSellerForArrayConstraintsFromSetFavoriteSeller($favoriteSeller))) {
            throw new \InvalidArgumentException($favoriteSellerArrayErrorMessage, __LINE__);
        }
        $this->FavoriteSeller = $favoriteSeller;
        return $this;
    }
    /**
     * Add item to FavoriteSeller value
     * @throws \InvalidArgumentException
     * @param \StructType\MyeBayFavoriteSellerType $item
     * @return \StructType\MyeBayFavoriteSellerListType
     */
    public function addToFavoriteSeller(\StructType\MyeBayFavoriteSellerType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\MyeBayFavoriteSellerType) {
            throw new \InvalidArgumentException(sprintf('The FavoriteSeller property can only contain items of type \StructType\MyeBayFavoriteSellerType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FavoriteSeller[] = $item;
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
     * @return \StructType\MyeBayFavoriteSellerListType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
