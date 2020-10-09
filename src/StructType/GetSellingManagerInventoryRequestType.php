<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellingManagerInventoryRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieves a paginated list containing details of a user's Selling Manager Inventory. This call is subject to change without notice; the deprecation process is inapplicable to this call. The user must have a Selling Manager Pro
 * subscription to use this call.
 * @subpackage Structs
 */
class GetSellingManagerInventoryRequestType extends AbstractRequestType
{
    /**
     * The Sort
     * Meta information extracted from the WSDL
     * - documentation: This field is used if the seller would like to sort Selling Manager Inventory results based on a specific aspect such as Product Name, Average Price, etc. See <b>SellingManagerProductSortCodeType</b> to read more about the available
     * sorting options.
     * - minOccurs: 0
     * @var string
     */
    public $Sort;
    /**
     * The FolderID
     * Meta information extracted from the WSDL
     * - documentation: This field is included if the seller wants to view Selling Manager Inventory from a specific folder.
     * - minOccurs: 0
     * @var int
     */
    public $FolderID;
    /**
     * The Pagination
     * Meta information extracted from the WSDL
     * - documentation: This container is used if the seller would like to control how many products are returned per page and which page to view.
     * - minOccurs: 0
     * @var \StructType\PaginationType
     */
    public $Pagination;
    /**
     * The SortOrder
     * Meta information extracted from the WSDL
     * - documentation: This field allows the seller to sort in ascending or descending order (based on the selected aspect in the <b>Sort</b> field).
     * - minOccurs: 0
     * @var string
     */
    public $SortOrder;
    /**
     * The Search
     * Meta information extracted from the WSDL
     * - documentation: This container is used if the seller would like to search for Selling Manager Inventory based on certain identifiers like Item ID, listing title, buyer user ID, etc. The seller will specify one of the supported search types in
     * <b>SellingManagerSearchTypeCodeType</b>, and then provides the value for that search type.
     * - minOccurs: 0
     * @var \StructType\SellingManagerSearchType
     */
    public $Search;
    /**
     * The StoreCategoryID
     * Meta information extracted from the WSDL
     * - documentation: This field is used if the seller would like to retrieve all Selling Manager Inventory listed in a specific eBay Store Category.
     * - minOccurs: 0
     * @var int
     */
    public $StoreCategoryID;
    /**
     * The Filter
     * Meta information extracted from the WSDL
     * - documentation: One or more <b>Filter</b> fields can be used to retrieve Selling Manager Inventory that is in a certain state, such as active listings, inactive listings, or listings that are low in stock.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Filter;
    /**
     * Constructor method for GetSellingManagerInventoryRequestType
     * @uses GetSellingManagerInventoryRequestType::setSort()
     * @uses GetSellingManagerInventoryRequestType::setFolderID()
     * @uses GetSellingManagerInventoryRequestType::setPagination()
     * @uses GetSellingManagerInventoryRequestType::setSortOrder()
     * @uses GetSellingManagerInventoryRequestType::setSearch()
     * @uses GetSellingManagerInventoryRequestType::setStoreCategoryID()
     * @uses GetSellingManagerInventoryRequestType::setFilter()
     * @param string $sort
     * @param int $folderID
     * @param \StructType\PaginationType $pagination
     * @param string $sortOrder
     * @param \StructType\SellingManagerSearchType $search
     * @param int $storeCategoryID
     * @param string[] $filter
     */
    public function __construct($sort = null, $folderID = null, \StructType\PaginationType $pagination = null, $sortOrder = null, \StructType\SellingManagerSearchType $search = null, $storeCategoryID = null, array $filter = array())
    {
        $this
            ->setSort($sort)
            ->setFolderID($folderID)
            ->setPagination($pagination)
            ->setSortOrder($sortOrder)
            ->setSearch($search)
            ->setStoreCategoryID($storeCategoryID)
            ->setFilter($filter);
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
     * @uses \EnumType\SellingManagerProductSortCodeType::valueIsValid()
     * @uses \EnumType\SellingManagerProductSortCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sort
     * @return \StructType\GetSellingManagerInventoryRequestType
     */
    public function setSort($sort = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SellingManagerProductSortCodeType::valueIsValid($sort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SellingManagerProductSortCodeType', is_array($sort) ? implode(', ', $sort) : var_export($sort, true), implode(', ', \EnumType\SellingManagerProductSortCodeType::getValidValues())), __LINE__);
        }
        $this->Sort = $sort;
        return $this;
    }
    /**
     * Get FolderID value
     * @return int|null
     */
    public function getFolderID()
    {
        return $this->FolderID;
    }
    /**
     * Set FolderID value
     * @param int $folderID
     * @return \StructType\GetSellingManagerInventoryRequestType
     */
    public function setFolderID($folderID = null)
    {
        // validation for constraint: int
        if (!is_null($folderID) && !(is_int($folderID) || ctype_digit($folderID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($folderID, true), gettype($folderID)), __LINE__);
        }
        $this->FolderID = $folderID;
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
     * @return \StructType\GetSellingManagerInventoryRequestType
     */
    public function setPagination(\StructType\PaginationType $pagination = null)
    {
        $this->Pagination = $pagination;
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
     * @return \StructType\GetSellingManagerInventoryRequestType
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
     * Get Search value
     * @return \StructType\SellingManagerSearchType|null
     */
    public function getSearch()
    {
        return $this->Search;
    }
    /**
     * Set Search value
     * @param \StructType\SellingManagerSearchType $search
     * @return \StructType\GetSellingManagerInventoryRequestType
     */
    public function setSearch(\StructType\SellingManagerSearchType $search = null)
    {
        $this->Search = $search;
        return $this;
    }
    /**
     * Get StoreCategoryID value
     * @return int|null
     */
    public function getStoreCategoryID()
    {
        return $this->StoreCategoryID;
    }
    /**
     * Set StoreCategoryID value
     * @param int $storeCategoryID
     * @return \StructType\GetSellingManagerInventoryRequestType
     */
    public function setStoreCategoryID($storeCategoryID = null)
    {
        // validation for constraint: int
        if (!is_null($storeCategoryID) && !(is_int($storeCategoryID) || ctype_digit($storeCategoryID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($storeCategoryID, true), gettype($storeCategoryID)), __LINE__);
        }
        $this->StoreCategoryID = $storeCategoryID;
        return $this;
    }
    /**
     * Get Filter value
     * @return string[]|null
     */
    public function getFilter()
    {
        return $this->Filter;
    }
    /**
     * This method is responsible for validating the values passed to the setFilter method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFilter method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFilterForArrayConstraintsFromSetFilter(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSellingManagerInventoryRequestTypeFilterItem) {
            // validation for constraint: enumeration
            if (!\EnumType\SellingManagerInventoryPropertyTypeCodeType::valueIsValid($getSellingManagerInventoryRequestTypeFilterItem)) {
                $invalidValues[] = is_object($getSellingManagerInventoryRequestTypeFilterItem) ? get_class($getSellingManagerInventoryRequestTypeFilterItem) : sprintf('%s(%s)', gettype($getSellingManagerInventoryRequestTypeFilterItem), var_export($getSellingManagerInventoryRequestTypeFilterItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SellingManagerInventoryPropertyTypeCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\SellingManagerInventoryPropertyTypeCodeType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Filter value
     * @uses \EnumType\SellingManagerInventoryPropertyTypeCodeType::valueIsValid()
     * @uses \EnumType\SellingManagerInventoryPropertyTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $filter
     * @return \StructType\GetSellingManagerInventoryRequestType
     */
    public function setFilter(array $filter = array())
    {
        // validation for constraint: array
        if ('' !== ($filterArrayErrorMessage = self::validateFilterForArrayConstraintsFromSetFilter($filter))) {
            throw new \InvalidArgumentException($filterArrayErrorMessage, __LINE__);
        }
        $this->Filter = $filter;
        return $this;
    }
    /**
     * Add item to Filter value
     * @uses \EnumType\SellingManagerInventoryPropertyTypeCodeType::valueIsValid()
     * @uses \EnumType\SellingManagerInventoryPropertyTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\GetSellingManagerInventoryRequestType
     */
    public function addToFilter($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SellingManagerInventoryPropertyTypeCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SellingManagerInventoryPropertyTypeCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \EnumType\SellingManagerInventoryPropertyTypeCodeType::getValidValues())), __LINE__);
        }
        $this->Filter[] = $item;
        return $this;
    }
}
