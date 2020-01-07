<?php

namespace EnumType;

/**
 * This class stands for SellingManagerEmailSentStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Specifies the Selling Manager email status.
 * @subpackage Enumerations
 */
class SellingManagerEmailSentStatusCodeType
{
    /**
     * Constant for value 'Successful'
     * Meta information extracted from the WSDL
     * - documentation: Email sent successfully.
     * @return string 'Successful'
     */
    const VALUE_SUCCESSFUL = 'Successful';
    /**
     * Constant for value 'Failed'
     * Meta information extracted from the WSDL
     * - documentation: Sending of email failed.
     * @return string 'Failed'
     */
    const VALUE_FAILED = 'Failed';
    /**
     * Constant for value 'Pending'
     * Meta information extracted from the WSDL
     * - documentation: Email is not yet sent and is in Queue.
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
     * @uses self::VALUE_SUCCESSFUL
     * @uses self::VALUE_FAILED
     * @uses self::VALUE_PENDING
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SUCCESSFUL,
            self::VALUE_FAILED,
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
