<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemBestOffersArrayType StructType
 * Meta information extracted from the WSDL
 * - documentation: A collection of details about the Best Offers received for a specific item. Empty if there are no Best Offers. Includes the buyer and seller messages only if the <code>ReturnAll</code> detail level is used.
 * @subpackage Structs
 */
class ItemBestOffersArrayType extends AbstractStructBase
{
    /**
     * The ItemBestOffers
     * Meta information extracted from the WSDL
     * - documentation: A collection of details about the Best Offers received for a specific item. Empty if there are no Best Offers. Includes the buyer and seller messages only if the <code>ReturnAll</code> detail level is used.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ItemBestOffersType[]
     */
    public $ItemBestOffers;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ItemBestOffersArrayType
     * @uses ItemBestOffersArrayType::setItemBestOffers()
     * @uses ItemBestOffersArrayType::setAny()
     * @param \StructType\ItemBestOffersType[] $itemBestOffers
     * @param \DOMDocument $any
     */
    public function __construct(array $itemBestOffers = array(), \DOMDocument $any = null)
    {
        $this
            ->setItemBestOffers($itemBestOffers)
            ->setAny($any);
    }
    /**
     * Get ItemBestOffers value
     * @return \StructType\ItemBestOffersType[]|null
     */
    public function getItemBestOffers()
    {
        return $this->ItemBestOffers;
    }
    /**
     * This method is responsible for validating the values passed to the setItemBestOffers method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemBestOffers method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemBestOffersForArrayConstraintsFromSetItemBestOffers(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $itemBestOffersArrayTypeItemBestOffersItem) {
            // validation for constraint: itemType
            if (!$itemBestOffersArrayTypeItemBestOffersItem instanceof \StructType\ItemBestOffersType) {
                $invalidValues[] = is_object($itemBestOffersArrayTypeItemBestOffersItem) ? get_class($itemBestOffersArrayTypeItemBestOffersItem) : sprintf('%s(%s)', gettype($itemBestOffersArrayTypeItemBestOffersItem), var_export($itemBestOffersArrayTypeItemBestOffersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ItemBestOffers property can only contain items of type \StructType\ItemBestOffersType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ItemBestOffers value
     * @throws \InvalidArgumentException
     * @param \StructType\ItemBestOffersType[] $itemBestOffers
     * @return \StructType\ItemBestOffersArrayType
     */
    public function setItemBestOffers(array $itemBestOffers = array())
    {
        // validation for constraint: array
        if ('' !== ($itemBestOffersArrayErrorMessage = self::validateItemBestOffersForArrayConstraintsFromSetItemBestOffers($itemBestOffers))) {
            throw new \InvalidArgumentException($itemBestOffersArrayErrorMessage, __LINE__);
        }
        $this->ItemBestOffers = $itemBestOffers;
        return $this;
    }
    /**
     * Add item to ItemBestOffers value
     * @throws \InvalidArgumentException
     * @param \StructType\ItemBestOffersType $item
     * @return \StructType\ItemBestOffersArrayType
     */
    public function addToItemBestOffers(\StructType\ItemBestOffersType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ItemBestOffersType) {
            throw new \InvalidArgumentException(sprintf('The ItemBestOffers property can only contain items of type \StructType\ItemBestOffersType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ItemBestOffers[] = $item;
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
     * @return \StructType\ItemBestOffersArrayType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
