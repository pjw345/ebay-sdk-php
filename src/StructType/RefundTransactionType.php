<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefundTransactionType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class RefundTransactionType extends AbstractStructBase
{
    /**
     * The OrderID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $OrderID;
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $TransactionID;
    /**
     * The RefundLineArray
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\RefundLineArrayType
     */
    public $RefundLineArray;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for RefundTransactionType
     * @uses RefundTransactionType::setOrderID()
     * @uses RefundTransactionType::setItemID()
     * @uses RefundTransactionType::setTransactionID()
     * @uses RefundTransactionType::setRefundLineArray()
     * @uses RefundTransactionType::setAny()
     * @param string $orderID
     * @param string $itemID
     * @param string $transactionID
     * @param \StructType\RefundLineArrayType $refundLineArray
     * @param \DOMDocument $any
     */
    public function __construct($orderID = null, $itemID = null, $transactionID = null, \StructType\RefundLineArrayType $refundLineArray = null, \DOMDocument $any = null)
    {
        $this
            ->setOrderID($orderID)
            ->setItemID($itemID)
            ->setTransactionID($transactionID)
            ->setRefundLineArray($refundLineArray)
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
     * @return \StructType\RefundTransactionType
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
     * @return \StructType\RefundTransactionType
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
     * @return \StructType\RefundTransactionType
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
     * Get RefundLineArray value
     * @return \StructType\RefundLineArrayType|null
     */
    public function getRefundLineArray()
    {
        return $this->RefundLineArray;
    }
    /**
     * Set RefundLineArray value
     * @param \StructType\RefundLineArrayType $refundLineArray
     * @return \StructType\RefundTransactionType
     */
    public function setRefundLineArray(\StructType\RefundLineArrayType $refundLineArray = null)
    {
        $this->RefundLineArray = $refundLineArray;
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
     * @return \StructType\RefundTransactionType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
