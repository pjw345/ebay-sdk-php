<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for StoreCustomCategoryArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Set of custom categories for the Store.
 * @subpackage Arrays
 */
class StoreCustomCategoryArrayType extends AbstractStructArrayBase
{
    /**
     * The CustomCategory
     * Meta information extracted from the WSDL
     * - documentation: A custom category for your eBay Store.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\StoreCustomCategoryType[]
     */
    public $CustomCategory;
    /**
     * Constructor method for StoreCustomCategoryArrayType
     * @uses StoreCustomCategoryArrayType::setCustomCategory()
     * @param \StructType\StoreCustomCategoryType[] $customCategory
     */
    public function __construct(array $customCategory = array())
    {
        $this
            ->setCustomCategory($customCategory);
    }
    /**
     * Get CustomCategory value
     * @return \StructType\StoreCustomCategoryType[]|null
     */
    public function getCustomCategory()
    {
        return $this->CustomCategory;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomCategory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomCategory method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomCategoryForArrayConstraintsFromSetCustomCategory(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $storeCustomCategoryArrayTypeCustomCategoryItem) {
            // validation for constraint: itemType
            if (!$storeCustomCategoryArrayTypeCustomCategoryItem instanceof \StructType\StoreCustomCategoryType) {
                $invalidValues[] = is_object($storeCustomCategoryArrayTypeCustomCategoryItem) ? get_class($storeCustomCategoryArrayTypeCustomCategoryItem) : sprintf('%s(%s)', gettype($storeCustomCategoryArrayTypeCustomCategoryItem), var_export($storeCustomCategoryArrayTypeCustomCategoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CustomCategory property can only contain items of type \StructType\StoreCustomCategoryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set CustomCategory value
     * @throws \InvalidArgumentException
     * @param \StructType\StoreCustomCategoryType[] $customCategory
     * @return \ArrayType\StoreCustomCategoryArrayType
     */
    public function setCustomCategory(array $customCategory = array())
    {
        // validation for constraint: array
        if ('' !== ($customCategoryArrayErrorMessage = self::validateCustomCategoryForArrayConstraintsFromSetCustomCategory($customCategory))) {
            throw new \InvalidArgumentException($customCategoryArrayErrorMessage, __LINE__);
        }
        $this->CustomCategory = $customCategory;
        return $this;
    }
    /**
     * Add item to CustomCategory value
     * @throws \InvalidArgumentException
     * @param \StructType\StoreCustomCategoryType $item
     * @return \ArrayType\StoreCustomCategoryArrayType
     */
    public function addToCustomCategory(\StructType\StoreCustomCategoryType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\StoreCustomCategoryType) {
            throw new \InvalidArgumentException(sprintf('The CustomCategory property can only contain items of type \StructType\StoreCustomCategoryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CustomCategory[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\StoreCustomCategoryType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\StoreCustomCategoryType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\StoreCustomCategoryType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\StoreCustomCategoryType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\StoreCustomCategoryType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CustomCategory
     */
    public function getAttributeName()
    {
        return 'CustomCategory';
    }
}
