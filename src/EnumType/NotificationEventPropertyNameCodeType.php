<?php

namespace EnumType;

/**
 * This class stands for NotificationEventPropertyNameCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Defines all property names that can be used.
 * @subpackage Enumerations
 */
class NotificationEventPropertyNameCodeType
{
    /**
     * Constant for value 'TimeLeft'
     * Meta information extracted from the WSDL
     * - documentation: Property name for WatchedItemEndingSoon events, enabling a user to specify a time in minutes before the end of the listing. Acceptable values: 5, 10, 15, 30, 60, 75, and 180. For example, to receive a WatchedItemEndingSoon
     * notification 30 minutes before the item listing ends, specify 30.
     * @return string 'TimeLeft'
     */
    const VALUE_TIME_LEFT = 'TimeLeft';
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
     * @uses self::VALUE_TIME_LEFT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_TIME_LEFT,
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
