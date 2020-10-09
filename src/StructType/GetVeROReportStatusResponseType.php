<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVeROReportStatusResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Base response of the <strong>GetVeROReportStatus</strong> call. This response contains status information for items reported by the VeRO Program member.
 * @subpackage Structs
 */
class GetVeROReportStatusResponseType extends AbstractResponseType
{
    /**
     * The PaginationResult
     * Meta information extracted from the WSDL
     * - documentation: Contains information regarding the pagination of data (if pagination is used), including total number of pages and total number of entries.
     * - minOccurs: 0
     * @var \StructType\PaginationResultType
     */
    public $PaginationResult;
    /**
     * The HasMoreItems
     * Meta information extracted from the WSDL
     * - documentation: If true, there are more items yet to be retrieved. Additional calls with higher page numbers or more items per page must be made to retrieve these items. Not returned if no items match the request.
     * - minOccurs: 0
     * @var bool
     */
    public $HasMoreItems;
    /**
     * The ItemsPerPage
     * Meta information extracted from the WSDL
     * - documentation: Indicates the maximum number of Reported Item objects that can be returned in any given call. <br/>
     * - minOccurs: 0
     * @var int
     */
    public $ItemsPerPage;
    /**
     * The PageNumber
     * Meta information extracted from the WSDL
     * - documentation: Indicates the page of data returned by the current call. For instance, for the first set of items can be returned, this field has a value of one. <br/>
     * - minOccurs: 0
     * @var int
     */
    public $PageNumber;
    /**
     * The VeROReportPacketID
     * Meta information extracted from the WSDL
     * - documentation: The packet ID for status being returned.
     * - minOccurs: 0
     * @var int
     */
    public $VeROReportPacketID;
    /**
     * The VeROReportPacketStatus
     * Meta information extracted from the WSDL
     * - documentation: Status of the packet.
     * - minOccurs: 0
     * @var string
     */
    public $VeROReportPacketStatus;
    /**
     * The ReportedItemDetails
     * Meta information extracted from the WSDL
     * - documentation: This container of one or more reported items that match the input criteria in the call request. Returns empty if no items are available that match the request.
     * - minOccurs: 0
     * @var \StructType\VeROReportedItemDetailsType
     */
    public $ReportedItemDetails;
    /**
     * Constructor method for GetVeROReportStatusResponseType
     * @uses GetVeROReportStatusResponseType::setPaginationResult()
     * @uses GetVeROReportStatusResponseType::setHasMoreItems()
     * @uses GetVeROReportStatusResponseType::setItemsPerPage()
     * @uses GetVeROReportStatusResponseType::setPageNumber()
     * @uses GetVeROReportStatusResponseType::setVeROReportPacketID()
     * @uses GetVeROReportStatusResponseType::setVeROReportPacketStatus()
     * @uses GetVeROReportStatusResponseType::setReportedItemDetails()
     * @param \StructType\PaginationResultType $paginationResult
     * @param bool $hasMoreItems
     * @param int $itemsPerPage
     * @param int $pageNumber
     * @param int $veROReportPacketID
     * @param string $veROReportPacketStatus
     * @param \StructType\VeROReportedItemDetailsType $reportedItemDetails
     */
    public function __construct(\StructType\PaginationResultType $paginationResult = null, $hasMoreItems = null, $itemsPerPage = null, $pageNumber = null, $veROReportPacketID = null, $veROReportPacketStatus = null, \StructType\VeROReportedItemDetailsType $reportedItemDetails = null)
    {
        $this
            ->setPaginationResult($paginationResult)
            ->setHasMoreItems($hasMoreItems)
            ->setItemsPerPage($itemsPerPage)
            ->setPageNumber($pageNumber)
            ->setVeROReportPacketID($veROReportPacketID)
            ->setVeROReportPacketStatus($veROReportPacketStatus)
            ->setReportedItemDetails($reportedItemDetails);
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
     * @return \StructType\GetVeROReportStatusResponseType
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
     * @return \StructType\GetVeROReportStatusResponseType
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
     * @return \StructType\GetVeROReportStatusResponseType
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
     * @return \StructType\GetVeROReportStatusResponseType
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
     * Get VeROReportPacketID value
     * @return int|null
     */
    public function getVeROReportPacketID()
    {
        return $this->VeROReportPacketID;
    }
    /**
     * Set VeROReportPacketID value
     * @param int $veROReportPacketID
     * @return \StructType\GetVeROReportStatusResponseType
     */
    public function setVeROReportPacketID($veROReportPacketID = null)
    {
        // validation for constraint: int
        if (!is_null($veROReportPacketID) && !(is_int($veROReportPacketID) || ctype_digit($veROReportPacketID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($veROReportPacketID, true), gettype($veROReportPacketID)), __LINE__);
        }
        $this->VeROReportPacketID = $veROReportPacketID;
        return $this;
    }
    /**
     * Get VeROReportPacketStatus value
     * @return string|null
     */
    public function getVeROReportPacketStatus()
    {
        return $this->VeROReportPacketStatus;
    }
    /**
     * Set VeROReportPacketStatus value
     * @uses \EnumType\VeROReportPacketStatusCodeType::valueIsValid()
     * @uses \EnumType\VeROReportPacketStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $veROReportPacketStatus
     * @return \StructType\GetVeROReportStatusResponseType
     */
    public function setVeROReportPacketStatus($veROReportPacketStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\VeROReportPacketStatusCodeType::valueIsValid($veROReportPacketStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\VeROReportPacketStatusCodeType', is_array($veROReportPacketStatus) ? implode(', ', $veROReportPacketStatus) : var_export($veROReportPacketStatus, true), implode(', ', \EnumType\VeROReportPacketStatusCodeType::getValidValues())), __LINE__);
        }
        $this->VeROReportPacketStatus = $veROReportPacketStatus;
        return $this;
    }
    /**
     * Get ReportedItemDetails value
     * @return \StructType\VeROReportedItemDetailsType|null
     */
    public function getReportedItemDetails()
    {
        return $this->ReportedItemDetails;
    }
    /**
     * Set ReportedItemDetails value
     * @param \StructType\VeROReportedItemDetailsType $reportedItemDetails
     * @return \StructType\GetVeROReportStatusResponseType
     */
    public function setReportedItemDetails(\StructType\VeROReportedItemDetailsType $reportedItemDetails = null)
    {
        $this->ReportedItemDetails = $reportedItemDetails;
        return $this;
    }
}
