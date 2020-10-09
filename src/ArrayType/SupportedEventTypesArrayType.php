<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for SupportedEventTypesArrayType ArrayType
 * @subpackage Arrays
 */
class SupportedEventTypesArrayType extends AbstractStructArrayBase
{
    /**
     * The EventType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $EventType;
    /**
     * Constructor method for SupportedEventTypesArrayType
     * @uses SupportedEventTypesArrayType::setEventType()
     * @param string[] $eventType
     */
    public function __construct(array $eventType = array())
    {
        $this
            ->setEventType($eventType);
    }
    /**
     * Get EventType value
     * @return string[]|null
     */
    public function getEventType()
    {
        return $this->EventType;
    }
    /**
     * This method is responsible for validating the values passed to the setEventType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEventType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEventTypeForArrayConstraintsFromSetEventType(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $supportedEventTypesArrayTypeEventTypeItem) {
            // validation for constraint: enumeration
            if (!\EnumType\NotificationEventTypeCodeType::valueIsValid($supportedEventTypesArrayTypeEventTypeItem)) {
                $invalidValues[] = is_object($supportedEventTypesArrayTypeEventTypeItem) ? get_class($supportedEventTypesArrayTypeEventTypeItem) : sprintf('%s(%s)', gettype($supportedEventTypesArrayTypeEventTypeItem), var_export($supportedEventTypesArrayTypeEventTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\NotificationEventTypeCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\NotificationEventTypeCodeType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set EventType value
     * @uses \EnumType\NotificationEventTypeCodeType::valueIsValid()
     * @uses \EnumType\NotificationEventTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $eventType
     * @return \ArrayType\SupportedEventTypesArrayType
     */
    public function setEventType(array $eventType = array())
    {
        // validation for constraint: array
        if ('' !== ($eventTypeArrayErrorMessage = self::validateEventTypeForArrayConstraintsFromSetEventType($eventType))) {
            throw new \InvalidArgumentException($eventTypeArrayErrorMessage, __LINE__);
        }
        $this->EventType = $eventType;
        return $this;
    }
    /**
     * Add item to EventType value
     * @uses \EnumType\NotificationEventTypeCodeType::valueIsValid()
     * @uses \EnumType\NotificationEventTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \ArrayType\SupportedEventTypesArrayType
     */
    public function addToEventType($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\NotificationEventTypeCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\NotificationEventTypeCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \EnumType\NotificationEventTypeCodeType::getValidValues())), __LINE__);
        }
        $this->EventType[] = $item;
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
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws \InvalidArgumentException
     * @uses \EnumType\NotificationEventTypeCodeType::valueIsValid()
     * @param string $item
     * @return \ArrayType\SupportedEventTypesArrayType
     */
    public function add($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\NotificationEventTypeCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\NotificationEventTypeCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \EnumType\NotificationEventTypeCodeType::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EventType
     */
    public function getAttributeName()
    {
        return 'EventType';
    }
}
