<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for StoreSubscriptionArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Set of eBay Store subscription levels.
 * @subpackage Arrays
 */
class StoreSubscriptionArrayType extends AbstractStructArrayBase
{
    /**
     * The Subscription
     * Meta information extracted from the WSDL
     * - documentation: A Store subscription level.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\StoreSubscriptionType[]
     */
    public $Subscription;
    /**
     * Constructor method for StoreSubscriptionArrayType
     * @uses StoreSubscriptionArrayType::setSubscription()
     * @param \StructType\StoreSubscriptionType[] $subscription
     */
    public function __construct(array $subscription = array())
    {
        $this
            ->setSubscription($subscription);
    }
    /**
     * Get Subscription value
     * @return \StructType\StoreSubscriptionType[]|null
     */
    public function getSubscription()
    {
        return $this->Subscription;
    }
    /**
     * This method is responsible for validating the values passed to the setSubscription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSubscription method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSubscriptionForArrayConstraintsFromSetSubscription(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $storeSubscriptionArrayTypeSubscriptionItem) {
            // validation for constraint: itemType
            if (!$storeSubscriptionArrayTypeSubscriptionItem instanceof \StructType\StoreSubscriptionType) {
                $invalidValues[] = is_object($storeSubscriptionArrayTypeSubscriptionItem) ? get_class($storeSubscriptionArrayTypeSubscriptionItem) : sprintf('%s(%s)', gettype($storeSubscriptionArrayTypeSubscriptionItem), var_export($storeSubscriptionArrayTypeSubscriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Subscription property can only contain items of type \StructType\StoreSubscriptionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Subscription value
     * @throws \InvalidArgumentException
     * @param \StructType\StoreSubscriptionType[] $subscription
     * @return \ArrayType\StoreSubscriptionArrayType
     */
    public function setSubscription(array $subscription = array())
    {
        // validation for constraint: array
        if ('' !== ($subscriptionArrayErrorMessage = self::validateSubscriptionForArrayConstraintsFromSetSubscription($subscription))) {
            throw new \InvalidArgumentException($subscriptionArrayErrorMessage, __LINE__);
        }
        $this->Subscription = $subscription;
        return $this;
    }
    /**
     * Add item to Subscription value
     * @throws \InvalidArgumentException
     * @param \StructType\StoreSubscriptionType $item
     * @return \ArrayType\StoreSubscriptionArrayType
     */
    public function addToSubscription(\StructType\StoreSubscriptionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\StoreSubscriptionType) {
            throw new \InvalidArgumentException(sprintf('The Subscription property can only contain items of type \StructType\StoreSubscriptionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Subscription[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\StoreSubscriptionType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\StoreSubscriptionType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\StoreSubscriptionType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\StoreSubscriptionType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\StoreSubscriptionType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Subscription
     */
    public function getAttributeName()
    {
        return 'Subscription';
    }
}
