<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerPaymentPreferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>SellerPaymentPreferences</b> container, which consists of the seller's payment preferences. Payment preferences specified in a <b>SetUserPreferences</b> call override the settings in My eBay payment preferences.
 * <br><br> <span class="tablenote"><b>Note:</b> Sellers opted in to the new eBay Managed Payments program cannot control some of the settings under the <b>SellerPaymentPreferences</b> container, and although some of these fields can still be set in
 * <b>SetUserPreferences</b> and returned in <b>GetUserPreferences</b>, the settings will not have any affect on any current or future listings for the seller. eBay Managed Payments is currently only available to a limited number of sellers on the US
 * site. The rollout to more sellers in more countries will be a multi-year journey, but eBay expects to transition a majority of sellers Worldwide to Managed Payments by 2021. </span> <br>
 * @subpackage Structs
 */
class SellerPaymentPreferencesType extends AbstractStructBase
{
    /**
     * The AlwaysUseThisPaymentAddress
     * Meta information extracted from the WSDL
     * - documentation: Sellers include this field and set it to <code>true</code> if they want buyers to mail payment to the payment address specified in the <b>SellerPaymentPreferences.SellerPaymentAddress</b> field. A payment address only comes into play
     * if the item's category allows offline payments, and the seller has allowed the buyer to mail a payment. This payment address will only be displayed to winning bidders and buyers.
     * - minOccurs: 0
     * @var bool
     */
    public $AlwaysUseThisPaymentAddress;
    /**
     * The DisplayPayNowButton
     * Meta information extracted from the WSDL
     * - documentation: If set, this field determines whether a Pay Now button is displayed for all of the user's listings. The user has the option of using a PayPal only version of the Pay Now button or a Pay Now button for all payment methods. <br><br>
     * <span class="tablenote"><b>Note:</b> Sellers opted in to the new eBay Managed Payments program cannot control the display of the "Buy It Now" button in listings, and although the <b>DisplayPayNowButton</b> value can still be set in
     * <b>SetUserPreferences</b> and returned in <b>GetUserPreferences</b>, the setting will not have any affect on any current or future listings for the seller. eBay Managed Payments is currently only available to a limited number of sellers on the US
     * site. The rollout to more sellers in more countries will be a multi-year journey, but eBay expects to transition a majority of sellers Worldwide to Managed Payments by 2021. </span> <br>
     * - minOccurs: 0
     * @var string
     */
    public $DisplayPayNowButton;
    /**
     * The PayPalPreferred
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether a seller wants to let buyers know that PayPal payments are preferred. <br><br> <span class="tablenote"><b>Note:</b> Sellers opted in to the new eBay Managed Payments program cannot control the display of the "PayPal
     * Preferred" setting in listings, and although the <b>PayPalPreferred</b> boolean value can still be set in <b>SetUserPreferences</b> and returned in <b>GetUserPreferences</b>, the setting will not have any affect on any current or future listings for
     * the seller. eBay Managed Payments is currently only available to a limited number of sellers on the US site. The rollout to more sellers in more countries will be a multi-year journey, but eBay expects to transition a majority of sellers Worldwide to
     * Managed Payments by 2021. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $PayPalPreferred;
    /**
     * The DefaultPayPalEmailAddress
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default email address the seller uses for receiving PayPal payments.
     * - minOccurs: 0
     * @var string
     */
    public $DefaultPayPalEmailAddress;
    /**
     * The PayPalAlwaysOn
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether PayPal is always accepted for the seller's listings. <br><br> <span class="tablenote"><b>Note:</b> Sellers opted in to the new eBay Managed Payments program cannot control the "PayPal Always On" setting in listings,
     * and although the <b>PayPalAlwaysOn</b> boolean value can still be set in <b>SetUserPreferences</b> and returned in <b>GetUserPreferences</b>, the setting will not have any affect on any current or future listings for the seller. eBay Managed Payments
     * is currently only available to a limited number of sellers on the US site. The rollout to more sellers in more countries will be a multi-year journey, but eBay expects to transition a majority of sellers Worldwide to Managed Payments by 2021. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $PayPalAlwaysOn;
    /**
     * The SellerPaymentAddress
     * Meta information extracted from the WSDL
     * - documentation: Specifies the address the seller uses to receive mailed payments from buyers.
     * - minOccurs: 0
     * @var \StructType\AddressType
     */
    public $SellerPaymentAddress;
    /**
     * The UPSRateOption
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the type of UPS shipping rates that are available to the seller.
     * - minOccurs: 0
     * @var string
     */
    public $UPSRateOption;
    /**
     * The FedExRateOption
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the type of FedEx shipping rates that are available to the seller.
     * - minOccurs: 0
     * @var string
     */
    public $FedExRateOption;
    /**
     * The USPSRateOption
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the type of US Postal Service shipping rates that are available to the seller.
     * - minOccurs: 0
     * @var string
     */
    public $USPSRateOption;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellerPaymentPreferencesType
     * @uses SellerPaymentPreferencesType::setAlwaysUseThisPaymentAddress()
     * @uses SellerPaymentPreferencesType::setDisplayPayNowButton()
     * @uses SellerPaymentPreferencesType::setPayPalPreferred()
     * @uses SellerPaymentPreferencesType::setDefaultPayPalEmailAddress()
     * @uses SellerPaymentPreferencesType::setPayPalAlwaysOn()
     * @uses SellerPaymentPreferencesType::setSellerPaymentAddress()
     * @uses SellerPaymentPreferencesType::setUPSRateOption()
     * @uses SellerPaymentPreferencesType::setFedExRateOption()
     * @uses SellerPaymentPreferencesType::setUSPSRateOption()
     * @uses SellerPaymentPreferencesType::setAny()
     * @param bool $alwaysUseThisPaymentAddress
     * @param string $displayPayNowButton
     * @param bool $payPalPreferred
     * @param string $defaultPayPalEmailAddress
     * @param bool $payPalAlwaysOn
     * @param \StructType\AddressType $sellerPaymentAddress
     * @param string $uPSRateOption
     * @param string $fedExRateOption
     * @param string $uSPSRateOption
     * @param \DOMDocument $any
     */
    public function __construct($alwaysUseThisPaymentAddress = null, $displayPayNowButton = null, $payPalPreferred = null, $defaultPayPalEmailAddress = null, $payPalAlwaysOn = null, \StructType\AddressType $sellerPaymentAddress = null, $uPSRateOption = null, $fedExRateOption = null, $uSPSRateOption = null, \DOMDocument $any = null)
    {
        $this
            ->setAlwaysUseThisPaymentAddress($alwaysUseThisPaymentAddress)
            ->setDisplayPayNowButton($displayPayNowButton)
            ->setPayPalPreferred($payPalPreferred)
            ->setDefaultPayPalEmailAddress($defaultPayPalEmailAddress)
            ->setPayPalAlwaysOn($payPalAlwaysOn)
            ->setSellerPaymentAddress($sellerPaymentAddress)
            ->setUPSRateOption($uPSRateOption)
            ->setFedExRateOption($fedExRateOption)
            ->setUSPSRateOption($uSPSRateOption)
            ->setAny($any);
    }
    /**
     * Get AlwaysUseThisPaymentAddress value
     * @return bool|null
     */
    public function getAlwaysUseThisPaymentAddress()
    {
        return $this->AlwaysUseThisPaymentAddress;
    }
    /**
     * Set AlwaysUseThisPaymentAddress value
     * @param bool $alwaysUseThisPaymentAddress
     * @return \StructType\SellerPaymentPreferencesType
     */
    public function setAlwaysUseThisPaymentAddress($alwaysUseThisPaymentAddress = null)
    {
        // validation for constraint: boolean
        if (!is_null($alwaysUseThisPaymentAddress) && !is_bool($alwaysUseThisPaymentAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($alwaysUseThisPaymentAddress, true), gettype($alwaysUseThisPaymentAddress)), __LINE__);
        }
        $this->AlwaysUseThisPaymentAddress = $alwaysUseThisPaymentAddress;
        return $this;
    }
    /**
     * Get DisplayPayNowButton value
     * @return string|null
     */
    public function getDisplayPayNowButton()
    {
        return $this->DisplayPayNowButton;
    }
    /**
     * Set DisplayPayNowButton value
     * @uses \EnumType\DisplayPayNowButtonCodeType::valueIsValid()
     * @uses \EnumType\DisplayPayNowButtonCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $displayPayNowButton
     * @return \StructType\SellerPaymentPreferencesType
     */
    public function setDisplayPayNowButton($displayPayNowButton = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DisplayPayNowButtonCodeType::valueIsValid($displayPayNowButton)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DisplayPayNowButtonCodeType', is_array($displayPayNowButton) ? implode(', ', $displayPayNowButton) : var_export($displayPayNowButton, true), implode(', ', \EnumType\DisplayPayNowButtonCodeType::getValidValues())), __LINE__);
        }
        $this->DisplayPayNowButton = $displayPayNowButton;
        return $this;
    }
    /**
     * Get PayPalPreferred value
     * @return bool|null
     */
    public function getPayPalPreferred()
    {
        return $this->PayPalPreferred;
    }
    /**
     * Set PayPalPreferred value
     * @param bool $payPalPreferred
     * @return \StructType\SellerPaymentPreferencesType
     */
    public function setPayPalPreferred($payPalPreferred = null)
    {
        // validation for constraint: boolean
        if (!is_null($payPalPreferred) && !is_bool($payPalPreferred)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($payPalPreferred, true), gettype($payPalPreferred)), __LINE__);
        }
        $this->PayPalPreferred = $payPalPreferred;
        return $this;
    }
    /**
     * Get DefaultPayPalEmailAddress value
     * @return string|null
     */
    public function getDefaultPayPalEmailAddress()
    {
        return $this->DefaultPayPalEmailAddress;
    }
    /**
     * Set DefaultPayPalEmailAddress value
     * @param string $defaultPayPalEmailAddress
     * @return \StructType\SellerPaymentPreferencesType
     */
    public function setDefaultPayPalEmailAddress($defaultPayPalEmailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($defaultPayPalEmailAddress) && !is_string($defaultPayPalEmailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultPayPalEmailAddress, true), gettype($defaultPayPalEmailAddress)), __LINE__);
        }
        $this->DefaultPayPalEmailAddress = $defaultPayPalEmailAddress;
        return $this;
    }
    /**
     * Get PayPalAlwaysOn value
     * @return bool|null
     */
    public function getPayPalAlwaysOn()
    {
        return $this->PayPalAlwaysOn;
    }
    /**
     * Set PayPalAlwaysOn value
     * @param bool $payPalAlwaysOn
     * @return \StructType\SellerPaymentPreferencesType
     */
    public function setPayPalAlwaysOn($payPalAlwaysOn = null)
    {
        // validation for constraint: boolean
        if (!is_null($payPalAlwaysOn) && !is_bool($payPalAlwaysOn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($payPalAlwaysOn, true), gettype($payPalAlwaysOn)), __LINE__);
        }
        $this->PayPalAlwaysOn = $payPalAlwaysOn;
        return $this;
    }
    /**
     * Get SellerPaymentAddress value
     * @return \StructType\AddressType|null
     */
    public function getSellerPaymentAddress()
    {
        return $this->SellerPaymentAddress;
    }
    /**
     * Set SellerPaymentAddress value
     * @param \StructType\AddressType $sellerPaymentAddress
     * @return \StructType\SellerPaymentPreferencesType
     */
    public function setSellerPaymentAddress(\StructType\AddressType $sellerPaymentAddress = null)
    {
        $this->SellerPaymentAddress = $sellerPaymentAddress;
        return $this;
    }
    /**
     * Get UPSRateOption value
     * @return string|null
     */
    public function getUPSRateOption()
    {
        return $this->UPSRateOption;
    }
    /**
     * Set UPSRateOption value
     * @uses \EnumType\UPSRateOptionCodeType::valueIsValid()
     * @uses \EnumType\UPSRateOptionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $uPSRateOption
     * @return \StructType\SellerPaymentPreferencesType
     */
    public function setUPSRateOption($uPSRateOption = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\UPSRateOptionCodeType::valueIsValid($uPSRateOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\UPSRateOptionCodeType', is_array($uPSRateOption) ? implode(', ', $uPSRateOption) : var_export($uPSRateOption, true), implode(', ', \EnumType\UPSRateOptionCodeType::getValidValues())), __LINE__);
        }
        $this->UPSRateOption = $uPSRateOption;
        return $this;
    }
    /**
     * Get FedExRateOption value
     * @return string|null
     */
    public function getFedExRateOption()
    {
        return $this->FedExRateOption;
    }
    /**
     * Set FedExRateOption value
     * @uses \EnumType\FedExRateOptionCodeType::valueIsValid()
     * @uses \EnumType\FedExRateOptionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fedExRateOption
     * @return \StructType\SellerPaymentPreferencesType
     */
    public function setFedExRateOption($fedExRateOption = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\FedExRateOptionCodeType::valueIsValid($fedExRateOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\FedExRateOptionCodeType', is_array($fedExRateOption) ? implode(', ', $fedExRateOption) : var_export($fedExRateOption, true), implode(', ', \EnumType\FedExRateOptionCodeType::getValidValues())), __LINE__);
        }
        $this->FedExRateOption = $fedExRateOption;
        return $this;
    }
    /**
     * Get USPSRateOption value
     * @return string|null
     */
    public function getUSPSRateOption()
    {
        return $this->USPSRateOption;
    }
    /**
     * Set USPSRateOption value
     * @uses \EnumType\USPSRateOptionCodeType::valueIsValid()
     * @uses \EnumType\USPSRateOptionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $uSPSRateOption
     * @return \StructType\SellerPaymentPreferencesType
     */
    public function setUSPSRateOption($uSPSRateOption = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\USPSRateOptionCodeType::valueIsValid($uSPSRateOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\USPSRateOptionCodeType', is_array($uSPSRateOption) ? implode(', ', $uSPSRateOption) : var_export($uSPSRateOption, true), implode(', ', \EnumType\USPSRateOptionCodeType::getValidValues())), __LINE__);
        }
        $this->USPSRateOption = $uSPSRateOption;
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
     * @return \StructType\SellerPaymentPreferencesType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SellerPaymentPreferencesType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
