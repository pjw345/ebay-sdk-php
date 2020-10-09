<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BidAssistantListType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class BidAssistantListType extends AbstractStructBase
{
    /**
     * The BidGroupID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $BidGroupID;
    /**
     * The IncludeNotes
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeNotes;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for BidAssistantListType
     * @uses BidAssistantListType::setBidGroupID()
     * @uses BidAssistantListType::setIncludeNotes()
     * @uses BidAssistantListType::setAny()
     * @param int $bidGroupID
     * @param bool $includeNotes
     * @param \DOMDocument $any
     */
    public function __construct($bidGroupID = null, $includeNotes = null, \DOMDocument $any = null)
    {
        $this
            ->setBidGroupID($bidGroupID)
            ->setIncludeNotes($includeNotes)
            ->setAny($any);
    }
    /**
     * Get BidGroupID value
     * @return int|null
     */
    public function getBidGroupID()
    {
        return $this->BidGroupID;
    }
    /**
     * Set BidGroupID value
     * @param int $bidGroupID
     * @return \StructType\BidAssistantListType
     */
    public function setBidGroupID($bidGroupID = null)
    {
        // validation for constraint: int
        if (!is_null($bidGroupID) && !(is_int($bidGroupID) || ctype_digit($bidGroupID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bidGroupID, true), gettype($bidGroupID)), __LINE__);
        }
        $this->BidGroupID = $bidGroupID;
        return $this;
    }
    /**
     * Get IncludeNotes value
     * @return bool|null
     */
    public function getIncludeNotes()
    {
        return $this->IncludeNotes;
    }
    /**
     * Set IncludeNotes value
     * @param bool $includeNotes
     * @return \StructType\BidAssistantListType
     */
    public function setIncludeNotes($includeNotes = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeNotes) && !is_bool($includeNotes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeNotes, true), gettype($includeNotes)), __LINE__);
        }
        $this->IncludeNotes = $includeNotes;
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
     * @return \StructType\BidAssistantListType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
