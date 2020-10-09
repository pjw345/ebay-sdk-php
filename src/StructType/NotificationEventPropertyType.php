<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NotificationEventPropertyType StructType
 * Meta information extracted from the WSDL
 * - documentation: Defines properties associated with a particular event.
 * @subpackage Structs
 */
class NotificationEventPropertyType extends AbstractStructBase
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
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Specify property name associated with an particular event.
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - documentation: Specifies the value for the property.
     * - minOccurs: 0
     * @var string
     */
    public $Value;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for NotificationEventPropertyType
     * @uses NotificationEventPropertyType::setEventType()
     * @uses NotificationEventPropertyType::setName()
     * @uses NotificationEventPropertyType::setValue()
     * @uses NotificationEventPropertyType::setAny()
     * @param string $eventType
     * @param string $name
     * @param string $value
     * @param \DOMDocument $any
     */
    public function __construct($eventType = null, $name = null, $value = null, \DOMDocument $any = null)
    {
        $this
            ->setEventType($eventType)
            ->setName($name)
            ->setValue($value)
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
     * @return \StructType\NotificationEventPropertyType
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
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @uses \EnumType\NotificationEventPropertyNameCodeType::valueIsValid()
     * @uses \EnumType\NotificationEventPropertyNameCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $name
     * @return \StructType\NotificationEventPropertyType
     */
    public function setName($name = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\NotificationEventPropertyNameCodeType::valueIsValid($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\NotificationEventPropertyNameCodeType', is_array($name) ? implode(', ', $name) : var_export($name, true), implode(', ', \EnumType\NotificationEventPropertyNameCodeType::getValidValues())), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \StructType\NotificationEventPropertyType
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->Value = $value;
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
     * @return \StructType\NotificationEventPropertyType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
