<?php

namespace EnumType;

/**
 * This class stands for FeaturedFirstCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that indicates if the Featured First listing upgrade is enabled for the specified site, and whether it is restricted to a specific seller level. <br/><br/> <span class="tablenote"><strong>Note:</strong> Beginning in
 * mid-August 2019, the Featured First listing upgrade can no longer be added for new listings in any eBay marketplace. Existing listings enabled with this feature will still be honored until mid-September 2019, at which time the feature will be fully
 * disabled. </span>
 * @subpackage Enumerations
 */
class FeaturedFirstCodeType
{
    /**
     * Constant for value 'Enabled'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the Featured First listing upgrade is enabled for all sellers on the site.
     * @return string 'Enabled'
     */
    const VALUE_ENABLED = 'Enabled';
    /**
     * Constant for value 'Disabled'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the Featured First listing upgrade is not available for any sellers on the site.
     * @return string 'Disabled'
     */
    const VALUE_DISABLED = 'Disabled';
    /**
     * Constant for value 'PowerSellerOnly'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the Featured First listing upgrade is only enabled for Power Sellers on the site.
     * @return string 'PowerSellerOnly'
     */
    const VALUE_POWER_SELLER_ONLY = 'PowerSellerOnly';
    /**
     * Constant for value 'TopRatedSellerOnly'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the Featured First listing upgrade is only enabled for Top-Rated Sellers on the site.
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
