<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MaximumUnpaidItemStrikesDurationDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>MaximumUnpaidItemStrikesDuration</b> container that is returned in <b>GeteBayDetails</b>. The <b>MaximumUnpaidItemStrikesDuration</b> container indicates the periods of time that can be used when evaluating how
 * many unpaid item strikes against a buyer during this given period will exclude the prospective buyer from purchasing the line item.
 * @subpackage Structs
 */
class MaximumUnpaidItemStrikesDurationDetailsType extends AbstractStructBase
{
    /**
     * The Period
     * Meta information extracted from the WSDL
     * - documentation: The period is the number of days (last 60 days, last 180 days, etc.) during which the buyer's unpaid item strikes are calculated. This is applicable only to sellers.
     * - minOccurs: 0
     * @var string
     */
    public $Period;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: The description of the period, such as 'month', 'quarter', or 'half a year'. The data in this field can be used as a label in your application's display. This is applicable only to sellers.
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MaximumUnpaidItemStrikesDurationDetailsType
     * @uses MaximumUnpaidItemStrikesDurationDetailsType::setPeriod()
     * @uses MaximumUnpaidItemStrikesDurationDetailsType::setDescription()
     * @uses MaximumUnpaidItemStrikesDurationDetailsType::setAny()
     * @param string $period
     * @param string $description
     * @param \DOMDocument $any
     */
    public function __construct($period = null, $description = null, \DOMDocument $any = null)
    {
        $this
            ->setPeriod($period)
            ->setDescription($description)
            ->setAny($any);
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
     * @return \StructType\MaximumUnpaidItemStrikesDurationDetailsType
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
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \StructType\MaximumUnpaidItemStrikesDurationDetailsType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
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
     * @return \StructType\MaximumUnpaidItemStrikesDurationDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
