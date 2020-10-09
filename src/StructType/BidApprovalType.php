<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BidApprovalType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class BidApprovalType extends AbstractStructBase
{
    /**
     * The UserID
     * Meta information extracted from the WSDL
     * - documentation: This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay user, such as DisputeType.xsd, FeedbackInfoType.xsd, GetAllBidders, OrderType, and so on.
     * <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the seller's item will be returned. If a bidder makes this API call, the bidder's
     * actual ID will be returned, but information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $UserID;
    /**
     * The ApprovedBiddingLimit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $ApprovedBiddingLimit;
    /**
     * The DeclinedComment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DeclinedComment;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for BidApprovalType
     * @uses BidApprovalType::setUserID()
     * @uses BidApprovalType::setApprovedBiddingLimit()
     * @uses BidApprovalType::setDeclinedComment()
     * @uses BidApprovalType::setStatus()
     * @uses BidApprovalType::setAny()
     * @param string $userID
     * @param \StructType\AmountType $approvedBiddingLimit
     * @param string $declinedComment
     * @param string $status
     * @param \DOMDocument $any
     */
    public function __construct($userID = null, \StructType\AmountType $approvedBiddingLimit = null, $declinedComment = null, $status = null, \DOMDocument $any = null)
    {
        $this
            ->setUserID($userID)
            ->setApprovedBiddingLimit($approvedBiddingLimit)
            ->setDeclinedComment($declinedComment)
            ->setStatus($status)
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
     * @return \StructType\BidApprovalType
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
     * Get ApprovedBiddingLimit value
     * @return \StructType\AmountType|null
     */
    public function getApprovedBiddingLimit()
    {
        return $this->ApprovedBiddingLimit;
    }
    /**
     * Set ApprovedBiddingLimit value
     * @param \StructType\AmountType $approvedBiddingLimit
     * @return \StructType\BidApprovalType
     */
    public function setApprovedBiddingLimit(\StructType\AmountType $approvedBiddingLimit = null)
    {
        $this->ApprovedBiddingLimit = $approvedBiddingLimit;
        return $this;
    }
    /**
     * Get DeclinedComment value
     * @return string|null
     */
    public function getDeclinedComment()
    {
        return $this->DeclinedComment;
    }
    /**
     * Set DeclinedComment value
     * @param string $declinedComment
     * @return \StructType\BidApprovalType
     */
    public function setDeclinedComment($declinedComment = null)
    {
        // validation for constraint: string
        if (!is_null($declinedComment) && !is_string($declinedComment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($declinedComment, true), gettype($declinedComment)), __LINE__);
        }
        $this->DeclinedComment = $declinedComment;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \EnumType\BidderStatusCodeType::valueIsValid()
     * @uses \EnumType\BidderStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \StructType\BidApprovalType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BidderStatusCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\BidderStatusCodeType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \EnumType\BidderStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
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
     * @return \StructType\BidApprovalType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
