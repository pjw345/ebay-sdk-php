<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TimeRangeType StructType
 * Meta information extracted from the WSDL
 * - documentation: Specifies the Date range.
 * @subpackage Structs
 */
class TimeRangeType extends AbstractStructBase
{
    /**
     * The TimeFrom
     * Meta information extracted from the WSDL
     * - documentation: Specifies the earliest (oldest) date to be used in a date range.
     * - minOccurs: 0
     * @var string
     */
    public $TimeFrom;
    /**
     * The TimeTo
     * Meta information extracted from the WSDL
     * - documentation: Specifies the latest (most recent) date to be used in a date range.
     * - minOccurs: 0
     * @var string
     */
    public $TimeTo;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for TimeRangeType
     * @uses TimeRangeType::setTimeFrom()
     * @uses TimeRangeType::setTimeTo()
     * @uses TimeRangeType::setAny()
     * @param string $timeFrom
     * @param string $timeTo
     * @param \DOMDocument $any
     */
    public function __construct($timeFrom = null, $timeTo = null, \DOMDocument $any = null)
    {
        $this
            ->setTimeFrom($timeFrom)
            ->setTimeTo($timeTo)
            ->setAny($any);
    }
    /**
     * Get TimeFrom value
     * @return string|null
     */
    public function getTimeFrom()
    {
        return $this->TimeFrom;
    }
    /**
     * Set TimeFrom value
     * @param string $timeFrom
     * @return \StructType\TimeRangeType
     */
    public function setTimeFrom($timeFrom = null)
    {
        // validation for constraint: string
        if (!is_null($timeFrom) && !is_string($timeFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeFrom, true), gettype($timeFrom)), __LINE__);
        }
        $this->TimeFrom = $timeFrom;
        return $this;
    }
    /**
     * Get TimeTo value
     * @return string|null
     */
    public function getTimeTo()
    {
        return $this->TimeTo;
    }
    /**
     * Set TimeTo value
     * @param string $timeTo
     * @return \StructType\TimeRangeType
     */
    public function setTimeTo($timeTo = null)
    {
        // validation for constraint: string
        if (!is_null($timeTo) && !is_string($timeTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeTo, true), gettype($timeTo)), __LINE__);
        }
        $this->TimeTo = $timeTo;
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
     * @return \StructType\TimeRangeType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
