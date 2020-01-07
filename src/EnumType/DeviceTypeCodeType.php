<?php

namespace EnumType;

/**
 * This class stands for DeviceTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is a list of the systems used to deliver buyer/seller notifications.
 * @subpackage Enumerations
 */
class DeviceTypeCodeType
{
    /**
     * Constant for value 'Platform'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that buyer/seller notifications will be delivered through the Platform Notifications system.
     * @return string 'Platform'
     */
    const VALUE_PLATFORM = 'Platform';
    /**
     * Constant for value 'SMS'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that buyer/seller notifications will be delivered through the SMS system to a wireless device.
     * @return string 'SMS'
     */
    const VALUE_SMS = 'SMS';
    /**
     * Constant for value 'ClientAlerts'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that buyer/seller notifications will be delivered through the Client Alerts system.
     * @return string 'ClientAlerts'
     */
    const VALUE_CLIENT_ALERTS = 'ClientAlerts';
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
     * @uses self::VALUE_PLATFORM
     * @uses self::VALUE_SMS
     * @uses self::VALUE_CLIENT_ALERTS
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PLATFORM,
            self::VALUE_SMS,
            self::VALUE_CLIENT_ALERTS,
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
