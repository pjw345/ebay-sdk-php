<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PromotionDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class PromotionDetailsType extends AbstractStructBase
{
    /**
     * The PromotionPrice
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $PromotionPrice;
    /**
     * The PromotionPriceType
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $PromotionPriceType;
    /**
     * The BidCount
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $BidCount;
    /**
     * The ConvertedPromotionPrice
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $ConvertedPromotionPrice;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PromotionDetailsType
     * @uses PromotionDetailsType::setPromotionPrice()
     * @uses PromotionDetailsType::setPromotionPriceType()
     * @uses PromotionDetailsType::setBidCount()
     * @uses PromotionDetailsType::setConvertedPromotionPrice()
     * @uses PromotionDetailsType::setAny()
     * @param \StructType\AmountType $promotionPrice
     * @param string $promotionPriceType
     * @param int $bidCount
     * @param \StructType\AmountType $convertedPromotionPrice
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\AmountType $promotionPrice = null, $promotionPriceType = null, $bidCount = null, \StructType\AmountType $convertedPromotionPrice = null, \DOMDocument $any = null)
    {
        $this
            ->setPromotionPrice($promotionPrice)
            ->setPromotionPriceType($promotionPriceType)
            ->setBidCount($bidCount)
            ->setConvertedPromotionPrice($convertedPromotionPrice)
            ->setAny($any);
    }
    /**
     * Get PromotionPrice value
     * @return \StructType\AmountType|null
     */
    public function getPromotionPrice()
    {
        return $this->PromotionPrice;
    }
    /**
     * Set PromotionPrice value
     * @param \StructType\AmountType $promotionPrice
     * @return \StructType\PromotionDetailsType
     */
    public function setPromotionPrice(\StructType\AmountType $promotionPrice = null)
    {
        $this->PromotionPrice = $promotionPrice;
        return $this;
    }
    /**
     * Get PromotionPriceType value
     * @return string|null
     */
    public function getPromotionPriceType()
    {
        return $this->PromotionPriceType;
    }
    /**
     * Set PromotionPriceType value
     * @uses \EnumType\PromotionItemPriceTypeCodeType::valueIsValid()
     * @uses \EnumType\PromotionItemPriceTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $promotionPriceType
     * @return \StructType\PromotionDetailsType
     */
    public function setPromotionPriceType($promotionPriceType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PromotionItemPriceTypeCodeType::valueIsValid($promotionPriceType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\PromotionItemPriceTypeCodeType', is_array($promotionPriceType) ? implode(', ', $promotionPriceType) : var_export($promotionPriceType, true), implode(', ', \EnumType\PromotionItemPriceTypeCodeType::getValidValues())), __LINE__);
        }
        $this->PromotionPriceType = $promotionPriceType;
        return $this;
    }
    /**
     * Get BidCount value
     * @return int|null
     */
    public function getBidCount()
    {
        return $this->BidCount;
    }
    /**
     * Set BidCount value
     * @param int $bidCount
     * @return \StructType\PromotionDetailsType
     */
    public function setBidCount($bidCount = null)
    {
        // validation for constraint: int
        if (!is_null($bidCount) && !(is_int($bidCount) || ctype_digit($bidCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bidCount, true), gettype($bidCount)), __LINE__);
        }
        $this->BidCount = $bidCount;
        return $this;
    }
    /**
     * Get ConvertedPromotionPrice value
     * @return \StructType\AmountType|null
     */
    public function getConvertedPromotionPrice()
    {
        return $this->ConvertedPromotionPrice;
    }
    /**
     * Set ConvertedPromotionPrice value
     * @param \StructType\AmountType $convertedPromotionPrice
     * @return \StructType\PromotionDetailsType
     */
    public function setConvertedPromotionPrice(\StructType\AmountType $convertedPromotionPrice = null)
    {
        $this->ConvertedPromotionPrice = $convertedPromotionPrice;
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
     * @return \StructType\PromotionDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
