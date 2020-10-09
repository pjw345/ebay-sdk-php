<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ItemRatingDetailArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>SellerItemRatingDetailArray</b> container in the <b>LeaveFeedback</b> request payload. This container is used by an eBay buyer to leave one or more Detailed Seller Ratings for their order partner concerning an
 * order line item.
 * @subpackage Arrays
 */
class ItemRatingDetailArrayType extends AbstractStructArrayBase
{
    /**
     * The ItemRatingDetails
     * Meta information extracted from the WSDL
     * - documentation: The <b>ItemRatingDetails</b> container is used by an eBay buyer to leave a Detailed Seller Rating for their order partner concerning an order line item. Detailed Seller Ratings are left concerning Communication, Item as Described,
     * Shipping and Handling Charges, and Shipping Time. The buyer gives the seller a rating between 1 to 5 (5 being the best) in these areas. <br><br> Applicable to sites that support the Detailed Seller Ratings feature.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ItemRatingDetailsType[]
     */
    public $ItemRatingDetails;
    /**
     * Constructor method for ItemRatingDetailArrayType
     * @uses ItemRatingDetailArrayType::setItemRatingDetails()
     * @param \StructType\ItemRatingDetailsType[] $itemRatingDetails
     */
    public function __construct(array $itemRatingDetails = array())
    {
        $this
            ->setItemRatingDetails($itemRatingDetails);
    }
    /**
     * Get ItemRatingDetails value
     * @return \StructType\ItemRatingDetailsType[]|null
     */
    public function getItemRatingDetails()
    {
        return $this->ItemRatingDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setItemRatingDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemRatingDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemRatingDetailsForArrayConstraintsFromSetItemRatingDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $itemRatingDetailArrayTypeItemRatingDetailsItem) {
            // validation for constraint: itemType
            if (!$itemRatingDetailArrayTypeItemRatingDetailsItem instanceof \StructType\ItemRatingDetailsType) {
                $invalidValues[] = is_object($itemRatingDetailArrayTypeItemRatingDetailsItem) ? get_class($itemRatingDetailArrayTypeItemRatingDetailsItem) : sprintf('%s(%s)', gettype($itemRatingDetailArrayTypeItemRatingDetailsItem), var_export($itemRatingDetailArrayTypeItemRatingDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ItemRatingDetails property can only contain items of type \StructType\ItemRatingDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ItemRatingDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\ItemRatingDetailsType[] $itemRatingDetails
     * @return \ArrayType\ItemRatingDetailArrayType
     */
    public function setItemRatingDetails(array $itemRatingDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($itemRatingDetailsArrayErrorMessage = self::validateItemRatingDetailsForArrayConstraintsFromSetItemRatingDetails($itemRatingDetails))) {
            throw new \InvalidArgumentException($itemRatingDetailsArrayErrorMessage, __LINE__);
        }
        $this->ItemRatingDetails = $itemRatingDetails;
        return $this;
    }
    /**
     * Add item to ItemRatingDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\ItemRatingDetailsType $item
     * @return \ArrayType\ItemRatingDetailArrayType
     */
    public function addToItemRatingDetails(\StructType\ItemRatingDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ItemRatingDetailsType) {
            throw new \InvalidArgumentException(sprintf('The ItemRatingDetails property can only contain items of type \StructType\ItemRatingDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ItemRatingDetails[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ItemRatingDetailsType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ItemRatingDetailsType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ItemRatingDetailsType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ItemRatingDetailsType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ItemRatingDetailsType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ItemRatingDetails
     */
    public function getAttributeName()
    {
        return 'ItemRatingDetails';
    }
}
