<?php

namespace EnumType;

/**
 * This class stands for GeneralPaymentMethodCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class GeneralPaymentMethodCodeType
{
    /**
     * Constant for value 'Other'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Constant for value 'Echeck'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Echeck'
     */
    const VALUE_ECHECK = 'Echeck';
    /**
     * Constant for value 'ACH'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'ACH'
     */
    const VALUE_ACH = 'ACH';
    /**
     * Constant for value 'Creditcard'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Creditcard'
     */
    const VALUE_CREDITCARD = 'Creditcard';
    /**
     * Constant for value 'PayPalBalance'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'PayPalBalance'
     */
    const VALUE_PAY_PAL_BALANCE = 'PayPalBalance';
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
     * @uses self::VALUE_ECHECK
     * @uses self::VALUE_ACH
     * @uses self::VALUE_CREDITCARD
     * @uses self::VALUE_PAY_PAL_BALANCE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OTHER,
            self::VALUE_ECHECK,
            self::VALUE_ACH,
            self::VALUE_CREDITCARD,
            self::VALUE_PAY_PAL_BALANCE,
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
