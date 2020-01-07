<?php

namespace EnumType;

/**
 * This class stands for EnableCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumeration type is used to indicate whether an application/URL/device is enabled to receive notifications, or to indicate whether a specific notification event is enabled.
 * @subpackage Enumerations
 */
class EnableCodeType
{
    /**
     * Constant for value 'Enable'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that an application/URL/device is enabled to receive notifications, or to indicate that a specific notification event is enabled.
     * @return string 'Enable'
     */
    const VALUE_ENABLE = 'Enable';
    /**
     * Constant for value 'Disable'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that an application/URL/device is disabled, or being blocked from receiving notifications, or to indicate that a specific notification event is disabled.
     * @return string 'Disable'
     */
    const VALUE_DISABLE = 'Disable';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use.
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
     * @uses self::VALUE_ENABLE
     * @uses self::VALUE_DISABLE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ENABLE,
            self::VALUE_DISABLE,
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
