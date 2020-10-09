<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuggestedCategoryArrayType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains an array of categories that contain listings with specified keywords in their titles or descriptions. The array can contain up to 10 categories.
 * @subpackage Structs
 */
class SuggestedCategoryArrayType extends AbstractStructBase
{
    /**
     * The SuggestedCategory
     * Meta information extracted from the WSDL
     * - documentation: Describes a category that contains listings that match specified keywords in the query. Returned if a category matches the query.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\SuggestedCategoryType[]
     */
    public $SuggestedCategory;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SuggestedCategoryArrayType
     * @uses SuggestedCategoryArrayType::setSuggestedCategory()
     * @uses SuggestedCategoryArrayType::setAny()
     * @param \StructType\SuggestedCategoryType[] $suggestedCategory
     * @param \DOMDocument $any
     */
    public function __construct(array $suggestedCategory = array(), \DOMDocument $any = null)
    {
        $this
            ->setSuggestedCategory($suggestedCategory)
            ->setAny($any);
    }
    /**
     * Get SuggestedCategory value
     * @return \StructType\SuggestedCategoryType[]|null
     */
    public function getSuggestedCategory()
    {
        return $this->SuggestedCategory;
    }
    /**
     * This method is responsible for validating the values passed to the setSuggestedCategory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSuggestedCategory method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSuggestedCategoryForArrayConstraintsFromSetSuggestedCategory(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $suggestedCategoryArrayTypeSuggestedCategoryItem) {
            // validation for constraint: itemType
            if (!$suggestedCategoryArrayTypeSuggestedCategoryItem instanceof \StructType\SuggestedCategoryType) {
                $invalidValues[] = is_object($suggestedCategoryArrayTypeSuggestedCategoryItem) ? get_class($suggestedCategoryArrayTypeSuggestedCategoryItem) : sprintf('%s(%s)', gettype($suggestedCategoryArrayTypeSuggestedCategoryItem), var_export($suggestedCategoryArrayTypeSuggestedCategoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SuggestedCategory property can only contain items of type \StructType\SuggestedCategoryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SuggestedCategory value
     * @throws \InvalidArgumentException
     * @param \StructType\SuggestedCategoryType[] $suggestedCategory
     * @return \StructType\SuggestedCategoryArrayType
     */
    public function setSuggestedCategory(array $suggestedCategory = array())
    {
        // validation for constraint: array
        if ('' !== ($suggestedCategoryArrayErrorMessage = self::validateSuggestedCategoryForArrayConstraintsFromSetSuggestedCategory($suggestedCategory))) {
            throw new \InvalidArgumentException($suggestedCategoryArrayErrorMessage, __LINE__);
        }
        $this->SuggestedCategory = $suggestedCategory;
        return $this;
    }
    /**
     * Add item to SuggestedCategory value
     * @throws \InvalidArgumentException
     * @param \StructType\SuggestedCategoryType $item
     * @return \StructType\SuggestedCategoryArrayType
     */
    public function addToSuggestedCategory(\StructType\SuggestedCategoryType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\SuggestedCategoryType) {
            throw new \InvalidArgumentException(sprintf('The SuggestedCategory property can only contain items of type \StructType\SuggestedCategoryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SuggestedCategory[] = $item;
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
     * @return \StructType\SuggestedCategoryArrayType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
