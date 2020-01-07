<?php

namespace EnumType;

/**
 * This class stands for PromotionalSaleStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Values indicate the status of a sale. Used for the Promotional Price Display feature, which enables sellers to apply discounts across many listings.
 * @subpackage Enumerations
 */
class PromotionalSaleStatusCodeType
{
    /**
     * Constant for value 'Active'
     * Meta information extracted from the WSDL
     * - documentation: The promotional sale is active.
     * @return string 'Active'
     */
    const VALUE_ACTIVE = 'Active';
    /**
     * Constant for value 'Scheduled'
     * Meta information extracted from the WSDL
     * - documentation: The promotional sale is scheduled. That is, the start time is in the future.
     * @return string 'Scheduled'
     */
    const VALUE_SCHEDULED = 'Scheduled';
    /**
     * Constant for value 'Processing'
     * Meta information extracted from the WSDL
     * - documentation: The status of the promotional sale is pending. When first scheduling a Sale, if you select over 200 listings to be in any given Sale, it will take some time for eBay to process the request.
     * @return string 'Processing'
     */
    const VALUE_PROCESSING = 'Processing';
    /**
     * Constant for value 'Inactive'
     * Meta information extracted from the WSDL
     * - documentation: The promotional sale is inactive, the sale has ended. You can reschedule a sale once it has ended, but you will need to wait at least 24 hours before it can become active.
     * @return string 'Inactive'
     */
    const VALUE_INACTIVE = 'Inactive';
    /**
     * Constant for value 'Deleted'
     * Meta information extracted from the WSDL
     * - documentation: The promotional sale has been deleted. Deleted promotional sales cannot be updated or reactivated.
     * @return string 'Deleted'
     */
    const VALUE_DELETED = 'Deleted';
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
     * @uses self::VALUE_ACTIVE
     * @uses self::VALUE_SCHEDULED
     * @uses self::VALUE_PROCESSING
     * @uses self::VALUE_INACTIVE
     * @uses self::VALUE_DELETED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ACTIVE,
            self::VALUE_SCHEDULED,
            self::VALUE_PROCESSING,
            self::VALUE_INACTIVE,
            self::VALUE_DELETED,
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
