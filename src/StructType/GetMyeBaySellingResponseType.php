<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMyeBaySellingResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns summary and detail information about items the user is selling, items scheduled to sell, currently listed, sold, and closed but not sold.
 * @subpackage Structs
 */
class GetMyeBaySellingResponseType extends AbstractResponseType
{
    /**
     * The SellingSummary
     * Meta information extracted from the WSDL
     * - documentation: This container consists of seller activity counts and values. For this container to be returned, the user must include the <b>SellingSummary.Include</b> field in the request and set its value to <code>true</code>.
     * - minOccurs: 0
     * @var \StructType\SellingSummaryType
     */
    public $SellingSummary;
    /**
     * The ScheduledList
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the items that are scheduled to become active at a future date/time. This container will be returned if the eBay user has one or more listings scheduled to become active at a future date/time. <br><br> This
     * container will not be returned in the response (even if there are listings scheduled to become active) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>ScheduledList.Include</b> field is omitted or set to
     * <code>false</code>.
     * - minOccurs: 0
     * @var \StructType\PaginatedItemArrayType
     */
    public $ScheduledList;
    /**
     * The ActiveList
     * Meta information extracted from the WSDL
     * - documentation: This container consists of active listings. This container will be returned if the eBay user has one or more active listings on eBay.com. <br><br> This container will not be returned in the response (even if there are one or more
     * active listings) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>ActiveList.Include</b> field is omitted or set to <code>false</code>.
     * - minOccurs: 0
     * @var \StructType\PaginatedItemArrayType
     */
    public $ActiveList;
    /**
     * The SoldList
     * Meta information extracted from the WSDL
     * - documentation: This container consists of order line items that have been sold. This container will be returned if the eBay user has one or more listings that have had recent sales. <br><br> This container will not be returned in the response (even
     * if there are one or more sales) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>SoldList.Include</b> field is omitted or set to <code>false</code>.
     * - minOccurs: 0
     * @var \StructType\PaginatedOrderTransactionArrayType
     */
    public $SoldList;
    /**
     * The UnsoldList
     * Meta information extracted from the WSDL
     * - documentation: This container consists of listings that have ended without sales. This container will be returned if the eBay user has one or more listings that have ended without sales. <br><br> This container will not be returned in the response
     * (even if there are one or more listings that ended without sales) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>UnsoldList.Include</b> field is omitted or set to <code>false</code>.
     * - minOccurs: 0
     * @var \StructType\PaginatedItemArrayType
     */
    public $UnsoldList;
    /**
     * The Summary
     * Meta information extracted from the WSDL
     * - documentation: This container consists of seller activity counts and values. This container is always returned if there has been recent sell activity.
     * - minOccurs: 0
     * @var \StructType\MyeBaySellingSummaryType
     */
    public $Summary;
    /**
     * The BidList
     * Meta information extracted from the WSDL
     * - documentation: This container is no longer applicable to <b>GetMyeBaySelling</b>.
     * - minOccurs: 0
     * @var \StructType\PaginatedItemArrayType
     */
    public $BidList;
    /**
     * The DeletedFromSoldList
     * Meta information extracted from the WSDL
     * - documentation: This container consists of listings that have had sales but have been deleted from My eBay. This container will be returned if the eBay user has one or more listings with sales that have been deleted from My eBay. <br><br> This
     * container will not be returned in the response (even if there are one or more listings that have sales but have been deleted) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>DeletedFromSoldList.Include</b> field is
     * omitted or set to <code>false</code>.
     * - minOccurs: 0
     * @var \StructType\PaginatedOrderTransactionArrayType
     */
    public $DeletedFromSoldList;
    /**
     * The DeletedFromUnsoldList
     * Meta information extracted from the WSDL
     * - documentation: This container consists of listings that have ended without sales and have been deleted from My eBay. This container will be returned if the eBay user has one or more listings with sales that have been deleted from My eBay. <br><br>
     * This container will not be returned in the response (even if there are one or more listings that have sales but have been deleted) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>DeletedFromSoldList.Include</b> field
     * is omitted or set to <code>false</code>.
     * - minOccurs: 0
     * @var \StructType\PaginatedItemArrayType
     */
    public $DeletedFromUnsoldList;
    /**
     * Constructor method for GetMyeBaySellingResponseType
     * @uses GetMyeBaySellingResponseType::setSellingSummary()
     * @uses GetMyeBaySellingResponseType::setScheduledList()
     * @uses GetMyeBaySellingResponseType::setActiveList()
     * @uses GetMyeBaySellingResponseType::setSoldList()
     * @uses GetMyeBaySellingResponseType::setUnsoldList()
     * @uses GetMyeBaySellingResponseType::setSummary()
     * @uses GetMyeBaySellingResponseType::setBidList()
     * @uses GetMyeBaySellingResponseType::setDeletedFromSoldList()
     * @uses GetMyeBaySellingResponseType::setDeletedFromUnsoldList()
     * @param \StructType\SellingSummaryType $sellingSummary
     * @param \StructType\PaginatedItemArrayType $scheduledList
     * @param \StructType\PaginatedItemArrayType $activeList
     * @param \StructType\PaginatedOrderTransactionArrayType $soldList
     * @param \StructType\PaginatedItemArrayType $unsoldList
     * @param \StructType\MyeBaySellingSummaryType $summary
     * @param \StructType\PaginatedItemArrayType $bidList
     * @param \StructType\PaginatedOrderTransactionArrayType $deletedFromSoldList
     * @param \StructType\PaginatedItemArrayType $deletedFromUnsoldList
     */
    public function __construct(\StructType\SellingSummaryType $sellingSummary = null, \StructType\PaginatedItemArrayType $scheduledList = null, \StructType\PaginatedItemArrayType $activeList = null, \StructType\PaginatedOrderTransactionArrayType $soldList = null, \StructType\PaginatedItemArrayType $unsoldList = null, \StructType\MyeBaySellingSummaryType $summary = null, \StructType\PaginatedItemArrayType $bidList = null, \StructType\PaginatedOrderTransactionArrayType $deletedFromSoldList = null, \StructType\PaginatedItemArrayType $deletedFromUnsoldList = null)
    {
        $this
            ->setSellingSummary($sellingSummary)
            ->setScheduledList($scheduledList)
            ->setActiveList($activeList)
            ->setSoldList($soldList)
            ->setUnsoldList($unsoldList)
            ->setSummary($summary)
            ->setBidList($bidList)
            ->setDeletedFromSoldList($deletedFromSoldList)
            ->setDeletedFromUnsoldList($deletedFromUnsoldList);
    }
    /**
     * Get SellingSummary value
     * @return \StructType\SellingSummaryType|null
     */
    public function getSellingSummary()
    {
        return $this->SellingSummary;
    }
    /**
     * Set SellingSummary value
     * @param \StructType\SellingSummaryType $sellingSummary
     * @return \StructType\GetMyeBaySellingResponseType
     */
    public function setSellingSummary(\StructType\SellingSummaryType $sellingSummary = null)
    {
        $this->SellingSummary = $sellingSummary;
        return $this;
    }
    /**
     * Get ScheduledList value
     * @return \StructType\PaginatedItemArrayType|null
     */
    public function getScheduledList()
    {
        return $this->ScheduledList;
    }
    /**
     * Set ScheduledList value
     * @param \StructType\PaginatedItemArrayType $scheduledList
     * @return \StructType\GetMyeBaySellingResponseType
     */
    public function setScheduledList(\StructType\PaginatedItemArrayType $scheduledList = null)
    {
        $this->ScheduledList = $scheduledList;
        return $this;
    }
    /**
     * Get ActiveList value
     * @return \StructType\PaginatedItemArrayType|null
     */
    public function getActiveList()
    {
        return $this->ActiveList;
    }
    /**
     * Set ActiveList value
     * @param \StructType\PaginatedItemArrayType $activeList
     * @return \StructType\GetMyeBaySellingResponseType
     */
    public function setActiveList(\StructType\PaginatedItemArrayType $activeList = null)
    {
        $this->ActiveList = $activeList;
        return $this;
    }
    /**
     * Get SoldList value
     * @return \StructType\PaginatedOrderTransactionArrayType|null
     */
    public function getSoldList()
    {
        return $this->SoldList;
    }
    /**
     * Set SoldList value
     * @param \StructType\PaginatedOrderTransactionArrayType $soldList
     * @return \StructType\GetMyeBaySellingResponseType
     */
    public function setSoldList(\StructType\PaginatedOrderTransactionArrayType $soldList = null)
    {
        $this->SoldList = $soldList;
        return $this;
    }
    /**
     * Get UnsoldList value
     * @return \StructType\PaginatedItemArrayType|null
     */
    public function getUnsoldList()
    {
        return $this->UnsoldList;
    }
    /**
     * Set UnsoldList value
     * @param \StructType\PaginatedItemArrayType $unsoldList
     * @return \StructType\GetMyeBaySellingResponseType
     */
    public function setUnsoldList(\StructType\PaginatedItemArrayType $unsoldList = null)
    {
        $this->UnsoldList = $unsoldList;
        return $this;
    }
    /**
     * Get Summary value
     * @return \StructType\MyeBaySellingSummaryType|null
     */
    public function getSummary()
    {
        return $this->Summary;
    }
    /**
     * Set Summary value
     * @param \StructType\MyeBaySellingSummaryType $summary
     * @return \StructType\GetMyeBaySellingResponseType
     */
    public function setSummary(\StructType\MyeBaySellingSummaryType $summary = null)
    {
        $this->Summary = $summary;
        return $this;
    }
    /**
     * Get BidList value
     * @return \StructType\PaginatedItemArrayType|null
     */
    public function getBidList()
    {
        return $this->BidList;
    }
    /**
     * Set BidList value
     * @param \StructType\PaginatedItemArrayType $bidList
     * @return \StructType\GetMyeBaySellingResponseType
     */
    public function setBidList(\StructType\PaginatedItemArrayType $bidList = null)
    {
        $this->BidList = $bidList;
        return $this;
    }
    /**
     * Get DeletedFromSoldList value
     * @return \StructType\PaginatedOrderTransactionArrayType|null
     */
    public function getDeletedFromSoldList()
    {
        return $this->DeletedFromSoldList;
    }
    /**
     * Set DeletedFromSoldList value
     * @param \StructType\PaginatedOrderTransactionArrayType $deletedFromSoldList
     * @return \StructType\GetMyeBaySellingResponseType
     */
    public function setDeletedFromSoldList(\StructType\PaginatedOrderTransactionArrayType $deletedFromSoldList = null)
    {
        $this->DeletedFromSoldList = $deletedFromSoldList;
        return $this;
    }
    /**
     * Get DeletedFromUnsoldList value
     * @return \StructType\PaginatedItemArrayType|null
     */
    public function getDeletedFromUnsoldList()
    {
        return $this->DeletedFromUnsoldList;
    }
    /**
     * Set DeletedFromUnsoldList value
     * @param \StructType\PaginatedItemArrayType $deletedFromUnsoldList
     * @return \StructType\GetMyeBaySellingResponseType
     */
    public function setDeletedFromUnsoldList(\StructType\PaginatedItemArrayType $deletedFromUnsoldList = null)
    {
        $this->DeletedFromUnsoldList = $deletedFromUnsoldList;
        return $this;
    }
}
