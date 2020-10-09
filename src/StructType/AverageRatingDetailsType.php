<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AverageRatingDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Applicable to sites that support the Detailed Seller Rating (DSR) feature. The <b>AverageRatingDetails</b> container consists of the average detailed seller ratings in an area. When buyers leave an overall Feedback rating (positive,
 * neutral, or negative) for a seller, they also can leave ratings in four areas: item as described, communication, shipping time, and charges for shipping and handling. Users retrieve detailed ratings as averages of the ratings left by buyers.
 * @subpackage Structs
 */
class AverageRatingDetailsType extends AbstractStructBase
{
    /**
     * The RatingDetail
     * Meta information extracted from the WSDL
     * - documentation: The value shown in this field indicates the Detailed Seller Rating area. The corresponding <b>Rating</b> value is the average rating that the seller has received for this DSR area, and the <b>RatingCount</b> value is the total number
     * of buyer ratings that the seller has received in this DSR area. When buyers leave an overall Feedback rating (positive, neutral, or negative) for a seller, they also can leave ratings in four areas: item as described, communication, shipping time,
     * and charges for shipping and handling.
     * - minOccurs: 0
     * @var string
     */
    public $RatingDetail;
    /**
     * The Rating
     * Meta information extracted from the WSDL
     * - documentation: This value is the seller's average rating (given by buyers) for the DSR area noted in the corresponding <b>RatingDetail</b> field.
     * - minOccurs: 0
     * @var float
     */
    public $Rating;
    /**
     * The RatingCount
     * Meta information extracted from the WSDL
     * - documentation: This value is the total count of buyer ratings given for the DSR area noted in the corresponding <b>RatingDetail</b> field.
     * - minOccurs: 0
     * @var int
     */
    public $RatingCount;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for AverageRatingDetailsType
     * @uses AverageRatingDetailsType::setRatingDetail()
     * @uses AverageRatingDetailsType::setRating()
     * @uses AverageRatingDetailsType::setRatingCount()
     * @uses AverageRatingDetailsType::setAny()
     * @param string $ratingDetail
     * @param float $rating
     * @param int $ratingCount
     * @param \DOMDocument $any
     */
    public function __construct($ratingDetail = null, $rating = null, $ratingCount = null, \DOMDocument $any = null)
    {
        $this
            ->setRatingDetail($ratingDetail)
            ->setRating($rating)
            ->setRatingCount($ratingCount)
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
     * @return \StructType\AverageRatingDetailsType
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
     * @return float|null
     */
    public function getRating()
    {
        return $this->Rating;
    }
    /**
     * Set Rating value
     * @param float $rating
     * @return \StructType\AverageRatingDetailsType
     */
    public function setRating($rating = null)
    {
        // validation for constraint: float
        if (!is_null($rating) && !(is_float($rating) || is_numeric($rating))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($rating, true), gettype($rating)), __LINE__);
        }
        $this->Rating = $rating;
        return $this;
    }
    /**
     * Get RatingCount value
     * @return int|null
     */
    public function getRatingCount()
    {
        return $this->RatingCount;
    }
    /**
     * Set RatingCount value
     * @param int $ratingCount
     * @return \StructType\AverageRatingDetailsType
     */
    public function setRatingCount($ratingCount = null)
    {
        // validation for constraint: int
        if (!is_null($ratingCount) && !(is_int($ratingCount) || ctype_digit($ratingCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ratingCount, true), gettype($ratingCount)), __LINE__);
        }
        $this->RatingCount = $ratingCount;
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
     * @return \StructType\AverageRatingDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
