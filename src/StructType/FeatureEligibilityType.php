<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeatureEligibilityType StructType
 * Meta information extracted from the WSDL
 * - documentation: Indicates whether the seller making the request can list with certain features. A seller's eligibility is determined by their Feedback score.
 * @subpackage Structs
 */
class FeatureEligibilityType extends AbstractStructBase
{
    /**
     * The QualifiesForBuyItNow
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the seller is eligible to create auction listings enabled with the 'Buy It Now' option. A value of <code>true</code> means that the seller is eligible; a value of <code>false</code> indicates that they are not
     * eligible.
     * - minOccurs: 0
     * @var bool
     */
    public $QualifiesForBuyItNow;
    /**
     * The QualifiesForBuyItNowMultiple
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the seller is eligible to specify the 'Buy It Now' option for multiple-quantity listings. A value of <code>true</code> means that the seller is eligible; a value of <code>false</code> indicates that they are not
     * eligible.
     * - minOccurs: 0
     * @var bool
     */
    public $QualifiesForBuyItNowMultiple;
    /**
     * The QualifiedForFixedPriceOneDayDuration
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the seller is eligible to create fixed-price listings with a one-day listing duration. A value of <code>true</code> means that the seller is eligible; a value of <code>false</code> indicates that the seller is not
     * eligible. Note that this field only controls user eligibility. The listing type and category must support this feature for this field to be applicable.
     * - minOccurs: 0
     * @var bool
     */
    public $QualifiedForFixedPriceOneDayDuration;
    /**
     * The QualifiesForVariations
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether or not the seller is eligible to create multiple-variation, fixed-price listings.
     * - minOccurs: 0
     * @var bool
     */
    public $QualifiesForVariations;
    /**
     * The QualifiedForAuctionOneDayDuration
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the seller is eligible to create an auction listing with a one-day duration. Limitation: the Adult-Only and Motor Vehicle categories do not support one-day auctions, so the seller cannot create one-day auction
     * listings in these categories, even if the seller has the eligibility.
     * - minOccurs: 0
     * @var bool
     */
    public $QualifiedForAuctionOneDayDuration;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for FeatureEligibilityType
     * @uses FeatureEligibilityType::setQualifiesForBuyItNow()
     * @uses FeatureEligibilityType::setQualifiesForBuyItNowMultiple()
     * @uses FeatureEligibilityType::setQualifiedForFixedPriceOneDayDuration()
     * @uses FeatureEligibilityType::setQualifiesForVariations()
     * @uses FeatureEligibilityType::setQualifiedForAuctionOneDayDuration()
     * @uses FeatureEligibilityType::setAny()
     * @param bool $qualifiesForBuyItNow
     * @param bool $qualifiesForBuyItNowMultiple
     * @param bool $qualifiedForFixedPriceOneDayDuration
     * @param bool $qualifiesForVariations
     * @param bool $qualifiedForAuctionOneDayDuration
     * @param \DOMDocument $any
     */
    public function __construct($qualifiesForBuyItNow = null, $qualifiesForBuyItNowMultiple = null, $qualifiedForFixedPriceOneDayDuration = null, $qualifiesForVariations = null, $qualifiedForAuctionOneDayDuration = null, \DOMDocument $any = null)
    {
        $this
            ->setQualifiesForBuyItNow($qualifiesForBuyItNow)
            ->setQualifiesForBuyItNowMultiple($qualifiesForBuyItNowMultiple)
            ->setQualifiedForFixedPriceOneDayDuration($qualifiedForFixedPriceOneDayDuration)
            ->setQualifiesForVariations($qualifiesForVariations)
            ->setQualifiedForAuctionOneDayDuration($qualifiedForAuctionOneDayDuration)
            ->setAny($any);
    }
    /**
     * Get QualifiesForBuyItNow value
     * @return bool|null
     */
    public function getQualifiesForBuyItNow()
    {
        return $this->QualifiesForBuyItNow;
    }
    /**
     * Set QualifiesForBuyItNow value
     * @param bool $qualifiesForBuyItNow
     * @return \StructType\FeatureEligibilityType
     */
    public function setQualifiesForBuyItNow($qualifiesForBuyItNow = null)
    {
        // validation for constraint: boolean
        if (!is_null($qualifiesForBuyItNow) && !is_bool($qualifiesForBuyItNow)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($qualifiesForBuyItNow, true), gettype($qualifiesForBuyItNow)), __LINE__);
        }
        $this->QualifiesForBuyItNow = $qualifiesForBuyItNow;
        return $this;
    }
    /**
     * Get QualifiesForBuyItNowMultiple value
     * @return bool|null
     */
    public function getQualifiesForBuyItNowMultiple()
    {
        return $this->QualifiesForBuyItNowMultiple;
    }
    /**
     * Set QualifiesForBuyItNowMultiple value
     * @param bool $qualifiesForBuyItNowMultiple
     * @return \StructType\FeatureEligibilityType
     */
    public function setQualifiesForBuyItNowMultiple($qualifiesForBuyItNowMultiple = null)
    {
        // validation for constraint: boolean
        if (!is_null($qualifiesForBuyItNowMultiple) && !is_bool($qualifiesForBuyItNowMultiple)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($qualifiesForBuyItNowMultiple, true), gettype($qualifiesForBuyItNowMultiple)), __LINE__);
        }
        $this->QualifiesForBuyItNowMultiple = $qualifiesForBuyItNowMultiple;
        return $this;
    }
    /**
     * Get QualifiedForFixedPriceOneDayDuration value
     * @return bool|null
     */
    public function getQualifiedForFixedPriceOneDayDuration()
    {
        return $this->QualifiedForFixedPriceOneDayDuration;
    }
    /**
     * Set QualifiedForFixedPriceOneDayDuration value
     * @param bool $qualifiedForFixedPriceOneDayDuration
     * @return \StructType\FeatureEligibilityType
     */
    public function setQualifiedForFixedPriceOneDayDuration($qualifiedForFixedPriceOneDayDuration = null)
    {
        // validation for constraint: boolean
        if (!is_null($qualifiedForFixedPriceOneDayDuration) && !is_bool($qualifiedForFixedPriceOneDayDuration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($qualifiedForFixedPriceOneDayDuration, true), gettype($qualifiedForFixedPriceOneDayDuration)), __LINE__);
        }
        $this->QualifiedForFixedPriceOneDayDuration = $qualifiedForFixedPriceOneDayDuration;
        return $this;
    }
    /**
     * Get QualifiesForVariations value
     * @return bool|null
     */
    public function getQualifiesForVariations()
    {
        return $this->QualifiesForVariations;
    }
    /**
     * Set QualifiesForVariations value
     * @param bool $qualifiesForVariations
     * @return \StructType\FeatureEligibilityType
     */
    public function setQualifiesForVariations($qualifiesForVariations = null)
    {
        // validation for constraint: boolean
        if (!is_null($qualifiesForVariations) && !is_bool($qualifiesForVariations)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($qualifiesForVariations, true), gettype($qualifiesForVariations)), __LINE__);
        }
        $this->QualifiesForVariations = $qualifiesForVariations;
        return $this;
    }
    /**
     * Get QualifiedForAuctionOneDayDuration value
     * @return bool|null
     */
    public function getQualifiedForAuctionOneDayDuration()
    {
        return $this->QualifiedForAuctionOneDayDuration;
    }
    /**
     * Set QualifiedForAuctionOneDayDuration value
     * @param bool $qualifiedForAuctionOneDayDuration
     * @return \StructType\FeatureEligibilityType
     */
    public function setQualifiedForAuctionOneDayDuration($qualifiedForAuctionOneDayDuration = null)
    {
        // validation for constraint: boolean
        if (!is_null($qualifiedForAuctionOneDayDuration) && !is_bool($qualifiedForAuctionOneDayDuration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($qualifiedForAuctionOneDayDuration, true), gettype($qualifiedForAuctionOneDayDuration)), __LINE__);
        }
        $this->QualifiedForAuctionOneDayDuration = $qualifiedForAuctionOneDayDuration;
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
     * @return \StructType\FeatureEligibilityType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
