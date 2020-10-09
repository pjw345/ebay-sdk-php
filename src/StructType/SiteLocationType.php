<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SiteLocationType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the data that defines a site-based filter (used when searching for items and filtering the search result set).
 * @subpackage Structs
 */
class SiteLocationType extends AbstractStructBase
{
    /**
     * The SiteID
     * Meta information extracted from the WSDL
     * - documentation: Specifies the criteria for filtering search results by site, where site is determined by the site ID in the SOAP URL or, for Unified Schema XML requests, X-EBAY-API-SITEID HTTP Header.
     * - minOccurs: 0
     * @var string
     */
    public $SiteID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SiteLocationType
     * @uses SiteLocationType::setSiteID()
     * @uses SiteLocationType::setAny()
     * @param string $siteID
     * @param \DOMDocument $any
     */
    public function __construct($siteID = null, \DOMDocument $any = null)
    {
        $this
            ->setSiteID($siteID)
            ->setAny($any);
    }
    /**
     * Get SiteID value
     * @return string|null
     */
    public function getSiteID()
    {
        return $this->SiteID;
    }
    /**
     * Set SiteID value
     * @uses \EnumType\SiteIDFilterCodeType::valueIsValid()
     * @uses \EnumType\SiteIDFilterCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $siteID
     * @return \StructType\SiteLocationType
     */
    public function setSiteID($siteID = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SiteIDFilterCodeType::valueIsValid($siteID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SiteIDFilterCodeType', is_array($siteID) ? implode(', ', $siteID) : var_export($siteID, true), implode(', ', \EnumType\SiteIDFilterCodeType::getValidValues())), __LINE__);
        }
        $this->SiteID = $siteID;
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
     * @return \StructType\SiteLocationType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
