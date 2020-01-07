<?php

namespace EnumType;

/**
 * This class stands for MinimumAdvertisedPriceExposureCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type defines the special price treatments that can be set up for listings enabled with the Minimum Advertised Price feature. The Minimum Advertised Price (MAP) feature is only supported on the eBay US site.
 * @subpackage Enumerations
 */
class MinimumAdvertisedPriceExposureCodeType
{
    /**
     * Constant for value 'PreCheckout'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the buyer must add the item to his/her cart before the discounted price can be displayed. To enable this pricing treatment when adding/revising/relisting an item, include the
     * <b>DiscountPriceInfo.MinimumAdvertisedPriceExposure</b> field in an Add/Revise/Relist calls and set its value to <code>PreCheckout</code>.
     * @return string 'PreCheckout'
     */
    const VALUE_PRE_CHECKOUT = 'PreCheckout';
    /**
     * Constant for value 'DuringCheckout'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the discounted price will only be shown to the buyer once the buyer reaches the eBay Checkout page. To enable this pricing treatment when adding/revising/relisting an item, include the
     * <b>DiscountPriceInfo.MinimumAdvertisedPriceExposure</b> field in an Add/Revise/Relist calls and set its value to <code>DuringCheckout</code>.
     * @return string 'DuringCheckout'
     */
    const VALUE_DURING_CHECKOUT = 'DuringCheckout';
    /**
     * Constant for value 'None'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the discounted price is shown on the View Item page, and the buyer is not required to add the item to his/her cart or click Buy button to view the discounted price. To enable this pricing
     * treatment when adding/revising/relisting an item, include the <b>DiscountPriceInfo.MinimumAdvertisedPriceExposure</b> field in an Add/Revise/Relist call and set its value to <code>None</code>.
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_PRE_CHECKOUT
     * @uses self::VALUE_DURING_CHECKOUT
     * @uses self::VALUE_NONE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PRE_CHECKOUT,
            self::VALUE_DURING_CHECKOUT,
            self::VALUE_NONE,
            self::VALUE_CUSTOM_CODE,
        );
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
