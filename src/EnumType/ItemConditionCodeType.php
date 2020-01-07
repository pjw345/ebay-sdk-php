<?php

namespace EnumType;

/**
 * This class stands for ItemConditionCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Specifies a predefined subset of item conditions. The predefined set of fields can vary for different calls.
 * @subpackage Enumerations
 */
class ItemConditionCodeType
{
    /**
     * Constant for value 'New'
     * Meta information extracted from the WSDL
     * - documentation: The seller specified the Item Condition as New, or did not specify a condition. (Excludes items that the seller listed as Used.)
     * @return string 'New'
     */
    const VALUE_NEW = 'New';
    /**
     * Constant for value 'Used'
     * Meta information extracted from the WSDL
     * - documentation: The seller specified the Item Condition as Used, or did not specify a condition. (Excludes items that the seller listed as New.)
     * @return string 'Used'
     */
    const VALUE_USED = 'Used';
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
     * @uses self::VALUE_NEW
     * @uses self::VALUE_USED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NEW,
            self::VALUE_USED,
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
