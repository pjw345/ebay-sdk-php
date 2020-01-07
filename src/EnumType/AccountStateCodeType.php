<?php

namespace EnumType;

/**
 * This class stands for AccountStateCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that lists the possible states of an eBay user account.
 * @subpackage Enumerations
 */
class AccountStateCodeType
{
    /**
     * Constant for value 'Active'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the eBay user account is active.
     * @return string 'Active'
     */
    const VALUE_ACTIVE = 'Active';
    /**
     * Constant for value 'Pending'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the eBay user account has been created, but is not yet active, pending additional information or processing by eBay.
     * @return string 'Pending'
     */
    const VALUE_PENDING = 'Pending';
    /**
     * Constant for value 'Inactive'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the eBay user account is inactive. No new seller account entries would be posted by eBay to the account.
     * @return string 'Inactive'
     */
    const VALUE_INACTIVE = 'Inactive';
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
     * @uses self::VALUE_ACTIVE
     * @uses self::VALUE_PENDING
     * @uses self::VALUE_INACTIVE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ACTIVE,
            self::VALUE_PENDING,
            self::VALUE_INACTIVE,
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
