<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeedbackInfoType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the Feedback details for an order line item, including the eBay User ID of the user the feedback is intended for, the Feedback rating, and the Feedback comment.
 * @subpackage Structs
 */
class FeedbackInfoType extends AbstractStructBase
{
    /**
     * The CommentText
     * Meta information extracted from the WSDL
     * - documentation: Textual comment that explains, clarifies, or justifies the Feedback rating specified in <b>CommentType</b>. This field is required in <b>CompleteSale</b> if the <b>FeedbackInfo</b> container is used. <br><br> This comment will still
     * be displayed even if submitted Feedback is withdrawn.
     * - minOccurs: 0
     * @var string
     */
    public $CommentText;
    /**
     * The CommentType
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the Feedback rating for the user specified in the <b>TargetUser</b> field. This field is required in <b>CompleteSale</b> if the <b>FeedbackInfo</b> container is used. <br><br> A Positive rating increases the
     * user's Feedback score, a Negative rating decreases the user's Feedback score, and a Neutral rating does not affect the user's Feedback score. eBay users also have the right to withdraw feedback for whatever reason. <br><br> Sellers cannot leave
     * Neutral or Negative ratings for buyers.
     * - minOccurs: 0
     * @var string
     */
    public $CommentType;
    /**
     * The TargetUser
     * Meta information extracted from the WSDL
     * - documentation: This eBay User ID identifies the recipient user for whom the feedback is being left. This field is required in <b>CompleteSale</b> if the <b>FeedbackInfo</b> container is used. | This is a string wrapper for the eBay ID that uniquely
     * identifies a user. This is used by several other types to identify a specific eBay user, such as DisputeType.xsd, FeedbackInfoType.xsd, GetAllBidders, OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to protect
     * bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the seller's item will be returned. If a bidder makes this API call, the bidder's actual ID will be returned, but information for all competing bidders or outside
     * watchers will be returned as anonymized userIDs.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $TargetUser;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for FeedbackInfoType
     * @uses FeedbackInfoType::setCommentText()
     * @uses FeedbackInfoType::setCommentType()
     * @uses FeedbackInfoType::setTargetUser()
     * @uses FeedbackInfoType::setAny()
     * @param string $commentText
     * @param string $commentType
     * @param string $targetUser
     * @param \DOMDocument $any
     */
    public function __construct($commentText = null, $commentType = null, $targetUser = null, \DOMDocument $any = null)
    {
        $this
            ->setCommentText($commentText)
            ->setCommentType($commentType)
            ->setTargetUser($targetUser)
            ->setAny($any);
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
     * @return \StructType\FeedbackInfoType
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
     * @return \StructType\FeedbackInfoType
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
     * Get TargetUser value
     * @return string|null
     */
    public function getTargetUser()
    {
        return $this->TargetUser;
    }
    /**
     * Set TargetUser value
     * @param string $targetUser
     * @return \StructType\FeedbackInfoType
     */
    public function setTargetUser($targetUser = null)
    {
        // validation for constraint: string
        if (!is_null($targetUser) && !is_string($targetUser)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetUser, true), gettype($targetUser)), __LINE__);
        }
        $this->TargetUser = $targetUser;
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
     * @return \StructType\FeedbackInfoType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
