<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubscriptionType StructType
 * @subpackage Structs
 */
class SubscriptionType extends AbstractStructBase
{
    /**
     * The EIASToken
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EIASToken;
    /**
     * The SiteID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SiteID;
    /**
     * The Active
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Active;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SubscriptionType
     * @uses SubscriptionType::setEIASToken()
     * @uses SubscriptionType::setSiteID()
     * @uses SubscriptionType::setActive()
     * @uses SubscriptionType::setAny()
     * @param string $eIASToken
     * @param string $siteID
     * @param bool $active
     * @param \DOMDocument $any
     */
    public function __construct($eIASToken = null, $siteID = null, $active = null, \DOMDocument $any = null)
    {
        $this
            ->setEIASToken($eIASToken)
            ->setSiteID($siteID)
            ->setActive($active)
            ->setAny($any);
    }
    /**
     * Get EIASToken value
     * @return string|null
     */
    public function getEIASToken()
    {
        return $this->EIASToken;
    }
    /**
     * Set EIASToken value
     * @param string $eIASToken
     * @return \StructType\SubscriptionType
     */
    public function setEIASToken($eIASToken = null)
    {
        // validation for constraint: string
        if (!is_null($eIASToken) && !is_string($eIASToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eIASToken, true), gettype($eIASToken)), __LINE__);
        }
        $this->EIASToken = $eIASToken;
        return $this;
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
     * @uses \EnumType\SiteCodeType::valueIsValid()
     * @uses \EnumType\SiteCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $siteID
     * @return \StructType\SubscriptionType
     */
    public function setSiteID($siteID = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SiteCodeType::valueIsValid($siteID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SiteCodeType', is_array($siteID) ? implode(', ', $siteID) : var_export($siteID, true), implode(', ', \EnumType\SiteCodeType::getValidValues())), __LINE__);
        }
        $this->SiteID = $siteID;
        return $this;
    }
    /**
     * Get Active value
     * @return bool|null
     */
    public function getActive()
    {
        return $this->Active;
    }
    /**
     * Set Active value
     * @param bool $active
     * @return \StructType\SubscriptionType
     */
    public function setActive($active = null)
    {
        // validation for constraint: boolean
        if (!is_null($active) && !is_bool($active)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($active, true), gettype($active)), __LINE__);
        }
        $this->Active = $active;
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
     * @return \StructType\SubscriptionType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
