<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for OrderArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>OrderArray</b> container that is returned in order management calls. The <b>OrderArray</b> container consists of one or more eBay orders that match the input criteria.
 * @subpackage Arrays
 */
class OrderArrayType extends AbstractStructArrayBase
{
    /**
     * The Order
     * Meta information extracted from the WSDL
     * - documentation: Details of an eBay order. One eBay order can have one or more order line items (<b>Transaction</b> objects).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\OrderType[]
     */
    public $Order;
    /**
     * Constructor method for OrderArrayType
     * @uses OrderArrayType::setOrder()
     * @param \StructType\OrderType[] $order
     */
    public function __construct(array $order = array())
    {
        $this
            ->setOrder($order);
    }
    /**
     * Get Order value
     * @return \StructType\OrderType[]|null
     */
    public function getOrder()
    {
        return $this->Order;
    }
    /**
     * This method is responsible for validating the values passed to the setOrder method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrder method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrderForArrayConstraintsFromSetOrder(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $orderArrayTypeOrderItem) {
            // validation for constraint: itemType
            if (!$orderArrayTypeOrderItem instanceof \StructType\OrderType) {
                $invalidValues[] = is_object($orderArrayTypeOrderItem) ? get_class($orderArrayTypeOrderItem) : sprintf('%s(%s)', gettype($orderArrayTypeOrderItem), var_export($orderArrayTypeOrderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Order property can only contain items of type \StructType\OrderType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Order value
     * @throws \InvalidArgumentException
     * @param \StructType\OrderType[] $order
     * @return \ArrayType\OrderArrayType
     */
    public function setOrder(array $order = array())
    {
        // validation for constraint: array
        if ('' !== ($orderArrayErrorMessage = self::validateOrderForArrayConstraintsFromSetOrder($order))) {
            throw new \InvalidArgumentException($orderArrayErrorMessage, __LINE__);
        }
        $this->Order = $order;
        return $this;
    }
    /**
     * Add item to Order value
     * @throws \InvalidArgumentException
     * @param \StructType\OrderType $item
     * @return \ArrayType\OrderArrayType
     */
    public function addToOrder(\StructType\OrderType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\OrderType) {
            throw new \InvalidArgumentException(sprintf('The Order property can only contain items of type \StructType\OrderType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Order[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\OrderType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\OrderType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\OrderType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\OrderType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\OrderType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Order
     */
    public function getAttributeName()
    {
        return 'Order';
    }
}
