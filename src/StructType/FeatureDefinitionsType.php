<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeatureDefinitionsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>FeatureDefinitions</b> container that is returned in the <b>GetCategoryFeatures</b> response to indicate which eBay features are available on one more eBay API-enabled sites. If no <b>FeatureID</b> field
 * is included in the call request, all eBay features available for one more eBay API-enabled sites are returned. If one or more <b>FeatureID</b> fields are included in the call request, only those eBay features specified in each <b>FeatureID</b> field
 * are returned in the response.
 * @subpackage Structs
 */
class FeatureDefinitionsType extends AbstractStructBase
{
    /**
     * The ListingDurations
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support multiple listing durations. Listing durations will vary based on the selling format (auction, fixed-price, or
     * classified ad) and the eBay category. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ListingDurations</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\ListingDurationDefinitionsType
     */
    public $ListingDurations;
    /**
     * The ShippingTermsRequired
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites require shipping terms at listing time, whiche includesat least one domestic shipping service option and its
     * associated costs. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ShippingTermsRequired</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\ShippingTermRequiredDefinitionType
     */
    public $ShippingTermsRequired;
    /**
     * The BestOfferEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer feature. The Best Offer feature allows buyers and sellers to negotiate the price of the item.
     * This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>BestOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * <br/><br/> <span class="tablenote"><b>Note: </b> The Best Offer feature is now available for auction listings on the following sites: US, Canada, UK, Germany, Australia, France, Italy, and Spain. However, sellers must choose between offering Best
     * Offer or Buy It Now on an auction listing, as both features cannot be enabled on the same auction listing. </span>
     * - minOccurs: 0
     * @var \StructType\BestOfferEnabledDefinitionType
     */
    public $BestOfferEnabled;
    /**
     * The DutchBINEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\DutchBINEnabledDefinitionType
     */
    public $DutchBINEnabled;
    /**
     * The UserConsentRequired
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\UserConsentRequiredDefinitionType
     */
    public $UserConsentRequired;
    /**
     * The HomePageFeaturedEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the temporary display of a seller's listing on a section of the eBay Home Page. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>HomePageFeaturedEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\HomePageFeaturedEnabledDefinitionType
     */
    public $HomePageFeaturedEnabled;
    /**
     * The ProPackEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Pro Pack listing upgrade bundle. This field will not be returned if one or more <b>FeatureID</b> fields
     * are included in the call request and <code>ProPackEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\ProPackEnabledDefinitionType
     */
    public $ProPackEnabled;
    /**
     * The BasicUpgradePackEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\BasicUpgradePackEnabledDefinitionType
     */
    public $BasicUpgradePackEnabled;
    /**
     * The ValuePackEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Value Pack listing upgrade bundle. This field will not be returned if one or more <b>FeatureID</b> fields
     * are included in the call request and <code>ValuePackEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\ValuePackEnabledDefinitionType
     */
    public $ValuePackEnabled;
    /**
     * The ProPackPlusEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Pro Pack Plus listing upgrade bundle. This field will not be returned if one or more <b>FeatureID</b>
     * fields are included in the call request and <code>ProPackPlusEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\ProPackPlusEnabledDefinitionType
     */
    public $ProPackPlusEnabled;
    /**
     * The AdFormatEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Classified Ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in
     * the call request and <code>AdFormatEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\AdFormatEnabledDefinitionType
     */
    public $AdFormatEnabled;
    /**
     * The BestOfferCounterEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support counter offers to Best Offers. The Best Offer feature allows buyers and sellers to negotiate the price of the
     * item, and once a Best Offer price is proposed, the seller can send the buyer a counter offer, and a buyer may even send another counter offer to the seller's counter offer. This field will not be returned if one or more <b>FeatureID</b> fields are
     * included in the call request and <code>BestOfferCounterEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields. <br/><br/> <span class="tablenote"><b>Note: </b> The Best Offer feature is
     * now available for auction listings on the following sites: US, Canada, UK, Germany, Australia, France, Italy, and Spain. However, sellers must choose between offering Best Offer or Buy It Now on an auction listing, as both features cannot be enabled
     * on the same auction listing. </span>
     * - minOccurs: 0
     * @var \StructType\BestOfferCounterEnabledDefinitionType
     */
    public $BestOfferCounterEnabled;
    /**
     * The BestOfferAutoDeclineEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Decline feature. The Best Offer Auto-Decline feature allows a seller to set a lower
     * threshold dollar value on a listing, and any Best Offer amount below this amount is automatically declined by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and
     * <code>BestOfferAutoDeclineEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields. <br/><br/> <span class="tablenote"><b>Note: </b> The Best Offer feature is now available for auction
     * listings on the following sites: US, Canada, UK, Germany, Australia, France, Italy, and Spain. However, sellers must choose between offering Best Offer or Buy It Now on an auction listing, as both features cannot be enabled on the same auction
     * listing. </span>
     * - minOccurs: 0
     * @var \StructType\BestOfferAutoDeclineEnabledDefinitionType
     */
    public $BestOfferAutoDeclineEnabled;
    /**
     * The LocalMarketSpecialitySubscription
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Motors Local Market listings for dealership subscribers with a specialty subscription. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketSpecialitySubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields. <br><br> See
     * the <a href=" http://pages.ebay.com/help/sell/formats.html#market" target="_blank">Motors Local Market listing help topic</a> for more information.
     * - minOccurs: 0
     * @var \StructType\LocalMarketSpecialitySubscriptionDefinitionType
     */
    public $LocalMarketSpecialitySubscription;
    /**
     * The LocalMarketRegularSubscription
     * Meta information extracted from the WSDL
     * - documentation: TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Motors Local Market listings for dealership subscribers with a regular subscription. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketRegularSubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields. <br><br> See the
     * <a href=" http://pages.ebay.com/help/sell/formats.html#market" target="_blank">Motors Local Market listing help topic</a> for more information.
     * - minOccurs: 0
     * @var \StructType\LocalMarketRegularSubscriptionDefinitionType
     */
    public $LocalMarketRegularSubscription;
    /**
     * The LocalMarketPremiumSubscription
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Motors Local Market listings for dealership subscribers with a premium subscription. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketPremiumSubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields. <br><br> See the
     * <a href=" http://pages.ebay.com/help/sell/formats.html#market" target="_blank">Motors Local Market listing help topic</a> for more information.
     * - minOccurs: 0
     * @var \StructType\LocalMarketPremiumSubscriptionDefinitionType
     */
    public $LocalMarketPremiumSubscription;
    /**
     * The LocalMarketNonSubscription
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Motors Local Market listings for dealerships without a subscription. This field will not be returned if one or
     * more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketNonSubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields. <br><br> See the <a href="
     * http://pages.ebay.com/help/sell/formats.html#market" target="_blank">Motors Local Market listing help topic</a> for more information.
     * - minOccurs: 0
     * @var \StructType\LocalMarketNonSubscriptionDefinitionType
     */
    public $LocalMarketNonSubscription;
    /**
     * The ExpressEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\ExpressEnabledDefinitionType
     */
    public $ExpressEnabled;
    /**
     * The ExpressPicturesRequired
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\ExpressPicturesRequiredDefinitionType
     */
    public $ExpressPicturesRequired;
    /**
     * The ExpressConditionRequired
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\ExpressConditionRequiredDefinitionType
     */
    public $ExpressConditionRequired;
    /**
     * The MinimumReservePrice
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites require a minimum reserve price for an auction item. This feature is only applicable to auction listings. This field
     * will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MinimumReservePrice</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\MinimumReservePriceDefinitionType
     */
    public $MinimumReservePrice;
    /**
     * The TransactionConfirmationRequestEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\TCREnabledDefinitionType
     */
    public $TransactionConfirmationRequestEnabled;
    /**
     * The SellerContactDetailsEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the seller to provide contact information at listing time for a classified ad listing. This feature is only
     * applicable to classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>SellerContactDetailsEnabled</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\SellerContactDetailsEnabledDefinitionType
     */
    public $SellerContactDetailsEnabled;
    /**
     * The StoreInventoryEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\StoreInventoryEnabledDefinitionType
     */
    public $StoreInventoryEnabled;
    /**
     * The SkypeMeTransactionalEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\SkypeMeTransactionalEnabledDefinitionType
     */
    public $SkypeMeTransactionalEnabled;
    /**
     * The SkypeMeNonTransactionalEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\SkypeMeNonTransactionalEnabledDefinitionType
     */
    public $SkypeMeNonTransactionalEnabled;
    /**
     * The LocalListingDistancesRegular
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support allow dealership subscribers with a regular subscription to specify local market radius for Motors Local
     * Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalListingDistancesRegular</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\LocalListingDistancesRegularDefinitionType
     */
    public $LocalListingDistancesRegular;
    /**
     * The LocalListingDistancesSpecialty
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow dealership subscribers with a specialty subscription to specify local market radius for Motors Local Market
     * listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalListingDistancesSpecialty</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\LocalListingDistancesSpecialtyDefinitionType
     */
    public $LocalListingDistancesSpecialty;
    /**
     * The LocalListingDistancesNonSubscription
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow dealership subscribers without a subscription to specify local market radius for Motors Local Market listings.
     * This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalListingDistancesNonSubscription</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\LocalListingDistancesNonSubscriptionDefinitionType
     */
    public $LocalListingDistancesNonSubscription;
    /**
     * The ClassifiedAdPaymentMethodEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of acceptable payment methods for classified ad listings. This field will not be returned if one
     * or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdPaymentMethodEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\ClassifiedAdPaymentMethodEnabledDefinitionType
     */
    public $ClassifiedAdPaymentMethodEnabled;
    /**
     * The ClassifiedAdShippingMethodEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of shipping service options for classified ad listings. This field will not be returned if one
     * or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdShippingMethodEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\ClassifiedAdShippingMethodEnabledDefinitionType
     */
    public $ClassifiedAdShippingMethodEnabled;
    /**
     * The ClassifiedAdBestOfferEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer feature for classified ad listings. The Best Offer feature allows buyers and sellers to
     * negotiate the price of the item. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdBestOfferEnabled</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\ClassifiedAdBestOfferEnabledDefinitionType
     */
    public $ClassifiedAdBestOfferEnabled;
    /**
     * The ClassifiedAdCounterOfferEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support counter offers to Best Offers for classified ad listings. The Best Offer feature allows buyers and sellers to
     * negotiate the price of the item, and once a Best Offer price is proposed, the seller can send the buyer a counter offer, and a buyer may even send another counter offer to the seller's counter offer. This field will not be returned if one or more
     * <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdCounterOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\ClassifiedAdCounterOfferEnabledDefinitionType
     */
    public $ClassifiedAdCounterOfferEnabled;
    /**
     * The ClassifiedAdAutoDeclineEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Decline feature for classified ad listings. The Best Offer Auto-Decline feature allows a
     * seller to set a lower threshold dollar value on a listing, and any Best Offer amount below this amount is automatically declined by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call
     * request and <code>ClassifiedAdAutoDeclineEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\ClassifiedAdAutoDeclineEnabledDefinitionType
     */
    public $ClassifiedAdAutoDeclineEnabled;
    /**
     * The ClassifiedAdContactByPhoneEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a phone number when contacting the seller about a classified ad listing. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdContactByPhoneEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\ClassifiedAdContactByPhoneEnabledDefinitionType
     */
    public $ClassifiedAdContactByPhoneEnabled;
    /**
     * The ClassifiedAdContactByEmailEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of an email address when contacting the seller about a classified ad listing. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdContactByEmailEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\ClassifiedAdContactByEmailEnabledDefintionType
     */
    public $ClassifiedAdContactByEmailEnabled;
    /**
     * The SafePaymentRequired
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites require at least one form of safe payment. This field will not be returned if one or more <b>FeatureID</b> fields are
     * included in the call request and <code>SafePaymentRequired</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields. <br><br> For the US, Canada and Australia sites, users registered after January
     * 17, 2007 are required to offer at least one safe payment method (i.e. PayPal/PaisaPay, or one of the credit cards specified in <b>Item.PaymentMethods</b>). <br><br> If a seller has a <code>SafePaymentExempt</code> status, they are exempt from the
     * requirement to offer at least one safe payment method when listing an item on a site that has the safe payment requirement. <br> The safe payment requirement also applies to two-category listings that have one ship-to or available-to location in the
     * US, Canada, or Australia. The French Canadian (CAFR) site is a special case, because listings on the CAFR site with ship-to or available-to locations in Canada do not require a Safe Payment method, yet listings on the CAFR site with ship-to or
     * available-to locations in the US or Australia do require a Safe Payment method. <br><br> The Business and Industrial, Motors, Real Estate, and Mature Audiences categories, and all listings that don't support the <b>Item.PaymentMethods</b> field are
     * exempt from this requirement. Therefore, listings in those categories do not require a safe payment method.
     * - minOccurs: 0
     * @var \StructType\SafePaymentRequiredDefinitionType
     */
    public $SafePaymentRequired;
    /**
     * The ClassifiedAdPayPerLeadEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\ClassifiedAdPayPerLeadEnabledDefinitionType
     */
    public $ClassifiedAdPayPerLeadEnabled;
    /**
     * The ItemSpecificsEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of Item Specifics in listings. Item Specifics are typical aspects that items in a specific category
     * tend to have, and they allow sellers to provide descriptive details of an item in a structured manner. For example, in a jewelry category, sellers might describe lockets with Item Specifics name-value pairs like "Chain Length=18 in." and "Main
     * Shape=Heart", or in a Washers & Dryers category, sellers might include "Type=Top-Loading". This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ItemSpecificsEnabled</code> is not one of the
     * values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\ItemSpecificsEnabledDefinitionType
     */
    public $ItemSpecificsEnabled;
    /**
     * The PaisaPayFullEscrowEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of PaisaPay Full Escrow as a payment method. This field will not be returned if one or more
     * <b>FeatureID</b> fields are included in the call request and <code>PaisaPayFullEscrowEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\PaisaPayFullEscrowEnabledDefinitionType
     */
    public $PaisaPayFullEscrowEnabled;
    /**
     * The ISBNIdentifierEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\ISBNIdentifierEnabledDefinitionType
     */
    public $ISBNIdentifierEnabled;
    /**
     * The UPCIdentifierEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\UPCIdentifierEnabledDefinitionType
     */
    public $UPCIdentifierEnabled;
    /**
     * The EANIdentifierEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\EANIdentifierEnabledDefinitionType
     */
    public $EANIdentifierEnabled;
    /**
     * The BrandMPNIdentifierEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of Brand and MPN (Manufacturer Part Number) to identify a product. This field will not be returned if
     * one or more <b>FeatureID</b> fields are included in the call request and <code>BrandMPNIdentifierEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\BrandMPNIdentifierEnabledDefinitionType
     */
    public $BrandMPNIdentifierEnabled;
    /**
     * The BestOfferAutoAcceptEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Accept feature. The Best Offer Auto-Accept feature allows a seller to set a threshold
     * dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and
     * <code>BestOfferAutoAcceptEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields. <br/><br/> <span class="tablenote"><b>Note: </b> The Best Offer feature is now available for auction
     * listings on the following sites: US, Canada, UK, Germany, Australia, France, Italy, and Spain. However, sellers must choose between offering Best Offer or Buy It Now on an auction listing, as both features cannot be enabled on the same auction
     * listing. </span>
     * - minOccurs: 0
     * @var \StructType\BestOfferAutoAcceptEnabledDefinitionType
     */
    public $BestOfferAutoAcceptEnabled;
    /**
     * The ClassifiedAdAutoAcceptEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Accept feature for classified ad listings. The Best Offer Auto-Accept feature allows a
     * seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call
     * request and <code>ClassifiedAdAutoAcceptEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\ClassifiedAdAutoAcceptEnabledDefinitionType
     */
    public $ClassifiedAdAutoAcceptEnabled;
    /**
     * The CrossBorderTradeNorthAmericaEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support cross-border trading on the US and CA (English) sites. In cross-border trading, also referred to as
     * International site visibility, a seller is able to post a listing to an additional eBay site for an additional small fee. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and
     * <code>CrossBorderTradeNorthAmericaEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\CrossBorderTradeNorthAmericaEnabledDefinitionType
     */
    public $CrossBorderTradeNorthAmericaEnabled;
    /**
     * The CrossBorderTradeGBEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support cross-border trading on the UK and Ireland sites. In cross-border trading, also referred to as International
     * site visibility, a seller is able to post a listing to an additional eBay site for an additional small fee. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and
     * <code>CrossBorderTradeGBEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\CrossBorderTradeGBEnabledDefinitionType
     */
    public $CrossBorderTradeGBEnabled;
    /**
     * The CrossBorderTradeAustraliaEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is for future use, as cross-border trading (aka International site visibility) is not currently supported for Australia.
     * - minOccurs: 0
     * @var \StructType\CrossBorderTradeAustraliaEnabledDefinitionType
     */
    public $CrossBorderTradeAustraliaEnabled;
    /**
     * The PayPalBuyerProtectionEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support PayPal Purchase Protection. This field will not be returned if one or more <b>FeatureID</b> fields are
     * included in the call request and <code>PayPalBuyerProtectionEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\PayPalBuyerProtectionEnabledDefinitionType
     */
    public $PayPalBuyerProtectionEnabled;
    /**
     * The BuyerGuaranteeEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\BuyerGuaranteeEnabledDefinitionType
     */
    public $BuyerGuaranteeEnabled;
    /**
     * The CombinedFixedPriceTreatmentEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\CombinedFixedPriceTreatmentEnabledDefinitionType
     */
    public $CombinedFixedPriceTreatmentEnabled;
    /**
     * The GalleryFeaturedDurations
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\ListingEnhancementDurationDefinitionType
     */
    public $GalleryFeaturedDurations;
    /**
     * The INEscrowWorkflowTimeline
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support PaisaPay Full Escrow workflow timeline.This field will not be returned if one or more <b>FeatureID</b> fields
     * are included in the call request and <code>INEscrowWorkflowTimeline</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\INEscrowWorkflowTimelineDefinitionType
     */
    public $INEscrowWorkflowTimeline;
    /**
     * The PayPalRequired
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites require that PayPal is included as an accepted payment method. This is not applicable to classified ad listings, as
     * payment is handled by the buyer and seller, and not eBay. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>PayPalRequired</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\PayPalRequiredDefinitionType
     */
    public $PayPalRequired;
    /**
     * The eBayMotorsProAdFormatEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support motor vehicle classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields
     * are included in the call request and <code>eBayMotorsProAdFormatEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\EBayMotorsProAdFormatEnabledDefinitionType
     */
    public $eBayMotorsProAdFormatEnabled;
    /**
     * The eBayMotorsProContactByPhoneEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a phone number when contacting the seller about a motor vehicle classified ad listing. This field
     * will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByPhoneEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\EBayMotorsProContactByPhoneEnabledDefinitionType
     */
    public $eBayMotorsProContactByPhoneEnabled;
    /**
     * The eBayMotorsProPhoneCount
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of multiple phone numbers for the seller for a motor vehicle classified ad listing. This field will
     * not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByPhoneEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\EBayMotorsProPhoneCountDefinitionType
     */
    public $eBayMotorsProPhoneCount;
    /**
     * The eBayMotorsProContactByAddressEnabled
     * Meta information extracted from the WSDL
     * - documentation: TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of an address when contacting the seller about a motor vehicle classified ad listing. This field will
     * not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByAddressEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\EBayMotorsProContactByAddressEnabledDefinitionType
     */
    public $eBayMotorsProContactByAddressEnabled;
    /**
     * The eBayMotorsProStreetCount
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of multiple street address for the seller for a motor vehicle classified ad listing. This field will
     * not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByAddressEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\EBayMotorsProStreetCountDefinitionType
     */
    public $eBayMotorsProStreetCount;
    /**
     * The eBayMotorsProCompanyNameEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a company name when contacting the seller about a motor vehicle classified ad listing. This field
     * will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProCompanyNameEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\EBayMotorsProCompanyNameEnabledDefinitionType
     */
    public $eBayMotorsProCompanyNameEnabled;
    /**
     * The eBayMotorsProContactByEmailEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of an email address when contacting the seller about a motor vehicle classified ad listing. This field
     * will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByEmailEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\EBayMotorsProContactByEmailEnabledDefinitionType
     */
    public $eBayMotorsProContactByEmailEnabled;
    /**
     * The eBayMotorsProBestOfferEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer feature is for motor vehicle classified ad listings. The Best Offer feature allows buyers and
     * sellers to negotiate the price of the item. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProBestOfferEnabled</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\EBayMotorsProBestOfferEnabledDefinitionType
     */
    public $eBayMotorsProBestOfferEnabled;
    /**
     * The eBayMotorsProAutoAcceptEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Accept feature for motor vehicle classified ad listings. The Best Offer Auto-Accept
     * feature allows a seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included
     * in the call request and <code>eBayMotorsProAutoAcceptEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\EBayMotorsProAutoAcceptEnabledDefinitionType
     */
    public $eBayMotorsProAutoAcceptEnabled;
    /**
     * The eBayMotorsProAutoDeclineEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Decline feature for motor vehicle classified ad listings. The Best Offer Auto-Decline
     * feature allows a seller to set a lower threshold dollar value on a listing, and any Best Offer amount below this amount is automatically declined by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included
     * in the call request and <code>eBayMotorsProAutoDeclineEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\EBayMotorsProAutoDeclineEnabledDefinitionType
     */
    public $eBayMotorsProAutoDeclineEnabled;
    /**
     * The eBayMotorsProPaymentMethodCheckOutEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of acceptable payment methods for motor vehicle classified ad listings. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProPaymentMethodCheckOutEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType
     */
    public $eBayMotorsProPaymentMethodCheckOutEnabled;
    /**
     * The eBayMotorsProShippingMethodEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of shipping service options for motor vehicle classified ad listings. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProShippingMethodEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\EBayMotorsProShippingMethodEnabledDefinitionType
     */
    public $eBayMotorsProShippingMethodEnabled;
    /**
     * The eBayMotorsProCounterOfferEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support counter offers to Best Offers for motor vehicle classified ad listings. The Best Offer feature allows buyers
     * and sellers to negotiate the price of the item, and once a Best Offer price is proposed, the seller can send the buyer a counter offer, and a buyer may even send another counter offer to the seller's counter offer. This field will not be returned if
     * one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProCounterOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\EBayMotorsProCounterOfferEnabledDefinitionType
     */
    public $eBayMotorsProCounterOfferEnabled;
    /**
     * The eBayMotorsProSellerContactDetailsEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the seller to provide contact information at listing time for a motor vehicle classified ad listing. This
     * feature is only applicable to motor vehicle classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProSellerContactDetailsEnabled</code> is not one of the
     * values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\EBayMotorsProSellerContactDetailsEnabledDefinitionType
     */
    public $eBayMotorsProSellerContactDetailsEnabled;
    /**
     * The LocalMarketAdFormatEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Motors Local Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are
     * included in the call request and <code>LocalMarketAdFormatEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\LocalMarketAdFormatEnabledDefinitionType
     */
    public $LocalMarketAdFormatEnabled;
    /**
     * The LocalMarketContactByPhoneEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the use of a phone number when contacting the seller about a Motors Local Market listing. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketContactByPhoneEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\LocalMarketContactByPhoneEnabledDefinitionType
     */
    public $LocalMarketContactByPhoneEnabled;
    /**
     * The LocalMarketPhoneCount
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the use of multiple phone numbers for the seller for a Motors Local Market listing. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketPhoneCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\LocalMarketPhoneCountDefinitionType
     */
    public $LocalMarketPhoneCount;
    /**
     * The LocalMarketContactByAddressEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the use of an address when contacting the seller about a Motors Local Market listing. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketContactByAddressEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\LocalMarketContactByAddressEnabledDefinitionType
     */
    public $LocalMarketContactByAddressEnabled;
    /**
     * The LocalMarketStreetCount
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the use of multiple street address for the seller for a Motors Local Market listing. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketStreetCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\LocalMarketStreetCountDefinitionType
     */
    public $LocalMarketStreetCount;
    /**
     * The LocalMarketCompanyNameEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a company name when contacting the seller about a Motors Local Market listing. This field will not
     * be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketCompanyNameEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\LocalMarketCompanyNameEnabledDefinitionType
     */
    public $LocalMarketCompanyNameEnabled;
    /**
     * The LocalMarketContactByEmailEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of an email address when contacting the seller about a Motors Local Market listing. This field will
     * not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketContactByEmailEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\LocalMarketContactByEmailEnabledDefinitionType
     */
    public $LocalMarketContactByEmailEnabled;
    /**
     * The LocalMarketBestOfferEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer feature is for Motors Local Market listings. The Best Offer feature allows buyers and sellers
     * to negotiate the price of the item. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketBestOfferEnabled</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\LocalMarketBestOfferEnabledDefinitionType
     */
    public $LocalMarketBestOfferEnabled;
    /**
     * The LocalMarketAutoAcceptEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Accept feature for Motors Local Market listings. The Best Offer Auto-Accept feature allows
     * a seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call
     * request and <code>LocalMarketAutoAcceptEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\LocalMarketAutoAcceptEnabledDefinitionType
     */
    public $LocalMarketAutoAcceptEnabled;
    /**
     * The LocalMarketAutoDeclineEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Decline feature for Motors Local Market listings. The Best Offer Auto-Accept feature
     * allows a seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the
     * call request and <code>LocalMarketAutoDeclineEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\LocalMarketAutoDeclineEnabledDefinitionType
     */
    public $LocalMarketAutoDeclineEnabled;
    /**
     * The LocalMarketPaymentMethodCheckOutEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of acceptable payment methods for Motors Local Market listings. This field will not be returned
     * if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketPaymentMethodCheckOutEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\LocalMarketPaymentMethodCheckOutEnabledDefinitionType
     */
    public $LocalMarketPaymentMethodCheckOutEnabled;
    /**
     * The LocalMarketShippingMethodEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of shipping service options for Motors Local Market listings. This field will not be returned if
     * one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketShippingMethodEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\LocalMarketShippingMethodEnabledDefinitionType
     */
    public $LocalMarketShippingMethodEnabled;
    /**
     * The LocalMarketCounterOfferEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support counter offers to Best Offers for Motors Local Market listings. The Best Offer feature allows buyers and
     * sellers to negotiate the price of the item, and once a Best Offer price is proposed, the seller can send the buyer a counter offer, and a buyer may even send another counter offer to the seller's counter offer. This field will not be returned if one
     * or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketCounterOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\LocalMarketCounterOfferEnabledDefinitionType
     */
    public $LocalMarketCounterOfferEnabled;
    /**
     * The LocalMarketSellerContactDetailsEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the seller to provide contact information at listing time for Motors Local Market listings. This feature is only
     * applicable to motor vehicle classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketSellerContactDetailsEnabled</code> is not one of the values passed into
     * those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\LocalMarketSellerContactDetailsEnabledDefinitionType
     */
    public $LocalMarketSellerContactDetailsEnabled;
    /**
     * The ClassifiedAdPhoneCount
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of multiple phone numbers for the seller for a classified ad listing. This field will not be returned
     * if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdPhoneCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\ClassifiedAdPhoneCountDefinitionType
     */
    public $ClassifiedAdPhoneCount;
    /**
     * The ClassifiedAdContactByAddressEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of an address when contacting the seller about a classified ad listing. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdContactByAddressEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \StructType\ClassifiedAdContactByAddressEnabledDefinitionType
     */
    public $ClassifiedAdContactByAddressEnabled;
    /**
     * The ClassifiedAdStreetCount
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of multiple street addresses for the seller for a classified ad listing. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdStreetCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\ClassifiedAdStreetCountDefinitionType
     */
    public $ClassifiedAdStreetCount;
    /**
     * The ClassifiedAdCompanyNameEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a company name when contacting the seller about a classified ad listing. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdCompanyNameEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\ClassifiedAdCompanyNameEnabledDefinitionType
     */
    public $ClassifiedAdCompanyNameEnabled;
    /**
     * The SpecialitySubscription
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\SpecialitySubscriptionDefinitionType
     */
    public $SpecialitySubscription;
    /**
     * The RegularSubscription
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\RegularSubscriptionDefinitionType
     */
    public $RegularSubscription;
    /**
     * The PremiumSubscription
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\PremiumSubscriptionDefinitionType
     */
    public $PremiumSubscription;
    /**
     * The NonSubscription
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\NonSubscriptionDefinitionType
     */
    public $NonSubscription;
    /**
     * The ReturnPolicyEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of return policies in listings. This field will not be returned if one or more <b>FeatureID</b> fields
     * are included in the call request and <code>ReturnPolicyEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\ReturnPolicyEnabledDefinitionType
     */
    public $ReturnPolicyEnabled;
    /**
     * The HandlingTimeEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a stated handling time in listings. The handling time is the maximum number of business days the
     * seller commits to for preparing an item to be shipped after receiving a cleared payment. The seller's handling time does not include the shipping time (the carrier's transit time). This field will not be returned if one or more <b>FeatureID</b>
     * fields are included in the call request and <code>HandlingTimeEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\HandlingTimeEnabledDefinitionType
     */
    public $HandlingTimeEnabled;
    /**
     * The PayPalRequiredForStoreOwner
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\PayPalRequiredForStoreOwnerDefinitionType
     */
    public $PayPalRequiredForStoreOwner;
    /**
     * The ReviseQuantityAllowed
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the quantity of a listing to be revised during the life of the listing. This feature is not applicable to
     * auction listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ReviseQuantityAllowed</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\ReviseQuantityAllowedDefinitionType
     */
    public $ReviseQuantityAllowed;
    /**
     * The RevisePriceAllowed
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the price of a listing to be revised during the life of the listing. This feature is not applicable to auction
     * listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>RevisePriceAllowed</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * fields.
     * - minOccurs: 0
     * @var \StructType\RevisePriceAllowedDefinitionType
     */
    public $RevisePriceAllowed;
    /**
     * The StoreOwnerExtendedListingDurationsEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support extended listing durations for eBay Business Sellers with eBay Stores. This field will not be returned if one
     * or more <b>FeatureID</b> fields are included in the call request and <code>RevisePriceAllowed</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\StoreOwnerExtendedListingDurationsEnabledDefinitionType
     */
    public $StoreOwnerExtendedListingDurationsEnabled;
    /**
     * The StoreOwnerExtendedListingDurations
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\StoreOwnerExtendedListingDurationsDefinitionType
     */
    public $StoreOwnerExtendedListingDurations;
    /**
     * The PaymentMethod
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of acceptable payment methods in listings. This field will not be returned if one or more
     * <b>FeatureID</b> fields are included in the call request and <code>PaymentMethod</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\PaymentMethodDefinitionType
     */
    public $PaymentMethod;
    /**
     * The Group1MaxFlatShippingCost
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the applicable max cap per shipping cost for shipping service group1. This field will not be returned if one
     * or more <b>FeatureID</b> fields are included in the call request and <code>Group1MaxFlatShippingCost</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\Group1MaxFlatShippingCostDefinitionType
     */
    public $Group1MaxFlatShippingCost;
    /**
     * The Group2MaxFlatShippingCost
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the applicable max cap per shipping cost for shipping service group2. This field will not be returned if one
     * or more <b>FeatureID</b> fields are included in the call request and <code>Group2MaxFlatShippingCost</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\Group2MaxFlatShippingCostDefinitionType
     */
    public $Group2MaxFlatShippingCost;
    /**
     * The Group3MaxFlatShippingCost
     * Meta information extracted from the WSDL
     * - documentation: TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the applicable max cap per shipping cost for shipping service group3. This field will not be returned if
     * one or more <b>FeatureID</b> fields are included in the call request and <code>Group3MaxFlatShippingCost</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\Group3MaxFlatShippingCostDefinitionType
     */
    public $Group3MaxFlatShippingCost;
    /**
     * The MaxFlatShippingCostCBTExempt
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites do not impose a maximum flat-rate shipping cost if the item is being shipped internationally. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MaxFlatShippingCostCBTExempt</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\MaxFlatShippingCostCBTExemptDefinitionType
     */
    public $MaxFlatShippingCostCBTExempt;
    /**
     * The MaxFlatShippingCost
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites do not impose a maximum flat-rate shipping cost. This field will not be returned if one or more <b>FeatureID</b>
     * fields are included in the call request and <code>MaxFlatShippingCost</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\MaxFlatShippingCostDefinitionType
     */
    public $MaxFlatShippingCost;
    /**
     * The VariationsEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support multiple-variation listings for some categories. Multiple-variation listings contain items that are logically
     * the same product, but that vary in color, size, or other aspect. For example, a particular brand and style of shirt could be available in different sizes and colors, such as "large blue" and "medium black" variations. This feature is only applicable
     * to fixed-price listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>VariationsEnabled</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\VariationsEnabledDefinitionType
     */
    public $VariationsEnabled;
    /**
     * The AttributeConversionEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\AttributeConversionEnabledFeatureDefinitionType
     */
    public $AttributeConversionEnabled;
    /**
     * The FreeGalleryPlusEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support free, automatic upgrades for Gallery Plus for some categories. This field will not be returned if one or more
     * <b>FeatureID</b> fields are included in the call request and <code>FreeGalleryPlusEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\FreeGalleryPlusEnabledDefinitionType
     */
    public $FreeGalleryPlusEnabled;
    /**
     * The FreePicturePackEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support a free Picture Pack upgrade for some categories. This field will not be returned if one or more
     * <b>FeatureID</b> fields are included in the call request and <code>FreePicturePackEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\FreePicturePackEnabledDefinitionType
     */
    public $FreePicturePackEnabled;
    /**
     * The ItemCompatibilityEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Parts Compatibility for some Parts & Accessories categories. Parts compatibility allows a seller to show a
     * list of all the vehicles that a part or accessory is compatible with in a listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ItemCompatibilityEnabled</code> is not one of the
     * values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\ItemCompatibilityEnabledDefinitionType
     */
    public $ItemCompatibilityEnabled;
    /**
     * The MaxItemCompatibility
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites define a maximum limit for the number of compatible applications for items listed with parts compatibilities by
     * application. Parts compatibility allows a seller to show a list of all the vehicles that a part or accessory is compatible with in a listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and
     * <code>MaxItemCompatibility</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\MaxItemCompatibilityDefinitionType
     */
    public $MaxItemCompatibility;
    /**
     * The MinItemCompatibility
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites define a minimum amount for the number of compatible applications for items listed with parts compatibilities by
     * application. Parts compatibility allows a seller to show a list of all the vehicles that a part or accessory is compatible with in a listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and
     * <code>MinItemCompatibility</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\MinItemCompatibilityDefinitionType
     */
    public $MinItemCompatibility;
    /**
     * The ConditionEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the textual description of an item's condition at listing time. This field will not be returned if one or more
     * <b>FeatureID</b> fields are included in the call request and <code>ConditionEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\ConditionEnabledDefinitionType
     */
    public $ConditionEnabled;
    /**
     * The ConditionValues
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Condition IDs to specify an item's condition at listing time. This field will not be returned if one or more
     * <b>FeatureID</b> fields are included in the call request and <code>ConditionValues</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\ConditionValuesDefinitionType
     */
    public $ConditionValues;
    /**
     * The ValueCategory
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support value categories. A Value category will typically have lower listing fees or another eBay promotion. This
     * field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ValueCategory</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\ValueCategoryDefinitionType
     */
    public $ValueCategory;
    /**
     * The ProductCreationEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the creation of listings through the specification of Global Trade Identification Numbers (GTINs) like UPC,
     * ISBN, EAN, or Brand/MPN combination. If a GTIN is matched to a product in eBay product catalog, a listing will automatically be created using the eBay catalog product's images, product aspects, description, and title. This field will not be returned
     * if one or more <b>FeatureID</b> fields are included in the call request and <code>ProductCreationEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\ProductCreationEnabledDefinitionType
     */
    public $ProductCreationEnabled;
    /**
     * The EANEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the EAN product identifying feature. This field will be returned as long as <b>EANEnabled</b> is included as a
     * <b>FeatureID</b> value in the call request or no <b>FeatureID</b> values are passed into the call request. <br> <br> To verify if a specific eBay site supports the EAN product identifying feature (for most categories), look for a <code>true</code>
     * value in the <b>SiteDefaults.EANEnabled</b> field. <br> <br> To verify if a specific category on a specific eBay site supports the EAN product identifying feature, pass in a <b>CategoryID</b> value in the request, and then look for a
     * <code>true</code> value in the <b>EANEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     * - minOccurs: 0
     * @var \StructType\EANEnabledDefinitionType
     */
    public $EANEnabled;
    /**
     * The ISBNEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the ISBN product identifying feature. This field will be returned as long as <b>ISBNEnabled</b> is included as
     * a <b>FeatureID</b> value in the call request or no <b>FeatureID</b> values are passed into the call request. <br> <br> To verify if a specific eBay site supports the ISBN product identifying feature (for most categories), look for a <code>true</code>
     * value in the <b>SiteDefaults.ISBNEnabled</b> field. <br> <br> To verify if a specific category on a specific eBay site supports the ISBN product identifying feature, pass in a <b>CategoryID</b> value in the request, and then look for a
     * <code>true</code> value in the <b>ISBNEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     * - minOccurs: 0
     * @var \StructType\ISBNEnabledDefinitionType
     */
    public $ISBNEnabled;
    /**
     * The UPCEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the UPC product identifying feature. This field will be returned as long as <b>UPCEnabled</b> is included as a
     * <b>FeatureID</b> value in the call request or no <b>FeatureID</b> values are passed into the call request. <br> <br> To verify if a specific eBay site supports the UPC product identifying feature (for most categories), look for a <code>true</code>
     * value in the <b>SiteDefaults.UPCEnabled</b> field. <br> <br> To verify if a specific category on a specific eBay site supports the UPC product identifying feature, pass in a <b>CategoryID</b> value in the request, and then look for a
     * <code>true</code> value in the <b>UPCEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     * - minOccurs: 0
     * @var \StructType\UPCEnabledDefinitionType
     */
    public $UPCEnabled;
    /**
     * The CompatibleVehicleType
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Parts Compatibility feature for motor vehicles. This field will not be returned if one or more
     * <b>FeatureID</b> fields are included in the call request and <code>CompatibleVehicleType</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\CompatibleVehicleTypeDefinitionType
     */
    public $CompatibleVehicleType;
    /**
     * The MaxGranularFitmentCount
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites define a maximum limit for the number of fine-grained item compatibilities that can be applied to a listing. This
     * field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MaxGranularFitmentCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\MaxGranularFitmentCountDefinitionType
     */
    public $MaxGranularFitmentCount;
    /**
     * The PaymentOptionsGroup
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\PaymentOptionsGroupEnabledDefinitionType
     */
    public $PaymentOptionsGroup;
    /**
     * The ShippingProfileCategoryGroup
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of category groups in shipping business policies. This field will not be returned if one or more
     * <b>FeatureID</b> fields are included in the call request and <code>ShippingProfileCategoryGroup</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\ProfileCategoryGroupDefinitionType
     */
    public $ShippingProfileCategoryGroup;
    /**
     * The PaymentProfileCategoryGroup
     * Meta information extracted from the WSDL
     * - documentation: TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of category groups in payment business policies. This field will not be returned if one or more
     * <b>FeatureID</b> fields are included in the call request and <code>PaymentProfileCategoryGroup</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\ProfileCategoryGroupDefinitionType
     */
    public $PaymentProfileCategoryGroup;
    /**
     * The ReturnPolicyProfileCategoryGroup
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of category groups in return business policies. This field will not be returned if one or more
     * <b>FeatureID</b> fields are included in the call request and <code>ReturnPolicyProfileCategoryGroup</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\ProfileCategoryGroupDefinitionType
     */
    public $ReturnPolicyProfileCategoryGroup;
    /**
     * The VINSupported
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of the VIN (Vehicle Identification Number) field to identify a motor vehicle and create a listing is
     * supported. VINs are supported on the US, Canada, Canada-French, and Australia sites. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>VINSupported</code> is not one of the values passed
     * into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\VINSupportedDefinitionType
     */
    public $VINSupported;
    /**
     * The VRMSupported
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of the VRM (Vehicle Registration Mark) field to identify a motor vehicle and create a listing is
     * supported. VRMs are only supported on the UK site. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>VRMSupported</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\VRMSupportedDefinitionType
     */
    public $VRMSupported;
    /**
     * The SellerProvidedTitleSupported
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support seller-provided titles in motor vehicle listings. This field will not be returned if one or more
     * <b>FeatureID</b> fields are included in the call request and <code>SellerProvidedTitleSupported</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\SellerProvidedTitleSupportedDefinitionType
     */
    public $SellerProvidedTitleSupported;
    /**
     * The DepositSupported
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support deposits/down payments for motor vehicle listings. This field will not be returned if one or more
     * <b>FeatureID</b> fields are included in the call request and <code>DepositSupported</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\DepositSupportedDefinitionType
     */
    public $DepositSupported;
    /**
     * The GlobalShippingEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Global Shipping Program (GSP) as the method for shipping orders internationally. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>GlobalShippingEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \StructType\GlobalShippingEnabledDefinitionType
     */
    public $GlobalShippingEnabled;
    /**
     * The AdditionalCompatibilityEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Boat and Motorcycle Parts Compatibility feature. This field will be returned as long as
     * <b>AdditionalCompatibilityEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request. <br> <br> To verify if a specific eBay site supports
     * Boat or Motorcycle Parts Compatibility (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.AdditionalCompatibilityEnabled</b> field. <br> <br> To verify if a specific category on a specific eBay site supports Boat and
     * Motorcycle Parts Compatibility, pass in a <b>CategoryID</b> value in the request, and then look for a <code>true</code> <br> value in the <b>AdditionalCompatibilityEnabled</b> field of the corresponding <b>Category</b> node (match up the
     * <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     * - minOccurs: 0
     * @var \StructType\AdditionalCompatibilityEnabledDefinitionType
     */
    public $AdditionalCompatibilityEnabled;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * The PickupDropOffEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Click and Collect feature. This field will be returned as long as <b>PickupDropOffEnabled</b> is included
     * as a <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request. <br> <br> To verify if a specific eBay site supports the Click and Collect feature (for most
     * categories), look for a <code>true</code> value in the <b>SiteDefaults.PickupDropOffEnabled</b> field. <br> <br> To verify if a specific category on a specific eBay site supports the Click and Collect feature, pass in a <b>CategoryID</b> value in the
     * request, and then look for a <code>true</code> value in the <b>PickupDropOffEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request). <br> <br> <span
     * class="tablenote"><b>Note:</b> For Click and Collect eligible sellers, the Click and Collect feature can only be enabled at the account level, and then each of the seller's listings within an Click and Collect enabled category will be automatically
     * evaluated for Click and Collect eligibility. </span>
     * - minOccurs: 0
     * @var \StructType\PickupDropOffEnabledDefinitionType
     */
    public $PickupDropOffEnabled;
    /**
     * The DigitalGoodDeliveryEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support digital gift card listings. This field will be returned as long as <b>DigitalGoodDeliveryEnabled</b> is
     * included as a <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request. <br> <br> To verify if a specific eBay site supports digital gift card listings (for most
     * categories), look for a <code>true</code> value in the <b>SiteDefaults.DigitalGoodDeliveryEnabled</b> field. <br> <br> To verify if a specific category on a specific eBay site supports digital gift card listings, pass in a <b>CategoryID</b> value in
     * the request, and then look for a <code>true</code> value in the <b>DigitalGoodDeliveryEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request). <br>
     * <br> Digital gift cards are currently only supported on the US site. There are some restrictions when it comes to selling gift cards, including the following: <ul> <li>Each seller can only have one gift card listing at any given time </li> <li>The
     * maximum dollar value of the gift card may not exceed 500.00</li> <li>Prepaid credit cards from American Express, Discover, MasterCard, or Visa are not allowed</li> </ul> For more information on eBay's Gift Card policy, see the <a href="
     * https://www.ebay.com/help/policies/prohibited-restricted-items/gift-cards-policy?id=4294" target="_blank">Gift cards policy</a> help page.
     * - minOccurs: 0
     * @var \StructType\DigitalGoodDeliveryEnabledDefinitionType
     */
    public $DigitalGoodDeliveryEnabled;
    /**
     * The EpidSupported
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of an eBay Product ID (e.g. ePID) in an Add/Revise/Relist API call to identify which motorcycles
     * and/or scooters are compatible with a motor vehicle part or accessory. ePIDs can only be used to identify motorcycles and scooters on the Germany and UK sites. This field will be returned as long as <b>EpidSupported</b> is included as a
     * <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request. <br/><br/> For more information on using an ePID to identify a compatible motorcycle or scooter through an
     * Add/Revise/Relist API call on the Germany or UK site, see the documentation for the <a href="
     * http://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request.Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.NameValueList</a> container.
     * - minOccurs: 0
     * @var \StructType\EpidSupportedDefinitionType
     */
    public $EpidSupported;
    /**
     * The KTypeSupported
     * Meta information extracted from the WSDL
     * - documentation: TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a K Type vehicle number in an Add/Revise/Relist API call to identify which cars and/or trucks are
     * compatible with a motor vehicle part or accessory. K type vehicle numbers can only be used to identify cars and trucks on the Germany site. This field will be returned as long as <b>KTypeSupported</b> is included as a <b>FeatureID</b> value in the
     * call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request. <br/><br/> For more information on using a K Type vehicle number to identify a compatible car or truck through an Add/Revise/Relist API
     * call on the Germany site, see the documentation for the <a href=" http://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request.Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.NameValueList</a> container.
     * - minOccurs: 0
     * @var \StructType\KTypeSupportedDefinitionType
     */
    public $KTypeSupported;
    /**
     * The ProductRequiredEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites supports Product-Based Shopping Experience listings (listings associated with eBay catalog products). PBSE is
     * currently supported by the US, UK, Germany, Australia, and Canada (English) sites. This field is only returned if <code>Enabled</code>. <br><br> Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used
     * in the call request, and one of those values does not include <code>ProductRequiredEnabled</code>. <br><br> <span class="tablenote"><b>Note:</b> Due to the rollback of the Product-Based Shopping Experience mandate for all eBay categories, association
     * with an eBay catalog product will no longer be required for any categories on any eBay marketplace.</span>
     * - minOccurs: 0
     * @var \StructType\ProductRequiredEnabledDefinitionType
     */
    public $ProductRequiredEnabled;
    /**
     * The DomesticReturnsAcceptedValues
     * Meta information extracted from the WSDL
     * - documentation: If present, this flag indicates the seller can set how to handle domestic returns.
     * - minOccurs: 0
     * @var \StructType\DomesticReturnsAcceptedDefinitionType
     */
    public $DomesticReturnsAcceptedValues;
    /**
     * The InternationalReturnsAcceptedValues
     * Meta information extracted from the WSDL
     * - documentation: If present, this flag indicates the seller can set how to handle international returns.
     * - minOccurs: 0
     * @var \StructType\InternationalReturnsAcceptedDefinitionType
     */
    public $InternationalReturnsAcceptedValues;
    /**
     * The DomesticReturnsDurationValues
     * Meta information extracted from the WSDL
     * - documentation: If present, this flag indicates the seller can set the time duration for domestic returns.
     * - minOccurs: 0
     * @var \StructType\DomesticReturnsDurationDefinitionType
     */
    public $DomesticReturnsDurationValues;
    /**
     * The InternationalReturnsDurationValues
     * Meta information extracted from the WSDL
     * - documentation: If present, this flag indicates the seller can set the time duration for international returns.
     * - minOccurs: 0
     * @var \StructType\InternationalReturnsDurationDefinitionType
     */
    public $InternationalReturnsDurationValues;
    /**
     * The DomesticReturnsShipmentPayeeValues
     * Meta information extracted from the WSDL
     * - documentation: If present, this flag indicates the seller can set who pays the shipping for domestic returns.
     * - minOccurs: 0
     * @var \StructType\DomesticReturnsShipmentPayeeDefinitionType
     */
    public $DomesticReturnsShipmentPayeeValues;
    /**
     * The InternationalReturnsShipmentPayeeValues
     * Meta information extracted from the WSDL
     * - documentation: If present, this flag indicates the seller can set who pays the shipping for international returns.
     * - minOccurs: 0
     * @var \StructType\InternationalReturnsShipmentPayeeDefinitionType
     */
    public $InternationalReturnsShipmentPayeeValues;
    /**
     * The DomesticRefundMethodValues
     * Meta information extracted from the WSDL
     * - documentation: If present, this flag indicates the seller can set the method they use to refund domestic returns.
     * - minOccurs: 0
     * @var \StructType\DomesticRefundMethodCodeType
     */
    public $DomesticRefundMethodValues;
    /**
     * The InternationalRefundMethodValues
     * Meta information extracted from the WSDL
     * - documentation: If present, this flag indicates the seller can set the method they use to refund international returns.
     * - minOccurs: 0
     * @var \StructType\InternationalRefundMethodCodeType
     */
    public $InternationalRefundMethodValues;
    /**
     * The ReturnPolicyDescriptionEnabled
     * Meta information extracted from the WSDL
     * - documentation: If present, this flag indicates the seller can choose to describe the return policy they offer (providing return-policy details is required in some EU countries).
     * - minOccurs: 0
     * @var \StructType\ReturnPolicyDescriptionEnabledDefinitionType
     */
    public $ReturnPolicyDescriptionEnabled;
    /**
     * Constructor method for FeatureDefinitionsType
     * @uses FeatureDefinitionsType::setListingDurations()
     * @uses FeatureDefinitionsType::setShippingTermsRequired()
     * @uses FeatureDefinitionsType::setBestOfferEnabled()
     * @uses FeatureDefinitionsType::setDutchBINEnabled()
     * @uses FeatureDefinitionsType::setUserConsentRequired()
     * @uses FeatureDefinitionsType::setHomePageFeaturedEnabled()
     * @uses FeatureDefinitionsType::setProPackEnabled()
     * @uses FeatureDefinitionsType::setBasicUpgradePackEnabled()
     * @uses FeatureDefinitionsType::setValuePackEnabled()
     * @uses FeatureDefinitionsType::setProPackPlusEnabled()
     * @uses FeatureDefinitionsType::setAdFormatEnabled()
     * @uses FeatureDefinitionsType::setBestOfferCounterEnabled()
     * @uses FeatureDefinitionsType::setBestOfferAutoDeclineEnabled()
     * @uses FeatureDefinitionsType::setLocalMarketSpecialitySubscription()
     * @uses FeatureDefinitionsType::setLocalMarketRegularSubscription()
     * @uses FeatureDefinitionsType::setLocalMarketPremiumSubscription()
     * @uses FeatureDefinitionsType::setLocalMarketNonSubscription()
     * @uses FeatureDefinitionsType::setExpressEnabled()
     * @uses FeatureDefinitionsType::setExpressPicturesRequired()
     * @uses FeatureDefinitionsType::setExpressConditionRequired()
     * @uses FeatureDefinitionsType::setMinimumReservePrice()
     * @uses FeatureDefinitionsType::setTransactionConfirmationRequestEnabled()
     * @uses FeatureDefinitionsType::setSellerContactDetailsEnabled()
     * @uses FeatureDefinitionsType::setStoreInventoryEnabled()
     * @uses FeatureDefinitionsType::setSkypeMeTransactionalEnabled()
     * @uses FeatureDefinitionsType::setSkypeMeNonTransactionalEnabled()
     * @uses FeatureDefinitionsType::setLocalListingDistancesRegular()
     * @uses FeatureDefinitionsType::setLocalListingDistancesSpecialty()
     * @uses FeatureDefinitionsType::setLocalListingDistancesNonSubscription()
     * @uses FeatureDefinitionsType::setClassifiedAdPaymentMethodEnabled()
     * @uses FeatureDefinitionsType::setClassifiedAdShippingMethodEnabled()
     * @uses FeatureDefinitionsType::setClassifiedAdBestOfferEnabled()
     * @uses FeatureDefinitionsType::setClassifiedAdCounterOfferEnabled()
     * @uses FeatureDefinitionsType::setClassifiedAdAutoDeclineEnabled()
     * @uses FeatureDefinitionsType::setClassifiedAdContactByPhoneEnabled()
     * @uses FeatureDefinitionsType::setClassifiedAdContactByEmailEnabled()
     * @uses FeatureDefinitionsType::setSafePaymentRequired()
     * @uses FeatureDefinitionsType::setClassifiedAdPayPerLeadEnabled()
     * @uses FeatureDefinitionsType::setItemSpecificsEnabled()
     * @uses FeatureDefinitionsType::setPaisaPayFullEscrowEnabled()
     * @uses FeatureDefinitionsType::setISBNIdentifierEnabled()
     * @uses FeatureDefinitionsType::setUPCIdentifierEnabled()
     * @uses FeatureDefinitionsType::setEANIdentifierEnabled()
     * @uses FeatureDefinitionsType::setBrandMPNIdentifierEnabled()
     * @uses FeatureDefinitionsType::setBestOfferAutoAcceptEnabled()
     * @uses FeatureDefinitionsType::setClassifiedAdAutoAcceptEnabled()
     * @uses FeatureDefinitionsType::setCrossBorderTradeNorthAmericaEnabled()
     * @uses FeatureDefinitionsType::setCrossBorderTradeGBEnabled()
     * @uses FeatureDefinitionsType::setCrossBorderTradeAustraliaEnabled()
     * @uses FeatureDefinitionsType::setPayPalBuyerProtectionEnabled()
     * @uses FeatureDefinitionsType::setBuyerGuaranteeEnabled()
     * @uses FeatureDefinitionsType::setCombinedFixedPriceTreatmentEnabled()
     * @uses FeatureDefinitionsType::setGalleryFeaturedDurations()
     * @uses FeatureDefinitionsType::setINEscrowWorkflowTimeline()
     * @uses FeatureDefinitionsType::setPayPalRequired()
     * @uses FeatureDefinitionsType::setEBayMotorsProAdFormatEnabled()
     * @uses FeatureDefinitionsType::setEBayMotorsProContactByPhoneEnabled()
     * @uses FeatureDefinitionsType::setEBayMotorsProPhoneCount()
     * @uses FeatureDefinitionsType::setEBayMotorsProContactByAddressEnabled()
     * @uses FeatureDefinitionsType::setEBayMotorsProStreetCount()
     * @uses FeatureDefinitionsType::setEBayMotorsProCompanyNameEnabled()
     * @uses FeatureDefinitionsType::setEBayMotorsProContactByEmailEnabled()
     * @uses FeatureDefinitionsType::setEBayMotorsProBestOfferEnabled()
     * @uses FeatureDefinitionsType::setEBayMotorsProAutoAcceptEnabled()
     * @uses FeatureDefinitionsType::setEBayMotorsProAutoDeclineEnabled()
     * @uses FeatureDefinitionsType::setEBayMotorsProPaymentMethodCheckOutEnabled()
     * @uses FeatureDefinitionsType::setEBayMotorsProShippingMethodEnabled()
     * @uses FeatureDefinitionsType::setEBayMotorsProCounterOfferEnabled()
     * @uses FeatureDefinitionsType::setEBayMotorsProSellerContactDetailsEnabled()
     * @uses FeatureDefinitionsType::setLocalMarketAdFormatEnabled()
     * @uses FeatureDefinitionsType::setLocalMarketContactByPhoneEnabled()
     * @uses FeatureDefinitionsType::setLocalMarketPhoneCount()
     * @uses FeatureDefinitionsType::setLocalMarketContactByAddressEnabled()
     * @uses FeatureDefinitionsType::setLocalMarketStreetCount()
     * @uses FeatureDefinitionsType::setLocalMarketCompanyNameEnabled()
     * @uses FeatureDefinitionsType::setLocalMarketContactByEmailEnabled()
     * @uses FeatureDefinitionsType::setLocalMarketBestOfferEnabled()
     * @uses FeatureDefinitionsType::setLocalMarketAutoAcceptEnabled()
     * @uses FeatureDefinitionsType::setLocalMarketAutoDeclineEnabled()
     * @uses FeatureDefinitionsType::setLocalMarketPaymentMethodCheckOutEnabled()
     * @uses FeatureDefinitionsType::setLocalMarketShippingMethodEnabled()
     * @uses FeatureDefinitionsType::setLocalMarketCounterOfferEnabled()
     * @uses FeatureDefinitionsType::setLocalMarketSellerContactDetailsEnabled()
     * @uses FeatureDefinitionsType::setClassifiedAdPhoneCount()
     * @uses FeatureDefinitionsType::setClassifiedAdContactByAddressEnabled()
     * @uses FeatureDefinitionsType::setClassifiedAdStreetCount()
     * @uses FeatureDefinitionsType::setClassifiedAdCompanyNameEnabled()
     * @uses FeatureDefinitionsType::setSpecialitySubscription()
     * @uses FeatureDefinitionsType::setRegularSubscription()
     * @uses FeatureDefinitionsType::setPremiumSubscription()
     * @uses FeatureDefinitionsType::setNonSubscription()
     * @uses FeatureDefinitionsType::setReturnPolicyEnabled()
     * @uses FeatureDefinitionsType::setHandlingTimeEnabled()
     * @uses FeatureDefinitionsType::setPayPalRequiredForStoreOwner()
     * @uses FeatureDefinitionsType::setReviseQuantityAllowed()
     * @uses FeatureDefinitionsType::setRevisePriceAllowed()
     * @uses FeatureDefinitionsType::setStoreOwnerExtendedListingDurationsEnabled()
     * @uses FeatureDefinitionsType::setStoreOwnerExtendedListingDurations()
     * @uses FeatureDefinitionsType::setPaymentMethod()
     * @uses FeatureDefinitionsType::setGroup1MaxFlatShippingCost()
     * @uses FeatureDefinitionsType::setGroup2MaxFlatShippingCost()
     * @uses FeatureDefinitionsType::setGroup3MaxFlatShippingCost()
     * @uses FeatureDefinitionsType::setMaxFlatShippingCostCBTExempt()
     * @uses FeatureDefinitionsType::setMaxFlatShippingCost()
     * @uses FeatureDefinitionsType::setVariationsEnabled()
     * @uses FeatureDefinitionsType::setAttributeConversionEnabled()
     * @uses FeatureDefinitionsType::setFreeGalleryPlusEnabled()
     * @uses FeatureDefinitionsType::setFreePicturePackEnabled()
     * @uses FeatureDefinitionsType::setItemCompatibilityEnabled()
     * @uses FeatureDefinitionsType::setMaxItemCompatibility()
     * @uses FeatureDefinitionsType::setMinItemCompatibility()
     * @uses FeatureDefinitionsType::setConditionEnabled()
     * @uses FeatureDefinitionsType::setConditionValues()
     * @uses FeatureDefinitionsType::setValueCategory()
     * @uses FeatureDefinitionsType::setProductCreationEnabled()
     * @uses FeatureDefinitionsType::setEANEnabled()
     * @uses FeatureDefinitionsType::setISBNEnabled()
     * @uses FeatureDefinitionsType::setUPCEnabled()
     * @uses FeatureDefinitionsType::setCompatibleVehicleType()
     * @uses FeatureDefinitionsType::setMaxGranularFitmentCount()
     * @uses FeatureDefinitionsType::setPaymentOptionsGroup()
     * @uses FeatureDefinitionsType::setShippingProfileCategoryGroup()
     * @uses FeatureDefinitionsType::setPaymentProfileCategoryGroup()
     * @uses FeatureDefinitionsType::setReturnPolicyProfileCategoryGroup()
     * @uses FeatureDefinitionsType::setVINSupported()
     * @uses FeatureDefinitionsType::setVRMSupported()
     * @uses FeatureDefinitionsType::setSellerProvidedTitleSupported()
     * @uses FeatureDefinitionsType::setDepositSupported()
     * @uses FeatureDefinitionsType::setGlobalShippingEnabled()
     * @uses FeatureDefinitionsType::setAdditionalCompatibilityEnabled()
     * @uses FeatureDefinitionsType::setAny()
     * @uses FeatureDefinitionsType::setPickupDropOffEnabled()
     * @uses FeatureDefinitionsType::setDigitalGoodDeliveryEnabled()
     * @uses FeatureDefinitionsType::setEpidSupported()
     * @uses FeatureDefinitionsType::setKTypeSupported()
     * @uses FeatureDefinitionsType::setProductRequiredEnabled()
     * @uses FeatureDefinitionsType::setDomesticReturnsAcceptedValues()
     * @uses FeatureDefinitionsType::setInternationalReturnsAcceptedValues()
     * @uses FeatureDefinitionsType::setDomesticReturnsDurationValues()
     * @uses FeatureDefinitionsType::setInternationalReturnsDurationValues()
     * @uses FeatureDefinitionsType::setDomesticReturnsShipmentPayeeValues()
     * @uses FeatureDefinitionsType::setInternationalReturnsShipmentPayeeValues()
     * @uses FeatureDefinitionsType::setDomesticRefundMethodValues()
     * @uses FeatureDefinitionsType::setInternationalRefundMethodValues()
     * @uses FeatureDefinitionsType::setReturnPolicyDescriptionEnabled()
     * @param \StructType\ListingDurationDefinitionsType $listingDurations
     * @param \StructType\ShippingTermRequiredDefinitionType $shippingTermsRequired
     * @param \StructType\BestOfferEnabledDefinitionType $bestOfferEnabled
     * @param \StructType\DutchBINEnabledDefinitionType $dutchBINEnabled
     * @param \StructType\UserConsentRequiredDefinitionType $userConsentRequired
     * @param \StructType\HomePageFeaturedEnabledDefinitionType $homePageFeaturedEnabled
     * @param \StructType\ProPackEnabledDefinitionType $proPackEnabled
     * @param \StructType\BasicUpgradePackEnabledDefinitionType $basicUpgradePackEnabled
     * @param \StructType\ValuePackEnabledDefinitionType $valuePackEnabled
     * @param \StructType\ProPackPlusEnabledDefinitionType $proPackPlusEnabled
     * @param \StructType\AdFormatEnabledDefinitionType $adFormatEnabled
     * @param \StructType\BestOfferCounterEnabledDefinitionType $bestOfferCounterEnabled
     * @param \StructType\BestOfferAutoDeclineEnabledDefinitionType $bestOfferAutoDeclineEnabled
     * @param \StructType\LocalMarketSpecialitySubscriptionDefinitionType $localMarketSpecialitySubscription
     * @param \StructType\LocalMarketRegularSubscriptionDefinitionType $localMarketRegularSubscription
     * @param \StructType\LocalMarketPremiumSubscriptionDefinitionType $localMarketPremiumSubscription
     * @param \StructType\LocalMarketNonSubscriptionDefinitionType $localMarketNonSubscription
     * @param \StructType\ExpressEnabledDefinitionType $expressEnabled
     * @param \StructType\ExpressPicturesRequiredDefinitionType $expressPicturesRequired
     * @param \StructType\ExpressConditionRequiredDefinitionType $expressConditionRequired
     * @param \StructType\MinimumReservePriceDefinitionType $minimumReservePrice
     * @param \StructType\TCREnabledDefinitionType $transactionConfirmationRequestEnabled
     * @param \StructType\SellerContactDetailsEnabledDefinitionType $sellerContactDetailsEnabled
     * @param \StructType\StoreInventoryEnabledDefinitionType $storeInventoryEnabled
     * @param \StructType\SkypeMeTransactionalEnabledDefinitionType $skypeMeTransactionalEnabled
     * @param \StructType\SkypeMeNonTransactionalEnabledDefinitionType $skypeMeNonTransactionalEnabled
     * @param \StructType\LocalListingDistancesRegularDefinitionType $localListingDistancesRegular
     * @param \StructType\LocalListingDistancesSpecialtyDefinitionType $localListingDistancesSpecialty
     * @param \StructType\LocalListingDistancesNonSubscriptionDefinitionType $localListingDistancesNonSubscription
     * @param \StructType\ClassifiedAdPaymentMethodEnabledDefinitionType $classifiedAdPaymentMethodEnabled
     * @param \StructType\ClassifiedAdShippingMethodEnabledDefinitionType $classifiedAdShippingMethodEnabled
     * @param \StructType\ClassifiedAdBestOfferEnabledDefinitionType $classifiedAdBestOfferEnabled
     * @param \StructType\ClassifiedAdCounterOfferEnabledDefinitionType $classifiedAdCounterOfferEnabled
     * @param \StructType\ClassifiedAdAutoDeclineEnabledDefinitionType $classifiedAdAutoDeclineEnabled
     * @param \StructType\ClassifiedAdContactByPhoneEnabledDefinitionType $classifiedAdContactByPhoneEnabled
     * @param \StructType\ClassifiedAdContactByEmailEnabledDefintionType $classifiedAdContactByEmailEnabled
     * @param \StructType\SafePaymentRequiredDefinitionType $safePaymentRequired
     * @param \StructType\ClassifiedAdPayPerLeadEnabledDefinitionType $classifiedAdPayPerLeadEnabled
     * @param \StructType\ItemSpecificsEnabledDefinitionType $itemSpecificsEnabled
     * @param \StructType\PaisaPayFullEscrowEnabledDefinitionType $paisaPayFullEscrowEnabled
     * @param \StructType\ISBNIdentifierEnabledDefinitionType $iSBNIdentifierEnabled
     * @param \StructType\UPCIdentifierEnabledDefinitionType $uPCIdentifierEnabled
     * @param \StructType\EANIdentifierEnabledDefinitionType $eANIdentifierEnabled
     * @param \StructType\BrandMPNIdentifierEnabledDefinitionType $brandMPNIdentifierEnabled
     * @param \StructType\BestOfferAutoAcceptEnabledDefinitionType $bestOfferAutoAcceptEnabled
     * @param \StructType\ClassifiedAdAutoAcceptEnabledDefinitionType $classifiedAdAutoAcceptEnabled
     * @param \StructType\CrossBorderTradeNorthAmericaEnabledDefinitionType $crossBorderTradeNorthAmericaEnabled
     * @param \StructType\CrossBorderTradeGBEnabledDefinitionType $crossBorderTradeGBEnabled
     * @param \StructType\CrossBorderTradeAustraliaEnabledDefinitionType $crossBorderTradeAustraliaEnabled
     * @param \StructType\PayPalBuyerProtectionEnabledDefinitionType $payPalBuyerProtectionEnabled
     * @param \StructType\BuyerGuaranteeEnabledDefinitionType $buyerGuaranteeEnabled
     * @param \StructType\CombinedFixedPriceTreatmentEnabledDefinitionType $combinedFixedPriceTreatmentEnabled
     * @param \StructType\ListingEnhancementDurationDefinitionType $galleryFeaturedDurations
     * @param \StructType\INEscrowWorkflowTimelineDefinitionType $iNEscrowWorkflowTimeline
     * @param \StructType\PayPalRequiredDefinitionType $payPalRequired
     * @param \StructType\EBayMotorsProAdFormatEnabledDefinitionType $eBayMotorsProAdFormatEnabled
     * @param \StructType\EBayMotorsProContactByPhoneEnabledDefinitionType $eBayMotorsProContactByPhoneEnabled
     * @param \StructType\EBayMotorsProPhoneCountDefinitionType $eBayMotorsProPhoneCount
     * @param \StructType\EBayMotorsProContactByAddressEnabledDefinitionType $eBayMotorsProContactByAddressEnabled
     * @param \StructType\EBayMotorsProStreetCountDefinitionType $eBayMotorsProStreetCount
     * @param \StructType\EBayMotorsProCompanyNameEnabledDefinitionType $eBayMotorsProCompanyNameEnabled
     * @param \StructType\EBayMotorsProContactByEmailEnabledDefinitionType $eBayMotorsProContactByEmailEnabled
     * @param \StructType\EBayMotorsProBestOfferEnabledDefinitionType $eBayMotorsProBestOfferEnabled
     * @param \StructType\EBayMotorsProAutoAcceptEnabledDefinitionType $eBayMotorsProAutoAcceptEnabled
     * @param \StructType\EBayMotorsProAutoDeclineEnabledDefinitionType $eBayMotorsProAutoDeclineEnabled
     * @param \StructType\EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType $eBayMotorsProPaymentMethodCheckOutEnabled
     * @param \StructType\EBayMotorsProShippingMethodEnabledDefinitionType $eBayMotorsProShippingMethodEnabled
     * @param \StructType\EBayMotorsProCounterOfferEnabledDefinitionType $eBayMotorsProCounterOfferEnabled
     * @param \StructType\EBayMotorsProSellerContactDetailsEnabledDefinitionType $eBayMotorsProSellerContactDetailsEnabled
     * @param \StructType\LocalMarketAdFormatEnabledDefinitionType $localMarketAdFormatEnabled
     * @param \StructType\LocalMarketContactByPhoneEnabledDefinitionType $localMarketContactByPhoneEnabled
     * @param \StructType\LocalMarketPhoneCountDefinitionType $localMarketPhoneCount
     * @param \StructType\LocalMarketContactByAddressEnabledDefinitionType $localMarketContactByAddressEnabled
     * @param \StructType\LocalMarketStreetCountDefinitionType $localMarketStreetCount
     * @param \StructType\LocalMarketCompanyNameEnabledDefinitionType $localMarketCompanyNameEnabled
     * @param \StructType\LocalMarketContactByEmailEnabledDefinitionType $localMarketContactByEmailEnabled
     * @param \StructType\LocalMarketBestOfferEnabledDefinitionType $localMarketBestOfferEnabled
     * @param \StructType\LocalMarketAutoAcceptEnabledDefinitionType $localMarketAutoAcceptEnabled
     * @param \StructType\LocalMarketAutoDeclineEnabledDefinitionType $localMarketAutoDeclineEnabled
     * @param \StructType\LocalMarketPaymentMethodCheckOutEnabledDefinitionType $localMarketPaymentMethodCheckOutEnabled
     * @param \StructType\LocalMarketShippingMethodEnabledDefinitionType $localMarketShippingMethodEnabled
     * @param \StructType\LocalMarketCounterOfferEnabledDefinitionType $localMarketCounterOfferEnabled
     * @param \StructType\LocalMarketSellerContactDetailsEnabledDefinitionType $localMarketSellerContactDetailsEnabled
     * @param \StructType\ClassifiedAdPhoneCountDefinitionType $classifiedAdPhoneCount
     * @param \StructType\ClassifiedAdContactByAddressEnabledDefinitionType $classifiedAdContactByAddressEnabled
     * @param \StructType\ClassifiedAdStreetCountDefinitionType $classifiedAdStreetCount
     * @param \StructType\ClassifiedAdCompanyNameEnabledDefinitionType $classifiedAdCompanyNameEnabled
     * @param \StructType\SpecialitySubscriptionDefinitionType $specialitySubscription
     * @param \StructType\RegularSubscriptionDefinitionType $regularSubscription
     * @param \StructType\PremiumSubscriptionDefinitionType $premiumSubscription
     * @param \StructType\NonSubscriptionDefinitionType $nonSubscription
     * @param \StructType\ReturnPolicyEnabledDefinitionType $returnPolicyEnabled
     * @param \StructType\HandlingTimeEnabledDefinitionType $handlingTimeEnabled
     * @param \StructType\PayPalRequiredForStoreOwnerDefinitionType $payPalRequiredForStoreOwner
     * @param \StructType\ReviseQuantityAllowedDefinitionType $reviseQuantityAllowed
     * @param \StructType\RevisePriceAllowedDefinitionType $revisePriceAllowed
     * @param \StructType\StoreOwnerExtendedListingDurationsEnabledDefinitionType $storeOwnerExtendedListingDurationsEnabled
     * @param \StructType\StoreOwnerExtendedListingDurationsDefinitionType $storeOwnerExtendedListingDurations
     * @param \StructType\PaymentMethodDefinitionType $paymentMethod
     * @param \StructType\Group1MaxFlatShippingCostDefinitionType $group1MaxFlatShippingCost
     * @param \StructType\Group2MaxFlatShippingCostDefinitionType $group2MaxFlatShippingCost
     * @param \StructType\Group3MaxFlatShippingCostDefinitionType $group3MaxFlatShippingCost
     * @param \StructType\MaxFlatShippingCostCBTExemptDefinitionType $maxFlatShippingCostCBTExempt
     * @param \StructType\MaxFlatShippingCostDefinitionType $maxFlatShippingCost
     * @param \StructType\VariationsEnabledDefinitionType $variationsEnabled
     * @param \StructType\AttributeConversionEnabledFeatureDefinitionType $attributeConversionEnabled
     * @param \StructType\FreeGalleryPlusEnabledDefinitionType $freeGalleryPlusEnabled
     * @param \StructType\FreePicturePackEnabledDefinitionType $freePicturePackEnabled
     * @param \StructType\ItemCompatibilityEnabledDefinitionType $itemCompatibilityEnabled
     * @param \StructType\MaxItemCompatibilityDefinitionType $maxItemCompatibility
     * @param \StructType\MinItemCompatibilityDefinitionType $minItemCompatibility
     * @param \StructType\ConditionEnabledDefinitionType $conditionEnabled
     * @param \StructType\ConditionValuesDefinitionType $conditionValues
     * @param \StructType\ValueCategoryDefinitionType $valueCategory
     * @param \StructType\ProductCreationEnabledDefinitionType $productCreationEnabled
     * @param \StructType\EANEnabledDefinitionType $eANEnabled
     * @param \StructType\ISBNEnabledDefinitionType $iSBNEnabled
     * @param \StructType\UPCEnabledDefinitionType $uPCEnabled
     * @param \StructType\CompatibleVehicleTypeDefinitionType $compatibleVehicleType
     * @param \StructType\MaxGranularFitmentCountDefinitionType $maxGranularFitmentCount
     * @param \StructType\PaymentOptionsGroupEnabledDefinitionType $paymentOptionsGroup
     * @param \StructType\ProfileCategoryGroupDefinitionType $shippingProfileCategoryGroup
     * @param \StructType\ProfileCategoryGroupDefinitionType $paymentProfileCategoryGroup
     * @param \StructType\ProfileCategoryGroupDefinitionType $returnPolicyProfileCategoryGroup
     * @param \StructType\VINSupportedDefinitionType $vINSupported
     * @param \StructType\VRMSupportedDefinitionType $vRMSupported
     * @param \StructType\SellerProvidedTitleSupportedDefinitionType $sellerProvidedTitleSupported
     * @param \StructType\DepositSupportedDefinitionType $depositSupported
     * @param \StructType\GlobalShippingEnabledDefinitionType $globalShippingEnabled
     * @param \StructType\AdditionalCompatibilityEnabledDefinitionType $additionalCompatibilityEnabled
     * @param \DOMDocument $any
     * @param \StructType\PickupDropOffEnabledDefinitionType $pickupDropOffEnabled
     * @param \StructType\DigitalGoodDeliveryEnabledDefinitionType $digitalGoodDeliveryEnabled
     * @param \StructType\EpidSupportedDefinitionType $epidSupported
     * @param \StructType\KTypeSupportedDefinitionType $kTypeSupported
     * @param \StructType\ProductRequiredEnabledDefinitionType $productRequiredEnabled
     * @param \StructType\DomesticReturnsAcceptedDefinitionType $domesticReturnsAcceptedValues
     * @param \StructType\InternationalReturnsAcceptedDefinitionType $internationalReturnsAcceptedValues
     * @param \StructType\DomesticReturnsDurationDefinitionType $domesticReturnsDurationValues
     * @param \StructType\InternationalReturnsDurationDefinitionType $internationalReturnsDurationValues
     * @param \StructType\DomesticReturnsShipmentPayeeDefinitionType $domesticReturnsShipmentPayeeValues
     * @param \StructType\InternationalReturnsShipmentPayeeDefinitionType $internationalReturnsShipmentPayeeValues
     * @param \StructType\DomesticRefundMethodCodeType $domesticRefundMethodValues
     * @param \StructType\InternationalRefundMethodCodeType $internationalRefundMethodValues
     * @param \StructType\ReturnPolicyDescriptionEnabledDefinitionType $returnPolicyDescriptionEnabled
     */
    public function __construct(\StructType\ListingDurationDefinitionsType $listingDurations = null, \StructType\ShippingTermRequiredDefinitionType $shippingTermsRequired = null, \StructType\BestOfferEnabledDefinitionType $bestOfferEnabled = null, \StructType\DutchBINEnabledDefinitionType $dutchBINEnabled = null, \StructType\UserConsentRequiredDefinitionType $userConsentRequired = null, \StructType\HomePageFeaturedEnabledDefinitionType $homePageFeaturedEnabled = null, \StructType\ProPackEnabledDefinitionType $proPackEnabled = null, \StructType\BasicUpgradePackEnabledDefinitionType $basicUpgradePackEnabled = null, \StructType\ValuePackEnabledDefinitionType $valuePackEnabled = null, \StructType\ProPackPlusEnabledDefinitionType $proPackPlusEnabled = null, \StructType\AdFormatEnabledDefinitionType $adFormatEnabled = null, \StructType\BestOfferCounterEnabledDefinitionType $bestOfferCounterEnabled = null, \StructType\BestOfferAutoDeclineEnabledDefinitionType $bestOfferAutoDeclineEnabled = null, \StructType\LocalMarketSpecialitySubscriptionDefinitionType $localMarketSpecialitySubscription = null, \StructType\LocalMarketRegularSubscriptionDefinitionType $localMarketRegularSubscription = null, \StructType\LocalMarketPremiumSubscriptionDefinitionType $localMarketPremiumSubscription = null, \StructType\LocalMarketNonSubscriptionDefinitionType $localMarketNonSubscription = null, \StructType\ExpressEnabledDefinitionType $expressEnabled = null, \StructType\ExpressPicturesRequiredDefinitionType $expressPicturesRequired = null, \StructType\ExpressConditionRequiredDefinitionType $expressConditionRequired = null, \StructType\MinimumReservePriceDefinitionType $minimumReservePrice = null, \StructType\TCREnabledDefinitionType $transactionConfirmationRequestEnabled = null, \StructType\SellerContactDetailsEnabledDefinitionType $sellerContactDetailsEnabled = null, \StructType\StoreInventoryEnabledDefinitionType $storeInventoryEnabled = null, \StructType\SkypeMeTransactionalEnabledDefinitionType $skypeMeTransactionalEnabled = null, \StructType\SkypeMeNonTransactionalEnabledDefinitionType $skypeMeNonTransactionalEnabled = null, \StructType\LocalListingDistancesRegularDefinitionType $localListingDistancesRegular = null, \StructType\LocalListingDistancesSpecialtyDefinitionType $localListingDistancesSpecialty = null, \StructType\LocalListingDistancesNonSubscriptionDefinitionType $localListingDistancesNonSubscription = null, \StructType\ClassifiedAdPaymentMethodEnabledDefinitionType $classifiedAdPaymentMethodEnabled = null, \StructType\ClassifiedAdShippingMethodEnabledDefinitionType $classifiedAdShippingMethodEnabled = null, \StructType\ClassifiedAdBestOfferEnabledDefinitionType $classifiedAdBestOfferEnabled = null, \StructType\ClassifiedAdCounterOfferEnabledDefinitionType $classifiedAdCounterOfferEnabled = null, \StructType\ClassifiedAdAutoDeclineEnabledDefinitionType $classifiedAdAutoDeclineEnabled = null, \StructType\ClassifiedAdContactByPhoneEnabledDefinitionType $classifiedAdContactByPhoneEnabled = null, \StructType\ClassifiedAdContactByEmailEnabledDefintionType $classifiedAdContactByEmailEnabled = null, \StructType\SafePaymentRequiredDefinitionType $safePaymentRequired = null, \StructType\ClassifiedAdPayPerLeadEnabledDefinitionType $classifiedAdPayPerLeadEnabled = null, \StructType\ItemSpecificsEnabledDefinitionType $itemSpecificsEnabled = null, \StructType\PaisaPayFullEscrowEnabledDefinitionType $paisaPayFullEscrowEnabled = null, \StructType\ISBNIdentifierEnabledDefinitionType $iSBNIdentifierEnabled = null, \StructType\UPCIdentifierEnabledDefinitionType $uPCIdentifierEnabled = null, \StructType\EANIdentifierEnabledDefinitionType $eANIdentifierEnabled = null, \StructType\BrandMPNIdentifierEnabledDefinitionType $brandMPNIdentifierEnabled = null, \StructType\BestOfferAutoAcceptEnabledDefinitionType $bestOfferAutoAcceptEnabled = null, \StructType\ClassifiedAdAutoAcceptEnabledDefinitionType $classifiedAdAutoAcceptEnabled = null, \StructType\CrossBorderTradeNorthAmericaEnabledDefinitionType $crossBorderTradeNorthAmericaEnabled = null, \StructType\CrossBorderTradeGBEnabledDefinitionType $crossBorderTradeGBEnabled = null, \StructType\CrossBorderTradeAustraliaEnabledDefinitionType $crossBorderTradeAustraliaEnabled = null, \StructType\PayPalBuyerProtectionEnabledDefinitionType $payPalBuyerProtectionEnabled = null, \StructType\BuyerGuaranteeEnabledDefinitionType $buyerGuaranteeEnabled = null, \StructType\CombinedFixedPriceTreatmentEnabledDefinitionType $combinedFixedPriceTreatmentEnabled = null, \StructType\ListingEnhancementDurationDefinitionType $galleryFeaturedDurations = null, \StructType\INEscrowWorkflowTimelineDefinitionType $iNEscrowWorkflowTimeline = null, \StructType\PayPalRequiredDefinitionType $payPalRequired = null, \StructType\EBayMotorsProAdFormatEnabledDefinitionType $eBayMotorsProAdFormatEnabled = null, \StructType\EBayMotorsProContactByPhoneEnabledDefinitionType $eBayMotorsProContactByPhoneEnabled = null, \StructType\EBayMotorsProPhoneCountDefinitionType $eBayMotorsProPhoneCount = null, \StructType\EBayMotorsProContactByAddressEnabledDefinitionType $eBayMotorsProContactByAddressEnabled = null, \StructType\EBayMotorsProStreetCountDefinitionType $eBayMotorsProStreetCount = null, \StructType\EBayMotorsProCompanyNameEnabledDefinitionType $eBayMotorsProCompanyNameEnabled = null, \StructType\EBayMotorsProContactByEmailEnabledDefinitionType $eBayMotorsProContactByEmailEnabled = null, \StructType\EBayMotorsProBestOfferEnabledDefinitionType $eBayMotorsProBestOfferEnabled = null, \StructType\EBayMotorsProAutoAcceptEnabledDefinitionType $eBayMotorsProAutoAcceptEnabled = null, \StructType\EBayMotorsProAutoDeclineEnabledDefinitionType $eBayMotorsProAutoDeclineEnabled = null, \StructType\EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType $eBayMotorsProPaymentMethodCheckOutEnabled = null, \StructType\EBayMotorsProShippingMethodEnabledDefinitionType $eBayMotorsProShippingMethodEnabled = null, \StructType\EBayMotorsProCounterOfferEnabledDefinitionType $eBayMotorsProCounterOfferEnabled = null, \StructType\EBayMotorsProSellerContactDetailsEnabledDefinitionType $eBayMotorsProSellerContactDetailsEnabled = null, \StructType\LocalMarketAdFormatEnabledDefinitionType $localMarketAdFormatEnabled = null, \StructType\LocalMarketContactByPhoneEnabledDefinitionType $localMarketContactByPhoneEnabled = null, \StructType\LocalMarketPhoneCountDefinitionType $localMarketPhoneCount = null, \StructType\LocalMarketContactByAddressEnabledDefinitionType $localMarketContactByAddressEnabled = null, \StructType\LocalMarketStreetCountDefinitionType $localMarketStreetCount = null, \StructType\LocalMarketCompanyNameEnabledDefinitionType $localMarketCompanyNameEnabled = null, \StructType\LocalMarketContactByEmailEnabledDefinitionType $localMarketContactByEmailEnabled = null, \StructType\LocalMarketBestOfferEnabledDefinitionType $localMarketBestOfferEnabled = null, \StructType\LocalMarketAutoAcceptEnabledDefinitionType $localMarketAutoAcceptEnabled = null, \StructType\LocalMarketAutoDeclineEnabledDefinitionType $localMarketAutoDeclineEnabled = null, \StructType\LocalMarketPaymentMethodCheckOutEnabledDefinitionType $localMarketPaymentMethodCheckOutEnabled = null, \StructType\LocalMarketShippingMethodEnabledDefinitionType $localMarketShippingMethodEnabled = null, \StructType\LocalMarketCounterOfferEnabledDefinitionType $localMarketCounterOfferEnabled = null, \StructType\LocalMarketSellerContactDetailsEnabledDefinitionType $localMarketSellerContactDetailsEnabled = null, \StructType\ClassifiedAdPhoneCountDefinitionType $classifiedAdPhoneCount = null, \StructType\ClassifiedAdContactByAddressEnabledDefinitionType $classifiedAdContactByAddressEnabled = null, \StructType\ClassifiedAdStreetCountDefinitionType $classifiedAdStreetCount = null, \StructType\ClassifiedAdCompanyNameEnabledDefinitionType $classifiedAdCompanyNameEnabled = null, \StructType\SpecialitySubscriptionDefinitionType $specialitySubscription = null, \StructType\RegularSubscriptionDefinitionType $regularSubscription = null, \StructType\PremiumSubscriptionDefinitionType $premiumSubscription = null, \StructType\NonSubscriptionDefinitionType $nonSubscription = null, \StructType\ReturnPolicyEnabledDefinitionType $returnPolicyEnabled = null, \StructType\HandlingTimeEnabledDefinitionType $handlingTimeEnabled = null, \StructType\PayPalRequiredForStoreOwnerDefinitionType $payPalRequiredForStoreOwner = null, \StructType\ReviseQuantityAllowedDefinitionType $reviseQuantityAllowed = null, \StructType\RevisePriceAllowedDefinitionType $revisePriceAllowed = null, \StructType\StoreOwnerExtendedListingDurationsEnabledDefinitionType $storeOwnerExtendedListingDurationsEnabled = null, \StructType\StoreOwnerExtendedListingDurationsDefinitionType $storeOwnerExtendedListingDurations = null, \StructType\PaymentMethodDefinitionType $paymentMethod = null, \StructType\Group1MaxFlatShippingCostDefinitionType $group1MaxFlatShippingCost = null, \StructType\Group2MaxFlatShippingCostDefinitionType $group2MaxFlatShippingCost = null, \StructType\Group3MaxFlatShippingCostDefinitionType $group3MaxFlatShippingCost = null, \StructType\MaxFlatShippingCostCBTExemptDefinitionType $maxFlatShippingCostCBTExempt = null, \StructType\MaxFlatShippingCostDefinitionType $maxFlatShippingCost = null, \StructType\VariationsEnabledDefinitionType $variationsEnabled = null, \StructType\AttributeConversionEnabledFeatureDefinitionType $attributeConversionEnabled = null, \StructType\FreeGalleryPlusEnabledDefinitionType $freeGalleryPlusEnabled = null, \StructType\FreePicturePackEnabledDefinitionType $freePicturePackEnabled = null, \StructType\ItemCompatibilityEnabledDefinitionType $itemCompatibilityEnabled = null, \StructType\MaxItemCompatibilityDefinitionType $maxItemCompatibility = null, \StructType\MinItemCompatibilityDefinitionType $minItemCompatibility = null, \StructType\ConditionEnabledDefinitionType $conditionEnabled = null, \StructType\ConditionValuesDefinitionType $conditionValues = null, \StructType\ValueCategoryDefinitionType $valueCategory = null, \StructType\ProductCreationEnabledDefinitionType $productCreationEnabled = null, \StructType\EANEnabledDefinitionType $eANEnabled = null, \StructType\ISBNEnabledDefinitionType $iSBNEnabled = null, \StructType\UPCEnabledDefinitionType $uPCEnabled = null, \StructType\CompatibleVehicleTypeDefinitionType $compatibleVehicleType = null, \StructType\MaxGranularFitmentCountDefinitionType $maxGranularFitmentCount = null, \StructType\PaymentOptionsGroupEnabledDefinitionType $paymentOptionsGroup = null, \StructType\ProfileCategoryGroupDefinitionType $shippingProfileCategoryGroup = null, \StructType\ProfileCategoryGroupDefinitionType $paymentProfileCategoryGroup = null, \StructType\ProfileCategoryGroupDefinitionType $returnPolicyProfileCategoryGroup = null, \StructType\VINSupportedDefinitionType $vINSupported = null, \StructType\VRMSupportedDefinitionType $vRMSupported = null, \StructType\SellerProvidedTitleSupportedDefinitionType $sellerProvidedTitleSupported = null, \StructType\DepositSupportedDefinitionType $depositSupported = null, \StructType\GlobalShippingEnabledDefinitionType $globalShippingEnabled = null, \StructType\AdditionalCompatibilityEnabledDefinitionType $additionalCompatibilityEnabled = null, \DOMDocument $any = null, \StructType\PickupDropOffEnabledDefinitionType $pickupDropOffEnabled = null, \StructType\DigitalGoodDeliveryEnabledDefinitionType $digitalGoodDeliveryEnabled = null, \StructType\EpidSupportedDefinitionType $epidSupported = null, \StructType\KTypeSupportedDefinitionType $kTypeSupported = null, \StructType\ProductRequiredEnabledDefinitionType $productRequiredEnabled = null, \StructType\DomesticReturnsAcceptedDefinitionType $domesticReturnsAcceptedValues = null, \StructType\InternationalReturnsAcceptedDefinitionType $internationalReturnsAcceptedValues = null, \StructType\DomesticReturnsDurationDefinitionType $domesticReturnsDurationValues = null, \StructType\InternationalReturnsDurationDefinitionType $internationalReturnsDurationValues = null, \StructType\DomesticReturnsShipmentPayeeDefinitionType $domesticReturnsShipmentPayeeValues = null, \StructType\InternationalReturnsShipmentPayeeDefinitionType $internationalReturnsShipmentPayeeValues = null, \StructType\DomesticRefundMethodCodeType $domesticRefundMethodValues = null, \StructType\InternationalRefundMethodCodeType $internationalRefundMethodValues = null, \StructType\ReturnPolicyDescriptionEnabledDefinitionType $returnPolicyDescriptionEnabled = null)
    {
        $this
            ->setListingDurations($listingDurations)
            ->setShippingTermsRequired($shippingTermsRequired)
            ->setBestOfferEnabled($bestOfferEnabled)
            ->setDutchBINEnabled($dutchBINEnabled)
            ->setUserConsentRequired($userConsentRequired)
            ->setHomePageFeaturedEnabled($homePageFeaturedEnabled)
            ->setProPackEnabled($proPackEnabled)
            ->setBasicUpgradePackEnabled($basicUpgradePackEnabled)
            ->setValuePackEnabled($valuePackEnabled)
            ->setProPackPlusEnabled($proPackPlusEnabled)
            ->setAdFormatEnabled($adFormatEnabled)
            ->setBestOfferCounterEnabled($bestOfferCounterEnabled)
            ->setBestOfferAutoDeclineEnabled($bestOfferAutoDeclineEnabled)
            ->setLocalMarketSpecialitySubscription($localMarketSpecialitySubscription)
            ->setLocalMarketRegularSubscription($localMarketRegularSubscription)
            ->setLocalMarketPremiumSubscription($localMarketPremiumSubscription)
            ->setLocalMarketNonSubscription($localMarketNonSubscription)
            ->setExpressEnabled($expressEnabled)
            ->setExpressPicturesRequired($expressPicturesRequired)
            ->setExpressConditionRequired($expressConditionRequired)
            ->setMinimumReservePrice($minimumReservePrice)
            ->setTransactionConfirmationRequestEnabled($transactionConfirmationRequestEnabled)
            ->setSellerContactDetailsEnabled($sellerContactDetailsEnabled)
            ->setStoreInventoryEnabled($storeInventoryEnabled)
            ->setSkypeMeTransactionalEnabled($skypeMeTransactionalEnabled)
            ->setSkypeMeNonTransactionalEnabled($skypeMeNonTransactionalEnabled)
            ->setLocalListingDistancesRegular($localListingDistancesRegular)
            ->setLocalListingDistancesSpecialty($localListingDistancesSpecialty)
            ->setLocalListingDistancesNonSubscription($localListingDistancesNonSubscription)
            ->setClassifiedAdPaymentMethodEnabled($classifiedAdPaymentMethodEnabled)
            ->setClassifiedAdShippingMethodEnabled($classifiedAdShippingMethodEnabled)
            ->setClassifiedAdBestOfferEnabled($classifiedAdBestOfferEnabled)
            ->setClassifiedAdCounterOfferEnabled($classifiedAdCounterOfferEnabled)
            ->setClassifiedAdAutoDeclineEnabled($classifiedAdAutoDeclineEnabled)
            ->setClassifiedAdContactByPhoneEnabled($classifiedAdContactByPhoneEnabled)
            ->setClassifiedAdContactByEmailEnabled($classifiedAdContactByEmailEnabled)
            ->setSafePaymentRequired($safePaymentRequired)
            ->setClassifiedAdPayPerLeadEnabled($classifiedAdPayPerLeadEnabled)
            ->setItemSpecificsEnabled($itemSpecificsEnabled)
            ->setPaisaPayFullEscrowEnabled($paisaPayFullEscrowEnabled)
            ->setISBNIdentifierEnabled($iSBNIdentifierEnabled)
            ->setUPCIdentifierEnabled($uPCIdentifierEnabled)
            ->setEANIdentifierEnabled($eANIdentifierEnabled)
            ->setBrandMPNIdentifierEnabled($brandMPNIdentifierEnabled)
            ->setBestOfferAutoAcceptEnabled($bestOfferAutoAcceptEnabled)
            ->setClassifiedAdAutoAcceptEnabled($classifiedAdAutoAcceptEnabled)
            ->setCrossBorderTradeNorthAmericaEnabled($crossBorderTradeNorthAmericaEnabled)
            ->setCrossBorderTradeGBEnabled($crossBorderTradeGBEnabled)
            ->setCrossBorderTradeAustraliaEnabled($crossBorderTradeAustraliaEnabled)
            ->setPayPalBuyerProtectionEnabled($payPalBuyerProtectionEnabled)
            ->setBuyerGuaranteeEnabled($buyerGuaranteeEnabled)
            ->setCombinedFixedPriceTreatmentEnabled($combinedFixedPriceTreatmentEnabled)
            ->setGalleryFeaturedDurations($galleryFeaturedDurations)
            ->setINEscrowWorkflowTimeline($iNEscrowWorkflowTimeline)
            ->setPayPalRequired($payPalRequired)
            ->setEBayMotorsProAdFormatEnabled($eBayMotorsProAdFormatEnabled)
            ->setEBayMotorsProContactByPhoneEnabled($eBayMotorsProContactByPhoneEnabled)
            ->setEBayMotorsProPhoneCount($eBayMotorsProPhoneCount)
            ->setEBayMotorsProContactByAddressEnabled($eBayMotorsProContactByAddressEnabled)
            ->setEBayMotorsProStreetCount($eBayMotorsProStreetCount)
            ->setEBayMotorsProCompanyNameEnabled($eBayMotorsProCompanyNameEnabled)
            ->setEBayMotorsProContactByEmailEnabled($eBayMotorsProContactByEmailEnabled)
            ->setEBayMotorsProBestOfferEnabled($eBayMotorsProBestOfferEnabled)
            ->setEBayMotorsProAutoAcceptEnabled($eBayMotorsProAutoAcceptEnabled)
            ->setEBayMotorsProAutoDeclineEnabled($eBayMotorsProAutoDeclineEnabled)
            ->setEBayMotorsProPaymentMethodCheckOutEnabled($eBayMotorsProPaymentMethodCheckOutEnabled)
            ->setEBayMotorsProShippingMethodEnabled($eBayMotorsProShippingMethodEnabled)
            ->setEBayMotorsProCounterOfferEnabled($eBayMotorsProCounterOfferEnabled)
            ->setEBayMotorsProSellerContactDetailsEnabled($eBayMotorsProSellerContactDetailsEnabled)
            ->setLocalMarketAdFormatEnabled($localMarketAdFormatEnabled)
            ->setLocalMarketContactByPhoneEnabled($localMarketContactByPhoneEnabled)
            ->setLocalMarketPhoneCount($localMarketPhoneCount)
            ->setLocalMarketContactByAddressEnabled($localMarketContactByAddressEnabled)
            ->setLocalMarketStreetCount($localMarketStreetCount)
            ->setLocalMarketCompanyNameEnabled($localMarketCompanyNameEnabled)
            ->setLocalMarketContactByEmailEnabled($localMarketContactByEmailEnabled)
            ->setLocalMarketBestOfferEnabled($localMarketBestOfferEnabled)
            ->setLocalMarketAutoAcceptEnabled($localMarketAutoAcceptEnabled)
            ->setLocalMarketAutoDeclineEnabled($localMarketAutoDeclineEnabled)
            ->setLocalMarketPaymentMethodCheckOutEnabled($localMarketPaymentMethodCheckOutEnabled)
            ->setLocalMarketShippingMethodEnabled($localMarketShippingMethodEnabled)
            ->setLocalMarketCounterOfferEnabled($localMarketCounterOfferEnabled)
            ->setLocalMarketSellerContactDetailsEnabled($localMarketSellerContactDetailsEnabled)
            ->setClassifiedAdPhoneCount($classifiedAdPhoneCount)
            ->setClassifiedAdContactByAddressEnabled($classifiedAdContactByAddressEnabled)
            ->setClassifiedAdStreetCount($classifiedAdStreetCount)
            ->setClassifiedAdCompanyNameEnabled($classifiedAdCompanyNameEnabled)
            ->setSpecialitySubscription($specialitySubscription)
            ->setRegularSubscription($regularSubscription)
            ->setPremiumSubscription($premiumSubscription)
            ->setNonSubscription($nonSubscription)
            ->setReturnPolicyEnabled($returnPolicyEnabled)
            ->setHandlingTimeEnabled($handlingTimeEnabled)
            ->setPayPalRequiredForStoreOwner($payPalRequiredForStoreOwner)
            ->setReviseQuantityAllowed($reviseQuantityAllowed)
            ->setRevisePriceAllowed($revisePriceAllowed)
            ->setStoreOwnerExtendedListingDurationsEnabled($storeOwnerExtendedListingDurationsEnabled)
            ->setStoreOwnerExtendedListingDurations($storeOwnerExtendedListingDurations)
            ->setPaymentMethod($paymentMethod)
            ->setGroup1MaxFlatShippingCost($group1MaxFlatShippingCost)
            ->setGroup2MaxFlatShippingCost($group2MaxFlatShippingCost)
            ->setGroup3MaxFlatShippingCost($group3MaxFlatShippingCost)
            ->setMaxFlatShippingCostCBTExempt($maxFlatShippingCostCBTExempt)
            ->setMaxFlatShippingCost($maxFlatShippingCost)
            ->setVariationsEnabled($variationsEnabled)
            ->setAttributeConversionEnabled($attributeConversionEnabled)
            ->setFreeGalleryPlusEnabled($freeGalleryPlusEnabled)
            ->setFreePicturePackEnabled($freePicturePackEnabled)
            ->setItemCompatibilityEnabled($itemCompatibilityEnabled)
            ->setMaxItemCompatibility($maxItemCompatibility)
            ->setMinItemCompatibility($minItemCompatibility)
            ->setConditionEnabled($conditionEnabled)
            ->setConditionValues($conditionValues)
            ->setValueCategory($valueCategory)
            ->setProductCreationEnabled($productCreationEnabled)
            ->setEANEnabled($eANEnabled)
            ->setISBNEnabled($iSBNEnabled)
            ->setUPCEnabled($uPCEnabled)
            ->setCompatibleVehicleType($compatibleVehicleType)
            ->setMaxGranularFitmentCount($maxGranularFitmentCount)
            ->setPaymentOptionsGroup($paymentOptionsGroup)
            ->setShippingProfileCategoryGroup($shippingProfileCategoryGroup)
            ->setPaymentProfileCategoryGroup($paymentProfileCategoryGroup)
            ->setReturnPolicyProfileCategoryGroup($returnPolicyProfileCategoryGroup)
            ->setVINSupported($vINSupported)
            ->setVRMSupported($vRMSupported)
            ->setSellerProvidedTitleSupported($sellerProvidedTitleSupported)
            ->setDepositSupported($depositSupported)
            ->setGlobalShippingEnabled($globalShippingEnabled)
            ->setAdditionalCompatibilityEnabled($additionalCompatibilityEnabled)
            ->setAny($any)
            ->setPickupDropOffEnabled($pickupDropOffEnabled)
            ->setDigitalGoodDeliveryEnabled($digitalGoodDeliveryEnabled)
            ->setEpidSupported($epidSupported)
            ->setKTypeSupported($kTypeSupported)
            ->setProductRequiredEnabled($productRequiredEnabled)
            ->setDomesticReturnsAcceptedValues($domesticReturnsAcceptedValues)
            ->setInternationalReturnsAcceptedValues($internationalReturnsAcceptedValues)
            ->setDomesticReturnsDurationValues($domesticReturnsDurationValues)
            ->setInternationalReturnsDurationValues($internationalReturnsDurationValues)
            ->setDomesticReturnsShipmentPayeeValues($domesticReturnsShipmentPayeeValues)
            ->setInternationalReturnsShipmentPayeeValues($internationalReturnsShipmentPayeeValues)
            ->setDomesticRefundMethodValues($domesticRefundMethodValues)
            ->setInternationalRefundMethodValues($internationalRefundMethodValues)
            ->setReturnPolicyDescriptionEnabled($returnPolicyDescriptionEnabled);
    }
    /**
     * Get ListingDurations value
     * @return \StructType\ListingDurationDefinitionsType|null
     */
    public function getListingDurations()
    {
        return $this->ListingDurations;
    }
    /**
     * Set ListingDurations value
     * @param \StructType\ListingDurationDefinitionsType $listingDurations
     * @return \StructType\FeatureDefinitionsType
     */
    public function setListingDurations(\StructType\ListingDurationDefinitionsType $listingDurations = null)
    {
        $this->ListingDurations = $listingDurations;
        return $this;
    }
    /**
     * Get ShippingTermsRequired value
     * @return \StructType\ShippingTermRequiredDefinitionType|null
     */
    public function getShippingTermsRequired()
    {
        return $this->ShippingTermsRequired;
    }
    /**
     * Set ShippingTermsRequired value
     * @param \StructType\ShippingTermRequiredDefinitionType $shippingTermsRequired
     * @return \StructType\FeatureDefinitionsType
     */
    public function setShippingTermsRequired(\StructType\ShippingTermRequiredDefinitionType $shippingTermsRequired = null)
    {
        $this->ShippingTermsRequired = $shippingTermsRequired;
        return $this;
    }
    /**
     * Get BestOfferEnabled value
     * @return \StructType\BestOfferEnabledDefinitionType|null
     */
    public function getBestOfferEnabled()
    {
        return $this->BestOfferEnabled;
    }
    /**
     * Set BestOfferEnabled value
     * @param \StructType\BestOfferEnabledDefinitionType $bestOfferEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setBestOfferEnabled(\StructType\BestOfferEnabledDefinitionType $bestOfferEnabled = null)
    {
        $this->BestOfferEnabled = $bestOfferEnabled;
        return $this;
    }
    /**
     * Get DutchBINEnabled value
     * @return \StructType\DutchBINEnabledDefinitionType|null
     */
    public function getDutchBINEnabled()
    {
        return $this->DutchBINEnabled;
    }
    /**
     * Set DutchBINEnabled value
     * @param \StructType\DutchBINEnabledDefinitionType $dutchBINEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setDutchBINEnabled(\StructType\DutchBINEnabledDefinitionType $dutchBINEnabled = null)
    {
        $this->DutchBINEnabled = $dutchBINEnabled;
        return $this;
    }
    /**
     * Get UserConsentRequired value
     * @return \StructType\UserConsentRequiredDefinitionType|null
     */
    public function getUserConsentRequired()
    {
        return $this->UserConsentRequired;
    }
    /**
     * Set UserConsentRequired value
     * @param \StructType\UserConsentRequiredDefinitionType $userConsentRequired
     * @return \StructType\FeatureDefinitionsType
     */
    public function setUserConsentRequired(\StructType\UserConsentRequiredDefinitionType $userConsentRequired = null)
    {
        $this->UserConsentRequired = $userConsentRequired;
        return $this;
    }
    /**
     * Get HomePageFeaturedEnabled value
     * @return \StructType\HomePageFeaturedEnabledDefinitionType|null
     */
    public function getHomePageFeaturedEnabled()
    {
        return $this->HomePageFeaturedEnabled;
    }
    /**
     * Set HomePageFeaturedEnabled value
     * @param \StructType\HomePageFeaturedEnabledDefinitionType $homePageFeaturedEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setHomePageFeaturedEnabled(\StructType\HomePageFeaturedEnabledDefinitionType $homePageFeaturedEnabled = null)
    {
        $this->HomePageFeaturedEnabled = $homePageFeaturedEnabled;
        return $this;
    }
    /**
     * Get ProPackEnabled value
     * @return \StructType\ProPackEnabledDefinitionType|null
     */
    public function getProPackEnabled()
    {
        return $this->ProPackEnabled;
    }
    /**
     * Set ProPackEnabled value
     * @param \StructType\ProPackEnabledDefinitionType $proPackEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setProPackEnabled(\StructType\ProPackEnabledDefinitionType $proPackEnabled = null)
    {
        $this->ProPackEnabled = $proPackEnabled;
        return $this;
    }
    /**
     * Get BasicUpgradePackEnabled value
     * @return \StructType\BasicUpgradePackEnabledDefinitionType|null
     */
    public function getBasicUpgradePackEnabled()
    {
        return $this->BasicUpgradePackEnabled;
    }
    /**
     * Set BasicUpgradePackEnabled value
     * @param \StructType\BasicUpgradePackEnabledDefinitionType $basicUpgradePackEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setBasicUpgradePackEnabled(\StructType\BasicUpgradePackEnabledDefinitionType $basicUpgradePackEnabled = null)
    {
        $this->BasicUpgradePackEnabled = $basicUpgradePackEnabled;
        return $this;
    }
    /**
     * Get ValuePackEnabled value
     * @return \StructType\ValuePackEnabledDefinitionType|null
     */
    public function getValuePackEnabled()
    {
        return $this->ValuePackEnabled;
    }
    /**
     * Set ValuePackEnabled value
     * @param \StructType\ValuePackEnabledDefinitionType $valuePackEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setValuePackEnabled(\StructType\ValuePackEnabledDefinitionType $valuePackEnabled = null)
    {
        $this->ValuePackEnabled = $valuePackEnabled;
        return $this;
    }
    /**
     * Get ProPackPlusEnabled value
     * @return \StructType\ProPackPlusEnabledDefinitionType|null
     */
    public function getProPackPlusEnabled()
    {
        return $this->ProPackPlusEnabled;
    }
    /**
     * Set ProPackPlusEnabled value
     * @param \StructType\ProPackPlusEnabledDefinitionType $proPackPlusEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setProPackPlusEnabled(\StructType\ProPackPlusEnabledDefinitionType $proPackPlusEnabled = null)
    {
        $this->ProPackPlusEnabled = $proPackPlusEnabled;
        return $this;
    }
    /**
     * Get AdFormatEnabled value
     * @return \StructType\AdFormatEnabledDefinitionType|null
     */
    public function getAdFormatEnabled()
    {
        return $this->AdFormatEnabled;
    }
    /**
     * Set AdFormatEnabled value
     * @param \StructType\AdFormatEnabledDefinitionType $adFormatEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setAdFormatEnabled(\StructType\AdFormatEnabledDefinitionType $adFormatEnabled = null)
    {
        $this->AdFormatEnabled = $adFormatEnabled;
        return $this;
    }
    /**
     * Get BestOfferCounterEnabled value
     * @return \StructType\BestOfferCounterEnabledDefinitionType|null
     */
    public function getBestOfferCounterEnabled()
    {
        return $this->BestOfferCounterEnabled;
    }
    /**
     * Set BestOfferCounterEnabled value
     * @param \StructType\BestOfferCounterEnabledDefinitionType $bestOfferCounterEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setBestOfferCounterEnabled(\StructType\BestOfferCounterEnabledDefinitionType $bestOfferCounterEnabled = null)
    {
        $this->BestOfferCounterEnabled = $bestOfferCounterEnabled;
        return $this;
    }
    /**
     * Get BestOfferAutoDeclineEnabled value
     * @return \StructType\BestOfferAutoDeclineEnabledDefinitionType|null
     */
    public function getBestOfferAutoDeclineEnabled()
    {
        return $this->BestOfferAutoDeclineEnabled;
    }
    /**
     * Set BestOfferAutoDeclineEnabled value
     * @param \StructType\BestOfferAutoDeclineEnabledDefinitionType $bestOfferAutoDeclineEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setBestOfferAutoDeclineEnabled(\StructType\BestOfferAutoDeclineEnabledDefinitionType $bestOfferAutoDeclineEnabled = null)
    {
        $this->BestOfferAutoDeclineEnabled = $bestOfferAutoDeclineEnabled;
        return $this;
    }
    /**
     * Get LocalMarketSpecialitySubscription value
     * @return \StructType\LocalMarketSpecialitySubscriptionDefinitionType|null
     */
    public function getLocalMarketSpecialitySubscription()
    {
        return $this->LocalMarketSpecialitySubscription;
    }
    /**
     * Set LocalMarketSpecialitySubscription value
     * @param \StructType\LocalMarketSpecialitySubscriptionDefinitionType $localMarketSpecialitySubscription
     * @return \StructType\FeatureDefinitionsType
     */
    public function setLocalMarketSpecialitySubscription(\StructType\LocalMarketSpecialitySubscriptionDefinitionType $localMarketSpecialitySubscription = null)
    {
        $this->LocalMarketSpecialitySubscription = $localMarketSpecialitySubscription;
        return $this;
    }
    /**
     * Get LocalMarketRegularSubscription value
     * @return \StructType\LocalMarketRegularSubscriptionDefinitionType|null
     */
    public function getLocalMarketRegularSubscription()
    {
        return $this->LocalMarketRegularSubscription;
    }
    /**
     * Set LocalMarketRegularSubscription value
     * @param \StructType\LocalMarketRegularSubscriptionDefinitionType $localMarketRegularSubscription
     * @return \StructType\FeatureDefinitionsType
     */
    public function setLocalMarketRegularSubscription(\StructType\LocalMarketRegularSubscriptionDefinitionType $localMarketRegularSubscription = null)
    {
        $this->LocalMarketRegularSubscription = $localMarketRegularSubscription;
        return $this;
    }
    /**
     * Get LocalMarketPremiumSubscription value
     * @return \StructType\LocalMarketPremiumSubscriptionDefinitionType|null
     */
    public function getLocalMarketPremiumSubscription()
    {
        return $this->LocalMarketPremiumSubscription;
    }
    /**
     * Set LocalMarketPremiumSubscription value
     * @param \StructType\LocalMarketPremiumSubscriptionDefinitionType $localMarketPremiumSubscription
     * @return \StructType\FeatureDefinitionsType
     */
    public function setLocalMarketPremiumSubscription(\StructType\LocalMarketPremiumSubscriptionDefinitionType $localMarketPremiumSubscription = null)
    {
        $this->LocalMarketPremiumSubscription = $localMarketPremiumSubscription;
        return $this;
    }
    /**
     * Get LocalMarketNonSubscription value
     * @return \StructType\LocalMarketNonSubscriptionDefinitionType|null
     */
    public function getLocalMarketNonSubscription()
    {
        return $this->LocalMarketNonSubscription;
    }
    /**
     * Set LocalMarketNonSubscription value
     * @param \StructType\LocalMarketNonSubscriptionDefinitionType $localMarketNonSubscription
     * @return \StructType\FeatureDefinitionsType
     */
    public function setLocalMarketNonSubscription(\StructType\LocalMarketNonSubscriptionDefinitionType $localMarketNonSubscription = null)
    {
        $this->LocalMarketNonSubscription = $localMarketNonSubscription;
        return $this;
    }
    /**
     * Get ExpressEnabled value
     * @return \StructType\ExpressEnabledDefinitionType|null
     */
    public function getExpressEnabled()
    {
        return $this->ExpressEnabled;
    }
    /**
     * Set ExpressEnabled value
     * @param \StructType\ExpressEnabledDefinitionType $expressEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setExpressEnabled(\StructType\ExpressEnabledDefinitionType $expressEnabled = null)
    {
        $this->ExpressEnabled = $expressEnabled;
        return $this;
    }
    /**
     * Get ExpressPicturesRequired value
     * @return \StructType\ExpressPicturesRequiredDefinitionType|null
     */
    public function getExpressPicturesRequired()
    {
        return $this->ExpressPicturesRequired;
    }
    /**
     * Set ExpressPicturesRequired value
     * @param \StructType\ExpressPicturesRequiredDefinitionType $expressPicturesRequired
     * @return \StructType\FeatureDefinitionsType
     */
    public function setExpressPicturesRequired(\StructType\ExpressPicturesRequiredDefinitionType $expressPicturesRequired = null)
    {
        $this->ExpressPicturesRequired = $expressPicturesRequired;
        return $this;
    }
    /**
     * Get ExpressConditionRequired value
     * @return \StructType\ExpressConditionRequiredDefinitionType|null
     */
    public function getExpressConditionRequired()
    {
        return $this->ExpressConditionRequired;
    }
    /**
     * Set ExpressConditionRequired value
     * @param \StructType\ExpressConditionRequiredDefinitionType $expressConditionRequired
     * @return \StructType\FeatureDefinitionsType
     */
    public function setExpressConditionRequired(\StructType\ExpressConditionRequiredDefinitionType $expressConditionRequired = null)
    {
        $this->ExpressConditionRequired = $expressConditionRequired;
        return $this;
    }
    /**
     * Get MinimumReservePrice value
     * @return \StructType\MinimumReservePriceDefinitionType|null
     */
    public function getMinimumReservePrice()
    {
        return $this->MinimumReservePrice;
    }
    /**
     * Set MinimumReservePrice value
     * @param \StructType\MinimumReservePriceDefinitionType $minimumReservePrice
     * @return \StructType\FeatureDefinitionsType
     */
    public function setMinimumReservePrice(\StructType\MinimumReservePriceDefinitionType $minimumReservePrice = null)
    {
        $this->MinimumReservePrice = $minimumReservePrice;
        return $this;
    }
    /**
     * Get TransactionConfirmationRequestEnabled value
     * @return \StructType\TCREnabledDefinitionType|null
     */
    public function getTransactionConfirmationRequestEnabled()
    {
        return $this->TransactionConfirmationRequestEnabled;
    }
    /**
     * Set TransactionConfirmationRequestEnabled value
     * @param \StructType\TCREnabledDefinitionType $transactionConfirmationRequestEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setTransactionConfirmationRequestEnabled(\StructType\TCREnabledDefinitionType $transactionConfirmationRequestEnabled = null)
    {
        $this->TransactionConfirmationRequestEnabled = $transactionConfirmationRequestEnabled;
        return $this;
    }
    /**
     * Get SellerContactDetailsEnabled value
     * @return \StructType\SellerContactDetailsEnabledDefinitionType|null
     */
    public function getSellerContactDetailsEnabled()
    {
        return $this->SellerContactDetailsEnabled;
    }
    /**
     * Set SellerContactDetailsEnabled value
     * @param \StructType\SellerContactDetailsEnabledDefinitionType $sellerContactDetailsEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setSellerContactDetailsEnabled(\StructType\SellerContactDetailsEnabledDefinitionType $sellerContactDetailsEnabled = null)
    {
        $this->SellerContactDetailsEnabled = $sellerContactDetailsEnabled;
        return $this;
    }
    /**
     * Get StoreInventoryEnabled value
     * @return \StructType\StoreInventoryEnabledDefinitionType|null
     */
    public function getStoreInventoryEnabled()
    {
        return $this->StoreInventoryEnabled;
    }
    /**
     * Set StoreInventoryEnabled value
     * @param \StructType\StoreInventoryEnabledDefinitionType $storeInventoryEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setStoreInventoryEnabled(\StructType\StoreInventoryEnabledDefinitionType $storeInventoryEnabled = null)
    {
        $this->StoreInventoryEnabled = $storeInventoryEnabled;
        return $this;
    }
    /**
     * Get SkypeMeTransactionalEnabled value
     * @return \StructType\SkypeMeTransactionalEnabledDefinitionType|null
     */
    public function getSkypeMeTransactionalEnabled()
    {
        return $this->SkypeMeTransactionalEnabled;
    }
    /**
     * Set SkypeMeTransactionalEnabled value
     * @param \StructType\SkypeMeTransactionalEnabledDefinitionType $skypeMeTransactionalEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setSkypeMeTransactionalEnabled(\StructType\SkypeMeTransactionalEnabledDefinitionType $skypeMeTransactionalEnabled = null)
    {
        $this->SkypeMeTransactionalEnabled = $skypeMeTransactionalEnabled;
        return $this;
    }
    /**
     * Get SkypeMeNonTransactionalEnabled value
     * @return \StructType\SkypeMeNonTransactionalEnabledDefinitionType|null
     */
    public function getSkypeMeNonTransactionalEnabled()
    {
        return $this->SkypeMeNonTransactionalEnabled;
    }
    /**
     * Set SkypeMeNonTransactionalEnabled value
     * @param \StructType\SkypeMeNonTransactionalEnabledDefinitionType $skypeMeNonTransactionalEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setSkypeMeNonTransactionalEnabled(\StructType\SkypeMeNonTransactionalEnabledDefinitionType $skypeMeNonTransactionalEnabled = null)
    {
        $this->SkypeMeNonTransactionalEnabled = $skypeMeNonTransactionalEnabled;
        return $this;
    }
    /**
     * Get LocalListingDistancesRegular value
     * @return \StructType\LocalListingDistancesRegularDefinitionType|null
     */
    public function getLocalListingDistancesRegular()
    {
        return $this->LocalListingDistancesRegular;
    }
    /**
     * Set LocalListingDistancesRegular value
     * @param \StructType\LocalListingDistancesRegularDefinitionType $localListingDistancesRegular
     * @return \StructType\FeatureDefinitionsType
     */
    public function setLocalListingDistancesRegular(\StructType\LocalListingDistancesRegularDefinitionType $localListingDistancesRegular = null)
    {
        $this->LocalListingDistancesRegular = $localListingDistancesRegular;
        return $this;
    }
    /**
     * Get LocalListingDistancesSpecialty value
     * @return \StructType\LocalListingDistancesSpecialtyDefinitionType|null
     */
    public function getLocalListingDistancesSpecialty()
    {
        return $this->LocalListingDistancesSpecialty;
    }
    /**
     * Set LocalListingDistancesSpecialty value
     * @param \StructType\LocalListingDistancesSpecialtyDefinitionType $localListingDistancesSpecialty
     * @return \StructType\FeatureDefinitionsType
     */
    public function setLocalListingDistancesSpecialty(\StructType\LocalListingDistancesSpecialtyDefinitionType $localListingDistancesSpecialty = null)
    {
        $this->LocalListingDistancesSpecialty = $localListingDistancesSpecialty;
        return $this;
    }
    /**
     * Get LocalListingDistancesNonSubscription value
     * @return \StructType\LocalListingDistancesNonSubscriptionDefinitionType|null
     */
    public function getLocalListingDistancesNonSubscription()
    {
        return $this->LocalListingDistancesNonSubscription;
    }
    /**
     * Set LocalListingDistancesNonSubscription value
     * @param \StructType\LocalListingDistancesNonSubscriptionDefinitionType $localListingDistancesNonSubscription
     * @return \StructType\FeatureDefinitionsType
     */
    public function setLocalListingDistancesNonSubscription(\StructType\LocalListingDistancesNonSubscriptionDefinitionType $localListingDistancesNonSubscription = null)
    {
        $this->LocalListingDistancesNonSubscription = $localListingDistancesNonSubscription;
        return $this;
    }
    /**
     * Get ClassifiedAdPaymentMethodEnabled value
     * @return \StructType\ClassifiedAdPaymentMethodEnabledDefinitionType|null
     */
    public function getClassifiedAdPaymentMethodEnabled()
    {
        return $this->ClassifiedAdPaymentMethodEnabled;
    }
    /**
     * Set ClassifiedAdPaymentMethodEnabled value
     * @param \StructType\ClassifiedAdPaymentMethodEnabledDefinitionType $classifiedAdPaymentMethodEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setClassifiedAdPaymentMethodEnabled(\StructType\ClassifiedAdPaymentMethodEnabledDefinitionType $classifiedAdPaymentMethodEnabled = null)
    {
        $this->ClassifiedAdPaymentMethodEnabled = $classifiedAdPaymentMethodEnabled;
        return $this;
    }
    /**
     * Get ClassifiedAdShippingMethodEnabled value
     * @return \StructType\ClassifiedAdShippingMethodEnabledDefinitionType|null
     */
    public function getClassifiedAdShippingMethodEnabled()
    {
        return $this->ClassifiedAdShippingMethodEnabled;
    }
    /**
     * Set ClassifiedAdShippingMethodEnabled value
     * @param \StructType\ClassifiedAdShippingMethodEnabledDefinitionType $classifiedAdShippingMethodEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setClassifiedAdShippingMethodEnabled(\StructType\ClassifiedAdShippingMethodEnabledDefinitionType $classifiedAdShippingMethodEnabled = null)
    {
        $this->ClassifiedAdShippingMethodEnabled = $classifiedAdShippingMethodEnabled;
        return $this;
    }
    /**
     * Get ClassifiedAdBestOfferEnabled value
     * @return \StructType\ClassifiedAdBestOfferEnabledDefinitionType|null
     */
    public function getClassifiedAdBestOfferEnabled()
    {
        return $this->ClassifiedAdBestOfferEnabled;
    }
    /**
     * Set ClassifiedAdBestOfferEnabled value
     * @param \StructType\ClassifiedAdBestOfferEnabledDefinitionType $classifiedAdBestOfferEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setClassifiedAdBestOfferEnabled(\StructType\ClassifiedAdBestOfferEnabledDefinitionType $classifiedAdBestOfferEnabled = null)
    {
        $this->ClassifiedAdBestOfferEnabled = $classifiedAdBestOfferEnabled;
        return $this;
    }
    /**
     * Get ClassifiedAdCounterOfferEnabled value
     * @return \StructType\ClassifiedAdCounterOfferEnabledDefinitionType|null
     */
    public function getClassifiedAdCounterOfferEnabled()
    {
        return $this->ClassifiedAdCounterOfferEnabled;
    }
    /**
     * Set ClassifiedAdCounterOfferEnabled value
     * @param \StructType\ClassifiedAdCounterOfferEnabledDefinitionType $classifiedAdCounterOfferEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setClassifiedAdCounterOfferEnabled(\StructType\ClassifiedAdCounterOfferEnabledDefinitionType $classifiedAdCounterOfferEnabled = null)
    {
        $this->ClassifiedAdCounterOfferEnabled = $classifiedAdCounterOfferEnabled;
        return $this;
    }
    /**
     * Get ClassifiedAdAutoDeclineEnabled value
     * @return \StructType\ClassifiedAdAutoDeclineEnabledDefinitionType|null
     */
    public function getClassifiedAdAutoDeclineEnabled()
    {
        return $this->ClassifiedAdAutoDeclineEnabled;
    }
    /**
     * Set ClassifiedAdAutoDeclineEnabled value
     * @param \StructType\ClassifiedAdAutoDeclineEnabledDefinitionType $classifiedAdAutoDeclineEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setClassifiedAdAutoDeclineEnabled(\StructType\ClassifiedAdAutoDeclineEnabledDefinitionType $classifiedAdAutoDeclineEnabled = null)
    {
        $this->ClassifiedAdAutoDeclineEnabled = $classifiedAdAutoDeclineEnabled;
        return $this;
    }
    /**
     * Get ClassifiedAdContactByPhoneEnabled value
     * @return \StructType\ClassifiedAdContactByPhoneEnabledDefinitionType|null
     */
    public function getClassifiedAdContactByPhoneEnabled()
    {
        return $this->ClassifiedAdContactByPhoneEnabled;
    }
    /**
     * Set ClassifiedAdContactByPhoneEnabled value
     * @param \StructType\ClassifiedAdContactByPhoneEnabledDefinitionType $classifiedAdContactByPhoneEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setClassifiedAdContactByPhoneEnabled(\StructType\ClassifiedAdContactByPhoneEnabledDefinitionType $classifiedAdContactByPhoneEnabled = null)
    {
        $this->ClassifiedAdContactByPhoneEnabled = $classifiedAdContactByPhoneEnabled;
        return $this;
    }
    /**
     * Get ClassifiedAdContactByEmailEnabled value
     * @return \StructType\ClassifiedAdContactByEmailEnabledDefintionType|null
     */
    public function getClassifiedAdContactByEmailEnabled()
    {
        return $this->ClassifiedAdContactByEmailEnabled;
    }
    /**
     * Set ClassifiedAdContactByEmailEnabled value
     * @param \StructType\ClassifiedAdContactByEmailEnabledDefintionType $classifiedAdContactByEmailEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setClassifiedAdContactByEmailEnabled(\StructType\ClassifiedAdContactByEmailEnabledDefintionType $classifiedAdContactByEmailEnabled = null)
    {
        $this->ClassifiedAdContactByEmailEnabled = $classifiedAdContactByEmailEnabled;
        return $this;
    }
    /**
     * Get SafePaymentRequired value
     * @return \StructType\SafePaymentRequiredDefinitionType|null
     */
    public function getSafePaymentRequired()
    {
        return $this->SafePaymentRequired;
    }
    /**
     * Set SafePaymentRequired value
     * @param \StructType\SafePaymentRequiredDefinitionType $safePaymentRequired
     * @return \StructType\FeatureDefinitionsType
     */
    public function setSafePaymentRequired(\StructType\SafePaymentRequiredDefinitionType $safePaymentRequired = null)
    {
        $this->SafePaymentRequired = $safePaymentRequired;
        return $this;
    }
    /**
     * Get ClassifiedAdPayPerLeadEnabled value
     * @return \StructType\ClassifiedAdPayPerLeadEnabledDefinitionType|null
     */
    public function getClassifiedAdPayPerLeadEnabled()
    {
        return $this->ClassifiedAdPayPerLeadEnabled;
    }
    /**
     * Set ClassifiedAdPayPerLeadEnabled value
     * @param \StructType\ClassifiedAdPayPerLeadEnabledDefinitionType $classifiedAdPayPerLeadEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setClassifiedAdPayPerLeadEnabled(\StructType\ClassifiedAdPayPerLeadEnabledDefinitionType $classifiedAdPayPerLeadEnabled = null)
    {
        $this->ClassifiedAdPayPerLeadEnabled = $classifiedAdPayPerLeadEnabled;
        return $this;
    }
    /**
     * Get ItemSpecificsEnabled value
     * @return \StructType\ItemSpecificsEnabledDefinitionType|null
     */
    public function getItemSpecificsEnabled()
    {
        return $this->ItemSpecificsEnabled;
    }
    /**
     * Set ItemSpecificsEnabled value
     * @param \StructType\ItemSpecificsEnabledDefinitionType $itemSpecificsEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setItemSpecificsEnabled(\StructType\ItemSpecificsEnabledDefinitionType $itemSpecificsEnabled = null)
    {
        $this->ItemSpecificsEnabled = $itemSpecificsEnabled;
        return $this;
    }
    /**
     * Get PaisaPayFullEscrowEnabled value
     * @return \StructType\PaisaPayFullEscrowEnabledDefinitionType|null
     */
    public function getPaisaPayFullEscrowEnabled()
    {
        return $this->PaisaPayFullEscrowEnabled;
    }
    /**
     * Set PaisaPayFullEscrowEnabled value
     * @param \StructType\PaisaPayFullEscrowEnabledDefinitionType $paisaPayFullEscrowEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setPaisaPayFullEscrowEnabled(\StructType\PaisaPayFullEscrowEnabledDefinitionType $paisaPayFullEscrowEnabled = null)
    {
        $this->PaisaPayFullEscrowEnabled = $paisaPayFullEscrowEnabled;
        return $this;
    }
    /**
     * Get ISBNIdentifierEnabled value
     * @return \StructType\ISBNIdentifierEnabledDefinitionType|null
     */
    public function getISBNIdentifierEnabled()
    {
        return $this->ISBNIdentifierEnabled;
    }
    /**
     * Set ISBNIdentifierEnabled value
     * @param \StructType\ISBNIdentifierEnabledDefinitionType $iSBNIdentifierEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setISBNIdentifierEnabled(\StructType\ISBNIdentifierEnabledDefinitionType $iSBNIdentifierEnabled = null)
    {
        $this->ISBNIdentifierEnabled = $iSBNIdentifierEnabled;
        return $this;
    }
    /**
     * Get UPCIdentifierEnabled value
     * @return \StructType\UPCIdentifierEnabledDefinitionType|null
     */
    public function getUPCIdentifierEnabled()
    {
        return $this->UPCIdentifierEnabled;
    }
    /**
     * Set UPCIdentifierEnabled value
     * @param \StructType\UPCIdentifierEnabledDefinitionType $uPCIdentifierEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setUPCIdentifierEnabled(\StructType\UPCIdentifierEnabledDefinitionType $uPCIdentifierEnabled = null)
    {
        $this->UPCIdentifierEnabled = $uPCIdentifierEnabled;
        return $this;
    }
    /**
     * Get EANIdentifierEnabled value
     * @return \StructType\EANIdentifierEnabledDefinitionType|null
     */
    public function getEANIdentifierEnabled()
    {
        return $this->EANIdentifierEnabled;
    }
    /**
     * Set EANIdentifierEnabled value
     * @param \StructType\EANIdentifierEnabledDefinitionType $eANIdentifierEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setEANIdentifierEnabled(\StructType\EANIdentifierEnabledDefinitionType $eANIdentifierEnabled = null)
    {
        $this->EANIdentifierEnabled = $eANIdentifierEnabled;
        return $this;
    }
    /**
     * Get BrandMPNIdentifierEnabled value
     * @return \StructType\BrandMPNIdentifierEnabledDefinitionType|null
     */
    public function getBrandMPNIdentifierEnabled()
    {
        return $this->BrandMPNIdentifierEnabled;
    }
    /**
     * Set BrandMPNIdentifierEnabled value
     * @param \StructType\BrandMPNIdentifierEnabledDefinitionType $brandMPNIdentifierEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setBrandMPNIdentifierEnabled(\StructType\BrandMPNIdentifierEnabledDefinitionType $brandMPNIdentifierEnabled = null)
    {
        $this->BrandMPNIdentifierEnabled = $brandMPNIdentifierEnabled;
        return $this;
    }
    /**
     * Get BestOfferAutoAcceptEnabled value
     * @return \StructType\BestOfferAutoAcceptEnabledDefinitionType|null
     */
    public function getBestOfferAutoAcceptEnabled()
    {
        return $this->BestOfferAutoAcceptEnabled;
    }
    /**
     * Set BestOfferAutoAcceptEnabled value
     * @param \StructType\BestOfferAutoAcceptEnabledDefinitionType $bestOfferAutoAcceptEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setBestOfferAutoAcceptEnabled(\StructType\BestOfferAutoAcceptEnabledDefinitionType $bestOfferAutoAcceptEnabled = null)
    {
        $this->BestOfferAutoAcceptEnabled = $bestOfferAutoAcceptEnabled;
        return $this;
    }
    /**
     * Get ClassifiedAdAutoAcceptEnabled value
     * @return \StructType\ClassifiedAdAutoAcceptEnabledDefinitionType|null
     */
    public function getClassifiedAdAutoAcceptEnabled()
    {
        return $this->ClassifiedAdAutoAcceptEnabled;
    }
    /**
     * Set ClassifiedAdAutoAcceptEnabled value
     * @param \StructType\ClassifiedAdAutoAcceptEnabledDefinitionType $classifiedAdAutoAcceptEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setClassifiedAdAutoAcceptEnabled(\StructType\ClassifiedAdAutoAcceptEnabledDefinitionType $classifiedAdAutoAcceptEnabled = null)
    {
        $this->ClassifiedAdAutoAcceptEnabled = $classifiedAdAutoAcceptEnabled;
        return $this;
    }
    /**
     * Get CrossBorderTradeNorthAmericaEnabled value
     * @return \StructType\CrossBorderTradeNorthAmericaEnabledDefinitionType|null
     */
    public function getCrossBorderTradeNorthAmericaEnabled()
    {
        return $this->CrossBorderTradeNorthAmericaEnabled;
    }
    /**
     * Set CrossBorderTradeNorthAmericaEnabled value
     * @param \StructType\CrossBorderTradeNorthAmericaEnabledDefinitionType $crossBorderTradeNorthAmericaEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setCrossBorderTradeNorthAmericaEnabled(\StructType\CrossBorderTradeNorthAmericaEnabledDefinitionType $crossBorderTradeNorthAmericaEnabled = null)
    {
        $this->CrossBorderTradeNorthAmericaEnabled = $crossBorderTradeNorthAmericaEnabled;
        return $this;
    }
    /**
     * Get CrossBorderTradeGBEnabled value
     * @return \StructType\CrossBorderTradeGBEnabledDefinitionType|null
     */
    public function getCrossBorderTradeGBEnabled()
    {
        return $this->CrossBorderTradeGBEnabled;
    }
    /**
     * Set CrossBorderTradeGBEnabled value
     * @param \StructType\CrossBorderTradeGBEnabledDefinitionType $crossBorderTradeGBEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setCrossBorderTradeGBEnabled(\StructType\CrossBorderTradeGBEnabledDefinitionType $crossBorderTradeGBEnabled = null)
    {
        $this->CrossBorderTradeGBEnabled = $crossBorderTradeGBEnabled;
        return $this;
    }
    /**
     * Get CrossBorderTradeAustraliaEnabled value
     * @return \StructType\CrossBorderTradeAustraliaEnabledDefinitionType|null
     */
    public function getCrossBorderTradeAustraliaEnabled()
    {
        return $this->CrossBorderTradeAustraliaEnabled;
    }
    /**
     * Set CrossBorderTradeAustraliaEnabled value
     * @param \StructType\CrossBorderTradeAustraliaEnabledDefinitionType $crossBorderTradeAustraliaEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setCrossBorderTradeAustraliaEnabled(\StructType\CrossBorderTradeAustraliaEnabledDefinitionType $crossBorderTradeAustraliaEnabled = null)
    {
        $this->CrossBorderTradeAustraliaEnabled = $crossBorderTradeAustraliaEnabled;
        return $this;
    }
    /**
     * Get PayPalBuyerProtectionEnabled value
     * @return \StructType\PayPalBuyerProtectionEnabledDefinitionType|null
     */
    public function getPayPalBuyerProtectionEnabled()
    {
        return $this->PayPalBuyerProtectionEnabled;
    }
    /**
     * Set PayPalBuyerProtectionEnabled value
     * @param \StructType\PayPalBuyerProtectionEnabledDefinitionType $payPalBuyerProtectionEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setPayPalBuyerProtectionEnabled(\StructType\PayPalBuyerProtectionEnabledDefinitionType $payPalBuyerProtectionEnabled = null)
    {
        $this->PayPalBuyerProtectionEnabled = $payPalBuyerProtectionEnabled;
        return $this;
    }
    /**
     * Get BuyerGuaranteeEnabled value
     * @return \StructType\BuyerGuaranteeEnabledDefinitionType|null
     */
    public function getBuyerGuaranteeEnabled()
    {
        return $this->BuyerGuaranteeEnabled;
    }
    /**
     * Set BuyerGuaranteeEnabled value
     * @param \StructType\BuyerGuaranteeEnabledDefinitionType $buyerGuaranteeEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setBuyerGuaranteeEnabled(\StructType\BuyerGuaranteeEnabledDefinitionType $buyerGuaranteeEnabled = null)
    {
        $this->BuyerGuaranteeEnabled = $buyerGuaranteeEnabled;
        return $this;
    }
    /**
     * Get CombinedFixedPriceTreatmentEnabled value
     * @return \StructType\CombinedFixedPriceTreatmentEnabledDefinitionType|null
     */
    public function getCombinedFixedPriceTreatmentEnabled()
    {
        return $this->CombinedFixedPriceTreatmentEnabled;
    }
    /**
     * Set CombinedFixedPriceTreatmentEnabled value
     * @param \StructType\CombinedFixedPriceTreatmentEnabledDefinitionType $combinedFixedPriceTreatmentEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setCombinedFixedPriceTreatmentEnabled(\StructType\CombinedFixedPriceTreatmentEnabledDefinitionType $combinedFixedPriceTreatmentEnabled = null)
    {
        $this->CombinedFixedPriceTreatmentEnabled = $combinedFixedPriceTreatmentEnabled;
        return $this;
    }
    /**
     * Get GalleryFeaturedDurations value
     * @return \StructType\ListingEnhancementDurationDefinitionType|null
     */
    public function getGalleryFeaturedDurations()
    {
        return $this->GalleryFeaturedDurations;
    }
    /**
     * Set GalleryFeaturedDurations value
     * @param \StructType\ListingEnhancementDurationDefinitionType $galleryFeaturedDurations
     * @return \StructType\FeatureDefinitionsType
     */
    public function setGalleryFeaturedDurations(\StructType\ListingEnhancementDurationDefinitionType $galleryFeaturedDurations = null)
    {
        $this->GalleryFeaturedDurations = $galleryFeaturedDurations;
        return $this;
    }
    /**
     * Get INEscrowWorkflowTimeline value
     * @return \StructType\INEscrowWorkflowTimelineDefinitionType|null
     */
    public function getINEscrowWorkflowTimeline()
    {
        return $this->INEscrowWorkflowTimeline;
    }
    /**
     * Set INEscrowWorkflowTimeline value
     * @param \StructType\INEscrowWorkflowTimelineDefinitionType $iNEscrowWorkflowTimeline
     * @return \StructType\FeatureDefinitionsType
     */
    public function setINEscrowWorkflowTimeline(\StructType\INEscrowWorkflowTimelineDefinitionType $iNEscrowWorkflowTimeline = null)
    {
        $this->INEscrowWorkflowTimeline = $iNEscrowWorkflowTimeline;
        return $this;
    }
    /**
     * Get PayPalRequired value
     * @return \StructType\PayPalRequiredDefinitionType|null
     */
    public function getPayPalRequired()
    {
        return $this->PayPalRequired;
    }
    /**
     * Set PayPalRequired value
     * @param \StructType\PayPalRequiredDefinitionType $payPalRequired
     * @return \StructType\FeatureDefinitionsType
     */
    public function setPayPalRequired(\StructType\PayPalRequiredDefinitionType $payPalRequired = null)
    {
        $this->PayPalRequired = $payPalRequired;
        return $this;
    }
    /**
     * Get eBayMotorsProAdFormatEnabled value
     * @return \StructType\EBayMotorsProAdFormatEnabledDefinitionType|null
     */
    public function getEBayMotorsProAdFormatEnabled()
    {
        return $this->eBayMotorsProAdFormatEnabled;
    }
    /**
     * Set eBayMotorsProAdFormatEnabled value
     * @param \StructType\EBayMotorsProAdFormatEnabledDefinitionType $eBayMotorsProAdFormatEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProAdFormatEnabled(\StructType\EBayMotorsProAdFormatEnabledDefinitionType $eBayMotorsProAdFormatEnabled = null)
    {
        $this->eBayMotorsProAdFormatEnabled = $eBayMotorsProAdFormatEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProContactByPhoneEnabled value
     * @return \StructType\EBayMotorsProContactByPhoneEnabledDefinitionType|null
     */
    public function getEBayMotorsProContactByPhoneEnabled()
    {
        return $this->eBayMotorsProContactByPhoneEnabled;
    }
    /**
     * Set eBayMotorsProContactByPhoneEnabled value
     * @param \StructType\EBayMotorsProContactByPhoneEnabledDefinitionType $eBayMotorsProContactByPhoneEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProContactByPhoneEnabled(\StructType\EBayMotorsProContactByPhoneEnabledDefinitionType $eBayMotorsProContactByPhoneEnabled = null)
    {
        $this->eBayMotorsProContactByPhoneEnabled = $eBayMotorsProContactByPhoneEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProPhoneCount value
     * @return \StructType\EBayMotorsProPhoneCountDefinitionType|null
     */
    public function getEBayMotorsProPhoneCount()
    {
        return $this->eBayMotorsProPhoneCount;
    }
    /**
     * Set eBayMotorsProPhoneCount value
     * @param \StructType\EBayMotorsProPhoneCountDefinitionType $eBayMotorsProPhoneCount
     * @return \StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProPhoneCount(\StructType\EBayMotorsProPhoneCountDefinitionType $eBayMotorsProPhoneCount = null)
    {
        $this->eBayMotorsProPhoneCount = $eBayMotorsProPhoneCount;
        return $this;
    }
    /**
     * Get eBayMotorsProContactByAddressEnabled value
     * @return \StructType\EBayMotorsProContactByAddressEnabledDefinitionType|null
     */
    public function getEBayMotorsProContactByAddressEnabled()
    {
        return $this->eBayMotorsProContactByAddressEnabled;
    }
    /**
     * Set eBayMotorsProContactByAddressEnabled value
     * @param \StructType\EBayMotorsProContactByAddressEnabledDefinitionType $eBayMotorsProContactByAddressEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProContactByAddressEnabled(\StructType\EBayMotorsProContactByAddressEnabledDefinitionType $eBayMotorsProContactByAddressEnabled = null)
    {
        $this->eBayMotorsProContactByAddressEnabled = $eBayMotorsProContactByAddressEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProStreetCount value
     * @return \StructType\EBayMotorsProStreetCountDefinitionType|null
     */
    public function getEBayMotorsProStreetCount()
    {
        return $this->eBayMotorsProStreetCount;
    }
    /**
     * Set eBayMotorsProStreetCount value
     * @param \StructType\EBayMotorsProStreetCountDefinitionType $eBayMotorsProStreetCount
     * @return \StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProStreetCount(\StructType\EBayMotorsProStreetCountDefinitionType $eBayMotorsProStreetCount = null)
    {
        $this->eBayMotorsProStreetCount = $eBayMotorsProStreetCount;
        return $this;
    }
    /**
     * Get eBayMotorsProCompanyNameEnabled value
     * @return \StructType\EBayMotorsProCompanyNameEnabledDefinitionType|null
     */
    public function getEBayMotorsProCompanyNameEnabled()
    {
        return $this->eBayMotorsProCompanyNameEnabled;
    }
    /**
     * Set eBayMotorsProCompanyNameEnabled value
     * @param \StructType\EBayMotorsProCompanyNameEnabledDefinitionType $eBayMotorsProCompanyNameEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProCompanyNameEnabled(\StructType\EBayMotorsProCompanyNameEnabledDefinitionType $eBayMotorsProCompanyNameEnabled = null)
    {
        $this->eBayMotorsProCompanyNameEnabled = $eBayMotorsProCompanyNameEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProContactByEmailEnabled value
     * @return \StructType\EBayMotorsProContactByEmailEnabledDefinitionType|null
     */
    public function getEBayMotorsProContactByEmailEnabled()
    {
        return $this->eBayMotorsProContactByEmailEnabled;
    }
    /**
     * Set eBayMotorsProContactByEmailEnabled value
     * @param \StructType\EBayMotorsProContactByEmailEnabledDefinitionType $eBayMotorsProContactByEmailEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProContactByEmailEnabled(\StructType\EBayMotorsProContactByEmailEnabledDefinitionType $eBayMotorsProContactByEmailEnabled = null)
    {
        $this->eBayMotorsProContactByEmailEnabled = $eBayMotorsProContactByEmailEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProBestOfferEnabled value
     * @return \StructType\EBayMotorsProBestOfferEnabledDefinitionType|null
     */
    public function getEBayMotorsProBestOfferEnabled()
    {
        return $this->eBayMotorsProBestOfferEnabled;
    }
    /**
     * Set eBayMotorsProBestOfferEnabled value
     * @param \StructType\EBayMotorsProBestOfferEnabledDefinitionType $eBayMotorsProBestOfferEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProBestOfferEnabled(\StructType\EBayMotorsProBestOfferEnabledDefinitionType $eBayMotorsProBestOfferEnabled = null)
    {
        $this->eBayMotorsProBestOfferEnabled = $eBayMotorsProBestOfferEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProAutoAcceptEnabled value
     * @return \StructType\EBayMotorsProAutoAcceptEnabledDefinitionType|null
     */
    public function getEBayMotorsProAutoAcceptEnabled()
    {
        return $this->eBayMotorsProAutoAcceptEnabled;
    }
    /**
     * Set eBayMotorsProAutoAcceptEnabled value
     * @param \StructType\EBayMotorsProAutoAcceptEnabledDefinitionType $eBayMotorsProAutoAcceptEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProAutoAcceptEnabled(\StructType\EBayMotorsProAutoAcceptEnabledDefinitionType $eBayMotorsProAutoAcceptEnabled = null)
    {
        $this->eBayMotorsProAutoAcceptEnabled = $eBayMotorsProAutoAcceptEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProAutoDeclineEnabled value
     * @return \StructType\EBayMotorsProAutoDeclineEnabledDefinitionType|null
     */
    public function getEBayMotorsProAutoDeclineEnabled()
    {
        return $this->eBayMotorsProAutoDeclineEnabled;
    }
    /**
     * Set eBayMotorsProAutoDeclineEnabled value
     * @param \StructType\EBayMotorsProAutoDeclineEnabledDefinitionType $eBayMotorsProAutoDeclineEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProAutoDeclineEnabled(\StructType\EBayMotorsProAutoDeclineEnabledDefinitionType $eBayMotorsProAutoDeclineEnabled = null)
    {
        $this->eBayMotorsProAutoDeclineEnabled = $eBayMotorsProAutoDeclineEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProPaymentMethodCheckOutEnabled value
     * @return \StructType\EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType|null
     */
    public function getEBayMotorsProPaymentMethodCheckOutEnabled()
    {
        return $this->eBayMotorsProPaymentMethodCheckOutEnabled;
    }
    /**
     * Set eBayMotorsProPaymentMethodCheckOutEnabled value
     * @param \StructType\EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType $eBayMotorsProPaymentMethodCheckOutEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProPaymentMethodCheckOutEnabled(\StructType\EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType $eBayMotorsProPaymentMethodCheckOutEnabled = null)
    {
        $this->eBayMotorsProPaymentMethodCheckOutEnabled = $eBayMotorsProPaymentMethodCheckOutEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProShippingMethodEnabled value
     * @return \StructType\EBayMotorsProShippingMethodEnabledDefinitionType|null
     */
    public function getEBayMotorsProShippingMethodEnabled()
    {
        return $this->eBayMotorsProShippingMethodEnabled;
    }
    /**
     * Set eBayMotorsProShippingMethodEnabled value
     * @param \StructType\EBayMotorsProShippingMethodEnabledDefinitionType $eBayMotorsProShippingMethodEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProShippingMethodEnabled(\StructType\EBayMotorsProShippingMethodEnabledDefinitionType $eBayMotorsProShippingMethodEnabled = null)
    {
        $this->eBayMotorsProShippingMethodEnabled = $eBayMotorsProShippingMethodEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProCounterOfferEnabled value
     * @return \StructType\EBayMotorsProCounterOfferEnabledDefinitionType|null
     */
    public function getEBayMotorsProCounterOfferEnabled()
    {
        return $this->eBayMotorsProCounterOfferEnabled;
    }
    /**
     * Set eBayMotorsProCounterOfferEnabled value
     * @param \StructType\EBayMotorsProCounterOfferEnabledDefinitionType $eBayMotorsProCounterOfferEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProCounterOfferEnabled(\StructType\EBayMotorsProCounterOfferEnabledDefinitionType $eBayMotorsProCounterOfferEnabled = null)
    {
        $this->eBayMotorsProCounterOfferEnabled = $eBayMotorsProCounterOfferEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProSellerContactDetailsEnabled value
     * @return \StructType\EBayMotorsProSellerContactDetailsEnabledDefinitionType|null
     */
    public function getEBayMotorsProSellerContactDetailsEnabled()
    {
        return $this->eBayMotorsProSellerContactDetailsEnabled;
    }
    /**
     * Set eBayMotorsProSellerContactDetailsEnabled value
     * @param \StructType\EBayMotorsProSellerContactDetailsEnabledDefinitionType $eBayMotorsProSellerContactDetailsEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProSellerContactDetailsEnabled(\StructType\EBayMotorsProSellerContactDetailsEnabledDefinitionType $eBayMotorsProSellerContactDetailsEnabled = null)
    {
        $this->eBayMotorsProSellerContactDetailsEnabled = $eBayMotorsProSellerContactDetailsEnabled;
        return $this;
    }
    /**
     * Get LocalMarketAdFormatEnabled value
     * @return \StructType\LocalMarketAdFormatEnabledDefinitionType|null
     */
    public function getLocalMarketAdFormatEnabled()
    {
        return $this->LocalMarketAdFormatEnabled;
    }
    /**
     * Set LocalMarketAdFormatEnabled value
     * @param \StructType\LocalMarketAdFormatEnabledDefinitionType $localMarketAdFormatEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setLocalMarketAdFormatEnabled(\StructType\LocalMarketAdFormatEnabledDefinitionType $localMarketAdFormatEnabled = null)
    {
        $this->LocalMarketAdFormatEnabled = $localMarketAdFormatEnabled;
        return $this;
    }
    /**
     * Get LocalMarketContactByPhoneEnabled value
     * @return \StructType\LocalMarketContactByPhoneEnabledDefinitionType|null
     */
    public function getLocalMarketContactByPhoneEnabled()
    {
        return $this->LocalMarketContactByPhoneEnabled;
    }
    /**
     * Set LocalMarketContactByPhoneEnabled value
     * @param \StructType\LocalMarketContactByPhoneEnabledDefinitionType $localMarketContactByPhoneEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setLocalMarketContactByPhoneEnabled(\StructType\LocalMarketContactByPhoneEnabledDefinitionType $localMarketContactByPhoneEnabled = null)
    {
        $this->LocalMarketContactByPhoneEnabled = $localMarketContactByPhoneEnabled;
        return $this;
    }
    /**
     * Get LocalMarketPhoneCount value
     * @return \StructType\LocalMarketPhoneCountDefinitionType|null
     */
    public function getLocalMarketPhoneCount()
    {
        return $this->LocalMarketPhoneCount;
    }
    /**
     * Set LocalMarketPhoneCount value
     * @param \StructType\LocalMarketPhoneCountDefinitionType $localMarketPhoneCount
     * @return \StructType\FeatureDefinitionsType
     */
    public function setLocalMarketPhoneCount(\StructType\LocalMarketPhoneCountDefinitionType $localMarketPhoneCount = null)
    {
        $this->LocalMarketPhoneCount = $localMarketPhoneCount;
        return $this;
    }
    /**
     * Get LocalMarketContactByAddressEnabled value
     * @return \StructType\LocalMarketContactByAddressEnabledDefinitionType|null
     */
    public function getLocalMarketContactByAddressEnabled()
    {
        return $this->LocalMarketContactByAddressEnabled;
    }
    /**
     * Set LocalMarketContactByAddressEnabled value
     * @param \StructType\LocalMarketContactByAddressEnabledDefinitionType $localMarketContactByAddressEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setLocalMarketContactByAddressEnabled(\StructType\LocalMarketContactByAddressEnabledDefinitionType $localMarketContactByAddressEnabled = null)
    {
        $this->LocalMarketContactByAddressEnabled = $localMarketContactByAddressEnabled;
        return $this;
    }
    /**
     * Get LocalMarketStreetCount value
     * @return \StructType\LocalMarketStreetCountDefinitionType|null
     */
    public function getLocalMarketStreetCount()
    {
        return $this->LocalMarketStreetCount;
    }
    /**
     * Set LocalMarketStreetCount value
     * @param \StructType\LocalMarketStreetCountDefinitionType $localMarketStreetCount
     * @return \StructType\FeatureDefinitionsType
     */
    public function setLocalMarketStreetCount(\StructType\LocalMarketStreetCountDefinitionType $localMarketStreetCount = null)
    {
        $this->LocalMarketStreetCount = $localMarketStreetCount;
        return $this;
    }
    /**
     * Get LocalMarketCompanyNameEnabled value
     * @return \StructType\LocalMarketCompanyNameEnabledDefinitionType|null
     */
    public function getLocalMarketCompanyNameEnabled()
    {
        return $this->LocalMarketCompanyNameEnabled;
    }
    /**
     * Set LocalMarketCompanyNameEnabled value
     * @param \StructType\LocalMarketCompanyNameEnabledDefinitionType $localMarketCompanyNameEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setLocalMarketCompanyNameEnabled(\StructType\LocalMarketCompanyNameEnabledDefinitionType $localMarketCompanyNameEnabled = null)
    {
        $this->LocalMarketCompanyNameEnabled = $localMarketCompanyNameEnabled;
        return $this;
    }
    /**
     * Get LocalMarketContactByEmailEnabled value
     * @return \StructType\LocalMarketContactByEmailEnabledDefinitionType|null
     */
    public function getLocalMarketContactByEmailEnabled()
    {
        return $this->LocalMarketContactByEmailEnabled;
    }
    /**
     * Set LocalMarketContactByEmailEnabled value
     * @param \StructType\LocalMarketContactByEmailEnabledDefinitionType $localMarketContactByEmailEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setLocalMarketContactByEmailEnabled(\StructType\LocalMarketContactByEmailEnabledDefinitionType $localMarketContactByEmailEnabled = null)
    {
        $this->LocalMarketContactByEmailEnabled = $localMarketContactByEmailEnabled;
        return $this;
    }
    /**
     * Get LocalMarketBestOfferEnabled value
     * @return \StructType\LocalMarketBestOfferEnabledDefinitionType|null
     */
    public function getLocalMarketBestOfferEnabled()
    {
        return $this->LocalMarketBestOfferEnabled;
    }
    /**
     * Set LocalMarketBestOfferEnabled value
     * @param \StructType\LocalMarketBestOfferEnabledDefinitionType $localMarketBestOfferEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setLocalMarketBestOfferEnabled(\StructType\LocalMarketBestOfferEnabledDefinitionType $localMarketBestOfferEnabled = null)
    {
        $this->LocalMarketBestOfferEnabled = $localMarketBestOfferEnabled;
        return $this;
    }
    /**
     * Get LocalMarketAutoAcceptEnabled value
     * @return \StructType\LocalMarketAutoAcceptEnabledDefinitionType|null
     */
    public function getLocalMarketAutoAcceptEnabled()
    {
        return $this->LocalMarketAutoAcceptEnabled;
    }
    /**
     * Set LocalMarketAutoAcceptEnabled value
     * @param \StructType\LocalMarketAutoAcceptEnabledDefinitionType $localMarketAutoAcceptEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setLocalMarketAutoAcceptEnabled(\StructType\LocalMarketAutoAcceptEnabledDefinitionType $localMarketAutoAcceptEnabled = null)
    {
        $this->LocalMarketAutoAcceptEnabled = $localMarketAutoAcceptEnabled;
        return $this;
    }
    /**
     * Get LocalMarketAutoDeclineEnabled value
     * @return \StructType\LocalMarketAutoDeclineEnabledDefinitionType|null
     */
    public function getLocalMarketAutoDeclineEnabled()
    {
        return $this->LocalMarketAutoDeclineEnabled;
    }
    /**
     * Set LocalMarketAutoDeclineEnabled value
     * @param \StructType\LocalMarketAutoDeclineEnabledDefinitionType $localMarketAutoDeclineEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setLocalMarketAutoDeclineEnabled(\StructType\LocalMarketAutoDeclineEnabledDefinitionType $localMarketAutoDeclineEnabled = null)
    {
        $this->LocalMarketAutoDeclineEnabled = $localMarketAutoDeclineEnabled;
        return $this;
    }
    /**
     * Get LocalMarketPaymentMethodCheckOutEnabled value
     * @return \StructType\LocalMarketPaymentMethodCheckOutEnabledDefinitionType|null
     */
    public function getLocalMarketPaymentMethodCheckOutEnabled()
    {
        return $this->LocalMarketPaymentMethodCheckOutEnabled;
    }
    /**
     * Set LocalMarketPaymentMethodCheckOutEnabled value
     * @param \StructType\LocalMarketPaymentMethodCheckOutEnabledDefinitionType $localMarketPaymentMethodCheckOutEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setLocalMarketPaymentMethodCheckOutEnabled(\StructType\LocalMarketPaymentMethodCheckOutEnabledDefinitionType $localMarketPaymentMethodCheckOutEnabled = null)
    {
        $this->LocalMarketPaymentMethodCheckOutEnabled = $localMarketPaymentMethodCheckOutEnabled;
        return $this;
    }
    /**
     * Get LocalMarketShippingMethodEnabled value
     * @return \StructType\LocalMarketShippingMethodEnabledDefinitionType|null
     */
    public function getLocalMarketShippingMethodEnabled()
    {
        return $this->LocalMarketShippingMethodEnabled;
    }
    /**
     * Set LocalMarketShippingMethodEnabled value
     * @param \StructType\LocalMarketShippingMethodEnabledDefinitionType $localMarketShippingMethodEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setLocalMarketShippingMethodEnabled(\StructType\LocalMarketShippingMethodEnabledDefinitionType $localMarketShippingMethodEnabled = null)
    {
        $this->LocalMarketShippingMethodEnabled = $localMarketShippingMethodEnabled;
        return $this;
    }
    /**
     * Get LocalMarketCounterOfferEnabled value
     * @return \StructType\LocalMarketCounterOfferEnabledDefinitionType|null
     */
    public function getLocalMarketCounterOfferEnabled()
    {
        return $this->LocalMarketCounterOfferEnabled;
    }
    /**
     * Set LocalMarketCounterOfferEnabled value
     * @param \StructType\LocalMarketCounterOfferEnabledDefinitionType $localMarketCounterOfferEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setLocalMarketCounterOfferEnabled(\StructType\LocalMarketCounterOfferEnabledDefinitionType $localMarketCounterOfferEnabled = null)
    {
        $this->LocalMarketCounterOfferEnabled = $localMarketCounterOfferEnabled;
        return $this;
    }
    /**
     * Get LocalMarketSellerContactDetailsEnabled value
     * @return \StructType\LocalMarketSellerContactDetailsEnabledDefinitionType|null
     */
    public function getLocalMarketSellerContactDetailsEnabled()
    {
        return $this->LocalMarketSellerContactDetailsEnabled;
    }
    /**
     * Set LocalMarketSellerContactDetailsEnabled value
     * @param \StructType\LocalMarketSellerContactDetailsEnabledDefinitionType $localMarketSellerContactDetailsEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setLocalMarketSellerContactDetailsEnabled(\StructType\LocalMarketSellerContactDetailsEnabledDefinitionType $localMarketSellerContactDetailsEnabled = null)
    {
        $this->LocalMarketSellerContactDetailsEnabled = $localMarketSellerContactDetailsEnabled;
        return $this;
    }
    /**
     * Get ClassifiedAdPhoneCount value
     * @return \StructType\ClassifiedAdPhoneCountDefinitionType|null
     */
    public function getClassifiedAdPhoneCount()
    {
        return $this->ClassifiedAdPhoneCount;
    }
    /**
     * Set ClassifiedAdPhoneCount value
     * @param \StructType\ClassifiedAdPhoneCountDefinitionType $classifiedAdPhoneCount
     * @return \StructType\FeatureDefinitionsType
     */
    public function setClassifiedAdPhoneCount(\StructType\ClassifiedAdPhoneCountDefinitionType $classifiedAdPhoneCount = null)
    {
        $this->ClassifiedAdPhoneCount = $classifiedAdPhoneCount;
        return $this;
    }
    /**
     * Get ClassifiedAdContactByAddressEnabled value
     * @return \StructType\ClassifiedAdContactByAddressEnabledDefinitionType|null
     */
    public function getClassifiedAdContactByAddressEnabled()
    {
        return $this->ClassifiedAdContactByAddressEnabled;
    }
    /**
     * Set ClassifiedAdContactByAddressEnabled value
     * @param \StructType\ClassifiedAdContactByAddressEnabledDefinitionType $classifiedAdContactByAddressEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setClassifiedAdContactByAddressEnabled(\StructType\ClassifiedAdContactByAddressEnabledDefinitionType $classifiedAdContactByAddressEnabled = null)
    {
        $this->ClassifiedAdContactByAddressEnabled = $classifiedAdContactByAddressEnabled;
        return $this;
    }
    /**
     * Get ClassifiedAdStreetCount value
     * @return \StructType\ClassifiedAdStreetCountDefinitionType|null
     */
    public function getClassifiedAdStreetCount()
    {
        return $this->ClassifiedAdStreetCount;
    }
    /**
     * Set ClassifiedAdStreetCount value
     * @param \StructType\ClassifiedAdStreetCountDefinitionType $classifiedAdStreetCount
     * @return \StructType\FeatureDefinitionsType
     */
    public function setClassifiedAdStreetCount(\StructType\ClassifiedAdStreetCountDefinitionType $classifiedAdStreetCount = null)
    {
        $this->ClassifiedAdStreetCount = $classifiedAdStreetCount;
        return $this;
    }
    /**
     * Get ClassifiedAdCompanyNameEnabled value
     * @return \StructType\ClassifiedAdCompanyNameEnabledDefinitionType|null
     */
    public function getClassifiedAdCompanyNameEnabled()
    {
        return $this->ClassifiedAdCompanyNameEnabled;
    }
    /**
     * Set ClassifiedAdCompanyNameEnabled value
     * @param \StructType\ClassifiedAdCompanyNameEnabledDefinitionType $classifiedAdCompanyNameEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setClassifiedAdCompanyNameEnabled(\StructType\ClassifiedAdCompanyNameEnabledDefinitionType $classifiedAdCompanyNameEnabled = null)
    {
        $this->ClassifiedAdCompanyNameEnabled = $classifiedAdCompanyNameEnabled;
        return $this;
    }
    /**
     * Get SpecialitySubscription value
     * @return \StructType\SpecialitySubscriptionDefinitionType|null
     */
    public function getSpecialitySubscription()
    {
        return $this->SpecialitySubscription;
    }
    /**
     * Set SpecialitySubscription value
     * @param \StructType\SpecialitySubscriptionDefinitionType $specialitySubscription
     * @return \StructType\FeatureDefinitionsType
     */
    public function setSpecialitySubscription(\StructType\SpecialitySubscriptionDefinitionType $specialitySubscription = null)
    {
        $this->SpecialitySubscription = $specialitySubscription;
        return $this;
    }
    /**
     * Get RegularSubscription value
     * @return \StructType\RegularSubscriptionDefinitionType|null
     */
    public function getRegularSubscription()
    {
        return $this->RegularSubscription;
    }
    /**
     * Set RegularSubscription value
     * @param \StructType\RegularSubscriptionDefinitionType $regularSubscription
     * @return \StructType\FeatureDefinitionsType
     */
    public function setRegularSubscription(\StructType\RegularSubscriptionDefinitionType $regularSubscription = null)
    {
        $this->RegularSubscription = $regularSubscription;
        return $this;
    }
    /**
     * Get PremiumSubscription value
     * @return \StructType\PremiumSubscriptionDefinitionType|null
     */
    public function getPremiumSubscription()
    {
        return $this->PremiumSubscription;
    }
    /**
     * Set PremiumSubscription value
     * @param \StructType\PremiumSubscriptionDefinitionType $premiumSubscription
     * @return \StructType\FeatureDefinitionsType
     */
    public function setPremiumSubscription(\StructType\PremiumSubscriptionDefinitionType $premiumSubscription = null)
    {
        $this->PremiumSubscription = $premiumSubscription;
        return $this;
    }
    /**
     * Get NonSubscription value
     * @return \StructType\NonSubscriptionDefinitionType|null
     */
    public function getNonSubscription()
    {
        return $this->NonSubscription;
    }
    /**
     * Set NonSubscription value
     * @param \StructType\NonSubscriptionDefinitionType $nonSubscription
     * @return \StructType\FeatureDefinitionsType
     */
    public function setNonSubscription(\StructType\NonSubscriptionDefinitionType $nonSubscription = null)
    {
        $this->NonSubscription = $nonSubscription;
        return $this;
    }
    /**
     * Get ReturnPolicyEnabled value
     * @return \StructType\ReturnPolicyEnabledDefinitionType|null
     */
    public function getReturnPolicyEnabled()
    {
        return $this->ReturnPolicyEnabled;
    }
    /**
     * Set ReturnPolicyEnabled value
     * @param \StructType\ReturnPolicyEnabledDefinitionType $returnPolicyEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setReturnPolicyEnabled(\StructType\ReturnPolicyEnabledDefinitionType $returnPolicyEnabled = null)
    {
        $this->ReturnPolicyEnabled = $returnPolicyEnabled;
        return $this;
    }
    /**
     * Get HandlingTimeEnabled value
     * @return \StructType\HandlingTimeEnabledDefinitionType|null
     */
    public function getHandlingTimeEnabled()
    {
        return $this->HandlingTimeEnabled;
    }
    /**
     * Set HandlingTimeEnabled value
     * @param \StructType\HandlingTimeEnabledDefinitionType $handlingTimeEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setHandlingTimeEnabled(\StructType\HandlingTimeEnabledDefinitionType $handlingTimeEnabled = null)
    {
        $this->HandlingTimeEnabled = $handlingTimeEnabled;
        return $this;
    }
    /**
     * Get PayPalRequiredForStoreOwner value
     * @return \StructType\PayPalRequiredForStoreOwnerDefinitionType|null
     */
    public function getPayPalRequiredForStoreOwner()
    {
        return $this->PayPalRequiredForStoreOwner;
    }
    /**
     * Set PayPalRequiredForStoreOwner value
     * @param \StructType\PayPalRequiredForStoreOwnerDefinitionType $payPalRequiredForStoreOwner
     * @return \StructType\FeatureDefinitionsType
     */
    public function setPayPalRequiredForStoreOwner(\StructType\PayPalRequiredForStoreOwnerDefinitionType $payPalRequiredForStoreOwner = null)
    {
        $this->PayPalRequiredForStoreOwner = $payPalRequiredForStoreOwner;
        return $this;
    }
    /**
     * Get ReviseQuantityAllowed value
     * @return \StructType\ReviseQuantityAllowedDefinitionType|null
     */
    public function getReviseQuantityAllowed()
    {
        return $this->ReviseQuantityAllowed;
    }
    /**
     * Set ReviseQuantityAllowed value
     * @param \StructType\ReviseQuantityAllowedDefinitionType $reviseQuantityAllowed
     * @return \StructType\FeatureDefinitionsType
     */
    public function setReviseQuantityAllowed(\StructType\ReviseQuantityAllowedDefinitionType $reviseQuantityAllowed = null)
    {
        $this->ReviseQuantityAllowed = $reviseQuantityAllowed;
        return $this;
    }
    /**
     * Get RevisePriceAllowed value
     * @return \StructType\RevisePriceAllowedDefinitionType|null
     */
    public function getRevisePriceAllowed()
    {
        return $this->RevisePriceAllowed;
    }
    /**
     * Set RevisePriceAllowed value
     * @param \StructType\RevisePriceAllowedDefinitionType $revisePriceAllowed
     * @return \StructType\FeatureDefinitionsType
     */
    public function setRevisePriceAllowed(\StructType\RevisePriceAllowedDefinitionType $revisePriceAllowed = null)
    {
        $this->RevisePriceAllowed = $revisePriceAllowed;
        return $this;
    }
    /**
     * Get StoreOwnerExtendedListingDurationsEnabled value
     * @return \StructType\StoreOwnerExtendedListingDurationsEnabledDefinitionType|null
     */
    public function getStoreOwnerExtendedListingDurationsEnabled()
    {
        return $this->StoreOwnerExtendedListingDurationsEnabled;
    }
    /**
     * Set StoreOwnerExtendedListingDurationsEnabled value
     * @param \StructType\StoreOwnerExtendedListingDurationsEnabledDefinitionType $storeOwnerExtendedListingDurationsEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setStoreOwnerExtendedListingDurationsEnabled(\StructType\StoreOwnerExtendedListingDurationsEnabledDefinitionType $storeOwnerExtendedListingDurationsEnabled = null)
    {
        $this->StoreOwnerExtendedListingDurationsEnabled = $storeOwnerExtendedListingDurationsEnabled;
        return $this;
    }
    /**
     * Get StoreOwnerExtendedListingDurations value
     * @return \StructType\StoreOwnerExtendedListingDurationsDefinitionType|null
     */
    public function getStoreOwnerExtendedListingDurations()
    {
        return $this->StoreOwnerExtendedListingDurations;
    }
    /**
     * Set StoreOwnerExtendedListingDurations value
     * @param \StructType\StoreOwnerExtendedListingDurationsDefinitionType $storeOwnerExtendedListingDurations
     * @return \StructType\FeatureDefinitionsType
     */
    public function setStoreOwnerExtendedListingDurations(\StructType\StoreOwnerExtendedListingDurationsDefinitionType $storeOwnerExtendedListingDurations = null)
    {
        $this->StoreOwnerExtendedListingDurations = $storeOwnerExtendedListingDurations;
        return $this;
    }
    /**
     * Get PaymentMethod value
     * @return \StructType\PaymentMethodDefinitionType|null
     */
    public function getPaymentMethod()
    {
        return $this->PaymentMethod;
    }
    /**
     * Set PaymentMethod value
     * @param \StructType\PaymentMethodDefinitionType $paymentMethod
     * @return \StructType\FeatureDefinitionsType
     */
    public function setPaymentMethod(\StructType\PaymentMethodDefinitionType $paymentMethod = null)
    {
        $this->PaymentMethod = $paymentMethod;
        return $this;
    }
    /**
     * Get Group1MaxFlatShippingCost value
     * @return \StructType\Group1MaxFlatShippingCostDefinitionType|null
     */
    public function getGroup1MaxFlatShippingCost()
    {
        return $this->Group1MaxFlatShippingCost;
    }
    /**
     * Set Group1MaxFlatShippingCost value
     * @param \StructType\Group1MaxFlatShippingCostDefinitionType $group1MaxFlatShippingCost
     * @return \StructType\FeatureDefinitionsType
     */
    public function setGroup1MaxFlatShippingCost(\StructType\Group1MaxFlatShippingCostDefinitionType $group1MaxFlatShippingCost = null)
    {
        $this->Group1MaxFlatShippingCost = $group1MaxFlatShippingCost;
        return $this;
    }
    /**
     * Get Group2MaxFlatShippingCost value
     * @return \StructType\Group2MaxFlatShippingCostDefinitionType|null
     */
    public function getGroup2MaxFlatShippingCost()
    {
        return $this->Group2MaxFlatShippingCost;
    }
    /**
     * Set Group2MaxFlatShippingCost value
     * @param \StructType\Group2MaxFlatShippingCostDefinitionType $group2MaxFlatShippingCost
     * @return \StructType\FeatureDefinitionsType
     */
    public function setGroup2MaxFlatShippingCost(\StructType\Group2MaxFlatShippingCostDefinitionType $group2MaxFlatShippingCost = null)
    {
        $this->Group2MaxFlatShippingCost = $group2MaxFlatShippingCost;
        return $this;
    }
    /**
     * Get Group3MaxFlatShippingCost value
     * @return \StructType\Group3MaxFlatShippingCostDefinitionType|null
     */
    public function getGroup3MaxFlatShippingCost()
    {
        return $this->Group3MaxFlatShippingCost;
    }
    /**
     * Set Group3MaxFlatShippingCost value
     * @param \StructType\Group3MaxFlatShippingCostDefinitionType $group3MaxFlatShippingCost
     * @return \StructType\FeatureDefinitionsType
     */
    public function setGroup3MaxFlatShippingCost(\StructType\Group3MaxFlatShippingCostDefinitionType $group3MaxFlatShippingCost = null)
    {
        $this->Group3MaxFlatShippingCost = $group3MaxFlatShippingCost;
        return $this;
    }
    /**
     * Get MaxFlatShippingCostCBTExempt value
     * @return \StructType\MaxFlatShippingCostCBTExemptDefinitionType|null
     */
    public function getMaxFlatShippingCostCBTExempt()
    {
        return $this->MaxFlatShippingCostCBTExempt;
    }
    /**
     * Set MaxFlatShippingCostCBTExempt value
     * @param \StructType\MaxFlatShippingCostCBTExemptDefinitionType $maxFlatShippingCostCBTExempt
     * @return \StructType\FeatureDefinitionsType
     */
    public function setMaxFlatShippingCostCBTExempt(\StructType\MaxFlatShippingCostCBTExemptDefinitionType $maxFlatShippingCostCBTExempt = null)
    {
        $this->MaxFlatShippingCostCBTExempt = $maxFlatShippingCostCBTExempt;
        return $this;
    }
    /**
     * Get MaxFlatShippingCost value
     * @return \StructType\MaxFlatShippingCostDefinitionType|null
     */
    public function getMaxFlatShippingCost()
    {
        return $this->MaxFlatShippingCost;
    }
    /**
     * Set MaxFlatShippingCost value
     * @param \StructType\MaxFlatShippingCostDefinitionType $maxFlatShippingCost
     * @return \StructType\FeatureDefinitionsType
     */
    public function setMaxFlatShippingCost(\StructType\MaxFlatShippingCostDefinitionType $maxFlatShippingCost = null)
    {
        $this->MaxFlatShippingCost = $maxFlatShippingCost;
        return $this;
    }
    /**
     * Get VariationsEnabled value
     * @return \StructType\VariationsEnabledDefinitionType|null
     */
    public function getVariationsEnabled()
    {
        return $this->VariationsEnabled;
    }
    /**
     * Set VariationsEnabled value
     * @param \StructType\VariationsEnabledDefinitionType $variationsEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setVariationsEnabled(\StructType\VariationsEnabledDefinitionType $variationsEnabled = null)
    {
        $this->VariationsEnabled = $variationsEnabled;
        return $this;
    }
    /**
     * Get AttributeConversionEnabled value
     * @return \StructType\AttributeConversionEnabledFeatureDefinitionType|null
     */
    public function getAttributeConversionEnabled()
    {
        return $this->AttributeConversionEnabled;
    }
    /**
     * Set AttributeConversionEnabled value
     * @param \StructType\AttributeConversionEnabledFeatureDefinitionType $attributeConversionEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setAttributeConversionEnabled(\StructType\AttributeConversionEnabledFeatureDefinitionType $attributeConversionEnabled = null)
    {
        $this->AttributeConversionEnabled = $attributeConversionEnabled;
        return $this;
    }
    /**
     * Get FreeGalleryPlusEnabled value
     * @return \StructType\FreeGalleryPlusEnabledDefinitionType|null
     */
    public function getFreeGalleryPlusEnabled()
    {
        return $this->FreeGalleryPlusEnabled;
    }
    /**
     * Set FreeGalleryPlusEnabled value
     * @param \StructType\FreeGalleryPlusEnabledDefinitionType $freeGalleryPlusEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setFreeGalleryPlusEnabled(\StructType\FreeGalleryPlusEnabledDefinitionType $freeGalleryPlusEnabled = null)
    {
        $this->FreeGalleryPlusEnabled = $freeGalleryPlusEnabled;
        return $this;
    }
    /**
     * Get FreePicturePackEnabled value
     * @return \StructType\FreePicturePackEnabledDefinitionType|null
     */
    public function getFreePicturePackEnabled()
    {
        return $this->FreePicturePackEnabled;
    }
    /**
     * Set FreePicturePackEnabled value
     * @param \StructType\FreePicturePackEnabledDefinitionType $freePicturePackEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setFreePicturePackEnabled(\StructType\FreePicturePackEnabledDefinitionType $freePicturePackEnabled = null)
    {
        $this->FreePicturePackEnabled = $freePicturePackEnabled;
        return $this;
    }
    /**
     * Get ItemCompatibilityEnabled value
     * @return \StructType\ItemCompatibilityEnabledDefinitionType|null
     */
    public function getItemCompatibilityEnabled()
    {
        return $this->ItemCompatibilityEnabled;
    }
    /**
     * Set ItemCompatibilityEnabled value
     * @param \StructType\ItemCompatibilityEnabledDefinitionType $itemCompatibilityEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setItemCompatibilityEnabled(\StructType\ItemCompatibilityEnabledDefinitionType $itemCompatibilityEnabled = null)
    {
        $this->ItemCompatibilityEnabled = $itemCompatibilityEnabled;
        return $this;
    }
    /**
     * Get MaxItemCompatibility value
     * @return \StructType\MaxItemCompatibilityDefinitionType|null
     */
    public function getMaxItemCompatibility()
    {
        return $this->MaxItemCompatibility;
    }
    /**
     * Set MaxItemCompatibility value
     * @param \StructType\MaxItemCompatibilityDefinitionType $maxItemCompatibility
     * @return \StructType\FeatureDefinitionsType
     */
    public function setMaxItemCompatibility(\StructType\MaxItemCompatibilityDefinitionType $maxItemCompatibility = null)
    {
        $this->MaxItemCompatibility = $maxItemCompatibility;
        return $this;
    }
    /**
     * Get MinItemCompatibility value
     * @return \StructType\MinItemCompatibilityDefinitionType|null
     */
    public function getMinItemCompatibility()
    {
        return $this->MinItemCompatibility;
    }
    /**
     * Set MinItemCompatibility value
     * @param \StructType\MinItemCompatibilityDefinitionType $minItemCompatibility
     * @return \StructType\FeatureDefinitionsType
     */
    public function setMinItemCompatibility(\StructType\MinItemCompatibilityDefinitionType $minItemCompatibility = null)
    {
        $this->MinItemCompatibility = $minItemCompatibility;
        return $this;
    }
    /**
     * Get ConditionEnabled value
     * @return \StructType\ConditionEnabledDefinitionType|null
     */
    public function getConditionEnabled()
    {
        return $this->ConditionEnabled;
    }
    /**
     * Set ConditionEnabled value
     * @param \StructType\ConditionEnabledDefinitionType $conditionEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setConditionEnabled(\StructType\ConditionEnabledDefinitionType $conditionEnabled = null)
    {
        $this->ConditionEnabled = $conditionEnabled;
        return $this;
    }
    /**
     * Get ConditionValues value
     * @return \StructType\ConditionValuesDefinitionType|null
     */
    public function getConditionValues()
    {
        return $this->ConditionValues;
    }
    /**
     * Set ConditionValues value
     * @param \StructType\ConditionValuesDefinitionType $conditionValues
     * @return \StructType\FeatureDefinitionsType
     */
    public function setConditionValues(\StructType\ConditionValuesDefinitionType $conditionValues = null)
    {
        $this->ConditionValues = $conditionValues;
        return $this;
    }
    /**
     * Get ValueCategory value
     * @return \StructType\ValueCategoryDefinitionType|null
     */
    public function getValueCategory()
    {
        return $this->ValueCategory;
    }
    /**
     * Set ValueCategory value
     * @param \StructType\ValueCategoryDefinitionType $valueCategory
     * @return \StructType\FeatureDefinitionsType
     */
    public function setValueCategory(\StructType\ValueCategoryDefinitionType $valueCategory = null)
    {
        $this->ValueCategory = $valueCategory;
        return $this;
    }
    /**
     * Get ProductCreationEnabled value
     * @return \StructType\ProductCreationEnabledDefinitionType|null
     */
    public function getProductCreationEnabled()
    {
        return $this->ProductCreationEnabled;
    }
    /**
     * Set ProductCreationEnabled value
     * @param \StructType\ProductCreationEnabledDefinitionType $productCreationEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setProductCreationEnabled(\StructType\ProductCreationEnabledDefinitionType $productCreationEnabled = null)
    {
        $this->ProductCreationEnabled = $productCreationEnabled;
        return $this;
    }
    /**
     * Get EANEnabled value
     * @return \StructType\EANEnabledDefinitionType|null
     */
    public function getEANEnabled()
    {
        return $this->EANEnabled;
    }
    /**
     * Set EANEnabled value
     * @param \StructType\EANEnabledDefinitionType $eANEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setEANEnabled(\StructType\EANEnabledDefinitionType $eANEnabled = null)
    {
        $this->EANEnabled = $eANEnabled;
        return $this;
    }
    /**
     * Get ISBNEnabled value
     * @return \StructType\ISBNEnabledDefinitionType|null
     */
    public function getISBNEnabled()
    {
        return $this->ISBNEnabled;
    }
    /**
     * Set ISBNEnabled value
     * @param \StructType\ISBNEnabledDefinitionType $iSBNEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setISBNEnabled(\StructType\ISBNEnabledDefinitionType $iSBNEnabled = null)
    {
        $this->ISBNEnabled = $iSBNEnabled;
        return $this;
    }
    /**
     * Get UPCEnabled value
     * @return \StructType\UPCEnabledDefinitionType|null
     */
    public function getUPCEnabled()
    {
        return $this->UPCEnabled;
    }
    /**
     * Set UPCEnabled value
     * @param \StructType\UPCEnabledDefinitionType $uPCEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setUPCEnabled(\StructType\UPCEnabledDefinitionType $uPCEnabled = null)
    {
        $this->UPCEnabled = $uPCEnabled;
        return $this;
    }
    /**
     * Get CompatibleVehicleType value
     * @return \StructType\CompatibleVehicleTypeDefinitionType|null
     */
    public function getCompatibleVehicleType()
    {
        return $this->CompatibleVehicleType;
    }
    /**
     * Set CompatibleVehicleType value
     * @param \StructType\CompatibleVehicleTypeDefinitionType $compatibleVehicleType
     * @return \StructType\FeatureDefinitionsType
     */
    public function setCompatibleVehicleType(\StructType\CompatibleVehicleTypeDefinitionType $compatibleVehicleType = null)
    {
        $this->CompatibleVehicleType = $compatibleVehicleType;
        return $this;
    }
    /**
     * Get MaxGranularFitmentCount value
     * @return \StructType\MaxGranularFitmentCountDefinitionType|null
     */
    public function getMaxGranularFitmentCount()
    {
        return $this->MaxGranularFitmentCount;
    }
    /**
     * Set MaxGranularFitmentCount value
     * @param \StructType\MaxGranularFitmentCountDefinitionType $maxGranularFitmentCount
     * @return \StructType\FeatureDefinitionsType
     */
    public function setMaxGranularFitmentCount(\StructType\MaxGranularFitmentCountDefinitionType $maxGranularFitmentCount = null)
    {
        $this->MaxGranularFitmentCount = $maxGranularFitmentCount;
        return $this;
    }
    /**
     * Get PaymentOptionsGroup value
     * @return \StructType\PaymentOptionsGroupEnabledDefinitionType|null
     */
    public function getPaymentOptionsGroup()
    {
        return $this->PaymentOptionsGroup;
    }
    /**
     * Set PaymentOptionsGroup value
     * @param \StructType\PaymentOptionsGroupEnabledDefinitionType $paymentOptionsGroup
     * @return \StructType\FeatureDefinitionsType
     */
    public function setPaymentOptionsGroup(\StructType\PaymentOptionsGroupEnabledDefinitionType $paymentOptionsGroup = null)
    {
        $this->PaymentOptionsGroup = $paymentOptionsGroup;
        return $this;
    }
    /**
     * Get ShippingProfileCategoryGroup value
     * @return \StructType\ProfileCategoryGroupDefinitionType|null
     */
    public function getShippingProfileCategoryGroup()
    {
        return $this->ShippingProfileCategoryGroup;
    }
    /**
     * Set ShippingProfileCategoryGroup value
     * @param \StructType\ProfileCategoryGroupDefinitionType $shippingProfileCategoryGroup
     * @return \StructType\FeatureDefinitionsType
     */
    public function setShippingProfileCategoryGroup(\StructType\ProfileCategoryGroupDefinitionType $shippingProfileCategoryGroup = null)
    {
        $this->ShippingProfileCategoryGroup = $shippingProfileCategoryGroup;
        return $this;
    }
    /**
     * Get PaymentProfileCategoryGroup value
     * @return \StructType\ProfileCategoryGroupDefinitionType|null
     */
    public function getPaymentProfileCategoryGroup()
    {
        return $this->PaymentProfileCategoryGroup;
    }
    /**
     * Set PaymentProfileCategoryGroup value
     * @param \StructType\ProfileCategoryGroupDefinitionType $paymentProfileCategoryGroup
     * @return \StructType\FeatureDefinitionsType
     */
    public function setPaymentProfileCategoryGroup(\StructType\ProfileCategoryGroupDefinitionType $paymentProfileCategoryGroup = null)
    {
        $this->PaymentProfileCategoryGroup = $paymentProfileCategoryGroup;
        return $this;
    }
    /**
     * Get ReturnPolicyProfileCategoryGroup value
     * @return \StructType\ProfileCategoryGroupDefinitionType|null
     */
    public function getReturnPolicyProfileCategoryGroup()
    {
        return $this->ReturnPolicyProfileCategoryGroup;
    }
    /**
     * Set ReturnPolicyProfileCategoryGroup value
     * @param \StructType\ProfileCategoryGroupDefinitionType $returnPolicyProfileCategoryGroup
     * @return \StructType\FeatureDefinitionsType
     */
    public function setReturnPolicyProfileCategoryGroup(\StructType\ProfileCategoryGroupDefinitionType $returnPolicyProfileCategoryGroup = null)
    {
        $this->ReturnPolicyProfileCategoryGroup = $returnPolicyProfileCategoryGroup;
        return $this;
    }
    /**
     * Get VINSupported value
     * @return \StructType\VINSupportedDefinitionType|null
     */
    public function getVINSupported()
    {
        return $this->VINSupported;
    }
    /**
     * Set VINSupported value
     * @param \StructType\VINSupportedDefinitionType $vINSupported
     * @return \StructType\FeatureDefinitionsType
     */
    public function setVINSupported(\StructType\VINSupportedDefinitionType $vINSupported = null)
    {
        $this->VINSupported = $vINSupported;
        return $this;
    }
    /**
     * Get VRMSupported value
     * @return \StructType\VRMSupportedDefinitionType|null
     */
    public function getVRMSupported()
    {
        return $this->VRMSupported;
    }
    /**
     * Set VRMSupported value
     * @param \StructType\VRMSupportedDefinitionType $vRMSupported
     * @return \StructType\FeatureDefinitionsType
     */
    public function setVRMSupported(\StructType\VRMSupportedDefinitionType $vRMSupported = null)
    {
        $this->VRMSupported = $vRMSupported;
        return $this;
    }
    /**
     * Get SellerProvidedTitleSupported value
     * @return \StructType\SellerProvidedTitleSupportedDefinitionType|null
     */
    public function getSellerProvidedTitleSupported()
    {
        return $this->SellerProvidedTitleSupported;
    }
    /**
     * Set SellerProvidedTitleSupported value
     * @param \StructType\SellerProvidedTitleSupportedDefinitionType $sellerProvidedTitleSupported
     * @return \StructType\FeatureDefinitionsType
     */
    public function setSellerProvidedTitleSupported(\StructType\SellerProvidedTitleSupportedDefinitionType $sellerProvidedTitleSupported = null)
    {
        $this->SellerProvidedTitleSupported = $sellerProvidedTitleSupported;
        return $this;
    }
    /**
     * Get DepositSupported value
     * @return \StructType\DepositSupportedDefinitionType|null
     */
    public function getDepositSupported()
    {
        return $this->DepositSupported;
    }
    /**
     * Set DepositSupported value
     * @param \StructType\DepositSupportedDefinitionType $depositSupported
     * @return \StructType\FeatureDefinitionsType
     */
    public function setDepositSupported(\StructType\DepositSupportedDefinitionType $depositSupported = null)
    {
        $this->DepositSupported = $depositSupported;
        return $this;
    }
    /**
     * Get GlobalShippingEnabled value
     * @return \StructType\GlobalShippingEnabledDefinitionType|null
     */
    public function getGlobalShippingEnabled()
    {
        return $this->GlobalShippingEnabled;
    }
    /**
     * Set GlobalShippingEnabled value
     * @param \StructType\GlobalShippingEnabledDefinitionType $globalShippingEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setGlobalShippingEnabled(\StructType\GlobalShippingEnabledDefinitionType $globalShippingEnabled = null)
    {
        $this->GlobalShippingEnabled = $globalShippingEnabled;
        return $this;
    }
    /**
     * Get AdditionalCompatibilityEnabled value
     * @return \StructType\AdditionalCompatibilityEnabledDefinitionType|null
     */
    public function getAdditionalCompatibilityEnabled()
    {
        return $this->AdditionalCompatibilityEnabled;
    }
    /**
     * Set AdditionalCompatibilityEnabled value
     * @param \StructType\AdditionalCompatibilityEnabledDefinitionType $additionalCompatibilityEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setAdditionalCompatibilityEnabled(\StructType\AdditionalCompatibilityEnabledDefinitionType $additionalCompatibilityEnabled = null)
    {
        $this->AdditionalCompatibilityEnabled = $additionalCompatibilityEnabled;
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
     * @return \StructType\FeatureDefinitionsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
    /**
     * Get PickupDropOffEnabled value
     * @return \StructType\PickupDropOffEnabledDefinitionType|null
     */
    public function getPickupDropOffEnabled()
    {
        return $this->PickupDropOffEnabled;
    }
    /**
     * Set PickupDropOffEnabled value
     * @param \StructType\PickupDropOffEnabledDefinitionType $pickupDropOffEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setPickupDropOffEnabled(\StructType\PickupDropOffEnabledDefinitionType $pickupDropOffEnabled = null)
    {
        $this->PickupDropOffEnabled = $pickupDropOffEnabled;
        return $this;
    }
    /**
     * Get DigitalGoodDeliveryEnabled value
     * @return \StructType\DigitalGoodDeliveryEnabledDefinitionType|null
     */
    public function getDigitalGoodDeliveryEnabled()
    {
        return $this->DigitalGoodDeliveryEnabled;
    }
    /**
     * Set DigitalGoodDeliveryEnabled value
     * @param \StructType\DigitalGoodDeliveryEnabledDefinitionType $digitalGoodDeliveryEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setDigitalGoodDeliveryEnabled(\StructType\DigitalGoodDeliveryEnabledDefinitionType $digitalGoodDeliveryEnabled = null)
    {
        $this->DigitalGoodDeliveryEnabled = $digitalGoodDeliveryEnabled;
        return $this;
    }
    /**
     * Get EpidSupported value
     * @return \StructType\EpidSupportedDefinitionType|null
     */
    public function getEpidSupported()
    {
        return $this->EpidSupported;
    }
    /**
     * Set EpidSupported value
     * @param \StructType\EpidSupportedDefinitionType $epidSupported
     * @return \StructType\FeatureDefinitionsType
     */
    public function setEpidSupported(\StructType\EpidSupportedDefinitionType $epidSupported = null)
    {
        $this->EpidSupported = $epidSupported;
        return $this;
    }
    /**
     * Get KTypeSupported value
     * @return \StructType\KTypeSupportedDefinitionType|null
     */
    public function getKTypeSupported()
    {
        return $this->KTypeSupported;
    }
    /**
     * Set KTypeSupported value
     * @param \StructType\KTypeSupportedDefinitionType $kTypeSupported
     * @return \StructType\FeatureDefinitionsType
     */
    public function setKTypeSupported(\StructType\KTypeSupportedDefinitionType $kTypeSupported = null)
    {
        $this->KTypeSupported = $kTypeSupported;
        return $this;
    }
    /**
     * Get ProductRequiredEnabled value
     * @return \StructType\ProductRequiredEnabledDefinitionType|null
     */
    public function getProductRequiredEnabled()
    {
        return $this->ProductRequiredEnabled;
    }
    /**
     * Set ProductRequiredEnabled value
     * @param \StructType\ProductRequiredEnabledDefinitionType $productRequiredEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setProductRequiredEnabled(\StructType\ProductRequiredEnabledDefinitionType $productRequiredEnabled = null)
    {
        $this->ProductRequiredEnabled = $productRequiredEnabled;
        return $this;
    }
    /**
     * Get DomesticReturnsAcceptedValues value
     * @return \StructType\DomesticReturnsAcceptedDefinitionType|null
     */
    public function getDomesticReturnsAcceptedValues()
    {
        return $this->DomesticReturnsAcceptedValues;
    }
    /**
     * Set DomesticReturnsAcceptedValues value
     * @param \StructType\DomesticReturnsAcceptedDefinitionType $domesticReturnsAcceptedValues
     * @return \StructType\FeatureDefinitionsType
     */
    public function setDomesticReturnsAcceptedValues(\StructType\DomesticReturnsAcceptedDefinitionType $domesticReturnsAcceptedValues = null)
    {
        $this->DomesticReturnsAcceptedValues = $domesticReturnsAcceptedValues;
        return $this;
    }
    /**
     * Get InternationalReturnsAcceptedValues value
     * @return \StructType\InternationalReturnsAcceptedDefinitionType|null
     */
    public function getInternationalReturnsAcceptedValues()
    {
        return $this->InternationalReturnsAcceptedValues;
    }
    /**
     * Set InternationalReturnsAcceptedValues value
     * @param \StructType\InternationalReturnsAcceptedDefinitionType $internationalReturnsAcceptedValues
     * @return \StructType\FeatureDefinitionsType
     */
    public function setInternationalReturnsAcceptedValues(\StructType\InternationalReturnsAcceptedDefinitionType $internationalReturnsAcceptedValues = null)
    {
        $this->InternationalReturnsAcceptedValues = $internationalReturnsAcceptedValues;
        return $this;
    }
    /**
     * Get DomesticReturnsDurationValues value
     * @return \StructType\DomesticReturnsDurationDefinitionType|null
     */
    public function getDomesticReturnsDurationValues()
    {
        return $this->DomesticReturnsDurationValues;
    }
    /**
     * Set DomesticReturnsDurationValues value
     * @param \StructType\DomesticReturnsDurationDefinitionType $domesticReturnsDurationValues
     * @return \StructType\FeatureDefinitionsType
     */
    public function setDomesticReturnsDurationValues(\StructType\DomesticReturnsDurationDefinitionType $domesticReturnsDurationValues = null)
    {
        $this->DomesticReturnsDurationValues = $domesticReturnsDurationValues;
        return $this;
    }
    /**
     * Get InternationalReturnsDurationValues value
     * @return \StructType\InternationalReturnsDurationDefinitionType|null
     */
    public function getInternationalReturnsDurationValues()
    {
        return $this->InternationalReturnsDurationValues;
    }
    /**
     * Set InternationalReturnsDurationValues value
     * @param \StructType\InternationalReturnsDurationDefinitionType $internationalReturnsDurationValues
     * @return \StructType\FeatureDefinitionsType
     */
    public function setInternationalReturnsDurationValues(\StructType\InternationalReturnsDurationDefinitionType $internationalReturnsDurationValues = null)
    {
        $this->InternationalReturnsDurationValues = $internationalReturnsDurationValues;
        return $this;
    }
    /**
     * Get DomesticReturnsShipmentPayeeValues value
     * @return \StructType\DomesticReturnsShipmentPayeeDefinitionType|null
     */
    public function getDomesticReturnsShipmentPayeeValues()
    {
        return $this->DomesticReturnsShipmentPayeeValues;
    }
    /**
     * Set DomesticReturnsShipmentPayeeValues value
     * @param \StructType\DomesticReturnsShipmentPayeeDefinitionType $domesticReturnsShipmentPayeeValues
     * @return \StructType\FeatureDefinitionsType
     */
    public function setDomesticReturnsShipmentPayeeValues(\StructType\DomesticReturnsShipmentPayeeDefinitionType $domesticReturnsShipmentPayeeValues = null)
    {
        $this->DomesticReturnsShipmentPayeeValues = $domesticReturnsShipmentPayeeValues;
        return $this;
    }
    /**
     * Get InternationalReturnsShipmentPayeeValues value
     * @return \StructType\InternationalReturnsShipmentPayeeDefinitionType|null
     */
    public function getInternationalReturnsShipmentPayeeValues()
    {
        return $this->InternationalReturnsShipmentPayeeValues;
    }
    /**
     * Set InternationalReturnsShipmentPayeeValues value
     * @param \StructType\InternationalReturnsShipmentPayeeDefinitionType $internationalReturnsShipmentPayeeValues
     * @return \StructType\FeatureDefinitionsType
     */
    public function setInternationalReturnsShipmentPayeeValues(\StructType\InternationalReturnsShipmentPayeeDefinitionType $internationalReturnsShipmentPayeeValues = null)
    {
        $this->InternationalReturnsShipmentPayeeValues = $internationalReturnsShipmentPayeeValues;
        return $this;
    }
    /**
     * Get DomesticRefundMethodValues value
     * @return \StructType\DomesticRefundMethodCodeType|null
     */
    public function getDomesticRefundMethodValues()
    {
        return $this->DomesticRefundMethodValues;
    }
    /**
     * Set DomesticRefundMethodValues value
     * @param \StructType\DomesticRefundMethodCodeType $domesticRefundMethodValues
     * @return \StructType\FeatureDefinitionsType
     */
    public function setDomesticRefundMethodValues(\StructType\DomesticRefundMethodCodeType $domesticRefundMethodValues = null)
    {
        $this->DomesticRefundMethodValues = $domesticRefundMethodValues;
        return $this;
    }
    /**
     * Get InternationalRefundMethodValues value
     * @return \StructType\InternationalRefundMethodCodeType|null
     */
    public function getInternationalRefundMethodValues()
    {
        return $this->InternationalRefundMethodValues;
    }
    /**
     * Set InternationalRefundMethodValues value
     * @param \StructType\InternationalRefundMethodCodeType $internationalRefundMethodValues
     * @return \StructType\FeatureDefinitionsType
     */
    public function setInternationalRefundMethodValues(\StructType\InternationalRefundMethodCodeType $internationalRefundMethodValues = null)
    {
        $this->InternationalRefundMethodValues = $internationalRefundMethodValues;
        return $this;
    }
    /**
     * Get ReturnPolicyDescriptionEnabled value
     * @return \StructType\ReturnPolicyDescriptionEnabledDefinitionType|null
     */
    public function getReturnPolicyDescriptionEnabled()
    {
        return $this->ReturnPolicyDescriptionEnabled;
    }
    /**
     * Set ReturnPolicyDescriptionEnabled value
     * @param \StructType\ReturnPolicyDescriptionEnabledDefinitionType $returnPolicyDescriptionEnabled
     * @return \StructType\FeatureDefinitionsType
     */
    public function setReturnPolicyDescriptionEnabled(\StructType\ReturnPolicyDescriptionEnabledDefinitionType $returnPolicyDescriptionEnabled = null)
    {
        $this->ReturnPolicyDescriptionEnabled = $returnPolicyDescriptionEnabled;
        return $this;
    }
}
