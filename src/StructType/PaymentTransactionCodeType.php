<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentTransactionCodeType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class PaymentTransactionCodeType extends AbstractStructBase
{
    /**
     * The PaymentStatus
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $PaymentStatus;
    /**
     * The Payer
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\UserIdentityType
     */
    public $Payer;
    /**
     * The Payee
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\UserIdentityType
     */
    public $Payee;
    /**
     * The PaymentTime
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $PaymentTime;
    /**
     * The PaymentAmount
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $PaymentAmount;
    /**
     * The ReferenceID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\TransactionReferenceType
     */
    public $ReferenceID;
    /**
     * The FeeOrCreditAmount
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $FeeOrCreditAmount;
    /**
     * The PaymentReferenceID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
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
     * Constructor method for PaymentTransactionCodeType
     * @uses PaymentTransactionCodeType::setPaymentStatus()
     * @uses PaymentTransactionCodeType::setPayer()
     * @uses PaymentTransactionCodeType::setPayee()
     * @uses PaymentTransactionCodeType::setPaymentTime()
     * @uses PaymentTransactionCodeType::setPaymentAmount()
     * @uses PaymentTransactionCodeType::setReferenceID()
     * @uses PaymentTransactionCodeType::setFeeOrCreditAmount()
     * @uses PaymentTransactionCodeType::setPaymentReferenceID()
     * @uses PaymentTransactionCodeType::setAny()
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
     * @return \StructType\PaymentTransactionCodeType
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
     * @return \StructType\PaymentTransactionCodeType
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
     * @return \StructType\PaymentTransactionCodeType
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
     * @return \StructType\PaymentTransactionCodeType
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
     * @return \StructType\PaymentTransactionCodeType
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
     * @return \StructType\PaymentTransactionCodeType
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
     * @return \StructType\PaymentTransactionCodeType
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
        foreach ($values as $paymentTransactionCodeTypePaymentReferenceIDItem) {
            // validation for constraint: itemType
            if (!$paymentTransactionCodeTypePaymentReferenceIDItem instanceof \StructType\TransactionReferenceType) {
                $invalidValues[] = is_object($paymentTransactionCodeTypePaymentReferenceIDItem) ? get_class($paymentTransactionCodeTypePaymentReferenceIDItem) : sprintf('%s(%s)', gettype($paymentTransactionCodeTypePaymentReferenceIDItem), var_export($paymentTransactionCodeTypePaymentReferenceIDItem, true));
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
     * @return \StructType\PaymentTransactionCodeType
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
     * @return \StructType\PaymentTransactionCodeType
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
     * @return \StructType\PaymentTransactionCodeType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
