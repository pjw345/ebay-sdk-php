<?php

namespace EnumType;

/**
 * This class stands for AuthTokenTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumeration type lists the types of user authentication tokens that can be used to access/use eBay APIs.
 * @subpackage Enumerations
 */
class AuthTokenTypeCodeType
{
    /**
     * Constant for value 'ClientAlertsToken'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that a Client Alerts token is required.
     * @return string 'ClientAlertsToken'
     */
    const VALUE_CLIENT_ALERTS_TOKEN = 'ClientAlertsToken';
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
     * @uses self::VALUE_CLIENT_ALERTS_TOKEN
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CLIENT_ALERTS_TOKEN,
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
