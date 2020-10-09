<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMyeBayBuyingResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns information regarding a user's buying activity, such as items they are watching, bidding on, have won, did not win, and have made Best Offers on.
 * @subpackage Structs
 */
class GetMyeBayBuyingResponseType extends AbstractResponseType
{
    /**
     * The BuyingSummary
     * Meta information extracted from the WSDL
     * - documentation: This container consists of buying/bidding activity counts and values. For this container to be returned, the user must include the <b>BuyingSummary.Include</b> field in the request and set its value to <code>true</code>.
     * - minOccurs: 0
     * @var \StructType\BuyingSummaryType
     */
    public $BuyingSummary;
    /**
     * The WatchList
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the items on the eBay user's Watch List. This container will be returned if the eBay user has one or more items on their Watch List. <br><br> This container will not be returned in the response (even if
     * there are items on the Watch List) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>WatchList.Include</b> field is omitted or set to <code>false</code>.
     * - minOccurs: 0
     * @var \StructType\PaginatedItemArrayType
     */
    public $WatchList;
    /**
     * The BidList
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the auction items on which the eBay user has bid. This container will be returned if the eBay user has bid on one or more auction items. <br><br> This container will not be returned in the response (even if
     * there are items on the Bid List) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>BidList.Include</b> field is omitted or set to <code>false</code>.
     * - minOccurs: 0
     * @var \StructType\PaginatedItemArrayType
     */
    public $BidList;
    /**
     * The BestOfferList
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the items on which the eBay user has made Best Offers. This container will be returned if the eBay user has made one or more Best Offers. <br><br> This container will not be returned in the response (even
     * if user has made Best Offers) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>BestOfferList.Include</b> field is omitted or set to <code>false</code>.
     * - minOccurs: 0
     * @var \StructType\PaginatedItemArrayType
     */
    public $BestOfferList;
    /**
     * The WonList
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the auction items on which the eBay user has won. This container will be returned if the eBay user has won one or more auction items. <br><br> This container will not be returned in the response (even if
     * there are items on the Won List) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>WonList.Include</b> field is omitted or set to <code>false</code>.
     * - minOccurs: 0
     * @var \StructType\PaginatedOrderTransactionArrayType
     */
    public $WonList;
    /**
     * The LostList
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the auction items on which the eBay user has bid on but lost. This container will be returned if the eBay user has lost one or more auction items. <br><br> This container will not be returned in the
     * response (even if the buyer has lost one or more auction items) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>LostList.Include</b> field is omitted or set to <code>false</code>.
     * - minOccurs: 0
     * @var \StructType\PaginatedItemArrayType
     */
    public $LostList;
    /**
     * The FavoriteSearches
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the eBay user's saved searches. This container will be returned if the eBay user has one or more saved searches. <br><br> This container will not be returned in the response (even if the user has saved
     * searches) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>FavoriteSearches.Include</b> field is omitted or set to <code>false</code>. <br><br> This container consists of the search name, search query, and other search
     * elements. The user can copy and paste the URL in the <b>SearchQuery</b> field into a browser to view the search results again.
     * - minOccurs: 0
     * @var \StructType\MyeBayFavoriteSearchListType
     */
    public $FavoriteSearches;
    /**
     * The FavoriteSellers
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the eBay user's saved sellers. This container will be returned if the eBay user has one or more saved sellers. <br><br> This container will not be returned in the response (even if the user has saved
     * sellers) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>FavoriteSellers.Include</b> field is omitted or set to <code>false</code>. <br><br> This container consists of the saved sellers' user IDs and eBay Store names
     * (if applicable).
     * - minOccurs: 0
     * @var \StructType\MyeBayFavoriteSellerListType
     */
    public $FavoriteSellers;
    /**
     * The SecondChanceOffer
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the items on which the eBay user has received a Second Chance Offer. This container will be returned if the eBay user has made one or more Second Chance Offers. <br><br> This container will not be returned
     * in the response (even if user has received Second Chance Offers) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>SecondChanceOffer.Include</b> field is omitted or set to <code>false</code>.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ItemType[]
     */
    public $SecondChanceOffer;
    /**
     * The BidAssistantList
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \ArrayType\BidGroupArrayType
     */
    public $BidAssistantList;
    /**
     * The DeletedFromWonList
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the auction items on which the eBay user has won but deleted from their My eBay page. This container will be returned if the eBay user has won one or more auction items but have deleted these items from My
     * eBay. <br><br> This container will not be returned in the response (even if they have won and then deleted one or more items) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>DeletedFromWonList.Include</b> field is
     * omitted or set to <code>false</code>.
     * - minOccurs: 0
     * @var \StructType\PaginatedOrderTransactionArrayType
     */
    public $DeletedFromWonList;
    /**
     * The DeletedFromLostList
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the auction items on which the eBay user has lost and then deleted from their My eBay page. This container will be returned if the eBay user has lost one or more auction items and then deleted those items
     * from My eBay. <br><br> This container will not be returned in the response (even if they have lost and then deleted one or more items) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>DeletedFromLostList.Include</b>
     * field is omitted or set to <code>false</code>.
     * - minOccurs: 0
     * @var \StructType\PaginatedItemArrayType
     */
    public $DeletedFromLostList;
    /**
     * The UserDefinedList
     * Meta information extracted from the WSDL
     * - documentation: This container consists of data for a user-defined list that was created by the user in My eBay. User-defined lists consists of a combination of items, saved sellers, and/or saved searches. <br><br> This container will not be
     * returned in the response (even if one or more user-defined lists exist) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>UserDefinedList.Include</b> field is omitted or set to <code>false</code>.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\UserDefinedListType[]
     */
    public $UserDefinedList;
    /**
     * Constructor method for GetMyeBayBuyingResponseType
     * @uses GetMyeBayBuyingResponseType::setBuyingSummary()
     * @uses GetMyeBayBuyingResponseType::setWatchList()
     * @uses GetMyeBayBuyingResponseType::setBidList()
     * @uses GetMyeBayBuyingResponseType::setBestOfferList()
     * @uses GetMyeBayBuyingResponseType::setWonList()
     * @uses GetMyeBayBuyingResponseType::setLostList()
     * @uses GetMyeBayBuyingResponseType::setFavoriteSearches()
     * @uses GetMyeBayBuyingResponseType::setFavoriteSellers()
     * @uses GetMyeBayBuyingResponseType::setSecondChanceOffer()
     * @uses GetMyeBayBuyingResponseType::setBidAssistantList()
     * @uses GetMyeBayBuyingResponseType::setDeletedFromWonList()
     * @uses GetMyeBayBuyingResponseType::setDeletedFromLostList()
     * @uses GetMyeBayBuyingResponseType::setUserDefinedList()
     * @param \StructType\BuyingSummaryType $buyingSummary
     * @param \StructType\PaginatedItemArrayType $watchList
     * @param \StructType\PaginatedItemArrayType $bidList
     * @param \StructType\PaginatedItemArrayType $bestOfferList
     * @param \StructType\PaginatedOrderTransactionArrayType $wonList
     * @param \StructType\PaginatedItemArrayType $lostList
     * @param \StructType\MyeBayFavoriteSearchListType $favoriteSearches
     * @param \StructType\MyeBayFavoriteSellerListType $favoriteSellers
     * @param \StructType\ItemType[] $secondChanceOffer
     * @param \ArrayType\BidGroupArrayType $bidAssistantList
     * @param \StructType\PaginatedOrderTransactionArrayType $deletedFromWonList
     * @param \StructType\PaginatedItemArrayType $deletedFromLostList
     * @param \StructType\UserDefinedListType[] $userDefinedList
     */
    public function __construct(\StructType\BuyingSummaryType $buyingSummary = null, \StructType\PaginatedItemArrayType $watchList = null, \StructType\PaginatedItemArrayType $bidList = null, \StructType\PaginatedItemArrayType $bestOfferList = null, \StructType\PaginatedOrderTransactionArrayType $wonList = null, \StructType\PaginatedItemArrayType $lostList = null, \StructType\MyeBayFavoriteSearchListType $favoriteSearches = null, \StructType\MyeBayFavoriteSellerListType $favoriteSellers = null, array $secondChanceOffer = array(), \ArrayType\BidGroupArrayType $bidAssistantList = null, \StructType\PaginatedOrderTransactionArrayType $deletedFromWonList = null, \StructType\PaginatedItemArrayType $deletedFromLostList = null, array $userDefinedList = array())
    {
        $this
            ->setBuyingSummary($buyingSummary)
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
            ->setUserDefinedList($userDefinedList);
    }
    /**
     * Get BuyingSummary value
     * @return \StructType\BuyingSummaryType|null
     */
    public function getBuyingSummary()
    {
        return $this->BuyingSummary;
    }
    /**
     * Set BuyingSummary value
     * @param \StructType\BuyingSummaryType $buyingSummary
     * @return \StructType\GetMyeBayBuyingResponseType
     */
    public function setBuyingSummary(\StructType\BuyingSummaryType $buyingSummary = null)
    {
        $this->BuyingSummary = $buyingSummary;
        return $this;
    }
    /**
     * Get WatchList value
     * @return \StructType\PaginatedItemArrayType|null
     */
    public function getWatchList()
    {
        return $this->WatchList;
    }
    /**
     * Set WatchList value
     * @param \StructType\PaginatedItemArrayType $watchList
     * @return \StructType\GetMyeBayBuyingResponseType
     */
    public function setWatchList(\StructType\PaginatedItemArrayType $watchList = null)
    {
        $this->WatchList = $watchList;
        return $this;
    }
    /**
     * Get BidList value
     * @return \StructType\PaginatedItemArrayType|null
     */
    public function getBidList()
    {
        return $this->BidList;
    }
    /**
     * Set BidList value
     * @param \StructType\PaginatedItemArrayType $bidList
     * @return \StructType\GetMyeBayBuyingResponseType
     */
    public function setBidList(\StructType\PaginatedItemArrayType $bidList = null)
    {
        $this->BidList = $bidList;
        return $this;
    }
    /**
     * Get BestOfferList value
     * @return \StructType\PaginatedItemArrayType|null
     */
    public function getBestOfferList()
    {
        return $this->BestOfferList;
    }
    /**
     * Set BestOfferList value
     * @param \StructType\PaginatedItemArrayType $bestOfferList
     * @return \StructType\GetMyeBayBuyingResponseType
     */
    public function setBestOfferList(\StructType\PaginatedItemArrayType $bestOfferList = null)
    {
        $this->BestOfferList = $bestOfferList;
        return $this;
    }
    /**
     * Get WonList value
     * @return \StructType\PaginatedOrderTransactionArrayType|null
     */
    public function getWonList()
    {
        return $this->WonList;
    }
    /**
     * Set WonList value
     * @param \StructType\PaginatedOrderTransactionArrayType $wonList
     * @return \StructType\GetMyeBayBuyingResponseType
     */
    public function setWonList(\StructType\PaginatedOrderTransactionArrayType $wonList = null)
    {
        $this->WonList = $wonList;
        return $this;
    }
    /**
     * Get LostList value
     * @return \StructType\PaginatedItemArrayType|null
     */
    public function getLostList()
    {
        return $this->LostList;
    }
    /**
     * Set LostList value
     * @param \StructType\PaginatedItemArrayType $lostList
     * @return \StructType\GetMyeBayBuyingResponseType
     */
    public function setLostList(\StructType\PaginatedItemArrayType $lostList = null)
    {
        $this->LostList = $lostList;
        return $this;
    }
    /**
     * Get FavoriteSearches value
     * @return \StructType\MyeBayFavoriteSearchListType|null
     */
    public function getFavoriteSearches()
    {
        return $this->FavoriteSearches;
    }
    /**
     * Set FavoriteSearches value
     * @param \StructType\MyeBayFavoriteSearchListType $favoriteSearches
     * @return \StructType\GetMyeBayBuyingResponseType
     */
    public function setFavoriteSearches(\StructType\MyeBayFavoriteSearchListType $favoriteSearches = null)
    {
        $this->FavoriteSearches = $favoriteSearches;
        return $this;
    }
    /**
     * Get FavoriteSellers value
     * @return \StructType\MyeBayFavoriteSellerListType|null
     */
    public function getFavoriteSellers()
    {
        return $this->FavoriteSellers;
    }
    /**
     * Set FavoriteSellers value
     * @param \StructType\MyeBayFavoriteSellerListType $favoriteSellers
     * @return \StructType\GetMyeBayBuyingResponseType
     */
    public function setFavoriteSellers(\StructType\MyeBayFavoriteSellerListType $favoriteSellers = null)
    {
        $this->FavoriteSellers = $favoriteSellers;
        return $this;
    }
    /**
     * Get SecondChanceOffer value
     * @return \StructType\ItemType[]|null
     */
    public function getSecondChanceOffer()
    {
        return $this->SecondChanceOffer;
    }
    /**
     * This method is responsible for validating the values passed to the setSecondChanceOffer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSecondChanceOffer method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSecondChanceOfferForArrayConstraintsFromSetSecondChanceOffer(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMyeBayBuyingResponseTypeSecondChanceOfferItem) {
            // validation for constraint: itemType
            if (!$getMyeBayBuyingResponseTypeSecondChanceOfferItem instanceof \StructType\ItemType) {
                $invalidValues[] = is_object($getMyeBayBuyingResponseTypeSecondChanceOfferItem) ? get_class($getMyeBayBuyingResponseTypeSecondChanceOfferItem) : sprintf('%s(%s)', gettype($getMyeBayBuyingResponseTypeSecondChanceOfferItem), var_export($getMyeBayBuyingResponseTypeSecondChanceOfferItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SecondChanceOffer property can only contain items of type \StructType\ItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SecondChanceOffer value
     * @throws \InvalidArgumentException
     * @param \StructType\ItemType[] $secondChanceOffer
     * @return \StructType\GetMyeBayBuyingResponseType
     */
    public function setSecondChanceOffer(array $secondChanceOffer = array())
    {
        // validation for constraint: array
        if ('' !== ($secondChanceOfferArrayErrorMessage = self::validateSecondChanceOfferForArrayConstraintsFromSetSecondChanceOffer($secondChanceOffer))) {
            throw new \InvalidArgumentException($secondChanceOfferArrayErrorMessage, __LINE__);
        }
        $this->SecondChanceOffer = $secondChanceOffer;
        return $this;
    }
    /**
     * Add item to SecondChanceOffer value
     * @throws \InvalidArgumentException
     * @param \StructType\ItemType $item
     * @return \StructType\GetMyeBayBuyingResponseType
     */
    public function addToSecondChanceOffer(\StructType\ItemType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ItemType) {
            throw new \InvalidArgumentException(sprintf('The SecondChanceOffer property can only contain items of type \StructType\ItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SecondChanceOffer[] = $item;
        return $this;
    }
    /**
     * Get BidAssistantList value
     * @return \ArrayType\BidGroupArrayType|null
     */
    public function getBidAssistantList()
    {
        return $this->BidAssistantList;
    }
    /**
     * Set BidAssistantList value
     * @param \ArrayType\BidGroupArrayType $bidAssistantList
     * @return \StructType\GetMyeBayBuyingResponseType
     */
    public function setBidAssistantList(\ArrayType\BidGroupArrayType $bidAssistantList = null)
    {
        $this->BidAssistantList = $bidAssistantList;
        return $this;
    }
    /**
     * Get DeletedFromWonList value
     * @return \StructType\PaginatedOrderTransactionArrayType|null
     */
    public function getDeletedFromWonList()
    {
        return $this->DeletedFromWonList;
    }
    /**
     * Set DeletedFromWonList value
     * @param \StructType\PaginatedOrderTransactionArrayType $deletedFromWonList
     * @return \StructType\GetMyeBayBuyingResponseType
     */
    public function setDeletedFromWonList(\StructType\PaginatedOrderTransactionArrayType $deletedFromWonList = null)
    {
        $this->DeletedFromWonList = $deletedFromWonList;
        return $this;
    }
    /**
     * Get DeletedFromLostList value
     * @return \StructType\PaginatedItemArrayType|null
     */
    public function getDeletedFromLostList()
    {
        return $this->DeletedFromLostList;
    }
    /**
     * Set DeletedFromLostList value
     * @param \StructType\PaginatedItemArrayType $deletedFromLostList
     * @return \StructType\GetMyeBayBuyingResponseType
     */
    public function setDeletedFromLostList(\StructType\PaginatedItemArrayType $deletedFromLostList = null)
    {
        $this->DeletedFromLostList = $deletedFromLostList;
        return $this;
    }
    /**
     * Get UserDefinedList value
     * @return \StructType\UserDefinedListType[]|null
     */
    public function getUserDefinedList()
    {
        return $this->UserDefinedList;
    }
    /**
     * This method is responsible for validating the values passed to the setUserDefinedList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUserDefinedList method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUserDefinedListForArrayConstraintsFromSetUserDefinedList(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMyeBayBuyingResponseTypeUserDefinedListItem) {
            // validation for constraint: itemType
            if (!$getMyeBayBuyingResponseTypeUserDefinedListItem instanceof \StructType\UserDefinedListType) {
                $invalidValues[] = is_object($getMyeBayBuyingResponseTypeUserDefinedListItem) ? get_class($getMyeBayBuyingResponseTypeUserDefinedListItem) : sprintf('%s(%s)', gettype($getMyeBayBuyingResponseTypeUserDefinedListItem), var_export($getMyeBayBuyingResponseTypeUserDefinedListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UserDefinedList property can only contain items of type \StructType\UserDefinedListType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set UserDefinedList value
     * @throws \InvalidArgumentException
     * @param \StructType\UserDefinedListType[] $userDefinedList
     * @return \StructType\GetMyeBayBuyingResponseType
     */
    public function setUserDefinedList(array $userDefinedList = array())
    {
        // validation for constraint: array
        if ('' !== ($userDefinedListArrayErrorMessage = self::validateUserDefinedListForArrayConstraintsFromSetUserDefinedList($userDefinedList))) {
            throw new \InvalidArgumentException($userDefinedListArrayErrorMessage, __LINE__);
        }
        $this->UserDefinedList = $userDefinedList;
        return $this;
    }
    /**
     * Add item to UserDefinedList value
     * @throws \InvalidArgumentException
     * @param \StructType\UserDefinedListType $item
     * @return \StructType\GetMyeBayBuyingResponseType
     */
    public function addToUserDefinedList(\StructType\UserDefinedListType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\UserDefinedListType) {
            throw new \InvalidArgumentException(sprintf('The UserDefinedList property can only contain items of type \StructType\UserDefinedListType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->UserDefinedList[] = $item;
        return $this;
    }
}
