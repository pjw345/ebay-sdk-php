<?php

namespace EnumType;

/**
 * This class stands for CharityAffiliationTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumeration type defines the possible values that can be returned for the <b>CharityAffiliationDetail.AffiliationType</b> field in the <b>GetUser</b> response.
 * @subpackage Enumerations
 */
class CharityAffiliationTypeCodeType
{
    /**
     * Constant for value 'Community'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the seller is selling to benefit a nonprofit charity organization identified through the <b>CharityID</b> field.
     * @return string 'Community'
     */
    const VALUE_COMMUNITY = 'Community';
    /**
     * Constant for value 'Direct'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the seller is a direct, non-profit organization registered with the PayPal Giving Fund, and selling to directly benefit their association.
     * @return string 'Direct'
     */
    const VALUE_DIRECT = 'Direct';
    /**
     * Constant for value 'Remove'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value may be returned if a direct, non-profit organization has recently unregistered with the PayPal Giving Fund, or if a Community Seller has recently removed the charity feature from a listing.
     * @return string 'Remove'
     */
    const VALUE_REMOVE = 'Remove';
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
     * @uses self::VALUE_COMMUNITY
     * @uses self::VALUE_DIRECT
     * @uses self::VALUE_REMOVE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_COMMUNITY,
            self::VALUE_DIRECT,
            self::VALUE_REMOVE,
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
