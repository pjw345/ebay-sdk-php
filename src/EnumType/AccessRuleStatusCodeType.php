<?php

namespace EnumType;

/**
 * This class stands for AccessRuleStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type contains values that describe an application's current status with respect to an API access rule.
 * @subpackage Enumerations
 */
class AccessRuleStatusCodeType
{
    /**
     * Constant for value 'RuleOff'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the rule is turned off, and no rule validation was performed.
     * @return string 'RuleOff'
     */
    const VALUE_RULE_OFF = 'RuleOff';
    /**
     * Constant for value 'RuleOn'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the rule is turned on, and rule validation was performed.
     * @return string 'RuleOn'
     */
    const VALUE_RULE_ON = 'RuleOn';
    /**
     * Constant for value 'ApplicationBlocked'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the application is blocked from making requests to the call named in this rule.
     * @return string 'ApplicationBlocked'
     */
    const VALUE_APPLICATION_BLOCKED = 'ApplicationBlocked';
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
     * @uses self::VALUE_RULE_OFF
     * @uses self::VALUE_RULE_ON
     * @uses self::VALUE_APPLICATION_BLOCKED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_RULE_OFF,
            self::VALUE_RULE_ON,
            self::VALUE_APPLICATION_BLOCKED,
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
