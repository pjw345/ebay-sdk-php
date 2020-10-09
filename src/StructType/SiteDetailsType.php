<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SiteDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Details about a specific site.
 * @subpackage Structs
 */
class SiteDetailsType extends AbstractStructBase
{
    /**
     * The Site
     * Meta information extracted from the WSDL
     * - documentation: Short name that identifies an eBay site. Usually, an eBay site is associated with a particular country or region (e.g., US or Belgium_French). Specialty sites (e.g., eBay Stores) use the same site ID as their associated main eBay
     * site. The US eBay Motors site is an exception to this convention.
     * - minOccurs: 0
     * @var string
     */
    public $Site;
    /**
     * The SiteID
     * Meta information extracted from the WSDL
     * - documentation: Numeric identifier for an eBay site. If you are using the SOAP API, you use numeric site IDs in the request URL. If you are using the XML API, you use numeric site IDs in the X-EBAY-API-SITEID header.
     * - minOccurs: 0
     * @var int
     */
    public $SiteID;
    /**
     * The DetailVersion
     * Meta information extracted from the WSDL
     * - documentation: Returns the latest version number for this field. The version can be used to determine if and when to refresh cached client data.
     * - minOccurs: 0
     * @var string
     */
    public $DetailVersion;
    /**
     * The UpdateTime
     * Meta information extracted from the WSDL
     * - documentation: Gives the time in GMT that the feature flags for the details were last updated. This timestamp can be used to determine if and when to refresh cached client data.
     * - minOccurs: 0
     * @var string
     */
    public $UpdateTime;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SiteDetailsType
     * @uses SiteDetailsType::setSite()
     * @uses SiteDetailsType::setSiteID()
     * @uses SiteDetailsType::setDetailVersion()
     * @uses SiteDetailsType::setUpdateTime()
     * @uses SiteDetailsType::setAny()
     * @param string $site
     * @param int $siteID
     * @param string $detailVersion
     * @param string $updateTime
     * @param \DOMDocument $any
     */
    public function __construct($site = null, $siteID = null, $detailVersion = null, $updateTime = null, \DOMDocument $any = null)
    {
        $this
            ->setSite($site)
            ->setSiteID($siteID)
            ->setDetailVersion($detailVersion)
            ->setUpdateTime($updateTime)
            ->setAny($any);
    }
    /**
     * Get Site value
     * @return string|null
     */
    public function getSite()
    {
        return $this->Site;
    }
    /**
     * Set Site value
     * @uses \EnumType\SiteCodeType::valueIsValid()
     * @uses \EnumType\SiteCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $site
     * @return \StructType\SiteDetailsType
     */
    public function setSite($site = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SiteCodeType::valueIsValid($site)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SiteCodeType', is_array($site) ? implode(', ', $site) : var_export($site, true), implode(', ', \EnumType\SiteCodeType::getValidValues())), __LINE__);
        }
        $this->Site = $site;
        return $this;
    }
    /**
     * Get SiteID value
     * @return int|null
     */
    public function getSiteID()
    {
        return $this->SiteID;
    }
    /**
     * Set SiteID value
     * @param int $siteID
     * @return \StructType\SiteDetailsType
     */
    public function setSiteID($siteID = null)
    {
        // validation for constraint: int
        if (!is_null($siteID) && !(is_int($siteID) || ctype_digit($siteID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($siteID, true), gettype($siteID)), __LINE__);
        }
        $this->SiteID = $siteID;
        return $this;
    }
    /**
     * Get DetailVersion value
     * @return string|null
     */
    public function getDetailVersion()
    {
        return $this->DetailVersion;
    }
    /**
     * Set DetailVersion value
     * @param string $detailVersion
     * @return \StructType\SiteDetailsType
     */
    public function setDetailVersion($detailVersion = null)
    {
        // validation for constraint: string
        if (!is_null($detailVersion) && !is_string($detailVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailVersion, true), gettype($detailVersion)), __LINE__);
        }
        $this->DetailVersion = $detailVersion;
        return $this;
    }
    /**
     * Get UpdateTime value
     * @return string|null
     */
    public function getUpdateTime()
    {
        return $this->UpdateTime;
    }
    /**
     * Set UpdateTime value
     * @param string $updateTime
     * @return \StructType\SiteDetailsType
     */
    public function setUpdateTime($updateTime = null)
    {
        // validation for constraint: string
        if (!is_null($updateTime) && !is_string($updateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updateTime, true), gettype($updateTime)), __LINE__);
        }
        $this->UpdateTime = $updateTime;
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
     * @return \StructType\SiteDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
