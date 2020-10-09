<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellerListResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: This is the base response type of the <b>GetSellerList</b> call. The <b>GetSellerList</b> response includes an array of one or more listings that matched the input criteria, as well as pagination data.
 * @subpackage Structs
 */
class GetSellerListResponseType extends AbstractResponseType
{
    /**
     * The PaginationResult
     * Meta information extracted from the WSDL
     * - documentation: This container shows the total number or pages in the result set, as well as the total number of listings that match the current input criteria.
     * - minOccurs: 0
     * @var \StructType\PaginationResultType
     */
    public $PaginationResult;
    /**
     * The HasMoreItems
     * Meta information extracted from the WSDL
     * - documentation: This field's value is returned as <code>true</code> if there are more pages in the current result set to view, or <code>false</code> if the current page being viewed is the last (or only) page of the result set. <br/><br/> If there
     * are more listings to view in the result set, additional <b>GetSellerList</b> calls can be made but with changes to the <b>Pagination</b> values in the request. For example, if the <b>Pagination.PageNumber</b> value in the request for the last call
     * was <code>1</code>, you can make another <b>GetSellerList</b> call, keeping everything the same except changing the value of the <b>Pagination.PageNumber</b> field from <code>1</code> to <code>2</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $HasMoreItems;
    /**
     * The ItemArray
     * Meta information extracted from the WSDL
     * - documentation: This container is an array of one or more listings that match the input criteria. If none of the seller's listings match the input criteria, this container is returned as an empty tag.
     * - minOccurs: 0
     * @var \ArrayType\ItemArrayType
     */
    public $ItemArray;
    /**
     * The ItemsPerPage
     * Meta information extracted from the WSDL
     * - documentation: This value reflects the value that was set in the <b>Pagination.EntriesPerPage</b> field in the request. This is the maximum number of listings that may be returned per page of the result set. Note that this value is only the maximum
     * threshold and does not necessarily reflect the number of listings appearing on the current page of data.
     * - minOccurs: 0
     * @var int
     */
    public $ItemsPerPage;
    /**
     * The PageNumber
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the current page of data in the result set that is being displayed. This value reflects the value specified in the <b>Pagination.PageNumber</b> field in the request. Note that page number defaults to
     * <code>1</code> if the <b>Pagination.PageNumber</b> field was not included in the request.
     * - minOccurs: 0
     * @var int
     */
    public $PageNumber;
    /**
     * The ReturnedItemCountActual
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the total number of listings being shown on the current page of the results set.
     * - minOccurs: 0
     * @var int
     */
    public $ReturnedItemCountActual;
    /**
     * The Seller
     * Meta information extracted from the WSDL
     * - documentation: This container consists of detailed information about the seller and the seller's account. This container is only returned if the <b>GranularityLevel</b> field is included in the request and set to <code>Fine</code>.
     * - minOccurs: 0
     * @var \StructType\UserType
     */
    public $Seller;
    /**
     * Constructor method for GetSellerListResponseType
     * @uses GetSellerListResponseType::setPaginationResult()
     * @uses GetSellerListResponseType::setHasMoreItems()
     * @uses GetSellerListResponseType::setItemArray()
     * @uses GetSellerListResponseType::setItemsPerPage()
     * @uses GetSellerListResponseType::setPageNumber()
     * @uses GetSellerListResponseType::setReturnedItemCountActual()
     * @uses GetSellerListResponseType::setSeller()
     * @param \StructType\PaginationResultType $paginationResult
     * @param bool $hasMoreItems
     * @param \ArrayType\ItemArrayType $itemArray
     * @param int $itemsPerPage
     * @param int $pageNumber
     * @param int $returnedItemCountActual
     * @param \StructType\UserType $seller
     */
    public function __construct(\StructType\PaginationResultType $paginationResult = null, $hasMoreItems = null, \ArrayType\ItemArrayType $itemArray = null, $itemsPerPage = null, $pageNumber = null, $returnedItemCountActual = null, \StructType\UserType $seller = null)
    {
        $this
            ->setPaginationResult($paginationResult)
            ->setHasMoreItems($hasMoreItems)
            ->setItemArray($itemArray)
            ->setItemsPerPage($itemsPerPage)
            ->setPageNumber($pageNumber)
            ->setReturnedItemCountActual($returnedItemCountActual)
            ->setSeller($seller);
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
     * @return \StructType\GetSellerListResponseType
     */
    public function setPaginationResult(\StructType\PaginationResultType $paginationResult = null)
    {
        $this->PaginationResult = $paginationResult;
        return $this;
    }
    /**
     * Get HasMoreItems value
     * @return bool|null
     */
    public function getHasMoreItems()
    {
        return $this->HasMoreItems;
    }
    /**
     * Set HasMoreItems value
     * @param bool $hasMoreItems
     * @return \StructType\GetSellerListResponseType
     */
    public function setHasMoreItems($hasMoreItems = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasMoreItems) && !is_bool($hasMoreItems)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasMoreItems, true), gettype($hasMoreItems)), __LINE__);
        }
        $this->HasMoreItems = $hasMoreItems;
        return $this;
    }
    /**
     * Get ItemArray value
     * @return \ArrayType\ItemArrayType|null
     */
    public function getItemArray()
    {
        return $this->ItemArray;
    }
    /**
     * Set ItemArray value
     * @param \ArrayType\ItemArrayType $itemArray
     * @return \StructType\GetSellerListResponseType
     */
    public function setItemArray(\ArrayType\ItemArrayType $itemArray = null)
    {
        $this->ItemArray = $itemArray;
        return $this;
    }
    /**
     * Get ItemsPerPage value
     * @return int|null
     */
    public function getItemsPerPage()
    {
        return $this->ItemsPerPage;
    }
    /**
     * Set ItemsPerPage value
     * @param int $itemsPerPage
     * @return \StructType\GetSellerListResponseType
     */
    public function setItemsPerPage($itemsPerPage = null)
    {
        // validation for constraint: int
        if (!is_null($itemsPerPage) && !(is_int($itemsPerPage) || ctype_digit($itemsPerPage))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemsPerPage, true), gettype($itemsPerPage)), __LINE__);
        }
        $this->ItemsPerPage = $itemsPerPage;
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
     * @return \StructType\GetSellerListResponseType
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
     * Get ReturnedItemCountActual value
     * @return int|null
     */
    public function getReturnedItemCountActual()
    {
        return $this->ReturnedItemCountActual;
    }
    /**
     * Set ReturnedItemCountActual value
     * @param int $returnedItemCountActual
     * @return \StructType\GetSellerListResponseType
     */
    public function setReturnedItemCountActual($returnedItemCountActual = null)
    {
        // validation for constraint: int
        if (!is_null($returnedItemCountActual) && !(is_int($returnedItemCountActual) || ctype_digit($returnedItemCountActual))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($returnedItemCountActual, true), gettype($returnedItemCountActual)), __LINE__);
        }
        $this->ReturnedItemCountActual = $returnedItemCountActual;
        return $this;
    }
    /**
     * Get Seller value
     * @return \StructType\UserType|null
     */
    public function getSeller()
    {
        return $this->Seller;
    }
    /**
     * Set Seller value
     * @param \StructType\UserType $seller
     * @return \StructType\GetSellerListResponseType
     */
    public function setSeller(\StructType\UserType $seller = null)
    {
        $this->Seller = $seller;
        return $this;
    }
}
