<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerAutoListMinActiveItemsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Defines the options available for an automated listing rule that keeps a minimum number of items on the site.
 * @subpackage Structs
 */
class SellingManagerAutoListMinActiveItemsType extends AbstractStructBase
{
    /**
     * The MinActiveItemCount
     * Meta information extracted from the WSDL
     * - documentation: The minimum number of listings that should be active on the site.
     * - minOccurs: 0
     * @var int
     */
    public $MinActiveItemCount;
    /**
     * The ListTimeFrom
     * Meta information extracted from the WSDL
     * - documentation: The start time of the time interval during which new listings should start.
     * - minOccurs: 0
     * @var string
     */
    public $ListTimeFrom;
    /**
     * The ListTimeTo
     * Meta information extracted from the WSDL
     * - documentation: The end time of the time interval during which new listings should start.
     * - minOccurs: 0
     * @var string
     */
    public $ListTimeTo;
    /**
     * The SpacingIntervalInMinutes
     * Meta information extracted from the WSDL
     * - documentation: Provides a number of minutes for spacing start times of listings. Used when you list multiple items at the same time. Delays subsequent listings by the specified number of minutes.
     * - minOccurs: 0
     * @var int
     */
    public $SpacingIntervalInMinutes;
    /**
     * The ListingHoldInventoryLevel
     * Meta information extracted from the WSDL
     * - documentation: Sets a minimum inventory level for listings of associated products to occur.
     * - minOccurs: 0
     * @var int
     */
    public $ListingHoldInventoryLevel;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellingManagerAutoListMinActiveItemsType
     * @uses SellingManagerAutoListMinActiveItemsType::setMinActiveItemCount()
     * @uses SellingManagerAutoListMinActiveItemsType::setListTimeFrom()
     * @uses SellingManagerAutoListMinActiveItemsType::setListTimeTo()
     * @uses SellingManagerAutoListMinActiveItemsType::setSpacingIntervalInMinutes()
     * @uses SellingManagerAutoListMinActiveItemsType::setListingHoldInventoryLevel()
     * @uses SellingManagerAutoListMinActiveItemsType::setAny()
     * @param int $minActiveItemCount
     * @param string $listTimeFrom
     * @param string $listTimeTo
     * @param int $spacingIntervalInMinutes
     * @param int $listingHoldInventoryLevel
     * @param \DOMDocument $any
     */
    public function __construct($minActiveItemCount = null, $listTimeFrom = null, $listTimeTo = null, $spacingIntervalInMinutes = null, $listingHoldInventoryLevel = null, \DOMDocument $any = null)
    {
        $this
            ->setMinActiveItemCount($minActiveItemCount)
            ->setListTimeFrom($listTimeFrom)
            ->setListTimeTo($listTimeTo)
            ->setSpacingIntervalInMinutes($spacingIntervalInMinutes)
            ->setListingHoldInventoryLevel($listingHoldInventoryLevel)
            ->setAny($any);
    }
    /**
     * Get MinActiveItemCount value
     * @return int|null
     */
    public function getMinActiveItemCount()
    {
        return $this->MinActiveItemCount;
    }
    /**
     * Set MinActiveItemCount value
     * @param int $minActiveItemCount
     * @return \StructType\SellingManagerAutoListMinActiveItemsType
     */
    public function setMinActiveItemCount($minActiveItemCount = null)
    {
        // validation for constraint: int
        if (!is_null($minActiveItemCount) && !(is_int($minActiveItemCount) || ctype_digit($minActiveItemCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minActiveItemCount, true), gettype($minActiveItemCount)), __LINE__);
        }
        $this->MinActiveItemCount = $minActiveItemCount;
        return $this;
    }
    /**
     * Get ListTimeFrom value
     * @return string|null
     */
    public function getListTimeFrom()
    {
        return $this->ListTimeFrom;
    }
    /**
     * Set ListTimeFrom value
     * @param string $listTimeFrom
     * @return \StructType\SellingManagerAutoListMinActiveItemsType
     */
    public function setListTimeFrom($listTimeFrom = null)
    {
        // validation for constraint: string
        if (!is_null($listTimeFrom) && !is_string($listTimeFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($listTimeFrom, true), gettype($listTimeFrom)), __LINE__);
        }
        $this->ListTimeFrom = $listTimeFrom;
        return $this;
    }
    /**
     * Get ListTimeTo value
     * @return string|null
     */
    public function getListTimeTo()
    {
        return $this->ListTimeTo;
    }
    /**
     * Set ListTimeTo value
     * @param string $listTimeTo
     * @return \StructType\SellingManagerAutoListMinActiveItemsType
     */
    public function setListTimeTo($listTimeTo = null)
    {
        // validation for constraint: string
        if (!is_null($listTimeTo) && !is_string($listTimeTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($listTimeTo, true), gettype($listTimeTo)), __LINE__);
        }
        $this->ListTimeTo = $listTimeTo;
        return $this;
    }
    /**
     * Get SpacingIntervalInMinutes value
     * @return int|null
     */
    public function getSpacingIntervalInMinutes()
    {
        return $this->SpacingIntervalInMinutes;
    }
    /**
     * Set SpacingIntervalInMinutes value
     * @param int $spacingIntervalInMinutes
     * @return \StructType\SellingManagerAutoListMinActiveItemsType
     */
    public function setSpacingIntervalInMinutes($spacingIntervalInMinutes = null)
    {
        // validation for constraint: int
        if (!is_null($spacingIntervalInMinutes) && !(is_int($spacingIntervalInMinutes) || ctype_digit($spacingIntervalInMinutes))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($spacingIntervalInMinutes, true), gettype($spacingIntervalInMinutes)), __LINE__);
        }
        $this->SpacingIntervalInMinutes = $spacingIntervalInMinutes;
        return $this;
    }
    /**
     * Get ListingHoldInventoryLevel value
     * @return int|null
     */
    public function getListingHoldInventoryLevel()
    {
        return $this->ListingHoldInventoryLevel;
    }
    /**
     * Set ListingHoldInventoryLevel value
     * @param int $listingHoldInventoryLevel
     * @return \StructType\SellingManagerAutoListMinActiveItemsType
     */
    public function setListingHoldInventoryLevel($listingHoldInventoryLevel = null)
    {
        // validation for constraint: int
        if (!is_null($listingHoldInventoryLevel) && !(is_int($listingHoldInventoryLevel) || ctype_digit($listingHoldInventoryLevel))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($listingHoldInventoryLevel, true), gettype($listingHoldInventoryLevel)), __LINE__);
        }
        $this->ListingHoldInventoryLevel = $listingHoldInventoryLevel;
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
     * @return \StructType\SellingManagerAutoListMinActiveItemsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
