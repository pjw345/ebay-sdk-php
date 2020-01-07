<?php

namespace EnumType;

/**
 * This class stands for PictureManagerDetailLevelCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class PictureManagerDetailLevelCodeType
{
    /**
     * Constant for value 'ReturnAll'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'ReturnAll'
     */
    const VALUE_RETURN_ALL = 'ReturnAll';
    /**
     * Constant for value 'ReturnSubscription'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'ReturnSubscription'
     */
    const VALUE_RETURN_SUBSCRIPTION = 'ReturnSubscription';
    /**
     * Constant for value 'ReturnPicture'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'ReturnPicture'
     */
    const VALUE_RETURN_PICTURE = 'ReturnPicture';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
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
     * @uses self::VALUE_RETURN_ALL
     * @uses self::VALUE_RETURN_SUBSCRIPTION
     * @uses self::VALUE_RETURN_PICTURE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_RETURN_ALL,
            self::VALUE_RETURN_SUBSCRIPTION,
            self::VALUE_RETURN_PICTURE,
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
