<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for AttributeSetArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Arrays
 */
class AttributeSetArrayType extends AbstractStructArrayBase
{
    /**
     * The AttributeSet
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\AttributeSetType[]
     */
    public $AttributeSet;
    /**
     * Constructor method for AttributeSetArrayType
     * @uses AttributeSetArrayType::setAttributeSet()
     * @param \StructType\AttributeSetType[] $attributeSet
     */
    public function __construct(array $attributeSet = array())
    {
        $this
            ->setAttributeSet($attributeSet);
    }
    /**
     * Get AttributeSet value
     * @return \StructType\AttributeSetType[]|null
     */
    public function getAttributeSet()
    {
        return $this->AttributeSet;
    }
    /**
     * This method is responsible for validating the values passed to the setAttributeSet method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAttributeSet method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAttributeSetForArrayConstraintsFromSetAttributeSet(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $attributeSetArrayTypeAttributeSetItem) {
            // validation for constraint: itemType
            if (!$attributeSetArrayTypeAttributeSetItem instanceof \StructType\AttributeSetType) {
                $invalidValues[] = is_object($attributeSetArrayTypeAttributeSetItem) ? get_class($attributeSetArrayTypeAttributeSetItem) : sprintf('%s(%s)', gettype($attributeSetArrayTypeAttributeSetItem), var_export($attributeSetArrayTypeAttributeSetItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AttributeSet property can only contain items of type \StructType\AttributeSetType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set AttributeSet value
     * @throws \InvalidArgumentException
     * @param \StructType\AttributeSetType[] $attributeSet
     * @return \ArrayType\AttributeSetArrayType
     */
    public function setAttributeSet(array $attributeSet = array())
    {
        // validation for constraint: array
        if ('' !== ($attributeSetArrayErrorMessage = self::validateAttributeSetForArrayConstraintsFromSetAttributeSet($attributeSet))) {
            throw new \InvalidArgumentException($attributeSetArrayErrorMessage, __LINE__);
        }
        $this->AttributeSet = $attributeSet;
        return $this;
    }
    /**
     * Add item to AttributeSet value
     * @throws \InvalidArgumentException
     * @param \StructType\AttributeSetType $item
     * @return \ArrayType\AttributeSetArrayType
     */
    public function addToAttributeSet(\StructType\AttributeSetType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AttributeSetType) {
            throw new \InvalidArgumentException(sprintf('The AttributeSet property can only contain items of type \StructType\AttributeSetType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AttributeSet[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AttributeSetType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AttributeSetType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AttributeSetType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AttributeSetType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AttributeSetType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AttributeSet
     */
    public function getAttributeName()
    {
        return 'AttributeSet';
    }
}
