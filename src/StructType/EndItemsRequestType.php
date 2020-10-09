<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EndItemsRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: The <b>EndItems</b> call is used to end up to 10 specified eBay listings before the date and time at which those listings would normally end per the listing duration.
 * @subpackage Structs
 */
class EndItemsRequestType extends AbstractRequestType
{
    /**
     * The EndItemRequestContainer
     * Meta information extracted from the WSDL
     * - documentation: An <b>EndItemRequestContainer</b> container is required for each eBay listing that the seller plans to end through the <b>EndItems</b> call. Up to 10 eBay listings can be ended with one <b>EndItems</b> call.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EndItemRequestContainerType[]
     */
    public $EndItemRequestContainer;
    /**
     * Constructor method for EndItemsRequestType
     * @uses EndItemsRequestType::setEndItemRequestContainer()
     * @param \StructType\EndItemRequestContainerType[] $endItemRequestContainer
     */
    public function __construct(array $endItemRequestContainer = array())
    {
        $this
            ->setEndItemRequestContainer($endItemRequestContainer);
    }
    /**
     * Get EndItemRequestContainer value
     * @return \StructType\EndItemRequestContainerType[]|null
     */
    public function getEndItemRequestContainer()
    {
        return $this->EndItemRequestContainer;
    }
    /**
     * This method is responsible for validating the values passed to the setEndItemRequestContainer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEndItemRequestContainer method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEndItemRequestContainerForArrayConstraintsFromSetEndItemRequestContainer(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $endItemsRequestTypeEndItemRequestContainerItem) {
            // validation for constraint: itemType
            if (!$endItemsRequestTypeEndItemRequestContainerItem instanceof \StructType\EndItemRequestContainerType) {
                $invalidValues[] = is_object($endItemsRequestTypeEndItemRequestContainerItem) ? get_class($endItemsRequestTypeEndItemRequestContainerItem) : sprintf('%s(%s)', gettype($endItemsRequestTypeEndItemRequestContainerItem), var_export($endItemsRequestTypeEndItemRequestContainerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EndItemRequestContainer property can only contain items of type \StructType\EndItemRequestContainerType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set EndItemRequestContainer value
     * @throws \InvalidArgumentException
     * @param \StructType\EndItemRequestContainerType[] $endItemRequestContainer
     * @return \StructType\EndItemsRequestType
     */
    public function setEndItemRequestContainer(array $endItemRequestContainer = array())
    {
        // validation for constraint: array
        if ('' !== ($endItemRequestContainerArrayErrorMessage = self::validateEndItemRequestContainerForArrayConstraintsFromSetEndItemRequestContainer($endItemRequestContainer))) {
            throw new \InvalidArgumentException($endItemRequestContainerArrayErrorMessage, __LINE__);
        }
        $this->EndItemRequestContainer = $endItemRequestContainer;
        return $this;
    }
    /**
     * Add item to EndItemRequestContainer value
     * @throws \InvalidArgumentException
     * @param \StructType\EndItemRequestContainerType $item
     * @return \StructType\EndItemsRequestType
     */
    public function addToEndItemRequestContainer(\StructType\EndItemRequestContainerType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EndItemRequestContainerType) {
            throw new \InvalidArgumentException(sprintf('The EndItemRequestContainer property can only contain items of type \StructType\EndItemRequestContainerType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->EndItemRequestContainer[] = $item;
        return $this;
    }
}
