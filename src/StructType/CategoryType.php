<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CategoryType StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for data on one listing category. Many of the <b>CategoryType</b> fields are only returned in the <b>GetCategories</b> response. Add/Revise/Relist calls only use the <b>CategoryID</b> field to specify which eBay category in
 * which to list the item.
 * @subpackage Structs
 */
class CategoryType extends AbstractStructBase
{
    /**
     * The BestOfferEnabled
     * Meta information extracted from the WSDL
     * - documentation: If this field is returned as <code>true</code>, the corresponding category supports Best Offers. If this field is not present, the category does not support Best Offers. This field is not returned when <code>false</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $BestOfferEnabled;
    /**
     * The AutoPayEnabled
     * Meta information extracted from the WSDL
     * - documentation: If this field is returned as <code>true</code>, the corresponding category supports immediate payment for listings. Unless the seller is opted in to eBay managed payments, PayPal must be the only accepted payment method for a listing
     * for the seller to require immediate payment from the buyer. For managed payments sellers, no payment methods are required, as eBay controls which payment methods are available to the buyer. This field is only returned when <code>true</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $AutoPayEnabled;
    /**
     * The B2BVATEnabled
     * Meta information extracted from the WSDL
     * - documentation: If this field is returned as <code>true</code>, the corresponding category supports business-to-business (B2B) VAT listings. If this field is not present, the category does not B2B VAT listings. This field is not returned when
     * <code>false</code>. This feature is applicable to the eBay Germany (DE), Austria (AT), and Switzerland (CH) sites only.
     * - minOccurs: 0
     * @var bool
     */
    public $B2BVATEnabled;
    /**
     * The CatalogEnabled
     * Meta information extracted from the WSDL
     * - documentation: If this field is deprecated..
     * - minOccurs: 0
     * @var bool
     */
    public $CatalogEnabled;
    /**
     * The CategoryID
     * Meta information extracted from the WSDL
     * - documentation: This string value is the unique identifier of an eBay category. In <b>GetItem</b> and related calls, see the <b>CategoryName</b> field for the text name of the category. The parent category of this eBay category is only shown in
     * <b>GetCategories</b>. <br> <br> In an Add call, the <b>PrimaryCategory.CategoryID</b> is conditionally required unless the seller successfully uses the <b>ProductListingDetails</b> container to find an eBay catalog product match. When the seller
     * successfully uses an eBay catalog product to create a listing, the listing title, listing description, item specifics, listing category, and stock photo defined in the catalog product is used to create the listing. <br> <br> In an Add/Revise/Relist
     * call, the <b>SecondaryCategory.CategoryID</b> is conditionally required if a Secondary Category is used. Using a Secondary Category can incur a listing fee. <br><br> <b>For ReviseItem only:</b> Previously, removing the listing from a secondary
     * category was only possible within 12 hours of the listing's scheduled end time when an auction listing had no active bids or a multiple-quantity, fixed-price listing had no items sold, but this restriction no longer exists. Now, the secondary
     * category can be dropped for any active listing at any time, regardless of whether an auction listing has bids or a fixed-price listing has sales. To drop a secondary category, the seller passes in a value of <code>0</code> in the
     * <b>SecondaryCategory.CategoryID</b> field. <br>
     * - minOccurs: 0
     * @var string
     */
    public $CategoryID;
    /**
     * The CategoryLevel
     * Meta information extracted from the WSDL
     * - documentation: This integer value indicates the level where the category fits in the eBay site's category hierarchy. For example, if this field has a value of <code>2</code>, then the category is two levels below the root category in the eBay
     * site's category hierarchy.
     * - minOccurs: 0
     * @var int
     */
    public $CategoryLevel;
    /**
     * The CategoryName
     * Meta information extracted from the WSDL
     * - documentation: This string value is the display name of the eBay primary category, as it would appear on the eBay site. In <b>GetItem</b>, this will be a fully-qualified category name (e.g., Collectibles:Decorative Collectibles:Hummel, Goebel).
     * - minOccurs: 0
     * @var string
     */
    public $CategoryName;
    /**
     * The CategoryParentID
     * Meta information extracted from the WSDL
     * - documentation: This string value is the Category ID of the primary category's (indicated in the <b>CategoryID</b> field) parent category. The number of <b>CategoryParentID</b> values that are returned will depend on the <b>LevelLimit</b> value that
     * is set (in <b>GetCategories</b>) and on how far up the primary category is in the eBay category hierarchy. <b>CategoryParentID</b> values are returned in correct sequence, starting from the root category and ending with the category that is the
     * direct parent of the primary category specified in <b>CategoryID</b>. The <b>CategoryID</b> and <b>CategoryParentID</b> values will be the same if the <b>LevelLimit</b> value is set to <code>1</code>.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $CategoryParentID;
    /**
     * The CategoryParentName
     * Meta information extracted from the WSDL
     * - documentation: This string value is the display name of the category indicated in the corresponding <b>CategoryParentID</b> field. If multiple parent categories are retrieved in the <b>GetSuggestedCategories</b> call, the matching
     * <b>CategoryParentID</b> and <b>CategoryParentName</b> can be found by following the sequence in which these fields are returned. The primary category's ancestors are returned in sequence beginning with the root category all the way down to the
     * primary category's direct parent category. <br><br> The <b>CategoryParentName</b> fields and the <b>CategoryName</b> field can be used to build the fully-qualified category name and/or "breadcrumbs" browse path. (e.g., Computers & Networking >
     * Technology Books > Certification).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $CategoryParentName;
    /**
     * The ProductSearchPageAvailable
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $ProductSearchPageAvailable;
    /**
     * The ProductFinderIDs
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ExtendedProductFinderIDType[]
     */
    public $ProductFinderIDs;
    /**
     * The CharacteristicsSets
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\CharacteristicsSetType[]
     */
    public $CharacteristicsSets;
    /**
     * The Expired
     * Meta information extracted from the WSDL
     * - documentation: If this field is returned as <code>true</code>, the corresponding category is no longer a valid eBay category on the site, and items may not be listed in this category. This field is not returned when <code>false</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $Expired;
    /**
     * The IntlAutosFixedCat
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $IntlAutosFixedCat;
    /**
     * The LeafCategory
     * Meta information extracted from the WSDL
     * - documentation: If this field is returned as <code>true</code>, the corresponding category is an eBay leaf category, a category in which items may be listed. This field is not returned when <code>false</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $LeafCategory;
    /**
     * The Virtual
     * Meta information extracted from the WSDL
     * - documentation: If this field is returned as <code>true</code>, the corresponding category is an eBay virtual category, a category in which items may not be listed. This field is not returned when <code>false</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $Virtual;
    /**
     * The NumOfItems
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $NumOfItems;
    /**
     * The SellerGuaranteeEligible
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $SellerGuaranteeEligible;
    /**
     * The ORPA
     * Meta information extracted from the WSDL
     * - documentation: If this field is returned as <code>true</code>, the corresponding category is an exception to the eBay site's standard Reserve Price policy on auction listings. For example, if the site's default setting is to allow setting a Reserve
     * Price, but <b>ORPA</b> is returned as <code>true</code>, this particular category does not support setting a Reserve Price. Or, if the site's default setting is not to allow setting a Reserve Price, but <b>ORPA</b> is returned as <code>true</code>,
     * this particular category is the exception to that rule and does support setting a Reserve Price. If <b>ORPA</b> is <code>true</code> for the corresponding category, you can generally assume that the category's subcategories inherit the same setting.
     * 'ORPA' is an acronym for 'Override Reserve Price Allowed'. <br> <br> This field is not returned when <code>false</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $ORPA;
    /**
     * The ORRA
     * Meta information extracted from the WSDL
     * - documentation: If this field is returned as <code>true</code>, the corresponding category is an exception to the eBay site's standard Reduce Reserve Price (on active auction listing) policy. For example, if the site's default setting is to allow
     * reducing a Reserve Price for the active auction listing, but <b>ORRA</b> is returned as <code>true</code>, this particular category does not support reducing a Reserve Price. Or, if the site's default setting is not to allow reducting a Reserve
     * Price, but <b>ORRA</b> is returned as <code>true</code>, this particular category is the exception to that rule and does support reducing a Reserve Price. If <b>ORRA</b> is <code>true</code> for the corresponding category, you can generally assume
     * that the category's subcategories inherit the same setting. 'ORRA' is an acronym for 'Override Reduce Reserve Allowed'. <br> <br> This field is not returned when <code>false</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $ORRA;
    /**
     * The LSD
     * Meta information extracted from the WSDL
     * - documentation: If this field is returned as <code>true</code>, the corresponding category does not support lot listings. A lot listing is a listing that features multiple related items that must be purchased by one buyer in one transaction. 'LSD'
     * is an acronym for 'Lot Size Disabled'. 'Lot Size' refers to the <b>LotSize</b> field in the Add/Revise/Relisting calls that is conditionally required if the seller is creating a lot listing. The <b>LSD</b> field is not returned when
     * <code>false</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $LSD;
    /**
     * The Keywords
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Keywords;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for CategoryType
     * @uses CategoryType::setBestOfferEnabled()
     * @uses CategoryType::setAutoPayEnabled()
     * @uses CategoryType::setB2BVATEnabled()
     * @uses CategoryType::setCatalogEnabled()
     * @uses CategoryType::setCategoryID()
     * @uses CategoryType::setCategoryLevel()
     * @uses CategoryType::setCategoryName()
     * @uses CategoryType::setCategoryParentID()
     * @uses CategoryType::setCategoryParentName()
     * @uses CategoryType::setProductSearchPageAvailable()
     * @uses CategoryType::setProductFinderIDs()
     * @uses CategoryType::setCharacteristicsSets()
     * @uses CategoryType::setExpired()
     * @uses CategoryType::setIntlAutosFixedCat()
     * @uses CategoryType::setLeafCategory()
     * @uses CategoryType::setVirtual()
     * @uses CategoryType::setNumOfItems()
     * @uses CategoryType::setSellerGuaranteeEligible()
     * @uses CategoryType::setORPA()
     * @uses CategoryType::setORRA()
     * @uses CategoryType::setLSD()
     * @uses CategoryType::setKeywords()
     * @uses CategoryType::setAny()
     * @param bool $bestOfferEnabled
     * @param bool $autoPayEnabled
     * @param bool $b2BVATEnabled
     * @param bool $catalogEnabled
     * @param string $categoryID
     * @param int $categoryLevel
     * @param string $categoryName
     * @param string[] $categoryParentID
     * @param string[] $categoryParentName
     * @param bool $productSearchPageAvailable
     * @param \StructType\ExtendedProductFinderIDType[] $productFinderIDs
     * @param \StructType\CharacteristicsSetType[] $characteristicsSets
     * @param bool $expired
     * @param bool $intlAutosFixedCat
     * @param bool $leafCategory
     * @param bool $virtual
     * @param int $numOfItems
     * @param bool $sellerGuaranteeEligible
     * @param bool $oRPA
     * @param bool $oRRA
     * @param bool $lSD
     * @param string $keywords
     * @param \DOMDocument $any
     */
    public function __construct($bestOfferEnabled = null, $autoPayEnabled = null, $b2BVATEnabled = null, $catalogEnabled = null, $categoryID = null, $categoryLevel = null, $categoryName = null, array $categoryParentID = array(), array $categoryParentName = array(), $productSearchPageAvailable = null, array $productFinderIDs = array(), array $characteristicsSets = array(), $expired = null, $intlAutosFixedCat = null, $leafCategory = null, $virtual = null, $numOfItems = null, $sellerGuaranteeEligible = null, $oRPA = null, $oRRA = null, $lSD = null, $keywords = null, \DOMDocument $any = null)
    {
        $this
            ->setBestOfferEnabled($bestOfferEnabled)
            ->setAutoPayEnabled($autoPayEnabled)
            ->setB2BVATEnabled($b2BVATEnabled)
            ->setCatalogEnabled($catalogEnabled)
            ->setCategoryID($categoryID)
            ->setCategoryLevel($categoryLevel)
            ->setCategoryName($categoryName)
            ->setCategoryParentID($categoryParentID)
            ->setCategoryParentName($categoryParentName)
            ->setProductSearchPageAvailable($productSearchPageAvailable)
            ->setProductFinderIDs($productFinderIDs)
            ->setCharacteristicsSets($characteristicsSets)
            ->setExpired($expired)
            ->setIntlAutosFixedCat($intlAutosFixedCat)
            ->setLeafCategory($leafCategory)
            ->setVirtual($virtual)
            ->setNumOfItems($numOfItems)
            ->setSellerGuaranteeEligible($sellerGuaranteeEligible)
            ->setORPA($oRPA)
            ->setORRA($oRRA)
            ->setLSD($lSD)
            ->setKeywords($keywords)
            ->setAny($any);
    }
    /**
     * Get BestOfferEnabled value
     * @return bool|null
     */
    public function getBestOfferEnabled()
    {
        return $this->BestOfferEnabled;
    }
    /**
     * Set BestOfferEnabled value
     * @param bool $bestOfferEnabled
     * @return \StructType\CategoryType
     */
    public function setBestOfferEnabled($bestOfferEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($bestOfferEnabled) && !is_bool($bestOfferEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bestOfferEnabled, true), gettype($bestOfferEnabled)), __LINE__);
        }
        $this->BestOfferEnabled = $bestOfferEnabled;
        return $this;
    }
    /**
     * Get AutoPayEnabled value
     * @return bool|null
     */
    public function getAutoPayEnabled()
    {
        return $this->AutoPayEnabled;
    }
    /**
     * Set AutoPayEnabled value
     * @param bool $autoPayEnabled
     * @return \StructType\CategoryType
     */
    public function setAutoPayEnabled($autoPayEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($autoPayEnabled) && !is_bool($autoPayEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($autoPayEnabled, true), gettype($autoPayEnabled)), __LINE__);
        }
        $this->AutoPayEnabled = $autoPayEnabled;
        return $this;
    }
    /**
     * Get B2BVATEnabled value
     * @return bool|null
     */
    public function getB2BVATEnabled()
    {
        return $this->B2BVATEnabled;
    }
    /**
     * Set B2BVATEnabled value
     * @param bool $b2BVATEnabled
     * @return \StructType\CategoryType
     */
    public function setB2BVATEnabled($b2BVATEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($b2BVATEnabled) && !is_bool($b2BVATEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($b2BVATEnabled, true), gettype($b2BVATEnabled)), __LINE__);
        }
        $this->B2BVATEnabled = $b2BVATEnabled;
        return $this;
    }
    /**
     * Get CatalogEnabled value
     * @return bool|null
     */
    public function getCatalogEnabled()
    {
        return $this->CatalogEnabled;
    }
    /**
     * Set CatalogEnabled value
     * @param bool $catalogEnabled
     * @return \StructType\CategoryType
     */
    public function setCatalogEnabled($catalogEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($catalogEnabled) && !is_bool($catalogEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($catalogEnabled, true), gettype($catalogEnabled)), __LINE__);
        }
        $this->CatalogEnabled = $catalogEnabled;
        return $this;
    }
    /**
     * Get CategoryID value
     * @return string|null
     */
    public function getCategoryID()
    {
        return $this->CategoryID;
    }
    /**
     * Set CategoryID value
     * @param string $categoryID
     * @return \StructType\CategoryType
     */
    public function setCategoryID($categoryID = null)
    {
        // validation for constraint: string
        if (!is_null($categoryID) && !is_string($categoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryID, true), gettype($categoryID)), __LINE__);
        }
        $this->CategoryID = $categoryID;
        return $this;
    }
    /**
     * Get CategoryLevel value
     * @return int|null
     */
    public function getCategoryLevel()
    {
        return $this->CategoryLevel;
    }
    /**
     * Set CategoryLevel value
     * @param int $categoryLevel
     * @return \StructType\CategoryType
     */
    public function setCategoryLevel($categoryLevel = null)
    {
        // validation for constraint: int
        if (!is_null($categoryLevel) && !(is_int($categoryLevel) || ctype_digit($categoryLevel))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($categoryLevel, true), gettype($categoryLevel)), __LINE__);
        }
        $this->CategoryLevel = $categoryLevel;
        return $this;
    }
    /**
     * Get CategoryName value
     * @return string|null
     */
    public function getCategoryName()
    {
        return $this->CategoryName;
    }
    /**
     * Set CategoryName value
     * @param string $categoryName
     * @return \StructType\CategoryType
     */
    public function setCategoryName($categoryName = null)
    {
        // validation for constraint: string
        if (!is_null($categoryName) && !is_string($categoryName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryName, true), gettype($categoryName)), __LINE__);
        }
        $this->CategoryName = $categoryName;
        return $this;
    }
    /**
     * Get CategoryParentID value
     * @return string[]|null
     */
    public function getCategoryParentID()
    {
        return $this->CategoryParentID;
    }
    /**
     * This method is responsible for validating the values passed to the setCategoryParentID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCategoryParentID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCategoryParentIDForArrayConstraintsFromSetCategoryParentID(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $categoryTypeCategoryParentIDItem) {
            // validation for constraint: itemType
            if (!is_string($categoryTypeCategoryParentIDItem)) {
                $invalidValues[] = is_object($categoryTypeCategoryParentIDItem) ? get_class($categoryTypeCategoryParentIDItem) : sprintf('%s(%s)', gettype($categoryTypeCategoryParentIDItem), var_export($categoryTypeCategoryParentIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CategoryParentID property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set CategoryParentID value
     * @throws \InvalidArgumentException
     * @param string[] $categoryParentID
     * @return \StructType\CategoryType
     */
    public function setCategoryParentID(array $categoryParentID = array())
    {
        // validation for constraint: array
        if ('' !== ($categoryParentIDArrayErrorMessage = self::validateCategoryParentIDForArrayConstraintsFromSetCategoryParentID($categoryParentID))) {
            throw new \InvalidArgumentException($categoryParentIDArrayErrorMessage, __LINE__);
        }
        $this->CategoryParentID = $categoryParentID;
        return $this;
    }
    /**
     * Add item to CategoryParentID value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\CategoryType
     */
    public function addToCategoryParentID($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The CategoryParentID property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CategoryParentID[] = $item;
        return $this;
    }
    /**
     * Get CategoryParentName value
     * @return string[]|null
     */
    public function getCategoryParentName()
    {
        return $this->CategoryParentName;
    }
    /**
     * This method is responsible for validating the values passed to the setCategoryParentName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCategoryParentName method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCategoryParentNameForArrayConstraintsFromSetCategoryParentName(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $categoryTypeCategoryParentNameItem) {
            // validation for constraint: itemType
            if (!is_string($categoryTypeCategoryParentNameItem)) {
                $invalidValues[] = is_object($categoryTypeCategoryParentNameItem) ? get_class($categoryTypeCategoryParentNameItem) : sprintf('%s(%s)', gettype($categoryTypeCategoryParentNameItem), var_export($categoryTypeCategoryParentNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CategoryParentName property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set CategoryParentName value
     * @throws \InvalidArgumentException
     * @param string[] $categoryParentName
     * @return \StructType\CategoryType
     */
    public function setCategoryParentName(array $categoryParentName = array())
    {
        // validation for constraint: array
        if ('' !== ($categoryParentNameArrayErrorMessage = self::validateCategoryParentNameForArrayConstraintsFromSetCategoryParentName($categoryParentName))) {
            throw new \InvalidArgumentException($categoryParentNameArrayErrorMessage, __LINE__);
        }
        $this->CategoryParentName = $categoryParentName;
        return $this;
    }
    /**
     * Add item to CategoryParentName value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\CategoryType
     */
    public function addToCategoryParentName($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The CategoryParentName property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CategoryParentName[] = $item;
        return $this;
    }
    /**
     * Get ProductSearchPageAvailable value
     * @return bool|null
     */
    public function getProductSearchPageAvailable()
    {
        return $this->ProductSearchPageAvailable;
    }
    /**
     * Set ProductSearchPageAvailable value
     * @param bool $productSearchPageAvailable
     * @return \StructType\CategoryType
     */
    public function setProductSearchPageAvailable($productSearchPageAvailable = null)
    {
        // validation for constraint: boolean
        if (!is_null($productSearchPageAvailable) && !is_bool($productSearchPageAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($productSearchPageAvailable, true), gettype($productSearchPageAvailable)), __LINE__);
        }
        $this->ProductSearchPageAvailable = $productSearchPageAvailable;
        return $this;
    }
    /**
     * Get ProductFinderIDs value
     * @return \StructType\ExtendedProductFinderIDType[]|null
     */
    public function getProductFinderIDs()
    {
        return $this->ProductFinderIDs;
    }
    /**
     * This method is responsible for validating the values passed to the setProductFinderIDs method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProductFinderIDs method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductFinderIDsForArrayConstraintsFromSetProductFinderIDs(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $categoryTypeProductFinderIDsItem) {
            // validation for constraint: itemType
            if (!$categoryTypeProductFinderIDsItem instanceof \StructType\ExtendedProductFinderIDType) {
                $invalidValues[] = is_object($categoryTypeProductFinderIDsItem) ? get_class($categoryTypeProductFinderIDsItem) : sprintf('%s(%s)', gettype($categoryTypeProductFinderIDsItem), var_export($categoryTypeProductFinderIDsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProductFinderIDs property can only contain items of type \StructType\ExtendedProductFinderIDType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ProductFinderIDs value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtendedProductFinderIDType[] $productFinderIDs
     * @return \StructType\CategoryType
     */
    public function setProductFinderIDs(array $productFinderIDs = array())
    {
        // validation for constraint: array
        if ('' !== ($productFinderIDsArrayErrorMessage = self::validateProductFinderIDsForArrayConstraintsFromSetProductFinderIDs($productFinderIDs))) {
            throw new \InvalidArgumentException($productFinderIDsArrayErrorMessage, __LINE__);
        }
        $this->ProductFinderIDs = $productFinderIDs;
        return $this;
    }
    /**
     * Add item to ProductFinderIDs value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtendedProductFinderIDType $item
     * @return \StructType\CategoryType
     */
    public function addToProductFinderIDs(\StructType\ExtendedProductFinderIDType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtendedProductFinderIDType) {
            throw new \InvalidArgumentException(sprintf('The ProductFinderIDs property can only contain items of type \StructType\ExtendedProductFinderIDType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ProductFinderIDs[] = $item;
        return $this;
    }
    /**
     * Get CharacteristicsSets value
     * @return \StructType\CharacteristicsSetType[]|null
     */
    public function getCharacteristicsSets()
    {
        return $this->CharacteristicsSets;
    }
    /**
     * This method is responsible for validating the values passed to the setCharacteristicsSets method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCharacteristicsSets method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCharacteristicsSetsForArrayConstraintsFromSetCharacteristicsSets(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $categoryTypeCharacteristicsSetsItem) {
            // validation for constraint: itemType
            if (!$categoryTypeCharacteristicsSetsItem instanceof \StructType\CharacteristicsSetType) {
                $invalidValues[] = is_object($categoryTypeCharacteristicsSetsItem) ? get_class($categoryTypeCharacteristicsSetsItem) : sprintf('%s(%s)', gettype($categoryTypeCharacteristicsSetsItem), var_export($categoryTypeCharacteristicsSetsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CharacteristicsSets property can only contain items of type \StructType\CharacteristicsSetType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set CharacteristicsSets value
     * @throws \InvalidArgumentException
     * @param \StructType\CharacteristicsSetType[] $characteristicsSets
     * @return \StructType\CategoryType
     */
    public function setCharacteristicsSets(array $characteristicsSets = array())
    {
        // validation for constraint: array
        if ('' !== ($characteristicsSetsArrayErrorMessage = self::validateCharacteristicsSetsForArrayConstraintsFromSetCharacteristicsSets($characteristicsSets))) {
            throw new \InvalidArgumentException($characteristicsSetsArrayErrorMessage, __LINE__);
        }
        $this->CharacteristicsSets = $characteristicsSets;
        return $this;
    }
    /**
     * Add item to CharacteristicsSets value
     * @throws \InvalidArgumentException
     * @param \StructType\CharacteristicsSetType $item
     * @return \StructType\CategoryType
     */
    public function addToCharacteristicsSets(\StructType\CharacteristicsSetType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CharacteristicsSetType) {
            throw new \InvalidArgumentException(sprintf('The CharacteristicsSets property can only contain items of type \StructType\CharacteristicsSetType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CharacteristicsSets[] = $item;
        return $this;
    }
    /**
     * Get Expired value
     * @return bool|null
     */
    public function getExpired()
    {
        return $this->Expired;
    }
    /**
     * Set Expired value
     * @param bool $expired
     * @return \StructType\CategoryType
     */
    public function setExpired($expired = null)
    {
        // validation for constraint: boolean
        if (!is_null($expired) && !is_bool($expired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($expired, true), gettype($expired)), __LINE__);
        }
        $this->Expired = $expired;
        return $this;
    }
    /**
     * Get IntlAutosFixedCat value
     * @return bool|null
     */
    public function getIntlAutosFixedCat()
    {
        return $this->IntlAutosFixedCat;
    }
    /**
     * Set IntlAutosFixedCat value
     * @param bool $intlAutosFixedCat
     * @return \StructType\CategoryType
     */
    public function setIntlAutosFixedCat($intlAutosFixedCat = null)
    {
        // validation for constraint: boolean
        if (!is_null($intlAutosFixedCat) && !is_bool($intlAutosFixedCat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($intlAutosFixedCat, true), gettype($intlAutosFixedCat)), __LINE__);
        }
        $this->IntlAutosFixedCat = $intlAutosFixedCat;
        return $this;
    }
    /**
     * Get LeafCategory value
     * @return bool|null
     */
    public function getLeafCategory()
    {
        return $this->LeafCategory;
    }
    /**
     * Set LeafCategory value
     * @param bool $leafCategory
     * @return \StructType\CategoryType
     */
    public function setLeafCategory($leafCategory = null)
    {
        // validation for constraint: boolean
        if (!is_null($leafCategory) && !is_bool($leafCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($leafCategory, true), gettype($leafCategory)), __LINE__);
        }
        $this->LeafCategory = $leafCategory;
        return $this;
    }
    /**
     * Get Virtual value
     * @return bool|null
     */
    public function getVirtual()
    {
        return $this->Virtual;
    }
    /**
     * Set Virtual value
     * @param bool $virtual
     * @return \StructType\CategoryType
     */
    public function setVirtual($virtual = null)
    {
        // validation for constraint: boolean
        if (!is_null($virtual) && !is_bool($virtual)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($virtual, true), gettype($virtual)), __LINE__);
        }
        $this->Virtual = $virtual;
        return $this;
    }
    /**
     * Get NumOfItems value
     * @return int|null
     */
    public function getNumOfItems()
    {
        return $this->NumOfItems;
    }
    /**
     * Set NumOfItems value
     * @param int $numOfItems
     * @return \StructType\CategoryType
     */
    public function setNumOfItems($numOfItems = null)
    {
        // validation for constraint: int
        if (!is_null($numOfItems) && !(is_int($numOfItems) || ctype_digit($numOfItems))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numOfItems, true), gettype($numOfItems)), __LINE__);
        }
        $this->NumOfItems = $numOfItems;
        return $this;
    }
    /**
     * Get SellerGuaranteeEligible value
     * @return bool|null
     */
    public function getSellerGuaranteeEligible()
    {
        return $this->SellerGuaranteeEligible;
    }
    /**
     * Set SellerGuaranteeEligible value
     * @param bool $sellerGuaranteeEligible
     * @return \StructType\CategoryType
     */
    public function setSellerGuaranteeEligible($sellerGuaranteeEligible = null)
    {
        // validation for constraint: boolean
        if (!is_null($sellerGuaranteeEligible) && !is_bool($sellerGuaranteeEligible)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sellerGuaranteeEligible, true), gettype($sellerGuaranteeEligible)), __LINE__);
        }
        $this->SellerGuaranteeEligible = $sellerGuaranteeEligible;
        return $this;
    }
    /**
     * Get ORPA value
     * @return bool|null
     */
    public function getORPA()
    {
        return $this->ORPA;
    }
    /**
     * Set ORPA value
     * @param bool $oRPA
     * @return \StructType\CategoryType
     */
    public function setORPA($oRPA = null)
    {
        // validation for constraint: boolean
        if (!is_null($oRPA) && !is_bool($oRPA)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($oRPA, true), gettype($oRPA)), __LINE__);
        }
        $this->ORPA = $oRPA;
        return $this;
    }
    /**
     * Get ORRA value
     * @return bool|null
     */
    public function getORRA()
    {
        return $this->ORRA;
    }
    /**
     * Set ORRA value
     * @param bool $oRRA
     * @return \StructType\CategoryType
     */
    public function setORRA($oRRA = null)
    {
        // validation for constraint: boolean
        if (!is_null($oRRA) && !is_bool($oRRA)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($oRRA, true), gettype($oRRA)), __LINE__);
        }
        $this->ORRA = $oRRA;
        return $this;
    }
    /**
     * Get LSD value
     * @return bool|null
     */
    public function getLSD()
    {
        return $this->LSD;
    }
    /**
     * Set LSD value
     * @param bool $lSD
     * @return \StructType\CategoryType
     */
    public function setLSD($lSD = null)
    {
        // validation for constraint: boolean
        if (!is_null($lSD) && !is_bool($lSD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($lSD, true), gettype($lSD)), __LINE__);
        }
        $this->LSD = $lSD;
        return $this;
    }
    /**
     * Get Keywords value
     * @return string|null
     */
    public function getKeywords()
    {
        return $this->Keywords;
    }
    /**
     * Set Keywords value
     * @param string $keywords
     * @return \StructType\CategoryType
     */
    public function setKeywords($keywords = null)
    {
        // validation for constraint: string
        if (!is_null($keywords) && !is_string($keywords)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($keywords, true), gettype($keywords)), __LINE__);
        }
        $this->Keywords = $keywords;
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
     * @return \StructType\CategoryType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
