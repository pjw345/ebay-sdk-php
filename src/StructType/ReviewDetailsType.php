<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReviewDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ReviewDetailsType extends AbstractStructBase
{
    /**
     * The AverageRating
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var float
     */
    public $AverageRating;
    /**
     * The Review
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ReviewType[]
     */
    public $Review;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ReviewDetailsType
     * @uses ReviewDetailsType::setAverageRating()
     * @uses ReviewDetailsType::setReview()
     * @uses ReviewDetailsType::setAny()
     * @param float $averageRating
     * @param \StructType\ReviewType[] $review
     * @param \DOMDocument $any
     */
    public function __construct($averageRating = null, array $review = array(), \DOMDocument $any = null)
    {
        $this
            ->setAverageRating($averageRating)
            ->setReview($review)
            ->setAny($any);
    }
    /**
     * Get AverageRating value
     * @return float|null
     */
    public function getAverageRating()
    {
        return $this->AverageRating;
    }
    /**
     * Set AverageRating value
     * @param float $averageRating
     * @return \StructType\ReviewDetailsType
     */
    public function setAverageRating($averageRating = null)
    {
        // validation for constraint: float
        if (!is_null($averageRating) && !(is_float($averageRating) || is_numeric($averageRating))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($averageRating, true), gettype($averageRating)), __LINE__);
        }
        $this->AverageRating = $averageRating;
        return $this;
    }
    /**
     * Get Review value
     * @return \StructType\ReviewType[]|null
     */
    public function getReview()
    {
        return $this->Review;
    }
    /**
     * This method is responsible for validating the values passed to the setReview method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReview method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReviewForArrayConstraintsFromSetReview(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $reviewDetailsTypeReviewItem) {
            // validation for constraint: itemType
            if (!$reviewDetailsTypeReviewItem instanceof \StructType\ReviewType) {
                $invalidValues[] = is_object($reviewDetailsTypeReviewItem) ? get_class($reviewDetailsTypeReviewItem) : sprintf('%s(%s)', gettype($reviewDetailsTypeReviewItem), var_export($reviewDetailsTypeReviewItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Review property can only contain items of type \StructType\ReviewType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Review value
     * @throws \InvalidArgumentException
     * @param \StructType\ReviewType[] $review
     * @return \StructType\ReviewDetailsType
     */
    public function setReview(array $review = array())
    {
        // validation for constraint: array
        if ('' !== ($reviewArrayErrorMessage = self::validateReviewForArrayConstraintsFromSetReview($review))) {
            throw new \InvalidArgumentException($reviewArrayErrorMessage, __LINE__);
        }
        $this->Review = $review;
        return $this;
    }
    /**
     * Add item to Review value
     * @throws \InvalidArgumentException
     * @param \StructType\ReviewType $item
     * @return \StructType\ReviewDetailsType
     */
    public function addToReview(\StructType\ReviewType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ReviewType) {
            throw new \InvalidArgumentException(sprintf('The Review property can only contain items of type \StructType\ReviewType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Review[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        $domDocument = null;
        if (!empty($this->any) && !$asString) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asString ? $this->any : $domDocument;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument $any
     * @return \StructType\ReviewDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
