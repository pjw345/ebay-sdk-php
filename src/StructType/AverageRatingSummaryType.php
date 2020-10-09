<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AverageRatingSummaryType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>AverageRatingSummary</b> container that is returned in the <b>GetFeedback</b> call to display the seller's rating information across the four different Detail Seller Rating areas. The Detail Seller Rating
 * subject areas include Item as Described, Communication, Shipping Time, and Shipping and Handling charges.
 * @subpackage Structs
 */
class AverageRatingSummaryType extends AbstractStructBase
{
    /**
     * The FeedbackSummaryPeriod
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value will indicate whether the statistics in each AverageRatingDetails container is for the last year (<code>FiftyTwoWeeks</code>) or the last month (<code>ThirtyDays</code>).
     * - minOccurs: 0
     * @var string
     */
    public $FeedbackSummaryPeriod;
    /**
     * The AverageRatingDetails
     * Meta information extracted from the WSDL
     * - documentation: Applicable to sites that support the Detailed Seller Ratings feature. Each <b>AverageRatingDetails</b> container consists of the average detailed seller ratings in an area. When buyers leave an overall Feedback rating (positive,
     * neutral, or negative) for a seller, they also can leave ratings in four areas: item as described, communication, shipping time, and charges for shipping and handling.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\AverageRatingDetailsType[]
     */
    public $AverageRatingDetails;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for AverageRatingSummaryType
     * @uses AverageRatingSummaryType::setFeedbackSummaryPeriod()
     * @uses AverageRatingSummaryType::setAverageRatingDetails()
     * @uses AverageRatingSummaryType::setAny()
     * @param string $feedbackSummaryPeriod
     * @param \StructType\AverageRatingDetailsType[] $averageRatingDetails
     * @param \DOMDocument $any
     */
    public function __construct($feedbackSummaryPeriod = null, array $averageRatingDetails = array(), \DOMDocument $any = null)
    {
        $this
            ->setFeedbackSummaryPeriod($feedbackSummaryPeriod)
            ->setAverageRatingDetails($averageRatingDetails)
            ->setAny($any);
    }
    /**
     * Get FeedbackSummaryPeriod value
     * @return string|null
     */
    public function getFeedbackSummaryPeriod()
    {
        return $this->FeedbackSummaryPeriod;
    }
    /**
     * Set FeedbackSummaryPeriod value
     * @uses \EnumType\FeedbackSummaryPeriodCodeType::valueIsValid()
     * @uses \EnumType\FeedbackSummaryPeriodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $feedbackSummaryPeriod
     * @return \StructType\AverageRatingSummaryType
     */
    public function setFeedbackSummaryPeriod($feedbackSummaryPeriod = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\FeedbackSummaryPeriodCodeType::valueIsValid($feedbackSummaryPeriod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\FeedbackSummaryPeriodCodeType', is_array($feedbackSummaryPeriod) ? implode(', ', $feedbackSummaryPeriod) : var_export($feedbackSummaryPeriod, true), implode(', ', \EnumType\FeedbackSummaryPeriodCodeType::getValidValues())), __LINE__);
        }
        $this->FeedbackSummaryPeriod = $feedbackSummaryPeriod;
        return $this;
    }
    /**
     * Get AverageRatingDetails value
     * @return \StructType\AverageRatingDetailsType[]|null
     */
    public function getAverageRatingDetails()
    {
        return $this->AverageRatingDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setAverageRatingDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAverageRatingDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAverageRatingDetailsForArrayConstraintsFromSetAverageRatingDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $averageRatingSummaryTypeAverageRatingDetailsItem) {
            // validation for constraint: itemType
            if (!$averageRatingSummaryTypeAverageRatingDetailsItem instanceof \StructType\AverageRatingDetailsType) {
                $invalidValues[] = is_object($averageRatingSummaryTypeAverageRatingDetailsItem) ? get_class($averageRatingSummaryTypeAverageRatingDetailsItem) : sprintf('%s(%s)', gettype($averageRatingSummaryTypeAverageRatingDetailsItem), var_export($averageRatingSummaryTypeAverageRatingDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AverageRatingDetails property can only contain items of type \StructType\AverageRatingDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set AverageRatingDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\AverageRatingDetailsType[] $averageRatingDetails
     * @return \StructType\AverageRatingSummaryType
     */
    public function setAverageRatingDetails(array $averageRatingDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($averageRatingDetailsArrayErrorMessage = self::validateAverageRatingDetailsForArrayConstraintsFromSetAverageRatingDetails($averageRatingDetails))) {
            throw new \InvalidArgumentException($averageRatingDetailsArrayErrorMessage, __LINE__);
        }
        $this->AverageRatingDetails = $averageRatingDetails;
        return $this;
    }
    /**
     * Add item to AverageRatingDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\AverageRatingDetailsType $item
     * @return \StructType\AverageRatingSummaryType
     */
    public function addToAverageRatingDetails(\StructType\AverageRatingDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AverageRatingDetailsType) {
            throw new \InvalidArgumentException(sprintf('The AverageRatingDetails property can only contain items of type \StructType\AverageRatingDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AverageRatingDetails[] = $item;
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
     * @return \StructType\AverageRatingSummaryType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
