<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetSellingManagerFeedbackOptionsRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Enables Selling Manager Pro subscribers to store standard feedback comments that can be left for their buyers. Selling Manager Pro subscribers can also specify what events, if any, will trigger an automated feedback response to
 * buyers.
 * @subpackage Structs
 */
class SetSellingManagerFeedbackOptionsRequestType extends AbstractRequestType
{
    /**
     * The AutomatedLeaveFeedbackEvent
     * Meta information extracted from the WSDL
     * - documentation: Specifies the event that will trigger automated feedback to the buyer.
     * - minOccurs: 0
     * @var string
     */
    public $AutomatedLeaveFeedbackEvent;
    /**
     * The StoredComments
     * Meta information extracted from the WSDL
     * - documentation: Contains a set of comments from which one can be selected to leave feedback for a buyer. If automated feedback is used, a comment is selected from the set randomly. Stored comments cannot be replaced or edited individually.
     * Submitting a stored comments array replaces all existing stored comments. <br>
     * - minOccurs: 0
     * @var \ArrayType\FeedbackCommentArrayType
     */
    public $StoredComments;
    /**
     * Constructor method for SetSellingManagerFeedbackOptionsRequestType
     * @uses SetSellingManagerFeedbackOptionsRequestType::setAutomatedLeaveFeedbackEvent()
     * @uses SetSellingManagerFeedbackOptionsRequestType::setStoredComments()
     * @param string $automatedLeaveFeedbackEvent
     * @param \ArrayType\FeedbackCommentArrayType $storedComments
     */
    public function __construct($automatedLeaveFeedbackEvent = null, \ArrayType\FeedbackCommentArrayType $storedComments = null)
    {
        $this
            ->setAutomatedLeaveFeedbackEvent($automatedLeaveFeedbackEvent)
            ->setStoredComments($storedComments);
    }
    /**
     * Get AutomatedLeaveFeedbackEvent value
     * @return string|null
     */
    public function getAutomatedLeaveFeedbackEvent()
    {
        return $this->AutomatedLeaveFeedbackEvent;
    }
    /**
     * Set AutomatedLeaveFeedbackEvent value
     * @uses \EnumType\AutomatedLeaveFeedbackEventCodeType::valueIsValid()
     * @uses \EnumType\AutomatedLeaveFeedbackEventCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $automatedLeaveFeedbackEvent
     * @return \StructType\SetSellingManagerFeedbackOptionsRequestType
     */
    public function setAutomatedLeaveFeedbackEvent($automatedLeaveFeedbackEvent = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\AutomatedLeaveFeedbackEventCodeType::valueIsValid($automatedLeaveFeedbackEvent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\AutomatedLeaveFeedbackEventCodeType', is_array($automatedLeaveFeedbackEvent) ? implode(', ', $automatedLeaveFeedbackEvent) : var_export($automatedLeaveFeedbackEvent, true), implode(', ', \EnumType\AutomatedLeaveFeedbackEventCodeType::getValidValues())), __LINE__);
        }
        $this->AutomatedLeaveFeedbackEvent = $automatedLeaveFeedbackEvent;
        return $this;
    }
    /**
     * Get StoredComments value
     * @return \ArrayType\FeedbackCommentArrayType|null
     */
    public function getStoredComments()
    {
        return $this->StoredComments;
    }
    /**
     * Set StoredComments value
     * @param \ArrayType\FeedbackCommentArrayType $storedComments
     * @return \StructType\SetSellingManagerFeedbackOptionsRequestType
     */
    public function setStoredComments(\ArrayType\FeedbackCommentArrayType $storedComments = null)
    {
        $this->StoredComments = $storedComments;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SetSellingManagerFeedbackOptionsRequestType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
