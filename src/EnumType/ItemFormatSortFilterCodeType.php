<?php

namespace EnumType;

/**
 * This class stands for ItemFormatSortFilterCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class ItemFormatSortFilterCodeType
{
    /**
     * Constant for value 'ShowAnyItems'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'ShowAnyItems'
     */
    const VALUE_SHOW_ANY_ITEMS = 'ShowAnyItems';
    /**
     * Constant for value 'ShowItemsWithBINFirst'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'ShowItemsWithBINFirst'
     */
    const VALUE_SHOW_ITEMS_WITH_BINFIRST = 'ShowItemsWithBINFirst';
    /**
     * Constant for value 'ShowOnlyItemsWithBIN'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'ShowOnlyItemsWithBIN'
     */
    const VALUE_SHOW_ONLY_ITEMS_WITH_BIN = 'ShowOnlyItemsWithBIN';
    /**
     * Constant for value 'ShowOnlyStoreItems'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'ShowOnlyStoreItems'
     */
    const VALUE_SHOW_ONLY_STORE_ITEMS = 'ShowOnlyStoreItems';
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
     * @uses self::VALUE_SHOW_ANY_ITEMS
     * @uses self::VALUE_SHOW_ITEMS_WITH_BINFIRST
     * @uses self::VALUE_SHOW_ONLY_ITEMS_WITH_BIN
     * @uses self::VALUE_SHOW_ONLY_STORE_ITEMS
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SHOW_ANY_ITEMS,
            self::VALUE_SHOW_ITEMS_WITH_BINFIRST,
            self::VALUE_SHOW_ONLY_ITEMS_WITH_BIN,
            self::VALUE_SHOW_ONLY_STORE_ITEMS,
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
