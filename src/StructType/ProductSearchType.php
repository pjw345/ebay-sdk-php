<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductSearchType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ProductSearchType extends AbstractStructBase
{
    /**
     * The ProductSearchID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ProductSearchID;
    /**
     * The AttributeSetID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var int
     */
    public $AttributeSetID;
    /**
     * The ProductFinderID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $ProductFinderID;
    /**
     * The ProductID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ProductID;
    /**
     * The SortAttributeID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $SortAttributeID;
    /**
     * The MaxChildrenPerFamily
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $MaxChildrenPerFamily;
    /**
     * The SearchAttributes
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\SearchAttributesType[]
     */
    public $SearchAttributes;
    /**
     * The Pagination
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\PaginationType
     */
    public $Pagination;
    /**
     * The AvailableItemsOnly
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $AvailableItemsOnly;
    /**
     * The QueryKeywords
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $QueryKeywords;
    /**
     * The CharacteristicSetIDs
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\CharacteristicSetIDsType
     */
    public $CharacteristicSetIDs;
    /**
     * The ProductReferenceID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ProductReferenceID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ProductSearchType
     * @uses ProductSearchType::setProductSearchID()
     * @uses ProductSearchType::setAttributeSetID()
     * @uses ProductSearchType::setProductFinderID()
     * @uses ProductSearchType::setProductID()
     * @uses ProductSearchType::setSortAttributeID()
     * @uses ProductSearchType::setMaxChildrenPerFamily()
     * @uses ProductSearchType::setSearchAttributes()
     * @uses ProductSearchType::setPagination()
     * @uses ProductSearchType::setAvailableItemsOnly()
     * @uses ProductSearchType::setQueryKeywords()
     * @uses ProductSearchType::setCharacteristicSetIDs()
     * @uses ProductSearchType::setProductReferenceID()
     * @uses ProductSearchType::setAny()
     * @param string $productSearchID
     * @param int $attributeSetID
     * @param int $productFinderID
     * @param string $productID
     * @param int $sortAttributeID
     * @param int $maxChildrenPerFamily
     * @param \StructType\SearchAttributesType[] $searchAttributes
     * @param \StructType\PaginationType $pagination
     * @param bool $availableItemsOnly
     * @param string $queryKeywords
     * @param \StructType\CharacteristicSetIDsType $characteristicSetIDs
     * @param string $productReferenceID
     * @param \DOMDocument $any
     */
    public function __construct($productSearchID = null, $attributeSetID = null, $productFinderID = null, $productID = null, $sortAttributeID = null, $maxChildrenPerFamily = null, array $searchAttributes = array(), \StructType\PaginationType $pagination = null, $availableItemsOnly = null, $queryKeywords = null, \StructType\CharacteristicSetIDsType $characteristicSetIDs = null, $productReferenceID = null, \DOMDocument $any = null)
    {
        $this
            ->setProductSearchID($productSearchID)
            ->setAttributeSetID($attributeSetID)
            ->setProductFinderID($productFinderID)
            ->setProductID($productID)
            ->setSortAttributeID($sortAttributeID)
            ->setMaxChildrenPerFamily($maxChildrenPerFamily)
            ->setSearchAttributes($searchAttributes)
            ->setPagination($pagination)
            ->setAvailableItemsOnly($availableItemsOnly)
            ->setQueryKeywords($queryKeywords)
            ->setCharacteristicSetIDs($characteristicSetIDs)
            ->setProductReferenceID($productReferenceID)
            ->setAny($any);
    }
    /**
     * Get ProductSearchID value
     * @return string|null
     */
    public function getProductSearchID()
    {
        return $this->ProductSearchID;
    }
    /**
     * Set ProductSearchID value
     * @param string $productSearchID
     * @return \StructType\ProductSearchType
     */
    public function setProductSearchID($productSearchID = null)
    {
        // validation for constraint: string
        if (!is_null($productSearchID) && !is_string($productSearchID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productSearchID, true), gettype($productSearchID)), __LINE__);
        }
        $this->ProductSearchID = $productSearchID;
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
     * @return \StructType\ProductSearchType
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
     * Get ProductFinderID value
     * @return int|null
     */
    public function getProductFinderID()
    {
        return $this->ProductFinderID;
    }
    /**
     * Set ProductFinderID value
     * @param int $productFinderID
     * @return \StructType\ProductSearchType
     */
    public function setProductFinderID($productFinderID = null)
    {
        // validation for constraint: int
        if (!is_null($productFinderID) && !(is_int($productFinderID) || ctype_digit($productFinderID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($productFinderID, true), gettype($productFinderID)), __LINE__);
        }
        $this->ProductFinderID = $productFinderID;
        return $this;
    }
    /**
     * Get ProductID value
     * @return string|null
     */
    public function getProductID()
    {
        return $this->ProductID;
    }
    /**
     * Set ProductID value
     * @param string $productID
     * @return \StructType\ProductSearchType
     */
    public function setProductID($productID = null)
    {
        // validation for constraint: string
        if (!is_null($productID) && !is_string($productID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productID, true), gettype($productID)), __LINE__);
        }
        $this->ProductID = $productID;
        return $this;
    }
    /**
     * Get SortAttributeID value
     * @return int|null
     */
    public function getSortAttributeID()
    {
        return $this->SortAttributeID;
    }
    /**
     * Set SortAttributeID value
     * @param int $sortAttributeID
     * @return \StructType\ProductSearchType
     */
    public function setSortAttributeID($sortAttributeID = null)
    {
        // validation for constraint: int
        if (!is_null($sortAttributeID) && !(is_int($sortAttributeID) || ctype_digit($sortAttributeID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sortAttributeID, true), gettype($sortAttributeID)), __LINE__);
        }
        $this->SortAttributeID = $sortAttributeID;
        return $this;
    }
    /**
     * Get MaxChildrenPerFamily value
     * @return int|null
     */
    public function getMaxChildrenPerFamily()
    {
        return $this->MaxChildrenPerFamily;
    }
    /**
     * Set MaxChildrenPerFamily value
     * @param int $maxChildrenPerFamily
     * @return \StructType\ProductSearchType
     */
    public function setMaxChildrenPerFamily($maxChildrenPerFamily = null)
    {
        // validation for constraint: int
        if (!is_null($maxChildrenPerFamily) && !(is_int($maxChildrenPerFamily) || ctype_digit($maxChildrenPerFamily))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxChildrenPerFamily, true), gettype($maxChildrenPerFamily)), __LINE__);
        }
        $this->MaxChildrenPerFamily = $maxChildrenPerFamily;
        return $this;
    }
    /**
     * Get SearchAttributes value
     * @return \StructType\SearchAttributesType[]|null
     */
    public function getSearchAttributes()
    {
        return $this->SearchAttributes;
    }
    /**
     * This method is responsible for validating the values passed to the setSearchAttributes method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSearchAttributes method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSearchAttributesForArrayConstraintsFromSetSearchAttributes(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $productSearchTypeSearchAttributesItem) {
            // validation for constraint: itemType
            if (!$productSearchTypeSearchAttributesItem instanceof \StructType\SearchAttributesType) {
                $invalidValues[] = is_object($productSearchTypeSearchAttributesItem) ? get_class($productSearchTypeSearchAttributesItem) : sprintf('%s(%s)', gettype($productSearchTypeSearchAttributesItem), var_export($productSearchTypeSearchAttributesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SearchAttributes property can only contain items of type \StructType\SearchAttributesType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SearchAttributes value
     * @throws \InvalidArgumentException
     * @param \StructType\SearchAttributesType[] $searchAttributes
     * @return \StructType\ProductSearchType
     */
    public function setSearchAttributes(array $searchAttributes = array())
    {
        // validation for constraint: array
        if ('' !== ($searchAttributesArrayErrorMessage = self::validateSearchAttributesForArrayConstraintsFromSetSearchAttributes($searchAttributes))) {
            throw new \InvalidArgumentException($searchAttributesArrayErrorMessage, __LINE__);
        }
        $this->SearchAttributes = $searchAttributes;
        return $this;
    }
    /**
     * Add item to SearchAttributes value
     * @throws \InvalidArgumentException
     * @param \StructType\SearchAttributesType $item
     * @return \StructType\ProductSearchType
     */
    public function addToSearchAttributes(\StructType\SearchAttributesType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\SearchAttributesType) {
            throw new \InvalidArgumentException(sprintf('The SearchAttributes property can only contain items of type \StructType\SearchAttributesType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SearchAttributes[] = $item;
        return $this;
    }
    /**
     * Get Pagination value
     * @return \StructType\PaginationType|null
     */
    public function getPagination()
    {
        return $this->Pagination;
    }
    /**
     * Set Pagination value
     * @param \StructType\PaginationType $pagination
     * @return \StructType\ProductSearchType
     */
    public function setPagination(\StructType\PaginationType $pagination = null)
    {
        $this->Pagination = $pagination;
        return $this;
    }
    /**
     * Get AvailableItemsOnly value
     * @return bool|null
     */
    public function getAvailableItemsOnly()
    {
        return $this->AvailableItemsOnly;
    }
    /**
     * Set AvailableItemsOnly value
     * @param bool $availableItemsOnly
     * @return \StructType\ProductSearchType
     */
    public function setAvailableItemsOnly($availableItemsOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($availableItemsOnly) && !is_bool($availableItemsOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($availableItemsOnly, true), gettype($availableItemsOnly)), __LINE__);
        }
        $this->AvailableItemsOnly = $availableItemsOnly;
        return $this;
    }
    /**
     * Get QueryKeywords value
     * @return string|null
     */
    public function getQueryKeywords()
    {
        return $this->QueryKeywords;
    }
    /**
     * Set QueryKeywords value
     * @param string $queryKeywords
     * @return \StructType\ProductSearchType
     */
    public function setQueryKeywords($queryKeywords = null)
    {
        // validation for constraint: string
        if (!is_null($queryKeywords) && !is_string($queryKeywords)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($queryKeywords, true), gettype($queryKeywords)), __LINE__);
        }
        $this->QueryKeywords = $queryKeywords;
        return $this;
    }
    /**
     * Get CharacteristicSetIDs value
     * @return \StructType\CharacteristicSetIDsType|null
     */
    public function getCharacteristicSetIDs()
    {
        return $this->CharacteristicSetIDs;
    }
    /**
     * Set CharacteristicSetIDs value
     * @param \StructType\CharacteristicSetIDsType $characteristicSetIDs
     * @return \StructType\ProductSearchType
     */
    public function setCharacteristicSetIDs(\StructType\CharacteristicSetIDsType $characteristicSetIDs = null)
    {
        $this->CharacteristicSetIDs = $characteristicSetIDs;
        return $this;
    }
    /**
     * Get ProductReferenceID value
     * @return string|null
     */
    public function getProductReferenceID()
    {
        return $this->ProductReferenceID;
    }
    /**
     * Set ProductReferenceID value
     * @param string $productReferenceID
     * @return \StructType\ProductSearchType
     */
    public function setProductReferenceID($productReferenceID = null)
    {
        // validation for constraint: string
        if (!is_null($productReferenceID) && !is_string($productReferenceID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productReferenceID, true), gettype($productReferenceID)), __LINE__);
        }
        $this->ProductReferenceID = $productReferenceID;
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
     * @return \StructType\ProductSearchType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
