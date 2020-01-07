<?php

namespace EnumType;

/**
 * This class stands for AdFormatLeadStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that indicates to the owner of a classified ad whether or not an email correspondence from a prospective buyer has been answered.
 * @subpackage Enumerations
 */
class AdFormatLeadStatusCodeType
{
    /**
     * Constant for value 'New'
     * Meta information extracted from the WSDL
     * - documentation: This value will appear in the response if there is a new message from a prospective buyer that the seller has not yet responded to.
     * @return string 'New'
     */
    const VALUE_NEW = 'New';
    /**
     * Constant for value 'Responded'
     * Meta information extracted from the WSDL
     * - documentation: This value will appear in the response if the seller has already responded to the prospective buyer's message.
     * @return string 'Responded'
     */
    const VALUE_RESPONDED = 'Responded';
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
     * @uses self::VALUE_NEW
     * @uses self::VALUE_RESPONDED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NEW,
            self::VALUE_RESPONDED,
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
