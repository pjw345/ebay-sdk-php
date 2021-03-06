<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyMessagesResponseDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Details relating to the response to a message.
 * @subpackage Structs
 */
class MyMessagesResponseDetailsType extends AbstractStructBase
{
    /**
     * The ResponseEnabled
     * Meta information extracted from the WSDL
     * - documentation: Whether a message can be responded to. To respond to a message, use the URL in ResponseURL. You may need to log into the eBay Web site to complete the response.
     * - minOccurs: 0
     * @var bool
     */
    public $ResponseEnabled;
    /**
     * The ResponseURL
     * Meta information extracted from the WSDL
     * - documentation: A URL that the recipient must visit to respond to a message. Responding may require logging into the eBay Web site.
     * - minOccurs: 0
     * @var string
     */
    public $ResponseURL;
    /**
     * The UserResponseDate
     * Meta information extracted from the WSDL
     * - documentation: The date and time the user responded to a message
     * - minOccurs: 0
     * @var string
     */
    public $UserResponseDate;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MyMessagesResponseDetailsType
     * @uses MyMessagesResponseDetailsType::setResponseEnabled()
     * @uses MyMessagesResponseDetailsType::setResponseURL()
     * @uses MyMessagesResponseDetailsType::setUserResponseDate()
     * @uses MyMessagesResponseDetailsType::setAny()
     * @param bool $responseEnabled
     * @param string $responseURL
     * @param string $userResponseDate
     * @param \DOMDocument $any
     */
    public function __construct($responseEnabled = null, $responseURL = null, $userResponseDate = null, \DOMDocument $any = null)
    {
        $this
            ->setResponseEnabled($responseEnabled)
            ->setResponseURL($responseURL)
            ->setUserResponseDate($userResponseDate)
            ->setAny($any);
    }
    /**
     * Get ResponseEnabled value
     * @return bool|null
     */
    public function getResponseEnabled()
    {
        return $this->ResponseEnabled;
    }
    /**
     * Set ResponseEnabled value
     * @param bool $responseEnabled
     * @return \StructType\MyMessagesResponseDetailsType
     */
    public function setResponseEnabled($responseEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($responseEnabled) && !is_bool($responseEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($responseEnabled, true), gettype($responseEnabled)), __LINE__);
        }
        $this->ResponseEnabled = $responseEnabled;
        return $this;
    }
    /**
     * Get ResponseURL value
     * @return string|null
     */
    public function getResponseURL()
    {
        return $this->ResponseURL;
    }
    /**
     * Set ResponseURL value
     * @param string $responseURL
     * @return \StructType\MyMessagesResponseDetailsType
     */
    public function setResponseURL($responseURL = null)
    {
        // validation for constraint: string
        if (!is_null($responseURL) && !is_string($responseURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($responseURL, true), gettype($responseURL)), __LINE__);
        }
        $this->ResponseURL = $responseURL;
        return $this;
    }
    /**
     * Get UserResponseDate value
     * @return string|null
     */
    public function getUserResponseDate()
    {
        return $this->UserResponseDate;
    }
    /**
     * Set UserResponseDate value
     * @param string $userResponseDate
     * @return \StructType\MyMessagesResponseDetailsType
     */
    public function setUserResponseDate($userResponseDate = null)
    {
        // validation for constraint: string
        if (!is_null($userResponseDate) && !is_string($userResponseDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userResponseDate, true), gettype($userResponseDate)), __LINE__);
        }
        $this->UserResponseDate = $userResponseDate;
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
     * @return \StructType\MyMessagesResponseDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
