<?php

namespace EnumType;

/**
 * This class stands for StoreItemListLayoutCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Set of available layouts for items listed in an eBay Store.
 * @subpackage Enumerations
 */
class StoreItemListLayoutCodeType
{
    /**
     * Constant for value 'ListView'
     * Meta information extracted from the WSDL
     * - documentation: Displays item list as a single column, with smaller item pictures.
     * @return string 'ListView'
     */
    const VALUE_LIST_VIEW = 'ListView';
    /**
     * Constant for value 'GalleryView'
     * Meta information extracted from the WSDL
     * - documentation: Displays item list in two columns, with larger item pictures.
     * @return string 'GalleryView'
     */
    const VALUE_GALLERY_VIEW = 'GalleryView';
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
     * @uses self::VALUE_LIST_VIEW
     * @uses self::VALUE_GALLERY_VIEW
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LIST_VIEW,
            self::VALUE_GALLERY_VIEW,
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
