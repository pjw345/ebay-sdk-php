<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendInvoiceRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Enables a seller to send an order invoice to a buyer. Where applicable, updates to shipping, payment methods, and sales tax made in this request are applied to the specified order as a whole and to the individual order line items
 * whose data are stored in individual <b>Transaction</b> objects.
 * @subpackage Structs
 */
class SendInvoiceRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for an eBay listing. Unless <b>OrderID</b> or <b>OrderLineItemID</b> is provided in the request, the <b>ItemID</b> (or <b>SKU</b>) is required and must be paired with the corresponding <b>TransactionID</b> to
     * identify a single line item order. For a multiple line item order, <b>OrderID</b> should be used. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for an eBay sales transaction. This identifier is created once there is a commitment from a buyer to purchase an item. Since an auction listing can only have one sales transaction during the duration of the listing,
     * the <b>TransactionID</b> value for auction listings is always <code>0</code>. Unless <b>OrderID</b> or <b>OrderLineItemID</b> is provided in the request, the <b>TransactionID</b> is required and must be paired with the corresponding <b>ItemID</b> to
     * identify a single line item order. For a multiple line item order, <b>OrderID</b> should be used.
     * - minOccurs: 0
     * @var string
     */
    public $TransactionID;
    /**
     * The OrderID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier that identifies a single line item or multiple line item order. <br><br> Unless the <b>ItemID</b> (or SKU) and corresponding <b>TransactionID</b>, or the <b>OrderLineItemID</b> is provided in the request to
     * identify a single line item order, the <b>OrderID</b> must be specified. If <b>OrderID</b> is specified, <b>OrderLineItemID</b>, <b>ItemID</b>, <b>TransactionID</b>, and <b>SKU</b> are ignored if present in the same request. <br><br> <span
     * class="tablenote"><b>Note: </b> In June 2019, eBay introduced a new order ID format, but allowed developers/sellers to decide whether to immediately adopt the new format, or to continue working with the old format. Users who wanted to adopt the new
     * format, could either use a Trading WSDL Version 1113 (or newer), or they could even use an older Trading WSDL but set the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to <code>1113</code> in API calls. <b>Beginning in June 2020, only the
     * new order ID format will be returned in response payloads for paid orders, regardless of the WSDL version number or compatibility level.</b> <br><br> Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an
     * unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as filters in the request payload, including the <b>SendInvoice</b> call, will support the identifiers for both unpaid and paid orders. The new order ID format
     * is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers
     * will also be known and used/referenced by the buyer and eBay customer support. <br><br> Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of
     * <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment.
     * </span> | Type that represents the unique identifier for an eBay order. <br><br> <span class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format of order identifier values. The new format is a non-parsable string, globally unique
     * across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by
     * the buyer and eBay customer support. <br><br> For developers and sellers who are already integrated with the Trading API's order management calls, this change shouldn't impact your integration unless you parse the existing order identifiers (e.g.,
     * <b>OrderID</b> or <b>OrderLineItemID</b>), or otherwise infer meaning from the format (e.g., differentiating between a single line item order versus a multiple line item order). Because we realize that some integrations may have logic that is
     * dependent upon the old identifier format, eBay is rolling out this Trading API change with version control to support a transition period of approximately 9 months before applications must switch to the new format completely. <br><br> During the
     * transition period, for developers/sellers using a Trading WSDL older than Version 1113, they can use the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header in API calls to control whether the new or old <b>OrderID</b> format is returned in call
     * response payloads. To get the new <b>OrderID</b> format, the value of the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header must be set to <code>1113</code>. During the transition period and even after, the new and old <b>OrderID</b> formats will
     * still be supported/accepted in all Trading API call request payloads. After the transition period (which will be announced), only the new <b>OrderID</b> format will be returned in all Trading API call response payloads, regardless of the Trading WSDL
     * version used or specified compatibility level. </span> <br> <span class="tablenote"><b>Note: </b> For sellers integrated with the new order ID format, please note that the identifier for an order will change as it goes from unpaid to paid status.
     * Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in
     * the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. When using a <b>GetOrders</b> or <b>GetOrderTransactions</b> call to retrieve specific order(s), either of these order IDs (paid or unpaid status) can be used to
     * retrieve an order. </span>
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $OrderID;
    /**
     * The InternationalShippingServiceOptions
     * Meta information extracted from the WSDL
     * - documentation: If the buyer has an International shipping address, use this container to offer up to four International shipping services (or five if one of them is a Global Shipping Program service). If International shipping services are offered,
     * (domestic) <b>ShippingServiceOptions</b> should not be included in the request. <br>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\InternationalShippingServiceOptionsType[]
     */
    public $InternationalShippingServiceOptions;
    /**
     * The ShippingServiceOptions
     * Meta information extracted from the WSDL
     * - documentation: If the buyer has a domestic shipping address, use this container to offer up to four domestic shipping services. If domestic shipping services are offered, <b>InternationalShippingServiceOptions</b> should not be included in the
     * request. <br>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ShippingServiceOptionsType[]
     */
    public $ShippingServiceOptions;
    /**
     * The SalesTax
     * Meta information extracted from the WSDL
     * - documentation: This container is used if the seller wishes to apply sales tax to the order. The amount of sales tax applied to the order is dependent on the sales tax rate in the buyer's state and whether sales tax is being applied to the cost of
     * the order only or the cost of the order plus shipping and handling. <br><br> <span class="tablenote"><b>Note: </b> As of January 1, 2019, buyers in some US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit
     * this sales tax to the proper taxing authority on the buyer's behalf. So, if the order's buyer is in a state that is subject to 'eBay Collect and Remit Tax', the seller should not send the buyer any sales tax information, since eBay will be handling
     * the sales tax instead without buyer's assistance. For a list of the US states that will become subject to 'eBay Collect and Remit' (and effective dates), see the <a
     * href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic. </span>
     * - minOccurs: 0
     * @var \StructType\SalesTaxType
     */
    public $SalesTax;
    /**
     * The InsuranceOption
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable as it is no longer possible for a seller to offer a buyer shipping insurance.
     * - minOccurs: 0
     * @var string
     */
    public $InsuranceOption;
    /**
     * The InsuranceFee
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable as it is no longer possible for a seller to offer a buyer shipping insurance.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $InsuranceFee;
    /**
     * The PaymentMethods
     * Meta information extracted from the WSDL
     * - documentation: This optional field allows a US or German seller to add specific payment methods that were not in the original listing. The only valid values for this field are 'PayPal' for a US listing (or 'CreditCard' for sellers opted in to eBay
     * managed payments), or 'MoneyXferAcceptedInCheckout' (CIP+) for a listing on the Germany site.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $PaymentMethods;
    /**
     * The PayPalEmailAddress
     * Meta information extracted from the WSDL
     * - documentation: If the <b>PaymentMethods</b> field is used and set to <code>PayPal</code>, the seller provides his/her PayPal email address in this field.
     * - minOccurs: 0
     * @var string
     */
    public $PayPalEmailAddress;
    /**
     * The CheckoutInstructions
     * Meta information extracted from the WSDL
     * - documentation: This field allows the seller to provide a message or instructions regarding checkout/payment, or the return policy.
     * - minOccurs: 0
     * @var string
     */
    public $CheckoutInstructions;
    /**
     * The EmailCopyToSeller
     * Meta information extracted from the WSDL
     * - documentation: This field is included and set to <code>true</code> if the seller wishes to receive an email copy of the invoice sent to the buyer.
     * - minOccurs: 0
     * @var bool
     */
    public $EmailCopyToSeller;
    /**
     * The CODCost
     * Meta information extracted from the WSDL
     * - documentation: This dollar value indicates the money due from the buyer upon delivery of the item. <br><br> This field should only be specified in the <b>SendInvoice</b> request if 'COD' (cash-on-delivery) was the payment method selected by the
     * buyer and it is included as the <b>PaymentMethods</b> value in the same request.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $CODCost;
    /**
     * The SKU
     * Meta information extracted from the WSDL
     * - documentation: The seller's unique identifier for an item that is being tracked by this SKU. If <b>OrderID</b> or <b>OrderLineItemID</b> are not provided, both <b>SKU</b> (or <b>ItemID</b>) and corresponding <b>TransactionID</b> must be provided to
     * uniquely identify a single line item order. For a multiple line item order, <b>OrderID</b> must be used. <br> <br> This field can only be used if the <b>Item.InventoryTrackingMethod</b> field (set with the <b>AddFixedPriceItem</b> or
     * <b>RelistFixedPriceItem</b> calls) is set to <code>SKU</code>. | Primitive type that represents a stock-keeping unit (SKU). The usage of this string may vary in different contexts. For usage information and rules, see the fields that reference this
     * type.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $SKU;
    /**
     * The OrderLineItemID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for an eBay order line item. This identifier is created as soon as there is a commitment to buy (bidder wins the auction, buyer clicks buy button, or buyer purchases item through <b>PlaceOffer</b> call). <br> <br>
     * Unless the <b>ItemID</b> (or <b>SKU</b>) and corresponding <b>TransactionID</b> is used to identify a single line item order, or the <b>OrderID</b> is used to identify a single or multiple line item order, the <b>OrderLineItemID</b> must be
     * specified. For a multiple line item order, <b>OrderID</b> should be used. If <b>OrderLineItemID</b> is specified, <b>ItemID</b>, <b>TransactionID</b>, and <b>SKU</b> are ignored if present in the same request.
     * - minOccurs: 0
     * @var string
     */
    public $OrderLineItemID;
    /**
     * The AdjustmentAmount
     * Meta information extracted from the WSDL
     * - documentation: This field allows the seller to adjust the total cost of the order to account for an extra charge or to pass down a discount to the buyer. <br><br> The currency used in this field must be the same currency of the listing site. A
     * positive value in this field indicates that the amount is an extra charge being paid to the seller by the buyer, and a negative value indicates that the amount is a discount given to the buyer by the seller.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $AdjustmentAmount;
    /**
     * Constructor method for SendInvoiceRequestType
     * @uses SendInvoiceRequestType::setItemID()
     * @uses SendInvoiceRequestType::setTransactionID()
     * @uses SendInvoiceRequestType::setOrderID()
     * @uses SendInvoiceRequestType::setInternationalShippingServiceOptions()
     * @uses SendInvoiceRequestType::setShippingServiceOptions()
     * @uses SendInvoiceRequestType::setSalesTax()
     * @uses SendInvoiceRequestType::setInsuranceOption()
     * @uses SendInvoiceRequestType::setInsuranceFee()
     * @uses SendInvoiceRequestType::setPaymentMethods()
     * @uses SendInvoiceRequestType::setPayPalEmailAddress()
     * @uses SendInvoiceRequestType::setCheckoutInstructions()
     * @uses SendInvoiceRequestType::setEmailCopyToSeller()
     * @uses SendInvoiceRequestType::setCODCost()
     * @uses SendInvoiceRequestType::setSKU()
     * @uses SendInvoiceRequestType::setOrderLineItemID()
     * @uses SendInvoiceRequestType::setAdjustmentAmount()
     * @param string $itemID
     * @param string $transactionID
     * @param string $orderID
     * @param \StructType\InternationalShippingServiceOptionsType[] $internationalShippingServiceOptions
     * @param \StructType\ShippingServiceOptionsType[] $shippingServiceOptions
     * @param \StructType\SalesTaxType $salesTax
     * @param string $insuranceOption
     * @param \StructType\AmountType $insuranceFee
     * @param string[] $paymentMethods
     * @param string $payPalEmailAddress
     * @param string $checkoutInstructions
     * @param bool $emailCopyToSeller
     * @param \StructType\AmountType $cODCost
     * @param string $sKU
     * @param string $orderLineItemID
     * @param \StructType\AmountType $adjustmentAmount
     */
    public function __construct($itemID = null, $transactionID = null, $orderID = null, array $internationalShippingServiceOptions = array(), array $shippingServiceOptions = array(), \StructType\SalesTaxType $salesTax = null, $insuranceOption = null, \StructType\AmountType $insuranceFee = null, array $paymentMethods = array(), $payPalEmailAddress = null, $checkoutInstructions = null, $emailCopyToSeller = null, \StructType\AmountType $cODCost = null, $sKU = null, $orderLineItemID = null, \StructType\AmountType $adjustmentAmount = null)
    {
        $this
            ->setItemID($itemID)
            ->setTransactionID($transactionID)
            ->setOrderID($orderID)
            ->setInternationalShippingServiceOptions($internationalShippingServiceOptions)
            ->setShippingServiceOptions($shippingServiceOptions)
            ->setSalesTax($salesTax)
            ->setInsuranceOption($insuranceOption)
            ->setInsuranceFee($insuranceFee)
            ->setPaymentMethods($paymentMethods)
            ->setPayPalEmailAddress($payPalEmailAddress)
            ->setCheckoutInstructions($checkoutInstructions)
            ->setEmailCopyToSeller($emailCopyToSeller)
            ->setCODCost($cODCost)
            ->setSKU($sKU)
            ->setOrderLineItemID($orderLineItemID)
            ->setAdjustmentAmount($adjustmentAmount);
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
     * @return \StructType\SendInvoiceRequestType
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
     * @return \StructType\SendInvoiceRequestType
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
     * @return \StructType\SendInvoiceRequestType
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
     * Get InternationalShippingServiceOptions value
     * @return \StructType\InternationalShippingServiceOptionsType[]|null
     */
    public function getInternationalShippingServiceOptions()
    {
        return $this->InternationalShippingServiceOptions;
    }
    /**
     * This method is responsible for validating the values passed to the setInternationalShippingServiceOptions method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInternationalShippingServiceOptions method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInternationalShippingServiceOptionsForArrayConstraintsFromSetInternationalShippingServiceOptions(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sendInvoiceRequestTypeInternationalShippingServiceOptionsItem) {
            // validation for constraint: itemType
            if (!$sendInvoiceRequestTypeInternationalShippingServiceOptionsItem instanceof \StructType\InternationalShippingServiceOptionsType) {
                $invalidValues[] = is_object($sendInvoiceRequestTypeInternationalShippingServiceOptionsItem) ? get_class($sendInvoiceRequestTypeInternationalShippingServiceOptionsItem) : sprintf('%s(%s)', gettype($sendInvoiceRequestTypeInternationalShippingServiceOptionsItem), var_export($sendInvoiceRequestTypeInternationalShippingServiceOptionsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The InternationalShippingServiceOptions property can only contain items of type \StructType\InternationalShippingServiceOptionsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set InternationalShippingServiceOptions value
     * @throws \InvalidArgumentException
     * @param \StructType\InternationalShippingServiceOptionsType[] $internationalShippingServiceOptions
     * @return \StructType\SendInvoiceRequestType
     */
    public function setInternationalShippingServiceOptions(array $internationalShippingServiceOptions = array())
    {
        // validation for constraint: array
        if ('' !== ($internationalShippingServiceOptionsArrayErrorMessage = self::validateInternationalShippingServiceOptionsForArrayConstraintsFromSetInternationalShippingServiceOptions($internationalShippingServiceOptions))) {
            throw new \InvalidArgumentException($internationalShippingServiceOptionsArrayErrorMessage, __LINE__);
        }
        $this->InternationalShippingServiceOptions = $internationalShippingServiceOptions;
        return $this;
    }
    /**
     * Add item to InternationalShippingServiceOptions value
     * @throws \InvalidArgumentException
     * @param \StructType\InternationalShippingServiceOptionsType $item
     * @return \StructType\SendInvoiceRequestType
     */
    public function addToInternationalShippingServiceOptions(\StructType\InternationalShippingServiceOptionsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\InternationalShippingServiceOptionsType) {
            throw new \InvalidArgumentException(sprintf('The InternationalShippingServiceOptions property can only contain items of type \StructType\InternationalShippingServiceOptionsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->InternationalShippingServiceOptions[] = $item;
        return $this;
    }
    /**
     * Get ShippingServiceOptions value
     * @return \StructType\ShippingServiceOptionsType[]|null
     */
    public function getShippingServiceOptions()
    {
        return $this->ShippingServiceOptions;
    }
    /**
     * This method is responsible for validating the values passed to the setShippingServiceOptions method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShippingServiceOptions method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShippingServiceOptionsForArrayConstraintsFromSetShippingServiceOptions(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sendInvoiceRequestTypeShippingServiceOptionsItem) {
            // validation for constraint: itemType
            if (!$sendInvoiceRequestTypeShippingServiceOptionsItem instanceof \StructType\ShippingServiceOptionsType) {
                $invalidValues[] = is_object($sendInvoiceRequestTypeShippingServiceOptionsItem) ? get_class($sendInvoiceRequestTypeShippingServiceOptionsItem) : sprintf('%s(%s)', gettype($sendInvoiceRequestTypeShippingServiceOptionsItem), var_export($sendInvoiceRequestTypeShippingServiceOptionsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ShippingServiceOptions property can only contain items of type \StructType\ShippingServiceOptionsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ShippingServiceOptions value
     * @throws \InvalidArgumentException
     * @param \StructType\ShippingServiceOptionsType[] $shippingServiceOptions
     * @return \StructType\SendInvoiceRequestType
     */
    public function setShippingServiceOptions(array $shippingServiceOptions = array())
    {
        // validation for constraint: array
        if ('' !== ($shippingServiceOptionsArrayErrorMessage = self::validateShippingServiceOptionsForArrayConstraintsFromSetShippingServiceOptions($shippingServiceOptions))) {
            throw new \InvalidArgumentException($shippingServiceOptionsArrayErrorMessage, __LINE__);
        }
        $this->ShippingServiceOptions = $shippingServiceOptions;
        return $this;
    }
    /**
     * Add item to ShippingServiceOptions value
     * @throws \InvalidArgumentException
     * @param \StructType\ShippingServiceOptionsType $item
     * @return \StructType\SendInvoiceRequestType
     */
    public function addToShippingServiceOptions(\StructType\ShippingServiceOptionsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ShippingServiceOptionsType) {
            throw new \InvalidArgumentException(sprintf('The ShippingServiceOptions property can only contain items of type \StructType\ShippingServiceOptionsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ShippingServiceOptions[] = $item;
        return $this;
    }
    /**
     * Get SalesTax value
     * @return \StructType\SalesTaxType|null
     */
    public function getSalesTax()
    {
        return $this->SalesTax;
    }
    /**
     * Set SalesTax value
     * @param \StructType\SalesTaxType $salesTax
     * @return \StructType\SendInvoiceRequestType
     */
    public function setSalesTax(\StructType\SalesTaxType $salesTax = null)
    {
        $this->SalesTax = $salesTax;
        return $this;
    }
    /**
     * Get InsuranceOption value
     * @return string|null
     */
    public function getInsuranceOption()
    {
        return $this->InsuranceOption;
    }
    /**
     * Set InsuranceOption value
     * @uses \EnumType\InsuranceOptionCodeType::valueIsValid()
     * @uses \EnumType\InsuranceOptionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $insuranceOption
     * @return \StructType\SendInvoiceRequestType
     */
    public function setInsuranceOption($insuranceOption = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\InsuranceOptionCodeType::valueIsValid($insuranceOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\InsuranceOptionCodeType', is_array($insuranceOption) ? implode(', ', $insuranceOption) : var_export($insuranceOption, true), implode(', ', \EnumType\InsuranceOptionCodeType::getValidValues())), __LINE__);
        }
        $this->InsuranceOption = $insuranceOption;
        return $this;
    }
    /**
     * Get InsuranceFee value
     * @return \StructType\AmountType|null
     */
    public function getInsuranceFee()
    {
        return $this->InsuranceFee;
    }
    /**
     * Set InsuranceFee value
     * @param \StructType\AmountType $insuranceFee
     * @return \StructType\SendInvoiceRequestType
     */
    public function setInsuranceFee(\StructType\AmountType $insuranceFee = null)
    {
        $this->InsuranceFee = $insuranceFee;
        return $this;
    }
    /**
     * Get PaymentMethods value
     * @return string[]|null
     */
    public function getPaymentMethods()
    {
        return $this->PaymentMethods;
    }
    /**
     * This method is responsible for validating the values passed to the setPaymentMethods method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaymentMethods method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentMethodsForArrayConstraintsFromSetPaymentMethods(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sendInvoiceRequestTypePaymentMethodsItem) {
            // validation for constraint: enumeration
            if (!\EnumType\BuyerPaymentMethodCodeType::valueIsValid($sendInvoiceRequestTypePaymentMethodsItem)) {
                $invalidValues[] = is_object($sendInvoiceRequestTypePaymentMethodsItem) ? get_class($sendInvoiceRequestTypePaymentMethodsItem) : sprintf('%s(%s)', gettype($sendInvoiceRequestTypePaymentMethodsItem), var_export($sendInvoiceRequestTypePaymentMethodsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\BuyerPaymentMethodCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\BuyerPaymentMethodCodeType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set PaymentMethods value
     * @uses \EnumType\BuyerPaymentMethodCodeType::valueIsValid()
     * @uses \EnumType\BuyerPaymentMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $paymentMethods
     * @return \StructType\SendInvoiceRequestType
     */
    public function setPaymentMethods(array $paymentMethods = array())
    {
        // validation for constraint: array
        if ('' !== ($paymentMethodsArrayErrorMessage = self::validatePaymentMethodsForArrayConstraintsFromSetPaymentMethods($paymentMethods))) {
            throw new \InvalidArgumentException($paymentMethodsArrayErrorMessage, __LINE__);
        }
        $this->PaymentMethods = $paymentMethods;
        return $this;
    }
    /**
     * Add item to PaymentMethods value
     * @uses \EnumType\BuyerPaymentMethodCodeType::valueIsValid()
     * @uses \EnumType\BuyerPaymentMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\SendInvoiceRequestType
     */
    public function addToPaymentMethods($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BuyerPaymentMethodCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\BuyerPaymentMethodCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \EnumType\BuyerPaymentMethodCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentMethods[] = $item;
        return $this;
    }
    /**
     * Get PayPalEmailAddress value
     * @return string|null
     */
    public function getPayPalEmailAddress()
    {
        return $this->PayPalEmailAddress;
    }
    /**
     * Set PayPalEmailAddress value
     * @param string $payPalEmailAddress
     * @return \StructType\SendInvoiceRequestType
     */
    public function setPayPalEmailAddress($payPalEmailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($payPalEmailAddress) && !is_string($payPalEmailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($payPalEmailAddress, true), gettype($payPalEmailAddress)), __LINE__);
        }
        $this->PayPalEmailAddress = $payPalEmailAddress;
        return $this;
    }
    /**
     * Get CheckoutInstructions value
     * @return string|null
     */
    public function getCheckoutInstructions()
    {
        return $this->CheckoutInstructions;
    }
    /**
     * Set CheckoutInstructions value
     * @param string $checkoutInstructions
     * @return \StructType\SendInvoiceRequestType
     */
    public function setCheckoutInstructions($checkoutInstructions = null)
    {
        // validation for constraint: string
        if (!is_null($checkoutInstructions) && !is_string($checkoutInstructions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($checkoutInstructions, true), gettype($checkoutInstructions)), __LINE__);
        }
        $this->CheckoutInstructions = $checkoutInstructions;
        return $this;
    }
    /**
     * Get EmailCopyToSeller value
     * @return bool|null
     */
    public function getEmailCopyToSeller()
    {
        return $this->EmailCopyToSeller;
    }
    /**
     * Set EmailCopyToSeller value
     * @param bool $emailCopyToSeller
     * @return \StructType\SendInvoiceRequestType
     */
    public function setEmailCopyToSeller($emailCopyToSeller = null)
    {
        // validation for constraint: boolean
        if (!is_null($emailCopyToSeller) && !is_bool($emailCopyToSeller)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($emailCopyToSeller, true), gettype($emailCopyToSeller)), __LINE__);
        }
        $this->EmailCopyToSeller = $emailCopyToSeller;
        return $this;
    }
    /**
     * Get CODCost value
     * @return \StructType\AmountType|null
     */
    public function getCODCost()
    {
        return $this->CODCost;
    }
    /**
     * Set CODCost value
     * @param \StructType\AmountType $cODCost
     * @return \StructType\SendInvoiceRequestType
     */
    public function setCODCost(\StructType\AmountType $cODCost = null)
    {
        $this->CODCost = $cODCost;
        return $this;
    }
    /**
     * Get SKU value
     * @return string|null
     */
    public function getSKU()
    {
        return $this->SKU;
    }
    /**
     * Set SKU value
     * @param string $sKU
     * @return \StructType\SendInvoiceRequestType
     */
    public function setSKU($sKU = null)
    {
        // validation for constraint: string
        if (!is_null($sKU) && !is_string($sKU)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sKU, true), gettype($sKU)), __LINE__);
        }
        $this->SKU = $sKU;
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
     * @return \StructType\SendInvoiceRequestType
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
     * @return \StructType\SendInvoiceRequestType
     */
    public function setAdjustmentAmount(\StructType\AmountType $adjustmentAmount = null)
    {
        $this->AdjustmentAmount = $adjustmentAmount;
        return $this;
    }
}
