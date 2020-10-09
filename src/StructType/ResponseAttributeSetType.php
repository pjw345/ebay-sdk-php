<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseAttributeSetType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ResponseAttributeSetType extends AbstractStructBase
{
    /**
     * The ApproximatePages
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var int
     */
    public $ApproximatePages;
    /**
     * The AttributeSetID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var int
     */
    public $AttributeSetID;
    /**
     * The HasMore
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var bool
     */
    public $HasMore;
    /**
     * The ProductFamilies
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ProductFamilyType[]
     */
    public $ProductFamilies;
    /**
     * The ProductFinderConstraints
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ProductFinderConstraintType[]
     */
    public $ProductFinderConstraints;
    /**
     * The TooManyMatchesFound
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var bool
     */
    public $TooManyMatchesFound;
    /**
     * The TotalProducts
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var int
     */
    public $TotalProducts;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ResponseAttributeSetType
     * @uses ResponseAttributeSetType::setApproximatePages()
     * @uses ResponseAttributeSetType::setAttributeSetID()
     * @uses ResponseAttributeSetType::setHasMore()
     * @uses ResponseAttributeSetType::setProductFamilies()
     * @uses ResponseAttributeSetType::setProductFinderConstraints()
     * @uses ResponseAttributeSetType::setTooManyMatchesFound()
     * @uses ResponseAttributeSetType::setTotalProducts()
     * @uses ResponseAttributeSetType::setAny()
     * @param int $approximatePages
     * @param int $attributeSetID
     * @param bool $hasMore
     * @param \StructType\ProductFamilyType[] $productFamilies
     * @param \StructType\ProductFinderConstraintType[] $productFinderConstraints
     * @param bool $tooManyMatchesFound
     * @param int $totalProducts
     * @param \DOMDocument $any
     */
    public function __construct($approximatePages = null, $attributeSetID = null, $hasMore = null, array $productFamilies = array(), array $productFinderConstraints = array(), $tooManyMatchesFound = null, $totalProducts = null, \DOMDocument $any = null)
    {
        $this
            ->setApproximatePages($approximatePages)
            ->setAttributeSetID($attributeSetID)
            ->setHasMore($hasMore)
            ->setProductFamilies($productFamilies)
            ->setProductFinderConstraints($productFinderConstraints)
            ->setTooManyMatchesFound($tooManyMatchesFound)
            ->setTotalProducts($totalProducts)
            ->setAny($any);
    }
    /**
     * Get ApproximatePages value
     * @return int|null
     */
    public function getApproximatePages()
    {
        return $this->ApproximatePages;
    }
    /**
     * Set ApproximatePages value
     * @param int $approximatePages
     * @return \StructType\ResponseAttributeSetType
     */
    public function setApproximatePages($approximatePages = null)
    {
        // validation for constraint: int
        if (!is_null($approximatePages) && !(is_int($approximatePages) || ctype_digit($approximatePages))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($approximatePages, true), gettype($approximatePages)), __LINE__);
        }
        $this->ApproximatePages = $approximatePages;
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
     * @return \StructType\ResponseAttributeSetType
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
     * Get HasMore value
     * @return bool|null
     */
    public function getHasMore()
    {
        return $this->HasMore;
    }
    /**
     * Set HasMore value
     * @param bool $hasMore
     * @return \StructType\ResponseAttributeSetType
     */
    public function setHasMore($hasMore = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasMore) && !is_bool($hasMore)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasMore, true), gettype($hasMore)), __LINE__);
        }
        $this->HasMore = $hasMore;
        return $this;
    }
    /**
     * Get ProductFamilies value
     * @return \StructType\ProductFamilyType[]|null
     */
    public function getProductFamilies()
    {
        return $this->ProductFamilies;
    }
    /**
     * This method is responsible for validating the values passed to the setProductFamilies method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProductFamilies method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductFamiliesForArrayConstraintsFromSetProductFamilies(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseAttributeSetTypeProductFamiliesItem) {
            // validation for constraint: itemType
            if (!$responseAttributeSetTypeProductFamiliesItem instanceof \StructType\ProductFamilyType) {
                $invalidValues[] = is_object($responseAttributeSetTypeProductFamiliesItem) ? get_class($responseAttributeSetTypeProductFamiliesItem) : sprintf('%s(%s)', gettype($responseAttributeSetTypeProductFamiliesItem), var_export($responseAttributeSetTypeProductFamiliesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProductFamilies property can only contain items of type \StructType\ProductFamilyType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ProductFamilies value
     * @throws \InvalidArgumentException
     * @param \StructType\ProductFamilyType[] $productFamilies
     * @return \StructType\ResponseAttributeSetType
     */
    public function setProductFamilies(array $productFamilies = array())
    {
        // validation for constraint: array
        if ('' !== ($productFamiliesArrayErrorMessage = self::validateProductFamiliesForArrayConstraintsFromSetProductFamilies($productFamilies))) {
            throw new \InvalidArgumentException($productFamiliesArrayErrorMessage, __LINE__);
        }
        $this->ProductFamilies = $productFamilies;
        return $this;
    }
    /**
     * Add item to ProductFamilies value
     * @throws \InvalidArgumentException
     * @param \StructType\ProductFamilyType $item
     * @return \StructType\ResponseAttributeSetType
     */
    public function addToProductFamilies(\StructType\ProductFamilyType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ProductFamilyType) {
            throw new \InvalidArgumentException(sprintf('The ProductFamilies property can only contain items of type \StructType\ProductFamilyType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ProductFamilies[] = $item;
        return $this;
    }
    /**
     * Get ProductFinderConstraints value
     * @return \StructType\ProductFinderConstraintType[]|null
     */
    public function getProductFinderConstraints()
    {
        return $this->ProductFinderConstraints;
    }
    /**
     * This method is responsible for validating the values passed to the setProductFinderConstraints method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProductFinderConstraints method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductFinderConstraintsForArrayConstraintsFromSetProductFinderConstraints(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseAttributeSetTypeProductFinderConstraintsItem) {
            // validation for constraint: itemType
            if (!$responseAttributeSetTypeProductFinderConstraintsItem instanceof \StructType\ProductFinderConstraintType) {
                $invalidValues[] = is_object($responseAttributeSetTypeProductFinderConstraintsItem) ? get_class($responseAttributeSetTypeProductFinderConstraintsItem) : sprintf('%s(%s)', gettype($responseAttributeSetTypeProductFinderConstraintsItem), var_export($responseAttributeSetTypeProductFinderConstraintsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProductFinderConstraints property can only contain items of type \StructType\ProductFinderConstraintType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ProductFinderConstraints value
     * @throws \InvalidArgumentException
     * @param \StructType\ProductFinderConstraintType[] $productFinderConstraints
     * @return \StructType\ResponseAttributeSetType
     */
    public function setProductFinderConstraints(array $productFinderConstraints = array())
    {
        // validation for constraint: array
        if ('' !== ($productFinderConstraintsArrayErrorMessage = self::validateProductFinderConstraintsForArrayConstraintsFromSetProductFinderConstraints($productFinderConstraints))) {
            throw new \InvalidArgumentException($productFinderConstraintsArrayErrorMessage, __LINE__);
        }
        $this->ProductFinderConstraints = $productFinderConstraints;
        return $this;
    }
    /**
     * Add item to ProductFinderConstraints value
     * @throws \InvalidArgumentException
     * @param \StructType\ProductFinderConstraintType $item
     * @return \StructType\ResponseAttributeSetType
     */
    public function addToProductFinderConstraints(\StructType\ProductFinderConstraintType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ProductFinderConstraintType) {
            throw new \InvalidArgumentException(sprintf('The ProductFinderConstraints property can only contain items of type \StructType\ProductFinderConstraintType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ProductFinderConstraints[] = $item;
        return $this;
    }
    /**
     * Get TooManyMatchesFound value
     * @return bool|null
     */
    public function getTooManyMatchesFound()
    {
        return $this->TooManyMatchesFound;
    }
    /**
     * Set TooManyMatchesFound value
     * @param bool $tooManyMatchesFound
     * @return \StructType\ResponseAttributeSetType
     */
    public function setTooManyMatchesFound($tooManyMatchesFound = null)
    {
        // validation for constraint: boolean
        if (!is_null($tooManyMatchesFound) && !is_bool($tooManyMatchesFound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($tooManyMatchesFound, true), gettype($tooManyMatchesFound)), __LINE__);
        }
        $this->TooManyMatchesFound = $tooManyMatchesFound;
        return $this;
    }
    /**
     * Get TotalProducts value
     * @return int|null
     */
    public function getTotalProducts()
    {
        return $this->TotalProducts;
    }
    /**
     * Set TotalProducts value
     * @param int $totalProducts
     * @return \StructType\ResponseAttributeSetType
     */
    public function setTotalProducts($totalProducts = null)
    {
        // validation for constraint: int
        if (!is_null($totalProducts) && !(is_int($totalProducts) || ctype_digit($totalProducts))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalProducts, true), gettype($totalProducts)), __LINE__);
        }
        $this->TotalProducts = $totalProducts;
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
     * @return \StructType\ResponseAttributeSetType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
