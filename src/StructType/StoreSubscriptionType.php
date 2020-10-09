<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreSubscriptionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the Subscription container that is returned in GetStoreOptions to indicate the subscription level and monthly fee associated with the eBay Store.
 * @subpackage Structs
 */
class StoreSubscriptionType extends AbstractStructBase
{
    /**
     * The Level
     * Meta information extracted from the WSDL
     * - documentation: Store subscription level.
     * - minOccurs: 0
     * @var string
     */
    public $Level;
    /**
     * The Fee
     * Meta information extracted from the WSDL
     * - documentation: Monthly fee for the Store subscription level.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $Fee;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for StoreSubscriptionType
     * @uses StoreSubscriptionType::setLevel()
     * @uses StoreSubscriptionType::setFee()
     * @uses StoreSubscriptionType::setAny()
     * @param string $level
     * @param \StructType\AmountType $fee
     * @param \DOMDocument $any
     */
    public function __construct($level = null, \StructType\AmountType $fee = null, \DOMDocument $any = null)
    {
        $this
            ->setLevel($level)
            ->setFee($fee)
            ->setAny($any);
    }
    /**
     * Get Level value
     * @return string|null
     */
    public function getLevel()
    {
        return $this->Level;
    }
    /**
     * Set Level value
     * @uses \EnumType\StoreSubscriptionLevelCodeType::valueIsValid()
     * @uses \EnumType\StoreSubscriptionLevelCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $level
     * @return \StructType\StoreSubscriptionType
     */
    public function setLevel($level = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\StoreSubscriptionLevelCodeType::valueIsValid($level)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\StoreSubscriptionLevelCodeType', is_array($level) ? implode(', ', $level) : var_export($level, true), implode(', ', \EnumType\StoreSubscriptionLevelCodeType::getValidValues())), __LINE__);
        }
        $this->Level = $level;
        return $this;
    }
    /**
     * Get Fee value
     * @return \StructType\AmountType|null
     */
    public function getFee()
    {
        return $this->Fee;
    }
    /**
     * Set Fee value
     * @param \StructType\AmountType $fee
     * @return \StructType\StoreSubscriptionType
     */
    public function setFee(\StructType\AmountType $fee = null)
    {
        $this->Fee = $fee;
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
     * @return \StructType\StoreSubscriptionType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
