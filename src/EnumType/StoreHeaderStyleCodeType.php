<?php

namespace EnumType;

/**
 * This class stands for StoreHeaderStyleCodeType EnumType
 * @subpackage Enumerations
 */
class StoreHeaderStyleCodeType
{
    /**
     * Constant for value 'Full'
     * Meta information extracted from the WSDL
     * - documentation: The full Store header is used.
     * @return string 'Full'
     */
    const VALUE_FULL = 'Full';
    /**
     * Constant for value 'Minimized'
     * Meta information extracted from the WSDL
     * - documentation: A minimized Store header is used.
     * @return string 'Minimized'
     */
    const VALUE_MINIMIZED = 'Minimized';
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
     * @uses self::VALUE_FULL
     * @uses self::VALUE_MINIMIZED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FULL,
            self::VALUE_MINIMIZED,
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
