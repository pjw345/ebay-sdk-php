<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for PromotionRuleArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Arrays
 */
class PromotionRuleArrayType extends AbstractStructArrayBase
{
    /**
     * The PromotionRule
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\PromotionRuleType[]
     */
    public $PromotionRule;
    /**
     * Constructor method for PromotionRuleArrayType
     * @uses PromotionRuleArrayType::setPromotionRule()
     * @param \StructType\PromotionRuleType[] $promotionRule
     */
    public function __construct(array $promotionRule = array())
    {
        $this
            ->setPromotionRule($promotionRule);
    }
    /**
     * Get PromotionRule value
     * @return \StructType\PromotionRuleType[]|null
     */
    public function getPromotionRule()
    {
        return $this->PromotionRule;
    }
    /**
     * This method is responsible for validating the values passed to the setPromotionRule method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPromotionRule method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePromotionRuleForArrayConstraintsFromSetPromotionRule(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $promotionRuleArrayTypePromotionRuleItem) {
            // validation for constraint: itemType
            if (!$promotionRuleArrayTypePromotionRuleItem instanceof \StructType\PromotionRuleType) {
                $invalidValues[] = is_object($promotionRuleArrayTypePromotionRuleItem) ? get_class($promotionRuleArrayTypePromotionRuleItem) : sprintf('%s(%s)', gettype($promotionRuleArrayTypePromotionRuleItem), var_export($promotionRuleArrayTypePromotionRuleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PromotionRule property can only contain items of type \StructType\PromotionRuleType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set PromotionRule value
     * @throws \InvalidArgumentException
     * @param \StructType\PromotionRuleType[] $promotionRule
     * @return \ArrayType\PromotionRuleArrayType
     */
    public function setPromotionRule(array $promotionRule = array())
    {
        // validation for constraint: array
        if ('' !== ($promotionRuleArrayErrorMessage = self::validatePromotionRuleForArrayConstraintsFromSetPromotionRule($promotionRule))) {
            throw new \InvalidArgumentException($promotionRuleArrayErrorMessage, __LINE__);
        }
        $this->PromotionRule = $promotionRule;
        return $this;
    }
    /**
     * Add item to PromotionRule value
     * @throws \InvalidArgumentException
     * @param \StructType\PromotionRuleType $item
     * @return \ArrayType\PromotionRuleArrayType
     */
    public function addToPromotionRule(\StructType\PromotionRuleType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PromotionRuleType) {
            throw new \InvalidArgumentException(sprintf('The PromotionRule property can only contain items of type \StructType\PromotionRuleType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PromotionRule[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\PromotionRuleType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\PromotionRuleType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\PromotionRuleType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\PromotionRuleType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\PromotionRuleType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PromotionRule
     */
    public function getAttributeName()
    {
        return 'PromotionRule';
    }
}
