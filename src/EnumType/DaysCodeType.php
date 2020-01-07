<?php

namespace EnumType;

/**
 * This class stands for DaysCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Specifies the range of days the seller can be contacted.
 * @subpackage Enumerations
 */
class DaysCodeType
{
    /**
     * Constant for value 'None'
     * Meta information extracted from the WSDL
     * - documentation: Seller does not want to be contacted. Contact hours will not be supported for any days. If contact hours are specified, they will be ignored.
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'EveryDay'
     * Meta information extracted from the WSDL
     * - documentation: Seller can be contacted any day during the specified contact hours.
     * @return string 'EveryDay'
     */
    const VALUE_EVERY_DAY = 'EveryDay';
    /**
     * Constant for value 'Weekdays'
     * Meta information extracted from the WSDL
     * - documentation: Seller can be contacted Monday through Friday during the specified contact hours.
     * @return string 'Weekdays'
     */
    const VALUE_WEEKDAYS = 'Weekdays';
    /**
     * Constant for value 'Weekends'
     * Meta information extracted from the WSDL
     * - documentation: Seller can be contacted Saturday or Sunday during the specified contact hours.
     * @return string 'Weekends'
     */
    const VALUE_WEEKENDS = 'Weekends';
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
     * @uses self::VALUE_NONE
     * @uses self::VALUE_EVERY_DAY
     * @uses self::VALUE_WEEKDAYS
     * @uses self::VALUE_WEEKENDS
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_EVERY_DAY,
            self::VALUE_WEEKDAYS,
            self::VALUE_WEEKENDS,
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
