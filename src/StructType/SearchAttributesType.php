<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchAttributesType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class SearchAttributesType extends AbstractStructBase
{
    /**
     * The AttributeID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var int
     */
    public $AttributeID;
    /**
     * The DateSpecifier
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $DateSpecifier;
    /**
     * The RangeSpecifier
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $RangeSpecifier;
    /**
     * The ValueList
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ValType[]
     */
    public $ValueList;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SearchAttributesType
     * @uses SearchAttributesType::setAttributeID()
     * @uses SearchAttributesType::setDateSpecifier()
     * @uses SearchAttributesType::setRangeSpecifier()
     * @uses SearchAttributesType::setValueList()
     * @uses SearchAttributesType::setAny()
     * @param int $attributeID
     * @param string $dateSpecifier
     * @param string $rangeSpecifier
     * @param \StructType\ValType[] $valueList
     * @param \DOMDocument $any
     */
    public function __construct($attributeID = null, $dateSpecifier = null, $rangeSpecifier = null, array $valueList = array(), \DOMDocument $any = null)
    {
        $this
            ->setAttributeID($attributeID)
            ->setDateSpecifier($dateSpecifier)
            ->setRangeSpecifier($rangeSpecifier)
            ->setValueList($valueList)
            ->setAny($any);
    }
    /**
     * Get AttributeID value
     * @return int|null
     */
    public function getAttributeID()
    {
        return $this->AttributeID;
    }
    /**
     * Set AttributeID value
     * @param int $attributeID
     * @return \StructType\SearchAttributesType
     */
    public function setAttributeID($attributeID = null)
    {
        // validation for constraint: int
        if (!is_null($attributeID) && !(is_int($attributeID) || ctype_digit($attributeID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($attributeID, true), gettype($attributeID)), __LINE__);
        }
        $this->AttributeID = $attributeID;
        return $this;
    }
    /**
     * Get DateSpecifier value
     * @return string|null
     */
    public function getDateSpecifier()
    {
        return $this->DateSpecifier;
    }
    /**
     * Set DateSpecifier value
     * @uses \EnumType\DateSpecifierCodeType::valueIsValid()
     * @uses \EnumType\DateSpecifierCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $dateSpecifier
     * @return \StructType\SearchAttributesType
     */
    public function setDateSpecifier($dateSpecifier = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DateSpecifierCodeType::valueIsValid($dateSpecifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DateSpecifierCodeType', is_array($dateSpecifier) ? implode(', ', $dateSpecifier) : var_export($dateSpecifier, true), implode(', ', \EnumType\DateSpecifierCodeType::getValidValues())), __LINE__);
        }
        $this->DateSpecifier = $dateSpecifier;
        return $this;
    }
    /**
     * Get RangeSpecifier value
     * @return string|null
     */
    public function getRangeSpecifier()
    {
        return $this->RangeSpecifier;
    }
    /**
     * Set RangeSpecifier value
     * @uses \EnumType\RangeCodeType::valueIsValid()
     * @uses \EnumType\RangeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $rangeSpecifier
     * @return \StructType\SearchAttributesType
     */
    public function setRangeSpecifier($rangeSpecifier = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\RangeCodeType::valueIsValid($rangeSpecifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\RangeCodeType', is_array($rangeSpecifier) ? implode(', ', $rangeSpecifier) : var_export($rangeSpecifier, true), implode(', ', \EnumType\RangeCodeType::getValidValues())), __LINE__);
        }
        $this->RangeSpecifier = $rangeSpecifier;
        return $this;
    }
    /**
     * Get ValueList value
     * @return \StructType\ValType[]|null
     */
    public function getValueList()
    {
        return $this->ValueList;
    }
    /**
     * This method is responsible for validating the values passed to the setValueList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setValueList method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateValueListForArrayConstraintsFromSetValueList(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchAttributesTypeValueListItem) {
            // validation for constraint: itemType
            if (!$searchAttributesTypeValueListItem instanceof \StructType\ValType) {
                $invalidValues[] = is_object($searchAttributesTypeValueListItem) ? get_class($searchAttributesTypeValueListItem) : sprintf('%s(%s)', gettype($searchAttributesTypeValueListItem), var_export($searchAttributesTypeValueListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ValueList property can only contain items of type \StructType\ValType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ValueList value
     * @throws \InvalidArgumentException
     * @param \StructType\ValType[] $valueList
     * @return \StructType\SearchAttributesType
     */
    public function setValueList(array $valueList = array())
    {
        // validation for constraint: array
        if ('' !== ($valueListArrayErrorMessage = self::validateValueListForArrayConstraintsFromSetValueList($valueList))) {
            throw new \InvalidArgumentException($valueListArrayErrorMessage, __LINE__);
        }
        $this->ValueList = $valueList;
        return $this;
    }
    /**
     * Add item to ValueList value
     * @throws \InvalidArgumentException
     * @param \StructType\ValType $item
     * @return \StructType\SearchAttributesType
     */
    public function addToValueList(\StructType\ValType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ValType) {
            throw new \InvalidArgumentException(sprintf('The ValueList property can only contain items of type \StructType\ValType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ValueList[] = $item;
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
     * @return \StructType\SearchAttributesType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
