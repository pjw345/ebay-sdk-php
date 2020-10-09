<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for BidderDetailArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Arrays
 */
class BidderDetailArrayType extends AbstractStructArrayBase
{
    /**
     * The BidderDetail
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\BidderDetailType[]
     */
    public $BidderDetail;
    /**
     * Constructor method for BidderDetailArrayType
     * @uses BidderDetailArrayType::setBidderDetail()
     * @param \StructType\BidderDetailType[] $bidderDetail
     */
    public function __construct(array $bidderDetail = array())
    {
        $this
            ->setBidderDetail($bidderDetail);
    }
    /**
     * Get BidderDetail value
     * @return \StructType\BidderDetailType[]|null
     */
    public function getBidderDetail()
    {
        return $this->BidderDetail;
    }
    /**
     * This method is responsible for validating the values passed to the setBidderDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBidderDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBidderDetailForArrayConstraintsFromSetBidderDetail(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $bidderDetailArrayTypeBidderDetailItem) {
            // validation for constraint: itemType
            if (!$bidderDetailArrayTypeBidderDetailItem instanceof \StructType\BidderDetailType) {
                $invalidValues[] = is_object($bidderDetailArrayTypeBidderDetailItem) ? get_class($bidderDetailArrayTypeBidderDetailItem) : sprintf('%s(%s)', gettype($bidderDetailArrayTypeBidderDetailItem), var_export($bidderDetailArrayTypeBidderDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BidderDetail property can only contain items of type \StructType\BidderDetailType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set BidderDetail value
     * @throws \InvalidArgumentException
     * @param \StructType\BidderDetailType[] $bidderDetail
     * @return \ArrayType\BidderDetailArrayType
     */
    public function setBidderDetail(array $bidderDetail = array())
    {
        // validation for constraint: array
        if ('' !== ($bidderDetailArrayErrorMessage = self::validateBidderDetailForArrayConstraintsFromSetBidderDetail($bidderDetail))) {
            throw new \InvalidArgumentException($bidderDetailArrayErrorMessage, __LINE__);
        }
        $this->BidderDetail = $bidderDetail;
        return $this;
    }
    /**
     * Add item to BidderDetail value
     * @throws \InvalidArgumentException
     * @param \StructType\BidderDetailType $item
     * @return \ArrayType\BidderDetailArrayType
     */
    public function addToBidderDetail(\StructType\BidderDetailType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\BidderDetailType) {
            throw new \InvalidArgumentException(sprintf('The BidderDetail property can only contain items of type \StructType\BidderDetailType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BidderDetail[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\BidderDetailType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\BidderDetailType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\BidderDetailType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\BidderDetailType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\BidderDetailType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BidderDetail
     */
    public function getAttributeName()
    {
        return 'BidderDetail';
    }
}
