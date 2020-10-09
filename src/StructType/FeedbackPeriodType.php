<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeedbackPeriodType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>FeedbackPeriod</b> containers that are returned in the <b>GetFeedback</b> call to indicate how many Negative, Neutral, Positive, Retracted, and Total Feedback entries a user has received within different
 * periods of time, typically 30 days, 180 days, and 365 days.
 * @subpackage Structs
 */
class FeedbackPeriodType extends AbstractStructBase
{
    /**
     * The PeriodInDays
     * Meta information extracted from the WSDL
     * - documentation: This integer value indicates the total number of days in the time period for the Feedback count. Typically, the returned time periods are 30 days, 180 days, and 365 days. This field is always returned with the <b>FeedbackPeriod</b>
     * container.
     * - minOccurs: 0
     * @var int
     */
    public $PeriodInDays;
    /**
     * The Count
     * Meta information extracted from the WSDL
     * - documentation: This integer value indicates the total number of Feedback entries that occurred within the time period specified in the <b>PeriodInDays</b> field. This field is always returned with the <b>FeedbackPeriod</b> container.
     * - minOccurs: 0
     * @var int
     */
    public $Count;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for FeedbackPeriodType
     * @uses FeedbackPeriodType::setPeriodInDays()
     * @uses FeedbackPeriodType::setCount()
     * @uses FeedbackPeriodType::setAny()
     * @param int $periodInDays
     * @param int $count
     * @param \DOMDocument $any
     */
    public function __construct($periodInDays = null, $count = null, \DOMDocument $any = null)
    {
        $this
            ->setPeriodInDays($periodInDays)
            ->setCount($count)
            ->setAny($any);
    }
    /**
     * Get PeriodInDays value
     * @return int|null
     */
    public function getPeriodInDays()
    {
        return $this->PeriodInDays;
    }
    /**
     * Set PeriodInDays value
     * @param int $periodInDays
     * @return \StructType\FeedbackPeriodType
     */
    public function setPeriodInDays($periodInDays = null)
    {
        // validation for constraint: int
        if (!is_null($periodInDays) && !(is_int($periodInDays) || ctype_digit($periodInDays))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($periodInDays, true), gettype($periodInDays)), __LINE__);
        }
        $this->PeriodInDays = $periodInDays;
        return $this;
    }
    /**
     * Get Count value
     * @return int|null
     */
    public function getCount()
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param int $count
     * @return \StructType\FeedbackPeriodType
     */
    public function setCount($count = null)
    {
        // validation for constraint: int
        if (!is_null($count) && !(is_int($count) || ctype_digit($count))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($count, true), gettype($count)), __LINE__);
        }
        $this->Count = $count;
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
     * @return \StructType\FeedbackPeriodType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
