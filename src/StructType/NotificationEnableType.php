<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NotificationEnableType StructType
 * Meta information extracted from the WSDL
 * - documentation: Specifies a notification event and whether the notification is enabled or disabled.
 * @subpackage Structs
 */
class NotificationEnableType extends AbstractStructBase
{
    /**
     * The EventType
     * Meta information extracted from the WSDL
     * - documentation: The name of the notification event.
     * - minOccurs: 0
     * @var string
     */
    public $EventType;
    /**
     * The EventEnable
     * Meta information extracted from the WSDL
     * - documentation: Whether the event is enabled or disabled.
     * - minOccurs: 0
     * @var string
     */
    public $EventEnable;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for NotificationEnableType
     * @uses NotificationEnableType::setEventType()
     * @uses NotificationEnableType::setEventEnable()
     * @uses NotificationEnableType::setAny()
     * @param string $eventType
     * @param string $eventEnable
     * @param \DOMDocument $any
     */
    public function __construct($eventType = null, $eventEnable = null, \DOMDocument $any = null)
    {
        $this
            ->setEventType($eventType)
            ->setEventEnable($eventEnable)
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
     * @return \StructType\NotificationEnableType
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
     * Get EventEnable value
     * @return string|null
     */
    public function getEventEnable()
    {
        return $this->EventEnable;
    }
    /**
     * Set EventEnable value
     * @uses \EnumType\EnableCodeType::valueIsValid()
     * @uses \EnumType\EnableCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eventEnable
     * @return \StructType\NotificationEnableType
     */
    public function setEventEnable($eventEnable = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\EnableCodeType::valueIsValid($eventEnable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EnableCodeType', is_array($eventEnable) ? implode(', ', $eventEnable) : var_export($eventEnable, true), implode(', ', \EnumType\EnableCodeType::getValidValues())), __LINE__);
        }
        $this->EventEnable = $eventEnable;
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
     * @return \StructType\NotificationEnableType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
