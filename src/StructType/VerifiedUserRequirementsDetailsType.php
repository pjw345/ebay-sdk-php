<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifiedUserRequirementsDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: The Verified User Buyer Requirement has been deprecated, so this type is no longer applicable.
 * @subpackage Structs
 */
class VerifiedUserRequirementsDetailsType extends AbstractStructBase
{
    /**
     * The VerifiedUser
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $VerifiedUser;
    /**
     * The FeedbackScore
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    public $FeedbackScore;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for VerifiedUserRequirementsDetailsType
     * @uses VerifiedUserRequirementsDetailsType::setVerifiedUser()
     * @uses VerifiedUserRequirementsDetailsType::setFeedbackScore()
     * @uses VerifiedUserRequirementsDetailsType::setAny()
     * @param bool $verifiedUser
     * @param int[] $feedbackScore
     * @param \DOMDocument $any
     */
    public function __construct($verifiedUser = null, array $feedbackScore = array(), \DOMDocument $any = null)
    {
        $this
            ->setVerifiedUser($verifiedUser)
            ->setFeedbackScore($feedbackScore)
            ->setAny($any);
    }
    /**
     * Get VerifiedUser value
     * @return bool|null
     */
    public function getVerifiedUser()
    {
        return $this->VerifiedUser;
    }
    /**
     * Set VerifiedUser value
     * @param bool $verifiedUser
     * @return \StructType\VerifiedUserRequirementsDetailsType
     */
    public function setVerifiedUser($verifiedUser = null)
    {
        // validation for constraint: boolean
        if (!is_null($verifiedUser) && !is_bool($verifiedUser)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($verifiedUser, true), gettype($verifiedUser)), __LINE__);
        }
        $this->VerifiedUser = $verifiedUser;
        return $this;
    }
    /**
     * Get FeedbackScore value
     * @return int[]|null
     */
    public function getFeedbackScore()
    {
        return $this->FeedbackScore;
    }
    /**
     * This method is responsible for validating the values passed to the setFeedbackScore method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFeedbackScore method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFeedbackScoreForArrayConstraintsFromSetFeedbackScore(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $verifiedUserRequirementsDetailsTypeFeedbackScoreItem) {
            // validation for constraint: itemType
            if (!(is_int($verifiedUserRequirementsDetailsTypeFeedbackScoreItem) || ctype_digit($verifiedUserRequirementsDetailsTypeFeedbackScoreItem))) {
                $invalidValues[] = is_object($verifiedUserRequirementsDetailsTypeFeedbackScoreItem) ? get_class($verifiedUserRequirementsDetailsTypeFeedbackScoreItem) : sprintf('%s(%s)', gettype($verifiedUserRequirementsDetailsTypeFeedbackScoreItem), var_export($verifiedUserRequirementsDetailsTypeFeedbackScoreItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FeedbackScore property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set FeedbackScore value
     * @throws \InvalidArgumentException
     * @param int[] $feedbackScore
     * @return \StructType\VerifiedUserRequirementsDetailsType
     */
    public function setFeedbackScore(array $feedbackScore = array())
    {
        // validation for constraint: array
        if ('' !== ($feedbackScoreArrayErrorMessage = self::validateFeedbackScoreForArrayConstraintsFromSetFeedbackScore($feedbackScore))) {
            throw new \InvalidArgumentException($feedbackScoreArrayErrorMessage, __LINE__);
        }
        $this->FeedbackScore = $feedbackScore;
        return $this;
    }
    /**
     * Add item to FeedbackScore value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \StructType\VerifiedUserRequirementsDetailsType
     */
    public function addToFeedbackScore($item)
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new \InvalidArgumentException(sprintf('The FeedbackScore property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FeedbackScore[] = $item;
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
     * @return \StructType\VerifiedUserRequirementsDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
