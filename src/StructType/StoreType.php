<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreType StructType
 * Meta information extracted from the WSDL
 * - documentation: The configuration of an eBay Store.
 * @subpackage Structs
 */
class StoreType extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Name of the eBay Store. The name is shown at the top of the Store page.
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The URLPath
     * Meta information extracted from the WSDL
     * - documentation: The URL path of the Store (58 characters maximum). Only if you are using Chinese characters in the Name property do you need to use this field, such as if you are opening a Store on the Taiwan site. The reason for this is that the
     * URL path is normally derived from the Store name, but it cannot be derived from the name of the Store if it contains Chinese characters because URLs cannot contain Chinese characters.
     * - minOccurs: 0
     * @var string
     */
    public $URLPath;
    /**
     * The URL
     * Meta information extracted from the WSDL
     * - documentation: The complete URL of the user's Store. This field is only ever returned, and does not need to be explicitly set.
     * - minOccurs: 0
     * @var string
     */
    public $URL;
    /**
     * The SubscriptionLevel
     * Meta information extracted from the WSDL
     * - documentation: For the <b>GetStore</b> call, the value returned in this field indicates the user's eBay Store subscription level. <br> <br> For the <b>SetStore</b> call, the user can only cancel the current eBay Store subscription (using the
     * <b>Close</b> enumeration value), and cannot change the subscription level. A seller will have to go to the Subscriptions area of My eBay to change their subscription level. Keep in mind that an early termination fee may apply if a user has a yearly
     * subscription, and then either cancels their subscription, or downgrades their subscription level.
     * - minOccurs: 0
     * @var string
     */
    public $SubscriptionLevel;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: Store description (300 characters maximum).
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Logo
     * Meta information extracted from the WSDL
     * - documentation: Store logo.
     * - minOccurs: 0
     * @var \StructType\StoreLogoType
     */
    public $Logo;
    /**
     * The Theme
     * Meta information extracted from the WSDL
     * - documentation: Store theme.
     * - minOccurs: 0
     * @var \StructType\StoreThemeType
     */
    public $Theme;
    /**
     * The HeaderStyle
     * Meta information extracted from the WSDL
     * - documentation: Style for the Store header.
     * - minOccurs: 0
     * @var string
     */
    public $HeaderStyle;
    /**
     * The HomePage
     * Meta information extracted from the WSDL
     * - documentation: Page to use as the Store's homepage (default is 0). To change the homepage, specify the PageID of one of the Store's custom pages.
     * - minOccurs: 0
     * @var int
     */
    public $HomePage;
    /**
     * The ItemListLayout
     * Meta information extracted from the WSDL
     * - documentation: The default layout type to use for the Store items.
     * - minOccurs: 0
     * @var string
     */
    public $ItemListLayout;
    /**
     * The ItemListSortOrder
     * Meta information extracted from the WSDL
     * - documentation: The default sort order to use for the items for sale in the Store.
     * - minOccurs: 0
     * @var string
     */
    public $ItemListSortOrder;
    /**
     * The CustomHeaderLayout
     * Meta information extracted from the WSDL
     * - documentation: Layout for the Store's custom header.
     * - minOccurs: 0
     * @var string
     */
    public $CustomHeaderLayout;
    /**
     * The CustomHeader
     * Meta information extracted from the WSDL
     * - documentation: Custom header text for the Store.
     * - minOccurs: 0
     * @var string
     */
    public $CustomHeader;
    /**
     * The ExportListings
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether to export the Store listings to comparison shopping websites.
     * - minOccurs: 0
     * @var bool
     */
    public $ExportListings;
    /**
     * The CustomCategories
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of an array of one or more <b>CustomCategory</b> containers. Each <b>CustomCategory</b> container consists of details related to an eBay Store custom category. <br> <br> To modify an eBay Store's custom
     * categories, an eBay Store owner would use the <b>StoreCategories</b> container in the request of a <b>SetStoreCategories</b> call.
     * - minOccurs: 0
     * @var \ArrayType\StoreCustomCategoryArrayType
     */
    public $CustomCategories;
    /**
     * The CustomListingHeader
     * Meta information extracted from the WSDL
     * - documentation: Custom listing header for the Store.
     * - minOccurs: 0
     * @var \StructType\StoreCustomListingHeaderType
     */
    public $CustomListingHeader;
    /**
     * The MerchDisplay
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $MerchDisplay;
    /**
     * The LastOpenedTime
     * Meta information extracted from the WSDL
     * - documentation: Indicates the time the store was last opened or reopened.
     * - minOccurs: 0
     * @var string
     */
    public $LastOpenedTime;
    /**
     * The TitleWithCompatibility
     * Meta information extracted from the WSDL
     * - documentation: A flag indicating if a Compatibility tab exists for the Store item listing. This field is only applicable to Parts & Accessories listings in eBay US Motors. The Compatibility tab will contain vehicles that are compatible with the
     * part in the listing. The seller specifies this information at listing time.
     * - minOccurs: 0
     * @var bool
     */
    public $TitleWithCompatibility;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for StoreType
     * @uses StoreType::setName()
     * @uses StoreType::setURLPath()
     * @uses StoreType::setURL()
     * @uses StoreType::setSubscriptionLevel()
     * @uses StoreType::setDescription()
     * @uses StoreType::setLogo()
     * @uses StoreType::setTheme()
     * @uses StoreType::setHeaderStyle()
     * @uses StoreType::setHomePage()
     * @uses StoreType::setItemListLayout()
     * @uses StoreType::setItemListSortOrder()
     * @uses StoreType::setCustomHeaderLayout()
     * @uses StoreType::setCustomHeader()
     * @uses StoreType::setExportListings()
     * @uses StoreType::setCustomCategories()
     * @uses StoreType::setCustomListingHeader()
     * @uses StoreType::setMerchDisplay()
     * @uses StoreType::setLastOpenedTime()
     * @uses StoreType::setTitleWithCompatibility()
     * @uses StoreType::setAny()
     * @param string $name
     * @param string $uRLPath
     * @param string $uRL
     * @param string $subscriptionLevel
     * @param string $description
     * @param \StructType\StoreLogoType $logo
     * @param \StructType\StoreThemeType $theme
     * @param string $headerStyle
     * @param int $homePage
     * @param string $itemListLayout
     * @param string $itemListSortOrder
     * @param string $customHeaderLayout
     * @param string $customHeader
     * @param bool $exportListings
     * @param \ArrayType\StoreCustomCategoryArrayType $customCategories
     * @param \StructType\StoreCustomListingHeaderType $customListingHeader
     * @param string $merchDisplay
     * @param string $lastOpenedTime
     * @param bool $titleWithCompatibility
     * @param \DOMDocument $any
     */
    public function __construct($name = null, $uRLPath = null, $uRL = null, $subscriptionLevel = null, $description = null, \StructType\StoreLogoType $logo = null, \StructType\StoreThemeType $theme = null, $headerStyle = null, $homePage = null, $itemListLayout = null, $itemListSortOrder = null, $customHeaderLayout = null, $customHeader = null, $exportListings = null, \ArrayType\StoreCustomCategoryArrayType $customCategories = null, \StructType\StoreCustomListingHeaderType $customListingHeader = null, $merchDisplay = null, $lastOpenedTime = null, $titleWithCompatibility = null, \DOMDocument $any = null)
    {
        $this
            ->setName($name)
            ->setURLPath($uRLPath)
            ->setURL($uRL)
            ->setSubscriptionLevel($subscriptionLevel)
            ->setDescription($description)
            ->setLogo($logo)
            ->setTheme($theme)
            ->setHeaderStyle($headerStyle)
            ->setHomePage($homePage)
            ->setItemListLayout($itemListLayout)
            ->setItemListSortOrder($itemListSortOrder)
            ->setCustomHeaderLayout($customHeaderLayout)
            ->setCustomHeader($customHeader)
            ->setExportListings($exportListings)
            ->setCustomCategories($customCategories)
            ->setCustomListingHeader($customListingHeader)
            ->setMerchDisplay($merchDisplay)
            ->setLastOpenedTime($lastOpenedTime)
            ->setTitleWithCompatibility($titleWithCompatibility)
            ->setAny($any);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\StoreType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get URLPath value
     * @return string|null
     */
    public function getURLPath()
    {
        return $this->URLPath;
    }
    /**
     * Set URLPath value
     * @param string $uRLPath
     * @return \StructType\StoreType
     */
    public function setURLPath($uRLPath = null)
    {
        // validation for constraint: string
        if (!is_null($uRLPath) && !is_string($uRLPath)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uRLPath, true), gettype($uRLPath)), __LINE__);
        }
        $this->URLPath = $uRLPath;
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
     * @return \StructType\StoreType
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
     * Get SubscriptionLevel value
     * @return string|null
     */
    public function getSubscriptionLevel()
    {
        return $this->SubscriptionLevel;
    }
    /**
     * Set SubscriptionLevel value
     * @uses \EnumType\StoreSubscriptionLevelCodeType::valueIsValid()
     * @uses \EnumType\StoreSubscriptionLevelCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $subscriptionLevel
     * @return \StructType\StoreType
     */
    public function setSubscriptionLevel($subscriptionLevel = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\StoreSubscriptionLevelCodeType::valueIsValid($subscriptionLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\StoreSubscriptionLevelCodeType', is_array($subscriptionLevel) ? implode(', ', $subscriptionLevel) : var_export($subscriptionLevel, true), implode(', ', \EnumType\StoreSubscriptionLevelCodeType::getValidValues())), __LINE__);
        }
        $this->SubscriptionLevel = $subscriptionLevel;
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
     * @return \StructType\StoreType
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
     * Get Logo value
     * @return \StructType\StoreLogoType|null
     */
    public function getLogo()
    {
        return $this->Logo;
    }
    /**
     * Set Logo value
     * @param \StructType\StoreLogoType $logo
     * @return \StructType\StoreType
     */
    public function setLogo(\StructType\StoreLogoType $logo = null)
    {
        $this->Logo = $logo;
        return $this;
    }
    /**
     * Get Theme value
     * @return \StructType\StoreThemeType|null
     */
    public function getTheme()
    {
        return $this->Theme;
    }
    /**
     * Set Theme value
     * @param \StructType\StoreThemeType $theme
     * @return \StructType\StoreType
     */
    public function setTheme(\StructType\StoreThemeType $theme = null)
    {
        $this->Theme = $theme;
        return $this;
    }
    /**
     * Get HeaderStyle value
     * @return string|null
     */
    public function getHeaderStyle()
    {
        return $this->HeaderStyle;
    }
    /**
     * Set HeaderStyle value
     * @uses \EnumType\StoreHeaderStyleCodeType::valueIsValid()
     * @uses \EnumType\StoreHeaderStyleCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $headerStyle
     * @return \StructType\StoreType
     */
    public function setHeaderStyle($headerStyle = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\StoreHeaderStyleCodeType::valueIsValid($headerStyle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\StoreHeaderStyleCodeType', is_array($headerStyle) ? implode(', ', $headerStyle) : var_export($headerStyle, true), implode(', ', \EnumType\StoreHeaderStyleCodeType::getValidValues())), __LINE__);
        }
        $this->HeaderStyle = $headerStyle;
        return $this;
    }
    /**
     * Get HomePage value
     * @return int|null
     */
    public function getHomePage()
    {
        return $this->HomePage;
    }
    /**
     * Set HomePage value
     * @param int $homePage
     * @return \StructType\StoreType
     */
    public function setHomePage($homePage = null)
    {
        // validation for constraint: int
        if (!is_null($homePage) && !(is_int($homePage) || ctype_digit($homePage))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($homePage, true), gettype($homePage)), __LINE__);
        }
        $this->HomePage = $homePage;
        return $this;
    }
    /**
     * Get ItemListLayout value
     * @return string|null
     */
    public function getItemListLayout()
    {
        return $this->ItemListLayout;
    }
    /**
     * Set ItemListLayout value
     * @uses \EnumType\StoreItemListLayoutCodeType::valueIsValid()
     * @uses \EnumType\StoreItemListLayoutCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $itemListLayout
     * @return \StructType\StoreType
     */
    public function setItemListLayout($itemListLayout = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\StoreItemListLayoutCodeType::valueIsValid($itemListLayout)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\StoreItemListLayoutCodeType', is_array($itemListLayout) ? implode(', ', $itemListLayout) : var_export($itemListLayout, true), implode(', ', \EnumType\StoreItemListLayoutCodeType::getValidValues())), __LINE__);
        }
        $this->ItemListLayout = $itemListLayout;
        return $this;
    }
    /**
     * Get ItemListSortOrder value
     * @return string|null
     */
    public function getItemListSortOrder()
    {
        return $this->ItemListSortOrder;
    }
    /**
     * Set ItemListSortOrder value
     * @uses \EnumType\StoreItemListSortOrderCodeType::valueIsValid()
     * @uses \EnumType\StoreItemListSortOrderCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $itemListSortOrder
     * @return \StructType\StoreType
     */
    public function setItemListSortOrder($itemListSortOrder = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\StoreItemListSortOrderCodeType::valueIsValid($itemListSortOrder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\StoreItemListSortOrderCodeType', is_array($itemListSortOrder) ? implode(', ', $itemListSortOrder) : var_export($itemListSortOrder, true), implode(', ', \EnumType\StoreItemListSortOrderCodeType::getValidValues())), __LINE__);
        }
        $this->ItemListSortOrder = $itemListSortOrder;
        return $this;
    }
    /**
     * Get CustomHeaderLayout value
     * @return string|null
     */
    public function getCustomHeaderLayout()
    {
        return $this->CustomHeaderLayout;
    }
    /**
     * Set CustomHeaderLayout value
     * @uses \EnumType\StoreCustomHeaderLayoutCodeType::valueIsValid()
     * @uses \EnumType\StoreCustomHeaderLayoutCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $customHeaderLayout
     * @return \StructType\StoreType
     */
    public function setCustomHeaderLayout($customHeaderLayout = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\StoreCustomHeaderLayoutCodeType::valueIsValid($customHeaderLayout)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\StoreCustomHeaderLayoutCodeType', is_array($customHeaderLayout) ? implode(', ', $customHeaderLayout) : var_export($customHeaderLayout, true), implode(', ', \EnumType\StoreCustomHeaderLayoutCodeType::getValidValues())), __LINE__);
        }
        $this->CustomHeaderLayout = $customHeaderLayout;
        return $this;
    }
    /**
     * Get CustomHeader value
     * @return string|null
     */
    public function getCustomHeader()
    {
        return $this->CustomHeader;
    }
    /**
     * Set CustomHeader value
     * @param string $customHeader
     * @return \StructType\StoreType
     */
    public function setCustomHeader($customHeader = null)
    {
        // validation for constraint: string
        if (!is_null($customHeader) && !is_string($customHeader)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customHeader, true), gettype($customHeader)), __LINE__);
        }
        $this->CustomHeader = $customHeader;
        return $this;
    }
    /**
     * Get ExportListings value
     * @return bool|null
     */
    public function getExportListings()
    {
        return $this->ExportListings;
    }
    /**
     * Set ExportListings value
     * @param bool $exportListings
     * @return \StructType\StoreType
     */
    public function setExportListings($exportListings = null)
    {
        // validation for constraint: boolean
        if (!is_null($exportListings) && !is_bool($exportListings)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exportListings, true), gettype($exportListings)), __LINE__);
        }
        $this->ExportListings = $exportListings;
        return $this;
    }
    /**
     * Get CustomCategories value
     * @return \ArrayType\StoreCustomCategoryArrayType|null
     */
    public function getCustomCategories()
    {
        return $this->CustomCategories;
    }
    /**
     * Set CustomCategories value
     * @param \ArrayType\StoreCustomCategoryArrayType $customCategories
     * @return \StructType\StoreType
     */
    public function setCustomCategories(\ArrayType\StoreCustomCategoryArrayType $customCategories = null)
    {
        $this->CustomCategories = $customCategories;
        return $this;
    }
    /**
     * Get CustomListingHeader value
     * @return \StructType\StoreCustomListingHeaderType|null
     */
    public function getCustomListingHeader()
    {
        return $this->CustomListingHeader;
    }
    /**
     * Set CustomListingHeader value
     * @param \StructType\StoreCustomListingHeaderType $customListingHeader
     * @return \StructType\StoreType
     */
    public function setCustomListingHeader(\StructType\StoreCustomListingHeaderType $customListingHeader = null)
    {
        $this->CustomListingHeader = $customListingHeader;
        return $this;
    }
    /**
     * Get MerchDisplay value
     * @return string|null
     */
    public function getMerchDisplay()
    {
        return $this->MerchDisplay;
    }
    /**
     * Set MerchDisplay value
     * @uses \EnumType\MerchDisplayCodeType::valueIsValid()
     * @uses \EnumType\MerchDisplayCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $merchDisplay
     * @return \StructType\StoreType
     */
    public function setMerchDisplay($merchDisplay = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\MerchDisplayCodeType::valueIsValid($merchDisplay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\MerchDisplayCodeType', is_array($merchDisplay) ? implode(', ', $merchDisplay) : var_export($merchDisplay, true), implode(', ', \EnumType\MerchDisplayCodeType::getValidValues())), __LINE__);
        }
        $this->MerchDisplay = $merchDisplay;
        return $this;
    }
    /**
     * Get LastOpenedTime value
     * @return string|null
     */
    public function getLastOpenedTime()
    {
        return $this->LastOpenedTime;
    }
    /**
     * Set LastOpenedTime value
     * @param string $lastOpenedTime
     * @return \StructType\StoreType
     */
    public function setLastOpenedTime($lastOpenedTime = null)
    {
        // validation for constraint: string
        if (!is_null($lastOpenedTime) && !is_string($lastOpenedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastOpenedTime, true), gettype($lastOpenedTime)), __LINE__);
        }
        $this->LastOpenedTime = $lastOpenedTime;
        return $this;
    }
    /**
     * Get TitleWithCompatibility value
     * @return bool|null
     */
    public function getTitleWithCompatibility()
    {
        return $this->TitleWithCompatibility;
    }
    /**
     * Set TitleWithCompatibility value
     * @param bool $titleWithCompatibility
     * @return \StructType\StoreType
     */
    public function setTitleWithCompatibility($titleWithCompatibility = null)
    {
        // validation for constraint: boolean
        if (!is_null($titleWithCompatibility) && !is_bool($titleWithCompatibility)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($titleWithCompatibility, true), gettype($titleWithCompatibility)), __LINE__);
        }
        $this->TitleWithCompatibility = $titleWithCompatibility;
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
     * @return \StructType\StoreType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
