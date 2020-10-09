<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddItemsRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Base request type for the <b>AddItems</b> call, which is used to create one to five fixed-price, auction, or classified ad listings. The <b>AddItems</b> call does not support multiple-variation listings, so multiple-variation
 * listings cannot be created with this call.
 * @subpackage Structs
 */
class AddItemsRequestType extends AbstractRequestType
{
    /**
     * The AddItemRequestContainer
     * Meta information extracted from the WSDL
     * - documentation: An <b>AddItemRequestContainer</b> container is required for each listing that will be created with the <b>AddItems</b> request. Up to five of these containers can be included in one <b>AddItems</b> request.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\AddItemRequestContainerType[]
     */
    public $AddItemRequestContainer;
    /**
     * Constructor method for AddItemsRequestType
     * @uses AddItemsRequestType::setAddItemRequestContainer()
     * @param \StructType\AddItemRequestContainerType[] $addItemRequestContainer
     */
    public function __construct(array $addItemRequestContainer = array())
    {
        $this
            ->setAddItemRequestContainer($addItemRequestContainer);
    }
    /**
     * Get AddItemRequestContainer value
     * @return \StructType\AddItemRequestContainerType[]|null
     */
    public function getAddItemRequestContainer()
    {
        return $this->AddItemRequestContainer;
    }
    /**
     * This method is responsible for validating the values passed to the setAddItemRequestContainer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAddItemRequestContainer method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAddItemRequestContainerForArrayConstraintsFromSetAddItemRequestContainer(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $addItemsRequestTypeAddItemRequestContainerItem) {
            // validation for constraint: itemType
            if (!$addItemsRequestTypeAddItemRequestContainerItem instanceof \StructType\AddItemRequestContainerType) {
                $invalidValues[] = is_object($addItemsRequestTypeAddItemRequestContainerItem) ? get_class($addItemsRequestTypeAddItemRequestContainerItem) : sprintf('%s(%s)', gettype($addItemsRequestTypeAddItemRequestContainerItem), var_export($addItemsRequestTypeAddItemRequestContainerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AddItemRequestContainer property can only contain items of type \StructType\AddItemRequestContainerType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set AddItemRequestContainer value
     * @throws \InvalidArgumentException
     * @param \StructType\AddItemRequestContainerType[] $addItemRequestContainer
     * @return \StructType\AddItemsRequestType
     */
    public function setAddItemRequestContainer(array $addItemRequestContainer = array())
    {
        // validation for constraint: array
        if ('' !== ($addItemRequestContainerArrayErrorMessage = self::validateAddItemRequestContainerForArrayConstraintsFromSetAddItemRequestContainer($addItemRequestContainer))) {
            throw new \InvalidArgumentException($addItemRequestContainerArrayErrorMessage, __LINE__);
        }
        $this->AddItemRequestContainer = $addItemRequestContainer;
        return $this;
    }
    /**
     * Add item to AddItemRequestContainer value
     * @throws \InvalidArgumentException
     * @param \StructType\AddItemRequestContainerType $item
     * @return \StructType\AddItemsRequestType
     */
    public function addToAddItemRequestContainer(\StructType\AddItemRequestContainerType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AddItemRequestContainerType) {
            throw new \InvalidArgumentException(sprintf('The AddItemRequestContainer property can only contain items of type \StructType\AddItemRequestContainerType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AddItemRequestContainer[] = $item;
        return $this;
    }
}
