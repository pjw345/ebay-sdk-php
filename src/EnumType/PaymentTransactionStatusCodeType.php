<?php

namespace EnumType;

/**
 * This class stands for PaymentTransactionStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the possible states of a payment transaction. This type is used by several containers in order management-related calls.
 * @subpackage Enumerations
 */
class PaymentTransactionStatusCodeType
{
    /**
     * Constant for value 'Failed'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the payment transaction failed.
     * @return string 'Failed'
     */
    const VALUE_FAILED = 'Failed';
    /**
     * Constant for value 'Succeeded'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the payment transaction succeeded.
     * @return string 'Succeeded'
     */
    const VALUE_SUCCEEDED = 'Succeeded';
    /**
     * Constant for value 'Pending'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the payment transaction is pending.
     * @return string 'Pending'
     */
    const VALUE_PENDING = 'Pending';
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
     * @uses self::VALUE_FAILED
     * @uses self::VALUE_SUCCEEDED
     * @uses self::VALUE_PENDING
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FAILED,
            self::VALUE_SUCCEEDED,
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
