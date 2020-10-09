<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyeBaySelectionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Specifies how to return the result list for My eBay features such as saved searches, favorite sellers, and second chance offers.
 * @subpackage Structs
 */
class MyeBaySelectionType extends AbstractStructBase
{
    /**
     * The Include
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether or not to include the container in the response. Set the value to true to return the default set of fields for the container. Not needed if you set a value for at least one other field in the container. <br><br> If
     * you set DetailLevel to ReturnAll, set Include to false to exclude the container from the response.
     * - minOccurs: 0
     * @var bool
     */
    public $Include;
    /**
     * The IncludeItemCount
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether or not to include the item count in the response. Set the value to true to return the default set of fields for the container. Not needed if you set a value for at least one other field in the container. <br><br> If
     * you set DetailLevel to ReturnAll, set Include to false to exclude the container from the response.
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeItemCount;
    /**
     * The IncludeFavoriteSearcheCount
     * Meta information extracted from the WSDL
     * - documentation: This field is not supported.
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeFavoriteSearcheCount;
    /**
     * The IncludeFavoriteSellerCount
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether or not to include FavoriteSellerCount in the response. Set the value to true to return the default set of fields for the container. Not needed if you set a value for at least one other field in the container.
     * <br><br> If you set DetailLevel to ReturnAll, set Include to false to exclude the container from the response.
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeFavoriteSellerCount;
    /**
     * The Sort
     * Meta information extracted from the WSDL
     * - documentation: Specifies the sort order of the result. Default is Ascending.
     * - minOccurs: 0
     * @var string
     */
    public $Sort;
    /**
     * The MaxResults
     * Meta information extracted from the WSDL
     * - documentation: Specifies the maximum number of items in the returned list. If not specified, returns all items in the list.
     * - minOccurs: 0
     * @var int
     */
    public $MaxResults;
    /**
     * The UserDefinedListName
     * Meta information extracted from the WSDL
     * - documentation: Specifies that only the user defined list whose name matches the given name should be in the returned list. If the user does not have a matching record, no data is returned. If this element is omitted, the information for all records
     * is returned. For use only within the UserDefinedLists element.
     * - minOccurs: 0
     * @var string
     */
    public $UserDefinedListName;
    /**
     * The IncludeListContents
     * Meta information extracted from the WSDL
     * - documentation: Specify true to return the full user defined list contents in the response's UserDefinedList containers. A value of false means only a summary of the user defined list will be returned. The default value is false.
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeListContents;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MyeBaySelectionType
     * @uses MyeBaySelectionType::setInclude()
     * @uses MyeBaySelectionType::setIncludeItemCount()
     * @uses MyeBaySelectionType::setIncludeFavoriteSearcheCount()
     * @uses MyeBaySelectionType::setIncludeFavoriteSellerCount()
     * @uses MyeBaySelectionType::setSort()
     * @uses MyeBaySelectionType::setMaxResults()
     * @uses MyeBaySelectionType::setUserDefinedListName()
     * @uses MyeBaySelectionType::setIncludeListContents()
     * @uses MyeBaySelectionType::setAny()
     * @param bool $include
     * @param bool $includeItemCount
     * @param bool $includeFavoriteSearcheCount
     * @param bool $includeFavoriteSellerCount
     * @param string $sort
     * @param int $maxResults
     * @param string $userDefinedListName
     * @param bool $includeListContents
     * @param \DOMDocument $any
     */
    public function __construct($include = null, $includeItemCount = null, $includeFavoriteSearcheCount = null, $includeFavoriteSellerCount = null, $sort = null, $maxResults = null, $userDefinedListName = null, $includeListContents = null, \DOMDocument $any = null)
    {
        $this
            ->setInclude($include)
            ->setIncludeItemCount($includeItemCount)
            ->setIncludeFavoriteSearcheCount($includeFavoriteSearcheCount)
            ->setIncludeFavoriteSellerCount($includeFavoriteSellerCount)
            ->setSort($sort)
            ->setMaxResults($maxResults)
            ->setUserDefinedListName($userDefinedListName)
            ->setIncludeListContents($includeListContents)
            ->setAny($any);
    }
    /**
     * Get Include value
     * @return bool|null
     */
    public function getInclude()
    {
        return $this->Include;
    }
    /**
     * Set Include value
     * @param bool $include
     * @return \StructType\MyeBaySelectionType
     */
    public function setInclude($include = null)
    {
        // validation for constraint: boolean
        if (!is_null($include) && !is_bool($include)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include, true), gettype($include)), __LINE__);
        }
        $this->Include = $include;
        return $this;
    }
    /**
     * Get IncludeItemCount value
     * @return bool|null
     */
    public function getIncludeItemCount()
    {
        return $this->IncludeItemCount;
    }
    /**
     * Set IncludeItemCount value
     * @param bool $includeItemCount
     * @return \StructType\MyeBaySelectionType
     */
    public function setIncludeItemCount($includeItemCount = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeItemCount) && !is_bool($includeItemCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeItemCount, true), gettype($includeItemCount)), __LINE__);
        }
        $this->IncludeItemCount = $includeItemCount;
        return $this;
    }
    /**
     * Get IncludeFavoriteSearcheCount value
     * @return bool|null
     */
    public function getIncludeFavoriteSearcheCount()
    {
        return $this->IncludeFavoriteSearcheCount;
    }
    /**
     * Set IncludeFavoriteSearcheCount value
     * @param bool $includeFavoriteSearcheCount
     * @return \StructType\MyeBaySelectionType
     */
    public function setIncludeFavoriteSearcheCount($includeFavoriteSearcheCount = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeFavoriteSearcheCount) && !is_bool($includeFavoriteSearcheCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeFavoriteSearcheCount, true), gettype($includeFavoriteSearcheCount)), __LINE__);
        }
        $this->IncludeFavoriteSearcheCount = $includeFavoriteSearcheCount;
        return $this;
    }
    /**
     * Get IncludeFavoriteSellerCount value
     * @return bool|null
     */
    public function getIncludeFavoriteSellerCount()
    {
        return $this->IncludeFavoriteSellerCount;
    }
    /**
     * Set IncludeFavoriteSellerCount value
     * @param bool $includeFavoriteSellerCount
     * @return \StructType\MyeBaySelectionType
     */
    public function setIncludeFavoriteSellerCount($includeFavoriteSellerCount = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeFavoriteSellerCount) && !is_bool($includeFavoriteSellerCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeFavoriteSellerCount, true), gettype($includeFavoriteSellerCount)), __LINE__);
        }
        $this->IncludeFavoriteSellerCount = $includeFavoriteSellerCount;
        return $this;
    }
    /**
     * Get Sort value
     * @return string|null
     */
    public function getSort()
    {
        return $this->Sort;
    }
    /**
     * Set Sort value
     * @uses \EnumType\SortOrderCodeType::valueIsValid()
     * @uses \EnumType\SortOrderCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sort
     * @return \StructType\MyeBaySelectionType
     */
    public function setSort($sort = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SortOrderCodeType::valueIsValid($sort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SortOrderCodeType', is_array($sort) ? implode(', ', $sort) : var_export($sort, true), implode(', ', \EnumType\SortOrderCodeType::getValidValues())), __LINE__);
        }
        $this->Sort = $sort;
        return $this;
    }
    /**
     * Get MaxResults value
     * @return int|null
     */
    public function getMaxResults()
    {
        return $this->MaxResults;
    }
    /**
     * Set MaxResults value
     * @param int $maxResults
     * @return \StructType\MyeBaySelectionType
     */
    public function setMaxResults($maxResults = null)
    {
        // validation for constraint: int
        if (!is_null($maxResults) && !(is_int($maxResults) || ctype_digit($maxResults))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxResults, true), gettype($maxResults)), __LINE__);
        }
        $this->MaxResults = $maxResults;
        return $this;
    }
    /**
     * Get UserDefinedListName value
     * @return string|null
     */
    public function getUserDefinedListName()
    {
        return $this->UserDefinedListName;
    }
    /**
     * Set UserDefinedListName value
     * @param string $userDefinedListName
     * @return \StructType\MyeBaySelectionType
     */
    public function setUserDefinedListName($userDefinedListName = null)
    {
        // validation for constraint: string
        if (!is_null($userDefinedListName) && !is_string($userDefinedListName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userDefinedListName, true), gettype($userDefinedListName)), __LINE__);
        }
        $this->UserDefinedListName = $userDefinedListName;
        return $this;
    }
    /**
     * Get IncludeListContents value
     * @return bool|null
     */
    public function getIncludeListContents()
    {
        return $this->IncludeListContents;
    }
    /**
     * Set IncludeListContents value
     * @param bool $includeListContents
     * @return \StructType\MyeBaySelectionType
     */
    public function setIncludeListContents($includeListContents = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeListContents) && !is_bool($includeListContents)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeListContents, true), gettype($includeListContents)), __LINE__);
        }
        $this->IncludeListContents = $includeListContents;
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
     * @return \StructType\MyeBaySelectionType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
