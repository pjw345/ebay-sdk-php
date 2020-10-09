<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for MyMessagesAlertIDArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Arrays
 */
class MyMessagesAlertIDArrayType extends AbstractStructArrayBase
{
    /**
     * The AlertID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated. | This type is deprecated.
     * - base: xs:string
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $AlertID;
    /**
     * Constructor method for MyMessagesAlertIDArrayType
     * @uses MyMessagesAlertIDArrayType::setAlertID()
     * @param string[] $alertID
     */
    public function __construct(array $alertID = array())
    {
        $this
            ->setAlertID($alertID);
    }
    /**
     * Get AlertID value
     * @return string[]|null
     */
    public function getAlertID()
    {
        return $this->AlertID;
    }
    /**
     * This method is responsible for validating the values passed to the setAlertID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAlertID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAlertIDForArrayConstraintsFromSetAlertID(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $myMessagesAlertIDArrayTypeAlertIDItem) {
            // validation for constraint: itemType
            if (!is_string($myMessagesAlertIDArrayTypeAlertIDItem)) {
                $invalidValues[] = is_object($myMessagesAlertIDArrayTypeAlertIDItem) ? get_class($myMessagesAlertIDArrayTypeAlertIDItem) : sprintf('%s(%s)', gettype($myMessagesAlertIDArrayTypeAlertIDItem), var_export($myMessagesAlertIDArrayTypeAlertIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AlertID property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set AlertID value
     * @throws \InvalidArgumentException
     * @param string[] $alertID
     * @return \ArrayType\MyMessagesAlertIDArrayType
     */
    public function setAlertID(array $alertID = array())
    {
        // validation for constraint: array
        if ('' !== ($alertIDArrayErrorMessage = self::validateAlertIDForArrayConstraintsFromSetAlertID($alertID))) {
            throw new \InvalidArgumentException($alertIDArrayErrorMessage, __LINE__);
        }
        $this->AlertID = $alertID;
        return $this;
    }
    /**
     * Add item to AlertID value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \ArrayType\MyMessagesAlertIDArrayType
     */
    public function addToAlertID($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The AlertID property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AlertID[] = $item;
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
     * @return string AlertID
     */
    public function getAttributeName()
    {
        return 'AlertID';
    }
}
