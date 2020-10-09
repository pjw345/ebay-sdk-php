<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetShippingDiscountProfilesRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This call enables a seller to create and manage shipping discounts rules. These are the same shipping discount rules that can be created or managed in My eBay Shipping Preferences. <br/><br/> The types of shipping discount rules that
 * can be created and managed with this call include flat-rate shipping rules, calculated shipping rules, and promotional shipping rules. This call can also be used by sellers to set whether or not they allow buyers to combine separate line items into
 * one Combined Invoice order, and how many days they allow buyers to perform that action. <br/><br/> A seller can only create, update, or delete one discount rule type with each call. The action to take (either <code>Add</code>, <code>Update</code>, or
 * <code>Delete</code>) is set and controlled with the <b>ModifyActionCode</b> field.
 * @subpackage Structs
 */
class SetShippingDiscountProfilesRequestType extends AbstractRequestType
{
    /**
     * The CurrencyID
     * Meta information extracted from the WSDL
     * - documentation: The three-digit code of the currency to be used for shipping discounts on Combined Invoice orders. A discount profile can only be associated with a listing if the <b>CurrencyID</b> value of the profile matches the
     * <b>Item.Currency</b> value specified in a listing. This field is required if the user is adding or updating one or more shipping discount profiles. <br><br> Note that There is a <b>currencyID</b> attribute on all <b>SetShippingDiscountProfiles</b>
     * elements involving money. To avoid a call error, be sure to use the same currency type in these attributes as what is set for the <b>CurrencyID</b> field.
     * - minOccurs: 0
     * @var string
     */
    public $CurrencyID;
    /**
     * The CombinedDuration
     * Meta information extracted from the WSDL
     * - documentation: This field is used to specify the number of days after the purchase of an item that the buyer or seller can combine multiple and mutual order line items into one Combined Invoice order. In a Combined Invoice order, the buyer makes
     * one payment for all order line items, hence only unpaid order line items can be combined into a Combined Invoice order.
     * - minOccurs: 0
     * @var string
     */
    public $CombinedDuration;
    /**
     * The ModifyActionCode
     * Meta information extracted from the WSDL
     * - documentation: This field is used to set which action is being taken (<code>Add</code>, <code>Update</code>, or <code>Delete</code>) in the call. If you are adding a shipping discount rule, you will have to supply a name for that shipping discount
     * profile. If you want to update or delete a shipping discount profile, you'll have to provide the unique identifier of this rule through the corresponding containers. The unique identifiers of these rules can be retrieved with the
     * <b>GetShippingDiscountRules</b> call, or the seller can view these identifiers in My eBay Shipping Preferences.
     * - minOccurs: 0
     * @var string
     */
    public $ModifyActionCode;
    /**
     * The FlatShippingDiscount
     * Meta information extracted from the WSDL
     * - documentation: This container allows you to create, update, or delete a flat-rate shipping discount profile.
     * - minOccurs: 0
     * @var \StructType\FlatShippingDiscountType
     */
    public $FlatShippingDiscount;
    /**
     * The CalculatedShippingDiscount
     * Meta information extracted from the WSDL
     * - documentation: This container allows you to create, update, or delete a calculated shipping discount profile.
     * - minOccurs: 0
     * @var \StructType\CalculatedShippingDiscountType
     */
    public $CalculatedShippingDiscount;
    /**
     * The CalculatedHandlingDiscount
     * Meta information extracted from the WSDL
     * - documentation: This container allows you to create, update, or delete a calculated handling discount profile.
     * - minOccurs: 0
     * @var \StructType\CalculatedHandlingDiscountType
     */
    public $CalculatedHandlingDiscount;
    /**
     * The PromotionalShippingDiscountDetails
     * Meta information extracted from the WSDL
     * - documentation: This container allows you to create, update, or delete a promotional shipping discount profile.
     * - minOccurs: 0
     * @var \StructType\PromotionalShippingDiscountDetailsType
     */
    public $PromotionalShippingDiscountDetails;
    /**
     * The ShippingInsurance
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable as it is not longer possible for a seller to offer a buyer shipping insurance.
     * - minOccurs: 0
     * @var \StructType\ShippingInsuranceType
     */
    public $ShippingInsurance;
    /**
     * The InternationalShippingInsurance
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable as it is not longer possible for a seller to offer a buyer shipping insurance.
     * - minOccurs: 0
     * @var \StructType\ShippingInsuranceType
     */
    public $InternationalShippingInsurance;
    /**
     * Constructor method for SetShippingDiscountProfilesRequestType
     * @uses SetShippingDiscountProfilesRequestType::setCurrencyID()
     * @uses SetShippingDiscountProfilesRequestType::setCombinedDuration()
     * @uses SetShippingDiscountProfilesRequestType::setModifyActionCode()
     * @uses SetShippingDiscountProfilesRequestType::setFlatShippingDiscount()
     * @uses SetShippingDiscountProfilesRequestType::setCalculatedShippingDiscount()
     * @uses SetShippingDiscountProfilesRequestType::setCalculatedHandlingDiscount()
     * @uses SetShippingDiscountProfilesRequestType::setPromotionalShippingDiscountDetails()
     * @uses SetShippingDiscountProfilesRequestType::setShippingInsurance()
     * @uses SetShippingDiscountProfilesRequestType::setInternationalShippingInsurance()
     * @param string $currencyID
     * @param string $combinedDuration
     * @param string $modifyActionCode
     * @param \StructType\FlatShippingDiscountType $flatShippingDiscount
     * @param \StructType\CalculatedShippingDiscountType $calculatedShippingDiscount
     * @param \StructType\CalculatedHandlingDiscountType $calculatedHandlingDiscount
     * @param \StructType\PromotionalShippingDiscountDetailsType $promotionalShippingDiscountDetails
     * @param \StructType\ShippingInsuranceType $shippingInsurance
     * @param \StructType\ShippingInsuranceType $internationalShippingInsurance
     */
    public function __construct($currencyID = null, $combinedDuration = null, $modifyActionCode = null, \StructType\FlatShippingDiscountType $flatShippingDiscount = null, \StructType\CalculatedShippingDiscountType $calculatedShippingDiscount = null, \StructType\CalculatedHandlingDiscountType $calculatedHandlingDiscount = null, \StructType\PromotionalShippingDiscountDetailsType $promotionalShippingDiscountDetails = null, \StructType\ShippingInsuranceType $shippingInsurance = null, \StructType\ShippingInsuranceType $internationalShippingInsurance = null)
    {
        $this
            ->setCurrencyID($currencyID)
            ->setCombinedDuration($combinedDuration)
            ->setModifyActionCode($modifyActionCode)
            ->setFlatShippingDiscount($flatShippingDiscount)
            ->setCalculatedShippingDiscount($calculatedShippingDiscount)
            ->setCalculatedHandlingDiscount($calculatedHandlingDiscount)
            ->setPromotionalShippingDiscountDetails($promotionalShippingDiscountDetails)
            ->setShippingInsurance($shippingInsurance)
            ->setInternationalShippingInsurance($internationalShippingInsurance);
    }
    /**
     * Get CurrencyID value
     * @return string|null
     */
    public function getCurrencyID()
    {
        return $this->CurrencyID;
    }
    /**
     * Set CurrencyID value
     * @uses \EnumType\CurrencyCodeType::valueIsValid()
     * @uses \EnumType\CurrencyCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $currencyID
     * @return \StructType\SetShippingDiscountProfilesRequestType
     */
    public function setCurrencyID($currencyID = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CurrencyCodeType::valueIsValid($currencyID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CurrencyCodeType', is_array($currencyID) ? implode(', ', $currencyID) : var_export($currencyID, true), implode(', ', \EnumType\CurrencyCodeType::getValidValues())), __LINE__);
        }
        $this->CurrencyID = $currencyID;
        return $this;
    }
    /**
     * Get CombinedDuration value
     * @return string|null
     */
    public function getCombinedDuration()
    {
        return $this->CombinedDuration;
    }
    /**
     * Set CombinedDuration value
     * @uses \EnumType\CombinedPaymentPeriodCodeType::valueIsValid()
     * @uses \EnumType\CombinedPaymentPeriodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $combinedDuration
     * @return \StructType\SetShippingDiscountProfilesRequestType
     */
    public function setCombinedDuration($combinedDuration = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CombinedPaymentPeriodCodeType::valueIsValid($combinedDuration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CombinedPaymentPeriodCodeType', is_array($combinedDuration) ? implode(', ', $combinedDuration) : var_export($combinedDuration, true), implode(', ', \EnumType\CombinedPaymentPeriodCodeType::getValidValues())), __LINE__);
        }
        $this->CombinedDuration = $combinedDuration;
        return $this;
    }
    /**
     * Get ModifyActionCode value
     * @return string|null
     */
    public function getModifyActionCode()
    {
        return $this->ModifyActionCode;
    }
    /**
     * Set ModifyActionCode value
     * @uses \EnumType\ModifyActionCodeType::valueIsValid()
     * @uses \EnumType\ModifyActionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $modifyActionCode
     * @return \StructType\SetShippingDiscountProfilesRequestType
     */
    public function setModifyActionCode($modifyActionCode = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ModifyActionCodeType::valueIsValid($modifyActionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ModifyActionCodeType', is_array($modifyActionCode) ? implode(', ', $modifyActionCode) : var_export($modifyActionCode, true), implode(', ', \EnumType\ModifyActionCodeType::getValidValues())), __LINE__);
        }
        $this->ModifyActionCode = $modifyActionCode;
        return $this;
    }
    /**
     * Get FlatShippingDiscount value
     * @return \StructType\FlatShippingDiscountType|null
     */
    public function getFlatShippingDiscount()
    {
        return $this->FlatShippingDiscount;
    }
    /**
     * Set FlatShippingDiscount value
     * @param \StructType\FlatShippingDiscountType $flatShippingDiscount
     * @return \StructType\SetShippingDiscountProfilesRequestType
     */
    public function setFlatShippingDiscount(\StructType\FlatShippingDiscountType $flatShippingDiscount = null)
    {
        $this->FlatShippingDiscount = $flatShippingDiscount;
        return $this;
    }
    /**
     * Get CalculatedShippingDiscount value
     * @return \StructType\CalculatedShippingDiscountType|null
     */
    public function getCalculatedShippingDiscount()
    {
        return $this->CalculatedShippingDiscount;
    }
    /**
     * Set CalculatedShippingDiscount value
     * @param \StructType\CalculatedShippingDiscountType $calculatedShippingDiscount
     * @return \StructType\SetShippingDiscountProfilesRequestType
     */
    public function setCalculatedShippingDiscount(\StructType\CalculatedShippingDiscountType $calculatedShippingDiscount = null)
    {
        $this->CalculatedShippingDiscount = $calculatedShippingDiscount;
        return $this;
    }
    /**
     * Get CalculatedHandlingDiscount value
     * @return \StructType\CalculatedHandlingDiscountType|null
     */
    public function getCalculatedHandlingDiscount()
    {
        return $this->CalculatedHandlingDiscount;
    }
    /**
     * Set CalculatedHandlingDiscount value
     * @param \StructType\CalculatedHandlingDiscountType $calculatedHandlingDiscount
     * @return \StructType\SetShippingDiscountProfilesRequestType
     */
    public function setCalculatedHandlingDiscount(\StructType\CalculatedHandlingDiscountType $calculatedHandlingDiscount = null)
    {
        $this->CalculatedHandlingDiscount = $calculatedHandlingDiscount;
        return $this;
    }
    /**
     * Get PromotionalShippingDiscountDetails value
     * @return \StructType\PromotionalShippingDiscountDetailsType|null
     */
    public function getPromotionalShippingDiscountDetails()
    {
        return $this->PromotionalShippingDiscountDetails;
    }
    /**
     * Set PromotionalShippingDiscountDetails value
     * @param \StructType\PromotionalShippingDiscountDetailsType $promotionalShippingDiscountDetails
     * @return \StructType\SetShippingDiscountProfilesRequestType
     */
    public function setPromotionalShippingDiscountDetails(\StructType\PromotionalShippingDiscountDetailsType $promotionalShippingDiscountDetails = null)
    {
        $this->PromotionalShippingDiscountDetails = $promotionalShippingDiscountDetails;
        return $this;
    }
    /**
     * Get ShippingInsurance value
     * @return \StructType\ShippingInsuranceType|null
     */
    public function getShippingInsurance()
    {
        return $this->ShippingInsurance;
    }
    /**
     * Set ShippingInsurance value
     * @param \StructType\ShippingInsuranceType $shippingInsurance
     * @return \StructType\SetShippingDiscountProfilesRequestType
     */
    public function setShippingInsurance(\StructType\ShippingInsuranceType $shippingInsurance = null)
    {
        $this->ShippingInsurance = $shippingInsurance;
        return $this;
    }
    /**
     * Get InternationalShippingInsurance value
     * @return \StructType\ShippingInsuranceType|null
     */
    public function getInternationalShippingInsurance()
    {
        return $this->InternationalShippingInsurance;
    }
    /**
     * Set InternationalShippingInsurance value
     * @param \StructType\ShippingInsuranceType $internationalShippingInsurance
     * @return \StructType\SetShippingDiscountProfilesRequestType
     */
    public function setInternationalShippingInsurance(\StructType\ShippingInsuranceType $internationalShippingInsurance = null)
    {
        $this->InternationalShippingInsurance = $internationalShippingInsurance;
        return $this;
    }
}
