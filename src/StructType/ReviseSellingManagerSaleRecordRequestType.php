<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReviseSellingManagerSaleRecordRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Request type containing the input fields for the <b>ReviseSellingManagerSaleRecord</b> call. The standard Trading API deprecation process is not applicable to this call. The user must have a Selling Manager Pro subscription to use
 * this call.
 * @subpackage Structs
 */
class ReviseSellingManagerSaleRecordRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for an eBay listing. A listing can have multiple order line items, but only one <b>ItemID</b> value. An <b>ItemID</b> can be paired up with a corresponding <b>TransactionID</b> and used as an input filter for
     * <b>ReviseSellingManagerSaleRecord</b>. The <b>ItemID</b>/<b>TransactionID</b> pair corresponds to a Selling Manager <b>SaleRecordID</b>, which can be retrieved with the <b>GetSellingManagerSaleRecord</b> call. <br><br> Unless an
     * <b>OrderLineItemID</b> is used to identify an order line item, or the <b>OrderID</b> is used to identify an order, the <b>ItemID</b>/<b>TransactionID</b> pair must be specified. If <b>OrderID</b> or <b>OrderLineItemID</b> are specified, the
     * <b>ItemID</b>/<b>TransactionID</b> pair is ignored if present in the same request. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for an eBay sales transaction. This identifier is created once there is a commitment to buy (bidder wins the auction, buyer clicks buy button, or buyer purchases item through <b>PlaceOffer</b> call). Since an
     * auction listing can only have one sales transaction during the duration of the listing, the <b>TransactionID</b> value for auction listings is always <code>0</code>. <br><br> The <b>ItemID</b>/<b>TransactionID</b> pair can be used to identify an
     * order line item in a <b>ReviseSellingManagerSaleRecord</b> call. The <b>ItemID</b>/<b>TransactionID</b> pair corresponds to a Selling Manager <b>SaleRecordID</b>, which can be retrieved with the <b>GetSellingManagerSaleRecord</b> call. <br><br>
     * Unless an <b>OrderLineItemID</b> is used to identify an order line item, or the <b>OrderID</b> is used to identify an order, the <b>ItemID</b>/<b>TransactionID</b> pair must be specified. If <b>OrderID</b> or <b>OrderLineItemID</b> are specified, the
     * <b>ItemID</b>/<b>TransactionID</b> pair is ignored if present in the same request.
     * - minOccurs: 0
     * @var string
     */
    public $TransactionID;
    /**
     * The OrderID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier that identifies a single line item or multiple line item order associated with the Selling Manager sale record(s). <br><br> If an <b>OrderID</b> is used in the request, the <b>OrderLineItemID</b> and
     * <b>ItemID</b>/<b>TransactionID</b> pair are ignored if they are specified in the same request. <br><br> <span class="tablenote"><b>Note: </b> In June 2019, eBay introduced a new order ID format, but allowed developers/sellers to decide whether to
     * immediately adopt the new format, or to continue working with the old format. Users who wanted to adopt the new format, could either use a Trading WSDL Version 1113 (or newer), or they could even use an older Trading WSDL but set the
     * <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to <code>1113</code> in API calls. <b>Beginning in June 2020, only the new order ID format will be returned in response payloads for paid orders, regardless of the WSDL version number or
     * compatibility level.</b> <br><br> Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as filters in the request
     * payload, including the <b>ReviseSellingManagerSaleRecord</b> call, will support the identifiers for both unpaid and paid orders. The new order ID format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both
     * single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support. <br><br> Sellers
     * can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the
     * response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment. </span> | Type that represents the unique identifier for an eBay order. <br><br> <span
     * class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format of order identifier values. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line
     * item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support. <br><br> For developers and sellers who are already
     * integrated with the Trading API's order management calls, this change shouldn't impact your integration unless you parse the existing order identifiers (e.g., <b>OrderID</b> or <b>OrderLineItemID</b>), or otherwise infer meaning from the format
     * (e.g., differentiating between a single line item order versus a multiple line item order). Because we realize that some integrations may have logic that is dependent upon the old identifier format, eBay is rolling out this Trading API change with
     * version control to support a transition period of approximately 9 months before applications must switch to the new format completely. <br><br> During the transition period, for developers/sellers using a Trading WSDL older than Version 1113, they
     * can use the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header in API calls to control whether the new or old <b>OrderID</b> format is returned in call response payloads. To get the new <b>OrderID</b> format, the value of the
     * <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header must be set to <code>1113</code>. During the transition period and even after, the new and old <b>OrderID</b> formats will still be supported/accepted in all Trading API call request payloads. After
     * the transition period (which will be announced), only the new <b>OrderID</b> format will be returned in all Trading API call response payloads, regardless of the Trading WSDL version used or specified compatibility level. </span> <br> <span
     * class="tablenote"><b>Note: </b> For sellers integrated with the new order ID format, please note that the identifier for an order will change as it goes from unpaid to paid status. Sellers can check to see if an order has been paid by looking for a
     * value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or
     * <b>GetSellerTransactions</b> call. When using a <b>GetOrders</b> or <b>GetOrderTransactions</b> call to retrieve specific order(s), either of these order IDs (paid or unpaid status) can be used to retrieve an order. </span>
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $OrderID;
    /**
     * The SellingManagerSoldOrder
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of order costs, shipping details, order status, and other information. The changes made under this container will update the order in Selling Manager.
     * - minOccurs: 0
     * @var \StructType\SellingManagerSoldOrderType
     */
    public $SellingManagerSoldOrder;
    /**
     * The OrderLineItemID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for an eBay order line item. This identifier is created once there is a commitment to buy (bidder wins the auction, buyer clicks buy button, or buyer purchases item through <b>PlaceOffer</b> call). <br><br> Unless
     * an <b>ItemID</b>/<b>TransactionID</b> pair is used to identify an order line item, or the <b>OrderID</b> is used to identify an order, the <b>OrderLineItemID</b> must be specified. For a multiple line item order, <b>OrderID</b> should be used. If
     * <b>OrderLineItemID</b> is specified, the <b>ItemID</b>/<b>TransactionID</b> pair are ignored if present in the same request.
     * - minOccurs: 0
     * @var string
     */
    public $OrderLineItemID;
    /**
     * Constructor method for ReviseSellingManagerSaleRecordRequestType
     * @uses ReviseSellingManagerSaleRecordRequestType::setItemID()
     * @uses ReviseSellingManagerSaleRecordRequestType::setTransactionID()
     * @uses ReviseSellingManagerSaleRecordRequestType::setOrderID()
     * @uses ReviseSellingManagerSaleRecordRequestType::setSellingManagerSoldOrder()
     * @uses ReviseSellingManagerSaleRecordRequestType::setOrderLineItemID()
     * @param string $itemID
     * @param string $transactionID
     * @param string $orderID
     * @param \StructType\SellingManagerSoldOrderType $sellingManagerSoldOrder
     * @param string $orderLineItemID
     */
    public function __construct($itemID = null, $transactionID = null, $orderID = null, \StructType\SellingManagerSoldOrderType $sellingManagerSoldOrder = null, $orderLineItemID = null)
    {
        $this
            ->setItemID($itemID)
            ->setTransactionID($transactionID)
            ->setOrderID($orderID)
            ->setSellingManagerSoldOrder($sellingManagerSoldOrder)
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
     * @return \StructType\ReviseSellingManagerSaleRecordRequestType
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
     * @return \StructType\ReviseSellingManagerSaleRecordRequestType
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
     * @return \StructType\ReviseSellingManagerSaleRecordRequestType
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
     * Get SellingManagerSoldOrder value
     * @return \StructType\SellingManagerSoldOrderType|null
     */
    public function getSellingManagerSoldOrder()
    {
        return $this->SellingManagerSoldOrder;
    }
    /**
     * Set SellingManagerSoldOrder value
     * @param \StructType\SellingManagerSoldOrderType $sellingManagerSoldOrder
     * @return \StructType\ReviseSellingManagerSaleRecordRequestType
     */
    public function setSellingManagerSoldOrder(\StructType\SellingManagerSoldOrderType $sellingManagerSoldOrder = null)
    {
        $this->SellingManagerSoldOrder = $sellingManagerSoldOrder;
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
     * @return \StructType\ReviseSellingManagerSaleRecordRequestType
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
}
