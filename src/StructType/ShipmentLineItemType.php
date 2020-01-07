<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentLineItemType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type provides information about one or more order line items in a Global Shipping Program package.
 * @subpackage Structs
 */
class ShipmentLineItemType extends AbstractStructBase
{
    /**
     * The LineItem
     * Meta information extracted from the WSDL
     * - documentation: Contains information about one order line item in a Global Shipping Program package. The package can contain multiple units of a given order line item, and multiple order line items.
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\LineItemType[]
     */
    public $LineItem;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ShipmentLineItemType
     * @uses ShipmentLineItemType::setLineItem()
     * @uses ShipmentLineItemType::setAny()
     * @param \StructType\LineItemType[] $lineItem
     * @param \DOMDocument $any
     */
    public function __construct(array $lineItem = array(), \DOMDocument $any = null)
    {
        $this
            ->setLineItem($lineItem)
            ->setAny($any);
    }
    /**
     * Get LineItem value
     * @return \StructType\LineItemType[]
     */
    public function getLineItem()
    {
        return $this->LineItem;
    }
    /**
     * This method is responsible for validating the values passed to the setLineItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLineItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLineItemForArrayConstraintsFromSetLineItem(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $shipmentLineItemTypeLineItemItem) {
            // validation for constraint: itemType
            if (!$shipmentLineItemTypeLineItemItem instanceof \StructType\LineItemType) {
                $invalidValues[] = is_object($shipmentLineItemTypeLineItemItem) ? get_class($shipmentLineItemTypeLineItemItem) : sprintf('%s(%s)', gettype($shipmentLineItemTypeLineItemItem), var_export($shipmentLineItemTypeLineItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LineItem property can only contain items of type \StructType\LineItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set LineItem value
     * @throws \InvalidArgumentException
     * @param \StructType\LineItemType[] $lineItem
     * @return \StructType\ShipmentLineItemType
     */
    public function setLineItem(array $lineItem = array())
    {
        // validation for constraint: array
        if ('' !== ($lineItemArrayErrorMessage = self::validateLineItemForArrayConstraintsFromSetLineItem($lineItem))) {
            throw new \InvalidArgumentException($lineItemArrayErrorMessage, __LINE__);
        }
        $this->LineItem = $lineItem;
        return $this;
    }
    /**
     * Add item to LineItem value
     * @throws \InvalidArgumentException
     * @param \StructType\LineItemType $item
     * @return \StructType\ShipmentLineItemType
     */
    public function addToLineItem(\StructType\LineItemType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\LineItemType) {
            throw new \InvalidArgumentException(sprintf('The LineItem property can only contain items of type \StructType\LineItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->LineItem[] = $item;
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
     * @return \StructType\ShipmentLineItemType
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
     * @return \StructType\ShipmentLineItemType
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
