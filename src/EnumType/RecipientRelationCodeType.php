<?php

namespace EnumType;

/**
 * This class stands for RecipientRelationCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: A seller can make a Transaction Confirmation Request (TCR) for an item. This code list contains values to specify the current relationship between the seller and the potential buyer. For a seller to make a Transaction Confirmation
 * Request (TCR) for an item, the potential buyer must meet one of the criteria in this code list.
 * @subpackage Enumerations
 */
class RecipientRelationCodeType
{
    /**
     * Constant for value '1'
     * Meta information extracted from the WSDL
     * - documentation: Indicates that the recipient has one or more bids on the item; the relationship is "bidder."
     * @return string '1'
     */
    const VALUE_1 = '1';
    /**
     * Constant for value '2'
     * Meta information extracted from the WSDL
     * - documentation: Indicates that the recipient has one or more Best Offers on the item; the relationship is "Best Offer buyer."
     * @return string '2'
     */
    const VALUE_2 = '2';
    /**
     * Constant for value '3'
     * Meta information extracted from the WSDL
     * - documentation: Indicates that the recipient has asked the seller a question about the item; the relationship is "a member with an ASQ question."
     * @return string '3'
     */
    const VALUE_3 = '3';
    /**
     * Constant for value '4'
     * Meta information extracted from the WSDL
     * - documentation: Indicates that the recipient has a postal code; the relationship is "a member with a postal code."
     * @return string '4'
     */
    const VALUE_4 = '4';
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
     * @uses self::VALUE_1
     * @uses self::VALUE_2
     * @uses self::VALUE_3
     * @uses self::VALUE_4
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_1,
            self::VALUE_2,
            self::VALUE_3,
            self::VALUE_4,
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
