<?php

namespace EnumType;

/**
 * This class stands for FedExRateOptionCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type consists of the different Federal Express shipping rates that sellers can offer to buyers. The shipping rates for the major US shipping carriers can be selected in the Shipping rate preferences in My eBay, or
 * through the <b>SetUserPreferences</b> call.
 * @subpackage Enumerations
 */
class FedExRateOptionCodeType
{
    /**
     * Constant for value 'FedExStandardList'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the seller offers buyers the standard Federal Express shipping rates.
     * @return string 'FedExStandardList'
     */
    const VALUE_FED_EX_STANDARD_LIST = 'FedExStandardList';
    /**
     * Constant for value 'FedExCounter'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the seller offers buyers Federal Express counter rates.
     * @return string 'FedExCounter'
     */
    const VALUE_FED_EX_COUNTER = 'FedExCounter';
    /**
     * Constant for value 'FedExDiscounted'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the seller offers buyers discounted Federal Express shipping rates. Buyers will get these discounted shipping rates as long as they use the eBay-generated shipping labels.
     * @return string 'FedExDiscounted'
     */
    const VALUE_FED_EX_DISCOUNTED = 'FedExDiscounted';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use
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
     * @uses self::VALUE_FED_EX_STANDARD_LIST
     * @uses self::VALUE_FED_EX_COUNTER
     * @uses self::VALUE_FED_EX_DISCOUNTED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FED_EX_STANDARD_LIST,
            self::VALUE_FED_EX_COUNTER,
            self::VALUE_FED_EX_DISCOUNTED,
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
