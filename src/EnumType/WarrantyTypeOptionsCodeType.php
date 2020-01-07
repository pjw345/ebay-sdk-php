<?php

namespace EnumType;

/**
 * This class stands for WarrantyTypeOptionsCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated, as product warranties are no longer applicable or supported in eBay APIs.
 * @subpackage Enumerations
 */
class WarrantyTypeOptionsCodeType
{
    /**
     * Constant for value 'ReplacementWarranty'
     * Meta information extracted from the WSDL
     * - documentation: If this value is returned in the <b>ReturnPolicyDetails.WarrantyType</b> container of the <b>GeteBayDetails</b> response, the seller may offer a replacement warranty to the buyer. The seller can offer a replacement warranty through
     * the <b>ReturnPolicy.WarrantyTypeOption</b> field in an add/revise/relist API call.
     * @return string 'ReplacementWarranty'
     */
    const VALUE_REPLACEMENT_WARRANTY = 'ReplacementWarranty';
    /**
     * Constant for value 'DealerWarranty'
     * Meta information extracted from the WSDL
     * - documentation: If this value is returned in the <b>ReturnPolicyDetails.WarrantyType</b> container of the <b>GeteBayDetails</b> response, the seller may offer a dealer warranty to the buyer. The seller can offer a dealer warranty through the
     * <b>ReturnPolicy.WarrantyTypeOption</b> field in an add/revise/relist API call.
     * @return string 'DealerWarranty'
     */
    const VALUE_DEALER_WARRANTY = 'DealerWarranty';
    /**
     * Constant for value 'ManufacturerWarranty'
     * Meta information extracted from the WSDL
     * - documentation: If this value is returned in the <b>ReturnPolicyDetails.WarrantyType</b> container of the <b>GeteBayDetails</b> response, the seller may offer a manufacturer warranty to the buyer. The seller can offer a manufacturer warranty through
     * the <b>ReturnPolicy.WarrantyTypeOption</b> field in an add/revise/relist API call.
     * @return string 'ManufacturerWarranty'
     */
    const VALUE_MANUFACTURER_WARRANTY = 'ManufacturerWarranty';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is reserved for internal or future use.
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
     * @uses self::VALUE_REPLACEMENT_WARRANTY
     * @uses self::VALUE_DEALER_WARRANTY
     * @uses self::VALUE_MANUFACTURER_WARRANTY
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_REPLACEMENT_WARRANTY,
            self::VALUE_DEALER_WARRANTY,
            self::VALUE_MANUFACTURER_WARRANTY,
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
