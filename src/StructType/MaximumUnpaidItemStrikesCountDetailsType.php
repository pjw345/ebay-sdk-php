<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MaximumUnpaidItemStrikesCountDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>MaximumUnpaidItemStrikesCount</b> container that is returned in the <b>GeteBayDetails</b> response. The <b>MaximumUnpaidItemStrikesCount</b> container consists of multiple <b>Count</b> fields with values that can
 * be used in the <b>BuyerRequirementDetails.MaximumUnpaidItemStrikesInfo.Count</b> field when using the Trading API to add, revise, or relist an item. <br><br> The <b>Item.MaximumUnpaidItemStrikesInfo</b> container in Add/Revise/Relist API calls is
 * used to block buyers with unpaid item strikes equal to or exceeding the specified <b>Count</b> value during the specified <b>Period</b> value from buying/bidding on the item.
 * @subpackage Structs
 */
class MaximumUnpaidItemStrikesCountDetailsType extends AbstractStructBase
{
    /**
     * The Count
     * Meta information extracted from the WSDL
     * - documentation: Each value returned in each <b>MaximumUnpaidItemStrikesCount.Count</b> field can be used in the <b>BuyerRequirementDetails.MaximumUnpaidItemStrikesInfo.Count</b> field when using the Trading API to add, revise, or relist an item.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    public $Count;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MaximumUnpaidItemStrikesCountDetailsType
     * @uses MaximumUnpaidItemStrikesCountDetailsType::setCount()
     * @uses MaximumUnpaidItemStrikesCountDetailsType::setAny()
     * @param int[] $count
     * @param \DOMDocument $any
     */
    public function __construct(array $count = array(), \DOMDocument $any = null)
    {
        $this
            ->setCount($count)
            ->setAny($any);
    }
    /**
     * Get Count value
     * @return int[]|null
     */
    public function getCount()
    {
        return $this->Count;
    }
    /**
     * This method is responsible for validating the values passed to the setCount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCount method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCountForArrayConstraintsFromSetCount(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $maximumUnpaidItemStrikesCountDetailsTypeCountItem) {
            // validation for constraint: itemType
            if (!(is_int($maximumUnpaidItemStrikesCountDetailsTypeCountItem) || ctype_digit($maximumUnpaidItemStrikesCountDetailsTypeCountItem))) {
                $invalidValues[] = is_object($maximumUnpaidItemStrikesCountDetailsTypeCountItem) ? get_class($maximumUnpaidItemStrikesCountDetailsTypeCountItem) : sprintf('%s(%s)', gettype($maximumUnpaidItemStrikesCountDetailsTypeCountItem), var_export($maximumUnpaidItemStrikesCountDetailsTypeCountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Count property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Count value
     * @throws \InvalidArgumentException
     * @param int[] $count
     * @return \StructType\MaximumUnpaidItemStrikesCountDetailsType
     */
    public function setCount(array $count = array())
    {
        // validation for constraint: array
        if ('' !== ($countArrayErrorMessage = self::validateCountForArrayConstraintsFromSetCount($count))) {
            throw new \InvalidArgumentException($countArrayErrorMessage, __LINE__);
        }
        $this->Count = $count;
        return $this;
    }
    /**
     * Add item to Count value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \StructType\MaximumUnpaidItemStrikesCountDetailsType
     */
    public function addToCount($item)
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new \InvalidArgumentException(sprintf('The Count property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Count[] = $item;
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
     * @return \StructType\MaximumUnpaidItemStrikesCountDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
