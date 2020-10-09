<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingInsuranceType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated, as Shipping Insurance can no longer be offered by the seller to the buyer in the APIs. orders.
 * @subpackage Structs
 */
class ShippingInsuranceType extends AbstractStructBase
{
    /**
     * The InsuranceOption
     * Meta information extracted from the WSDL
     * - documentation: Whether the seller offers shipping insurance and, if so, whether the insurance is optional or required. Flat and calculated shipping.
     * - minOccurs: 0
     * @var string
     */
    public $InsuranceOption;
    /**
     * The FlatRateInsuranceRangeCost
     * Meta information extracted from the WSDL
     * - documentation: A pairing of range of item price total and insurance cost. For SetShippingDiscountProfiles, if InsuranceOption is Optional or Required, you must submit all range pairs. For those ranges that do not apply, set the cost to 0.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\FlatRateInsuranceRangeCostType[]
     */
    public $FlatRateInsuranceRangeCost;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ShippingInsuranceType
     * @uses ShippingInsuranceType::setInsuranceOption()
     * @uses ShippingInsuranceType::setFlatRateInsuranceRangeCost()
     * @uses ShippingInsuranceType::setAny()
     * @param string $insuranceOption
     * @param \StructType\FlatRateInsuranceRangeCostType[] $flatRateInsuranceRangeCost
     * @param \DOMDocument $any
     */
    public function __construct($insuranceOption = null, array $flatRateInsuranceRangeCost = array(), \DOMDocument $any = null)
    {
        $this
            ->setInsuranceOption($insuranceOption)
            ->setFlatRateInsuranceRangeCost($flatRateInsuranceRangeCost)
            ->setAny($any);
    }
    /**
     * Get InsuranceOption value
     * @return string|null
     */
    public function getInsuranceOption()
    {
        return $this->InsuranceOption;
    }
    /**
     * Set InsuranceOption value
     * @uses \EnumType\InsuranceOptionCodeType::valueIsValid()
     * @uses \EnumType\InsuranceOptionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $insuranceOption
     * @return \StructType\ShippingInsuranceType
     */
    public function setInsuranceOption($insuranceOption = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\InsuranceOptionCodeType::valueIsValid($insuranceOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\InsuranceOptionCodeType', is_array($insuranceOption) ? implode(', ', $insuranceOption) : var_export($insuranceOption, true), implode(', ', \EnumType\InsuranceOptionCodeType::getValidValues())), __LINE__);
        }
        $this->InsuranceOption = $insuranceOption;
        return $this;
    }
    /**
     * Get FlatRateInsuranceRangeCost value
     * @return \StructType\FlatRateInsuranceRangeCostType[]|null
     */
    public function getFlatRateInsuranceRangeCost()
    {
        return $this->FlatRateInsuranceRangeCost;
    }
    /**
     * This method is responsible for validating the values passed to the setFlatRateInsuranceRangeCost method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFlatRateInsuranceRangeCost method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFlatRateInsuranceRangeCostForArrayConstraintsFromSetFlatRateInsuranceRangeCost(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingInsuranceTypeFlatRateInsuranceRangeCostItem) {
            // validation for constraint: itemType
            if (!$shippingInsuranceTypeFlatRateInsuranceRangeCostItem instanceof \StructType\FlatRateInsuranceRangeCostType) {
                $invalidValues[] = is_object($shippingInsuranceTypeFlatRateInsuranceRangeCostItem) ? get_class($shippingInsuranceTypeFlatRateInsuranceRangeCostItem) : sprintf('%s(%s)', gettype($shippingInsuranceTypeFlatRateInsuranceRangeCostItem), var_export($shippingInsuranceTypeFlatRateInsuranceRangeCostItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FlatRateInsuranceRangeCost property can only contain items of type \StructType\FlatRateInsuranceRangeCostType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set FlatRateInsuranceRangeCost value
     * @throws \InvalidArgumentException
     * @param \StructType\FlatRateInsuranceRangeCostType[] $flatRateInsuranceRangeCost
     * @return \StructType\ShippingInsuranceType
     */
    public function setFlatRateInsuranceRangeCost(array $flatRateInsuranceRangeCost = array())
    {
        // validation for constraint: array
        if ('' !== ($flatRateInsuranceRangeCostArrayErrorMessage = self::validateFlatRateInsuranceRangeCostForArrayConstraintsFromSetFlatRateInsuranceRangeCost($flatRateInsuranceRangeCost))) {
            throw new \InvalidArgumentException($flatRateInsuranceRangeCostArrayErrorMessage, __LINE__);
        }
        $this->FlatRateInsuranceRangeCost = $flatRateInsuranceRangeCost;
        return $this;
    }
    /**
     * Add item to FlatRateInsuranceRangeCost value
     * @throws \InvalidArgumentException
     * @param \StructType\FlatRateInsuranceRangeCostType $item
     * @return \StructType\ShippingInsuranceType
     */
    public function addToFlatRateInsuranceRangeCost(\StructType\FlatRateInsuranceRangeCostType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\FlatRateInsuranceRangeCostType) {
            throw new \InvalidArgumentException(sprintf('The FlatRateInsuranceRangeCost property can only contain items of type \StructType\FlatRateInsuranceRangeCostType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FlatRateInsuranceRangeCost[] = $item;
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
     * @return \StructType\ShippingInsuranceType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
