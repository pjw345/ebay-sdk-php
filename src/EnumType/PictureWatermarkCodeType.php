<?php

namespace EnumType;

/**
 * This class stands for PictureWatermarkCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class PictureWatermarkCodeType
{
    /**
     * Constant for value 'User'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'User'
     */
    const VALUE_USER = 'User';
    /**
     * Constant for value 'Icon'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Icon'
     */
    const VALUE_ICON = 'Icon';
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
     * @uses self::VALUE_USER
     * @uses self::VALUE_ICON
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_USER,
            self::VALUE_ICON,
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
