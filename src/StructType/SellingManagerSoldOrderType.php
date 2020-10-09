<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerSoldOrderType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains information about a sale record.
 * @subpackage Structs
 */
class SellingManagerSoldOrderType extends AbstractStructBase
{
    /**
     * The SellingManagerSoldTransaction
     * Meta information extracted from the WSDL
     * - documentation: Information about one line item in the order.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\SellingManagerSoldTransactionType[]
     */
    public $SellingManagerSoldTransaction;
    /**
     * The ShippingAddress
     * Meta information extracted from the WSDL
     * - documentation: Shipping address of a buyer.
     * - minOccurs: 0
     * @var \StructType\AddressType
     */
    public $ShippingAddress;
    /**
     * The ShippingDetails
     * Meta information extracted from the WSDL
     * - documentation: The shipping-related details for an order, including flat and calculated shipping costs and shipping insurance costs.
     * - minOccurs: 0
     * @var \StructType\ShippingDetailsType
     */
    public $ShippingDetails;
    /**
     * The CashOnDeliveryCost
     * Meta information extracted from the WSDL
     * - documentation: The cost of cash-on-delivery.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $CashOnDeliveryCost;
    /**
     * The TotalAmount
     * Meta information extracted from the WSDL
     * - documentation: Total cost in the order.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $TotalAmount;
    /**
     * The TotalQuantity
     * Meta information extracted from the WSDL
     * - documentation: Total item quantity.
     * - minOccurs: 0
     * @var int
     */
    public $TotalQuantity;
    /**
     * The ItemCost
     * Meta information extracted from the WSDL
     * - documentation: A SMPro seller can record the cost of the item, as calculated by the seller, in this field.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $ItemCost;
    /**
     * The VATRate
     * Meta information extracted from the WSDL
     * - documentation: Rate of applicable value added tax.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\VATRateType[]
     */
    public $VATRate;
    /**
     * The NetInsuranceFee
     * Meta information extracted from the WSDL
     * - documentation: Total cost of shipping insurance.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $NetInsuranceFee;
    /**
     * The VATInsuranceFee
     * Meta information extracted from the WSDL
     * - documentation: Amount of applicable value added tax insurance fee.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $VATInsuranceFee;
    /**
     * The VATShippingFee
     * Meta information extracted from the WSDL
     * - documentation: VAT shipping fee.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $VATShippingFee;
    /**
     * The NetShippingFee
     * Meta information extracted from the WSDL
     * - documentation: Total shipping fee.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $NetShippingFee;
    /**
     * The NetTotalAmount
     * Meta information extracted from the WSDL
     * - documentation: The seller records in this field a net total amount obtained according to the seller's method of calculation. This field is returned for VAT transactions only.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $NetTotalAmount;
    /**
     * The VATTotalAmount
     * Meta information extracted from the WSDL
     * - documentation: VAT total amount.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $VATTotalAmount;
    /**
     * The ActualShippingCost
     * Meta information extracted from the WSDL
     * - documentation: The shipping cost paid by the seller to ship the order line item. <br/><br/> For multiple line item orders, it is possible that one order line item will have the shipping cost and the value for the other order line item will be 0.00.
     * <br/><br/> <span class="tablenote"> <strong>Note:</strong> This is different from the field of the same name returned by GetOrders and its related calls, which contains the shipping cost paid by the buyer. </span>
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $ActualShippingCost;
    /**
     * The AdjustmentAmount
     * Meta information extracted from the WSDL
     * - documentation: Discount, or charge, to which the buyer and seller have agreed. If this value is a positive value, the amount is the extra money that the buyer pays the seller. If this value is a negative value, the amount is a discount the seller
     * gives the buyer.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $AdjustmentAmount;
    /**
     * The NotesToBuyer
     * Meta information extracted from the WSDL
     * - documentation: Notes from the seller to the buyer.
     * - minOccurs: 0
     * @var string
     */
    public $NotesToBuyer;
    /**
     * The NotesFromBuyer
     * Meta information extracted from the WSDL
     * - documentation: Notes from the buyer to the seller.
     * - minOccurs: 0
     * @var string
     */
    public $NotesFromBuyer;
    /**
     * The NotesToSeller
     * Meta information extracted from the WSDL
     * - documentation: Notes to self from seller.
     * - minOccurs: 0
     * @var string
     */
    public $NotesToSeller;
    /**
     * The OrderStatus
     * Meta information extracted from the WSDL
     * - documentation: Status of the order regarding payment, shipping, feedback, and other communications.
     * - minOccurs: 0
     * @var \StructType\SellingManagerOrderStatusType
     */
    public $OrderStatus;
    /**
     * The UnpaidItemStatus
     * Meta information extracted from the WSDL
     * - documentation: The status of an unpaid item regarding final value, state of communications between buyer and seller, and the filing of an Unpaid Item.
     * - minOccurs: 0
     * @var string
     */
    public $UnpaidItemStatus;
    /**
     * The SalePrice
     * Meta information extracted from the WSDL
     * - documentation: Amount of the accepted offer for the listing.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $SalePrice;
    /**
     * The EmailsSent
     * Meta information extracted from the WSDL
     * - documentation: Number of emails sent regarding this order.
     * - minOccurs: 0
     * @var int
     */
    public $EmailsSent;
    /**
     * The DaysSinceSale
     * Meta information extracted from the WSDL
     * - documentation: Number of days since the sale.
     * - minOccurs: 0
     * @var int
     */
    public $DaysSinceSale;
    /**
     * The BuyerID
     * Meta information extracted from the WSDL
     * - documentation: The user ID of the buyer.
     * - minOccurs: 0
     * @var string
     */
    public $BuyerID;
    /**
     * The BuyerEmail
     * Meta information extracted from the WSDL
     * - documentation: The email of the buyer.
     * - minOccurs: 0
     * @var string
     */
    public $BuyerEmail;
    /**
     * The SaleRecordID
     * Meta information extracted from the WSDL
     * - documentation: The sale record ID. Applicable to Selling Manager users. When an item is sold, Selling Manager generates a sale record. A sale record contains buyer information, shipping, and other information. A sale record is displayed in the Sold
     * view in Selling Manager. Each sale record has a sale record ID. In the following calls, the value for the sale record ID is in the SellingManagerSalesRecordNumber field: GetItemTransactions, GetSellerTransactions, GetOrders, GetOrderTransactions. In
     * the Selling Manager calls, the value for the sale record ID is in the SaleRecordID field. The sale record ID can be for single or multiple line item orders.
     * - minOccurs: 0
     * @var int
     */
    public $SaleRecordID;
    /**
     * The CreationTime
     * Meta information extracted from the WSDL
     * - documentation: The sale date.
     * - minOccurs: 0
     * @var string
     */
    public $CreationTime;
    /**
     * The RefundAmount
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer used.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $RefundAmount;
    /**
     * The RefundStatus
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer used.
     * - minOccurs: 0
     * @var string
     */
    public $RefundStatus;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellingManagerSoldOrderType
     * @uses SellingManagerSoldOrderType::setSellingManagerSoldTransaction()
     * @uses SellingManagerSoldOrderType::setShippingAddress()
     * @uses SellingManagerSoldOrderType::setShippingDetails()
     * @uses SellingManagerSoldOrderType::setCashOnDeliveryCost()
     * @uses SellingManagerSoldOrderType::setTotalAmount()
     * @uses SellingManagerSoldOrderType::setTotalQuantity()
     * @uses SellingManagerSoldOrderType::setItemCost()
     * @uses SellingManagerSoldOrderType::setVATRate()
     * @uses SellingManagerSoldOrderType::setNetInsuranceFee()
     * @uses SellingManagerSoldOrderType::setVATInsuranceFee()
     * @uses SellingManagerSoldOrderType::setVATShippingFee()
     * @uses SellingManagerSoldOrderType::setNetShippingFee()
     * @uses SellingManagerSoldOrderType::setNetTotalAmount()
     * @uses SellingManagerSoldOrderType::setVATTotalAmount()
     * @uses SellingManagerSoldOrderType::setActualShippingCost()
     * @uses SellingManagerSoldOrderType::setAdjustmentAmount()
     * @uses SellingManagerSoldOrderType::setNotesToBuyer()
     * @uses SellingManagerSoldOrderType::setNotesFromBuyer()
     * @uses SellingManagerSoldOrderType::setNotesToSeller()
     * @uses SellingManagerSoldOrderType::setOrderStatus()
     * @uses SellingManagerSoldOrderType::setUnpaidItemStatus()
     * @uses SellingManagerSoldOrderType::setSalePrice()
     * @uses SellingManagerSoldOrderType::setEmailsSent()
     * @uses SellingManagerSoldOrderType::setDaysSinceSale()
     * @uses SellingManagerSoldOrderType::setBuyerID()
     * @uses SellingManagerSoldOrderType::setBuyerEmail()
     * @uses SellingManagerSoldOrderType::setSaleRecordID()
     * @uses SellingManagerSoldOrderType::setCreationTime()
     * @uses SellingManagerSoldOrderType::setRefundAmount()
     * @uses SellingManagerSoldOrderType::setRefundStatus()
     * @uses SellingManagerSoldOrderType::setAny()
     * @param \StructType\SellingManagerSoldTransactionType[] $sellingManagerSoldTransaction
     * @param \StructType\AddressType $shippingAddress
     * @param \StructType\ShippingDetailsType $shippingDetails
     * @param \StructType\AmountType $cashOnDeliveryCost
     * @param \StructType\AmountType $totalAmount
     * @param int $totalQuantity
     * @param \StructType\AmountType $itemCost
     * @param \StructType\VATRateType[] $vATRate
     * @param \StructType\AmountType $netInsuranceFee
     * @param \StructType\AmountType $vATInsuranceFee
     * @param \StructType\AmountType $vATShippingFee
     * @param \StructType\AmountType $netShippingFee
     * @param \StructType\AmountType $netTotalAmount
     * @param \StructType\AmountType $vATTotalAmount
     * @param \StructType\AmountType $actualShippingCost
     * @param \StructType\AmountType $adjustmentAmount
     * @param string $notesToBuyer
     * @param string $notesFromBuyer
     * @param string $notesToSeller
     * @param \StructType\SellingManagerOrderStatusType $orderStatus
     * @param string $unpaidItemStatus
     * @param \StructType\AmountType $salePrice
     * @param int $emailsSent
     * @param int $daysSinceSale
     * @param string $buyerID
     * @param string $buyerEmail
     * @param int $saleRecordID
     * @param string $creationTime
     * @param \StructType\AmountType $refundAmount
     * @param string $refundStatus
     * @param \DOMDocument $any
     */
    public function __construct(array $sellingManagerSoldTransaction = array(), \StructType\AddressType $shippingAddress = null, \StructType\ShippingDetailsType $shippingDetails = null, \StructType\AmountType $cashOnDeliveryCost = null, \StructType\AmountType $totalAmount = null, $totalQuantity = null, \StructType\AmountType $itemCost = null, array $vATRate = array(), \StructType\AmountType $netInsuranceFee = null, \StructType\AmountType $vATInsuranceFee = null, \StructType\AmountType $vATShippingFee = null, \StructType\AmountType $netShippingFee = null, \StructType\AmountType $netTotalAmount = null, \StructType\AmountType $vATTotalAmount = null, \StructType\AmountType $actualShippingCost = null, \StructType\AmountType $adjustmentAmount = null, $notesToBuyer = null, $notesFromBuyer = null, $notesToSeller = null, \StructType\SellingManagerOrderStatusType $orderStatus = null, $unpaidItemStatus = null, \StructType\AmountType $salePrice = null, $emailsSent = null, $daysSinceSale = null, $buyerID = null, $buyerEmail = null, $saleRecordID = null, $creationTime = null, \StructType\AmountType $refundAmount = null, $refundStatus = null, \DOMDocument $any = null)
    {
        $this
            ->setSellingManagerSoldTransaction($sellingManagerSoldTransaction)
            ->setShippingAddress($shippingAddress)
            ->setShippingDetails($shippingDetails)
            ->setCashOnDeliveryCost($cashOnDeliveryCost)
            ->setTotalAmount($totalAmount)
            ->setTotalQuantity($totalQuantity)
            ->setItemCost($itemCost)
            ->setVATRate($vATRate)
            ->setNetInsuranceFee($netInsuranceFee)
            ->setVATInsuranceFee($vATInsuranceFee)
            ->setVATShippingFee($vATShippingFee)
            ->setNetShippingFee($netShippingFee)
            ->setNetTotalAmount($netTotalAmount)
            ->setVATTotalAmount($vATTotalAmount)
            ->setActualShippingCost($actualShippingCost)
            ->setAdjustmentAmount($adjustmentAmount)
            ->setNotesToBuyer($notesToBuyer)
            ->setNotesFromBuyer($notesFromBuyer)
            ->setNotesToSeller($notesToSeller)
            ->setOrderStatus($orderStatus)
            ->setUnpaidItemStatus($unpaidItemStatus)
            ->setSalePrice($salePrice)
            ->setEmailsSent($emailsSent)
            ->setDaysSinceSale($daysSinceSale)
            ->setBuyerID($buyerID)
            ->setBuyerEmail($buyerEmail)
            ->setSaleRecordID($saleRecordID)
            ->setCreationTime($creationTime)
            ->setRefundAmount($refundAmount)
            ->setRefundStatus($refundStatus)
            ->setAny($any);
    }
    /**
     * Get SellingManagerSoldTransaction value
     * @return \StructType\SellingManagerSoldTransactionType[]|null
     */
    public function getSellingManagerSoldTransaction()
    {
        return $this->SellingManagerSoldTransaction;
    }
    /**
     * This method is responsible for validating the values passed to the setSellingManagerSoldTransaction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSellingManagerSoldTransaction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSellingManagerSoldTransactionForArrayConstraintsFromSetSellingManagerSoldTransaction(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sellingManagerSoldOrderTypeSellingManagerSoldTransactionItem) {
            // validation for constraint: itemType
            if (!$sellingManagerSoldOrderTypeSellingManagerSoldTransactionItem instanceof \StructType\SellingManagerSoldTransactionType) {
                $invalidValues[] = is_object($sellingManagerSoldOrderTypeSellingManagerSoldTransactionItem) ? get_class($sellingManagerSoldOrderTypeSellingManagerSoldTransactionItem) : sprintf('%s(%s)', gettype($sellingManagerSoldOrderTypeSellingManagerSoldTransactionItem), var_export($sellingManagerSoldOrderTypeSellingManagerSoldTransactionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SellingManagerSoldTransaction property can only contain items of type \StructType\SellingManagerSoldTransactionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SellingManagerSoldTransaction value
     * @throws \InvalidArgumentException
     * @param \StructType\SellingManagerSoldTransactionType[] $sellingManagerSoldTransaction
     * @return \StructType\SellingManagerSoldOrderType
     */
    public function setSellingManagerSoldTransaction(array $sellingManagerSoldTransaction = array())
    {
        // validation for constraint: array
        if ('' !== ($sellingManagerSoldTransactionArrayErrorMessage = self::validateSellingManagerSoldTransactionForArrayConstraintsFromSetSellingManagerSoldTransaction($sellingManagerSoldTransaction))) {
            throw new \InvalidArgumentException($sellingManagerSoldTransactionArrayErrorMessage, __LINE__);
        }
        $this->SellingManagerSoldTransaction = $sellingManagerSoldTransaction;
        return $this;
    }
    /**
     * Add item to SellingManagerSoldTransaction value
     * @throws \InvalidArgumentException
     * @param \StructType\SellingManagerSoldTransactionType $item
     * @return \StructType\SellingManagerSoldOrderType
     */
    public function addToSellingManagerSoldTransaction(\StructType\SellingManagerSoldTransactionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\SellingManagerSoldTransactionType) {
            throw new \InvalidArgumentException(sprintf('The SellingManagerSoldTransaction property can only contain items of type \StructType\SellingManagerSoldTransactionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SellingManagerSoldTransaction[] = $item;
        return $this;
    }
    /**
     * Get ShippingAddress value
     * @return \StructType\AddressType|null
     */
    public function getShippingAddress()
    {
        return $this->ShippingAddress;
    }
    /**
     * Set ShippingAddress value
     * @param \StructType\AddressType $shippingAddress
     * @return \StructType\SellingManagerSoldOrderType
     */
    public function setShippingAddress(\StructType\AddressType $shippingAddress = null)
    {
        $this->ShippingAddress = $shippingAddress;
        return $this;
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
     * @return \StructType\SellingManagerSoldOrderType
     */
    public function setShippingDetails(\StructType\ShippingDetailsType $shippingDetails = null)
    {
        $this->ShippingDetails = $shippingDetails;
        return $this;
    }
    /**
     * Get CashOnDeliveryCost value
     * @return \StructType\AmountType|null
     */
    public function getCashOnDeliveryCost()
    {
        return $this->CashOnDeliveryCost;
    }
    /**
     * Set CashOnDeliveryCost value
     * @param \StructType\AmountType $cashOnDeliveryCost
     * @return \StructType\SellingManagerSoldOrderType
     */
    public function setCashOnDeliveryCost(\StructType\AmountType $cashOnDeliveryCost = null)
    {
        $this->CashOnDeliveryCost = $cashOnDeliveryCost;
        return $this;
    }
    /**
     * Get TotalAmount value
     * @return \StructType\AmountType|null
     */
    public function getTotalAmount()
    {
        return $this->TotalAmount;
    }
    /**
     * Set TotalAmount value
     * @param \StructType\AmountType $totalAmount
     * @return \StructType\SellingManagerSoldOrderType
     */
    public function setTotalAmount(\StructType\AmountType $totalAmount = null)
    {
        $this->TotalAmount = $totalAmount;
        return $this;
    }
    /**
     * Get TotalQuantity value
     * @return int|null
     */
    public function getTotalQuantity()
    {
        return $this->TotalQuantity;
    }
    /**
     * Set TotalQuantity value
     * @param int $totalQuantity
     * @return \StructType\SellingManagerSoldOrderType
     */
    public function setTotalQuantity($totalQuantity = null)
    {
        // validation for constraint: int
        if (!is_null($totalQuantity) && !(is_int($totalQuantity) || ctype_digit($totalQuantity))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalQuantity, true), gettype($totalQuantity)), __LINE__);
        }
        $this->TotalQuantity = $totalQuantity;
        return $this;
    }
    /**
     * Get ItemCost value
     * @return \StructType\AmountType|null
     */
    public function getItemCost()
    {
        return $this->ItemCost;
    }
    /**
     * Set ItemCost value
     * @param \StructType\AmountType $itemCost
     * @return \StructType\SellingManagerSoldOrderType
     */
    public function setItemCost(\StructType\AmountType $itemCost = null)
    {
        $this->ItemCost = $itemCost;
        return $this;
    }
    /**
     * Get VATRate value
     * @return \StructType\VATRateType[]|null
     */
    public function getVATRate()
    {
        return $this->VATRate;
    }
    /**
     * This method is responsible for validating the values passed to the setVATRate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVATRate method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVATRateForArrayConstraintsFromSetVATRate(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sellingManagerSoldOrderTypeVATRateItem) {
            // validation for constraint: itemType
            if (!$sellingManagerSoldOrderTypeVATRateItem instanceof \StructType\VATRateType) {
                $invalidValues[] = is_object($sellingManagerSoldOrderTypeVATRateItem) ? get_class($sellingManagerSoldOrderTypeVATRateItem) : sprintf('%s(%s)', gettype($sellingManagerSoldOrderTypeVATRateItem), var_export($sellingManagerSoldOrderTypeVATRateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VATRate property can only contain items of type \StructType\VATRateType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set VATRate value
     * @throws \InvalidArgumentException
     * @param \StructType\VATRateType[] $vATRate
     * @return \StructType\SellingManagerSoldOrderType
     */
    public function setVATRate(array $vATRate = array())
    {
        // validation for constraint: array
        if ('' !== ($vATRateArrayErrorMessage = self::validateVATRateForArrayConstraintsFromSetVATRate($vATRate))) {
            throw new \InvalidArgumentException($vATRateArrayErrorMessage, __LINE__);
        }
        $this->VATRate = $vATRate;
        return $this;
    }
    /**
     * Add item to VATRate value
     * @throws \InvalidArgumentException
     * @param \StructType\VATRateType $item
     * @return \StructType\SellingManagerSoldOrderType
     */
    public function addToVATRate(\StructType\VATRateType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\VATRateType) {
            throw new \InvalidArgumentException(sprintf('The VATRate property can only contain items of type \StructType\VATRateType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->VATRate[] = $item;
        return $this;
    }
    /**
     * Get NetInsuranceFee value
     * @return \StructType\AmountType|null
     */
    public function getNetInsuranceFee()
    {
        return $this->NetInsuranceFee;
    }
    /**
     * Set NetInsuranceFee value
     * @param \StructType\AmountType $netInsuranceFee
     * @return \StructType\SellingManagerSoldOrderType
     */
    public function setNetInsuranceFee(\StructType\AmountType $netInsuranceFee = null)
    {
        $this->NetInsuranceFee = $netInsuranceFee;
        return $this;
    }
    /**
     * Get VATInsuranceFee value
     * @return \StructType\AmountType|null
     */
    public function getVATInsuranceFee()
    {
        return $this->VATInsuranceFee;
    }
    /**
     * Set VATInsuranceFee value
     * @param \StructType\AmountType $vATInsuranceFee
     * @return \StructType\SellingManagerSoldOrderType
     */
    public function setVATInsuranceFee(\StructType\AmountType $vATInsuranceFee = null)
    {
        $this->VATInsuranceFee = $vATInsuranceFee;
        return $this;
    }
    /**
     * Get VATShippingFee value
     * @return \StructType\AmountType|null
     */
    public function getVATShippingFee()
    {
        return $this->VATShippingFee;
    }
    /**
     * Set VATShippingFee value
     * @param \StructType\AmountType $vATShippingFee
     * @return \StructType\SellingManagerSoldOrderType
     */
    public function setVATShippingFee(\StructType\AmountType $vATShippingFee = null)
    {
        $this->VATShippingFee = $vATShippingFee;
        return $this;
    }
    /**
     * Get NetShippingFee value
     * @return \StructType\AmountType|null
     */
    public function getNetShippingFee()
    {
        return $this->NetShippingFee;
    }
    /**
     * Set NetShippingFee value
     * @param \StructType\AmountType $netShippingFee
     * @return \StructType\SellingManagerSoldOrderType
     */
    public function setNetShippingFee(\StructType\AmountType $netShippingFee = null)
    {
        $this->NetShippingFee = $netShippingFee;
        return $this;
    }
    /**
     * Get NetTotalAmount value
     * @return \StructType\AmountType|null
     */
    public function getNetTotalAmount()
    {
        return $this->NetTotalAmount;
    }
    /**
     * Set NetTotalAmount value
     * @param \StructType\AmountType $netTotalAmount
     * @return \StructType\SellingManagerSoldOrderType
     */
    public function setNetTotalAmount(\StructType\AmountType $netTotalAmount = null)
    {
        $this->NetTotalAmount = $netTotalAmount;
        return $this;
    }
    /**
     * Get VATTotalAmount value
     * @return \StructType\AmountType|null
     */
    public function getVATTotalAmount()
    {
        return $this->VATTotalAmount;
    }
    /**
     * Set VATTotalAmount value
     * @param \StructType\AmountType $vATTotalAmount
     * @return \StructType\SellingManagerSoldOrderType
     */
    public function setVATTotalAmount(\StructType\AmountType $vATTotalAmount = null)
    {
        $this->VATTotalAmount = $vATTotalAmount;
        return $this;
    }
    /**
     * Get ActualShippingCost value
     * @return \StructType\AmountType|null
     */
    public function getActualShippingCost()
    {
        return $this->ActualShippingCost;
    }
    /**
     * Set ActualShippingCost value
     * @param \StructType\AmountType $actualShippingCost
     * @return \StructType\SellingManagerSoldOrderType
     */
    public function setActualShippingCost(\StructType\AmountType $actualShippingCost = null)
    {
        $this->ActualShippingCost = $actualShippingCost;
        return $this;
    }
    /**
     * Get AdjustmentAmount value
     * @return \StructType\AmountType|null
     */
    public function getAdjustmentAmount()
    {
        return $this->AdjustmentAmount;
    }
    /**
     * Set AdjustmentAmount value
     * @param \StructType\AmountType $adjustmentAmount
     * @return \StructType\SellingManagerSoldOrderType
     */
    public function setAdjustmentAmount(\StructType\AmountType $adjustmentAmount = null)
    {
        $this->AdjustmentAmount = $adjustmentAmount;
        return $this;
    }
    /**
     * Get NotesToBuyer value
     * @return string|null
     */
    public function getNotesToBuyer()
    {
        return $this->NotesToBuyer;
    }
    /**
     * Set NotesToBuyer value
     * @param string $notesToBuyer
     * @return \StructType\SellingManagerSoldOrderType
     */
    public function setNotesToBuyer($notesToBuyer = null)
    {
        // validation for constraint: string
        if (!is_null($notesToBuyer) && !is_string($notesToBuyer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notesToBuyer, true), gettype($notesToBuyer)), __LINE__);
        }
        $this->NotesToBuyer = $notesToBuyer;
        return $this;
    }
    /**
     * Get NotesFromBuyer value
     * @return string|null
     */
    public function getNotesFromBuyer()
    {
        return $this->NotesFromBuyer;
    }
    /**
     * Set NotesFromBuyer value
     * @param string $notesFromBuyer
     * @return \StructType\SellingManagerSoldOrderType
     */
    public function setNotesFromBuyer($notesFromBuyer = null)
    {
        // validation for constraint: string
        if (!is_null($notesFromBuyer) && !is_string($notesFromBuyer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notesFromBuyer, true), gettype($notesFromBuyer)), __LINE__);
        }
        $this->NotesFromBuyer = $notesFromBuyer;
        return $this;
    }
    /**
     * Get NotesToSeller value
     * @return string|null
     */
    public function getNotesToSeller()
    {
        return $this->NotesToSeller;
    }
    /**
     * Set NotesToSeller value
     * @param string $notesToSeller
     * @return \StructType\SellingManagerSoldOrderType
     */
    public function setNotesToSeller($notesToSeller = null)
    {
        // validation for constraint: string
        if (!is_null($notesToSeller) && !is_string($notesToSeller)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notesToSeller, true), gettype($notesToSeller)), __LINE__);
        }
        $this->NotesToSeller = $notesToSeller;
        return $this;
    }
    /**
     * Get OrderStatus value
     * @return \StructType\SellingManagerOrderStatusType|null
     */
    public function getOrderStatus()
    {
        return $this->OrderStatus;
    }
    /**
     * Set OrderStatus value
     * @param \StructType\SellingManagerOrderStatusType $orderStatus
     * @return \StructType\SellingManagerSoldOrderType
     */
    public function setOrderStatus(\StructType\SellingManagerOrderStatusType $orderStatus = null)
    {
        $this->OrderStatus = $orderStatus;
        return $this;
    }
    /**
     * Get UnpaidItemStatus value
     * @return string|null
     */
    public function getUnpaidItemStatus()
    {
        return $this->UnpaidItemStatus;
    }
    /**
     * Set UnpaidItemStatus value
     * @uses \EnumType\UnpaidItemStatusTypeCodeType::valueIsValid()
     * @uses \EnumType\UnpaidItemStatusTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $unpaidItemStatus
     * @return \StructType\SellingManagerSoldOrderType
     */
    public function setUnpaidItemStatus($unpaidItemStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\UnpaidItemStatusTypeCodeType::valueIsValid($unpaidItemStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\UnpaidItemStatusTypeCodeType', is_array($unpaidItemStatus) ? implode(', ', $unpaidItemStatus) : var_export($unpaidItemStatus, true), implode(', ', \EnumType\UnpaidItemStatusTypeCodeType::getValidValues())), __LINE__);
        }
        $this->UnpaidItemStatus = $unpaidItemStatus;
        return $this;
    }
    /**
     * Get SalePrice value
     * @return \StructType\AmountType|null
     */
    public function getSalePrice()
    {
        return $this->SalePrice;
    }
    /**
     * Set SalePrice value
     * @param \StructType\AmountType $salePrice
     * @return \StructType\SellingManagerSoldOrderType
     */
    public function setSalePrice(\StructType\AmountType $salePrice = null)
    {
        $this->SalePrice = $salePrice;
        return $this;
    }
    /**
     * Get EmailsSent value
     * @return int|null
     */
    public function getEmailsSent()
    {
        return $this->EmailsSent;
    }
    /**
     * Set EmailsSent value
     * @param int $emailsSent
     * @return \StructType\SellingManagerSoldOrderType
     */
    public function setEmailsSent($emailsSent = null)
    {
        // validation for constraint: int
        if (!is_null($emailsSent) && !(is_int($emailsSent) || ctype_digit($emailsSent))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($emailsSent, true), gettype($emailsSent)), __LINE__);
        }
        $this->EmailsSent = $emailsSent;
        return $this;
    }
    /**
     * Get DaysSinceSale value
     * @return int|null
     */
    public function getDaysSinceSale()
    {
        return $this->DaysSinceSale;
    }
    /**
     * Set DaysSinceSale value
     * @param int $daysSinceSale
     * @return \StructType\SellingManagerSoldOrderType
     */
    public function setDaysSinceSale($daysSinceSale = null)
    {
        // validation for constraint: int
        if (!is_null($daysSinceSale) && !(is_int($daysSinceSale) || ctype_digit($daysSinceSale))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($daysSinceSale, true), gettype($daysSinceSale)), __LINE__);
        }
        $this->DaysSinceSale = $daysSinceSale;
        return $this;
    }
    /**
     * Get BuyerID value
     * @return string|null
     */
    public function getBuyerID()
    {
        return $this->BuyerID;
    }
    /**
     * Set BuyerID value
     * @param string $buyerID
     * @return \StructType\SellingManagerSoldOrderType
     */
    public function setBuyerID($buyerID = null)
    {
        // validation for constraint: string
        if (!is_null($buyerID) && !is_string($buyerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buyerID, true), gettype($buyerID)), __LINE__);
        }
        $this->BuyerID = $buyerID;
        return $this;
    }
    /**
     * Get BuyerEmail value
     * @return string|null
     */
    public function getBuyerEmail()
    {
        return $this->BuyerEmail;
    }
    /**
     * Set BuyerEmail value
     * @param string $buyerEmail
     * @return \StructType\SellingManagerSoldOrderType
     */
    public function setBuyerEmail($buyerEmail = null)
    {
        // validation for constraint: string
        if (!is_null($buyerEmail) && !is_string($buyerEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buyerEmail, true), gettype($buyerEmail)), __LINE__);
        }
        $this->BuyerEmail = $buyerEmail;
        return $this;
    }
    /**
     * Get SaleRecordID value
     * @return int|null
     */
    public function getSaleRecordID()
    {
        return $this->SaleRecordID;
    }
    /**
     * Set SaleRecordID value
     * @param int $saleRecordID
     * @return \StructType\SellingManagerSoldOrderType
     */
    public function setSaleRecordID($saleRecordID = null)
    {
        // validation for constraint: int
        if (!is_null($saleRecordID) && !(is_int($saleRecordID) || ctype_digit($saleRecordID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($saleRecordID, true), gettype($saleRecordID)), __LINE__);
        }
        $this->SaleRecordID = $saleRecordID;
        return $this;
    }
    /**
     * Get CreationTime value
     * @return string|null
     */
    public function getCreationTime()
    {
        return $this->CreationTime;
    }
    /**
     * Set CreationTime value
     * @param string $creationTime
     * @return \StructType\SellingManagerSoldOrderType
     */
    public function setCreationTime($creationTime = null)
    {
        // validation for constraint: string
        if (!is_null($creationTime) && !is_string($creationTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTime, true), gettype($creationTime)), __LINE__);
        }
        $this->CreationTime = $creationTime;
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
     * @return \StructType\SellingManagerSoldOrderType
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
     * @param string $refundStatus
     * @return \StructType\SellingManagerSoldOrderType
     */
    public function setRefundStatus($refundStatus = null)
    {
        // validation for constraint: string
        if (!is_null($refundStatus) && !is_string($refundStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refundStatus, true), gettype($refundStatus)), __LINE__);
        }
        $this->RefundStatus = $refundStatus;
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
     * @return \StructType\SellingManagerSoldOrderType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
