<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RelistFixedPriceItemResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response type for the <b>RelistFixedPriceItem</b> call. The response includes the Item ID for the relisted item, the SKU value for the item (if any), listing recommendations (if applicable), the estimated fees for the
 * relisted item (except the Final Value Fee, which isn't calculated until the item has sold), the start and end times of the listing, and other details.
 * @subpackage Structs
 */
class RelistFixedPriceItemResponseType extends AbstractResponseType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier for the relisted item. Note that the <b>ItemID</b> value changes when a listing is relisted, so this will not be the same <b>ItemID</b> value that was passed in the call request. <br/><br/> | Type that
     * represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The SKU
     * Meta information extracted from the WSDL
     * - documentation: The seller-defined SKU value for the new listing (if a SKU value exists for the item). <br/><br/> Note that variation-level SKU values will not be returned if a multiple-variation listing was relisted. The seller would have to make a
     * <b>GetItem</b> call to get variation-level SKU values. | Primitive type that represents a stock-keeping unit (SKU). The usage of this string may vary in different contexts. For usage information and rules, see the fields that reference this type.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $SKU;
    /**
     * The Fees
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the estimated listing fees for the relisted item. Each type of fee is returned even if it is not appplicable (has a value of <code>0.0</code>. The Final Value Fee (FVF) is not in this container, as this
     * value cannot be determined until a sale is made.
     * - minOccurs: 0
     * @var \StructType\FeesType
     */
    public $Fees;
    /**
     * The StartTime
     * Meta information extracted from the WSDL
     * - documentation: This timestamp indicates the date and time when the relisted item became active on the eBay site.
     * - minOccurs: 0
     * @var string
     */
    public $StartTime;
    /**
     * The EndTime
     * Meta information extracted from the WSDL
     * - documentation: Date and time when the relisted item is scheduled to end based on the start time and the listing duration value that was set in the <b>ListingDuration</b> field. If the value of <b>ListingDuration</b> was set to <code>GTC</code>
     * (Good 'Til Cancelled), this value will be set 30 days ahead of the start time, although this value will be updated if the GTC listing is still alive and automatically renewed 30 days after start time. <br><br> <span class="tablenote"><b>Note: </b>
     * Starting July 1, 2019, the Good 'Til Cancelled renewal schedule will be modified from every 30 days to once per calendar month. For example, if a GTC listing is created July 5, the next monthly renewal date will be August 5. If a GTC listing is
     * created on the 31st of the month, but the following month only has 30 days, the renewal will happen on the 30th in the following month. Finally, if a GTC listing is created on January 29-31, the renewal will happen on February 28th (or 29th during a
     * 'Leap Year'). See the <a href="https://pages.ebay.com/seller-center/seller-updates/2019-spring/marketplace-updates.html#good-til-cancelled" target="_blank">Good 'Til Cancelled listings update</a> in the <b>Spring 2019 Seller Updates</b> for more
     * information about this change. </span>
     * - minOccurs: 0
     * @var string
     */
    public $EndTime;
    /**
     * The CategoryID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier of the primary eBay category in which the item was relisted. This field is only returned if the <b>Item.CategoryMappingAllowed</b> field was included and set to <code>true</code> in the request and the category ID
     * passed in the <b>Item.PrimaryCategory</b> field was mapped to a new category ID by eBay. If the primary category has not changed or it has expired with no replacement, this field is not returned. <br/><br/>
     * - minOccurs: 0
     * @var string
     */
    public $CategoryID;
    /**
     * The Category2ID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier of the secondary eBay category (if one was used) in which the item was relisted. This field is only returned if the <b>Item.CategoryMappingAllowed</b> field was included and set to <code>true</code> in the request
     * and the category ID passed in the <b>Item.SecondaryCategory</b> field was mapped to a new category ID by eBay. If the secondary category has not changed or it has expired with no replacement, this field is not returned. <br/><br/>
     * - minOccurs: 0
     * @var string
     */
    public $Category2ID;
    /**
     * The DiscountReason
     * Meta information extracted from the WSDL
     * - documentation: This field is returned if an eBay special offer or promotion is applicable to the listing.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $DiscountReason;
    /**
     * The ProductSuggestions
     * Meta information extracted from the WSDL
     * - documentation: Provides a list of products recommended by eBay which match the item information provided by the seller.
     * - minOccurs: 0
     * @var \StructType\ProductSuggestionsType
     */
    public $ProductSuggestions;
    /**
     * The ListingRecommendations
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of one or more <b>Recommendation</b> containers. Each <b>Recommendation</b> container provides a message to the seller on how a listing can be improved or brought up to standard in regards to top-rated
     * seller/listing requirements, mandated or recommended Item Specifics, picture quality requirements, pricing and/or listing format recommendations, recommended keywords and/or Item Specifics in a Title, and/or a recommendation to offer fast handling
     * (same-day handling or handling time of 1 day) and/or a free shipping option in order to qualify the listing for a Fast 'N Free badge. <br><br> This container is only returned if the <b>IncludeRecommendations</b> flag was included and set to 'true' in
     * the <b>RelistFixedPriceItem</b> request, and if at least one listing recommendation exists for the newly relisted item. If one or more listing recommendations are returned, it will be at the seller's discretion about whether to revise the item based
     * on eBay's listing recommendation(s).
     * - minOccurs: 0
     * @var \StructType\ListingRecommendationsType
     */
    public $ListingRecommendations;
    /**
     * Constructor method for RelistFixedPriceItemResponseType
     * @uses RelistFixedPriceItemResponseType::setItemID()
     * @uses RelistFixedPriceItemResponseType::setSKU()
     * @uses RelistFixedPriceItemResponseType::setFees()
     * @uses RelistFixedPriceItemResponseType::setStartTime()
     * @uses RelistFixedPriceItemResponseType::setEndTime()
     * @uses RelistFixedPriceItemResponseType::setCategoryID()
     * @uses RelistFixedPriceItemResponseType::setCategory2ID()
     * @uses RelistFixedPriceItemResponseType::setDiscountReason()
     * @uses RelistFixedPriceItemResponseType::setProductSuggestions()
     * @uses RelistFixedPriceItemResponseType::setListingRecommendations()
     * @param string $itemID
     * @param string $sKU
     * @param \StructType\FeesType $fees
     * @param string $startTime
     * @param string $endTime
     * @param string $categoryID
     * @param string $category2ID
     * @param string[] $discountReason
     * @param \StructType\ProductSuggestionsType $productSuggestions
     * @param \StructType\ListingRecommendationsType $listingRecommendations
     */
    public function __construct($itemID = null, $sKU = null, \StructType\FeesType $fees = null, $startTime = null, $endTime = null, $categoryID = null, $category2ID = null, array $discountReason = array(), \StructType\ProductSuggestionsType $productSuggestions = null, \StructType\ListingRecommendationsType $listingRecommendations = null)
    {
        $this
            ->setItemID($itemID)
            ->setSKU($sKU)
            ->setFees($fees)
            ->setStartTime($startTime)
            ->setEndTime($endTime)
            ->setCategoryID($categoryID)
            ->setCategory2ID($category2ID)
            ->setDiscountReason($discountReason)
            ->setProductSuggestions($productSuggestions)
            ->setListingRecommendations($listingRecommendations);
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \StructType\RelistFixedPriceItemResponseType
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemID, true), gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Get SKU value
     * @return string|null
     */
    public function getSKU()
    {
        return $this->SKU;
    }
    /**
     * Set SKU value
     * @param string $sKU
     * @return \StructType\RelistFixedPriceItemResponseType
     */
    public function setSKU($sKU = null)
    {
        // validation for constraint: string
        if (!is_null($sKU) && !is_string($sKU)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sKU, true), gettype($sKU)), __LINE__);
        }
        $this->SKU = $sKU;
        return $this;
    }
    /**
     * Get Fees value
     * @return \StructType\FeesType|null
     */
    public function getFees()
    {
        return $this->Fees;
    }
    /**
     * Set Fees value
     * @param \StructType\FeesType $fees
     * @return \StructType\RelistFixedPriceItemResponseType
     */
    public function setFees(\StructType\FeesType $fees = null)
    {
        $this->Fees = $fees;
        return $this;
    }
    /**
     * Get StartTime value
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \StructType\RelistFixedPriceItemResponseType
     */
    public function setStartTime($startTime = null)
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        return $this;
    }
    /**
     * Get EndTime value
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \StructType\RelistFixedPriceItemResponseType
     */
    public function setEndTime($endTime = null)
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTime, true), gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
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
     * @return \StructType\RelistFixedPriceItemResponseType
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
     * Get Category2ID value
     * @return string|null
     */
    public function getCategory2ID()
    {
        return $this->Category2ID;
    }
    /**
     * Set Category2ID value
     * @param string $category2ID
     * @return \StructType\RelistFixedPriceItemResponseType
     */
    public function setCategory2ID($category2ID = null)
    {
        // validation for constraint: string
        if (!is_null($category2ID) && !is_string($category2ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category2ID, true), gettype($category2ID)), __LINE__);
        }
        $this->Category2ID = $category2ID;
        return $this;
    }
    /**
     * Get DiscountReason value
     * @return string[]|null
     */
    public function getDiscountReason()
    {
        return $this->DiscountReason;
    }
    /**
     * This method is responsible for validating the values passed to the setDiscountReason method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDiscountReason method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDiscountReasonForArrayConstraintsFromSetDiscountReason(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $relistFixedPriceItemResponseTypeDiscountReasonItem) {
            // validation for constraint: enumeration
            if (!\EnumType\DiscountReasonCodeType::valueIsValid($relistFixedPriceItemResponseTypeDiscountReasonItem)) {
                $invalidValues[] = is_object($relistFixedPriceItemResponseTypeDiscountReasonItem) ? get_class($relistFixedPriceItemResponseTypeDiscountReasonItem) : sprintf('%s(%s)', gettype($relistFixedPriceItemResponseTypeDiscountReasonItem), var_export($relistFixedPriceItemResponseTypeDiscountReasonItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DiscountReasonCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\DiscountReasonCodeType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DiscountReason value
     * @uses \EnumType\DiscountReasonCodeType::valueIsValid()
     * @uses \EnumType\DiscountReasonCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $discountReason
     * @return \StructType\RelistFixedPriceItemResponseType
     */
    public function setDiscountReason(array $discountReason = array())
    {
        // validation for constraint: array
        if ('' !== ($discountReasonArrayErrorMessage = self::validateDiscountReasonForArrayConstraintsFromSetDiscountReason($discountReason))) {
            throw new \InvalidArgumentException($discountReasonArrayErrorMessage, __LINE__);
        }
        $this->DiscountReason = $discountReason;
        return $this;
    }
    /**
     * Add item to DiscountReason value
     * @uses \EnumType\DiscountReasonCodeType::valueIsValid()
     * @uses \EnumType\DiscountReasonCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\RelistFixedPriceItemResponseType
     */
    public function addToDiscountReason($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DiscountReasonCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DiscountReasonCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \EnumType\DiscountReasonCodeType::getValidValues())), __LINE__);
        }
        $this->DiscountReason[] = $item;
        return $this;
    }
    /**
     * Get ProductSuggestions value
     * @return \StructType\ProductSuggestionsType|null
     */
    public function getProductSuggestions()
    {
        return $this->ProductSuggestions;
    }
    /**
     * Set ProductSuggestions value
     * @param \StructType\ProductSuggestionsType $productSuggestions
     * @return \StructType\RelistFixedPriceItemResponseType
     */
    public function setProductSuggestions(\StructType\ProductSuggestionsType $productSuggestions = null)
    {
        $this->ProductSuggestions = $productSuggestions;
        return $this;
    }
    /**
     * Get ListingRecommendations value
     * @return \StructType\ListingRecommendationsType|null
     */
    public function getListingRecommendations()
    {
        return $this->ListingRecommendations;
    }
    /**
     * Set ListingRecommendations value
     * @param \StructType\ListingRecommendationsType $listingRecommendations
     * @return \StructType\RelistFixedPriceItemResponseType
     */
    public function setListingRecommendations(\StructType\ListingRecommendationsType $listingRecommendations = null)
    {
        $this->ListingRecommendations = $listingRecommendations;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\RelistFixedPriceItemResponseType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
