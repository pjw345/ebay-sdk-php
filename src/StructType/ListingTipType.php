<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListingTipType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ListingTipType extends AbstractStructBase
{
    /**
     * The ListingTipID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ListingTipID;
    /**
     * The Priority
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $Priority;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\ListingTipMessageType
     */
    public $Message;
    /**
     * The Field
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\ListingTipFieldType
     */
    public $Field;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ListingTipType
     * @uses ListingTipType::setListingTipID()
     * @uses ListingTipType::setPriority()
     * @uses ListingTipType::setMessage()
     * @uses ListingTipType::setField()
     * @uses ListingTipType::setAny()
     * @param string $listingTipID
     * @param int $priority
     * @param \StructType\ListingTipMessageType $message
     * @param \StructType\ListingTipFieldType $field
     * @param \DOMDocument $any
     */
    public function __construct($listingTipID = null, $priority = null, \StructType\ListingTipMessageType $message = null, \StructType\ListingTipFieldType $field = null, \DOMDocument $any = null)
    {
        $this
            ->setListingTipID($listingTipID)
            ->setPriority($priority)
            ->setMessage($message)
            ->setField($field)
            ->setAny($any);
    }
    /**
     * Get ListingTipID value
     * @return string|null
     */
    public function getListingTipID()
    {
        return $this->ListingTipID;
    }
    /**
     * Set ListingTipID value
     * @param string $listingTipID
     * @return \StructType\ListingTipType
     */
    public function setListingTipID($listingTipID = null)
    {
        // validation for constraint: string
        if (!is_null($listingTipID) && !is_string($listingTipID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($listingTipID, true), gettype($listingTipID)), __LINE__);
        }
        $this->ListingTipID = $listingTipID;
        return $this;
    }
    /**
     * Get Priority value
     * @return int|null
     */
    public function getPriority()
    {
        return $this->Priority;
    }
    /**
     * Set Priority value
     * @param int $priority
     * @return \StructType\ListingTipType
     */
    public function setPriority($priority = null)
    {
        // validation for constraint: int
        if (!is_null($priority) && !(is_int($priority) || ctype_digit($priority))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($priority, true), gettype($priority)), __LINE__);
        }
        $this->Priority = $priority;
        return $this;
    }
    /**
     * Get Message value
     * @return \StructType\ListingTipMessageType|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param \StructType\ListingTipMessageType $message
     * @return \StructType\ListingTipType
     */
    public function setMessage(\StructType\ListingTipMessageType $message = null)
    {
        $this->Message = $message;
        return $this;
    }
    /**
     * Get Field value
     * @return \StructType\ListingTipFieldType|null
     */
    public function getField()
    {
        return $this->Field;
    }
    /**
     * Set Field value
     * @param \StructType\ListingTipFieldType $field
     * @return \StructType\ListingTipType
     */
    public function setField(\StructType\ListingTipFieldType $field = null)
    {
        $this->Field = $field;
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
     * @return \StructType\ListingTipType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
