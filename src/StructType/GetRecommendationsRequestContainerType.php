<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRecommendationsRequestContainerType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class GetRecommendationsRequestContainerType extends AbstractStructBase
{
    /**
     * The ListingFlow
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ListingFlow;
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\ItemType
     */
    public $Item;
    /**
     * The RecommendationEngine
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $RecommendationEngine;
    /**
     * The Query
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Query;
    /**
     * The CorrelationID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $CorrelationID;
    /**
     * The DeletedField
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $DeletedField;
    /**
     * The ExcludeRelationships
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $ExcludeRelationships;
    /**
     * The IncludeConfidence
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeConfidence;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for GetRecommendationsRequestContainerType
     * @uses GetRecommendationsRequestContainerType::setListingFlow()
     * @uses GetRecommendationsRequestContainerType::setItem()
     * @uses GetRecommendationsRequestContainerType::setRecommendationEngine()
     * @uses GetRecommendationsRequestContainerType::setQuery()
     * @uses GetRecommendationsRequestContainerType::setCorrelationID()
     * @uses GetRecommendationsRequestContainerType::setDeletedField()
     * @uses GetRecommendationsRequestContainerType::setExcludeRelationships()
     * @uses GetRecommendationsRequestContainerType::setIncludeConfidence()
     * @uses GetRecommendationsRequestContainerType::setAny()
     * @param string $listingFlow
     * @param \StructType\ItemType $item
     * @param string[] $recommendationEngine
     * @param string $query
     * @param string $correlationID
     * @param string[] $deletedField
     * @param bool $excludeRelationships
     * @param bool $includeConfidence
     * @param \DOMDocument $any
     */
    public function __construct($listingFlow = null, \StructType\ItemType $item = null, array $recommendationEngine = array(), $query = null, $correlationID = null, array $deletedField = array(), $excludeRelationships = null, $includeConfidence = null, \DOMDocument $any = null)
    {
        $this
            ->setListingFlow($listingFlow)
            ->setItem($item)
            ->setRecommendationEngine($recommendationEngine)
            ->setQuery($query)
            ->setCorrelationID($correlationID)
            ->setDeletedField($deletedField)
            ->setExcludeRelationships($excludeRelationships)
            ->setIncludeConfidence($includeConfidence)
            ->setAny($any);
    }
    /**
     * Get ListingFlow value
     * @return string|null
     */
    public function getListingFlow()
    {
        return $this->ListingFlow;
    }
    /**
     * Set ListingFlow value
     * @uses \EnumType\ListingFlowCodeType::valueIsValid()
     * @uses \EnumType\ListingFlowCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $listingFlow
     * @return \StructType\GetRecommendationsRequestContainerType
     */
    public function setListingFlow($listingFlow = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ListingFlowCodeType::valueIsValid($listingFlow)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ListingFlowCodeType', is_array($listingFlow) ? implode(', ', $listingFlow) : var_export($listingFlow, true), implode(', ', \EnumType\ListingFlowCodeType::getValidValues())), __LINE__);
        }
        $this->ListingFlow = $listingFlow;
        return $this;
    }
    /**
     * Get Item value
     * @return \StructType\ItemType|null
     */
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @param \StructType\ItemType $item
     * @return \StructType\GetRecommendationsRequestContainerType
     */
    public function setItem(\StructType\ItemType $item = null)
    {
        $this->Item = $item;
        return $this;
    }
    /**
     * Get RecommendationEngine value
     * @return string[]|null
     */
    public function getRecommendationEngine()
    {
        return $this->RecommendationEngine;
    }
    /**
     * This method is responsible for validating the values passed to the setRecommendationEngine method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRecommendationEngine method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRecommendationEngineForArrayConstraintsFromSetRecommendationEngine(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRecommendationsRequestContainerTypeRecommendationEngineItem) {
            // validation for constraint: enumeration
            if (!\EnumType\RecommendationEngineCodeType::valueIsValid($getRecommendationsRequestContainerTypeRecommendationEngineItem)) {
                $invalidValues[] = is_object($getRecommendationsRequestContainerTypeRecommendationEngineItem) ? get_class($getRecommendationsRequestContainerTypeRecommendationEngineItem) : sprintf('%s(%s)', gettype($getRecommendationsRequestContainerTypeRecommendationEngineItem), var_export($getRecommendationsRequestContainerTypeRecommendationEngineItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\RecommendationEngineCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\RecommendationEngineCodeType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RecommendationEngine value
     * @uses \EnumType\RecommendationEngineCodeType::valueIsValid()
     * @uses \EnumType\RecommendationEngineCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $recommendationEngine
     * @return \StructType\GetRecommendationsRequestContainerType
     */
    public function setRecommendationEngine(array $recommendationEngine = array())
    {
        // validation for constraint: array
        if ('' !== ($recommendationEngineArrayErrorMessage = self::validateRecommendationEngineForArrayConstraintsFromSetRecommendationEngine($recommendationEngine))) {
            throw new \InvalidArgumentException($recommendationEngineArrayErrorMessage, __LINE__);
        }
        $this->RecommendationEngine = $recommendationEngine;
        return $this;
    }
    /**
     * Add item to RecommendationEngine value
     * @uses \EnumType\RecommendationEngineCodeType::valueIsValid()
     * @uses \EnumType\RecommendationEngineCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\GetRecommendationsRequestContainerType
     */
    public function addToRecommendationEngine($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\RecommendationEngineCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\RecommendationEngineCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \EnumType\RecommendationEngineCodeType::getValidValues())), __LINE__);
        }
        $this->RecommendationEngine[] = $item;
        return $this;
    }
    /**
     * Get Query value
     * @return string|null
     */
    public function getQuery()
    {
        return $this->Query;
    }
    /**
     * Set Query value
     * @param string $query
     * @return \StructType\GetRecommendationsRequestContainerType
     */
    public function setQuery($query = null)
    {
        // validation for constraint: string
        if (!is_null($query) && !is_string($query)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($query, true), gettype($query)), __LINE__);
        }
        $this->Query = $query;
        return $this;
    }
    /**
     * Get CorrelationID value
     * @return string|null
     */
    public function getCorrelationID()
    {
        return $this->CorrelationID;
    }
    /**
     * Set CorrelationID value
     * @param string $correlationID
     * @return \StructType\GetRecommendationsRequestContainerType
     */
    public function setCorrelationID($correlationID = null)
    {
        // validation for constraint: string
        if (!is_null($correlationID) && !is_string($correlationID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($correlationID, true), gettype($correlationID)), __LINE__);
        }
        $this->CorrelationID = $correlationID;
        return $this;
    }
    /**
     * Get DeletedField value
     * @return string[]|null
     */
    public function getDeletedField()
    {
        return $this->DeletedField;
    }
    /**
     * This method is responsible for validating the values passed to the setDeletedField method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDeletedField method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDeletedFieldForArrayConstraintsFromSetDeletedField(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRecommendationsRequestContainerTypeDeletedFieldItem) {
            // validation for constraint: itemType
            if (!is_string($getRecommendationsRequestContainerTypeDeletedFieldItem)) {
                $invalidValues[] = is_object($getRecommendationsRequestContainerTypeDeletedFieldItem) ? get_class($getRecommendationsRequestContainerTypeDeletedFieldItem) : sprintf('%s(%s)', gettype($getRecommendationsRequestContainerTypeDeletedFieldItem), var_export($getRecommendationsRequestContainerTypeDeletedFieldItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DeletedField property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DeletedField value
     * @throws \InvalidArgumentException
     * @param string[] $deletedField
     * @return \StructType\GetRecommendationsRequestContainerType
     */
    public function setDeletedField(array $deletedField = array())
    {
        // validation for constraint: array
        if ('' !== ($deletedFieldArrayErrorMessage = self::validateDeletedFieldForArrayConstraintsFromSetDeletedField($deletedField))) {
            throw new \InvalidArgumentException($deletedFieldArrayErrorMessage, __LINE__);
        }
        $this->DeletedField = $deletedField;
        return $this;
    }
    /**
     * Add item to DeletedField value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\GetRecommendationsRequestContainerType
     */
    public function addToDeletedField($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The DeletedField property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DeletedField[] = $item;
        return $this;
    }
    /**
     * Get ExcludeRelationships value
     * @return bool|null
     */
    public function getExcludeRelationships()
    {
        return $this->ExcludeRelationships;
    }
    /**
     * Set ExcludeRelationships value
     * @param bool $excludeRelationships
     * @return \StructType\GetRecommendationsRequestContainerType
     */
    public function setExcludeRelationships($excludeRelationships = null)
    {
        // validation for constraint: boolean
        if (!is_null($excludeRelationships) && !is_bool($excludeRelationships)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($excludeRelationships, true), gettype($excludeRelationships)), __LINE__);
        }
        $this->ExcludeRelationships = $excludeRelationships;
        return $this;
    }
    /**
     * Get IncludeConfidence value
     * @return bool|null
     */
    public function getIncludeConfidence()
    {
        return $this->IncludeConfidence;
    }
    /**
     * Set IncludeConfidence value
     * @param bool $includeConfidence
     * @return \StructType\GetRecommendationsRequestContainerType
     */
    public function setIncludeConfidence($includeConfidence = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeConfidence) && !is_bool($includeConfidence)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeConfidence, true), gettype($includeConfidence)), __LINE__);
        }
        $this->IncludeConfidence = $includeConfidence;
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
     * @return \StructType\GetRecommendationsRequestContainerType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
