<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for FeedbackPeriodArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Container for a set of feedback statistics. Contains zero one or multiple FeedbackPeriod objects. Output only, for the summary feedback data returned by GetFeedback.
 * @subpackage Arrays
 */
class FeedbackPeriodArrayType extends AbstractStructArrayBase
{
    /**
     * The FeedbackPeriod
     * Meta information extracted from the WSDL
     * - documentation: Contains one feedback statistic giving length of the period being reported (e.g. last 7 days prior to the call), and total number of feedback entries (of the type given by the container, e.g. positive feedback) submitted during the
     * indicated period. Returned if no detail level is specified.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\FeedbackPeriodType[]
     */
    public $FeedbackPeriod;
    /**
     * Constructor method for FeedbackPeriodArrayType
     * @uses FeedbackPeriodArrayType::setFeedbackPeriod()
     * @param \StructType\FeedbackPeriodType[] $feedbackPeriod
     */
    public function __construct(array $feedbackPeriod = array())
    {
        $this
            ->setFeedbackPeriod($feedbackPeriod);
    }
    /**
     * Get FeedbackPeriod value
     * @return \StructType\FeedbackPeriodType[]|null
     */
    public function getFeedbackPeriod()
    {
        return $this->FeedbackPeriod;
    }
    /**
     * This method is responsible for validating the values passed to the setFeedbackPeriod method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFeedbackPeriod method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFeedbackPeriodForArrayConstraintsFromSetFeedbackPeriod(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $feedbackPeriodArrayTypeFeedbackPeriodItem) {
            // validation for constraint: itemType
            if (!$feedbackPeriodArrayTypeFeedbackPeriodItem instanceof \StructType\FeedbackPeriodType) {
                $invalidValues[] = is_object($feedbackPeriodArrayTypeFeedbackPeriodItem) ? get_class($feedbackPeriodArrayTypeFeedbackPeriodItem) : sprintf('%s(%s)', gettype($feedbackPeriodArrayTypeFeedbackPeriodItem), var_export($feedbackPeriodArrayTypeFeedbackPeriodItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FeedbackPeriod property can only contain items of type \StructType\FeedbackPeriodType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set FeedbackPeriod value
     * @throws \InvalidArgumentException
     * @param \StructType\FeedbackPeriodType[] $feedbackPeriod
     * @return \ArrayType\FeedbackPeriodArrayType
     */
    public function setFeedbackPeriod(array $feedbackPeriod = array())
    {
        // validation for constraint: array
        if ('' !== ($feedbackPeriodArrayErrorMessage = self::validateFeedbackPeriodForArrayConstraintsFromSetFeedbackPeriod($feedbackPeriod))) {
            throw new \InvalidArgumentException($feedbackPeriodArrayErrorMessage, __LINE__);
        }
        $this->FeedbackPeriod = $feedbackPeriod;
        return $this;
    }
    /**
     * Add item to FeedbackPeriod value
     * @throws \InvalidArgumentException
     * @param \StructType\FeedbackPeriodType $item
     * @return \ArrayType\FeedbackPeriodArrayType
     */
    public function addToFeedbackPeriod(\StructType\FeedbackPeriodType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\FeedbackPeriodType) {
            throw new \InvalidArgumentException(sprintf('The FeedbackPeriod property can only contain items of type \StructType\FeedbackPeriodType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FeedbackPeriod[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\FeedbackPeriodType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\FeedbackPeriodType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\FeedbackPeriodType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\FeedbackPeriodType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\FeedbackPeriodType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FeedbackPeriod
     */
    public function getAttributeName()
    {
        return 'FeedbackPeriod';
    }
}
