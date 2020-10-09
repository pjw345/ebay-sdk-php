<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for BidGroupArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Arrays
 */
class BidGroupArrayType extends AbstractStructArrayBase
{
    /**
     * The BidGroup
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\BidGroupType[]
     */
    public $BidGroup;
    /**
     * Constructor method for BidGroupArrayType
     * @uses BidGroupArrayType::setBidGroup()
     * @param \StructType\BidGroupType[] $bidGroup
     */
    public function __construct(array $bidGroup = array())
    {
        $this
            ->setBidGroup($bidGroup);
    }
    /**
     * Get BidGroup value
     * @return \StructType\BidGroupType[]|null
     */
    public function getBidGroup()
    {
        return $this->BidGroup;
    }
    /**
     * This method is responsible for validating the values passed to the setBidGroup method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBidGroup method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBidGroupForArrayConstraintsFromSetBidGroup(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $bidGroupArrayTypeBidGroupItem) {
            // validation for constraint: itemType
            if (!$bidGroupArrayTypeBidGroupItem instanceof \StructType\BidGroupType) {
                $invalidValues[] = is_object($bidGroupArrayTypeBidGroupItem) ? get_class($bidGroupArrayTypeBidGroupItem) : sprintf('%s(%s)', gettype($bidGroupArrayTypeBidGroupItem), var_export($bidGroupArrayTypeBidGroupItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BidGroup property can only contain items of type \StructType\BidGroupType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set BidGroup value
     * @throws \InvalidArgumentException
     * @param \StructType\BidGroupType[] $bidGroup
     * @return \ArrayType\BidGroupArrayType
     */
    public function setBidGroup(array $bidGroup = array())
    {
        // validation for constraint: array
        if ('' !== ($bidGroupArrayErrorMessage = self::validateBidGroupForArrayConstraintsFromSetBidGroup($bidGroup))) {
            throw new \InvalidArgumentException($bidGroupArrayErrorMessage, __LINE__);
        }
        $this->BidGroup = $bidGroup;
        return $this;
    }
    /**
     * Add item to BidGroup value
     * @throws \InvalidArgumentException
     * @param \StructType\BidGroupType $item
     * @return \ArrayType\BidGroupArrayType
     */
    public function addToBidGroup(\StructType\BidGroupType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\BidGroupType) {
            throw new \InvalidArgumentException(sprintf('The BidGroup property can only contain items of type \StructType\BidGroupType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BidGroup[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\BidGroupType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\BidGroupType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\BidGroupType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\BidGroupType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\BidGroupType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BidGroup
     */
    public function getAttributeName()
    {
        return 'BidGroup';
    }
}
