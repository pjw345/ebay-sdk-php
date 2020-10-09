<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttributeType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is only applicable for Half.com listings, and since the Half.com site was taken down, this type is no longer applicable.
 * @subpackage Structs
 */
class AttributeType extends AbstractStructBase
{
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - documentation: <b>AttributeType</b> and all of its elements are only applicable for Half.com listings, and since the Half.com site was taken down, this field is no longer applicable.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ValType[]
     */
    public $Value;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * The attributeID
     * Meta information extracted from the WSDL
     * - documentation: <b>AttributeType</b> and all of its elements are only applicable for Half.com listings, and since the Half.com site was taken down, this field is no longer applicable.
     * @var int
     */
    public $attributeID;
    /**
     * The attributeLabel
     * Meta information extracted from the WSDL
     * - documentation: <b>AttributeType</b> and all of its elements are only applicable for Half.com listings, and since the Half.com site was taken down, this field is no longer applicable.
     * @var string
     */
    public $attributeLabel;
    /**
     * Constructor method for AttributeType
     * @uses AttributeType::setValue()
     * @uses AttributeType::setAny()
     * @uses AttributeType::setAttributeID()
     * @uses AttributeType::setAttributeLabel()
     * @param \StructType\ValType[] $value
     * @param \DOMDocument $any
     * @param int $attributeID
     * @param string $attributeLabel
     */
    public function __construct(array $value = array(), \DOMDocument $any = null, $attributeID = null, $attributeLabel = null)
    {
        $this
            ->setValue($value)
            ->setAny($any)
            ->setAttributeID($attributeID)
            ->setAttributeLabel($attributeLabel);
    }
    /**
     * Get Value value
     * @return \StructType\ValType[]|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * This method is responsible for validating the values passed to the setValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateValueForArrayConstraintsFromSetValue(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $attributeTypeValueItem) {
            // validation for constraint: itemType
            if (!$attributeTypeValueItem instanceof \StructType\ValType) {
                $invalidValues[] = is_object($attributeTypeValueItem) ? get_class($attributeTypeValueItem) : sprintf('%s(%s)', gettype($attributeTypeValueItem), var_export($attributeTypeValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Value property can only contain items of type \StructType\ValType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Value value
     * @throws \InvalidArgumentException
     * @param \StructType\ValType[] $value
     * @return \StructType\AttributeType
     */
    public function setValue(array $value = array())
    {
        // validation for constraint: array
        if ('' !== ($valueArrayErrorMessage = self::validateValueForArrayConstraintsFromSetValue($value))) {
            throw new \InvalidArgumentException($valueArrayErrorMessage, __LINE__);
        }
        $this->Value = $value;
        return $this;
    }
    /**
     * Add item to Value value
     * @throws \InvalidArgumentException
     * @param \StructType\ValType $item
     * @return \StructType\AttributeType
     */
    public function addToValue(\StructType\ValType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ValType) {
            throw new \InvalidArgumentException(sprintf('The Value property can only contain items of type \StructType\ValType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Value[] = $item;
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
     * @return \StructType\AttributeType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
    /**
     * Get attributeID value
     * @return int|null
     */
    public function getAttributeID()
    {
        return $this->attributeID;
    }
    /**
     * Set attributeID value
     * @param int $attributeID
     * @return \StructType\AttributeType
     */
    public function setAttributeID($attributeID = null)
    {
        // validation for constraint: int
        if (!is_null($attributeID) && !(is_int($attributeID) || ctype_digit($attributeID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($attributeID, true), gettype($attributeID)), __LINE__);
        }
        $this->attributeID = $attributeID;
        return $this;
    }
    /**
     * Get attributeLabel value
     * @return string|null
     */
    public function getAttributeLabel()
    {
        return $this->attributeLabel;
    }
    /**
     * Set attributeLabel value
     * @param string $attributeLabel
     * @return \StructType\AttributeType
     */
    public function setAttributeLabel($attributeLabel = null)
    {
        // validation for constraint: string
        if (!is_null($attributeLabel) && !is_string($attributeLabel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attributeLabel, true), gettype($attributeLabel)), __LINE__);
        }
        $this->attributeLabel = $attributeLabel;
        return $this;
    }
}
