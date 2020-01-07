<?php

namespace EnumType;

/**
 * This class stands for SellingManagerAutoRelistTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Specifies the type of auto relist that will be performed.
 * @subpackage Enumerations
 */
class SellingManagerAutoRelistTypeCodeType
{
    /**
     * Constant for value 'RelistOnceIfNotSold'
     * Meta information extracted from the WSDL
     * - documentation: If the item is unsold, relist the item once.
     * @return string 'RelistOnceIfNotSold'
     */
    const VALUE_RELIST_ONCE_IF_NOT_SOLD = 'RelistOnceIfNotSold';
    /**
     * Constant for value 'RelistContinuouslyUntilSold'
     * Meta information extracted from the WSDL
     * - documentation: Relist the item continuously, until it is sold.
     * @return string 'RelistContinuouslyUntilSold'
     */
    const VALUE_RELIST_CONTINUOUSLY_UNTIL_SOLD = 'RelistContinuouslyUntilSold';
    /**
     * Constant for value 'RelistContinuously'
     * Meta information extracted from the WSDL
     * - documentation: Relist the item continuously.
     * @return string 'RelistContinuously'
     */
    const VALUE_RELIST_CONTINUOUSLY = 'RelistContinuously';
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
     * @uses self::VALUE_RELIST_ONCE_IF_NOT_SOLD
     * @uses self::VALUE_RELIST_CONTINUOUSLY_UNTIL_SOLD
     * @uses self::VALUE_RELIST_CONTINUOUSLY
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_RELIST_ONCE_IF_NOT_SOLD,
            self::VALUE_RELIST_CONTINUOUSLY_UNTIL_SOLD,
            self::VALUE_RELIST_CONTINUOUSLY,
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
