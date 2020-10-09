<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingLocationDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Details about a region or location to which the seller is willing to ship.
 * @subpackage Structs
 */
class ShippingLocationDetailsType extends AbstractStructBase
{
    /**
     * The ShippingLocation
     * Meta information extracted from the WSDL
     * - documentation: Short name or abbreviation for a region (e.g., Asia) or location (e.g. Japan).
     * - minOccurs: 0
     * @var string
     */
    public $ShippingLocation;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: Display string that applications can use to present a list of shipping locations in a more user-friendly format (such as in a drop-down list). This field is localized in the language of the site.
     * - minOccurs: 0
     * @var string
     */
    public $Description;
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
     * Constructor method for ShippingLocationDetailsType
     * @uses ShippingLocationDetailsType::setShippingLocation()
     * @uses ShippingLocationDetailsType::setDescription()
     * @uses ShippingLocationDetailsType::setDetailVersion()
     * @uses ShippingLocationDetailsType::setUpdateTime()
     * @uses ShippingLocationDetailsType::setAny()
     * @param string $shippingLocation
     * @param string $description
     * @param string $detailVersion
     * @param string $updateTime
     * @param \DOMDocument $any
     */
    public function __construct($shippingLocation = null, $description = null, $detailVersion = null, $updateTime = null, \DOMDocument $any = null)
    {
        $this
            ->setShippingLocation($shippingLocation)
            ->setDescription($description)
            ->setDetailVersion($detailVersion)
            ->setUpdateTime($updateTime)
            ->setAny($any);
    }
    /**
     * Get ShippingLocation value
     * @return string|null
     */
    public function getShippingLocation()
    {
        return $this->ShippingLocation;
    }
    /**
     * Set ShippingLocation value
     * @param string $shippingLocation
     * @return \StructType\ShippingLocationDetailsType
     */
    public function setShippingLocation($shippingLocation = null)
    {
        // validation for constraint: string
        if (!is_null($shippingLocation) && !is_string($shippingLocation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingLocation, true), gettype($shippingLocation)), __LINE__);
        }
        $this->ShippingLocation = $shippingLocation;
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
     * @return \StructType\ShippingLocationDetailsType
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
     * @return \StructType\ShippingLocationDetailsType
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
     * @return \StructType\ShippingLocationDetailsType
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
     * @return \StructType\ShippingLocationDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
