<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlatRateInsuranceRangeCostType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated, as shipping insurance is no longer applicable or supported in eBay APIs.
 * @subpackage Structs
 */
class FlatRateInsuranceRangeCostType extends AbstractStructBase
{
    /**
     * The FlatRateInsuranceRange
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $FlatRateInsuranceRange;
    /**
     * The InsuranceCost
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $InsuranceCost;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for FlatRateInsuranceRangeCostType
     * @uses FlatRateInsuranceRangeCostType::setFlatRateInsuranceRange()
     * @uses FlatRateInsuranceRangeCostType::setInsuranceCost()
     * @uses FlatRateInsuranceRangeCostType::setAny()
     * @param string $flatRateInsuranceRange
     * @param \StructType\AmountType $insuranceCost
     * @param \DOMDocument $any
     */
    public function __construct($flatRateInsuranceRange = null, \StructType\AmountType $insuranceCost = null, \DOMDocument $any = null)
    {
        $this
            ->setFlatRateInsuranceRange($flatRateInsuranceRange)
            ->setInsuranceCost($insuranceCost)
            ->setAny($any);
    }
    /**
     * Get FlatRateInsuranceRange value
     * @return string|null
     */
    public function getFlatRateInsuranceRange()
    {
        return $this->FlatRateInsuranceRange;
    }
    /**
     * Set FlatRateInsuranceRange value
     * @uses \EnumType\FlatRateInsuranceRangeCodeType::valueIsValid()
     * @uses \EnumType\FlatRateInsuranceRangeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $flatRateInsuranceRange
     * @return \StructType\FlatRateInsuranceRangeCostType
     */
    public function setFlatRateInsuranceRange($flatRateInsuranceRange = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\FlatRateInsuranceRangeCodeType::valueIsValid($flatRateInsuranceRange)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\FlatRateInsuranceRangeCodeType', is_array($flatRateInsuranceRange) ? implode(', ', $flatRateInsuranceRange) : var_export($flatRateInsuranceRange, true), implode(', ', \EnumType\FlatRateInsuranceRangeCodeType::getValidValues())), __LINE__);
        }
        $this->FlatRateInsuranceRange = $flatRateInsuranceRange;
        return $this;
    }
    /**
     * Get InsuranceCost value
     * @return \StructType\AmountType|null
     */
    public function getInsuranceCost()
    {
        return $this->InsuranceCost;
    }
    /**
     * Set InsuranceCost value
     * @param \StructType\AmountType $insuranceCost
     * @return \StructType\FlatRateInsuranceRangeCostType
     */
    public function setInsuranceCost(\StructType\AmountType $insuranceCost = null)
    {
        $this->InsuranceCost = $insuranceCost;
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
     * @return \StructType\FlatRateInsuranceRangeCostType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
