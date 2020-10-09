<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuggestedCategoryType StructType
 * Meta information extracted from the WSDL
 * - documentation: Defines a suggested category, returned in response to a search for categories that contain listings with certain keywords in their titles and descriptions.
 * @subpackage Structs
 */
class SuggestedCategoryType extends AbstractStructBase
{
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - documentation: Describes a category that contains items that match the query.
     * - minOccurs: 0
     * @var \StructType\CategoryType
     */
    public $Category;
    /**
     * The PercentItemFound
     * Meta information extracted from the WSDL
     * - documentation: Percentage of the matching items that were found in this category, relative to other categories in which matching items were also found. Indicates the distribution of matching items across the suggested categories.
     * @var int
     */
    public $PercentItemFound;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SuggestedCategoryType
     * @uses SuggestedCategoryType::setCategory()
     * @uses SuggestedCategoryType::setPercentItemFound()
     * @uses SuggestedCategoryType::setAny()
     * @param \StructType\CategoryType $category
     * @param int $percentItemFound
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\CategoryType $category = null, $percentItemFound = null, \DOMDocument $any = null)
    {
        $this
            ->setCategory($category)
            ->setPercentItemFound($percentItemFound)
            ->setAny($any);
    }
    /**
     * Get Category value
     * @return \StructType\CategoryType|null
     */
    public function getCategory()
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param \StructType\CategoryType $category
     * @return \StructType\SuggestedCategoryType
     */
    public function setCategory(\StructType\CategoryType $category = null)
    {
        $this->Category = $category;
        return $this;
    }
    /**
     * Get PercentItemFound value
     * @return int|null
     */
    public function getPercentItemFound()
    {
        return $this->PercentItemFound;
    }
    /**
     * Set PercentItemFound value
     * @param int $percentItemFound
     * @return \StructType\SuggestedCategoryType
     */
    public function setPercentItemFound($percentItemFound = null)
    {
        // validation for constraint: int
        if (!is_null($percentItemFound) && !(is_int($percentItemFound) || ctype_digit($percentItemFound))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($percentItemFound, true), gettype($percentItemFound)), __LINE__);
        }
        $this->PercentItemFound = $percentItemFound;
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
     * @return \StructType\SuggestedCategoryType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
