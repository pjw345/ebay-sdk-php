<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefundFundingSourceType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class RefundFundingSourceType extends AbstractStructBase
{
    /**
     * The RefundingSourceType
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $RefundingSourceType;
    /**
     * The AccountNumber
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $AccountNumber;
    /**
     * The RefundAmount
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $RefundAmount;
    /**
     * The SellerExternalTransactionID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $SellerExternalTransactionID;
    /**
     * The BuyerExternalTransactionID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $BuyerExternalTransactionID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for RefundFundingSourceType
     * @uses RefundFundingSourceType::setRefundingSourceType()
     * @uses RefundFundingSourceType::setAccountNumber()
     * @uses RefundFundingSourceType::setRefundAmount()
     * @uses RefundFundingSourceType::setSellerExternalTransactionID()
     * @uses RefundFundingSourceType::setBuyerExternalTransactionID()
     * @uses RefundFundingSourceType::setAny()
     * @param string $refundingSourceType
     * @param string $accountNumber
     * @param \StructType\AmountType $refundAmount
     * @param string $sellerExternalTransactionID
     * @param string $buyerExternalTransactionID
     * @param \DOMDocument $any
     */
    public function __construct($refundingSourceType = null, $accountNumber = null, \StructType\AmountType $refundAmount = null, $sellerExternalTransactionID = null, $buyerExternalTransactionID = null, \DOMDocument $any = null)
    {
        $this
            ->setRefundingSourceType($refundingSourceType)
            ->setAccountNumber($accountNumber)
            ->setRefundAmount($refundAmount)
            ->setSellerExternalTransactionID($sellerExternalTransactionID)
            ->setBuyerExternalTransactionID($buyerExternalTransactionID)
            ->setAny($any);
    }
    /**
     * Get RefundingSourceType value
     * @return string|null
     */
    public function getRefundingSourceType()
    {
        return $this->RefundingSourceType;
    }
    /**
     * Set RefundingSourceType value
     * @uses \EnumType\RefundingSourceTypeCodeType::valueIsValid()
     * @uses \EnumType\RefundingSourceTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $refundingSourceType
     * @return \StructType\RefundFundingSourceType
     */
    public function setRefundingSourceType($refundingSourceType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\RefundingSourceTypeCodeType::valueIsValid($refundingSourceType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\RefundingSourceTypeCodeType', is_array($refundingSourceType) ? implode(', ', $refundingSourceType) : var_export($refundingSourceType, true), implode(', ', \EnumType\RefundingSourceTypeCodeType::getValidValues())), __LINE__);
        }
        $this->RefundingSourceType = $refundingSourceType;
        return $this;
    }
    /**
     * Get AccountNumber value
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->AccountNumber;
    }
    /**
     * Set AccountNumber value
     * @param string $accountNumber
     * @return \StructType\RefundFundingSourceType
     */
    public function setAccountNumber($accountNumber = null)
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNumber, true), gettype($accountNumber)), __LINE__);
        }
        $this->AccountNumber = $accountNumber;
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
     * @return \StructType\RefundFundingSourceType
     */
    public function setRefundAmount(\StructType\AmountType $refundAmount = null)
    {
        $this->RefundAmount = $refundAmount;
        return $this;
    }
    /**
     * Get SellerExternalTransactionID value
     * @return string|null
     */
    public function getSellerExternalTransactionID()
    {
        return $this->SellerExternalTransactionID;
    }
    /**
     * Set SellerExternalTransactionID value
     * @param string $sellerExternalTransactionID
     * @return \StructType\RefundFundingSourceType
     */
    public function setSellerExternalTransactionID($sellerExternalTransactionID = null)
    {
        // validation for constraint: string
        if (!is_null($sellerExternalTransactionID) && !is_string($sellerExternalTransactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerExternalTransactionID, true), gettype($sellerExternalTransactionID)), __LINE__);
        }
        $this->SellerExternalTransactionID = $sellerExternalTransactionID;
        return $this;
    }
    /**
     * Get BuyerExternalTransactionID value
     * @return string|null
     */
    public function getBuyerExternalTransactionID()
    {
        return $this->BuyerExternalTransactionID;
    }
    /**
     * Set BuyerExternalTransactionID value
     * @param string $buyerExternalTransactionID
     * @return \StructType\RefundFundingSourceType
     */
    public function setBuyerExternalTransactionID($buyerExternalTransactionID = null)
    {
        // validation for constraint: string
        if (!is_null($buyerExternalTransactionID) && !is_string($buyerExternalTransactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buyerExternalTransactionID, true), gettype($buyerExternalTransactionID)), __LINE__);
        }
        $this->BuyerExternalTransactionID = $buyerExternalTransactionID;
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
     * @return \StructType\RefundFundingSourceType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
