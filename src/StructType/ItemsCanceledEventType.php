<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemsCanceledEventType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ItemsCanceledEventType extends AbstractResponseType
{
    /**
     * The CanceledItemIDArray
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\ItemIDArrayType
     */
    public $CanceledItemIDArray;
    /**
     * The EligibleForRelist
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $EligibleForRelist;
    /**
     * The SellerID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated. | This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay user, such as DisputeType.xsd, FeedbackInfoType.xsd, GetAllBidders,
     * OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the seller's item will be returned. If a bidder makes this API
     * call, the bidder's actual ID will be returned, but information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $SellerID;
    /**
     * Constructor method for ItemsCanceledEventType
     * @uses ItemsCanceledEventType::setCanceledItemIDArray()
     * @uses ItemsCanceledEventType::setEligibleForRelist()
     * @uses ItemsCanceledEventType::setSellerID()
     * @param \StructType\ItemIDArrayType $canceledItemIDArray
     * @param bool $eligibleForRelist
     * @param string $sellerID
     */
    public function __construct(\StructType\ItemIDArrayType $canceledItemIDArray = null, $eligibleForRelist = null, $sellerID = null)
    {
        $this
            ->setCanceledItemIDArray($canceledItemIDArray)
            ->setEligibleForRelist($eligibleForRelist)
            ->setSellerID($sellerID);
    }
    /**
     * Get CanceledItemIDArray value
     * @return \StructType\ItemIDArrayType|null
     */
    public function getCanceledItemIDArray()
    {
        return $this->CanceledItemIDArray;
    }
    /**
     * Set CanceledItemIDArray value
     * @param \StructType\ItemIDArrayType $canceledItemIDArray
     * @return \StructType\ItemsCanceledEventType
     */
    public function setCanceledItemIDArray(\StructType\ItemIDArrayType $canceledItemIDArray = null)
    {
        $this->CanceledItemIDArray = $canceledItemIDArray;
        return $this;
    }
    /**
     * Get EligibleForRelist value
     * @return bool|null
     */
    public function getEligibleForRelist()
    {
        return $this->EligibleForRelist;
    }
    /**
     * Set EligibleForRelist value
     * @param bool $eligibleForRelist
     * @return \StructType\ItemsCanceledEventType
     */
    public function setEligibleForRelist($eligibleForRelist = null)
    {
        // validation for constraint: boolean
        if (!is_null($eligibleForRelist) && !is_bool($eligibleForRelist)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eligibleForRelist, true), gettype($eligibleForRelist)), __LINE__);
        }
        $this->EligibleForRelist = $eligibleForRelist;
        return $this;
    }
    /**
     * Get SellerID value
     * @return string|null
     */
    public function getSellerID()
    {
        return $this->SellerID;
    }
    /**
     * Set SellerID value
     * @param string $sellerID
     * @return \StructType\ItemsCanceledEventType
     */
    public function setSellerID($sellerID = null)
    {
        // validation for constraint: string
        if (!is_null($sellerID) && !is_string($sellerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerID, true), gettype($sellerID)), __LINE__);
        }
        $this->SellerID = $sellerID;
        return $this;
    }
}
