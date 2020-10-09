<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemListCustomizationType StructType
 * Meta information extracted from the WSDL
 * - documentation: Defines how a list of items should be returned.
 * @subpackage Structs
 */
class ItemListCustomizationType extends AbstractStructBase
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
     * The ListingType
     * Meta information extracted from the WSDL
     * - documentation: Specifies the listing type of items in the returned list.
     * - minOccurs: 0
     * @var string
     */
    public $ListingType;
    /**
     * The Sort
     * Meta information extracted from the WSDL
     * - documentation: Specifies the sort order of the result. Default is Ascending.
     * - minOccurs: 0
     * @var string
     */
    public $Sort;
    /**
     * The DurationInDays
     * Meta information extracted from the WSDL
     * - documentation: Specifies the time period during which an item was won or lost. Similar to the period drop-down menu in the My eBay user interface. For example, to return the items won or lost in the last week, specify a DurationInDays of 7.
     * - minOccurs: 0
     * @var int
     */
    public $DurationInDays;
    /**
     * The IncludeNotes
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether or not to include Item.PrivateNotes and Item.eBayNotes in the response.
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeNotes;
    /**
     * The Pagination
     * Meta information extracted from the WSDL
     * - documentation: Specifies how to create virtual pages in the returned list. <br> Default for EntriesPerPage with GetMyeBayBuying is 200.
     * - minOccurs: 0
     * @var \StructType\PaginationType
     */
    public $Pagination;
    /**
     * The OrderStatusFilter
     * Meta information extracted from the WSDL
     * - documentation: Filter to reduce the SoldList response based on whether the seller (or eBay) marked the applicable order as Paid and/or Shipped in My eBay.<br> <br> (Sellers can use CompleteSale or the eBay Web site UI to mark an order as Paid or
     * Shipped in My eBay. Sellers can also specify PaymentStatus in ReviseCheckoutStatus to mark an order as Paid or awaiting payment in My eBay.)
     * - minOccurs: 0
     * @var string
     */
    public $OrderStatusFilter;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ItemListCustomizationType
     * @uses ItemListCustomizationType::setInclude()
     * @uses ItemListCustomizationType::setListingType()
     * @uses ItemListCustomizationType::setSort()
     * @uses ItemListCustomizationType::setDurationInDays()
     * @uses ItemListCustomizationType::setIncludeNotes()
     * @uses ItemListCustomizationType::setPagination()
     * @uses ItemListCustomizationType::setOrderStatusFilter()
     * @uses ItemListCustomizationType::setAny()
     * @param bool $include
     * @param string $listingType
     * @param string $sort
     * @param int $durationInDays
     * @param bool $includeNotes
     * @param \StructType\PaginationType $pagination
     * @param string $orderStatusFilter
     * @param \DOMDocument $any
     */
    public function __construct($include = null, $listingType = null, $sort = null, $durationInDays = null, $includeNotes = null, \StructType\PaginationType $pagination = null, $orderStatusFilter = null, \DOMDocument $any = null)
    {
        $this
            ->setInclude($include)
            ->setListingType($listingType)
            ->setSort($sort)
            ->setDurationInDays($durationInDays)
            ->setIncludeNotes($includeNotes)
            ->setPagination($pagination)
            ->setOrderStatusFilter($orderStatusFilter)
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
     * @return \StructType\ItemListCustomizationType
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
     * Get ListingType value
     * @return string|null
     */
    public function getListingType()
    {
        return $this->ListingType;
    }
    /**
     * Set ListingType value
     * @uses \EnumType\ListingTypeCodeType::valueIsValid()
     * @uses \EnumType\ListingTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $listingType
     * @return \StructType\ItemListCustomizationType
     */
    public function setListingType($listingType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ListingTypeCodeType::valueIsValid($listingType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ListingTypeCodeType', is_array($listingType) ? implode(', ', $listingType) : var_export($listingType, true), implode(', ', \EnumType\ListingTypeCodeType::getValidValues())), __LINE__);
        }
        $this->ListingType = $listingType;
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
     * @uses \EnumType\ItemSortTypeCodeType::valueIsValid()
     * @uses \EnumType\ItemSortTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sort
     * @return \StructType\ItemListCustomizationType
     */
    public function setSort($sort = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ItemSortTypeCodeType::valueIsValid($sort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ItemSortTypeCodeType', is_array($sort) ? implode(', ', $sort) : var_export($sort, true), implode(', ', \EnumType\ItemSortTypeCodeType::getValidValues())), __LINE__);
        }
        $this->Sort = $sort;
        return $this;
    }
    /**
     * Get DurationInDays value
     * @return int|null
     */
    public function getDurationInDays()
    {
        return $this->DurationInDays;
    }
    /**
     * Set DurationInDays value
     * @param int $durationInDays
     * @return \StructType\ItemListCustomizationType
     */
    public function setDurationInDays($durationInDays = null)
    {
        // validation for constraint: int
        if (!is_null($durationInDays) && !(is_int($durationInDays) || ctype_digit($durationInDays))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($durationInDays, true), gettype($durationInDays)), __LINE__);
        }
        $this->DurationInDays = $durationInDays;
        return $this;
    }
    /**
     * Get IncludeNotes value
     * @return bool|null
     */
    public function getIncludeNotes()
    {
        return $this->IncludeNotes;
    }
    /**
     * Set IncludeNotes value
     * @param bool $includeNotes
     * @return \StructType\ItemListCustomizationType
     */
    public function setIncludeNotes($includeNotes = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeNotes) && !is_bool($includeNotes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeNotes, true), gettype($includeNotes)), __LINE__);
        }
        $this->IncludeNotes = $includeNotes;
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
     * @return \StructType\ItemListCustomizationType
     */
    public function setPagination(\StructType\PaginationType $pagination = null)
    {
        $this->Pagination = $pagination;
        return $this;
    }
    /**
     * Get OrderStatusFilter value
     * @return string|null
     */
    public function getOrderStatusFilter()
    {
        return $this->OrderStatusFilter;
    }
    /**
     * Set OrderStatusFilter value
     * @uses \EnumType\OrderStatusFilterCodeType::valueIsValid()
     * @uses \EnumType\OrderStatusFilterCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $orderStatusFilter
     * @return \StructType\ItemListCustomizationType
     */
    public function setOrderStatusFilter($orderStatusFilter = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\OrderStatusFilterCodeType::valueIsValid($orderStatusFilter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\OrderStatusFilterCodeType', is_array($orderStatusFilter) ? implode(', ', $orderStatusFilter) : var_export($orderStatusFilter, true), implode(', ', \EnumType\OrderStatusFilterCodeType::getValidValues())), __LINE__);
        }
        $this->OrderStatusFilter = $orderStatusFilter;
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
     * @return \StructType\ItemListCustomizationType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
