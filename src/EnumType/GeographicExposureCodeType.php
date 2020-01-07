<?php

namespace EnumType;

/**
 * This class stands for GeographicExposureCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is used to indicate if an eBay site or category supports Motors National Listings and/or Motors Local Market listings.
 * @subpackage Enumerations
 */
class GeographicExposureCodeType
{
    /**
     * Constant for value 'National'
     * Meta information extracted from the WSDL
     * - documentation: If this enumeration value is returned, the eBay site or category only supports Motors National Listings for the corresponding Motors dealer subscription level/type.
     * @return string 'National'
     */
    const VALUE_NATIONAL = 'National';
    /**
     * Constant for value 'LocalOnly'
     * Meta information extracted from the WSDL
     * - documentation: If this enumeration value is returned, the eBay site or category only supports Motors Local Market Listings for the corresponding Motors dealer subscription level/type.
     * @return string 'LocalOnly'
     */
    const VALUE_LOCAL_ONLY = 'LocalOnly';
    /**
     * Constant for value 'LocalOptional'
     * Meta information extracted from the WSDL
     * - documentation: If this enumeration value is returned, the eBay site or category supports Motors National Listings and Motors Local Market listing for the corresponding Motors dealer subscription level/type.
     * @return string 'LocalOptional'
     */
    const VALUE_LOCAL_OPTIONAL = 'LocalOptional';
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
     * @uses self::VALUE_NATIONAL
     * @uses self::VALUE_LOCAL_ONLY
     * @uses self::VALUE_LOCAL_OPTIONAL
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NATIONAL,
            self::VALUE_LOCAL_ONLY,
            self::VALUE_LOCAL_OPTIONAL,
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
