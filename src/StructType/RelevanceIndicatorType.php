<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RelevanceIndicatorType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>RelevanceIndicator</b> container, which is returned for an item specific if eBay has data on how many eBay users have searched for an item in the category using that item specific. <br> <br> <span
 * class="tablenote"><b>Note:</b> This container is restricted to applications that have been granted permission to access this feature. You must submit an <a href="https://developer.ebay.com/my/support/tickets?tab=app-check" target="_blank">App Check
 * ticket</a> to request this access. In the App Check form, add a note to the <b>Application Title/Summary</b> and/or <b>Application Details</b> fields that you want access to 'Buyer Demand Data' in <b>GetCategorySpecifics</b>. </span>
 * @subpackage Structs
 */
class RelevanceIndicatorType extends AbstractStructBase
{
    /**
     * The SearchCount
     * Meta information extracted from the WSDL
     * - documentation: The integer in this field indicates how many searches have been performed for listings in the category (in the last 30 days) using that item specific.
     * - minOccurs: 0
     * @var int
     */
    public $SearchCount;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for RelevanceIndicatorType
     * @uses RelevanceIndicatorType::setSearchCount()
     * @uses RelevanceIndicatorType::setAny()
     * @param int $searchCount
     * @param \DOMDocument $any
     */
    public function __construct($searchCount = null, \DOMDocument $any = null)
    {
        $this
            ->setSearchCount($searchCount)
            ->setAny($any);
    }
    /**
     * Get SearchCount value
     * @return int|null
     */
    public function getSearchCount()
    {
        return $this->SearchCount;
    }
    /**
     * Set SearchCount value
     * @param int $searchCount
     * @return \StructType\RelevanceIndicatorType
     */
    public function setSearchCount($searchCount = null)
    {
        // validation for constraint: int
        if (!is_null($searchCount) && !(is_int($searchCount) || ctype_digit($searchCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($searchCount, true), gettype($searchCount)), __LINE__);
        }
        $this->SearchCount = $searchCount;
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
     * @return \StructType\RelevanceIndicatorType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
