<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemindersType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type contains the counts of various eBay Buying and Seller Reminders that are returned in the <b>GetMyeBayReminders</b> call.
 * @subpackage Structs
 */
class RemindersType extends AbstractStructBase
{
    /**
     * The PaymentToSendCount
     * Meta information extracted from the WSDL
     * - documentation: The number of reminders requesting that the buyer send payment.
     * - minOccurs: 0
     * @var int
     */
    public $PaymentToSendCount;
    /**
     * The FeedbackToReceiveCount
     * Meta information extracted from the WSDL
     * - documentation: The number of reminders that feedback has not yet been received by the buyer or seller.
     * - minOccurs: 0
     * @var int
     */
    public $FeedbackToReceiveCount;
    /**
     * The FeedbackToSendCount
     * Meta information extracted from the WSDL
     * - documentation: The number of reminders that feedback has not yet been sent by the buyer or seller.
     * - minOccurs: 0
     * @var int
     */
    public $FeedbackToSendCount;
    /**
     * The OutbidCount
     * Meta information extracted from the WSDL
     * - documentation: The number of reminders advising the buyer that the buyer has been outbid.
     * - minOccurs: 0
     * @var int
     */
    public $OutbidCount;
    /**
     * The PaymentToReceiveCount
     * Meta information extracted from the WSDL
     * - documentation: The number of reminders that the seller has not yet received a payment.
     * - minOccurs: 0
     * @var int
     */
    public $PaymentToReceiveCount;
    /**
     * The SecondChanceOfferCount
     * Meta information extracted from the WSDL
     * - documentation: The number of reminders requesting that the seller review second chance offers.
     * - minOccurs: 0
     * @var int
     */
    public $SecondChanceOfferCount;
    /**
     * The ShippingNeededCount
     * Meta information extracted from the WSDL
     * - documentation: The number of reminders advising the seller that shipping is needed.
     * - minOccurs: 0
     * @var int
     */
    public $ShippingNeededCount;
    /**
     * The RelistingNeededCount
     * Meta information extracted from the WSDL
     * - documentation: The number of reminders advising the seller that relisting is needed.
     * - minOccurs: 0
     * @var int
     */
    public $RelistingNeededCount;
    /**
     * The TotalNewLeadsCount
     * Meta information extracted from the WSDL
     * - documentation: The number of new leads the seller has recieved.
     * - minOccurs: 0
     * @var int
     */
    public $TotalNewLeadsCount;
    /**
     * The DocsForCCProcessingToSendCount
     * Meta information extracted from the WSDL
     * - documentation: The number of reminders advising the buyer to send documents for credit card processing.
     * - minOccurs: 0
     * @var int
     */
    public $DocsForCCProcessingToSendCount;
    /**
     * The RTEToProcessCount
     * Meta information extracted from the WSDL
     * - documentation: The number of reminders requesting the buyer to process request time extension submitted by the seller.
     * - minOccurs: 0
     * @var int
     */
    public $RTEToProcessCount;
    /**
     * The ItemReceiptToConfirmCount
     * Meta information extracted from the WSDL
     * - documentation: The number of reminders requesting the Buyer to confirm item receipt to seller.
     * - minOccurs: 0
     * @var int
     */
    public $ItemReceiptToConfirmCount;
    /**
     * The RefundOnHoldCount
     * Meta information extracted from the WSDL
     * - documentation: The number of reminders to the buyer on refund on hold.
     * - minOccurs: 0
     * @var int
     */
    public $RefundOnHoldCount;
    /**
     * The RefundCancelledCount
     * Meta information extracted from the WSDL
     * - documentation: The number of reminders to the buyer on refund cancelled.
     * - minOccurs: 0
     * @var int
     */
    public $RefundCancelledCount;
    /**
     * The ShippingDetailsToBeProvidedCount
     * Meta information extracted from the WSDL
     * - documentation: The number of reminders requesting the seller to provide shipping details
     * - minOccurs: 0
     * @var int
     */
    public $ShippingDetailsToBeProvidedCount;
    /**
     * The ItemReceiptConfirmationToReceiveCount
     * Meta information extracted from the WSDL
     * - documentation: The number of reminders to the seller on item receipt confirmation pending from buyer
     * - minOccurs: 0
     * @var int
     */
    public $ItemReceiptConfirmationToReceiveCount;
    /**
     * The RefundInitiatedCount
     * Meta information extracted from the WSDL
     * - documentation: The number of reminders to the seller on refunds initiated
     * - minOccurs: 0
     * @var int
     */
    public $RefundInitiatedCount;
    /**
     * The PendingRTERequestCount
     * Meta information extracted from the WSDL
     * - documentation: The number of reminders to the seller on pending shipping time extension requests with the buyer
     * - minOccurs: 0
     * @var int
     */
    public $PendingRTERequestCount;
    /**
     * The DeclinedRTERequestCount
     * Meta information extracted from the WSDL
     * - documentation: The number of reminders to the seller on declined shipping time extension requests by the buyer
     * - minOccurs: 0
     * @var int
     */
    public $DeclinedRTERequestCount;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for RemindersType
     * @uses RemindersType::setPaymentToSendCount()
     * @uses RemindersType::setFeedbackToReceiveCount()
     * @uses RemindersType::setFeedbackToSendCount()
     * @uses RemindersType::setOutbidCount()
     * @uses RemindersType::setPaymentToReceiveCount()
     * @uses RemindersType::setSecondChanceOfferCount()
     * @uses RemindersType::setShippingNeededCount()
     * @uses RemindersType::setRelistingNeededCount()
     * @uses RemindersType::setTotalNewLeadsCount()
     * @uses RemindersType::setDocsForCCProcessingToSendCount()
     * @uses RemindersType::setRTEToProcessCount()
     * @uses RemindersType::setItemReceiptToConfirmCount()
     * @uses RemindersType::setRefundOnHoldCount()
     * @uses RemindersType::setRefundCancelledCount()
     * @uses RemindersType::setShippingDetailsToBeProvidedCount()
     * @uses RemindersType::setItemReceiptConfirmationToReceiveCount()
     * @uses RemindersType::setRefundInitiatedCount()
     * @uses RemindersType::setPendingRTERequestCount()
     * @uses RemindersType::setDeclinedRTERequestCount()
     * @uses RemindersType::setAny()
     * @param int $paymentToSendCount
     * @param int $feedbackToReceiveCount
     * @param int $feedbackToSendCount
     * @param int $outbidCount
     * @param int $paymentToReceiveCount
     * @param int $secondChanceOfferCount
     * @param int $shippingNeededCount
     * @param int $relistingNeededCount
     * @param int $totalNewLeadsCount
     * @param int $docsForCCProcessingToSendCount
     * @param int $rTEToProcessCount
     * @param int $itemReceiptToConfirmCount
     * @param int $refundOnHoldCount
     * @param int $refundCancelledCount
     * @param int $shippingDetailsToBeProvidedCount
     * @param int $itemReceiptConfirmationToReceiveCount
     * @param int $refundInitiatedCount
     * @param int $pendingRTERequestCount
     * @param int $declinedRTERequestCount
     * @param \DOMDocument $any
     */
    public function __construct($paymentToSendCount = null, $feedbackToReceiveCount = null, $feedbackToSendCount = null, $outbidCount = null, $paymentToReceiveCount = null, $secondChanceOfferCount = null, $shippingNeededCount = null, $relistingNeededCount = null, $totalNewLeadsCount = null, $docsForCCProcessingToSendCount = null, $rTEToProcessCount = null, $itemReceiptToConfirmCount = null, $refundOnHoldCount = null, $refundCancelledCount = null, $shippingDetailsToBeProvidedCount = null, $itemReceiptConfirmationToReceiveCount = null, $refundInitiatedCount = null, $pendingRTERequestCount = null, $declinedRTERequestCount = null, \DOMDocument $any = null)
    {
        $this
            ->setPaymentToSendCount($paymentToSendCount)
            ->setFeedbackToReceiveCount($feedbackToReceiveCount)
            ->setFeedbackToSendCount($feedbackToSendCount)
            ->setOutbidCount($outbidCount)
            ->setPaymentToReceiveCount($paymentToReceiveCount)
            ->setSecondChanceOfferCount($secondChanceOfferCount)
            ->setShippingNeededCount($shippingNeededCount)
            ->setRelistingNeededCount($relistingNeededCount)
            ->setTotalNewLeadsCount($totalNewLeadsCount)
            ->setDocsForCCProcessingToSendCount($docsForCCProcessingToSendCount)
            ->setRTEToProcessCount($rTEToProcessCount)
            ->setItemReceiptToConfirmCount($itemReceiptToConfirmCount)
            ->setRefundOnHoldCount($refundOnHoldCount)
            ->setRefundCancelledCount($refundCancelledCount)
            ->setShippingDetailsToBeProvidedCount($shippingDetailsToBeProvidedCount)
            ->setItemReceiptConfirmationToReceiveCount($itemReceiptConfirmationToReceiveCount)
            ->setRefundInitiatedCount($refundInitiatedCount)
            ->setPendingRTERequestCount($pendingRTERequestCount)
            ->setDeclinedRTERequestCount($declinedRTERequestCount)
            ->setAny($any);
    }
    /**
     * Get PaymentToSendCount value
     * @return int|null
     */
    public function getPaymentToSendCount()
    {
        return $this->PaymentToSendCount;
    }
    /**
     * Set PaymentToSendCount value
     * @param int $paymentToSendCount
     * @return \StructType\RemindersType
     */
    public function setPaymentToSendCount($paymentToSendCount = null)
    {
        // validation for constraint: int
        if (!is_null($paymentToSendCount) && !(is_int($paymentToSendCount) || ctype_digit($paymentToSendCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paymentToSendCount, true), gettype($paymentToSendCount)), __LINE__);
        }
        $this->PaymentToSendCount = $paymentToSendCount;
        return $this;
    }
    /**
     * Get FeedbackToReceiveCount value
     * @return int|null
     */
    public function getFeedbackToReceiveCount()
    {
        return $this->FeedbackToReceiveCount;
    }
    /**
     * Set FeedbackToReceiveCount value
     * @param int $feedbackToReceiveCount
     * @return \StructType\RemindersType
     */
    public function setFeedbackToReceiveCount($feedbackToReceiveCount = null)
    {
        // validation for constraint: int
        if (!is_null($feedbackToReceiveCount) && !(is_int($feedbackToReceiveCount) || ctype_digit($feedbackToReceiveCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($feedbackToReceiveCount, true), gettype($feedbackToReceiveCount)), __LINE__);
        }
        $this->FeedbackToReceiveCount = $feedbackToReceiveCount;
        return $this;
    }
    /**
     * Get FeedbackToSendCount value
     * @return int|null
     */
    public function getFeedbackToSendCount()
    {
        return $this->FeedbackToSendCount;
    }
    /**
     * Set FeedbackToSendCount value
     * @param int $feedbackToSendCount
     * @return \StructType\RemindersType
     */
    public function setFeedbackToSendCount($feedbackToSendCount = null)
    {
        // validation for constraint: int
        if (!is_null($feedbackToSendCount) && !(is_int($feedbackToSendCount) || ctype_digit($feedbackToSendCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($feedbackToSendCount, true), gettype($feedbackToSendCount)), __LINE__);
        }
        $this->FeedbackToSendCount = $feedbackToSendCount;
        return $this;
    }
    /**
     * Get OutbidCount value
     * @return int|null
     */
    public function getOutbidCount()
    {
        return $this->OutbidCount;
    }
    /**
     * Set OutbidCount value
     * @param int $outbidCount
     * @return \StructType\RemindersType
     */
    public function setOutbidCount($outbidCount = null)
    {
        // validation for constraint: int
        if (!is_null($outbidCount) && !(is_int($outbidCount) || ctype_digit($outbidCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($outbidCount, true), gettype($outbidCount)), __LINE__);
        }
        $this->OutbidCount = $outbidCount;
        return $this;
    }
    /**
     * Get PaymentToReceiveCount value
     * @return int|null
     */
    public function getPaymentToReceiveCount()
    {
        return $this->PaymentToReceiveCount;
    }
    /**
     * Set PaymentToReceiveCount value
     * @param int $paymentToReceiveCount
     * @return \StructType\RemindersType
     */
    public function setPaymentToReceiveCount($paymentToReceiveCount = null)
    {
        // validation for constraint: int
        if (!is_null($paymentToReceiveCount) && !(is_int($paymentToReceiveCount) || ctype_digit($paymentToReceiveCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paymentToReceiveCount, true), gettype($paymentToReceiveCount)), __LINE__);
        }
        $this->PaymentToReceiveCount = $paymentToReceiveCount;
        return $this;
    }
    /**
     * Get SecondChanceOfferCount value
     * @return int|null
     */
    public function getSecondChanceOfferCount()
    {
        return $this->SecondChanceOfferCount;
    }
    /**
     * Set SecondChanceOfferCount value
     * @param int $secondChanceOfferCount
     * @return \StructType\RemindersType
     */
    public function setSecondChanceOfferCount($secondChanceOfferCount = null)
    {
        // validation for constraint: int
        if (!is_null($secondChanceOfferCount) && !(is_int($secondChanceOfferCount) || ctype_digit($secondChanceOfferCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($secondChanceOfferCount, true), gettype($secondChanceOfferCount)), __LINE__);
        }
        $this->SecondChanceOfferCount = $secondChanceOfferCount;
        return $this;
    }
    /**
     * Get ShippingNeededCount value
     * @return int|null
     */
    public function getShippingNeededCount()
    {
        return $this->ShippingNeededCount;
    }
    /**
     * Set ShippingNeededCount value
     * @param int $shippingNeededCount
     * @return \StructType\RemindersType
     */
    public function setShippingNeededCount($shippingNeededCount = null)
    {
        // validation for constraint: int
        if (!is_null($shippingNeededCount) && !(is_int($shippingNeededCount) || ctype_digit($shippingNeededCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shippingNeededCount, true), gettype($shippingNeededCount)), __LINE__);
        }
        $this->ShippingNeededCount = $shippingNeededCount;
        return $this;
    }
    /**
     * Get RelistingNeededCount value
     * @return int|null
     */
    public function getRelistingNeededCount()
    {
        return $this->RelistingNeededCount;
    }
    /**
     * Set RelistingNeededCount value
     * @param int $relistingNeededCount
     * @return \StructType\RemindersType
     */
    public function setRelistingNeededCount($relistingNeededCount = null)
    {
        // validation for constraint: int
        if (!is_null($relistingNeededCount) && !(is_int($relistingNeededCount) || ctype_digit($relistingNeededCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($relistingNeededCount, true), gettype($relistingNeededCount)), __LINE__);
        }
        $this->RelistingNeededCount = $relistingNeededCount;
        return $this;
    }
    /**
     * Get TotalNewLeadsCount value
     * @return int|null
     */
    public function getTotalNewLeadsCount()
    {
        return $this->TotalNewLeadsCount;
    }
    /**
     * Set TotalNewLeadsCount value
     * @param int $totalNewLeadsCount
     * @return \StructType\RemindersType
     */
    public function setTotalNewLeadsCount($totalNewLeadsCount = null)
    {
        // validation for constraint: int
        if (!is_null($totalNewLeadsCount) && !(is_int($totalNewLeadsCount) || ctype_digit($totalNewLeadsCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalNewLeadsCount, true), gettype($totalNewLeadsCount)), __LINE__);
        }
        $this->TotalNewLeadsCount = $totalNewLeadsCount;
        return $this;
    }
    /**
     * Get DocsForCCProcessingToSendCount value
     * @return int|null
     */
    public function getDocsForCCProcessingToSendCount()
    {
        return $this->DocsForCCProcessingToSendCount;
    }
    /**
     * Set DocsForCCProcessingToSendCount value
     * @param int $docsForCCProcessingToSendCount
     * @return \StructType\RemindersType
     */
    public function setDocsForCCProcessingToSendCount($docsForCCProcessingToSendCount = null)
    {
        // validation for constraint: int
        if (!is_null($docsForCCProcessingToSendCount) && !(is_int($docsForCCProcessingToSendCount) || ctype_digit($docsForCCProcessingToSendCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($docsForCCProcessingToSendCount, true), gettype($docsForCCProcessingToSendCount)), __LINE__);
        }
        $this->DocsForCCProcessingToSendCount = $docsForCCProcessingToSendCount;
        return $this;
    }
    /**
     * Get RTEToProcessCount value
     * @return int|null
     */
    public function getRTEToProcessCount()
    {
        return $this->RTEToProcessCount;
    }
    /**
     * Set RTEToProcessCount value
     * @param int $rTEToProcessCount
     * @return \StructType\RemindersType
     */
    public function setRTEToProcessCount($rTEToProcessCount = null)
    {
        // validation for constraint: int
        if (!is_null($rTEToProcessCount) && !(is_int($rTEToProcessCount) || ctype_digit($rTEToProcessCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rTEToProcessCount, true), gettype($rTEToProcessCount)), __LINE__);
        }
        $this->RTEToProcessCount = $rTEToProcessCount;
        return $this;
    }
    /**
     * Get ItemReceiptToConfirmCount value
     * @return int|null
     */
    public function getItemReceiptToConfirmCount()
    {
        return $this->ItemReceiptToConfirmCount;
    }
    /**
     * Set ItemReceiptToConfirmCount value
     * @param int $itemReceiptToConfirmCount
     * @return \StructType\RemindersType
     */
    public function setItemReceiptToConfirmCount($itemReceiptToConfirmCount = null)
    {
        // validation for constraint: int
        if (!is_null($itemReceiptToConfirmCount) && !(is_int($itemReceiptToConfirmCount) || ctype_digit($itemReceiptToConfirmCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemReceiptToConfirmCount, true), gettype($itemReceiptToConfirmCount)), __LINE__);
        }
        $this->ItemReceiptToConfirmCount = $itemReceiptToConfirmCount;
        return $this;
    }
    /**
     * Get RefundOnHoldCount value
     * @return int|null
     */
    public function getRefundOnHoldCount()
    {
        return $this->RefundOnHoldCount;
    }
    /**
     * Set RefundOnHoldCount value
     * @param int $refundOnHoldCount
     * @return \StructType\RemindersType
     */
    public function setRefundOnHoldCount($refundOnHoldCount = null)
    {
        // validation for constraint: int
        if (!is_null($refundOnHoldCount) && !(is_int($refundOnHoldCount) || ctype_digit($refundOnHoldCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($refundOnHoldCount, true), gettype($refundOnHoldCount)), __LINE__);
        }
        $this->RefundOnHoldCount = $refundOnHoldCount;
        return $this;
    }
    /**
     * Get RefundCancelledCount value
     * @return int|null
     */
    public function getRefundCancelledCount()
    {
        return $this->RefundCancelledCount;
    }
    /**
     * Set RefundCancelledCount value
     * @param int $refundCancelledCount
     * @return \StructType\RemindersType
     */
    public function setRefundCancelledCount($refundCancelledCount = null)
    {
        // validation for constraint: int
        if (!is_null($refundCancelledCount) && !(is_int($refundCancelledCount) || ctype_digit($refundCancelledCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($refundCancelledCount, true), gettype($refundCancelledCount)), __LINE__);
        }
        $this->RefundCancelledCount = $refundCancelledCount;
        return $this;
    }
    /**
     * Get ShippingDetailsToBeProvidedCount value
     * @return int|null
     */
    public function getShippingDetailsToBeProvidedCount()
    {
        return $this->ShippingDetailsToBeProvidedCount;
    }
    /**
     * Set ShippingDetailsToBeProvidedCount value
     * @param int $shippingDetailsToBeProvidedCount
     * @return \StructType\RemindersType
     */
    public function setShippingDetailsToBeProvidedCount($shippingDetailsToBeProvidedCount = null)
    {
        // validation for constraint: int
        if (!is_null($shippingDetailsToBeProvidedCount) && !(is_int($shippingDetailsToBeProvidedCount) || ctype_digit($shippingDetailsToBeProvidedCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shippingDetailsToBeProvidedCount, true), gettype($shippingDetailsToBeProvidedCount)), __LINE__);
        }
        $this->ShippingDetailsToBeProvidedCount = $shippingDetailsToBeProvidedCount;
        return $this;
    }
    /**
     * Get ItemReceiptConfirmationToReceiveCount value
     * @return int|null
     */
    public function getItemReceiptConfirmationToReceiveCount()
    {
        return $this->ItemReceiptConfirmationToReceiveCount;
    }
    /**
     * Set ItemReceiptConfirmationToReceiveCount value
     * @param int $itemReceiptConfirmationToReceiveCount
     * @return \StructType\RemindersType
     */
    public function setItemReceiptConfirmationToReceiveCount($itemReceiptConfirmationToReceiveCount = null)
    {
        // validation for constraint: int
        if (!is_null($itemReceiptConfirmationToReceiveCount) && !(is_int($itemReceiptConfirmationToReceiveCount) || ctype_digit($itemReceiptConfirmationToReceiveCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemReceiptConfirmationToReceiveCount, true), gettype($itemReceiptConfirmationToReceiveCount)), __LINE__);
        }
        $this->ItemReceiptConfirmationToReceiveCount = $itemReceiptConfirmationToReceiveCount;
        return $this;
    }
    /**
     * Get RefundInitiatedCount value
     * @return int|null
     */
    public function getRefundInitiatedCount()
    {
        return $this->RefundInitiatedCount;
    }
    /**
     * Set RefundInitiatedCount value
     * @param int $refundInitiatedCount
     * @return \StructType\RemindersType
     */
    public function setRefundInitiatedCount($refundInitiatedCount = null)
    {
        // validation for constraint: int
        if (!is_null($refundInitiatedCount) && !(is_int($refundInitiatedCount) || ctype_digit($refundInitiatedCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($refundInitiatedCount, true), gettype($refundInitiatedCount)), __LINE__);
        }
        $this->RefundInitiatedCount = $refundInitiatedCount;
        return $this;
    }
    /**
     * Get PendingRTERequestCount value
     * @return int|null
     */
    public function getPendingRTERequestCount()
    {
        return $this->PendingRTERequestCount;
    }
    /**
     * Set PendingRTERequestCount value
     * @param int $pendingRTERequestCount
     * @return \StructType\RemindersType
     */
    public function setPendingRTERequestCount($pendingRTERequestCount = null)
    {
        // validation for constraint: int
        if (!is_null($pendingRTERequestCount) && !(is_int($pendingRTERequestCount) || ctype_digit($pendingRTERequestCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pendingRTERequestCount, true), gettype($pendingRTERequestCount)), __LINE__);
        }
        $this->PendingRTERequestCount = $pendingRTERequestCount;
        return $this;
    }
    /**
     * Get DeclinedRTERequestCount value
     * @return int|null
     */
    public function getDeclinedRTERequestCount()
    {
        return $this->DeclinedRTERequestCount;
    }
    /**
     * Set DeclinedRTERequestCount value
     * @param int $declinedRTERequestCount
     * @return \StructType\RemindersType
     */
    public function setDeclinedRTERequestCount($declinedRTERequestCount = null)
    {
        // validation for constraint: int
        if (!is_null($declinedRTERequestCount) && !(is_int($declinedRTERequestCount) || ctype_digit($declinedRTERequestCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($declinedRTERequestCount, true), gettype($declinedRTERequestCount)), __LINE__);
        }
        $this->DeclinedRTERequestCount = $declinedRTERequestCount;
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
     * @return \StructType\RemindersType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
