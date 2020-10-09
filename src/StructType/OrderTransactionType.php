<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderTransactionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains an order or a transaction. A transaction is the sale of one or more items from a seller's listing to a buyer. An order combines two or more transactions into a single payment.
 * @subpackage Structs
 */
class OrderTransactionType extends AbstractStructBase
{
    /**
     * The Order
     * Meta information extracted from the WSDL
     * - documentation: Contains the information describing an order.
     * - minOccurs: 0
     * @var \StructType\OrderType
     */
    public $Order;
    /**
     * The Transaction
     * Meta information extracted from the WSDL
     * - documentation: Contains the information describing a transaction.
     * - minOccurs: 0
     * @var \StructType\TransactionType
     */
    public $Transaction;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for OrderTransactionType
     * @uses OrderTransactionType::setOrder()
     * @uses OrderTransactionType::setTransaction()
     * @uses OrderTransactionType::setAny()
     * @param \StructType\OrderType $order
     * @param \StructType\TransactionType $transaction
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\OrderType $order = null, \StructType\TransactionType $transaction = null, \DOMDocument $any = null)
    {
        $this
            ->setOrder($order)
            ->setTransaction($transaction)
            ->setAny($any);
    }
    /**
     * Get Order value
     * @return \StructType\OrderType|null
     */
    public function getOrder()
    {
        return $this->Order;
    }
    /**
     * Set Order value
     * @param \StructType\OrderType $order
     * @return \StructType\OrderTransactionType
     */
    public function setOrder(\StructType\OrderType $order = null)
    {
        $this->Order = $order;
        return $this;
    }
    /**
     * Get Transaction value
     * @return \StructType\TransactionType|null
     */
    public function getTransaction()
    {
        return $this->Transaction;
    }
    /**
     * Set Transaction value
     * @param \StructType\TransactionType $transaction
     * @return \StructType\OrderTransactionType
     */
    public function setTransaction(\StructType\TransactionType $transaction = null)
    {
        $this->Transaction = $transaction;
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
     * @return \StructType\OrderTransactionType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
