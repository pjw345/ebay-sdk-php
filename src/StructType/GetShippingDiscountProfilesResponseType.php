<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShippingDiscountProfilesResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response of the <b>GetShippingDiscountProfiles</b> call.
 * @subpackage Structs
 */
class GetShippingDiscountProfilesResponseType extends AbstractResponseType
{
    /**
     * The CurrencyID
     * Meta information extracted from the WSDL
     * - documentation: The three-digit code of the currency to be used for shipping cost discounts. A discount profile can only be associated with a listing if the <b>CurrencyID</b> value of the profile matches the <b>Item.Currency</b> value specified in a
     * listing.
     * - minOccurs: 0
     * @var string
     */
    public $CurrencyID;
    /**
     * The FlatShippingDiscount
     * Meta information extracted from the WSDL
     * - documentation: This container consists of one or more flat-rate shipping discount rules that are set up for a seller's account. This container is returned as an empty element if no flat-rate shipping discount rules are currently set for the
     * seller's account.
     * - minOccurs: 0
     * @var \StructType\FlatShippingDiscountType
     */
    public $FlatShippingDiscount;
    /**
     * The CalculatedShippingDiscount
     * Meta information extracted from the WSDL
     * - documentation: This container consists of one or more calculated shipping discount rules that are set up for a seller's account. This container is returned as an empty element if no calculated shipping discount rules are currently set for the
     * seller's account.
     * - minOccurs: 0
     * @var \StructType\CalculatedShippingDiscountType
     */
    public $CalculatedShippingDiscount;
    /**
     * The PromotionalShippingDiscount
     * Meta information extracted from the WSDL
     * - documentation: This field indicates whether or not a seller has set up a promotional shipping discount rule in the seller's account. Only one promotional shipping discount may be defined for a seller's account at any given time. This field is
     * returned whether <code>false</code> or <code>true</code>. If <code>true</code>, details of the rule can be found in the <b>PromotionalShippingDiscountDetails</b> container.
     * - minOccurs: 0
     * @var bool
     */
    public $PromotionalShippingDiscount;
    /**
     * The CalculatedHandlingDiscount
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the handling discount applicable to a calculated shipping discount rule that is set up for a seller's account. This container is not returned if no calculated shipping discount rules are currently set for
     * the seller's account.
     * - minOccurs: 0
     * @var \StructType\CalculatedHandlingDiscountType
     */
    public $CalculatedHandlingDiscount;
    /**
     * The PromotionalShippingDiscountDetails
     * Meta information extracted from the WSDL
     * - documentation: This container consists of information related to the promotional shipping discount rule that is set up for a seller's account. This container is not returned if no promotional shipping discount rule is set up for the seller's
     * account.
     * - minOccurs: 0
     * @var \StructType\PromotionalShippingDiscountDetailsType
     */
    public $PromotionalShippingDiscountDetails;
    /**
     * The ShippingInsurance
     * Meta information extracted from the WSDL
     * - documentation: This container is deprecated.
     * - minOccurs: 0
     * @var \StructType\ShippingInsuranceType
     */
    public $ShippingInsurance;
    /**
     * The InternationalShippingInsurance
     * Meta information extracted from the WSDL
     * - documentation: This container is deprecated.
     * - minOccurs: 0
     * @var \StructType\ShippingInsuranceType
     */
    public $InternationalShippingInsurance;
    /**
     * The CombinedDuration
     * Meta information extracted from the WSDL
     * - documentation: This field indicates the number of days after the sale of an item in which the buyer or seller can combine multiple and mutual order line items into one Combined Invoice order. In a Combined Invoice order, the buyer makes one payment
     * for all order line items, hence only unpaid order line items can be combined into a Combined Invoice order.
     * - minOccurs: 0
     * @var string
     */
    public $CombinedDuration;
    /**
     * Constructor method for GetShippingDiscountProfilesResponseType
     * @uses GetShippingDiscountProfilesResponseType::setCurrencyID()
     * @uses GetShippingDiscountProfilesResponseType::setFlatShippingDiscount()
     * @uses GetShippingDiscountProfilesResponseType::setCalculatedShippingDiscount()
     * @uses GetShippingDiscountProfilesResponseType::setPromotionalShippingDiscount()
     * @uses GetShippingDiscountProfilesResponseType::setCalculatedHandlingDiscount()
     * @uses GetShippingDiscountProfilesResponseType::setPromotionalShippingDiscountDetails()
     * @uses GetShippingDiscountProfilesResponseType::setShippingInsurance()
     * @uses GetShippingDiscountProfilesResponseType::setInternationalShippingInsurance()
     * @uses GetShippingDiscountProfilesResponseType::setCombinedDuration()
     * @param string $currencyID
     * @param \StructType\FlatShippingDiscountType $flatShippingDiscount
     * @param \StructType\CalculatedShippingDiscountType $calculatedShippingDiscount
     * @param bool $promotionalShippingDiscount
     * @param \StructType\CalculatedHandlingDiscountType $calculatedHandlingDiscount
     * @param \StructType\PromotionalShippingDiscountDetailsType $promotionalShippingDiscountDetails
     * @param \StructType\ShippingInsuranceType $shippingInsurance
     * @param \StructType\ShippingInsuranceType $internationalShippingInsurance
     * @param string $combinedDuration
     */
    public function __construct($currencyID = null, \StructType\FlatShippingDiscountType $flatShippingDiscount = null, \StructType\CalculatedShippingDiscountType $calculatedShippingDiscount = null, $promotionalShippingDiscount = null, \StructType\CalculatedHandlingDiscountType $calculatedHandlingDiscount = null, \StructType\PromotionalShippingDiscountDetailsType $promotionalShippingDiscountDetails = null, \StructType\ShippingInsuranceType $shippingInsurance = null, \StructType\ShippingInsuranceType $internationalShippingInsurance = null, $combinedDuration = null)
    {
        $this
            ->setCurrencyID($currencyID)
            ->setFlatShippingDiscount($flatShippingDiscount)
            ->setCalculatedShippingDiscount($calculatedShippingDiscount)
            ->setPromotionalShippingDiscount($promotionalShippingDiscount)
            ->setCalculatedHandlingDiscount($calculatedHandlingDiscount)
            ->setPromotionalShippingDiscountDetails($promotionalShippingDiscountDetails)
            ->setShippingInsurance($shippingInsurance)
            ->setInternationalShippingInsurance($internationalShippingInsurance)
            ->setCombinedDuration($combinedDuration);
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
     * @return \StructType\GetShippingDiscountProfilesResponseType
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
     * @return \StructType\GetShippingDiscountProfilesResponseType
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
     * @return \StructType\GetShippingDiscountProfilesResponseType
     */
    public function setCalculatedShippingDiscount(\StructType\CalculatedShippingDiscountType $calculatedShippingDiscount = null)
    {
        $this->CalculatedShippingDiscount = $calculatedShippingDiscount;
        return $this;
    }
    /**
     * Get PromotionalShippingDiscount value
     * @return bool|null
     */
    public function getPromotionalShippingDiscount()
    {
        return $this->PromotionalShippingDiscount;
    }
    /**
     * Set PromotionalShippingDiscount value
     * @param bool $promotionalShippingDiscount
     * @return \StructType\GetShippingDiscountProfilesResponseType
     */
    public function setPromotionalShippingDiscount($promotionalShippingDiscount = null)
    {
        // validation for constraint: boolean
        if (!is_null($promotionalShippingDiscount) && !is_bool($promotionalShippingDiscount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($promotionalShippingDiscount, true), gettype($promotionalShippingDiscount)), __LINE__);
        }
        $this->PromotionalShippingDiscount = $promotionalShippingDiscount;
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
     * @return \StructType\GetShippingDiscountProfilesResponseType
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
     * @return \StructType\GetShippingDiscountProfilesResponseType
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
     * @return \StructType\GetShippingDiscountProfilesResponseType
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
     * @return \StructType\GetShippingDiscountProfilesResponseType
     */
    public function setInternationalShippingInsurance(\StructType\ShippingInsuranceType $internationalShippingInsurance = null)
    {
        $this->InternationalShippingInsurance = $internationalShippingInsurance;
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
     * @return \StructType\GetShippingDiscountProfilesResponseType
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
}
