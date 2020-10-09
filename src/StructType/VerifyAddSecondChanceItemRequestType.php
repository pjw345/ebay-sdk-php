<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifyAddSecondChanceItemRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Simulates the creation of a new Second Chance Offer listing of an item without actually creating a listing.
 * @subpackage Structs
 */
class VerifyAddSecondChanceItemRequestType extends AbstractRequestType
{
    /**
     * The RecipientBidderUserID
     * Meta information extracted from the WSDL
     * - documentation: Specifies the bidder from the original, ended listing to whom the seller is extending the second chance offer. Specify only one <b>RecipientBidderUserID</b> per call. If multiple users are specified (each in a
     * <b>RecipientBidderUserID</b> node), only the last one specified receives the offer. | This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay user, such as
     * DisputeType.xsd, FeedbackInfoType.xsd, GetAllBidders, OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the
     * seller's item will be returned. If a bidder makes this API call, the bidder's actual ID will be returned, but information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $RecipientBidderUserID;
    /**
     * The BuyItNowPrice
     * Meta information extracted from the WSDL
     * - documentation: Specifies the amount the offer recipient must pay to purchase the item from the Second Chance Offer listing. Use only when the original item was an eBay Motors (or in some categories on U.S. and international sites for high-priced
     * items, such as items in many U.S. and Canada Business and Industrial categories) and it ended unsold because the reserve price was not met. Call fails with an error for any other item conditions.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $BuyItNowPrice;
    /**
     * The Duration
     * Meta information extracted from the WSDL
     * - documentation: Specifies the length of time the Second Chance Offer listing will be active. The recipient bidder has that much time to purchase the item or the listing expires.
     * - minOccurs: 0
     * @var string
     */
    public $Duration;
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: This field is used to identify the recently-ended auction listing for which a Second Chance Offer will be made to one of the non-winning bidders on the recently-ended auction listing. | Type that represents the unique identifier for
     * an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The SellerMessage
     * Meta information extracted from the WSDL
     * - documentation: Message content. Cannot contain HTML, asterisks, or quotes. This content is included in the Second Chance Offer email sent to the recipient, which can be retrieved with <b>GetMyMessages</b>.
     * - minOccurs: 0
     * @var string
     */
    public $SellerMessage;
    /**
     * Constructor method for VerifyAddSecondChanceItemRequestType
     * @uses VerifyAddSecondChanceItemRequestType::setRecipientBidderUserID()
     * @uses VerifyAddSecondChanceItemRequestType::setBuyItNowPrice()
     * @uses VerifyAddSecondChanceItemRequestType::setDuration()
     * @uses VerifyAddSecondChanceItemRequestType::setItemID()
     * @uses VerifyAddSecondChanceItemRequestType::setSellerMessage()
     * @param string $recipientBidderUserID
     * @param \StructType\AmountType $buyItNowPrice
     * @param string $duration
     * @param string $itemID
     * @param string $sellerMessage
     */
    public function __construct($recipientBidderUserID = null, \StructType\AmountType $buyItNowPrice = null, $duration = null, $itemID = null, $sellerMessage = null)
    {
        $this
            ->setRecipientBidderUserID($recipientBidderUserID)
            ->setBuyItNowPrice($buyItNowPrice)
            ->setDuration($duration)
            ->setItemID($itemID)
            ->setSellerMessage($sellerMessage);
    }
    /**
     * Get RecipientBidderUserID value
     * @return string|null
     */
    public function getRecipientBidderUserID()
    {
        return $this->RecipientBidderUserID;
    }
    /**
     * Set RecipientBidderUserID value
     * @param string $recipientBidderUserID
     * @return \StructType\VerifyAddSecondChanceItemRequestType
     */
    public function setRecipientBidderUserID($recipientBidderUserID = null)
    {
        // validation for constraint: string
        if (!is_null($recipientBidderUserID) && !is_string($recipientBidderUserID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientBidderUserID, true), gettype($recipientBidderUserID)), __LINE__);
        }
        $this->RecipientBidderUserID = $recipientBidderUserID;
        return $this;
    }
    /**
     * Get BuyItNowPrice value
     * @return \StructType\AmountType|null
     */
    public function getBuyItNowPrice()
    {
        return $this->BuyItNowPrice;
    }
    /**
     * Set BuyItNowPrice value
     * @param \StructType\AmountType $buyItNowPrice
     * @return \StructType\VerifyAddSecondChanceItemRequestType
     */
    public function setBuyItNowPrice(\StructType\AmountType $buyItNowPrice = null)
    {
        $this->BuyItNowPrice = $buyItNowPrice;
        return $this;
    }
    /**
     * Get Duration value
     * @return string|null
     */
    public function getDuration()
    {
        return $this->Duration;
    }
    /**
     * Set Duration value
     * @uses \EnumType\SecondChanceOfferDurationCodeType::valueIsValid()
     * @uses \EnumType\SecondChanceOfferDurationCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $duration
     * @return \StructType\VerifyAddSecondChanceItemRequestType
     */
    public function setDuration($duration = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SecondChanceOfferDurationCodeType::valueIsValid($duration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SecondChanceOfferDurationCodeType', is_array($duration) ? implode(', ', $duration) : var_export($duration, true), implode(', ', \EnumType\SecondChanceOfferDurationCodeType::getValidValues())), __LINE__);
        }
        $this->Duration = $duration;
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
     * @return \StructType\VerifyAddSecondChanceItemRequestType
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
     * Get SellerMessage value
     * @return string|null
     */
    public function getSellerMessage()
    {
        return $this->SellerMessage;
    }
    /**
     * Set SellerMessage value
     * @param string $sellerMessage
     * @return \StructType\VerifyAddSecondChanceItemRequestType
     */
    public function setSellerMessage($sellerMessage = null)
    {
        // validation for constraint: string
        if (!is_null($sellerMessage) && !is_string($sellerMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerMessage, true), gettype($sellerMessage)), __LINE__);
        }
        $this->SellerMessage = $sellerMessage;
        return $this;
    }
}
