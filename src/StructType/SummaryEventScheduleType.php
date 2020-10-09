<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SummaryEventScheduleType StructType
 * Meta information extracted from the WSDL
 * - documentation: Details about a summary event schedule.
 * @subpackage Structs
 */
class SummaryEventScheduleType extends AbstractStructBase
{
    /**
     * The EventType
     * Meta information extracted from the WSDL
     * - documentation: The event type associated with this alert.
     * - minOccurs: 0
     * @var string
     */
    public $EventType;
    /**
     * The SummaryPeriod
     * Meta information extracted from the WSDL
     * - documentation: The period of time for which to create a summary.
     * - minOccurs: 0
     * @var string
     */
    public $SummaryPeriod;
    /**
     * The Frequency
     * Meta information extracted from the WSDL
     * - documentation: How often the summary is to be delivered.
     * - minOccurs: 0
     * @var string
     */
    public $Frequency;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SummaryEventScheduleType
     * @uses SummaryEventScheduleType::setEventType()
     * @uses SummaryEventScheduleType::setSummaryPeriod()
     * @uses SummaryEventScheduleType::setFrequency()
     * @uses SummaryEventScheduleType::setAny()
     * @param string $eventType
     * @param string $summaryPeriod
     * @param string $frequency
     * @param \DOMDocument $any
     */
    public function __construct($eventType = null, $summaryPeriod = null, $frequency = null, \DOMDocument $any = null)
    {
        $this
            ->setEventType($eventType)
            ->setSummaryPeriod($summaryPeriod)
            ->setFrequency($frequency)
            ->setAny($any);
    }
    /**
     * Get EventType value
     * @return string|null
     */
    public function getEventType()
    {
        return $this->EventType;
    }
    /**
     * Set EventType value
     * @uses \EnumType\NotificationEventTypeCodeType::valueIsValid()
     * @uses \EnumType\NotificationEventTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eventType
     * @return \StructType\SummaryEventScheduleType
     */
    public function setEventType($eventType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\NotificationEventTypeCodeType::valueIsValid($eventType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\NotificationEventTypeCodeType', is_array($eventType) ? implode(', ', $eventType) : var_export($eventType, true), implode(', ', \EnumType\NotificationEventTypeCodeType::getValidValues())), __LINE__);
        }
        $this->EventType = $eventType;
        return $this;
    }
    /**
     * Get SummaryPeriod value
     * @return string|null
     */
    public function getSummaryPeriod()
    {
        return $this->SummaryPeriod;
    }
    /**
     * Set SummaryPeriod value
     * @uses \EnumType\SummaryWindowPeriodCodeType::valueIsValid()
     * @uses \EnumType\SummaryWindowPeriodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $summaryPeriod
     * @return \StructType\SummaryEventScheduleType
     */
    public function setSummaryPeriod($summaryPeriod = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SummaryWindowPeriodCodeType::valueIsValid($summaryPeriod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SummaryWindowPeriodCodeType', is_array($summaryPeriod) ? implode(', ', $summaryPeriod) : var_export($summaryPeriod, true), implode(', ', \EnumType\SummaryWindowPeriodCodeType::getValidValues())), __LINE__);
        }
        $this->SummaryPeriod = $summaryPeriod;
        return $this;
    }
    /**
     * Get Frequency value
     * @return string|null
     */
    public function getFrequency()
    {
        return $this->Frequency;
    }
    /**
     * Set Frequency value
     * @uses \EnumType\SummaryFrequencyCodeType::valueIsValid()
     * @uses \EnumType\SummaryFrequencyCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $frequency
     * @return \StructType\SummaryEventScheduleType
     */
    public function setFrequency($frequency = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SummaryFrequencyCodeType::valueIsValid($frequency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SummaryFrequencyCodeType', is_array($frequency) ? implode(', ', $frequency) : var_export($frequency, true), implode(', ', \EnumType\SummaryFrequencyCodeType::getValidValues())), __LINE__);
        }
        $this->Frequency = $frequency;
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
     * @return \StructType\SummaryEventScheduleType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
