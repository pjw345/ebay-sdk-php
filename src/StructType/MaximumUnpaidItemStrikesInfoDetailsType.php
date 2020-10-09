<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MaximumUnpaidItemStrikesInfoDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Details of a buyer's maximum unpaid item strikes in a pre-defined time period. This is applicable only to sellers.
 * @subpackage Structs
 */
class MaximumUnpaidItemStrikesInfoDetailsType extends AbstractStructBase
{
    /**
     * The MaximumUnpaidItemStrikesCount
     * Meta information extracted from the WSDL
     * - documentation: The number of the maximum unpaid item strikes. This is applicable only to sellers.
     * - minOccurs: 0
     * @var \StructType\MaximumUnpaidItemStrikesCountDetailsType
     */
    public $MaximumUnpaidItemStrikesCount;
    /**
     * The MaximumUnpaidItemStrikesDuration
     * Meta information extracted from the WSDL
     * - documentation: Range of time used to determine maximum unpaid item count. This is applicable only to sellers.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\MaximumUnpaidItemStrikesDurationDetailsType[]
     */
    public $MaximumUnpaidItemStrikesDuration;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MaximumUnpaidItemStrikesInfoDetailsType
     * @uses MaximumUnpaidItemStrikesInfoDetailsType::setMaximumUnpaidItemStrikesCount()
     * @uses MaximumUnpaidItemStrikesInfoDetailsType::setMaximumUnpaidItemStrikesDuration()
     * @uses MaximumUnpaidItemStrikesInfoDetailsType::setAny()
     * @param \StructType\MaximumUnpaidItemStrikesCountDetailsType $maximumUnpaidItemStrikesCount
     * @param \StructType\MaximumUnpaidItemStrikesDurationDetailsType[] $maximumUnpaidItemStrikesDuration
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\MaximumUnpaidItemStrikesCountDetailsType $maximumUnpaidItemStrikesCount = null, array $maximumUnpaidItemStrikesDuration = array(), \DOMDocument $any = null)
    {
        $this
            ->setMaximumUnpaidItemStrikesCount($maximumUnpaidItemStrikesCount)
            ->setMaximumUnpaidItemStrikesDuration($maximumUnpaidItemStrikesDuration)
            ->setAny($any);
    }
    /**
     * Get MaximumUnpaidItemStrikesCount value
     * @return \StructType\MaximumUnpaidItemStrikesCountDetailsType|null
     */
    public function getMaximumUnpaidItemStrikesCount()
    {
        return $this->MaximumUnpaidItemStrikesCount;
    }
    /**
     * Set MaximumUnpaidItemStrikesCount value
     * @param \StructType\MaximumUnpaidItemStrikesCountDetailsType $maximumUnpaidItemStrikesCount
     * @return \StructType\MaximumUnpaidItemStrikesInfoDetailsType
     */
    public function setMaximumUnpaidItemStrikesCount(\StructType\MaximumUnpaidItemStrikesCountDetailsType $maximumUnpaidItemStrikesCount = null)
    {
        $this->MaximumUnpaidItemStrikesCount = $maximumUnpaidItemStrikesCount;
        return $this;
    }
    /**
     * Get MaximumUnpaidItemStrikesDuration value
     * @return \StructType\MaximumUnpaidItemStrikesDurationDetailsType[]|null
     */
    public function getMaximumUnpaidItemStrikesDuration()
    {
        return $this->MaximumUnpaidItemStrikesDuration;
    }
    /**
     * This method is responsible for validating the values passed to the setMaximumUnpaidItemStrikesDuration method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMaximumUnpaidItemStrikesDuration method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMaximumUnpaidItemStrikesDurationForArrayConstraintsFromSetMaximumUnpaidItemStrikesDuration(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $maximumUnpaidItemStrikesInfoDetailsTypeMaximumUnpaidItemStrikesDurationItem) {
            // validation for constraint: itemType
            if (!$maximumUnpaidItemStrikesInfoDetailsTypeMaximumUnpaidItemStrikesDurationItem instanceof \StructType\MaximumUnpaidItemStrikesDurationDetailsType) {
                $invalidValues[] = is_object($maximumUnpaidItemStrikesInfoDetailsTypeMaximumUnpaidItemStrikesDurationItem) ? get_class($maximumUnpaidItemStrikesInfoDetailsTypeMaximumUnpaidItemStrikesDurationItem) : sprintf('%s(%s)', gettype($maximumUnpaidItemStrikesInfoDetailsTypeMaximumUnpaidItemStrikesDurationItem), var_export($maximumUnpaidItemStrikesInfoDetailsTypeMaximumUnpaidItemStrikesDurationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MaximumUnpaidItemStrikesDuration property can only contain items of type \StructType\MaximumUnpaidItemStrikesDurationDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set MaximumUnpaidItemStrikesDuration value
     * @throws \InvalidArgumentException
     * @param \StructType\MaximumUnpaidItemStrikesDurationDetailsType[] $maximumUnpaidItemStrikesDuration
     * @return \StructType\MaximumUnpaidItemStrikesInfoDetailsType
     */
    public function setMaximumUnpaidItemStrikesDuration(array $maximumUnpaidItemStrikesDuration = array())
    {
        // validation for constraint: array
        if ('' !== ($maximumUnpaidItemStrikesDurationArrayErrorMessage = self::validateMaximumUnpaidItemStrikesDurationForArrayConstraintsFromSetMaximumUnpaidItemStrikesDuration($maximumUnpaidItemStrikesDuration))) {
            throw new \InvalidArgumentException($maximumUnpaidItemStrikesDurationArrayErrorMessage, __LINE__);
        }
        $this->MaximumUnpaidItemStrikesDuration = $maximumUnpaidItemStrikesDuration;
        return $this;
    }
    /**
     * Add item to MaximumUnpaidItemStrikesDuration value
     * @throws \InvalidArgumentException
     * @param \StructType\MaximumUnpaidItemStrikesDurationDetailsType $item
     * @return \StructType\MaximumUnpaidItemStrikesInfoDetailsType
     */
    public function addToMaximumUnpaidItemStrikesDuration(\StructType\MaximumUnpaidItemStrikesDurationDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\MaximumUnpaidItemStrikesDurationDetailsType) {
            throw new \InvalidArgumentException(sprintf('The MaximumUnpaidItemStrikesDuration property can only contain items of type \StructType\MaximumUnpaidItemStrikesDurationDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MaximumUnpaidItemStrikesDuration[] = $item;
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
     * @return \StructType\MaximumUnpaidItemStrikesInfoDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
