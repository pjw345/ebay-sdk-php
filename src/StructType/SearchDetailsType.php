<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class SearchDetailsType extends AbstractStructBase
{
    /**
     * The BuyItNowEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $BuyItNowEnabled;
    /**
     * The Picture
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $Picture;
    /**
     * The RecentListing
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $RecentListing;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SearchDetailsType
     * @uses SearchDetailsType::setBuyItNowEnabled()
     * @uses SearchDetailsType::setPicture()
     * @uses SearchDetailsType::setRecentListing()
     * @uses SearchDetailsType::setAny()
     * @param bool $buyItNowEnabled
     * @param bool $picture
     * @param bool $recentListing
     * @param \DOMDocument $any
     */
    public function __construct($buyItNowEnabled = null, $picture = null, $recentListing = null, \DOMDocument $any = null)
    {
        $this
            ->setBuyItNowEnabled($buyItNowEnabled)
            ->setPicture($picture)
            ->setRecentListing($recentListing)
            ->setAny($any);
    }
    /**
     * Get BuyItNowEnabled value
     * @return bool|null
     */
    public function getBuyItNowEnabled()
    {
        return $this->BuyItNowEnabled;
    }
    /**
     * Set BuyItNowEnabled value
     * @param bool $buyItNowEnabled
     * @return \StructType\SearchDetailsType
     */
    public function setBuyItNowEnabled($buyItNowEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($buyItNowEnabled) && !is_bool($buyItNowEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($buyItNowEnabled, true), gettype($buyItNowEnabled)), __LINE__);
        }
        $this->BuyItNowEnabled = $buyItNowEnabled;
        return $this;
    }
    /**
     * Get Picture value
     * @return bool|null
     */
    public function getPicture()
    {
        return $this->Picture;
    }
    /**
     * Set Picture value
     * @param bool $picture
     * @return \StructType\SearchDetailsType
     */
    public function setPicture($picture = null)
    {
        // validation for constraint: boolean
        if (!is_null($picture) && !is_bool($picture)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($picture, true), gettype($picture)), __LINE__);
        }
        $this->Picture = $picture;
        return $this;
    }
    /**
     * Get RecentListing value
     * @return bool|null
     */
    public function getRecentListing()
    {
        return $this->RecentListing;
    }
    /**
     * Set RecentListing value
     * @param bool $recentListing
     * @return \StructType\SearchDetailsType
     */
    public function setRecentListing($recentListing = null)
    {
        // validation for constraint: boolean
        if (!is_null($recentListing) && !is_bool($recentListing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($recentListing, true), gettype($recentListing)), __LINE__);
        }
        $this->RecentListing = $recentListing;
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
     * @return \StructType\SearchDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
