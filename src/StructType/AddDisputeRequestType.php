<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddDisputeRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Enables a seller to create an Unpaid Item case against a buyer, or to cancel a single line item order. <br> <br> Although the seller is eligible to open up an Unpaid Item case two days after the buyer purchases the item or wins the
 * item through an auction, it is recommended that the seller contact the buyer first to try and make it right before opening a case. The <a href="http://pages.ebay.com/help/sell/unpaid-items.html" target="_blank">Unpaid Items</a> help page talks more
 * about how a seller should handle an unpaid item. <br> <br> To cancel a multiple line item order programmatically, the seller would have to use the <a href="https://developer.ebay.com/Devzone/post-order/post-order_v2_cancellation__post.html"
 * target="_blank">POST /post-order/v2/cancellation</a> call of the <b>Post-Order API</b>.
 * @subpackage Structs
 */
class AddDisputeRequestType extends AbstractRequestType
{
    /**
     * The DisputeExplanation
     * Meta information extracted from the WSDL
     * - documentation: This enumerated value gives the explanation of why the seller opened a case (or why seller canceled a single line item order). Not all values contained in <b>DisputeExplanationCodeType</b> are allowed in the <b>AddDispute</b> call,
     * and the values that are allowed must match the <b>DisputeReason</b> value.
     * - minOccurs: 0
     * @var string
     */
    public $DisputeExplanation;
    /**
     * The DisputeReason
     * Meta information extracted from the WSDL
     * - documentation: The enumeration value passed into this required field will depend on the action being taken. The seller will pass in <code>BuyerHasNotPaid</code> if the seller is creating an Unpaid Item case against the buyer, or
     * <code>TransactionMutuallyCanceled</code> if the seller is cancelling a single line item order at the request of the buyer, or if the seller has ran out of stock on the item or otherwise cannot fulfill the order.
     * - minOccurs: 0
     * @var string
     */
    public $DisputeReason;
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier of an eBay listing. To identify a specific order line item, either an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value must be passed in the request. So, unless <b>OrderLineItemID</b> is
     * used, this field is required. <br> | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of a buyer's purchase. A <b>TransactionID</b> is created by eBay once a buyer purchases the item through a fixed-priced listing or by using the Buy It Now feature in an auction listing, or when an auction
     * listing ends with a winning bidder. To identify a specific order line item, either an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value must be passed in the request. So, unless <b>OrderLineItemID</b> is used, this field is
     * required. <br>
     * - minOccurs: 0
     * @var string
     */
    public $TransactionID;
    /**
     * The OrderLineItemID
     * Meta information extracted from the WSDL
     * - documentation: <b>OrderLineItemID</b> is a unique identifier of an order line item. To identify a specific order line item, either an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value must be passed in the request. So,
     * unless <b>ItemID</b>/<b>TransactionID</b> pair is used, this field is required. <br>
     * - minOccurs: 0
     * @var string
     */
    public $OrderLineItemID;
    /**
     * Constructor method for AddDisputeRequestType
     * @uses AddDisputeRequestType::setDisputeExplanation()
     * @uses AddDisputeRequestType::setDisputeReason()
     * @uses AddDisputeRequestType::setItemID()
     * @uses AddDisputeRequestType::setTransactionID()
     * @uses AddDisputeRequestType::setOrderLineItemID()
     * @param string $disputeExplanation
     * @param string $disputeReason
     * @param string $itemID
     * @param string $transactionID
     * @param string $orderLineItemID
     */
    public function __construct($disputeExplanation = null, $disputeReason = null, $itemID = null, $transactionID = null, $orderLineItemID = null)
    {
        $this
            ->setDisputeExplanation($disputeExplanation)
            ->setDisputeReason($disputeReason)
            ->setItemID($itemID)
            ->setTransactionID($transactionID)
            ->setOrderLineItemID($orderLineItemID);
    }
    /**
     * Get DisputeExplanation value
     * @return string|null
     */
    public function getDisputeExplanation()
    {
        return $this->DisputeExplanation;
    }
    /**
     * Set DisputeExplanation value
     * @uses \EnumType\DisputeExplanationCodeType::valueIsValid()
     * @uses \EnumType\DisputeExplanationCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $disputeExplanation
     * @return \StructType\AddDisputeRequestType
     */
    public function setDisputeExplanation($disputeExplanation = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DisputeExplanationCodeType::valueIsValid($disputeExplanation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DisputeExplanationCodeType', is_array($disputeExplanation) ? implode(', ', $disputeExplanation) : var_export($disputeExplanation, true), implode(', ', \EnumType\DisputeExplanationCodeType::getValidValues())), __LINE__);
        }
        $this->DisputeExplanation = $disputeExplanation;
        return $this;
    }
    /**
     * Get DisputeReason value
     * @return string|null
     */
    public function getDisputeReason()
    {
        return $this->DisputeReason;
    }
    /**
     * Set DisputeReason value
     * @uses \EnumType\DisputeReasonCodeType::valueIsValid()
     * @uses \EnumType\DisputeReasonCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $disputeReason
     * @return \StructType\AddDisputeRequestType
     */
    public function setDisputeReason($disputeReason = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DisputeReasonCodeType::valueIsValid($disputeReason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DisputeReasonCodeType', is_array($disputeReason) ? implode(', ', $disputeReason) : var_export($disputeReason, true), implode(', ', \EnumType\DisputeReasonCodeType::getValidValues())), __LINE__);
        }
        $this->DisputeReason = $disputeReason;
        return $this;
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
     * @return \StructType\AddDisputeRequestType
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
     * @return \StructType\AddDisputeRequestType
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
     * @return \StructType\AddDisputeRequestType
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
