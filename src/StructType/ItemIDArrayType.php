<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemIDArrayType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>PromotionalSaleItemIDArray</b> container, which consists of an array of listings to which a Promotional Sale applies.
 * @subpackage Structs
 */
class ItemIDArrayType extends AbstractStructBase
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for an item listing. <br/><br/> For <b>SetPromotionalSaleListings</b>, the seller passes in the <b>ItemID</b> value for each listing that he/she wishes to become part of the Promotional Sale identified by the
     * <b>PromotionalSaleID</b> value. <br/><br/> For <b>GetPromotionalSaleDetails</b>, each listing returned in the response is a part of the Promotional Sale identified by the <b>PromotionalSaleID</b> value. | Type that represents the unique identifier
     * for an eBay listing.
     * - base: xs:string
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ItemID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ItemIDArrayType
     * @uses ItemIDArrayType::setItemID()
     * @uses ItemIDArrayType::setAny()
     * @param string[] $itemID
     * @param \DOMDocument $any
     */
    public function __construct(array $itemID = array(), \DOMDocument $any = null)
    {
        $this
            ->setItemID($itemID)
            ->setAny($any);
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
        foreach ($values as $itemIDArrayTypeItemIDItem) {
            // validation for constraint: itemType
            if (!is_string($itemIDArrayTypeItemIDItem)) {
                $invalidValues[] = is_object($itemIDArrayTypeItemIDItem) ? get_class($itemIDArrayTypeItemIDItem) : sprintf('%s(%s)', gettype($itemIDArrayTypeItemIDItem), var_export($itemIDArrayTypeItemIDItem, true));
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
     * @return \StructType\ItemIDArrayType
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
     * @return \StructType\ItemIDArrayType
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
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        $domDocument = null;
        if (!empty($this->any) && !$asString) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asString ? $this->any : $domDocument;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument $any
     * @return \StructType\ItemIDArrayType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ItemIDArrayType
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
