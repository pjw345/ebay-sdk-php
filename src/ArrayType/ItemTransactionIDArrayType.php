<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ItemTransactionIDArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>ItemTransactionIDArray</b> container in the <b>GetOrderTransactions</b> call. The <b>ItemTransactionIDArray</b> container is used to specify one or more specific order line items to retrieve.
 * @subpackage Arrays
 */
class ItemTransactionIDArrayType extends AbstractStructArrayBase
{
    /**
     * The ItemTransactionID
     * Meta information extracted from the WSDL
     * - documentation: An <b>ItemTransactionID</b> container is required to specify a specific order line item to retrieve. <br><br> The seller has the option of using an <b>OrderLineItemID</b>, a <b>SKU</b> value (if it exists for the order line item and
     * the <b>InventoryTrackingMethod</b> is set to <code>SKU</code>), or an <b>ItemID</b>/<b>TransactionID</b> pair to identify an order line item.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ItemTransactionIDType[]
     */
    public $ItemTransactionID;
    /**
     * Constructor method for ItemTransactionIDArrayType
     * @uses ItemTransactionIDArrayType::setItemTransactionID()
     * @param \StructType\ItemTransactionIDType[] $itemTransactionID
     */
    public function __construct(array $itemTransactionID = array())
    {
        $this
            ->setItemTransactionID($itemTransactionID);
    }
    /**
     * Get ItemTransactionID value
     * @return \StructType\ItemTransactionIDType[]|null
     */
    public function getItemTransactionID()
    {
        return $this->ItemTransactionID;
    }
    /**
     * This method is responsible for validating the values passed to the setItemTransactionID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemTransactionID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemTransactionIDForArrayConstraintsFromSetItemTransactionID(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $itemTransactionIDArrayTypeItemTransactionIDItem) {
            // validation for constraint: itemType
            if (!$itemTransactionIDArrayTypeItemTransactionIDItem instanceof \StructType\ItemTransactionIDType) {
                $invalidValues[] = is_object($itemTransactionIDArrayTypeItemTransactionIDItem) ? get_class($itemTransactionIDArrayTypeItemTransactionIDItem) : sprintf('%s(%s)', gettype($itemTransactionIDArrayTypeItemTransactionIDItem), var_export($itemTransactionIDArrayTypeItemTransactionIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ItemTransactionID property can only contain items of type \StructType\ItemTransactionIDType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ItemTransactionID value
     * @throws \InvalidArgumentException
     * @param \StructType\ItemTransactionIDType[] $itemTransactionID
     * @return \ArrayType\ItemTransactionIDArrayType
     */
    public function setItemTransactionID(array $itemTransactionID = array())
    {
        // validation for constraint: array
        if ('' !== ($itemTransactionIDArrayErrorMessage = self::validateItemTransactionIDForArrayConstraintsFromSetItemTransactionID($itemTransactionID))) {
            throw new \InvalidArgumentException($itemTransactionIDArrayErrorMessage, __LINE__);
        }
        $this->ItemTransactionID = $itemTransactionID;
        return $this;
    }
    /**
     * Add item to ItemTransactionID value
     * @throws \InvalidArgumentException
     * @param \StructType\ItemTransactionIDType $item
     * @return \ArrayType\ItemTransactionIDArrayType
     */
    public function addToItemTransactionID(\StructType\ItemTransactionIDType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ItemTransactionIDType) {
            throw new \InvalidArgumentException(sprintf('The ItemTransactionID property can only contain items of type \StructType\ItemTransactionIDType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ItemTransactionID[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ItemTransactionIDType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ItemTransactionIDType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ItemTransactionIDType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ItemTransactionIDType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ItemTransactionIDType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ItemTransactionID
     */
    public function getAttributeName()
    {
        return 'ItemTransactionID';
    }
}
