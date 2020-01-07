<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddItemRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Base request type for the <b>AddItem</b> call, which is used to create a fixed-price, auction, or classified ad listing.
 * @subpackage Structs
 */
class AddItemRequestType extends AbstractRequestType
{
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - documentation: This container is used to specify all of the values and settings that define a new listing.
     * - minOccurs: 0
     * @var \StructType\ItemType
     */
    public $Item;
    /**
     * Constructor method for AddItemRequestType
     * @uses AddItemRequestType::setItem()
     * @param \StructType\ItemType $item
     */
    public function __construct(\StructType\ItemType $item = null)
    {
        $this
            ->setItem($item);
    }
    /**
     * Get Item value
     * @return \StructType\ItemType|null
     */
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @param \StructType\ItemType $item
     * @return \StructType\AddItemRequestType
     */
    public function setItem(\StructType\ItemType $item = null)
    {
        $this->Item = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AddItemRequestType
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
