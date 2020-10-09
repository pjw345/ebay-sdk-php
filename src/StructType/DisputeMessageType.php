<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisputeMessageType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains a message posted to a dispute. The message can be posted by the buyer, the seller, or an eBay representative. <br/><br/> <span class="tablenote"><strong>Note:</strong> 'Item Not Received' or 'Significantly Not As Described'
 * cases, initiated by buyers through the eBay Money Back Guarantee program, are not returned with <b>GetDispute</b> or <b>GetUserDisputes</b>. The <a
 * href="https://developer.ebay.com/Devzone/post-order/post-order_v2_casemanagement-caseId__get.html#overview">getCase</a> method of the <a href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a> is used to
 * retrieve Money Back Guarantee cases programmatically. </span>
 * @subpackage Structs
 */
class DisputeMessageType extends AbstractStructBase
{
    /**
     * The MessageID
     * Meta information extracted from the WSDL
     * - documentation: An ID that uniquely identifies the message.
     * - minOccurs: 0
     * @var int
     */
    public $MessageID;
    /**
     * The MessageSource
     * Meta information extracted from the WSDL
     * - documentation: The party who posted the message: the buyer, the seller, or an eBay representative.
     * - minOccurs: 0
     * @var string
     */
    public $MessageSource;
    /**
     * The MessageCreationTime
     * Meta information extracted from the WSDL
     * - documentation: The date and time the message was created, in GMT.
     * - minOccurs: 0
     * @var string
     */
    public $MessageCreationTime;
    /**
     * The MessageText
     * Meta information extracted from the WSDL
     * - documentation: The text of the message.
     * - minOccurs: 0
     * @var string
     */
    public $MessageText;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for DisputeMessageType
     * @uses DisputeMessageType::setMessageID()
     * @uses DisputeMessageType::setMessageSource()
     * @uses DisputeMessageType::setMessageCreationTime()
     * @uses DisputeMessageType::setMessageText()
     * @uses DisputeMessageType::setAny()
     * @param int $messageID
     * @param string $messageSource
     * @param string $messageCreationTime
     * @param string $messageText
     * @param \DOMDocument $any
     */
    public function __construct($messageID = null, $messageSource = null, $messageCreationTime = null, $messageText = null, \DOMDocument $any = null)
    {
        $this
            ->setMessageID($messageID)
            ->setMessageSource($messageSource)
            ->setMessageCreationTime($messageCreationTime)
            ->setMessageText($messageText)
            ->setAny($any);
    }
    /**
     * Get MessageID value
     * @return int|null
     */
    public function getMessageID()
    {
        return $this->MessageID;
    }
    /**
     * Set MessageID value
     * @param int $messageID
     * @return \StructType\DisputeMessageType
     */
    public function setMessageID($messageID = null)
    {
        // validation for constraint: int
        if (!is_null($messageID) && !(is_int($messageID) || ctype_digit($messageID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($messageID, true), gettype($messageID)), __LINE__);
        }
        $this->MessageID = $messageID;
        return $this;
    }
    /**
     * Get MessageSource value
     * @return string|null
     */
    public function getMessageSource()
    {
        return $this->MessageSource;
    }
    /**
     * Set MessageSource value
     * @uses \EnumType\DisputeMessageSourceCodeType::valueIsValid()
     * @uses \EnumType\DisputeMessageSourceCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $messageSource
     * @return \StructType\DisputeMessageType
     */
    public function setMessageSource($messageSource = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DisputeMessageSourceCodeType::valueIsValid($messageSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DisputeMessageSourceCodeType', is_array($messageSource) ? implode(', ', $messageSource) : var_export($messageSource, true), implode(', ', \EnumType\DisputeMessageSourceCodeType::getValidValues())), __LINE__);
        }
        $this->MessageSource = $messageSource;
        return $this;
    }
    /**
     * Get MessageCreationTime value
     * @return string|null
     */
    public function getMessageCreationTime()
    {
        return $this->MessageCreationTime;
    }
    /**
     * Set MessageCreationTime value
     * @param string $messageCreationTime
     * @return \StructType\DisputeMessageType
     */
    public function setMessageCreationTime($messageCreationTime = null)
    {
        // validation for constraint: string
        if (!is_null($messageCreationTime) && !is_string($messageCreationTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageCreationTime, true), gettype($messageCreationTime)), __LINE__);
        }
        $this->MessageCreationTime = $messageCreationTime;
        return $this;
    }
    /**
     * Get MessageText value
     * @return string|null
     */
    public function getMessageText()
    {
        return $this->MessageText;
    }
    /**
     * Set MessageText value
     * @param string $messageText
     * @return \StructType\DisputeMessageType
     */
    public function setMessageText($messageText = null)
    {
        // validation for constraint: string
        if (!is_null($messageText) && !is_string($messageText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageText, true), gettype($messageText)), __LINE__);
        }
        $this->MessageText = $messageText;
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
     * @return \StructType\DisputeMessageType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
