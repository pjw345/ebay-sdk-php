<?php

namespace EnumType;

/**
 * This class stands for PromotionalSaleTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Values specify or indicate the type of promotional sale offered. Promotional sales give store owners the ability to apply discounts and/or free shipping across many listings for a specific duration.
 * @subpackage Enumerations
 */
class PromotionalSaleTypeCodeType
{
    /**
     * Constant for value 'PriceDiscountOnly'
     * Meta information extracted from the WSDL
     * - documentation: Sale offers price discount only.
     * @return string 'PriceDiscountOnly'
     */
    const VALUE_PRICE_DISCOUNT_ONLY = 'PriceDiscountOnly';
    /**
     * Constant for value 'FreeShippingOnly'
     * Meta information extracted from the WSDL
     * - documentation: Sale offers free shipping only.
     * @return string 'FreeShippingOnly'
     */
    const VALUE_FREE_SHIPPING_ONLY = 'FreeShippingOnly';
    /**
     * Constant for value 'PriceDiscountAndFreeShipping'
     * Meta information extracted from the WSDL
     * - documentation: Sale offers both price discount and free shipping.
     * @return string 'PriceDiscountAndFreeShipping'
     */
    const VALUE_PRICE_DISCOUNT_AND_FREE_SHIPPING = 'PriceDiscountAndFreeShipping';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
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
     * @uses self::VALUE_PRICE_DISCOUNT_ONLY
     * @uses self::VALUE_FREE_SHIPPING_ONLY
     * @uses self::VALUE_PRICE_DISCOUNT_AND_FREE_SHIPPING
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PRICE_DISCOUNT_ONLY,
            self::VALUE_FREE_SHIPPING_ONLY,
            self::VALUE_PRICE_DISCOUNT_AND_FREE_SHIPPING,
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
