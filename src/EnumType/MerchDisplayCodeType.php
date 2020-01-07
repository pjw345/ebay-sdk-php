<?php

namespace EnumType;

/**
 * This class stands for MerchDisplayCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Enumerations
 */
class MerchDisplayCodeType
{
    /**
     * Constant for value 'DefaultTheme'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'DefaultTheme'
     */
    const VALUE_DEFAULT_THEME = 'DefaultTheme';
    /**
     * Constant for value 'StoreTheme'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'StoreTheme'
     */
    const VALUE_STORE_THEME = 'StoreTheme';
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
     * @uses self::VALUE_DEFAULT_THEME
     * @uses self::VALUE_STORE_THEME
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DEFAULT_THEME,
            self::VALUE_STORE_THEME,
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
