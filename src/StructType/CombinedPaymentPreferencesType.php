<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CombinedPaymentPreferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used to indicate if the seller supports <a href="http://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Listing-AnItem.html#CombinedInvoice">Combined Invoice</a> orders, and if so, defines whether the
 * seller specifies any shipping discount before or after purchase. <br/><br/> <span class="tablenote"><b>Note:</b> In the past, this type was also used to indicate more settings related to Combined Invoice discounts, including the number of days that
 * buyers have to combine line items into a Combined Invoice, and detailed information on Calculated and Flat-Rate shipping discount profiles. However, these settings are now set through the <b>SetShippingDiscountProfiles</b> call (or through Shipping
 * Preferences in My eBay), and retrieved with the <b>GetShippingDiscountProfiles</b> call. </span>
 * @subpackage Structs
 */
class CombinedPaymentPreferencesType extends AbstractStructBase
{
    /**
     * The CalculatedShippingPreferences
     * Meta information extracted from the WSDL
     * - documentation: DO NOT USE THIS CONTAINER. As an alternative, use <b>SetShippingDiscountProfiles</b> to set all Calculated Shipping rules and preferences, and use <b>GetShippingDiscountProfiles</b> to retrieve the same information.
     * - minOccurs: 0
     * @var \StructType\CalculatedShippingPreferencesType
     */
    public $CalculatedShippingPreferences;
    /**
     * The CombinedPaymentOption
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether or not a seller wants to allow buyers to combine single order line items into a Combined Invoice order. A Combined Invoice order can be created by the buyer or seller if multiple unpaid order line items exist
     * between the same buyer and seller. Often, a Combined Invoice order can reduce shipping and handling expenses for the buyer and seller.
     * - minOccurs: 0
     * @var string
     */
    public $CombinedPaymentOption;
    /**
     * The CombinedPaymentPeriod
     * Meta information extracted from the WSDL
     * - documentation: DO NOT USE THIS FIELD. As an alternative, use the <b>CombinedDuration</b> field in <b>SetShippingDiscountProfiles</b> to specify the time period in which to allow buyers to combine order line items into a Combined Invoice order, and
     * use <b>GetShippingDiscountProfiles</b> to retrieve the <b>CombinedDuration</b> value.
     * - minOccurs: 0
     * @var string
     */
    public $CombinedPaymentPeriod;
    /**
     * The FlatShippingPreferences
     * Meta information extracted from the WSDL
     * - documentation: DO NOT USE THIS CONTAINER. As an alternative, use <b>SetShippingDiscountProfiles</b> to set all Flat Rate Shipping rules and preferences, and use <b>GetShippingDiscountProfiles</b> to retrieve the same information.
     * - minOccurs: 0
     * @var \StructType\FlatShippingPreferencesType
     */
    public $FlatShippingPreferences;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for CombinedPaymentPreferencesType
     * @uses CombinedPaymentPreferencesType::setCalculatedShippingPreferences()
     * @uses CombinedPaymentPreferencesType::setCombinedPaymentOption()
     * @uses CombinedPaymentPreferencesType::setCombinedPaymentPeriod()
     * @uses CombinedPaymentPreferencesType::setFlatShippingPreferences()
     * @uses CombinedPaymentPreferencesType::setAny()
     * @param \StructType\CalculatedShippingPreferencesType $calculatedShippingPreferences
     * @param string $combinedPaymentOption
     * @param string $combinedPaymentPeriod
     * @param \StructType\FlatShippingPreferencesType $flatShippingPreferences
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\CalculatedShippingPreferencesType $calculatedShippingPreferences = null, $combinedPaymentOption = null, $combinedPaymentPeriod = null, \StructType\FlatShippingPreferencesType $flatShippingPreferences = null, \DOMDocument $any = null)
    {
        $this
            ->setCalculatedShippingPreferences($calculatedShippingPreferences)
            ->setCombinedPaymentOption($combinedPaymentOption)
            ->setCombinedPaymentPeriod($combinedPaymentPeriod)
            ->setFlatShippingPreferences($flatShippingPreferences)
            ->setAny($any);
    }
    /**
     * Get CalculatedShippingPreferences value
     * @return \StructType\CalculatedShippingPreferencesType|null
     */
    public function getCalculatedShippingPreferences()
    {
        return $this->CalculatedShippingPreferences;
    }
    /**
     * Set CalculatedShippingPreferences value
     * @param \StructType\CalculatedShippingPreferencesType $calculatedShippingPreferences
     * @return \StructType\CombinedPaymentPreferencesType
     */
    public function setCalculatedShippingPreferences(\StructType\CalculatedShippingPreferencesType $calculatedShippingPreferences = null)
    {
        $this->CalculatedShippingPreferences = $calculatedShippingPreferences;
        return $this;
    }
    /**
     * Get CombinedPaymentOption value
     * @return string|null
     */
    public function getCombinedPaymentOption()
    {
        return $this->CombinedPaymentOption;
    }
    /**
     * Set CombinedPaymentOption value
     * @uses \EnumType\CombinedPaymentOptionCodeType::valueIsValid()
     * @uses \EnumType\CombinedPaymentOptionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $combinedPaymentOption
     * @return \StructType\CombinedPaymentPreferencesType
     */
    public function setCombinedPaymentOption($combinedPaymentOption = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CombinedPaymentOptionCodeType::valueIsValid($combinedPaymentOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CombinedPaymentOptionCodeType', is_array($combinedPaymentOption) ? implode(', ', $combinedPaymentOption) : var_export($combinedPaymentOption, true), implode(', ', \EnumType\CombinedPaymentOptionCodeType::getValidValues())), __LINE__);
        }
        $this->CombinedPaymentOption = $combinedPaymentOption;
        return $this;
    }
    /**
     * Get CombinedPaymentPeriod value
     * @return string|null
     */
    public function getCombinedPaymentPeriod()
    {
        return $this->CombinedPaymentPeriod;
    }
    /**
     * Set CombinedPaymentPeriod value
     * @uses \EnumType\CombinedPaymentPeriodCodeType::valueIsValid()
     * @uses \EnumType\CombinedPaymentPeriodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $combinedPaymentPeriod
     * @return \StructType\CombinedPaymentPreferencesType
     */
    public function setCombinedPaymentPeriod($combinedPaymentPeriod = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CombinedPaymentPeriodCodeType::valueIsValid($combinedPaymentPeriod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CombinedPaymentPeriodCodeType', is_array($combinedPaymentPeriod) ? implode(', ', $combinedPaymentPeriod) : var_export($combinedPaymentPeriod, true), implode(', ', \EnumType\CombinedPaymentPeriodCodeType::getValidValues())), __LINE__);
        }
        $this->CombinedPaymentPeriod = $combinedPaymentPeriod;
        return $this;
    }
    /**
     * Get FlatShippingPreferences value
     * @return \StructType\FlatShippingPreferencesType|null
     */
    public function getFlatShippingPreferences()
    {
        return $this->FlatShippingPreferences;
    }
    /**
     * Set FlatShippingPreferences value
     * @param \StructType\FlatShippingPreferencesType $flatShippingPreferences
     * @return \StructType\CombinedPaymentPreferencesType
     */
    public function setFlatShippingPreferences(\StructType\FlatShippingPreferencesType $flatShippingPreferences = null)
    {
        $this->FlatShippingPreferences = $flatShippingPreferences;
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
     * @return \StructType\CombinedPaymentPreferencesType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
