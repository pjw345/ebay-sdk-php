<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SiteWideCharacteristicsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class SiteWideCharacteristicsType extends AbstractStructBase
{
    /**
     * The CharacteristicsSet
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\CharacteristicsSetType
     */
    public $CharacteristicsSet;
    /**
     * The ExcludeCategoryID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ExcludeCategoryID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SiteWideCharacteristicsType
     * @uses SiteWideCharacteristicsType::setCharacteristicsSet()
     * @uses SiteWideCharacteristicsType::setExcludeCategoryID()
     * @uses SiteWideCharacteristicsType::setAny()
     * @param \StructType\CharacteristicsSetType $characteristicsSet
     * @param string[] $excludeCategoryID
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\CharacteristicsSetType $characteristicsSet = null, array $excludeCategoryID = array(), \DOMDocument $any = null)
    {
        $this
            ->setCharacteristicsSet($characteristicsSet)
            ->setExcludeCategoryID($excludeCategoryID)
            ->setAny($any);
    }
    /**
     * Get CharacteristicsSet value
     * @return \StructType\CharacteristicsSetType|null
     */
    public function getCharacteristicsSet()
    {
        return $this->CharacteristicsSet;
    }
    /**
     * Set CharacteristicsSet value
     * @param \StructType\CharacteristicsSetType $characteristicsSet
     * @return \StructType\SiteWideCharacteristicsType
     */
    public function setCharacteristicsSet(\StructType\CharacteristicsSetType $characteristicsSet = null)
    {
        $this->CharacteristicsSet = $characteristicsSet;
        return $this;
    }
    /**
     * Get ExcludeCategoryID value
     * @return string[]|null
     */
    public function getExcludeCategoryID()
    {
        return $this->ExcludeCategoryID;
    }
    /**
     * This method is responsible for validating the values passed to the setExcludeCategoryID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExcludeCategoryID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExcludeCategoryIDForArrayConstraintsFromSetExcludeCategoryID(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $siteWideCharacteristicsTypeExcludeCategoryIDItem) {
            // validation for constraint: itemType
            if (!is_string($siteWideCharacteristicsTypeExcludeCategoryIDItem)) {
                $invalidValues[] = is_object($siteWideCharacteristicsTypeExcludeCategoryIDItem) ? get_class($siteWideCharacteristicsTypeExcludeCategoryIDItem) : sprintf('%s(%s)', gettype($siteWideCharacteristicsTypeExcludeCategoryIDItem), var_export($siteWideCharacteristicsTypeExcludeCategoryIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExcludeCategoryID property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ExcludeCategoryID value
     * @throws \InvalidArgumentException
     * @param string[] $excludeCategoryID
     * @return \StructType\SiteWideCharacteristicsType
     */
    public function setExcludeCategoryID(array $excludeCategoryID = array())
    {
        // validation for constraint: array
        if ('' !== ($excludeCategoryIDArrayErrorMessage = self::validateExcludeCategoryIDForArrayConstraintsFromSetExcludeCategoryID($excludeCategoryID))) {
            throw new \InvalidArgumentException($excludeCategoryIDArrayErrorMessage, __LINE__);
        }
        $this->ExcludeCategoryID = $excludeCategoryID;
        return $this;
    }
    /**
     * Add item to ExcludeCategoryID value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\SiteWideCharacteristicsType
     */
    public function addToExcludeCategoryID($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ExcludeCategoryID property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ExcludeCategoryID[] = $item;
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
     * @return \StructType\SiteWideCharacteristicsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
