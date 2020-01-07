<?php

namespace EnumType;

/**
 * This class stands for StoreCustomPageStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: List of possible statuses for Store custom pages.
 * @subpackage Enumerations
 */
class StoreCustomPageStatusCodeType
{
    /**
     * Constant for value 'Active'
     * Meta information extracted from the WSDL
     * - documentation: The page is visible.
     * @return string 'Active'
     */
    const VALUE_ACTIVE = 'Active';
    /**
     * Constant for value 'Delete'
     * Meta information extracted from the WSDL
     * - documentation: The page is to be deleted.
     * @return string 'Delete'
     */
    const VALUE_DELETE = 'Delete';
    /**
     * Constant for value 'Inactive'
     * Meta information extracted from the WSDL
     * - documentation: The page is not visible.
     * @return string 'Inactive'
     */
    const VALUE_INACTIVE = 'Inactive';
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
     * @uses self::VALUE_ACTIVE
     * @uses self::VALUE_DELETE
     * @uses self::VALUE_INACTIVE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ACTIVE,
            self::VALUE_DELETE,
            self::VALUE_INACTIVE,
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
