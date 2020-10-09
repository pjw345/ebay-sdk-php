<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisputeFilterCountType StructType
 * Meta information extracted from the WSDL
 * - documentation: The number of disputes that match a given filter. <br/><br/> <span class="tablenote"><strong>Note:</strong> 'Item Not Received' or 'Significantly Not As Described' cases, initiated by buyers through the eBay Money Back Guarantee
 * program, are not returned with <b>GetUserDisputes</b>. The <a href="https://developer.ebay.com/Devzone/post-order/post-order_v2_casemanagement-caseId__get.html#overview">getCase</a> method of the <a
 * href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a> is used to retrieve Money Back Guarantee cases programmatically. </span>
 * @subpackage Structs
 */
class DisputeFilterCountType extends AbstractStructBase
{
    /**
     * The DisputeFilterType
     * Meta information extracted from the WSDL
     * - documentation: A filter used to reduce the number of disputes returned. The filter uses criteria such as whether the dispute is awaiting a response, is closed, or is eligible for credit. Both <i>Unpaid Item</i> and <i>Item Not Received</i> disputes
     * can be returned for the same filter value.
     * - minOccurs: 0
     * @var string
     */
    public $DisputeFilterType;
    /**
     * The TotalAvailable
     * Meta information extracted from the WSDL
     * - documentation: The number of disputes that match the filter. In the <b>GetUserDisputes</b> response, not returned for the filter type that was used in the request.
     * - minOccurs: 0
     * @var int
     */
    public $TotalAvailable;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for DisputeFilterCountType
     * @uses DisputeFilterCountType::setDisputeFilterType()
     * @uses DisputeFilterCountType::setTotalAvailable()
     * @uses DisputeFilterCountType::setAny()
     * @param string $disputeFilterType
     * @param int $totalAvailable
     * @param \DOMDocument $any
     */
    public function __construct($disputeFilterType = null, $totalAvailable = null, \DOMDocument $any = null)
    {
        $this
            ->setDisputeFilterType($disputeFilterType)
            ->setTotalAvailable($totalAvailable)
            ->setAny($any);
    }
    /**
     * Get DisputeFilterType value
     * @return string|null
     */
    public function getDisputeFilterType()
    {
        return $this->DisputeFilterType;
    }
    /**
     * Set DisputeFilterType value
     * @uses \EnumType\DisputeFilterTypeCodeType::valueIsValid()
     * @uses \EnumType\DisputeFilterTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $disputeFilterType
     * @return \StructType\DisputeFilterCountType
     */
    public function setDisputeFilterType($disputeFilterType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DisputeFilterTypeCodeType::valueIsValid($disputeFilterType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DisputeFilterTypeCodeType', is_array($disputeFilterType) ? implode(', ', $disputeFilterType) : var_export($disputeFilterType, true), implode(', ', \EnumType\DisputeFilterTypeCodeType::getValidValues())), __LINE__);
        }
        $this->DisputeFilterType = $disputeFilterType;
        return $this;
    }
    /**
     * Get TotalAvailable value
     * @return int|null
     */
    public function getTotalAvailable()
    {
        return $this->TotalAvailable;
    }
    /**
     * Set TotalAvailable value
     * @param int $totalAvailable
     * @return \StructType\DisputeFilterCountType
     */
    public function setTotalAvailable($totalAvailable = null)
    {
        // validation for constraint: int
        if (!is_null($totalAvailable) && !(is_int($totalAvailable) || ctype_digit($totalAvailable))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalAvailable, true), gettype($totalAvailable)), __LINE__);
        }
        $this->TotalAvailable = $totalAvailable;
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
     * @return \StructType\DisputeFilterCountType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
