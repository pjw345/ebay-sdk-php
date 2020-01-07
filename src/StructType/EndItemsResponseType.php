<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EndItemsResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains a response of the resulting status of ending each item.
 * @subpackage Structs
 */
class EndItemsResponseType extends AbstractResponseType
{
    /**
     * The EndItemResponseContainer
     * Meta information extracted from the WSDL
     * - documentation: Returns a response for an individually ended item. Mutiple containers will be listed if multiple items are ended.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EndItemResponseContainerType[]
     */
    public $EndItemResponseContainer;
    /**
     * Constructor method for EndItemsResponseType
     * @uses EndItemsResponseType::setEndItemResponseContainer()
     * @param \StructType\EndItemResponseContainerType[] $endItemResponseContainer
     */
    public function __construct(array $endItemResponseContainer = array())
    {
        $this
            ->setEndItemResponseContainer($endItemResponseContainer);
    }
    /**
     * Get EndItemResponseContainer value
     * @return \StructType\EndItemResponseContainerType[]|null
     */
    public function getEndItemResponseContainer()
    {
        return $this->EndItemResponseContainer;
    }
    /**
     * This method is responsible for validating the values passed to the setEndItemResponseContainer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEndItemResponseContainer method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEndItemResponseContainerForArrayConstraintsFromSetEndItemResponseContainer(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $endItemsResponseTypeEndItemResponseContainerItem) {
            // validation for constraint: itemType
            if (!$endItemsResponseTypeEndItemResponseContainerItem instanceof \StructType\EndItemResponseContainerType) {
                $invalidValues[] = is_object($endItemsResponseTypeEndItemResponseContainerItem) ? get_class($endItemsResponseTypeEndItemResponseContainerItem) : sprintf('%s(%s)', gettype($endItemsResponseTypeEndItemResponseContainerItem), var_export($endItemsResponseTypeEndItemResponseContainerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EndItemResponseContainer property can only contain items of type \StructType\EndItemResponseContainerType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set EndItemResponseContainer value
     * @throws \InvalidArgumentException
     * @param \StructType\EndItemResponseContainerType[] $endItemResponseContainer
     * @return \StructType\EndItemsResponseType
     */
    public function setEndItemResponseContainer(array $endItemResponseContainer = array())
    {
        // validation for constraint: array
        if ('' !== ($endItemResponseContainerArrayErrorMessage = self::validateEndItemResponseContainerForArrayConstraintsFromSetEndItemResponseContainer($endItemResponseContainer))) {
            throw new \InvalidArgumentException($endItemResponseContainerArrayErrorMessage, __LINE__);
        }
        $this->EndItemResponseContainer = $endItemResponseContainer;
        return $this;
    }
    /**
     * Add item to EndItemResponseContainer value
     * @throws \InvalidArgumentException
     * @param \StructType\EndItemResponseContainerType $item
     * @return \StructType\EndItemsResponseType
     */
    public function addToEndItemResponseContainer(\StructType\EndItemResponseContainerType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EndItemResponseContainerType) {
            throw new \InvalidArgumentException(sprintf('The EndItemResponseContainer property can only contain items of type \StructType\EndItemResponseContainerType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->EndItemResponseContainer[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\EndItemsResponseType
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
