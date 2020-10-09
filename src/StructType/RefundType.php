<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefundType StructType
 * Meta information extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> This type is only used for Half.com order refunds, and since the Half.com site has been shut down, this type will also be deprecated. </span> Contains information about a single Half.com refund.
 * @subpackage Structs
 */
class RefundType extends AbstractStructBase
{
    /**
     * The RefundFromSeller
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span> Total amount refunded by the seller for this order line item.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $RefundFromSeller;
    /**
     * The TotalRefundToBuyer
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span> Total amount refunded to the buyer for this order line item.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $TotalRefundToBuyer;
    /**
     * The RefundTime
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span> The date and time at which the refund was issued.
     * - minOccurs: 0
     * @var string
     */
    public $RefundTime;
    /**
     * The RefundID
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span> The unique identifier of the refund. <br/><br/> <b>For GetOrders,
     * GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version
     * 1019, the real refund identifier is only returned to the buyer or seller, and a string value of <code>Unavailable</code> will be returned to all third parties.
     * - minOccurs: 0
     * @var string
     */
    public $RefundID;
    /**
     * The RefundTransactionArray
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span>
     * - minOccurs: 0
     * @var \StructType\RefundTransactionArrayType
     */
    public $RefundTransactionArray;
    /**
     * The RefundAmount
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span> The total amount of the refund requested.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $RefundAmount;
    /**
     * The RefundStatus
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span>
     * - minOccurs: 0
     * @var string
     */
    public $RefundStatus;
    /**
     * The RefundFailureReason
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span>
     * - minOccurs: 0
     * @var \StructType\RefundFailureReasonType
     */
    public $RefundFailureReason;
    /**
     * The RefundFundingSourceArray
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span>
     * - minOccurs: 0
     * @var \StructType\RefundFundingSourceArrayType
     */
    public $RefundFundingSourceArray;
    /**
     * The ExternalReferenceID
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span>
     * - minOccurs: 0
     * @var string
     */
    public $ExternalReferenceID;
    /**
     * The RefundRequestedTime
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span>
     * - minOccurs: 0
     * @var string
     */
    public $RefundRequestedTime;
    /**
     * The RefundCompletionTime
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span>
     * - minOccurs: 0
     * @var string
     */
    public $RefundCompletionTime;
    /**
     * The EstimatedRefundCompletionTime
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span>
     * - minOccurs: 0
     * @var string
     */
    public $EstimatedRefundCompletionTime;
    /**
     * The SellerNoteToBuyer
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span>
     * - minOccurs: 0
     * @var string
     */
    public $SellerNoteToBuyer;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for RefundType
     * @uses RefundType::setRefundFromSeller()
     * @uses RefundType::setTotalRefundToBuyer()
     * @uses RefundType::setRefundTime()
     * @uses RefundType::setRefundID()
     * @uses RefundType::setRefundTransactionArray()
     * @uses RefundType::setRefundAmount()
     * @uses RefundType::setRefundStatus()
     * @uses RefundType::setRefundFailureReason()
     * @uses RefundType::setRefundFundingSourceArray()
     * @uses RefundType::setExternalReferenceID()
     * @uses RefundType::setRefundRequestedTime()
     * @uses RefundType::setRefundCompletionTime()
     * @uses RefundType::setEstimatedRefundCompletionTime()
     * @uses RefundType::setSellerNoteToBuyer()
     * @uses RefundType::setAny()
     * @param \StructType\AmountType $refundFromSeller
     * @param \StructType\AmountType $totalRefundToBuyer
     * @param string $refundTime
     * @param string $refundID
     * @param \StructType\RefundTransactionArrayType $refundTransactionArray
     * @param \StructType\AmountType $refundAmount
     * @param string $refundStatus
     * @param \StructType\RefundFailureReasonType $refundFailureReason
     * @param \StructType\RefundFundingSourceArrayType $refundFundingSourceArray
     * @param string $externalReferenceID
     * @param string $refundRequestedTime
     * @param string $refundCompletionTime
     * @param string $estimatedRefundCompletionTime
     * @param string $sellerNoteToBuyer
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\AmountType $refundFromSeller = null, \StructType\AmountType $totalRefundToBuyer = null, $refundTime = null, $refundID = null, \StructType\RefundTransactionArrayType $refundTransactionArray = null, \StructType\AmountType $refundAmount = null, $refundStatus = null, \StructType\RefundFailureReasonType $refundFailureReason = null, \StructType\RefundFundingSourceArrayType $refundFundingSourceArray = null, $externalReferenceID = null, $refundRequestedTime = null, $refundCompletionTime = null, $estimatedRefundCompletionTime = null, $sellerNoteToBuyer = null, \DOMDocument $any = null)
    {
        $this
            ->setRefundFromSeller($refundFromSeller)
            ->setTotalRefundToBuyer($totalRefundToBuyer)
            ->setRefundTime($refundTime)
            ->setRefundID($refundID)
            ->setRefundTransactionArray($refundTransactionArray)
            ->setRefundAmount($refundAmount)
            ->setRefundStatus($refundStatus)
            ->setRefundFailureReason($refundFailureReason)
            ->setRefundFundingSourceArray($refundFundingSourceArray)
            ->setExternalReferenceID($externalReferenceID)
            ->setRefundRequestedTime($refundRequestedTime)
            ->setRefundCompletionTime($refundCompletionTime)
            ->setEstimatedRefundCompletionTime($estimatedRefundCompletionTime)
            ->setSellerNoteToBuyer($sellerNoteToBuyer)
            ->setAny($any);
    }
    /**
     * Get RefundFromSeller value
     * @return \StructType\AmountType|null
     */
    public function getRefundFromSeller()
    {
        return $this->RefundFromSeller;
    }
    /**
     * Set RefundFromSeller value
     * @param \StructType\AmountType $refundFromSeller
     * @return \StructType\RefundType
     */
    public function setRefundFromSeller(\StructType\AmountType $refundFromSeller = null)
    {
        $this->RefundFromSeller = $refundFromSeller;
        return $this;
    }
    /**
     * Get TotalRefundToBuyer value
     * @return \StructType\AmountType|null
     */
    public function getTotalRefundToBuyer()
    {
        return $this->TotalRefundToBuyer;
    }
    /**
     * Set TotalRefundToBuyer value
     * @param \StructType\AmountType $totalRefundToBuyer
     * @return \StructType\RefundType
     */
    public function setTotalRefundToBuyer(\StructType\AmountType $totalRefundToBuyer = null)
    {
        $this->TotalRefundToBuyer = $totalRefundToBuyer;
        return $this;
    }
    /**
     * Get RefundTime value
     * @return string|null
     */
    public function getRefundTime()
    {
        return $this->RefundTime;
    }
    /**
     * Set RefundTime value
     * @param string $refundTime
     * @return \StructType\RefundType
     */
    public function setRefundTime($refundTime = null)
    {
        // validation for constraint: string
        if (!is_null($refundTime) && !is_string($refundTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refundTime, true), gettype($refundTime)), __LINE__);
        }
        $this->RefundTime = $refundTime;
        return $this;
    }
    /**
     * Get RefundID value
     * @return string|null
     */
    public function getRefundID()
    {
        return $this->RefundID;
    }
    /**
     * Set RefundID value
     * @param string $refundID
     * @return \StructType\RefundType
     */
    public function setRefundID($refundID = null)
    {
        // validation for constraint: string
        if (!is_null($refundID) && !is_string($refundID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refundID, true), gettype($refundID)), __LINE__);
        }
        $this->RefundID = $refundID;
        return $this;
    }
    /**
     * Get RefundTransactionArray value
     * @return \StructType\RefundTransactionArrayType|null
     */
    public function getRefundTransactionArray()
    {
        return $this->RefundTransactionArray;
    }
    /**
     * Set RefundTransactionArray value
     * @param \StructType\RefundTransactionArrayType $refundTransactionArray
     * @return \StructType\RefundType
     */
    public function setRefundTransactionArray(\StructType\RefundTransactionArrayType $refundTransactionArray = null)
    {
        $this->RefundTransactionArray = $refundTransactionArray;
        return $this;
    }
    /**
     * Get RefundAmount value
     * @return \StructType\AmountType|null
     */
    public function getRefundAmount()
    {
        return $this->RefundAmount;
    }
    /**
     * Set RefundAmount value
     * @param \StructType\AmountType $refundAmount
     * @return \StructType\RefundType
     */
    public function setRefundAmount(\StructType\AmountType $refundAmount = null)
    {
        $this->RefundAmount = $refundAmount;
        return $this;
    }
    /**
     * Get RefundStatus value
     * @return string|null
     */
    public function getRefundStatus()
    {
        return $this->RefundStatus;
    }
    /**
     * Set RefundStatus value
     * @uses \EnumType\RefundStatusCodeType::valueIsValid()
     * @uses \EnumType\RefundStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $refundStatus
     * @return \StructType\RefundType
     */
    public function setRefundStatus($refundStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\RefundStatusCodeType::valueIsValid($refundStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\RefundStatusCodeType', is_array($refundStatus) ? implode(', ', $refundStatus) : var_export($refundStatus, true), implode(', ', \EnumType\RefundStatusCodeType::getValidValues())), __LINE__);
        }
        $this->RefundStatus = $refundStatus;
        return $this;
    }
    /**
     * Get RefundFailureReason value
     * @return \StructType\RefundFailureReasonType|null
     */
    public function getRefundFailureReason()
    {
        return $this->RefundFailureReason;
    }
    /**
     * Set RefundFailureReason value
     * @param \StructType\RefundFailureReasonType $refundFailureReason
     * @return \StructType\RefundType
     */
    public function setRefundFailureReason(\StructType\RefundFailureReasonType $refundFailureReason = null)
    {
        $this->RefundFailureReason = $refundFailureReason;
        return $this;
    }
    /**
     * Get RefundFundingSourceArray value
     * @return \StructType\RefundFundingSourceArrayType|null
     */
    public function getRefundFundingSourceArray()
    {
        return $this->RefundFundingSourceArray;
    }
    /**
     * Set RefundFundingSourceArray value
     * @param \StructType\RefundFundingSourceArrayType $refundFundingSourceArray
     * @return \StructType\RefundType
     */
    public function setRefundFundingSourceArray(\StructType\RefundFundingSourceArrayType $refundFundingSourceArray = null)
    {
        $this->RefundFundingSourceArray = $refundFundingSourceArray;
        return $this;
    }
    /**
     * Get ExternalReferenceID value
     * @return string|null
     */
    public function getExternalReferenceID()
    {
        return $this->ExternalReferenceID;
    }
    /**
     * Set ExternalReferenceID value
     * @param string $externalReferenceID
     * @return \StructType\RefundType
     */
    public function setExternalReferenceID($externalReferenceID = null)
    {
        // validation for constraint: string
        if (!is_null($externalReferenceID) && !is_string($externalReferenceID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalReferenceID, true), gettype($externalReferenceID)), __LINE__);
        }
        $this->ExternalReferenceID = $externalReferenceID;
        return $this;
    }
    /**
     * Get RefundRequestedTime value
     * @return string|null
     */
    public function getRefundRequestedTime()
    {
        return $this->RefundRequestedTime;
    }
    /**
     * Set RefundRequestedTime value
     * @param string $refundRequestedTime
     * @return \StructType\RefundType
     */
    public function setRefundRequestedTime($refundRequestedTime = null)
    {
        // validation for constraint: string
        if (!is_null($refundRequestedTime) && !is_string($refundRequestedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refundRequestedTime, true), gettype($refundRequestedTime)), __LINE__);
        }
        $this->RefundRequestedTime = $refundRequestedTime;
        return $this;
    }
    /**
     * Get RefundCompletionTime value
     * @return string|null
     */
    public function getRefundCompletionTime()
    {
        return $this->RefundCompletionTime;
    }
    /**
     * Set RefundCompletionTime value
     * @param string $refundCompletionTime
     * @return \StructType\RefundType
     */
    public function setRefundCompletionTime($refundCompletionTime = null)
    {
        // validation for constraint: string
        if (!is_null($refundCompletionTime) && !is_string($refundCompletionTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refundCompletionTime, true), gettype($refundCompletionTime)), __LINE__);
        }
        $this->RefundCompletionTime = $refundCompletionTime;
        return $this;
    }
    /**
     * Get EstimatedRefundCompletionTime value
     * @return string|null
     */
    public function getEstimatedRefundCompletionTime()
    {
        return $this->EstimatedRefundCompletionTime;
    }
    /**
     * Set EstimatedRefundCompletionTime value
     * @param string $estimatedRefundCompletionTime
     * @return \StructType\RefundType
     */
    public function setEstimatedRefundCompletionTime($estimatedRefundCompletionTime = null)
    {
        // validation for constraint: string
        if (!is_null($estimatedRefundCompletionTime) && !is_string($estimatedRefundCompletionTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($estimatedRefundCompletionTime, true), gettype($estimatedRefundCompletionTime)), __LINE__);
        }
        $this->EstimatedRefundCompletionTime = $estimatedRefundCompletionTime;
        return $this;
    }
    /**
     * Get SellerNoteToBuyer value
     * @return string|null
     */
    public function getSellerNoteToBuyer()
    {
        return $this->SellerNoteToBuyer;
    }
    /**
     * Set SellerNoteToBuyer value
     * @param string $sellerNoteToBuyer
     * @return \StructType\RefundType
     */
    public function setSellerNoteToBuyer($sellerNoteToBuyer = null)
    {
        // validation for constraint: string
        if (!is_null($sellerNoteToBuyer) && !is_string($sellerNoteToBuyer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerNoteToBuyer, true), gettype($sellerNoteToBuyer)), __LINE__);
        }
        $this->SellerNoteToBuyer = $sellerNoteToBuyer;
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
     * @return \StructType\RefundType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
