<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InventoryFeesType StructType
 * Meta information extracted from the WSDL
 * - documentation: This is used in the <b>ReviseInventoryStatus</b> response to provide the set of fees associated with each unique <b>ItemID</b>.
 * @subpackage Structs
 */
class InventoryFeesType extends AbstractStructBase
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the listing being changed. <br> <br> The <b>ReviseInventoryStatus</b> response includes a separate set of fees for each item that was successfully revised.<br> <br> Use the <b>ItemID</b> to correlate the Fees
     * data with the Inventory Status data in the response. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The Fee
     * Meta information extracted from the WSDL
     * - documentation: Contains the data for one fee (such as name and amount).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\FeeType[]
     */
    public $Fee;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for InventoryFeesType
     * @uses InventoryFeesType::setItemID()
     * @uses InventoryFeesType::setFee()
     * @uses InventoryFeesType::setAny()
     * @param string $itemID
     * @param \StructType\FeeType[] $fee
     * @param \DOMDocument $any
     */
    public function __construct($itemID = null, array $fee = array(), \DOMDocument $any = null)
    {
        $this
            ->setItemID($itemID)
            ->setFee($fee)
            ->setAny($any);
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \StructType\InventoryFeesType
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemID, true), gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Get Fee value
     * @return \StructType\FeeType[]|null
     */
    public function getFee()
    {
        return $this->Fee;
    }
    /**
     * This method is responsible for validating the values passed to the setFee method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFee method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFeeForArrayConstraintsFromSetFee(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $inventoryFeesTypeFeeItem) {
            // validation for constraint: itemType
            if (!$inventoryFeesTypeFeeItem instanceof \StructType\FeeType) {
                $invalidValues[] = is_object($inventoryFeesTypeFeeItem) ? get_class($inventoryFeesTypeFeeItem) : sprintf('%s(%s)', gettype($inventoryFeesTypeFeeItem), var_export($inventoryFeesTypeFeeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Fee property can only contain items of type \StructType\FeeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Fee value
     * @throws \InvalidArgumentException
     * @param \StructType\FeeType[] $fee
     * @return \StructType\InventoryFeesType
     */
    public function setFee(array $fee = array())
    {
        // validation for constraint: array
        if ('' !== ($feeArrayErrorMessage = self::validateFeeForArrayConstraintsFromSetFee($fee))) {
            throw new \InvalidArgumentException($feeArrayErrorMessage, __LINE__);
        }
        $this->Fee = $fee;
        return $this;
    }
    /**
     * Add item to Fee value
     * @throws \InvalidArgumentException
     * @param \StructType\FeeType $item
     * @return \StructType\InventoryFeesType
     */
    public function addToFee(\StructType\FeeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\FeeType) {
            throw new \InvalidArgumentException(sprintf('The Fee property can only contain items of type \StructType\FeeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Fee[] = $item;
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
     * @return \StructType\InventoryFeesType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
