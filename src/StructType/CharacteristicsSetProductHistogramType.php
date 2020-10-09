<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CharacteristicsSetProductHistogramType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class CharacteristicsSetProductHistogramType extends AbstractStructBase
{
    /**
     * The HistogramEntry
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\HistogramEntryType[]
     */
    public $HistogramEntry;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for CharacteristicsSetProductHistogramType
     * @uses CharacteristicsSetProductHistogramType::setHistogramEntry()
     * @uses CharacteristicsSetProductHistogramType::setAny()
     * @param \StructType\HistogramEntryType[] $histogramEntry
     * @param \DOMDocument $any
     */
    public function __construct(array $histogramEntry = array(), \DOMDocument $any = null)
    {
        $this
            ->setHistogramEntry($histogramEntry)
            ->setAny($any);
    }
    /**
     * Get HistogramEntry value
     * @return \StructType\HistogramEntryType[]|null
     */
    public function getHistogramEntry()
    {
        return $this->HistogramEntry;
    }
    /**
     * This method is responsible for validating the values passed to the setHistogramEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHistogramEntry method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHistogramEntryForArrayConstraintsFromSetHistogramEntry(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $characteristicsSetProductHistogramTypeHistogramEntryItem) {
            // validation for constraint: itemType
            if (!$characteristicsSetProductHistogramTypeHistogramEntryItem instanceof \StructType\HistogramEntryType) {
                $invalidValues[] = is_object($characteristicsSetProductHistogramTypeHistogramEntryItem) ? get_class($characteristicsSetProductHistogramTypeHistogramEntryItem) : sprintf('%s(%s)', gettype($characteristicsSetProductHistogramTypeHistogramEntryItem), var_export($characteristicsSetProductHistogramTypeHistogramEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HistogramEntry property can only contain items of type \StructType\HistogramEntryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set HistogramEntry value
     * @throws \InvalidArgumentException
     * @param \StructType\HistogramEntryType[] $histogramEntry
     * @return \StructType\CharacteristicsSetProductHistogramType
     */
    public function setHistogramEntry(array $histogramEntry = array())
    {
        // validation for constraint: array
        if ('' !== ($histogramEntryArrayErrorMessage = self::validateHistogramEntryForArrayConstraintsFromSetHistogramEntry($histogramEntry))) {
            throw new \InvalidArgumentException($histogramEntryArrayErrorMessage, __LINE__);
        }
        $this->HistogramEntry = $histogramEntry;
        return $this;
    }
    /**
     * Add item to HistogramEntry value
     * @throws \InvalidArgumentException
     * @param \StructType\HistogramEntryType $item
     * @return \StructType\CharacteristicsSetProductHistogramType
     */
    public function addToHistogramEntry(\StructType\HistogramEntryType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\HistogramEntryType) {
            throw new \InvalidArgumentException(sprintf('The HistogramEntry property can only contain items of type \StructType\HistogramEntryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->HistogramEntry[] = $item;
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
     * @return \StructType\CharacteristicsSetProductHistogramType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
