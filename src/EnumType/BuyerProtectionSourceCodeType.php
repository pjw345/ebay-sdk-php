<?php

namespace EnumType;

/**
 * This class stands for BuyerProtectionSourceCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumeration type indicates the applicable buyer protection program that the item is eligible to be covered under.
 * @subpackage Enumerations
 */
class BuyerProtectionSourceCodeType
{
    /**
     * Constant for value 'eBay'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the item is possibly eligible for buyer protection under the eBay Money Back Guarantee program.
     * @return string 'eBay'
     */
    const VALUE_E_BAY = 'eBay';
    /**
     * Constant for value 'PayPal'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the item is possibly eligible for buyer protection under the PayPal Purchase Protection Program.
     * @return string 'PayPal'
     */
    const VALUE_PAY_PAL = 'PayPal';
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
     * @uses self::VALUE_E_BAY
     * @uses self::VALUE_PAY_PAL
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_E_BAY,
            self::VALUE_PAY_PAL,
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
