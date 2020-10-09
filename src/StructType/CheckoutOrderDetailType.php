<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckoutOrderDetailType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class CheckoutOrderDetailType extends AbstractStructBase
{
    /**
     * The TotalCartMerchandiseCost
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $TotalCartMerchandiseCost;
    /**
     * The TotalCartShippingCost
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $TotalCartShippingCost;
    /**
     * The TotalTaxAmount
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $TotalTaxAmount;
    /**
     * The TotalAmount
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $TotalAmount;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for CheckoutOrderDetailType
     * @uses CheckoutOrderDetailType::setTotalCartMerchandiseCost()
     * @uses CheckoutOrderDetailType::setTotalCartShippingCost()
     * @uses CheckoutOrderDetailType::setTotalTaxAmount()
     * @uses CheckoutOrderDetailType::setTotalAmount()
     * @uses CheckoutOrderDetailType::setAny()
     * @param \StructType\AmountType $totalCartMerchandiseCost
     * @param \StructType\AmountType $totalCartShippingCost
     * @param \StructType\AmountType $totalTaxAmount
     * @param \StructType\AmountType $totalAmount
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\AmountType $totalCartMerchandiseCost = null, \StructType\AmountType $totalCartShippingCost = null, \StructType\AmountType $totalTaxAmount = null, \StructType\AmountType $totalAmount = null, \DOMDocument $any = null)
    {
        $this
            ->setTotalCartMerchandiseCost($totalCartMerchandiseCost)
            ->setTotalCartShippingCost($totalCartShippingCost)
            ->setTotalTaxAmount($totalTaxAmount)
            ->setTotalAmount($totalAmount)
            ->setAny($any);
    }
    /**
     * Get TotalCartMerchandiseCost value
     * @return \StructType\AmountType|null
     */
    public function getTotalCartMerchandiseCost()
    {
        return $this->TotalCartMerchandiseCost;
    }
    /**
     * Set TotalCartMerchandiseCost value
     * @param \StructType\AmountType $totalCartMerchandiseCost
     * @return \StructType\CheckoutOrderDetailType
     */
    public function setTotalCartMerchandiseCost(\StructType\AmountType $totalCartMerchandiseCost = null)
    {
        $this->TotalCartMerchandiseCost = $totalCartMerchandiseCost;
        return $this;
    }
    /**
     * Get TotalCartShippingCost value
     * @return \StructType\AmountType|null
     */
    public function getTotalCartShippingCost()
    {
        return $this->TotalCartShippingCost;
    }
    /**
     * Set TotalCartShippingCost value
     * @param \StructType\AmountType $totalCartShippingCost
     * @return \StructType\CheckoutOrderDetailType
     */
    public function setTotalCartShippingCost(\StructType\AmountType $totalCartShippingCost = null)
    {
        $this->TotalCartShippingCost = $totalCartShippingCost;
        return $this;
    }
    /**
     * Get TotalTaxAmount value
     * @return \StructType\AmountType|null
     */
    public function getTotalTaxAmount()
    {
        return $this->TotalTaxAmount;
    }
    /**
     * Set TotalTaxAmount value
     * @param \StructType\AmountType $totalTaxAmount
     * @return \StructType\CheckoutOrderDetailType
     */
    public function setTotalTaxAmount(\StructType\AmountType $totalTaxAmount = null)
    {
        $this->TotalTaxAmount = $totalTaxAmount;
        return $this;
    }
    /**
     * Get TotalAmount value
     * @return \StructType\AmountType|null
     */
    public function getTotalAmount()
    {
        return $this->TotalAmount;
    }
    /**
     * Set TotalAmount value
     * @param \StructType\AmountType $totalAmount
     * @return \StructType\CheckoutOrderDetailType
     */
    public function setTotalAmount(\StructType\AmountType $totalAmount = null)
    {
        $this->TotalAmount = $totalAmount;
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
     * @return \StructType\CheckoutOrderDetailType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
