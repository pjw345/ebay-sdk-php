<?php

namespace EnumType;

/**
 * This class stands for AccountHistorySelectionCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type contains the suppported values that may be used in the <b>AccountHistorySelection</b> field to control the account entries that are returned in a <b>GetAccount</b> response.
 * @subpackage Enumerations
 */
class AccountHistorySelectionCodeType
{
    /**
     * Constant for value 'LastInvoice'
     * Meta information extracted from the WSDL
     * - documentation: This value should be used if the eBay user wants to see the account entries posted to the last invoice that was sent to the user by eBay. If this value is used, the <b>InvoiceDate</b>, <b>BeginDate</b>, and <b>EndDate</b> fields of
     * the <b>GetAccount</b> request are no longer applicable and will be ignored if they are included in the call request.
     * @return string 'LastInvoice'
     */
    const VALUE_LAST_INVOICE = 'LastInvoice';
    /**
     * Constant for value 'SpecifiedInvoice'
     * Meta information extracted from the WSDL
     * - documentation: This value should be used if the eBay user wants to see the account entries for a specific invoice that was sent to the user by eBay. If this value is used, the specific invoice is identified by including the <b>InvoiceDate</b> field
     * and setting its value to the actual invoice date. If this value is used, the <b>BeginDate</b>, and <b>EndDate</b> fields of the <b>GetAccount</b> request are no longer applicable and will be ignored if they are included in the call request.
     * @return string 'SpecifiedInvoice'
     */
    const VALUE_SPECIFIED_INVOICE = 'SpecifiedInvoice';
    /**
     * Constant for value 'BetweenSpecifiedDates'
     * Meta information extracted from the WSDL
     * - documentation: This value should be used if the eBay user wants to see account entries for a customized date range that can overlap multiple formal eBay invoices. If this value is used, then you also must specify <b>BeginDate</b> and <b>EndDate</b>
     * to set the date range for which to retrieve account entries. If this value is used, then <b>InvoiceDate</b> is no longer applicable and will be ignored if it is included in the call request.
     * @return string 'BetweenSpecifiedDates'
     */
    const VALUE_BETWEEN_SPECIFIED_DATES = 'BetweenSpecifiedDates';
    /**
     * Constant for value 'OrderId'
     * Meta information extracted from the WSDL
     * - documentation: This value should be used if the eBay user wants to see the account entries related to a specific eBay order. If this value is used, the user must also include the <b>OrderID</b> field and sets its value to the identifier of the
     * order for which they wish to retrieve account entries. <br><br> <span class="tablenote"><b>Note: </b> In June 2019, eBay introduced a new order ID format to both legacy (including Trading API) and REST-based APIs. At this time, both old and new
     * format order IDs will be accepted in legacy API request payloads to identify orders. In legacy API response payloads, order IDs will appear in the new format if the user is using a Trading WSDL version of '1113' (or newer), or if the user sets the
     * <code>X-EBAY-API-COMPATIBILITY-LEVEL</code> HTTP header to a value of '1113' (or newer). If the Trading WSDL version or compatibility level is less/older than '1113', old format order IDs will be returned in legacy API response payloads. Beginning as
     * soon as March 2020, only new format order IDs will be returned regardless of version number. </span>
     * @return string 'OrderId'
     */
    const VALUE_ORDER_ID = 'OrderId';
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
     * @uses self::VALUE_LAST_INVOICE
     * @uses self::VALUE_SPECIFIED_INVOICE
     * @uses self::VALUE_BETWEEN_SPECIFIED_DATES
     * @uses self::VALUE_ORDER_ID
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LAST_INVOICE,
            self::VALUE_SPECIFIED_INVOICE,
            self::VALUE_BETWEEN_SPECIFIED_DATES,
            self::VALUE_ORDER_ID,
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
