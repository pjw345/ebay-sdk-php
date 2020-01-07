<?php

namespace EnumType;

/**
 * This class stands for DisputeCreditEligibilityCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Indicates whether the seller is eligible for a Final Value Fee credit if the dispute is resolved by the buyer and seller, or if eBay customer support makes a decision on the dispute in the seller's favor. Note that even if the item
 * is eligible for a Final Value Fee credit, the credit is not guaranteed in any way. <br/><br/> <span class="tablenote"><strong>Note:</strong> 'Item Not Received' or 'Significantly Not As Described' cases, initiated by buyers through the eBay Money
 * Back Guarantee program, are not returned with <b>GetDispute</b> or <b>GetUserDisputes</b>. The <a href="https://developer.ebay.com/Devzone/post-order/post-order_v2_casemanagement-caseId__get.html#overview">getCase</a> method of the <a
 * href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a> is used to retrieve Money Back Guarantee cases programmatically. </span>
 * @subpackage Enumerations
 */
class DisputeCreditEligibilityCodeType
{
    /**
     * Constant for value 'InEligible'
     * Meta information extracted from the WSDL
     * - documentation: The seller is not currently eligible for a Final Value Fee credit.
     * @return string 'InEligible'
     */
    const VALUE_IN_ELIGIBLE = 'InEligible';
    /**
     * Constant for value 'Eligible'
     * Meta information extracted from the WSDL
     * - documentation: The seller is eligible for a Final Value Fee credit.
     * @return string 'Eligible'
     */
    const VALUE_ELIGIBLE = 'Eligible';
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
     * @uses self::VALUE_IN_ELIGIBLE
     * @uses self::VALUE_ELIGIBLE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_IN_ELIGIBLE,
            self::VALUE_ELIGIBLE,
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
