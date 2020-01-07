<?php

namespace EnumType;

/**
 * This class stands for BidderTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class BidderTypeCodeType
{
    /**
     * Constant for value 'AllBidder'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'AllBidder'
     */
    const VALUE_ALL_BIDDER = 'AllBidder';
    /**
     * Constant for value 'HighBidder'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'HighBidder'
     */
    const VALUE_HIGH_BIDDER = 'HighBidder';
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
     * @uses self::VALUE_ALL_BIDDER
     * @uses self::VALUE_HIGH_BIDDER
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALL_BIDDER,
            self::VALUE_HIGH_BIDDER,
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
