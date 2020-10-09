<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductSearchPageType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ProductSearchPageType extends AbstractStructBase
{
    /**
     * The SearchCharacteristicsSet
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\CharacteristicsSetType
     */
    public $SearchCharacteristicsSet;
    /**
     * The SearchType
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $SearchType;
    /**
     * The SortCharacteristics
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\CharacteristicType[]
     */
    public $SortCharacteristics;
    /**
     * The DataElementSet
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\DataElementSetType[]
     */
    public $DataElementSet;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ProductSearchPageType
     * @uses ProductSearchPageType::setSearchCharacteristicsSet()
     * @uses ProductSearchPageType::setSearchType()
     * @uses ProductSearchPageType::setSortCharacteristics()
     * @uses ProductSearchPageType::setDataElementSet()
     * @uses ProductSearchPageType::setAny()
     * @param \StructType\CharacteristicsSetType $searchCharacteristicsSet
     * @param string $searchType
     * @param \StructType\CharacteristicType[] $sortCharacteristics
     * @param \StructType\DataElementSetType[] $dataElementSet
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\CharacteristicsSetType $searchCharacteristicsSet = null, $searchType = null, array $sortCharacteristics = array(), array $dataElementSet = array(), \DOMDocument $any = null)
    {
        $this
            ->setSearchCharacteristicsSet($searchCharacteristicsSet)
            ->setSearchType($searchType)
            ->setSortCharacteristics($sortCharacteristics)
            ->setDataElementSet($dataElementSet)
            ->setAny($any);
    }
    /**
     * Get SearchCharacteristicsSet value
     * @return \StructType\CharacteristicsSetType|null
     */
    public function getSearchCharacteristicsSet()
    {
        return $this->SearchCharacteristicsSet;
    }
    /**
     * Set SearchCharacteristicsSet value
     * @param \StructType\CharacteristicsSetType $searchCharacteristicsSet
     * @return \StructType\ProductSearchPageType
     */
    public function setSearchCharacteristicsSet(\StructType\CharacteristicsSetType $searchCharacteristicsSet = null)
    {
        $this->SearchCharacteristicsSet = $searchCharacteristicsSet;
        return $this;
    }
    /**
     * Get SearchType value
     * @return string|null
     */
    public function getSearchType()
    {
        return $this->SearchType;
    }
    /**
     * Set SearchType value
     * @uses \EnumType\CharacteristicsSearchCodeType::valueIsValid()
     * @uses \EnumType\CharacteristicsSearchCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $searchType
     * @return \StructType\ProductSearchPageType
     */
    public function setSearchType($searchType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CharacteristicsSearchCodeType::valueIsValid($searchType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CharacteristicsSearchCodeType', is_array($searchType) ? implode(', ', $searchType) : var_export($searchType, true), implode(', ', \EnumType\CharacteristicsSearchCodeType::getValidValues())), __LINE__);
        }
        $this->SearchType = $searchType;
        return $this;
    }
    /**
     * Get SortCharacteristics value
     * @return \StructType\CharacteristicType[]|null
     */
    public function getSortCharacteristics()
    {
        return $this->SortCharacteristics;
    }
    /**
     * This method is responsible for validating the values passed to the setSortCharacteristics method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSortCharacteristics method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSortCharacteristicsForArrayConstraintsFromSetSortCharacteristics(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $productSearchPageTypeSortCharacteristicsItem) {
            // validation for constraint: itemType
            if (!$productSearchPageTypeSortCharacteristicsItem instanceof \StructType\CharacteristicType) {
                $invalidValues[] = is_object($productSearchPageTypeSortCharacteristicsItem) ? get_class($productSearchPageTypeSortCharacteristicsItem) : sprintf('%s(%s)', gettype($productSearchPageTypeSortCharacteristicsItem), var_export($productSearchPageTypeSortCharacteristicsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SortCharacteristics property can only contain items of type \StructType\CharacteristicType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SortCharacteristics value
     * @throws \InvalidArgumentException
     * @param \StructType\CharacteristicType[] $sortCharacteristics
     * @return \StructType\ProductSearchPageType
     */
    public function setSortCharacteristics(array $sortCharacteristics = array())
    {
        // validation for constraint: array
        if ('' !== ($sortCharacteristicsArrayErrorMessage = self::validateSortCharacteristicsForArrayConstraintsFromSetSortCharacteristics($sortCharacteristics))) {
            throw new \InvalidArgumentException($sortCharacteristicsArrayErrorMessage, __LINE__);
        }
        $this->SortCharacteristics = $sortCharacteristics;
        return $this;
    }
    /**
     * Add item to SortCharacteristics value
     * @throws \InvalidArgumentException
     * @param \StructType\CharacteristicType $item
     * @return \StructType\ProductSearchPageType
     */
    public function addToSortCharacteristics(\StructType\CharacteristicType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CharacteristicType) {
            throw new \InvalidArgumentException(sprintf('The SortCharacteristics property can only contain items of type \StructType\CharacteristicType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SortCharacteristics[] = $item;
        return $this;
    }
    /**
     * Get DataElementSet value
     * @return \StructType\DataElementSetType[]|null
     */
    public function getDataElementSet()
    {
        return $this->DataElementSet;
    }
    /**
     * This method is responsible for validating the values passed to the setDataElementSet method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDataElementSet method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDataElementSetForArrayConstraintsFromSetDataElementSet(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $productSearchPageTypeDataElementSetItem) {
            // validation for constraint: itemType
            if (!$productSearchPageTypeDataElementSetItem instanceof \StructType\DataElementSetType) {
                $invalidValues[] = is_object($productSearchPageTypeDataElementSetItem) ? get_class($productSearchPageTypeDataElementSetItem) : sprintf('%s(%s)', gettype($productSearchPageTypeDataElementSetItem), var_export($productSearchPageTypeDataElementSetItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DataElementSet property can only contain items of type \StructType\DataElementSetType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DataElementSet value
     * @throws \InvalidArgumentException
     * @param \StructType\DataElementSetType[] $dataElementSet
     * @return \StructType\ProductSearchPageType
     */
    public function setDataElementSet(array $dataElementSet = array())
    {
        // validation for constraint: array
        if ('' !== ($dataElementSetArrayErrorMessage = self::validateDataElementSetForArrayConstraintsFromSetDataElementSet($dataElementSet))) {
            throw new \InvalidArgumentException($dataElementSetArrayErrorMessage, __LINE__);
        }
        $this->DataElementSet = $dataElementSet;
        return $this;
    }
    /**
     * Add item to DataElementSet value
     * @throws \InvalidArgumentException
     * @param \StructType\DataElementSetType $item
     * @return \StructType\ProductSearchPageType
     */
    public function addToDataElementSet(\StructType\DataElementSetType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DataElementSetType) {
            throw new \InvalidArgumentException(sprintf('The DataElementSet property can only contain items of type \StructType\DataElementSetType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DataElementSet[] = $item;
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
     * @return \StructType\ProductSearchPageType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
