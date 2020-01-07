<?php

namespace EnumType;

/**
 * This class stands for ProductCreationEnabledCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Values indicate whether product creation is enabled, disabled or required for a category.
 * @subpackage Enumerations
 */
class ProductCreationEnabledCodeType
{
    /**
     * Constant for value 'Disabled'
     * Meta information extracted from the WSDL
     * - documentation: Product creation is not supported for the category. AddItem family calls can still list with product.
     * @return string 'Disabled'
     */
    const VALUE_DISABLED = 'Disabled';
    /**
     * Constant for value 'Enabled'
     * Meta information extracted from the WSDL
     * - documentation: Product Creation is supported for the category. AddItem family calls can still list with product but can go through new product creation flow.
     * @return string 'Enabled'
     */
    const VALUE_ENABLED = 'Enabled';
    /**
     * Constant for value 'Required'
     * Meta information extracted from the WSDL
     * - documentation: Product Creation is required for the category. AddItem family calls have to list with a product. If no product exists can go through new product creation flow.
     * @return string 'Required'
     */
    const VALUE_REQUIRED = 'Required';
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
     * @uses self::VALUE_REQUIRED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DISABLED,
            self::VALUE_ENABLED,
            self::VALUE_REQUIRED,
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
