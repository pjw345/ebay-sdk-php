<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemRatingDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Applicable to sites that support the Detailed Seller Ratings feature. The <b>ItemRatingDetailsType</b> contains detailed seller ratings for an order line item in one area. When buyers leave an overall Feedback rating (positive,
 * neutral, or negative) for a seller, they also can leave ratings in four areas: item as described, communication, shipping time, and charges for shipping and handling. Users retrieve detailed ratings as averages of the ratings left by buyers.
 * @subpackage Structs
 */
class ItemRatingDetailsType extends AbstractStructBase
{
    /**
     * The RatingDetail
     * Meta information extracted from the WSDL
     * - documentation: The area of a specific detailed seller rating for an order line item. When buyers leave an overall Feedback rating (positive, neutral, or negative) for a seller, they also can leave ratings in four areas: item as described,
     * communication, shipping time, and charges for shipping and handling.
     * - minOccurs: 0
     * @var string
     */
    public $RatingDetail;
    /**
     * The Rating
     * Meta information extracted from the WSDL
     * - documentation: A detailed seller rating for an order line item applied to the area in the corresponding RatingDetail field. Valid input values are numerical integers 1 though 5.
     * - minOccurs: 0
     * @var int
     */
    public $Rating;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ItemRatingDetailsType
     * @uses ItemRatingDetailsType::setRatingDetail()
     * @uses ItemRatingDetailsType::setRating()
     * @uses ItemRatingDetailsType::setAny()
     * @param string $ratingDetail
     * @param int $rating
     * @param \DOMDocument $any
     */
    public function __construct($ratingDetail = null, $rating = null, \DOMDocument $any = null)
    {
        $this
            ->setRatingDetail($ratingDetail)
            ->setRating($rating)
            ->setAny($any);
    }
    /**
     * Get RatingDetail value
     * @return string|null
     */
    public function getRatingDetail()
    {
        return $this->RatingDetail;
    }
    /**
     * Set RatingDetail value
     * @uses \EnumType\FeedbackRatingDetailCodeType::valueIsValid()
     * @uses \EnumType\FeedbackRatingDetailCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $ratingDetail
     * @return \StructType\ItemRatingDetailsType
     */
    public function setRatingDetail($ratingDetail = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\FeedbackRatingDetailCodeType::valueIsValid($ratingDetail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\FeedbackRatingDetailCodeType', is_array($ratingDetail) ? implode(', ', $ratingDetail) : var_export($ratingDetail, true), implode(', ', \EnumType\FeedbackRatingDetailCodeType::getValidValues())), __LINE__);
        }
        $this->RatingDetail = $ratingDetail;
        return $this;
    }
    /**
     * Get Rating value
     * @return int|null
     */
    public function getRating()
    {
        return $this->Rating;
    }
    /**
     * Set Rating value
     * @param int $rating
     * @return \StructType\ItemRatingDetailsType
     */
    public function setRating($rating = null)
    {
        // validation for constraint: int
        if (!is_null($rating) && !(is_int($rating) || ctype_digit($rating))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rating, true), gettype($rating)), __LINE__);
        }
        $this->Rating = $rating;
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
     * @return \StructType\ItemRatingDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
