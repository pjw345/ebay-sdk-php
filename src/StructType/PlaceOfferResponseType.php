<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PlaceOfferResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The <b>PlaceOffer</b> response notifies you about the success and result of the call.
 * @subpackage Structs
 */
class PlaceOfferResponseType extends AbstractResponseType
{
    /**
     * The SellingStatus
     * Meta information extracted from the WSDL
     * - documentation: This container indicates the current bidding/purchase state of the order line item regarding the offer extended using <b>PlaceOffer</b>. The fields that are returned under this container will depend on the attempted action and the
     * results of that action.
     * - minOccurs: 0
     * @var \StructType\SellingStatusType
     */
    public $SellingStatus;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for an eBay order line item. The <b>TransactionID</b> field is only returned if the <b>Offer.Action</b> field was set to <b>Purchase</b> in the input and the purchase was successful. A Purchase action in
     * <b>PlaceOffer</b> can be used for a fixed-price listing, or for an auction listing where the Buy It Now option is available.
     * - minOccurs: 0
     * @var string
     */
    public $TransactionID;
    /**
     * The BestOffer
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of the status for a Best Offer. This container is only returned if applicable based on the listing and the value set for <b>Offer.Action</b> field in the request.
     * - minOccurs: 0
     * @var \StructType\BestOfferType
     */
    public $BestOffer;
    /**
     * The OrderLineItemID
     * Meta information extracted from the WSDL
     * - documentation: <b>OrderLineItemID</b> is a unique identifier for an eBay order line item. The <b>OrderLineItemID</b> field is only returned if the <b>Offer.Action</b> field is set to <b>Purchase</b> in the input and the purchase is successful. A
     * Purchase action in <b>PlaceOffer</b> can be used for a fixed-price listing, or for an auction listing where the Buy It Now option is available. <br>
     * - minOccurs: 0
     * @var string
     */
    public $OrderLineItemID;
    /**
     * Constructor method for PlaceOfferResponseType
     * @uses PlaceOfferResponseType::setSellingStatus()
     * @uses PlaceOfferResponseType::setTransactionID()
     * @uses PlaceOfferResponseType::setBestOffer()
     * @uses PlaceOfferResponseType::setOrderLineItemID()
     * @param \StructType\SellingStatusType $sellingStatus
     * @param string $transactionID
     * @param \StructType\BestOfferType $bestOffer
     * @param string $orderLineItemID
     */
    public function __construct(\StructType\SellingStatusType $sellingStatus = null, $transactionID = null, \StructType\BestOfferType $bestOffer = null, $orderLineItemID = null)
    {
        $this
            ->setSellingStatus($sellingStatus)
            ->setTransactionID($transactionID)
            ->setBestOffer($bestOffer)
            ->setOrderLineItemID($orderLineItemID);
    }
    /**
     * Get SellingStatus value
     * @return \StructType\SellingStatusType|null
     */
    public function getSellingStatus()
    {
        return $this->SellingStatus;
    }
    /**
     * Set SellingStatus value
     * @param \StructType\SellingStatusType $sellingStatus
     * @return \StructType\PlaceOfferResponseType
     */
    public function setSellingStatus(\StructType\SellingStatusType $sellingStatus = null)
    {
        $this->SellingStatus = $sellingStatus;
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
     * @return \StructType\PlaceOfferResponseType
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
     * Get BestOffer value
     * @return \StructType\BestOfferType|null
     */
    public function getBestOffer()
    {
        return $this->BestOffer;
    }
    /**
     * Set BestOffer value
     * @param \StructType\BestOfferType $bestOffer
     * @return \StructType\PlaceOfferResponseType
     */
    public function setBestOffer(\StructType\BestOfferType $bestOffer = null)
    {
        $this->BestOffer = $bestOffer;
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
     * @return \StructType\PlaceOfferResponseType
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
