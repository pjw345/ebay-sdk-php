<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for StoreCustomPageArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Set of Store custom pages.
 * @subpackage Arrays
 */
class StoreCustomPageArrayType extends AbstractStructArrayBase
{
    /**
     * The CustomPage
     * Meta information extracted from the WSDL
     * - documentation: A Store custom page.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\StoreCustomPageType[]
     */
    public $CustomPage;
    /**
     * Constructor method for StoreCustomPageArrayType
     * @uses StoreCustomPageArrayType::setCustomPage()
     * @param \StructType\StoreCustomPageType[] $customPage
     */
    public function __construct(array $customPage = array())
    {
        $this
            ->setCustomPage($customPage);
    }
    /**
     * Get CustomPage value
     * @return \StructType\StoreCustomPageType[]|null
     */
    public function getCustomPage()
    {
        return $this->CustomPage;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomPage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomPage method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomPageForArrayConstraintsFromSetCustomPage(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $storeCustomPageArrayTypeCustomPageItem) {
            // validation for constraint: itemType
            if (!$storeCustomPageArrayTypeCustomPageItem instanceof \StructType\StoreCustomPageType) {
                $invalidValues[] = is_object($storeCustomPageArrayTypeCustomPageItem) ? get_class($storeCustomPageArrayTypeCustomPageItem) : sprintf('%s(%s)', gettype($storeCustomPageArrayTypeCustomPageItem), var_export($storeCustomPageArrayTypeCustomPageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CustomPage property can only contain items of type \StructType\StoreCustomPageType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set CustomPage value
     * @throws \InvalidArgumentException
     * @param \StructType\StoreCustomPageType[] $customPage
     * @return \ArrayType\StoreCustomPageArrayType
     */
    public function setCustomPage(array $customPage = array())
    {
        // validation for constraint: array
        if ('' !== ($customPageArrayErrorMessage = self::validateCustomPageForArrayConstraintsFromSetCustomPage($customPage))) {
            throw new \InvalidArgumentException($customPageArrayErrorMessage, __LINE__);
        }
        $this->CustomPage = $customPage;
        return $this;
    }
    /**
     * Add item to CustomPage value
     * @throws \InvalidArgumentException
     * @param \StructType\StoreCustomPageType $item
     * @return \ArrayType\StoreCustomPageArrayType
     */
    public function addToCustomPage(\StructType\StoreCustomPageType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\StoreCustomPageType) {
            throw new \InvalidArgumentException(sprintf('The CustomPage property can only contain items of type \StructType\StoreCustomPageType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CustomPage[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\StoreCustomPageType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\StoreCustomPageType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\StoreCustomPageType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\StoreCustomPageType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\StoreCustomPageType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CustomPage
     */
    public function getAttributeName()
    {
        return 'CustomPage';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\StoreCustomPageArrayType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
