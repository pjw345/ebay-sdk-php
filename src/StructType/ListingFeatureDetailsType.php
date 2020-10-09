<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListingFeatureDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>ListingFeatureDetails</b> container in the <b>GeteBayDetails</b> response. This container indicates the listing features that are enabled or disabled for an eBay site.
 * @subpackage Structs
 */
class ListingFeatureDetailsType extends AbstractStructBase
{
    /**
     * The BoldTitle
     * Meta information extracted from the WSDL
     * - documentation: The enumeration value returned in this field indicates whether or not the Bold Title featured is enabled for the eBay site. If this feature is available for an eBay site, the seller can pass in <code>BoldTitle</code> as an
     * enumeration value in the <b>ListingEnhancement</b> field of an Add/Revise/Relist call.
     * - minOccurs: 0
     * @var string
     */
    public $BoldTitle;
    /**
     * The Border
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note:</b> The Picture Border feature is no longer available on any eBay Marketplace sites, so this value should not be used in Add/Revise/Relist calls, and will not be returned in 'Get' calls. </span> <br>
     * Defines the availability of the Picture Border feature for the site.
     * - minOccurs: 0
     * @var string
     */
    public $Border;
    /**
     * The Highlight
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note:</b> The Highlight feature is no longer available on any eBay Marketplace sites, so this value should not be used in Add/Revise/Relist calls, and will not be returned in 'Get' calls. </span> <br>
     * Defines the availability of the Highlight feature for the site.
     * - minOccurs: 0
     * @var string
     */
    public $Highlight;
    /**
     * The GiftIcon
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note:</b> The Gift Icon feature is no longer available on any eBay Marketplace sites. </span> <br> Defines the availability of the Gift Icon feature for the site.
     * - minOccurs: 0
     * @var string
     */
    public $GiftIcon;
    /**
     * The HomePageFeatured
     * Meta information extracted from the WSDL
     * - documentation: The enumeration value returned in this field indicates whether or not the Home Page Featured feature is enabled for the eBay site. If this feature is available for an eBay site, the seller can pass in <code>HomePageFeatured</code> as
     * an enumeration value in the <b>ListingEnhancement</b> field of an Add/Revise/Relist call.
     * - minOccurs: 0
     * @var string
     */
    public $HomePageFeatured;
    /**
     * The FeaturedFirst
     * Meta information extracted from the WSDL
     * - documentation: The enumeration value returned in this field indicates whether or not the Featured First feature is enabled for the eBay site. As of October 2017, this listing feature is only available to Top-Rated Sellers on the Germany site.
     * - minOccurs: 0
     * @var string
     */
    public $FeaturedFirst;
    /**
     * The FeaturedPlus
     * Meta information extracted from the WSDL
     * - documentation: The enumeration value returned in this field indicates whether or not the Featured Plus feature is enabled for the eBay site.
     * - minOccurs: 0
     * @var string
     */
    public $FeaturedPlus;
    /**
     * The ProPack
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note:</b> The Pro Pack Bundle feature is no longer available on any eBay Marketplace sites. </span> <br> Defines the availability of the Pro Pack Bundle for the site.
     * - minOccurs: 0
     * @var string
     */
    public $ProPack;
    /**
     * The DetailVersion
     * Meta information extracted from the WSDL
     * - documentation: Returns the current version of details.
     * - minOccurs: 0
     * @var string
     */
    public $DetailVersion;
    /**
     * The UpdateTime
     * Meta information extracted from the WSDL
     * - documentation: Gives the time in GMT that the feature flags for the details were last updated.
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
     * Constructor method for ListingFeatureDetailsType
     * @uses ListingFeatureDetailsType::setBoldTitle()
     * @uses ListingFeatureDetailsType::setBorder()
     * @uses ListingFeatureDetailsType::setHighlight()
     * @uses ListingFeatureDetailsType::setGiftIcon()
     * @uses ListingFeatureDetailsType::setHomePageFeatured()
     * @uses ListingFeatureDetailsType::setFeaturedFirst()
     * @uses ListingFeatureDetailsType::setFeaturedPlus()
     * @uses ListingFeatureDetailsType::setProPack()
     * @uses ListingFeatureDetailsType::setDetailVersion()
     * @uses ListingFeatureDetailsType::setUpdateTime()
     * @uses ListingFeatureDetailsType::setAny()
     * @param string $boldTitle
     * @param string $border
     * @param string $highlight
     * @param string $giftIcon
     * @param string $homePageFeatured
     * @param string $featuredFirst
     * @param string $featuredPlus
     * @param string $proPack
     * @param string $detailVersion
     * @param string $updateTime
     * @param \DOMDocument $any
     */
    public function __construct($boldTitle = null, $border = null, $highlight = null, $giftIcon = null, $homePageFeatured = null, $featuredFirst = null, $featuredPlus = null, $proPack = null, $detailVersion = null, $updateTime = null, \DOMDocument $any = null)
    {
        $this
            ->setBoldTitle($boldTitle)
            ->setBorder($border)
            ->setHighlight($highlight)
            ->setGiftIcon($giftIcon)
            ->setHomePageFeatured($homePageFeatured)
            ->setFeaturedFirst($featuredFirst)
            ->setFeaturedPlus($featuredPlus)
            ->setProPack($proPack)
            ->setDetailVersion($detailVersion)
            ->setUpdateTime($updateTime)
            ->setAny($any);
    }
    /**
     * Get BoldTitle value
     * @return string|null
     */
    public function getBoldTitle()
    {
        return $this->BoldTitle;
    }
    /**
     * Set BoldTitle value
     * @uses \EnumType\BoldTitleCodeType::valueIsValid()
     * @uses \EnumType\BoldTitleCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $boldTitle
     * @return \StructType\ListingFeatureDetailsType
     */
    public function setBoldTitle($boldTitle = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BoldTitleCodeType::valueIsValid($boldTitle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\BoldTitleCodeType', is_array($boldTitle) ? implode(', ', $boldTitle) : var_export($boldTitle, true), implode(', ', \EnumType\BoldTitleCodeType::getValidValues())), __LINE__);
        }
        $this->BoldTitle = $boldTitle;
        return $this;
    }
    /**
     * Get Border value
     * @return string|null
     */
    public function getBorder()
    {
        return $this->Border;
    }
    /**
     * Set Border value
     * @uses \EnumType\BorderCodeType::valueIsValid()
     * @uses \EnumType\BorderCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $border
     * @return \StructType\ListingFeatureDetailsType
     */
    public function setBorder($border = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BorderCodeType::valueIsValid($border)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\BorderCodeType', is_array($border) ? implode(', ', $border) : var_export($border, true), implode(', ', \EnumType\BorderCodeType::getValidValues())), __LINE__);
        }
        $this->Border = $border;
        return $this;
    }
    /**
     * Get Highlight value
     * @return string|null
     */
    public function getHighlight()
    {
        return $this->Highlight;
    }
    /**
     * Set Highlight value
     * @uses \EnumType\HighlightCodeType::valueIsValid()
     * @uses \EnumType\HighlightCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $highlight
     * @return \StructType\ListingFeatureDetailsType
     */
    public function setHighlight($highlight = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\HighlightCodeType::valueIsValid($highlight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\HighlightCodeType', is_array($highlight) ? implode(', ', $highlight) : var_export($highlight, true), implode(', ', \EnumType\HighlightCodeType::getValidValues())), __LINE__);
        }
        $this->Highlight = $highlight;
        return $this;
    }
    /**
     * Get GiftIcon value
     * @return string|null
     */
    public function getGiftIcon()
    {
        return $this->GiftIcon;
    }
    /**
     * Set GiftIcon value
     * @uses \EnumType\GiftIconCodeType::valueIsValid()
     * @uses \EnumType\GiftIconCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $giftIcon
     * @return \StructType\ListingFeatureDetailsType
     */
    public function setGiftIcon($giftIcon = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\GiftIconCodeType::valueIsValid($giftIcon)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\GiftIconCodeType', is_array($giftIcon) ? implode(', ', $giftIcon) : var_export($giftIcon, true), implode(', ', \EnumType\GiftIconCodeType::getValidValues())), __LINE__);
        }
        $this->GiftIcon = $giftIcon;
        return $this;
    }
    /**
     * Get HomePageFeatured value
     * @return string|null
     */
    public function getHomePageFeatured()
    {
        return $this->HomePageFeatured;
    }
    /**
     * Set HomePageFeatured value
     * @uses \EnumType\HomePageFeaturedCodeType::valueIsValid()
     * @uses \EnumType\HomePageFeaturedCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $homePageFeatured
     * @return \StructType\ListingFeatureDetailsType
     */
    public function setHomePageFeatured($homePageFeatured = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\HomePageFeaturedCodeType::valueIsValid($homePageFeatured)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\HomePageFeaturedCodeType', is_array($homePageFeatured) ? implode(', ', $homePageFeatured) : var_export($homePageFeatured, true), implode(', ', \EnumType\HomePageFeaturedCodeType::getValidValues())), __LINE__);
        }
        $this->HomePageFeatured = $homePageFeatured;
        return $this;
    }
    /**
     * Get FeaturedFirst value
     * @return string|null
     */
    public function getFeaturedFirst()
    {
        return $this->FeaturedFirst;
    }
    /**
     * Set FeaturedFirst value
     * @uses \EnumType\FeaturedFirstCodeType::valueIsValid()
     * @uses \EnumType\FeaturedFirstCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $featuredFirst
     * @return \StructType\ListingFeatureDetailsType
     */
    public function setFeaturedFirst($featuredFirst = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\FeaturedFirstCodeType::valueIsValid($featuredFirst)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\FeaturedFirstCodeType', is_array($featuredFirst) ? implode(', ', $featuredFirst) : var_export($featuredFirst, true), implode(', ', \EnumType\FeaturedFirstCodeType::getValidValues())), __LINE__);
        }
        $this->FeaturedFirst = $featuredFirst;
        return $this;
    }
    /**
     * Get FeaturedPlus value
     * @return string|null
     */
    public function getFeaturedPlus()
    {
        return $this->FeaturedPlus;
    }
    /**
     * Set FeaturedPlus value
     * @uses \EnumType\FeaturedPlusCodeType::valueIsValid()
     * @uses \EnumType\FeaturedPlusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $featuredPlus
     * @return \StructType\ListingFeatureDetailsType
     */
    public function setFeaturedPlus($featuredPlus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\FeaturedPlusCodeType::valueIsValid($featuredPlus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\FeaturedPlusCodeType', is_array($featuredPlus) ? implode(', ', $featuredPlus) : var_export($featuredPlus, true), implode(', ', \EnumType\FeaturedPlusCodeType::getValidValues())), __LINE__);
        }
        $this->FeaturedPlus = $featuredPlus;
        return $this;
    }
    /**
     * Get ProPack value
     * @return string|null
     */
    public function getProPack()
    {
        return $this->ProPack;
    }
    /**
     * Set ProPack value
     * @uses \EnumType\ProPackCodeType::valueIsValid()
     * @uses \EnumType\ProPackCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $proPack
     * @return \StructType\ListingFeatureDetailsType
     */
    public function setProPack($proPack = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ProPackCodeType::valueIsValid($proPack)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ProPackCodeType', is_array($proPack) ? implode(', ', $proPack) : var_export($proPack, true), implode(', ', \EnumType\ProPackCodeType::getValidValues())), __LINE__);
        }
        $this->ProPack = $proPack;
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
     * @return \StructType\ListingFeatureDetailsType
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
     * @return \StructType\ListingFeatureDetailsType
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
     * @return \StructType\ListingFeatureDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
