<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculatedHandlingDiscountType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>CalculatedHandlingDiscount</b> container that is used in the <b>SetShippingDiscountProfiles</b> call to specify the rules used to determine package handling costs for an order in which calculated shipping is
 * used.
 * @subpackage Structs
 */
class CalculatedHandlingDiscountType extends AbstractStructBase
{
    /**
     * The DiscountName
     * Meta information extracted from the WSDL
     * - documentation: The type of discount that is detailed in the profile. If the selection is <code>EachAdditionalAmount</code>, <code>EachAdditionalAmountOff</code> or <code>EachAdditionalPercentOff</code>, the value is set in the child element of same
     * name in <b>CalculatedHandlingDiscount</b>. If the selection is <code>CombinedHandlingFee</code>, specify the amount in <b>CalculatedHandlingDiscount.OrderHandlingAmount</b>. If the selection is <code>IndividualHandlingFee</code>, the amount is
     * determined by eBay by adding the fees of the individual items.
     * - minOccurs: 0
     * @var string
     */
    public $DiscountName;
    /**
     * The OrderHandlingAmount
     * Meta information extracted from the WSDL
     * - documentation: If specified, this is the fixed shipping cost to charge for an order, regardless of the number of items in the order. This field is mutually exclusive with the other amount and percentage fields within this type. This field only
     * applies when the specified <b>DiscountName</b> value is <code>CombinedHandlingFee</code>.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $OrderHandlingAmount;
    /**
     * The EachAdditionalAmount
     * Meta information extracted from the WSDL
     * - documentation: The packaging/handling cost for each item beyond the first item (where the item with the highest packaging/handling cost is selected by eBay as the first item). Let's say the buyer purchases three items, each assigned a
     * packaging/handling cost of $8, and the seller set <b>EachAdditionalAmount</b> to $6. The packaging/handling cost for three items would normally be $24, but since the seller specified $6, the total packaging/handling cost would be $8 + $6 + $6, or
     * $20. This field is mutually exclusive with the other amount and percentage fields within this type. This field only applies when the <b>DiscountName</b> value is <code>EachAdditionalAmount</code>.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $EachAdditionalAmount;
    /**
     * The EachAdditionalOffAmount
     * Meta information extracted from the WSDL
     * - documentation: The amount by which to reduce the packaging/handling cost for each item beyond the first item (where the item with the highest packaging/handling cost is selected by eBay as the first item). Let's say the buyer purchases three items,
     * each assigned a packaging/handling cost of $8, and the seller set <b>EachAdditionalAmountOff</b> to $2. The packaging/handling cost for three items would normally be $24, but since the seller specified $2, the total packaging/handling cost would be
     * $24 - (two additional items x $2), or $20. This field is mutually exclusive with the other amount and percentage fields within this type. This field only applies when the <b>DiscountName</b> value is <code>EachAdditionalOffAmount</code>.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $EachAdditionalOffAmount;
    /**
     * The EachAdditionalPercentOff
     * Meta information extracted from the WSDL
     * - documentation: The percentage by which to reduce the packaging/handling cost for each item beyond the first item (where the item with the highest packaging/handling cost is selected by eBay as the first item). Let's say the buyer purchases three
     * items, each assigned a packaging/handling cost of $8, and the seller set <b>EachAdditionalPercentOff</b> to 0.25. The packaging/handling cost for three items would normally be $24, but since the seller specified 0.25 ($2 out of 8), the total
     * packaging/handling cost would be $24 - (two additional items x $2), or $20. This field is mutually exclusive with the amount fields within this type. This field only applies when the <b>DiscountName</b> value is <code>EachAdditionalPercentOff</code>.
     * - minOccurs: 0
     * @var float
     */
    public $EachAdditionalPercentOff;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for CalculatedHandlingDiscountType
     * @uses CalculatedHandlingDiscountType::setDiscountName()
     * @uses CalculatedHandlingDiscountType::setOrderHandlingAmount()
     * @uses CalculatedHandlingDiscountType::setEachAdditionalAmount()
     * @uses CalculatedHandlingDiscountType::setEachAdditionalOffAmount()
     * @uses CalculatedHandlingDiscountType::setEachAdditionalPercentOff()
     * @uses CalculatedHandlingDiscountType::setAny()
     * @param string $discountName
     * @param \StructType\AmountType $orderHandlingAmount
     * @param \StructType\AmountType $eachAdditionalAmount
     * @param \StructType\AmountType $eachAdditionalOffAmount
     * @param float $eachAdditionalPercentOff
     * @param \DOMDocument $any
     */
    public function __construct($discountName = null, \StructType\AmountType $orderHandlingAmount = null, \StructType\AmountType $eachAdditionalAmount = null, \StructType\AmountType $eachAdditionalOffAmount = null, $eachAdditionalPercentOff = null, \DOMDocument $any = null)
    {
        $this
            ->setDiscountName($discountName)
            ->setOrderHandlingAmount($orderHandlingAmount)
            ->setEachAdditionalAmount($eachAdditionalAmount)
            ->setEachAdditionalOffAmount($eachAdditionalOffAmount)
            ->setEachAdditionalPercentOff($eachAdditionalPercentOff)
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
     * @uses \EnumType\HandlingNameCodeType::valueIsValid()
     * @uses \EnumType\HandlingNameCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $discountName
     * @return \StructType\CalculatedHandlingDiscountType
     */
    public function setDiscountName($discountName = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\HandlingNameCodeType::valueIsValid($discountName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\HandlingNameCodeType', is_array($discountName) ? implode(', ', $discountName) : var_export($discountName, true), implode(', ', \EnumType\HandlingNameCodeType::getValidValues())), __LINE__);
        }
        $this->DiscountName = $discountName;
        return $this;
    }
    /**
     * Get OrderHandlingAmount value
     * @return \StructType\AmountType|null
     */
    public function getOrderHandlingAmount()
    {
        return $this->OrderHandlingAmount;
    }
    /**
     * Set OrderHandlingAmount value
     * @param \StructType\AmountType $orderHandlingAmount
     * @return \StructType\CalculatedHandlingDiscountType
     */
    public function setOrderHandlingAmount(\StructType\AmountType $orderHandlingAmount = null)
    {
        $this->OrderHandlingAmount = $orderHandlingAmount;
        return $this;
    }
    /**
     * Get EachAdditionalAmount value
     * @return \StructType\AmountType|null
     */
    public function getEachAdditionalAmount()
    {
        return $this->EachAdditionalAmount;
    }
    /**
     * Set EachAdditionalAmount value
     * @param \StructType\AmountType $eachAdditionalAmount
     * @return \StructType\CalculatedHandlingDiscountType
     */
    public function setEachAdditionalAmount(\StructType\AmountType $eachAdditionalAmount = null)
    {
        $this->EachAdditionalAmount = $eachAdditionalAmount;
        return $this;
    }
    /**
     * Get EachAdditionalOffAmount value
     * @return \StructType\AmountType|null
     */
    public function getEachAdditionalOffAmount()
    {
        return $this->EachAdditionalOffAmount;
    }
    /**
     * Set EachAdditionalOffAmount value
     * @param \StructType\AmountType $eachAdditionalOffAmount
     * @return \StructType\CalculatedHandlingDiscountType
     */
    public function setEachAdditionalOffAmount(\StructType\AmountType $eachAdditionalOffAmount = null)
    {
        $this->EachAdditionalOffAmount = $eachAdditionalOffAmount;
        return $this;
    }
    /**
     * Get EachAdditionalPercentOff value
     * @return float|null
     */
    public function getEachAdditionalPercentOff()
    {
        return $this->EachAdditionalPercentOff;
    }
    /**
     * Set EachAdditionalPercentOff value
     * @param float $eachAdditionalPercentOff
     * @return \StructType\CalculatedHandlingDiscountType
     */
    public function setEachAdditionalPercentOff($eachAdditionalPercentOff = null)
    {
        // validation for constraint: float
        if (!is_null($eachAdditionalPercentOff) && !(is_float($eachAdditionalPercentOff) || is_numeric($eachAdditionalPercentOff))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($eachAdditionalPercentOff, true), gettype($eachAdditionalPercentOff)), __LINE__);
        }
        $this->EachAdditionalPercentOff = $eachAdditionalPercentOff;
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
     * @return \StructType\CalculatedHandlingDiscountType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
