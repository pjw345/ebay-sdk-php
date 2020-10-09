<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used to express the details of an order. An order may contain one or more line items (purchases) from the same buyer. Regardless of how many line items an order has, only one payment is made for the order. <br><br> The
 * <b>GetOrders</b> and <b>GetOrderTransactions</b> calls return many of the fields of this type. <br><br> The <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> calls will only return order-level details if the <b>IncludeContainingOrder</b>
 * boolean field is included in the call request and set to <code>true</code>. <br><br> The <b>AddOrder</b> call is used to combine two or more unpaid order line items (between the same seller and buyer) into a 'Combined Invoice' order. While combining
 * these order line items into one 'Combined Invoice' order, the seller can make adjustments to accepted payment methods, shipping details (including costs), and the total cost of the order. Sometimes, sellers will reduce the cost of shipping if one or
 * more order line items can be shipped together in the same package. <br><br> The <b>GetMyeBaySelling</b> call returns order details if the seller wishes to view listings that have sold, and the <b>GetMyeBayBuying</b> call returns order details if the
 * buyer wishes to view items they have won or purchased.
 * @subpackage Structs
 */
class OrderType extends AbstractStructBase
{
    /**
     * The OrderID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for a single or multiple line item eBay order. In the <b>ContainingOrder</b> container of a <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> response, this identifier identifies the parent order of the
     * order line item. A single buyer payment is made for each order. <br/><br/> <b>For order management calls only:</b> This field is returned with the correct order ID only to the buyer, the seller, and PayPal (if PayPal is the payment method). For third
     * parties (except PayPal): <ul> <li>If using a Trading WSDL older than version 1019, the Order ID will be returned to third parties as dummy data in the form of <code>1000000000000</code> or <code>1000000000000-1000000000000</code>.</li> <li>If using
     * Trading WSDL version 1019 or newer, the Order ID will be returned to third parties as an empty field (<code>&lt;OrderID/&gt;</code>).</li> </ul> <br><br> <span class="tablenote"><b>Note: </b> In June 2019, eBay introduced a new order ID format, but
     * allowed developers/sellers to decide whether to immediately adopt the new format, or to continue working with the old format. Users who wanted to adopt the new format, could either use a Trading WSDL Version 1113 (or newer), or they could even use an
     * older Trading WSDL but set the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to <code>1113</code> in API calls. <b>Beginning in June 2020, only the new order ID format will be returned in response payloads for paid orders, regardless of the
     * WSDL version number or compatibility level.</b> <br><br> Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as
     * filters in the request payload, including the <b>GetOrders</b> and <b>GetOrderTransactions</b> calls, will support the identifiers for both unpaid and paid orders. The new order ID format is a non-parsable string, globally unique across all eBay
     * marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and
     * eBay customer support. <br><br> Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the
     * <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment. </span> | Type that represents the unique identifier for an eBay
     * order. <br><br> <span class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format of order identifier values. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line
     * item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support. <br><br> For developers and
     * sellers who are already integrated with the Trading API's order management calls, this change shouldn't impact your integration unless you parse the existing order identifiers (e.g., <b>OrderID</b> or <b>OrderLineItemID</b>), or otherwise infer
     * meaning from the format (e.g., differentiating between a single line item order versus a multiple line item order). Because we realize that some integrations may have logic that is dependent upon the old identifier format, eBay is rolling out this
     * Trading API change with version control to support a transition period of approximately 9 months before applications must switch to the new format completely. <br><br> During the transition period, for developers/sellers using a Trading WSDL older
     * than Version 1113, they can use the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header in API calls to control whether the new or old <b>OrderID</b> format is returned in call response payloads. To get the new <b>OrderID</b> format, the value of the
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
     * The OrderStatus
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the current status of the order.
     * - minOccurs: 0
     * @var string
     */
    public $OrderStatus;
    /**
     * The AdjustmentAmount
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the dollar amount by which the buyer has adjusted the order total. Adjustments to order costs may include shipping and handling, buyer discounts, or added services. A positive amount indicates the amount is an
     * extra charge being paid to the seller by the buyer. A negative value indicates this amount is a credit given to the buyer by the seller.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $AdjustmentAmount;
    /**
     * The AmountPaid
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the total amount paid by the buyer for the order. This amount includes the sale price of each line item, shipping and handling charges, additional services, and any sales tax that the seller has applied towards
     * the order. This value is only returned after the buyer has paid for the order. <br><br> <span class="tablenote"><b>Note: </b> As of November 2019, for orders subject to eBay 'Collect and Remit' taxes, PayPal has begun distributing order funds to the
     * seller's account with the sales tax included. eBay 'Collect and Remit' tax includes US sales tax for numerous states, and 'Good and Services' tax that is applicable to Australian and New Zealand sellers. This 'Collect and Remit' tax amount for the
     * order will be included in the <b>AmountPaid</b> value. To determine if 'Collect and Remit' taxes were added into <b>AmountPaid</b> value, the user can check for the <b>Transaction.eBayCollectAndRemitTaxes.TaxDetails</b> and the
     * <b>Transaction.Taxes.TaxDetails</b> containers in the response. If both of these containers appear in the response with a <b>TaxDetails.TaxDescription</b> value of <code>SalesTax</code> (in US) or <code>GST</code> (in Australia or New Zealand), the
     * tax amount that the buyer paid is in this amount. <br><br> Sellers should be aware that the sales tax that the buyer pays for the order will initially be included when the order funds are distributed to their PayPal account, but that PayPal will pull
     * out the sales tax amount shortly after the payment clears, and will distribute the sales tax to the appropriate taxing authority. Previous to this change, PayPal would strip out the 'Collect and Remit' tax before distributing order funds to the
     * seller's account. <br><br> This logic change does not apply to sellers who are in eBay managed payments, so the amount in this field will never reflect any 'Collect and Remit' tax, even if the order is subject to 'Collect and Remit' tax. </span>
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $AmountPaid;
    /**
     * The AmountSaved
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the amount that the buyer saved on the order due to any discounts (item, shipping, promotional) applied to the purchase, or if the seller 'manually' reduced the order total. This field is always returned even
     * when it is '0.0'.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $AmountSaved;
    /**
     * The CheckoutStatus
     * Meta information extracted from the WSDL
     * - documentation: This container indicates the current status of the order, including a timestamp that indicates the last time that the status of the order changed. For orders that have been paid for, the <b>Status</b> value will show as
     * <code>Complete</code>.
     * - minOccurs: 0
     * @var \StructType\CheckoutStatusType
     */
    public $CheckoutStatus;
    /**
     * The ShippingDetails
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of order-level shipping details. More shipping-related details can be found at the line item level for each line item in the order. <br><br> In an <b>AddOrder</b> call, the seller can use the
     * <b>ShippingDetails</b> container to make adjustments to shipping details, including the available shipping service options and shipping cost. Sometimes, sellers will reduce the cost of shipping if one or more order line items can be shipped together
     * in the same package.
     * - minOccurs: 0
     * @var \StructType\ShippingDetailsType
     */
    public $ShippingDetails;
    /**
     * The CreatingUserRole
     * Meta information extracted from the WSDL
     * - documentation: This value indicates whether a 'Combined Invoice' order was initiated/created by the buyer or by the seller. This field is only returned for Combined Invoice orders. <br><br> An <b>AddOrder</b> call can be used by a seller or buyer
     * to combine two or more unpaid order line items into a 'Combined Invoice' order. Once two or more line items are successfully combined into one order, the buyer only needs to make one payment (instead of multiple payments - one for each order line
     * item). The <b>CreatingUserRole</b> field is required in the <b>AddOrder</b> call request. <br><br> <span class="tablenote"><b>Note: </b> Except for listings that required immediate payment, buyers also may have the opportunity to combine multiple
     * line items (from the same seller) into a 'Combined Invoice' order through the buy/checkout flow. This may include accepted Best Offers or auctions that the buyer wins. </span>
     * - minOccurs: 0
     * @var string
     */
    public $CreatingUserRole;
    /**
     * The CreatedTime
     * Meta information extracted from the WSDL
     * - documentation: Timestamp that indicates the date and time that the order was created. <br><br> <span class="tablenote"><b>Note: </b> For single line item orders, this timestamp value is often the same as the <b>CreatedDate</b> field in the
     * corresponding <b>Transaction</b> container. </span>
     * - minOccurs: 0
     * @var string
     */
    public $CreatedTime;
    /**
     * The PaymentMethods
     * Meta information extracted from the WSDL
     * - documentation: In <b>GetOrders</b>, <b>GetOrderTransactions</b>, and <b>OrderReport</b>, a <b>PaymentMethods</b> field will appear for each payment method available to the buyer for the order's purchase. However, once the buyer pays for the order,
     * any and all of these <b>PaymentMethods</b> fields will stop being returned, and instead, the actual payment method used will be returned in the <b>PaymentMethod</b> field of the <b>CheckoutStatus</b> container. <br> <br> In an <b>AddOrder</b> call,
     * the seller can use one or more <b>PaymentMethods</b> fields to override whatever available payment methods were already defined for each individual line item. For sellers opted in to eBay managed payments, only the <code>CreditCard</code> enumeration
     * value should be passed into this field or the call may fail. <br> <br> <span class="tablenote"><b>Note:</b> For sellers opted in to the new eBay managed payments program, the enumeration value returned in this field will be <code>CreditCard</code>,
     * regardless of which payment method that the buyer used (or is planning to use). <br><br>Similarly, for an <b>AddOrder</b> call, a seller opted in to eBay managed payments should only pass a value of <code>CreditCard</code> into this field.<br><br>
     * eBay managed payments is currently only available to a limited number of sellers on the US and Germany sites. For sellers in the eBay managed payments program, a payment method does not need to be specified at listing/checkout time. </span><br> <span
     * class="tablenote"><b>Note:</b> As of May 1, 2019, eBay no longer supports electronic payments through a seller's Integrated Merchant Credit Card account. To accept online credit card payments from buyers, a seller must either specify
     * <code>PayPal</code> as an accepted payment method, or opt in to the eBay managed payments program. If <code>IMCC</code> is passed in as a value, this value will be ignored and dropped (and listing will possibly get blocked if <code>IMCC</code> is the
     * only specified payment method). </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $PaymentMethods;
    /**
     * The SellerEmail
     * Meta information extracted from the WSDL
     * - documentation: The email address of the seller involved in the order. The email address of the seller is only returned if it is the same seller making the call.
     * - minOccurs: 0
     * @var string
     */
    public $SellerEmail;
    /**
     * The ShippingAddress
     * Meta information extracted from the WSDL
     * - documentation: This container shows the shipping address for the order. <br> <br> <span class="tablenote"><b>Note:</b> For an Authenticity Guarantee program shipment, this is the address of the authenticator's warehouse. The authenticator is
     * responsible for delivery to the buyer's shipping address. </span> <span class="tablenote"><b>Note:</b> For GetOrderTransactions, the buyer's shipping address may also be returned at the order line item level in the
     * <b>Transaction.Buyer.BuyerInfo.ShippingAddress</b> container. </span>
     * - minOccurs: 0
     * @var \StructType\AddressType
     */
    public $ShippingAddress;
    /**
     * The ShippingServiceSelected
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of details about the domestic or international shipping service selected by the buyer for delivery of the order. Note that more shipping service information may be returned at the order line item level in the
     * <strong>Transaction.ShippingServiceSelected</strong> container.
     * - minOccurs: 0
     * @var \StructType\ShippingServiceOptionsType
     */
    public $ShippingServiceSelected;
    /**
     * The Subtotal
     * Meta information extracted from the WSDL
     * - documentation: The cumulative item cost for all line items in the order. This value does not take into account any shipping/handling costs, sales tax costs, or any discounts. For a single line item order, the amount in this field should be the same
     * as the amount in the <strong>Transaction.TransactionPrice</strong> field. For a multiple line item order, the amount in this field should equal the cumulative amount of each <strong>Transaction.TransactionPrice</strong> fields for each order line
     * item.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $Subtotal;
    /**
     * The Total
     * Meta information extracted from the WSDL
     * - documentation: The <b>Total</b> amount shows the total cost for the order, including total item cost (shown in <b>Subtotal</b> field), shipping charges (shown in <b>ShippingServiceSelected.ShippingServiceCost</b> field), and seller-applied sales
     * tax (shown in <b>SalesTax.SalesTaxAmount</b> field). <br><br> In an <b>AddOrder</b> call, the seller can pass in the <b>Total</b> amount for the 'Combined Invoice' order, and this is what the buyer will be expected to pay for the order. <br><br>
     * <span class="tablenote"><b>Note: </b> As of November 2019, for orders subject to eBay 'Collect and Remit' taxes, PayPal has begun distributing order funds to the seller's account with the sales tax included. eBay 'Collect and Remit' tax includes US
     * sales tax for numerous states, and 'Good and Services' tax that is applicable to Australian and New Zealand sellers. This 'Collect and Remit' tax amount for the order will be included in the <b>Total</b> value. To determine if 'Collect and Remit'
     * taxes were added into <b>Total</b> value, the user can check for the <b>Transaction.eBayCollectAndRemitTaxes.TaxDetails</b> and the <b>Transaction.Taxes.TaxDetails</b> containers in the response. If both of these containers appear for one or more
     * transactions in the response with a <b>TaxDetails.TaxDescription</b> value of <code>SalesTax</code> (in US) or <code>GST</code> (in Australia or New Zealand), the tax amount that the buyer paid is in this amount. For a multiple line item order, the
     * seller will need to look at and add up the <b>TaxDetails.TaxAmount</b> values for each line item to see how much sales tax is applicable for the whole order. <br><br> Sellers should be aware that the sales tax that the buyer pays for the order will
     * initially be included when the order funds are distributed to their PayPal account, but that PayPal will pull out the sales tax amount shortly after the payment clears, and will distribute the sales tax to the appropriate taxing authority. Previous
     * to this change, PayPal would strip out the 'Collect and Remit' tax before distributing order funds to the seller's account. <br><br> This logic change does not apply to sellers who are in eBay managed payments, so the amount in this field will never
     * reflect any 'Collect and Remit' tax, even if the order is subject to 'Collect and Remit' tax. </span>
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $Total;
    /**
     * The ExternalTransaction
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of payment details for an eBay order, including an identifier for the monetary transaction and a field to express any fees or credits applied to the monetary transaction. This field is only returned after payment
     * for the order has occurred. <br><br> <span class="tablenote"> <strong>Note:</strong> The <strong>MonetaryDetails</strong> container also shows payment information for the order. In the future, it is possible that the
     * <strong>ExternalTransaction</strong> container will be deprecated, so you are encouraged to start using <strong>MonetaryDetails</strong> as soon as possible. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ExternalTransactionType[]
     */
    public $ExternalTransaction;
    /**
     * The TransactionArray
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of one or more line items that comprise an order. The data for each order line item in the order is stored in a separate <b>Transaction</b> container. <br><br> Under the <b>TransactionArray</b> container in an
     * <b>AddOrder</b> call, a seller or buyer specifies two or more (up to 40) order line items into a 'Combined Invoice' order.
     * - minOccurs: 0
     * @var \ArrayType\TransactionArrayType
     */
    public $TransactionArray;
    /**
     * The BuyerUserID
     * Meta information extracted from the WSDL
     * - documentation: The eBay user ID of the order's buyer. | This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay user, such as DisputeType.xsd, FeedbackInfoType.xsd,
     * GetAllBidders, OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the seller's item will be returned. If a bidder
     * makes this API call, the bidder's actual ID will be returned, but information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $BuyerUserID;
    /**
     * The PaidTime
     * Meta information extracted from the WSDL
     * - documentation: Timestamp indicating the date and time of order payment. This field is not returned until payment has been made by the buyer. <br><br> This time is specified in GMT (not Pacific time). See <a
     * href="http://developer.ebay.com/DevZone/guides/features-guide/default.html#basics/DataTypes.html#ConvertingBetweenUTCGMTandLocalTime"> eBay Features Guide</a> for information about converting between GMT and other time zones.
     * - minOccurs: 0
     * @var string
     */
    public $PaidTime;
    /**
     * The ShippedTime
     * Meta information extracted from the WSDL
     * - documentation: Timestamp indicating the date and time of order shipment. This field is not returned until shipment tracking is provided for all line items in the order, or if the order has been marked as 'shipped' by the seller. <br><br> This time
     * is specified in GMT (not Pacific time). See <a href="http://developer.ebay.com/DevZone/guides/features-guide/default.html#basics/DataTypes.html"> eBay Features Guide</a> for information about converting between GMT and other time zones.
     * - minOccurs: 0
     * @var string
     */
    public $ShippedTime;
    /**
     * The IntegratedMerchantCreditCardEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field being returned with a value of <code>true</code> indicates that the order can be paid for with a credit card through the seller's payment gateway account. <br><br> <span class="tablenote"><b>Note: </b> As of May 1, 2019,
     * eBay no longer supports electronic payments through Integrated Merchant Credit Card accounts. To accept online credit card payments from buyers, a seller must specify PayPal as an accepted payment method, or opt in to eBay managed payments program
     * (if the program is available to that seller). </span>
     * - minOccurs: 0
     * @var bool
     */
    public $IntegratedMerchantCreditCardEnabled;
    /**
     * The BundlePurchase
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use.
     * - minOccurs: 0
     * @var bool
     */
    public $BundlePurchase;
    /**
     * The BuyerCheckoutMessage
     * Meta information extracted from the WSDL
     * - documentation: This field is returned if the buyer left a message for the seller during checkout.
     * - minOccurs: 0
     * @var string
     */
    public $BuyerCheckoutMessage;
    /**
     * The EIASToken
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for the user that does not change when the eBay user name is changed. Use when an application needs to associate a new eBay user name with the corresponding eBay user. <br><br> Since a bidder's user info is
     * anonymous, this tag will be returned only to that bidder, and to the seller of an item that the user is bidding on.
     * - minOccurs: 0
     * @var string
     */
    public $EIASToken;
    /**
     * The PaymentHoldStatus
     * Meta information extracted from the WSDL
     * - documentation: This field indicates the type and/or status of a payment hold on the item. It is always returned for <b>GetOrders</b> and <b>GetOrderTransactions</b>, even if there are no payment holds (in which case, an enumeration value of
     * <code>None</code> is shown).
     * - minOccurs: 0
     * @var string
     */
    public $PaymentHoldStatus;
    /**
     * The PaymentHoldDetails
     * Meta information extracted from the WSDL
     * - documentation: This container consists of information related to the payment hold on the order, including the reason why the buyer's payment for the order is being held, the expected release date of the funds into the seller's account, and possible
     * action(s) the seller can take to expedite the payout of funds into their account. This container is only returned if a payment hold has placed on the order. <br><br> See <b>PaymentHoldReasonCodeType</b> for some details on why/when a seller's funds
     * may be held, or visit the <a href="https://www.ebay.com/help/selling/getting-paid/getting-paid-items-youve-sold/pending-payments?id=4816">Pending payments</a> help topic for more information on eBay's payment hold policies.
     * - minOccurs: 0
     * @var \StructType\PaymentHoldDetailType
     */
    public $PaymentHoldDetails;
    /**
     * The RefundAmount
     * Meta information extracted from the WSDL
     * - documentation: The amount of the refund due to, or already issued to the buyer for the order. This field is only returned in <b>GetMyeBaySelling</b> if a buyer refund is due, or was issued for the order.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $RefundAmount;
    /**
     * The RefundStatus
     * Meta information extracted from the WSDL
     * - documentation: This string value indicates the result of a seller's refund to the buyer. Its value are 'Success', 'Failure' or 'Pending'. This field is only returned in <b>GetMyeBaySelling</b> if the buyer has received a refund from the seller, or
     * is due to receive a refund.
     * - minOccurs: 0
     * @var string
     */
    public $RefundStatus;
    /**
     * The RefundArray
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> This container was only used for Half.com orders, and since the Half.com site was taken down, this container is no longer applicable. </span>
     * - minOccurs: 0
     * @var \ArrayType\RefundArrayType
     */
    public $RefundArray;
    /**
     * The IsMultiLegShipping
     * Meta information extracted from the WSDL
     * - documentation: If <strong>IsMultilegShipping</strong> is <code>true</code>, at least one order line item in the order will not be shipped directly to the buyer. Instead, the item(s) may be shipped to eBay's Global Shipping Program (GSP) partner who
     * will handle the international leg of shipment, or the item may be shipped to eBay's Authenticity Guarantee service partner if the item is subject to the Authenticity Guarantee service program. In both cases, the partner's shipping address can be
     * found in the <strong>MultiLegShippingDetails.SellerShipmentToLogisticsProvider.ShipToAddress</strong> container. <br><br> If an order line item is subject to the Authenticity Guarantee service, the <b>Transaction.Program<b> container will be
     * returned.
     * - minOccurs: 0
     * @var bool
     */
    public $IsMultiLegShipping;
    /**
     * The MultiLegShippingDetails
     * Meta information extracted from the WSDL
     * - documentation: This container consists of details about the domestic leg of a Global Shipping Program (GSP) shipment or shipment to eBay's Authenticity Guarantee service partner. With GSP, the shipment has a domestic leg and an international leg.
     * In the domestic leg, the seller ships the item to eBay's shipping partner. In the Authenticity Guarantee service, the seller ships the item to the authentication partner, and if the item passes an authentication inspection, the authentication partner
     * ships it directly to the buyer. <br/><br/> This container is only returned if the order has one or more order line items that require shipping through GSP or shipment to an Authenticity Guarantee service partner. It is not returned if
     * <strong>IsMultilegShipping</strong> is <code>false</code>.
     * - minOccurs: 0
     * @var \StructType\MultiLegShippingDetailsType
     */
    public $MultiLegShippingDetails;
    /**
     * The MonetaryDetails
     * Meta information extracted from the WSDL
     * - documentation: Contains information about each monetary transaction that occurs for the order, including order payment, any refund, a credit, etc. Both the payer and payee are shown in this container. <br/><br/> <span class="tablenote">
     * <strong>Note:</strong> <strong>MonetaryDetails</strong> can already be used instead of the older <strong>ExternalTransaction</strong> container, and the <strong>ExternalTransaction</strong> container may eventually get deprecated. Due to this
     * possibility, you are encouraged to start using <strong>MonetaryDetails</strong> as soon as it is convenient. </span>
     * - minOccurs: 0
     * @var \StructType\PaymentsInformationType
     */
    public $MonetaryDetails;
    /**
     * The PickupDetails
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of an array of <strong>PickupOptions</strong> containers. Each <strong>PickupOptions</strong> container consists of the pickup method and its priority. The priority of each pickup method controls the order
     * (relative to other pickup methods) in which the corresponding pickup method will appear in the View Item and Checkout page. <br/><br/> For <strong>GetOrders</strong> and <strong>GetOrderTransactions</strong>, this container is always returned prior
     * to order payment if the seller created/revised/relisted the item with the <strong>EligibleForPickupInStore</strong> and/or <strong>EligibleForPickupDropOff</strong> flag in the call request set to 'true'. If and when the In-Store pickup method (US
     * only) or 'Click and Collect' pickup method (UK and Australia only) is selected by the buyer and payment for the order is made, this container will no longer be returned in the response, and will essentially be replaced by the
     * <strong>PickupMethodSelected</strong> container. <br/><br/> <span class="tablenote"> <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature or Click and Collect feature to list an item that is eligible for In-Store Pickup or
     * Click and Collect. At this time, the In-Store Pickup and Click and Collect features are generally only available to large retail merchants, and can only be applied to multiple-quantity, fixed-price listings. </span>
     * - minOccurs: 0
     * @var \StructType\PickupDetailsType
     */
    public $PickupDetails;
    /**
     * The PickupMethodSelected
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of details related to the selected pickup method, including the pickup method type, the merchant's store ID, the status of the pickup, and the pickup reference code (if provided by merchant). <br/><br/> This
     * container is only returned when the buyer has selected the In-Store Pickup or Click and Collect option and has paid for the order. All fields in the <strong>PickupMethodSelected</strong> container are static, except for the
     * <strong>PickupStatus</strong> field, which can change states based on the notifications that a merchant sends to eBay through the Inbound Notifications API. <br/><br/> <span class="tablenote"> <strong>Note:</strong> A seller must be eligible for the
     * In-Store Pickup or Click and Collect feature to list an item that is eligible for these features. At this time, the In-Store Pickup and Click and Collect features are generally only available to large retail merchants, and can only be applied to
     * multiple-quantity, fixed-price listings. </span>
     * - minOccurs: 0
     * @var \StructType\PickupMethodSelectedType
     */
    public $PickupMethodSelected;
    /**
     * The SellerUserID
     * Meta information extracted from the WSDL
     * - documentation: This is the eBay user ID of the order's seller. | This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay user, such as DisputeType.xsd,
     * FeedbackInfoType.xsd, GetAllBidders, OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the seller's item will be
     * returned. If a bidder makes this API call, the bidder's actual ID will be returned, but information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $SellerUserID;
    /**
     * The SellerEIASToken
     * Meta information extracted from the WSDL
     * - documentation: This is a unique identifier for the seller that does not change when the eBay user name is changed. This is useful when an application needs to associate a new eBay user name with the corresponding eBay user.
     * - minOccurs: 0
     * @var string
     */
    public $SellerEIASToken;
    /**
     * The CancelReason
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the reason why the order cancellation was initiated. This field is only returned if an order cancellation has been initiated by the buyer or seller. Typical buyer-initiated cancellation reasons include
     * 'OrderPlacedByMistake', 'WontArriveInTime', or 'FoundCheaperPrice'. Sellers may initiate an order cancellation on behalf of the buyer. In this scenario, the seller should state the cancellation reason as 'BuyerCancelOrder'. If the seller is
     * cancelling an order because he/she is out of stock on an item, the seller should state the cancellation reason as 'OutOfStock'. Unfortunately, in this scenario, the seller will receive a seller defect for this cancellation reason. See <a
     * href="types/CancelReasonCodeType.html">CancelReasonCodeType</a> for the complete list of enumeration values that can be returned in this field. <br><br> <span class="tablenote"><strong>Note:</strong> Only the <b>CancelReason</b> and
     * <b>CancelStatus</b> fields are returned. The <b>CancelDetail</b> container and the <b>CancelReasonDetails</b> field are no longer returned. A seller can use the <a
     * href="https://developer.ebay.com/Devzone/post-order/post-order_v2_cancellation_search__get.html">Search Cancellations</a> method of the Post-Order API to retrieve more details on a cancelled order. If the seller does use this method, they can use the
     * Order ID or Item ID as a filter in the request to retrieve the correct cancellation request. </span>
     * - minOccurs: 0
     * @var string
     */
    public $CancelReason;
    /**
     * The CancelStatus
     * Meta information extracted from the WSDL
     * - documentation: The current status for the order cancellation request (if it exists for the order). This field is only returned if a cancellation request has been made on the order, or if the order is currently going through the cancellation
     * process, or if the order has already been cancelled. <br><br> <span class="tablenote"><strong>Note:</strong> Only the <b>CancelReason</b> and <b>CancelStatus</b> fields are returned. The <b>CancelDetail</b> container and the
     * <b>CancelReasonDetails</b> field are no longer returned. A seller can use the <a href="https://developer.ebay.com/Devzone/post-order/post-order_v2_cancellation_search__get.html">Search Cancellations</a> method of the Post-Order API to retrieve more
     * details on a cancelled order. If the seller does use this method, they can use the Order ID or Item ID as a filter in the request to retrieve the correct cancellation request. </span>
     * - minOccurs: 0
     * @var string
     */
    public $CancelStatus;
    /**
     * The CancelReasonDetails
     * Meta information extracted from the WSDL
     * - documentation: The detailed reason for the cancellation of an eBay order. This field is only returned if it is available when a cancellation request has been made on the order, or if the order is currently going through the cancellation process, or
     * if the order has already been cancelled. <br><br> <span class="tablenote"><strong>Note:</strong> Only the <b>CancelReason</b> and <b>CancelStatus</b> fields are returned. The <b>CancelDetail</b> container and the <b>CancelReasonDetails</b> field are
     * no longer returned. A seller can use the <a href="https://developer.ebay.com/Devzone/post-order/post-order_v2_cancellation_search__get.html">Search Cancellations</a> method of the Post-Order API to retrieve more details on a cancelled order. If the
     * seller does use this method, they can use the Order ID or Item ID as a filter in the request to retrieve the correct cancellation request. </span>
     * - minOccurs: 0
     * @var string
     */
    public $CancelReasonDetails;
    /**
     * The ShippingConvenienceCharge
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><strong>Note:</strong> This field is no longer applicable/used. It was previously used for eBay Now and 'eBay On Demand Delivery' orders - two features that have been deprecated. </span>
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $ShippingConvenienceCharge;
    /**
     * The CancelDetail
     * Meta information extracted from the WSDL
     * - documentation: This container consists of details related to an eBay order that has been cancelled or is in the process of possibly being cancelled. Order cancellation requests can be viewed and managed with the cancellation API calls that are
     * available in the <a href="https://developer.ebay.com/Devzone/post-order/index.html#CallIndex">Post Order API</a>. <br><br> <span class="tablenote"><strong>Note:</strong> Only the <b>CancelReason</b> and <b>CancelStatus</b> fields are returned. The
     * <b>CancelDetail</b> container and the <b>CancelReasonDetails</b> field are no longer returned. A seller can use the <a href="https://developer.ebay.com/Devzone/post-order/post-order_v2_cancellation_search__get.html">Search Cancellations</a> method of
     * the Post-Order API to retrieve more details on a cancelled order. If the seller does use this method, they can use the Order ID or Item ID as a filter in the request to retrieve the correct cancellation request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\CancelDetailType[]
     */
    public $CancelDetail;
    /**
     * The LogisticsPlanType
     * Meta information extracted from the WSDL
     * - documentation: This field will be returned at the order level only if the buyer purchased a digital gift card, which is delivered by email, or if the buyer purchased an item that is enabled with the 'Click and Collect' feature. <br/><br/>
     * Currently, <strong>LogisticsPlanType</strong> has two applicable values: <code>PickUpDropOff</code>, which indicates that the buyer selected the 'Click and Collect' option. With Click and Collect, buyers are able to purchase from thousands of sellers
     * on the eBay UK and Australia sites, and then pick up their order from the nearest 'eBay Collection Point', including over 750 Argos stores in the UK. The Click and Collect feature is only available on the eBay UK and Australia sites; or,
     * <code>DigitalDelivery</code>, which indicates that the order is a digital gift card that will be delivered to the buyer or recipient of the gift card by email.
     * - minOccurs: 0
     * @var string
     */
    public $LogisticsPlanType;
    /**
     * The BuyerTaxIdentifier
     * Meta information extracted from the WSDL
     * - documentation: This container consists of taxpayer identification for the buyer. Although this container may be used for other purposes at a later date, it is currently used by sellers selling on the Italy or Spain site to retrieve the taxpayer ID
     * of the buyer. <br/><br/> It is now required that buyers registered on the Italy site provide their Codice Fiscale ID (similar to the Social Security Number for US citizens) before buying an item on the Italy site. <br/><br/> On the Spain site, a
     * Spanish seller has the option to require that Spanish buyers (registered on Spain site) provide a tax ID before checkout. This option is set by the seller at the account level. Once a Spanish buyer provides a tax ID, this tax ID is associated with
     * his/her account, and once a tax ID is associated with the account, Spanish buyer will be asked to provide the tax ID during checkout on all eBay sites. Buyers with a registered address outside of Spain will not be asked to provide a tax ID during
     * checkout. <br/><br/> This container is only returned for Spanish or Italian sellers when the buyer was asked to provide tax identifier information during checkout. A <strong>BuyerTaxIdentifier</strong> container will be returned for each tax ID that
     * is associated with the buyer's account.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\TaxIdentifierType[]
     */
    public $BuyerTaxIdentifier;
    /**
     * The BuyerPackageEnclosures
     * Meta information extracted from the WSDL
     * - documentation: This container is returned in <b>GetOrders</b> (and other order management calls) if the 'Pay Upon Invoice' option is being offered to the buyer, and the seller is including payment instructions in the shipping package(s) for the
     * order. The 'Pay Upon Invoice' option is only available on the Germany site.
     * - minOccurs: 0
     * @var \StructType\BuyerPackageEnclosuresType
     */
    public $BuyerPackageEnclosures;
    /**
     * The ExtendedOrderID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for an eBay order in the new eBay REST API model. <b>ExtendedOrderID</b> values will be used to identify orders in REST-based APIs, including the Post-Order API and the Fulfillment API. <br><br> <b>For GetOrders,
     * GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version
     * 1019, the correct Order ID is returned to the buyer or seller, but a dummy Order ID value of <code>1000000000000</code> will be returned to all third parties. <br><br> <span class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format
     * of order identifier values, and this new format is relevant to both legacy and REST API-based order ID fields. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and
     * multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support. <br><br> For developers and sellers
     * who are already integrated with the Trading API's order management calls, this change shouldn't impact your integration unless you parse the existing order identifiers (e.g., <b>OrderID</b> or <b>OrderLineItemID</b>), or otherwise infer meaning from
     * the format (e.g., differentiating between a single line item order versus a multiple line item order). Because we realize that some integrations may have logic that is dependent upon the old identifier format, eBay is rolling out this Trading API
     * change with version control to support a transition period of approximately 9 months before applications must switch to the new format completely. <br><br> During the transition period, for developers/sellers using a Trading WSDL older than Version
     * 1113, they can use the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header in API calls to control whether the new or old <b>OrderID</b> format is returned in call response payloads. To get the new <b>OrderID</b> format, the value of the
     * <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header must be set to <code>1113</code>. During the transition period and even after, the new and old <b>OrderID</b> formats will still be supported/accepted in all Trading API call request payloads. After
     * the transition period (which will be announced), only the new <b>OrderID</b> format will be returned in all Trading API call response payloads, regardless of the Trading WSDL version used or specified compatibility level. </span>
     * - minOccurs: 0
     * @var string
     */
    public $ExtendedOrderID;
    /**
     * The ContainseBayPlusTransaction
     * Meta information extracted from the WSDL
     * - documentation: If <code>true</code>, the order contains a transaction for an item that was purchased under the eBay Plus program. eBay Plus is a premium account option for buyers, which provides benefits such as fast free domestic shipping and free
     * returns on selected items. Top-Rated eBay sellers must opt in to eBay Plus to be able offer the program on qualifying listings. Sellers must commit to next-day delivery of those items. <br/><br/> <span class="tablenote"><b>Note:</b> Currently, eBay
     * Plus is available only to buyers in Germany, Austria, and Australia. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $ContainseBayPlusTransaction;
    /**
     * The eBayCollectAndRemitTax
     * Meta information extracted from the WSDL
     * - documentation: This boolean field is returned as <code>true</code> if one or more line items in the order are subject to a tax (US sales tax or Australian Goods and Services tax) that eBay will collect and remit to the proper taxing authority on
     * the buyer's behalf. This field is also returned if <code>false</code> (not subject to eBay Collect and Remit). A <b>Transaction.eBayCollectAndRemitTaxes</b> container is returned for any order line items subject to such a tax, and the type and amount
     * of this tax is displayed in the <b>Transaction.eBayCollectAndRemitTaxes.TaxDetails</b> container. <br/><br/> Australian 'Goods and Services' tax (GST) is automatically charged to buyers outside of Australia when they purchase items on the eBay
     * Australia site. Sellers on the Australia site do not have to take any extra steps to enable the collection of GST, as this tax is collected by eBay and remitted to the Australian government. For more information about Australian GST, see the <a
     * href="https://www.ebay.com.au/help/selling/fees-credits-invoices/taxes-import-charges?id=4121">Taxes and import charges</a> help topic. <br/><br/> As of April 1, 2020, buyers in 40 US states will automatically be charged sales tax for eBay purchases,
     * and are subject to eBay Collect and Remit Tax. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. Sellers do not have to take any extra steps to enable the collection of this sales tax. If the seller is
     * employing a Sales Tax Table for the listing, and a sales tax rate is established for a state that is subject to 'eBay Collect and Remit', this sales tax rate will be ignored by eBay. For a list of the US states that are or will become subject to
     * 'eBay Collect and Remit Tax' (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
     * - minOccurs: 0
     * @var bool
     */
    public $eBayCollectAndRemitTax;
    /**
     * The OrderLineItemCount
     * Meta information extracted from the WSDL
     * - documentation: This field indicates the total number of line items in the order. This field is returned under the <b>ContainingOrder</b> container of a <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. In order for the
     * <b>ContainingOrder</b> container to be returned, a user must include the <b>IncludeContainingOrder</b> field in the call request and set its value to <b>true</b>. <br/><br/> <span class="tablenote"><b>Note:</b> This field is automatically returned if
     * the user is using Version 1113 of the Trading WSDL (or newer, as versions roll out). If the user is using Versions 1107 or 1111 of the Trading WSDL, this field will only be returned if the user includes the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP
     * header and sets its value to <code>1113</code>. If a user is using a Trading WSDL older than 1107, this field will not be returned. </span>
     * - minOccurs: 0
     * @var int
     */
    public $OrderLineItemCount;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for OrderType
     * @uses OrderType::setOrderID()
     * @uses OrderType::setOrderStatus()
     * @uses OrderType::setAdjustmentAmount()
     * @uses OrderType::setAmountPaid()
     * @uses OrderType::setAmountSaved()
     * @uses OrderType::setCheckoutStatus()
     * @uses OrderType::setShippingDetails()
     * @uses OrderType::setCreatingUserRole()
     * @uses OrderType::setCreatedTime()
     * @uses OrderType::setPaymentMethods()
     * @uses OrderType::setSellerEmail()
     * @uses OrderType::setShippingAddress()
     * @uses OrderType::setShippingServiceSelected()
     * @uses OrderType::setSubtotal()
     * @uses OrderType::setTotal()
     * @uses OrderType::setExternalTransaction()
     * @uses OrderType::setTransactionArray()
     * @uses OrderType::setBuyerUserID()
     * @uses OrderType::setPaidTime()
     * @uses OrderType::setShippedTime()
     * @uses OrderType::setIntegratedMerchantCreditCardEnabled()
     * @uses OrderType::setBundlePurchase()
     * @uses OrderType::setBuyerCheckoutMessage()
     * @uses OrderType::setEIASToken()
     * @uses OrderType::setPaymentHoldStatus()
     * @uses OrderType::setPaymentHoldDetails()
     * @uses OrderType::setRefundAmount()
     * @uses OrderType::setRefundStatus()
     * @uses OrderType::setRefundArray()
     * @uses OrderType::setIsMultiLegShipping()
     * @uses OrderType::setMultiLegShippingDetails()
     * @uses OrderType::setMonetaryDetails()
     * @uses OrderType::setPickupDetails()
     * @uses OrderType::setPickupMethodSelected()
     * @uses OrderType::setSellerUserID()
     * @uses OrderType::setSellerEIASToken()
     * @uses OrderType::setCancelReason()
     * @uses OrderType::setCancelStatus()
     * @uses OrderType::setCancelReasonDetails()
     * @uses OrderType::setShippingConvenienceCharge()
     * @uses OrderType::setCancelDetail()
     * @uses OrderType::setLogisticsPlanType()
     * @uses OrderType::setBuyerTaxIdentifier()
     * @uses OrderType::setBuyerPackageEnclosures()
     * @uses OrderType::setExtendedOrderID()
     * @uses OrderType::setContainseBayPlusTransaction()
     * @uses OrderType::setEBayCollectAndRemitTax()
     * @uses OrderType::setOrderLineItemCount()
     * @uses OrderType::setAny()
     * @param string $orderID
     * @param string $orderStatus
     * @param \StructType\AmountType $adjustmentAmount
     * @param \StructType\AmountType $amountPaid
     * @param \StructType\AmountType $amountSaved
     * @param \StructType\CheckoutStatusType $checkoutStatus
     * @param \StructType\ShippingDetailsType $shippingDetails
     * @param string $creatingUserRole
     * @param string $createdTime
     * @param string[] $paymentMethods
     * @param string $sellerEmail
     * @param \StructType\AddressType $shippingAddress
     * @param \StructType\ShippingServiceOptionsType $shippingServiceSelected
     * @param \StructType\AmountType $subtotal
     * @param \StructType\AmountType $total
     * @param \StructType\ExternalTransactionType[] $externalTransaction
     * @param \ArrayType\TransactionArrayType $transactionArray
     * @param string $buyerUserID
     * @param string $paidTime
     * @param string $shippedTime
     * @param bool $integratedMerchantCreditCardEnabled
     * @param bool $bundlePurchase
     * @param string $buyerCheckoutMessage
     * @param string $eIASToken
     * @param string $paymentHoldStatus
     * @param \StructType\PaymentHoldDetailType $paymentHoldDetails
     * @param \StructType\AmountType $refundAmount
     * @param string $refundStatus
     * @param \ArrayType\RefundArrayType $refundArray
     * @param bool $isMultiLegShipping
     * @param \StructType\MultiLegShippingDetailsType $multiLegShippingDetails
     * @param \StructType\PaymentsInformationType $monetaryDetails
     * @param \StructType\PickupDetailsType $pickupDetails
     * @param \StructType\PickupMethodSelectedType $pickupMethodSelected
     * @param string $sellerUserID
     * @param string $sellerEIASToken
     * @param string $cancelReason
     * @param string $cancelStatus
     * @param string $cancelReasonDetails
     * @param \StructType\AmountType $shippingConvenienceCharge
     * @param \StructType\CancelDetailType[] $cancelDetail
     * @param string $logisticsPlanType
     * @param \StructType\TaxIdentifierType[] $buyerTaxIdentifier
     * @param \StructType\BuyerPackageEnclosuresType $buyerPackageEnclosures
     * @param string $extendedOrderID
     * @param bool $containseBayPlusTransaction
     * @param bool $eBayCollectAndRemitTax
     * @param int $orderLineItemCount
     * @param \DOMDocument $any
     */
    public function __construct($orderID = null, $orderStatus = null, \StructType\AmountType $adjustmentAmount = null, \StructType\AmountType $amountPaid = null, \StructType\AmountType $amountSaved = null, \StructType\CheckoutStatusType $checkoutStatus = null, \StructType\ShippingDetailsType $shippingDetails = null, $creatingUserRole = null, $createdTime = null, array $paymentMethods = array(), $sellerEmail = null, \StructType\AddressType $shippingAddress = null, \StructType\ShippingServiceOptionsType $shippingServiceSelected = null, \StructType\AmountType $subtotal = null, \StructType\AmountType $total = null, array $externalTransaction = array(), \ArrayType\TransactionArrayType $transactionArray = null, $buyerUserID = null, $paidTime = null, $shippedTime = null, $integratedMerchantCreditCardEnabled = null, $bundlePurchase = null, $buyerCheckoutMessage = null, $eIASToken = null, $paymentHoldStatus = null, \StructType\PaymentHoldDetailType $paymentHoldDetails = null, \StructType\AmountType $refundAmount = null, $refundStatus = null, \ArrayType\RefundArrayType $refundArray = null, $isMultiLegShipping = null, \StructType\MultiLegShippingDetailsType $multiLegShippingDetails = null, \StructType\PaymentsInformationType $monetaryDetails = null, \StructType\PickupDetailsType $pickupDetails = null, \StructType\PickupMethodSelectedType $pickupMethodSelected = null, $sellerUserID = null, $sellerEIASToken = null, $cancelReason = null, $cancelStatus = null, $cancelReasonDetails = null, \StructType\AmountType $shippingConvenienceCharge = null, array $cancelDetail = array(), $logisticsPlanType = null, array $buyerTaxIdentifier = array(), \StructType\BuyerPackageEnclosuresType $buyerPackageEnclosures = null, $extendedOrderID = null, $containseBayPlusTransaction = null, $eBayCollectAndRemitTax = null, $orderLineItemCount = null, \DOMDocument $any = null)
    {
        $this
            ->setOrderID($orderID)
            ->setOrderStatus($orderStatus)
            ->setAdjustmentAmount($adjustmentAmount)
            ->setAmountPaid($amountPaid)
            ->setAmountSaved($amountSaved)
            ->setCheckoutStatus($checkoutStatus)
            ->setShippingDetails($shippingDetails)
            ->setCreatingUserRole($creatingUserRole)
            ->setCreatedTime($createdTime)
            ->setPaymentMethods($paymentMethods)
            ->setSellerEmail($sellerEmail)
            ->setShippingAddress($shippingAddress)
            ->setShippingServiceSelected($shippingServiceSelected)
            ->setSubtotal($subtotal)
            ->setTotal($total)
            ->setExternalTransaction($externalTransaction)
            ->setTransactionArray($transactionArray)
            ->setBuyerUserID($buyerUserID)
            ->setPaidTime($paidTime)
            ->setShippedTime($shippedTime)
            ->setIntegratedMerchantCreditCardEnabled($integratedMerchantCreditCardEnabled)
            ->setBundlePurchase($bundlePurchase)
            ->setBuyerCheckoutMessage($buyerCheckoutMessage)
            ->setEIASToken($eIASToken)
            ->setPaymentHoldStatus($paymentHoldStatus)
            ->setPaymentHoldDetails($paymentHoldDetails)
            ->setRefundAmount($refundAmount)
            ->setRefundStatus($refundStatus)
            ->setRefundArray($refundArray)
            ->setIsMultiLegShipping($isMultiLegShipping)
            ->setMultiLegShippingDetails($multiLegShippingDetails)
            ->setMonetaryDetails($monetaryDetails)
            ->setPickupDetails($pickupDetails)
            ->setPickupMethodSelected($pickupMethodSelected)
            ->setSellerUserID($sellerUserID)
            ->setSellerEIASToken($sellerEIASToken)
            ->setCancelReason($cancelReason)
            ->setCancelStatus($cancelStatus)
            ->setCancelReasonDetails($cancelReasonDetails)
            ->setShippingConvenienceCharge($shippingConvenienceCharge)
            ->setCancelDetail($cancelDetail)
            ->setLogisticsPlanType($logisticsPlanType)
            ->setBuyerTaxIdentifier($buyerTaxIdentifier)
            ->setBuyerPackageEnclosures($buyerPackageEnclosures)
            ->setExtendedOrderID($extendedOrderID)
            ->setContainseBayPlusTransaction($containseBayPlusTransaction)
            ->setEBayCollectAndRemitTax($eBayCollectAndRemitTax)
            ->setOrderLineItemCount($orderLineItemCount)
            ->setAny($any);
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
     * @return \StructType\OrderType
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
     * Get OrderStatus value
     * @return string|null
     */
    public function getOrderStatus()
    {
        return $this->OrderStatus;
    }
    /**
     * Set OrderStatus value
     * @uses \EnumType\OrderStatusCodeType::valueIsValid()
     * @uses \EnumType\OrderStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $orderStatus
     * @return \StructType\OrderType
     */
    public function setOrderStatus($orderStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\OrderStatusCodeType::valueIsValid($orderStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\OrderStatusCodeType', is_array($orderStatus) ? implode(', ', $orderStatus) : var_export($orderStatus, true), implode(', ', \EnumType\OrderStatusCodeType::getValidValues())), __LINE__);
        }
        $this->OrderStatus = $orderStatus;
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
     * @return \StructType\OrderType
     */
    public function setAdjustmentAmount(\StructType\AmountType $adjustmentAmount = null)
    {
        $this->AdjustmentAmount = $adjustmentAmount;
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
     * @return \StructType\OrderType
     */
    public function setAmountPaid(\StructType\AmountType $amountPaid = null)
    {
        $this->AmountPaid = $amountPaid;
        return $this;
    }
    /**
     * Get AmountSaved value
     * @return \StructType\AmountType|null
     */
    public function getAmountSaved()
    {
        return $this->AmountSaved;
    }
    /**
     * Set AmountSaved value
     * @param \StructType\AmountType $amountSaved
     * @return \StructType\OrderType
     */
    public function setAmountSaved(\StructType\AmountType $amountSaved = null)
    {
        $this->AmountSaved = $amountSaved;
        return $this;
    }
    /**
     * Get CheckoutStatus value
     * @return \StructType\CheckoutStatusType|null
     */
    public function getCheckoutStatus()
    {
        return $this->CheckoutStatus;
    }
    /**
     * Set CheckoutStatus value
     * @param \StructType\CheckoutStatusType $checkoutStatus
     * @return \StructType\OrderType
     */
    public function setCheckoutStatus(\StructType\CheckoutStatusType $checkoutStatus = null)
    {
        $this->CheckoutStatus = $checkoutStatus;
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
     * @return \StructType\OrderType
     */
    public function setShippingDetails(\StructType\ShippingDetailsType $shippingDetails = null)
    {
        $this->ShippingDetails = $shippingDetails;
        return $this;
    }
    /**
     * Get CreatingUserRole value
     * @return string|null
     */
    public function getCreatingUserRole()
    {
        return $this->CreatingUserRole;
    }
    /**
     * Set CreatingUserRole value
     * @uses \EnumType\TradingRoleCodeType::valueIsValid()
     * @uses \EnumType\TradingRoleCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $creatingUserRole
     * @return \StructType\OrderType
     */
    public function setCreatingUserRole($creatingUserRole = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\TradingRoleCodeType::valueIsValid($creatingUserRole)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TradingRoleCodeType', is_array($creatingUserRole) ? implode(', ', $creatingUserRole) : var_export($creatingUserRole, true), implode(', ', \EnumType\TradingRoleCodeType::getValidValues())), __LINE__);
        }
        $this->CreatingUserRole = $creatingUserRole;
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
     * @return \StructType\OrderType
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
        foreach ($values as $orderTypePaymentMethodsItem) {
            // validation for constraint: enumeration
            if (!\EnumType\BuyerPaymentMethodCodeType::valueIsValid($orderTypePaymentMethodsItem)) {
                $invalidValues[] = is_object($orderTypePaymentMethodsItem) ? get_class($orderTypePaymentMethodsItem) : sprintf('%s(%s)', gettype($orderTypePaymentMethodsItem), var_export($orderTypePaymentMethodsItem, true));
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
     * @return \StructType\OrderType
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
     * @return \StructType\OrderType
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
     * Get SellerEmail value
     * @return string|null
     */
    public function getSellerEmail()
    {
        return $this->SellerEmail;
    }
    /**
     * Set SellerEmail value
     * @param string $sellerEmail
     * @return \StructType\OrderType
     */
    public function setSellerEmail($sellerEmail = null)
    {
        // validation for constraint: string
        if (!is_null($sellerEmail) && !is_string($sellerEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerEmail, true), gettype($sellerEmail)), __LINE__);
        }
        $this->SellerEmail = $sellerEmail;
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
     * @return \StructType\OrderType
     */
    public function setShippingAddress(\StructType\AddressType $shippingAddress = null)
    {
        $this->ShippingAddress = $shippingAddress;
        return $this;
    }
    /**
     * Get ShippingServiceSelected value
     * @return \StructType\ShippingServiceOptionsType|null
     */
    public function getShippingServiceSelected()
    {
        return $this->ShippingServiceSelected;
    }
    /**
     * Set ShippingServiceSelected value
     * @param \StructType\ShippingServiceOptionsType $shippingServiceSelected
     * @return \StructType\OrderType
     */
    public function setShippingServiceSelected(\StructType\ShippingServiceOptionsType $shippingServiceSelected = null)
    {
        $this->ShippingServiceSelected = $shippingServiceSelected;
        return $this;
    }
    /**
     * Get Subtotal value
     * @return \StructType\AmountType|null
     */
    public function getSubtotal()
    {
        return $this->Subtotal;
    }
    /**
     * Set Subtotal value
     * @param \StructType\AmountType $subtotal
     * @return \StructType\OrderType
     */
    public function setSubtotal(\StructType\AmountType $subtotal = null)
    {
        $this->Subtotal = $subtotal;
        return $this;
    }
    /**
     * Get Total value
     * @return \StructType\AmountType|null
     */
    public function getTotal()
    {
        return $this->Total;
    }
    /**
     * Set Total value
     * @param \StructType\AmountType $total
     * @return \StructType\OrderType
     */
    public function setTotal(\StructType\AmountType $total = null)
    {
        $this->Total = $total;
        return $this;
    }
    /**
     * Get ExternalTransaction value
     * @return \StructType\ExternalTransactionType[]|null
     */
    public function getExternalTransaction()
    {
        return $this->ExternalTransaction;
    }
    /**
     * This method is responsible for validating the values passed to the setExternalTransaction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExternalTransaction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExternalTransactionForArrayConstraintsFromSetExternalTransaction(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $orderTypeExternalTransactionItem) {
            // validation for constraint: itemType
            if (!$orderTypeExternalTransactionItem instanceof \StructType\ExternalTransactionType) {
                $invalidValues[] = is_object($orderTypeExternalTransactionItem) ? get_class($orderTypeExternalTransactionItem) : sprintf('%s(%s)', gettype($orderTypeExternalTransactionItem), var_export($orderTypeExternalTransactionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExternalTransaction property can only contain items of type \StructType\ExternalTransactionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ExternalTransaction value
     * @throws \InvalidArgumentException
     * @param \StructType\ExternalTransactionType[] $externalTransaction
     * @return \StructType\OrderType
     */
    public function setExternalTransaction(array $externalTransaction = array())
    {
        // validation for constraint: array
        if ('' !== ($externalTransactionArrayErrorMessage = self::validateExternalTransactionForArrayConstraintsFromSetExternalTransaction($externalTransaction))) {
            throw new \InvalidArgumentException($externalTransactionArrayErrorMessage, __LINE__);
        }
        $this->ExternalTransaction = $externalTransaction;
        return $this;
    }
    /**
     * Add item to ExternalTransaction value
     * @throws \InvalidArgumentException
     * @param \StructType\ExternalTransactionType $item
     * @return \StructType\OrderType
     */
    public function addToExternalTransaction(\StructType\ExternalTransactionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExternalTransactionType) {
            throw new \InvalidArgumentException(sprintf('The ExternalTransaction property can only contain items of type \StructType\ExternalTransactionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ExternalTransaction[] = $item;
        return $this;
    }
    /**
     * Get TransactionArray value
     * @return \ArrayType\TransactionArrayType|null
     */
    public function getTransactionArray()
    {
        return $this->TransactionArray;
    }
    /**
     * Set TransactionArray value
     * @param \ArrayType\TransactionArrayType $transactionArray
     * @return \StructType\OrderType
     */
    public function setTransactionArray(\ArrayType\TransactionArrayType $transactionArray = null)
    {
        $this->TransactionArray = $transactionArray;
        return $this;
    }
    /**
     * Get BuyerUserID value
     * @return string|null
     */
    public function getBuyerUserID()
    {
        return $this->BuyerUserID;
    }
    /**
     * Set BuyerUserID value
     * @param string $buyerUserID
     * @return \StructType\OrderType
     */
    public function setBuyerUserID($buyerUserID = null)
    {
        // validation for constraint: string
        if (!is_null($buyerUserID) && !is_string($buyerUserID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buyerUserID, true), gettype($buyerUserID)), __LINE__);
        }
        $this->BuyerUserID = $buyerUserID;
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
     * @return \StructType\OrderType
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
     * Get ShippedTime value
     * @return string|null
     */
    public function getShippedTime()
    {
        return $this->ShippedTime;
    }
    /**
     * Set ShippedTime value
     * @param string $shippedTime
     * @return \StructType\OrderType
     */
    public function setShippedTime($shippedTime = null)
    {
        // validation for constraint: string
        if (!is_null($shippedTime) && !is_string($shippedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippedTime, true), gettype($shippedTime)), __LINE__);
        }
        $this->ShippedTime = $shippedTime;
        return $this;
    }
    /**
     * Get IntegratedMerchantCreditCardEnabled value
     * @return bool|null
     */
    public function getIntegratedMerchantCreditCardEnabled()
    {
        return $this->IntegratedMerchantCreditCardEnabled;
    }
    /**
     * Set IntegratedMerchantCreditCardEnabled value
     * @param bool $integratedMerchantCreditCardEnabled
     * @return \StructType\OrderType
     */
    public function setIntegratedMerchantCreditCardEnabled($integratedMerchantCreditCardEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($integratedMerchantCreditCardEnabled) && !is_bool($integratedMerchantCreditCardEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($integratedMerchantCreditCardEnabled, true), gettype($integratedMerchantCreditCardEnabled)), __LINE__);
        }
        $this->IntegratedMerchantCreditCardEnabled = $integratedMerchantCreditCardEnabled;
        return $this;
    }
    /**
     * Get BundlePurchase value
     * @return bool|null
     */
    public function getBundlePurchase()
    {
        return $this->BundlePurchase;
    }
    /**
     * Set BundlePurchase value
     * @param bool $bundlePurchase
     * @return \StructType\OrderType
     */
    public function setBundlePurchase($bundlePurchase = null)
    {
        // validation for constraint: boolean
        if (!is_null($bundlePurchase) && !is_bool($bundlePurchase)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bundlePurchase, true), gettype($bundlePurchase)), __LINE__);
        }
        $this->BundlePurchase = $bundlePurchase;
        return $this;
    }
    /**
     * Get BuyerCheckoutMessage value
     * @return string|null
     */
    public function getBuyerCheckoutMessage()
    {
        return $this->BuyerCheckoutMessage;
    }
    /**
     * Set BuyerCheckoutMessage value
     * @param string $buyerCheckoutMessage
     * @return \StructType\OrderType
     */
    public function setBuyerCheckoutMessage($buyerCheckoutMessage = null)
    {
        // validation for constraint: string
        if (!is_null($buyerCheckoutMessage) && !is_string($buyerCheckoutMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buyerCheckoutMessage, true), gettype($buyerCheckoutMessage)), __LINE__);
        }
        $this->BuyerCheckoutMessage = $buyerCheckoutMessage;
        return $this;
    }
    /**
     * Get EIASToken value
     * @return string|null
     */
    public function getEIASToken()
    {
        return $this->EIASToken;
    }
    /**
     * Set EIASToken value
     * @param string $eIASToken
     * @return \StructType\OrderType
     */
    public function setEIASToken($eIASToken = null)
    {
        // validation for constraint: string
        if (!is_null($eIASToken) && !is_string($eIASToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eIASToken, true), gettype($eIASToken)), __LINE__);
        }
        $this->EIASToken = $eIASToken;
        return $this;
    }
    /**
     * Get PaymentHoldStatus value
     * @return string|null
     */
    public function getPaymentHoldStatus()
    {
        return $this->PaymentHoldStatus;
    }
    /**
     * Set PaymentHoldStatus value
     * @uses \EnumType\PaymentHoldStatusCodeType::valueIsValid()
     * @uses \EnumType\PaymentHoldStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentHoldStatus
     * @return \StructType\OrderType
     */
    public function setPaymentHoldStatus($paymentHoldStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PaymentHoldStatusCodeType::valueIsValid($paymentHoldStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\PaymentHoldStatusCodeType', is_array($paymentHoldStatus) ? implode(', ', $paymentHoldStatus) : var_export($paymentHoldStatus, true), implode(', ', \EnumType\PaymentHoldStatusCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentHoldStatus = $paymentHoldStatus;
        return $this;
    }
    /**
     * Get PaymentHoldDetails value
     * @return \StructType\PaymentHoldDetailType|null
     */
    public function getPaymentHoldDetails()
    {
        return $this->PaymentHoldDetails;
    }
    /**
     * Set PaymentHoldDetails value
     * @param \StructType\PaymentHoldDetailType $paymentHoldDetails
     * @return \StructType\OrderType
     */
    public function setPaymentHoldDetails(\StructType\PaymentHoldDetailType $paymentHoldDetails = null)
    {
        $this->PaymentHoldDetails = $paymentHoldDetails;
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
     * @return \StructType\OrderType
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
     * @return \StructType\OrderType
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
     * Get RefundArray value
     * @return \ArrayType\RefundArrayType|null
     */
    public function getRefundArray()
    {
        return $this->RefundArray;
    }
    /**
     * Set RefundArray value
     * @param \ArrayType\RefundArrayType $refundArray
     * @return \StructType\OrderType
     */
    public function setRefundArray(\ArrayType\RefundArrayType $refundArray = null)
    {
        $this->RefundArray = $refundArray;
        return $this;
    }
    /**
     * Get IsMultiLegShipping value
     * @return bool|null
     */
    public function getIsMultiLegShipping()
    {
        return $this->IsMultiLegShipping;
    }
    /**
     * Set IsMultiLegShipping value
     * @param bool $isMultiLegShipping
     * @return \StructType\OrderType
     */
    public function setIsMultiLegShipping($isMultiLegShipping = null)
    {
        // validation for constraint: boolean
        if (!is_null($isMultiLegShipping) && !is_bool($isMultiLegShipping)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isMultiLegShipping, true), gettype($isMultiLegShipping)), __LINE__);
        }
        $this->IsMultiLegShipping = $isMultiLegShipping;
        return $this;
    }
    /**
     * Get MultiLegShippingDetails value
     * @return \StructType\MultiLegShippingDetailsType|null
     */
    public function getMultiLegShippingDetails()
    {
        return $this->MultiLegShippingDetails;
    }
    /**
     * Set MultiLegShippingDetails value
     * @param \StructType\MultiLegShippingDetailsType $multiLegShippingDetails
     * @return \StructType\OrderType
     */
    public function setMultiLegShippingDetails(\StructType\MultiLegShippingDetailsType $multiLegShippingDetails = null)
    {
        $this->MultiLegShippingDetails = $multiLegShippingDetails;
        return $this;
    }
    /**
     * Get MonetaryDetails value
     * @return \StructType\PaymentsInformationType|null
     */
    public function getMonetaryDetails()
    {
        return $this->MonetaryDetails;
    }
    /**
     * Set MonetaryDetails value
     * @param \StructType\PaymentsInformationType $monetaryDetails
     * @return \StructType\OrderType
     */
    public function setMonetaryDetails(\StructType\PaymentsInformationType $monetaryDetails = null)
    {
        $this->MonetaryDetails = $monetaryDetails;
        return $this;
    }
    /**
     * Get PickupDetails value
     * @return \StructType\PickupDetailsType|null
     */
    public function getPickupDetails()
    {
        return $this->PickupDetails;
    }
    /**
     * Set PickupDetails value
     * @param \StructType\PickupDetailsType $pickupDetails
     * @return \StructType\OrderType
     */
    public function setPickupDetails(\StructType\PickupDetailsType $pickupDetails = null)
    {
        $this->PickupDetails = $pickupDetails;
        return $this;
    }
    /**
     * Get PickupMethodSelected value
     * @return \StructType\PickupMethodSelectedType|null
     */
    public function getPickupMethodSelected()
    {
        return $this->PickupMethodSelected;
    }
    /**
     * Set PickupMethodSelected value
     * @param \StructType\PickupMethodSelectedType $pickupMethodSelected
     * @return \StructType\OrderType
     */
    public function setPickupMethodSelected(\StructType\PickupMethodSelectedType $pickupMethodSelected = null)
    {
        $this->PickupMethodSelected = $pickupMethodSelected;
        return $this;
    }
    /**
     * Get SellerUserID value
     * @return string|null
     */
    public function getSellerUserID()
    {
        return $this->SellerUserID;
    }
    /**
     * Set SellerUserID value
     * @param string $sellerUserID
     * @return \StructType\OrderType
     */
    public function setSellerUserID($sellerUserID = null)
    {
        // validation for constraint: string
        if (!is_null($sellerUserID) && !is_string($sellerUserID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerUserID, true), gettype($sellerUserID)), __LINE__);
        }
        $this->SellerUserID = $sellerUserID;
        return $this;
    }
    /**
     * Get SellerEIASToken value
     * @return string|null
     */
    public function getSellerEIASToken()
    {
        return $this->SellerEIASToken;
    }
    /**
     * Set SellerEIASToken value
     * @param string $sellerEIASToken
     * @return \StructType\OrderType
     */
    public function setSellerEIASToken($sellerEIASToken = null)
    {
        // validation for constraint: string
        if (!is_null($sellerEIASToken) && !is_string($sellerEIASToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerEIASToken, true), gettype($sellerEIASToken)), __LINE__);
        }
        $this->SellerEIASToken = $sellerEIASToken;
        return $this;
    }
    /**
     * Get CancelReason value
     * @return string|null
     */
    public function getCancelReason()
    {
        return $this->CancelReason;
    }
    /**
     * Set CancelReason value
     * @param string $cancelReason
     * @return \StructType\OrderType
     */
    public function setCancelReason($cancelReason = null)
    {
        // validation for constraint: string
        if (!is_null($cancelReason) && !is_string($cancelReason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cancelReason, true), gettype($cancelReason)), __LINE__);
        }
        $this->CancelReason = $cancelReason;
        return $this;
    }
    /**
     * Get CancelStatus value
     * @return string|null
     */
    public function getCancelStatus()
    {
        return $this->CancelStatus;
    }
    /**
     * Set CancelStatus value
     * @uses \EnumType\CancelStatusCodeType::valueIsValid()
     * @uses \EnumType\CancelStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $cancelStatus
     * @return \StructType\OrderType
     */
    public function setCancelStatus($cancelStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CancelStatusCodeType::valueIsValid($cancelStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CancelStatusCodeType', is_array($cancelStatus) ? implode(', ', $cancelStatus) : var_export($cancelStatus, true), implode(', ', \EnumType\CancelStatusCodeType::getValidValues())), __LINE__);
        }
        $this->CancelStatus = $cancelStatus;
        return $this;
    }
    /**
     * Get CancelReasonDetails value
     * @return string|null
     */
    public function getCancelReasonDetails()
    {
        return $this->CancelReasonDetails;
    }
    /**
     * Set CancelReasonDetails value
     * @param string $cancelReasonDetails
     * @return \StructType\OrderType
     */
    public function setCancelReasonDetails($cancelReasonDetails = null)
    {
        // validation for constraint: string
        if (!is_null($cancelReasonDetails) && !is_string($cancelReasonDetails)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cancelReasonDetails, true), gettype($cancelReasonDetails)), __LINE__);
        }
        $this->CancelReasonDetails = $cancelReasonDetails;
        return $this;
    }
    /**
     * Get ShippingConvenienceCharge value
     * @return \StructType\AmountType|null
     */
    public function getShippingConvenienceCharge()
    {
        return $this->ShippingConvenienceCharge;
    }
    /**
     * Set ShippingConvenienceCharge value
     * @param \StructType\AmountType $shippingConvenienceCharge
     * @return \StructType\OrderType
     */
    public function setShippingConvenienceCharge(\StructType\AmountType $shippingConvenienceCharge = null)
    {
        $this->ShippingConvenienceCharge = $shippingConvenienceCharge;
        return $this;
    }
    /**
     * Get CancelDetail value
     * @return \StructType\CancelDetailType[]|null
     */
    public function getCancelDetail()
    {
        return $this->CancelDetail;
    }
    /**
     * This method is responsible for validating the values passed to the setCancelDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCancelDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCancelDetailForArrayConstraintsFromSetCancelDetail(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $orderTypeCancelDetailItem) {
            // validation for constraint: itemType
            if (!$orderTypeCancelDetailItem instanceof \StructType\CancelDetailType) {
                $invalidValues[] = is_object($orderTypeCancelDetailItem) ? get_class($orderTypeCancelDetailItem) : sprintf('%s(%s)', gettype($orderTypeCancelDetailItem), var_export($orderTypeCancelDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CancelDetail property can only contain items of type \StructType\CancelDetailType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set CancelDetail value
     * @throws \InvalidArgumentException
     * @param \StructType\CancelDetailType[] $cancelDetail
     * @return \StructType\OrderType
     */
    public function setCancelDetail(array $cancelDetail = array())
    {
        // validation for constraint: array
        if ('' !== ($cancelDetailArrayErrorMessage = self::validateCancelDetailForArrayConstraintsFromSetCancelDetail($cancelDetail))) {
            throw new \InvalidArgumentException($cancelDetailArrayErrorMessage, __LINE__);
        }
        $this->CancelDetail = $cancelDetail;
        return $this;
    }
    /**
     * Add item to CancelDetail value
     * @throws \InvalidArgumentException
     * @param \StructType\CancelDetailType $item
     * @return \StructType\OrderType
     */
    public function addToCancelDetail(\StructType\CancelDetailType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CancelDetailType) {
            throw new \InvalidArgumentException(sprintf('The CancelDetail property can only contain items of type \StructType\CancelDetailType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CancelDetail[] = $item;
        return $this;
    }
    /**
     * Get LogisticsPlanType value
     * @return string|null
     */
    public function getLogisticsPlanType()
    {
        return $this->LogisticsPlanType;
    }
    /**
     * Set LogisticsPlanType value
     * @param string $logisticsPlanType
     * @return \StructType\OrderType
     */
    public function setLogisticsPlanType($logisticsPlanType = null)
    {
        // validation for constraint: string
        if (!is_null($logisticsPlanType) && !is_string($logisticsPlanType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($logisticsPlanType, true), gettype($logisticsPlanType)), __LINE__);
        }
        $this->LogisticsPlanType = $logisticsPlanType;
        return $this;
    }
    /**
     * Get BuyerTaxIdentifier value
     * @return \StructType\TaxIdentifierType[]|null
     */
    public function getBuyerTaxIdentifier()
    {
        return $this->BuyerTaxIdentifier;
    }
    /**
     * This method is responsible for validating the values passed to the setBuyerTaxIdentifier method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBuyerTaxIdentifier method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBuyerTaxIdentifierForArrayConstraintsFromSetBuyerTaxIdentifier(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $orderTypeBuyerTaxIdentifierItem) {
            // validation for constraint: itemType
            if (!$orderTypeBuyerTaxIdentifierItem instanceof \StructType\TaxIdentifierType) {
                $invalidValues[] = is_object($orderTypeBuyerTaxIdentifierItem) ? get_class($orderTypeBuyerTaxIdentifierItem) : sprintf('%s(%s)', gettype($orderTypeBuyerTaxIdentifierItem), var_export($orderTypeBuyerTaxIdentifierItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BuyerTaxIdentifier property can only contain items of type \StructType\TaxIdentifierType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set BuyerTaxIdentifier value
     * @throws \InvalidArgumentException
     * @param \StructType\TaxIdentifierType[] $buyerTaxIdentifier
     * @return \StructType\OrderType
     */
    public function setBuyerTaxIdentifier(array $buyerTaxIdentifier = array())
    {
        // validation for constraint: array
        if ('' !== ($buyerTaxIdentifierArrayErrorMessage = self::validateBuyerTaxIdentifierForArrayConstraintsFromSetBuyerTaxIdentifier($buyerTaxIdentifier))) {
            throw new \InvalidArgumentException($buyerTaxIdentifierArrayErrorMessage, __LINE__);
        }
        $this->BuyerTaxIdentifier = $buyerTaxIdentifier;
        return $this;
    }
    /**
     * Add item to BuyerTaxIdentifier value
     * @throws \InvalidArgumentException
     * @param \StructType\TaxIdentifierType $item
     * @return \StructType\OrderType
     */
    public function addToBuyerTaxIdentifier(\StructType\TaxIdentifierType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\TaxIdentifierType) {
            throw new \InvalidArgumentException(sprintf('The BuyerTaxIdentifier property can only contain items of type \StructType\TaxIdentifierType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BuyerTaxIdentifier[] = $item;
        return $this;
    }
    /**
     * Get BuyerPackageEnclosures value
     * @return \StructType\BuyerPackageEnclosuresType|null
     */
    public function getBuyerPackageEnclosures()
    {
        return $this->BuyerPackageEnclosures;
    }
    /**
     * Set BuyerPackageEnclosures value
     * @param \StructType\BuyerPackageEnclosuresType $buyerPackageEnclosures
     * @return \StructType\OrderType
     */
    public function setBuyerPackageEnclosures(\StructType\BuyerPackageEnclosuresType $buyerPackageEnclosures = null)
    {
        $this->BuyerPackageEnclosures = $buyerPackageEnclosures;
        return $this;
    }
    /**
     * Get ExtendedOrderID value
     * @return string|null
     */
    public function getExtendedOrderID()
    {
        return $this->ExtendedOrderID;
    }
    /**
     * Set ExtendedOrderID value
     * @param string $extendedOrderID
     * @return \StructType\OrderType
     */
    public function setExtendedOrderID($extendedOrderID = null)
    {
        // validation for constraint: string
        if (!is_null($extendedOrderID) && !is_string($extendedOrderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extendedOrderID, true), gettype($extendedOrderID)), __LINE__);
        }
        $this->ExtendedOrderID = $extendedOrderID;
        return $this;
    }
    /**
     * Get ContainseBayPlusTransaction value
     * @return bool|null
     */
    public function getContainseBayPlusTransaction()
    {
        return $this->ContainseBayPlusTransaction;
    }
    /**
     * Set ContainseBayPlusTransaction value
     * @param bool $containseBayPlusTransaction
     * @return \StructType\OrderType
     */
    public function setContainseBayPlusTransaction($containseBayPlusTransaction = null)
    {
        // validation for constraint: boolean
        if (!is_null($containseBayPlusTransaction) && !is_bool($containseBayPlusTransaction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($containseBayPlusTransaction, true), gettype($containseBayPlusTransaction)), __LINE__);
        }
        $this->ContainseBayPlusTransaction = $containseBayPlusTransaction;
        return $this;
    }
    /**
     * Get eBayCollectAndRemitTax value
     * @return bool|null
     */
    public function getEBayCollectAndRemitTax()
    {
        return $this->eBayCollectAndRemitTax;
    }
    /**
     * Set eBayCollectAndRemitTax value
     * @param bool $eBayCollectAndRemitTax
     * @return \StructType\OrderType
     */
    public function setEBayCollectAndRemitTax($eBayCollectAndRemitTax = null)
    {
        // validation for constraint: boolean
        if (!is_null($eBayCollectAndRemitTax) && !is_bool($eBayCollectAndRemitTax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eBayCollectAndRemitTax, true), gettype($eBayCollectAndRemitTax)), __LINE__);
        }
        $this->eBayCollectAndRemitTax = $eBayCollectAndRemitTax;
        return $this;
    }
    /**
     * Get OrderLineItemCount value
     * @return int|null
     */
    public function getOrderLineItemCount()
    {
        return $this->OrderLineItemCount;
    }
    /**
     * Set OrderLineItemCount value
     * @param int $orderLineItemCount
     * @return \StructType\OrderType
     */
    public function setOrderLineItemCount($orderLineItemCount = null)
    {
        // validation for constraint: int
        if (!is_null($orderLineItemCount) && !(is_int($orderLineItemCount) || ctype_digit($orderLineItemCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderLineItemCount, true), gettype($orderLineItemCount)), __LINE__);
        }
        $this->OrderLineItemCount = $orderLineItemCount;
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
     * @return \StructType\OrderType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
