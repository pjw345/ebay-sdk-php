<?php

namespace EnumType;

/**
 * This class stands for PaymentInstructionCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type indicates the type of payment instructions included in the shipping package.
 * @subpackage Enumerations
 */
class PaymentInstructionCodeType
{
    /**
     * Constant for value 'PaymentInstruction'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that payment instructions were included in the shipping package for the 'Pay Upon Invoice' order.
     * @return string 'PaymentInstruction'
     */
    const VALUE_PAYMENT_INSTRUCTION = 'PaymentInstruction';
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
     * @uses self::VALUE_PAYMENT_INSTRUCTION
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PAYMENT_INSTRUCTION,
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
