<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddItemRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Base request type for the <b>AddItem</b> call, which is used to create a fixed-price, auction, or classified ad listing. The <b>AddItem</b> call does not support multiple-variation listings, so the <b>AddFixedPriceItem</b> call must
 * be used to create multiple-variation listings.
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
}
