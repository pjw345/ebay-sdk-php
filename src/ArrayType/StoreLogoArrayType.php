<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for StoreLogoArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Set of Store logos.
 * @subpackage Arrays
 */
class StoreLogoArrayType extends AbstractStructArrayBase
{
    /**
     * The Logo
     * Meta information extracted from the WSDL
     * - documentation: A Store logo.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\StoreLogoType[]
     */
    public $Logo;
    /**
     * Constructor method for StoreLogoArrayType
     * @uses StoreLogoArrayType::setLogo()
     * @param \StructType\StoreLogoType[] $logo
     */
    public function __construct(array $logo = array())
    {
        $this
            ->setLogo($logo);
    }
    /**
     * Get Logo value
     * @return \StructType\StoreLogoType[]|null
     */
    public function getLogo()
    {
        return $this->Logo;
    }
    /**
     * This method is responsible for validating the values passed to the setLogo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLogo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLogoForArrayConstraintsFromSetLogo(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $storeLogoArrayTypeLogoItem) {
            // validation for constraint: itemType
            if (!$storeLogoArrayTypeLogoItem instanceof \StructType\StoreLogoType) {
                $invalidValues[] = is_object($storeLogoArrayTypeLogoItem) ? get_class($storeLogoArrayTypeLogoItem) : sprintf('%s(%s)', gettype($storeLogoArrayTypeLogoItem), var_export($storeLogoArrayTypeLogoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Logo property can only contain items of type \StructType\StoreLogoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Logo value
     * @throws \InvalidArgumentException
     * @param \StructType\StoreLogoType[] $logo
     * @return \ArrayType\StoreLogoArrayType
     */
    public function setLogo(array $logo = array())
    {
        // validation for constraint: array
        if ('' !== ($logoArrayErrorMessage = self::validateLogoForArrayConstraintsFromSetLogo($logo))) {
            throw new \InvalidArgumentException($logoArrayErrorMessage, __LINE__);
        }
        $this->Logo = $logo;
        return $this;
    }
    /**
     * Add item to Logo value
     * @throws \InvalidArgumentException
     * @param \StructType\StoreLogoType $item
     * @return \ArrayType\StoreLogoArrayType
     */
    public function addToLogo(\StructType\StoreLogoType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\StoreLogoType) {
            throw new \InvalidArgumentException(sprintf('The Logo property can only contain items of type \StructType\StoreLogoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Logo[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\StoreLogoType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\StoreLogoType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\StoreLogoType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\StoreLogoType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\StoreLogoType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Logo
     */
    public function getAttributeName()
    {
        return 'Logo';
    }
}
