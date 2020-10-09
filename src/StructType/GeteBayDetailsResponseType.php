<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GeteBayDetailsResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Details about a specified site in response to <b>GeteBayDetailsRequest</b>. If no <b>DetailName</b> field is identified in the request, all elements of <b>GeteBayDetailsResponse</b> are returned. Otherwise, eBay returns only the
 * elements corresponding to the specified <b>DetailName</b> fields. <b>UpdateTime</b> gives the time of modification of the most recently modified <b>DetailName</b>.
 * @subpackage Structs
 */
class GeteBayDetailsResponseType extends AbstractResponseType
{
    /**
     * The CountryDetails
     * Meta information extracted from the WSDL
     * - documentation: Lists the country code and associated name of the countries supported by the eBay system, regardless of the site specified in the request. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if
     * <b>CountryDetails</b> is included as a <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\CountryDetailsType[]
     */
    public $CountryDetails;
    /**
     * The CurrencyDetails
     * Meta information extracted from the WSDL
     * - documentation: Lists the currencies supported by the eBay system, regardless of the site specified in the request. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>CurrencyDetails</b> is included as a
     * <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\CurrencyDetailsType[]
     */
    public $CurrencyDetails;
    /**
     * The DispatchTimeMaxDetails
     * Meta information extracted from the WSDL
     * - documentation: A dispatch time specifies the maximum number of business days a seller commits to for shipping an item to domestic buyers after receiving a cleared payment. Returns all dispatch times in the system, regardless of the site specified
     * in the request. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>DispatchTimeMaxDetails</b> is included as a <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request.
     * </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\DispatchTimeMaxDetailsType[]
     */
    public $DispatchTimeMaxDetails;
    /**
     * The PaymentOptionDetails
     * Meta information extracted from the WSDL
     * - documentation: Although the supported payment methods for the specified eBay site are returned, it is recommended that the seller use <b>GetCategoryFeatures</b> instead, and pass in <b>PaymentMethods</b> as a <b>FeatureID</b> value in the request.
     * <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>PaymentOptionDetails</b> is included as a <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\PaymentOptionDetailsType[]
     */
    public $PaymentOptionDetails;
    /**
     * The RegionDetails
     * Meta information extracted from the WSDL
     * - documentation: Lists the cities and other domestic regions for the specified site's country. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>RegionDetails</b> is included as a <b>DetailName</b> filter in the
     * request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\RegionDetailsType[]
     */
    public $RegionDetails;
    /**
     * The ShippingLocationDetails
     * Meta information extracted from the WSDL
     * - documentation: Lists the worldwide regions that can be set as shipping locations from the specified eBay site. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>ShippingLocationDetails</b> is included as a
     * <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ShippingLocationDetailsType[]
     */
    public $ShippingLocationDetails;
    /**
     * The ShippingServiceDetails
     * Meta information extracted from the WSDL
     * - documentation: Lists the shipping services supported by the specified eBay site. Returns only the shipping services that are applicable to the site specified in the request. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only
     * returned if <b>ShippingServiceDetails</b> is included as a <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ShippingServiceDetailsType[]
     */
    public $ShippingServiceDetails;
    /**
     * The SiteDetails
     * Meta information extracted from the WSDL
     * - documentation: Lists all available eBay sites and their associated <b>SiteID</b> numbers. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>SiteDetails</b> is included as a <b>DetailName</b> filter in the
     * request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\SiteDetailsType[]
     */
    public $SiteDetails;
    /**
     * The TaxJurisdiction
     * Meta information extracted from the WSDL
     * - documentation: Details the different tax jurisdictions or tax regions applicable to the site specified in the request. Note that tax jurisdictions are only applicable to the following eBay sites: eBay US (Site ID 0), eBay Canada (Site ID 2), eBay
     * Canada (French) (Site ID 210), and eBay India (Site ID 203). An empty response will be returned for any other Site ID that is passed in the HTTP header. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if
     * <b>TaxJurisdiction</b> is included as a <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\TaxJurisdictionType[]
     */
    public $TaxJurisdiction;
    /**
     * The URLDetails
     * Meta information extracted from the WSDL
     * - documentation: Lists eBay URLs that are applicable to the site specified in the request. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>URLDetails</b> is included as a <b>DetailName</b> filter in the request,
     * or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\URLDetailsType[]
     */
    public $URLDetails;
    /**
     * The TimeZoneDetails
     * Meta information extracted from the WSDL
     * - documentation: Lists the details of the time zones supported by the eBay system. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>TimeZoneDetails</b> is included as a <b>DetailName</b> filter in the request, or
     * if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\TimeZoneDetailsType[]
     */
    public $TimeZoneDetails;
    /**
     * The ItemSpecificDetails
     * Meta information extracted from the WSDL
     * - documentation: Lists the site's maximum thresholds for specifying Item Specifics. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>ItemSpecificDetails</b> is included as a <b>DetailName</b> filter in the
     * request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ItemSpecificDetailsType[]
     */
    public $ItemSpecificDetails;
    /**
     * The UnitOfMeasurementDetails
     * Meta information extracted from the WSDL
     * - documentation: Units of measurement are no longer returned in GeteBayDetails, so this container is no longer applicable.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\UnitOfMeasurementDetailsType[]
     */
    public $UnitOfMeasurementDetails;
    /**
     * The RegionOfOriginDetails
     * Meta information extracted from the WSDL
     * - documentation: Lists the worldwide regions and individual countries that can be set as shipping locations from the specified eBay site. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>RegionOfOriginDetails</b>
     * is included as a <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\RegionOfOriginDetailsType[]
     */
    public $RegionOfOriginDetails;
    /**
     * The ShippingPackageDetails
     * Meta information extracted from the WSDL
     * - documentation: Lists the various shipping packages supported by the specified site. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>ShippingPackageDetails</b> is included as a <b>DetailName</b> filter in the
     * request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ShippingPackageDetailsType[]
     */
    public $ShippingPackageDetails;
    /**
     * The ShippingCarrierDetails
     * Meta information extracted from the WSDL
     * - documentation: Lists the shipping carriers supported by the specified site. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>ShippingCarrierDetails</b> is included as a <b>DetailName</b> filter in the request,
     * or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ShippingCarrierDetailsType[]
     */
    public $ShippingCarrierDetails;
    /**
     * The ReturnPolicyDetails
     * Meta information extracted from the WSDL
     * - documentation: Lists the supported values that may be used for return policies on the specified eBay site, such as the return period, supported restocking fees, and refund options. <br/><br/> <span class="tablenote"><b>Note: </b> This container is
     * only returned if <b>ReturnPolicyDetails</b> is included as a <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request. </span> <span class="tablenote"><b>Note: </b> This container has been staged for
     * deprecation. Although domestic return policy metadata is still getting returned at the moment, it is recommended that users start making plans to use the <b>GetCategoryFeatures</b> call instead to retrieve category-level, domestic return policy
     * metadata. </span>
     * - minOccurs: 0
     * @var \StructType\ReturnPolicyDetailsType
     */
    public $ReturnPolicyDetails;
    /**
     * The InternationalReturnPolicyDetails
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> This container has been deprecated. The <b>GetCategoryFeatures</b> call must be used instead to retrieve category-level, international return policy metadata. </span>
     * - minOccurs: 0
     * @var \StructType\ReturnPolicyDetailsType
     */
    public $InternationalReturnPolicyDetails;
    /**
     * The ListingStartPriceDetails
     * Meta information extracted from the WSDL
     * - documentation: Lists the minimum starting prices for the supported types of eBay listings. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>ListingStartPriceDetails</b> is included as a <b>DetailName</b> filter
     * in the request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ListingStartPriceDetailsType[]
     */
    public $ListingStartPriceDetails;
    /**
     * The BuyerRequirementDetails
     * Meta information extracted from the WSDL
     * - documentation: Lists the threshold values that can be passed in through the <b>BuyerRequirementDetails</b> container in the Add/Revise/Relist API calls. Buyer Requirements allow the seller to block buyers who have unpaid item defects, policy
     * violations, low Feedback scores, and/or other undesirable qualities/statistics. Buyer Requirements are set at the seller's account level, but by using a <b>BuyerRequirementDetails</b> container in an Add/Revise/Relist API call, the values in that
     * container will override values set at the account level. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>BuyerRequirementDetails</b> is included as a <b>DetailName</b> filter in the request, or if no
     * <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\SiteBuyerRequirementDetailsType[]
     */
    public $BuyerRequirementDetails;
    /**
     * The ListingFeatureDetails
     * Meta information extracted from the WSDL
     * - documentation: Details the listing features available for the eBay site specified in the request. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>ListingFeatureDetails</b> is included as a <b>DetailName</b>
     * filter in the request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ListingFeatureDetailsType[]
     */
    public $ListingFeatureDetails;
    /**
     * The VariationDetails
     * Meta information extracted from the WSDL
     * - documentation: Site-level validation rules for multi-variation listings (for example, the maximum number of variations per listing). Use <b>GetCategoryFeatures</b> to determine which categories on a site support variations. Use
     * <b>GetCategorySpecifics</b> for rules related to recommended or required variation specifics. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>VariationDetails</b> is included as a <b>DetailName</b> filter in the
     * request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - minOccurs: 0
     * @var \StructType\VariationDetailsType
     */
    public $VariationDetails;
    /**
     * The ExcludeShippingLocationDetails
     * Meta information extracted from the WSDL
     * - documentation: Lists the locations supported by the <b>ExcludeShipToLocation</b> feature. These are locations that a seller can list as areas where they will not ship an item. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only
     * returned if <b>ExcludeShippingLocationDetails</b> is included as a <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ExcludeShippingLocationDetailsType[]
     */
    public $ExcludeShippingLocationDetails;
    /**
     * The UpdateTime
     * Meta information extracted from the WSDL
     * - documentation: The time of the most recent modification to any feature detail. If specific feature details are passed in the request, gives the most recent modification time of those feature details.
     * - minOccurs: 0
     * @var string
     */
    public $UpdateTime;
    /**
     * The RecoupmentPolicyDetails
     * Meta information extracted from the WSDL
     * - documentation: Details the recoupment policies for the site specified in the request. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>RecoupmentPolicyDetails</b> is included as a <b>DetailName</b> filter in
     * the request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\RecoupmentPolicyDetailsType[]
     */
    public $RecoupmentPolicyDetails;
    /**
     * The ShippingCategoryDetails
     * Meta information extracted from the WSDL
     * - documentation: A shipping service category supported for the site. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>ShippingCategoryDetails</b> is included as a <b>DetailName</b> filter in the request, or if no
     * <b>DetailName</b> filters are used in the request. </span> Each shipping service supported for a site is automatically categorized by eBay into one of the shipping categories available for that site depending on how the shipping service shipping time
     * aligns with the shipping times specified by eBay for each category. <br><br> Notice that you cannot specify a <b>ShippingCategory</b> as an input to any API call - eBay does this categorizing automatically. <b>ShippingCategory</b> is read-only data
     * that is returned in the <b>ShippingServiceDetails</b> container. One possible use of this data is to segregate shipping services by <b>ShippingCategory</b> in a pick list. (For an example of this, see the Services pulldown menu in the Give buyers
     * shipping details form in the eBay Sell Your Item flow.) <br><br> One way to populate the picklist would be to call <b>GeteBayDetails</b> with <b>DetailName</b> set to <b>ShippingServiceDetails</b>. Then sort these results by <b>ShippingCategory</b>
     * and populate the picklist.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ShippingCategoryDetailsType[]
     */
    public $ShippingCategoryDetails;
    /**
     * The ProductDetails
     * Meta information extracted from the WSDL
     * - documentation: The <b>ProductDetails.ProductIdentifierUnavailableText</b> field contains the actual text that should be passed into the relevant product identification fields (EAN, ISBN, UPC, MPN/Brand) if eBay is prompting/expecting one of these
     * fields in the call request, but the identifiers do not exist/apply for the product. The text will vary based on the listing site. This text should only be used if no product ID exists for the product. If a product identifier value does actually exist
     * for a product, but the seller passes in 'Does not apply' text, that listing may get penalized in search. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>ProductDetails</b> is included as a <b>DetailName</b>
     * filter in the request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - minOccurs: 0
     * @var \StructType\ProductDetailsType
     */
    public $ProductDetails;
    /**
     * Constructor method for GeteBayDetailsResponseType
     * @uses GeteBayDetailsResponseType::setCountryDetails()
     * @uses GeteBayDetailsResponseType::setCurrencyDetails()
     * @uses GeteBayDetailsResponseType::setDispatchTimeMaxDetails()
     * @uses GeteBayDetailsResponseType::setPaymentOptionDetails()
     * @uses GeteBayDetailsResponseType::setRegionDetails()
     * @uses GeteBayDetailsResponseType::setShippingLocationDetails()
     * @uses GeteBayDetailsResponseType::setShippingServiceDetails()
     * @uses GeteBayDetailsResponseType::setSiteDetails()
     * @uses GeteBayDetailsResponseType::setTaxJurisdiction()
     * @uses GeteBayDetailsResponseType::setURLDetails()
     * @uses GeteBayDetailsResponseType::setTimeZoneDetails()
     * @uses GeteBayDetailsResponseType::setItemSpecificDetails()
     * @uses GeteBayDetailsResponseType::setUnitOfMeasurementDetails()
     * @uses GeteBayDetailsResponseType::setRegionOfOriginDetails()
     * @uses GeteBayDetailsResponseType::setShippingPackageDetails()
     * @uses GeteBayDetailsResponseType::setShippingCarrierDetails()
     * @uses GeteBayDetailsResponseType::setReturnPolicyDetails()
     * @uses GeteBayDetailsResponseType::setInternationalReturnPolicyDetails()
     * @uses GeteBayDetailsResponseType::setListingStartPriceDetails()
     * @uses GeteBayDetailsResponseType::setBuyerRequirementDetails()
     * @uses GeteBayDetailsResponseType::setListingFeatureDetails()
     * @uses GeteBayDetailsResponseType::setVariationDetails()
     * @uses GeteBayDetailsResponseType::setExcludeShippingLocationDetails()
     * @uses GeteBayDetailsResponseType::setUpdateTime()
     * @uses GeteBayDetailsResponseType::setRecoupmentPolicyDetails()
     * @uses GeteBayDetailsResponseType::setShippingCategoryDetails()
     * @uses GeteBayDetailsResponseType::setProductDetails()
     * @param \StructType\CountryDetailsType[] $countryDetails
     * @param \StructType\CurrencyDetailsType[] $currencyDetails
     * @param \StructType\DispatchTimeMaxDetailsType[] $dispatchTimeMaxDetails
     * @param \StructType\PaymentOptionDetailsType[] $paymentOptionDetails
     * @param \StructType\RegionDetailsType[] $regionDetails
     * @param \StructType\ShippingLocationDetailsType[] $shippingLocationDetails
     * @param \StructType\ShippingServiceDetailsType[] $shippingServiceDetails
     * @param \StructType\SiteDetailsType[] $siteDetails
     * @param \StructType\TaxJurisdictionType[] $taxJurisdiction
     * @param \StructType\URLDetailsType[] $uRLDetails
     * @param \StructType\TimeZoneDetailsType[] $timeZoneDetails
     * @param \StructType\ItemSpecificDetailsType[] $itemSpecificDetails
     * @param \StructType\UnitOfMeasurementDetailsType[] $unitOfMeasurementDetails
     * @param \StructType\RegionOfOriginDetailsType[] $regionOfOriginDetails
     * @param \StructType\ShippingPackageDetailsType[] $shippingPackageDetails
     * @param \StructType\ShippingCarrierDetailsType[] $shippingCarrierDetails
     * @param \StructType\ReturnPolicyDetailsType $returnPolicyDetails
     * @param \StructType\ReturnPolicyDetailsType $internationalReturnPolicyDetails
     * @param \StructType\ListingStartPriceDetailsType[] $listingStartPriceDetails
     * @param \StructType\SiteBuyerRequirementDetailsType[] $buyerRequirementDetails
     * @param \StructType\ListingFeatureDetailsType[] $listingFeatureDetails
     * @param \StructType\VariationDetailsType $variationDetails
     * @param \StructType\ExcludeShippingLocationDetailsType[] $excludeShippingLocationDetails
     * @param string $updateTime
     * @param \StructType\RecoupmentPolicyDetailsType[] $recoupmentPolicyDetails
     * @param \StructType\ShippingCategoryDetailsType[] $shippingCategoryDetails
     * @param \StructType\ProductDetailsType $productDetails
     */
    public function __construct(array $countryDetails = array(), array $currencyDetails = array(), array $dispatchTimeMaxDetails = array(), array $paymentOptionDetails = array(), array $regionDetails = array(), array $shippingLocationDetails = array(), array $shippingServiceDetails = array(), array $siteDetails = array(), array $taxJurisdiction = array(), array $uRLDetails = array(), array $timeZoneDetails = array(), array $itemSpecificDetails = array(), array $unitOfMeasurementDetails = array(), array $regionOfOriginDetails = array(), array $shippingPackageDetails = array(), array $shippingCarrierDetails = array(), \StructType\ReturnPolicyDetailsType $returnPolicyDetails = null, \StructType\ReturnPolicyDetailsType $internationalReturnPolicyDetails = null, array $listingStartPriceDetails = array(), array $buyerRequirementDetails = array(), array $listingFeatureDetails = array(), \StructType\VariationDetailsType $variationDetails = null, array $excludeShippingLocationDetails = array(), $updateTime = null, array $recoupmentPolicyDetails = array(), array $shippingCategoryDetails = array(), \StructType\ProductDetailsType $productDetails = null)
    {
        $this
            ->setCountryDetails($countryDetails)
            ->setCurrencyDetails($currencyDetails)
            ->setDispatchTimeMaxDetails($dispatchTimeMaxDetails)
            ->setPaymentOptionDetails($paymentOptionDetails)
            ->setRegionDetails($regionDetails)
            ->setShippingLocationDetails($shippingLocationDetails)
            ->setShippingServiceDetails($shippingServiceDetails)
            ->setSiteDetails($siteDetails)
            ->setTaxJurisdiction($taxJurisdiction)
            ->setURLDetails($uRLDetails)
            ->setTimeZoneDetails($timeZoneDetails)
            ->setItemSpecificDetails($itemSpecificDetails)
            ->setUnitOfMeasurementDetails($unitOfMeasurementDetails)
            ->setRegionOfOriginDetails($regionOfOriginDetails)
            ->setShippingPackageDetails($shippingPackageDetails)
            ->setShippingCarrierDetails($shippingCarrierDetails)
            ->setReturnPolicyDetails($returnPolicyDetails)
            ->setInternationalReturnPolicyDetails($internationalReturnPolicyDetails)
            ->setListingStartPriceDetails($listingStartPriceDetails)
            ->setBuyerRequirementDetails($buyerRequirementDetails)
            ->setListingFeatureDetails($listingFeatureDetails)
            ->setVariationDetails($variationDetails)
            ->setExcludeShippingLocationDetails($excludeShippingLocationDetails)
            ->setUpdateTime($updateTime)
            ->setRecoupmentPolicyDetails($recoupmentPolicyDetails)
            ->setShippingCategoryDetails($shippingCategoryDetails)
            ->setProductDetails($productDetails);
    }
    /**
     * Get CountryDetails value
     * @return \StructType\CountryDetailsType[]|null
     */
    public function getCountryDetails()
    {
        return $this->CountryDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setCountryDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCountryDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCountryDetailsForArrayConstraintsFromSetCountryDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeCountryDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeCountryDetailsItem instanceof \StructType\CountryDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeCountryDetailsItem) ? get_class($geteBayDetailsResponseTypeCountryDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeCountryDetailsItem), var_export($geteBayDetailsResponseTypeCountryDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CountryDetails property can only contain items of type \StructType\CountryDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set CountryDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\CountryDetailsType[] $countryDetails
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function setCountryDetails(array $countryDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($countryDetailsArrayErrorMessage = self::validateCountryDetailsForArrayConstraintsFromSetCountryDetails($countryDetails))) {
            throw new \InvalidArgumentException($countryDetailsArrayErrorMessage, __LINE__);
        }
        $this->CountryDetails = $countryDetails;
        return $this;
    }
    /**
     * Add item to CountryDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\CountryDetailsType $item
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function addToCountryDetails(\StructType\CountryDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CountryDetailsType) {
            throw new \InvalidArgumentException(sprintf('The CountryDetails property can only contain items of type \StructType\CountryDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CountryDetails[] = $item;
        return $this;
    }
    /**
     * Get CurrencyDetails value
     * @return \StructType\CurrencyDetailsType[]|null
     */
    public function getCurrencyDetails()
    {
        return $this->CurrencyDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setCurrencyDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCurrencyDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCurrencyDetailsForArrayConstraintsFromSetCurrencyDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeCurrencyDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeCurrencyDetailsItem instanceof \StructType\CurrencyDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeCurrencyDetailsItem) ? get_class($geteBayDetailsResponseTypeCurrencyDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeCurrencyDetailsItem), var_export($geteBayDetailsResponseTypeCurrencyDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CurrencyDetails property can only contain items of type \StructType\CurrencyDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set CurrencyDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\CurrencyDetailsType[] $currencyDetails
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function setCurrencyDetails(array $currencyDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($currencyDetailsArrayErrorMessage = self::validateCurrencyDetailsForArrayConstraintsFromSetCurrencyDetails($currencyDetails))) {
            throw new \InvalidArgumentException($currencyDetailsArrayErrorMessage, __LINE__);
        }
        $this->CurrencyDetails = $currencyDetails;
        return $this;
    }
    /**
     * Add item to CurrencyDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\CurrencyDetailsType $item
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function addToCurrencyDetails(\StructType\CurrencyDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CurrencyDetailsType) {
            throw new \InvalidArgumentException(sprintf('The CurrencyDetails property can only contain items of type \StructType\CurrencyDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CurrencyDetails[] = $item;
        return $this;
    }
    /**
     * Get DispatchTimeMaxDetails value
     * @return \StructType\DispatchTimeMaxDetailsType[]|null
     */
    public function getDispatchTimeMaxDetails()
    {
        return $this->DispatchTimeMaxDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setDispatchTimeMaxDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDispatchTimeMaxDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDispatchTimeMaxDetailsForArrayConstraintsFromSetDispatchTimeMaxDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeDispatchTimeMaxDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeDispatchTimeMaxDetailsItem instanceof \StructType\DispatchTimeMaxDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeDispatchTimeMaxDetailsItem) ? get_class($geteBayDetailsResponseTypeDispatchTimeMaxDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeDispatchTimeMaxDetailsItem), var_export($geteBayDetailsResponseTypeDispatchTimeMaxDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DispatchTimeMaxDetails property can only contain items of type \StructType\DispatchTimeMaxDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DispatchTimeMaxDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\DispatchTimeMaxDetailsType[] $dispatchTimeMaxDetails
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function setDispatchTimeMaxDetails(array $dispatchTimeMaxDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($dispatchTimeMaxDetailsArrayErrorMessage = self::validateDispatchTimeMaxDetailsForArrayConstraintsFromSetDispatchTimeMaxDetails($dispatchTimeMaxDetails))) {
            throw new \InvalidArgumentException($dispatchTimeMaxDetailsArrayErrorMessage, __LINE__);
        }
        $this->DispatchTimeMaxDetails = $dispatchTimeMaxDetails;
        return $this;
    }
    /**
     * Add item to DispatchTimeMaxDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\DispatchTimeMaxDetailsType $item
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function addToDispatchTimeMaxDetails(\StructType\DispatchTimeMaxDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DispatchTimeMaxDetailsType) {
            throw new \InvalidArgumentException(sprintf('The DispatchTimeMaxDetails property can only contain items of type \StructType\DispatchTimeMaxDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DispatchTimeMaxDetails[] = $item;
        return $this;
    }
    /**
     * Get PaymentOptionDetails value
     * @return \StructType\PaymentOptionDetailsType[]|null
     */
    public function getPaymentOptionDetails()
    {
        return $this->PaymentOptionDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setPaymentOptionDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaymentOptionDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentOptionDetailsForArrayConstraintsFromSetPaymentOptionDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypePaymentOptionDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypePaymentOptionDetailsItem instanceof \StructType\PaymentOptionDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypePaymentOptionDetailsItem) ? get_class($geteBayDetailsResponseTypePaymentOptionDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypePaymentOptionDetailsItem), var_export($geteBayDetailsResponseTypePaymentOptionDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PaymentOptionDetails property can only contain items of type \StructType\PaymentOptionDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set PaymentOptionDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\PaymentOptionDetailsType[] $paymentOptionDetails
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function setPaymentOptionDetails(array $paymentOptionDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($paymentOptionDetailsArrayErrorMessage = self::validatePaymentOptionDetailsForArrayConstraintsFromSetPaymentOptionDetails($paymentOptionDetails))) {
            throw new \InvalidArgumentException($paymentOptionDetailsArrayErrorMessage, __LINE__);
        }
        $this->PaymentOptionDetails = $paymentOptionDetails;
        return $this;
    }
    /**
     * Add item to PaymentOptionDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\PaymentOptionDetailsType $item
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function addToPaymentOptionDetails(\StructType\PaymentOptionDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PaymentOptionDetailsType) {
            throw new \InvalidArgumentException(sprintf('The PaymentOptionDetails property can only contain items of type \StructType\PaymentOptionDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PaymentOptionDetails[] = $item;
        return $this;
    }
    /**
     * Get RegionDetails value
     * @return \StructType\RegionDetailsType[]|null
     */
    public function getRegionDetails()
    {
        return $this->RegionDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setRegionDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegionDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegionDetailsForArrayConstraintsFromSetRegionDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeRegionDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeRegionDetailsItem instanceof \StructType\RegionDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeRegionDetailsItem) ? get_class($geteBayDetailsResponseTypeRegionDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeRegionDetailsItem), var_export($geteBayDetailsResponseTypeRegionDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegionDetails property can only contain items of type \StructType\RegionDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RegionDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\RegionDetailsType[] $regionDetails
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function setRegionDetails(array $regionDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($regionDetailsArrayErrorMessage = self::validateRegionDetailsForArrayConstraintsFromSetRegionDetails($regionDetails))) {
            throw new \InvalidArgumentException($regionDetailsArrayErrorMessage, __LINE__);
        }
        $this->RegionDetails = $regionDetails;
        return $this;
    }
    /**
     * Add item to RegionDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\RegionDetailsType $item
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function addToRegionDetails(\StructType\RegionDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\RegionDetailsType) {
            throw new \InvalidArgumentException(sprintf('The RegionDetails property can only contain items of type \StructType\RegionDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->RegionDetails[] = $item;
        return $this;
    }
    /**
     * Get ShippingLocationDetails value
     * @return \StructType\ShippingLocationDetailsType[]|null
     */
    public function getShippingLocationDetails()
    {
        return $this->ShippingLocationDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setShippingLocationDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShippingLocationDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShippingLocationDetailsForArrayConstraintsFromSetShippingLocationDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeShippingLocationDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeShippingLocationDetailsItem instanceof \StructType\ShippingLocationDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeShippingLocationDetailsItem) ? get_class($geteBayDetailsResponseTypeShippingLocationDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeShippingLocationDetailsItem), var_export($geteBayDetailsResponseTypeShippingLocationDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ShippingLocationDetails property can only contain items of type \StructType\ShippingLocationDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ShippingLocationDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\ShippingLocationDetailsType[] $shippingLocationDetails
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function setShippingLocationDetails(array $shippingLocationDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($shippingLocationDetailsArrayErrorMessage = self::validateShippingLocationDetailsForArrayConstraintsFromSetShippingLocationDetails($shippingLocationDetails))) {
            throw new \InvalidArgumentException($shippingLocationDetailsArrayErrorMessage, __LINE__);
        }
        $this->ShippingLocationDetails = $shippingLocationDetails;
        return $this;
    }
    /**
     * Add item to ShippingLocationDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\ShippingLocationDetailsType $item
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function addToShippingLocationDetails(\StructType\ShippingLocationDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ShippingLocationDetailsType) {
            throw new \InvalidArgumentException(sprintf('The ShippingLocationDetails property can only contain items of type \StructType\ShippingLocationDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ShippingLocationDetails[] = $item;
        return $this;
    }
    /**
     * Get ShippingServiceDetails value
     * @return \StructType\ShippingServiceDetailsType[]|null
     */
    public function getShippingServiceDetails()
    {
        return $this->ShippingServiceDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setShippingServiceDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShippingServiceDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShippingServiceDetailsForArrayConstraintsFromSetShippingServiceDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeShippingServiceDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeShippingServiceDetailsItem instanceof \StructType\ShippingServiceDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeShippingServiceDetailsItem) ? get_class($geteBayDetailsResponseTypeShippingServiceDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeShippingServiceDetailsItem), var_export($geteBayDetailsResponseTypeShippingServiceDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ShippingServiceDetails property can only contain items of type \StructType\ShippingServiceDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ShippingServiceDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\ShippingServiceDetailsType[] $shippingServiceDetails
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function setShippingServiceDetails(array $shippingServiceDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($shippingServiceDetailsArrayErrorMessage = self::validateShippingServiceDetailsForArrayConstraintsFromSetShippingServiceDetails($shippingServiceDetails))) {
            throw new \InvalidArgumentException($shippingServiceDetailsArrayErrorMessage, __LINE__);
        }
        $this->ShippingServiceDetails = $shippingServiceDetails;
        return $this;
    }
    /**
     * Add item to ShippingServiceDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\ShippingServiceDetailsType $item
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function addToShippingServiceDetails(\StructType\ShippingServiceDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ShippingServiceDetailsType) {
            throw new \InvalidArgumentException(sprintf('The ShippingServiceDetails property can only contain items of type \StructType\ShippingServiceDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ShippingServiceDetails[] = $item;
        return $this;
    }
    /**
     * Get SiteDetails value
     * @return \StructType\SiteDetailsType[]|null
     */
    public function getSiteDetails()
    {
        return $this->SiteDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setSiteDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSiteDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSiteDetailsForArrayConstraintsFromSetSiteDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeSiteDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeSiteDetailsItem instanceof \StructType\SiteDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeSiteDetailsItem) ? get_class($geteBayDetailsResponseTypeSiteDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeSiteDetailsItem), var_export($geteBayDetailsResponseTypeSiteDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SiteDetails property can only contain items of type \StructType\SiteDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SiteDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\SiteDetailsType[] $siteDetails
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function setSiteDetails(array $siteDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($siteDetailsArrayErrorMessage = self::validateSiteDetailsForArrayConstraintsFromSetSiteDetails($siteDetails))) {
            throw new \InvalidArgumentException($siteDetailsArrayErrorMessage, __LINE__);
        }
        $this->SiteDetails = $siteDetails;
        return $this;
    }
    /**
     * Add item to SiteDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\SiteDetailsType $item
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function addToSiteDetails(\StructType\SiteDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\SiteDetailsType) {
            throw new \InvalidArgumentException(sprintf('The SiteDetails property can only contain items of type \StructType\SiteDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SiteDetails[] = $item;
        return $this;
    }
    /**
     * Get TaxJurisdiction value
     * @return \StructType\TaxJurisdictionType[]|null
     */
    public function getTaxJurisdiction()
    {
        return $this->TaxJurisdiction;
    }
    /**
     * This method is responsible for validating the values passed to the setTaxJurisdiction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTaxJurisdiction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaxJurisdictionForArrayConstraintsFromSetTaxJurisdiction(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeTaxJurisdictionItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeTaxJurisdictionItem instanceof \StructType\TaxJurisdictionType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeTaxJurisdictionItem) ? get_class($geteBayDetailsResponseTypeTaxJurisdictionItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeTaxJurisdictionItem), var_export($geteBayDetailsResponseTypeTaxJurisdictionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TaxJurisdiction property can only contain items of type \StructType\TaxJurisdictionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set TaxJurisdiction value
     * @throws \InvalidArgumentException
     * @param \StructType\TaxJurisdictionType[] $taxJurisdiction
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function setTaxJurisdiction(array $taxJurisdiction = array())
    {
        // validation for constraint: array
        if ('' !== ($taxJurisdictionArrayErrorMessage = self::validateTaxJurisdictionForArrayConstraintsFromSetTaxJurisdiction($taxJurisdiction))) {
            throw new \InvalidArgumentException($taxJurisdictionArrayErrorMessage, __LINE__);
        }
        $this->TaxJurisdiction = $taxJurisdiction;
        return $this;
    }
    /**
     * Add item to TaxJurisdiction value
     * @throws \InvalidArgumentException
     * @param \StructType\TaxJurisdictionType $item
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function addToTaxJurisdiction(\StructType\TaxJurisdictionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\TaxJurisdictionType) {
            throw new \InvalidArgumentException(sprintf('The TaxJurisdiction property can only contain items of type \StructType\TaxJurisdictionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TaxJurisdiction[] = $item;
        return $this;
    }
    /**
     * Get URLDetails value
     * @return \StructType\URLDetailsType[]|null
     */
    public function getURLDetails()
    {
        return $this->URLDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setURLDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setURLDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateURLDetailsForArrayConstraintsFromSetURLDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeURLDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeURLDetailsItem instanceof \StructType\URLDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeURLDetailsItem) ? get_class($geteBayDetailsResponseTypeURLDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeURLDetailsItem), var_export($geteBayDetailsResponseTypeURLDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The URLDetails property can only contain items of type \StructType\URLDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set URLDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\URLDetailsType[] $uRLDetails
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function setURLDetails(array $uRLDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($uRLDetailsArrayErrorMessage = self::validateURLDetailsForArrayConstraintsFromSetURLDetails($uRLDetails))) {
            throw new \InvalidArgumentException($uRLDetailsArrayErrorMessage, __LINE__);
        }
        $this->URLDetails = $uRLDetails;
        return $this;
    }
    /**
     * Add item to URLDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\URLDetailsType $item
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function addToURLDetails(\StructType\URLDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\URLDetailsType) {
            throw new \InvalidArgumentException(sprintf('The URLDetails property can only contain items of type \StructType\URLDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->URLDetails[] = $item;
        return $this;
    }
    /**
     * Get TimeZoneDetails value
     * @return \StructType\TimeZoneDetailsType[]|null
     */
    public function getTimeZoneDetails()
    {
        return $this->TimeZoneDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setTimeZoneDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTimeZoneDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTimeZoneDetailsForArrayConstraintsFromSetTimeZoneDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeTimeZoneDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeTimeZoneDetailsItem instanceof \StructType\TimeZoneDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeTimeZoneDetailsItem) ? get_class($geteBayDetailsResponseTypeTimeZoneDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeTimeZoneDetailsItem), var_export($geteBayDetailsResponseTypeTimeZoneDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TimeZoneDetails property can only contain items of type \StructType\TimeZoneDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set TimeZoneDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\TimeZoneDetailsType[] $timeZoneDetails
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function setTimeZoneDetails(array $timeZoneDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($timeZoneDetailsArrayErrorMessage = self::validateTimeZoneDetailsForArrayConstraintsFromSetTimeZoneDetails($timeZoneDetails))) {
            throw new \InvalidArgumentException($timeZoneDetailsArrayErrorMessage, __LINE__);
        }
        $this->TimeZoneDetails = $timeZoneDetails;
        return $this;
    }
    /**
     * Add item to TimeZoneDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\TimeZoneDetailsType $item
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function addToTimeZoneDetails(\StructType\TimeZoneDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\TimeZoneDetailsType) {
            throw new \InvalidArgumentException(sprintf('The TimeZoneDetails property can only contain items of type \StructType\TimeZoneDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TimeZoneDetails[] = $item;
        return $this;
    }
    /**
     * Get ItemSpecificDetails value
     * @return \StructType\ItemSpecificDetailsType[]|null
     */
    public function getItemSpecificDetails()
    {
        return $this->ItemSpecificDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setItemSpecificDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemSpecificDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemSpecificDetailsForArrayConstraintsFromSetItemSpecificDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeItemSpecificDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeItemSpecificDetailsItem instanceof \StructType\ItemSpecificDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeItemSpecificDetailsItem) ? get_class($geteBayDetailsResponseTypeItemSpecificDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeItemSpecificDetailsItem), var_export($geteBayDetailsResponseTypeItemSpecificDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ItemSpecificDetails property can only contain items of type \StructType\ItemSpecificDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ItemSpecificDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\ItemSpecificDetailsType[] $itemSpecificDetails
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function setItemSpecificDetails(array $itemSpecificDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($itemSpecificDetailsArrayErrorMessage = self::validateItemSpecificDetailsForArrayConstraintsFromSetItemSpecificDetails($itemSpecificDetails))) {
            throw new \InvalidArgumentException($itemSpecificDetailsArrayErrorMessage, __LINE__);
        }
        $this->ItemSpecificDetails = $itemSpecificDetails;
        return $this;
    }
    /**
     * Add item to ItemSpecificDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\ItemSpecificDetailsType $item
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function addToItemSpecificDetails(\StructType\ItemSpecificDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ItemSpecificDetailsType) {
            throw new \InvalidArgumentException(sprintf('The ItemSpecificDetails property can only contain items of type \StructType\ItemSpecificDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ItemSpecificDetails[] = $item;
        return $this;
    }
    /**
     * Get UnitOfMeasurementDetails value
     * @return \StructType\UnitOfMeasurementDetailsType[]|null
     */
    public function getUnitOfMeasurementDetails()
    {
        return $this->UnitOfMeasurementDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setUnitOfMeasurementDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnitOfMeasurementDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnitOfMeasurementDetailsForArrayConstraintsFromSetUnitOfMeasurementDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeUnitOfMeasurementDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeUnitOfMeasurementDetailsItem instanceof \StructType\UnitOfMeasurementDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeUnitOfMeasurementDetailsItem) ? get_class($geteBayDetailsResponseTypeUnitOfMeasurementDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeUnitOfMeasurementDetailsItem), var_export($geteBayDetailsResponseTypeUnitOfMeasurementDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UnitOfMeasurementDetails property can only contain items of type \StructType\UnitOfMeasurementDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set UnitOfMeasurementDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\UnitOfMeasurementDetailsType[] $unitOfMeasurementDetails
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function setUnitOfMeasurementDetails(array $unitOfMeasurementDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($unitOfMeasurementDetailsArrayErrorMessage = self::validateUnitOfMeasurementDetailsForArrayConstraintsFromSetUnitOfMeasurementDetails($unitOfMeasurementDetails))) {
            throw new \InvalidArgumentException($unitOfMeasurementDetailsArrayErrorMessage, __LINE__);
        }
        $this->UnitOfMeasurementDetails = $unitOfMeasurementDetails;
        return $this;
    }
    /**
     * Add item to UnitOfMeasurementDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\UnitOfMeasurementDetailsType $item
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function addToUnitOfMeasurementDetails(\StructType\UnitOfMeasurementDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\UnitOfMeasurementDetailsType) {
            throw new \InvalidArgumentException(sprintf('The UnitOfMeasurementDetails property can only contain items of type \StructType\UnitOfMeasurementDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->UnitOfMeasurementDetails[] = $item;
        return $this;
    }
    /**
     * Get RegionOfOriginDetails value
     * @return \StructType\RegionOfOriginDetailsType[]|null
     */
    public function getRegionOfOriginDetails()
    {
        return $this->RegionOfOriginDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setRegionOfOriginDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegionOfOriginDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegionOfOriginDetailsForArrayConstraintsFromSetRegionOfOriginDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeRegionOfOriginDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeRegionOfOriginDetailsItem instanceof \StructType\RegionOfOriginDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeRegionOfOriginDetailsItem) ? get_class($geteBayDetailsResponseTypeRegionOfOriginDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeRegionOfOriginDetailsItem), var_export($geteBayDetailsResponseTypeRegionOfOriginDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegionOfOriginDetails property can only contain items of type \StructType\RegionOfOriginDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RegionOfOriginDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\RegionOfOriginDetailsType[] $regionOfOriginDetails
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function setRegionOfOriginDetails(array $regionOfOriginDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($regionOfOriginDetailsArrayErrorMessage = self::validateRegionOfOriginDetailsForArrayConstraintsFromSetRegionOfOriginDetails($regionOfOriginDetails))) {
            throw new \InvalidArgumentException($regionOfOriginDetailsArrayErrorMessage, __LINE__);
        }
        $this->RegionOfOriginDetails = $regionOfOriginDetails;
        return $this;
    }
    /**
     * Add item to RegionOfOriginDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\RegionOfOriginDetailsType $item
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function addToRegionOfOriginDetails(\StructType\RegionOfOriginDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\RegionOfOriginDetailsType) {
            throw new \InvalidArgumentException(sprintf('The RegionOfOriginDetails property can only contain items of type \StructType\RegionOfOriginDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->RegionOfOriginDetails[] = $item;
        return $this;
    }
    /**
     * Get ShippingPackageDetails value
     * @return \StructType\ShippingPackageDetailsType[]|null
     */
    public function getShippingPackageDetails()
    {
        return $this->ShippingPackageDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setShippingPackageDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShippingPackageDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShippingPackageDetailsForArrayConstraintsFromSetShippingPackageDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeShippingPackageDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeShippingPackageDetailsItem instanceof \StructType\ShippingPackageDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeShippingPackageDetailsItem) ? get_class($geteBayDetailsResponseTypeShippingPackageDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeShippingPackageDetailsItem), var_export($geteBayDetailsResponseTypeShippingPackageDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ShippingPackageDetails property can only contain items of type \StructType\ShippingPackageDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ShippingPackageDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\ShippingPackageDetailsType[] $shippingPackageDetails
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function setShippingPackageDetails(array $shippingPackageDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($shippingPackageDetailsArrayErrorMessage = self::validateShippingPackageDetailsForArrayConstraintsFromSetShippingPackageDetails($shippingPackageDetails))) {
            throw new \InvalidArgumentException($shippingPackageDetailsArrayErrorMessage, __LINE__);
        }
        $this->ShippingPackageDetails = $shippingPackageDetails;
        return $this;
    }
    /**
     * Add item to ShippingPackageDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\ShippingPackageDetailsType $item
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function addToShippingPackageDetails(\StructType\ShippingPackageDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ShippingPackageDetailsType) {
            throw new \InvalidArgumentException(sprintf('The ShippingPackageDetails property can only contain items of type \StructType\ShippingPackageDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ShippingPackageDetails[] = $item;
        return $this;
    }
    /**
     * Get ShippingCarrierDetails value
     * @return \StructType\ShippingCarrierDetailsType[]|null
     */
    public function getShippingCarrierDetails()
    {
        return $this->ShippingCarrierDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setShippingCarrierDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShippingCarrierDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShippingCarrierDetailsForArrayConstraintsFromSetShippingCarrierDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeShippingCarrierDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeShippingCarrierDetailsItem instanceof \StructType\ShippingCarrierDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeShippingCarrierDetailsItem) ? get_class($geteBayDetailsResponseTypeShippingCarrierDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeShippingCarrierDetailsItem), var_export($geteBayDetailsResponseTypeShippingCarrierDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ShippingCarrierDetails property can only contain items of type \StructType\ShippingCarrierDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ShippingCarrierDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\ShippingCarrierDetailsType[] $shippingCarrierDetails
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function setShippingCarrierDetails(array $shippingCarrierDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($shippingCarrierDetailsArrayErrorMessage = self::validateShippingCarrierDetailsForArrayConstraintsFromSetShippingCarrierDetails($shippingCarrierDetails))) {
            throw new \InvalidArgumentException($shippingCarrierDetailsArrayErrorMessage, __LINE__);
        }
        $this->ShippingCarrierDetails = $shippingCarrierDetails;
        return $this;
    }
    /**
     * Add item to ShippingCarrierDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\ShippingCarrierDetailsType $item
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function addToShippingCarrierDetails(\StructType\ShippingCarrierDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ShippingCarrierDetailsType) {
            throw new \InvalidArgumentException(sprintf('The ShippingCarrierDetails property can only contain items of type \StructType\ShippingCarrierDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ShippingCarrierDetails[] = $item;
        return $this;
    }
    /**
     * Get ReturnPolicyDetails value
     * @return \StructType\ReturnPolicyDetailsType|null
     */
    public function getReturnPolicyDetails()
    {
        return $this->ReturnPolicyDetails;
    }
    /**
     * Set ReturnPolicyDetails value
     * @param \StructType\ReturnPolicyDetailsType $returnPolicyDetails
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function setReturnPolicyDetails(\StructType\ReturnPolicyDetailsType $returnPolicyDetails = null)
    {
        $this->ReturnPolicyDetails = $returnPolicyDetails;
        return $this;
    }
    /**
     * Get InternationalReturnPolicyDetails value
     * @return \StructType\ReturnPolicyDetailsType|null
     */
    public function getInternationalReturnPolicyDetails()
    {
        return $this->InternationalReturnPolicyDetails;
    }
    /**
     * Set InternationalReturnPolicyDetails value
     * @param \StructType\ReturnPolicyDetailsType $internationalReturnPolicyDetails
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function setInternationalReturnPolicyDetails(\StructType\ReturnPolicyDetailsType $internationalReturnPolicyDetails = null)
    {
        $this->InternationalReturnPolicyDetails = $internationalReturnPolicyDetails;
        return $this;
    }
    /**
     * Get ListingStartPriceDetails value
     * @return \StructType\ListingStartPriceDetailsType[]|null
     */
    public function getListingStartPriceDetails()
    {
        return $this->ListingStartPriceDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setListingStartPriceDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setListingStartPriceDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateListingStartPriceDetailsForArrayConstraintsFromSetListingStartPriceDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeListingStartPriceDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeListingStartPriceDetailsItem instanceof \StructType\ListingStartPriceDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeListingStartPriceDetailsItem) ? get_class($geteBayDetailsResponseTypeListingStartPriceDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeListingStartPriceDetailsItem), var_export($geteBayDetailsResponseTypeListingStartPriceDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ListingStartPriceDetails property can only contain items of type \StructType\ListingStartPriceDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ListingStartPriceDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\ListingStartPriceDetailsType[] $listingStartPriceDetails
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function setListingStartPriceDetails(array $listingStartPriceDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($listingStartPriceDetailsArrayErrorMessage = self::validateListingStartPriceDetailsForArrayConstraintsFromSetListingStartPriceDetails($listingStartPriceDetails))) {
            throw new \InvalidArgumentException($listingStartPriceDetailsArrayErrorMessage, __LINE__);
        }
        $this->ListingStartPriceDetails = $listingStartPriceDetails;
        return $this;
    }
    /**
     * Add item to ListingStartPriceDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\ListingStartPriceDetailsType $item
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function addToListingStartPriceDetails(\StructType\ListingStartPriceDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ListingStartPriceDetailsType) {
            throw new \InvalidArgumentException(sprintf('The ListingStartPriceDetails property can only contain items of type \StructType\ListingStartPriceDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ListingStartPriceDetails[] = $item;
        return $this;
    }
    /**
     * Get BuyerRequirementDetails value
     * @return \StructType\SiteBuyerRequirementDetailsType[]|null
     */
    public function getBuyerRequirementDetails()
    {
        return $this->BuyerRequirementDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setBuyerRequirementDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBuyerRequirementDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBuyerRequirementDetailsForArrayConstraintsFromSetBuyerRequirementDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeBuyerRequirementDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeBuyerRequirementDetailsItem instanceof \StructType\SiteBuyerRequirementDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeBuyerRequirementDetailsItem) ? get_class($geteBayDetailsResponseTypeBuyerRequirementDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeBuyerRequirementDetailsItem), var_export($geteBayDetailsResponseTypeBuyerRequirementDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BuyerRequirementDetails property can only contain items of type \StructType\SiteBuyerRequirementDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set BuyerRequirementDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\SiteBuyerRequirementDetailsType[] $buyerRequirementDetails
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function setBuyerRequirementDetails(array $buyerRequirementDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($buyerRequirementDetailsArrayErrorMessage = self::validateBuyerRequirementDetailsForArrayConstraintsFromSetBuyerRequirementDetails($buyerRequirementDetails))) {
            throw new \InvalidArgumentException($buyerRequirementDetailsArrayErrorMessage, __LINE__);
        }
        $this->BuyerRequirementDetails = $buyerRequirementDetails;
        return $this;
    }
    /**
     * Add item to BuyerRequirementDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\SiteBuyerRequirementDetailsType $item
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function addToBuyerRequirementDetails(\StructType\SiteBuyerRequirementDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\SiteBuyerRequirementDetailsType) {
            throw new \InvalidArgumentException(sprintf('The BuyerRequirementDetails property can only contain items of type \StructType\SiteBuyerRequirementDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BuyerRequirementDetails[] = $item;
        return $this;
    }
    /**
     * Get ListingFeatureDetails value
     * @return \StructType\ListingFeatureDetailsType[]|null
     */
    public function getListingFeatureDetails()
    {
        return $this->ListingFeatureDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setListingFeatureDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setListingFeatureDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateListingFeatureDetailsForArrayConstraintsFromSetListingFeatureDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeListingFeatureDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeListingFeatureDetailsItem instanceof \StructType\ListingFeatureDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeListingFeatureDetailsItem) ? get_class($geteBayDetailsResponseTypeListingFeatureDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeListingFeatureDetailsItem), var_export($geteBayDetailsResponseTypeListingFeatureDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ListingFeatureDetails property can only contain items of type \StructType\ListingFeatureDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ListingFeatureDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\ListingFeatureDetailsType[] $listingFeatureDetails
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function setListingFeatureDetails(array $listingFeatureDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($listingFeatureDetailsArrayErrorMessage = self::validateListingFeatureDetailsForArrayConstraintsFromSetListingFeatureDetails($listingFeatureDetails))) {
            throw new \InvalidArgumentException($listingFeatureDetailsArrayErrorMessage, __LINE__);
        }
        $this->ListingFeatureDetails = $listingFeatureDetails;
        return $this;
    }
    /**
     * Add item to ListingFeatureDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\ListingFeatureDetailsType $item
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function addToListingFeatureDetails(\StructType\ListingFeatureDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ListingFeatureDetailsType) {
            throw new \InvalidArgumentException(sprintf('The ListingFeatureDetails property can only contain items of type \StructType\ListingFeatureDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ListingFeatureDetails[] = $item;
        return $this;
    }
    /**
     * Get VariationDetails value
     * @return \StructType\VariationDetailsType|null
     */
    public function getVariationDetails()
    {
        return $this->VariationDetails;
    }
    /**
     * Set VariationDetails value
     * @param \StructType\VariationDetailsType $variationDetails
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function setVariationDetails(\StructType\VariationDetailsType $variationDetails = null)
    {
        $this->VariationDetails = $variationDetails;
        return $this;
    }
    /**
     * Get ExcludeShippingLocationDetails value
     * @return \StructType\ExcludeShippingLocationDetailsType[]|null
     */
    public function getExcludeShippingLocationDetails()
    {
        return $this->ExcludeShippingLocationDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setExcludeShippingLocationDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExcludeShippingLocationDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExcludeShippingLocationDetailsForArrayConstraintsFromSetExcludeShippingLocationDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeExcludeShippingLocationDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeExcludeShippingLocationDetailsItem instanceof \StructType\ExcludeShippingLocationDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeExcludeShippingLocationDetailsItem) ? get_class($geteBayDetailsResponseTypeExcludeShippingLocationDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeExcludeShippingLocationDetailsItem), var_export($geteBayDetailsResponseTypeExcludeShippingLocationDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExcludeShippingLocationDetails property can only contain items of type \StructType\ExcludeShippingLocationDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ExcludeShippingLocationDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\ExcludeShippingLocationDetailsType[] $excludeShippingLocationDetails
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function setExcludeShippingLocationDetails(array $excludeShippingLocationDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($excludeShippingLocationDetailsArrayErrorMessage = self::validateExcludeShippingLocationDetailsForArrayConstraintsFromSetExcludeShippingLocationDetails($excludeShippingLocationDetails))) {
            throw new \InvalidArgumentException($excludeShippingLocationDetailsArrayErrorMessage, __LINE__);
        }
        $this->ExcludeShippingLocationDetails = $excludeShippingLocationDetails;
        return $this;
    }
    /**
     * Add item to ExcludeShippingLocationDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\ExcludeShippingLocationDetailsType $item
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function addToExcludeShippingLocationDetails(\StructType\ExcludeShippingLocationDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExcludeShippingLocationDetailsType) {
            throw new \InvalidArgumentException(sprintf('The ExcludeShippingLocationDetails property can only contain items of type \StructType\ExcludeShippingLocationDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ExcludeShippingLocationDetails[] = $item;
        return $this;
    }
    /**
     * Get UpdateTime value
     * @return string|null
     */
    public function getUpdateTime()
    {
        return $this->UpdateTime;
    }
    /**
     * Set UpdateTime value
     * @param string $updateTime
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function setUpdateTime($updateTime = null)
    {
        // validation for constraint: string
        if (!is_null($updateTime) && !is_string($updateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updateTime, true), gettype($updateTime)), __LINE__);
        }
        $this->UpdateTime = $updateTime;
        return $this;
    }
    /**
     * Get RecoupmentPolicyDetails value
     * @return \StructType\RecoupmentPolicyDetailsType[]|null
     */
    public function getRecoupmentPolicyDetails()
    {
        return $this->RecoupmentPolicyDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setRecoupmentPolicyDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRecoupmentPolicyDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRecoupmentPolicyDetailsForArrayConstraintsFromSetRecoupmentPolicyDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeRecoupmentPolicyDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeRecoupmentPolicyDetailsItem instanceof \StructType\RecoupmentPolicyDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeRecoupmentPolicyDetailsItem) ? get_class($geteBayDetailsResponseTypeRecoupmentPolicyDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeRecoupmentPolicyDetailsItem), var_export($geteBayDetailsResponseTypeRecoupmentPolicyDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RecoupmentPolicyDetails property can only contain items of type \StructType\RecoupmentPolicyDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RecoupmentPolicyDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\RecoupmentPolicyDetailsType[] $recoupmentPolicyDetails
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function setRecoupmentPolicyDetails(array $recoupmentPolicyDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($recoupmentPolicyDetailsArrayErrorMessage = self::validateRecoupmentPolicyDetailsForArrayConstraintsFromSetRecoupmentPolicyDetails($recoupmentPolicyDetails))) {
            throw new \InvalidArgumentException($recoupmentPolicyDetailsArrayErrorMessage, __LINE__);
        }
        $this->RecoupmentPolicyDetails = $recoupmentPolicyDetails;
        return $this;
    }
    /**
     * Add item to RecoupmentPolicyDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\RecoupmentPolicyDetailsType $item
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function addToRecoupmentPolicyDetails(\StructType\RecoupmentPolicyDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\RecoupmentPolicyDetailsType) {
            throw new \InvalidArgumentException(sprintf('The RecoupmentPolicyDetails property can only contain items of type \StructType\RecoupmentPolicyDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->RecoupmentPolicyDetails[] = $item;
        return $this;
    }
    /**
     * Get ShippingCategoryDetails value
     * @return \StructType\ShippingCategoryDetailsType[]|null
     */
    public function getShippingCategoryDetails()
    {
        return $this->ShippingCategoryDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setShippingCategoryDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShippingCategoryDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShippingCategoryDetailsForArrayConstraintsFromSetShippingCategoryDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeShippingCategoryDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeShippingCategoryDetailsItem instanceof \StructType\ShippingCategoryDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeShippingCategoryDetailsItem) ? get_class($geteBayDetailsResponseTypeShippingCategoryDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeShippingCategoryDetailsItem), var_export($geteBayDetailsResponseTypeShippingCategoryDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ShippingCategoryDetails property can only contain items of type \StructType\ShippingCategoryDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ShippingCategoryDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\ShippingCategoryDetailsType[] $shippingCategoryDetails
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function setShippingCategoryDetails(array $shippingCategoryDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($shippingCategoryDetailsArrayErrorMessage = self::validateShippingCategoryDetailsForArrayConstraintsFromSetShippingCategoryDetails($shippingCategoryDetails))) {
            throw new \InvalidArgumentException($shippingCategoryDetailsArrayErrorMessage, __LINE__);
        }
        $this->ShippingCategoryDetails = $shippingCategoryDetails;
        return $this;
    }
    /**
     * Add item to ShippingCategoryDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\ShippingCategoryDetailsType $item
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function addToShippingCategoryDetails(\StructType\ShippingCategoryDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ShippingCategoryDetailsType) {
            throw new \InvalidArgumentException(sprintf('The ShippingCategoryDetails property can only contain items of type \StructType\ShippingCategoryDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ShippingCategoryDetails[] = $item;
        return $this;
    }
    /**
     * Get ProductDetails value
     * @return \StructType\ProductDetailsType|null
     */
    public function getProductDetails()
    {
        return $this->ProductDetails;
    }
    /**
     * Set ProductDetails value
     * @param \StructType\ProductDetailsType $productDetails
     * @return \StructType\GeteBayDetailsResponseType
     */
    public function setProductDetails(\StructType\ProductDetailsType $productDetails = null)
    {
        $this->ProductDetails = $productDetails;
        return $this;
    }
}
