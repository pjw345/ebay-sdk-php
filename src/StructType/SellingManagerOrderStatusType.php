<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerOrderStatusType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type contains details on the status of an order.
 * @subpackage Structs
 */
class SellingManagerOrderStatusType extends AbstractStructBase
{
    /**
     * The CheckoutStatus
     * Meta information extracted from the WSDL
     * - documentation: Indicates the current status of the checkout flow for the order.
     * - minOccurs: 0
     * @var string
     */
    public $CheckoutStatus;
    /**
     * The PaidStatus
     * Meta information extracted from the WSDL
     * - documentation: The paid status of the order.
     * - minOccurs: 0
     * @var string
     */
    public $PaidStatus;
    /**
     * The ShippedStatus
     * Meta information extracted from the WSDL
     * - documentation: The shipped status of the order.
     * - minOccurs: 0
     * @var string
     */
    public $ShippedStatus;
    /**
     * The eBayPaymentStatus
     * Meta information extracted from the WSDL
     * - documentation: The success or failure of a buyer's online payment.
     * - minOccurs: 0
     * @var string
     */
    public $eBayPaymentStatus;
    /**
     * The PayPalTransactionID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier of the PayPal transaction for the order.
     * - minOccurs: 0
     * @var string
     */
    public $PayPalTransactionID;
    /**
     * The PaymentMethodUsed
     * Meta information extracted from the WSDL
     * - documentation: The payment method the buyer selected for paying the seller for the order. If checkout is incomplete, PaymentMethodUsed is set to whatever the buyer selected as his or her preference on the Review Your Purchase page.
     * - minOccurs: 0
     * @var string
     */
    public $PaymentMethodUsed;
    /**
     * The FeedbackReceived
     * Meta information extracted from the WSDL
     * - documentation: The type of feedback received (if feedback was received).
     * - minOccurs: 0
     * @var string
     */
    public $FeedbackReceived;
    /**
     * The FeedbackSent
     * Meta information extracted from the WSDL
     * - documentation: Whether the seller has left feedback.
     * - minOccurs: 0
     * @var bool
     */
    public $FeedbackSent;
    /**
     * The TotalEmailsSent
     * Meta information extracted from the WSDL
     * - documentation: The total emails sent.
     * - minOccurs: 0
     * @var int
     */
    public $TotalEmailsSent;
    /**
     * The PaymentHoldStatus
     * Meta information extracted from the WSDL
     * - documentation: Contains the current status of a hold on a PayPal payment. The payment hold that is referred to as a "payment review" hold results from a possible issue with a buyer. The payment hold referred to as a "merchant hold" results from a
     * possible issue with a seller. For more information, please see the link below.
     * - minOccurs: 0
     * @var string
     */
    public $PaymentHoldStatus;
    /**
     * The SellerInvoiceNumber
     * Meta information extracted from the WSDL
     * - documentation: The custom invoice number.
     * - minOccurs: 0
     * @var string
     */
    public $SellerInvoiceNumber;
    /**
     * The ShippedTime
     * Meta information extracted from the WSDL
     * - documentation: The date on which the seller marks the item as shipped, either set by default as the date date the item was marked shipped or set explicitly by the seller using the Edit Sales Record page. Note that sellers have the ability to set
     * this value up to 3 calendar days in the future.
     * - minOccurs: 0
     * @var string
     */
    public $ShippedTime;
    /**
     * The PaidTime
     * Meta information extracted from the WSDL
     * - documentation: Date on which the order was paid.
     * - minOccurs: 0
     * @var string
     */
    public $PaidTime;
    /**
     * The LastEmailSentTime
     * Meta information extracted from the WSDL
     * - documentation: The time that the last email was sent.
     * - minOccurs: 0
     * @var string
     */
    public $LastEmailSentTime;
    /**
     * The SellerInvoiceTime
     * Meta information extracted from the WSDL
     * - documentation: The time the invoice was sent. This is a seller-entered value for VAT-enabled sites. It is returned only for business sellers in VAT-enabled sites.
     * - minOccurs: 0
     * @var string
     */
    public $SellerInvoiceTime;
    /**
     * The IntegratedMerchantCreditCardEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the order can be paid for through a payment gateway (Payflow) account. If <b>IntegratedMerchantCreditCardEnabled</b> is <code>true</code>, then integrated merchant credit card (IMCC) is enabled for credit cards
     * because the seller has a payment gateway account. Therefore, if <b>IntegratedMerchantCreditCardEnabled</b> is <code>true</code>, and AmEx, Discover, or VisaMC is returned for an item, then on checkout, an online credit-card payment is processed
     * through a payment gateway account. A payment gateway account is used by sellers to accept online credit cards (Visa, MasterCard, American Express, and Discover). <br><br> <span class="tablenote"><b>Note: </b> Beginning on May 1, 2019, eBay will no
     * longer support electronic payments through Integrated Merchant Credit Card accounts. To accept online credit card payments from buyers, a seller must use specify PayPal as an accepted payment method, or opt in to eBay Managed Payments program (if the
     * program is available to that seller). </span>
     * - minOccurs: 0
     * @var bool
     */
    public $IntegratedMerchantCreditCardEnabled;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellingManagerOrderStatusType
     * @uses SellingManagerOrderStatusType::setCheckoutStatus()
     * @uses SellingManagerOrderStatusType::setPaidStatus()
     * @uses SellingManagerOrderStatusType::setShippedStatus()
     * @uses SellingManagerOrderStatusType::setEBayPaymentStatus()
     * @uses SellingManagerOrderStatusType::setPayPalTransactionID()
     * @uses SellingManagerOrderStatusType::setPaymentMethodUsed()
     * @uses SellingManagerOrderStatusType::setFeedbackReceived()
     * @uses SellingManagerOrderStatusType::setFeedbackSent()
     * @uses SellingManagerOrderStatusType::setTotalEmailsSent()
     * @uses SellingManagerOrderStatusType::setPaymentHoldStatus()
     * @uses SellingManagerOrderStatusType::setSellerInvoiceNumber()
     * @uses SellingManagerOrderStatusType::setShippedTime()
     * @uses SellingManagerOrderStatusType::setPaidTime()
     * @uses SellingManagerOrderStatusType::setLastEmailSentTime()
     * @uses SellingManagerOrderStatusType::setSellerInvoiceTime()
     * @uses SellingManagerOrderStatusType::setIntegratedMerchantCreditCardEnabled()
     * @uses SellingManagerOrderStatusType::setAny()
     * @param string $checkoutStatus
     * @param string $paidStatus
     * @param string $shippedStatus
     * @param string $eBayPaymentStatus
     * @param string $payPalTransactionID
     * @param string $paymentMethodUsed
     * @param string $feedbackReceived
     * @param bool $feedbackSent
     * @param int $totalEmailsSent
     * @param string $paymentHoldStatus
     * @param string $sellerInvoiceNumber
     * @param string $shippedTime
     * @param string $paidTime
     * @param string $lastEmailSentTime
     * @param string $sellerInvoiceTime
     * @param bool $integratedMerchantCreditCardEnabled
     * @param \DOMDocument $any
     */
    public function __construct($checkoutStatus = null, $paidStatus = null, $shippedStatus = null, $eBayPaymentStatus = null, $payPalTransactionID = null, $paymentMethodUsed = null, $feedbackReceived = null, $feedbackSent = null, $totalEmailsSent = null, $paymentHoldStatus = null, $sellerInvoiceNumber = null, $shippedTime = null, $paidTime = null, $lastEmailSentTime = null, $sellerInvoiceTime = null, $integratedMerchantCreditCardEnabled = null, \DOMDocument $any = null)
    {
        $this
            ->setCheckoutStatus($checkoutStatus)
            ->setPaidStatus($paidStatus)
            ->setShippedStatus($shippedStatus)
            ->setEBayPaymentStatus($eBayPaymentStatus)
            ->setPayPalTransactionID($payPalTransactionID)
            ->setPaymentMethodUsed($paymentMethodUsed)
            ->setFeedbackReceived($feedbackReceived)
            ->setFeedbackSent($feedbackSent)
            ->setTotalEmailsSent($totalEmailsSent)
            ->setPaymentHoldStatus($paymentHoldStatus)
            ->setSellerInvoiceNumber($sellerInvoiceNumber)
            ->setShippedTime($shippedTime)
            ->setPaidTime($paidTime)
            ->setLastEmailSentTime($lastEmailSentTime)
            ->setSellerInvoiceTime($sellerInvoiceTime)
            ->setIntegratedMerchantCreditCardEnabled($integratedMerchantCreditCardEnabled)
            ->setAny($any);
    }
    /**
     * Get CheckoutStatus value
     * @return string|null
     */
    public function getCheckoutStatus()
    {
        return $this->CheckoutStatus;
    }
    /**
     * Set CheckoutStatus value
     * @uses \EnumType\CheckoutStatusCodeType::valueIsValid()
     * @uses \EnumType\CheckoutStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $checkoutStatus
     * @return \StructType\SellingManagerOrderStatusType
     */
    public function setCheckoutStatus($checkoutStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CheckoutStatusCodeType::valueIsValid($checkoutStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CheckoutStatusCodeType', is_array($checkoutStatus) ? implode(', ', $checkoutStatus) : var_export($checkoutStatus, true), implode(', ', \EnumType\CheckoutStatusCodeType::getValidValues())), __LINE__);
        }
        $this->CheckoutStatus = $checkoutStatus;
        return $this;
    }
    /**
     * Get PaidStatus value
     * @return string|null
     */
    public function getPaidStatus()
    {
        return $this->PaidStatus;
    }
    /**
     * Set PaidStatus value
     * @uses \EnumType\SellingManagerPaidStatusCodeType::valueIsValid()
     * @uses \EnumType\SellingManagerPaidStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paidStatus
     * @return \StructType\SellingManagerOrderStatusType
     */
    public function setPaidStatus($paidStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SellingManagerPaidStatusCodeType::valueIsValid($paidStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SellingManagerPaidStatusCodeType', is_array($paidStatus) ? implode(', ', $paidStatus) : var_export($paidStatus, true), implode(', ', \EnumType\SellingManagerPaidStatusCodeType::getValidValues())), __LINE__);
        }
        $this->PaidStatus = $paidStatus;
        return $this;
    }
    /**
     * Get ShippedStatus value
     * @return string|null
     */
    public function getShippedStatus()
    {
        return $this->ShippedStatus;
    }
    /**
     * Set ShippedStatus value
     * @uses \EnumType\SellingManagerShippedStatusCodeType::valueIsValid()
     * @uses \EnumType\SellingManagerShippedStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $shippedStatus
     * @return \StructType\SellingManagerOrderStatusType
     */
    public function setShippedStatus($shippedStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SellingManagerShippedStatusCodeType::valueIsValid($shippedStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SellingManagerShippedStatusCodeType', is_array($shippedStatus) ? implode(', ', $shippedStatus) : var_export($shippedStatus, true), implode(', ', \EnumType\SellingManagerShippedStatusCodeType::getValidValues())), __LINE__);
        }
        $this->ShippedStatus = $shippedStatus;
        return $this;
    }
    /**
     * Get eBayPaymentStatus value
     * @return string|null
     */
    public function getEBayPaymentStatus()
    {
        return $this->eBayPaymentStatus;
    }
    /**
     * Set eBayPaymentStatus value
     * @uses \EnumType\PaymentStatusCodeType::valueIsValid()
     * @uses \EnumType\PaymentStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eBayPaymentStatus
     * @return \StructType\SellingManagerOrderStatusType
     */
    public function setEBayPaymentStatus($eBayPaymentStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PaymentStatusCodeType::valueIsValid($eBayPaymentStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\PaymentStatusCodeType', is_array($eBayPaymentStatus) ? implode(', ', $eBayPaymentStatus) : var_export($eBayPaymentStatus, true), implode(', ', \EnumType\PaymentStatusCodeType::getValidValues())), __LINE__);
        }
        $this->eBayPaymentStatus = $eBayPaymentStatus;
        return $this;
    }
    /**
     * Get PayPalTransactionID value
     * @return string|null
     */
    public function getPayPalTransactionID()
    {
        return $this->PayPalTransactionID;
    }
    /**
     * Set PayPalTransactionID value
     * @param string $payPalTransactionID
     * @return \StructType\SellingManagerOrderStatusType
     */
    public function setPayPalTransactionID($payPalTransactionID = null)
    {
        // validation for constraint: string
        if (!is_null($payPalTransactionID) && !is_string($payPalTransactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($payPalTransactionID, true), gettype($payPalTransactionID)), __LINE__);
        }
        $this->PayPalTransactionID = $payPalTransactionID;
        return $this;
    }
    /**
     * Get PaymentMethodUsed value
     * @return string|null
     */
    public function getPaymentMethodUsed()
    {
        return $this->PaymentMethodUsed;
    }
    /**
     * Set PaymentMethodUsed value
     * @uses \EnumType\BuyerPaymentMethodCodeType::valueIsValid()
     * @uses \EnumType\BuyerPaymentMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentMethodUsed
     * @return \StructType\SellingManagerOrderStatusType
     */
    public function setPaymentMethodUsed($paymentMethodUsed = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BuyerPaymentMethodCodeType::valueIsValid($paymentMethodUsed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\BuyerPaymentMethodCodeType', is_array($paymentMethodUsed) ? implode(', ', $paymentMethodUsed) : var_export($paymentMethodUsed, true), implode(', ', \EnumType\BuyerPaymentMethodCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentMethodUsed = $paymentMethodUsed;
        return $this;
    }
    /**
     * Get FeedbackReceived value
     * @return string|null
     */
    public function getFeedbackReceived()
    {
        return $this->FeedbackReceived;
    }
    /**
     * Set FeedbackReceived value
     * @uses \EnumType\CommentTypeCodeType::valueIsValid()
     * @uses \EnumType\CommentTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $feedbackReceived
     * @return \StructType\SellingManagerOrderStatusType
     */
    public function setFeedbackReceived($feedbackReceived = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CommentTypeCodeType::valueIsValid($feedbackReceived)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CommentTypeCodeType', is_array($feedbackReceived) ? implode(', ', $feedbackReceived) : var_export($feedbackReceived, true), implode(', ', \EnumType\CommentTypeCodeType::getValidValues())), __LINE__);
        }
        $this->FeedbackReceived = $feedbackReceived;
        return $this;
    }
    /**
     * Get FeedbackSent value
     * @return bool|null
     */
    public function getFeedbackSent()
    {
        return $this->FeedbackSent;
    }
    /**
     * Set FeedbackSent value
     * @param bool $feedbackSent
     * @return \StructType\SellingManagerOrderStatusType
     */
    public function setFeedbackSent($feedbackSent = null)
    {
        // validation for constraint: boolean
        if (!is_null($feedbackSent) && !is_bool($feedbackSent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($feedbackSent, true), gettype($feedbackSent)), __LINE__);
        }
        $this->FeedbackSent = $feedbackSent;
        return $this;
    }
    /**
     * Get TotalEmailsSent value
     * @return int|null
     */
    public function getTotalEmailsSent()
    {
        return $this->TotalEmailsSent;
    }
    /**
     * Set TotalEmailsSent value
     * @param int $totalEmailsSent
     * @return \StructType\SellingManagerOrderStatusType
     */
    public function setTotalEmailsSent($totalEmailsSent = null)
    {
        // validation for constraint: int
        if (!is_null($totalEmailsSent) && !(is_int($totalEmailsSent) || ctype_digit($totalEmailsSent))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalEmailsSent, true), gettype($totalEmailsSent)), __LINE__);
        }
        $this->TotalEmailsSent = $totalEmailsSent;
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
     * @return \StructType\SellingManagerOrderStatusType
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
     * Get SellerInvoiceNumber value
     * @return string|null
     */
    public function getSellerInvoiceNumber()
    {
        return $this->SellerInvoiceNumber;
    }
    /**
     * Set SellerInvoiceNumber value
     * @param string $sellerInvoiceNumber
     * @return \StructType\SellingManagerOrderStatusType
     */
    public function setSellerInvoiceNumber($sellerInvoiceNumber = null)
    {
        // validation for constraint: string
        if (!is_null($sellerInvoiceNumber) && !is_string($sellerInvoiceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerInvoiceNumber, true), gettype($sellerInvoiceNumber)), __LINE__);
        }
        $this->SellerInvoiceNumber = $sellerInvoiceNumber;
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
     * @return \StructType\SellingManagerOrderStatusType
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
     * @return \StructType\SellingManagerOrderStatusType
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
     * Get LastEmailSentTime value
     * @return string|null
     */
    public function getLastEmailSentTime()
    {
        return $this->LastEmailSentTime;
    }
    /**
     * Set LastEmailSentTime value
     * @param string $lastEmailSentTime
     * @return \StructType\SellingManagerOrderStatusType
     */
    public function setLastEmailSentTime($lastEmailSentTime = null)
    {
        // validation for constraint: string
        if (!is_null($lastEmailSentTime) && !is_string($lastEmailSentTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastEmailSentTime, true), gettype($lastEmailSentTime)), __LINE__);
        }
        $this->LastEmailSentTime = $lastEmailSentTime;
        return $this;
    }
    /**
     * Get SellerInvoiceTime value
     * @return string|null
     */
    public function getSellerInvoiceTime()
    {
        return $this->SellerInvoiceTime;
    }
    /**
     * Set SellerInvoiceTime value
     * @param string $sellerInvoiceTime
     * @return \StructType\SellingManagerOrderStatusType
     */
    public function setSellerInvoiceTime($sellerInvoiceTime = null)
    {
        // validation for constraint: string
        if (!is_null($sellerInvoiceTime) && !is_string($sellerInvoiceTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerInvoiceTime, true), gettype($sellerInvoiceTime)), __LINE__);
        }
        $this->SellerInvoiceTime = $sellerInvoiceTime;
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
     * @return \StructType\SellingManagerOrderStatusType
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
     * @return \StructType\SellingManagerOrderStatusType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
