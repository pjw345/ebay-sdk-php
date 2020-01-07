<?php

namespace EnumType;

/**
 * This class stands for ProPackCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> This enumerated type is deprecated as the Pro Pack Bundle feature is no longer available on any eBay Marketplace sites. </span>
 * @subpackage Enumerations
 */
class ProPackCodeType
{
    /**
     * Constant for value 'Enabled'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the Pro Pack listing upgrade is available for all sellers on the listing site.
     * @return string 'Enabled'
     */
    const VALUE_ENABLED = 'Enabled';
    /**
     * Constant for value 'Disabled'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the Pro Pack listing upgrade is not available to any sellers on the listing site.
     * @return string 'Disabled'
     */
    const VALUE_DISABLED = 'Disabled';
    /**
     * Constant for value 'PowerSellerOnly'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the Pro Pack listing upgrade is only available to seller with Power Seller status on the listing site.
     * @return string 'PowerSellerOnly'
     */
    const VALUE_POWER_SELLER_ONLY = 'PowerSellerOnly';
    /**
     * Constant for value 'TopRatedSellerOnly'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the Pro Pack listing upgrade is only available to Top Rated sellers on the listing site.
     * @return string 'TopRatedSellerOnly'
     */
    const VALUE_TOP_RATED_SELLER_ONLY = 'TopRatedSellerOnly';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
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
     * @uses self::VALUE_POWER_SELLER_ONLY
     * @uses self::VALUE_TOP_RATED_SELLER_ONLY
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ENABLED,
            self::VALUE_DISABLED,
            self::VALUE_POWER_SELLER_ONLY,
            self::VALUE_TOP_RATED_SELLER_ONLY,
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
