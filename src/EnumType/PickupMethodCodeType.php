<?php

namespace EnumType;

/**
 * This class stands for PickupMethodCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Simple type defining all possible local pickup methods for buyers. A <strong>PickupMethodCodeType</strong> value is always returned under the <strong>PickupOptions</strong> and <strong>PickupMethodSelected</strong> containers.
 * @subpackage Enumerations
 */
class PickupMethodCodeType
{
    /**
     * Constant for value 'InStorePickup'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer will pick up the In-Store Pickup item at the merchant's physical store. <br/><br/> <span class="tablenote"> <strong>Note:</strong> A merchant must be eligible for the In-Store Pickup feature to
     * list an item that is eligible for In-Store Pickup. At this time, the In-Store Pickup feature is generally only available to large retail merchants in US, and can only be applied to multi-quantity, fixed-price listings. </span>
     * @return string 'InStorePickup'
     */
    const VALUE_IN_STORE_PICKUP = 'InStorePickup';
    /**
     * Constant for value 'PickUpDropOff'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer will pick up the "Click and Collect" item at the merchant's physical store. <br/><br/> <span class="tablenote"> <strong>Note:</strong> A merchant must be eligible for the "Click and Collect"
     * feature to list an item that is eligible for "Click and Collect". At this time, the "Click and Collect" feature is only available to large merchants on the eBay UK (site ID - 3), eBay Australia (Site ID - 15), and eBay Germany (Site ID - 77) sites.
     * sites.
     * @return string 'PickUpDropOff'
     */
    const VALUE_PICK_UP_DROP_OFF = 'PickUpDropOff';
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
     * @uses self::VALUE_IN_STORE_PICKUP
     * @uses self::VALUE_PICK_UP_DROP_OFF
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_IN_STORE_PICKUP,
            self::VALUE_PICK_UP_DROP_OFF,
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
