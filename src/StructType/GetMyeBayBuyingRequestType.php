<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMyeBayBuyingRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieves information regarding a user's buying activity, such as items they are watching, bidding on, have won, did not win, and have made Best Offers on.
 * @subpackage Structs
 */
class GetMyeBayBuyingRequestType extends AbstractRequestType
{
    /**
     * The WatchList
     * Meta information extracted from the WSDL
     * - documentation: Include this container and set the <b>WatchList.Include</b> field to <code>true</code> to return the list of items on the eBay user's Watch List. <br><br> The user also has the option of using pagination and sorting for the list of
     * watched items that will be returned.
     * - minOccurs: 0
     * @var \StructType\ItemListCustomizationType
     */
    public $WatchList;
    /**
     * The BidList
     * Meta information extracted from the WSDL
     * - documentation: Include this container and set the <b>BidList.Include</b> field to <code>true</code> to return the list of auction items on which the eBay user has bid. <br><br> The user also has the option of using pagination and sorting for the
     * list of auction items that will be returned.
     * - minOccurs: 0
     * @var \StructType\ItemListCustomizationType
     */
    public $BidList;
    /**
     * The BestOfferList
     * Meta information extracted from the WSDL
     * - documentation: Include this container and set the <b>BestOfferList.Include</b> field to <code>true</code> to return the list of items on which the eBay user has made a Best Offer. <br><br> The user also has the option of using pagination and
     * sorting for the list of items that will be returned.
     * - minOccurs: 0
     * @var \StructType\ItemListCustomizationType
     */
    public $BestOfferList;
    /**
     * The WonList
     * Meta information extracted from the WSDL
     * - documentation: Include this container and set the <b>WonList.Include</b> field to <code>true</code> to return the list of auction items on which the eBay user has bid on and won. <br><br> The user also has the option of using pagination and sorting
     * for the list of auction items that will be returned.
     * - minOccurs: 0
     * @var \StructType\ItemListCustomizationType
     */
    public $WonList;
    /**
     * The LostList
     * Meta information extracted from the WSDL
     * - documentation: Include this container and set the <b>LostList.Include</b> field to <code>true</code> to return the list of auction items on which the eBay user has bid on and lost. <br><br> The user also has the option of using pagination and
     * sorting for the list of auction items that will be returned.
     * - minOccurs: 0
     * @var \StructType\ItemListCustomizationType
     */
    public $LostList;
    /**
     * The FavoriteSearches
     * Meta information extracted from the WSDL
     * - documentation: Include this container and set the <b>FavoriteSearches.Include</b> field to <code>true</code> to return the list of the eBay user's saved searches.
     * - minOccurs: 0
     * @var \StructType\MyeBaySelectionType
     */
    public $FavoriteSearches;
    /**
     * The FavoriteSellers
     * Meta information extracted from the WSDL
     * - documentation: Include this container and set the <b>FavoriteSellers.Include</b> field to <code>true</code> to return the list of the eBay user's saved sellers.
     * - minOccurs: 0
     * @var \StructType\MyeBaySelectionType
     */
    public $FavoriteSellers;
    /**
     * The SecondChanceOffer
     * Meta information extracted from the WSDL
     * - documentation: Include this container and set the <b>SecondChanceOffer.Include</b> field to <code>true</code> to return any Second Chance Offers that the eBay user has received.
     * - minOccurs: 0
     * @var \StructType\MyeBaySelectionType
     */
    public $SecondChanceOffer;
    /**
     * The BidAssistantList
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\BidAssistantListType
     */
    public $BidAssistantList;
    /**
     * The DeletedFromWonList
     * Meta information extracted from the WSDL
     * - documentation: Include this container and set the <b>DeletedFromWonList.Include</b> field to <code>true</code> to return the list of auction items on which the eBay user has bid on and won, but has deleted from their My eBay page. <br><br> The user
     * also has the option of using pagination and sorting for the list of auction items that will be returned.
     * - minOccurs: 0
     * @var \StructType\ItemListCustomizationType
     */
    public $DeletedFromWonList;
    /**
     * The DeletedFromLostList
     * Meta information extracted from the WSDL
     * - documentation: Include this container and set the <b>DeletedFromLostList.Include</b> field to <code>true</code> to return the list of auction items on which the eBay user has bid on and lost, and has deleted from their My eBay page. <br><br> The
     * user also has the option of using pagination and sorting for the list of auction items that will be returned.
     * - minOccurs: 0
     * @var \StructType\ItemListCustomizationType
     */
    public $DeletedFromLostList;
    /**
     * The BuyingSummary
     * Meta information extracted from the WSDL
     * - documentation: Include this container and set the <b>BuyingSummary.Include</b> field to <code>true</code> to return the <b>BuyingSummary</b> container in the response. The <b>BuyingSummary</b> container consists of buying/bidding activity counts
     * and values.
     * - minOccurs: 0
     * @var \StructType\ItemListCustomizationType
     */
    public $BuyingSummary;
    /**
     * The UserDefinedLists
     * Meta information extracted from the WSDL
     * - documentation: Include this container and set the <b>UserDefinedLists.Include</b> field to <code>true</code> to return one or more user-defined lists. User-defined lists are lists created by the user in My eBay and consists of a combination of
     * items, saved sellers, and/or saved searches.
     * - minOccurs: 0
     * @var \StructType\MyeBaySelectionType
     */
    public $UserDefinedLists;
    /**
     * The HideVariations
     * Meta information extracted from the WSDL
     * - documentation: If this field is included and set to <code>true</code>, the <b>Variations</b> node (and all variation data) is omitted for all multiple-variation listings in the response. If this field is omitted or set to <code>false</code>, the
     * <b>Variations</b> node is returned for all multiple-variation listings in the response. <br>
     * - minOccurs: 0
     * @var bool
     */
    public $HideVariations;
    /**
     * Constructor method for GetMyeBayBuyingRequestType
     * @uses GetMyeBayBuyingRequestType::setWatchList()
     * @uses GetMyeBayBuyingRequestType::setBidList()
     * @uses GetMyeBayBuyingRequestType::setBestOfferList()
     * @uses GetMyeBayBuyingRequestType::setWonList()
     * @uses GetMyeBayBuyingRequestType::setLostList()
     * @uses GetMyeBayBuyingRequestType::setFavoriteSearches()
     * @uses GetMyeBayBuyingRequestType::setFavoriteSellers()
     * @uses GetMyeBayBuyingRequestType::setSecondChanceOffer()
     * @uses GetMyeBayBuyingRequestType::setBidAssistantList()
     * @uses GetMyeBayBuyingRequestType::setDeletedFromWonList()
     * @uses GetMyeBayBuyingRequestType::setDeletedFromLostList()
     * @uses GetMyeBayBuyingRequestType::setBuyingSummary()
     * @uses GetMyeBayBuyingRequestType::setUserDefinedLists()
     * @uses GetMyeBayBuyingRequestType::setHideVariations()
     * @param \StructType\ItemListCustomizationType $watchList
     * @param \StructType\ItemListCustomizationType $bidList
     * @param \StructType\ItemListCustomizationType $bestOfferList
     * @param \StructType\ItemListCustomizationType $wonList
     * @param \StructType\ItemListCustomizationType $lostList
     * @param \StructType\MyeBaySelectionType $favoriteSearches
     * @param \StructType\MyeBaySelectionType $favoriteSellers
     * @param \StructType\MyeBaySelectionType $secondChanceOffer
     * @param \StructType\BidAssistantListType $bidAssistantList
     * @param \StructType\ItemListCustomizationType $deletedFromWonList
     * @param \StructType\ItemListCustomizationType $deletedFromLostList
     * @param \StructType\ItemListCustomizationType $buyingSummary
     * @param \StructType\MyeBaySelectionType $userDefinedLists
     * @param bool $hideVariations
     */
    public function __construct(\StructType\ItemListCustomizationType $watchList = null, \StructType\ItemListCustomizationType $bidList = null, \StructType\ItemListCustomizationType $bestOfferList = null, \StructType\ItemListCustomizationType $wonList = null, \StructType\ItemListCustomizationType $lostList = null, \StructType\MyeBaySelectionType $favoriteSearches = null, \StructType\MyeBaySelectionType $favoriteSellers = null, \StructType\MyeBaySelectionType $secondChanceOffer = null, \StructType\BidAssistantListType $bidAssistantList = null, \StructType\ItemListCustomizationType $deletedFromWonList = null, \StructType\ItemListCustomizationType $deletedFromLostList = null, \StructType\ItemListCustomizationType $buyingSummary = null, \StructType\MyeBaySelectionType $userDefinedLists = null, $hideVariations = null)
    {
        $this
            ->setWatchList($watchList)
            ->setBidList($bidList)
            ->setBestOfferList($bestOfferList)
            ->setWonList($wonList)
            ->setLostList($lostList)
            ->setFavoriteSearches($favoriteSearches)
            ->setFavoriteSellers($favoriteSellers)
            ->setSecondChanceOffer($secondChanceOffer)
            ->setBidAssistantList($bidAssistantList)
            ->setDeletedFromWonList($deletedFromWonList)
            ->setDeletedFromLostList($deletedFromLostList)
            ->setBuyingSummary($buyingSummary)
            ->setUserDefinedLists($userDefinedLists)
            ->setHideVariations($hideVariations);
    }
    /**
     * Get WatchList value
     * @return \StructType\ItemListCustomizationType|null
     */
    public function getWatchList()
    {
        return $this->WatchList;
    }
    /**
     * Set WatchList value
     * @param \StructType\ItemListCustomizationType $watchList
     * @return \StructType\GetMyeBayBuyingRequestType
     */
    public function setWatchList(\StructType\ItemListCustomizationType $watchList = null)
    {
        $this->WatchList = $watchList;
        return $this;
    }
    /**
     * Get BidList value
     * @return \StructType\ItemListCustomizationType|null
     */
    public function getBidList()
    {
        return $this->BidList;
    }
    /**
     * Set BidList value
     * @param \StructType\ItemListCustomizationType $bidList
     * @return \StructType\GetMyeBayBuyingRequestType
     */
    public function setBidList(\StructType\ItemListCustomizationType $bidList = null)
    {
        $this->BidList = $bidList;
        return $this;
    }
    /**
     * Get BestOfferList value
     * @return \StructType\ItemListCustomizationType|null
     */
    public function getBestOfferList()
    {
        return $this->BestOfferList;
    }
    /**
     * Set BestOfferList value
     * @param \StructType\ItemListCustomizationType $bestOfferList
     * @return \StructType\GetMyeBayBuyingRequestType
     */
    public function setBestOfferList(\StructType\ItemListCustomizationType $bestOfferList = null)
    {
        $this->BestOfferList = $bestOfferList;
        return $this;
    }
    /**
     * Get WonList value
     * @return \StructType\ItemListCustomizationType|null
     */
    public function getWonList()
    {
        return $this->WonList;
    }
    /**
     * Set WonList value
     * @param \StructType\ItemListCustomizationType $wonList
     * @return \StructType\GetMyeBayBuyingRequestType
     */
    public function setWonList(\StructType\ItemListCustomizationType $wonList = null)
    {
        $this->WonList = $wonList;
        return $this;
    }
    /**
     * Get LostList value
     * @return \StructType\ItemListCustomizationType|null
     */
    public function getLostList()
    {
        return $this->LostList;
    }
    /**
     * Set LostList value
     * @param \StructType\ItemListCustomizationType $lostList
     * @return \StructType\GetMyeBayBuyingRequestType
     */
    public function setLostList(\StructType\ItemListCustomizationType $lostList = null)
    {
        $this->LostList = $lostList;
        return $this;
    }
    /**
     * Get FavoriteSearches value
     * @return \StructType\MyeBaySelectionType|null
     */
    public function getFavoriteSearches()
    {
        return $this->FavoriteSearches;
    }
    /**
     * Set FavoriteSearches value
     * @param \StructType\MyeBaySelectionType $favoriteSearches
     * @return \StructType\GetMyeBayBuyingRequestType
     */
    public function setFavoriteSearches(\StructType\MyeBaySelectionType $favoriteSearches = null)
    {
        $this->FavoriteSearches = $favoriteSearches;
        return $this;
    }
    /**
     * Get FavoriteSellers value
     * @return \StructType\MyeBaySelectionType|null
     */
    public function getFavoriteSellers()
    {
        return $this->FavoriteSellers;
    }
    /**
     * Set FavoriteSellers value
     * @param \StructType\MyeBaySelectionType $favoriteSellers
     * @return \StructType\GetMyeBayBuyingRequestType
     */
    public function setFavoriteSellers(\StructType\MyeBaySelectionType $favoriteSellers = null)
    {
        $this->FavoriteSellers = $favoriteSellers;
        return $this;
    }
    /**
     * Get SecondChanceOffer value
     * @return \StructType\MyeBaySelectionType|null
     */
    public function getSecondChanceOffer()
    {
        return $this->SecondChanceOffer;
    }
    /**
     * Set SecondChanceOffer value
     * @param \StructType\MyeBaySelectionType $secondChanceOffer
     * @return \StructType\GetMyeBayBuyingRequestType
     */
    public function setSecondChanceOffer(\StructType\MyeBaySelectionType $secondChanceOffer = null)
    {
        $this->SecondChanceOffer = $secondChanceOffer;
        return $this;
    }
    /**
     * Get BidAssistantList value
     * @return \StructType\BidAssistantListType|null
     */
    public function getBidAssistantList()
    {
        return $this->BidAssistantList;
    }
    /**
     * Set BidAssistantList value
     * @param \StructType\BidAssistantListType $bidAssistantList
     * @return \StructType\GetMyeBayBuyingRequestType
     */
    public function setBidAssistantList(\StructType\BidAssistantListType $bidAssistantList = null)
    {
        $this->BidAssistantList = $bidAssistantList;
        return $this;
    }
    /**
     * Get DeletedFromWonList value
     * @return \StructType\ItemListCustomizationType|null
     */
    public function getDeletedFromWonList()
    {
        return $this->DeletedFromWonList;
    }
    /**
     * Set DeletedFromWonList value
     * @param \StructType\ItemListCustomizationType $deletedFromWonList
     * @return \StructType\GetMyeBayBuyingRequestType
     */
    public function setDeletedFromWonList(\StructType\ItemListCustomizationType $deletedFromWonList = null)
    {
        $this->DeletedFromWonList = $deletedFromWonList;
        return $this;
    }
    /**
     * Get DeletedFromLostList value
     * @return \StructType\ItemListCustomizationType|null
     */
    public function getDeletedFromLostList()
    {
        return $this->DeletedFromLostList;
    }
    /**
     * Set DeletedFromLostList value
     * @param \StructType\ItemListCustomizationType $deletedFromLostList
     * @return \StructType\GetMyeBayBuyingRequestType
     */
    public function setDeletedFromLostList(\StructType\ItemListCustomizationType $deletedFromLostList = null)
    {
        $this->DeletedFromLostList = $deletedFromLostList;
        return $this;
    }
    /**
     * Get BuyingSummary value
     * @return \StructType\ItemListCustomizationType|null
     */
    public function getBuyingSummary()
    {
        return $this->BuyingSummary;
    }
    /**
     * Set BuyingSummary value
     * @param \StructType\ItemListCustomizationType $buyingSummary
     * @return \StructType\GetMyeBayBuyingRequestType
     */
    public function setBuyingSummary(\StructType\ItemListCustomizationType $buyingSummary = null)
    {
        $this->BuyingSummary = $buyingSummary;
        return $this;
    }
    /**
     * Get UserDefinedLists value
     * @return \StructType\MyeBaySelectionType|null
     */
    public function getUserDefinedLists()
    {
        return $this->UserDefinedLists;
    }
    /**
     * Set UserDefinedLists value
     * @param \StructType\MyeBaySelectionType $userDefinedLists
     * @return \StructType\GetMyeBayBuyingRequestType
     */
    public function setUserDefinedLists(\StructType\MyeBaySelectionType $userDefinedLists = null)
    {
        $this->UserDefinedLists = $userDefinedLists;
        return $this;
    }
    /**
     * Get HideVariations value
     * @return bool|null
     */
    public function getHideVariations()
    {
        return $this->HideVariations;
    }
    /**
     * Set HideVariations value
     * @param bool $hideVariations
     * @return \StructType\GetMyeBayBuyingRequestType
     */
    public function setHideVariations($hideVariations = null)
    {
        // validation for constraint: boolean
        if (!is_null($hideVariations) && !is_bool($hideVariations)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hideVariations, true), gettype($hideVariations)), __LINE__);
        }
        $this->HideVariations = $hideVariations;
        return $this;
    }
}
