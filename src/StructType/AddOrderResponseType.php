<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddOrderResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type defines the response of an <b>AddOrder</b> call. If the multiple line items are successfully combined into a single order, this response includes the unique identifier of this 'Combined Invoice' order (automatically
 * generated by eBay), and a timestamp indicating when the new order was created.
 * @subpackage Structs
 */
class AddOrderResponseType extends AbstractResponseType
{
    /**
     * The OrderID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the successfully-created 'Combined Invoice' order. This value is only created and returned if the <b>AddOrder</b> call is successful in creating the new order. <br/><br/> This value can be used as an input
     * filter in <b>GetOrders</b> and <b>GetOrderTransactions</b> calls to retrieve the 'Combined Invoice' order. <br><br> <span class="tablenote"><b>Note: </b> In June 2019, eBay introduced a new order ID format, but allowed developers/sellers to decide
     * whether to immediately adopt the new format, or to continue working with the old format. Users who wanted to adopt the new format, could either use a Trading WSDL Version 1113 (or newer), or they could even use an older Trading WSDL but set the
     * <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to <code>1113</code> in API calls. <b>Beginning in June 2020, only the new order ID format will be returned in response payloads for paid orders, regardless of the WSDL version number or
     * compatibility level.</b> <br><br> Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all order retrieval calls that accept Order ID values as filters
     * in the request payload, including the <b>GetOrders</b> call, will support the identifiers for both unpaid and paid orders. The new order ID format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single
     * line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support. <br><br> Sellers can
     * check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the
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
     * The CreatedTime
     * Meta information extracted from the WSDL
     * - documentation: Timestamp that indicates the date and time that the 'Combined Invoice' order was created.
     * - minOccurs: 0
     * @var string
     */
    public $CreatedTime;
    /**
     * Constructor method for AddOrderResponseType
     * @uses AddOrderResponseType::setOrderID()
     * @uses AddOrderResponseType::setCreatedTime()
     * @param string $orderID
     * @param string $createdTime
     */
    public function __construct($orderID = null, $createdTime = null)
    {
        $this
            ->setOrderID($orderID)
            ->setCreatedTime($createdTime);
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
     * @return \StructType\AddOrderResponseType
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
     * Get CreatedTime value
     * @return string|null
     */
    public function getCreatedTime()
    {
        return $this->CreatedTime;
    }
    /**
     * Set CreatedTime value
     * @param string $createdTime
     * @return \StructType\AddOrderResponseType
     */
    public function setCreatedTime($createdTime = null)
    {
        // validation for constraint: string
        if (!is_null($createdTime) && !is_string($createdTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createdTime, true), gettype($createdTime)), __LINE__);
        }
        $this->CreatedTime = $createdTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AddOrderResponseType
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
