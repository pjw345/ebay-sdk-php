<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for AttributeArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: This type is only applicable for Half.com listings, and since the Half.com site was taken down, this type is no longer applicable.
 * @subpackage Arrays
 */
class AttributeArrayType extends AbstractStructArrayBase
{
    /**
     * The Attribute
     * Meta information extracted from the WSDL
     * - documentation: <b>AttributeArrayType</b> and the <b>Attribute</b> element are only applicable for Half.com listings, and since the Half.com site was taken down, this field is no longer applicable.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\AttributeType[]
     */
    public $Attribute;
    /**
     * Constructor method for AttributeArrayType
     * @uses AttributeArrayType::setAttribute()
     * @param \StructType\AttributeType[] $attribute
     */
    public function __construct(array $attribute = array())
    {
        $this
            ->setAttribute($attribute);
    }
    /**
     * Get Attribute value
     * @return \StructType\AttributeType[]|null
     */
    public function getAttribute()
    {
        return $this->Attribute;
    }
    /**
     * This method is responsible for validating the values passed to the setAttribute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAttribute method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAttributeForArrayConstraintsFromSetAttribute(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $attributeArrayTypeAttributeItem) {
            // validation for constraint: itemType
            if (!$attributeArrayTypeAttributeItem instanceof \StructType\AttributeType) {
                $invalidValues[] = is_object($attributeArrayTypeAttributeItem) ? get_class($attributeArrayTypeAttributeItem) : sprintf('%s(%s)', gettype($attributeArrayTypeAttributeItem), var_export($attributeArrayTypeAttributeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Attribute property can only contain items of type \StructType\AttributeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Attribute value
     * @throws \InvalidArgumentException
     * @param \StructType\AttributeType[] $attribute
     * @return \ArrayType\AttributeArrayType
     */
    public function setAttribute(array $attribute = array())
    {
        // validation for constraint: array
        if ('' !== ($attributeArrayErrorMessage = self::validateAttributeForArrayConstraintsFromSetAttribute($attribute))) {
            throw new \InvalidArgumentException($attributeArrayErrorMessage, __LINE__);
        }
        $this->Attribute = $attribute;
        return $this;
    }
    /**
     * Add item to Attribute value
     * @throws \InvalidArgumentException
     * @param \StructType\AttributeType $item
     * @return \ArrayType\AttributeArrayType
     */
    public function addToAttribute(\StructType\AttributeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AttributeType) {
            throw new \InvalidArgumentException(sprintf('The Attribute property can only contain items of type \StructType\AttributeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Attribute[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AttributeType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AttributeType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AttributeType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AttributeType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AttributeType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Attribute
     */
    public function getAttributeName()
    {
        return 'Attribute';
    }
}
