<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerPaymentType StructType
 * Meta information extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> This type is deprecated since it was only applicable to the Half.com, and the Half.com site was shut down. </span>
 * @subpackage Structs
 */
class SellerPaymentType extends AbstractStructBase
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down. </span> | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down. </span>
     * - minOccurs: 0
     * @var string
     */
    public $TransactionID;
    /**
     * The OrderID
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down. </span> | Type that represents the unique identifier for an eBay order. <br><br>
     * <span class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format of order identifier values. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and
     * multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support. <br><br> For developers and sellers
     * who are already integrated with the Trading API's order management calls, this change shouldn't impact your integration unless you parse the existing order identifiers (e.g., <b>OrderID</b> or <b>OrderLineItemID</b>), or otherwise infer meaning from
     * the format (e.g., differentiating between a single line item order versus a multiple line item order). Because we realize that some integrations may have logic that is dependent upon the old identifier format, eBay is rolling out this Trading API
     * change with version control to support a transition period of approximately 9 months before applications must switch to the new format completely. <br><br> During the transition period, for developers/sellers using a Trading WSDL older than Version
     * 1113, they can use the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header in API calls to control whether the new or old <b>OrderID</b> format is returned in call response payloads. To get the new <b>OrderID</b> format, the value of the
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
     * The SellerInventoryID
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down. </span>
     * - minOccurs: 0
     * @var string
     */
    public $SellerInventoryID;
    /**
     * The PrivateNotes
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down. </span>
     * - minOccurs: 0
     * @var string
     */
    public $PrivateNotes;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down. </span>
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * The PaymentType
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down. </span>
     * - minOccurs: 0
     * @var string
     */
    public $PaymentType;
    /**
     * The TransactionPrice
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down. </span>
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $TransactionPrice;
    /**
     * The ShippingReimbursement
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down. </span>
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $ShippingReimbursement;
    /**
     * The Commission
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down. </span>
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $Commission;
    /**
     * The AmountPaid
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down. </span>
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $AmountPaid;
    /**
     * The PaidTime
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down. </span>
     * - minOccurs: 0
     * @var string
     */
    public $PaidTime;
    /**
     * The OrderLineItemID
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down. </span>
     * - minOccurs: 0
     * @var string
     */
    public $OrderLineItemID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellerPaymentType
     * @uses SellerPaymentType::setItemID()
     * @uses SellerPaymentType::setTransactionID()
     * @uses SellerPaymentType::setOrderID()
     * @uses SellerPaymentType::setSellerInventoryID()
     * @uses SellerPaymentType::setPrivateNotes()
     * @uses SellerPaymentType::setTitle()
     * @uses SellerPaymentType::setPaymentType()
     * @uses SellerPaymentType::setTransactionPrice()
     * @uses SellerPaymentType::setShippingReimbursement()
     * @uses SellerPaymentType::setCommission()
     * @uses SellerPaymentType::setAmountPaid()
     * @uses SellerPaymentType::setPaidTime()
     * @uses SellerPaymentType::setOrderLineItemID()
     * @uses SellerPaymentType::setAny()
     * @param string $itemID
     * @param string $transactionID
     * @param string $orderID
     * @param string $sellerInventoryID
     * @param string $privateNotes
     * @param string $title
     * @param string $paymentType
     * @param \StructType\AmountType $transactionPrice
     * @param \StructType\AmountType $shippingReimbursement
     * @param \StructType\AmountType $commission
     * @param \StructType\AmountType $amountPaid
     * @param string $paidTime
     * @param string $orderLineItemID
     * @param \DOMDocument $any
     */
    public function __construct($itemID = null, $transactionID = null, $orderID = null, $sellerInventoryID = null, $privateNotes = null, $title = null, $paymentType = null, \StructType\AmountType $transactionPrice = null, \StructType\AmountType $shippingReimbursement = null, \StructType\AmountType $commission = null, \StructType\AmountType $amountPaid = null, $paidTime = null, $orderLineItemID = null, \DOMDocument $any = null)
    {
        $this
            ->setItemID($itemID)
            ->setTransactionID($transactionID)
            ->setOrderID($orderID)
            ->setSellerInventoryID($sellerInventoryID)
            ->setPrivateNotes($privateNotes)
            ->setTitle($title)
            ->setPaymentType($paymentType)
            ->setTransactionPrice($transactionPrice)
            ->setShippingReimbursement($shippingReimbursement)
            ->setCommission($commission)
            ->setAmountPaid($amountPaid)
            ->setPaidTime($paidTime)
            ->setOrderLineItemID($orderLineItemID)
            ->setAny($any);
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
     * @return \StructType\SellerPaymentType
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
     * @return \StructType\SellerPaymentType
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
     * @return \StructType\SellerPaymentType
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
     * Get SellerInventoryID value
     * @return string|null
     */
    public function getSellerInventoryID()
    {
        return $this->SellerInventoryID;
    }
    /**
     * Set SellerInventoryID value
     * @param string $sellerInventoryID
     * @return \StructType\SellerPaymentType
     */
    public function setSellerInventoryID($sellerInventoryID = null)
    {
        // validation for constraint: string
        if (!is_null($sellerInventoryID) && !is_string($sellerInventoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerInventoryID, true), gettype($sellerInventoryID)), __LINE__);
        }
        $this->SellerInventoryID = $sellerInventoryID;
        return $this;
    }
    /**
     * Get PrivateNotes value
     * @return string|null
     */
    public function getPrivateNotes()
    {
        return $this->PrivateNotes;
    }
    /**
     * Set PrivateNotes value
     * @param string $privateNotes
     * @return \StructType\SellerPaymentType
     */
    public function setPrivateNotes($privateNotes = null)
    {
        // validation for constraint: string
        if (!is_null($privateNotes) && !is_string($privateNotes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($privateNotes, true), gettype($privateNotes)), __LINE__);
        }
        $this->PrivateNotes = $privateNotes;
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \StructType\SellerPaymentType
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->Title = $title;
        return $this;
    }
    /**
     * Get PaymentType value
     * @return string|null
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }
    /**
     * Set PaymentType value
     * @uses \EnumType\PaymentTypeCodeType::valueIsValid()
     * @uses \EnumType\PaymentTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentType
     * @return \StructType\SellerPaymentType
     */
    public function setPaymentType($paymentType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PaymentTypeCodeType::valueIsValid($paymentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\PaymentTypeCodeType', is_array($paymentType) ? implode(', ', $paymentType) : var_export($paymentType, true), implode(', ', \EnumType\PaymentTypeCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentType = $paymentType;
        return $this;
    }
    /**
     * Get TransactionPrice value
     * @return \StructType\AmountType|null
     */
    public function getTransactionPrice()
    {
        return $this->TransactionPrice;
    }
    /**
     * Set TransactionPrice value
     * @param \StructType\AmountType $transactionPrice
     * @return \StructType\SellerPaymentType
     */
    public function setTransactionPrice(\StructType\AmountType $transactionPrice = null)
    {
        $this->TransactionPrice = $transactionPrice;
        return $this;
    }
    /**
     * Get ShippingReimbursement value
     * @return \StructType\AmountType|null
     */
    public function getShippingReimbursement()
    {
        return $this->ShippingReimbursement;
    }
    /**
     * Set ShippingReimbursement value
     * @param \StructType\AmountType $shippingReimbursement
     * @return \StructType\SellerPaymentType
     */
    public function setShippingReimbursement(\StructType\AmountType $shippingReimbursement = null)
    {
        $this->ShippingReimbursement = $shippingReimbursement;
        return $this;
    }
    /**
     * Get Commission value
     * @return \StructType\AmountType|null
     */
    public function getCommission()
    {
        return $this->Commission;
    }
    /**
     * Set Commission value
     * @param \StructType\AmountType $commission
     * @return \StructType\SellerPaymentType
     */
    public function setCommission(\StructType\AmountType $commission = null)
    {
        $this->Commission = $commission;
        return $this;
    }
    /**
     * Get AmountPaid value
     * @return \StructType\AmountType|null
     */
    public function getAmountPaid()
    {
        return $this->AmountPaid;
    }
    /**
     * Set AmountPaid value
     * @param \StructType\AmountType $amountPaid
     * @return \StructType\SellerPaymentType
     */
    public function setAmountPaid(\StructType\AmountType $amountPaid = null)
    {
        $this->AmountPaid = $amountPaid;
        return $this;
    }
    /**
     * Get PaidTime value
     * @return string|null
     */
    public function getPaidTime()
    {
        return $this->PaidTime;
    }
    /**
     * Set PaidTime value
     * @param string $paidTime
     * @return \StructType\SellerPaymentType
     */
    public function setPaidTime($paidTime = null)
    {
        // validation for constraint: string
        if (!is_null($paidTime) && !is_string($paidTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paidTime, true), gettype($paidTime)), __LINE__);
        }
        $this->PaidTime = $paidTime;
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
     * @return \StructType\SellerPaymentType
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
     * @return \StructType\SellerPaymentType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
