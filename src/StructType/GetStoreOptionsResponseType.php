<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetStoreOptionsResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response of the <b>GetStoreOptions</b> call.
 * @subpackage Structs
 */
class GetStoreOptionsResponseType extends AbstractResponseType
{
    /**
     * The BasicThemeArray
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the current set of basic themes available for eBay Stores. Each basic theme definition consists of settings like colors, font style, and font size. This theme data can be reused in a <b>SetStore</b> call to
     * set/modify the theme for an eBay Store.
     * - minOccurs: 0
     * @var \StructType\StoreThemeArrayType
     */
    public $BasicThemeArray;
    /**
     * The AdvancedThemeArray
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the current set of advanced themes available for eBay Stores. Each advanced theme definition consists of settings like colors, font style, and font size. This theme data can be reused in a <b>SetStore</b>
     * call to set/modify the theme for an eBay Store. Unlike basic themes, you can use any color scheme with an advanced theme. These themes are suitable for more advanced customization.
     * - minOccurs: 0
     * @var \StructType\StoreThemeArrayType
     */
    public $AdvancedThemeArray;
    /**
     * The LogoArray
     * Meta information extracted from the WSDL
     * - documentation: An array of logo identifiers for numerous product categories. These <b>LogoID</b> values can be reused in a <b>SetStore</b> call to set the logo for an eBay Store.
     * - minOccurs: 0
     * @var \ArrayType\StoreLogoArrayType
     */
    public $LogoArray;
    /**
     * The SubscriptionArray
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the different levels of eBay Store subscriptions along with the monthly subscription price.
     * - minOccurs: 0
     * @var \ArrayType\StoreSubscriptionArrayType
     */
    public $SubscriptionArray;
    /**
     * The MaxCategories
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the maximum number of categories (meta and leaf) that can be set up in an eBay Store.
     * - minOccurs: 0
     * @var int
     */
    public $MaxCategories;
    /**
     * The MaxCategoryLevels
     * Meta information extracted from the WSDL
     * - documentation: This is the maximum number of category levels that can be set up in an eBay Store.
     * - minOccurs: 0
     * @var int
     */
    public $MaxCategoryLevels;
    /**
     * Constructor method for GetStoreOptionsResponseType
     * @uses GetStoreOptionsResponseType::setBasicThemeArray()
     * @uses GetStoreOptionsResponseType::setAdvancedThemeArray()
     * @uses GetStoreOptionsResponseType::setLogoArray()
     * @uses GetStoreOptionsResponseType::setSubscriptionArray()
     * @uses GetStoreOptionsResponseType::setMaxCategories()
     * @uses GetStoreOptionsResponseType::setMaxCategoryLevels()
     * @param \StructType\StoreThemeArrayType $basicThemeArray
     * @param \StructType\StoreThemeArrayType $advancedThemeArray
     * @param \ArrayType\StoreLogoArrayType $logoArray
     * @param \ArrayType\StoreSubscriptionArrayType $subscriptionArray
     * @param int $maxCategories
     * @param int $maxCategoryLevels
     */
    public function __construct(\StructType\StoreThemeArrayType $basicThemeArray = null, \StructType\StoreThemeArrayType $advancedThemeArray = null, \ArrayType\StoreLogoArrayType $logoArray = null, \ArrayType\StoreSubscriptionArrayType $subscriptionArray = null, $maxCategories = null, $maxCategoryLevels = null)
    {
        $this
            ->setBasicThemeArray($basicThemeArray)
            ->setAdvancedThemeArray($advancedThemeArray)
            ->setLogoArray($logoArray)
            ->setSubscriptionArray($subscriptionArray)
            ->setMaxCategories($maxCategories)
            ->setMaxCategoryLevels($maxCategoryLevels);
    }
    /**
     * Get BasicThemeArray value
     * @return \StructType\StoreThemeArrayType|null
     */
    public function getBasicThemeArray()
    {
        return $this->BasicThemeArray;
    }
    /**
     * Set BasicThemeArray value
     * @param \StructType\StoreThemeArrayType $basicThemeArray
     * @return \StructType\GetStoreOptionsResponseType
     */
    public function setBasicThemeArray(\StructType\StoreThemeArrayType $basicThemeArray = null)
    {
        $this->BasicThemeArray = $basicThemeArray;
        return $this;
    }
    /**
     * Get AdvancedThemeArray value
     * @return \StructType\StoreThemeArrayType|null
     */
    public function getAdvancedThemeArray()
    {
        return $this->AdvancedThemeArray;
    }
    /**
     * Set AdvancedThemeArray value
     * @param \StructType\StoreThemeArrayType $advancedThemeArray
     * @return \StructType\GetStoreOptionsResponseType
     */
    public function setAdvancedThemeArray(\StructType\StoreThemeArrayType $advancedThemeArray = null)
    {
        $this->AdvancedThemeArray = $advancedThemeArray;
        return $this;
    }
    /**
     * Get LogoArray value
     * @return \ArrayType\StoreLogoArrayType|null
     */
    public function getLogoArray()
    {
        return $this->LogoArray;
    }
    /**
     * Set LogoArray value
     * @param \ArrayType\StoreLogoArrayType $logoArray
     * @return \StructType\GetStoreOptionsResponseType
     */
    public function setLogoArray(\ArrayType\StoreLogoArrayType $logoArray = null)
    {
        $this->LogoArray = $logoArray;
        return $this;
    }
    /**
     * Get SubscriptionArray value
     * @return \ArrayType\StoreSubscriptionArrayType|null
     */
    public function getSubscriptionArray()
    {
        return $this->SubscriptionArray;
    }
    /**
     * Set SubscriptionArray value
     * @param \ArrayType\StoreSubscriptionArrayType $subscriptionArray
     * @return \StructType\GetStoreOptionsResponseType
     */
    public function setSubscriptionArray(\ArrayType\StoreSubscriptionArrayType $subscriptionArray = null)
    {
        $this->SubscriptionArray = $subscriptionArray;
        return $this;
    }
    /**
     * Get MaxCategories value
     * @return int|null
     */
    public function getMaxCategories()
    {
        return $this->MaxCategories;
    }
    /**
     * Set MaxCategories value
     * @param int $maxCategories
     * @return \StructType\GetStoreOptionsResponseType
     */
    public function setMaxCategories($maxCategories = null)
    {
        // validation for constraint: int
        if (!is_null($maxCategories) && !(is_int($maxCategories) || ctype_digit($maxCategories))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxCategories, true), gettype($maxCategories)), __LINE__);
        }
        $this->MaxCategories = $maxCategories;
        return $this;
    }
    /**
     * Get MaxCategoryLevels value
     * @return int|null
     */
    public function getMaxCategoryLevels()
    {
        return $this->MaxCategoryLevels;
    }
    /**
     * Set MaxCategoryLevels value
     * @param int $maxCategoryLevels
     * @return \StructType\GetStoreOptionsResponseType
     */
    public function setMaxCategoryLevels($maxCategoryLevels = null)
    {
        // validation for constraint: int
        if (!is_null($maxCategoryLevels) && !(is_int($maxCategoryLevels) || ctype_digit($maxCategoryLevels))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxCategoryLevels, true), gettype($maxCategoryLevels)), __LINE__);
        }
        $this->MaxCategoryLevels = $maxCategoryLevels;
        return $this;
    }
}
