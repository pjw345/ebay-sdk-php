<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCategoryFeaturesResponseType StructType
 * @subpackage Structs
 */
class GetCategoryFeaturesResponseType extends AbstractResponseType
{
    /**
     * The CategoryVersion
     * Meta information extracted from the WSDL
     * - documentation: Returns the current version of the set of feature meta-data. Compare this value to the version of the last version you downloaded to determine whether the data may have changed.
     * - minOccurs: 0
     * @var string
     */
    public $CategoryVersion;
    /**
     * The UpdateTime
     * Meta information extracted from the WSDL
     * - documentation: Gives the time in GMT that the feature flags for the category hierarchy were last updated.
     * - minOccurs: 0
     * @var string
     */
    public $UpdateTime;
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - documentation: A category whose feature settings are different from the settings of its parent category.<br> <br> For example, suppose there is a branch of the category tree with 5 category levels (L1, L2, L3, L4, and L5). Suppose the feature
     * settings for SiteDefaults, L1, L4, and L5 are all "A", and the settings for L2 and L3 are "B". In this case:<br> L1's settings (A) match the site default, so L1 is not returned.<br> L2's settings (B) are different from L1's, so L2 is returned.<br>
     * L3's settings (B) are the same as L2's, so L3 is not returned<br> L4's settings (A) are different from L3's, so L4 is returned<br> L5's settings (A) are the same as L4's, so L5 is not returned.<br> <br> If you specified a particular FeatureID in the
     * request, this field only returns feature settings for that feature. Only returned when the category is different from its parent. If the category has children and they aren't returned, it means the children inherit the category's feature settings.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\CategoryFeatureType[]
     */
    public $Category;
    /**
     * The SiteDefaults
     * Meta information extracted from the WSDL
     * - documentation: Returns the feature settings defined for most categories on the site. Most categories share these settings. However, some categories can override some settings, as indicated in the Category nodes (if any).
     * - minOccurs: 0
     * @var \StructType\SiteDefaultsType
     */
    public $SiteDefaults;
    /**
     * The FeatureDefinitions
     * Meta information extracted from the WSDL
     * - documentation: Returns definitions of the various features on the site, or the features you requested in FeatureID (if any). Each feature has a node within FeatureDefinitions.
     * - minOccurs: 0
     * @var \StructType\FeatureDefinitionsType
     */
    public $FeatureDefinitions;
    /**
     * Constructor method for GetCategoryFeaturesResponseType
     * @uses GetCategoryFeaturesResponseType::setCategoryVersion()
     * @uses GetCategoryFeaturesResponseType::setUpdateTime()
     * @uses GetCategoryFeaturesResponseType::setCategory()
     * @uses GetCategoryFeaturesResponseType::setSiteDefaults()
     * @uses GetCategoryFeaturesResponseType::setFeatureDefinitions()
     * @param string $categoryVersion
     * @param string $updateTime
     * @param \StructType\CategoryFeatureType[] $category
     * @param \StructType\SiteDefaultsType $siteDefaults
     * @param \StructType\FeatureDefinitionsType $featureDefinitions
     */
    public function __construct($categoryVersion = null, $updateTime = null, array $category = array(), \StructType\SiteDefaultsType $siteDefaults = null, \StructType\FeatureDefinitionsType $featureDefinitions = null)
    {
        $this
            ->setCategoryVersion($categoryVersion)
            ->setUpdateTime($updateTime)
            ->setCategory($category)
            ->setSiteDefaults($siteDefaults)
            ->setFeatureDefinitions($featureDefinitions);
    }
    /**
     * Get CategoryVersion value
     * @return string|null
     */
    public function getCategoryVersion()
    {
        return $this->CategoryVersion;
    }
    /**
     * Set CategoryVersion value
     * @param string $categoryVersion
     * @return \StructType\GetCategoryFeaturesResponseType
     */
    public function setCategoryVersion($categoryVersion = null)
    {
        // validation for constraint: string
        if (!is_null($categoryVersion) && !is_string($categoryVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryVersion, true), gettype($categoryVersion)), __LINE__);
        }
        $this->CategoryVersion = $categoryVersion;
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
     * @return \StructType\GetCategoryFeaturesResponseType
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
     * Get Category value
     * @return \StructType\CategoryFeatureType[]|null
     */
    public function getCategory()
    {
        return $this->Category;
    }
    /**
     * This method is responsible for validating the values passed to the setCategory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCategory method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCategoryForArrayConstraintsFromSetCategory(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCategoryFeaturesResponseTypeCategoryItem) {
            // validation for constraint: itemType
            if (!$getCategoryFeaturesResponseTypeCategoryItem instanceof \StructType\CategoryFeatureType) {
                $invalidValues[] = is_object($getCategoryFeaturesResponseTypeCategoryItem) ? get_class($getCategoryFeaturesResponseTypeCategoryItem) : sprintf('%s(%s)', gettype($getCategoryFeaturesResponseTypeCategoryItem), var_export($getCategoryFeaturesResponseTypeCategoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Category property can only contain items of type \StructType\CategoryFeatureType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Category value
     * @throws \InvalidArgumentException
     * @param \StructType\CategoryFeatureType[] $category
     * @return \StructType\GetCategoryFeaturesResponseType
     */
    public function setCategory(array $category = array())
    {
        // validation for constraint: array
        if ('' !== ($categoryArrayErrorMessage = self::validateCategoryForArrayConstraintsFromSetCategory($category))) {
            throw new \InvalidArgumentException($categoryArrayErrorMessage, __LINE__);
        }
        $this->Category = $category;
        return $this;
    }
    /**
     * Add item to Category value
     * @throws \InvalidArgumentException
     * @param \StructType\CategoryFeatureType $item
     * @return \StructType\GetCategoryFeaturesResponseType
     */
    public function addToCategory(\StructType\CategoryFeatureType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CategoryFeatureType) {
            throw new \InvalidArgumentException(sprintf('The Category property can only contain items of type \StructType\CategoryFeatureType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Category[] = $item;
        return $this;
    }
    /**
     * Get SiteDefaults value
     * @return \StructType\SiteDefaultsType|null
     */
    public function getSiteDefaults()
    {
        return $this->SiteDefaults;
    }
    /**
     * Set SiteDefaults value
     * @param \StructType\SiteDefaultsType $siteDefaults
     * @return \StructType\GetCategoryFeaturesResponseType
     */
    public function setSiteDefaults(\StructType\SiteDefaultsType $siteDefaults = null)
    {
        $this->SiteDefaults = $siteDefaults;
        return $this;
    }
    /**
     * Get FeatureDefinitions value
     * @return \StructType\FeatureDefinitionsType|null
     */
    public function getFeatureDefinitions()
    {
        return $this->FeatureDefinitions;
    }
    /**
     * Set FeatureDefinitions value
     * @param \StructType\FeatureDefinitionsType $featureDefinitions
     * @return \StructType\GetCategoryFeaturesResponseType
     */
    public function setFeatureDefinitions(\StructType\FeatureDefinitionsType $featureDefinitions = null)
    {
        $this->FeatureDefinitions = $featureDefinitions;
        return $this;
    }
}
