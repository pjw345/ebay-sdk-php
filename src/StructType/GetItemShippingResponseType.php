<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetItemShippingResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: This is the base response type of the <b>GetItemShipping</b> call. This call takes an <b>ItemID</b> value for an item that has yet to be shipped, and then returns estimated shipping costs for every shipping service that the seller
 * has offered with the listing. This call will also return the <b>PickUpInStoreDetails.EligibleForPickupInStore</b> flag if the item is available for buyer pick-up through the In-Store Pickup feature.
 * @subpackage Structs
 */
class GetItemShippingResponseType extends AbstractResponseType
{
    /**
     * The ShippingDetails
     * Meta information extracted from the WSDL
     * - documentation: This container will be returned if at least one domestic or international shipping service option is available for the item. A <b>ShippingServiceOptions</b> (for domestic shipping) and/or an <b>InternationalShippingServiceOptions</b>
     * container (for international shipping) is returned for each available calculated shipping service option. These shipping service option containers consists of estimated shipping cost and estimated shipping times. <br> <br> Any error about shipping
     * services (returned by a vendor of eBay's who calculates shipping costs) is returned in <b>ShippingRateErrorMessage</b>. Errors from a shipping service are likely to be related to issues with shipping specifications, such as package size and the
     * selected shipping method not supported by a particular shipping service.
     * - minOccurs: 0
     * @var \StructType\ShippingDetailsType
     */
    public $ShippingDetails;
    /**
     * The PickUpInStoreDetails
     * Meta information extracted from the WSDL
     * - documentation: This container is only returned in <b>GetItemShipping</b> if the In-Store Pickup feature is enabled for the listing. In-Store Pickup as a fulfillment method is only available to a limited number of large retail merchants in the US,
     * Canada, UK, Germany, and Australia marketplaces. The In-Store Pickup feature can only be applied to multiple-quantity, fixed-price listings, and the merchant must have quantity of the item available in a store that is near the prospective buyer, in
     * order for In-Store Pickup to be an available fulfillment option for that buyer.
     * - minOccurs: 0
     * @var \StructType\PickupInStoreDetailsType
     */
    public $PickUpInStoreDetails;
    /**
     * Constructor method for GetItemShippingResponseType
     * @uses GetItemShippingResponseType::setShippingDetails()
     * @uses GetItemShippingResponseType::setPickUpInStoreDetails()
     * @param \StructType\ShippingDetailsType $shippingDetails
     * @param \StructType\PickupInStoreDetailsType $pickUpInStoreDetails
     */
    public function __construct(\StructType\ShippingDetailsType $shippingDetails = null, \StructType\PickupInStoreDetailsType $pickUpInStoreDetails = null)
    {
        $this
            ->setShippingDetails($shippingDetails)
            ->setPickUpInStoreDetails($pickUpInStoreDetails);
    }
    /**
     * Get ShippingDetails value
     * @return \StructType\ShippingDetailsType|null
     */
    public function getShippingDetails()
    {
        return $this->ShippingDetails;
    }
    /**
     * Set ShippingDetails value
     * @param \StructType\ShippingDetailsType $shippingDetails
     * @return \StructType\GetItemShippingResponseType
     */
    public function setShippingDetails(\StructType\ShippingDetailsType $shippingDetails = null)
    {
        $this->ShippingDetails = $shippingDetails;
        return $this;
    }
    /**
     * Get PickUpInStoreDetails value
     * @return \StructType\PickupInStoreDetailsType|null
     */
    public function getPickUpInStoreDetails()
    {
        return $this->PickUpInStoreDetails;
    }
    /**
     * Set PickUpInStoreDetails value
     * @param \StructType\PickupInStoreDetailsType $pickUpInStoreDetails
     * @return \StructType\GetItemShippingResponseType
     */
    public function setPickUpInStoreDetails(\StructType\PickupInStoreDetailsType $pickUpInStoreDetails = null)
    {
        $this->PickUpInStoreDetails = $pickUpInStoreDetails;
        return $this;
    }
}
