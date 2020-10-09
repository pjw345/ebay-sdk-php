<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BiddingSummaryType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>BiddingSummary</b> container, which is returned in the <b>GetAllBidders</b> response if the <b>IncludeBiddingSummary</b> boolean field is included and set to <code>true</code> in the call request. The
 * <b>BiddingSummary</b> container consists of bidding history information for a specific bidder (specified in the <b>User.UserID</b> field).
 * @subpackage Structs
 */
class BiddingSummaryType extends AbstractStructBase
{
    /**
     * The SummaryDays
     * Meta information extracted from the WSDL
     * - documentation: This integer value indicates the length of time (in number of days) that is being used to calculate all counts in the <b>BiddingSummary</b> container. This value is generally <code>30</code> (days), which means that all counts in the
     * container have been calculated from the present time and going back 30 days in the past. <br/><br/> This field is always returned with the <b>BiddingSummary</b> container.
     * - minOccurs: 0
     * @var int
     */
    public $SummaryDays;
    /**
     * The TotalBids
     * Meta information extracted from the WSDL
     * - documentation: This integer value indicates the total number of bids (from any and all eBay sellers) that the user has placed during the last 30 days (or the number of days specified in the <b>SummaryDays</b> field). <br/><br/> This field is always
     * returned with the <b>BiddingSummary</b> container.
     * - minOccurs: 0
     * @var int
     */
    public $TotalBids;
    /**
     * The BidActivityWithSeller
     * Meta information extracted from the WSDL
     * - documentation: This integer value is actually a percentage value that indicates what percentage of the user's total number of bids during the last 30 days (or the number of days specified in the <b>SummaryDays</b> field) has been placed on auction
     * items that the seller has listed. The percentage value is rounded up to the highest whole percentage number. <br/><br/> This field is always returned with the <b>BiddingSummary</b> container.
     * - minOccurs: 0
     * @var int
     */
    public $BidActivityWithSeller;
    /**
     * The BidsToUniqueSellers
     * Meta information extracted from the WSDL
     * - documentation: This integer value indicates the total number of bids to unique sellers that the user has placed during the last 30 days (or the number of days specified in the <b>SummaryDays</b> field). <br/><br/> This field is always returned with
     * the <b>BiddingSummary</b> container.
     * - minOccurs: 0
     * @var int
     */
    public $BidsToUniqueSellers;
    /**
     * The BidsToUniqueCategories
     * Meta information extracted from the WSDL
     * - documentation: This integer value indicates the total number of bids made with unique listing categories that the user has placed during the last 30 days (or the number of days specified in the <b>SummaryDays</b> field). <br/><br/> This field is
     * always returned with the <b>BiddingSummary</b> container.
     * - minOccurs: 0
     * @var int
     */
    public $BidsToUniqueCategories;
    /**
     * The BidRetractions
     * Meta information extracted from the WSDL
     * - documentation: This integer value indicates the total number of bids that the user has retracted (from any and all sellers) during the last 30 days (or the number of days specified in the <b>SummaryDays</b> field). <br/><br/> This field is always
     * returned with the <b>BiddingSummary</b> container.
     * - minOccurs: 0
     * @var int
     */
    public $BidRetractions;
    /**
     * The ItemBidDetails
     * Meta information extracted from the WSDL
     * - documentation: This container provides information on each auction item that the user has placed a bid on during the last 30 days (or the number of days specified in the <b>SummaryDays</b> field).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ItemBidDetailsType[]
     */
    public $ItemBidDetails;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for BiddingSummaryType
     * @uses BiddingSummaryType::setSummaryDays()
     * @uses BiddingSummaryType::setTotalBids()
     * @uses BiddingSummaryType::setBidActivityWithSeller()
     * @uses BiddingSummaryType::setBidsToUniqueSellers()
     * @uses BiddingSummaryType::setBidsToUniqueCategories()
     * @uses BiddingSummaryType::setBidRetractions()
     * @uses BiddingSummaryType::setItemBidDetails()
     * @uses BiddingSummaryType::setAny()
     * @param int $summaryDays
     * @param int $totalBids
     * @param int $bidActivityWithSeller
     * @param int $bidsToUniqueSellers
     * @param int $bidsToUniqueCategories
     * @param int $bidRetractions
     * @param \StructType\ItemBidDetailsType[] $itemBidDetails
     * @param \DOMDocument $any
     */
    public function __construct($summaryDays = null, $totalBids = null, $bidActivityWithSeller = null, $bidsToUniqueSellers = null, $bidsToUniqueCategories = null, $bidRetractions = null, array $itemBidDetails = array(), \DOMDocument $any = null)
    {
        $this
            ->setSummaryDays($summaryDays)
            ->setTotalBids($totalBids)
            ->setBidActivityWithSeller($bidActivityWithSeller)
            ->setBidsToUniqueSellers($bidsToUniqueSellers)
            ->setBidsToUniqueCategories($bidsToUniqueCategories)
            ->setBidRetractions($bidRetractions)
            ->setItemBidDetails($itemBidDetails)
            ->setAny($any);
    }
    /**
     * Get SummaryDays value
     * @return int|null
     */
    public function getSummaryDays()
    {
        return $this->SummaryDays;
    }
    /**
     * Set SummaryDays value
     * @param int $summaryDays
     * @return \StructType\BiddingSummaryType
     */
    public function setSummaryDays($summaryDays = null)
    {
        // validation for constraint: int
        if (!is_null($summaryDays) && !(is_int($summaryDays) || ctype_digit($summaryDays))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($summaryDays, true), gettype($summaryDays)), __LINE__);
        }
        $this->SummaryDays = $summaryDays;
        return $this;
    }
    /**
     * Get TotalBids value
     * @return int|null
     */
    public function getTotalBids()
    {
        return $this->TotalBids;
    }
    /**
     * Set TotalBids value
     * @param int $totalBids
     * @return \StructType\BiddingSummaryType
     */
    public function setTotalBids($totalBids = null)
    {
        // validation for constraint: int
        if (!is_null($totalBids) && !(is_int($totalBids) || ctype_digit($totalBids))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalBids, true), gettype($totalBids)), __LINE__);
        }
        $this->TotalBids = $totalBids;
        return $this;
    }
    /**
     * Get BidActivityWithSeller value
     * @return int|null
     */
    public function getBidActivityWithSeller()
    {
        return $this->BidActivityWithSeller;
    }
    /**
     * Set BidActivityWithSeller value
     * @param int $bidActivityWithSeller
     * @return \StructType\BiddingSummaryType
     */
    public function setBidActivityWithSeller($bidActivityWithSeller = null)
    {
        // validation for constraint: int
        if (!is_null($bidActivityWithSeller) && !(is_int($bidActivityWithSeller) || ctype_digit($bidActivityWithSeller))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bidActivityWithSeller, true), gettype($bidActivityWithSeller)), __LINE__);
        }
        $this->BidActivityWithSeller = $bidActivityWithSeller;
        return $this;
    }
    /**
     * Get BidsToUniqueSellers value
     * @return int|null
     */
    public function getBidsToUniqueSellers()
    {
        return $this->BidsToUniqueSellers;
    }
    /**
     * Set BidsToUniqueSellers value
     * @param int $bidsToUniqueSellers
     * @return \StructType\BiddingSummaryType
     */
    public function setBidsToUniqueSellers($bidsToUniqueSellers = null)
    {
        // validation for constraint: int
        if (!is_null($bidsToUniqueSellers) && !(is_int($bidsToUniqueSellers) || ctype_digit($bidsToUniqueSellers))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bidsToUniqueSellers, true), gettype($bidsToUniqueSellers)), __LINE__);
        }
        $this->BidsToUniqueSellers = $bidsToUniqueSellers;
        return $this;
    }
    /**
     * Get BidsToUniqueCategories value
     * @return int|null
     */
    public function getBidsToUniqueCategories()
    {
        return $this->BidsToUniqueCategories;
    }
    /**
     * Set BidsToUniqueCategories value
     * @param int $bidsToUniqueCategories
     * @return \StructType\BiddingSummaryType
     */
    public function setBidsToUniqueCategories($bidsToUniqueCategories = null)
    {
        // validation for constraint: int
        if (!is_null($bidsToUniqueCategories) && !(is_int($bidsToUniqueCategories) || ctype_digit($bidsToUniqueCategories))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bidsToUniqueCategories, true), gettype($bidsToUniqueCategories)), __LINE__);
        }
        $this->BidsToUniqueCategories = $bidsToUniqueCategories;
        return $this;
    }
    /**
     * Get BidRetractions value
     * @return int|null
     */
    public function getBidRetractions()
    {
        return $this->BidRetractions;
    }
    /**
     * Set BidRetractions value
     * @param int $bidRetractions
     * @return \StructType\BiddingSummaryType
     */
    public function setBidRetractions($bidRetractions = null)
    {
        // validation for constraint: int
        if (!is_null($bidRetractions) && !(is_int($bidRetractions) || ctype_digit($bidRetractions))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bidRetractions, true), gettype($bidRetractions)), __LINE__);
        }
        $this->BidRetractions = $bidRetractions;
        return $this;
    }
    /**
     * Get ItemBidDetails value
     * @return \StructType\ItemBidDetailsType[]|null
     */
    public function getItemBidDetails()
    {
        return $this->ItemBidDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setItemBidDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemBidDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemBidDetailsForArrayConstraintsFromSetItemBidDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $biddingSummaryTypeItemBidDetailsItem) {
            // validation for constraint: itemType
            if (!$biddingSummaryTypeItemBidDetailsItem instanceof \StructType\ItemBidDetailsType) {
                $invalidValues[] = is_object($biddingSummaryTypeItemBidDetailsItem) ? get_class($biddingSummaryTypeItemBidDetailsItem) : sprintf('%s(%s)', gettype($biddingSummaryTypeItemBidDetailsItem), var_export($biddingSummaryTypeItemBidDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ItemBidDetails property can only contain items of type \StructType\ItemBidDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ItemBidDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\ItemBidDetailsType[] $itemBidDetails
     * @return \StructType\BiddingSummaryType
     */
    public function setItemBidDetails(array $itemBidDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($itemBidDetailsArrayErrorMessage = self::validateItemBidDetailsForArrayConstraintsFromSetItemBidDetails($itemBidDetails))) {
            throw new \InvalidArgumentException($itemBidDetailsArrayErrorMessage, __LINE__);
        }
        $this->ItemBidDetails = $itemBidDetails;
        return $this;
    }
    /**
     * Add item to ItemBidDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\ItemBidDetailsType $item
     * @return \StructType\BiddingSummaryType
     */
    public function addToItemBidDetails(\StructType\ItemBidDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ItemBidDetailsType) {
            throw new \InvalidArgumentException(sprintf('The ItemBidDetails property can only contain items of type \StructType\ItemBidDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ItemBidDetails[] = $item;
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
     * @return \StructType\BiddingSummaryType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
