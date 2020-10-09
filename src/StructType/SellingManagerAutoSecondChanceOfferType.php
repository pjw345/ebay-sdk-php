<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerAutoSecondChanceOfferType StructType
 * Meta information extracted from the WSDL
 * - documentation: Defines the options available for an automated Second Chance Offer rule.
 * @subpackage Structs
 */
class SellingManagerAutoSecondChanceOfferType extends AbstractStructBase
{
    /**
     * The SecondChanceOfferCondition
     * Meta information extracted from the WSDL
     * - documentation: The condition under which a Second Chance Offer should be sent.
     * - minOccurs: 0
     * @var string
     */
    public $SecondChanceOfferCondition;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: Used when SecondChanceOfferCondition is equal to BidsGreaterThanAmount or BidsGreaterThanCostPlusAmount. Specifies the amount associated with the SecondChanceOfferCondition.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $Amount;
    /**
     * The ProfitPercent
     * Meta information extracted from the WSDL
     * - documentation: Used when SecondChanceOfferCondition is equal to BidsGreaterThanCostPlusPercentage to specify the amount of profit associated with the SecondChanceOfferCondition.
     * - minOccurs: 0
     * @var float
     */
    public $ProfitPercent;
    /**
     * The Duration
     * Meta information extracted from the WSDL
     * - documentation: Specifies the length of time the Second Chance Offer listing will be active. The recipient bidder has that much time to purchase the item or the offer expires.
     * - minOccurs: 0
     * @var string
     */
    public $Duration;
    /**
     * The ListingHoldInventoryLevel
     * Meta information extracted from the WSDL
     * - documentation: Do not list if inventory levels on the associated product are at or below the specified amount.
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
     * Constructor method for SellingManagerAutoSecondChanceOfferType
     * @uses SellingManagerAutoSecondChanceOfferType::setSecondChanceOfferCondition()
     * @uses SellingManagerAutoSecondChanceOfferType::setAmount()
     * @uses SellingManagerAutoSecondChanceOfferType::setProfitPercent()
     * @uses SellingManagerAutoSecondChanceOfferType::setDuration()
     * @uses SellingManagerAutoSecondChanceOfferType::setListingHoldInventoryLevel()
     * @uses SellingManagerAutoSecondChanceOfferType::setAny()
     * @param string $secondChanceOfferCondition
     * @param \StructType\AmountType $amount
     * @param float $profitPercent
     * @param string $duration
     * @param int $listingHoldInventoryLevel
     * @param \DOMDocument $any
     */
    public function __construct($secondChanceOfferCondition = null, \StructType\AmountType $amount = null, $profitPercent = null, $duration = null, $listingHoldInventoryLevel = null, \DOMDocument $any = null)
    {
        $this
            ->setSecondChanceOfferCondition($secondChanceOfferCondition)
            ->setAmount($amount)
            ->setProfitPercent($profitPercent)
            ->setDuration($duration)
            ->setListingHoldInventoryLevel($listingHoldInventoryLevel)
            ->setAny($any);
    }
    /**
     * Get SecondChanceOfferCondition value
     * @return string|null
     */
    public function getSecondChanceOfferCondition()
    {
        return $this->SecondChanceOfferCondition;
    }
    /**
     * Set SecondChanceOfferCondition value
     * @uses \EnumType\SellingManagerAutoSecondChanceOfferTypeCodeType::valueIsValid()
     * @uses \EnumType\SellingManagerAutoSecondChanceOfferTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $secondChanceOfferCondition
     * @return \StructType\SellingManagerAutoSecondChanceOfferType
     */
    public function setSecondChanceOfferCondition($secondChanceOfferCondition = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SellingManagerAutoSecondChanceOfferTypeCodeType::valueIsValid($secondChanceOfferCondition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SellingManagerAutoSecondChanceOfferTypeCodeType', is_array($secondChanceOfferCondition) ? implode(', ', $secondChanceOfferCondition) : var_export($secondChanceOfferCondition, true), implode(', ', \EnumType\SellingManagerAutoSecondChanceOfferTypeCodeType::getValidValues())), __LINE__);
        }
        $this->SecondChanceOfferCondition = $secondChanceOfferCondition;
        return $this;
    }
    /**
     * Get Amount value
     * @return \StructType\AmountType|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param \StructType\AmountType $amount
     * @return \StructType\SellingManagerAutoSecondChanceOfferType
     */
    public function setAmount(\StructType\AmountType $amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get ProfitPercent value
     * @return float|null
     */
    public function getProfitPercent()
    {
        return $this->ProfitPercent;
    }
    /**
     * Set ProfitPercent value
     * @param float $profitPercent
     * @return \StructType\SellingManagerAutoSecondChanceOfferType
     */
    public function setProfitPercent($profitPercent = null)
    {
        // validation for constraint: float
        if (!is_null($profitPercent) && !(is_float($profitPercent) || is_numeric($profitPercent))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($profitPercent, true), gettype($profitPercent)), __LINE__);
        }
        $this->ProfitPercent = $profitPercent;
        return $this;
    }
    /**
     * Get Duration value
     * @return string|null
     */
    public function getDuration()
    {
        return $this->Duration;
    }
    /**
     * Set Duration value
     * @uses \EnumType\SecondChanceOfferDurationCodeType::valueIsValid()
     * @uses \EnumType\SecondChanceOfferDurationCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $duration
     * @return \StructType\SellingManagerAutoSecondChanceOfferType
     */
    public function setDuration($duration = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SecondChanceOfferDurationCodeType::valueIsValid($duration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SecondChanceOfferDurationCodeType', is_array($duration) ? implode(', ', $duration) : var_export($duration, true), implode(', ', \EnumType\SecondChanceOfferDurationCodeType::getValidValues())), __LINE__);
        }
        $this->Duration = $duration;
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
     * @return \StructType\SellingManagerAutoSecondChanceOfferType
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
     * @return \StructType\SellingManagerAutoSecondChanceOfferType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
