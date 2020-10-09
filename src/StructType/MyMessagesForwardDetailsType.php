<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyMessagesForwardDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class MyMessagesForwardDetailsType extends AbstractStructBase
{
    /**
     * The UserForwardDate
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $UserForwardDate;
    /**
     * The ForwardMessageEncoding
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ForwardMessageEncoding;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MyMessagesForwardDetailsType
     * @uses MyMessagesForwardDetailsType::setUserForwardDate()
     * @uses MyMessagesForwardDetailsType::setForwardMessageEncoding()
     * @uses MyMessagesForwardDetailsType::setAny()
     * @param string $userForwardDate
     * @param string $forwardMessageEncoding
     * @param \DOMDocument $any
     */
    public function __construct($userForwardDate = null, $forwardMessageEncoding = null, \DOMDocument $any = null)
    {
        $this
            ->setUserForwardDate($userForwardDate)
            ->setForwardMessageEncoding($forwardMessageEncoding)
            ->setAny($any);
    }
    /**
     * Get UserForwardDate value
     * @return string|null
     */
    public function getUserForwardDate()
    {
        return $this->UserForwardDate;
    }
    /**
     * Set UserForwardDate value
     * @param string $userForwardDate
     * @return \StructType\MyMessagesForwardDetailsType
     */
    public function setUserForwardDate($userForwardDate = null)
    {
        // validation for constraint: string
        if (!is_null($userForwardDate) && !is_string($userForwardDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userForwardDate, true), gettype($userForwardDate)), __LINE__);
        }
        $this->UserForwardDate = $userForwardDate;
        return $this;
    }
    /**
     * Get ForwardMessageEncoding value
     * @return string|null
     */
    public function getForwardMessageEncoding()
    {
        return $this->ForwardMessageEncoding;
    }
    /**
     * Set ForwardMessageEncoding value
     * @param string $forwardMessageEncoding
     * @return \StructType\MyMessagesForwardDetailsType
     */
    public function setForwardMessageEncoding($forwardMessageEncoding = null)
    {
        // validation for constraint: string
        if (!is_null($forwardMessageEncoding) && !is_string($forwardMessageEncoding)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forwardMessageEncoding, true), gettype($forwardMessageEncoding)), __LINE__);
        }
        $this->ForwardMessageEncoding = $forwardMessageEncoding;
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
     * @return \StructType\MyMessagesForwardDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
