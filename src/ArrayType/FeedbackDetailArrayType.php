<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for FeedbackDetailArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>FeedbackDetailArray</b> container that is returned in the <b>GetFeedback</b> call. The <b>FeedbackDetailArray</b> container consists of an array of one or more Feedback entries. The Feedback entries that
 * are returned will depend on the fields/values included in the call request.
 * @subpackage Arrays
 */
class FeedbackDetailArrayType extends AbstractStructArrayBase
{
    /**
     * The FeedbackDetail
     * Meta information extracted from the WSDL
     * - documentation: This container consists of detailed information for a Feedback entry on a specific order line item. For Feedback entries that were left for the buyer by the seller, some of the fields in this container will not be returned to users
     * who were not involved in the transaction as either the buyer or seller.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\FeedbackDetailType[]
     */
    public $FeedbackDetail;
    /**
     * Constructor method for FeedbackDetailArrayType
     * @uses FeedbackDetailArrayType::setFeedbackDetail()
     * @param \StructType\FeedbackDetailType[] $feedbackDetail
     */
    public function __construct(array $feedbackDetail = array())
    {
        $this
            ->setFeedbackDetail($feedbackDetail);
    }
    /**
     * Get FeedbackDetail value
     * @return \StructType\FeedbackDetailType[]|null
     */
    public function getFeedbackDetail()
    {
        return $this->FeedbackDetail;
    }
    /**
     * This method is responsible for validating the values passed to the setFeedbackDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFeedbackDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFeedbackDetailForArrayConstraintsFromSetFeedbackDetail(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $feedbackDetailArrayTypeFeedbackDetailItem) {
            // validation for constraint: itemType
            if (!$feedbackDetailArrayTypeFeedbackDetailItem instanceof \StructType\FeedbackDetailType) {
                $invalidValues[] = is_object($feedbackDetailArrayTypeFeedbackDetailItem) ? get_class($feedbackDetailArrayTypeFeedbackDetailItem) : sprintf('%s(%s)', gettype($feedbackDetailArrayTypeFeedbackDetailItem), var_export($feedbackDetailArrayTypeFeedbackDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FeedbackDetail property can only contain items of type \StructType\FeedbackDetailType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set FeedbackDetail value
     * @throws \InvalidArgumentException
     * @param \StructType\FeedbackDetailType[] $feedbackDetail
     * @return \ArrayType\FeedbackDetailArrayType
     */
    public function setFeedbackDetail(array $feedbackDetail = array())
    {
        // validation for constraint: array
        if ('' !== ($feedbackDetailArrayErrorMessage = self::validateFeedbackDetailForArrayConstraintsFromSetFeedbackDetail($feedbackDetail))) {
            throw new \InvalidArgumentException($feedbackDetailArrayErrorMessage, __LINE__);
        }
        $this->FeedbackDetail = $feedbackDetail;
        return $this;
    }
    /**
     * Add item to FeedbackDetail value
     * @throws \InvalidArgumentException
     * @param \StructType\FeedbackDetailType $item
     * @return \ArrayType\FeedbackDetailArrayType
     */
    public function addToFeedbackDetail(\StructType\FeedbackDetailType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\FeedbackDetailType) {
            throw new \InvalidArgumentException(sprintf('The FeedbackDetail property can only contain items of type \StructType\FeedbackDetailType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FeedbackDetail[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\FeedbackDetailType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\FeedbackDetailType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\FeedbackDetailType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\FeedbackDetailType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\FeedbackDetailType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FeedbackDetail
     */
    public function getAttributeName()
    {
        return 'FeedbackDetail';
    }
}
