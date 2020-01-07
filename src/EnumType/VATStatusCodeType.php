<?php

namespace EnumType;

/**
 * This class stands for VATStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Indicates whether or not the user is subject to VAT. Users who have registered with eBay as VAT-exempt are not subject to VAT. See documentation on Value-Added Tax (VAT).
 * @subpackage Enumerations
 */
class VATStatusCodeType
{
    /**
     * Constant for value 'NoVATTax'
     * Meta information extracted from the WSDL
     * - documentation: (out) VAT is not applicable
     * @return string 'NoVATTax'
     */
    const VALUE_NO_VATTAX = 'NoVATTax';
    /**
     * Constant for value 'VATTax'
     * Meta information extracted from the WSDL
     * - documentation: (out) Residence in a country with VAT and user is not registered as VAT-exempt
     * @return string 'VATTax'
     */
    const VALUE_VATTAX = 'VATTax';
    /**
     * Constant for value 'VATExempt'
     * Meta information extracted from the WSDL
     * - documentation: (out) Residence in a country with VAT and user is registered as VAT-exempt
     * @return string 'VATExempt'
     */
    const VALUE_VATEXEMPT = 'VATExempt';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use
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
     * @uses self::VALUE_NO_VATTAX
     * @uses self::VALUE_VATTAX
     * @uses self::VALUE_VATEXEMPT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NO_VATTAX,
            self::VALUE_VATTAX,
            self::VALUE_VATEXEMPT,
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