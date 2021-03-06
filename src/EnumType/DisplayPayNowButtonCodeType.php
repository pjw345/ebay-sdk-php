<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DisplayPayNowButtonCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is used to control how the "Buy It Now" button is displayed on a listing. <br><br> <span class="tablenote"><b>Note:</b> Sellers opted in to the new eBay managed payments program cannot control the display of the
 * "Buy It Now" button in listings, and although the <b>DisplayPayNowButton</b> value can still be set in <b>SetUserPreferences</b> and returned in <b>GetUserPreferences</b>, the setting will not have any affect on any current or future listings for the
 * seller. eBay managed payments is currently only available to a limited number of sellers on the US and Germany sites. The rollout to more sellers in more countries will be a multi-year journey, but eBay expects to transition a majority of sellers
 * worldwide to managed payments by 2021. </span> <br>
 * @subpackage Enumerations
 */
class DisplayPayNowButtonCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ShowPayNowButtonForAllPaymentMethods'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the "Pay Now" button will be displayed no matter what payment method the buyer uses.
     * @return string 'ShowPayNowButtonForAllPaymentMethods'
     */
    const VALUE_SHOW_PAY_NOW_BUTTON_FOR_ALL_PAYMENT_METHODS = 'ShowPayNowButtonForAllPaymentMethods';
    /**
     * Constant for value 'ShowPayNowButtonForPayPalOnly'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the "Pay Now" button will only be displayed if the buyer is using PayPal as the payment method.
     * @return string 'ShowPayNowButtonForPayPalOnly'
     */
    const VALUE_SHOW_PAY_NOW_BUTTON_FOR_PAY_PAL_ONLY = 'ShowPayNowButtonForPayPalOnly';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_SHOW_PAY_NOW_BUTTON_FOR_ALL_PAYMENT_METHODS
     * @uses self::VALUE_SHOW_PAY_NOW_BUTTON_FOR_PAY_PAL_ONLY
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SHOW_PAY_NOW_BUTTON_FOR_ALL_PAYMENT_METHODS,
            self::VALUE_SHOW_PAY_NOW_BUTTON_FOR_PAY_PAL_ONLY,
            self::VALUE_CUSTOM_CODE,
        );
    }
}
