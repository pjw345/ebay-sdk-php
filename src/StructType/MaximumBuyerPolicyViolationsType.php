<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MaximumBuyerPolicyViolationsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated as sellers can no longer set a buyer policy violation threshold Buyer Requirement at the listing-level in Add/Revise/Relist calls.
 * @subpackage Structs
 */
class MaximumBuyerPolicyViolationsType extends AbstractStructBase
{
    /**
     * The Count
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $Count;
    /**
     * The Period
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Period;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MaximumBuyerPolicyViolationsType
     * @uses MaximumBuyerPolicyViolationsType::setCount()
     * @uses MaximumBuyerPolicyViolationsType::setPeriod()
     * @uses MaximumBuyerPolicyViolationsType::setAny()
     * @param int $count
     * @param string $period
     * @param \DOMDocument $any
     */
    public function __construct($count = null, $period = null, \DOMDocument $any = null)
    {
        $this
            ->setCount($count)
            ->setPeriod($period)
            ->setAny($any);
    }
    /**
     * Get Count value
     * @return int|null
     */
    public function getCount()
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param int $count
     * @return \StructType\MaximumBuyerPolicyViolationsType
     */
    public function setCount($count = null)
    {
        // validation for constraint: int
        if (!is_null($count) && !(is_int($count) || ctype_digit($count))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($count, true), gettype($count)), __LINE__);
        }
        $this->Count = $count;
        return $this;
    }
    /**
     * Get Period value
     * @return string|null
     */
    public function getPeriod()
    {
        return $this->Period;
    }
    /**
     * Set Period value
     * @uses \EnumType\PeriodCodeType::valueIsValid()
     * @uses \EnumType\PeriodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $period
     * @return \StructType\MaximumBuyerPolicyViolationsType
     */
    public function setPeriod($period = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PeriodCodeType::valueIsValid($period)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\PeriodCodeType', is_array($period) ? implode(', ', $period) : var_export($period, true), implode(', ', \EnumType\PeriodCodeType::getValidValues())), __LINE__);
        }
        $this->Period = $period;
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
     * @return \StructType\MaximumBuyerPolicyViolationsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
