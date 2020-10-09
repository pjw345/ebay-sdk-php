<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PromotionalShippingDiscountDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Details of a promotional shipping discount.
 * @subpackage Structs
 */
class PromotionalShippingDiscountDetailsType extends AbstractStructBase
{
    /**
     * The DiscountName
     * Meta information extracted from the WSDL
     * - documentation: The type of promotional shipping discount that is detailed in the profile. If the discount type is <code>MaximumShippingCostPerOrder</code>, see <b>ShippingCost</b>. If the discount type is <code>ShippingCostXForAmountY</code>, see
     * <b>ShippingCost</b> and <b>OrderAmount</b>. If the discount type is <code>ShippingCostXForItemCountN</code>, see <b>ShippingCost</b> and <b>ItemCount</b>.
     * - minOccurs: 0
     * @var string
     */
    public $DiscountName;
    /**
     * The ShippingCost
     * Meta information extracted from the WSDL
     * - documentation: This is shipping cost X when <b>DiscountName</b> is either <code>ShippingCostXForAmountY</code> or <code>ShippingCostXForItemCountN</code>, and is the maximum cost when <b>DiscountName</b> is <code>MaximumShippingCostPerOrder</code>.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $ShippingCost;
    /**
     * The OrderAmount
     * Meta information extracted from the WSDL
     * - documentation: This is the cost Y of the order (not including shipping cost) when <b>DiscountName</b> is set to <code>ShippingCostXForAmountY</code>.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $OrderAmount;
    /**
     * The ItemCount
     * Meta information extracted from the WSDL
     * - documentation: This is the number of items when <b>DiscountName</b> is set to <code>ShippingCostXForItemsY</code>.
     * - minOccurs: 0
     * @var int
     */
    public $ItemCount;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PromotionalShippingDiscountDetailsType
     * @uses PromotionalShippingDiscountDetailsType::setDiscountName()
     * @uses PromotionalShippingDiscountDetailsType::setShippingCost()
     * @uses PromotionalShippingDiscountDetailsType::setOrderAmount()
     * @uses PromotionalShippingDiscountDetailsType::setItemCount()
     * @uses PromotionalShippingDiscountDetailsType::setAny()
     * @param string $discountName
     * @param \StructType\AmountType $shippingCost
     * @param \StructType\AmountType $orderAmount
     * @param int $itemCount
     * @param \DOMDocument $any
     */
    public function __construct($discountName = null, \StructType\AmountType $shippingCost = null, \StructType\AmountType $orderAmount = null, $itemCount = null, \DOMDocument $any = null)
    {
        $this
            ->setDiscountName($discountName)
            ->setShippingCost($shippingCost)
            ->setOrderAmount($orderAmount)
            ->setItemCount($itemCount)
            ->setAny($any);
    }
    /**
     * Get DiscountName value
     * @return string|null
     */
    public function getDiscountName()
    {
        return $this->DiscountName;
    }
    /**
     * Set DiscountName value
     * @uses \EnumType\DiscountNameCodeType::valueIsValid()
     * @uses \EnumType\DiscountNameCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $discountName
     * @return \StructType\PromotionalShippingDiscountDetailsType
     */
    public function setDiscountName($discountName = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DiscountNameCodeType::valueIsValid($discountName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DiscountNameCodeType', is_array($discountName) ? implode(', ', $discountName) : var_export($discountName, true), implode(', ', \EnumType\DiscountNameCodeType::getValidValues())), __LINE__);
        }
        $this->DiscountName = $discountName;
        return $this;
    }
    /**
     * Get ShippingCost value
     * @return \StructType\AmountType|null
     */
    public function getShippingCost()
    {
        return $this->ShippingCost;
    }
    /**
     * Set ShippingCost value
     * @param \StructType\AmountType $shippingCost
     * @return \StructType\PromotionalShippingDiscountDetailsType
     */
    public function setShippingCost(\StructType\AmountType $shippingCost = null)
    {
        $this->ShippingCost = $shippingCost;
        return $this;
    }
    /**
     * Get OrderAmount value
     * @return \StructType\AmountType|null
     */
    public function getOrderAmount()
    {
        return $this->OrderAmount;
    }
    /**
     * Set OrderAmount value
     * @param \StructType\AmountType $orderAmount
     * @return \StructType\PromotionalShippingDiscountDetailsType
     */
    public function setOrderAmount(\StructType\AmountType $orderAmount = null)
    {
        $this->OrderAmount = $orderAmount;
        return $this;
    }
    /**
     * Get ItemCount value
     * @return int|null
     */
    public function getItemCount()
    {
        return $this->ItemCount;
    }
    /**
     * Set ItemCount value
     * @param int $itemCount
     * @return \StructType\PromotionalShippingDiscountDetailsType
     */
    public function setItemCount($itemCount = null)
    {
        // validation for constraint: int
        if (!is_null($itemCount) && !(is_int($itemCount) || ctype_digit($itemCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemCount, true), gettype($itemCount)), __LINE__);
        }
        $this->ItemCount = $itemCount;
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
     * @return \StructType\PromotionalShippingDiscountDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
