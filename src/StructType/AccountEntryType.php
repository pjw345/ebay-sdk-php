<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountEntryType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>AccountEntry</b> container returned in the <b>GetAccount</b> response. Each <b>AccountEntry</b> container consists of detailed information for a single credit or debit transaction, or an administrative action
 * which occurred on the eBay user's account.
 * @subpackage Structs
 */
class AccountEntryType extends AbstractStructBase
{
    /**
     * The AccountDetailsEntryType
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the type of transaction or administrative action that occurred on the eBay user's account. Possible values are defined in the <b>AccountDetailEntryCodeType</b> enumerated type.
     * - minOccurs: 0
     * @var string
     */
    public $AccountDetailsEntryType;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: The category of the monetary transaction or administrative action applied to an eBay account.
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Balance
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer returned. If the eBay user has an outstanding balance owed to eBay, the owed amount will be displayed in the <b>AccountSummary.CurrentBalance</b> field in the <b>GetAccount</b> response.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $Balance;
    /**
     * The Date
     * Meta information extracted from the WSDL
     * - documentation: Timestamp indicating the date and time that the entry was posted to the account, in GMT.
     * - minOccurs: 0
     * @var string
     */
    public $Date;
    /**
     * The GrossDetailAmount
     * Meta information extracted from the WSDL
     * - documentation: Gross fees that are assessed by eBay (net fees plus VAT, if any). Returned even if VAT does not apply. The value is positive for debits and negative for credits.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $GrossDetailAmount;
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: If the account entry is associated with an eBay listing, this field shows the eBay <b>ItemID</b> value. If there is no correlation between the account entry and one of the user's eBay listings, '0' is returned in this field. | Type
     * that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The Memo
     * Meta information extracted from the WSDL
     * - documentation: Memo line for the account entry. It can be an empty string.
     * - minOccurs: 0
     * @var string
     */
    public $Memo;
    /**
     * The ConversionRate
     * Meta information extracted from the WSDL
     * - documentation: The rate used for the currency conversion for a transaction.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $ConversionRate;
    /**
     * The NetDetailAmount
     * Meta information extracted from the WSDL
     * - documentation: Net fees that are assessed by eBay, excluding additional surcharges and VAT (if any). Returned even if VAT does not apply. The value is positive for debits (user pays eBay) and negative for credits (eBay pays user).
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $NetDetailAmount;
    /**
     * The RefNumber
     * Meta information extracted from the WSDL
     * - documentation: This value is the unique identifier for the account entry. This value is created by eBay once the transaction occurs on the user's account.
     * - minOccurs: 0
     * @var string
     */
    public $RefNumber;
    /**
     * The VATPercent
     * Meta information extracted from the WSDL
     * - documentation: The applicable rate that was used to calculate the VAT (Value-Added Tax) for the transaction. When the <b>VATPercent</b> is specified for a listing, the item's VAT information appears on the View Item page. In addition, the seller
     * can choose to print an invoice that includes the item's net price, VAT percent, VAT amount, and total price. Since VAT rates vary depending on the item and on the user's country of residence, a seller is responsible for entering the correct VAT rate;
     * it is not calculated by eBay. VAT is only applicable to sellers located in a European Union (EU) country. If VAT does not apply to the account entry, this field is still returned but it's value will be '0'.
     * - minOccurs: 0
     * @var float
     */
    public $VATPercent;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - documentation: A description or comment about the monetary transaction or administrative action applied to an eBay user account.
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * The OrderLineItemID
     * Meta information extracted from the WSDL
     * - documentation: <b>OrderLineItemID</b> is a unique identifier for an eBay order line item. This field is only returned if the account entry is associated with an order line item.
     * - minOccurs: 0
     * @var string
     */
    public $OrderLineItemID;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of an order line item. This field is only returned if the account entry is associated with an order line item.
     * - minOccurs: 0
     * @var string
     */
    public $TransactionID;
    /**
     * The ReceivedTopRatedDiscount
     * Meta information extracted from the WSDL
     * - documentation: This boolean field is returned as <code>true</code> if the seller received a discount on the Final Value Fee for the order line item. Only Top-Rated sellers are eligible for this Final Value Fee discount. The Final Value Fee discount
     * percentage varies by country. For more information on becoming a Top-Rated Seller in the US and the requirements for Top-Rated Plus listings, see the <a
     * href="https://www.ebay.com/help/selling/seller-levels-performance-standards/seller-levels-performance-standards?id=4080" target="_blank">Becoming a Top Rated Seller</a> help topic. <br/><br/> This field will not be returned until eBay bills the
     * seller for the Final Value Fee for the eligible order line item.
     * - minOccurs: 0
     * @var bool
     */
    public $ReceivedTopRatedDiscount;
    /**
     * The OrderId
     * Meta information extracted from the WSDL
     * - documentation: This field is returned if the account fee or credit is associated with an entire (single or multiple line item) order, and not necessarily for a single line item within the order. <br/><br/> <span class="tablenote"><b>Note: </b> In
     * June 2019, eBay introduced a new order ID format, but allowed developers/sellers to decide whether to immediately adopt the new format, or to continue working with the old format. Users who wanted to adopt the new format, could either use a Trading
     * WSDL Version 1113 (or newer), or they could even use an older Trading WSDL but set the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to <code>1113</code> in API calls. <b>Beginning in June 2020, only the new order ID format will be returned
     * in response payloads for paid orders, regardless of the WSDL version number or compatibility level.</b> <br><br> Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to
     * this scenario, all calls that accept Order ID values as filters in the request payload, including the <b>GetAccount</b> call, will support the identifiers for both unpaid and paid orders. The new order ID format is a non-parsable string, globally
     * unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and
     * used/referenced by the buyer and eBay customer support. <br><br> Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or
     * <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment. </span>
     * - minOccurs: 0
     * @var string
     */
    public $OrderId;
    /**
     * The DiscountDetail
     * Meta information extracted from the WSDL
     * - documentation: This container is an array of one or more discounts applied to the corresponding accounty entry. This container will not be returned if there are no discounts applied to the corresponding accounty entry.
     * @var \StructType\DiscountDetailType
     */
    public $DiscountDetail;
    /**
     * The Netted
     * Meta information extracted from the WSDL
     * - documentation: This boolean field is returned with each account entry if the <b>IncludeNettedEntries</b> field is included in the request and set to <code>true</code>. The value indicates whether or not the corresponding account entry value (charge
     * or credit) is a part of the 'Total Netted Charge Amount' or 'Total Netted Credit Amount' values returned in the <b>AccountSummary.NettedTransactionSummary</b> container. <br> <br> If this value is <code>true</code>, it indicates that the
     * corresponding fee was deducted from a seller payout. If the value is <code>false</code>, it indicates that the fee or credit was invoiced to the seller instead. <br> <br> <span class="tablenote"><b>Note: </b> For seller accounts not yet enabled for
     * eBay managed payments, the returned value will always be <code>false</code>. There may also be some seller accounts enabled for managed payments, but the fee netting mechanism may not yet be available for an account. A seller can check their status
     * for the fee netting mechanism by checking the value in the <b>FeeNettingStatus</b> field. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $Netted;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for AccountEntryType
     * @uses AccountEntryType::setAccountDetailsEntryType()
     * @uses AccountEntryType::setDescription()
     * @uses AccountEntryType::setBalance()
     * @uses AccountEntryType::setDate()
     * @uses AccountEntryType::setGrossDetailAmount()
     * @uses AccountEntryType::setItemID()
     * @uses AccountEntryType::setMemo()
     * @uses AccountEntryType::setConversionRate()
     * @uses AccountEntryType::setNetDetailAmount()
     * @uses AccountEntryType::setRefNumber()
     * @uses AccountEntryType::setVATPercent()
     * @uses AccountEntryType::setTitle()
     * @uses AccountEntryType::setOrderLineItemID()
     * @uses AccountEntryType::setTransactionID()
     * @uses AccountEntryType::setReceivedTopRatedDiscount()
     * @uses AccountEntryType::setOrderId()
     * @uses AccountEntryType::setDiscountDetail()
     * @uses AccountEntryType::setNetted()
     * @uses AccountEntryType::setAny()
     * @param string $accountDetailsEntryType
     * @param string $description
     * @param \StructType\AmountType $balance
     * @param string $date
     * @param \StructType\AmountType $grossDetailAmount
     * @param string $itemID
     * @param string $memo
     * @param \StructType\AmountType $conversionRate
     * @param \StructType\AmountType $netDetailAmount
     * @param string $refNumber
     * @param float $vATPercent
     * @param string $title
     * @param string $orderLineItemID
     * @param string $transactionID
     * @param bool $receivedTopRatedDiscount
     * @param string $orderId
     * @param \StructType\DiscountDetailType $discountDetail
     * @param bool $netted
     * @param \DOMDocument $any
     */
    public function __construct($accountDetailsEntryType = null, $description = null, \StructType\AmountType $balance = null, $date = null, \StructType\AmountType $grossDetailAmount = null, $itemID = null, $memo = null, \StructType\AmountType $conversionRate = null, \StructType\AmountType $netDetailAmount = null, $refNumber = null, $vATPercent = null, $title = null, $orderLineItemID = null, $transactionID = null, $receivedTopRatedDiscount = null, $orderId = null, \StructType\DiscountDetailType $discountDetail = null, $netted = null, \DOMDocument $any = null)
    {
        $this
            ->setAccountDetailsEntryType($accountDetailsEntryType)
            ->setDescription($description)
            ->setBalance($balance)
            ->setDate($date)
            ->setGrossDetailAmount($grossDetailAmount)
            ->setItemID($itemID)
            ->setMemo($memo)
            ->setConversionRate($conversionRate)
            ->setNetDetailAmount($netDetailAmount)
            ->setRefNumber($refNumber)
            ->setVATPercent($vATPercent)
            ->setTitle($title)
            ->setOrderLineItemID($orderLineItemID)
            ->setTransactionID($transactionID)
            ->setReceivedTopRatedDiscount($receivedTopRatedDiscount)
            ->setOrderId($orderId)
            ->setDiscountDetail($discountDetail)
            ->setNetted($netted)
            ->setAny($any);
    }
    /**
     * Get AccountDetailsEntryType value
     * @return string|null
     */
    public function getAccountDetailsEntryType()
    {
        return $this->AccountDetailsEntryType;
    }
    /**
     * Set AccountDetailsEntryType value
     * @uses \EnumType\AccountDetailEntryCodeType::valueIsValid()
     * @uses \EnumType\AccountDetailEntryCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $accountDetailsEntryType
     * @return \StructType\AccountEntryType
     */
    public function setAccountDetailsEntryType($accountDetailsEntryType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\AccountDetailEntryCodeType::valueIsValid($accountDetailsEntryType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\AccountDetailEntryCodeType', is_array($accountDetailsEntryType) ? implode(', ', $accountDetailsEntryType) : var_export($accountDetailsEntryType, true), implode(', ', \EnumType\AccountDetailEntryCodeType::getValidValues())), __LINE__);
        }
        $this->AccountDetailsEntryType = $accountDetailsEntryType;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \StructType\AccountEntryType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Balance value
     * @return \StructType\AmountType|null
     */
    public function getBalance()
    {
        return $this->Balance;
    }
    /**
     * Set Balance value
     * @param \StructType\AmountType $balance
     * @return \StructType\AccountEntryType
     */
    public function setBalance(\StructType\AmountType $balance = null)
    {
        $this->Balance = $balance;
        return $this;
    }
    /**
     * Get Date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \StructType\AccountEntryType
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->Date = $date;
        return $this;
    }
    /**
     * Get GrossDetailAmount value
     * @return \StructType\AmountType|null
     */
    public function getGrossDetailAmount()
    {
        return $this->GrossDetailAmount;
    }
    /**
     * Set GrossDetailAmount value
     * @param \StructType\AmountType $grossDetailAmount
     * @return \StructType\AccountEntryType
     */
    public function setGrossDetailAmount(\StructType\AmountType $grossDetailAmount = null)
    {
        $this->GrossDetailAmount = $grossDetailAmount;
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
     * @return \StructType\AccountEntryType
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
     * Get Memo value
     * @return string|null
     */
    public function getMemo()
    {
        return $this->Memo;
    }
    /**
     * Set Memo value
     * @param string $memo
     * @return \StructType\AccountEntryType
     */
    public function setMemo($memo = null)
    {
        // validation for constraint: string
        if (!is_null($memo) && !is_string($memo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($memo, true), gettype($memo)), __LINE__);
        }
        $this->Memo = $memo;
        return $this;
    }
    /**
     * Get ConversionRate value
     * @return \StructType\AmountType|null
     */
    public function getConversionRate()
    {
        return $this->ConversionRate;
    }
    /**
     * Set ConversionRate value
     * @param \StructType\AmountType $conversionRate
     * @return \StructType\AccountEntryType
     */
    public function setConversionRate(\StructType\AmountType $conversionRate = null)
    {
        $this->ConversionRate = $conversionRate;
        return $this;
    }
    /**
     * Get NetDetailAmount value
     * @return \StructType\AmountType|null
     */
    public function getNetDetailAmount()
    {
        return $this->NetDetailAmount;
    }
    /**
     * Set NetDetailAmount value
     * @param \StructType\AmountType $netDetailAmount
     * @return \StructType\AccountEntryType
     */
    public function setNetDetailAmount(\StructType\AmountType $netDetailAmount = null)
    {
        $this->NetDetailAmount = $netDetailAmount;
        return $this;
    }
    /**
     * Get RefNumber value
     * @return string|null
     */
    public function getRefNumber()
    {
        return $this->RefNumber;
    }
    /**
     * Set RefNumber value
     * @param string $refNumber
     * @return \StructType\AccountEntryType
     */
    public function setRefNumber($refNumber = null)
    {
        // validation for constraint: string
        if (!is_null($refNumber) && !is_string($refNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refNumber, true), gettype($refNumber)), __LINE__);
        }
        $this->RefNumber = $refNumber;
        return $this;
    }
    /**
     * Get VATPercent value
     * @return float|null
     */
    public function getVATPercent()
    {
        return $this->VATPercent;
    }
    /**
     * Set VATPercent value
     * @param float $vATPercent
     * @return \StructType\AccountEntryType
     */
    public function setVATPercent($vATPercent = null)
    {
        // validation for constraint: float
        if (!is_null($vATPercent) && !(is_float($vATPercent) || is_numeric($vATPercent))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vATPercent, true), gettype($vATPercent)), __LINE__);
        }
        $this->VATPercent = $vATPercent;
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
     * @return \StructType\AccountEntryType
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
     * @return \StructType\AccountEntryType
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
     * @return \StructType\AccountEntryType
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
     * Get ReceivedTopRatedDiscount value
     * @return bool|null
     */
    public function getReceivedTopRatedDiscount()
    {
        return $this->ReceivedTopRatedDiscount;
    }
    /**
     * Set ReceivedTopRatedDiscount value
     * @param bool $receivedTopRatedDiscount
     * @return \StructType\AccountEntryType
     */
    public function setReceivedTopRatedDiscount($receivedTopRatedDiscount = null)
    {
        // validation for constraint: boolean
        if (!is_null($receivedTopRatedDiscount) && !is_bool($receivedTopRatedDiscount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($receivedTopRatedDiscount, true), gettype($receivedTopRatedDiscount)), __LINE__);
        }
        $this->ReceivedTopRatedDiscount = $receivedTopRatedDiscount;
        return $this;
    }
    /**
     * Get OrderId value
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->OrderId;
    }
    /**
     * Set OrderId value
     * @param string $orderId
     * @return \StructType\AccountEntryType
     */
    public function setOrderId($orderId = null)
    {
        // validation for constraint: string
        if (!is_null($orderId) && !is_string($orderId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->OrderId = $orderId;
        return $this;
    }
    /**
     * Get DiscountDetail value
     * @return \StructType\DiscountDetailType|null
     */
    public function getDiscountDetail()
    {
        return $this->DiscountDetail;
    }
    /**
     * Set DiscountDetail value
     * @param \StructType\DiscountDetailType $discountDetail
     * @return \StructType\AccountEntryType
     */
    public function setDiscountDetail(\StructType\DiscountDetailType $discountDetail = null)
    {
        $this->DiscountDetail = $discountDetail;
        return $this;
    }
    /**
     * Get Netted value
     * @return bool|null
     */
    public function getNetted()
    {
        return $this->Netted;
    }
    /**
     * Set Netted value
     * @param bool $netted
     * @return \StructType\AccountEntryType
     */
    public function setNetted($netted = null)
    {
        // validation for constraint: boolean
        if (!is_null($netted) && !is_bool($netted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($netted, true), gettype($netted)), __LINE__);
        }
        $this->Netted = $netted;
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
     * @return \StructType\AccountEntryType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AccountEntryType
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
