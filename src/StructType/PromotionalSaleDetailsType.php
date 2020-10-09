<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PromotionalSaleDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: If a seller has reduced the price of a listed item with the Promotional Price Display feature, this type contains the original price of the discounted item and other information.
 * @subpackage Structs
 */
class PromotionalSaleDetailsType extends AbstractStructBase
{
    /**
     * The OriginalPrice
     * Meta information extracted from the WSDL
     * - documentation: Original price of an item whose price a seller has reduced with the Promotional Price Display feature.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $OriginalPrice;
    /**
     * The StartTime
     * Meta information extracted from the WSDL
     * - documentation: Start time of a discount for an item whose price a seller has reduced with the Promotional Price Display feature.
     * - minOccurs: 0
     * @var string
     */
    public $StartTime;
    /**
     * The EndTime
     * Meta information extracted from the WSDL
     * - documentation: End time of a discount for an item whose price a seller has reduced with the Promotional Price Display feature.
     * - minOccurs: 0
     * @var string
     */
    public $EndTime;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PromotionalSaleDetailsType
     * @uses PromotionalSaleDetailsType::setOriginalPrice()
     * @uses PromotionalSaleDetailsType::setStartTime()
     * @uses PromotionalSaleDetailsType::setEndTime()
     * @uses PromotionalSaleDetailsType::setAny()
     * @param \StructType\AmountType $originalPrice
     * @param string $startTime
     * @param string $endTime
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\AmountType $originalPrice = null, $startTime = null, $endTime = null, \DOMDocument $any = null)
    {
        $this
            ->setOriginalPrice($originalPrice)
            ->setStartTime($startTime)
            ->setEndTime($endTime)
            ->setAny($any);
    }
    /**
     * Get OriginalPrice value
     * @return \StructType\AmountType|null
     */
    public function getOriginalPrice()
    {
        return $this->OriginalPrice;
    }
    /**
     * Set OriginalPrice value
     * @param \StructType\AmountType $originalPrice
     * @return \StructType\PromotionalSaleDetailsType
     */
    public function setOriginalPrice(\StructType\AmountType $originalPrice = null)
    {
        $this->OriginalPrice = $originalPrice;
        return $this;
    }
    /**
     * Get StartTime value
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \StructType\PromotionalSaleDetailsType
     */
    public function setStartTime($startTime = null)
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        return $this;
    }
    /**
     * Get EndTime value
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \StructType\PromotionalSaleDetailsType
     */
    public function setEndTime($endTime = null)
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTime, true), gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
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
     * @return \StructType\PromotionalSaleDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
