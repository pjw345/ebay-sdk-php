<?php

namespace EnumType;

/**
 * This class stands for PromotionSchemeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Enumerations
 */
class PromotionSchemeCodeType
{
    /**
     * Constant for value 'ItemToItem'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'ItemToItem'
     */
    const VALUE_ITEM_TO_ITEM = 'ItemToItem';
    /**
     * Constant for value 'ItemToStoreCat'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'ItemToStoreCat'
     */
    const VALUE_ITEM_TO_STORE_CAT = 'ItemToStoreCat';
    /**
     * Constant for value 'StoreToStoreCat'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'StoreToStoreCat'
     */
    const VALUE_STORE_TO_STORE_CAT = 'StoreToStoreCat';
    /**
     * Constant for value 'ItemToDefaultRule'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'ItemToDefaultRule'
     */
    const VALUE_ITEM_TO_DEFAULT_RULE = 'ItemToDefaultRule';
    /**
     * Constant for value 'DefaultRule'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'DefaultRule'
     */
    const VALUE_DEFAULT_RULE = 'DefaultRule';
    /**
     * Constant for value 'CategoryProximity'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'CategoryProximity'
     */
    const VALUE_CATEGORY_PROXIMITY = 'CategoryProximity';
    /**
     * Constant for value 'RelatedCategoryRule'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'RelatedCategoryRule'
     */
    const VALUE_RELATED_CATEGORY_RULE = 'RelatedCategoryRule';
    /**
     * Constant for value 'DefaultUpSellLogic'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'DefaultUpSellLogic'
     */
    const VALUE_DEFAULT_UP_SELL_LOGIC = 'DefaultUpSellLogic';
    /**
     * Constant for value 'DefaultCrossSellLogic'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'DefaultCrossSellLogic'
     */
    const VALUE_DEFAULT_CROSS_SELL_LOGIC = 'DefaultCrossSellLogic';
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
     * @uses self::VALUE_ITEM_TO_ITEM
     * @uses self::VALUE_ITEM_TO_STORE_CAT
     * @uses self::VALUE_STORE_TO_STORE_CAT
     * @uses self::VALUE_ITEM_TO_DEFAULT_RULE
     * @uses self::VALUE_DEFAULT_RULE
     * @uses self::VALUE_CATEGORY_PROXIMITY
     * @uses self::VALUE_RELATED_CATEGORY_RULE
     * @uses self::VALUE_DEFAULT_UP_SELL_LOGIC
     * @uses self::VALUE_DEFAULT_CROSS_SELL_LOGIC
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ITEM_TO_ITEM,
            self::VALUE_ITEM_TO_STORE_CAT,
            self::VALUE_STORE_TO_STORE_CAT,
            self::VALUE_ITEM_TO_DEFAULT_RULE,
            self::VALUE_DEFAULT_RULE,
            self::VALUE_CATEGORY_PROXIMITY,
            self::VALUE_RELATED_CATEGORY_RULE,
            self::VALUE_DEFAULT_UP_SELL_LOGIC,
            self::VALUE_DEFAULT_CROSS_SELL_LOGIC,
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
