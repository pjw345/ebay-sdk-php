<?php

namespace EnumType;

/**
 * This class stands for SellerBusinessCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Type of seller account. This value is returned if the user is a business seller with a site ID of 77 (Germany), 3 (UK), 205 (Ireland) or 0 (US Motors).
 * @subpackage Enumerations
 */
class SellerBusinessCodeType
{
    /**
     * Constant for value 'Undefined'
     * Meta information extracted from the WSDL
     * - documentation: Type of seller account not defined.
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'Private'
     * Meta information extracted from the WSDL
     * - documentation: Private seller account.
     * @return string 'Private'
     */
    const VALUE_PRIVATE = 'Private';
    /**
     * Constant for value 'Commercial'
     * Meta information extracted from the WSDL
     * - documentation: Commercial seller account.
     * @return string 'Commercial'
     */
    const VALUE_COMMERCIAL = 'Commercial';
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
     * @uses self::VALUE_UNDEFINED
     * @uses self::VALUE_PRIVATE
     * @uses self::VALUE_COMMERCIAL
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_PRIVATE,
            self::VALUE_COMMERCIAL,
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
