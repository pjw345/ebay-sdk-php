<?php

namespace EnumType;

/**
 * This class stands for DepositTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: For vehicles listed through the US eBay Motors site, DepositType indicates how the buyer should pay the deposit amount. It is used in conjunction with a buyer payment method (BuyerPaymentMethodCodeType).
 * @subpackage Enumerations
 */
class DepositTypeCodeType
{
    /**
     * Constant for value 'None'
     * Meta information extracted from the WSDL
     * - documentation: (out) No deposit needed.
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'OtherMethod'
     * Meta information extracted from the WSDL
     * - documentation: (out) Pay the deposit using PayPal, and then use any of the other specified payment methods to pay the balance.
     * @return string 'OtherMethod'
     */
    const VALUE_OTHER_METHOD = 'OtherMethod';
    /**
     * Constant for value 'FastDeposit'
     * Meta information extracted from the WSDL
     * - documentation: (out) No longer used.
     * @return string 'FastDeposit'
     */
    const VALUE_FAST_DEPOSIT = 'FastDeposit';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use
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
     * @uses self::VALUE_NONE
     * @uses self::VALUE_OTHER_METHOD
     * @uses self::VALUE_FAST_DEPOSIT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_OTHER_METHOD,
            self::VALUE_FAST_DEPOSIT,
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
