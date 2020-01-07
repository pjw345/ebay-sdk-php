<?php

namespace EnumType;

/**
 * This class stands for RCSPaymentStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: The status of a payment.
 * @subpackage Enumerations
 */
class RCSPaymentStatusCodeType
{
    /**
     * Constant for value 'Canceled'
     * Meta information extracted from the WSDL
     * - documentation: Order line item payment has been canceled. (Reserved for future use.)
     * @return string 'Canceled'
     */
    const VALUE_CANCELED = 'Canceled';
    /**
     * Constant for value 'Paid'
     * Meta information extracted from the WSDL
     * - documentation: Order line item payment is completed.
     * @return string 'Paid'
     */
    const VALUE_PAID = 'Paid';
    /**
     * Constant for value 'Pending'
     * Meta information extracted from the WSDL
     * - documentation: Order line item is awaiting payment.
     * @return string 'Pending'
     */
    const VALUE_PENDING = 'Pending';
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
     * @uses self::VALUE_CANCELED
     * @uses self::VALUE_PAID
     * @uses self::VALUE_PENDING
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CANCELED,
            self::VALUE_PAID,
            self::VALUE_PENDING,
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
