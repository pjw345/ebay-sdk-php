<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMessagePreferencesRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns a seller's Ask Seller a Question (ASQ) subjects, each in its own <b>Subject</b> field.
 * @subpackage Structs
 */
class GetMessagePreferencesRequestType extends AbstractRequestType
{
    /**
     * The SellerID
     * Meta information extracted from the WSDL
     * - documentation: The eBay user ID of the seller to retrieve ASQ subjects for. A user can retrieve their own ASQ subjects or those of another eBay user with a seller account. | This is a string wrapper for the eBay ID that uniquely identifies a user.
     * This is used by several other types to identify a specific eBay user, such as DisputeType.xsd, FeedbackInfoType.xsd, GetAllBidders, OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud.
     * If the seller makes this API call, the actual IDs of all bidders on the seller's item will be returned. If a bidder makes this API call, the bidder's actual ID will be returned, but information for all competing bidders or outside watchers will be
     * returned as anonymized userIDs.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $SellerID;
    /**
     * The IncludeASQPreferences
     * Meta information extracted from the WSDL
     * - documentation: This field must be included and set to <code>true</code> to retrieve the ASQ subjects for the specified eBay user.
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeASQPreferences;
    /**
     * Constructor method for GetMessagePreferencesRequestType
     * @uses GetMessagePreferencesRequestType::setSellerID()
     * @uses GetMessagePreferencesRequestType::setIncludeASQPreferences()
     * @param string $sellerID
     * @param bool $includeASQPreferences
     */
    public function __construct($sellerID = null, $includeASQPreferences = null)
    {
        $this
            ->setSellerID($sellerID)
            ->setIncludeASQPreferences($includeASQPreferences);
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
     * @return \StructType\GetMessagePreferencesRequestType
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
    /**
     * Get IncludeASQPreferences value
     * @return bool|null
     */
    public function getIncludeASQPreferences()
    {
        return $this->IncludeASQPreferences;
    }
    /**
     * Set IncludeASQPreferences value
     * @param bool $includeASQPreferences
     * @return \StructType\GetMessagePreferencesRequestType
     */
    public function setIncludeASQPreferences($includeASQPreferences = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeASQPreferences) && !is_bool($includeASQPreferences)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeASQPreferences, true), gettype($includeASQPreferences)), __LINE__);
        }
        $this->IncludeASQPreferences = $includeASQPreferences;
        return $this;
    }
}
