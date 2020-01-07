<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ExternalAlertIDArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Arrays
 */
class ExternalAlertIDArrayType extends AbstractStructArrayBase
{
    /**
     * The ExternalAlertID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ExternalAlertID;
    /**
     * Constructor method for ExternalAlertIDArrayType
     * @uses ExternalAlertIDArrayType::setExternalAlertID()
     * @param string[] $externalAlertID
     */
    public function __construct(array $externalAlertID = array())
    {
        $this
            ->setExternalAlertID($externalAlertID);
    }
    /**
     * Get ExternalAlertID value
     * @return string[]|null
     */
    public function getExternalAlertID()
    {
        return $this->ExternalAlertID;
    }
    /**
     * This method is responsible for validating the values passed to the setExternalAlertID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExternalAlertID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExternalAlertIDForArrayConstraintsFromSetExternalAlertID(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $externalAlertIDArrayTypeExternalAlertIDItem) {
            // validation for constraint: itemType
            if (!is_string($externalAlertIDArrayTypeExternalAlertIDItem)) {
                $invalidValues[] = is_object($externalAlertIDArrayTypeExternalAlertIDItem) ? get_class($externalAlertIDArrayTypeExternalAlertIDItem) : sprintf('%s(%s)', gettype($externalAlertIDArrayTypeExternalAlertIDItem), var_export($externalAlertIDArrayTypeExternalAlertIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExternalAlertID property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ExternalAlertID value
     * @throws \InvalidArgumentException
     * @param string[] $externalAlertID
     * @return \ArrayType\ExternalAlertIDArrayType
     */
    public function setExternalAlertID(array $externalAlertID = array())
    {
        // validation for constraint: array
        if ('' !== ($externalAlertIDArrayErrorMessage = self::validateExternalAlertIDForArrayConstraintsFromSetExternalAlertID($externalAlertID))) {
            throw new \InvalidArgumentException($externalAlertIDArrayErrorMessage, __LINE__);
        }
        $this->ExternalAlertID = $externalAlertID;
        return $this;
    }
    /**
     * Add item to ExternalAlertID value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \ArrayType\ExternalAlertIDArrayType
     */
    public function addToExternalAlertID($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ExternalAlertID property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ExternalAlertID[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ExternalAlertID
     */
    public function getAttributeName()
    {
        return 'ExternalAlertID';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ExternalAlertIDArrayType
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
