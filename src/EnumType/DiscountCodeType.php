<?php

namespace EnumType;

/**
 * This class stands for DiscountCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is used to specify if the discount used for a promotional sale is a price (dollar value) discount or a percentage (of sale price) discount.
 * @subpackage Enumerations
 */
class DiscountCodeType
{
    /**
     * Constant for value 'Percentage'
     * Meta information extracted from the WSDL
     * - documentation: The enumeration value indicates that the discount being offered is a percentage discount, which means a percentage of the total price to the buyer is being discounted. So, if the total price for an order line item is $100, the
     * <b>DiscountType</b> is <code>Percentage</code>, and the <b>DiscountValue</b> is <code>15.0</code> (percent), the buyer will pay just $85.00 for the order line item.
     * @return string 'Percentage'
     */
    const VALUE_PERCENTAGE = 'Percentage';
    /**
     * Constant for value 'Price'
     * Meta information extracted from the WSDL
     * - documentation: The enumeration value indicates that the discount being offered is a price discount, which means the total price to the buyer is being reduced by this amount. So, if the total price for an order line item is $100, the
     * <b>DiscountType</b> is <code>Price</code>, and the <b>DiscountValue</b> is <code>20.0</code> (dollars), the buyer will pay just $80.00 for the order line item.
     * @return string 'Price'
     */
    const VALUE_PRICE = 'Price';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is reserved for future use.
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
     * @uses self::VALUE_PERCENTAGE
     * @uses self::VALUE_PRICE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PERCENTAGE,
            self::VALUE_PRICE,
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
