<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchStandingDashboardType StructType
 * Meta information extracted from the WSDL
 * - documentation: Provides information about the visibility level you've earned for your eBay listings. When you have a better search standing, your listings may receive higher placement in Best Match search results.
 * @subpackage Structs
 */
class SearchStandingDashboardType extends AbstractStructBase
{
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: Your earned search standing status. To qualify for a Standard or Raised search standing, make sure your ratings meet or exceed the required minimum levels in buyer satisfaction (see <b>BuyerSatisfaction.Status</b> in this call) and
     * detailed seller ratings (DSRs). See <b>GetFeedback</b> for details.
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SearchStandingDashboardType
     * @uses SearchStandingDashboardType::setStatus()
     * @uses SearchStandingDashboardType::setAny()
     * @param string $status
     * @param \DOMDocument $any
     */
    public function __construct($status = null, \DOMDocument $any = null)
    {
        $this
            ->setStatus($status)
            ->setAny($any);
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \EnumType\SearchStandingStatusCodeType::valueIsValid()
     * @uses \EnumType\SearchStandingStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \StructType\SearchStandingDashboardType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SearchStandingStatusCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SearchStandingStatusCodeType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \EnumType\SearchStandingStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
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
     * @return \StructType\SearchStandingDashboardType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
