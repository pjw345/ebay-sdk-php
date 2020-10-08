<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddFixedPriceItemRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This call allows a seller to create and publish a fixed-price listing. The main difference between <b>AddFixedPriceItem</b> and <b>AddItem</b> is that <b>AddFixedPriceItem</b> supports the creation of fixed-price listings only,
 * whereas <b>AddItem</b> supports all listing formats. <br> <br> Also, only <b>AddFixedPriceItem</b> supports multiple-variation listings and tracking inventory by a seller-defined SKU value. <b>AddItem</b> does not support Variations or the
 * <b>InventoryTrackingMethod</b> field.
 * @subpackage Structs
 */
class AddFixedPriceItemRequestType extends AbstractRequestType
{
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - documentation: This container is used to specify all of the values and settings that define a new fixed-price listing.
     * - minOccurs: 0
     * @var \StructType\ItemType
     */
    public $Item;
    /**
     * Constructor method for AddFixedPriceItemRequestType
     * @uses AddFixedPriceItemRequestType::setItem()
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
     * @return \StructType\AddFixedPriceItemRequestType
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
     * @return \StructType\AddFixedPriceItemRequestType
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
