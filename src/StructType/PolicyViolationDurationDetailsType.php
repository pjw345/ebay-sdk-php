<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PolicyViolationDurationDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated, as the maximum number of policy violations for a buyer is no longer a valid Buyer Requirement at the account or listing level.
 * @subpackage Structs
 */
class PolicyViolationDurationDetailsType extends AbstractStructBase
{
    /**
     * The Period
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Period;
    /**
     * The Description
     * Meta information extracted from the WSDL
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
     * Constructor method for PolicyViolationDurationDetailsType
     * @uses PolicyViolationDurationDetailsType::setPeriod()
     * @uses PolicyViolationDurationDetailsType::setDescription()
     * @uses PolicyViolationDurationDetailsType::setAny()
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
     * @return \StructType\PolicyViolationDurationDetailsType
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
     * @return \StructType\PolicyViolationDurationDetailsType
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
     * @return \StructType\PolicyViolationDurationDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
