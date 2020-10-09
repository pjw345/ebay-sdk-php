<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerFeeDiscountDashboardType StructType
 * Meta information extracted from the WSDL
 * - documentation: PowerSeller discount information (e.g., to show in a Seller Dashboard). As a PowerSeller, you can earn discounts on your monthly invoice Final Value Fees based on how well you're doing as a seller.
 * @subpackage Structs
 */
class SellerFeeDiscountDashboardType extends AbstractStructBase
{
    /**
     * The Percent
     * Meta information extracted from the WSDL
     * - documentation: PowerSeller discount as a percentage. For example, a 5% discount is returned as 0.05.
     * - minOccurs: 0
     * @var float
     */
    public $Percent;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellerFeeDiscountDashboardType
     * @uses SellerFeeDiscountDashboardType::setPercent()
     * @uses SellerFeeDiscountDashboardType::setAny()
     * @param float $percent
     * @param \DOMDocument $any
     */
    public function __construct($percent = null, \DOMDocument $any = null)
    {
        $this
            ->setPercent($percent)
            ->setAny($any);
    }
    /**
     * Get Percent value
     * @return float|null
     */
    public function getPercent()
    {
        return $this->Percent;
    }
    /**
     * Set Percent value
     * @param float $percent
     * @return \StructType\SellerFeeDiscountDashboardType
     */
    public function setPercent($percent = null)
    {
        // validation for constraint: float
        if (!is_null($percent) && !(is_float($percent) || is_numeric($percent))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($percent, true), gettype($percent)), __LINE__);
        }
        $this->Percent = $percent;
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
     * @return \StructType\SellerFeeDiscountDashboardType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
