<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompleteSaleRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Enables a seller to perform various tasks with a single or multiple line item order. Tasks available with this call include marking the order as paid, marking the order as shipped, providing shipment tracking details to the buyer,
 * and leaving feedback for the buyer.
 * @subpackage Structs
 */
class CompleteSaleRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for an eBay listing. An <b>ItemID</b> value can be paired up with a corresponding <b>TransactionID</b> value in a <b>CompleteSale</b> request to identify a single order line item. Alternatively, the
     * <b>OrderLineItemID</b> value for the order line item can be used. <br><br> Unless an <b>OrderLineItemID</b> value is used to identify a single order line item, or the <b>OrderID</b> value is used to identify a single or multiple line item order, the
     * <b>ItemID</b>/<b>TransactionID</b> pair must be specified. To perform an action on an entire multiple line item order, the <b>OrderID</b> field must be used. If an <b>OrderID</b> or <b>OrderLineItemID</b> value is specified, an
     * <b>ItemID</b>/<b>TransactionID</b> pair will be ignored (if present in the same request). | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for a sales transaction. A <b>TransactionID</b> identifier is created once there is a commitment to buy (bidder wins the auction, buyer clicks buy button, or buyer purchases item through <b>PlaceOffer</b> call). The
     * <b>TransactionID</b> can be paired up with the corresponding <b>ItemID</b> value in a <b>CompleteSale</b> request to identify a single order line item. Alternatively, the <b>OrderLineItemID</b> value for the order line item can be used. <br><br>
     * Unless an <b>OrderLineItemID</b> value is used to identify a single order line item, or the <b>OrderID</b> value is used to identify a single or multiple line item order, the <b>ItemID</b>/<b>TransactionID</b> pair must be specified. To perform an
     * action on an entire multiple line item order, the <b>OrderID</b> field must be used. If an <b>OrderID</b> or <b>OrderLineItemID</b> value is specified, an <b>ItemID</b>/<b>TransactionID</b> pair will be ignored (if present in the same request).
     * - minOccurs: 0
     * @var string
     */
    public $TransactionID;
    /**
     * The FeedbackInfo
     * Meta information extracted from the WSDL
     * - documentation: This container is used by the seller to leave feedback for the buyer for the order line item identified in the call request. The seller must include and specify all fields of this type, including the buyer's eBay User ID, the
     * Feedback rating (a seller can only leave a buyer a 'Positive' rating), and a comment, which helps justify the Feedback rating. The eBay User ID must match the buyer who bought the order line item, or an error will occur. An error will also occur if
     * Feedback has already been left for the buyer (either through API or the Web flow). <br><br> To determine if Feedback has already been left for an order line item, you can call <b class="con">GetFeedback</b>, passing in the <b
     * class="con">OrderLineItemID</b> value in the call request. <br><br> <span class="tablenote"><b>Note: </b> Feedback entries are submitted at the order line item level, so either an <b>OrderLineItemID</b> value or an <b>ItemID</b>/<b>TransactionID</b>
     * pair should be specified to identify the order line item (and not an <b>OrderLineItemID</b> value). To leave Feedback for all line items in a multiple line item order, the seller would need a separate <b>CompleteSale</b> request for each order line
     * item. </span>
     * - minOccurs: 0
     * @var \StructType\FeedbackInfoType
     */
    public $FeedbackInfo;
    /**
     * The Shipped
     * Meta information extracted from the WSDL
     * - documentation: The seller includes and sets this field to true if the order or order line item has been shipped. If the call is successful, the order line item(s) are marked as Shipped in My eBay. <br><br> If the seller includes and sets this field
     * to false, the order or order line item are marked (or remain) as 'Not Shipped' in eBay's system. <br><br> If this field is not included, the shipped status of the order or order line item remain unchanged in My eBay. <br><br> If shipment tracking
     * information is provided for an order or order line item through the <b>Shipment</b> container in the same request, the <b>Shipped</b> status is set to <code>true</code> automatically, and the <b>Shipped</b> field is not necessary.
     * - minOccurs: 0
     * @var bool
     */
    public $Shipped;
    /**
     * The Paid
     * Meta information extracted from the WSDL
     * - documentation: The seller includes and sets this field to true if the order has been paid for by the buyer. If the call is successful, the order line item(s) are marked as 'Paid' in eBay's system. <br><br> If the seller includes and sets this field
     * to <code>false</code>, the order line item(s) are marked (or remain) as 'Not Paid' in eBay's system. <br><br> If this field is not included, the paid status of the order line item(s) remain unchanged in eBay's system.
     * - minOccurs: 0
     * @var bool
     */
    public $Paid;
    /**
     * The ListingType
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> DO NOT USE THIS FIELD. Previously, this field's only purpose was to classify the order to be updated as a Half.com order. However, since the Half.com site has been shut down, this field is no
     * longer applicable. </span>
     * - minOccurs: 0
     * @var string
     */
    public $ListingType;
    /**
     * The Shipment
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of shipment tracking information, shipped time, and an optional text field to provide additional details to the buyer. Setting the tracking number and shipping carrier automatically marks the order line item as
     * shipped and the <b>Shipped</b> field is not necessary. <br><br> If you supply <b>ShipmentTrackingNumber</b>, you must also supply <b>ShippingCarrierUsed</b>; otherwise you will get an error. <br><br> To modify the shipping tracking number and/or
     * shipping carrier, supply the new number in the <b>ShipmentTrackingNumber</b> field or supply the value for <b>ShippingCarrierUsed</b>, or both. The old number and carrier are deleted and the new ones are added. <br><br> To simply delete the current
     * tracking details altogether, supply empty <b>Shipment</b> tags. <br> <br> <span class="tablenote"><b>Note:</b> Top-Rated sellers must have a record of uploading shipment tracking information (through site or through API) for at least 95 percent of
     * their order line items (purchased by U.S. buyers) to keep their status as Top-Rated sellers. For more information on the requirements to becoming a Top-Rated Seller, see the <a href="http://pages.ebay.com/help/sell/top-rated.html">Becoming a
     * Top-Rated Seller and qualifying for Top-Rated Plus</a> customer support page. </span> <br>
     * - minOccurs: 0
     * @var \StructType\ShipmentType
     */
    public $Shipment;
    /**
     * The OrderID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for an eBay order. This field can be used to make an 'order-level' update. If an order has multiple line items, and the <b>CompleteSale</b> call is being used to update the status of, or provide feedback for a
     * single line item within the order, the <b>OrderLineItemID</b> field or <b>ItemID</b>/<b>TransactionID</b> pair must be used to identify this order line item instead of the <b>OrderID</b> field. If the order only has one line item, it the
     * <b>OrderID</b> field can be used to make any updates with the <b>CompleteSale</b> call. <br><br> <b>OrderID</b> overrides an <b>OrderLineItemID</b> or <b>ItemID</b>/<b>TransactionID</b> pair if these fields are also specified in the same request.
     * <br><br> <span class="tablenote"><b>Note: </b> In June 2019, eBay introduced a new order ID format, but allowed developers/sellers to decide whether to immediately adopt the new format, or to continue working with the old format. Users who wanted to
     * adopt the new format, could either use a Trading WSDL Version 1113 (or newer), or they could even use an older Trading WSDL but set the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to <code>1113</code> in API calls. <b>Beginning in April
     * 2020, only the new order ID format will be returned in response payloads for paid orders, regardless of the WSDL version number or compatibility level.</b> <br><br> Note that the unique identifier of a 'non-immediate payment' order will change as it
     * goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as filters in the request payload, including the <b>CompleteSale</b> call, will support the identifiers for both unpaid and paid orders. The new
     * order ID format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique
     * order identifiers will also be known and used/referenced by the buyer and eBay customer support. <br><br> Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the
     * response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made
     * payment. </span>
     * - minOccurs: 0
     * @var string
     */
    public $OrderID;
    /**
     * The OrderLineItemID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for an eBay order line item. <b>OrderLineItemID</b> values are returned (at the order line item level) in Trading API's order management calls. This identifier is created once there is a commitment to buy (bidder
     * wins the auction, buyer clicks buy button, or buyer purchases item through <b>PlaceOffer</b> call). An <b>OrderLineItemID</b> value can be used in a <b>CompleteSale</b> request to identify a line item within an order. Alternatively, an
     * <b>ItemID</b>/<b>TransactionID</b> pair can also be used to identify a line item. <br><br> Unless an <b>ItemID</b>/<b>TransactionID</b> pair is used to identify an order line item, or an <b>OrderID</b> value is used to identify an order, the
     * <b>OrderLineItemID</b> must be specified. If <b>OrderLineItemID</b> is specified, the <b>ItemID</b>/<b>TransactionID</b> pair are ignored if present in the same request.
     * - minOccurs: 0
     * @var string
     */
    public $OrderLineItemID;
    /**
     * Constructor method for CompleteSaleRequestType
     * @uses CompleteSaleRequestType::setItemID()
     * @uses CompleteSaleRequestType::setTransactionID()
     * @uses CompleteSaleRequestType::setFeedbackInfo()
     * @uses CompleteSaleRequestType::setShipped()
     * @uses CompleteSaleRequestType::setPaid()
     * @uses CompleteSaleRequestType::setListingType()
     * @uses CompleteSaleRequestType::setShipment()
     * @uses CompleteSaleRequestType::setOrderID()
     * @uses CompleteSaleRequestType::setOrderLineItemID()
     * @param string $itemID
     * @param string $transactionID
     * @param \StructType\FeedbackInfoType $feedbackInfo
     * @param bool $shipped
     * @param bool $paid
     * @param string $listingType
     * @param \StructType\ShipmentType $shipment
     * @param string $orderID
     * @param string $orderLineItemID
     */
    public function __construct($itemID = null, $transactionID = null, \StructType\FeedbackInfoType $feedbackInfo = null, $shipped = null, $paid = null, $listingType = null, \StructType\ShipmentType $shipment = null, $orderID = null, $orderLineItemID = null)
    {
        $this
            ->setItemID($itemID)
            ->setTransactionID($transactionID)
            ->setFeedbackInfo($feedbackInfo)
            ->setShipped($shipped)
            ->setPaid($paid)
            ->setListingType($listingType)
            ->setShipment($shipment)
            ->setOrderID($orderID)
            ->setOrderLineItemID($orderLineItemID);
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
     * @return \StructType\CompleteSaleRequestType
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
     * Get TransactionID value
     * @return string|null
     */
    public function getTransactionID()
    {
        return $this->TransactionID;
    }
    /**
     * Set TransactionID value
     * @param string $transactionID
     * @return \StructType\CompleteSaleRequestType
     */
    public function setTransactionID($transactionID = null)
    {
        // validation for constraint: string
        if (!is_null($transactionID) && !is_string($transactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionID, true), gettype($transactionID)), __LINE__);
        }
        $this->TransactionID = $transactionID;
        return $this;
    }
    /**
     * Get FeedbackInfo value
     * @return \StructType\FeedbackInfoType|null
     */
    public function getFeedbackInfo()
    {
        return $this->FeedbackInfo;
    }
    /**
     * Set FeedbackInfo value
     * @param \StructType\FeedbackInfoType $feedbackInfo
     * @return \StructType\CompleteSaleRequestType
     */
    public function setFeedbackInfo(\StructType\FeedbackInfoType $feedbackInfo = null)
    {
        $this->FeedbackInfo = $feedbackInfo;
        return $this;
    }
    /**
     * Get Shipped value
     * @return bool|null
     */
    public function getShipped()
    {
        return $this->Shipped;
    }
    /**
     * Set Shipped value
     * @param bool $shipped
     * @return \StructType\CompleteSaleRequestType
     */
    public function setShipped($shipped = null)
    {
        // validation for constraint: boolean
        if (!is_null($shipped) && !is_bool($shipped)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($shipped, true), gettype($shipped)), __LINE__);
        }
        $this->Shipped = $shipped;
        return $this;
    }
    /**
     * Get Paid value
     * @return bool|null
     */
    public function getPaid()
    {
        return $this->Paid;
    }
    /**
     * Set Paid value
     * @param bool $paid
     * @return \StructType\CompleteSaleRequestType
     */
    public function setPaid($paid = null)
    {
        // validation for constraint: boolean
        if (!is_null($paid) && !is_bool($paid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($paid, true), gettype($paid)), __LINE__);
        }
        $this->Paid = $paid;
        return $this;
    }
    /**
     * Get ListingType value
     * @return string|null
     */
    public function getListingType()
    {
        return $this->ListingType;
    }
    /**
     * Set ListingType value
     * @uses \EnumType\ListingTypeCodeType::valueIsValid()
     * @uses \EnumType\ListingTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $listingType
     * @return \StructType\CompleteSaleRequestType
     */
    public function setListingType($listingType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ListingTypeCodeType::valueIsValid($listingType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ListingTypeCodeType', is_array($listingType) ? implode(', ', $listingType) : var_export($listingType, true), implode(', ', \EnumType\ListingTypeCodeType::getValidValues())), __LINE__);
        }
        $this->ListingType = $listingType;
        return $this;
    }
    /**
     * Get Shipment value
     * @return \StructType\ShipmentType|null
     */
    public function getShipment()
    {
        return $this->Shipment;
    }
    /**
     * Set Shipment value
     * @param \StructType\ShipmentType $shipment
     * @return \StructType\CompleteSaleRequestType
     */
    public function setShipment(\StructType\ShipmentType $shipment = null)
    {
        $this->Shipment = $shipment;
        return $this;
    }
    /**
     * Get OrderID value
     * @return string|null
     */
    public function getOrderID()
    {
        return $this->OrderID;
    }
    /**
     * Set OrderID value
     * @param string $orderID
     * @return \StructType\CompleteSaleRequestType
     */
    public function setOrderID($orderID = null)
    {
        // validation for constraint: string
        if (!is_null($orderID) && !is_string($orderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderID, true), gettype($orderID)), __LINE__);
        }
        $this->OrderID = $orderID;
        return $this;
    }
    /**
     * Get OrderLineItemID value
     * @return string|null
     */
    public function getOrderLineItemID()
    {
        return $this->OrderLineItemID;
    }
    /**
     * Set OrderLineItemID value
     * @param string $orderLineItemID
     * @return \StructType\CompleteSaleRequestType
     */
    public function setOrderLineItemID($orderLineItemID = null)
    {
        // validation for constraint: string
        if (!is_null($orderLineItemID) && !is_string($orderLineItemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderLineItemID, true), gettype($orderLineItemID)), __LINE__);
        }
        $this->OrderLineItemID = $orderLineItemID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CompleteSaleRequestType
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
