<?php

namespace EnumType;

/**
 * This class stands for ListingTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type contains the valid selling formats for eBay listings.
 * @subpackage Enumerations
 */
class ListingTypeCodeType
{
    /**
     * Constant for value 'Unknown'
     * Meta information extracted from the WSDL
     * - documentation: Unknown or undefined auction type. Applicable to user preferences and other informational use cases.
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Chinese'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates an auction listing. In an auction listing, prospective buyers engage in a competitive bidding process, although Buy It Now may be offered as long as no bids have been placed. Auctions occur on the eBay
     * marketplace site, and the auction listings will also appear in the seller's eBay Store (if the seller has an eBay Store). <br><br> Although listing durations may vary by eBay marketplace and category, typical listing durations for auctions are 3, 5,
     * 7, and 10 days. It is recommended that the seller uses the <b>GetCategoryFeatures</b> call to retrieve the actual listing durations that are supported for auctions on a particular marketplace and category.
     * @return string 'Chinese'
     */
    const VALUE_CHINESE = 'Chinese';
    /**
     * Constant for value 'Dutch'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable.
     * @return string 'Dutch'
     */
    const VALUE_DUTCH = 'Dutch';
    /**
     * Constant for value 'Live'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable.
     * @return string 'Live'
     */
    const VALUE_LIVE = 'Live';
    /**
     * Constant for value 'Auction'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is only applicable to the <b>GetMyeBaySelling</b> call. This value is used in the <b>ActiveList.ListingType</b> field if the seller only wants to retrieve active listings that are in the auction format.
     * @return string 'Auction'
     */
    const VALUE_AUCTION = 'Auction';
    /**
     * Constant for value 'AdType'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value represents a classified ad in a Real Estate category. This listing type is only used to solicit inquiries from interested parties. To express interest, a buyer fills in a contact form that eBay forwards to the
     * seller as a lead. This format does not enable buyers and sellers to transact online through eBay, and eBay Feedback is not available for ad format listings. <br><br> Although listing durations may vary by eBay marketplace and category, typical
     * listing durations for real estate ads are 30 and 90 days. It is recommended that the seller uses the <b>GetCategoryFeatures</b> call to retrieve the actual listing durations that are supported for real estate ads on a particular marketplace and
     * category.
     * @return string 'AdType'
     */
    const VALUE_AD_TYPE = 'AdType';
    /**
     * Constant for value 'StoresFixedPrice'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable.
     * @return string 'StoresFixedPrice'
     */
    const VALUE_STORES_FIXED_PRICE = 'StoresFixedPrice';
    /**
     * Constant for value 'PersonalOffer'
     * Meta information extracted from the WSDL
     * - documentation: Second chance offer made to a non-winning bidder on an ended listing. A seller can make an offer to a non-winning bidder when either the winning bidder has failed to pay for an item or the seller has a duplicate of the item. A seller
     * can create a Second Chance Offer immediately after a listing ends and up to 60 days after the end of the listing. <br/><br/> eBay does not charge an Insertion Fee, but if the bidder accepts the offer, the regular Final Value Fee is charged. In the
     * case of an Unpaid Item, the seller should ensure that everything has been done to resolve the issue with the winning bidder before sending a Second Chance Offer to another bidder. <br/><br/> See the Unpaid Items Process for details. Make sure you're
     * aware of other rules and restrictions surrounding Second Chance Offers. Use <b>AddSecondChanceItem</b> to submit Second Chance Offers. Listed on eBay, but does not appear when browsing or searching listings.
     * @return string 'PersonalOffer'
     */
    const VALUE_PERSONAL_OFFER = 'PersonalOffer';
    /**
     * Constant for value 'FixedPriceItem'
     * Meta information extracted from the WSDL
     * - documentation: With this listing format, the selling is offering the item at a fixed price, although it is still possible for the seller to negotiate the price with prospective buyers using the Best Offer feature. A fixed-price listing can offer a
     * single item, or if the seller has multiple quantity of the same item, multiple quantity of that same item can be made available for sale through the same listing. Additionally, the seller can set up a multiple-variation, fixed-price listing, where
     * similar items can be sold through the same listing. An example of a multiple-variation, fixed-price listing might be a t-shirt (or another article of clothing) that is available in multiple color and size combinations. <br><br> Traditionally, listing
     * durations for fixed-prices listings have varied by eBay marketplace and category. Typical listing durations for fixed-price listings ranged from three to 30 days, or GTC (Good 'Til Cancelled). As of April 1, 2019, 'GTC' is the only supported listing
     * duration for all eBay marketplaces with the following exceptions: <ul> <li>The following eBay Motors US categories are exempt from this change: <em>Cars & Trucks</em> (6001), <em>Motorcycles</em> (6024), <em>Other Vehicles & Trailers</em> (6038),
     * <em>Boats</em> (26429), <em>Powersports</em> (66466).</li> <li>All child categories under <em>Cars, Motorcycles & Vehicles</em> (9800) categories on the eBay UK and eBay Italy sites are also exempt from this change. </li> </ul> <br> With the 'GTC'
     * listing duration, the listing will remain active as long as the listing shows that inventory is available for purchase (available quantity is '1' or more). For sellers listing motor vehicles on the eBay US Motors, eBay UK, or eBay Italy sites, it is
     * recommended that the seller uses the <b>GetCategoryFeatures</b> call to retrieve the supported listing durations for their particular marketplace and category. <br> <br> <span class="tablenote"><b>Note: </b> For active fixed-price listings with
     * listing durations other than 'GTC', sellers do not have to take any action. For listings that are automatically renewed by eBay, the renewed listings will automatically be set to 'GTC'. For any listings that are relisted by the seller, the only
     * listing duration value that will be accepted is 'GTC'. </span> <br> <span class="tablenote"><b>Note: </b> As of July 1, 2019, the Good 'Til Cancelled renewal schedule has been modified from every 30 days to once per calendar month. For example, if a
     * GTC listing is created July 5, the next monthly renewal date will be August 5. If a GTC listing is created on the 31st of the month, but the following month only has 30 days, the renewal will happen on the 30th in the following month. Finally, if a
     * GTC listing is created on January 29-31, the renewal will happen on February 28th (or 29th during a 'Leap Year'). See the <a href="https://pages.ebay.com/seller-center/seller-updates/2019-spring/marketplace-updates.html#good-til-cancelled"
     * target="_blank">Good 'Til Cancelled listings update</a> in the <b>Spring 2019 Seller Updates</b> for more information about this change. </span>
     * @return string 'FixedPriceItem'
     */
    const VALUE_FIXED_PRICE_ITEM = 'FixedPriceItem';
    /**
     * Constant for value 'Half'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> This listing type is no longer applicable as the Half.com site has been shut down. </span>
     * @return string 'Half'
     */
    const VALUE_HALF = 'Half';
    /**
     * Constant for value 'LeadGeneration'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value represents a (non-Real Estate) classified ad listing. The <code>AdType</code> enumeration value represents Real Estate classified ads. This listing type is only used to solicit inquiries from interested
     * parties. To express interest, a buyer fills in a contact form that eBay forwards to the seller as a lead. This format does not enable buyers and sellers to transact online through eBay, and eBay Feedback is not available for ad format listings.
     * Non-Real Estate classified ads are only available in a limited number of eBay categories, including Business and Industrial categories, Travel, ans Specialty Services. <br><br> Although listing durations may vary by eBay marketplace and category,
     * typical listing durations for (non-Real Estate) classified ads are 30, 60, and 90 days. It is recommended that the seller uses the <b>GetCategoryFeatures</b> call to retrieve the actual listing durations that are supported for real estate ads on a
     * particular marketplace and category.
     * @return string 'LeadGeneration'
     */
    const VALUE_LEAD_GENERATION = 'LeadGeneration';
    /**
     * Constant for value 'Express'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable.
     * @return string 'Express'
     */
    const VALUE_EXPRESS = 'Express';
    /**
     * Constant for value 'Shopping'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable, as Shopping.com is no longer a property of eBay, Inc.
     * @return string 'Shopping'
     */
    const VALUE_SHOPPING = 'Shopping';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_CHINESE
     * @uses self::VALUE_DUTCH
     * @uses self::VALUE_LIVE
     * @uses self::VALUE_AUCTION
     * @uses self::VALUE_AD_TYPE
     * @uses self::VALUE_STORES_FIXED_PRICE
     * @uses self::VALUE_PERSONAL_OFFER
     * @uses self::VALUE_FIXED_PRICE_ITEM
     * @uses self::VALUE_HALF
     * @uses self::VALUE_LEAD_GENERATION
     * @uses self::VALUE_EXPRESS
     * @uses self::VALUE_SHOPPING
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNKNOWN,
            self::VALUE_CHINESE,
            self::VALUE_DUTCH,
            self::VALUE_LIVE,
            self::VALUE_AUCTION,
            self::VALUE_AD_TYPE,
            self::VALUE_STORES_FIXED_PRICE,
            self::VALUE_PERSONAL_OFFER,
            self::VALUE_FIXED_PRICE_ITEM,
            self::VALUE_HALF,
            self::VALUE_LEAD_GENERATION,
            self::VALUE_EXPRESS,
            self::VALUE_SHOPPING,
            self::VALUE_CUSTOM_CODE,
        );
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
