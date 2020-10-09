<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for URLDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>URLDetails</b> containers that are returned in the response of <b>GeteBayDetails</b> if the <code>URLDetails</code> value is used in the <b>DetailName</b> field of the call request. Each <b>URLDetails</b>
 * container conists of the URL of the different eBay pages, such as the View Item URL, the eBay Store URL, and others.
 * @subpackage Structs
 */
class URLDetailsType extends AbstractStructBase
{
    /**
     * The URLType
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the type of eBay page.
     * - minOccurs: 0
     * @var string
     */
    public $URLType;
    /**
     * The URL
     * Meta information extracted from the WSDL
     * - documentation: A commonly used eBay URL. Applications use some of these URLs (such as the View Item URL) to launch eBay Web site pages in a browser.<br><br> Logo URLs are required to be used in certain types of applications. See your API license
     * agreement. Also see this page for logo usage rules:<br> http://developer.ebay.com/join/licenses/apilogousage
     * - minOccurs: 0
     * @var string
     */
    public $URL;
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
     * Constructor method for URLDetailsType
     * @uses URLDetailsType::setURLType()
     * @uses URLDetailsType::setURL()
     * @uses URLDetailsType::setDetailVersion()
     * @uses URLDetailsType::setUpdateTime()
     * @uses URLDetailsType::setAny()
     * @param string $uRLType
     * @param string $uRL
     * @param string $detailVersion
     * @param string $updateTime
     * @param \DOMDocument $any
     */
    public function __construct($uRLType = null, $uRL = null, $detailVersion = null, $updateTime = null, \DOMDocument $any = null)
    {
        $this
            ->setURLType($uRLType)
            ->setURL($uRL)
            ->setDetailVersion($detailVersion)
            ->setUpdateTime($updateTime)
            ->setAny($any);
    }
    /**
     * Get URLType value
     * @return string|null
     */
    public function getURLType()
    {
        return $this->URLType;
    }
    /**
     * Set URLType value
     * @uses \EnumType\URLTypeCodeType::valueIsValid()
     * @uses \EnumType\URLTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $uRLType
     * @return \StructType\URLDetailsType
     */
    public function setURLType($uRLType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\URLTypeCodeType::valueIsValid($uRLType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\URLTypeCodeType', is_array($uRLType) ? implode(', ', $uRLType) : var_export($uRLType, true), implode(', ', \EnumType\URLTypeCodeType::getValidValues())), __LINE__);
        }
        $this->URLType = $uRLType;
        return $this;
    }
    /**
     * Get URL value
     * @return string|null
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param string $uRL
     * @return \StructType\URLDetailsType
     */
    public function setURL($uRL = null)
    {
        // validation for constraint: string
        if (!is_null($uRL) && !is_string($uRL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uRL, true), gettype($uRL)), __LINE__);
        }
        $this->URL = $uRL;
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
     * @return \StructType\URLDetailsType
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
     * @return \StructType\URLDetailsType
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
     * @return \StructType\URLDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
