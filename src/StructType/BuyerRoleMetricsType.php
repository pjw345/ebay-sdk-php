<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BuyerRoleMetricsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>BuyerRoleMetrics</b> container, which consists of details relating to the eBay buyer's one-year history of leaving feedback for the seller.
 * @subpackage Structs
 */
class BuyerRoleMetricsType extends AbstractStructBase
{
    /**
     * The PositiveFeedbackLeftCount
     * Meta information extracted from the WSDL
     * - documentation: This integer value indicates the number of positive feedback entries that the eBay user, acting in the buying role, has left for their order partner (seller) during the last one-year period, counting back from the present date.
     * - minOccurs: 0
     * @var int
     */
    public $PositiveFeedbackLeftCount;
    /**
     * The NegativeFeedbackLeftCount
     * Meta information extracted from the WSDL
     * - documentation: This integer value indicates the number of negative feedback entries that the eBay user, acting in the buying role, has left for their order partner (seller) during the last one-year period, counting back from the present date.
     * - minOccurs: 0
     * @var int
     */
    public $NegativeFeedbackLeftCount;
    /**
     * The NeutralFeedbackLeftCount
     * Meta information extracted from the WSDL
     * - documentation: This integer value indicates the number of neutral feedback entries that the eBay user, acting in the buying role, has left for their order partner (seller) during the last one-year period, counting back from the present date.
     * - minOccurs: 0
     * @var int
     */
    public $NeutralFeedbackLeftCount;
    /**
     * The FeedbackLeftPercent
     * Meta information extracted from the WSDL
     * - documentation: This float value indicates the percentage of time that the eBay user, acting in the buying role, has left feedback for their order partner (seller) during the last one-year period, counting back from the present date.
     * - minOccurs: 0
     * @var float
     */
    public $FeedbackLeftPercent;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for BuyerRoleMetricsType
     * @uses BuyerRoleMetricsType::setPositiveFeedbackLeftCount()
     * @uses BuyerRoleMetricsType::setNegativeFeedbackLeftCount()
     * @uses BuyerRoleMetricsType::setNeutralFeedbackLeftCount()
     * @uses BuyerRoleMetricsType::setFeedbackLeftPercent()
     * @uses BuyerRoleMetricsType::setAny()
     * @param int $positiveFeedbackLeftCount
     * @param int $negativeFeedbackLeftCount
     * @param int $neutralFeedbackLeftCount
     * @param float $feedbackLeftPercent
     * @param \DOMDocument $any
     */
    public function __construct($positiveFeedbackLeftCount = null, $negativeFeedbackLeftCount = null, $neutralFeedbackLeftCount = null, $feedbackLeftPercent = null, \DOMDocument $any = null)
    {
        $this
            ->setPositiveFeedbackLeftCount($positiveFeedbackLeftCount)
            ->setNegativeFeedbackLeftCount($negativeFeedbackLeftCount)
            ->setNeutralFeedbackLeftCount($neutralFeedbackLeftCount)
            ->setFeedbackLeftPercent($feedbackLeftPercent)
            ->setAny($any);
    }
    /**
     * Get PositiveFeedbackLeftCount value
     * @return int|null
     */
    public function getPositiveFeedbackLeftCount()
    {
        return $this->PositiveFeedbackLeftCount;
    }
    /**
     * Set PositiveFeedbackLeftCount value
     * @param int $positiveFeedbackLeftCount
     * @return \StructType\BuyerRoleMetricsType
     */
    public function setPositiveFeedbackLeftCount($positiveFeedbackLeftCount = null)
    {
        // validation for constraint: int
        if (!is_null($positiveFeedbackLeftCount) && !(is_int($positiveFeedbackLeftCount) || ctype_digit($positiveFeedbackLeftCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($positiveFeedbackLeftCount, true), gettype($positiveFeedbackLeftCount)), __LINE__);
        }
        $this->PositiveFeedbackLeftCount = $positiveFeedbackLeftCount;
        return $this;
    }
    /**
     * Get NegativeFeedbackLeftCount value
     * @return int|null
     */
    public function getNegativeFeedbackLeftCount()
    {
        return $this->NegativeFeedbackLeftCount;
    }
    /**
     * Set NegativeFeedbackLeftCount value
     * @param int $negativeFeedbackLeftCount
     * @return \StructType\BuyerRoleMetricsType
     */
    public function setNegativeFeedbackLeftCount($negativeFeedbackLeftCount = null)
    {
        // validation for constraint: int
        if (!is_null($negativeFeedbackLeftCount) && !(is_int($negativeFeedbackLeftCount) || ctype_digit($negativeFeedbackLeftCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($negativeFeedbackLeftCount, true), gettype($negativeFeedbackLeftCount)), __LINE__);
        }
        $this->NegativeFeedbackLeftCount = $negativeFeedbackLeftCount;
        return $this;
    }
    /**
     * Get NeutralFeedbackLeftCount value
     * @return int|null
     */
    public function getNeutralFeedbackLeftCount()
    {
        return $this->NeutralFeedbackLeftCount;
    }
    /**
     * Set NeutralFeedbackLeftCount value
     * @param int $neutralFeedbackLeftCount
     * @return \StructType\BuyerRoleMetricsType
     */
    public function setNeutralFeedbackLeftCount($neutralFeedbackLeftCount = null)
    {
        // validation for constraint: int
        if (!is_null($neutralFeedbackLeftCount) && !(is_int($neutralFeedbackLeftCount) || ctype_digit($neutralFeedbackLeftCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($neutralFeedbackLeftCount, true), gettype($neutralFeedbackLeftCount)), __LINE__);
        }
        $this->NeutralFeedbackLeftCount = $neutralFeedbackLeftCount;
        return $this;
    }
    /**
     * Get FeedbackLeftPercent value
     * @return float|null
     */
    public function getFeedbackLeftPercent()
    {
        return $this->FeedbackLeftPercent;
    }
    /**
     * Set FeedbackLeftPercent value
     * @param float $feedbackLeftPercent
     * @return \StructType\BuyerRoleMetricsType
     */
    public function setFeedbackLeftPercent($feedbackLeftPercent = null)
    {
        // validation for constraint: float
        if (!is_null($feedbackLeftPercent) && !(is_float($feedbackLeftPercent) || is_numeric($feedbackLeftPercent))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($feedbackLeftPercent, true), gettype($feedbackLeftPercent)), __LINE__);
        }
        $this->FeedbackLeftPercent = $feedbackLeftPercent;
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
     * @return \StructType\BuyerRoleMetricsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
