<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CharacteristicType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class CharacteristicType extends AbstractStructBase
{
    /**
     * The AttributeID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var int
     */
    public $AttributeID;
    /**
     * The DateFormat
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $DateFormat;
    /**
     * The DisplaySequence
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $DisplaySequence;
    /**
     * The DisplayUOM
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $DisplayUOM;
    /**
     * The Label
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\LabelType
     */
    public $Label;
    /**
     * The SortOrder
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $SortOrder;
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
     * Constructor method for CharacteristicType
     * @uses CharacteristicType::setAttributeID()
     * @uses CharacteristicType::setDateFormat()
     * @uses CharacteristicType::setDisplaySequence()
     * @uses CharacteristicType::setDisplayUOM()
     * @uses CharacteristicType::setLabel()
     * @uses CharacteristicType::setSortOrder()
     * @uses CharacteristicType::setValueList()
     * @uses CharacteristicType::setAny()
     * @param int $attributeID
     * @param string $dateFormat
     * @param string $displaySequence
     * @param string $displayUOM
     * @param \StructType\LabelType $label
     * @param string $sortOrder
     * @param \StructType\ValType[] $valueList
     * @param \DOMDocument $any
     */
    public function __construct($attributeID = null, $dateFormat = null, $displaySequence = null, $displayUOM = null, \StructType\LabelType $label = null, $sortOrder = null, array $valueList = array(), \DOMDocument $any = null)
    {
        $this
            ->setAttributeID($attributeID)
            ->setDateFormat($dateFormat)
            ->setDisplaySequence($displaySequence)
            ->setDisplayUOM($displayUOM)
            ->setLabel($label)
            ->setSortOrder($sortOrder)
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
     * @return \StructType\CharacteristicType
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
     * Get DateFormat value
     * @return string|null
     */
    public function getDateFormat()
    {
        return $this->DateFormat;
    }
    /**
     * Set DateFormat value
     * @param string $dateFormat
     * @return \StructType\CharacteristicType
     */
    public function setDateFormat($dateFormat = null)
    {
        // validation for constraint: string
        if (!is_null($dateFormat) && !is_string($dateFormat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateFormat, true), gettype($dateFormat)), __LINE__);
        }
        $this->DateFormat = $dateFormat;
        return $this;
    }
    /**
     * Get DisplaySequence value
     * @return string|null
     */
    public function getDisplaySequence()
    {
        return $this->DisplaySequence;
    }
    /**
     * Set DisplaySequence value
     * @param string $displaySequence
     * @return \StructType\CharacteristicType
     */
    public function setDisplaySequence($displaySequence = null)
    {
        // validation for constraint: string
        if (!is_null($displaySequence) && !is_string($displaySequence)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displaySequence, true), gettype($displaySequence)), __LINE__);
        }
        $this->DisplaySequence = $displaySequence;
        return $this;
    }
    /**
     * Get DisplayUOM value
     * @return string|null
     */
    public function getDisplayUOM()
    {
        return $this->DisplayUOM;
    }
    /**
     * Set DisplayUOM value
     * @param string $displayUOM
     * @return \StructType\CharacteristicType
     */
    public function setDisplayUOM($displayUOM = null)
    {
        // validation for constraint: string
        if (!is_null($displayUOM) && !is_string($displayUOM)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayUOM, true), gettype($displayUOM)), __LINE__);
        }
        $this->DisplayUOM = $displayUOM;
        return $this;
    }
    /**
     * Get Label value
     * @return \StructType\LabelType|null
     */
    public function getLabel()
    {
        return $this->Label;
    }
    /**
     * Set Label value
     * @param \StructType\LabelType $label
     * @return \StructType\CharacteristicType
     */
    public function setLabel(\StructType\LabelType $label = null)
    {
        $this->Label = $label;
        return $this;
    }
    /**
     * Get SortOrder value
     * @return string|null
     */
    public function getSortOrder()
    {
        return $this->SortOrder;
    }
    /**
     * Set SortOrder value
     * @uses \EnumType\SortOrderCodeType::valueIsValid()
     * @uses \EnumType\SortOrderCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sortOrder
     * @return \StructType\CharacteristicType
     */
    public function setSortOrder($sortOrder = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SortOrderCodeType::valueIsValid($sortOrder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SortOrderCodeType', is_array($sortOrder) ? implode(', ', $sortOrder) : var_export($sortOrder, true), implode(', ', \EnumType\SortOrderCodeType::getValidValues())), __LINE__);
        }
        $this->SortOrder = $sortOrder;
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
        foreach ($values as $characteristicTypeValueListItem) {
            // validation for constraint: itemType
            if (!$characteristicTypeValueListItem instanceof \StructType\ValType) {
                $invalidValues[] = is_object($characteristicTypeValueListItem) ? get_class($characteristicTypeValueListItem) : sprintf('%s(%s)', gettype($characteristicTypeValueListItem), var_export($characteristicTypeValueListItem, true));
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
     * @return \StructType\CharacteristicType
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
     * @return \StructType\CharacteristicType
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
     * @return \StructType\CharacteristicType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
