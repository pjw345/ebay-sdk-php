<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyeBaySellingSummaryType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains summary information about the items the seller is selling.
 * @subpackage Structs
 */
class MyeBaySellingSummaryType extends AbstractStructBase
{
    /**
     * The ActiveAuctionCount
     * Meta information extracted from the WSDL
     * - documentation: The number of currently active auctions that will sell. That is, there is at least one bidder, and any reserve price has been met. Equivalent to the "Will Sell" value in My eBay.
     * - minOccurs: 0
     * @var int
     */
    public $ActiveAuctionCount;
    /**
     * The AuctionSellingCount
     * Meta information extracted from the WSDL
     * - documentation: The total number of currently active auctions for a given seller. Note that this does not include listings that are FixedPriceItem or StoresFixedPrice. Equivalent to the "Auction Quantity" value in My eBay.
     * - minOccurs: 0
     * @var int
     */
    public $AuctionSellingCount;
    /**
     * The AuctionBidCount
     * Meta information extracted from the WSDL
     * - documentation: The total number of bids made on the seller's active listings.
     * - minOccurs: 0
     * @var int
     */
    public $AuctionBidCount;
    /**
     * The TotalAuctionSellingValue
     * Meta information extracted from the WSDL
     * - documentation: For all items that the seller has for sale, the total selling values of those items having bids and where the Reserve price is met (if a Reserve price is specified).
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $TotalAuctionSellingValue;
    /**
     * The TotalSoldCount
     * Meta information extracted from the WSDL
     * - documentation: The total number of items that the seller has sold in the past 31 days.
     * - minOccurs: 0
     * @var int
     */
    public $TotalSoldCount;
    /**
     * The TotalSoldValue
     * Meta information extracted from the WSDL
     * - documentation: The total monetary value of the items the seller has sold.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $TotalSoldValue;
    /**
     * The SoldDurationInDays
     * Meta information extracted from the WSDL
     * - documentation: The average duration, in days, of all items sold.
     * - minOccurs: 0
     * @var int
     */
    public $SoldDurationInDays;
    /**
     * The ClassifiedAdCount
     * Meta information extracted from the WSDL
     * - documentation: The total number of Classified Ad listings listed by the seller.
     * - minOccurs: 0
     * @var int
     */
    public $ClassifiedAdCount;
    /**
     * The TotalLeadCount
     * Meta information extracted from the WSDL
     * - documentation: The total number of leads from the seller's classified ad listings. Number indicates the total number of emails received for the listings
     * - minOccurs: 0
     * @var int
     */
    public $TotalLeadCount;
    /**
     * The ClassifiedAdOfferCount
     * Meta information extracted from the WSDL
     * - documentation: The total number of offers received on active Classified Ad listings.
     * - minOccurs: 0
     * @var int
     */
    public $ClassifiedAdOfferCount;
    /**
     * The TotalListingsWithLeads
     * Meta information extracted from the WSDL
     * - documentation: The total number of Classified Ad listings that have an associated lead.
     * - minOccurs: 0
     * @var int
     */
    public $TotalListingsWithLeads;
    /**
     * The QuantityLimitRemaining
     * Meta information extracted from the WSDL
     * - documentation: The quantity of items that this seller can list. This number refers to the total quantity of items in all listings. For example, if the seller's limit was a quantity of 100, this could be 100 listings of one item each, or one listing
     * with a quantity of 100 items. The seller will be unable to list additional items or quantities of items for sale in excess of this number for the current month unless the seller requests an increase from eBay using the "Request higher selling limits"
     * link in the All Selling section of My eBay. (Under "Selling Limits".) Notice that the amount limit (see AmountLimitRemaining) may be reached before the quantity limit is reached.
     * - minOccurs: 0
     * @var int
     */
    public $QuantityLimitRemaining;
    /**
     * The AmountLimitRemaining
     * Meta information extracted from the WSDL
     * - documentation: The total value of the items listed price that this seller can list. This amount is the total of the prices specified upon listing. For example, for fixed price listings, this is the total of the fixed price amounts. For auction
     * listings, this is the total of the starting prices. The seller will be unable to list an item if the amount of the item's fixed price or starting price (for auctions) exceeds the amount limit. This is part of the seller limit, which can be increased
     * by requesting an increase from eBay using the "Request higher selling limits" link in the All Selling section of My eBay. (Under "Selling Limits".) Notice that the quantity limit (see QuantityLimitRemaining) may be reached before the amount limit is
     * reached.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $AmountLimitRemaining;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MyeBaySellingSummaryType
     * @uses MyeBaySellingSummaryType::setActiveAuctionCount()
     * @uses MyeBaySellingSummaryType::setAuctionSellingCount()
     * @uses MyeBaySellingSummaryType::setAuctionBidCount()
     * @uses MyeBaySellingSummaryType::setTotalAuctionSellingValue()
     * @uses MyeBaySellingSummaryType::setTotalSoldCount()
     * @uses MyeBaySellingSummaryType::setTotalSoldValue()
     * @uses MyeBaySellingSummaryType::setSoldDurationInDays()
     * @uses MyeBaySellingSummaryType::setClassifiedAdCount()
     * @uses MyeBaySellingSummaryType::setTotalLeadCount()
     * @uses MyeBaySellingSummaryType::setClassifiedAdOfferCount()
     * @uses MyeBaySellingSummaryType::setTotalListingsWithLeads()
     * @uses MyeBaySellingSummaryType::setQuantityLimitRemaining()
     * @uses MyeBaySellingSummaryType::setAmountLimitRemaining()
     * @uses MyeBaySellingSummaryType::setAny()
     * @param int $activeAuctionCount
     * @param int $auctionSellingCount
     * @param int $auctionBidCount
     * @param \StructType\AmountType $totalAuctionSellingValue
     * @param int $totalSoldCount
     * @param \StructType\AmountType $totalSoldValue
     * @param int $soldDurationInDays
     * @param int $classifiedAdCount
     * @param int $totalLeadCount
     * @param int $classifiedAdOfferCount
     * @param int $totalListingsWithLeads
     * @param int $quantityLimitRemaining
     * @param \StructType\AmountType $amountLimitRemaining
     * @param \DOMDocument $any
     */
    public function __construct($activeAuctionCount = null, $auctionSellingCount = null, $auctionBidCount = null, \StructType\AmountType $totalAuctionSellingValue = null, $totalSoldCount = null, \StructType\AmountType $totalSoldValue = null, $soldDurationInDays = null, $classifiedAdCount = null, $totalLeadCount = null, $classifiedAdOfferCount = null, $totalListingsWithLeads = null, $quantityLimitRemaining = null, \StructType\AmountType $amountLimitRemaining = null, \DOMDocument $any = null)
    {
        $this
            ->setActiveAuctionCount($activeAuctionCount)
            ->setAuctionSellingCount($auctionSellingCount)
            ->setAuctionBidCount($auctionBidCount)
            ->setTotalAuctionSellingValue($totalAuctionSellingValue)
            ->setTotalSoldCount($totalSoldCount)
            ->setTotalSoldValue($totalSoldValue)
            ->setSoldDurationInDays($soldDurationInDays)
            ->setClassifiedAdCount($classifiedAdCount)
            ->setTotalLeadCount($totalLeadCount)
            ->setClassifiedAdOfferCount($classifiedAdOfferCount)
            ->setTotalListingsWithLeads($totalListingsWithLeads)
            ->setQuantityLimitRemaining($quantityLimitRemaining)
            ->setAmountLimitRemaining($amountLimitRemaining)
            ->setAny($any);
    }
    /**
     * Get ActiveAuctionCount value
     * @return int|null
     */
    public function getActiveAuctionCount()
    {
        return $this->ActiveAuctionCount;
    }
    /**
     * Set ActiveAuctionCount value
     * @param int $activeAuctionCount
     * @return \StructType\MyeBaySellingSummaryType
     */
    public function setActiveAuctionCount($activeAuctionCount = null)
    {
        // validation for constraint: int
        if (!is_null($activeAuctionCount) && !(is_int($activeAuctionCount) || ctype_digit($activeAuctionCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($activeAuctionCount, true), gettype($activeAuctionCount)), __LINE__);
        }
        $this->ActiveAuctionCount = $activeAuctionCount;
        return $this;
    }
    /**
     * Get AuctionSellingCount value
     * @return int|null
     */
    public function getAuctionSellingCount()
    {
        return $this->AuctionSellingCount;
    }
    /**
     * Set AuctionSellingCount value
     * @param int $auctionSellingCount
     * @return \StructType\MyeBaySellingSummaryType
     */
    public function setAuctionSellingCount($auctionSellingCount = null)
    {
        // validation for constraint: int
        if (!is_null($auctionSellingCount) && !(is_int($auctionSellingCount) || ctype_digit($auctionSellingCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($auctionSellingCount, true), gettype($auctionSellingCount)), __LINE__);
        }
        $this->AuctionSellingCount = $auctionSellingCount;
        return $this;
    }
    /**
     * Get AuctionBidCount value
     * @return int|null
     */
    public function getAuctionBidCount()
    {
        return $this->AuctionBidCount;
    }
    /**
     * Set AuctionBidCount value
     * @param int $auctionBidCount
     * @return \StructType\MyeBaySellingSummaryType
     */
    public function setAuctionBidCount($auctionBidCount = null)
    {
        // validation for constraint: int
        if (!is_null($auctionBidCount) && !(is_int($auctionBidCount) || ctype_digit($auctionBidCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($auctionBidCount, true), gettype($auctionBidCount)), __LINE__);
        }
        $this->AuctionBidCount = $auctionBidCount;
        return $this;
    }
    /**
     * Get TotalAuctionSellingValue value
     * @return \StructType\AmountType|null
     */
    public function getTotalAuctionSellingValue()
    {
        return $this->TotalAuctionSellingValue;
    }
    /**
     * Set TotalAuctionSellingValue value
     * @param \StructType\AmountType $totalAuctionSellingValue
     * @return \StructType\MyeBaySellingSummaryType
     */
    public function setTotalAuctionSellingValue(\StructType\AmountType $totalAuctionSellingValue = null)
    {
        $this->TotalAuctionSellingValue = $totalAuctionSellingValue;
        return $this;
    }
    /**
     * Get TotalSoldCount value
     * @return int|null
     */
    public function getTotalSoldCount()
    {
        return $this->TotalSoldCount;
    }
    /**
     * Set TotalSoldCount value
     * @param int $totalSoldCount
     * @return \StructType\MyeBaySellingSummaryType
     */
    public function setTotalSoldCount($totalSoldCount = null)
    {
        // validation for constraint: int
        if (!is_null($totalSoldCount) && !(is_int($totalSoldCount) || ctype_digit($totalSoldCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalSoldCount, true), gettype($totalSoldCount)), __LINE__);
        }
        $this->TotalSoldCount = $totalSoldCount;
        return $this;
    }
    /**
     * Get TotalSoldValue value
     * @return \StructType\AmountType|null
     */
    public function getTotalSoldValue()
    {
        return $this->TotalSoldValue;
    }
    /**
     * Set TotalSoldValue value
     * @param \StructType\AmountType $totalSoldValue
     * @return \StructType\MyeBaySellingSummaryType
     */
    public function setTotalSoldValue(\StructType\AmountType $totalSoldValue = null)
    {
        $this->TotalSoldValue = $totalSoldValue;
        return $this;
    }
    /**
     * Get SoldDurationInDays value
     * @return int|null
     */
    public function getSoldDurationInDays()
    {
        return $this->SoldDurationInDays;
    }
    /**
     * Set SoldDurationInDays value
     * @param int $soldDurationInDays
     * @return \StructType\MyeBaySellingSummaryType
     */
    public function setSoldDurationInDays($soldDurationInDays = null)
    {
        // validation for constraint: int
        if (!is_null($soldDurationInDays) && !(is_int($soldDurationInDays) || ctype_digit($soldDurationInDays))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($soldDurationInDays, true), gettype($soldDurationInDays)), __LINE__);
        }
        $this->SoldDurationInDays = $soldDurationInDays;
        return $this;
    }
    /**
     * Get ClassifiedAdCount value
     * @return int|null
     */
    public function getClassifiedAdCount()
    {
        return $this->ClassifiedAdCount;
    }
    /**
     * Set ClassifiedAdCount value
     * @param int $classifiedAdCount
     * @return \StructType\MyeBaySellingSummaryType
     */
    public function setClassifiedAdCount($classifiedAdCount = null)
    {
        // validation for constraint: int
        if (!is_null($classifiedAdCount) && !(is_int($classifiedAdCount) || ctype_digit($classifiedAdCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($classifiedAdCount, true), gettype($classifiedAdCount)), __LINE__);
        }
        $this->ClassifiedAdCount = $classifiedAdCount;
        return $this;
    }
    /**
     * Get TotalLeadCount value
     * @return int|null
     */
    public function getTotalLeadCount()
    {
        return $this->TotalLeadCount;
    }
    /**
     * Set TotalLeadCount value
     * @param int $totalLeadCount
     * @return \StructType\MyeBaySellingSummaryType
     */
    public function setTotalLeadCount($totalLeadCount = null)
    {
        // validation for constraint: int
        if (!is_null($totalLeadCount) && !(is_int($totalLeadCount) || ctype_digit($totalLeadCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalLeadCount, true), gettype($totalLeadCount)), __LINE__);
        }
        $this->TotalLeadCount = $totalLeadCount;
        return $this;
    }
    /**
     * Get ClassifiedAdOfferCount value
     * @return int|null
     */
    public function getClassifiedAdOfferCount()
    {
        return $this->ClassifiedAdOfferCount;
    }
    /**
     * Set ClassifiedAdOfferCount value
     * @param int $classifiedAdOfferCount
     * @return \StructType\MyeBaySellingSummaryType
     */
    public function setClassifiedAdOfferCount($classifiedAdOfferCount = null)
    {
        // validation for constraint: int
        if (!is_null($classifiedAdOfferCount) && !(is_int($classifiedAdOfferCount) || ctype_digit($classifiedAdOfferCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($classifiedAdOfferCount, true), gettype($classifiedAdOfferCount)), __LINE__);
        }
        $this->ClassifiedAdOfferCount = $classifiedAdOfferCount;
        return $this;
    }
    /**
     * Get TotalListingsWithLeads value
     * @return int|null
     */
    public function getTotalListingsWithLeads()
    {
        return $this->TotalListingsWithLeads;
    }
    /**
     * Set TotalListingsWithLeads value
     * @param int $totalListingsWithLeads
     * @return \StructType\MyeBaySellingSummaryType
     */
    public function setTotalListingsWithLeads($totalListingsWithLeads = null)
    {
        // validation for constraint: int
        if (!is_null($totalListingsWithLeads) && !(is_int($totalListingsWithLeads) || ctype_digit($totalListingsWithLeads))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalListingsWithLeads, true), gettype($totalListingsWithLeads)), __LINE__);
        }
        $this->TotalListingsWithLeads = $totalListingsWithLeads;
        return $this;
    }
    /**
     * Get QuantityLimitRemaining value
     * @return int|null
     */
    public function getQuantityLimitRemaining()
    {
        return $this->QuantityLimitRemaining;
    }
    /**
     * Set QuantityLimitRemaining value
     * @param int $quantityLimitRemaining
     * @return \StructType\MyeBaySellingSummaryType
     */
    public function setQuantityLimitRemaining($quantityLimitRemaining = null)
    {
        // validation for constraint: int
        if (!is_null($quantityLimitRemaining) && !(is_int($quantityLimitRemaining) || ctype_digit($quantityLimitRemaining))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantityLimitRemaining, true), gettype($quantityLimitRemaining)), __LINE__);
        }
        $this->QuantityLimitRemaining = $quantityLimitRemaining;
        return $this;
    }
    /**
     * Get AmountLimitRemaining value
     * @return \StructType\AmountType|null
     */
    public function getAmountLimitRemaining()
    {
        return $this->AmountLimitRemaining;
    }
    /**
     * Set AmountLimitRemaining value
     * @param \StructType\AmountType $amountLimitRemaining
     * @return \StructType\MyeBaySellingSummaryType
     */
    public function setAmountLimitRemaining(\StructType\AmountType $amountLimitRemaining = null)
    {
        $this->AmountLimitRemaining = $amountLimitRemaining;
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
     * @return \StructType\MyeBaySellingSummaryType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
