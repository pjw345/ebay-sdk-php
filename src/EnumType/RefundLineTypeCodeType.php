<?php

namespace EnumType;

/**
 * This class stands for RefundLineTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class RefundLineTypeCodeType
{
    /**
     * Constant for value 'PurchasePrice'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'PurchasePrice'
     */
    const VALUE_PURCHASE_PRICE = 'PurchasePrice';
    /**
     * Constant for value 'ShippingPrice'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'ShippingPrice'
     */
    const VALUE_SHIPPING_PRICE = 'ShippingPrice';
    /**
     * Constant for value 'Additional'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Additional'
     */
    const VALUE_ADDITIONAL = 'Additional';
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
     * @uses self::VALUE_PURCHASE_PRICE
     * @uses self::VALUE_SHIPPING_PRICE
     * @uses self::VALUE_ADDITIONAL
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PURCHASE_PRICE,
            self::VALUE_SHIPPING_PRICE,
            self::VALUE_ADDITIONAL,
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
