<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFeedbackResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The <b>GetFeedback</b> response contains the feedback summary if a <b>TransactionID</b> or <b>ItemID</b> is specified, and contains the specified user's total feedback score and feedback summary data if a <b>UserID</b> is specified.
 * If no value is supplied, the feedback score and feedback summary for the requesting user will be returned. <br> If a detail level value of <b>ReturnAll</b> is specified, an array of all feedback records will be returned.
 * @subpackage Structs
 */
class GetFeedbackResponseType extends AbstractResponseType
{
    /**
     * The FeedbackDetailArray
     * Meta information extracted from the WSDL
     * - documentation: Contains the individual Feedback records for the user or order line item specified in the request. There is one <b>FeedbackDetail</b> container returned for each Feedback record. Only populated with data when a detail level of
     * <code>ReturnAll</code> is specified in the request. Not returned if you specify a <b>FeedbackID</b> in the request.
     * - minOccurs: 0
     * @var \ArrayType\FeedbackDetailArrayType
     */
    public $FeedbackDetailArray;
    /**
     * The FeedbackDetailItemTotal
     * Meta information extracted from the WSDL
     * - documentation: Indicates the total number of Feedback records returned in the the response. Only applicable if Feedback details are returned.
     * - minOccurs: 0
     * @var int
     */
    public $FeedbackDetailItemTotal;
    /**
     * The FeedbackSummary
     * Meta information extracted from the WSDL
     * - documentation: Summary Feedback data for the user. Contains counts of positive, neutral, and negative Feedback for pre-defined time periods. Only applicable if Feedback details are returned.
     * - minOccurs: 0
     * @var \StructType\FeedbackSummaryType
     */
    public $FeedbackSummary;
    /**
     * The FeedbackScore
     * Meta information extracted from the WSDL
     * - documentation: Indicates the total Feedback score for the user.
     * - minOccurs: 0
     * @var int
     */
    public $FeedbackScore;
    /**
     * The PaginationResult
     * Meta information extracted from the WSDL
     * - documentation: Contains information regarding the pagination of data, including the total number of Feedback entries and the total number of pages required to show all of these Feedback entries. The total number of pages is dependent on the
     * <b>Pagination.EntriesPerPage</b> value (if set). The <b>EntriesPerPage</b> value defaults to <code>25</code> if the <b>Pagination.EntriesPerPage</b> field is not used. <br><br> If the call request returns no Feedback entries because there are none,
     * or because the <b>DetailLevel</b> field was not included and set to <code>ReturnAll</code>, the <b>PaginationResult.TotalNumberOfPages</b> and <b>PaginationResult.TotalNumberOfEntries</b> fields are still returned, but with values of <code>0</code>.
     * - minOccurs: 0
     * @var \StructType\PaginationResultType
     */
    public $PaginationResult;
    /**
     * The EntriesPerPage
     * Meta information extracted from the WSDL
     * - documentation: Indicates the number of Feedback records that are set to be returned per page of data (i.e., per call). The <b>EntriesPerPage</b> value defaults to <code>25</code> if the <b>Pagination.EntriesPerPage</b> field is not set in the
     * request. <br><br> This field is always returned even if the response is not showing any Feedback entries.
     * - minOccurs: 0
     * @var int
     */
    public $EntriesPerPage;
    /**
     * The PageNumber
     * Meta information extracted from the WSDL
     * - documentation: Indicates the page of data that is currently displaying. The page number to display is set in the <b>Pagination.PageNumber</b> field in the request. If this field is omitted, the <b>PageNumber</b> value defaults to <code>1</code>
     * (first page of Feedback entries). If the integer value input into the <b>Pagination.PageNumber</b> field in the request is higher than the total number of available pages, the call fails with an error. <br><br> This field is always returned even if
     * the response is not showing any Feedback entries.
     * - minOccurs: 0
     * @var int
     */
    public $PageNumber;
    /**
     * Constructor method for GetFeedbackResponseType
     * @uses GetFeedbackResponseType::setFeedbackDetailArray()
     * @uses GetFeedbackResponseType::setFeedbackDetailItemTotal()
     * @uses GetFeedbackResponseType::setFeedbackSummary()
     * @uses GetFeedbackResponseType::setFeedbackScore()
     * @uses GetFeedbackResponseType::setPaginationResult()
     * @uses GetFeedbackResponseType::setEntriesPerPage()
     * @uses GetFeedbackResponseType::setPageNumber()
     * @param \ArrayType\FeedbackDetailArrayType $feedbackDetailArray
     * @param int $feedbackDetailItemTotal
     * @param \StructType\FeedbackSummaryType $feedbackSummary
     * @param int $feedbackScore
     * @param \StructType\PaginationResultType $paginationResult
     * @param int $entriesPerPage
     * @param int $pageNumber
     */
    public function __construct(\ArrayType\FeedbackDetailArrayType $feedbackDetailArray = null, $feedbackDetailItemTotal = null, \StructType\FeedbackSummaryType $feedbackSummary = null, $feedbackScore = null, \StructType\PaginationResultType $paginationResult = null, $entriesPerPage = null, $pageNumber = null)
    {
        $this
            ->setFeedbackDetailArray($feedbackDetailArray)
            ->setFeedbackDetailItemTotal($feedbackDetailItemTotal)
            ->setFeedbackSummary($feedbackSummary)
            ->setFeedbackScore($feedbackScore)
            ->setPaginationResult($paginationResult)
            ->setEntriesPerPage($entriesPerPage)
            ->setPageNumber($pageNumber);
    }
    /**
     * Get FeedbackDetailArray value
     * @return \ArrayType\FeedbackDetailArrayType|null
     */
    public function getFeedbackDetailArray()
    {
        return $this->FeedbackDetailArray;
    }
    /**
     * Set FeedbackDetailArray value
     * @param \ArrayType\FeedbackDetailArrayType $feedbackDetailArray
     * @return \StructType\GetFeedbackResponseType
     */
    public function setFeedbackDetailArray(\ArrayType\FeedbackDetailArrayType $feedbackDetailArray = null)
    {
        $this->FeedbackDetailArray = $feedbackDetailArray;
        return $this;
    }
    /**
     * Get FeedbackDetailItemTotal value
     * @return int|null
     */
    public function getFeedbackDetailItemTotal()
    {
        return $this->FeedbackDetailItemTotal;
    }
    /**
     * Set FeedbackDetailItemTotal value
     * @param int $feedbackDetailItemTotal
     * @return \StructType\GetFeedbackResponseType
     */
    public function setFeedbackDetailItemTotal($feedbackDetailItemTotal = null)
    {
        // validation for constraint: int
        if (!is_null($feedbackDetailItemTotal) && !(is_int($feedbackDetailItemTotal) || ctype_digit($feedbackDetailItemTotal))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($feedbackDetailItemTotal, true), gettype($feedbackDetailItemTotal)), __LINE__);
        }
        $this->FeedbackDetailItemTotal = $feedbackDetailItemTotal;
        return $this;
    }
    /**
     * Get FeedbackSummary value
     * @return \StructType\FeedbackSummaryType|null
     */
    public function getFeedbackSummary()
    {
        return $this->FeedbackSummary;
    }
    /**
     * Set FeedbackSummary value
     * @param \StructType\FeedbackSummaryType $feedbackSummary
     * @return \StructType\GetFeedbackResponseType
     */
    public function setFeedbackSummary(\StructType\FeedbackSummaryType $feedbackSummary = null)
    {
        $this->FeedbackSummary = $feedbackSummary;
        return $this;
    }
    /**
     * Get FeedbackScore value
     * @return int|null
     */
    public function getFeedbackScore()
    {
        return $this->FeedbackScore;
    }
    /**
     * Set FeedbackScore value
     * @param int $feedbackScore
     * @return \StructType\GetFeedbackResponseType
     */
    public function setFeedbackScore($feedbackScore = null)
    {
        // validation for constraint: int
        if (!is_null($feedbackScore) && !(is_int($feedbackScore) || ctype_digit($feedbackScore))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($feedbackScore, true), gettype($feedbackScore)), __LINE__);
        }
        $this->FeedbackScore = $feedbackScore;
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
     * @return \StructType\GetFeedbackResponseType
     */
    public function setPaginationResult(\StructType\PaginationResultType $paginationResult = null)
    {
        $this->PaginationResult = $paginationResult;
        return $this;
    }
    /**
     * Get EntriesPerPage value
     * @return int|null
     */
    public function getEntriesPerPage()
    {
        return $this->EntriesPerPage;
    }
    /**
     * Set EntriesPerPage value
     * @param int $entriesPerPage
     * @return \StructType\GetFeedbackResponseType
     */
    public function setEntriesPerPage($entriesPerPage = null)
    {
        // validation for constraint: int
        if (!is_null($entriesPerPage) && !(is_int($entriesPerPage) || ctype_digit($entriesPerPage))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($entriesPerPage, true), gettype($entriesPerPage)), __LINE__);
        }
        $this->EntriesPerPage = $entriesPerPage;
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
     * @return \StructType\GetFeedbackResponseType
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
}
