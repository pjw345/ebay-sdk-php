<?php

namespace EnumType;

/**
 * This class stands for ProfileCategoryGroupCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that defines the category group values. Business Policies profiles (Payment, Shipping, and Return Policy) are linked to category groups.
 * @subpackage Enumerations
 */
class ProfileCategoryGroupCodeType
{
    /**
     * Constant for value 'Inherit'
     * Meta information extracted from the WSDL
     * - documentation: Default value.
     * @return string 'Inherit'
     */
    const VALUE_INHERIT = 'Inherit';
    /**
     * Constant for value 'None'
     * Meta information extracted from the WSDL
     * - documentation: None.
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'ALL'
     * Meta information extracted from the WSDL
     * - documentation: For Business Policies, the 'ALL' enumeration value represents all eBay categories except for motor vehicles.
     * @return string 'ALL'
     */
    const VALUE_ALL = 'ALL';
    /**
     * Constant for value 'MOTORS_VEHICLE'
     * Meta information extracted from the WSDL
     * - documentation: For Business Policies, the 'MOTORS_VEHICLE' enumeration value represents all motor vehicle categories.
     * @return string 'MOTORS_VEHICLE'
     */
    const VALUE_MOTORS_VEHICLE = 'MOTORS_VEHICLE';
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
     * @uses self::VALUE_INHERIT
     * @uses self::VALUE_NONE
     * @uses self::VALUE_ALL
     * @uses self::VALUE_MOTORS_VEHICLE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_INHERIT,
            self::VALUE_NONE,
            self::VALUE_ALL,
            self::VALUE_MOTORS_VEHICLE,
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
