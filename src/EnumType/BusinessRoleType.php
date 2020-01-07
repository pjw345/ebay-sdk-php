<?php

namespace EnumType;

/**
 * This class stands for BusinessRoleType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that defines the eBay user's account type.
 * @subpackage Enumerations
 */
class BusinessRoleType
{
    /**
     * Constant for value 'Shopper'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the eBay user's account is a Partially Provisioned Account without buying and selling privileges on eBay.
     * @return string 'Shopper'
     */
    const VALUE_SHOPPER = 'Shopper';
    /**
     * Constant for value 'FullMarketPlaceParticipant'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the eBay user's account is a fully provisioned account with buying and selling privileges on eBay.
     * @return string 'FullMarketPlaceParticipant'
     */
    const VALUE_FULL_MARKET_PLACE_PARTICIPANT = 'FullMarketPlaceParticipant';
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
     * @uses self::VALUE_SHOPPER
     * @uses self::VALUE_FULL_MARKET_PLACE_PARTICIPANT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SHOPPER,
            self::VALUE_FULL_MARKET_PLACE_PARTICIPANT,
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
