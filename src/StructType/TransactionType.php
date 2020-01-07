<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains information about a sales transaction from an eBay listing. This identifier is automatically created by the eBay system once a buyer has committed to make a purchase in an auction or fixed-price listing. A fixed-priced
 * listing (single or multiple-variation) with multiple quantity can spawn one or more sales transactions.
 * @subpackage Structs
 */
class TransactionType extends AbstractStructBase
{
    /**
     * The AmountPaid
     * Meta information extracted from the WSDL
     * - documentation: The total amount the buyer paid for the order line item. This amount includes all costs such as item cost, shipping/handling charges, and sales tax that is applied to the order by the seller. If the seller allowed the buyer to change
     * the total for an order, the buyer is able to change the total up until the time when Checkout status is Complete. Determine whether the buyer changed the amount by retrieving the order line item data and comparing the <b>AmountPaid</b> value to what
     * the seller expected. If multiple order line items between the same buyer and seller have been combined into a 'Combined Invoice' order, the <b>AmountPaid</b> value returned for each line item in the order reflects the total amount paid for the entire
     * order, and not for the individual order line item. In a <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call, you can determine which order line items belong to the same 'Combined Invoice' order by checking to see if the
     * <b>ContainingOrder.OrderID</b> value is the same. <br><br> <span class="tablenote"><b>Note: </b> As of November 2019, for orders subject to eBay 'Collect and Remit' taxes, PayPal has begun distributing order funds to the seller's account with the
     * sales tax included. eBay 'Collect and Remit' tax includes US sales tax for numerous states, and 'Good and Services' tax that is applicable to Australian and New Zealand sellers. This 'Collect and Remit' tax amount for the order will be included in
     * the <b>AmountPaid</b> value. To determine if 'Collect and Remit' taxes were added into <b>AmountPaid</b> value, the user can check for the <b>Transaction.eBayCollectAndRemitTaxes.TaxDetails</b> and the <b>Transaction.Taxes.TaxDetails</b> containers
     * in the response. If both of these containers appear in the response with a <b>TaxDetails.TaxDescription</b> value of <code>SalesTax</code> (in US) or <code>GST</code> (in Australia or New Zealand), the tax amount that the buyer paid is in this
     * amount. <br><br> Sellers should be aware that the sales tax that the buyer pays for the order will initially be included when the order funds are distributed to their PayPal account, but that PayPal will pull out the sales tax amount shortly after
     * the payment clears, and will distribute the sales tax to the appropriate taxing authority. Previous to this change, PayPal would strip out the 'Collect and Remit' tax before distributing order funds to the seller's account. <br><br> This logic change
     * does not apply to sellers who are in eBay managed payments, so the amount in this field will never reflect any 'Collect and Remit' tax, even if the order is subject to 'Collect and Remit' tax. </span>
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $AmountPaid;
    /**
     * The AdjustmentAmount
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the dollar amount by which the buyer has adjusted the the total cost of the sales transaction. Adjustments to sales transaction costs may include shipping and handling, buyer discounts, or added services. A
     * positive amount indicates the amount is an extra charge being paid to the seller by the buyer. A negative value indicates this amount is a credit given to the buyer by the seller. <br><br> This field is always returned, even if there was no cost
     * adjustment to the sales transaction. Its value will just be '0.0' if there was no cost adjustment.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $AdjustmentAmount;
    /**
     * The ConvertedAdjustmentAmount
     * Meta information extracted from the WSDL
     * - documentation: This field shows the converted value of <b>AdjustmentAmount</b> in the currency of the site that returned the response. Refresh this value every 24 hours to pick up the current conversion rates. <br><br> This field is always
     * returned, even if there was no cost adjustment to the sales transaction. Its value will just be '0.0' if there was no cost adjustment. This value should be the same as the value in <b>AdjustmentAmount</b> if the eBay listing site and the site that
     * returned the response are the same, or use the same currency.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $ConvertedAdjustmentAmount;
    /**
     * The Buyer
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of user and shipping details for the order's buyer. To be returned by <b>GetItemsAwaitingFeedback</b> the seller must be the one making the request. <br><br> <b>For GetOrders, GetOrderTransactions, and
     * GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this container will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, real data is only
     * returned to the buyer or seller, and dummy/masked data will be returned to all third parties.
     * - minOccurs: 0
     * @var \StructType\UserType
     */
    public $Buyer;
    /**
     * The ShippingDetails
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of shipping-related details for a sales transaction. Shipping details may include shipping rates, package dimensions, handling costs, excluded shipping locations (if specified), shipping service options, sales
     * tax information (if applicable), and shipment tracking details (if shipped). <br><br> <span class="tablenote"><b>Note: </b> For <b>GetOrders</b> and <b>GetOrderTransactions</b>, a <b>ShippingDetails</b> container is returned at the order at line item
     * level. </span>
     * - minOccurs: 0
     * @var \StructType\ShippingDetailsType
     */
    public $ShippingDetails;
    /**
     * The ConvertedAmountPaid
     * Meta information extracted from the WSDL
     * - documentation: This field shows the converted value of <b>AmountPaid</b> in the currency of the site that returned the response. Refresh this value every 24 hours to pick up the current conversion rates. <br><br> This field is always returned for
     * paid orders. This value should be the same as the value in <b>AmountPaid</b> if the eBay listing site and the site that returned the response are the same, or use the same currency. <br><br> <span class="tablenote"><b>Note: </b> As of November 2019,
     * for orders subject to eBay 'Collect and Remit' taxes, PayPal has begun distributing order funds to the seller's account with the sales tax included. eBay 'Collect and Remit' tax includes US sales tax for numerous states, and 'Good and Services' tax
     * that is applicable to Australian and New Zealand sellers. This 'Collect and Remit' tax amount for the order will be included in the <b>ConvertedAmountPaid</b> value. To determine if 'Collect and Remit' taxes were added into <b>ConvertedAmountPaid</b>
     * value, the user can check for the <b>Transaction.eBayCollectAndRemitTaxes.TaxDetails</b> and the <b>Transaction.Taxes.TaxDetails</b> containers in the response. If both of these containers appear in the response with a
     * <b>TaxDetails.TaxDescription</b> value of <code>SalesTax</code> (in US) or <code>GST</code> (in Australia or New Zealand), the tax amount that the buyer paid is in this amount. <br><br> Sellers should be aware that the sales tax that the buyer pays
     * for the order will initially be included when the order funds are distributed to their PayPal account, but that PayPal will pull out the sales tax amount shortly after the payment clears, and will distribute the sales tax to the appropriate taxing
     * authority. Previous to this change, PayPal would strip out the 'Collect and Remit' tax before distributing order funds to the seller's account. <br><br> This logic change does not apply to sellers who are in eBay managed payments, so the amount in
     * this field will never reflect any 'Collect and Remit' tax, even if the order is subject to 'Collect and Remit' tax. </span>
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $ConvertedAmountPaid;
    /**
     * The ConvertedTransactionPrice
     * Meta information extracted from the WSDL
     * - documentation: This field shows the converted value of <b>TransactionPrice</b> in the currency of the site that returned the response. Refresh this value every 24 hours to pick up the current conversion rates. <br><br> This field is always returned
     * for sales transactions. This value should be the same as the value in <b>TransactionPrice</b> if the eBay listing site and the site that returned the response are the same, or use the same currency.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $ConvertedTransactionPrice;
    /**
     * The CreatedDate
     * Meta information extracted from the WSDL
     * - documentation: This timestamp indicates date/time when the sales transaction occurred. A sales transaction is created when there is a commitment to buy, or when the buyer purchases the item through a 'Buy it Now' option. For auction listings, a
     * sales transaction is created when that listing ends with a high bidder whose bid meets or exceeds the Reserve Price (if set). For a fixed-price listing or a 'Buy It Now' auction listing, a sales transaction is created once the buyer clicks the Buy
     * button.
     * - minOccurs: 0
     * @var string
     */
    public $CreatedDate;
    /**
     * The DepositType
     * Meta information extracted from the WSDL
     * - documentation: This value indicates whether or not the seller requires a deposit for the purchase of a motor vehicle. This field is only applicable to motor vehicle listings that require an initial deposit. For these listings, its value is returned
     * as 'OtherMethod'. For any other type of listing, its value is returned as 'None'.
     * - minOccurs: 0
     * @var string
     */
    public $DepositType;
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - documentation: This container consists of relevant details about the listing associated with the sales transaction. Which listing fields are returned under this container will depend on the listing, the eBay marketplace, and the API call. <br><br>
     * In an <b>AddOrder</b> call, only the unique identifier of the listing (<b>ItemID</b>) is needed to help identify the sales transaction to combine into a 'Combined Invoice' order.
     * - minOccurs: 0
     * @var \StructType\ItemType
     */
    public $Item;
    /**
     * The QuantityPurchased
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the quantity of the line item purchased at the same time by the same buyer from one listing. For auction listings, this value is always '1'. For fixed-price, non-variation listings, this value can be greater than
     * 1.
     * - minOccurs: 0
     * @var int
     */
    public $QuantityPurchased;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of checkout/payment status details for an order line item. Several of these fields change values during the checkout flow. <br><br> For <b>GetOrders</b>, only a limited number of applicable fields are returned at
     * the order line item level. The fields indicating the status of the order are actually found in the <b>OrderArray.Order.CheckoutStatus</b> container.
     * - minOccurs: 0
     * @var \StructType\TransactionStatusType
     */
    public $Status;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for an eBay sales transaction. This identifier is created once there is a commitment from a buyer to purchase an item, or if/when the buyer actually purchases the line item through a 'Buy it Now' option. An
     * <b>ItemID</b>/<b>TransactionID</b> pair can be used and referenced during an order checkout flow to identify a line item. <br><br> <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above,
     * this field will only be returned to the buyer, seller, or PayPal (if payment method is PayPal), and no longer returned at all to third parties (except for PayPal). If using a Trading WSDL older than Version 1019, transaction ID is only returned to
     * the buyer, seller or PayPal, and a dummy value of <code>10000000000000</code> will be returned to all third parties (except for PayPal).
     * - minOccurs: 0
     * @var string
     */
    public $TransactionID;
    /**
     * The TransactionPrice
     * Meta information extracted from the WSDL
     * - documentation: The sale price for one unit of the line item. This price does not include any other costs like shipping charges or sales tax, and its value will remain the same before and after payment. If multiple units were purchased through a
     * single-variation, fixed-price listing, to get the subtotal of the units purchased, the <b>TransactionPrice</b> value would have to be multiplied by the <b>Transaction.QuantityPurchased</b> value. <br><br> For a motor vehicle listing that required a
     * deposit/down payment, the amount in the <b>TransactionPrice</b> is actually the deposit amount. <br><br> <strong>For GetMyeBaySelling</strong>: this field is only returned if the transaction came as a result of a buyer's Best Offer accepted by the
     * seller. Otherwise, the <b>Transaction.TotalPrice</b> field should be viewed instead.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $TransactionPrice;
    /**
     * The BestOfferSale
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether or not the sales transaction resulted from the seller accepting a Best Offer (or Counter Offer) from a buyer.
     * - minOccurs: 0
     * @var bool
     */
    public $BestOfferSale;
    /**
     * The VATPercent
     * Meta information extracted from the WSDL
     * - documentation: VAT rate for the line item. When the <b>VATPercent</b> is specified, the item's VAT information appears on the item's listing page. In addition, the seller can choose to print an invoice that includes the item's net price, VAT
     * percent, VAT amount, and total price. Since VAT rates vary depending on the item and on the user's country of residence, a seller is responsible for entering the correct VAT rate; it is not calculated by eBay. To specify a <b>VATPercent</b>, a seller
     * must have a VAT-ID registered with eBay and must be listing the item on a VAT-enabled site. Max precision 3 decimal places. Max length 5 characters. Note: The View Item page displays the precision to 2 decimal places with no trailing zeros. However,
     * the full value you send in is stored.
     * - minOccurs: 0
     * @var float
     */
    public $VATPercent;
    /**
     * The ExternalTransaction
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of payment details for an eBay sales transaction, including an identifier for the monetary transaction and a field to express any fees or credits applied to the monetary transaction. This field is only returned
     * after payment for the order has occurred. <br><br> <b>For GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a
     * Trading WSDL older than Version 1019, the real transaction identifier is only returned to the buyer or seller, and a string value of <code>Unavailable</code> will be returned to all third parties. <br><br> <span class="tablenote">
     * <strong>Note:</strong> The <strong>MonetaryDetails</strong> container also shows payment information for the order. In the future, it is possible that the <strong>ExternalTransaction</strong> container will be deprecated, so you are encouraged to
     * start using <strong>MonetaryDetails</strong> as soon as possible. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ExternalTransactionType[]
     */
    public $ExternalTransaction;
    /**
     * The SellingManagerProductDetails
     * Meta information extracted from the WSDL
     * - documentation: This container consists of Selling Manager product details and is only returned if the item was listed through Selling Manager Pro.
     * - minOccurs: 0
     * @var \StructType\SellingManagerProductDetailsType
     */
    public $SellingManagerProductDetails;
    /**
     * The ShippingServiceSelected
     * Meta information extracted from the WSDL
     * - documentation: The shipping service actually selected by the buyer from the shipping services offered by the seller. The buyer typically selects the shipping service at checkout/payment time.
     * - minOccurs: 0
     * @var \StructType\ShippingServiceOptionsType
     */
    public $ShippingServiceSelected;
    /**
     * The BuyerMessage
     * Meta information extracted from the WSDL
     * - documentation: Display message from buyer. This field holds transient data that is only being returned in Checkout-related notifications.
     * - minOccurs: 0
     * @var string
     */
    public $BuyerMessage;
    /**
     * The DutchAuctionBid
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $DutchAuctionBid;
    /**
     * The BuyerPaidStatus
     * Meta information extracted from the WSDL
     * - documentation: Specifies the paid status of the order.
     * - minOccurs: 0
     * @var string
     */
    public $BuyerPaidStatus;
    /**
     * The SellerPaidStatus
     * Meta information extracted from the WSDL
     * - documentation: Specifies the paid status of the order.
     * - minOccurs: 0
     * @var string
     */
    public $SellerPaidStatus;
    /**
     * The PaidTime
     * Meta information extracted from the WSDL
     * - documentation: Indicates the time when the buyer paid for the order and/or order was marked as 'Paid' by the seller. This field is returned once payment has been made by the buyer. <br><br> This value will only be visible to the user on either side
     * of the order. An order can be marked as 'Paid' in the following ways: <ul> <li>Automatically when a payment is made through eBay's system</li> <li>Seller marks the item as paid in My eBay or through Selling Manager Pro </li> <li>Programmatically by
     * the seller through the <b>ReviseCheckoutStatus</b> or <b>CompleteSale</b> calls.</li> </ul>
     * - minOccurs: 0
     * @var string
     */
    public $PaidTime;
    /**
     * The ShippedTime
     * Meta information extracted from the WSDL
     * - documentation: Indicates the time when the line item was marked as 'Shipped'. This value will only be visible to the user on either side of the order. An order can be marked as 'Shipped' by purchasing an eBay shipping label, providing shipment
     * tracking in My eBay or through Selling Manager Pro, or programmatically by the seller through the <b>ReviseCheckoutStatus</b> or <b>CompleteSale</b> call. <br><br> <span class="tablenote"><b>Note:</b> This field does not appear in Merchant Data API's
     * <b>OrderReport</b> or <b>SoldReport</b> responses, because once shipment tracking information is provided to the buyer (or marked as shipped), the order/order line item is considered acknowledged, and acknowledged orders do not show up in
     * <b>OrderReport</b> or <b>SoldReport</b> responses. </span>
     * - minOccurs: 0
     * @var string
     */
    public $ShippedTime;
    /**
     * The TotalPrice
     * Meta information extracted from the WSDL
     * - documentation: This field indicates the total price for a sales transaction. Before payment, this dollar value will be the price before a shipping service option is selected. Once a shipping service option is selected, the price in this field will
     * be updated to reflect the shipping and handling costs associated with that shipping service option.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $TotalPrice;
    /**
     * The FeedbackLeft
     * Meta information extracted from the WSDL
     * - documentation: This container consists of Feedback left by the caller for their order partner. This container is only returned if the order is complete and feedback on the order line item has been left by the caller.
     * - minOccurs: 0
     * @var \StructType\FeedbackInfoType
     */
    public $FeedbackLeft;
    /**
     * The FeedbackReceived
     * Meta information extracted from the WSDL
     * - documentation: This container consists of Feedback received by the caller from their order partner. This container is only returned if the order is complete and feedback on the order line item has been received by the caller.
     * - minOccurs: 0
     * @var \StructType\FeedbackInfoType
     */
    public $FeedbackReceived;
    /**
     * The ContainingOrder
     * Meta information extracted from the WSDL
     * - documentation: This container is returned in a <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> response if the <b>IncludeContainingOrder</b> field is included in the call request payload and set to 'true'. This container will be returned
     * whether the order line item is the only line item in the order, or if the order has multiple line items. <br/><br/> <span class="tablenote"><b>Note:</b> The new <b>OrderLineItemCount</b> field is automatically returned if the user is using Version
     * 1113 of the Trading WSDL (or newer, as versions roll out). If the user is using Versions 1107 or 1111 of the Trading WSDL, the <b>OrderLineItemCount</b> field will only be returned if the user includes the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP
     * header and sets its value to <code>1113<code>. If a user is using a Trading WSDL older than 1107, the <b>OrderLineItemCount</b> field will not be returned. </span>
     * - minOccurs: 0
     * @var \StructType\OrderType
     */
    public $ContainingOrder;
    /**
     * The FinalValueFee
     * Meta information extracted from the WSDL
     * - documentation: A Final Value Fee is calculated and charged to a seller's account immediately upon creation of an order line item. Note that this fee is created before the buyer makes a payment. As long as the <b>IncludeFinalValueFee</b> field is
     * included in the call request and set to 'true', the Final Value Fee for each order line item is returned, regardless of the checkout status. <br><br> If a seller requests a Final Value Fee credit, the value of <b>Transaction.FinalValueFee</b> will
     * not change if a credit is issued. The credit only appears in the seller's account data.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $FinalValueFee;
    /**
     * The ListingCheckoutRedirectPreference
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable
     * - minOccurs: 0
     * @var \StructType\ListingCheckoutRedirectPreferenceType
     */
    public $ListingCheckoutRedirectPreference;
    /**
     * The RefundArray
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> This container is only applicable for Half.com order refunds, and since the Half.com site has been shut down, this field is no longer applicable. </span>
     * - minOccurs: 0
     * @var \ArrayType\RefundArrayType
     */
    public $RefundArray;
    /**
     * The TransactionSiteID
     * Meta information extracted from the WSDL
     * - documentation: The site upon which the line item was purchased.
     * - minOccurs: 0
     * @var string
     */
    public $TransactionSiteID;
    /**
     * The Platform
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the site on which the sales transaction originated. <br><br> <span class="tablenote"><b>Note: </b> Currently, the only value that should be returned in this field is <code>eBay</code>, as the Half.com marketplace
     * no longer exists. </span>
     * - minOccurs: 0
     * @var string
     */
    public $Platform;
    /**
     * The CartID
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable as Shopping.com listings are no longer created or managed with eBay APIs.
     * - minOccurs: 0
     * @var string
     */
    public $CartID;
    /**
     * The SellerContactBuyerByEmail
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable as Shopping.com listings are no longer created or managed with eBay APIs.
     * - minOccurs: 0
     * @var bool
     */
    public $SellerContactBuyerByEmail;
    /**
     * The PayPalEmailAddress
     * Meta information extracted from the WSDL
     * - documentation: The seller's PayPal email address. This value is only revealed if it is the seller making the call.
     * - minOccurs: 0
     * @var string
     */
    public $PayPalEmailAddress;
    /**
     * The PaisaPayID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for a <b>PaisaPay</b> transaction. Only applicable if <b>PaisaPay</b> was the payment method used.
     * - minOccurs: 0
     * @var string
     */
    public $PaisaPayID;
    /**
     * The BuyerGuaranteePrice
     * Meta information extracted from the WSDL
     * - documentation: For the Australia site, <b>BuyerGuaranteePrice</b> is the PayPal Buyer Protection coverage, offered for the item at the time of purchase. Details of coverage are in the following sections of the View Item page: the Buy Safely section
     * and the Payment Details section.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $BuyerGuaranteePrice;
    /**
     * The Variation
     * Meta information extracted from the WSDL
     * - documentation: In a fixed-priced listing, a seller can offer variations of the same item. For example, the seller could create a fixed-priced listing for a t-shirt design, and offer the shirt in different colors and sizes. In this case, each color
     * and size combination is a separate variation. Each variation can have a different quantity and price. Due to the possible price differentiation, buyers can buy multiple items from this listing at the same time, but all of the items must be of the
     * same variation. One order line item is created whether one or multiple quanity of the same variation are purchased. <br><br> The <b>Variation</b> node contains information about which variation was purchased. Therefore, applications that process
     * orders should always check to see if this node is present.
     * - minOccurs: 0
     * @var \StructType\VariationType
     */
    public $Variation;
    /**
     * The BuyerCheckoutMessage
     * Meta information extracted from the WSDL
     * - documentation: This field is returned if a buyer left a comment for the seller during the left by buyer during the checkout flow. <br><br> <b>For GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be
     * returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, real data is only returned to the buyer or seller, and a string value of <code>Unavailable</code> will be returned to
     * all third parties.
     * - minOccurs: 0
     * @var string
     */
    public $BuyerCheckoutMessage;
    /**
     * The TotalTransactionPrice
     * Meta information extracted from the WSDL
     * - documentation: The sale price of the order line item. This amount does not take into account shipping and handling charges, sales tax, or any other costs related to the order line item. If multiple units were purchased through a non- variation,
     * fixed-price listing, this value will reflect that. So, if the base cost of the order line item was $15.00, and a quantity of two were purchased (<b>Transaction.QuantityPurchased</b>) the value in this field would show as <code>30.00</code>. <br><br>
     * To see the full price of the order line item, including any shipping and handling charges, and any sales tax, the (<b>Transaction.TotalPrice</b>) field value should be viewed instead. However, note that the <b>TotalPrice</b> field value is only
     * updated after a shipping service option is selected and payment is made. And if the seller is offering free shipping, the values in the <b>TotalTransactionPrice</b> and the <b>TotalPrice</b> fields may be the same.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $TotalTransactionPrice;
    /**
     * The Taxes
     * Meta information extracted from the WSDL
     * - documentation: A container consisting of detailed tax information (sales tax, Goods and Services tax, or VAT) for a sales transaction. The <b>Taxes</b> container is always returned, even if the sales transaction is not subject to any taxes on the
     * buyer's purchase. The information in this container supercedes/overrides any sales tax information in the <b>ShippingDetails.SalesTax</b> container.
     * - minOccurs: 0
     * @var \StructType\TaxesType
     */
    public $Taxes;
    /**
     * The BundlePurchase
     * Meta information extracted from the WSDL
     * - documentation: Boolean value indicating whether or not an order line item is part of a bundle purchase using Product Configurator.
     * - minOccurs: 0
     * @var bool
     */
    public $BundlePurchase;
    /**
     * The ActualShippingCost
     * Meta information extracted from the WSDL
     * - documentation: The shipping cost paid by the buyer for the order line item. This field is only returned after checkout is complete.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $ActualShippingCost;
    /**
     * The ActualHandlingCost
     * Meta information extracted from the WSDL
     * - documentation: The handling cost that the seller has charged for the order line item. This field is only returned after checkout is complete. <br><br> The value of this field is returned as zero dollars (0.0) if the seller did not specify a
     * handling cost for the listing.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $ActualHandlingCost;
    /**
     * The OrderLineItemID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for an eBay order line item. This identifier is created as soon as there is a commitment to buy from the seller, or the buyer actually purchases the item using a 'Buy it Now' option. <br><br> <b>For GetOrders,
     * GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version
     * 1019, order line item ID is only returned to the buyer or seller, and a dummy value of <code>10000000000000</code> will be returned to all third parties. <br>
     * - minOccurs: 0
     * @var string
     */
    public $OrderLineItemID;
    /**
     * The eBayPaymentID
     * Meta information extracted from the WSDL
     * - documentation: The generated eBay payment ID used by the buyer when he/she chooses electronic transfer as payment method for paying the seller. This field is only applicable to the eBay Germany site (Site ID 77).
     * - minOccurs: 0
     * @var string
     */
    public $eBayPaymentID;
    /**
     * The PaymentHoldDetails
     * Meta information extracted from the WSDL
     * - documentation: This container consists of information related to the payment hold on the order line item, including the reason why the buyer's payment for the order line item is being held, the expected release date of the funds into the seller's
     * account, and possible action(s) the seller can take to expedite the payout of funds into their account. This container is only returned if a payment hold has been placed on the order line item. <br><br> See <b>PaymentHoldReasonCodeType</b> for some
     * details on why/when a seller's funds may be held, or visit the <a href="https://www.ebay.com/help/selling/getting-paid/getting-paid-items-youve-sold/pending-payments?id=4816">Pending payments</a> help topic for more information on eBay's payment hold
     * policies.
     * - minOccurs: 0
     * @var \StructType\PaymentHoldDetailType
     */
    public $PaymentHoldDetails;
    /**
     * The SellerDiscounts
     * Meta information extracted from the WSDL
     * - documentation: A container consisting of name and ID of the seller's discount campaign, as well as the discount amount that is being applied to the order line item. This container is only returned if the order line item is eligible for seller
     * discounts.
     * - minOccurs: 0
     * @var \StructType\SellerDiscountsType
     */
    public $SellerDiscounts;
    /**
     * The RefundAmount
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $RefundAmount;
    /**
     * The RefundStatus
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $RefundStatus;
    /**
     * The CodiceFiscale
     * Meta information extracted from the WSDL
     * - documentation: This field is returned if the <b>IncludeCodiceFiscale</b> flag is included in the request and set to <code>true</code>, and if the buyer has provided this value at checkout time. <br/><br/> This field is only applicable to buyers on
     * the Italy and Spain sites. The Codice Fiscale number is unique for each Italian and Spanish citizen and is used for tax purposes.
     * - minOccurs: 0
     * @var string
     */
    public $CodiceFiscale;
    /**
     * The IsMultiLegShipping
     * Meta information extracted from the WSDL
     * - documentation: If <strong>IsMultilegShipping</strong> is <code>true</code>, the order line item will be shipped internationally using the Global Shipping Program (GSP). With GSP, the shipment has a domestic leg and an international leg. In the
     * domestic leg, the seller ships the item to eBay's shipping partner. This shipping address can be found in the <strong>MultiLegShippingDetails.SellerShipmentToLogisticsProvider.ShipToAddress</strong> container. eBay's shipping partner will be
     * responsible for the international leg of the shipment and the order's final destination.
     * - minOccurs: 0
     * @var bool
     */
    public $IsMultiLegShipping;
    /**
     * The MultiLegShippingDetails
     * Meta information extracted from the WSDL
     * - documentation: This container consists of details about the domestic leg of a Global Shipping Program (GSP) shipment. With GSP, the shipment has a domestic leg and an international leg. In the domestic leg, the seller ships the item to eBay's
     * shipping partner. <br/><br/> This container is only returned if the order line item requires shipping through GSP. It is not returned if <strong>IsMultilegShipping</strong> is <code>false</code>.
     * - minOccurs: 0
     * @var \StructType\MultiLegShippingDetailsType
     */
    public $MultiLegShippingDetails;
    /**
     * The InvoiceSentTime
     * Meta information extracted from the WSDL
     * - documentation: This field indicates the date/time that an order invoice was sent from the seller to the buyer. This field is only returned if an invoice (containing the order line item) was sent to the buyer.
     * - minOccurs: 0
     * @var string
     */
    public $InvoiceSentTime;
    /**
     * The UnpaidItem
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of details related to the type and status of an Unpaid Item case. This container is only returned if there is an open (or recently closed) Unpaid Item case associated with the order line item.
     * - minOccurs: 0
     * @var \StructType\UnpaidItemType
     */
    public $UnpaidItem;
    /**
     * The IntangibleItem
     * Meta information extracted from the WSDL
     * - documentation: This flag indicates whether or not the order line item is an intangible good, such as an MP3 track or a mobile phone ringtone. Intangible items are not eligible for PayPal's Seller Protection program, so the seller will not be able
     * to open an Unpaid Item case against the buyer.
     * - minOccurs: 0
     * @var bool
     */
    public $IntangibleItem;
    /**
     * The MonetaryDetails
     * Meta information extracted from the WSDL
     * - documentation: Contains information about each monetary transaction that occurs for the order line item, including order payment, any refund, a credit, etc. Both the payer and payee are shown in this container. <br/><br/> <span class="tablenote">
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
     * (relative to other pickup methods) in which the corresponding pickup method will appear in the View Item and Checkout page. <br/><br/> This container is always returned prior to order payment if the seller created/revised/relisted the item with the
     * <strong>EligibleForPickupInStore</strong> and/or <strong>EligibleForPickupDropOff</strong> flag in the call request set to 'true'. If and when the In-Store pickup method (US only) or 'Click and Collect' pickup method (UK and Australia only) is
     * selected by the buyer and payment for the order is made, this container will no longer be returned in the response, and will essentially be replaced by the <strong>PickupMethodSelected</strong> container. <br/><br/> <span class="tablenote">
     * <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature or Click and Collect feature to list an item that is eligible for In-Store Pickup or Click and Collect. At this time, the In-Store Pickup and Click and Collect features
     * are generally only available to large retail merchants, and can only be applied to multiple-quantity, fixed-price listings. </span>
     * - minOccurs: 0
     * @var \StructType\PickupDetailsType
     */
    public $PickupDetails;
    /**
     * The PickupMethodSelected
     * Meta information extracted from the WSDL
     * - documentation: This container consists of details related to the selected In-Store pickup method, including the pickup method, the merchant's store ID, the status of the In-Store pickup, and the pickup reference code (if provided by merchant).
     * - minOccurs: 0
     * @var \StructType\PickupMethodSelectedType
     */
    public $PickupMethodSelected;
    /**
     * The ShippingConvenienceCharge
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><strong>Note:</strong> This field is no longer applicable/used. It was previously used for eBay Now and 'eBay On Demand Delivery' orders - two features that have been deprecated. </span>
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $ShippingConvenienceCharge;
    /**
     * The LogisticsPlanType
     * Meta information extracted from the WSDL
     * - documentation: This field will be returned at the order line item level only if the buyer purchased a digital gift card, which is delivered by email, or if the buyer purchased an item that is enabled with the 'Click and Collect' feature. <br/><br/>
     * Currently, <strong>LogisticsPlanType</strong> has two applicable values: <code>PickUpDropOff</code>, which indicates that the buyer selected the 'Click and Collect' option. With Click and Collect, buyers are able to purchase from thousands of sellers
     * on the eBay UK and Australia sites, and then pick up their order from the nearest 'eBay Collection Point', including over 750 Argos stores in the UK. The Click and Collect feature is only available on the eBay UK and Australia sites; or,
     * <code>DigitalDelivery</code>, which indicates that the order line item is a digital gift card that will be delivered to the buyer or recipient of the gift card by email.
     * - minOccurs: 0
     * @var string
     */
    public $LogisticsPlanType;
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
     * The InventoryReservationID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the inventory reservation.
     * - minOccurs: 0
     * @var string
     */
    public $InventoryReservationID;
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
     * the transition period (which will be announced), only the new <b>OrderID</b> format will be returned in all Trading API call response payloads, regardless of the Trading WSDL version used or specified compatibility level. </span> <br> <span
     * class="tablenote"><b>Note: </b> For sellers integrated with the new order ID format, please note that the identifier for an order (for <b>OrderID</b> and <b>ExtendedOrderID</b>) will change as it goes from unpaid to paid status. Sellers can check to
     * see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of
     * <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment. </span>
     * - minOccurs: 0
     * @var string
     */
    public $ExtendedOrderID;
    /**
     * The eBayPlusTransaction
     * Meta information extracted from the WSDL
     * - documentation: If <code>true</code>, the buyer of the order line item has a eBay Plus program subscription, and is eligible to receive the benefits of this program, such as fast, free shipping and free returns. Top-Rated eBay sellers must opt in to
     * eBay Plus to be able offer the program on qualifying listings. Sellers must commit to next-day delivery of those items. <br/><br/> <span class="tablenote"><b>Note:</b> Currently, eBay Plus is available only to buyers in Germany, Austria, and
     * Australia. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $eBayPlusTransaction;
    /**
     * The GiftSummary
     * Meta information extracted from the WSDL
     * - documentation: This container is returned in <b>GetOrders</b> and other order management calls if a buyer has purchased a digital gift card but has sent it to another individual as a gift, and has left a message for the recipient. The
     * <b>GiftSummary</b> container consists of the message that the buyer wrote for the recipient of the digital gift card. A digital gift card line item is indicated if the <b>DigitalDeliverySelected</b> container is returned in the response, and if the
     * digital gift card is sent to another individual as a gift, the <b>Gift</b> boolean field will be returned with a value of <code>true</code>.
     * - minOccurs: 0
     * @var \StructType\GiftSummaryType
     */
    public $GiftSummary;
    /**
     * The DigitalDeliverySelected
     * Meta information extracted from the WSDL
     * - documentation: This container is only returned by <b>GetOrders</b> and other order management calls if the buyer purchased a digital gift card for themselves, or is giving the digital gift card to someone else as a gift (in this case, the
     * <b>Gift</b> boolean field will be returned with a value of <code>true</code>). The <b>DigitalDeliverySelected</b> container consists of information related to the digital gift card order line item, including the delivery method, delivery status, and
     * recipient of the gift card (either the buyer, or another individual that is receiving the gift card as a gift from the buyer.
     * - minOccurs: 0
     * @var \StructType\DigitalDeliverySelectedType
     */
    public $DigitalDeliverySelected;
    /**
     * The Gift
     * Meta information extracted from the WSDL
     * - documentation: This boolean field is returned as <code>true</code> if the seller is giving a digital gift card to another individual as a gift. This field is only applicable for digital gift card order line items.
     * - minOccurs: 0
     * @var bool
     */
    public $Gift;
    /**
     * The GuaranteedShipping
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> This field is for future use, as the eBay Guaranteed Shipping feature has been put on hold. eBay Guaranteed Shipping should not be confused with eBay Guaranteed Delivery, which is a completely
     * different feature. </span> This field is returned as <code>true</code> if the seller chose to use eBay's Guaranteed Shipping feature at listing time. With eBay's Guaranteed Shipping, the seller will never pay more for shipping than what is charged to
     * the buyer. eBay recommends the shipping service option for the seller to use based on the dimensions and weight of the shipping package.
     * - minOccurs: 0
     * @var bool
     */
    public $GuaranteedShipping;
    /**
     * The GuaranteedDelivery
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as <code>true</code> if the order line item is qualified for eBay Guaranteed Delivery, or <code>false</code> if it is not eligible. At this time, eBay Guaranteed Delivery is only available to a select number of
     * sellers on the US and Australia sites, but this feature will be enabled on more eBay sites in 2019. <br/><br/>Only domestic shipments are available for eBay Guaranteed Delivery. For an order line item to be qualified for eBay Guaranteed Delivery, the
     * following must be true: <ul> <li>The eBay Guaranteed Delivery feature must be available to the seller</li> <li>That seller must be opted in to one of the two eBay Guaranteed Delivery programs</li> <li>If the seller is opted into the "Door-to-Door"
     * program, a domestic shipping rate table must be applied to the listing, and that shipping rate table must include the buyer's location with a transit time (handling + shipping time) of 3 business days or less; </li> <li>If the seller is opted into
     * the "Handling Time" program, the handling time plus the max shipping time must equal 3 business days or less, and that shipping rate table must include the buyer's location with a transit time (handling + shipping time) of 3 business days or
     * less</li> <li>The listing must have a return policy</li> </ul> With eBay Guaranteed Delivery, the sellers are committed to getting the order line item to the buyer within 3 business days. The seller's defined "Order Cutoff" time will control what is
     * considered 3 business days. If a buyer wanted to get an order by Friday, that buyer would have to purchase that item on Monday before the seller's "Order Cutoff" time. The seller's "Order Cutoff" time is generally set in their timezone, so the buyer
     * should take this into account before the purchase.
     * - minOccurs: 0
     * @var bool
     */
    public $GuaranteedDelivery;
    /**
     * The eBayCollectAndRemitTax
     * Meta information extracted from the WSDL
     * - documentation: This boolean field is returned as <code>true</code> if the line item is subject to a tax (US sales tax or Australian Goods and Services tax) that eBay will collect and remit to the proper taxing authority on the buyer's behalf. This
     * field is also returned if <code>false</code> (not subject to eBay Collect and Remit). An <b>eBayCollectAndRemitTaxes</b> container is returned if the order line item is subject to such a tax, and the type and amount of this tax is displayed in the
     * <b>eBayCollectAndRemitTaxes.TaxDetails</b> container. <br/><br/> Australian 'Goods and Services' tax (GST) is automatically charged to buyers outside of Australia when they purchase items on the eBay Australia site. Sellers on the Australia site do
     * not have to take any extra steps to enable the collection of GST, as this tax is collected by eBay and remitted to the Australian government. For more information about Australian GST, see the <a
     * href="https://www.ebay.com.au/help/selling/fees-credits-invoices/taxes-import-charges?id=4121">Taxes and import charges</a> help topic. <br/><br/> As of July 1, 2019, buyers in 22 US states will automatically be charged sales tax for eBay purchases,
     * and at least six more US states are scheduled to be subject to eBay Collect and Remit Tax by the end of 2019. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. Sellers do not have to take any extra steps
     * to enable the collection of this sales tax. If the seller is employing a Sales Tax Table for the listing, and a sales tax rate is established for a state that is subject to 'eBay Collect and Remit', this sales tax rate will be ignored by eBay. For a
     * list of the US states that are or will become subject to 'eBay Collect and Remit Tax' (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a>
     * help topic.
     * - minOccurs: 0
     * @var bool
     */
    public $eBayCollectAndRemitTax;
    /**
     * The eBayCollectAndRemitTaxes
     * Meta information extracted from the WSDL
     * - documentation: This container is returned if the order line item is subject to a tax (US sales tax or Australian Goods and Services tax) that eBay will collect and remit to the proper taxing authority on the buyer's behalf. The type of tax will be
     * shown in the <b>TaxDetails.Imposition</b> and <b>TaxDetails.TaxDescription</b> fields, and the amount of this tax will be displayed in the <b>TaxDetails.TaxAmount</b> field. <br/><br/> Australian 'Goods and Services' tax (GST) is automatically
     * charged to buyers outside of Australia when they purchase items on the eBay Australia site. Sellers on the Australia site do not have to take any extra steps to enable the collection of GST, as this tax is collected by eBay and remitted to the
     * Australian government. For more information about Australian GST, see the <a href="https://www.ebay.com.au/help/selling/fees-credits-invoices/taxes-import-charges?id=4121">Taxes and import charges</a> help topic. <br/><br/> As of January 1, 2019,
     * buyers in some US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. Sellers do not have to take any extra steps to enable the collection
     * of this sales tax. If the seller is employing a Sales Tax Table for the listing, and a sales tax rate is established for a state that is subject to 'eBay Collect and Remit', this sales tax rate will be ignored by eBay. For a list of the US states
     * that will become subject to 'eBay Collect and Remit' (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
     * - minOccurs: 0
     * @var \StructType\TaxesType
     */
    public $eBayCollectAndRemitTaxes;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for TransactionType
     * @uses TransactionType::setAmountPaid()
     * @uses TransactionType::setAdjustmentAmount()
     * @uses TransactionType::setConvertedAdjustmentAmount()
     * @uses TransactionType::setBuyer()
     * @uses TransactionType::setShippingDetails()
     * @uses TransactionType::setConvertedAmountPaid()
     * @uses TransactionType::setConvertedTransactionPrice()
     * @uses TransactionType::setCreatedDate()
     * @uses TransactionType::setDepositType()
     * @uses TransactionType::setItem()
     * @uses TransactionType::setQuantityPurchased()
     * @uses TransactionType::setStatus()
     * @uses TransactionType::setTransactionID()
     * @uses TransactionType::setTransactionPrice()
     * @uses TransactionType::setBestOfferSale()
     * @uses TransactionType::setVATPercent()
     * @uses TransactionType::setExternalTransaction()
     * @uses TransactionType::setSellingManagerProductDetails()
     * @uses TransactionType::setShippingServiceSelected()
     * @uses TransactionType::setBuyerMessage()
     * @uses TransactionType::setDutchAuctionBid()
     * @uses TransactionType::setBuyerPaidStatus()
     * @uses TransactionType::setSellerPaidStatus()
     * @uses TransactionType::setPaidTime()
     * @uses TransactionType::setShippedTime()
     * @uses TransactionType::setTotalPrice()
     * @uses TransactionType::setFeedbackLeft()
     * @uses TransactionType::setFeedbackReceived()
     * @uses TransactionType::setContainingOrder()
     * @uses TransactionType::setFinalValueFee()
     * @uses TransactionType::setListingCheckoutRedirectPreference()
     * @uses TransactionType::setRefundArray()
     * @uses TransactionType::setTransactionSiteID()
     * @uses TransactionType::setPlatform()
     * @uses TransactionType::setCartID()
     * @uses TransactionType::setSellerContactBuyerByEmail()
     * @uses TransactionType::setPayPalEmailAddress()
     * @uses TransactionType::setPaisaPayID()
     * @uses TransactionType::setBuyerGuaranteePrice()
     * @uses TransactionType::setVariation()
     * @uses TransactionType::setBuyerCheckoutMessage()
     * @uses TransactionType::setTotalTransactionPrice()
     * @uses TransactionType::setTaxes()
     * @uses TransactionType::setBundlePurchase()
     * @uses TransactionType::setActualShippingCost()
     * @uses TransactionType::setActualHandlingCost()
     * @uses TransactionType::setOrderLineItemID()
     * @uses TransactionType::setEBayPaymentID()
     * @uses TransactionType::setPaymentHoldDetails()
     * @uses TransactionType::setSellerDiscounts()
     * @uses TransactionType::setRefundAmount()
     * @uses TransactionType::setRefundStatus()
     * @uses TransactionType::setCodiceFiscale()
     * @uses TransactionType::setIsMultiLegShipping()
     * @uses TransactionType::setMultiLegShippingDetails()
     * @uses TransactionType::setInvoiceSentTime()
     * @uses TransactionType::setUnpaidItem()
     * @uses TransactionType::setIntangibleItem()
     * @uses TransactionType::setMonetaryDetails()
     * @uses TransactionType::setPickupDetails()
     * @uses TransactionType::setPickupMethodSelected()
     * @uses TransactionType::setShippingConvenienceCharge()
     * @uses TransactionType::setLogisticsPlanType()
     * @uses TransactionType::setBuyerPackageEnclosures()
     * @uses TransactionType::setInventoryReservationID()
     * @uses TransactionType::setExtendedOrderID()
     * @uses TransactionType::setEBayPlusTransaction()
     * @uses TransactionType::setGiftSummary()
     * @uses TransactionType::setDigitalDeliverySelected()
     * @uses TransactionType::setGift()
     * @uses TransactionType::setGuaranteedShipping()
     * @uses TransactionType::setGuaranteedDelivery()
     * @uses TransactionType::setEBayCollectAndRemitTax()
     * @uses TransactionType::setEBayCollectAndRemitTaxes()
     * @uses TransactionType::setAny()
     * @param \StructType\AmountType $amountPaid
     * @param \StructType\AmountType $adjustmentAmount
     * @param \StructType\AmountType $convertedAdjustmentAmount
     * @param \StructType\UserType $buyer
     * @param \StructType\ShippingDetailsType $shippingDetails
     * @param \StructType\AmountType $convertedAmountPaid
     * @param \StructType\AmountType $convertedTransactionPrice
     * @param string $createdDate
     * @param string $depositType
     * @param \StructType\ItemType $item
     * @param int $quantityPurchased
     * @param \StructType\TransactionStatusType $status
     * @param string $transactionID
     * @param \StructType\AmountType $transactionPrice
     * @param bool $bestOfferSale
     * @param float $vATPercent
     * @param \StructType\ExternalTransactionType[] $externalTransaction
     * @param \StructType\SellingManagerProductDetailsType $sellingManagerProductDetails
     * @param \StructType\ShippingServiceOptionsType $shippingServiceSelected
     * @param string $buyerMessage
     * @param \StructType\AmountType $dutchAuctionBid
     * @param string $buyerPaidStatus
     * @param string $sellerPaidStatus
     * @param string $paidTime
     * @param string $shippedTime
     * @param \StructType\AmountType $totalPrice
     * @param \StructType\FeedbackInfoType $feedbackLeft
     * @param \StructType\FeedbackInfoType $feedbackReceived
     * @param \StructType\OrderType $containingOrder
     * @param \StructType\AmountType $finalValueFee
     * @param \StructType\ListingCheckoutRedirectPreferenceType $listingCheckoutRedirectPreference
     * @param \ArrayType\RefundArrayType $refundArray
     * @param string $transactionSiteID
     * @param string $platform
     * @param string $cartID
     * @param bool $sellerContactBuyerByEmail
     * @param string $payPalEmailAddress
     * @param string $paisaPayID
     * @param \StructType\AmountType $buyerGuaranteePrice
     * @param \StructType\VariationType $variation
     * @param string $buyerCheckoutMessage
     * @param \StructType\AmountType $totalTransactionPrice
     * @param \StructType\TaxesType $taxes
     * @param bool $bundlePurchase
     * @param \StructType\AmountType $actualShippingCost
     * @param \StructType\AmountType $actualHandlingCost
     * @param string $orderLineItemID
     * @param string $eBayPaymentID
     * @param \StructType\PaymentHoldDetailType $paymentHoldDetails
     * @param \StructType\SellerDiscountsType $sellerDiscounts
     * @param \StructType\AmountType $refundAmount
     * @param string $refundStatus
     * @param string $codiceFiscale
     * @param bool $isMultiLegShipping
     * @param \StructType\MultiLegShippingDetailsType $multiLegShippingDetails
     * @param string $invoiceSentTime
     * @param \StructType\UnpaidItemType $unpaidItem
     * @param bool $intangibleItem
     * @param \StructType\PaymentsInformationType $monetaryDetails
     * @param \StructType\PickupDetailsType $pickupDetails
     * @param \StructType\PickupMethodSelectedType $pickupMethodSelected
     * @param \StructType\AmountType $shippingConvenienceCharge
     * @param string $logisticsPlanType
     * @param \StructType\BuyerPackageEnclosuresType $buyerPackageEnclosures
     * @param string $inventoryReservationID
     * @param string $extendedOrderID
     * @param bool $eBayPlusTransaction
     * @param \StructType\GiftSummaryType $giftSummary
     * @param \StructType\DigitalDeliverySelectedType $digitalDeliverySelected
     * @param bool $gift
     * @param bool $guaranteedShipping
     * @param bool $guaranteedDelivery
     * @param bool $eBayCollectAndRemitTax
     * @param \StructType\TaxesType $eBayCollectAndRemitTaxes
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\AmountType $amountPaid = null, \StructType\AmountType $adjustmentAmount = null, \StructType\AmountType $convertedAdjustmentAmount = null, \StructType\UserType $buyer = null, \StructType\ShippingDetailsType $shippingDetails = null, \StructType\AmountType $convertedAmountPaid = null, \StructType\AmountType $convertedTransactionPrice = null, $createdDate = null, $depositType = null, \StructType\ItemType $item = null, $quantityPurchased = null, \StructType\TransactionStatusType $status = null, $transactionID = null, \StructType\AmountType $transactionPrice = null, $bestOfferSale = null, $vATPercent = null, array $externalTransaction = array(), \StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null, \StructType\ShippingServiceOptionsType $shippingServiceSelected = null, $buyerMessage = null, \StructType\AmountType $dutchAuctionBid = null, $buyerPaidStatus = null, $sellerPaidStatus = null, $paidTime = null, $shippedTime = null, \StructType\AmountType $totalPrice = null, \StructType\FeedbackInfoType $feedbackLeft = null, \StructType\FeedbackInfoType $feedbackReceived = null, \StructType\OrderType $containingOrder = null, \StructType\AmountType $finalValueFee = null, \StructType\ListingCheckoutRedirectPreferenceType $listingCheckoutRedirectPreference = null, \ArrayType\RefundArrayType $refundArray = null, $transactionSiteID = null, $platform = null, $cartID = null, $sellerContactBuyerByEmail = null, $payPalEmailAddress = null, $paisaPayID = null, \StructType\AmountType $buyerGuaranteePrice = null, \StructType\VariationType $variation = null, $buyerCheckoutMessage = null, \StructType\AmountType $totalTransactionPrice = null, \StructType\TaxesType $taxes = null, $bundlePurchase = null, \StructType\AmountType $actualShippingCost = null, \StructType\AmountType $actualHandlingCost = null, $orderLineItemID = null, $eBayPaymentID = null, \StructType\PaymentHoldDetailType $paymentHoldDetails = null, \StructType\SellerDiscountsType $sellerDiscounts = null, \StructType\AmountType $refundAmount = null, $refundStatus = null, $codiceFiscale = null, $isMultiLegShipping = null, \StructType\MultiLegShippingDetailsType $multiLegShippingDetails = null, $invoiceSentTime = null, \StructType\UnpaidItemType $unpaidItem = null, $intangibleItem = null, \StructType\PaymentsInformationType $monetaryDetails = null, \StructType\PickupDetailsType $pickupDetails = null, \StructType\PickupMethodSelectedType $pickupMethodSelected = null, \StructType\AmountType $shippingConvenienceCharge = null, $logisticsPlanType = null, \StructType\BuyerPackageEnclosuresType $buyerPackageEnclosures = null, $inventoryReservationID = null, $extendedOrderID = null, $eBayPlusTransaction = null, \StructType\GiftSummaryType $giftSummary = null, \StructType\DigitalDeliverySelectedType $digitalDeliverySelected = null, $gift = null, $guaranteedShipping = null, $guaranteedDelivery = null, $eBayCollectAndRemitTax = null, \StructType\TaxesType $eBayCollectAndRemitTaxes = null, \DOMDocument $any = null)
    {
        $this
            ->setAmountPaid($amountPaid)
            ->setAdjustmentAmount($adjustmentAmount)
            ->setConvertedAdjustmentAmount($convertedAdjustmentAmount)
            ->setBuyer($buyer)
            ->setShippingDetails($shippingDetails)
            ->setConvertedAmountPaid($convertedAmountPaid)
            ->setConvertedTransactionPrice($convertedTransactionPrice)
            ->setCreatedDate($createdDate)
            ->setDepositType($depositType)
            ->setItem($item)
            ->setQuantityPurchased($quantityPurchased)
            ->setStatus($status)
            ->setTransactionID($transactionID)
            ->setTransactionPrice($transactionPrice)
            ->setBestOfferSale($bestOfferSale)
            ->setVATPercent($vATPercent)
            ->setExternalTransaction($externalTransaction)
            ->setSellingManagerProductDetails($sellingManagerProductDetails)
            ->setShippingServiceSelected($shippingServiceSelected)
            ->setBuyerMessage($buyerMessage)
            ->setDutchAuctionBid($dutchAuctionBid)
            ->setBuyerPaidStatus($buyerPaidStatus)
            ->setSellerPaidStatus($sellerPaidStatus)
            ->setPaidTime($paidTime)
            ->setShippedTime($shippedTime)
            ->setTotalPrice($totalPrice)
            ->setFeedbackLeft($feedbackLeft)
            ->setFeedbackReceived($feedbackReceived)
            ->setContainingOrder($containingOrder)
            ->setFinalValueFee($finalValueFee)
            ->setListingCheckoutRedirectPreference($listingCheckoutRedirectPreference)
            ->setRefundArray($refundArray)
            ->setTransactionSiteID($transactionSiteID)
            ->setPlatform($platform)
            ->setCartID($cartID)
            ->setSellerContactBuyerByEmail($sellerContactBuyerByEmail)
            ->setPayPalEmailAddress($payPalEmailAddress)
            ->setPaisaPayID($paisaPayID)
            ->setBuyerGuaranteePrice($buyerGuaranteePrice)
            ->setVariation($variation)
            ->setBuyerCheckoutMessage($buyerCheckoutMessage)
            ->setTotalTransactionPrice($totalTransactionPrice)
            ->setTaxes($taxes)
            ->setBundlePurchase($bundlePurchase)
            ->setActualShippingCost($actualShippingCost)
            ->setActualHandlingCost($actualHandlingCost)
            ->setOrderLineItemID($orderLineItemID)
            ->setEBayPaymentID($eBayPaymentID)
            ->setPaymentHoldDetails($paymentHoldDetails)
            ->setSellerDiscounts($sellerDiscounts)
            ->setRefundAmount($refundAmount)
            ->setRefundStatus($refundStatus)
            ->setCodiceFiscale($codiceFiscale)
            ->setIsMultiLegShipping($isMultiLegShipping)
            ->setMultiLegShippingDetails($multiLegShippingDetails)
            ->setInvoiceSentTime($invoiceSentTime)
            ->setUnpaidItem($unpaidItem)
            ->setIntangibleItem($intangibleItem)
            ->setMonetaryDetails($monetaryDetails)
            ->setPickupDetails($pickupDetails)
            ->setPickupMethodSelected($pickupMethodSelected)
            ->setShippingConvenienceCharge($shippingConvenienceCharge)
            ->setLogisticsPlanType($logisticsPlanType)
            ->setBuyerPackageEnclosures($buyerPackageEnclosures)
            ->setInventoryReservationID($inventoryReservationID)
            ->setExtendedOrderID($extendedOrderID)
            ->setEBayPlusTransaction($eBayPlusTransaction)
            ->setGiftSummary($giftSummary)
            ->setDigitalDeliverySelected($digitalDeliverySelected)
            ->setGift($gift)
            ->setGuaranteedShipping($guaranteedShipping)
            ->setGuaranteedDelivery($guaranteedDelivery)
            ->setEBayCollectAndRemitTax($eBayCollectAndRemitTax)
            ->setEBayCollectAndRemitTaxes($eBayCollectAndRemitTaxes)
            ->setAny($any);
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
     * @return \StructType\TransactionType
     */
    public function setAmountPaid(\StructType\AmountType $amountPaid = null)
    {
        $this->AmountPaid = $amountPaid;
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
     * @return \StructType\TransactionType
     */
    public function setAdjustmentAmount(\StructType\AmountType $adjustmentAmount = null)
    {
        $this->AdjustmentAmount = $adjustmentAmount;
        return $this;
    }
    /**
     * Get ConvertedAdjustmentAmount value
     * @return \StructType\AmountType|null
     */
    public function getConvertedAdjustmentAmount()
    {
        return $this->ConvertedAdjustmentAmount;
    }
    /**
     * Set ConvertedAdjustmentAmount value
     * @param \StructType\AmountType $convertedAdjustmentAmount
     * @return \StructType\TransactionType
     */
    public function setConvertedAdjustmentAmount(\StructType\AmountType $convertedAdjustmentAmount = null)
    {
        $this->ConvertedAdjustmentAmount = $convertedAdjustmentAmount;
        return $this;
    }
    /**
     * Get Buyer value
     * @return \StructType\UserType|null
     */
    public function getBuyer()
    {
        return $this->Buyer;
    }
    /**
     * Set Buyer value
     * @param \StructType\UserType $buyer
     * @return \StructType\TransactionType
     */
    public function setBuyer(\StructType\UserType $buyer = null)
    {
        $this->Buyer = $buyer;
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
     * @return \StructType\TransactionType
     */
    public function setShippingDetails(\StructType\ShippingDetailsType $shippingDetails = null)
    {
        $this->ShippingDetails = $shippingDetails;
        return $this;
    }
    /**
     * Get ConvertedAmountPaid value
     * @return \StructType\AmountType|null
     */
    public function getConvertedAmountPaid()
    {
        return $this->ConvertedAmountPaid;
    }
    /**
     * Set ConvertedAmountPaid value
     * @param \StructType\AmountType $convertedAmountPaid
     * @return \StructType\TransactionType
     */
    public function setConvertedAmountPaid(\StructType\AmountType $convertedAmountPaid = null)
    {
        $this->ConvertedAmountPaid = $convertedAmountPaid;
        return $this;
    }
    /**
     * Get ConvertedTransactionPrice value
     * @return \StructType\AmountType|null
     */
    public function getConvertedTransactionPrice()
    {
        return $this->ConvertedTransactionPrice;
    }
    /**
     * Set ConvertedTransactionPrice value
     * @param \StructType\AmountType $convertedTransactionPrice
     * @return \StructType\TransactionType
     */
    public function setConvertedTransactionPrice(\StructType\AmountType $convertedTransactionPrice = null)
    {
        $this->ConvertedTransactionPrice = $convertedTransactionPrice;
        return $this;
    }
    /**
     * Get CreatedDate value
     * @return string|null
     */
    public function getCreatedDate()
    {
        return $this->CreatedDate;
    }
    /**
     * Set CreatedDate value
     * @param string $createdDate
     * @return \StructType\TransactionType
     */
    public function setCreatedDate($createdDate = null)
    {
        // validation for constraint: string
        if (!is_null($createdDate) && !is_string($createdDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createdDate, true), gettype($createdDate)), __LINE__);
        }
        $this->CreatedDate = $createdDate;
        return $this;
    }
    /**
     * Get DepositType value
     * @return string|null
     */
    public function getDepositType()
    {
        return $this->DepositType;
    }
    /**
     * Set DepositType value
     * @uses \EnumType\DepositTypeCodeType::valueIsValid()
     * @uses \EnumType\DepositTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $depositType
     * @return \StructType\TransactionType
     */
    public function setDepositType($depositType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DepositTypeCodeType::valueIsValid($depositType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DepositTypeCodeType', is_array($depositType) ? implode(', ', $depositType) : var_export($depositType, true), implode(', ', \EnumType\DepositTypeCodeType::getValidValues())), __LINE__);
        }
        $this->DepositType = $depositType;
        return $this;
    }
    /**
     * Get Item value
     * @return \StructType\ItemType|null
     */
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @param \StructType\ItemType $item
     * @return \StructType\TransactionType
     */
    public function setItem(\StructType\ItemType $item = null)
    {
        $this->Item = $item;
        return $this;
    }
    /**
     * Get QuantityPurchased value
     * @return int|null
     */
    public function getQuantityPurchased()
    {
        return $this->QuantityPurchased;
    }
    /**
     * Set QuantityPurchased value
     * @param int $quantityPurchased
     * @return \StructType\TransactionType
     */
    public function setQuantityPurchased($quantityPurchased = null)
    {
        // validation for constraint: int
        if (!is_null($quantityPurchased) && !(is_int($quantityPurchased) || ctype_digit($quantityPurchased))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantityPurchased, true), gettype($quantityPurchased)), __LINE__);
        }
        $this->QuantityPurchased = $quantityPurchased;
        return $this;
    }
    /**
     * Get Status value
     * @return \StructType\TransactionStatusType|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param \StructType\TransactionStatusType $status
     * @return \StructType\TransactionType
     */
    public function setStatus(\StructType\TransactionStatusType $status = null)
    {
        $this->Status = $status;
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
     * @return \StructType\TransactionType
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
     * @return \StructType\TransactionType
     */
    public function setTransactionPrice(\StructType\AmountType $transactionPrice = null)
    {
        $this->TransactionPrice = $transactionPrice;
        return $this;
    }
    /**
     * Get BestOfferSale value
     * @return bool|null
     */
    public function getBestOfferSale()
    {
        return $this->BestOfferSale;
    }
    /**
     * Set BestOfferSale value
     * @param bool $bestOfferSale
     * @return \StructType\TransactionType
     */
    public function setBestOfferSale($bestOfferSale = null)
    {
        // validation for constraint: boolean
        if (!is_null($bestOfferSale) && !is_bool($bestOfferSale)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bestOfferSale, true), gettype($bestOfferSale)), __LINE__);
        }
        $this->BestOfferSale = $bestOfferSale;
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
     * @return \StructType\TransactionType
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
        foreach ($values as $transactionTypeExternalTransactionItem) {
            // validation for constraint: itemType
            if (!$transactionTypeExternalTransactionItem instanceof \StructType\ExternalTransactionType) {
                $invalidValues[] = is_object($transactionTypeExternalTransactionItem) ? get_class($transactionTypeExternalTransactionItem) : sprintf('%s(%s)', gettype($transactionTypeExternalTransactionItem), var_export($transactionTypeExternalTransactionItem, true));
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
     * @return \StructType\TransactionType
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
     * @return \StructType\TransactionType
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
     * Get SellingManagerProductDetails value
     * @return \StructType\SellingManagerProductDetailsType|null
     */
    public function getSellingManagerProductDetails()
    {
        return $this->SellingManagerProductDetails;
    }
    /**
     * Set SellingManagerProductDetails value
     * @param \StructType\SellingManagerProductDetailsType $sellingManagerProductDetails
     * @return \StructType\TransactionType
     */
    public function setSellingManagerProductDetails(\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null)
    {
        $this->SellingManagerProductDetails = $sellingManagerProductDetails;
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
     * @return \StructType\TransactionType
     */
    public function setShippingServiceSelected(\StructType\ShippingServiceOptionsType $shippingServiceSelected = null)
    {
        $this->ShippingServiceSelected = $shippingServiceSelected;
        return $this;
    }
    /**
     * Get BuyerMessage value
     * @return string|null
     */
    public function getBuyerMessage()
    {
        return $this->BuyerMessage;
    }
    /**
     * Set BuyerMessage value
     * @param string $buyerMessage
     * @return \StructType\TransactionType
     */
    public function setBuyerMessage($buyerMessage = null)
    {
        // validation for constraint: string
        if (!is_null($buyerMessage) && !is_string($buyerMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buyerMessage, true), gettype($buyerMessage)), __LINE__);
        }
        $this->BuyerMessage = $buyerMessage;
        return $this;
    }
    /**
     * Get DutchAuctionBid value
     * @return \StructType\AmountType|null
     */
    public function getDutchAuctionBid()
    {
        return $this->DutchAuctionBid;
    }
    /**
     * Set DutchAuctionBid value
     * @param \StructType\AmountType $dutchAuctionBid
     * @return \StructType\TransactionType
     */
    public function setDutchAuctionBid(\StructType\AmountType $dutchAuctionBid = null)
    {
        $this->DutchAuctionBid = $dutchAuctionBid;
        return $this;
    }
    /**
     * Get BuyerPaidStatus value
     * @return string|null
     */
    public function getBuyerPaidStatus()
    {
        return $this->BuyerPaidStatus;
    }
    /**
     * Set BuyerPaidStatus value
     * @uses \EnumType\PaidStatusCodeType::valueIsValid()
     * @uses \EnumType\PaidStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $buyerPaidStatus
     * @return \StructType\TransactionType
     */
    public function setBuyerPaidStatus($buyerPaidStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PaidStatusCodeType::valueIsValid($buyerPaidStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\PaidStatusCodeType', is_array($buyerPaidStatus) ? implode(', ', $buyerPaidStatus) : var_export($buyerPaidStatus, true), implode(', ', \EnumType\PaidStatusCodeType::getValidValues())), __LINE__);
        }
        $this->BuyerPaidStatus = $buyerPaidStatus;
        return $this;
    }
    /**
     * Get SellerPaidStatus value
     * @return string|null
     */
    public function getSellerPaidStatus()
    {
        return $this->SellerPaidStatus;
    }
    /**
     * Set SellerPaidStatus value
     * @uses \EnumType\PaidStatusCodeType::valueIsValid()
     * @uses \EnumType\PaidStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sellerPaidStatus
     * @return \StructType\TransactionType
     */
    public function setSellerPaidStatus($sellerPaidStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PaidStatusCodeType::valueIsValid($sellerPaidStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\PaidStatusCodeType', is_array($sellerPaidStatus) ? implode(', ', $sellerPaidStatus) : var_export($sellerPaidStatus, true), implode(', ', \EnumType\PaidStatusCodeType::getValidValues())), __LINE__);
        }
        $this->SellerPaidStatus = $sellerPaidStatus;
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
     * @return \StructType\TransactionType
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
     * @return \StructType\TransactionType
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
     * Get TotalPrice value
     * @return \StructType\AmountType|null
     */
    public function getTotalPrice()
    {
        return $this->TotalPrice;
    }
    /**
     * Set TotalPrice value
     * @param \StructType\AmountType $totalPrice
     * @return \StructType\TransactionType
     */
    public function setTotalPrice(\StructType\AmountType $totalPrice = null)
    {
        $this->TotalPrice = $totalPrice;
        return $this;
    }
    /**
     * Get FeedbackLeft value
     * @return \StructType\FeedbackInfoType|null
     */
    public function getFeedbackLeft()
    {
        return $this->FeedbackLeft;
    }
    /**
     * Set FeedbackLeft value
     * @param \StructType\FeedbackInfoType $feedbackLeft
     * @return \StructType\TransactionType
     */
    public function setFeedbackLeft(\StructType\FeedbackInfoType $feedbackLeft = null)
    {
        $this->FeedbackLeft = $feedbackLeft;
        return $this;
    }
    /**
     * Get FeedbackReceived value
     * @return \StructType\FeedbackInfoType|null
     */
    public function getFeedbackReceived()
    {
        return $this->FeedbackReceived;
    }
    /**
     * Set FeedbackReceived value
     * @param \StructType\FeedbackInfoType $feedbackReceived
     * @return \StructType\TransactionType
     */
    public function setFeedbackReceived(\StructType\FeedbackInfoType $feedbackReceived = null)
    {
        $this->FeedbackReceived = $feedbackReceived;
        return $this;
    }
    /**
     * Get ContainingOrder value
     * @return \StructType\OrderType|null
     */
    public function getContainingOrder()
    {
        return $this->ContainingOrder;
    }
    /**
     * Set ContainingOrder value
     * @param \StructType\OrderType $containingOrder
     * @return \StructType\TransactionType
     */
    public function setContainingOrder(\StructType\OrderType $containingOrder = null)
    {
        $this->ContainingOrder = $containingOrder;
        return $this;
    }
    /**
     * Get FinalValueFee value
     * @return \StructType\AmountType|null
     */
    public function getFinalValueFee()
    {
        return $this->FinalValueFee;
    }
    /**
     * Set FinalValueFee value
     * @param \StructType\AmountType $finalValueFee
     * @return \StructType\TransactionType
     */
    public function setFinalValueFee(\StructType\AmountType $finalValueFee = null)
    {
        $this->FinalValueFee = $finalValueFee;
        return $this;
    }
    /**
     * Get ListingCheckoutRedirectPreference value
     * @return \StructType\ListingCheckoutRedirectPreferenceType|null
     */
    public function getListingCheckoutRedirectPreference()
    {
        return $this->ListingCheckoutRedirectPreference;
    }
    /**
     * Set ListingCheckoutRedirectPreference value
     * @param \StructType\ListingCheckoutRedirectPreferenceType $listingCheckoutRedirectPreference
     * @return \StructType\TransactionType
     */
    public function setListingCheckoutRedirectPreference(\StructType\ListingCheckoutRedirectPreferenceType $listingCheckoutRedirectPreference = null)
    {
        $this->ListingCheckoutRedirectPreference = $listingCheckoutRedirectPreference;
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
     * @return \StructType\TransactionType
     */
    public function setRefundArray(\ArrayType\RefundArrayType $refundArray = null)
    {
        $this->RefundArray = $refundArray;
        return $this;
    }
    /**
     * Get TransactionSiteID value
     * @return string|null
     */
    public function getTransactionSiteID()
    {
        return $this->TransactionSiteID;
    }
    /**
     * Set TransactionSiteID value
     * @uses \EnumType\SiteCodeType::valueIsValid()
     * @uses \EnumType\SiteCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $transactionSiteID
     * @return \StructType\TransactionType
     */
    public function setTransactionSiteID($transactionSiteID = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SiteCodeType::valueIsValid($transactionSiteID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SiteCodeType', is_array($transactionSiteID) ? implode(', ', $transactionSiteID) : var_export($transactionSiteID, true), implode(', ', \EnumType\SiteCodeType::getValidValues())), __LINE__);
        }
        $this->TransactionSiteID = $transactionSiteID;
        return $this;
    }
    /**
     * Get Platform value
     * @return string|null
     */
    public function getPlatform()
    {
        return $this->Platform;
    }
    /**
     * Set Platform value
     * @uses \EnumType\TransactionPlatformCodeType::valueIsValid()
     * @uses \EnumType\TransactionPlatformCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $platform
     * @return \StructType\TransactionType
     */
    public function setPlatform($platform = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\TransactionPlatformCodeType::valueIsValid($platform)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TransactionPlatformCodeType', is_array($platform) ? implode(', ', $platform) : var_export($platform, true), implode(', ', \EnumType\TransactionPlatformCodeType::getValidValues())), __LINE__);
        }
        $this->Platform = $platform;
        return $this;
    }
    /**
     * Get CartID value
     * @return string|null
     */
    public function getCartID()
    {
        return $this->CartID;
    }
    /**
     * Set CartID value
     * @param string $cartID
     * @return \StructType\TransactionType
     */
    public function setCartID($cartID = null)
    {
        // validation for constraint: string
        if (!is_null($cartID) && !is_string($cartID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cartID, true), gettype($cartID)), __LINE__);
        }
        $this->CartID = $cartID;
        return $this;
    }
    /**
     * Get SellerContactBuyerByEmail value
     * @return bool|null
     */
    public function getSellerContactBuyerByEmail()
    {
        return $this->SellerContactBuyerByEmail;
    }
    /**
     * Set SellerContactBuyerByEmail value
     * @param bool $sellerContactBuyerByEmail
     * @return \StructType\TransactionType
     */
    public function setSellerContactBuyerByEmail($sellerContactBuyerByEmail = null)
    {
        // validation for constraint: boolean
        if (!is_null($sellerContactBuyerByEmail) && !is_bool($sellerContactBuyerByEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sellerContactBuyerByEmail, true), gettype($sellerContactBuyerByEmail)), __LINE__);
        }
        $this->SellerContactBuyerByEmail = $sellerContactBuyerByEmail;
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
     * @return \StructType\TransactionType
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
     * Get PaisaPayID value
     * @return string|null
     */
    public function getPaisaPayID()
    {
        return $this->PaisaPayID;
    }
    /**
     * Set PaisaPayID value
     * @param string $paisaPayID
     * @return \StructType\TransactionType
     */
    public function setPaisaPayID($paisaPayID = null)
    {
        // validation for constraint: string
        if (!is_null($paisaPayID) && !is_string($paisaPayID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paisaPayID, true), gettype($paisaPayID)), __LINE__);
        }
        $this->PaisaPayID = $paisaPayID;
        return $this;
    }
    /**
     * Get BuyerGuaranteePrice value
     * @return \StructType\AmountType|null
     */
    public function getBuyerGuaranteePrice()
    {
        return $this->BuyerGuaranteePrice;
    }
    /**
     * Set BuyerGuaranteePrice value
     * @param \StructType\AmountType $buyerGuaranteePrice
     * @return \StructType\TransactionType
     */
    public function setBuyerGuaranteePrice(\StructType\AmountType $buyerGuaranteePrice = null)
    {
        $this->BuyerGuaranteePrice = $buyerGuaranteePrice;
        return $this;
    }
    /**
     * Get Variation value
     * @return \StructType\VariationType|null
     */
    public function getVariation()
    {
        return $this->Variation;
    }
    /**
     * Set Variation value
     * @param \StructType\VariationType $variation
     * @return \StructType\TransactionType
     */
    public function setVariation(\StructType\VariationType $variation = null)
    {
        $this->Variation = $variation;
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
     * @return \StructType\TransactionType
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
     * Get TotalTransactionPrice value
     * @return \StructType\AmountType|null
     */
    public function getTotalTransactionPrice()
    {
        return $this->TotalTransactionPrice;
    }
    /**
     * Set TotalTransactionPrice value
     * @param \StructType\AmountType $totalTransactionPrice
     * @return \StructType\TransactionType
     */
    public function setTotalTransactionPrice(\StructType\AmountType $totalTransactionPrice = null)
    {
        $this->TotalTransactionPrice = $totalTransactionPrice;
        return $this;
    }
    /**
     * Get Taxes value
     * @return \StructType\TaxesType|null
     */
    public function getTaxes()
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @param \StructType\TaxesType $taxes
     * @return \StructType\TransactionType
     */
    public function setTaxes(\StructType\TaxesType $taxes = null)
    {
        $this->Taxes = $taxes;
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
     * @return \StructType\TransactionType
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
     * @return \StructType\TransactionType
     */
    public function setActualShippingCost(\StructType\AmountType $actualShippingCost = null)
    {
        $this->ActualShippingCost = $actualShippingCost;
        return $this;
    }
    /**
     * Get ActualHandlingCost value
     * @return \StructType\AmountType|null
     */
    public function getActualHandlingCost()
    {
        return $this->ActualHandlingCost;
    }
    /**
     * Set ActualHandlingCost value
     * @param \StructType\AmountType $actualHandlingCost
     * @return \StructType\TransactionType
     */
    public function setActualHandlingCost(\StructType\AmountType $actualHandlingCost = null)
    {
        $this->ActualHandlingCost = $actualHandlingCost;
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
     * @return \StructType\TransactionType
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
     * Get eBayPaymentID value
     * @return string|null
     */
    public function getEBayPaymentID()
    {
        return $this->eBayPaymentID;
    }
    /**
     * Set eBayPaymentID value
     * @param string $eBayPaymentID
     * @return \StructType\TransactionType
     */
    public function setEBayPaymentID($eBayPaymentID = null)
    {
        // validation for constraint: string
        if (!is_null($eBayPaymentID) && !is_string($eBayPaymentID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eBayPaymentID, true), gettype($eBayPaymentID)), __LINE__);
        }
        $this->eBayPaymentID = $eBayPaymentID;
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
     * @return \StructType\TransactionType
     */
    public function setPaymentHoldDetails(\StructType\PaymentHoldDetailType $paymentHoldDetails = null)
    {
        $this->PaymentHoldDetails = $paymentHoldDetails;
        return $this;
    }
    /**
     * Get SellerDiscounts value
     * @return \StructType\SellerDiscountsType|null
     */
    public function getSellerDiscounts()
    {
        return $this->SellerDiscounts;
    }
    /**
     * Set SellerDiscounts value
     * @param \StructType\SellerDiscountsType $sellerDiscounts
     * @return \StructType\TransactionType
     */
    public function setSellerDiscounts(\StructType\SellerDiscountsType $sellerDiscounts = null)
    {
        $this->SellerDiscounts = $sellerDiscounts;
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
     * @return \StructType\TransactionType
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
     * @return \StructType\TransactionType
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
     * Get CodiceFiscale value
     * @return string|null
     */
    public function getCodiceFiscale()
    {
        return $this->CodiceFiscale;
    }
    /**
     * Set CodiceFiscale value
     * @param string $codiceFiscale
     * @return \StructType\TransactionType
     */
    public function setCodiceFiscale($codiceFiscale = null)
    {
        // validation for constraint: string
        if (!is_null($codiceFiscale) && !is_string($codiceFiscale)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codiceFiscale, true), gettype($codiceFiscale)), __LINE__);
        }
        $this->CodiceFiscale = $codiceFiscale;
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
     * @return \StructType\TransactionType
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
     * @return \StructType\TransactionType
     */
    public function setMultiLegShippingDetails(\StructType\MultiLegShippingDetailsType $multiLegShippingDetails = null)
    {
        $this->MultiLegShippingDetails = $multiLegShippingDetails;
        return $this;
    }
    /**
     * Get InvoiceSentTime value
     * @return string|null
     */
    public function getInvoiceSentTime()
    {
        return $this->InvoiceSentTime;
    }
    /**
     * Set InvoiceSentTime value
     * @param string $invoiceSentTime
     * @return \StructType\TransactionType
     */
    public function setInvoiceSentTime($invoiceSentTime = null)
    {
        // validation for constraint: string
        if (!is_null($invoiceSentTime) && !is_string($invoiceSentTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceSentTime, true), gettype($invoiceSentTime)), __LINE__);
        }
        $this->InvoiceSentTime = $invoiceSentTime;
        return $this;
    }
    /**
     * Get UnpaidItem value
     * @return \StructType\UnpaidItemType|null
     */
    public function getUnpaidItem()
    {
        return $this->UnpaidItem;
    }
    /**
     * Set UnpaidItem value
     * @param \StructType\UnpaidItemType $unpaidItem
     * @return \StructType\TransactionType
     */
    public function setUnpaidItem(\StructType\UnpaidItemType $unpaidItem = null)
    {
        $this->UnpaidItem = $unpaidItem;
        return $this;
    }
    /**
     * Get IntangibleItem value
     * @return bool|null
     */
    public function getIntangibleItem()
    {
        return $this->IntangibleItem;
    }
    /**
     * Set IntangibleItem value
     * @param bool $intangibleItem
     * @return \StructType\TransactionType
     */
    public function setIntangibleItem($intangibleItem = null)
    {
        // validation for constraint: boolean
        if (!is_null($intangibleItem) && !is_bool($intangibleItem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($intangibleItem, true), gettype($intangibleItem)), __LINE__);
        }
        $this->IntangibleItem = $intangibleItem;
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
     * @return \StructType\TransactionType
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
     * @return \StructType\TransactionType
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
     * @return \StructType\TransactionType
     */
    public function setPickupMethodSelected(\StructType\PickupMethodSelectedType $pickupMethodSelected = null)
    {
        $this->PickupMethodSelected = $pickupMethodSelected;
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
     * @return \StructType\TransactionType
     */
    public function setShippingConvenienceCharge(\StructType\AmountType $shippingConvenienceCharge = null)
    {
        $this->ShippingConvenienceCharge = $shippingConvenienceCharge;
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
     * @return \StructType\TransactionType
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
     * @return \StructType\TransactionType
     */
    public function setBuyerPackageEnclosures(\StructType\BuyerPackageEnclosuresType $buyerPackageEnclosures = null)
    {
        $this->BuyerPackageEnclosures = $buyerPackageEnclosures;
        return $this;
    }
    /**
     * Get InventoryReservationID value
     * @return string|null
     */
    public function getInventoryReservationID()
    {
        return $this->InventoryReservationID;
    }
    /**
     * Set InventoryReservationID value
     * @param string $inventoryReservationID
     * @return \StructType\TransactionType
     */
    public function setInventoryReservationID($inventoryReservationID = null)
    {
        // validation for constraint: string
        if (!is_null($inventoryReservationID) && !is_string($inventoryReservationID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inventoryReservationID, true), gettype($inventoryReservationID)), __LINE__);
        }
        $this->InventoryReservationID = $inventoryReservationID;
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
     * @return \StructType\TransactionType
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
     * Get eBayPlusTransaction value
     * @return bool|null
     */
    public function getEBayPlusTransaction()
    {
        return $this->eBayPlusTransaction;
    }
    /**
     * Set eBayPlusTransaction value
     * @param bool $eBayPlusTransaction
     * @return \StructType\TransactionType
     */
    public function setEBayPlusTransaction($eBayPlusTransaction = null)
    {
        // validation for constraint: boolean
        if (!is_null($eBayPlusTransaction) && !is_bool($eBayPlusTransaction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eBayPlusTransaction, true), gettype($eBayPlusTransaction)), __LINE__);
        }
        $this->eBayPlusTransaction = $eBayPlusTransaction;
        return $this;
    }
    /**
     * Get GiftSummary value
     * @return \StructType\GiftSummaryType|null
     */
    public function getGiftSummary()
    {
        return $this->GiftSummary;
    }
    /**
     * Set GiftSummary value
     * @param \StructType\GiftSummaryType $giftSummary
     * @return \StructType\TransactionType
     */
    public function setGiftSummary(\StructType\GiftSummaryType $giftSummary = null)
    {
        $this->GiftSummary = $giftSummary;
        return $this;
    }
    /**
     * Get DigitalDeliverySelected value
     * @return \StructType\DigitalDeliverySelectedType|null
     */
    public function getDigitalDeliverySelected()
    {
        return $this->DigitalDeliverySelected;
    }
    /**
     * Set DigitalDeliverySelected value
     * @param \StructType\DigitalDeliverySelectedType $digitalDeliverySelected
     * @return \StructType\TransactionType
     */
    public function setDigitalDeliverySelected(\StructType\DigitalDeliverySelectedType $digitalDeliverySelected = null)
    {
        $this->DigitalDeliverySelected = $digitalDeliverySelected;
        return $this;
    }
    /**
     * Get Gift value
     * @return bool|null
     */
    public function getGift()
    {
        return $this->Gift;
    }
    /**
     * Set Gift value
     * @param bool $gift
     * @return \StructType\TransactionType
     */
    public function setGift($gift = null)
    {
        // validation for constraint: boolean
        if (!is_null($gift) && !is_bool($gift)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($gift, true), gettype($gift)), __LINE__);
        }
        $this->Gift = $gift;
        return $this;
    }
    /**
     * Get GuaranteedShipping value
     * @return bool|null
     */
    public function getGuaranteedShipping()
    {
        return $this->GuaranteedShipping;
    }
    /**
     * Set GuaranteedShipping value
     * @param bool $guaranteedShipping
     * @return \StructType\TransactionType
     */
    public function setGuaranteedShipping($guaranteedShipping = null)
    {
        // validation for constraint: boolean
        if (!is_null($guaranteedShipping) && !is_bool($guaranteedShipping)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($guaranteedShipping, true), gettype($guaranteedShipping)), __LINE__);
        }
        $this->GuaranteedShipping = $guaranteedShipping;
        return $this;
    }
    /**
     * Get GuaranteedDelivery value
     * @return bool|null
     */
    public function getGuaranteedDelivery()
    {
        return $this->GuaranteedDelivery;
    }
    /**
     * Set GuaranteedDelivery value
     * @param bool $guaranteedDelivery
     * @return \StructType\TransactionType
     */
    public function setGuaranteedDelivery($guaranteedDelivery = null)
    {
        // validation for constraint: boolean
        if (!is_null($guaranteedDelivery) && !is_bool($guaranteedDelivery)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($guaranteedDelivery, true), gettype($guaranteedDelivery)), __LINE__);
        }
        $this->GuaranteedDelivery = $guaranteedDelivery;
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
     * @return \StructType\TransactionType
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
     * Get eBayCollectAndRemitTaxes value
     * @return \StructType\TaxesType|null
     */
    public function getEBayCollectAndRemitTaxes()
    {
        return $this->eBayCollectAndRemitTaxes;
    }
    /**
     * Set eBayCollectAndRemitTaxes value
     * @param \StructType\TaxesType $eBayCollectAndRemitTaxes
     * @return \StructType\TransactionType
     */
    public function setEBayCollectAndRemitTaxes(\StructType\TaxesType $eBayCollectAndRemitTaxes = null)
    {
        $this->eBayCollectAndRemitTaxes = $eBayCollectAndRemitTaxes;
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
     * @return \StructType\TransactionType
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
     * @return \StructType\TransactionType
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
