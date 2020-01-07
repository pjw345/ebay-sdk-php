<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifyAddFixedPriceItemRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Enables a seller to test the definition of a new fixed-price listing by submitting the definition to eBay without creating an actual listing.
 * @subpackage Structs
 */
class VerifyAddFixedPriceItemRequestType extends AbstractRequestType
{
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - documentation: Root container holding all values that define a new fixed-price listing.
     * - minOccurs: 0
     * @var \StructType\ItemType
     */
    public $Item;
    /**
     * Constructor method for VerifyAddFixedPriceItemRequestType
     * @uses VerifyAddFixedPriceItemRequestType::setItem()
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
     * @return \StructType\VerifyAddFixedPriceItemRequestType
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
     * @return \StructType\VerifyAddFixedPriceItemRequestType
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
