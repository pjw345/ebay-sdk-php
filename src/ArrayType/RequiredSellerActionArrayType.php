<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for RequiredSellerActionArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: This type defines the <b>RequiredSellerActionArray</b> container, which may contain one or more <b>RequiredSellerAction</b> fields.
 * @subpackage Arrays
 */
class RequiredSellerActionArrayType extends AbstractStructArrayBase
{
    /**
     * The RequiredSellerAction
     * Meta information extracted from the WSDL
     * - documentation: This field contains a possible action that a seller can take to expedite the release of a payment hold. There can be one or more <b>RequiredSellerAction</b> fields in the <b>RequiredSellerActionArray</b> container.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $RequiredSellerAction;
    /**
     * Constructor method for RequiredSellerActionArrayType
     * @uses RequiredSellerActionArrayType::setRequiredSellerAction()
     * @param string[] $requiredSellerAction
     */
    public function __construct(array $requiredSellerAction = array())
    {
        $this
            ->setRequiredSellerAction($requiredSellerAction);
    }
    /**
     * Get RequiredSellerAction value
     * @return string[]|null
     */
    public function getRequiredSellerAction()
    {
        return $this->RequiredSellerAction;
    }
    /**
     * This method is responsible for validating the values passed to the setRequiredSellerAction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRequiredSellerAction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRequiredSellerActionForArrayConstraintsFromSetRequiredSellerAction(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $requiredSellerActionArrayTypeRequiredSellerActionItem) {
            // validation for constraint: enumeration
            if (!\EnumType\RequiredSellerActionCodeType::valueIsValid($requiredSellerActionArrayTypeRequiredSellerActionItem)) {
                $invalidValues[] = is_object($requiredSellerActionArrayTypeRequiredSellerActionItem) ? get_class($requiredSellerActionArrayTypeRequiredSellerActionItem) : sprintf('%s(%s)', gettype($requiredSellerActionArrayTypeRequiredSellerActionItem), var_export($requiredSellerActionArrayTypeRequiredSellerActionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\RequiredSellerActionCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\RequiredSellerActionCodeType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RequiredSellerAction value
     * @uses \EnumType\RequiredSellerActionCodeType::valueIsValid()
     * @uses \EnumType\RequiredSellerActionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $requiredSellerAction
     * @return \ArrayType\RequiredSellerActionArrayType
     */
    public function setRequiredSellerAction(array $requiredSellerAction = array())
    {
        // validation for constraint: array
        if ('' !== ($requiredSellerActionArrayErrorMessage = self::validateRequiredSellerActionForArrayConstraintsFromSetRequiredSellerAction($requiredSellerAction))) {
            throw new \InvalidArgumentException($requiredSellerActionArrayErrorMessage, __LINE__);
        }
        $this->RequiredSellerAction = $requiredSellerAction;
        return $this;
    }
    /**
     * Add item to RequiredSellerAction value
     * @uses \EnumType\RequiredSellerActionCodeType::valueIsValid()
     * @uses \EnumType\RequiredSellerActionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \ArrayType\RequiredSellerActionArrayType
     */
    public function addToRequiredSellerAction($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\RequiredSellerActionCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\RequiredSellerActionCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \EnumType\RequiredSellerActionCodeType::getValidValues())), __LINE__);
        }
        $this->RequiredSellerAction[] = $item;
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
     * @uses \EnumType\RequiredSellerActionCodeType::valueIsValid()
     * @param string $item
     * @return \ArrayType\RequiredSellerActionArrayType
     */
    public function add($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\RequiredSellerActionCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\RequiredSellerActionCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \EnumType\RequiredSellerActionCodeType::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RequiredSellerAction
     */
    public function getAttributeName()
    {
        return 'RequiredSellerAction';
    }
}
