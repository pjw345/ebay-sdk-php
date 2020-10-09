<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttributeSetType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class AttributeSetType extends AbstractStructBase
{
    /**
     * The Attribute
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\AttributeType[]
     */
    public $Attribute;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * The attributeSetID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var int
     */
    public $attributeSetID;
    /**
     * The attributeSetVersion
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - use: optional
     * @var string
     */
    public $attributeSetVersion;
    /**
     * Constructor method for AttributeSetType
     * @uses AttributeSetType::setAttribute()
     * @uses AttributeSetType::setAny()
     * @uses AttributeSetType::setAttributeSetID()
     * @uses AttributeSetType::setAttributeSetVersion()
     * @param \StructType\AttributeType[] $attribute
     * @param \DOMDocument $any
     * @param int $attributeSetID
     * @param string $attributeSetVersion
     */
    public function __construct(array $attribute = array(), \DOMDocument $any = null, $attributeSetID = null, $attributeSetVersion = null)
    {
        $this
            ->setAttribute($attribute)
            ->setAny($any)
            ->setAttributeSetID($attributeSetID)
            ->setAttributeSetVersion($attributeSetVersion);
    }
    /**
     * Get Attribute value
     * @return \StructType\AttributeType[]|null
     */
    public function getAttribute()
    {
        return $this->Attribute;
    }
    /**
     * This method is responsible for validating the values passed to the setAttribute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAttribute method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAttributeForArrayConstraintsFromSetAttribute(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $attributeSetTypeAttributeItem) {
            // validation for constraint: itemType
            if (!$attributeSetTypeAttributeItem instanceof \StructType\AttributeType) {
                $invalidValues[] = is_object($attributeSetTypeAttributeItem) ? get_class($attributeSetTypeAttributeItem) : sprintf('%s(%s)', gettype($attributeSetTypeAttributeItem), var_export($attributeSetTypeAttributeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Attribute property can only contain items of type \StructType\AttributeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Attribute value
     * @throws \InvalidArgumentException
     * @param \StructType\AttributeType[] $attribute
     * @return \StructType\AttributeSetType
     */
    public function setAttribute(array $attribute = array())
    {
        // validation for constraint: array
        if ('' !== ($attributeArrayErrorMessage = self::validateAttributeForArrayConstraintsFromSetAttribute($attribute))) {
            throw new \InvalidArgumentException($attributeArrayErrorMessage, __LINE__);
        }
        $this->Attribute = $attribute;
        return $this;
    }
    /**
     * Add item to Attribute value
     * @throws \InvalidArgumentException
     * @param \StructType\AttributeType $item
     * @return \StructType\AttributeSetType
     */
    public function addToAttribute(\StructType\AttributeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AttributeType) {
            throw new \InvalidArgumentException(sprintf('The Attribute property can only contain items of type \StructType\AttributeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Attribute[] = $item;
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
     * @return \StructType\AttributeSetType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
    /**
     * Get attributeSetID value
     * @return int|null
     */
    public function getAttributeSetID()
    {
        return $this->attributeSetID;
    }
    /**
     * Set attributeSetID value
     * @param int $attributeSetID
     * @return \StructType\AttributeSetType
     */
    public function setAttributeSetID($attributeSetID = null)
    {
        // validation for constraint: int
        if (!is_null($attributeSetID) && !(is_int($attributeSetID) || ctype_digit($attributeSetID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($attributeSetID, true), gettype($attributeSetID)), __LINE__);
        }
        $this->attributeSetID = $attributeSetID;
        return $this;
    }
    /**
     * Get attributeSetVersion value
     * @return string|null
     */
    public function getAttributeSetVersion()
    {
        return $this->attributeSetVersion;
    }
    /**
     * Set attributeSetVersion value
     * @param string $attributeSetVersion
     * @return \StructType\AttributeSetType
     */
    public function setAttributeSetVersion($attributeSetVersion = null)
    {
        // validation for constraint: string
        if (!is_null($attributeSetVersion) && !is_string($attributeSetVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attributeSetVersion, true), gettype($attributeSetVersion)), __LINE__);
        }
        $this->attributeSetVersion = $attributeSetVersion;
        return $this;
    }
}
