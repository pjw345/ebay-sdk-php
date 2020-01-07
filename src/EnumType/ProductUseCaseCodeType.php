<?php

namespace EnumType;

/**
 * This class stands for ProductUseCaseCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class ProductUseCaseCodeType
{
    /**
     * Constant for value 'AddItem'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'AddItem'
     */
    const VALUE_ADD_ITEM = 'AddItem';
    /**
     * Constant for value 'ReviseItem'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'ReviseItem'
     */
    const VALUE_REVISE_ITEM = 'ReviseItem';
    /**
     * Constant for value 'RelistItem'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'RelistItem'
     */
    const VALUE_RELIST_ITEM = 'RelistItem';
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
     * @uses self::VALUE_ADD_ITEM
     * @uses self::VALUE_REVISE_ITEM
     * @uses self::VALUE_RELIST_ITEM
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ADD_ITEM,
            self::VALUE_REVISE_ITEM,
            self::VALUE_RELIST_ITEM,
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
