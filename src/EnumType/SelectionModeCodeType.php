<?php

namespace EnumType;

/**
 * This class stands for SelectionModeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type contains the values that will be returned in a <b>GetCategorySpecifics</b> call. The value that is returned will determine how a seller uses/sets mandatory and recommended Item Specifics.
 * @subpackage Enumerations
 */
class SelectionModeCodeType
{
    /**
     * Constant for value 'Automatic'
     * Meta information extracted from the WSDL
     * - documentation: Automatic criteria. Reserved for future use.
     * @return string 'Automatic'
     */
    const VALUE_AUTOMATIC = 'Automatic';
    /**
     * Constant for value 'Manual'
     * Meta information extracted from the WSDL
     * - documentation: Manual criteria. Reserved for future use.
     * @return string 'Manual'
     */
    const VALUE_MANUAL = 'Manual';
    /**
     * Constant for value 'Prefilled'
     * Meta information extracted from the WSDL
     * - documentation: Indicates that mandatory and recommended Item Specifics will be pre-filled after a successful <b>Add</b>/<b>Revise</b>/<b>Relist</b> call if eBay is able to match a provided eBay Product ID (ePID), Global Trade Identification Number
     * (UPC, EAN, ISBN), or Brand/MPN pair to an eBay catalog product.
     * @return string 'Prefilled'
     */
    const VALUE_PREFILLED = 'Prefilled';
    /**
     * Constant for value 'SelectionOnly'
     * Meta information extracted from the WSDL
     * - documentation: Indicates that the seller must use the exact string provided in the corresponding <b>NameRecommendation.Name</b> field when creating, revising, or relisting an item and using that particular Item Specific.
     * @return string 'SelectionOnly'
     */
    const VALUE_SELECTION_ONLY = 'SelectionOnly';
    /**
     * Constant for value 'FreeText'
     * Meta information extracted from the WSDL
     * - documentation: Indicates that the seller is allowed to specify their own value(s) for the corresponding Item Specific when creating, revising, or relisting an item and using that particular Item Specific.
     * @return string 'FreeText'
     */
    const VALUE_FREE_TEXT = 'FreeText';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use.
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
     * @uses self::VALUE_AUTOMATIC
     * @uses self::VALUE_MANUAL
     * @uses self::VALUE_PREFILLED
     * @uses self::VALUE_SELECTION_ONLY
     * @uses self::VALUE_FREE_TEXT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AUTOMATIC,
            self::VALUE_MANUAL,
            self::VALUE_PREFILLED,
            self::VALUE_SELECTION_ONLY,
            self::VALUE_FREE_TEXT,
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
