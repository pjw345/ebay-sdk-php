<?php

namespace EnumType;

/**
 * This class stands for SkypeContactOptionCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This type is no longer applicable as member communication through Skype has been disabled in API calls.
 * @subpackage Enumerations
 */
class SkypeContactOptionCodeType
{
    /**
     * Constant for value 'Chat'
     * Meta information extracted from the WSDL
     * - documentation: The seller can communicate with the buyer by Skype Chat.
     * @return string 'Chat'
     */
    const VALUE_CHAT = 'Chat';
    /**
     * Constant for value 'Voice'
     * Meta information extracted from the WSDL
     * - documentation: The seller can communicate with the buyer by Skype Voice.
     * @return string 'Voice'
     */
    const VALUE_VOICE = 'Voice';
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
     * @uses self::VALUE_CHAT
     * @uses self::VALUE_VOICE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CHAT,
            self::VALUE_VOICE,
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
