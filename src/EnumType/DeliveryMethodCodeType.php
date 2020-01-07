<?php

namespace EnumType;

/**
 * This class stands for DeliveryMethodCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumeration type lists the possible delivery methods of a digital gift card. Currently, the only supported delivery method is by email.
 * @subpackage Enumerations
 */
class DeliveryMethodCodeType
{
    /**
     * Constant for value 'Email'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the link to download the digital gift card will be delivered to the recipient by email.
     * @return string 'Email'
     */
    const VALUE_EMAIL = 'Email';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is reserved for internal or future use.
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
     * @uses self::VALUE_EMAIL
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EMAIL,
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
