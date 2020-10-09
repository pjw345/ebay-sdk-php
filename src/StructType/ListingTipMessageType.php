<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListingTipMessageType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ListingTipMessageType extends AbstractStructBase
{
    /**
     * The ListingTipMessageID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ListingTipMessageID;
    /**
     * The ShortMessage
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ShortMessage;
    /**
     * The LongMessage
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $LongMessage;
    /**
     * The HelpURLPath
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $HelpURLPath;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ListingTipMessageType
     * @uses ListingTipMessageType::setListingTipMessageID()
     * @uses ListingTipMessageType::setShortMessage()
     * @uses ListingTipMessageType::setLongMessage()
     * @uses ListingTipMessageType::setHelpURLPath()
     * @uses ListingTipMessageType::setAny()
     * @param string $listingTipMessageID
     * @param string $shortMessage
     * @param string $longMessage
     * @param string $helpURLPath
     * @param \DOMDocument $any
     */
    public function __construct($listingTipMessageID = null, $shortMessage = null, $longMessage = null, $helpURLPath = null, \DOMDocument $any = null)
    {
        $this
            ->setListingTipMessageID($listingTipMessageID)
            ->setShortMessage($shortMessage)
            ->setLongMessage($longMessage)
            ->setHelpURLPath($helpURLPath)
            ->setAny($any);
    }
    /**
     * Get ListingTipMessageID value
     * @return string|null
     */
    public function getListingTipMessageID()
    {
        return $this->ListingTipMessageID;
    }
    /**
     * Set ListingTipMessageID value
     * @param string $listingTipMessageID
     * @return \StructType\ListingTipMessageType
     */
    public function setListingTipMessageID($listingTipMessageID = null)
    {
        // validation for constraint: string
        if (!is_null($listingTipMessageID) && !is_string($listingTipMessageID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($listingTipMessageID, true), gettype($listingTipMessageID)), __LINE__);
        }
        $this->ListingTipMessageID = $listingTipMessageID;
        return $this;
    }
    /**
     * Get ShortMessage value
     * @return string|null
     */
    public function getShortMessage()
    {
        return $this->ShortMessage;
    }
    /**
     * Set ShortMessage value
     * @param string $shortMessage
     * @return \StructType\ListingTipMessageType
     */
    public function setShortMessage($shortMessage = null)
    {
        // validation for constraint: string
        if (!is_null($shortMessage) && !is_string($shortMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shortMessage, true), gettype($shortMessage)), __LINE__);
        }
        $this->ShortMessage = $shortMessage;
        return $this;
    }
    /**
     * Get LongMessage value
     * @return string|null
     */
    public function getLongMessage()
    {
        return $this->LongMessage;
    }
    /**
     * Set LongMessage value
     * @param string $longMessage
     * @return \StructType\ListingTipMessageType
     */
    public function setLongMessage($longMessage = null)
    {
        // validation for constraint: string
        if (!is_null($longMessage) && !is_string($longMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($longMessage, true), gettype($longMessage)), __LINE__);
        }
        $this->LongMessage = $longMessage;
        return $this;
    }
    /**
     * Get HelpURLPath value
     * @return string|null
     */
    public function getHelpURLPath()
    {
        return $this->HelpURLPath;
    }
    /**
     * Set HelpURLPath value
     * @param string $helpURLPath
     * @return \StructType\ListingTipMessageType
     */
    public function setHelpURLPath($helpURLPath = null)
    {
        // validation for constraint: string
        if (!is_null($helpURLPath) && !is_string($helpURLPath)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($helpURLPath, true), gettype($helpURLPath)), __LINE__);
        }
        $this->HelpURLPath = $helpURLPath;
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
     * @return \StructType\ListingTipMessageType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
