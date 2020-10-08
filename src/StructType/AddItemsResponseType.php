<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddItemsResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The response of the <b>AddItems</b> call. The response includes the Item IDs of the newly created listings, the eBay category each item is listed under, the seller-defined SKUs of the items (if any), the listing recommendations for
 * each item (if applicable), the start and end time of each listing, and the estimated fees that each listing will incur.
 * @subpackage Structs
 */
class AddItemsResponseType extends AbstractResponseType
{
    /**
     * The AddItemResponseContainer
     * Meta information extracted from the WSDL
     * - documentation: One <b>AddItemResponseContainer</b> container is returned for each listing that was created with the <b>AddItems</b> call. Each container includes the <b>ItemID</b> of each newly created listings, the eBay category each item is
     * listed under, the seller-defined SKUs of the items (if any), the listing recommendations for each item (if applicable), the start and end time of each listing, and the estimated fees that each listing will incur.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\AddItemResponseContainerType[]
     */
    public $AddItemResponseContainer;
    /**
     * Constructor method for AddItemsResponseType
     * @uses AddItemsResponseType::setAddItemResponseContainer()
     * @param \StructType\AddItemResponseContainerType[] $addItemResponseContainer
     */
    public function __construct(array $addItemResponseContainer = array())
    {
        $this
            ->setAddItemResponseContainer($addItemResponseContainer);
    }
    /**
     * Get AddItemResponseContainer value
     * @return \StructType\AddItemResponseContainerType[]|null
     */
    public function getAddItemResponseContainer()
    {
        return $this->AddItemResponseContainer;
    }
    /**
     * This method is responsible for validating the values passed to the setAddItemResponseContainer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAddItemResponseContainer method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAddItemResponseContainerForArrayConstraintsFromSetAddItemResponseContainer(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $addItemsResponseTypeAddItemResponseContainerItem) {
            // validation for constraint: itemType
            if (!$addItemsResponseTypeAddItemResponseContainerItem instanceof \StructType\AddItemResponseContainerType) {
                $invalidValues[] = is_object($addItemsResponseTypeAddItemResponseContainerItem) ? get_class($addItemsResponseTypeAddItemResponseContainerItem) : sprintf('%s(%s)', gettype($addItemsResponseTypeAddItemResponseContainerItem), var_export($addItemsResponseTypeAddItemResponseContainerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AddItemResponseContainer property can only contain items of type \StructType\AddItemResponseContainerType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set AddItemResponseContainer value
     * @throws \InvalidArgumentException
     * @param \StructType\AddItemResponseContainerType[] $addItemResponseContainer
     * @return \StructType\AddItemsResponseType
     */
    public function setAddItemResponseContainer(array $addItemResponseContainer = array())
    {
        // validation for constraint: array
        if ('' !== ($addItemResponseContainerArrayErrorMessage = self::validateAddItemResponseContainerForArrayConstraintsFromSetAddItemResponseContainer($addItemResponseContainer))) {
            throw new \InvalidArgumentException($addItemResponseContainerArrayErrorMessage, __LINE__);
        }
        $this->AddItemResponseContainer = $addItemResponseContainer;
        return $this;
    }
    /**
     * Add item to AddItemResponseContainer value
     * @throws \InvalidArgumentException
     * @param \StructType\AddItemResponseContainerType $item
     * @return \StructType\AddItemsResponseType
     */
    public function addToAddItemResponseContainer(\StructType\AddItemResponseContainerType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AddItemResponseContainerType) {
            throw new \InvalidArgumentException(sprintf('The AddItemResponseContainer property can only contain items of type \StructType\AddItemResponseContainerType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AddItemResponseContainer[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AddItemsResponseType
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
