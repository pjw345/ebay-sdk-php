<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisputeResolutionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains all information about a dispute resolution. A dispute can have a resolution even if the seller does not receive payment. The resolution can have various results, including a Final Value Fee credit to the seller or a strike
 * to the buyer. <br/><br/> <span class="tablenote"><strong>Note:</strong> 'Item Not Received' or 'Significantly Not As Described' cases, initiated by buyers through the eBay Money Back Guarantee program, are not returned with <b>GetUserDisputes</b>.
 * The <a href="https://developer.ebay.com/Devzone/post-order/post-order_v2_casemanagement-caseId__get.html#overview">getCase</a> method of the <a href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a> is used
 * to retrieve Money Back Guarantee cases programmatically. </span>
 * @subpackage Structs
 */
class DisputeResolutionType extends AbstractStructBase
{
    /**
     * The DisputeResolutionRecordType
     * Meta information extracted from the WSDL
     * - documentation: The action resulting from the resolution, affecting either the buyer or the seller.
     * - minOccurs: 0
     * @var string
     */
    public $DisputeResolutionRecordType;
    /**
     * The DisputeResolutionReason
     * Meta information extracted from the WSDL
     * - documentation: The reason for the resolution. The DisputeResolutionReason results in the action described by the DisputeResolutionRecordType.
     * - minOccurs: 0
     * @var string
     */
    public $DisputeResolutionReason;
    /**
     * The ResolutionTime
     * Meta information extracted from the WSDL
     * - documentation: The date and time the dispute was resolved, in GMT.
     * - minOccurs: 0
     * @var string
     */
    public $ResolutionTime;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for DisputeResolutionType
     * @uses DisputeResolutionType::setDisputeResolutionRecordType()
     * @uses DisputeResolutionType::setDisputeResolutionReason()
     * @uses DisputeResolutionType::setResolutionTime()
     * @uses DisputeResolutionType::setAny()
     * @param string $disputeResolutionRecordType
     * @param string $disputeResolutionReason
     * @param string $resolutionTime
     * @param \DOMDocument $any
     */
    public function __construct($disputeResolutionRecordType = null, $disputeResolutionReason = null, $resolutionTime = null, \DOMDocument $any = null)
    {
        $this
            ->setDisputeResolutionRecordType($disputeResolutionRecordType)
            ->setDisputeResolutionReason($disputeResolutionReason)
            ->setResolutionTime($resolutionTime)
            ->setAny($any);
    }
    /**
     * Get DisputeResolutionRecordType value
     * @return string|null
     */
    public function getDisputeResolutionRecordType()
    {
        return $this->DisputeResolutionRecordType;
    }
    /**
     * Set DisputeResolutionRecordType value
     * @uses \EnumType\DisputeResolutionRecordTypeCodeType::valueIsValid()
     * @uses \EnumType\DisputeResolutionRecordTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $disputeResolutionRecordType
     * @return \StructType\DisputeResolutionType
     */
    public function setDisputeResolutionRecordType($disputeResolutionRecordType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DisputeResolutionRecordTypeCodeType::valueIsValid($disputeResolutionRecordType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DisputeResolutionRecordTypeCodeType', is_array($disputeResolutionRecordType) ? implode(', ', $disputeResolutionRecordType) : var_export($disputeResolutionRecordType, true), implode(', ', \EnumType\DisputeResolutionRecordTypeCodeType::getValidValues())), __LINE__);
        }
        $this->DisputeResolutionRecordType = $disputeResolutionRecordType;
        return $this;
    }
    /**
     * Get DisputeResolutionReason value
     * @return string|null
     */
    public function getDisputeResolutionReason()
    {
        return $this->DisputeResolutionReason;
    }
    /**
     * Set DisputeResolutionReason value
     * @uses \EnumType\DisputeResolutionReasonCodeType::valueIsValid()
     * @uses \EnumType\DisputeResolutionReasonCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $disputeResolutionReason
     * @return \StructType\DisputeResolutionType
     */
    public function setDisputeResolutionReason($disputeResolutionReason = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DisputeResolutionReasonCodeType::valueIsValid($disputeResolutionReason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DisputeResolutionReasonCodeType', is_array($disputeResolutionReason) ? implode(', ', $disputeResolutionReason) : var_export($disputeResolutionReason, true), implode(', ', \EnumType\DisputeResolutionReasonCodeType::getValidValues())), __LINE__);
        }
        $this->DisputeResolutionReason = $disputeResolutionReason;
        return $this;
    }
    /**
     * Get ResolutionTime value
     * @return string|null
     */
    public function getResolutionTime()
    {
        return $this->ResolutionTime;
    }
    /**
     * Set ResolutionTime value
     * @param string $resolutionTime
     * @return \StructType\DisputeResolutionType
     */
    public function setResolutionTime($resolutionTime = null)
    {
        // validation for constraint: string
        if (!is_null($resolutionTime) && !is_string($resolutionTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($resolutionTime, true), gettype($resolutionTime)), __LINE__);
        }
        $this->ResolutionTime = $resolutionTime;
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
     * @return \StructType\DisputeResolutionType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
