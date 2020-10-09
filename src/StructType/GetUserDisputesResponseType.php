<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserDisputesResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns a list of disputes that involve the calling user as buyer or seller, in response to a <b>GetUserDisputesRequest</b>.
 * @subpackage Structs
 */
class GetUserDisputesResponseType extends AbstractResponseType
{
    /**
     * The StartingDisputeID
     * Meta information extracted from the WSDL
     * - documentation: The index of the first dispute in the current result set, relative to the total number of disputes available. Primarily useful for interpreting paginated results. For example, if 228 disputes are available and 200 results are
     * returned per page: The first page returns a <b>StartingDisputeID</b> value of 1 and the second page returns a <b>StartingDisputeID</b> value of 201. | The unique identifier of a dispute between a buyer and seller regarding an order. <br/><br/> <span
     * class="tablenote"><strong>Note:</strong> The dispute calls in the Trading API are not compatible with 'Item Not Received' or 'Significantly Not As Described' cases initiated by buyers through the eBay Money Back Guarantee program. The <a
     * href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a> is used to retrieve and/or respond to eBay Money Back Guarantee cases programmatically. </span>
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $StartingDisputeID;
    /**
     * The EndingDisputeID
     * Meta information extracted from the WSDL
     * - documentation: The index of the last dispute in the current result set, relative to the total number of disputes available. Primarily useful for interpreting paginated results. For example, if 228 disputes are available and 200 results are returned
     * per page: The first page returns an <b>EndingDisputeID</b> value of 200 and the second page returns an <b>EndingDisputeID</b> value of 228. | The unique identifier of a dispute between a buyer and seller regarding an order. <br/><br/> <span
     * class="tablenote"><strong>Note:</strong> The dispute calls in the Trading API are not compatible with 'Item Not Received' or 'Significantly Not As Described' cases initiated by buyers through the eBay Money Back Guarantee program. The <a
     * href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a> is used to retrieve and/or respond to eBay Money Back Guarantee cases programmatically. </span>
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $EndingDisputeID;
    /**
     * The DisputeArray
     * Meta information extracted from the WSDL
     * - documentation: The array of disputes returned.
     * - minOccurs: 0
     * @var \ArrayType\DisputeArrayType
     */
    public $DisputeArray;
    /**
     * The ItemsPerPage
     * Meta information extracted from the WSDL
     * - documentation: The number of disputes on each virtual page in the result set. The virtual page returned is determined by <b>PageNumber</b>.
     * - minOccurs: 0
     * @var int
     */
    public $ItemsPerPage;
    /**
     * The PageNumber
     * Meta information extracted from the WSDL
     * - documentation: The page of the total result set returned in the call. The entire result set is virtual and the call returns only one page of it.
     * - minOccurs: 0
     * @var int
     */
    public $PageNumber;
    /**
     * The DisputeFilterCount
     * Meta information extracted from the WSDL
     * - documentation: The number of disputes that involve the requester as buyer or seller and match a given filter type.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\DisputeFilterCountType[]
     */
    public $DisputeFilterCount;
    /**
     * The PaginationResult
     * Meta information extracted from the WSDL
     * - documentation: The result of the pagination, including the total number of virtual pages in the result set and the total number of disputes returned.
     * - minOccurs: 0
     * @var \StructType\PaginationResultType
     */
    public $PaginationResult;
    /**
     * Constructor method for GetUserDisputesResponseType
     * @uses GetUserDisputesResponseType::setStartingDisputeID()
     * @uses GetUserDisputesResponseType::setEndingDisputeID()
     * @uses GetUserDisputesResponseType::setDisputeArray()
     * @uses GetUserDisputesResponseType::setItemsPerPage()
     * @uses GetUserDisputesResponseType::setPageNumber()
     * @uses GetUserDisputesResponseType::setDisputeFilterCount()
     * @uses GetUserDisputesResponseType::setPaginationResult()
     * @param string $startingDisputeID
     * @param string $endingDisputeID
     * @param \ArrayType\DisputeArrayType $disputeArray
     * @param int $itemsPerPage
     * @param int $pageNumber
     * @param \StructType\DisputeFilterCountType[] $disputeFilterCount
     * @param \StructType\PaginationResultType $paginationResult
     */
    public function __construct($startingDisputeID = null, $endingDisputeID = null, \ArrayType\DisputeArrayType $disputeArray = null, $itemsPerPage = null, $pageNumber = null, array $disputeFilterCount = array(), \StructType\PaginationResultType $paginationResult = null)
    {
        $this
            ->setStartingDisputeID($startingDisputeID)
            ->setEndingDisputeID($endingDisputeID)
            ->setDisputeArray($disputeArray)
            ->setItemsPerPage($itemsPerPage)
            ->setPageNumber($pageNumber)
            ->setDisputeFilterCount($disputeFilterCount)
            ->setPaginationResult($paginationResult);
    }
    /**
     * Get StartingDisputeID value
     * @return string|null
     */
    public function getStartingDisputeID()
    {
        return $this->StartingDisputeID;
    }
    /**
     * Set StartingDisputeID value
     * @param string $startingDisputeID
     * @return \StructType\GetUserDisputesResponseType
     */
    public function setStartingDisputeID($startingDisputeID = null)
    {
        // validation for constraint: string
        if (!is_null($startingDisputeID) && !is_string($startingDisputeID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startingDisputeID, true), gettype($startingDisputeID)), __LINE__);
        }
        $this->StartingDisputeID = $startingDisputeID;
        return $this;
    }
    /**
     * Get EndingDisputeID value
     * @return string|null
     */
    public function getEndingDisputeID()
    {
        return $this->EndingDisputeID;
    }
    /**
     * Set EndingDisputeID value
     * @param string $endingDisputeID
     * @return \StructType\GetUserDisputesResponseType
     */
    public function setEndingDisputeID($endingDisputeID = null)
    {
        // validation for constraint: string
        if (!is_null($endingDisputeID) && !is_string($endingDisputeID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endingDisputeID, true), gettype($endingDisputeID)), __LINE__);
        }
        $this->EndingDisputeID = $endingDisputeID;
        return $this;
    }
    /**
     * Get DisputeArray value
     * @return \ArrayType\DisputeArrayType|null
     */
    public function getDisputeArray()
    {
        return $this->DisputeArray;
    }
    /**
     * Set DisputeArray value
     * @param \ArrayType\DisputeArrayType $disputeArray
     * @return \StructType\GetUserDisputesResponseType
     */
    public function setDisputeArray(\ArrayType\DisputeArrayType $disputeArray = null)
    {
        $this->DisputeArray = $disputeArray;
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
     * @return \StructType\GetUserDisputesResponseType
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
     * @return \StructType\GetUserDisputesResponseType
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
     * Get DisputeFilterCount value
     * @return \StructType\DisputeFilterCountType[]|null
     */
    public function getDisputeFilterCount()
    {
        return $this->DisputeFilterCount;
    }
    /**
     * This method is responsible for validating the values passed to the setDisputeFilterCount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDisputeFilterCount method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDisputeFilterCountForArrayConstraintsFromSetDisputeFilterCount(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getUserDisputesResponseTypeDisputeFilterCountItem) {
            // validation for constraint: itemType
            if (!$getUserDisputesResponseTypeDisputeFilterCountItem instanceof \StructType\DisputeFilterCountType) {
                $invalidValues[] = is_object($getUserDisputesResponseTypeDisputeFilterCountItem) ? get_class($getUserDisputesResponseTypeDisputeFilterCountItem) : sprintf('%s(%s)', gettype($getUserDisputesResponseTypeDisputeFilterCountItem), var_export($getUserDisputesResponseTypeDisputeFilterCountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DisputeFilterCount property can only contain items of type \StructType\DisputeFilterCountType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DisputeFilterCount value
     * @throws \InvalidArgumentException
     * @param \StructType\DisputeFilterCountType[] $disputeFilterCount
     * @return \StructType\GetUserDisputesResponseType
     */
    public function setDisputeFilterCount(array $disputeFilterCount = array())
    {
        // validation for constraint: array
        if ('' !== ($disputeFilterCountArrayErrorMessage = self::validateDisputeFilterCountForArrayConstraintsFromSetDisputeFilterCount($disputeFilterCount))) {
            throw new \InvalidArgumentException($disputeFilterCountArrayErrorMessage, __LINE__);
        }
        $this->DisputeFilterCount = $disputeFilterCount;
        return $this;
    }
    /**
     * Add item to DisputeFilterCount value
     * @throws \InvalidArgumentException
     * @param \StructType\DisputeFilterCountType $item
     * @return \StructType\GetUserDisputesResponseType
     */
    public function addToDisputeFilterCount(\StructType\DisputeFilterCountType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DisputeFilterCountType) {
            throw new \InvalidArgumentException(sprintf('The DisputeFilterCount property can only contain items of type \StructType\DisputeFilterCountType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DisputeFilterCount[] = $item;
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
     * @return \StructType\GetUserDisputesResponseType
     */
    public function setPaginationResult(\StructType\PaginationResultType $paginationResult = null)
    {
        $this->PaginationResult = $paginationResult;
        return $this;
    }
}
