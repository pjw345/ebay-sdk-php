<?php

namespace EnumType;

/**
 * This class stands for FeedbackTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type consists of the values that may be used in the request of a <b>GetFeedback</b> call in order to retrieve a specific type of Feedback.
 * @subpackage Enumerations
 */
class FeedbackTypeCodeType
{
    /**
     * Constant for value 'FeedbackReceivedAsSeller'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value will be used in the <b>FeedbackType</b> field of a <b>GetFeedback</b> call if the user only wants to retrieve the Feedback data that they have received acting as a seller.
     * @return string 'FeedbackReceivedAsSeller'
     */
    const VALUE_FEEDBACK_RECEIVED_AS_SELLER = 'FeedbackReceivedAsSeller';
    /**
     * Constant for value 'FeedbackReceivedAsBuyer'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value will be used in the <b>FeedbackType</b> field of a <b>GetFeedback</b> call if the user only wants to retrieve the Feedback data that they have received acting as a buyer.
     * @return string 'FeedbackReceivedAsBuyer'
     */
    const VALUE_FEEDBACK_RECEIVED_AS_BUYER = 'FeedbackReceivedAsBuyer';
    /**
     * Constant for value 'FeedbackReceived'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value will be used in the <b>FeedbackType</b> field of a <b>GetFeedback</b> call if the user wants to retrieve the Feedback data that they have received acting as a seller and buyer.
     * @return string 'FeedbackReceived'
     */
    const VALUE_FEEDBACK_RECEIVED = 'FeedbackReceived';
    /**
     * Constant for value 'FeedbackLeft'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value will be used in the <b>FeedbackType</b> field of a <b>GetFeedback</b> call if the user wants to retrieve the Feedback they have left for their order partners while acting as a seller or buyer.
     * @return string 'FeedbackLeft'
     */
    const VALUE_FEEDBACK_LEFT = 'FeedbackLeft';
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
     * @uses self::VALUE_FEEDBACK_RECEIVED_AS_SELLER
     * @uses self::VALUE_FEEDBACK_RECEIVED_AS_BUYER
     * @uses self::VALUE_FEEDBACK_RECEIVED
     * @uses self::VALUE_FEEDBACK_LEFT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FEEDBACK_RECEIVED_AS_SELLER,
            self::VALUE_FEEDBACK_RECEIVED_AS_BUYER,
            self::VALUE_FEEDBACK_RECEIVED,
            self::VALUE_FEEDBACK_LEFT,
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
