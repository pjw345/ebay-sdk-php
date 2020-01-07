<?php

namespace EnumType;

/**
 * This class stands for DescriptionTemplateCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that defines Listing Designer template types.
 * @subpackage Enumerations
 */
class DescriptionTemplateCodeType
{
    /**
     * Constant for value 'Layout'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the Listing Designer template is a layout template that controls how pictures and description text are positioned on the View Item page.
     * @return string 'Layout'
     */
    const VALUE_LAYOUT = 'Layout';
    /**
     * Constant for value 'Theme'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the Listing Designer template is a theme template that determines which eBay-provided theme (e.g. Valentine's Day) is to be applied for presenting pictures and description text.
     * @return string 'Theme'
     */
    const VALUE_THEME = 'Theme';
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
     * @uses self::VALUE_LAYOUT
     * @uses self::VALUE_THEME
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LAYOUT,
            self::VALUE_THEME,
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
