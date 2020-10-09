<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarkUpMarkDownEventType StructType
 * Meta information extracted from the WSDL
 * - documentation: Describes an individual mark-up or mark-down event. eBay will automatically mark an application as down if attempts to deliver a notification fail repeatedly. eBay may mark an application down manually under certain circumstances.
 * @subpackage Structs
 */
class MarkUpMarkDownEventType extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: Whether the application has been marked up or marked down.
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Time
     * Meta information extracted from the WSDL
     * - documentation: Time when the application was marked up or marked down.
     * - minOccurs: 0
     * @var string
     */
    public $Time;
    /**
     * The Reason
     * Meta information extracted from the WSDL
     * - documentation: Describes how the application was marked down, automatically or manually. When an application is automatically marked down, eBay will ping the application periodically, and if communication is restored, eBay will automatically mark
     * the application up. If your application is marked down manually, you must contact eBay Developer Support to get your application marked up. A Reason is not provided for mark up events.
     * - minOccurs: 0
     * @var string
     */
    public $Reason;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MarkUpMarkDownEventType
     * @uses MarkUpMarkDownEventType::setType()
     * @uses MarkUpMarkDownEventType::setTime()
     * @uses MarkUpMarkDownEventType::setReason()
     * @uses MarkUpMarkDownEventType::setAny()
     * @param string $type
     * @param string $time
     * @param string $reason
     * @param \DOMDocument $any
     */
    public function __construct($type = null, $time = null, $reason = null, \DOMDocument $any = null)
    {
        $this
            ->setType($type)
            ->setTime($time)
            ->setReason($reason)
            ->setAny($any);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \EnumType\MarkUpMarkDownEventTypeCodeType::valueIsValid()
     * @uses \EnumType\MarkUpMarkDownEventTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \StructType\MarkUpMarkDownEventType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\MarkUpMarkDownEventTypeCodeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\MarkUpMarkDownEventTypeCodeType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \EnumType\MarkUpMarkDownEventTypeCodeType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Time value
     * @return string|null
     */
    public function getTime()
    {
        return $this->Time;
    }
    /**
     * Set Time value
     * @param string $time
     * @return \StructType\MarkUpMarkDownEventType
     */
    public function setTime($time = null)
    {
        // validation for constraint: string
        if (!is_null($time) && !is_string($time)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($time, true), gettype($time)), __LINE__);
        }
        $this->Time = $time;
        return $this;
    }
    /**
     * Get Reason value
     * @return string|null
     */
    public function getReason()
    {
        return $this->Reason;
    }
    /**
     * Set Reason value
     * @param string $reason
     * @return \StructType\MarkUpMarkDownEventType
     */
    public function setReason($reason = null)
    {
        // validation for constraint: string
        if (!is_null($reason) && !is_string($reason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reason, true), gettype($reason)), __LINE__);
        }
        $this->Reason = $reason;
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
     * @return \StructType\MarkUpMarkDownEventType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
