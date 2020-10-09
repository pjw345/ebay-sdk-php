<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarkUpMarkDownHistoryType StructType
 * Meta information extracted from the WSDL
 * - documentation: List of objects representing markup or markdown events for a given application and time period. If no time period is specified in the request, the information for only one day (24 hours before the time the call is made to the time
 * the call is made) is included. The maximum time period is allowed is 3 days (72 hours before the call is made to the time the call is made).
 * @subpackage Structs
 */
class MarkUpMarkDownHistoryType extends AbstractStructBase
{
    /**
     * The MarkUpMarkDownEvent
     * Meta information extracted from the WSDL
     * - documentation: Details for a MarkDown or MarkUp event.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\MarkUpMarkDownEventType[]
     */
    public $MarkUpMarkDownEvent;
    /**
     * Constructor method for MarkUpMarkDownHistoryType
     * @uses MarkUpMarkDownHistoryType::setMarkUpMarkDownEvent()
     * @param \StructType\MarkUpMarkDownEventType[] $markUpMarkDownEvent
     */
    public function __construct(array $markUpMarkDownEvent = array())
    {
        $this
            ->setMarkUpMarkDownEvent($markUpMarkDownEvent);
    }
    /**
     * Get MarkUpMarkDownEvent value
     * @return \StructType\MarkUpMarkDownEventType[]|null
     */
    public function getMarkUpMarkDownEvent()
    {
        return $this->MarkUpMarkDownEvent;
    }
    /**
     * This method is responsible for validating the values passed to the setMarkUpMarkDownEvent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMarkUpMarkDownEvent method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMarkUpMarkDownEventForArrayConstraintsFromSetMarkUpMarkDownEvent(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $markUpMarkDownHistoryTypeMarkUpMarkDownEventItem) {
            // validation for constraint: itemType
            if (!$markUpMarkDownHistoryTypeMarkUpMarkDownEventItem instanceof \StructType\MarkUpMarkDownEventType) {
                $invalidValues[] = is_object($markUpMarkDownHistoryTypeMarkUpMarkDownEventItem) ? get_class($markUpMarkDownHistoryTypeMarkUpMarkDownEventItem) : sprintf('%s(%s)', gettype($markUpMarkDownHistoryTypeMarkUpMarkDownEventItem), var_export($markUpMarkDownHistoryTypeMarkUpMarkDownEventItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MarkUpMarkDownEvent property can only contain items of type \StructType\MarkUpMarkDownEventType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set MarkUpMarkDownEvent value
     * @throws \InvalidArgumentException
     * @param \StructType\MarkUpMarkDownEventType[] $markUpMarkDownEvent
     * @return \StructType\MarkUpMarkDownHistoryType
     */
    public function setMarkUpMarkDownEvent(array $markUpMarkDownEvent = array())
    {
        // validation for constraint: array
        if ('' !== ($markUpMarkDownEventArrayErrorMessage = self::validateMarkUpMarkDownEventForArrayConstraintsFromSetMarkUpMarkDownEvent($markUpMarkDownEvent))) {
            throw new \InvalidArgumentException($markUpMarkDownEventArrayErrorMessage, __LINE__);
        }
        $this->MarkUpMarkDownEvent = $markUpMarkDownEvent;
        return $this;
    }
    /**
     * Add item to MarkUpMarkDownEvent value
     * @throws \InvalidArgumentException
     * @param \StructType\MarkUpMarkDownEventType $item
     * @return \StructType\MarkUpMarkDownHistoryType
     */
    public function addToMarkUpMarkDownEvent(\StructType\MarkUpMarkDownEventType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\MarkUpMarkDownEventType) {
            throw new \InvalidArgumentException(sprintf('The MarkUpMarkDownEvent property can only contain items of type \StructType\MarkUpMarkDownEventType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MarkUpMarkDownEvent[] = $item;
        return $this;
    }
}
