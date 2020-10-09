<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculatedShippingPreferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class CalculatedShippingPreferencesType extends AbstractStructBase
{
    /**
     * The CalculatedShippingAmountForEntireOrder
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $CalculatedShippingAmountForEntireOrder;
    /**
     * The CalculatedShippingChargeOption
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $CalculatedShippingChargeOption;
    /**
     * The CalculatedShippingRateOption
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $CalculatedShippingRateOption;
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
     * Constructor method for CalculatedShippingPreferencesType
     * @uses CalculatedShippingPreferencesType::setCalculatedShippingAmountForEntireOrder()
     * @uses CalculatedShippingPreferencesType::setCalculatedShippingChargeOption()
     * @uses CalculatedShippingPreferencesType::setCalculatedShippingRateOption()
     * @uses CalculatedShippingPreferencesType::setInsuranceOption()
     * @uses CalculatedShippingPreferencesType::setAny()
     * @param \StructType\AmountType $calculatedShippingAmountForEntireOrder
     * @param string $calculatedShippingChargeOption
     * @param string $calculatedShippingRateOption
     * @param string $insuranceOption
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\AmountType $calculatedShippingAmountForEntireOrder = null, $calculatedShippingChargeOption = null, $calculatedShippingRateOption = null, $insuranceOption = null, \DOMDocument $any = null)
    {
        $this
            ->setCalculatedShippingAmountForEntireOrder($calculatedShippingAmountForEntireOrder)
            ->setCalculatedShippingChargeOption($calculatedShippingChargeOption)
            ->setCalculatedShippingRateOption($calculatedShippingRateOption)
            ->setInsuranceOption($insuranceOption)
            ->setAny($any);
    }
    /**
     * Get CalculatedShippingAmountForEntireOrder value
     * @return \StructType\AmountType|null
     */
    public function getCalculatedShippingAmountForEntireOrder()
    {
        return $this->CalculatedShippingAmountForEntireOrder;
    }
    /**
     * Set CalculatedShippingAmountForEntireOrder value
     * @param \StructType\AmountType $calculatedShippingAmountForEntireOrder
     * @return \StructType\CalculatedShippingPreferencesType
     */
    public function setCalculatedShippingAmountForEntireOrder(\StructType\AmountType $calculatedShippingAmountForEntireOrder = null)
    {
        $this->CalculatedShippingAmountForEntireOrder = $calculatedShippingAmountForEntireOrder;
        return $this;
    }
    /**
     * Get CalculatedShippingChargeOption value
     * @return string|null
     */
    public function getCalculatedShippingChargeOption()
    {
        return $this->CalculatedShippingChargeOption;
    }
    /**
     * Set CalculatedShippingChargeOption value
     * @uses \EnumType\CalculatedShippingChargeOptionCodeType::valueIsValid()
     * @uses \EnumType\CalculatedShippingChargeOptionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $calculatedShippingChargeOption
     * @return \StructType\CalculatedShippingPreferencesType
     */
    public function setCalculatedShippingChargeOption($calculatedShippingChargeOption = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CalculatedShippingChargeOptionCodeType::valueIsValid($calculatedShippingChargeOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CalculatedShippingChargeOptionCodeType', is_array($calculatedShippingChargeOption) ? implode(', ', $calculatedShippingChargeOption) : var_export($calculatedShippingChargeOption, true), implode(', ', \EnumType\CalculatedShippingChargeOptionCodeType::getValidValues())), __LINE__);
        }
        $this->CalculatedShippingChargeOption = $calculatedShippingChargeOption;
        return $this;
    }
    /**
     * Get CalculatedShippingRateOption value
     * @return string|null
     */
    public function getCalculatedShippingRateOption()
    {
        return $this->CalculatedShippingRateOption;
    }
    /**
     * Set CalculatedShippingRateOption value
     * @uses \EnumType\CalculatedShippingRateOptionCodeType::valueIsValid()
     * @uses \EnumType\CalculatedShippingRateOptionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $calculatedShippingRateOption
     * @return \StructType\CalculatedShippingPreferencesType
     */
    public function setCalculatedShippingRateOption($calculatedShippingRateOption = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CalculatedShippingRateOptionCodeType::valueIsValid($calculatedShippingRateOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CalculatedShippingRateOptionCodeType', is_array($calculatedShippingRateOption) ? implode(', ', $calculatedShippingRateOption) : var_export($calculatedShippingRateOption, true), implode(', ', \EnumType\CalculatedShippingRateOptionCodeType::getValidValues())), __LINE__);
        }
        $this->CalculatedShippingRateOption = $calculatedShippingRateOption;
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
     * @return \StructType\CalculatedShippingPreferencesType
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
     * @return \StructType\CalculatedShippingPreferencesType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
