<?php

namespace EnumType;

/**
 * This class stands for AddressUsageCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumeration type lists the values that will be returned to the seller in a <b>GetOrders</b> call (and other order management calls) to indicate that the shipping address is the buyer's default shipping address, an
 * alternative/secondary shipping address, or an invalid shipping address.
 * @subpackage Enumerations
 */
class AddressUsageCodeType
{
    /**
     * Constant for value 'DefaultShipping'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the shipping address provided by the buyer at checkout time is the buyer's default/primary shipping address.
     * @return string 'DefaultShipping'
     */
    const VALUE_DEFAULT_SHIPPING = 'DefaultShipping';
    /**
     * Constant for value 'Shipping'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the shipping address provided by the buyer at checkout time is one of the buyer's secondary shipping addresses on file with eBay.
     * @return string 'Shipping'
     */
    const VALUE_SHIPPING = 'Shipping';
    /**
     * Constant for value 'Invalid'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the address is not valid, and an alternative address will have to be provided before the order is shipped.
     * @return string 'Invalid'
     */
    const VALUE_INVALID = 'Invalid';
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
     * @uses self::VALUE_DEFAULT_SHIPPING
     * @uses self::VALUE_SHIPPING
     * @uses self::VALUE_INVALID
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DEFAULT_SHIPPING,
            self::VALUE_SHIPPING,
            self::VALUE_INVALID,
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
