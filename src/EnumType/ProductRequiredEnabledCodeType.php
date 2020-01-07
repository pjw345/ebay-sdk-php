<?php

namespace EnumType;

/**
 * This class stands for ProductRequiredEnabledCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is used by the <b>ProductRequiredEnabled</b> field that can be returned under the <b>SiteDefaults</b> and/or <b>Category</b> containers of a <b>GetCategoryFeatures</b> response. <br> <br> <span
 * class="tablenote"><b>Note:</b> Due to the rollback of the Product-Based Shopping Experience mandate for all eBay categories, the <b>ProductRequiredEnabled</b> field no longer has any practical use since it will show as Disabled for
 * <b>SiteDefaults</b> and all <b>Category</b> nodes. Due to this fact, the <b>ProductRequiredEnabledCodeType</b> is currently not applicable. </span>
 * @subpackage Enumerations
 */
class ProductRequiredEnabledCodeType
{
    /**
     * Constant for value 'Disabled'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the category does not require product-based listings (associated with an eBay catalog product). <br> <br> <span class="tablenote"><b>Note:</b> Due to the rollback of the Product-Based Shopping Experience
     * mandate for all eBay categories, this value should get returned for <b>SiteDefaults</b> and all <b>Category</b> nodes. </span>
     * @return string 'Disabled'
     */
    const VALUE_DISABLED = 'Disabled';
    /**
     * Constant for value 'Enabled'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the category requires listings within the category to be associated with an eBay catalog product. <br> <br> <span class="tablenote"><b>Note:</b> Due to the rollback of the Product-Based Shopping Experience
     * mandate for all eBay categories, this value should never get returned for <b>SiteDefaults</b> or for any <b>Category</b> nodes. </span>
     * @return string 'Enabled'
     */
    const VALUE_ENABLED = 'Enabled';
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
     * @uses self::VALUE_DISABLED
     * @uses self::VALUE_ENABLED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DISABLED,
            self::VALUE_ENABLED,
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
