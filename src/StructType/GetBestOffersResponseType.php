<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBestOffersResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: All Best Offers for the item according to the filter or Best Offer ID (or both) used in the input. For the notification client usage, this response includes a single Best Offer.
 * @subpackage Structs
 */
class GetBestOffersResponseType extends AbstractResponseType
{
    /**
     * The BestOfferArray
     * Meta information extracted from the WSDL
     * - documentation: All Best Offers for the item according to the filter or Best Offer ID (or both) used in the input. The buyer and seller messages are returned only if the detail level is defined. Includes the buyer and seller message only if the
     * <code>ReturnAll</code> detail level is used. Only returned if Best Offers have been made.
     * - minOccurs: 0
     * @var \ArrayType\BestOfferArrayType
     */
    public $BestOfferArray;
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - documentation: This container consists of several details about the listing for which a Best Offer has been made, including the Item ID, the current price of the item (not the Best Offer price), and the time that the listing is scheduled to end.
     * - minOccurs: 0
     * @var \StructType\ItemType
     */
    public $Item;
    /**
     * The ItemBestOffersArray
     * Meta information extracted from the WSDL
     * - documentation: A collection of details about the Best Offers received for a specific item. Empty if there are no Best Offers.
     * - minOccurs: 0
     * @var \StructType\ItemBestOffersArrayType
     */
    public $ItemBestOffersArray;
    /**
     * The PageNumber
     * Meta information extracted from the WSDL
     * - documentation: This integer value indicates the current page number of Best Offers that is currently being shown. This value will be the same value passed into the <b>Pagination.PageNumber</b> field in the request.
     * - minOccurs: 0
     * @var int
     */
    public $PageNumber;
    /**
     * The PaginationResult
     * Meta information extracted from the WSDL
     * - documentation: Provides information about the data returned, including the number of pages and the number of entries.
     * - minOccurs: 0
     * @var \StructType\PaginationResultType
     */
    public $PaginationResult;
    /**
     * Constructor method for GetBestOffersResponseType
     * @uses GetBestOffersResponseType::setBestOfferArray()
     * @uses GetBestOffersResponseType::setItem()
     * @uses GetBestOffersResponseType::setItemBestOffersArray()
     * @uses GetBestOffersResponseType::setPageNumber()
     * @uses GetBestOffersResponseType::setPaginationResult()
     * @param \ArrayType\BestOfferArrayType $bestOfferArray
     * @param \StructType\ItemType $item
     * @param \StructType\ItemBestOffersArrayType $itemBestOffersArray
     * @param int $pageNumber
     * @param \StructType\PaginationResultType $paginationResult
     */
    public function __construct(\ArrayType\BestOfferArrayType $bestOfferArray = null, \StructType\ItemType $item = null, \StructType\ItemBestOffersArrayType $itemBestOffersArray = null, $pageNumber = null, \StructType\PaginationResultType $paginationResult = null)
    {
        $this
            ->setBestOfferArray($bestOfferArray)
            ->setItem($item)
            ->setItemBestOffersArray($itemBestOffersArray)
            ->setPageNumber($pageNumber)
            ->setPaginationResult($paginationResult);
    }
    /**
     * Get BestOfferArray value
     * @return \ArrayType\BestOfferArrayType|null
     */
    public function getBestOfferArray()
    {
        return $this->BestOfferArray;
    }
    /**
     * Set BestOfferArray value
     * @param \ArrayType\BestOfferArrayType $bestOfferArray
     * @return \StructType\GetBestOffersResponseType
     */
    public function setBestOfferArray(\ArrayType\BestOfferArrayType $bestOfferArray = null)
    {
        $this->BestOfferArray = $bestOfferArray;
        return $this;
    }
    /**
     * Get Item value
     * @return \StructType\ItemType|null
     */
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @param \StructType\ItemType $item
     * @return \StructType\GetBestOffersResponseType
     */
    public function setItem(\StructType\ItemType $item = null)
    {
        $this->Item = $item;
        return $this;
    }
    /**
     * Get ItemBestOffersArray value
     * @return \StructType\ItemBestOffersArrayType|null
     */
    public function getItemBestOffersArray()
    {
        return $this->ItemBestOffersArray;
    }
    /**
     * Set ItemBestOffersArray value
     * @param \StructType\ItemBestOffersArrayType $itemBestOffersArray
     * @return \StructType\GetBestOffersResponseType
     */
    public function setItemBestOffersArray(\StructType\ItemBestOffersArrayType $itemBestOffersArray = null)
    {
        $this->ItemBestOffersArray = $itemBestOffersArray;
        return $this;
    }
    /**
     * Get PageNumber value
     * @return int|null
     */
    public function getPageNumber()
    {
        return $this->PageNumber;
    }
    /**
     * Set PageNumber value
     * @param int $pageNumber
     * @return \StructType\GetBestOffersResponseType
     */
    public function setPageNumber($pageNumber = null)
    {
        // validation for constraint: int
        if (!is_null($pageNumber) && !(is_int($pageNumber) || ctype_digit($pageNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageNumber, true), gettype($pageNumber)), __LINE__);
        }
        $this->PageNumber = $pageNumber;
        return $this;
    }
    /**
     * Get PaginationResult value
     * @return \StructType\PaginationResultType|null
     */
    public function getPaginationResult()
    {
        return $this->PaginationResult;
    }
    /**
     * Set PaginationResult value
     * @param \StructType\PaginationResultType $paginationResult
     * @return \StructType\GetBestOffersResponseType
     */
    public function setPaginationResult(\StructType\PaginationResultType $paginationResult = null)
    {
        $this->PaginationResult = $paginationResult;
        return $this;
    }
}
