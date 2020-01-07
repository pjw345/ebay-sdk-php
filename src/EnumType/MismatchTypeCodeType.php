<?php

namespace EnumType;

/**
 * This class stands for MismatchTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class MismatchTypeCodeType
{
    /**
     * Constant for value 'OverPayment'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'OverPayment'
     */
    const VALUE_OVER_PAYMENT = 'OverPayment';
    /**
     * Constant for value 'UnderPayment'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'UnderPayment'
     */
    const VALUE_UNDER_PAYMENT = 'UnderPayment';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use
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
     * @uses self::VALUE_OVER_PAYMENT
     * @uses self::VALUE_UNDER_PAYMENT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OVER_PAYMENT,
            self::VALUE_UNDER_PAYMENT,
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
