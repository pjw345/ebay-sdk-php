<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for LookupAttributeArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Arrays
 */
class LookupAttributeArrayType extends AbstractStructArrayBase
{
    /**
     * The LookupAttribute
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\LookupAttributeType[]
     */
    public $LookupAttribute;
    /**
     * Constructor method for LookupAttributeArrayType
     * @uses LookupAttributeArrayType::setLookupAttribute()
     * @param \StructType\LookupAttributeType[] $lookupAttribute
     */
    public function __construct(array $lookupAttribute = array())
    {
        $this
            ->setLookupAttribute($lookupAttribute);
    }
    /**
     * Get LookupAttribute value
     * @return \StructType\LookupAttributeType[]|null
     */
    public function getLookupAttribute()
    {
        return $this->LookupAttribute;
    }
    /**
     * This method is responsible for validating the values passed to the setLookupAttribute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLookupAttribute method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLookupAttributeForArrayConstraintsFromSetLookupAttribute(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $lookupAttributeArrayTypeLookupAttributeItem) {
            // validation for constraint: itemType
            if (!$lookupAttributeArrayTypeLookupAttributeItem instanceof \StructType\LookupAttributeType) {
                $invalidValues[] = is_object($lookupAttributeArrayTypeLookupAttributeItem) ? get_class($lookupAttributeArrayTypeLookupAttributeItem) : sprintf('%s(%s)', gettype($lookupAttributeArrayTypeLookupAttributeItem), var_export($lookupAttributeArrayTypeLookupAttributeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LookupAttribute property can only contain items of type \StructType\LookupAttributeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set LookupAttribute value
     * @throws \InvalidArgumentException
     * @param \StructType\LookupAttributeType[] $lookupAttribute
     * @return \ArrayType\LookupAttributeArrayType
     */
    public function setLookupAttribute(array $lookupAttribute = array())
    {
        // validation for constraint: array
        if ('' !== ($lookupAttributeArrayErrorMessage = self::validateLookupAttributeForArrayConstraintsFromSetLookupAttribute($lookupAttribute))) {
            throw new \InvalidArgumentException($lookupAttributeArrayErrorMessage, __LINE__);
        }
        $this->LookupAttribute = $lookupAttribute;
        return $this;
    }
    /**
     * Add item to LookupAttribute value
     * @throws \InvalidArgumentException
     * @param \StructType\LookupAttributeType $item
     * @return \ArrayType\LookupAttributeArrayType
     */
    public function addToLookupAttribute(\StructType\LookupAttributeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\LookupAttributeType) {
            throw new \InvalidArgumentException(sprintf('The LookupAttribute property can only contain items of type \StructType\LookupAttributeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->LookupAttribute[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\LookupAttributeType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\LookupAttributeType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\LookupAttributeType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\LookupAttributeType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\LookupAttributeType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LookupAttribute
     */
    public function getAttributeName()
    {
        return 'LookupAttribute';
    }
}
