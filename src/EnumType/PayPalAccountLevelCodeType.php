<?php

namespace EnumType;

/**
 * This class stands for PayPalAccountLevelCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that defines PayPal account levels.
 * @subpackage Enumerations
 */
class PayPalAccountLevelCodeType
{
    /**
     * Constant for value 'Unverified'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the user's PayPal account is unverified.
     * @return string 'Unverified'
     */
    const VALUE_UNVERIFIED = 'Unverified';
    /**
     * Constant for value 'InternationalUnverified'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the user's international PayPal account is unverified.
     * @return string 'InternationalUnverified'
     */
    const VALUE_INTERNATIONAL_UNVERIFIED = 'InternationalUnverified';
    /**
     * Constant for value 'Verified'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the user's PayPal account is verified.
     * @return string 'Verified'
     */
    const VALUE_VERIFIED = 'Verified';
    /**
     * Constant for value 'InternationalVerified'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the user's international PayPal account is verified.
     * @return string 'InternationalVerified'
     */
    const VALUE_INTERNATIONAL_VERIFIED = 'InternationalVerified';
    /**
     * Constant for value 'Trusted'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the user's PayPal account is a trusted account.
     * @return string 'Trusted'
     */
    const VALUE_TRUSTED = 'Trusted';
    /**
     * Constant for value 'Unknown'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the user's PayPal account information is unknown.
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Invalid'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the user's PayPal account is invalid.
     * @return string 'Invalid'
     */
    const VALUE_INVALID = 'Invalid';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use
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
     * @uses self::VALUE_UNVERIFIED
     * @uses self::VALUE_INTERNATIONAL_UNVERIFIED
     * @uses self::VALUE_VERIFIED
     * @uses self::VALUE_INTERNATIONAL_VERIFIED
     * @uses self::VALUE_TRUSTED
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_INVALID
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNVERIFIED,
            self::VALUE_INTERNATIONAL_UNVERIFIED,
            self::VALUE_VERIFIED,
            self::VALUE_INTERNATIONAL_VERIFIED,
            self::VALUE_TRUSTED,
            self::VALUE_UNKNOWN,
            self::VALUE_INVALID,
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
