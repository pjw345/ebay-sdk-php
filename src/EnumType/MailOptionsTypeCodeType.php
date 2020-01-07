<?php

namespace EnumType;

/**
 * This class stands for MailOptionsTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class MailOptionsTypeCodeType
{
    /**
     * Constant for value 'DoNotSendEmail'
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @return string 'DoNotSendEmail'
     */
    const VALUE_DO_NOT_SEND_EMAIL = 'DoNotSendEmail';
    /**
     * Constant for value 'EmailCopyToSender'
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @return string 'EmailCopyToSender'
     */
    const VALUE_EMAIL_COPY_TO_SENDER = 'EmailCopyToSender';
    /**
     * Constant for value 'HideSenderEmailAddress'
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @return string 'HideSenderEmailAddress'
     */
    const VALUE_HIDE_SENDER_EMAIL_ADDRESS = 'HideSenderEmailAddress';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
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
     * @uses self::VALUE_DO_NOT_SEND_EMAIL
     * @uses self::VALUE_EMAIL_COPY_TO_SENDER
     * @uses self::VALUE_HIDE_SENDER_EMAIL_ADDRESS
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DO_NOT_SEND_EMAIL,
            self::VALUE_EMAIL_COPY_TO_SENDER,
            self::VALUE_HIDE_SENDER_EMAIL_ADDRESS,
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
