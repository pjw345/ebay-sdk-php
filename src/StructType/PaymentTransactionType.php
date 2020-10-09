<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentTransactionType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type contains details about the allocation of funds to one payee from a buyer payment for a specified order.
 * @subpackage Structs
 */
class PaymentTransactionType extends AbstractStructBase
{
    /**
     * The PaymentStatus
     * Meta information extracted from the WSDL
     * - documentation: The current status of a buyer payment that is allocated to a specified payee.
     * - minOccurs: 0
     * @var string
     */
    public $PaymentStatus;
    /**
     * The Payer
     * Meta information extracted from the WSDL
     * - documentation: This field indicates the eBay user or eBay partner who submitted the payment. <br><br> <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be
     * returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct payer is returned to the buyer or seller, but the identity of the payer will be masked to all third parties.
     * - minOccurs: 0
     * @var \StructType\UserIdentityType
     */
    public $Payer;
    /**
     * The Payee
     * Meta information extracted from the WSDL
     * - documentation: The person or organization who is to receive the payment allocation.
     * - minOccurs: 0
     * @var \StructType\UserIdentityType
     */
    public $Payee;
    /**
     * The PaymentTime
     * Meta information extracted from the WSDL
     * - documentation: The date and time when the payment is received by the payee.
     * - minOccurs: 0
     * @var string
     */
    public $PaymentTime;
    /**
     * The PaymentAmount
     * Meta information extracted from the WSDL
     * - documentation: The amount of the payment that is allocated to the payee. <br><br> <span class="tablenote"><b>Note: </b> As of November 2019, for orders subject to eBay 'Collect and Remit' taxes, PayPal has begun distributing order funds to the
     * seller's account with the sales tax included. eBay 'Collect and Remit' tax includes US sales tax for numerous states, and 'Good and Services' tax that is applicable to Australian and New Zealand sellers. This 'Collect and Remit' tax amount for the
     * order will be included in the <b>PaymentAmount</b> value (if the corresponding monetary transaction is buyer payment for an order). To determine if 'Collect and Remit' taxes were added into <b>PaymentAmount</b> value, the user can check for the
     * <b>Transaction.eBayCollectAndRemitTaxes.TaxDetails</b> and the <b>Transaction.Taxes.TaxDetails</b> containers in the response. If both of these containers appear in the response with a <b>TaxDetails.TaxDescription</b> value of <code>SalesTax</code>
     * (in US) or <code>GST</code> (in Australia or New Zealand), the tax amount that the buyer paid is in this amount. <br><br> Sellers should be aware that the sales tax that the buyer pays for the order will initially be included when the order funds are
     * distributed to their PayPal account, but that PayPal will pull out the sales tax amount shortly after the payment clears, and will distribute the sales tax to the appropriate taxing authority. Previous to this change, PayPal would strip out the
     * 'Collect and Remit' tax before distributing order funds to the seller's account. <br><br> This logic change does not apply to sellers who are in eBay managed payments, so the amount in this field will never reflect any 'Collect and Remit' tax, even
     * if the order is subject to 'Collect and Remit' tax. </span>
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $PaymentAmount;
    /**
     * The ReferenceID
     * Meta information extracted from the WSDL
     * - documentation: A unique transaction ID for the payment. <br/><br/> This field is not returned if the <strong>Payee</strong> field's <strong>type</strong> attribute is <code>eBayPartner</code>. <br><br> <b>For GetOrders, GetOrderTransactions, and
     * GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct payment
     * identifier is returned to the buyer or seller, but the payment identifier will be masked to all third parties.
     * - minOccurs: 0
     * @var \StructType\TransactionReferenceType
     */
    public $ReferenceID;
    /**
     * The FeeOrCreditAmount
     * Meta information extracted from the WSDL
     * - documentation: Fee Amount is a positive value and Credit Amount is a negative value. <br/><br/> This field is not returned if the <strong>Payee</strong> field's <strong>type</strong> attribute is <code>eBayPartner</code>.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $FeeOrCreditAmount;
    /**
     * The PaymentReferenceID
     * Meta information extracted from the WSDL
     * - documentation: The payment transaction ID. <br/><br/> <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer
     * returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct payment identifier is returned to the buyer or seller, but the payment identifier will be masked to all third parties.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\TransactionReferenceType[]
     */
    public $PaymentReferenceID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PaymentTransactionType
     * @uses PaymentTransactionType::setPaymentStatus()
     * @uses PaymentTransactionType::setPayer()
     * @uses PaymentTransactionType::setPayee()
     * @uses PaymentTransactionType::setPaymentTime()
     * @uses PaymentTransactionType::setPaymentAmount()
     * @uses PaymentTransactionType::setReferenceID()
     * @uses PaymentTransactionType::setFeeOrCreditAmount()
     * @uses PaymentTransactionType::setPaymentReferenceID()
     * @uses PaymentTransactionType::setAny()
     * @param string $paymentStatus
     * @param \StructType\UserIdentityType $payer
     * @param \StructType\UserIdentityType $payee
     * @param string $paymentTime
     * @param \StructType\AmountType $paymentAmount
     * @param \StructType\TransactionReferenceType $referenceID
     * @param \StructType\AmountType $feeOrCreditAmount
     * @param \StructType\TransactionReferenceType[] $paymentReferenceID
     * @param \DOMDocument $any
     */
    public function __construct($paymentStatus = null, \StructType\UserIdentityType $payer = null, \StructType\UserIdentityType $payee = null, $paymentTime = null, \StructType\AmountType $paymentAmount = null, \StructType\TransactionReferenceType $referenceID = null, \StructType\AmountType $feeOrCreditAmount = null, array $paymentReferenceID = array(), \DOMDocument $any = null)
    {
        $this
            ->setPaymentStatus($paymentStatus)
            ->setPayer($payer)
            ->setPayee($payee)
            ->setPaymentTime($paymentTime)
            ->setPaymentAmount($paymentAmount)
            ->setReferenceID($referenceID)
            ->setFeeOrCreditAmount($feeOrCreditAmount)
            ->setPaymentReferenceID($paymentReferenceID)
            ->setAny($any);
    }
    /**
     * Get PaymentStatus value
     * @return string|null
     */
    public function getPaymentStatus()
    {
        return $this->PaymentStatus;
    }
    /**
     * Set PaymentStatus value
     * @uses \EnumType\PaymentTransactionStatusCodeType::valueIsValid()
     * @uses \EnumType\PaymentTransactionStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentStatus
     * @return \StructType\PaymentTransactionType
     */
    public function setPaymentStatus($paymentStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PaymentTransactionStatusCodeType::valueIsValid($paymentStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\PaymentTransactionStatusCodeType', is_array($paymentStatus) ? implode(', ', $paymentStatus) : var_export($paymentStatus, true), implode(', ', \EnumType\PaymentTransactionStatusCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentStatus = $paymentStatus;
        return $this;
    }
    /**
     * Get Payer value
     * @return \StructType\UserIdentityType|null
     */
    public function getPayer()
    {
        return $this->Payer;
    }
    /**
     * Set Payer value
     * @param \StructType\UserIdentityType $payer
     * @return \StructType\PaymentTransactionType
     */
    public function setPayer(\StructType\UserIdentityType $payer = null)
    {
        $this->Payer = $payer;
        return $this;
    }
    /**
     * Get Payee value
     * @return \StructType\UserIdentityType|null
     */
    public function getPayee()
    {
        return $this->Payee;
    }
    /**
     * Set Payee value
     * @param \StructType\UserIdentityType $payee
     * @return \StructType\PaymentTransactionType
     */
    public function setPayee(\StructType\UserIdentityType $payee = null)
    {
        $this->Payee = $payee;
        return $this;
    }
    /**
     * Get PaymentTime value
     * @return string|null
     */
    public function getPaymentTime()
    {
        return $this->PaymentTime;
    }
    /**
     * Set PaymentTime value
     * @param string $paymentTime
     * @return \StructType\PaymentTransactionType
     */
    public function setPaymentTime($paymentTime = null)
    {
        // validation for constraint: string
        if (!is_null($paymentTime) && !is_string($paymentTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentTime, true), gettype($paymentTime)), __LINE__);
        }
        $this->PaymentTime = $paymentTime;
        return $this;
    }
    /**
     * Get PaymentAmount value
     * @return \StructType\AmountType|null
     */
    public function getPaymentAmount()
    {
        return $this->PaymentAmount;
    }
    /**
     * Set PaymentAmount value
     * @param \StructType\AmountType $paymentAmount
     * @return \StructType\PaymentTransactionType
     */
    public function setPaymentAmount(\StructType\AmountType $paymentAmount = null)
    {
        $this->PaymentAmount = $paymentAmount;
        return $this;
    }
    /**
     * Get ReferenceID value
     * @return \StructType\TransactionReferenceType|null
     */
    public function getReferenceID()
    {
        return $this->ReferenceID;
    }
    /**
     * Set ReferenceID value
     * @param \StructType\TransactionReferenceType $referenceID
     * @return \StructType\PaymentTransactionType
     */
    public function setReferenceID(\StructType\TransactionReferenceType $referenceID = null)
    {
        $this->ReferenceID = $referenceID;
        return $this;
    }
    /**
     * Get FeeOrCreditAmount value
     * @return \StructType\AmountType|null
     */
    public function getFeeOrCreditAmount()
    {
        return $this->FeeOrCreditAmount;
    }
    /**
     * Set FeeOrCreditAmount value
     * @param \StructType\AmountType $feeOrCreditAmount
     * @return \StructType\PaymentTransactionType
     */
    public function setFeeOrCreditAmount(\StructType\AmountType $feeOrCreditAmount = null)
    {
        $this->FeeOrCreditAmount = $feeOrCreditAmount;
        return $this;
    }
    /**
     * Get PaymentReferenceID value
     * @return \StructType\TransactionReferenceType[]|null
     */
    public function getPaymentReferenceID()
    {
        return $this->PaymentReferenceID;
    }
    /**
     * This method is responsible for validating the values passed to the setPaymentReferenceID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaymentReferenceID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentReferenceIDForArrayConstraintsFromSetPaymentReferenceID(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $paymentTransactionTypePaymentReferenceIDItem) {
            // validation for constraint: itemType
            if (!$paymentTransactionTypePaymentReferenceIDItem instanceof \StructType\TransactionReferenceType) {
                $invalidValues[] = is_object($paymentTransactionTypePaymentReferenceIDItem) ? get_class($paymentTransactionTypePaymentReferenceIDItem) : sprintf('%s(%s)', gettype($paymentTransactionTypePaymentReferenceIDItem), var_export($paymentTransactionTypePaymentReferenceIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PaymentReferenceID property can only contain items of type \StructType\TransactionReferenceType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set PaymentReferenceID value
     * @throws \InvalidArgumentException
     * @param \StructType\TransactionReferenceType[] $paymentReferenceID
     * @return \StructType\PaymentTransactionType
     */
    public function setPaymentReferenceID(array $paymentReferenceID = array())
    {
        // validation for constraint: array
        if ('' !== ($paymentReferenceIDArrayErrorMessage = self::validatePaymentReferenceIDForArrayConstraintsFromSetPaymentReferenceID($paymentReferenceID))) {
            throw new \InvalidArgumentException($paymentReferenceIDArrayErrorMessage, __LINE__);
        }
        $this->PaymentReferenceID = $paymentReferenceID;
        return $this;
    }
    /**
     * Add item to PaymentReferenceID value
     * @throws \InvalidArgumentException
     * @param \StructType\TransactionReferenceType $item
     * @return \StructType\PaymentTransactionType
     */
    public function addToPaymentReferenceID(\StructType\TransactionReferenceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\TransactionReferenceType) {
            throw new \InvalidArgumentException(sprintf('The PaymentReferenceID property can only contain items of type \StructType\TransactionReferenceType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PaymentReferenceID[] = $item;
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
     * @return \StructType\PaymentTransactionType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
