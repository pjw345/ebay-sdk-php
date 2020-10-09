<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BidGroupItemType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class BidGroupItemType extends AbstractStructBase
{
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\ItemType
     */
    public $Item;
    /**
     * The BidGroupItemStatus
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $BidGroupItemStatus;
    /**
     * The MaxBidAmount
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $MaxBidAmount;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for BidGroupItemType
     * @uses BidGroupItemType::setItem()
     * @uses BidGroupItemType::setBidGroupItemStatus()
     * @uses BidGroupItemType::setMaxBidAmount()
     * @uses BidGroupItemType::setAny()
     * @param \StructType\ItemType $item
     * @param string $bidGroupItemStatus
     * @param \StructType\AmountType $maxBidAmount
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\ItemType $item = null, $bidGroupItemStatus = null, \StructType\AmountType $maxBidAmount = null, \DOMDocument $any = null)
    {
        $this
            ->setItem($item)
            ->setBidGroupItemStatus($bidGroupItemStatus)
            ->setMaxBidAmount($maxBidAmount)
            ->setAny($any);
    }
    /**
     * Get Item value
     * @return \StructType\ItemType|null
     */
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @param \StructType\ItemType $item
     * @return \StructType\BidGroupItemType
     */
    public function setItem(\StructType\ItemType $item = null)
    {
        $this->Item = $item;
        return $this;
    }
    /**
     * Get BidGroupItemStatus value
     * @return string|null
     */
    public function getBidGroupItemStatus()
    {
        return $this->BidGroupItemStatus;
    }
    /**
     * Set BidGroupItemStatus value
     * @uses \EnumType\BidGroupItemStatusCodeType::valueIsValid()
     * @uses \EnumType\BidGroupItemStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $bidGroupItemStatus
     * @return \StructType\BidGroupItemType
     */
    public function setBidGroupItemStatus($bidGroupItemStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BidGroupItemStatusCodeType::valueIsValid($bidGroupItemStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\BidGroupItemStatusCodeType', is_array($bidGroupItemStatus) ? implode(', ', $bidGroupItemStatus) : var_export($bidGroupItemStatus, true), implode(', ', \EnumType\BidGroupItemStatusCodeType::getValidValues())), __LINE__);
        }
        $this->BidGroupItemStatus = $bidGroupItemStatus;
        return $this;
    }
    /**
     * Get MaxBidAmount value
     * @return \StructType\AmountType|null
     */
    public function getMaxBidAmount()
    {
        return $this->MaxBidAmount;
    }
    /**
     * Set MaxBidAmount value
     * @param \StructType\AmountType $maxBidAmount
     * @return \StructType\BidGroupItemType
     */
    public function setMaxBidAmount(\StructType\AmountType $maxBidAmount = null)
    {
        $this->MaxBidAmount = $maxBidAmount;
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
     * @return \StructType\BidGroupItemType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
