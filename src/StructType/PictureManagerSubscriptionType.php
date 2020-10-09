<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PictureManagerSubscriptionType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class PictureManagerSubscriptionType extends AbstractStructBase
{
    /**
     * The SubscriptionLevel
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $SubscriptionLevel;
    /**
     * The Fee
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $Fee;
    /**
     * The StorageSize
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $StorageSize;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PictureManagerSubscriptionType
     * @uses PictureManagerSubscriptionType::setSubscriptionLevel()
     * @uses PictureManagerSubscriptionType::setFee()
     * @uses PictureManagerSubscriptionType::setStorageSize()
     * @uses PictureManagerSubscriptionType::setAny()
     * @param string $subscriptionLevel
     * @param \StructType\AmountType $fee
     * @param int $storageSize
     * @param \DOMDocument $any
     */
    public function __construct($subscriptionLevel = null, \StructType\AmountType $fee = null, $storageSize = null, \DOMDocument $any = null)
    {
        $this
            ->setSubscriptionLevel($subscriptionLevel)
            ->setFee($fee)
            ->setStorageSize($storageSize)
            ->setAny($any);
    }
    /**
     * Get SubscriptionLevel value
     * @return string|null
     */
    public function getSubscriptionLevel()
    {
        return $this->SubscriptionLevel;
    }
    /**
     * Set SubscriptionLevel value
     * @uses \EnumType\PictureManagerSubscriptionLevelCodeType::valueIsValid()
     * @uses \EnumType\PictureManagerSubscriptionLevelCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $subscriptionLevel
     * @return \StructType\PictureManagerSubscriptionType
     */
    public function setSubscriptionLevel($subscriptionLevel = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PictureManagerSubscriptionLevelCodeType::valueIsValid($subscriptionLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\PictureManagerSubscriptionLevelCodeType', is_array($subscriptionLevel) ? implode(', ', $subscriptionLevel) : var_export($subscriptionLevel, true), implode(', ', \EnumType\PictureManagerSubscriptionLevelCodeType::getValidValues())), __LINE__);
        }
        $this->SubscriptionLevel = $subscriptionLevel;
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
     * @return \StructType\PictureManagerSubscriptionType
     */
    public function setFee(\StructType\AmountType $fee = null)
    {
        $this->Fee = $fee;
        return $this;
    }
    /**
     * Get StorageSize value
     * @return int|null
     */
    public function getStorageSize()
    {
        return $this->StorageSize;
    }
    /**
     * Set StorageSize value
     * @param int $storageSize
     * @return \StructType\PictureManagerSubscriptionType
     */
    public function setStorageSize($storageSize = null)
    {
        // validation for constraint: int
        if (!is_null($storageSize) && !(is_int($storageSize) || ctype_digit($storageSize))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($storageSize, true), gettype($storageSize)), __LINE__);
        }
        $this->StorageSize = $storageSize;
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
     * @return \StructType\PictureManagerSubscriptionType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
