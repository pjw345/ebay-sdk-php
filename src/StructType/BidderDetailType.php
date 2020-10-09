<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BidderDetailType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class BidderDetailType extends AbstractStructBase
{
    /**
     * The UserID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated. | This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay user, such as DisputeType.xsd, FeedbackInfoType.xsd, GetAllBidders,
     * OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the seller's item will be returned. If a bidder makes this API
     * call, the bidder's actual ID will be returned, but information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $UserID;
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Email;
    /**
     * The FeedbackScore
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $FeedbackScore;
    /**
     * The UniqueNegativeFeedbackCount
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $UniqueNegativeFeedbackCount;
    /**
     * The UniquePositiveFeedbackCount
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $UniquePositiveFeedbackCount;
    /**
     * The UniqueNeutralFeedbackCount
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $UniqueNeutralFeedbackCount;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for BidderDetailType
     * @uses BidderDetailType::setUserID()
     * @uses BidderDetailType::setEmail()
     * @uses BidderDetailType::setFeedbackScore()
     * @uses BidderDetailType::setUniqueNegativeFeedbackCount()
     * @uses BidderDetailType::setUniquePositiveFeedbackCount()
     * @uses BidderDetailType::setUniqueNeutralFeedbackCount()
     * @uses BidderDetailType::setAny()
     * @param string $userID
     * @param string $email
     * @param int $feedbackScore
     * @param int $uniqueNegativeFeedbackCount
     * @param int $uniquePositiveFeedbackCount
     * @param int $uniqueNeutralFeedbackCount
     * @param \DOMDocument $any
     */
    public function __construct($userID = null, $email = null, $feedbackScore = null, $uniqueNegativeFeedbackCount = null, $uniquePositiveFeedbackCount = null, $uniqueNeutralFeedbackCount = null, \DOMDocument $any = null)
    {
        $this
            ->setUserID($userID)
            ->setEmail($email)
            ->setFeedbackScore($feedbackScore)
            ->setUniqueNegativeFeedbackCount($uniqueNegativeFeedbackCount)
            ->setUniquePositiveFeedbackCount($uniquePositiveFeedbackCount)
            ->setUniqueNeutralFeedbackCount($uniqueNeutralFeedbackCount)
            ->setAny($any);
    }
    /**
     * Get UserID value
     * @return string|null
     */
    public function getUserID()
    {
        return $this->UserID;
    }
    /**
     * Set UserID value
     * @param string $userID
     * @return \StructType\BidderDetailType
     */
    public function setUserID($userID = null)
    {
        // validation for constraint: string
        if (!is_null($userID) && !is_string($userID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userID, true), gettype($userID)), __LINE__);
        }
        $this->UserID = $userID;
        return $this;
    }
    /**
     * Get Email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return \StructType\BidderDetailType
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->Email = $email;
        return $this;
    }
    /**
     * Get FeedbackScore value
     * @return int|null
     */
    public function getFeedbackScore()
    {
        return $this->FeedbackScore;
    }
    /**
     * Set FeedbackScore value
     * @param int $feedbackScore
     * @return \StructType\BidderDetailType
     */
    public function setFeedbackScore($feedbackScore = null)
    {
        // validation for constraint: int
        if (!is_null($feedbackScore) && !(is_int($feedbackScore) || ctype_digit($feedbackScore))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($feedbackScore, true), gettype($feedbackScore)), __LINE__);
        }
        $this->FeedbackScore = $feedbackScore;
        return $this;
    }
    /**
     * Get UniqueNegativeFeedbackCount value
     * @return int|null
     */
    public function getUniqueNegativeFeedbackCount()
    {
        return $this->UniqueNegativeFeedbackCount;
    }
    /**
     * Set UniqueNegativeFeedbackCount value
     * @param int $uniqueNegativeFeedbackCount
     * @return \StructType\BidderDetailType
     */
    public function setUniqueNegativeFeedbackCount($uniqueNegativeFeedbackCount = null)
    {
        // validation for constraint: int
        if (!is_null($uniqueNegativeFeedbackCount) && !(is_int($uniqueNegativeFeedbackCount) || ctype_digit($uniqueNegativeFeedbackCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($uniqueNegativeFeedbackCount, true), gettype($uniqueNegativeFeedbackCount)), __LINE__);
        }
        $this->UniqueNegativeFeedbackCount = $uniqueNegativeFeedbackCount;
        return $this;
    }
    /**
     * Get UniquePositiveFeedbackCount value
     * @return int|null
     */
    public function getUniquePositiveFeedbackCount()
    {
        return $this->UniquePositiveFeedbackCount;
    }
    /**
     * Set UniquePositiveFeedbackCount value
     * @param int $uniquePositiveFeedbackCount
     * @return \StructType\BidderDetailType
     */
    public function setUniquePositiveFeedbackCount($uniquePositiveFeedbackCount = null)
    {
        // validation for constraint: int
        if (!is_null($uniquePositiveFeedbackCount) && !(is_int($uniquePositiveFeedbackCount) || ctype_digit($uniquePositiveFeedbackCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($uniquePositiveFeedbackCount, true), gettype($uniquePositiveFeedbackCount)), __LINE__);
        }
        $this->UniquePositiveFeedbackCount = $uniquePositiveFeedbackCount;
        return $this;
    }
    /**
     * Get UniqueNeutralFeedbackCount value
     * @return int|null
     */
    public function getUniqueNeutralFeedbackCount()
    {
        return $this->UniqueNeutralFeedbackCount;
    }
    /**
     * Set UniqueNeutralFeedbackCount value
     * @param int $uniqueNeutralFeedbackCount
     * @return \StructType\BidderDetailType
     */
    public function setUniqueNeutralFeedbackCount($uniqueNeutralFeedbackCount = null)
    {
        // validation for constraint: int
        if (!is_null($uniqueNeutralFeedbackCount) && !(is_int($uniqueNeutralFeedbackCount) || ctype_digit($uniqueNeutralFeedbackCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($uniqueNeutralFeedbackCount, true), gettype($uniqueNeutralFeedbackCount)), __LINE__);
        }
        $this->UniqueNeutralFeedbackCount = $uniqueNeutralFeedbackCount;
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
     * @return \StructType\BidderDetailType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
