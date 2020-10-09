<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentInformationCodeType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class PaymentInformationCodeType extends AbstractStructBase
{
    /**
     * The Payment
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\PaymentTransactionCodeType[]
     */
    public $Payment;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PaymentInformationCodeType
     * @uses PaymentInformationCodeType::setPayment()
     * @uses PaymentInformationCodeType::setAny()
     * @param \StructType\PaymentTransactionCodeType[] $payment
     * @param \DOMDocument $any
     */
    public function __construct(array $payment = array(), \DOMDocument $any = null)
    {
        $this
            ->setPayment($payment)
            ->setAny($any);
    }
    /**
     * Get Payment value
     * @return \StructType\PaymentTransactionCodeType[]|null
     */
    public function getPayment()
    {
        return $this->Payment;
    }
    /**
     * This method is responsible for validating the values passed to the setPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPayment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentForArrayConstraintsFromSetPayment(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $paymentInformationCodeTypePaymentItem) {
            // validation for constraint: itemType
            if (!$paymentInformationCodeTypePaymentItem instanceof \StructType\PaymentTransactionCodeType) {
                $invalidValues[] = is_object($paymentInformationCodeTypePaymentItem) ? get_class($paymentInformationCodeTypePaymentItem) : sprintf('%s(%s)', gettype($paymentInformationCodeTypePaymentItem), var_export($paymentInformationCodeTypePaymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Payment property can only contain items of type \StructType\PaymentTransactionCodeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Payment value
     * @throws \InvalidArgumentException
     * @param \StructType\PaymentTransactionCodeType[] $payment
     * @return \StructType\PaymentInformationCodeType
     */
    public function setPayment(array $payment = array())
    {
        // validation for constraint: array
        if ('' !== ($paymentArrayErrorMessage = self::validatePaymentForArrayConstraintsFromSetPayment($payment))) {
            throw new \InvalidArgumentException($paymentArrayErrorMessage, __LINE__);
        }
        $this->Payment = $payment;
        return $this;
    }
    /**
     * Add item to Payment value
     * @throws \InvalidArgumentException
     * @param \StructType\PaymentTransactionCodeType $item
     * @return \StructType\PaymentInformationCodeType
     */
    public function addToPayment(\StructType\PaymentTransactionCodeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PaymentTransactionCodeType) {
            throw new \InvalidArgumentException(sprintf('The Payment property can only contain items of type \StructType\PaymentTransactionCodeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Payment[] = $item;
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
     * @return \StructType\PaymentInformationCodeType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
