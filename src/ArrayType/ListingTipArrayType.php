<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ListingTipArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Arrays
 */
class ListingTipArrayType extends AbstractStructArrayBase
{
    /**
     * The ListingTip
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ListingTipType[]
     */
    public $ListingTip;
    /**
     * Constructor method for ListingTipArrayType
     * @uses ListingTipArrayType::setListingTip()
     * @param \StructType\ListingTipType[] $listingTip
     */
    public function __construct(array $listingTip = array())
    {
        $this
            ->setListingTip($listingTip);
    }
    /**
     * Get ListingTip value
     * @return \StructType\ListingTipType[]|null
     */
    public function getListingTip()
    {
        return $this->ListingTip;
    }
    /**
     * This method is responsible for validating the values passed to the setListingTip method
     * This method is willingly generated in order to preserve the one-line inline validation within the setListingTip method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateListingTipForArrayConstraintsFromSetListingTip(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $listingTipArrayTypeListingTipItem) {
            // validation for constraint: itemType
            if (!$listingTipArrayTypeListingTipItem instanceof \StructType\ListingTipType) {
                $invalidValues[] = is_object($listingTipArrayTypeListingTipItem) ? get_class($listingTipArrayTypeListingTipItem) : sprintf('%s(%s)', gettype($listingTipArrayTypeListingTipItem), var_export($listingTipArrayTypeListingTipItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ListingTip property can only contain items of type \StructType\ListingTipType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ListingTip value
     * @throws \InvalidArgumentException
     * @param \StructType\ListingTipType[] $listingTip
     * @return \ArrayType\ListingTipArrayType
     */
    public function setListingTip(array $listingTip = array())
    {
        // validation for constraint: array
        if ('' !== ($listingTipArrayErrorMessage = self::validateListingTipForArrayConstraintsFromSetListingTip($listingTip))) {
            throw new \InvalidArgumentException($listingTipArrayErrorMessage, __LINE__);
        }
        $this->ListingTip = $listingTip;
        return $this;
    }
    /**
     * Add item to ListingTip value
     * @throws \InvalidArgumentException
     * @param \StructType\ListingTipType $item
     * @return \ArrayType\ListingTipArrayType
     */
    public function addToListingTip(\StructType\ListingTipType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ListingTipType) {
            throw new \InvalidArgumentException(sprintf('The ListingTip property can only contain items of type \StructType\ListingTipType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ListingTip[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ListingTipType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ListingTipType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ListingTipType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ListingTipType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ListingTipType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ListingTip
     */
    public function getAttributeName()
    {
        return 'ListingTip';
    }
}
