<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetItemResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used to display detailed information about the listing that was retrieved.
 * @subpackage Structs
 */
class GetItemResponseType extends AbstractResponseType
{
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - documentation: This container consists of detailed information about the retrieved listing. The amount of information that is returned is partially controlled by the filters that are set in the call request.
     * - minOccurs: 0
     * @var \StructType\ItemType
     */
    public $Item;
    /**
     * Constructor method for GetItemResponseType
     * @uses GetItemResponseType::setItem()
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
     * @return \StructType\GetItemResponseType
     */
    public function setItem(\StructType\ItemType $item = null)
    {
        $this->Item = $item;
        return $this;
    }
}
