<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ScheduleType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ScheduleType extends AbstractStructBase
{
    /**
     * The ScheduleID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $ScheduleID;
    /**
     * The ScheduleTime
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ScheduleTime;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ScheduleType
     * @uses ScheduleType::setScheduleID()
     * @uses ScheduleType::setScheduleTime()
     * @uses ScheduleType::setAny()
     * @param int $scheduleID
     * @param string $scheduleTime
     * @param \DOMDocument $any
     */
    public function __construct($scheduleID = null, $scheduleTime = null, \DOMDocument $any = null)
    {
        $this
            ->setScheduleID($scheduleID)
            ->setScheduleTime($scheduleTime)
            ->setAny($any);
    }
    /**
     * Get ScheduleID value
     * @return int|null
     */
    public function getScheduleID()
    {
        return $this->ScheduleID;
    }
    /**
     * Set ScheduleID value
     * @param int $scheduleID
     * @return \StructType\ScheduleType
     */
    public function setScheduleID($scheduleID = null)
    {
        // validation for constraint: int
        if (!is_null($scheduleID) && !(is_int($scheduleID) || ctype_digit($scheduleID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($scheduleID, true), gettype($scheduleID)), __LINE__);
        }
        $this->ScheduleID = $scheduleID;
        return $this;
    }
    /**
     * Get ScheduleTime value
     * @return string|null
     */
    public function getScheduleTime()
    {
        return $this->ScheduleTime;
    }
    /**
     * Set ScheduleTime value
     * @param string $scheduleTime
     * @return \StructType\ScheduleType
     */
    public function setScheduleTime($scheduleTime = null)
    {
        // validation for constraint: string
        if (!is_null($scheduleTime) && !is_string($scheduleTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scheduleTime, true), gettype($scheduleTime)), __LINE__);
        }
        $this->ScheduleTime = $scheduleTime;
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
     * @return \StructType\ScheduleType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
