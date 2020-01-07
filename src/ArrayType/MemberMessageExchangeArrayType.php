<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for MemberMessageExchangeArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Type is used by the <b>MemberMessage</b> container that is returned in the <b>GetMemberMessages</b> and <b>GetAdFormatLeads</b> calls. The <b>MemberMessage</b> container will consists of one or more member messages that meet the
 * input criteria in the call request.
 * @subpackage Arrays
 */
class MemberMessageExchangeArrayType extends AbstractStructArrayBase
{
    /**
     * The MemberMessageExchange
     * Meta information extracted from the WSDL
     * - documentation: Each <b>MemberMessageExchange</b> container consists of detailed information about a member-to-member message.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\MemberMessageExchangeType[]
     */
    public $MemberMessageExchange;
    /**
     * Constructor method for MemberMessageExchangeArrayType
     * @uses MemberMessageExchangeArrayType::setMemberMessageExchange()
     * @param \StructType\MemberMessageExchangeType[] $memberMessageExchange
     */
    public function __construct(array $memberMessageExchange = array())
    {
        $this
            ->setMemberMessageExchange($memberMessageExchange);
    }
    /**
     * Get MemberMessageExchange value
     * @return \StructType\MemberMessageExchangeType[]|null
     */
    public function getMemberMessageExchange()
    {
        return $this->MemberMessageExchange;
    }
    /**
     * This method is responsible for validating the values passed to the setMemberMessageExchange method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMemberMessageExchange method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMemberMessageExchangeForArrayConstraintsFromSetMemberMessageExchange(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $memberMessageExchangeArrayTypeMemberMessageExchangeItem) {
            // validation for constraint: itemType
            if (!$memberMessageExchangeArrayTypeMemberMessageExchangeItem instanceof \StructType\MemberMessageExchangeType) {
                $invalidValues[] = is_object($memberMessageExchangeArrayTypeMemberMessageExchangeItem) ? get_class($memberMessageExchangeArrayTypeMemberMessageExchangeItem) : sprintf('%s(%s)', gettype($memberMessageExchangeArrayTypeMemberMessageExchangeItem), var_export($memberMessageExchangeArrayTypeMemberMessageExchangeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MemberMessageExchange property can only contain items of type \StructType\MemberMessageExchangeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set MemberMessageExchange value
     * @throws \InvalidArgumentException
     * @param \StructType\MemberMessageExchangeType[] $memberMessageExchange
     * @return \ArrayType\MemberMessageExchangeArrayType
     */
    public function setMemberMessageExchange(array $memberMessageExchange = array())
    {
        // validation for constraint: array
        if ('' !== ($memberMessageExchangeArrayErrorMessage = self::validateMemberMessageExchangeForArrayConstraintsFromSetMemberMessageExchange($memberMessageExchange))) {
            throw new \InvalidArgumentException($memberMessageExchangeArrayErrorMessage, __LINE__);
        }
        $this->MemberMessageExchange = $memberMessageExchange;
        return $this;
    }
    /**
     * Add item to MemberMessageExchange value
     * @throws \InvalidArgumentException
     * @param \StructType\MemberMessageExchangeType $item
     * @return \ArrayType\MemberMessageExchangeArrayType
     */
    public function addToMemberMessageExchange(\StructType\MemberMessageExchangeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\MemberMessageExchangeType) {
            throw new \InvalidArgumentException(sprintf('The MemberMessageExchange property can only contain items of type \StructType\MemberMessageExchangeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MemberMessageExchange[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\MemberMessageExchangeType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\MemberMessageExchangeType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\MemberMessageExchangeType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\MemberMessageExchangeType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\MemberMessageExchangeType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MemberMessageExchange
     */
    public function getAttributeName()
    {
        return 'MemberMessageExchange';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\MemberMessageExchangeArrayType
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
