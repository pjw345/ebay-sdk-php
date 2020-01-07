<?php

namespace EnumType;

/**
 * This class stands for InsuranceSelectedCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated, as shipping insurance is no longer applicable or supported in eBay APIs.
 * @subpackage Enumerations
 */
class InsuranceSelectedCodeType
{
    /**
     * Constant for value 'NotOffered'
     * Meta information extracted from the WSDL
     * - documentation: Shipping insurance was not offered.
     * @return string 'NotOffered'
     */
    const VALUE_NOT_OFFERED = 'NotOffered';
    /**
     * Constant for value 'OfferedNotSelected'
     * Meta information extracted from the WSDL
     * - documentation: Shipping insurance was offered but not selected.
     * @return string 'OfferedNotSelected'
     */
    const VALUE_OFFERED_NOT_SELECTED = 'OfferedNotSelected';
    /**
     * Constant for value 'OfferedSelected'
     * Meta information extracted from the WSDL
     * - documentation: Shipping insurance was offered and selected.
     * @return string 'OfferedSelected'
     */
    const VALUE_OFFERED_SELECTED = 'OfferedSelected';
    /**
     * Constant for value 'Required'
     * Meta information extracted from the WSDL
     * - documentation: Shipping insurance was required.
     * @return string 'Required'
     */
    const VALUE_REQUIRED = 'Required';
    /**
     * Constant for value 'IncludedInShippingHandling'
     * Meta information extracted from the WSDL
     * - documentation: Shipping insurance was included in Shipping and Handling fee.
     * @return string 'IncludedInShippingHandling'
     */
    const VALUE_INCLUDED_IN_SHIPPING_HANDLING = 'IncludedInShippingHandling';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
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
     * @uses self::VALUE_NOT_OFFERED
     * @uses self::VALUE_OFFERED_NOT_SELECTED
     * @uses self::VALUE_OFFERED_SELECTED
     * @uses self::VALUE_REQUIRED
     * @uses self::VALUE_INCLUDED_IN_SHIPPING_HANDLING
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NOT_OFFERED,
            self::VALUE_OFFERED_NOT_SELECTED,
            self::VALUE_OFFERED_SELECTED,
            self::VALUE_REQUIRED,
            self::VALUE_INCLUDED_IN_SHIPPING_HANDLING,
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
