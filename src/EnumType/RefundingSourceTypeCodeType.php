<?php

namespace EnumType;

/**
 * This class stands for RefundingSourceTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class RefundingSourceTypeCodeType
{
    /**
     * Constant for value 'ScheduledPayout'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'ScheduledPayout'
     */
    const VALUE_SCHEDULED_PAYOUT = 'ScheduledPayout';
    /**
     * Constant for value 'Paypal'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Paypal'
     */
    const VALUE_PAYPAL = 'Paypal';
    /**
     * Constant for value 'BankAccount'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'BankAccount'
     */
    const VALUE_BANK_ACCOUNT = 'BankAccount';
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
     * @uses self::VALUE_SCHEDULED_PAYOUT
     * @uses self::VALUE_PAYPAL
     * @uses self::VALUE_BANK_ACCOUNT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SCHEDULED_PAYOUT,
            self::VALUE_PAYPAL,
            self::VALUE_BANK_ACCOUNT,
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
