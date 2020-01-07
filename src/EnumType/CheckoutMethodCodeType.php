<?php

namespace EnumType;

/**
 * This class stands for CheckoutMethodCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class CheckoutMethodCodeType
{
    /**
     * Constant for value 'Other'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Constant for value 'ThirdPartyCheckout'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'ThirdPartyCheckout'
     */
    const VALUE_THIRD_PARTY_CHECKOUT = 'ThirdPartyCheckout';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
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
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_THIRD_PARTY_CHECKOUT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OTHER,
            self::VALUE_THIRD_PARTY_CHECKOUT,
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
