<?php

namespace EnumType;

/**
 * This class stands for MeasurementSystemCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type defines the two measurement systems that are used globally.
 * @subpackage Enumerations
 */
class MeasurementSystemCodeType
{
    /**
     * Constant for value 'English'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the English system of measurement is being used. Also known as the Imperial System of Measurement. Weights in this system are expressed as pounds and ounces, and package dimensions are expressed
     * as feet or inches.
     * @return string 'English'
     */
    const VALUE_ENGLISH = 'English';
    /**
     * Constant for value 'Metric'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the English system of measurement is being used. Weights in this system are expressed as kilograms and grams, and package dimensions are expressed as meters or centimeters.
     * @return string 'Metric'
     */
    const VALUE_METRIC = 'Metric';
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
     * @uses self::VALUE_ENGLISH
     * @uses self::VALUE_METRIC
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ENGLISH,
            self::VALUE_METRIC,
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
