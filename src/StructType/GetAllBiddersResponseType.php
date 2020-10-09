<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllBiddersResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Includes detailed bidding data for the auction listing that was specified in the request. Unless the listing is private, the actual eBay user IDs of all bidders are returned if the listing's seller makes this API call. If a bidder
 * makes this API call, only that bidder's eBay user ID is returned, and the rest of the bidder's user IDs are anonymized.
 * @subpackage Structs
 */
class GetAllBiddersResponseType extends AbstractResponseType
{
    /**
     * The BidArray
     * Meta information extracted from the WSDL
     * - documentation: This container consists of an array of bids made on the specified auction listing. Each <b>OfferType</b> object represents the data for one bid.
     * - minOccurs: 0
     * @var \ArrayType\OfferArrayType
     */
    public $BidArray;
    /**
     * The HighBidder
     * Meta information extracted from the WSDL
     * - documentation: The eBay user ID for the user with the winning bid (if auction has ended) or current highest bid (if auction is still active). The seller should take note of or save this User ID as this user may be a a Second Chance Offer candidate.
     * | This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay user, such as DisputeType.xsd, FeedbackInfoType.xsd, GetAllBidders, OrderType, and so on. <br><br>For
     * GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the seller's item will be returned. If a bidder makes this API call, the bidder's actual ID will
     * be returned, but information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $HighBidder;
    /**
     * The HighestBid
     * Meta information extracted from the WSDL
     * - documentation: This is the dollar amount of the winning bid (if auction has ended) or dollar amount of the current highest bid (if auction is still active).
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $HighestBid;
    /**
     * The ListingStatus
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the listing status of the specified listing.
     * - minOccurs: 0
     * @var string
     */
    public $ListingStatus;
    /**
     * Constructor method for GetAllBiddersResponseType
     * @uses GetAllBiddersResponseType::setBidArray()
     * @uses GetAllBiddersResponseType::setHighBidder()
     * @uses GetAllBiddersResponseType::setHighestBid()
     * @uses GetAllBiddersResponseType::setListingStatus()
     * @param \ArrayType\OfferArrayType $bidArray
     * @param string $highBidder
     * @param \StructType\AmountType $highestBid
     * @param string $listingStatus
     */
    public function __construct(\ArrayType\OfferArrayType $bidArray = null, $highBidder = null, \StructType\AmountType $highestBid = null, $listingStatus = null)
    {
        $this
            ->setBidArray($bidArray)
            ->setHighBidder($highBidder)
            ->setHighestBid($highestBid)
            ->setListingStatus($listingStatus);
    }
    /**
     * Get BidArray value
     * @return \ArrayType\OfferArrayType|null
     */
    public function getBidArray()
    {
        return $this->BidArray;
    }
    /**
     * Set BidArray value
     * @param \ArrayType\OfferArrayType $bidArray
     * @return \StructType\GetAllBiddersResponseType
     */
    public function setBidArray(\ArrayType\OfferArrayType $bidArray = null)
    {
        $this->BidArray = $bidArray;
        return $this;
    }
    /**
     * Get HighBidder value
     * @return string|null
     */
    public function getHighBidder()
    {
        return $this->HighBidder;
    }
    /**
     * Set HighBidder value
     * @param string $highBidder
     * @return \StructType\GetAllBiddersResponseType
     */
    public function setHighBidder($highBidder = null)
    {
        // validation for constraint: string
        if (!is_null($highBidder) && !is_string($highBidder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($highBidder, true), gettype($highBidder)), __LINE__);
        }
        $this->HighBidder = $highBidder;
        return $this;
    }
    /**
     * Get HighestBid value
     * @return \StructType\AmountType|null
     */
    public function getHighestBid()
    {
        return $this->HighestBid;
    }
    /**
     * Set HighestBid value
     * @param \StructType\AmountType $highestBid
     * @return \StructType\GetAllBiddersResponseType
     */
    public function setHighestBid(\StructType\AmountType $highestBid = null)
    {
        $this->HighestBid = $highestBid;
        return $this;
    }
    /**
     * Get ListingStatus value
     * @return string|null
     */
    public function getListingStatus()
    {
        return $this->ListingStatus;
    }
    /**
     * Set ListingStatus value
     * @uses \EnumType\ListingStatusCodeType::valueIsValid()
     * @uses \EnumType\ListingStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $listingStatus
     * @return \StructType\GetAllBiddersResponseType
     */
    public function setListingStatus($listingStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ListingStatusCodeType::valueIsValid($listingStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ListingStatusCodeType', is_array($listingStatus) ? implode(', ', $listingStatus) : var_export($listingStatus, true), implode(', ', \EnumType\ListingStatusCodeType::getValidValues())), __LINE__);
        }
        $this->ListingStatus = $listingStatus;
        return $this;
    }
}
