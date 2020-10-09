<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreCustomListingHeaderLinkType StructType
 * Meta information extracted from the WSDL
 * - documentation: Custom listing header link.
 * @subpackage Structs
 */
class StoreCustomListingHeaderLinkType extends AbstractStructBase
{
    /**
     * The LinkID
     * Meta information extracted from the WSDL
     * - documentation: Link ID for the listing header link. The ID is used when the link is a custom category or for a custom page, and it is not needed when the LinkType property is "AboutMe" or "None".
     * @var int
     */
    public $LinkID;
    /**
     * The Order
     * Meta information extracted from the WSDL
     * - documentation: Order in which to show the custom listing header link.
     * @var int
     */
    public $Order;
    /**
     * The LinkType
     * Meta information extracted from the WSDL
     * - documentation: Type of link to include in the custom listing header.
     * - minOccurs: 0
     * @var string
     */
    public $LinkType;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for StoreCustomListingHeaderLinkType
     * @uses StoreCustomListingHeaderLinkType::setLinkID()
     * @uses StoreCustomListingHeaderLinkType::setOrder()
     * @uses StoreCustomListingHeaderLinkType::setLinkType()
     * @uses StoreCustomListingHeaderLinkType::setAny()
     * @param int $linkID
     * @param int $order
     * @param string $linkType
     * @param \DOMDocument $any
     */
    public function __construct($linkID = null, $order = null, $linkType = null, \DOMDocument $any = null)
    {
        $this
            ->setLinkID($linkID)
            ->setOrder($order)
            ->setLinkType($linkType)
            ->setAny($any);
    }
    /**
     * Get LinkID value
     * @return int|null
     */
    public function getLinkID()
    {
        return $this->LinkID;
    }
    /**
     * Set LinkID value
     * @param int $linkID
     * @return \StructType\StoreCustomListingHeaderLinkType
     */
    public function setLinkID($linkID = null)
    {
        // validation for constraint: int
        if (!is_null($linkID) && !(is_int($linkID) || ctype_digit($linkID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($linkID, true), gettype($linkID)), __LINE__);
        }
        $this->LinkID = $linkID;
        return $this;
    }
    /**
     * Get Order value
     * @return int|null
     */
    public function getOrder()
    {
        return $this->Order;
    }
    /**
     * Set Order value
     * @param int $order
     * @return \StructType\StoreCustomListingHeaderLinkType
     */
    public function setOrder($order = null)
    {
        // validation for constraint: int
        if (!is_null($order) && !(is_int($order) || ctype_digit($order))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($order, true), gettype($order)), __LINE__);
        }
        $this->Order = $order;
        return $this;
    }
    /**
     * Get LinkType value
     * @return string|null
     */
    public function getLinkType()
    {
        return $this->LinkType;
    }
    /**
     * Set LinkType value
     * @uses \EnumType\StoreCustomListingHeaderLinkCodeType::valueIsValid()
     * @uses \EnumType\StoreCustomListingHeaderLinkCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $linkType
     * @return \StructType\StoreCustomListingHeaderLinkType
     */
    public function setLinkType($linkType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\StoreCustomListingHeaderLinkCodeType::valueIsValid($linkType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\StoreCustomListingHeaderLinkCodeType', is_array($linkType) ? implode(', ', $linkType) : var_export($linkType, true), implode(', ', \EnumType\StoreCustomListingHeaderLinkCodeType::getValidValues())), __LINE__);
        }
        $this->LinkType = $linkType;
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
     * @return \StructType\StoreCustomListingHeaderLinkType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
