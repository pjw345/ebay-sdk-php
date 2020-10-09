<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExcludeShippingLocationDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>ExcludeShippingLocationDetails</b> containers that are returned in the <b>GeteBayDetails</b> response. The values returned in the <b>ExcludeShippingLocationDetails.Location</b> fields are the values that can be
 * specified when specifying excluded shipping locations in an Add/Revise/Relist item call, or in a shipping business policy.
 * @subpackage Structs
 */
class ExcludeShippingLocationDetailsType extends AbstractStructBase
{
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: The localized location name.
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - documentation: The location or region code to be used with the AddItem family of calls. These codes are also returned by GetItem. This code reflects the <a href=
     * "http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm" >ISO 3166</a> codes.
     * - minOccurs: 0
     * @var string
     */
    public $Location;
    /**
     * The Region
     * Meta information extracted from the WSDL
     * - documentation: The region code to which the location belongs.
     * - minOccurs: 0
     * @var string
     */
    public $Region;
    /**
     * The DetailVersion
     * Meta information extracted from the WSDL
     * - documentation: Returns the current version number of the ExcludeShippingLocation data. Use the version number to determine if you need to refresh your cached client data.
     * - minOccurs: 0
     * @var string
     */
    public $DetailVersion;
    /**
     * The UpdateTime
     * Meta information extracted from the WSDL
     * - documentation: The time in GMT that the feature flags for the details were last updated. Use this timestamp to determine if you need to refresh your cached client data.
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
     * Constructor method for ExcludeShippingLocationDetailsType
     * @uses ExcludeShippingLocationDetailsType::setDescription()
     * @uses ExcludeShippingLocationDetailsType::setLocation()
     * @uses ExcludeShippingLocationDetailsType::setRegion()
     * @uses ExcludeShippingLocationDetailsType::setDetailVersion()
     * @uses ExcludeShippingLocationDetailsType::setUpdateTime()
     * @uses ExcludeShippingLocationDetailsType::setAny()
     * @param string $description
     * @param string $location
     * @param string $region
     * @param string $detailVersion
     * @param string $updateTime
     * @param \DOMDocument $any
     */
    public function __construct($description = null, $location = null, $region = null, $detailVersion = null, $updateTime = null, \DOMDocument $any = null)
    {
        $this
            ->setDescription($description)
            ->setLocation($location)
            ->setRegion($region)
            ->setDetailVersion($detailVersion)
            ->setUpdateTime($updateTime)
            ->setAny($any);
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
     * @return \StructType\ExcludeShippingLocationDetailsType
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
     * Get Location value
     * @return string|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param string $location
     * @return \StructType\ExcludeShippingLocationDetailsType
     */
    public function setLocation($location = null)
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location, true), gettype($location)), __LINE__);
        }
        $this->Location = $location;
        return $this;
    }
    /**
     * Get Region value
     * @return string|null
     */
    public function getRegion()
    {
        return $this->Region;
    }
    /**
     * Set Region value
     * @param string $region
     * @return \StructType\ExcludeShippingLocationDetailsType
     */
    public function setRegion($region = null)
    {
        // validation for constraint: string
        if (!is_null($region) && !is_string($region)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($region, true), gettype($region)), __LINE__);
        }
        $this->Region = $region;
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
     * @return \StructType\ExcludeShippingLocationDetailsType
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
     * @return \StructType\ExcludeShippingLocationDetailsType
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
     * @return \StructType\ExcludeShippingLocationDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
