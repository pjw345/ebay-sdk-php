<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for MyMessagesAlertArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Arrays
 */
class MyMessagesAlertArrayType extends AbstractStructArrayBase
{
    /**
     * The Alert
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\MyMessagesAlertType[]
     */
    public $Alert;
    /**
     * Constructor method for MyMessagesAlertArrayType
     * @uses MyMessagesAlertArrayType::setAlert()
     * @param \StructType\MyMessagesAlertType[] $alert
     */
    public function __construct(array $alert = array())
    {
        $this
            ->setAlert($alert);
    }
    /**
     * Get Alert value
     * @return \StructType\MyMessagesAlertType[]|null
     */
    public function getAlert()
    {
        return $this->Alert;
    }
    /**
     * This method is responsible for validating the values passed to the setAlert method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAlert method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAlertForArrayConstraintsFromSetAlert(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $myMessagesAlertArrayTypeAlertItem) {
            // validation for constraint: itemType
            if (!$myMessagesAlertArrayTypeAlertItem instanceof \StructType\MyMessagesAlertType) {
                $invalidValues[] = is_object($myMessagesAlertArrayTypeAlertItem) ? get_class($myMessagesAlertArrayTypeAlertItem) : sprintf('%s(%s)', gettype($myMessagesAlertArrayTypeAlertItem), var_export($myMessagesAlertArrayTypeAlertItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Alert property can only contain items of type \StructType\MyMessagesAlertType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Alert value
     * @throws \InvalidArgumentException
     * @param \StructType\MyMessagesAlertType[] $alert
     * @return \ArrayType\MyMessagesAlertArrayType
     */
    public function setAlert(array $alert = array())
    {
        // validation for constraint: array
        if ('' !== ($alertArrayErrorMessage = self::validateAlertForArrayConstraintsFromSetAlert($alert))) {
            throw new \InvalidArgumentException($alertArrayErrorMessage, __LINE__);
        }
        $this->Alert = $alert;
        return $this;
    }
    /**
     * Add item to Alert value
     * @throws \InvalidArgumentException
     * @param \StructType\MyMessagesAlertType $item
     * @return \ArrayType\MyMessagesAlertArrayType
     */
    public function addToAlert(\StructType\MyMessagesAlertType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\MyMessagesAlertType) {
            throw new \InvalidArgumentException(sprintf('The Alert property can only contain items of type \StructType\MyMessagesAlertType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Alert[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\MyMessagesAlertType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\MyMessagesAlertType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\MyMessagesAlertType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\MyMessagesAlertType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\MyMessagesAlertType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Alert
     */
    public function getAttributeName()
    {
        return 'Alert';
    }
}
