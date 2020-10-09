<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMyeBaySellingRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieves information regarding the user's selling activity, such as items that the user is currently selling (the Active list), auction listings that have bids, sold items, and unsold items.
 * @subpackage Structs
 */
class GetMyeBaySellingRequestType extends AbstractRequestType
{
    /**
     * The ScheduledList
     * Meta information extracted from the WSDL
     * - documentation: Include this container and set the <b>ScheduledList.Include</b> field to <code>true</code> to return the list of items that are scheduled to become active listings on eBay.com at a future date/time. <br><br> The user also has the
     * option of using pagination and sorting for the list of Scheduled listings that will be returned.
     * - minOccurs: 0
     * @var \StructType\ItemListCustomizationType
     */
    public $ScheduledList;
    /**
     * The ActiveList
     * Meta information extracted from the WSDL
     * - documentation: Include this container and set the <b>ActiveList.Include</b> field to <code>true</code> to return the list of active listings on eBay.com. <br><br> The user also has the option of using pagination and sorting for the list of active
     * listings that will be returned.
     * - minOccurs: 0
     * @var \StructType\ItemListCustomizationType
     */
    public $ActiveList;
    /**
     * The SoldList
     * Meta information extracted from the WSDL
     * - documentation: Include this container and set the <b>SoldList.Include</b> field to <code>true</code> to return the list of sold order line items. <br><br> The user also has the option of using pagination and sorting for the list of sold items that
     * will be returned.
     * - minOccurs: 0
     * @var \StructType\ItemListCustomizationType
     */
    public $SoldList;
    /**
     * The UnsoldList
     * Meta information extracted from the WSDL
     * - documentation: Include this container and set the <b>UnsoldList.Include</b> field to <code>true</code> to return the listings that have ended without a purchase. <br><br> The user also has the option of using pagination and sorting for the list of
     * unsold items that will be returned.
     * - minOccurs: 0
     * @var \StructType\ItemListCustomizationType
     */
    public $UnsoldList;
    /**
     * The BidList
     * Meta information extracted from the WSDL
     * - documentation: This container is deprecated as a Bid List is no longer returned in <b>GetMyeBaySelling</b>.
     * - minOccurs: 0
     * @var \StructType\ItemListCustomizationType
     */
    public $BidList;
    /**
     * The DeletedFromSoldList
     * Meta information extracted from the WSDL
     * - documentation: Include this container and set the <b>DeletedFromSoldList.Include</b> field to <code>true</code> to return the list of sold order line items that have since been deleted from the seller's My eBay page. <br><br> The user also has the
     * option of using pagination and sorting for the list of deleted, sold items that will be returned.
     * - minOccurs: 0
     * @var \StructType\ItemListCustomizationType
     */
    public $DeletedFromSoldList;
    /**
     * The DeletedFromUnsoldList
     * Meta information extracted from the WSDL
     * - documentation: Include this container and set the <b>DeletedFromUnsoldList.Include</b> field to <code>true</code> to return the list of unsold order line items that have since been deleted from the seller's My eBay page. <br><br> The user also has
     * the option of using pagination and sorting for the list of deleted, unsold items that will be returned.
     * - minOccurs: 0
     * @var \StructType\ItemListCustomizationType
     */
    public $DeletedFromUnsoldList;
    /**
     * The SellingSummary
     * Meta information extracted from the WSDL
     * - documentation: Include this container and set the <b>SellingSummary.Include</b> field to <code>true</code> to return the <b>SellingSummary</b> container in the response. The <b>SellingSummary</b> container consists of selling activity counts and
     * values.
     * - minOccurs: 0
     * @var \StructType\ItemListCustomizationType
     */
    public $SellingSummary;
    /**
     * The HideVariations
     * Meta information extracted from the WSDL
     * - documentation: If this field is included and set to <code>true</code>, the <b>Variations</b> node (and all variation data) is omitted for all multiple-variation listings in the response. If this field is omitted or set to <code>false</code>, the
     * <b>Variations</b> node is returned for all multiple-variation listings in the response. <br>
     * - minOccurs: 0
     * @var bool
     */
    public $HideVariations;
    /**
     * Constructor method for GetMyeBaySellingRequestType
     * @uses GetMyeBaySellingRequestType::setScheduledList()
     * @uses GetMyeBaySellingRequestType::setActiveList()
     * @uses GetMyeBaySellingRequestType::setSoldList()
     * @uses GetMyeBaySellingRequestType::setUnsoldList()
     * @uses GetMyeBaySellingRequestType::setBidList()
     * @uses GetMyeBaySellingRequestType::setDeletedFromSoldList()
     * @uses GetMyeBaySellingRequestType::setDeletedFromUnsoldList()
     * @uses GetMyeBaySellingRequestType::setSellingSummary()
     * @uses GetMyeBaySellingRequestType::setHideVariations()
     * @param \StructType\ItemListCustomizationType $scheduledList
     * @param \StructType\ItemListCustomizationType $activeList
     * @param \StructType\ItemListCustomizationType $soldList
     * @param \StructType\ItemListCustomizationType $unsoldList
     * @param \StructType\ItemListCustomizationType $bidList
     * @param \StructType\ItemListCustomizationType $deletedFromSoldList
     * @param \StructType\ItemListCustomizationType $deletedFromUnsoldList
     * @param \StructType\ItemListCustomizationType $sellingSummary
     * @param bool $hideVariations
     */
    public function __construct(\StructType\ItemListCustomizationType $scheduledList = null, \StructType\ItemListCustomizationType $activeList = null, \StructType\ItemListCustomizationType $soldList = null, \StructType\ItemListCustomizationType $unsoldList = null, \StructType\ItemListCustomizationType $bidList = null, \StructType\ItemListCustomizationType $deletedFromSoldList = null, \StructType\ItemListCustomizationType $deletedFromUnsoldList = null, \StructType\ItemListCustomizationType $sellingSummary = null, $hideVariations = null)
    {
        $this
            ->setScheduledList($scheduledList)
            ->setActiveList($activeList)
            ->setSoldList($soldList)
            ->setUnsoldList($unsoldList)
            ->setBidList($bidList)
            ->setDeletedFromSoldList($deletedFromSoldList)
            ->setDeletedFromUnsoldList($deletedFromUnsoldList)
            ->setSellingSummary($sellingSummary)
            ->setHideVariations($hideVariations);
    }
    /**
     * Get ScheduledList value
     * @return \StructType\ItemListCustomizationType|null
     */
    public function getScheduledList()
    {
        return $this->ScheduledList;
    }
    /**
     * Set ScheduledList value
     * @param \StructType\ItemListCustomizationType $scheduledList
     * @return \StructType\GetMyeBaySellingRequestType
     */
    public function setScheduledList(\StructType\ItemListCustomizationType $scheduledList = null)
    {
        $this->ScheduledList = $scheduledList;
        return $this;
    }
    /**
     * Get ActiveList value
     * @return \StructType\ItemListCustomizationType|null
     */
    public function getActiveList()
    {
        return $this->ActiveList;
    }
    /**
     * Set ActiveList value
     * @param \StructType\ItemListCustomizationType $activeList
     * @return \StructType\GetMyeBaySellingRequestType
     */
    public function setActiveList(\StructType\ItemListCustomizationType $activeList = null)
    {
        $this->ActiveList = $activeList;
        return $this;
    }
    /**
     * Get SoldList value
     * @return \StructType\ItemListCustomizationType|null
     */
    public function getSoldList()
    {
        return $this->SoldList;
    }
    /**
     * Set SoldList value
     * @param \StructType\ItemListCustomizationType $soldList
     * @return \StructType\GetMyeBaySellingRequestType
     */
    public function setSoldList(\StructType\ItemListCustomizationType $soldList = null)
    {
        $this->SoldList = $soldList;
        return $this;
    }
    /**
     * Get UnsoldList value
     * @return \StructType\ItemListCustomizationType|null
     */
    public function getUnsoldList()
    {
        return $this->UnsoldList;
    }
    /**
     * Set UnsoldList value
     * @param \StructType\ItemListCustomizationType $unsoldList
     * @return \StructType\GetMyeBaySellingRequestType
     */
    public function setUnsoldList(\StructType\ItemListCustomizationType $unsoldList = null)
    {
        $this->UnsoldList = $unsoldList;
        return $this;
    }
    /**
     * Get BidList value
     * @return \StructType\ItemListCustomizationType|null
     */
    public function getBidList()
    {
        return $this->BidList;
    }
    /**
     * Set BidList value
     * @param \StructType\ItemListCustomizationType $bidList
     * @return \StructType\GetMyeBaySellingRequestType
     */
    public function setBidList(\StructType\ItemListCustomizationType $bidList = null)
    {
        $this->BidList = $bidList;
        return $this;
    }
    /**
     * Get DeletedFromSoldList value
     * @return \StructType\ItemListCustomizationType|null
     */
    public function getDeletedFromSoldList()
    {
        return $this->DeletedFromSoldList;
    }
    /**
     * Set DeletedFromSoldList value
     * @param \StructType\ItemListCustomizationType $deletedFromSoldList
     * @return \StructType\GetMyeBaySellingRequestType
     */
    public function setDeletedFromSoldList(\StructType\ItemListCustomizationType $deletedFromSoldList = null)
    {
        $this->DeletedFromSoldList = $deletedFromSoldList;
        return $this;
    }
    /**
     * Get DeletedFromUnsoldList value
     * @return \StructType\ItemListCustomizationType|null
     */
    public function getDeletedFromUnsoldList()
    {
        return $this->DeletedFromUnsoldList;
    }
    /**
     * Set DeletedFromUnsoldList value
     * @param \StructType\ItemListCustomizationType $deletedFromUnsoldList
     * @return \StructType\GetMyeBaySellingRequestType
     */
    public function setDeletedFromUnsoldList(\StructType\ItemListCustomizationType $deletedFromUnsoldList = null)
    {
        $this->DeletedFromUnsoldList = $deletedFromUnsoldList;
        return $this;
    }
    /**
     * Get SellingSummary value
     * @return \StructType\ItemListCustomizationType|null
     */
    public function getSellingSummary()
    {
        return $this->SellingSummary;
    }
    /**
     * Set SellingSummary value
     * @param \StructType\ItemListCustomizationType $sellingSummary
     * @return \StructType\GetMyeBaySellingRequestType
     */
    public function setSellingSummary(\StructType\ItemListCustomizationType $sellingSummary = null)
    {
        $this->SellingSummary = $sellingSummary;
        return $this;
    }
    /**
     * Get HideVariations value
     * @return bool|null
     */
    public function getHideVariations()
    {
        return $this->HideVariations;
    }
    /**
     * Set HideVariations value
     * @param bool $hideVariations
     * @return \StructType\GetMyeBaySellingRequestType
     */
    public function setHideVariations($hideVariations = null)
    {
        // validation for constraint: boolean
        if (!is_null($hideVariations) && !is_bool($hideVariations)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hideVariations, true), gettype($hideVariations)), __LINE__);
        }
        $this->HideVariations = $hideVariations;
        return $this;
    }
}
