<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlatShippingPreferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class FlatShippingPreferencesType extends AbstractStructBase
{
    /**
     * The AmountPerAdditionalItem
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $AmountPerAdditionalItem;
    /**
     * The DeductionAmountPerAdditionalItem
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $DeductionAmountPerAdditionalItem;
    /**
     * The FlatRateInsuranceRangeCost
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: 6
     * - minOccurs: 0
     * @var \StructType\FlatRateInsuranceRangeCostType[]
     */
    public $FlatRateInsuranceRangeCost;
    /**
     * The FlatShippingRateOption
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $FlatShippingRateOption;
    /**
     * The InsuranceOption
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $InsuranceOption;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for FlatShippingPreferencesType
     * @uses FlatShippingPreferencesType::setAmountPerAdditionalItem()
     * @uses FlatShippingPreferencesType::setDeductionAmountPerAdditionalItem()
     * @uses FlatShippingPreferencesType::setFlatRateInsuranceRangeCost()
     * @uses FlatShippingPreferencesType::setFlatShippingRateOption()
     * @uses FlatShippingPreferencesType::setInsuranceOption()
     * @uses FlatShippingPreferencesType::setAny()
     * @param \StructType\AmountType $amountPerAdditionalItem
     * @param \StructType\AmountType $deductionAmountPerAdditionalItem
     * @param \StructType\FlatRateInsuranceRangeCostType[] $flatRateInsuranceRangeCost
     * @param string $flatShippingRateOption
     * @param string $insuranceOption
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\AmountType $amountPerAdditionalItem = null, \StructType\AmountType $deductionAmountPerAdditionalItem = null, array $flatRateInsuranceRangeCost = array(), $flatShippingRateOption = null, $insuranceOption = null, \DOMDocument $any = null)
    {
        $this
            ->setAmountPerAdditionalItem($amountPerAdditionalItem)
            ->setDeductionAmountPerAdditionalItem($deductionAmountPerAdditionalItem)
            ->setFlatRateInsuranceRangeCost($flatRateInsuranceRangeCost)
            ->setFlatShippingRateOption($flatShippingRateOption)
            ->setInsuranceOption($insuranceOption)
            ->setAny($any);
    }
    /**
     * Get AmountPerAdditionalItem value
     * @return \StructType\AmountType|null
     */
    public function getAmountPerAdditionalItem()
    {
        return $this->AmountPerAdditionalItem;
    }
    /**
     * Set AmountPerAdditionalItem value
     * @param \StructType\AmountType $amountPerAdditionalItem
     * @return \StructType\FlatShippingPreferencesType
     */
    public function setAmountPerAdditionalItem(\StructType\AmountType $amountPerAdditionalItem = null)
    {
        $this->AmountPerAdditionalItem = $amountPerAdditionalItem;
        return $this;
    }
    /**
     * Get DeductionAmountPerAdditionalItem value
     * @return \StructType\AmountType|null
     */
    public function getDeductionAmountPerAdditionalItem()
    {
        return $this->DeductionAmountPerAdditionalItem;
    }
    /**
     * Set DeductionAmountPerAdditionalItem value
     * @param \StructType\AmountType $deductionAmountPerAdditionalItem
     * @return \StructType\FlatShippingPreferencesType
     */
    public function setDeductionAmountPerAdditionalItem(\StructType\AmountType $deductionAmountPerAdditionalItem = null)
    {
        $this->DeductionAmountPerAdditionalItem = $deductionAmountPerAdditionalItem;
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
        foreach ($values as $flatShippingPreferencesTypeFlatRateInsuranceRangeCostItem) {
            // validation for constraint: itemType
            if (!$flatShippingPreferencesTypeFlatRateInsuranceRangeCostItem instanceof \StructType\FlatRateInsuranceRangeCostType) {
                $invalidValues[] = is_object($flatShippingPreferencesTypeFlatRateInsuranceRangeCostItem) ? get_class($flatShippingPreferencesTypeFlatRateInsuranceRangeCostItem) : sprintf('%s(%s)', gettype($flatShippingPreferencesTypeFlatRateInsuranceRangeCostItem), var_export($flatShippingPreferencesTypeFlatRateInsuranceRangeCostItem, true));
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
     * @return \StructType\FlatShippingPreferencesType
     */
    public function setFlatRateInsuranceRangeCost(array $flatRateInsuranceRangeCost = array())
    {
        // validation for constraint: array
        if ('' !== ($flatRateInsuranceRangeCostArrayErrorMessage = self::validateFlatRateInsuranceRangeCostForArrayConstraintsFromSetFlatRateInsuranceRangeCost($flatRateInsuranceRangeCost))) {
            throw new \InvalidArgumentException($flatRateInsuranceRangeCostArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(6)
        if (is_array($flatRateInsuranceRangeCost) && count($flatRateInsuranceRangeCost) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 6', count($flatRateInsuranceRangeCost)), __LINE__);
        }
        $this->FlatRateInsuranceRangeCost = $flatRateInsuranceRangeCost;
        return $this;
    }
    /**
     * Add item to FlatRateInsuranceRangeCost value
     * @throws \InvalidArgumentException
     * @param \StructType\FlatRateInsuranceRangeCostType $item
     * @return \StructType\FlatShippingPreferencesType
     */
    public function addToFlatRateInsuranceRangeCost(\StructType\FlatRateInsuranceRangeCostType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\FlatRateInsuranceRangeCostType) {
            throw new \InvalidArgumentException(sprintf('The FlatRateInsuranceRangeCost property can only contain items of type \StructType\FlatRateInsuranceRangeCostType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(6)
        if (is_array($this->FlatRateInsuranceRangeCost) && count($this->FlatRateInsuranceRangeCost) >= 6) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 6', count($this->FlatRateInsuranceRangeCost)), __LINE__);
        }
        $this->FlatRateInsuranceRangeCost[] = $item;
        return $this;
    }
    /**
     * Get FlatShippingRateOption value
     * @return string|null
     */
    public function getFlatShippingRateOption()
    {
        return $this->FlatShippingRateOption;
    }
    /**
     * Set FlatShippingRateOption value
     * @uses \EnumType\FlatShippingRateOptionCodeType::valueIsValid()
     * @uses \EnumType\FlatShippingRateOptionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $flatShippingRateOption
     * @return \StructType\FlatShippingPreferencesType
     */
    public function setFlatShippingRateOption($flatShippingRateOption = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\FlatShippingRateOptionCodeType::valueIsValid($flatShippingRateOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\FlatShippingRateOptionCodeType', is_array($flatShippingRateOption) ? implode(', ', $flatShippingRateOption) : var_export($flatShippingRateOption, true), implode(', ', \EnumType\FlatShippingRateOptionCodeType::getValidValues())), __LINE__);
        }
        $this->FlatShippingRateOption = $flatShippingRateOption;
        return $this;
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
     * @return \StructType\FlatShippingPreferencesType
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
     * @return \StructType\FlatShippingPreferencesType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
