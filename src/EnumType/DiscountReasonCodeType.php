<?php

namespace EnumType;

/**
 * This class stands for DiscountReasonCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is used in the response of Add/Revise/Relist item calls to indicate if eBay has applied a Special offer or Promotional discount to the order line item.
 * @subpackage Enumerations
 */
class DiscountReasonCodeType
{
    /**
     * Constant for value 'SpecialOffer'
     * Meta information extracted from the WSDL
     * - documentation: An offer that applies to a limited number of listings during the offering period. Example: "There is no insertion fee for up to 5 auctions when listing between 12/1 and 12/10."
     * @return string 'SpecialOffer'
     */
    const VALUE_SPECIAL_OFFER = 'SpecialOffer';
    /**
     * Constant for value 'Promotion'
     * Meta information extracted from the WSDL
     * - documentation: An offer that applies to an unlimited number of listings during the offering period. Example: "Get subtitle for $0.10 in Tech category when listing between 12/25 and 12/28. No limit to the number of items listed during this period."
     * @return string 'Promotion'
     */
    const VALUE_PROMOTION = 'Promotion';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use
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
     * @uses self::VALUE_SPECIAL_OFFER
     * @uses self::VALUE_PROMOTION
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SPECIAL_OFFER,
            self::VALUE_PROMOTION,
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
