<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for MyMessagesMessageIDArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Contains a list of up to 10 MessageID values.
 * @subpackage Arrays
 */
class MyMessagesMessageIDArrayType extends AbstractStructArrayBase
{
    /**
     * The MessageID
     * Meta information extracted from the WSDL
     * - documentation: An ID that uniquely identifies a message for a given user. | Type defining the <b>MessageID</b> field used in <b>GetMyMessages</b>, <b>ReviseMyMessages</b>, and <b>DeleteMyMessages</b> to identify a specific eBay message to retrieve,
     * revise, or delete, respectively. Up to 10 <b>MessageID</b> values can be specified in one API call.
     * - base: xs:string
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $MessageID;
    /**
     * Constructor method for MyMessagesMessageIDArrayType
     * @uses MyMessagesMessageIDArrayType::setMessageID()
     * @param string[] $messageID
     */
    public function __construct(array $messageID = array())
    {
        $this
            ->setMessageID($messageID);
    }
    /**
     * Get MessageID value
     * @return string[]|null
     */
    public function getMessageID()
    {
        return $this->MessageID;
    }
    /**
     * This method is responsible for validating the values passed to the setMessageID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMessageID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMessageIDForArrayConstraintsFromSetMessageID(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $myMessagesMessageIDArrayTypeMessageIDItem) {
            // validation for constraint: itemType
            if (!is_string($myMessagesMessageIDArrayTypeMessageIDItem)) {
                $invalidValues[] = is_object($myMessagesMessageIDArrayTypeMessageIDItem) ? get_class($myMessagesMessageIDArrayTypeMessageIDItem) : sprintf('%s(%s)', gettype($myMessagesMessageIDArrayTypeMessageIDItem), var_export($myMessagesMessageIDArrayTypeMessageIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MessageID property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set MessageID value
     * @throws \InvalidArgumentException
     * @param string[] $messageID
     * @return \ArrayType\MyMessagesMessageIDArrayType
     */
    public function setMessageID(array $messageID = array())
    {
        // validation for constraint: array
        if ('' !== ($messageIDArrayErrorMessage = self::validateMessageIDForArrayConstraintsFromSetMessageID($messageID))) {
            throw new \InvalidArgumentException($messageIDArrayErrorMessage, __LINE__);
        }
        $this->MessageID = $messageID;
        return $this;
    }
    /**
     * Add item to MessageID value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \ArrayType\MyMessagesMessageIDArrayType
     */
    public function addToMessageID($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The MessageID property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MessageID[] = $item;
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
     * @return string MessageID
     */
    public function getAttributeName()
    {
        return 'MessageID';
    }
}
