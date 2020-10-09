<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerEmailLogType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains list of Email log.
 * @subpackage Structs
 */
class SellingManagerEmailLogType extends AbstractStructBase
{
    /**
     * The EmailType
     * Meta information extracted from the WSDL
     * - documentation: Specifies the type of Selling Manager email.
     * - minOccurs: 0
     * @var string
     */
    public $EmailType;
    /**
     * The CustomEmailName
     * Meta information extracted from the WSDL
     * - documentation: Template name of the custom email.
     * - minOccurs: 0
     * @var string
     */
    public $CustomEmailName;
    /**
     * The EmailState
     * Meta information extracted from the WSDL
     * - documentation: Success or failure state of this email.
     * - minOccurs: 0
     * @var string
     */
    public $EmailState;
    /**
     * The EventTime
     * Meta information extracted from the WSDL
     * - documentation: Date on which this email event occurred.
     * - minOccurs: 0
     * @var string
     */
    public $EventTime;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellingManagerEmailLogType
     * @uses SellingManagerEmailLogType::setEmailType()
     * @uses SellingManagerEmailLogType::setCustomEmailName()
     * @uses SellingManagerEmailLogType::setEmailState()
     * @uses SellingManagerEmailLogType::setEventTime()
     * @uses SellingManagerEmailLogType::setAny()
     * @param string $emailType
     * @param string $customEmailName
     * @param string $emailState
     * @param string $eventTime
     * @param \DOMDocument $any
     */
    public function __construct($emailType = null, $customEmailName = null, $emailState = null, $eventTime = null, \DOMDocument $any = null)
    {
        $this
            ->setEmailType($emailType)
            ->setCustomEmailName($customEmailName)
            ->setEmailState($emailState)
            ->setEventTime($eventTime)
            ->setAny($any);
    }
    /**
     * Get EmailType value
     * @return string|null
     */
    public function getEmailType()
    {
        return $this->EmailType;
    }
    /**
     * Set EmailType value
     * @uses \EnumType\SellingManagerEmailTypeCodeType::valueIsValid()
     * @uses \EnumType\SellingManagerEmailTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $emailType
     * @return \StructType\SellingManagerEmailLogType
     */
    public function setEmailType($emailType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SellingManagerEmailTypeCodeType::valueIsValid($emailType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SellingManagerEmailTypeCodeType', is_array($emailType) ? implode(', ', $emailType) : var_export($emailType, true), implode(', ', \EnumType\SellingManagerEmailTypeCodeType::getValidValues())), __LINE__);
        }
        $this->EmailType = $emailType;
        return $this;
    }
    /**
     * Get CustomEmailName value
     * @return string|null
     */
    public function getCustomEmailName()
    {
        return $this->CustomEmailName;
    }
    /**
     * Set CustomEmailName value
     * @param string $customEmailName
     * @return \StructType\SellingManagerEmailLogType
     */
    public function setCustomEmailName($customEmailName = null)
    {
        // validation for constraint: string
        if (!is_null($customEmailName) && !is_string($customEmailName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customEmailName, true), gettype($customEmailName)), __LINE__);
        }
        $this->CustomEmailName = $customEmailName;
        return $this;
    }
    /**
     * Get EmailState value
     * @return string|null
     */
    public function getEmailState()
    {
        return $this->EmailState;
    }
    /**
     * Set EmailState value
     * @uses \EnumType\SellingManagerEmailSentStatusCodeType::valueIsValid()
     * @uses \EnumType\SellingManagerEmailSentStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $emailState
     * @return \StructType\SellingManagerEmailLogType
     */
    public function setEmailState($emailState = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SellingManagerEmailSentStatusCodeType::valueIsValid($emailState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SellingManagerEmailSentStatusCodeType', is_array($emailState) ? implode(', ', $emailState) : var_export($emailState, true), implode(', ', \EnumType\SellingManagerEmailSentStatusCodeType::getValidValues())), __LINE__);
        }
        $this->EmailState = $emailState;
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
     * @return \StructType\SellingManagerEmailLogType
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
     * @return \StructType\SellingManagerEmailLogType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
