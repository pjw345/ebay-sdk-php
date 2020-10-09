<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiscountProfileType StructType
 * Meta information extracted from the WSDL
 * - documentation: Details of a flat or calculated shipping discount rule. Shipping Discount Rules can be set up through the <b>SetShippingDiscountProfiles</b> call or through My eBay.
 * @subpackage Structs
 */
class DiscountProfileType extends AbstractStructBase
{
    /**
     * The DiscountProfileID
     * Meta information extracted from the WSDL
     * - documentation: The unique eBay-created unique identifier for the shipping discount, assigned when the shipping discount rule is created. <br/> In a <b>SetShippingDiscountProfiles</b> call, <ul> <li>If the value of <b>ModifyActionCode</b> is set to
     * <code>Add</code>, this field is not applicable and is ignored <li>If provided.</li> <li>If the value of <b>Mod <li>IfyActionCode</b> is set to <code>Update</code>, all fields of the modified rule must be provided, even if the values are not
     * changing.</li> <li>If the value of <b>ModifyActionCode</b> is set to <code>Delete</code>, either the <b>DiscountProfileID</b> value or is <b>DiscountProfileName</b> value is required, the <b>MappingDiscountProfileID</b> is optional, and all other
     * fields of the <b>DiscountProfile</b> container are ignored.</li> </ul>
     * - minOccurs: 0
     * @var string
     */
    public $DiscountProfileID;
    /**
     * The DiscountProfileName
     * Meta information extracted from the WSDL
     * - documentation: The seller-provided title for the shipping discount rule. <br/> In a <b>SetShippingDiscountProfiles</b> call, <ul> <li>If the value of <b>ModifyActionCode</b> is set to <code>Add</code>, this field is ignored (if provided) if this is
     * the first shipping discount rule being created, but this field is required if there is more than one existing shipping discount rule of that type (flat rate or calculated)</li> <li>If the value of <b>ModifyActionCode</b> is set to
     * <code>Update</code>, all fields of the modified rule must be provided, even if the values are not changing</li> <li>If the value of <b>ModifyActionCode</b> is set to <code>Delete</code>, the <b>DiscountProfileID</b> is required, the
     * <b>MappingDiscountProfileID</b> is optional, and all other fields of the <b>DiscountProfile</b> container are ignored</li> <li>If the value of <b>ModifyActionCode</b> is set to <code>Delete</code>, either the <b>DiscountProfileID</b> value or is
     * <b>DiscountProfileName</b> value is required, the <b>MappingDiscountProfileID</b> is optional, and all other fields of the <b>DiscountProfile</b> container are ignored</li> </ul>
     * - minOccurs: 0
     * @var string
     */
    public $DiscountProfileName;
    /**
     * The EachAdditionalAmount
     * Meta information extracted from the WSDL
     * - documentation: The cost to ship each item beyond the first item (where the item with the highest shipping cost is selected by eBay as the first item). Let's say the buyer purchases three items, each set to ship for $8, and the seller set the
     * <b>EachAdditionalAmount</b> to $6. The cost to ship three items would normally be $24, but since the seller specified $6, the total shipping cost would be $8 + $6 + $6, or $20. This field is only applicable for flat-rate shipping.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $EachAdditionalAmount;
    /**
     * The EachAdditionalAmountOff
     * Meta information extracted from the WSDL
     * - documentation: The amount by which to reduce the cost to ship each item beyond the first item (where the item with the highest shipping cost is selected by eBay as the first item). Let's say the buyer purchases three items, each set to ship for $8,
     * and the seller set <b>EachAdditionalAmountOff</b> to $2. The cost to ship three items would normally be $24, but since the seller specified $2, the total shipping cost would be <i>$24 - (two additional items x $2)</i>, or $20. This field is only
     * applicable for flat-rate shipping.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $EachAdditionalAmountOff;
    /**
     * The EachAdditionalPercentOff
     * Meta information extracted from the WSDL
     * - documentation: The percentage by which to reduce the cost to ship each item beyond the first item (where the item with the highest shipping cost is selected by eBay as the first item). Let's say the buyer purchases three items, each set to ship for
     * $8, and the seller set <b>EachAdditionalPercentOff</b> to 0.25. The cost to ship three items would normally be $24, but since the seller specified 0.25 ($2 out of $8), the total shipping cost would be <i>$24 - (two additional items x $2)</i>, or $20.
     * This field is only applicable for flat-rate shipping.
     * - minOccurs: 0
     * @var float
     */
    public $EachAdditionalPercentOff;
    /**
     * The WeightOff
     * Meta information extracted from the WSDL
     * - documentation: The amount of weight to subtract for each item beyond the first item before shipping costs are calculated. For example, there may be less packing material when the items are combined in one box than if they were shipped individually.
     * Let's say the buyer purchases three items, each 10 oz. in weight, and the seller set <b>WeightOff</b> to 2 oz. The combined weight would be 30 oz., but since the seller specified 2 oz. off, the total weight for shipping cost calculation would be
     * <i>30 oz. - (two additional items x 2 oz.)</i>, or 26 oz. This field is only applicable for calculated shipping.
     * - minOccurs: 0
     * @var \StructType\MeasureType
     */
    public $WeightOff;
    /**
     * The MappedDiscountProfileID
     * Meta information extracted from the WSDL
     * - documentation: For <b>SetShippingDiscountProfiles</b>, if <b>MappedDiscountProfileID</b> is omitted when <b>ModifyActionCode</b> is set to <code>Delete</code>, any listings currently using the profile identified by <b>DiscountProfileID</b> will
     * have that profile removed.
     * - minOccurs: 0
     * @var string
     */
    public $MappedDiscountProfileID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for DiscountProfileType
     * @uses DiscountProfileType::setDiscountProfileID()
     * @uses DiscountProfileType::setDiscountProfileName()
     * @uses DiscountProfileType::setEachAdditionalAmount()
     * @uses DiscountProfileType::setEachAdditionalAmountOff()
     * @uses DiscountProfileType::setEachAdditionalPercentOff()
     * @uses DiscountProfileType::setWeightOff()
     * @uses DiscountProfileType::setMappedDiscountProfileID()
     * @uses DiscountProfileType::setAny()
     * @param string $discountProfileID
     * @param string $discountProfileName
     * @param \StructType\AmountType $eachAdditionalAmount
     * @param \StructType\AmountType $eachAdditionalAmountOff
     * @param float $eachAdditionalPercentOff
     * @param \StructType\MeasureType $weightOff
     * @param string $mappedDiscountProfileID
     * @param \DOMDocument $any
     */
    public function __construct($discountProfileID = null, $discountProfileName = null, \StructType\AmountType $eachAdditionalAmount = null, \StructType\AmountType $eachAdditionalAmountOff = null, $eachAdditionalPercentOff = null, \StructType\MeasureType $weightOff = null, $mappedDiscountProfileID = null, \DOMDocument $any = null)
    {
        $this
            ->setDiscountProfileID($discountProfileID)
            ->setDiscountProfileName($discountProfileName)
            ->setEachAdditionalAmount($eachAdditionalAmount)
            ->setEachAdditionalAmountOff($eachAdditionalAmountOff)
            ->setEachAdditionalPercentOff($eachAdditionalPercentOff)
            ->setWeightOff($weightOff)
            ->setMappedDiscountProfileID($mappedDiscountProfileID)
            ->setAny($any);
    }
    /**
     * Get DiscountProfileID value
     * @return string|null
     */
    public function getDiscountProfileID()
    {
        return $this->DiscountProfileID;
    }
    /**
     * Set DiscountProfileID value
     * @param string $discountProfileID
     * @return \StructType\DiscountProfileType
     */
    public function setDiscountProfileID($discountProfileID = null)
    {
        // validation for constraint: string
        if (!is_null($discountProfileID) && !is_string($discountProfileID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($discountProfileID, true), gettype($discountProfileID)), __LINE__);
        }
        $this->DiscountProfileID = $discountProfileID;
        return $this;
    }
    /**
     * Get DiscountProfileName value
     * @return string|null
     */
    public function getDiscountProfileName()
    {
        return $this->DiscountProfileName;
    }
    /**
     * Set DiscountProfileName value
     * @param string $discountProfileName
     * @return \StructType\DiscountProfileType
     */
    public function setDiscountProfileName($discountProfileName = null)
    {
        // validation for constraint: string
        if (!is_null($discountProfileName) && !is_string($discountProfileName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($discountProfileName, true), gettype($discountProfileName)), __LINE__);
        }
        $this->DiscountProfileName = $discountProfileName;
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
     * @return \StructType\DiscountProfileType
     */
    public function setEachAdditionalAmount(\StructType\AmountType $eachAdditionalAmount = null)
    {
        $this->EachAdditionalAmount = $eachAdditionalAmount;
        return $this;
    }
    /**
     * Get EachAdditionalAmountOff value
     * @return \StructType\AmountType|null
     */
    public function getEachAdditionalAmountOff()
    {
        return $this->EachAdditionalAmountOff;
    }
    /**
     * Set EachAdditionalAmountOff value
     * @param \StructType\AmountType $eachAdditionalAmountOff
     * @return \StructType\DiscountProfileType
     */
    public function setEachAdditionalAmountOff(\StructType\AmountType $eachAdditionalAmountOff = null)
    {
        $this->EachAdditionalAmountOff = $eachAdditionalAmountOff;
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
     * @return \StructType\DiscountProfileType
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
     * Get WeightOff value
     * @return \StructType\MeasureType|null
     */
    public function getWeightOff()
    {
        return $this->WeightOff;
    }
    /**
     * Set WeightOff value
     * @param \StructType\MeasureType $weightOff
     * @return \StructType\DiscountProfileType
     */
    public function setWeightOff(\StructType\MeasureType $weightOff = null)
    {
        $this->WeightOff = $weightOff;
        return $this;
    }
    /**
     * Get MappedDiscountProfileID value
     * @return string|null
     */
    public function getMappedDiscountProfileID()
    {
        return $this->MappedDiscountProfileID;
    }
    /**
     * Set MappedDiscountProfileID value
     * @param string $mappedDiscountProfileID
     * @return \StructType\DiscountProfileType
     */
    public function setMappedDiscountProfileID($mappedDiscountProfileID = null)
    {
        // validation for constraint: string
        if (!is_null($mappedDiscountProfileID) && !is_string($mappedDiscountProfileID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mappedDiscountProfileID, true), gettype($mappedDiscountProfileID)), __LINE__);
        }
        $this->MappedDiscountProfileID = $mappedDiscountProfileID;
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
     * @return \StructType\DiscountProfileType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
