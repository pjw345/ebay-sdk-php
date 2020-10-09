<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for RefundArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> This type was only used for Half.com order refunds, and since the Half.com site has been shut down, this type is no longer applicable. </span> Type used by the <strong>RefundArray</strong>
 * container, which consists of an array of Half.com refunds.
 * @subpackage Arrays
 */
class RefundArrayType extends AbstractStructArrayBase
{
    /**
     * The Refund
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundArrayType</b> and the <b>Refund</b> field are no longer applicable since the Half.com site has been shut down. </span> This container consists of information about a Half.com refund. It
     * is only returned if a Half.com order is going through (or has completed) the refund process.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\RefundType[]
     */
    public $Refund;
    /**
     * Constructor method for RefundArrayType
     * @uses RefundArrayType::setRefund()
     * @param \StructType\RefundType[] $refund
     */
    public function __construct(array $refund = array())
    {
        $this
            ->setRefund($refund);
    }
    /**
     * Get Refund value
     * @return \StructType\RefundType[]|null
     */
    public function getRefund()
    {
        return $this->Refund;
    }
    /**
     * This method is responsible for validating the values passed to the setRefund method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRefund method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRefundForArrayConstraintsFromSetRefund(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $refundArrayTypeRefundItem) {
            // validation for constraint: itemType
            if (!$refundArrayTypeRefundItem instanceof \StructType\RefundType) {
                $invalidValues[] = is_object($refundArrayTypeRefundItem) ? get_class($refundArrayTypeRefundItem) : sprintf('%s(%s)', gettype($refundArrayTypeRefundItem), var_export($refundArrayTypeRefundItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Refund property can only contain items of type \StructType\RefundType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Refund value
     * @throws \InvalidArgumentException
     * @param \StructType\RefundType[] $refund
     * @return \ArrayType\RefundArrayType
     */
    public function setRefund(array $refund = array())
    {
        // validation for constraint: array
        if ('' !== ($refundArrayErrorMessage = self::validateRefundForArrayConstraintsFromSetRefund($refund))) {
            throw new \InvalidArgumentException($refundArrayErrorMessage, __LINE__);
        }
        $this->Refund = $refund;
        return $this;
    }
    /**
     * Add item to Refund value
     * @throws \InvalidArgumentException
     * @param \StructType\RefundType $item
     * @return \ArrayType\RefundArrayType
     */
    public function addToRefund(\StructType\RefundType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\RefundType) {
            throw new \InvalidArgumentException(sprintf('The Refund property can only contain items of type \StructType\RefundType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Refund[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\RefundType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\RefundType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\RefundType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\RefundType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\RefundType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Refund
     */
    public function getAttributeName()
    {
        return 'Refund';
    }
}
