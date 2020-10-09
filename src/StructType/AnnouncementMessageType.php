<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnnouncementMessageType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>ShippingServiceDetails.DeprecationDetails</b> container that is returned in the <b>GeteBayDetails</b> response. The <b>ShippingServiceDetails.DeprecationDetails</b> container consists of information related to a
 * deprecated shipping service.
 * @subpackage Structs
 */
class AnnouncementMessageType extends AbstractStructBase
{
    /**
     * The AnnouncementStartTime
     * Meta information extracted from the WSDL
     * - documentation: The date on which an upcoming event can start to be announced.
     * - minOccurs: 0
     * @var string
     */
    public $AnnouncementStartTime;
    /**
     * The EventTime
     * Meta information extracted from the WSDL
     * - documentation: The date on which the event occurs. This is also the ending date of the announcement that lead up to the event (see <b>AnnouncementStartTime</b>).
     * - minOccurs: 0
     * @var string
     */
    public $EventTime;
    /**
     * The MessageType
     * Meta information extracted from the WSDL
     * - documentation: Control of what messages to display.
     * - minOccurs: 0
     * @var string
     */
    public $MessageType;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for AnnouncementMessageType
     * @uses AnnouncementMessageType::setAnnouncementStartTime()
     * @uses AnnouncementMessageType::setEventTime()
     * @uses AnnouncementMessageType::setMessageType()
     * @uses AnnouncementMessageType::setAny()
     * @param string $announcementStartTime
     * @param string $eventTime
     * @param string $messageType
     * @param \DOMDocument $any
     */
    public function __construct($announcementStartTime = null, $eventTime = null, $messageType = null, \DOMDocument $any = null)
    {
        $this
            ->setAnnouncementStartTime($announcementStartTime)
            ->setEventTime($eventTime)
            ->setMessageType($messageType)
            ->setAny($any);
    }
    /**
     * Get AnnouncementStartTime value
     * @return string|null
     */
    public function getAnnouncementStartTime()
    {
        return $this->AnnouncementStartTime;
    }
    /**
     * Set AnnouncementStartTime value
     * @param string $announcementStartTime
     * @return \StructType\AnnouncementMessageType
     */
    public function setAnnouncementStartTime($announcementStartTime = null)
    {
        // validation for constraint: string
        if (!is_null($announcementStartTime) && !is_string($announcementStartTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($announcementStartTime, true), gettype($announcementStartTime)), __LINE__);
        }
        $this->AnnouncementStartTime = $announcementStartTime;
        return $this;
    }
    /**
     * Get EventTime value
     * @return string|null
     */
    public function getEventTime()
    {
        return $this->EventTime;
    }
    /**
     * Set EventTime value
     * @param string $eventTime
     * @return \StructType\AnnouncementMessageType
     */
    public function setEventTime($eventTime = null)
    {
        // validation for constraint: string
        if (!is_null($eventTime) && !is_string($eventTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eventTime, true), gettype($eventTime)), __LINE__);
        }
        $this->EventTime = $eventTime;
        return $this;
    }
    /**
     * Get MessageType value
     * @return string|null
     */
    public function getMessageType()
    {
        return $this->MessageType;
    }
    /**
     * Set MessageType value
     * @uses \EnumType\AnnouncementMessageCodeType::valueIsValid()
     * @uses \EnumType\AnnouncementMessageCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $messageType
     * @return \StructType\AnnouncementMessageType
     */
    public function setMessageType($messageType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\AnnouncementMessageCodeType::valueIsValid($messageType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\AnnouncementMessageCodeType', is_array($messageType) ? implode(', ', $messageType) : var_export($messageType, true), implode(', ', \EnumType\AnnouncementMessageCodeType::getValidValues())), __LINE__);
        }
        $this->MessageType = $messageType;
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
     * @return \StructType\AnnouncementMessageType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
