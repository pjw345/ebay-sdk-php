<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for OrderTransactionArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>OrderTransactionArray</b> container that is returned in the <b>GetMyeBaySelling</b> and <b>GetMyeBayBuying</b> calls. The <b>OrderTransactionArray</b> container consists a list of orders and each order line item
 * in that order.
 * @subpackage Arrays
 */
class OrderTransactionArrayType extends AbstractStructArrayBase
{
    /**
     * The OrderTransaction
     * Meta information extracted from the WSDL
     * - documentation: This container consists of detailed information on a specific order and each order line item in that order.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\OrderTransactionType[]
     */
    public $OrderTransaction;
    /**
     * Constructor method for OrderTransactionArrayType
     * @uses OrderTransactionArrayType::setOrderTransaction()
     * @param \StructType\OrderTransactionType[] $orderTransaction
     */
    public function __construct(array $orderTransaction = array())
    {
        $this
            ->setOrderTransaction($orderTransaction);
    }
    /**
     * Get OrderTransaction value
     * @return \StructType\OrderTransactionType[]|null
     */
    public function getOrderTransaction()
    {
        return $this->OrderTransaction;
    }
    /**
     * This method is responsible for validating the values passed to the setOrderTransaction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrderTransaction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrderTransactionForArrayConstraintsFromSetOrderTransaction(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $orderTransactionArrayTypeOrderTransactionItem) {
            // validation for constraint: itemType
            if (!$orderTransactionArrayTypeOrderTransactionItem instanceof \StructType\OrderTransactionType) {
                $invalidValues[] = is_object($orderTransactionArrayTypeOrderTransactionItem) ? get_class($orderTransactionArrayTypeOrderTransactionItem) : sprintf('%s(%s)', gettype($orderTransactionArrayTypeOrderTransactionItem), var_export($orderTransactionArrayTypeOrderTransactionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OrderTransaction property can only contain items of type \StructType\OrderTransactionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set OrderTransaction value
     * @throws \InvalidArgumentException
     * @param \StructType\OrderTransactionType[] $orderTransaction
     * @return \ArrayType\OrderTransactionArrayType
     */
    public function setOrderTransaction(array $orderTransaction = array())
    {
        // validation for constraint: array
        if ('' !== ($orderTransactionArrayErrorMessage = self::validateOrderTransactionForArrayConstraintsFromSetOrderTransaction($orderTransaction))) {
            throw new \InvalidArgumentException($orderTransactionArrayErrorMessage, __LINE__);
        }
        $this->OrderTransaction = $orderTransaction;
        return $this;
    }
    /**
     * Add item to OrderTransaction value
     * @throws \InvalidArgumentException
     * @param \StructType\OrderTransactionType $item
     * @return \ArrayType\OrderTransactionArrayType
     */
    public function addToOrderTransaction(\StructType\OrderTransactionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\OrderTransactionType) {
            throw new \InvalidArgumentException(sprintf('The OrderTransaction property can only contain items of type \StructType\OrderTransactionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->OrderTransaction[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\OrderTransactionType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\OrderTransactionType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\OrderTransactionType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\OrderTransactionType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\OrderTransactionType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string OrderTransaction
     */
    public function getAttributeName()
    {
        return 'OrderTransaction';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\OrderTransactionArrayType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
