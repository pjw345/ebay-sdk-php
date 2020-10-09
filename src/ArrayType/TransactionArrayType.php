<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for TransactionArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>TransactionArray</b> container, which contains an array of <b>Transaction</b> containers. Each <b>Transaction</b> container consists of detailed information on one order line item.
 * @subpackage Arrays
 */
class TransactionArrayType extends AbstractStructArrayBase
{
    /**
     * The Transaction
     * Meta information extracted from the WSDL
     * - documentation: A <b>Transaction</b> container is returned for each line item in the order. This container consists of detailed information on one order line item. <br/><br/> For the <b>AddOrder</b> call, a <b>Transaction</b> container is used to
     * identified the unpaid order line items that are being combined into one Combined Invoice order.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\TransactionType[]
     */
    public $Transaction;
    /**
     * Constructor method for TransactionArrayType
     * @uses TransactionArrayType::setTransaction()
     * @param \StructType\TransactionType[] $transaction
     */
    public function __construct(array $transaction = array())
    {
        $this
            ->setTransaction($transaction);
    }
    /**
     * Get Transaction value
     * @return \StructType\TransactionType[]|null
     */
    public function getTransaction()
    {
        return $this->Transaction;
    }
    /**
     * This method is responsible for validating the values passed to the setTransaction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTransaction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTransactionForArrayConstraintsFromSetTransaction(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $transactionArrayTypeTransactionItem) {
            // validation for constraint: itemType
            if (!$transactionArrayTypeTransactionItem instanceof \StructType\TransactionType) {
                $invalidValues[] = is_object($transactionArrayTypeTransactionItem) ? get_class($transactionArrayTypeTransactionItem) : sprintf('%s(%s)', gettype($transactionArrayTypeTransactionItem), var_export($transactionArrayTypeTransactionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Transaction property can only contain items of type \StructType\TransactionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Transaction value
     * @throws \InvalidArgumentException
     * @param \StructType\TransactionType[] $transaction
     * @return \ArrayType\TransactionArrayType
     */
    public function setTransaction(array $transaction = array())
    {
        // validation for constraint: array
        if ('' !== ($transactionArrayErrorMessage = self::validateTransactionForArrayConstraintsFromSetTransaction($transaction))) {
            throw new \InvalidArgumentException($transactionArrayErrorMessage, __LINE__);
        }
        $this->Transaction = $transaction;
        return $this;
    }
    /**
     * Add item to Transaction value
     * @throws \InvalidArgumentException
     * @param \StructType\TransactionType $item
     * @return \ArrayType\TransactionArrayType
     */
    public function addToTransaction(\StructType\TransactionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\TransactionType) {
            throw new \InvalidArgumentException(sprintf('The Transaction property can only contain items of type \StructType\TransactionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Transaction[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\TransactionType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\TransactionType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\TransactionType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\TransactionType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\TransactionType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Transaction
     */
    public function getAttributeName()
    {
        return 'Transaction';
    }
}
