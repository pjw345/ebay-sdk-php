<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerAutoRelistType StructType
 * Meta information extracted from the WSDL
 * - documentation: Provides information about an automated relisting rule. Automated relisting rules cannot be combined with automated listing rules. A template can have one set of information per automated relisting rule specified.
 * @subpackage Structs
 */
class SellingManagerAutoRelistType extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: The type of auto-relist rule for the item.
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The RelistCondition
     * Meta information extracted from the WSDL
     * - documentation: The condition under which relist occurs.
     * - minOccurs: 0
     * @var string
     */
    public $RelistCondition;
    /**
     * The RelistAfterDays
     * Meta information extracted from the WSDL
     * - documentation: Used when RelistCondition equals RelistAfterDaysHours; specifies the number days after the item ends that it should be relisted.
     * - minOccurs: 0
     * @var int
     */
    public $RelistAfterDays;
    /**
     * The RelistAfterHours
     * Meta information extracted from the WSDL
     * - documentation: Used when RelistCondition equals RelistAfterDaysHours; specifies the number hours after the item ends that it should be relisted.
     * - minOccurs: 0
     * @var int
     */
    public $RelistAfterHours;
    /**
     * The RelistAtSpecificTimeOfDay
     * Meta information extracted from the WSDL
     * - documentation: Used when RelistCondition equals RelistAtSpecificTimeOfDay; specifies the time of day the item should be relisted.
     * - minOccurs: 0
     * @var string
     */
    public $RelistAtSpecificTimeOfDay;
    /**
     * The BestOfferDetails
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether Best Offer should be enabled on the auto-relisted item.
     * - minOccurs: 0
     * @var \StructType\BestOfferDetailsType
     */
    public $BestOfferDetails;
    /**
     * The ListingHoldInventoryLevel
     * Meta information extracted from the WSDL
     * - documentation: Specifies that item is not listed if inventory levels on the associated product are at or below the specified level.
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
     * Constructor method for SellingManagerAutoRelistType
     * @uses SellingManagerAutoRelistType::setType()
     * @uses SellingManagerAutoRelistType::setRelistCondition()
     * @uses SellingManagerAutoRelistType::setRelistAfterDays()
     * @uses SellingManagerAutoRelistType::setRelistAfterHours()
     * @uses SellingManagerAutoRelistType::setRelistAtSpecificTimeOfDay()
     * @uses SellingManagerAutoRelistType::setBestOfferDetails()
     * @uses SellingManagerAutoRelistType::setListingHoldInventoryLevel()
     * @uses SellingManagerAutoRelistType::setAny()
     * @param string $type
     * @param string $relistCondition
     * @param int $relistAfterDays
     * @param int $relistAfterHours
     * @param string $relistAtSpecificTimeOfDay
     * @param \StructType\BestOfferDetailsType $bestOfferDetails
     * @param int $listingHoldInventoryLevel
     * @param \DOMDocument $any
     */
    public function __construct($type = null, $relistCondition = null, $relistAfterDays = null, $relistAfterHours = null, $relistAtSpecificTimeOfDay = null, \StructType\BestOfferDetailsType $bestOfferDetails = null, $listingHoldInventoryLevel = null, \DOMDocument $any = null)
    {
        $this
            ->setType($type)
            ->setRelistCondition($relistCondition)
            ->setRelistAfterDays($relistAfterDays)
            ->setRelistAfterHours($relistAfterHours)
            ->setRelistAtSpecificTimeOfDay($relistAtSpecificTimeOfDay)
            ->setBestOfferDetails($bestOfferDetails)
            ->setListingHoldInventoryLevel($listingHoldInventoryLevel)
            ->setAny($any);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \EnumType\SellingManagerAutoRelistTypeCodeType::valueIsValid()
     * @uses \EnumType\SellingManagerAutoRelistTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \StructType\SellingManagerAutoRelistType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SellingManagerAutoRelistTypeCodeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SellingManagerAutoRelistTypeCodeType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \EnumType\SellingManagerAutoRelistTypeCodeType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get RelistCondition value
     * @return string|null
     */
    public function getRelistCondition()
    {
        return $this->RelistCondition;
    }
    /**
     * Set RelistCondition value
     * @uses \EnumType\SellingManagerAutoRelistOptionCodeType::valueIsValid()
     * @uses \EnumType\SellingManagerAutoRelistOptionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $relistCondition
     * @return \StructType\SellingManagerAutoRelistType
     */
    public function setRelistCondition($relistCondition = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SellingManagerAutoRelistOptionCodeType::valueIsValid($relistCondition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SellingManagerAutoRelistOptionCodeType', is_array($relistCondition) ? implode(', ', $relistCondition) : var_export($relistCondition, true), implode(', ', \EnumType\SellingManagerAutoRelistOptionCodeType::getValidValues())), __LINE__);
        }
        $this->RelistCondition = $relistCondition;
        return $this;
    }
    /**
     * Get RelistAfterDays value
     * @return int|null
     */
    public function getRelistAfterDays()
    {
        return $this->RelistAfterDays;
    }
    /**
     * Set RelistAfterDays value
     * @param int $relistAfterDays
     * @return \StructType\SellingManagerAutoRelistType
     */
    public function setRelistAfterDays($relistAfterDays = null)
    {
        // validation for constraint: int
        if (!is_null($relistAfterDays) && !(is_int($relistAfterDays) || ctype_digit($relistAfterDays))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($relistAfterDays, true), gettype($relistAfterDays)), __LINE__);
        }
        $this->RelistAfterDays = $relistAfterDays;
        return $this;
    }
    /**
     * Get RelistAfterHours value
     * @return int|null
     */
    public function getRelistAfterHours()
    {
        return $this->RelistAfterHours;
    }
    /**
     * Set RelistAfterHours value
     * @param int $relistAfterHours
     * @return \StructType\SellingManagerAutoRelistType
     */
    public function setRelistAfterHours($relistAfterHours = null)
    {
        // validation for constraint: int
        if (!is_null($relistAfterHours) && !(is_int($relistAfterHours) || ctype_digit($relistAfterHours))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($relistAfterHours, true), gettype($relistAfterHours)), __LINE__);
        }
        $this->RelistAfterHours = $relistAfterHours;
        return $this;
    }
    /**
     * Get RelistAtSpecificTimeOfDay value
     * @return string|null
     */
    public function getRelistAtSpecificTimeOfDay()
    {
        return $this->RelistAtSpecificTimeOfDay;
    }
    /**
     * Set RelistAtSpecificTimeOfDay value
     * @param string $relistAtSpecificTimeOfDay
     * @return \StructType\SellingManagerAutoRelistType
     */
    public function setRelistAtSpecificTimeOfDay($relistAtSpecificTimeOfDay = null)
    {
        // validation for constraint: string
        if (!is_null($relistAtSpecificTimeOfDay) && !is_string($relistAtSpecificTimeOfDay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($relistAtSpecificTimeOfDay, true), gettype($relistAtSpecificTimeOfDay)), __LINE__);
        }
        $this->RelistAtSpecificTimeOfDay = $relistAtSpecificTimeOfDay;
        return $this;
    }
    /**
     * Get BestOfferDetails value
     * @return \StructType\BestOfferDetailsType|null
     */
    public function getBestOfferDetails()
    {
        return $this->BestOfferDetails;
    }
    /**
     * Set BestOfferDetails value
     * @param \StructType\BestOfferDetailsType $bestOfferDetails
     * @return \StructType\SellingManagerAutoRelistType
     */
    public function setBestOfferDetails(\StructType\BestOfferDetailsType $bestOfferDetails = null)
    {
        $this->BestOfferDetails = $bestOfferDetails;
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
     * @return \StructType\SellingManagerAutoRelistType
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
     * @return \StructType\SellingManagerAutoRelistType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
