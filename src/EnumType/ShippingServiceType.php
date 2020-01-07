<?php

namespace EnumType;

/**
 * This class stands for ShippingServiceType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type defines the possible values that can be used in the <b>ShippingServiceType</b> field of the <b>ShippingServiceCostOverride</b> container.
 * @subpackage Enumerations
 */
class ShippingServiceType
{
    /**
     * Constant for value 'Domestic'
     * Meta information extracted from the WSDL
     * - documentation: This value should be used if the seller is overriding shipping costs for all domestic shipping services defined in the Business Policies shipping profile.
     * @return string 'Domestic'
     */
    const VALUE_DOMESTIC = 'Domestic';
    /**
     * Constant for value 'International'
     * Meta information extracted from the WSDL
     * - documentation: This value should be used if the seller is overriding shipping costs for all international shipping services defined in the Business Policies shipping profile.
     * @return string 'International'
     */
    const VALUE_INTERNATIONAL = 'International';
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
     * @uses self::VALUE_DOMESTIC
     * @uses self::VALUE_INTERNATIONAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DOMESTIC,
            self::VALUE_INTERNATIONAL,
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
