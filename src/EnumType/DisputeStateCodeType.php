<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DisputeStateCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that defines the possible states of an order dispute between buyer and seller. <br/><br/> <span class="tablenote"><strong>Note:</strong> 'Item Not Received' or 'Significantly Not As Described' cases, initiated by
 * buyers through the eBay Money Back Guarantee program, are not returned with <b>GetDispute</b> or <b>GetUserDisputes</b>. The <a href="https://developer.ebay.com/Devzone/post-order/post-order_v2_casemanagement-caseId__get.html#overview">getCase</a>
 * method of the <a href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a> is used to retrieve Money Back Guarantee cases programmatically. </span>
 * @subpackage Enumerations
 */
class DisputeStateCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Locked'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the dispute is currently in a locked state, and cannot be updated by any user.
     * @return string 'Locked'
     */
    const VALUE_LOCKED = 'Locked';
    /**
     * Constant for value 'Closed'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the dispute is closed. In some cases, a closed case can be reversed with the <b>SellerReverseDispute</b> call.
     * @return string 'Closed'
     */
    const VALUE_CLOSED = 'Closed';
    /**
     * Constant for value 'BuyerFirstResponsePayOption'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that eBay sent the buyer an Unpaid Item Reminder with a Pay Now option, and is waiting for the buyer's first response.
     * @return string 'BuyerFirstResponsePayOption'
     */
    const VALUE_BUYER_FIRST_RESPONSE_PAY_OPTION = 'BuyerFirstResponsePayOption';
    /**
     * Constant for value 'BuyerFirstResponseNoPayOption'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that eBay sent the buyer an Unpaid Item Reminder, but without a Pay Now option, and is waiting for the buyer's first response.
     * @return string 'BuyerFirstResponseNoPayOption'
     */
    const VALUE_BUYER_FIRST_RESPONSE_NO_PAY_OPTION = 'BuyerFirstResponseNoPayOption';
    /**
     * Constant for value 'BuyerFirstResponsePayOptionLateResponse'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that eBay sent the buyer an Unpaid Item Reminder with a Pay Now option, was waiting for the buyer's first response, but the buyer has failed to respond to this reminder within the 7-day grace period.
     * @return string 'BuyerFirstResponsePayOptionLateResponse'
     */
    const VALUE_BUYER_FIRST_RESPONSE_PAY_OPTION_LATE_RESPONSE = 'BuyerFirstResponsePayOptionLateResponse';
    /**
     * Constant for value 'BuyerFirstResponseNoPayOptionLateResponse'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that eBay sent the buyer an Unpaid Item Reminder without a Pay Now option, was waiting for the buyer's first response, but the buyer has failed to respond to this reminder within the 7-day grace
     * period.
     * @return string 'BuyerFirstResponseNoPayOptionLateResponse'
     */
    const VALUE_BUYER_FIRST_RESPONSE_NO_PAY_OPTION_LATE_RESPONSE = 'BuyerFirstResponseNoPayOptionLateResponse';
    /**
     * Constant for value 'MutualCommunicationPayOption'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the buyer and seller have communicated, and eBay offered the buyer a Pay Now option.
     * @return string 'MutualCommunicationPayOption'
     */
    const VALUE_MUTUAL_COMMUNICATION_PAY_OPTION = 'MutualCommunicationPayOption';
    /**
     * Constant for value 'MutualCommunicationNoPayOption'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the buyer and seller have communicated, but eBay has not offered the buyer a Pay Now option.
     * @return string 'MutualCommunicationNoPayOption'
     */
    const VALUE_MUTUAL_COMMUNICATION_NO_PAY_OPTION = 'MutualCommunicationNoPayOption';
    /**
     * Constant for value 'PendingResolve'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the dispute is pending resolution. A dispute cannot be closed by the buyer or seller when it is in this state.
     * @return string 'PendingResolve'
     */
    const VALUE_PENDING_RESOLVE = 'PendingResolve';
    /**
     * Constant for value 'MutualWithdrawalAgreement'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the buyer and seller have mutually agreed to cancel the transaction within the grace period.
     * @return string 'MutualWithdrawalAgreement'
     */
    const VALUE_MUTUAL_WITHDRAWAL_AGREEMENT = 'MutualWithdrawalAgreement';
    /**
     * Constant for value 'MutualWithdrawalAgreementLate'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the buyer and seller have mutually agreed to cancel the transaction, but the grace period has expired.
     * @return string 'MutualWithdrawalAgreementLate'
     */
    const VALUE_MUTUAL_WITHDRAWAL_AGREEMENT_LATE = 'MutualWithdrawalAgreementLate';
    /**
     * Constant for value 'NotReceivedNoSellerResponse'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the buyer filed an Item Not Received dispute through PayPal account, and the seller has not yet responded. A seller may respond to a case in this state by using the <b>AddDisputeResponse</b> call
     * and setting the <b>DisputeActivity</b> value to <code>SellerOffersRefund</code>, <code>SellerShippedItem</code>, or <code>SellerComment</code>.
     * @return string 'NotReceivedNoSellerResponse'
     */
    const VALUE_NOT_RECEIVED_NO_SELLER_RESPONSE = 'NotReceivedNoSellerResponse';
    /**
     * Constant for value 'NotAsDescribedNoSellerResponse'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the buyer filed an Item Not As Described dispute through PayPal account, and the seller has not yet responded. A seller may respond to a case in this state by using the <b>AddDisputeResponse</b>
     * call and setting the <b>DisputeActivity</b> value to <code>SellerOffersRefund</code> or <code>SellerComment</code>.
     * @return string 'NotAsDescribedNoSellerResponse'
     */
    const VALUE_NOT_AS_DESCRIBED_NO_SELLER_RESPONSE = 'NotAsDescribedNoSellerResponse';
    /**
     * Constant for value 'NotReceivedMutualCommunication'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the buyer filed an Item Not Received dispute through PayPal account, and the buyer and seller have communicated about the issue. A seller may respond to a case in this state by using the
     * <b>AddDisputeResponse</b> call and setting the <b>DisputeActivity</b> value to <code>SellerOffersRefund</code>, <code>SellerShippedItem</code>, or <code>SellerComment</code>.
     * @return string 'NotReceivedMutualCommunication'
     */
    const VALUE_NOT_RECEIVED_MUTUAL_COMMUNICATION = 'NotReceivedMutualCommunication';
    /**
     * Constant for value 'NotAsDescribedMutualCommunication'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the buyer filed an Item Not As Described dispute through PayPal account, and the buyer and seller have communicated about the issue. A seller may respond to a case in this state by using the
     * <b>AddDisputeResponse</b> call and setting the <b>DisputeActivity</b> value to <code>SellerOffersRefund</code>.
     * @return string 'NotAsDescribedMutualCommunication'
     */
    const VALUE_NOT_AS_DESCRIBED_MUTUAL_COMMUNICATION = 'NotAsDescribedMutualCommunication';
    /**
     * Constant for value 'MutualAgreementOrBuyerReturningItem'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the seller filed an Unpaid Item dispute, and the seller says mutual agreement has been reached and is waiting for the buyer to confirm, or the buyer is returning the item to the seller.
     * @return string 'MutualAgreementOrBuyerReturningItem'
     */
    const VALUE_MUTUAL_AGREEMENT_OR_BUYER_RETURNING_ITEM = 'MutualAgreementOrBuyerReturningItem';
    /**
     * Constant for value 'ClaimOpened'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the claim was assigned to an adjuster.
     * @return string 'ClaimOpened'
     */
    const VALUE_CLAIM_OPENED = 'ClaimOpened';
    /**
     * Constant for value 'NoDocumentation'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the buyer was contacted by eBay and asked to submit paperwork to support the claim.
     * @return string 'NoDocumentation'
     */
    const VALUE_NO_DOCUMENTATION = 'NoDocumentation';
    /**
     * Constant for value 'ClaimClosed'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the claim was closed due to buyer not responding to verification, or was missing paperwork.
     * @return string 'ClaimClosed'
     */
    const VALUE_CLAIM_CLOSED = 'ClaimClosed';
    /**
     * Constant for value 'ClaimDenied'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the buyer's claim was denied.
     * @return string 'ClaimDenied'
     */
    const VALUE_CLAIM_DENIED = 'ClaimDenied';
    /**
     * Constant for value 'ClaimPending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that paperwork was received from the buyer and the claim is being investigated.
     * @return string 'ClaimPending'
     */
    const VALUE_CLAIM_PENDING = 'ClaimPending';
    /**
     * Constant for value 'ClaimPaymentPending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the buyer's claim was approved for reimbursement and was sent to accounts payable for payment.
     * @return string 'ClaimPaymentPending'
     */
    const VALUE_CLAIM_PAYMENT_PENDING = 'ClaimPaymentPending';
    /**
     * Constant for value 'ClaimPaid'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the buyer was reimbursed for the claim.
     * @return string 'ClaimPaid'
     */
    const VALUE_CLAIM_PAID = 'ClaimPaid';
    /**
     * Constant for value 'ClaimResolved'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the issue has been resolved due to the seller sending the item or refunding the buyer.
     * @return string 'ClaimResolved'
     */
    const VALUE_CLAIM_RESOLVED = 'ClaimResolved';
    /**
     * Constant for value 'ClaimSubmitted'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the claim was submitted via Web.
     * @return string 'ClaimSubmitted'
     */
    const VALUE_CLAIM_SUBMITTED = 'ClaimSubmitted';
    /**
     * Constant for value 'UnpaidItemOpen'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the Unpaid Item dispute is open.
     * @return string 'UnpaidItemOpen'
     */
    const VALUE_UNPAID_ITEM_OPEN = 'UnpaidItemOpen';
    /**
     * Constant for value 'UPIAssistanceDisabledByeBay'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the Unpaid Item dispute filed by the Unpaid Item Assistance mechanism was disabled by eBay (for example, eBay detected that payment was initiated and the seller needs to manually handle this
     * dispute).
     * @return string 'UPIAssistanceDisabledByeBay'
     */
    const VALUE_UPIASSISTANCE_DISABLED_BYE_BAY = 'UPIAssistanceDisabledByeBay';
    /**
     * Constant for value 'UPIAssistanceDisabledBySeller'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the Unpaid Item dispute filed by the Unpaid Item Assistance mechanism was disabled by the seller (e.g. the buyer and seller have communicated about payment and the seller wishes to extend the
     * time for payment and not let the automatic process close the dispute automatically).
     * @return string 'UPIAssistanceDisabledBySeller'
     */
    const VALUE_UPIASSISTANCE_DISABLED_BY_SELLER = 'UPIAssistanceDisabledBySeller';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_LOCKED
     * @uses self::VALUE_CLOSED
     * @uses self::VALUE_BUYER_FIRST_RESPONSE_PAY_OPTION
     * @uses self::VALUE_BUYER_FIRST_RESPONSE_NO_PAY_OPTION
     * @uses self::VALUE_BUYER_FIRST_RESPONSE_PAY_OPTION_LATE_RESPONSE
     * @uses self::VALUE_BUYER_FIRST_RESPONSE_NO_PAY_OPTION_LATE_RESPONSE
     * @uses self::VALUE_MUTUAL_COMMUNICATION_PAY_OPTION
     * @uses self::VALUE_MUTUAL_COMMUNICATION_NO_PAY_OPTION
     * @uses self::VALUE_PENDING_RESOLVE
     * @uses self::VALUE_MUTUAL_WITHDRAWAL_AGREEMENT
     * @uses self::VALUE_MUTUAL_WITHDRAWAL_AGREEMENT_LATE
     * @uses self::VALUE_NOT_RECEIVED_NO_SELLER_RESPONSE
     * @uses self::VALUE_NOT_AS_DESCRIBED_NO_SELLER_RESPONSE
     * @uses self::VALUE_NOT_RECEIVED_MUTUAL_COMMUNICATION
     * @uses self::VALUE_NOT_AS_DESCRIBED_MUTUAL_COMMUNICATION
     * @uses self::VALUE_MUTUAL_AGREEMENT_OR_BUYER_RETURNING_ITEM
     * @uses self::VALUE_CLAIM_OPENED
     * @uses self::VALUE_NO_DOCUMENTATION
     * @uses self::VALUE_CLAIM_CLOSED
     * @uses self::VALUE_CLAIM_DENIED
     * @uses self::VALUE_CLAIM_PENDING
     * @uses self::VALUE_CLAIM_PAYMENT_PENDING
     * @uses self::VALUE_CLAIM_PAID
     * @uses self::VALUE_CLAIM_RESOLVED
     * @uses self::VALUE_CLAIM_SUBMITTED
     * @uses self::VALUE_UNPAID_ITEM_OPEN
     * @uses self::VALUE_UPIASSISTANCE_DISABLED_BYE_BAY
     * @uses self::VALUE_UPIASSISTANCE_DISABLED_BY_SELLER
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LOCKED,
            self::VALUE_CLOSED,
            self::VALUE_BUYER_FIRST_RESPONSE_PAY_OPTION,
            self::VALUE_BUYER_FIRST_RESPONSE_NO_PAY_OPTION,
            self::VALUE_BUYER_FIRST_RESPONSE_PAY_OPTION_LATE_RESPONSE,
            self::VALUE_BUYER_FIRST_RESPONSE_NO_PAY_OPTION_LATE_RESPONSE,
            self::VALUE_MUTUAL_COMMUNICATION_PAY_OPTION,
            self::VALUE_MUTUAL_COMMUNICATION_NO_PAY_OPTION,
            self::VALUE_PENDING_RESOLVE,
            self::VALUE_MUTUAL_WITHDRAWAL_AGREEMENT,
            self::VALUE_MUTUAL_WITHDRAWAL_AGREEMENT_LATE,
            self::VALUE_NOT_RECEIVED_NO_SELLER_RESPONSE,
            self::VALUE_NOT_AS_DESCRIBED_NO_SELLER_RESPONSE,
            self::VALUE_NOT_RECEIVED_MUTUAL_COMMUNICATION,
            self::VALUE_NOT_AS_DESCRIBED_MUTUAL_COMMUNICATION,
            self::VALUE_MUTUAL_AGREEMENT_OR_BUYER_RETURNING_ITEM,
            self::VALUE_CLAIM_OPENED,
            self::VALUE_NO_DOCUMENTATION,
            self::VALUE_CLAIM_CLOSED,
            self::VALUE_CLAIM_DENIED,
            self::VALUE_CLAIM_PENDING,
            self::VALUE_CLAIM_PAYMENT_PENDING,
            self::VALUE_CLAIM_PAID,
            self::VALUE_CLAIM_RESOLVED,
            self::VALUE_CLAIM_SUBMITTED,
            self::VALUE_UNPAID_ITEM_OPEN,
            self::VALUE_UPIASSISTANCE_DISABLED_BYE_BAY,
            self::VALUE_UPIASSISTANCE_DISABLED_BY_SELLER,
            self::VALUE_CUSTOM_CODE,
        );
    }
}
