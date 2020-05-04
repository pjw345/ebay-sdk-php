<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserPreferencesResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains some or all of the authenticated user's preferences. The preferences are grouped in sets and are returned according to the flag settings in the request.
 * @subpackage Structs
 */
class GetUserPreferencesResponseType extends AbstractResponseType
{
    /**
     * The BidderNoticePreferences
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of the seller's preference for receiving contact information for unsuccessful bidders. This container is returned when <b>ShowBidderNoticePreferences</b> is included and set to <code>true</code> in the request.
     * This preference is only applicable for auction listings.
     * - minOccurs: 0
     * @var \StructType\BidderNoticePreferencesType
     */
    public $BidderNoticePreferences;
    /**
     * The CombinedPaymentPreferences
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of the seller's Combined Invoice preferences. These preferences are used to allow Combined Invoice orders. This container is returned when <b>ShowCombinedPaymentPreferences</b> is included and set to
     * <code>true</code> in the request.
     * - minOccurs: 0
     * @var \StructType\CombinedPaymentPreferencesType
     */
    public $CombinedPaymentPreferences;
    /**
     * The CrossPromotionPreferences
     * Meta information extracted from the WSDL
     * - documentation: This container is deprecated.
     * - minOccurs: 0
     * @var \StructType\CrossPromotionPreferencesType
     */
    public $CrossPromotionPreferences;
    /**
     * The SellerPaymentPreferences
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of the seller's payment preferences. This container is returned when <b>ShowSellerPaymentPreferences</b> is included and set to <code>true</code> in the request.
     * - minOccurs: 0
     * @var \StructType\SellerPaymentPreferencesType
     */
    public $SellerPaymentPreferences;
    /**
     * The SellerFavoriteItemPreferences
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of the seller's preferences for displaying items on a buyer's Favorite Sellers' Items page or Favorite Sellers' Items digest. This container is returned when <b>ShowSellerFavoriteItemPreferences</b> is included
     * and set to <code>true</code> in the request.
     * - minOccurs: 0
     * @var \StructType\SellerFavoriteItemPreferencesType
     */
    public $SellerFavoriteItemPreferences;
    /**
     * The EndOfAuctionEmailPreferences
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of the seller's preferences for the end-of-auction email sent to the winning bidder. This container is returned when <b>ShowEndOfAuctionEmailPreferences</b> is included and set to <code>true</code> in the
     * request. These preferences are only applicable for auction listings.
     * - minOccurs: 0
     * @var \StructType\EndOfAuctionEmailPreferencesType
     */
    public $EndOfAuctionEmailPreferences;
    /**
     * The EmailShipmentTrackingNumberPreference
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of the seller's preference for sending an email to the buyer with the shipment tracking number. This container is returned when <b>ShowEmailShipmentTrackingNumberPreference</b> is included and set to
     * <code>true</code> in the request.
     * - minOccurs: 0
     * @var bool
     */
    public $EmailShipmentTrackingNumberPreference;
    /**
     * The RequiredShipPhoneNumberPreference
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of the seller's preference for requiring that the buyer supply a shipping phone number upon checkout. Some shipping carriers require the receiver's phone number. This container is returned when
     * <b>ShowRequiredShipPhoneNumberPreference</b> is included and set to <code>true</code> in the request.
     * - minOccurs: 0
     * @var bool
     */
    public $RequiredShipPhoneNumberPreference;
    /**
     * The ProStoresPreference
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\ProStoresCheckoutPreferenceType
     */
    public $ProStoresPreference;
    /**
     * The UnpaidItemAssistancePreferences
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of a seller's Unpaid Item Assistant preferences. The Unpaid Item Assistant automatically opens an Unpaid Item dispute on the behalf of the seller. This container is returned if
     * <b>ShowUnpaidItemAssistancePreference</b> is included and set to <code>true</code> in the request. <br><br> <span class="tablenote"><b>Note:</b> To return the list of buyers excluded from the Unpaid Item Assistant mechanism, the
     * <b>ShowUnpaidItemAssistanceExclusionList</b> field must also be included and set to <code>true</code> in the request. Excluded buyers can be viewed in the <b>UnpaidItemAssistancePreferences.ExcludedUser</b> field. </span>
     * - minOccurs: 0
     * @var \StructType\UnpaidItemAssistancePreferencesType
     */
    public $UnpaidItemAssistancePreferences;
    /**
     * The SellerExcludeShipToLocationPreferences
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of a list of the seller's excluded shipping locations. The returned list mirrors the seller's current <a href="http://cgi5.ebay.com/ws/eBayISAPI.dll?ExcludeShippingList" target="_blank">Exclude shipping
     * locations</a> list in My eBay's shipping preferences. An excluded shipping location in My eBay can be an entire geographical region (such as Middle East) or only an individual country (such as Iraq). <br/><br/> Sellers can override these default
     * settings for an individual listing by using the <b>Item.ShippingDetails.ExcludeShipToLocation</b> field in the Add/Revise/Relist calls. This container is returned if the <b>ShowSellerExcludeShipToLocationPreference</b> field is included and set to
     * <code>true</code> in the request.
     * - minOccurs: 0
     * @var \StructType\SellerExcludeShipToLocationPreferencesType
     */
    public $SellerExcludeShipToLocationPreferences;
    /**
     * The PurchaseReminderEmailPreferences
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of a seller's preference for sending a purchase reminder email to buyers. This container is returned if the <b>ShowPurchaseReminderEmailPreferences</b> field is included and set to <code>true</code> in the
     * request.
     * - minOccurs: 0
     * @var \StructType\PurchaseReminderEmailPreferencesType
     */
    public $PurchaseReminderEmailPreferences;
    /**
     * The SellerThirdPartyCheckoutDisabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated along with third-party checkout.
     * - minOccurs: 0
     * @var bool
     */
    public $SellerThirdPartyCheckoutDisabled;
    /**
     * The SellerProfilePreferences
     * Meta information extracted from the WSDL
     * - documentation: Parent response container consisting of high-level information for all Business Policies defined for the user's account. This container is returned if <b>ShowSellerProfilePreferences</b> is included and set to <code>true</code> in
     * the <b>GetUserPreferences</b> request (and one or more Business Policies are defined for the user's account).
     * - minOccurs: 0
     * @var \StructType\SellerProfilePreferencesType
     */
    public $SellerProfilePreferences;
    /**
     * The SellerReturnPreferences
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of the <b>OptedIn</b> flag that indicates whether or not the seller has opted in to eBay Managed Returns. This container is only returned if <b>ShowSellerReturnPreferences</b> is included and set to
     * <code>true</code> in the request.
     * - minOccurs: 0
     * @var \StructType\SellerReturnPreferencesType
     */
    public $SellerReturnPreferences;
    /**
     * The OfferGlobalShippingProgramPreference
     * Meta information extracted from the WSDL
     * - documentation: This flag indicates whether the seller has opted in to the Global Shipping Program and is able to offer global shipping to international buyers. Returned when <b>ShowGlobalShippingProgramPreference</b> is included and set to
     * <code>true</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $OfferGlobalShippingProgramPreference;
    /**
     * The DispatchCutoffTimePreference
     * Meta information extracted from the WSDL
     * - documentation: Contains information about a seller's order cutoff time preferences for same-day shipping. If the seller specifies a value of '0' in <b>Item.DispatchTimeMax</b> to offer same-day handling when listing an item, the seller's shipping
     * time commitment depends on the order cutoff time set for the listing site, as indicated by <b>DispatchCutoffTimePreference.CutoffTime</b>. Returned when <b>ShowDispatchCutoffTimePreferences</b> is included and set to <code>true</code>. <br> <br>
     * <span class="tablenote"><b>Note:</b> For sellers opted in to the feature that supports different order cutoff times for each business day, the order cutoff time returned in this container may not be accurate. In order for the seller to confirm the
     * actual order cutoff time for same-day handling, that seller should view Shipping Preferences in My eBay. </span> <br>
     * - minOccurs: 0
     * @var \StructType\DispatchCutoffTimePreferencesType
     */
    public $DispatchCutoffTimePreference;
    /**
     * The GlobalShippingProgramListingPreference
     * Meta information extracted from the WSDL
     * - documentation: If the <b>ShowGlobalShippingProgramListingPreference</b> field is submitted and set to <code>true</code>, this flag is returned. A returned value of <code>true</code> indicates that the seller's new listings will enable the Global
     * Shipping Program by default.
     * - minOccurs: 0
     * @var bool
     */
    public $GlobalShippingProgramListingPreference;
    /**
     * The OverrideGSPServiceWithIntlServicePreference
     * Meta information extracted from the WSDL
     * - documentation: If the <b>ShowOverrideGSPServiceWithIntlServicePreference</b> field is submitted and set to <code>true</code>, this flag is returned. A returned value of <code>true</code> indicates that for the seller's listings that specify an
     * international shipping service for any Global Shipping-eligible country, the specified service will take precedence and be the listing's default international shipping option for buyers in that country, rather than the Global Shipping Program.
     * <br/><br/> A returned value of <code>false</code> indicates that the Global Shipping program will take precedence over any international shipping service as the default option in Global Shipping-eligible listings for shipping to any Global
     * Shipping-eligible country.
     * - minOccurs: 0
     * @var bool
     */
    public $OverrideGSPServiceWithIntlServicePreference;
    /**
     * The PickupDropoffSellerPreference
     * Meta information extracted from the WSDL
     * - documentation: This boolean field is returned if the <b>ShowPickupDropoffPreferences</b> field is included and set to <code>true</code> in the request. This field will be returned as <code>true</code> if the seller has enabled the Click and Collect
     * feature at the account level. All of the seller's new listings will by default be eligible to be evaluated for the Click and Collect feature. With the Click and Collect feature, a buyer can purchase certain items on eBay and collect them at a local
     * store. Buyers are notified by eBay once their items are available. The Click and Collect feature is only available to large merchants on the eBay UK (site ID 3), eBay Australia (Site ID 15), and eBay Germany (Site ID 77) sites. <br/><br/> <span
     * class="tablenote"><b>Note:</b> The Click and Collect program no longer allows sellers to set the Click and Collect preference at the listing level. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $PickupDropoffSellerPreference;
    /**
     * The OutOfStockControlPreference
     * Meta information extracted from the WSDL
     * - documentation: This boolean field is returned if the <b>ShowOutOfStockControlPreference</b> field is included and set to <code>true</code> in the request. This field will be returned as <code>true</code> if the seller has set <a
     * href="SetUserPreferences.html#Request.OutOfStockControlPreference">SetUserPreferences.OutOfStockControlPreference</a> to <code>true</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $OutOfStockControlPreference;
    /**
     * The eBayPLUSPreference
     * Meta information extracted from the WSDL
     * - documentation: Contains information about each country where the seller is eligible to offer eBay Plus on listings (one <strong>eBayPLUSPreference</strong> container per country), as well as the seller's opt-in status and listing preference for
     * each country. <br/><br/> eBay Plus is a premium account option for buyers, which provides benefits such as fast free domestic shipping and free returns on selected items. Top Rated eBay sellers must opt in to eBay Plus to offer the program on a
     * per-listing basis. <br/><br/> <span class="tablenote"> <strong>Note:</strong> Currently, eBay Plus is available only to buyers in Germany, Austria, and Australia. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EBayPLUSPreferenceType[]
     */
    public $eBayPLUSPreference;
    /**
     * Constructor method for GetUserPreferencesResponseType
     * @uses GetUserPreferencesResponseType::setBidderNoticePreferences()
     * @uses GetUserPreferencesResponseType::setCombinedPaymentPreferences()
     * @uses GetUserPreferencesResponseType::setCrossPromotionPreferences()
     * @uses GetUserPreferencesResponseType::setSellerPaymentPreferences()
     * @uses GetUserPreferencesResponseType::setSellerFavoriteItemPreferences()
     * @uses GetUserPreferencesResponseType::setEndOfAuctionEmailPreferences()
     * @uses GetUserPreferencesResponseType::setEmailShipmentTrackingNumberPreference()
     * @uses GetUserPreferencesResponseType::setRequiredShipPhoneNumberPreference()
     * @uses GetUserPreferencesResponseType::setProStoresPreference()
     * @uses GetUserPreferencesResponseType::setUnpaidItemAssistancePreferences()
     * @uses GetUserPreferencesResponseType::setSellerExcludeShipToLocationPreferences()
     * @uses GetUserPreferencesResponseType::setPurchaseReminderEmailPreferences()
     * @uses GetUserPreferencesResponseType::setSellerThirdPartyCheckoutDisabled()
     * @uses GetUserPreferencesResponseType::setSellerProfilePreferences()
     * @uses GetUserPreferencesResponseType::setSellerReturnPreferences()
     * @uses GetUserPreferencesResponseType::setOfferGlobalShippingProgramPreference()
     * @uses GetUserPreferencesResponseType::setDispatchCutoffTimePreference()
     * @uses GetUserPreferencesResponseType::setGlobalShippingProgramListingPreference()
     * @uses GetUserPreferencesResponseType::setOverrideGSPServiceWithIntlServicePreference()
     * @uses GetUserPreferencesResponseType::setPickupDropoffSellerPreference()
     * @uses GetUserPreferencesResponseType::setOutOfStockControlPreference()
     * @uses GetUserPreferencesResponseType::setEBayPLUSPreference()
     * @param \StructType\BidderNoticePreferencesType $bidderNoticePreferences
     * @param \StructType\CombinedPaymentPreferencesType $combinedPaymentPreferences
     * @param \StructType\CrossPromotionPreferencesType $crossPromotionPreferences
     * @param \StructType\SellerPaymentPreferencesType $sellerPaymentPreferences
     * @param \StructType\SellerFavoriteItemPreferencesType $sellerFavoriteItemPreferences
     * @param \StructType\EndOfAuctionEmailPreferencesType $endOfAuctionEmailPreferences
     * @param bool $emailShipmentTrackingNumberPreference
     * @param bool $requiredShipPhoneNumberPreference
     * @param \StructType\ProStoresCheckoutPreferenceType $proStoresPreference
     * @param \StructType\UnpaidItemAssistancePreferencesType $unpaidItemAssistancePreferences
     * @param \StructType\SellerExcludeShipToLocationPreferencesType $sellerExcludeShipToLocationPreferences
     * @param \StructType\PurchaseReminderEmailPreferencesType $purchaseReminderEmailPreferences
     * @param bool $sellerThirdPartyCheckoutDisabled
     * @param \StructType\SellerProfilePreferencesType $sellerProfilePreferences
     * @param \StructType\SellerReturnPreferencesType $sellerReturnPreferences
     * @param bool $offerGlobalShippingProgramPreference
     * @param \StructType\DispatchCutoffTimePreferencesType $dispatchCutoffTimePreference
     * @param bool $globalShippingProgramListingPreference
     * @param bool $overrideGSPServiceWithIntlServicePreference
     * @param bool $pickupDropoffSellerPreference
     * @param bool $outOfStockControlPreference
     * @param \StructType\EBayPLUSPreferenceType[] $eBayPLUSPreference
     */
    public function __construct(\StructType\BidderNoticePreferencesType $bidderNoticePreferences = null, \StructType\CombinedPaymentPreferencesType $combinedPaymentPreferences = null, \StructType\CrossPromotionPreferencesType $crossPromotionPreferences = null, \StructType\SellerPaymentPreferencesType $sellerPaymentPreferences = null, \StructType\SellerFavoriteItemPreferencesType $sellerFavoriteItemPreferences = null, \StructType\EndOfAuctionEmailPreferencesType $endOfAuctionEmailPreferences = null, $emailShipmentTrackingNumberPreference = null, $requiredShipPhoneNumberPreference = null, \StructType\ProStoresCheckoutPreferenceType $proStoresPreference = null, \StructType\UnpaidItemAssistancePreferencesType $unpaidItemAssistancePreferences = null, \StructType\SellerExcludeShipToLocationPreferencesType $sellerExcludeShipToLocationPreferences = null, \StructType\PurchaseReminderEmailPreferencesType $purchaseReminderEmailPreferences = null, $sellerThirdPartyCheckoutDisabled = null, \StructType\SellerProfilePreferencesType $sellerProfilePreferences = null, \StructType\SellerReturnPreferencesType $sellerReturnPreferences = null, $offerGlobalShippingProgramPreference = null, \StructType\DispatchCutoffTimePreferencesType $dispatchCutoffTimePreference = null, $globalShippingProgramListingPreference = null, $overrideGSPServiceWithIntlServicePreference = null, $pickupDropoffSellerPreference = null, $outOfStockControlPreference = null, array $eBayPLUSPreference = array())
    {
        $this
            ->setBidderNoticePreferences($bidderNoticePreferences)
            ->setCombinedPaymentPreferences($combinedPaymentPreferences)
            ->setCrossPromotionPreferences($crossPromotionPreferences)
            ->setSellerPaymentPreferences($sellerPaymentPreferences)
            ->setSellerFavoriteItemPreferences($sellerFavoriteItemPreferences)
            ->setEndOfAuctionEmailPreferences($endOfAuctionEmailPreferences)
            ->setEmailShipmentTrackingNumberPreference($emailShipmentTrackingNumberPreference)
            ->setRequiredShipPhoneNumberPreference($requiredShipPhoneNumberPreference)
            ->setProStoresPreference($proStoresPreference)
            ->setUnpaidItemAssistancePreferences($unpaidItemAssistancePreferences)
            ->setSellerExcludeShipToLocationPreferences($sellerExcludeShipToLocationPreferences)
            ->setPurchaseReminderEmailPreferences($purchaseReminderEmailPreferences)
            ->setSellerThirdPartyCheckoutDisabled($sellerThirdPartyCheckoutDisabled)
            ->setSellerProfilePreferences($sellerProfilePreferences)
            ->setSellerReturnPreferences($sellerReturnPreferences)
            ->setOfferGlobalShippingProgramPreference($offerGlobalShippingProgramPreference)
            ->setDispatchCutoffTimePreference($dispatchCutoffTimePreference)
            ->setGlobalShippingProgramListingPreference($globalShippingProgramListingPreference)
            ->setOverrideGSPServiceWithIntlServicePreference($overrideGSPServiceWithIntlServicePreference)
            ->setPickupDropoffSellerPreference($pickupDropoffSellerPreference)
            ->setOutOfStockControlPreference($outOfStockControlPreference)
            ->setEBayPLUSPreference($eBayPLUSPreference);
    }
    /**
     * Get BidderNoticePreferences value
     * @return \StructType\BidderNoticePreferencesType|null
     */
    public function getBidderNoticePreferences()
    {
        return $this->BidderNoticePreferences;
    }
    /**
     * Set BidderNoticePreferences value
     * @param \StructType\BidderNoticePreferencesType $bidderNoticePreferences
     * @return \StructType\GetUserPreferencesResponseType
     */
    public function setBidderNoticePreferences(\StructType\BidderNoticePreferencesType $bidderNoticePreferences = null)
    {
        $this->BidderNoticePreferences = $bidderNoticePreferences;
        return $this;
    }
    /**
     * Get CombinedPaymentPreferences value
     * @return \StructType\CombinedPaymentPreferencesType|null
     */
    public function getCombinedPaymentPreferences()
    {
        return $this->CombinedPaymentPreferences;
    }
    /**
     * Set CombinedPaymentPreferences value
     * @param \StructType\CombinedPaymentPreferencesType $combinedPaymentPreferences
     * @return \StructType\GetUserPreferencesResponseType
     */
    public function setCombinedPaymentPreferences(\StructType\CombinedPaymentPreferencesType $combinedPaymentPreferences = null)
    {
        $this->CombinedPaymentPreferences = $combinedPaymentPreferences;
        return $this;
    }
    /**
     * Get CrossPromotionPreferences value
     * @return \StructType\CrossPromotionPreferencesType|null
     */
    public function getCrossPromotionPreferences()
    {
        return $this->CrossPromotionPreferences;
    }
    /**
     * Set CrossPromotionPreferences value
     * @param \StructType\CrossPromotionPreferencesType $crossPromotionPreferences
     * @return \StructType\GetUserPreferencesResponseType
     */
    public function setCrossPromotionPreferences(\StructType\CrossPromotionPreferencesType $crossPromotionPreferences = null)
    {
        $this->CrossPromotionPreferences = $crossPromotionPreferences;
        return $this;
    }
    /**
     * Get SellerPaymentPreferences value
     * @return \StructType\SellerPaymentPreferencesType|null
     */
    public function getSellerPaymentPreferences()
    {
        return $this->SellerPaymentPreferences;
    }
    /**
     * Set SellerPaymentPreferences value
     * @param \StructType\SellerPaymentPreferencesType $sellerPaymentPreferences
     * @return \StructType\GetUserPreferencesResponseType
     */
    public function setSellerPaymentPreferences(\StructType\SellerPaymentPreferencesType $sellerPaymentPreferences = null)
    {
        $this->SellerPaymentPreferences = $sellerPaymentPreferences;
        return $this;
    }
    /**
     * Get SellerFavoriteItemPreferences value
     * @return \StructType\SellerFavoriteItemPreferencesType|null
     */
    public function getSellerFavoriteItemPreferences()
    {
        return $this->SellerFavoriteItemPreferences;
    }
    /**
     * Set SellerFavoriteItemPreferences value
     * @param \StructType\SellerFavoriteItemPreferencesType $sellerFavoriteItemPreferences
     * @return \StructType\GetUserPreferencesResponseType
     */
    public function setSellerFavoriteItemPreferences(\StructType\SellerFavoriteItemPreferencesType $sellerFavoriteItemPreferences = null)
    {
        $this->SellerFavoriteItemPreferences = $sellerFavoriteItemPreferences;
        return $this;
    }
    /**
     * Get EndOfAuctionEmailPreferences value
     * @return \StructType\EndOfAuctionEmailPreferencesType|null
     */
    public function getEndOfAuctionEmailPreferences()
    {
        return $this->EndOfAuctionEmailPreferences;
    }
    /**
     * Set EndOfAuctionEmailPreferences value
     * @param \StructType\EndOfAuctionEmailPreferencesType $endOfAuctionEmailPreferences
     * @return \StructType\GetUserPreferencesResponseType
     */
    public function setEndOfAuctionEmailPreferences(\StructType\EndOfAuctionEmailPreferencesType $endOfAuctionEmailPreferences = null)
    {
        $this->EndOfAuctionEmailPreferences = $endOfAuctionEmailPreferences;
        return $this;
    }
    /**
     * Get EmailShipmentTrackingNumberPreference value
     * @return bool|null
     */
    public function getEmailShipmentTrackingNumberPreference()
    {
        return $this->EmailShipmentTrackingNumberPreference;
    }
    /**
     * Set EmailShipmentTrackingNumberPreference value
     * @param bool $emailShipmentTrackingNumberPreference
     * @return \StructType\GetUserPreferencesResponseType
     */
    public function setEmailShipmentTrackingNumberPreference($emailShipmentTrackingNumberPreference = null)
    {
        // validation for constraint: boolean
        if (!is_null($emailShipmentTrackingNumberPreference) && !is_bool($emailShipmentTrackingNumberPreference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($emailShipmentTrackingNumberPreference, true), gettype($emailShipmentTrackingNumberPreference)), __LINE__);
        }
        $this->EmailShipmentTrackingNumberPreference = $emailShipmentTrackingNumberPreference;
        return $this;
    }
    /**
     * Get RequiredShipPhoneNumberPreference value
     * @return bool|null
     */
    public function getRequiredShipPhoneNumberPreference()
    {
        return $this->RequiredShipPhoneNumberPreference;
    }
    /**
     * Set RequiredShipPhoneNumberPreference value
     * @param bool $requiredShipPhoneNumberPreference
     * @return \StructType\GetUserPreferencesResponseType
     */
    public function setRequiredShipPhoneNumberPreference($requiredShipPhoneNumberPreference = null)
    {
        // validation for constraint: boolean
        if (!is_null($requiredShipPhoneNumberPreference) && !is_bool($requiredShipPhoneNumberPreference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($requiredShipPhoneNumberPreference, true), gettype($requiredShipPhoneNumberPreference)), __LINE__);
        }
        $this->RequiredShipPhoneNumberPreference = $requiredShipPhoneNumberPreference;
        return $this;
    }
    /**
     * Get ProStoresPreference value
     * @return \StructType\ProStoresCheckoutPreferenceType|null
     */
    public function getProStoresPreference()
    {
        return $this->ProStoresPreference;
    }
    /**
     * Set ProStoresPreference value
     * @param \StructType\ProStoresCheckoutPreferenceType $proStoresPreference
     * @return \StructType\GetUserPreferencesResponseType
     */
    public function setProStoresPreference(\StructType\ProStoresCheckoutPreferenceType $proStoresPreference = null)
    {
        $this->ProStoresPreference = $proStoresPreference;
        return $this;
    }
    /**
     * Get UnpaidItemAssistancePreferences value
     * @return \StructType\UnpaidItemAssistancePreferencesType|null
     */
    public function getUnpaidItemAssistancePreferences()
    {
        return $this->UnpaidItemAssistancePreferences;
    }
    /**
     * Set UnpaidItemAssistancePreferences value
     * @param \StructType\UnpaidItemAssistancePreferencesType $unpaidItemAssistancePreferences
     * @return \StructType\GetUserPreferencesResponseType
     */
    public function setUnpaidItemAssistancePreferences(\StructType\UnpaidItemAssistancePreferencesType $unpaidItemAssistancePreferences = null)
    {
        $this->UnpaidItemAssistancePreferences = $unpaidItemAssistancePreferences;
        return $this;
    }
    /**
     * Get SellerExcludeShipToLocationPreferences value
     * @return \StructType\SellerExcludeShipToLocationPreferencesType|null
     */
    public function getSellerExcludeShipToLocationPreferences()
    {
        return $this->SellerExcludeShipToLocationPreferences;
    }
    /**
     * Set SellerExcludeShipToLocationPreferences value
     * @param \StructType\SellerExcludeShipToLocationPreferencesType $sellerExcludeShipToLocationPreferences
     * @return \StructType\GetUserPreferencesResponseType
     */
    public function setSellerExcludeShipToLocationPreferences(\StructType\SellerExcludeShipToLocationPreferencesType $sellerExcludeShipToLocationPreferences = null)
    {
        $this->SellerExcludeShipToLocationPreferences = $sellerExcludeShipToLocationPreferences;
        return $this;
    }
    /**
     * Get PurchaseReminderEmailPreferences value
     * @return \StructType\PurchaseReminderEmailPreferencesType|null
     */
    public function getPurchaseReminderEmailPreferences()
    {
        return $this->PurchaseReminderEmailPreferences;
    }
    /**
     * Set PurchaseReminderEmailPreferences value
     * @param \StructType\PurchaseReminderEmailPreferencesType $purchaseReminderEmailPreferences
     * @return \StructType\GetUserPreferencesResponseType
     */
    public function setPurchaseReminderEmailPreferences(\StructType\PurchaseReminderEmailPreferencesType $purchaseReminderEmailPreferences = null)
    {
        $this->PurchaseReminderEmailPreferences = $purchaseReminderEmailPreferences;
        return $this;
    }
    /**
     * Get SellerThirdPartyCheckoutDisabled value
     * @return bool|null
     */
    public function getSellerThirdPartyCheckoutDisabled()
    {
        return $this->SellerThirdPartyCheckoutDisabled;
    }
    /**
     * Set SellerThirdPartyCheckoutDisabled value
     * @param bool $sellerThirdPartyCheckoutDisabled
     * @return \StructType\GetUserPreferencesResponseType
     */
    public function setSellerThirdPartyCheckoutDisabled($sellerThirdPartyCheckoutDisabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($sellerThirdPartyCheckoutDisabled) && !is_bool($sellerThirdPartyCheckoutDisabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sellerThirdPartyCheckoutDisabled, true), gettype($sellerThirdPartyCheckoutDisabled)), __LINE__);
        }
        $this->SellerThirdPartyCheckoutDisabled = $sellerThirdPartyCheckoutDisabled;
        return $this;
    }
    /**
     * Get SellerProfilePreferences value
     * @return \StructType\SellerProfilePreferencesType|null
     */
    public function getSellerProfilePreferences()
    {
        return $this->SellerProfilePreferences;
    }
    /**
     * Set SellerProfilePreferences value
     * @param \StructType\SellerProfilePreferencesType $sellerProfilePreferences
     * @return \StructType\GetUserPreferencesResponseType
     */
    public function setSellerProfilePreferences(\StructType\SellerProfilePreferencesType $sellerProfilePreferences = null)
    {
        $this->SellerProfilePreferences = $sellerProfilePreferences;
        return $this;
    }
    /**
     * Get SellerReturnPreferences value
     * @return \StructType\SellerReturnPreferencesType|null
     */
    public function getSellerReturnPreferences()
    {
        return $this->SellerReturnPreferences;
    }
    /**
     * Set SellerReturnPreferences value
     * @param \StructType\SellerReturnPreferencesType $sellerReturnPreferences
     * @return \StructType\GetUserPreferencesResponseType
     */
    public function setSellerReturnPreferences(\StructType\SellerReturnPreferencesType $sellerReturnPreferences = null)
    {
        $this->SellerReturnPreferences = $sellerReturnPreferences;
        return $this;
    }
    /**
     * Get OfferGlobalShippingProgramPreference value
     * @return bool|null
     */
    public function getOfferGlobalShippingProgramPreference()
    {
        return $this->OfferGlobalShippingProgramPreference;
    }
    /**
     * Set OfferGlobalShippingProgramPreference value
     * @param bool $offerGlobalShippingProgramPreference
     * @return \StructType\GetUserPreferencesResponseType
     */
    public function setOfferGlobalShippingProgramPreference($offerGlobalShippingProgramPreference = null)
    {
        // validation for constraint: boolean
        if (!is_null($offerGlobalShippingProgramPreference) && !is_bool($offerGlobalShippingProgramPreference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($offerGlobalShippingProgramPreference, true), gettype($offerGlobalShippingProgramPreference)), __LINE__);
        }
        $this->OfferGlobalShippingProgramPreference = $offerGlobalShippingProgramPreference;
        return $this;
    }
    /**
     * Get DispatchCutoffTimePreference value
     * @return \StructType\DispatchCutoffTimePreferencesType|null
     */
    public function getDispatchCutoffTimePreference()
    {
        return $this->DispatchCutoffTimePreference;
    }
    /**
     * Set DispatchCutoffTimePreference value
     * @param \StructType\DispatchCutoffTimePreferencesType $dispatchCutoffTimePreference
     * @return \StructType\GetUserPreferencesResponseType
     */
    public function setDispatchCutoffTimePreference(\StructType\DispatchCutoffTimePreferencesType $dispatchCutoffTimePreference = null)
    {
        $this->DispatchCutoffTimePreference = $dispatchCutoffTimePreference;
        return $this;
    }
    /**
     * Get GlobalShippingProgramListingPreference value
     * @return bool|null
     */
    public function getGlobalShippingProgramListingPreference()
    {
        return $this->GlobalShippingProgramListingPreference;
    }
    /**
     * Set GlobalShippingProgramListingPreference value
     * @param bool $globalShippingProgramListingPreference
     * @return \StructType\GetUserPreferencesResponseType
     */
    public function setGlobalShippingProgramListingPreference($globalShippingProgramListingPreference = null)
    {
        // validation for constraint: boolean
        if (!is_null($globalShippingProgramListingPreference) && !is_bool($globalShippingProgramListingPreference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($globalShippingProgramListingPreference, true), gettype($globalShippingProgramListingPreference)), __LINE__);
        }
        $this->GlobalShippingProgramListingPreference = $globalShippingProgramListingPreference;
        return $this;
    }
    /**
     * Get OverrideGSPServiceWithIntlServicePreference value
     * @return bool|null
     */
    public function getOverrideGSPServiceWithIntlServicePreference()
    {
        return $this->OverrideGSPServiceWithIntlServicePreference;
    }
    /**
     * Set OverrideGSPServiceWithIntlServicePreference value
     * @param bool $overrideGSPServiceWithIntlServicePreference
     * @return \StructType\GetUserPreferencesResponseType
     */
    public function setOverrideGSPServiceWithIntlServicePreference($overrideGSPServiceWithIntlServicePreference = null)
    {
        // validation for constraint: boolean
        if (!is_null($overrideGSPServiceWithIntlServicePreference) && !is_bool($overrideGSPServiceWithIntlServicePreference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($overrideGSPServiceWithIntlServicePreference, true), gettype($overrideGSPServiceWithIntlServicePreference)), __LINE__);
        }
        $this->OverrideGSPServiceWithIntlServicePreference = $overrideGSPServiceWithIntlServicePreference;
        return $this;
    }
    /**
     * Get PickupDropoffSellerPreference value
     * @return bool|null
     */
    public function getPickupDropoffSellerPreference()
    {
        return $this->PickupDropoffSellerPreference;
    }
    /**
     * Set PickupDropoffSellerPreference value
     * @param bool $pickupDropoffSellerPreference
     * @return \StructType\GetUserPreferencesResponseType
     */
    public function setPickupDropoffSellerPreference($pickupDropoffSellerPreference = null)
    {
        // validation for constraint: boolean
        if (!is_null($pickupDropoffSellerPreference) && !is_bool($pickupDropoffSellerPreference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($pickupDropoffSellerPreference, true), gettype($pickupDropoffSellerPreference)), __LINE__);
        }
        $this->PickupDropoffSellerPreference = $pickupDropoffSellerPreference;
        return $this;
    }
    /**
     * Get OutOfStockControlPreference value
     * @return bool|null
     */
    public function getOutOfStockControlPreference()
    {
        return $this->OutOfStockControlPreference;
    }
    /**
     * Set OutOfStockControlPreference value
     * @param bool $outOfStockControlPreference
     * @return \StructType\GetUserPreferencesResponseType
     */
    public function setOutOfStockControlPreference($outOfStockControlPreference = null)
    {
        // validation for constraint: boolean
        if (!is_null($outOfStockControlPreference) && !is_bool($outOfStockControlPreference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($outOfStockControlPreference, true), gettype($outOfStockControlPreference)), __LINE__);
        }
        $this->OutOfStockControlPreference = $outOfStockControlPreference;
        return $this;
    }
    /**
     * Get eBayPLUSPreference value
     * @return \StructType\EBayPLUSPreferenceType[]|null
     */
    public function getEBayPLUSPreference()
    {
        return $this->eBayPLUSPreference;
    }
    /**
     * This method is responsible for validating the values passed to the setEBayPLUSPreference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEBayPLUSPreference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEBayPLUSPreferenceForArrayConstraintsFromSetEBayPLUSPreference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getUserPreferencesResponseTypeEBayPLUSPreferenceItem) {
            // validation for constraint: itemType
            if (!$getUserPreferencesResponseTypeEBayPLUSPreferenceItem instanceof \StructType\EBayPLUSPreferenceType) {
                $invalidValues[] = is_object($getUserPreferencesResponseTypeEBayPLUSPreferenceItem) ? get_class($getUserPreferencesResponseTypeEBayPLUSPreferenceItem) : sprintf('%s(%s)', gettype($getUserPreferencesResponseTypeEBayPLUSPreferenceItem), var_export($getUserPreferencesResponseTypeEBayPLUSPreferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The eBayPLUSPreference property can only contain items of type \StructType\EBayPLUSPreferenceType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set eBayPLUSPreference value
     * @throws \InvalidArgumentException
     * @param \StructType\EBayPLUSPreferenceType[] $eBayPLUSPreference
     * @return \StructType\GetUserPreferencesResponseType
     */
    public function setEBayPLUSPreference(array $eBayPLUSPreference = array())
    {
        // validation for constraint: array
        if ('' !== ($eBayPLUSPreferenceArrayErrorMessage = self::validateEBayPLUSPreferenceForArrayConstraintsFromSetEBayPLUSPreference($eBayPLUSPreference))) {
            throw new \InvalidArgumentException($eBayPLUSPreferenceArrayErrorMessage, __LINE__);
        }
        $this->eBayPLUSPreference = $eBayPLUSPreference;
        return $this;
    }
    /**
     * Add item to eBayPLUSPreference value
     * @throws \InvalidArgumentException
     * @param \StructType\EBayPLUSPreferenceType $item
     * @return \StructType\GetUserPreferencesResponseType
     */
    public function addToEBayPLUSPreference(\StructType\EBayPLUSPreferenceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EBayPLUSPreferenceType) {
            throw new \InvalidArgumentException(sprintf('The eBayPLUSPreference property can only contain items of type \StructType\EBayPLUSPreferenceType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->eBayPLUSPreference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetUserPreferencesResponseType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
