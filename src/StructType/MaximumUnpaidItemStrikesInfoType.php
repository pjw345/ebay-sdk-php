<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MaximumUnpaidItemStrikesInfoType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>MaximumUnpaidItemStrikesInfo</b> container, which is used by the seller as a mechanism to block prospective buyers who have unpaid item strikes on their account exceeding the value set in the <b>Count</b> field
 * during a specified time period (set in the <b>Period</b> field).
 * @subpackage Structs
 */
class MaximumUnpaidItemStrikesInfoType extends AbstractStructBase
{
    /**
     * The Count
     * Meta information extracted from the WSDL
     * - documentation: This integer value sets the maximum number of unpaid item strikes that a prospective buyer is allowed to have during a specified time period (<b>MaximumUnpaidItemStrikesInfo.Period</b>) before being blocked from buying/bidding on the
     * item. <br><br> To retrieve a list of allowed values for this field, the seller should call <b>GeteBayDetails</b>, including <b>BuyerRequirementDetails</b> in the <b>DetailName</b> field of the request, and then look for the
     * <b>BuyerRequirementDetails.MaximumUnpaidItemStrikesInfo.MaximumUnpaidItemStrikesCount.Count</b> fields in the response. <br>
     * - minOccurs: 0
     * @var int
     */
    public $Count;
    /**
     * The Period
     * Meta information extracted from the WSDL
     * - documentation: This enumerated value defines the length of time over which a prospective buyer's unpaid item strikes will be counted. If the prospective buyer's number of unpaid item strikes during this defined period exceeds the value set in the
     * <b>Count</b> field, that prospective buyer is blocked from buying/bidding on the item. <br/><br/> If the <b>Count</b> value is 2, and the specified <b>Period</b> is 'Days_30' (counting back 30 days from the present day), any prospective buyer that
     * has had three or more unpaid item strikes is blocked from buying/bidding on the item. <br>
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
     * Constructor method for MaximumUnpaidItemStrikesInfoType
     * @uses MaximumUnpaidItemStrikesInfoType::setCount()
     * @uses MaximumUnpaidItemStrikesInfoType::setPeriod()
     * @uses MaximumUnpaidItemStrikesInfoType::setAny()
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
     * @return \StructType\MaximumUnpaidItemStrikesInfoType
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
     * @return \StructType\MaximumUnpaidItemStrikesInfoType
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
     * @return \StructType\MaximumUnpaidItemStrikesInfoType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
