<?php

namespace EnumType;

/**
 * This class stands for SellerGuaranteeLevelCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This type was deprecated along with the Seller Guarantee feature.
 * @subpackage Enumerations
 */
class SellerGuaranteeLevelCodeType
{
    /**
     * Constant for value 'NotEligible'
     * Meta information extracted from the WSDL
     * - documentation: (out) Not eligible for Seller Level Guarantee
     * @return string 'NotEligible'
     */
    const VALUE_NOT_ELIGIBLE = 'NotEligible';
    /**
     * Constant for value 'Regular'
     * Meta information extracted from the WSDL
     * - documentation: (out) Regular eligibility level
     * @return string 'Regular'
     */
    const VALUE_REGULAR = 'Regular';
    /**
     * Constant for value 'Premium'
     * Meta information extracted from the WSDL
     * - documentation: (out) Premium eligibility level
     * @return string 'Premium'
     */
    const VALUE_PREMIUM = 'Premium';
    /**
     * Constant for value 'Ultra'
     * Meta information extracted from the WSDL
     * - documentation: (out) Ultra eligibility level
     * @return string 'Ultra'
     */
    const VALUE_ULTRA = 'Ultra';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
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
     * @uses self::VALUE_NOT_ELIGIBLE
     * @uses self::VALUE_REGULAR
     * @uses self::VALUE_PREMIUM
     * @uses self::VALUE_ULTRA
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NOT_ELIGIBLE,
            self::VALUE_REGULAR,
            self::VALUE_PREMIUM,
            self::VALUE_ULTRA,
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
