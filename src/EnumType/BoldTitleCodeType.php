<?php

namespace EnumType;

/**
 * This class stands for BoldTitleCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type contains the possible values that can be returned in the <b>ListingFeatureDetails.BoldTitle</b> field to indicate whether or not bold listing titles are supported by the eBay site specified in the
 * <b>GeteBayDetails</b> call request.
 * @subpackage Enumerations
 */
class BoldTitleCodeType
{
    /**
     * Constant for value 'Enabled'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that bold listing titles are enabled for the eBay site specified in the <b>GeteBayDetails</b> call request.
     * @return string 'Enabled'
     */
    const VALUE_ENABLED = 'Enabled';
    /**
     * Constant for value 'Disabled'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that bold listing titles are disabled for the eBay site specified in the <b>GeteBayDetails</b> call request.
     * @return string 'Disabled'
     */
    const VALUE_DISABLED = 'Disabled';
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
     * @uses self::VALUE_ENABLED
     * @uses self::VALUE_DISABLED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ENABLED,
            self::VALUE_DISABLED,
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
