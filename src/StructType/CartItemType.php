<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CartItemType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class CartItemType extends AbstractStructBase
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
     * The ReferenceID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $ReferenceID;
    /**
     * The Action
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Action;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for CartItemType
     * @uses CartItemType::setItem()
     * @uses CartItemType::setReferenceID()
     * @uses CartItemType::setAction()
     * @uses CartItemType::setAny()
     * @param \StructType\ItemType $item
     * @param int $referenceID
     * @param string $action
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\ItemType $item = null, $referenceID = null, $action = null, \DOMDocument $any = null)
    {
        $this
            ->setItem($item)
            ->setReferenceID($referenceID)
            ->setAction($action)
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
     * @return \StructType\CartItemType
     */
    public function setItem(\StructType\ItemType $item = null)
    {
        $this->Item = $item;
        return $this;
    }
    /**
     * Get ReferenceID value
     * @return int|null
     */
    public function getReferenceID()
    {
        return $this->ReferenceID;
    }
    /**
     * Set ReferenceID value
     * @param int $referenceID
     * @return \StructType\CartItemType
     */
    public function setReferenceID($referenceID = null)
    {
        // validation for constraint: int
        if (!is_null($referenceID) && !(is_int($referenceID) || ctype_digit($referenceID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($referenceID, true), gettype($referenceID)), __LINE__);
        }
        $this->ReferenceID = $referenceID;
        return $this;
    }
    /**
     * Get Action value
     * @return string|null
     */
    public function getAction()
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @uses \EnumType\ModifyActionCodeType::valueIsValid()
     * @uses \EnumType\ModifyActionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $action
     * @return \StructType\CartItemType
     */
    public function setAction($action = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ModifyActionCodeType::valueIsValid($action)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ModifyActionCodeType', is_array($action) ? implode(', ', $action) : var_export($action, true), implode(', ', \EnumType\ModifyActionCodeType::getValidValues())), __LINE__);
        }
        $this->Action = $action;
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
     * @return \StructType\CartItemType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
