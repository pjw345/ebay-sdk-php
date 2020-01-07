<?php

namespace EnumType;

/**
 * This class stands for BidGroupStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class BidGroupStatusCodeType
{
    /**
     * Constant for value 'Open'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Open'
     */
    const VALUE_OPEN = 'Open';
    /**
     * Constant for value 'Closed'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Closed'
     */
    const VALUE_CLOSED = 'Closed';
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
     * @uses self::VALUE_OPEN
     * @uses self::VALUE_CLOSED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OPEN,
            self::VALUE_CLOSED,
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
