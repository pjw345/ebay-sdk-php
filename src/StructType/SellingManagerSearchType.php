<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerSearchType StructType
 * Meta information extracted from the WSDL
 * - documentation: For searches of Selling Manager listings, specifies search type, such as <b>ProductID</b> or <b>BuyerUserID</b>, and search value.
 * @subpackage Structs
 */
class SellingManagerSearchType extends AbstractStructBase
{
    /**
     * The SearchType
     * Meta information extracted from the WSDL
     * - documentation: Specifies the type of value, such as <b>ProductID</b> or <b>BuyerUserID</b>, for the search.
     * - minOccurs: 0
     * @var string
     */
    public $SearchType;
    /**
     * The SearchValue
     * Meta information extracted from the WSDL
     * - documentation: String identifying the value, matching the <b>SearchType</b>, that the search should return listings for. For example, when <b>ProductID</b> is specified as the <b>SearchType</b>, <b>SearchValue</b> must be a valid <b>ProductID</b>.
     * - minOccurs: 0
     * @var string
     */
    public $SearchValue;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellingManagerSearchType
     * @uses SellingManagerSearchType::setSearchType()
     * @uses SellingManagerSearchType::setSearchValue()
     * @uses SellingManagerSearchType::setAny()
     * @param string $searchType
     * @param string $searchValue
     * @param \DOMDocument $any
     */
    public function __construct($searchType = null, $searchValue = null, \DOMDocument $any = null)
    {
        $this
            ->setSearchType($searchType)
            ->setSearchValue($searchValue)
            ->setAny($any);
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
     * @uses \EnumType\SellingManagerSearchTypeCodeType::valueIsValid()
     * @uses \EnumType\SellingManagerSearchTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $searchType
     * @return \StructType\SellingManagerSearchType
     */
    public function setSearchType($searchType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SellingManagerSearchTypeCodeType::valueIsValid($searchType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SellingManagerSearchTypeCodeType', is_array($searchType) ? implode(', ', $searchType) : var_export($searchType, true), implode(', ', \EnumType\SellingManagerSearchTypeCodeType::getValidValues())), __LINE__);
        }
        $this->SearchType = $searchType;
        return $this;
    }
    /**
     * Get SearchValue value
     * @return string|null
     */
    public function getSearchValue()
    {
        return $this->SearchValue;
    }
    /**
     * Set SearchValue value
     * @param string $searchValue
     * @return \StructType\SellingManagerSearchType
     */
    public function setSearchValue($searchValue = null)
    {
        // validation for constraint: string
        if (!is_null($searchValue) && !is_string($searchValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchValue, true), gettype($searchValue)), __LINE__);
        }
        $this->SearchValue = $searchValue;
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
     * @return \StructType\SellingManagerSearchType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
