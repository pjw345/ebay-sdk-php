<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CharacteristicsSetType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class CharacteristicsSetType extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The AttributeSetID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $AttributeSetID;
    /**
     * The AttributeSetVersion
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $AttributeSetVersion;
    /**
     * The Characteristics
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\CharacteristicType[]
     */
    public $Characteristics;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for CharacteristicsSetType
     * @uses CharacteristicsSetType::setName()
     * @uses CharacteristicsSetType::setAttributeSetID()
     * @uses CharacteristicsSetType::setAttributeSetVersion()
     * @uses CharacteristicsSetType::setCharacteristics()
     * @uses CharacteristicsSetType::setAny()
     * @param string $name
     * @param int $attributeSetID
     * @param string $attributeSetVersion
     * @param \StructType\CharacteristicType[] $characteristics
     * @param \DOMDocument $any
     */
    public function __construct($name = null, $attributeSetID = null, $attributeSetVersion = null, array $characteristics = array(), \DOMDocument $any = null)
    {
        $this
            ->setName($name)
            ->setAttributeSetID($attributeSetID)
            ->setAttributeSetVersion($attributeSetVersion)
            ->setCharacteristics($characteristics)
            ->setAny($any);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\CharacteristicsSetType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get AttributeSetID value
     * @return int|null
     */
    public function getAttributeSetID()
    {
        return $this->AttributeSetID;
    }
    /**
     * Set AttributeSetID value
     * @param int $attributeSetID
     * @return \StructType\CharacteristicsSetType
     */
    public function setAttributeSetID($attributeSetID = null)
    {
        // validation for constraint: int
        if (!is_null($attributeSetID) && !(is_int($attributeSetID) || ctype_digit($attributeSetID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($attributeSetID, true), gettype($attributeSetID)), __LINE__);
        }
        $this->AttributeSetID = $attributeSetID;
        return $this;
    }
    /**
     * Get AttributeSetVersion value
     * @return string|null
     */
    public function getAttributeSetVersion()
    {
        return $this->AttributeSetVersion;
    }
    /**
     * Set AttributeSetVersion value
     * @param string $attributeSetVersion
     * @return \StructType\CharacteristicsSetType
     */
    public function setAttributeSetVersion($attributeSetVersion = null)
    {
        // validation for constraint: string
        if (!is_null($attributeSetVersion) && !is_string($attributeSetVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attributeSetVersion, true), gettype($attributeSetVersion)), __LINE__);
        }
        $this->AttributeSetVersion = $attributeSetVersion;
        return $this;
    }
    /**
     * Get Characteristics value
     * @return \StructType\CharacteristicType[]|null
     */
    public function getCharacteristics()
    {
        return $this->Characteristics;
    }
    /**
     * This method is responsible for validating the values passed to the setCharacteristics method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCharacteristics method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCharacteristicsForArrayConstraintsFromSetCharacteristics(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $characteristicsSetTypeCharacteristicsItem) {
            // validation for constraint: itemType
            if (!$characteristicsSetTypeCharacteristicsItem instanceof \StructType\CharacteristicType) {
                $invalidValues[] = is_object($characteristicsSetTypeCharacteristicsItem) ? get_class($characteristicsSetTypeCharacteristicsItem) : sprintf('%s(%s)', gettype($characteristicsSetTypeCharacteristicsItem), var_export($characteristicsSetTypeCharacteristicsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Characteristics property can only contain items of type \StructType\CharacteristicType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Characteristics value
     * @throws \InvalidArgumentException
     * @param \StructType\CharacteristicType[] $characteristics
     * @return \StructType\CharacteristicsSetType
     */
    public function setCharacteristics(array $characteristics = array())
    {
        // validation for constraint: array
        if ('' !== ($characteristicsArrayErrorMessage = self::validateCharacteristicsForArrayConstraintsFromSetCharacteristics($characteristics))) {
            throw new \InvalidArgumentException($characteristicsArrayErrorMessage, __LINE__);
        }
        $this->Characteristics = $characteristics;
        return $this;
    }
    /**
     * Add item to Characteristics value
     * @throws \InvalidArgumentException
     * @param \StructType\CharacteristicType $item
     * @return \StructType\CharacteristicsSetType
     */
    public function addToCharacteristics(\StructType\CharacteristicType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CharacteristicType) {
            throw new \InvalidArgumentException(sprintf('The Characteristics property can only contain items of type \StructType\CharacteristicType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Characteristics[] = $item;
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
     * @return \StructType\CharacteristicsSetType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
