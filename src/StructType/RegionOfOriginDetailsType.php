<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegionOfOriginDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is no longer used; replaced by <b>ShippingLocationDetails</b>.
 * @subpackage Structs
 */
class RegionOfOriginDetailsType extends AbstractStructBase
{
    /**
     * The RegionOfOrigin
     * Meta information extracted from the WSDL
     * - documentation: String identifier for a continent, a geographic region, or a country.
     * - minOccurs: 0
     * @var string
     */
    public $RegionOfOrigin;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: Full name of the continent, geographic region, or country; useful for display purposes.
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: Indicates the status of the Region of Origin value. Only Region of Origin values in the 'Active' state can be used.
     * - minOccurs: 0
     * @var string
     */
    public $Status;
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
     * Constructor method for RegionOfOriginDetailsType
     * @uses RegionOfOriginDetailsType::setRegionOfOrigin()
     * @uses RegionOfOriginDetailsType::setDescription()
     * @uses RegionOfOriginDetailsType::setStatus()
     * @uses RegionOfOriginDetailsType::setDetailVersion()
     * @uses RegionOfOriginDetailsType::setUpdateTime()
     * @uses RegionOfOriginDetailsType::setAny()
     * @param string $regionOfOrigin
     * @param string $description
     * @param string $status
     * @param string $detailVersion
     * @param string $updateTime
     * @param \DOMDocument $any
     */
    public function __construct($regionOfOrigin = null, $description = null, $status = null, $detailVersion = null, $updateTime = null, \DOMDocument $any = null)
    {
        $this
            ->setRegionOfOrigin($regionOfOrigin)
            ->setDescription($description)
            ->setStatus($status)
            ->setDetailVersion($detailVersion)
            ->setUpdateTime($updateTime)
            ->setAny($any);
    }
    /**
     * Get RegionOfOrigin value
     * @return string|null
     */
    public function getRegionOfOrigin()
    {
        return $this->RegionOfOrigin;
    }
    /**
     * Set RegionOfOrigin value
     * @param string $regionOfOrigin
     * @return \StructType\RegionOfOriginDetailsType
     */
    public function setRegionOfOrigin($regionOfOrigin = null)
    {
        // validation for constraint: string
        if (!is_null($regionOfOrigin) && !is_string($regionOfOrigin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($regionOfOrigin, true), gettype($regionOfOrigin)), __LINE__);
        }
        $this->RegionOfOrigin = $regionOfOrigin;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \StructType\RegionOfOriginDetailsType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
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
     * @uses \EnumType\StatusCodeType::valueIsValid()
     * @uses \EnumType\StatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \StructType\RegionOfOriginDetailsType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\StatusCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\StatusCodeType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \EnumType\StatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
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
     * @return \StructType\RegionOfOriginDetailsType
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
     * @return \StructType\RegionOfOriginDetailsType
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
     * @return \StructType\RegionOfOriginDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
