<?php

namespace EnumType;

/**
 * This class stands for AspectUsageCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is used by the <b>AspectUsage</b> field that is returned in <b>GetCategorySpecifics</b> to indicate if an Item Specific is defined/derived from an eBay catalog product, or if the Item Specific is typically unique
 * to a particular instance of a product in that category.
 * @subpackage Enumerations
 */
class AspectUsageCodeType
{
    /**
     * Constant for value 'Product'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the Item Specific in the corresponding <b>NameRecommendation.Name</b> field is defined/derived from an eBay catalog product. 'Product' Item Specifics are also referred to as Product Aspects in
     * Web flows and other APIs. Generally, catalog product-based Item Specifics should not be modified if the seller created/revise/relisted the item based on an eBay catalog product.
     * @return string 'Product'
     */
    const VALUE_PRODUCT = 'Product';
    /**
     * Constant for value 'Instance'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the Item Specific in the corresponding <b>NameRecommendation.Name</b> field is an 'instance aspect', which is an Item Specific whose value will vary based on a particular instance of the product.
     * When creating a listing, the seller should pass in the name-value pair for this Item Specific through the <b>Item.ItemSpecifics.NameValueList</b> container of an <b>AddItem</b> call.
     * @return string 'Instance'
     */
    const VALUE_INSTANCE = 'Instance';
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
     * @uses self::VALUE_PRODUCT
     * @uses self::VALUE_INSTANCE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PRODUCT,
            self::VALUE_INSTANCE,
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
