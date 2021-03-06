<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveFromWatchListRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: The call enables a user to remove one or more items from their Watch List. A user can view the items that they are currently watching by calling <b>GetMyeBayBuying</b>. <br/><br/> The user has the option of removing one or more
 * single-variation listings, one or more product variations within a multiple-variation listing, or removing all items from the Watch List.
 * @subpackage Structs
 */
class RemoveFromWatchListRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the item to be removed from the user's Watch List. Multiple <b>ItemID</b> fields can be specified in the same request, but note that the <b>RemoveAllItems</b> field or <b>VariationKey</b> container cannot be
     * specified if one or more <b>ItemID</b> fields are used. <br/><br/> | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ItemID;
    /**
     * The RemoveAllItems
     * Meta information extracted from the WSDL
     * - documentation: If this field is included and set to <code>true</code>, then all the items in the user's Watch List are removed. Note that if the <b>RemoveAllItems</b> field is specified, one or more <b>ItemID</b> fields or the <b>VariationKey</b>
     * cannot be used.
     * - minOccurs: 0
     * @var bool
     */
    public $RemoveAllItems;
    /**
     * The VariationKey
     * Meta information extracted from the WSDL
     * - documentation: This container is used if the user want to remove one or more product variations (within a multiple-variation listing) from the Watch List. Note that if the <b>VariationKey</b> container is used, one or more <b>ItemID</b> fields or
     * the <b>RemoveAllItems</b> field cannot be used.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\VariationKeyType[]
     */
    public $VariationKey;
    /**
     * Constructor method for RemoveFromWatchListRequestType
     * @uses RemoveFromWatchListRequestType::setItemID()
     * @uses RemoveFromWatchListRequestType::setRemoveAllItems()
     * @uses RemoveFromWatchListRequestType::setVariationKey()
     * @param string[] $itemID
     * @param bool $removeAllItems
     * @param \StructType\VariationKeyType[] $variationKey
     */
    public function __construct(array $itemID = array(), $removeAllItems = null, array $variationKey = array())
    {
        $this
            ->setItemID($itemID)
            ->setRemoveAllItems($removeAllItems)
            ->setVariationKey($variationKey);
    }
    /**
     * Get ItemID value
     * @return string[]|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * This method is responsible for validating the values passed to the setItemID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemIDForArrayConstraintsFromSetItemID(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $removeFromWatchListRequestTypeItemIDItem) {
            // validation for constraint: itemType
            if (!is_string($removeFromWatchListRequestTypeItemIDItem)) {
                $invalidValues[] = is_object($removeFromWatchListRequestTypeItemIDItem) ? get_class($removeFromWatchListRequestTypeItemIDItem) : sprintf('%s(%s)', gettype($removeFromWatchListRequestTypeItemIDItem), var_export($removeFromWatchListRequestTypeItemIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ItemID property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ItemID value
     * @throws \InvalidArgumentException
     * @param string[] $itemID
     * @return \StructType\RemoveFromWatchListRequestType
     */
    public function setItemID(array $itemID = array())
    {
        // validation for constraint: array
        if ('' !== ($itemIDArrayErrorMessage = self::validateItemIDForArrayConstraintsFromSetItemID($itemID))) {
            throw new \InvalidArgumentException($itemIDArrayErrorMessage, __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Add item to ItemID value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\RemoveFromWatchListRequestType
     */
    public function addToItemID($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ItemID property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ItemID[] = $item;
        return $this;
    }
    /**
     * Get RemoveAllItems value
     * @return bool|null
     */
    public function getRemoveAllItems()
    {
        return $this->RemoveAllItems;
    }
    /**
     * Set RemoveAllItems value
     * @param bool $removeAllItems
     * @return \StructType\RemoveFromWatchListRequestType
     */
    public function setRemoveAllItems($removeAllItems = null)
    {
        // validation for constraint: boolean
        if (!is_null($removeAllItems) && !is_bool($removeAllItems)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($removeAllItems, true), gettype($removeAllItems)), __LINE__);
        }
        $this->RemoveAllItems = $removeAllItems;
        return $this;
    }
    /**
     * Get VariationKey value
     * @return \StructType\VariationKeyType[]|null
     */
    public function getVariationKey()
    {
        return $this->VariationKey;
    }
    /**
     * This method is responsible for validating the values passed to the setVariationKey method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVariationKey method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVariationKeyForArrayConstraintsFromSetVariationKey(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $removeFromWatchListRequestTypeVariationKeyItem) {
            // validation for constraint: itemType
            if (!$removeFromWatchListRequestTypeVariationKeyItem instanceof \StructType\VariationKeyType) {
                $invalidValues[] = is_object($removeFromWatchListRequestTypeVariationKeyItem) ? get_class($removeFromWatchListRequestTypeVariationKeyItem) : sprintf('%s(%s)', gettype($removeFromWatchListRequestTypeVariationKeyItem), var_export($removeFromWatchListRequestTypeVariationKeyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VariationKey property can only contain items of type \StructType\VariationKeyType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set VariationKey value
     * @throws \InvalidArgumentException
     * @param \StructType\VariationKeyType[] $variationKey
     * @return \StructType\RemoveFromWatchListRequestType
     */
    public function setVariationKey(array $variationKey = array())
    {
        // validation for constraint: array
        if ('' !== ($variationKeyArrayErrorMessage = self::validateVariationKeyForArrayConstraintsFromSetVariationKey($variationKey))) {
            throw new \InvalidArgumentException($variationKeyArrayErrorMessage, __LINE__);
        }
        $this->VariationKey = $variationKey;
        return $this;
    }
    /**
     * Add item to VariationKey value
     * @throws \InvalidArgumentException
     * @param \StructType\VariationKeyType $item
     * @return \StructType\RemoveFromWatchListRequestType
     */
    public function addToVariationKey(\StructType\VariationKeyType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\VariationKeyType) {
            throw new \InvalidArgumentException(sprintf('The VariationKey property can only contain items of type \StructType\VariationKeyType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->VariationKey[] = $item;
        return $this;
    }
}
