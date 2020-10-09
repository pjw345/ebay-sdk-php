<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeedbackDetailType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>FeedbackDetail</b> containers that are returned in the <b>GetFeedback</b> response. Each <b>FeedbackDetail</b> container consists of detailed information on one Feedback entry for a specific order line item. This
 * container will only be returned if uses the <b>DetailLevel</b> field and sets its value to <code>ReturnAll</code>. <br/><br/> <span class="tablenote"><b>Note: </b> Although it is possible for users to retrieve Feedback entries for order line items in
 * which they are not the buyer or seller, some of the fields of the <b>FeedbackDetail</b> container will not be returned or masked. More details on the fields that will not be returned or masked are discussed in this type's individual fields. </span>
 * @subpackage Structs
 */
class FeedbackDetailType extends AbstractStructBase
{
    /**
     * The CommentingUser
     * Meta information extracted from the WSDL
     * - documentation: The eBay User ID of the user who left the Feedback entry. <br/><br/> <span class="tablenote"><b>Note: </b> This field is returned, but masked to users who are not either the buyer or seller of the order line item. </span> | This is a
     * string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay user, such as DisputeType.xsd, FeedbackInfoType.xsd, GetAllBidders, OrderType, and so on. <br><br>For GetAllBidders, some
     * bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the seller's item will be returned. If a bidder makes this API call, the bidder's actual ID will be returned, but
     * information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $CommentingUser;
    /**
     * The FeedbackRatingStar
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is the Feedback Rating Star of the user indicated in the <b>CommentingUser</b> field. See <a href="types/FeedbackRatingStarCodeType.html">FeedbackRatingStarCodeType</a> for the full list of Feedback Rating
     * Stars, and the Feedback score ranges associated with those stars.
     * - minOccurs: 0
     * @var string
     */
    public $FeedbackRatingStar;
    /**
     * The CommentingUserScore
     * Meta information extracted from the WSDL
     * - documentation: This integer value is the Feedback score of the user indicated in the <b>CommentingUser</b> field.
     * - minOccurs: 0
     * @var int
     */
    public $CommentingUserScore;
    /**
     * The CommentText
     * Meta information extracted from the WSDL
     * - documentation: This free-form text is the actual comment that the commenting user left for their order partner. The Feedback comment's purpose is to explain, clarify, or justify the Feedback rating specified in the <b>CommentType</b> field.
     * <br><br> The comment is returned as text in the language that the comment was originally left in. This comment will still be displayed even if a submitted Feedback entry is withdrawn.
     * - minOccurs: 0
     * @var string
     */
    public $CommentText;
    /**
     * The CommentTime
     * Meta information extracted from the WSDL
     * - documentation: This timestamp (in GMT) indicates the date/time that the Feedback entry was submitted to eBay.
     * - minOccurs: 0
     * @var string
     */
    public $CommentTime;
    /**
     * The CommentType
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the rating of the Feedback left by the user identified in the <b>CommentingUser</b> field. <br><br> A <b>Positive</b> rating increases a user's Feedback score, a <b>Negative</b> rating decreases a user's Feedback
     * score, and a <b>Neutral</b> rating does not affect a user's Feedback score. <br><br> Sellers cannot leave <b>Neutral</b> or <b>Negative</b> ratings for buyers.
     * - minOccurs: 0
     * @var string
     */
    public $CommentType;
    /**
     * The FeedbackResponse
     * Meta information extracted from the WSDL
     * - documentation: This free-form text is the comment that the recipient of the Feedback may leave in response or rebuttal to the Feedback. Responses to Feedback comments cannot be submitted or edited via the API.
     * - minOccurs: 0
     * @var string
     */
    public $FeedbackResponse;
    /**
     * The Followup
     * Meta information extracted from the WSDL
     * - documentation: This free-form text is the explanation that a user can give to a response. Follow-ups to Feedback comments cannot be submitted or edited via the API.
     * - minOccurs: 0
     * @var string
     */
    public $Followup;
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the eBay listing associated with the Feedback entry. <br/><br/> <span class="tablenote"><b>Note: </b> For Feedback entries that were submitted less than five years ago, this field is returned to users who are
     * not the buyer or seller of the order line item, but a dummy value such as '111111111' will be displayed. For Feedback entries that were submitted more than five years ago, this field will not be returned at all to users who do not have a relationship
     * (as a buyer or seller) to the Feedback entry. </span> | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The Role
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the recipient of the Feedback entry is the buyer or the seller for the corresponding order line item.
     * - minOccurs: 0
     * @var string
     */
    public $Role;
    /**
     * The ItemTitle
     * Meta information extracted from the WSDL
     * - documentation: The title of the item listing for which Feedback was provided. The title is returned as CDATA. This value can be returned as part of the Detailed Seller Ratings feature. Not returned if a listing ended more than 90 days ago. For
     * Feedback entries that were left for the buyer by the seller, an <b>ItemTitle</b> value will not be returned to a user that was not involved in the transaction as either the buyer or seller.
     * - minOccurs: 0
     * @var string
     */
    public $ItemTitle;
    /**
     * The ItemPrice
     * Meta information extracted from the WSDL
     * - documentation: The purchase price for the item that was associated with the Feedback entry. This value can be returned as part of the Detailed Seller Ratings feature. Not returned if a listing ended more than 90 days ago. For Feedback entries that
     * were left for the buyer by the seller, an <b>ItemPrice</b> value will not be returned to a user that was not involved in the transaction as either the buyer or seller.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $ItemPrice;
    /**
     * The FeedbackID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for the Feedback entry.
     * - minOccurs: 0
     * @var string
     */
    public $FeedbackID;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for an eBay order line item for which the Feedback entry was left. This field is not returned if the Feedback entry was left for an auction listing, since all auction listings have a <b>TransactionID</b> value of 0.
     * <br/><br/> <span class="tablenote"><b>Note: </b> For Feedback entries that were submitted less than five years ago, this field is returned to users who are not the buyer or seller of the order line item, but a dummy value such as '111111111' will be
     * displayed. For Feedback entries that were submitted more than five years ago, this field will not be returned at all to users who do not have a relationship (as a buyer or seller) to the Feedback entry. </span>
     * - minOccurs: 0
     * @var string
     */
    public $TransactionID;
    /**
     * The CommentReplaced
     * Meta information extracted from the WSDL
     * - documentation: This boolean value indicates whether or not eBay replaced the Feedback comment with a message that the Feedback comment was removed.
     * - minOccurs: 0
     * @var bool
     */
    public $CommentReplaced;
    /**
     * The ResponseReplaced
     * Meta information extracted from the WSDL
     * - documentation: This boolean value indicates whether or not eBay replaced the response to the Feedback comment with a message that the response to the Feedback comment was removed.
     * - minOccurs: 0
     * @var bool
     */
    public $ResponseReplaced;
    /**
     * The FollowUpReplaced
     * Meta information extracted from the WSDL
     * - documentation: This boolean value indicates whether or not eBay replaced the follow-up to the Feedback comment with a message that the follow-up to the Feedback comment was removed.
     * - minOccurs: 0
     * @var bool
     */
    public $FollowUpReplaced;
    /**
     * The Countable
     * Meta information extracted from the WSDL
     * - documentation: This boolean value indicates whether or not the Feedback entry will affect the user's Feedback score. Only Feedback left by verified users can count toward the aggregate score of another user. If a unverified user leaves a Feedback
     * entry, then later becomes verified, that Feedback entry will still have no affect on the recipient user's Feedback score. Or, if a user is verified and at some later date changes to unverified status, the Feedback entry left while the user was
     * verified remains in effect.
     * - minOccurs: 0
     * @var bool
     */
    public $Countable;
    /**
     * The FeedbackRevised
     * Meta information extracted from the WSDL
     * - documentation: This flag indicates whether or not a Feedback entry was revised (rating was changed).
     * - minOccurs: 0
     * @var bool
     */
    public $FeedbackRevised;
    /**
     * The OrderLineItemID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier for an eBay order line item. For Feedback entries that were left for the buyer by the seller, an <b>OrderLineItemID</b> value will not be returned to a user that was not involved in the transaction as either the
     * buyer or seller. <br/><br/> <span class="tablenote"><b>Note: </b> For Feedback entries that were submitted less than five years ago, this field is returned to users who are not the buyer or seller of the order line item, but a dummy value such as
     * '11111111-0' will be displayed. For Feedback entries that were submitted more than five years ago, this field will not be returned at all to users who do not have a relationship (as a buyer or seller) to the Feedback entry. </span>
     * - minOccurs: 0
     * @var string
     */
    public $OrderLineItemID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for FeedbackDetailType
     * @uses FeedbackDetailType::setCommentingUser()
     * @uses FeedbackDetailType::setFeedbackRatingStar()
     * @uses FeedbackDetailType::setCommentingUserScore()
     * @uses FeedbackDetailType::setCommentText()
     * @uses FeedbackDetailType::setCommentTime()
     * @uses FeedbackDetailType::setCommentType()
     * @uses FeedbackDetailType::setFeedbackResponse()
     * @uses FeedbackDetailType::setFollowup()
     * @uses FeedbackDetailType::setItemID()
     * @uses FeedbackDetailType::setRole()
     * @uses FeedbackDetailType::setItemTitle()
     * @uses FeedbackDetailType::setItemPrice()
     * @uses FeedbackDetailType::setFeedbackID()
     * @uses FeedbackDetailType::setTransactionID()
     * @uses FeedbackDetailType::setCommentReplaced()
     * @uses FeedbackDetailType::setResponseReplaced()
     * @uses FeedbackDetailType::setFollowUpReplaced()
     * @uses FeedbackDetailType::setCountable()
     * @uses FeedbackDetailType::setFeedbackRevised()
     * @uses FeedbackDetailType::setOrderLineItemID()
     * @uses FeedbackDetailType::setAny()
     * @param string $commentingUser
     * @param string $feedbackRatingStar
     * @param int $commentingUserScore
     * @param string $commentText
     * @param string $commentTime
     * @param string $commentType
     * @param string $feedbackResponse
     * @param string $followup
     * @param string $itemID
     * @param string $role
     * @param string $itemTitle
     * @param \StructType\AmountType $itemPrice
     * @param string $feedbackID
     * @param string $transactionID
     * @param bool $commentReplaced
     * @param bool $responseReplaced
     * @param bool $followUpReplaced
     * @param bool $countable
     * @param bool $feedbackRevised
     * @param string $orderLineItemID
     * @param \DOMDocument $any
     */
    public function __construct($commentingUser = null, $feedbackRatingStar = null, $commentingUserScore = null, $commentText = null, $commentTime = null, $commentType = null, $feedbackResponse = null, $followup = null, $itemID = null, $role = null, $itemTitle = null, \StructType\AmountType $itemPrice = null, $feedbackID = null, $transactionID = null, $commentReplaced = null, $responseReplaced = null, $followUpReplaced = null, $countable = null, $feedbackRevised = null, $orderLineItemID = null, \DOMDocument $any = null)
    {
        $this
            ->setCommentingUser($commentingUser)
            ->setFeedbackRatingStar($feedbackRatingStar)
            ->setCommentingUserScore($commentingUserScore)
            ->setCommentText($commentText)
            ->setCommentTime($commentTime)
            ->setCommentType($commentType)
            ->setFeedbackResponse($feedbackResponse)
            ->setFollowup($followup)
            ->setItemID($itemID)
            ->setRole($role)
            ->setItemTitle($itemTitle)
            ->setItemPrice($itemPrice)
            ->setFeedbackID($feedbackID)
            ->setTransactionID($transactionID)
            ->setCommentReplaced($commentReplaced)
            ->setResponseReplaced($responseReplaced)
            ->setFollowUpReplaced($followUpReplaced)
            ->setCountable($countable)
            ->setFeedbackRevised($feedbackRevised)
            ->setOrderLineItemID($orderLineItemID)
            ->setAny($any);
    }
    /**
     * Get CommentingUser value
     * @return string|null
     */
    public function getCommentingUser()
    {
        return $this->CommentingUser;
    }
    /**
     * Set CommentingUser value
     * @param string $commentingUser
     * @return \StructType\FeedbackDetailType
     */
    public function setCommentingUser($commentingUser = null)
    {
        // validation for constraint: string
        if (!is_null($commentingUser) && !is_string($commentingUser)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commentingUser, true), gettype($commentingUser)), __LINE__);
        }
        $this->CommentingUser = $commentingUser;
        return $this;
    }
    /**
     * Get FeedbackRatingStar value
     * @return string|null
     */
    public function getFeedbackRatingStar()
    {
        return $this->FeedbackRatingStar;
    }
    /**
     * Set FeedbackRatingStar value
     * @uses \EnumType\FeedbackRatingStarCodeType::valueIsValid()
     * @uses \EnumType\FeedbackRatingStarCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $feedbackRatingStar
     * @return \StructType\FeedbackDetailType
     */
    public function setFeedbackRatingStar($feedbackRatingStar = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\FeedbackRatingStarCodeType::valueIsValid($feedbackRatingStar)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\FeedbackRatingStarCodeType', is_array($feedbackRatingStar) ? implode(', ', $feedbackRatingStar) : var_export($feedbackRatingStar, true), implode(', ', \EnumType\FeedbackRatingStarCodeType::getValidValues())), __LINE__);
        }
        $this->FeedbackRatingStar = $feedbackRatingStar;
        return $this;
    }
    /**
     * Get CommentingUserScore value
     * @return int|null
     */
    public function getCommentingUserScore()
    {
        return $this->CommentingUserScore;
    }
    /**
     * Set CommentingUserScore value
     * @param int $commentingUserScore
     * @return \StructType\FeedbackDetailType
     */
    public function setCommentingUserScore($commentingUserScore = null)
    {
        // validation for constraint: int
        if (!is_null($commentingUserScore) && !(is_int($commentingUserScore) || ctype_digit($commentingUserScore))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($commentingUserScore, true), gettype($commentingUserScore)), __LINE__);
        }
        $this->CommentingUserScore = $commentingUserScore;
        return $this;
    }
    /**
     * Get CommentText value
     * @return string|null
     */
    public function getCommentText()
    {
        return $this->CommentText;
    }
    /**
     * Set CommentText value
     * @param string $commentText
     * @return \StructType\FeedbackDetailType
     */
    public function setCommentText($commentText = null)
    {
        // validation for constraint: string
        if (!is_null($commentText) && !is_string($commentText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commentText, true), gettype($commentText)), __LINE__);
        }
        $this->CommentText = $commentText;
        return $this;
    }
    /**
     * Get CommentTime value
     * @return string|null
     */
    public function getCommentTime()
    {
        return $this->CommentTime;
    }
    /**
     * Set CommentTime value
     * @param string $commentTime
     * @return \StructType\FeedbackDetailType
     */
    public function setCommentTime($commentTime = null)
    {
        // validation for constraint: string
        if (!is_null($commentTime) && !is_string($commentTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commentTime, true), gettype($commentTime)), __LINE__);
        }
        $this->CommentTime = $commentTime;
        return $this;
    }
    /**
     * Get CommentType value
     * @return string|null
     */
    public function getCommentType()
    {
        return $this->CommentType;
    }
    /**
     * Set CommentType value
     * @uses \EnumType\CommentTypeCodeType::valueIsValid()
     * @uses \EnumType\CommentTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $commentType
     * @return \StructType\FeedbackDetailType
     */
    public function setCommentType($commentType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CommentTypeCodeType::valueIsValid($commentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CommentTypeCodeType', is_array($commentType) ? implode(', ', $commentType) : var_export($commentType, true), implode(', ', \EnumType\CommentTypeCodeType::getValidValues())), __LINE__);
        }
        $this->CommentType = $commentType;
        return $this;
    }
    /**
     * Get FeedbackResponse value
     * @return string|null
     */
    public function getFeedbackResponse()
    {
        return $this->FeedbackResponse;
    }
    /**
     * Set FeedbackResponse value
     * @param string $feedbackResponse
     * @return \StructType\FeedbackDetailType
     */
    public function setFeedbackResponse($feedbackResponse = null)
    {
        // validation for constraint: string
        if (!is_null($feedbackResponse) && !is_string($feedbackResponse)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feedbackResponse, true), gettype($feedbackResponse)), __LINE__);
        }
        $this->FeedbackResponse = $feedbackResponse;
        return $this;
    }
    /**
     * Get Followup value
     * @return string|null
     */
    public function getFollowup()
    {
        return $this->Followup;
    }
    /**
     * Set Followup value
     * @param string $followup
     * @return \StructType\FeedbackDetailType
     */
    public function setFollowup($followup = null)
    {
        // validation for constraint: string
        if (!is_null($followup) && !is_string($followup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($followup, true), gettype($followup)), __LINE__);
        }
        $this->Followup = $followup;
        return $this;
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \StructType\FeedbackDetailType
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemID, true), gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Get Role value
     * @return string|null
     */
    public function getRole()
    {
        return $this->Role;
    }
    /**
     * Set Role value
     * @uses \EnumType\TradingRoleCodeType::valueIsValid()
     * @uses \EnumType\TradingRoleCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $role
     * @return \StructType\FeedbackDetailType
     */
    public function setRole($role = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\TradingRoleCodeType::valueIsValid($role)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TradingRoleCodeType', is_array($role) ? implode(', ', $role) : var_export($role, true), implode(', ', \EnumType\TradingRoleCodeType::getValidValues())), __LINE__);
        }
        $this->Role = $role;
        return $this;
    }
    /**
     * Get ItemTitle value
     * @return string|null
     */
    public function getItemTitle()
    {
        return $this->ItemTitle;
    }
    /**
     * Set ItemTitle value
     * @param string $itemTitle
     * @return \StructType\FeedbackDetailType
     */
    public function setItemTitle($itemTitle = null)
    {
        // validation for constraint: string
        if (!is_null($itemTitle) && !is_string($itemTitle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemTitle, true), gettype($itemTitle)), __LINE__);
        }
        $this->ItemTitle = $itemTitle;
        return $this;
    }
    /**
     * Get ItemPrice value
     * @return \StructType\AmountType|null
     */
    public function getItemPrice()
    {
        return $this->ItemPrice;
    }
    /**
     * Set ItemPrice value
     * @param \StructType\AmountType $itemPrice
     * @return \StructType\FeedbackDetailType
     */
    public function setItemPrice(\StructType\AmountType $itemPrice = null)
    {
        $this->ItemPrice = $itemPrice;
        return $this;
    }
    /**
     * Get FeedbackID value
     * @return string|null
     */
    public function getFeedbackID()
    {
        return $this->FeedbackID;
    }
    /**
     * Set FeedbackID value
     * @param string $feedbackID
     * @return \StructType\FeedbackDetailType
     */
    public function setFeedbackID($feedbackID = null)
    {
        // validation for constraint: string
        if (!is_null($feedbackID) && !is_string($feedbackID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feedbackID, true), gettype($feedbackID)), __LINE__);
        }
        $this->FeedbackID = $feedbackID;
        return $this;
    }
    /**
     * Get TransactionID value
     * @return string|null
     */
    public function getTransactionID()
    {
        return $this->TransactionID;
    }
    /**
     * Set TransactionID value
     * @param string $transactionID
     * @return \StructType\FeedbackDetailType
     */
    public function setTransactionID($transactionID = null)
    {
        // validation for constraint: string
        if (!is_null($transactionID) && !is_string($transactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionID, true), gettype($transactionID)), __LINE__);
        }
        $this->TransactionID = $transactionID;
        return $this;
    }
    /**
     * Get CommentReplaced value
     * @return bool|null
     */
    public function getCommentReplaced()
    {
        return $this->CommentReplaced;
    }
    /**
     * Set CommentReplaced value
     * @param bool $commentReplaced
     * @return \StructType\FeedbackDetailType
     */
    public function setCommentReplaced($commentReplaced = null)
    {
        // validation for constraint: boolean
        if (!is_null($commentReplaced) && !is_bool($commentReplaced)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($commentReplaced, true), gettype($commentReplaced)), __LINE__);
        }
        $this->CommentReplaced = $commentReplaced;
        return $this;
    }
    /**
     * Get ResponseReplaced value
     * @return bool|null
     */
    public function getResponseReplaced()
    {
        return $this->ResponseReplaced;
    }
    /**
     * Set ResponseReplaced value
     * @param bool $responseReplaced
     * @return \StructType\FeedbackDetailType
     */
    public function setResponseReplaced($responseReplaced = null)
    {
        // validation for constraint: boolean
        if (!is_null($responseReplaced) && !is_bool($responseReplaced)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($responseReplaced, true), gettype($responseReplaced)), __LINE__);
        }
        $this->ResponseReplaced = $responseReplaced;
        return $this;
    }
    /**
     * Get FollowUpReplaced value
     * @return bool|null
     */
    public function getFollowUpReplaced()
    {
        return $this->FollowUpReplaced;
    }
    /**
     * Set FollowUpReplaced value
     * @param bool $followUpReplaced
     * @return \StructType\FeedbackDetailType
     */
    public function setFollowUpReplaced($followUpReplaced = null)
    {
        // validation for constraint: boolean
        if (!is_null($followUpReplaced) && !is_bool($followUpReplaced)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($followUpReplaced, true), gettype($followUpReplaced)), __LINE__);
        }
        $this->FollowUpReplaced = $followUpReplaced;
        return $this;
    }
    /**
     * Get Countable value
     * @return bool|null
     */
    public function getCountable()
    {
        return $this->Countable;
    }
    /**
     * Set Countable value
     * @param bool $countable
     * @return \StructType\FeedbackDetailType
     */
    public function setCountable($countable = null)
    {
        // validation for constraint: boolean
        if (!is_null($countable) && !is_bool($countable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($countable, true), gettype($countable)), __LINE__);
        }
        $this->Countable = $countable;
        return $this;
    }
    /**
     * Get FeedbackRevised value
     * @return bool|null
     */
    public function getFeedbackRevised()
    {
        return $this->FeedbackRevised;
    }
    /**
     * Set FeedbackRevised value
     * @param bool $feedbackRevised
     * @return \StructType\FeedbackDetailType
     */
    public function setFeedbackRevised($feedbackRevised = null)
    {
        // validation for constraint: boolean
        if (!is_null($feedbackRevised) && !is_bool($feedbackRevised)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($feedbackRevised, true), gettype($feedbackRevised)), __LINE__);
        }
        $this->FeedbackRevised = $feedbackRevised;
        return $this;
    }
    /**
     * Get OrderLineItemID value
     * @return string|null
     */
    public function getOrderLineItemID()
    {
        return $this->OrderLineItemID;
    }
    /**
     * Set OrderLineItemID value
     * @param string $orderLineItemID
     * @return \StructType\FeedbackDetailType
     */
    public function setOrderLineItemID($orderLineItemID = null)
    {
        // validation for constraint: string
        if (!is_null($orderLineItemID) && !is_string($orderLineItemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderLineItemID, true), gettype($orderLineItemID)), __LINE__);
        }
        $this->OrderLineItemID = $orderLineItemID;
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
     * @return \StructType\FeedbackDetailType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
