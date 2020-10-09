<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemBestOffersType StructType
 * Meta information extracted from the WSDL
 * - documentation: All Best Offers for the item according to the filter or Best Offer ID (or both) used in the input. For the notification client usage, this response includes a single Best Offer.
 * @subpackage Structs
 */
class ItemBestOffersType extends AbstractStructBase
{
    /**
     * The Role
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the eBay user is in the Buyer or Seller role for the corresponding Best Offer.
     * - minOccurs: 0
     * @var string
     */
    public $Role;
    /**
     * The BestOfferArray
     * Meta information extracted from the WSDL
     * - documentation: All Best Offers for the item according to the filter or Best Offer ID (or both) used in the input. The buyer and seller messages are returned only if the detail level is defined. Includes the buyer and seller message only if detail
     * level <code>ReturnAll</code> is used. Only returned if a Best Offer has been made.
     * - minOccurs: 0
     * @var \ArrayType\BestOfferArrayType
     */
    public $BestOfferArray;
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - documentation: The item for which Best Offers are being returned. Only returned if a Best Offer has been made.
     * - minOccurs: 0
     * @var \StructType\ItemType
     */
    public $Item;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ItemBestOffersType
     * @uses ItemBestOffersType::setRole()
     * @uses ItemBestOffersType::setBestOfferArray()
     * @uses ItemBestOffersType::setItem()
     * @uses ItemBestOffersType::setAny()
     * @param string $role
     * @param \ArrayType\BestOfferArrayType $bestOfferArray
     * @param \StructType\ItemType $item
     * @param \DOMDocument $any
     */
    public function __construct($role = null, \ArrayType\BestOfferArrayType $bestOfferArray = null, \StructType\ItemType $item = null, \DOMDocument $any = null)
    {
        $this
            ->setRole($role)
            ->setBestOfferArray($bestOfferArray)
            ->setItem($item)
            ->setAny($any);
    }
    /**
     * Get Role value
     * @return string|null
     */
    public function getRole()
    {
        return $this->Role;
    }
    /**
     * Set Role value
     * @uses \EnumType\TradingRoleCodeType::valueIsValid()
     * @uses \EnumType\TradingRoleCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $role
     * @return \StructType\ItemBestOffersType
     */
    public function setRole($role = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\TradingRoleCodeType::valueIsValid($role)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TradingRoleCodeType', is_array($role) ? implode(', ', $role) : var_export($role, true), implode(', ', \EnumType\TradingRoleCodeType::getValidValues())), __LINE__);
        }
        $this->Role = $role;
        return $this;
    }
    /**
     * Get BestOfferArray value
     * @return \ArrayType\BestOfferArrayType|null
     */
    public function getBestOfferArray()
    {
        return $this->BestOfferArray;
    }
    /**
     * Set BestOfferArray value
     * @param \ArrayType\BestOfferArrayType $bestOfferArray
     * @return \StructType\ItemBestOffersType
     */
    public function setBestOfferArray(\ArrayType\BestOfferArrayType $bestOfferArray = null)
    {
        $this->BestOfferArray = $bestOfferArray;
        return $this;
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
     * @return \StructType\ItemBestOffersType
     */
    public function setItem(\StructType\ItemType $item = null)
    {
        $this->Item = $item;
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
     * @return \StructType\ItemBestOffersType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
