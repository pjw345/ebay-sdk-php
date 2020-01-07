<?php

namespace EnumType;

/**
 * This class stands for SMSSubscriptionUserStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: The current state of user SMS subscription.
 * @subpackage Enumerations
 */
class SMSSubscriptionUserStatusCodeType
{
    /**
     * Constant for value 'Registered'
     * Meta information extracted from the WSDL
     * - documentation: (out) Registered.
     * @return string 'Registered'
     */
    const VALUE_REGISTERED = 'Registered';
    /**
     * Constant for value 'Unregistered'
     * Meta information extracted from the WSDL
     * - documentation: (out) Unregistered.
     * @return string 'Unregistered'
     */
    const VALUE_UNREGISTERED = 'Unregistered';
    /**
     * Constant for value 'Pending'
     * Meta information extracted from the WSDL
     * - documentation: (out) Pending subscription.
     * @return string 'Pending'
     */
    const VALUE_PENDING = 'Pending';
    /**
     * Constant for value 'Failed'
     * Meta information extracted from the WSDL
     * - documentation: (out) Subscription failed.
     * @return string 'Failed'
     */
    const VALUE_FAILED = 'Failed';
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
     * @uses self::VALUE_REGISTERED
     * @uses self::VALUE_UNREGISTERED
     * @uses self::VALUE_PENDING
     * @uses self::VALUE_FAILED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_REGISTERED,
            self::VALUE_UNREGISTERED,
            self::VALUE_PENDING,
            self::VALUE_FAILED,
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
