<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for StoreColorSchemeArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Set of eBay Store color schemes.
 * @subpackage Arrays
 */
class StoreColorSchemeArrayType extends AbstractStructArrayBase
{
    /**
     * The ColorScheme
     * Meta information extracted from the WSDL
     * - documentation: A Store color scheme.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\StoreColorSchemeType[]
     */
    public $ColorScheme;
    /**
     * Constructor method for StoreColorSchemeArrayType
     * @uses StoreColorSchemeArrayType::setColorScheme()
     * @param \StructType\StoreColorSchemeType[] $colorScheme
     */
    public function __construct(array $colorScheme = array())
    {
        $this
            ->setColorScheme($colorScheme);
    }
    /**
     * Get ColorScheme value
     * @return \StructType\StoreColorSchemeType[]|null
     */
    public function getColorScheme()
    {
        return $this->ColorScheme;
    }
    /**
     * This method is responsible for validating the values passed to the setColorScheme method
     * This method is willingly generated in order to preserve the one-line inline validation within the setColorScheme method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateColorSchemeForArrayConstraintsFromSetColorScheme(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $storeColorSchemeArrayTypeColorSchemeItem) {
            // validation for constraint: itemType
            if (!$storeColorSchemeArrayTypeColorSchemeItem instanceof \StructType\StoreColorSchemeType) {
                $invalidValues[] = is_object($storeColorSchemeArrayTypeColorSchemeItem) ? get_class($storeColorSchemeArrayTypeColorSchemeItem) : sprintf('%s(%s)', gettype($storeColorSchemeArrayTypeColorSchemeItem), var_export($storeColorSchemeArrayTypeColorSchemeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ColorScheme property can only contain items of type \StructType\StoreColorSchemeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ColorScheme value
     * @throws \InvalidArgumentException
     * @param \StructType\StoreColorSchemeType[] $colorScheme
     * @return \ArrayType\StoreColorSchemeArrayType
     */
    public function setColorScheme(array $colorScheme = array())
    {
        // validation for constraint: array
        if ('' !== ($colorSchemeArrayErrorMessage = self::validateColorSchemeForArrayConstraintsFromSetColorScheme($colorScheme))) {
            throw new \InvalidArgumentException($colorSchemeArrayErrorMessage, __LINE__);
        }
        $this->ColorScheme = $colorScheme;
        return $this;
    }
    /**
     * Add item to ColorScheme value
     * @throws \InvalidArgumentException
     * @param \StructType\StoreColorSchemeType $item
     * @return \ArrayType\StoreColorSchemeArrayType
     */
    public function addToColorScheme(\StructType\StoreColorSchemeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\StoreColorSchemeType) {
            throw new \InvalidArgumentException(sprintf('The ColorScheme property can only contain items of type \StructType\StoreColorSchemeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ColorScheme[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\StoreColorSchemeType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\StoreColorSchemeType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\StoreColorSchemeType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\StoreColorSchemeType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\StoreColorSchemeType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ColorScheme
     */
    public function getAttributeName()
    {
        return 'ColorScheme';
    }
}
