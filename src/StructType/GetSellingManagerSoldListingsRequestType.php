<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellingManagerSoldListingsRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns a Selling Manager user's sold listings. <br><br> This call is subject to change without notice; the deprecation process is inapplicable to this call. The user must have a Selling Manager Pro subscription to use this call.
 * @subpackage Structs
 */
class GetSellingManagerSoldListingsRequestType extends AbstractRequestType
{
    /**
     * The Search
     * Meta information extracted from the WSDL
     * - documentation: This container is used if the seller would like to search for Selling Manager Sele Records based on certain identifiers like Saler Record ID, Item ID, listing title, buyer user ID, etc. The seller will specify one of the supported
     * search types in <b>SellingManagerSearchTypeCodeType</b>, and then provides the value for that search type.
     * - minOccurs: 0
     * @var \StructType\SellingManagerSearchType
     */
    public $Search;
    /**
     * The StoreCategoryID
     * Meta information extracted from the WSDL
     * - documentation: This field is used if the seller would like to retrieve all Selling Manager Sale Records for products listed in a specific eBay Store Category.
     * - minOccurs: 0
     * @var int
     */
    public $StoreCategoryID;
    /**
     * The Filter
     * Meta information extracted from the WSDL
     * - documentation: One or more <b>Filter</b> fields can be used to retrieve Selling Manager Sale Records for orders that are in a certain state. See <b>SellingManagerSoldListingsPropertyTypeCodeType</b> for the supported values.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Filter;
    /**
     * The Archived
     * Meta information extracted from the WSDL
     * - documentation: This field is included and set to <code>true</code> if the seller would like to retrieve one or more archived orders between 90 and 120 days old.
     * - minOccurs: 0
     * @var bool
     */
    public $Archived;
    /**
     * The Sort
     * Meta information extracted from the WSDL
     * - documentation: This field is used if the seller would like to sort Selling Manager Sale Record results based on a specific aspect such as purchase date, checkout status, total price, etc. See <b>SellingManagerSoldListingsSortTypeCodeType</b> to
     * read more about the available sorting options.
     * - minOccurs: 0
     * @var string
     */
    public $Sort;
    /**
     * The SortOrder
     * Meta information extracted from the WSDL
     * - documentation: This field allows the seller to sort in ascending or descending order (based on the selected aspect in the <b>Sort</b> field).
     * - minOccurs: 0
     * @var string
     */
    public $SortOrder;
    /**
     * The Pagination
     * Meta information extracted from the WSDL
     * - documentation: This container is used if the seller would like to control how many Sale Records are returned per page and which page to view.
     * - minOccurs: 0
     * @var \StructType\PaginationType
     */
    public $Pagination;
    /**
     * The SaleDateRange
     * Meta information extracted from the WSDL
     * - documentation: This container allows the seller to retrieve orders that were purchased within a specified time range. A time range can be set up to 90 days in the past (or up to 120 days if the <b>Archived</b> field is included and set to
     * <code>true</code>.
     * - minOccurs: 0
     * @var \StructType\TimeRangeType
     */
    public $SaleDateRange;
    /**
     * Constructor method for GetSellingManagerSoldListingsRequestType
     * @uses GetSellingManagerSoldListingsRequestType::setSearch()
     * @uses GetSellingManagerSoldListingsRequestType::setStoreCategoryID()
     * @uses GetSellingManagerSoldListingsRequestType::setFilter()
     * @uses GetSellingManagerSoldListingsRequestType::setArchived()
     * @uses GetSellingManagerSoldListingsRequestType::setSort()
     * @uses GetSellingManagerSoldListingsRequestType::setSortOrder()
     * @uses GetSellingManagerSoldListingsRequestType::setPagination()
     * @uses GetSellingManagerSoldListingsRequestType::setSaleDateRange()
     * @param \StructType\SellingManagerSearchType $search
     * @param int $storeCategoryID
     * @param string[] $filter
     * @param bool $archived
     * @param string $sort
     * @param string $sortOrder
     * @param \StructType\PaginationType $pagination
     * @param \StructType\TimeRangeType $saleDateRange
     */
    public function __construct(\StructType\SellingManagerSearchType $search = null, $storeCategoryID = null, array $filter = array(), $archived = null, $sort = null, $sortOrder = null, \StructType\PaginationType $pagination = null, \StructType\TimeRangeType $saleDateRange = null)
    {
        $this
            ->setSearch($search)
            ->setStoreCategoryID($storeCategoryID)
            ->setFilter($filter)
            ->setArchived($archived)
            ->setSort($sort)
            ->setSortOrder($sortOrder)
            ->setPagination($pagination)
            ->setSaleDateRange($saleDateRange);
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
     * @return \StructType\GetSellingManagerSoldListingsRequestType
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
     * @return \StructType\GetSellingManagerSoldListingsRequestType
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
        foreach ($values as $getSellingManagerSoldListingsRequestTypeFilterItem) {
            // validation for constraint: enumeration
            if (!\EnumType\SellingManagerSoldListingsPropertyTypeCodeType::valueIsValid($getSellingManagerSoldListingsRequestTypeFilterItem)) {
                $invalidValues[] = is_object($getSellingManagerSoldListingsRequestTypeFilterItem) ? get_class($getSellingManagerSoldListingsRequestTypeFilterItem) : sprintf('%s(%s)', gettype($getSellingManagerSoldListingsRequestTypeFilterItem), var_export($getSellingManagerSoldListingsRequestTypeFilterItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SellingManagerSoldListingsPropertyTypeCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\SellingManagerSoldListingsPropertyTypeCodeType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Filter value
     * @uses \EnumType\SellingManagerSoldListingsPropertyTypeCodeType::valueIsValid()
     * @uses \EnumType\SellingManagerSoldListingsPropertyTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $filter
     * @return \StructType\GetSellingManagerSoldListingsRequestType
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
     * @uses \EnumType\SellingManagerSoldListingsPropertyTypeCodeType::valueIsValid()
     * @uses \EnumType\SellingManagerSoldListingsPropertyTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\GetSellingManagerSoldListingsRequestType
     */
    public function addToFilter($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SellingManagerSoldListingsPropertyTypeCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SellingManagerSoldListingsPropertyTypeCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \EnumType\SellingManagerSoldListingsPropertyTypeCodeType::getValidValues())), __LINE__);
        }
        $this->Filter[] = $item;
        return $this;
    }
    /**
     * Get Archived value
     * @return bool|null
     */
    public function getArchived()
    {
        return $this->Archived;
    }
    /**
     * Set Archived value
     * @param bool $archived
     * @return \StructType\GetSellingManagerSoldListingsRequestType
     */
    public function setArchived($archived = null)
    {
        // validation for constraint: boolean
        if (!is_null($archived) && !is_bool($archived)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($archived, true), gettype($archived)), __LINE__);
        }
        $this->Archived = $archived;
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
     * @uses \EnumType\SellingManagerSoldListingsSortTypeCodeType::valueIsValid()
     * @uses \EnumType\SellingManagerSoldListingsSortTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sort
     * @return \StructType\GetSellingManagerSoldListingsRequestType
     */
    public function setSort($sort = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SellingManagerSoldListingsSortTypeCodeType::valueIsValid($sort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SellingManagerSoldListingsSortTypeCodeType', is_array($sort) ? implode(', ', $sort) : var_export($sort, true), implode(', ', \EnumType\SellingManagerSoldListingsSortTypeCodeType::getValidValues())), __LINE__);
        }
        $this->Sort = $sort;
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
     * @return \StructType\GetSellingManagerSoldListingsRequestType
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
     * @return \StructType\GetSellingManagerSoldListingsRequestType
     */
    public function setPagination(\StructType\PaginationType $pagination = null)
    {
        $this->Pagination = $pagination;
        return $this;
    }
    /**
     * Get SaleDateRange value
     * @return \StructType\TimeRangeType|null
     */
    public function getSaleDateRange()
    {
        return $this->SaleDateRange;
    }
    /**
     * Set SaleDateRange value
     * @param \StructType\TimeRangeType $saleDateRange
     * @return \StructType\GetSellingManagerSoldListingsRequestType
     */
    public function setSaleDateRange(\StructType\TimeRangeType $saleDateRange = null)
    {
        $this->SaleDateRange = $saleDateRange;
        return $this;
    }
}
