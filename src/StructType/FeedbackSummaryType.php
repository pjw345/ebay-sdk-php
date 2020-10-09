<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeedbackSummaryType StructType
 * Meta information extracted from the WSDL
 * - documentation: Specifies all feedback summary information (except Score). Contains FeedbackPeriodArrayType objects that each convey feedback counts for positive, negative, neutral, and total feedback counts - for various time periods each. Also
 * conveys counts of bid retractions for the predefined time periods.
 * @subpackage Structs
 */
class FeedbackSummaryType extends AbstractStructBase
{
    /**
     * The BidRetractionFeedbackPeriodArray
     * Meta information extracted from the WSDL
     * - documentation: Bid retractions count, for multiple predefined time periods preceding the call. Returned if no detail level is specified.
     * - minOccurs: 0
     * @var \ArrayType\FeedbackPeriodArrayType
     */
    public $BidRetractionFeedbackPeriodArray;
    /**
     * The NegativeFeedbackPeriodArray
     * Meta information extracted from the WSDL
     * - documentation: Negative feedback entries count, for multiple predefined time periods preceding the call. Returned if no detail level is specified.
     * - minOccurs: 0
     * @var \ArrayType\FeedbackPeriodArrayType
     */
    public $NegativeFeedbackPeriodArray;
    /**
     * The NeutralFeedbackPeriodArray
     * Meta information extracted from the WSDL
     * - documentation: Neutral feedback entries count, for multiple predefined time periods preceding the call. Returned if no detail level is specified.
     * - minOccurs: 0
     * @var \ArrayType\FeedbackPeriodArrayType
     */
    public $NeutralFeedbackPeriodArray;
    /**
     * The PositiveFeedbackPeriodArray
     * Meta information extracted from the WSDL
     * - documentation: Positive feedback entries count, for multiple predefined time periods preceding the call. Returned if no detail level is specified.
     * - minOccurs: 0
     * @var \ArrayType\FeedbackPeriodArrayType
     */
    public $PositiveFeedbackPeriodArray;
    /**
     * The TotalFeedbackPeriodArray
     * Meta information extracted from the WSDL
     * - documentation: Total feedback score, for multiple predefined time periods preceding the call. Returned if no detail level is specified.
     * - minOccurs: 0
     * @var \ArrayType\FeedbackPeriodArrayType
     */
    public $TotalFeedbackPeriodArray;
    /**
     * The NeutralCommentCountFromSuspendedUsers
     * Meta information extracted from the WSDL
     * - documentation: Number of neutral comments received from suspended users. Returned if no detail level is specified.
     * - minOccurs: 0
     * @var int
     */
    public $NeutralCommentCountFromSuspendedUsers;
    /**
     * The UniqueNegativeFeedbackCount
     * Meta information extracted from the WSDL
     * - documentation: Total number of negative Feedback comments, including weekly repeats. Returned if no detail level is specified.
     * - minOccurs: 0
     * @var int
     */
    public $UniqueNegativeFeedbackCount;
    /**
     * The UniquePositiveFeedbackCount
     * Meta information extracted from the WSDL
     * - documentation: Total number of positive Feedback comments, including weekly repeats. Returned if no detail level is specified.
     * - minOccurs: 0
     * @var int
     */
    public $UniquePositiveFeedbackCount;
    /**
     * The UniqueNeutralFeedbackCount
     * Meta information extracted from the WSDL
     * - documentation: Total number of neutral Feedback comments, including weekly repeats. Returned if no detail level is specified.
     * - minOccurs: 0
     * @var int
     */
    public $UniqueNeutralFeedbackCount;
    /**
     * The SellerRatingSummaryArray
     * Meta information extracted from the WSDL
     * - documentation: Container for information about detailed seller ratings (DSRs) that buyers have left for a seller. Sellers have access to the number of ratings they've received, as well as to the averages of DSRs they've received in each DSR area
     * (i.e., to the average of ratings in the item-description area, etc.). The DSR feature is available on the United Kingdom site and on the following other sites: AU (site ID 15), BEFR (site ID 23), BENL (site ID 123), FR (site ID 71), IE (site ID 205),
     * IN (site ID 203), IT (site ID 101), and PL (site ID 212). The DSR feature is available on the other API-enabled country sites, including the US site (site ID 0).
     * - minOccurs: 0
     * @var \ArrayType\SellerRatingSummaryArrayType
     */
    public $SellerRatingSummaryArray;
    /**
     * The SellerRoleMetrics
     * Meta information extracted from the WSDL
     * - documentation: Container for information about 1 year feedback metric as seller.
     * - minOccurs: 0
     * @var \StructType\SellerRoleMetricsType
     */
    public $SellerRoleMetrics;
    /**
     * The BuyerRoleMetrics
     * Meta information extracted from the WSDL
     * - documentation: Container for information about 1 year feedback metric as buyer.
     * - minOccurs: 0
     * @var \StructType\BuyerRoleMetricsType
     */
    public $BuyerRoleMetrics;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for FeedbackSummaryType
     * @uses FeedbackSummaryType::setBidRetractionFeedbackPeriodArray()
     * @uses FeedbackSummaryType::setNegativeFeedbackPeriodArray()
     * @uses FeedbackSummaryType::setNeutralFeedbackPeriodArray()
     * @uses FeedbackSummaryType::setPositiveFeedbackPeriodArray()
     * @uses FeedbackSummaryType::setTotalFeedbackPeriodArray()
     * @uses FeedbackSummaryType::setNeutralCommentCountFromSuspendedUsers()
     * @uses FeedbackSummaryType::setUniqueNegativeFeedbackCount()
     * @uses FeedbackSummaryType::setUniquePositiveFeedbackCount()
     * @uses FeedbackSummaryType::setUniqueNeutralFeedbackCount()
     * @uses FeedbackSummaryType::setSellerRatingSummaryArray()
     * @uses FeedbackSummaryType::setSellerRoleMetrics()
     * @uses FeedbackSummaryType::setBuyerRoleMetrics()
     * @uses FeedbackSummaryType::setAny()
     * @param \ArrayType\FeedbackPeriodArrayType $bidRetractionFeedbackPeriodArray
     * @param \ArrayType\FeedbackPeriodArrayType $negativeFeedbackPeriodArray
     * @param \ArrayType\FeedbackPeriodArrayType $neutralFeedbackPeriodArray
     * @param \ArrayType\FeedbackPeriodArrayType $positiveFeedbackPeriodArray
     * @param \ArrayType\FeedbackPeriodArrayType $totalFeedbackPeriodArray
     * @param int $neutralCommentCountFromSuspendedUsers
     * @param int $uniqueNegativeFeedbackCount
     * @param int $uniquePositiveFeedbackCount
     * @param int $uniqueNeutralFeedbackCount
     * @param \ArrayType\SellerRatingSummaryArrayType $sellerRatingSummaryArray
     * @param \StructType\SellerRoleMetricsType $sellerRoleMetrics
     * @param \StructType\BuyerRoleMetricsType $buyerRoleMetrics
     * @param \DOMDocument $any
     */
    public function __construct(\ArrayType\FeedbackPeriodArrayType $bidRetractionFeedbackPeriodArray = null, \ArrayType\FeedbackPeriodArrayType $negativeFeedbackPeriodArray = null, \ArrayType\FeedbackPeriodArrayType $neutralFeedbackPeriodArray = null, \ArrayType\FeedbackPeriodArrayType $positiveFeedbackPeriodArray = null, \ArrayType\FeedbackPeriodArrayType $totalFeedbackPeriodArray = null, $neutralCommentCountFromSuspendedUsers = null, $uniqueNegativeFeedbackCount = null, $uniquePositiveFeedbackCount = null, $uniqueNeutralFeedbackCount = null, \ArrayType\SellerRatingSummaryArrayType $sellerRatingSummaryArray = null, \StructType\SellerRoleMetricsType $sellerRoleMetrics = null, \StructType\BuyerRoleMetricsType $buyerRoleMetrics = null, \DOMDocument $any = null)
    {
        $this
            ->setBidRetractionFeedbackPeriodArray($bidRetractionFeedbackPeriodArray)
            ->setNegativeFeedbackPeriodArray($negativeFeedbackPeriodArray)
            ->setNeutralFeedbackPeriodArray($neutralFeedbackPeriodArray)
            ->setPositiveFeedbackPeriodArray($positiveFeedbackPeriodArray)
            ->setTotalFeedbackPeriodArray($totalFeedbackPeriodArray)
            ->setNeutralCommentCountFromSuspendedUsers($neutralCommentCountFromSuspendedUsers)
            ->setUniqueNegativeFeedbackCount($uniqueNegativeFeedbackCount)
            ->setUniquePositiveFeedbackCount($uniquePositiveFeedbackCount)
            ->setUniqueNeutralFeedbackCount($uniqueNeutralFeedbackCount)
            ->setSellerRatingSummaryArray($sellerRatingSummaryArray)
            ->setSellerRoleMetrics($sellerRoleMetrics)
            ->setBuyerRoleMetrics($buyerRoleMetrics)
            ->setAny($any);
    }
    /**
     * Get BidRetractionFeedbackPeriodArray value
     * @return \ArrayType\FeedbackPeriodArrayType|null
     */
    public function getBidRetractionFeedbackPeriodArray()
    {
        return $this->BidRetractionFeedbackPeriodArray;
    }
    /**
     * Set BidRetractionFeedbackPeriodArray value
     * @param \ArrayType\FeedbackPeriodArrayType $bidRetractionFeedbackPeriodArray
     * @return \StructType\FeedbackSummaryType
     */
    public function setBidRetractionFeedbackPeriodArray(\ArrayType\FeedbackPeriodArrayType $bidRetractionFeedbackPeriodArray = null)
    {
        $this->BidRetractionFeedbackPeriodArray = $bidRetractionFeedbackPeriodArray;
        return $this;
    }
    /**
     * Get NegativeFeedbackPeriodArray value
     * @return \ArrayType\FeedbackPeriodArrayType|null
     */
    public function getNegativeFeedbackPeriodArray()
    {
        return $this->NegativeFeedbackPeriodArray;
    }
    /**
     * Set NegativeFeedbackPeriodArray value
     * @param \ArrayType\FeedbackPeriodArrayType $negativeFeedbackPeriodArray
     * @return \StructType\FeedbackSummaryType
     */
    public function setNegativeFeedbackPeriodArray(\ArrayType\FeedbackPeriodArrayType $negativeFeedbackPeriodArray = null)
    {
        $this->NegativeFeedbackPeriodArray = $negativeFeedbackPeriodArray;
        return $this;
    }
    /**
     * Get NeutralFeedbackPeriodArray value
     * @return \ArrayType\FeedbackPeriodArrayType|null
     */
    public function getNeutralFeedbackPeriodArray()
    {
        return $this->NeutralFeedbackPeriodArray;
    }
    /**
     * Set NeutralFeedbackPeriodArray value
     * @param \ArrayType\FeedbackPeriodArrayType $neutralFeedbackPeriodArray
     * @return \StructType\FeedbackSummaryType
     */
    public function setNeutralFeedbackPeriodArray(\ArrayType\FeedbackPeriodArrayType $neutralFeedbackPeriodArray = null)
    {
        $this->NeutralFeedbackPeriodArray = $neutralFeedbackPeriodArray;
        return $this;
    }
    /**
     * Get PositiveFeedbackPeriodArray value
     * @return \ArrayType\FeedbackPeriodArrayType|null
     */
    public function getPositiveFeedbackPeriodArray()
    {
        return $this->PositiveFeedbackPeriodArray;
    }
    /**
     * Set PositiveFeedbackPeriodArray value
     * @param \ArrayType\FeedbackPeriodArrayType $positiveFeedbackPeriodArray
     * @return \StructType\FeedbackSummaryType
     */
    public function setPositiveFeedbackPeriodArray(\ArrayType\FeedbackPeriodArrayType $positiveFeedbackPeriodArray = null)
    {
        $this->PositiveFeedbackPeriodArray = $positiveFeedbackPeriodArray;
        return $this;
    }
    /**
     * Get TotalFeedbackPeriodArray value
     * @return \ArrayType\FeedbackPeriodArrayType|null
     */
    public function getTotalFeedbackPeriodArray()
    {
        return $this->TotalFeedbackPeriodArray;
    }
    /**
     * Set TotalFeedbackPeriodArray value
     * @param \ArrayType\FeedbackPeriodArrayType $totalFeedbackPeriodArray
     * @return \StructType\FeedbackSummaryType
     */
    public function setTotalFeedbackPeriodArray(\ArrayType\FeedbackPeriodArrayType $totalFeedbackPeriodArray = null)
    {
        $this->TotalFeedbackPeriodArray = $totalFeedbackPeriodArray;
        return $this;
    }
    /**
     * Get NeutralCommentCountFromSuspendedUsers value
     * @return int|null
     */
    public function getNeutralCommentCountFromSuspendedUsers()
    {
        return $this->NeutralCommentCountFromSuspendedUsers;
    }
    /**
     * Set NeutralCommentCountFromSuspendedUsers value
     * @param int $neutralCommentCountFromSuspendedUsers
     * @return \StructType\FeedbackSummaryType
     */
    public function setNeutralCommentCountFromSuspendedUsers($neutralCommentCountFromSuspendedUsers = null)
    {
        // validation for constraint: int
        if (!is_null($neutralCommentCountFromSuspendedUsers) && !(is_int($neutralCommentCountFromSuspendedUsers) || ctype_digit($neutralCommentCountFromSuspendedUsers))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($neutralCommentCountFromSuspendedUsers, true), gettype($neutralCommentCountFromSuspendedUsers)), __LINE__);
        }
        $this->NeutralCommentCountFromSuspendedUsers = $neutralCommentCountFromSuspendedUsers;
        return $this;
    }
    /**
     * Get UniqueNegativeFeedbackCount value
     * @return int|null
     */
    public function getUniqueNegativeFeedbackCount()
    {
        return $this->UniqueNegativeFeedbackCount;
    }
    /**
     * Set UniqueNegativeFeedbackCount value
     * @param int $uniqueNegativeFeedbackCount
     * @return \StructType\FeedbackSummaryType
     */
    public function setUniqueNegativeFeedbackCount($uniqueNegativeFeedbackCount = null)
    {
        // validation for constraint: int
        if (!is_null($uniqueNegativeFeedbackCount) && !(is_int($uniqueNegativeFeedbackCount) || ctype_digit($uniqueNegativeFeedbackCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($uniqueNegativeFeedbackCount, true), gettype($uniqueNegativeFeedbackCount)), __LINE__);
        }
        $this->UniqueNegativeFeedbackCount = $uniqueNegativeFeedbackCount;
        return $this;
    }
    /**
     * Get UniquePositiveFeedbackCount value
     * @return int|null
     */
    public function getUniquePositiveFeedbackCount()
    {
        return $this->UniquePositiveFeedbackCount;
    }
    /**
     * Set UniquePositiveFeedbackCount value
     * @param int $uniquePositiveFeedbackCount
     * @return \StructType\FeedbackSummaryType
     */
    public function setUniquePositiveFeedbackCount($uniquePositiveFeedbackCount = null)
    {
        // validation for constraint: int
        if (!is_null($uniquePositiveFeedbackCount) && !(is_int($uniquePositiveFeedbackCount) || ctype_digit($uniquePositiveFeedbackCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($uniquePositiveFeedbackCount, true), gettype($uniquePositiveFeedbackCount)), __LINE__);
        }
        $this->UniquePositiveFeedbackCount = $uniquePositiveFeedbackCount;
        return $this;
    }
    /**
     * Get UniqueNeutralFeedbackCount value
     * @return int|null
     */
    public function getUniqueNeutralFeedbackCount()
    {
        return $this->UniqueNeutralFeedbackCount;
    }
    /**
     * Set UniqueNeutralFeedbackCount value
     * @param int $uniqueNeutralFeedbackCount
     * @return \StructType\FeedbackSummaryType
     */
    public function setUniqueNeutralFeedbackCount($uniqueNeutralFeedbackCount = null)
    {
        // validation for constraint: int
        if (!is_null($uniqueNeutralFeedbackCount) && !(is_int($uniqueNeutralFeedbackCount) || ctype_digit($uniqueNeutralFeedbackCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($uniqueNeutralFeedbackCount, true), gettype($uniqueNeutralFeedbackCount)), __LINE__);
        }
        $this->UniqueNeutralFeedbackCount = $uniqueNeutralFeedbackCount;
        return $this;
    }
    /**
     * Get SellerRatingSummaryArray value
     * @return \ArrayType\SellerRatingSummaryArrayType|null
     */
    public function getSellerRatingSummaryArray()
    {
        return $this->SellerRatingSummaryArray;
    }
    /**
     * Set SellerRatingSummaryArray value
     * @param \ArrayType\SellerRatingSummaryArrayType $sellerRatingSummaryArray
     * @return \StructType\FeedbackSummaryType
     */
    public function setSellerRatingSummaryArray(\ArrayType\SellerRatingSummaryArrayType $sellerRatingSummaryArray = null)
    {
        $this->SellerRatingSummaryArray = $sellerRatingSummaryArray;
        return $this;
    }
    /**
     * Get SellerRoleMetrics value
     * @return \StructType\SellerRoleMetricsType|null
     */
    public function getSellerRoleMetrics()
    {
        return $this->SellerRoleMetrics;
    }
    /**
     * Set SellerRoleMetrics value
     * @param \StructType\SellerRoleMetricsType $sellerRoleMetrics
     * @return \StructType\FeedbackSummaryType
     */
    public function setSellerRoleMetrics(\StructType\SellerRoleMetricsType $sellerRoleMetrics = null)
    {
        $this->SellerRoleMetrics = $sellerRoleMetrics;
        return $this;
    }
    /**
     * Get BuyerRoleMetrics value
     * @return \StructType\BuyerRoleMetricsType|null
     */
    public function getBuyerRoleMetrics()
    {
        return $this->BuyerRoleMetrics;
    }
    /**
     * Set BuyerRoleMetrics value
     * @param \StructType\BuyerRoleMetricsType $buyerRoleMetrics
     * @return \StructType\FeedbackSummaryType
     */
    public function setBuyerRoleMetrics(\StructType\BuyerRoleMetricsType $buyerRoleMetrics = null)
    {
        $this->BuyerRoleMetrics = $buyerRoleMetrics;
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
     * @return \StructType\FeedbackSummaryType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
