<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrossPromotionPreferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class CrossPromotionPreferencesType extends AbstractStructBase
{
    /**
     * The CrossPromotionEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $CrossPromotionEnabled;
    /**
     * The CrossSellItemFormatSortFilter
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $CrossSellItemFormatSortFilter;
    /**
     * The CrossSellGallerySortFilter
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $CrossSellGallerySortFilter;
    /**
     * The CrossSellItemSortFilter
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $CrossSellItemSortFilter;
    /**
     * The UpSellItemFormatSortFilter
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $UpSellItemFormatSortFilter;
    /**
     * The UpSellGallerySortFilter
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $UpSellGallerySortFilter;
    /**
     * The UpSellItemSortFilter
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $UpSellItemSortFilter;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for CrossPromotionPreferencesType
     * @uses CrossPromotionPreferencesType::setCrossPromotionEnabled()
     * @uses CrossPromotionPreferencesType::setCrossSellItemFormatSortFilter()
     * @uses CrossPromotionPreferencesType::setCrossSellGallerySortFilter()
     * @uses CrossPromotionPreferencesType::setCrossSellItemSortFilter()
     * @uses CrossPromotionPreferencesType::setUpSellItemFormatSortFilter()
     * @uses CrossPromotionPreferencesType::setUpSellGallerySortFilter()
     * @uses CrossPromotionPreferencesType::setUpSellItemSortFilter()
     * @uses CrossPromotionPreferencesType::setAny()
     * @param bool $crossPromotionEnabled
     * @param string $crossSellItemFormatSortFilter
     * @param string $crossSellGallerySortFilter
     * @param string $crossSellItemSortFilter
     * @param string $upSellItemFormatSortFilter
     * @param string $upSellGallerySortFilter
     * @param string $upSellItemSortFilter
     * @param \DOMDocument $any
     */
    public function __construct($crossPromotionEnabled = null, $crossSellItemFormatSortFilter = null, $crossSellGallerySortFilter = null, $crossSellItemSortFilter = null, $upSellItemFormatSortFilter = null, $upSellGallerySortFilter = null, $upSellItemSortFilter = null, \DOMDocument $any = null)
    {
        $this
            ->setCrossPromotionEnabled($crossPromotionEnabled)
            ->setCrossSellItemFormatSortFilter($crossSellItemFormatSortFilter)
            ->setCrossSellGallerySortFilter($crossSellGallerySortFilter)
            ->setCrossSellItemSortFilter($crossSellItemSortFilter)
            ->setUpSellItemFormatSortFilter($upSellItemFormatSortFilter)
            ->setUpSellGallerySortFilter($upSellGallerySortFilter)
            ->setUpSellItemSortFilter($upSellItemSortFilter)
            ->setAny($any);
    }
    /**
     * Get CrossPromotionEnabled value
     * @return bool|null
     */
    public function getCrossPromotionEnabled()
    {
        return $this->CrossPromotionEnabled;
    }
    /**
     * Set CrossPromotionEnabled value
     * @param bool $crossPromotionEnabled
     * @return \StructType\CrossPromotionPreferencesType
     */
    public function setCrossPromotionEnabled($crossPromotionEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($crossPromotionEnabled) && !is_bool($crossPromotionEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($crossPromotionEnabled, true), gettype($crossPromotionEnabled)), __LINE__);
        }
        $this->CrossPromotionEnabled = $crossPromotionEnabled;
        return $this;
    }
    /**
     * Get CrossSellItemFormatSortFilter value
     * @return string|null
     */
    public function getCrossSellItemFormatSortFilter()
    {
        return $this->CrossSellItemFormatSortFilter;
    }
    /**
     * Set CrossSellItemFormatSortFilter value
     * @uses \EnumType\ItemFormatSortFilterCodeType::valueIsValid()
     * @uses \EnumType\ItemFormatSortFilterCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $crossSellItemFormatSortFilter
     * @return \StructType\CrossPromotionPreferencesType
     */
    public function setCrossSellItemFormatSortFilter($crossSellItemFormatSortFilter = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ItemFormatSortFilterCodeType::valueIsValid($crossSellItemFormatSortFilter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ItemFormatSortFilterCodeType', is_array($crossSellItemFormatSortFilter) ? implode(', ', $crossSellItemFormatSortFilter) : var_export($crossSellItemFormatSortFilter, true), implode(', ', \EnumType\ItemFormatSortFilterCodeType::getValidValues())), __LINE__);
        }
        $this->CrossSellItemFormatSortFilter = $crossSellItemFormatSortFilter;
        return $this;
    }
    /**
     * Get CrossSellGallerySortFilter value
     * @return string|null
     */
    public function getCrossSellGallerySortFilter()
    {
        return $this->CrossSellGallerySortFilter;
    }
    /**
     * Set CrossSellGallerySortFilter value
     * @uses \EnumType\GallerySortFilterCodeType::valueIsValid()
     * @uses \EnumType\GallerySortFilterCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $crossSellGallerySortFilter
     * @return \StructType\CrossPromotionPreferencesType
     */
    public function setCrossSellGallerySortFilter($crossSellGallerySortFilter = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\GallerySortFilterCodeType::valueIsValid($crossSellGallerySortFilter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\GallerySortFilterCodeType', is_array($crossSellGallerySortFilter) ? implode(', ', $crossSellGallerySortFilter) : var_export($crossSellGallerySortFilter, true), implode(', ', \EnumType\GallerySortFilterCodeType::getValidValues())), __LINE__);
        }
        $this->CrossSellGallerySortFilter = $crossSellGallerySortFilter;
        return $this;
    }
    /**
     * Get CrossSellItemSortFilter value
     * @return string|null
     */
    public function getCrossSellItemSortFilter()
    {
        return $this->CrossSellItemSortFilter;
    }
    /**
     * Set CrossSellItemSortFilter value
     * @uses \EnumType\ItemSortFilterCodeType::valueIsValid()
     * @uses \EnumType\ItemSortFilterCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $crossSellItemSortFilter
     * @return \StructType\CrossPromotionPreferencesType
     */
    public function setCrossSellItemSortFilter($crossSellItemSortFilter = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ItemSortFilterCodeType::valueIsValid($crossSellItemSortFilter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ItemSortFilterCodeType', is_array($crossSellItemSortFilter) ? implode(', ', $crossSellItemSortFilter) : var_export($crossSellItemSortFilter, true), implode(', ', \EnumType\ItemSortFilterCodeType::getValidValues())), __LINE__);
        }
        $this->CrossSellItemSortFilter = $crossSellItemSortFilter;
        return $this;
    }
    /**
     * Get UpSellItemFormatSortFilter value
     * @return string|null
     */
    public function getUpSellItemFormatSortFilter()
    {
        return $this->UpSellItemFormatSortFilter;
    }
    /**
     * Set UpSellItemFormatSortFilter value
     * @uses \EnumType\ItemFormatSortFilterCodeType::valueIsValid()
     * @uses \EnumType\ItemFormatSortFilterCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $upSellItemFormatSortFilter
     * @return \StructType\CrossPromotionPreferencesType
     */
    public function setUpSellItemFormatSortFilter($upSellItemFormatSortFilter = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ItemFormatSortFilterCodeType::valueIsValid($upSellItemFormatSortFilter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ItemFormatSortFilterCodeType', is_array($upSellItemFormatSortFilter) ? implode(', ', $upSellItemFormatSortFilter) : var_export($upSellItemFormatSortFilter, true), implode(', ', \EnumType\ItemFormatSortFilterCodeType::getValidValues())), __LINE__);
        }
        $this->UpSellItemFormatSortFilter = $upSellItemFormatSortFilter;
        return $this;
    }
    /**
     * Get UpSellGallerySortFilter value
     * @return string|null
     */
    public function getUpSellGallerySortFilter()
    {
        return $this->UpSellGallerySortFilter;
    }
    /**
     * Set UpSellGallerySortFilter value
     * @uses \EnumType\GallerySortFilterCodeType::valueIsValid()
     * @uses \EnumType\GallerySortFilterCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $upSellGallerySortFilter
     * @return \StructType\CrossPromotionPreferencesType
     */
    public function setUpSellGallerySortFilter($upSellGallerySortFilter = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\GallerySortFilterCodeType::valueIsValid($upSellGallerySortFilter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\GallerySortFilterCodeType', is_array($upSellGallerySortFilter) ? implode(', ', $upSellGallerySortFilter) : var_export($upSellGallerySortFilter, true), implode(', ', \EnumType\GallerySortFilterCodeType::getValidValues())), __LINE__);
        }
        $this->UpSellGallerySortFilter = $upSellGallerySortFilter;
        return $this;
    }
    /**
     * Get UpSellItemSortFilter value
     * @return string|null
     */
    public function getUpSellItemSortFilter()
    {
        return $this->UpSellItemSortFilter;
    }
    /**
     * Set UpSellItemSortFilter value
     * @uses \EnumType\ItemSortFilterCodeType::valueIsValid()
     * @uses \EnumType\ItemSortFilterCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $upSellItemSortFilter
     * @return \StructType\CrossPromotionPreferencesType
     */
    public function setUpSellItemSortFilter($upSellItemSortFilter = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ItemSortFilterCodeType::valueIsValid($upSellItemSortFilter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ItemSortFilterCodeType', is_array($upSellItemSortFilter) ? implode(', ', $upSellItemSortFilter) : var_export($upSellItemSortFilter, true), implode(', ', \EnumType\ItemSortFilterCodeType::getValidValues())), __LINE__);
        }
        $this->UpSellItemSortFilter = $upSellItemSortFilter;
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
     * @return \StructType\CrossPromotionPreferencesType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
