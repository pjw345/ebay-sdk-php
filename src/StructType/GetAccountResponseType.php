<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccountResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns information about an eBay seller's own account.
 * @subpackage Structs
 */
class GetAccountResponseType extends AbstractResponseType
{
    /**
     * The AccountID
     * Meta information extracted from the WSDL
     * - documentation: Specifies the seller's unique account number.
     * - minOccurs: 0
     * @var string
     */
    public $AccountID;
    /**
     * The FeeNettingStatus
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the current status of the seller's account for the fee netting mechanism. The seller's account has to be enabled for eBay managed payments in order for fee netting to be available. If the
     * <code>Enabled</code> value is returned, the seller may include the <b>IncludeNettedEntries</b> field in the request to retrieve the total net amount of all charges/fees that have been deducted from seller payouts instead of being invoiced to the
     * seller. The total net amount of any seller credits related to these fees is also shown in the <b>AccountSummary.NettedTransactionSummary</b> container in the response. <br> <br> <span class="tablenote"><b>Note: </b> For a limited number of managed
     * payments sellers, final value fees and payment processing fees will start getting deducted from seller payouts as early as mid-June 2020, but for many other managed payments sellers, these fees won't start getting deducted from seller payouts until
     * mid-July 2020. </span>
     * - minOccurs: 0
     * @var string
     */
    public $FeeNettingStatus;
    /**
     * The AccountSummary
     * Meta information extracted from the WSDL
     * - documentation: Contains summary data for the seller's account, such as the overall balance, bank account and credit card information, and amount and date of any past due balances. Can also contain data for one or more additional accounts, if the
     * user has changed country of residence.
     * - minOccurs: 0
     * @var \StructType\AccountSummaryType
     */
    public $AccountSummary;
    /**
     * The Currency
     * Meta information extracted from the WSDL
     * - documentation: Indicates the currency used for monetary amounts in the report.
     * - minOccurs: 0
     * @var string
     */
    public $Currency;
    /**
     * The AccountEntries
     * Meta information extracted from the WSDL
     * - documentation: This container holds an array of account entries. The account entries that are returned are dependent on the selection that the user made in the <b>AccountHistorySelection</b> field in the call request. Each <b>AccountEntry</b>
     * container consists of one credit, one debit, or one administrative action on the account. It is possible that no <b>AccountEntry</b> containers will be returned if no account entries exist since the last invoice (if 'LastInvoice' value is used),
     * between the specified dates (if 'BetweenSpecifiedDates' value is used), or on a specified invoice (if 'SpecifiedInvoice' value is used).
     * - minOccurs: 0
     * @var \StructType\AccountEntriesType
     */
    public $AccountEntries;
    /**
     * The PaginationResult
     * Meta information extracted from the WSDL
     * - documentation: This container shows the total number of account entries and the total number of account entry pages that exist based on the filters used in the <b>GetAccount</b> call request. The total number of account entry pages is partly
     * controlled by the <b>Pagination.EntriesPerPage</b> value that is set in the request.
     * - minOccurs: 0
     * @var \StructType\PaginationResultType
     */
    public $PaginationResult;
    /**
     * The HasMoreEntries
     * Meta information extracted from the WSDL
     * - documentation: If this boolean value is returned as 'true', there are more account entries to view on one or more pages of data. To view additional entries, the user would have to make additional <b>GetAccount</b> calls and increment the value of
     * the <b>Pagination.PageNumber</b> field by '1' to view additional pages of account entries.
     * - minOccurs: 0
     * @var bool
     */
    public $HasMoreEntries;
    /**
     * The EntriesPerPage
     * Meta information extracted from the WSDL
     * - documentation: This integer value indicates the number of account entries that are being returned per virtual page of data. This value will be the same value passed into the <b>Pagination.EntriesPerPage</b> field in the request.
     * - minOccurs: 0
     * @var int
     */
    public $EntriesPerPage;
    /**
     * The PageNumber
     * Meta information extracted from the WSDL
     * - documentation: This integer value indicates the current page number of account entries that is currently being shown. This value will be the same value passed into the <b>Pagination.PageNumber</b> field in the request.
     * - minOccurs: 0
     * @var int
     */
    public $PageNumber;
    /**
     * Constructor method for GetAccountResponseType
     * @uses GetAccountResponseType::setAccountID()
     * @uses GetAccountResponseType::setFeeNettingStatus()
     * @uses GetAccountResponseType::setAccountSummary()
     * @uses GetAccountResponseType::setCurrency()
     * @uses GetAccountResponseType::setAccountEntries()
     * @uses GetAccountResponseType::setPaginationResult()
     * @uses GetAccountResponseType::setHasMoreEntries()
     * @uses GetAccountResponseType::setEntriesPerPage()
     * @uses GetAccountResponseType::setPageNumber()
     * @param string $accountID
     * @param string $feeNettingStatus
     * @param \StructType\AccountSummaryType $accountSummary
     * @param string $currency
     * @param \StructType\AccountEntriesType $accountEntries
     * @param \StructType\PaginationResultType $paginationResult
     * @param bool $hasMoreEntries
     * @param int $entriesPerPage
     * @param int $pageNumber
     */
    public function __construct($accountID = null, $feeNettingStatus = null, \StructType\AccountSummaryType $accountSummary = null, $currency = null, \StructType\AccountEntriesType $accountEntries = null, \StructType\PaginationResultType $paginationResult = null, $hasMoreEntries = null, $entriesPerPage = null, $pageNumber = null)
    {
        $this
            ->setAccountID($accountID)
            ->setFeeNettingStatus($feeNettingStatus)
            ->setAccountSummary($accountSummary)
            ->setCurrency($currency)
            ->setAccountEntries($accountEntries)
            ->setPaginationResult($paginationResult)
            ->setHasMoreEntries($hasMoreEntries)
            ->setEntriesPerPage($entriesPerPage)
            ->setPageNumber($pageNumber);
    }
    /**
     * Get AccountID value
     * @return string|null
     */
    public function getAccountID()
    {
        return $this->AccountID;
    }
    /**
     * Set AccountID value
     * @param string $accountID
     * @return \StructType\GetAccountResponseType
     */
    public function setAccountID($accountID = null)
    {
        // validation for constraint: string
        if (!is_null($accountID) && !is_string($accountID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountID, true), gettype($accountID)), __LINE__);
        }
        $this->AccountID = $accountID;
        return $this;
    }
    /**
     * Get FeeNettingStatus value
     * @return string|null
     */
    public function getFeeNettingStatus()
    {
        return $this->FeeNettingStatus;
    }
    /**
     * Set FeeNettingStatus value
     * @uses \EnumType\FeenettingStatusCodeType::valueIsValid()
     * @uses \EnumType\FeenettingStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $feeNettingStatus
     * @return \StructType\GetAccountResponseType
     */
    public function setFeeNettingStatus($feeNettingStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\FeenettingStatusCodeType::valueIsValid($feeNettingStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\FeenettingStatusCodeType', is_array($feeNettingStatus) ? implode(', ', $feeNettingStatus) : var_export($feeNettingStatus, true), implode(', ', \EnumType\FeenettingStatusCodeType::getValidValues())), __LINE__);
        }
        $this->FeeNettingStatus = $feeNettingStatus;
        return $this;
    }
    /**
     * Get AccountSummary value
     * @return \StructType\AccountSummaryType|null
     */
    public function getAccountSummary()
    {
        return $this->AccountSummary;
    }
    /**
     * Set AccountSummary value
     * @param \StructType\AccountSummaryType $accountSummary
     * @return \StructType\GetAccountResponseType
     */
    public function setAccountSummary(\StructType\AccountSummaryType $accountSummary = null)
    {
        $this->AccountSummary = $accountSummary;
        return $this;
    }
    /**
     * Get Currency value
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @uses \EnumType\CurrencyCodeType::valueIsValid()
     * @uses \EnumType\CurrencyCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $currency
     * @return \StructType\GetAccountResponseType
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CurrencyCodeType::valueIsValid($currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CurrencyCodeType', is_array($currency) ? implode(', ', $currency) : var_export($currency, true), implode(', ', \EnumType\CurrencyCodeType::getValidValues())), __LINE__);
        }
        $this->Currency = $currency;
        return $this;
    }
    /**
     * Get AccountEntries value
     * @return \StructType\AccountEntriesType|null
     */
    public function getAccountEntries()
    {
        return $this->AccountEntries;
    }
    /**
     * Set AccountEntries value
     * @param \StructType\AccountEntriesType $accountEntries
     * @return \StructType\GetAccountResponseType
     */
    public function setAccountEntries(\StructType\AccountEntriesType $accountEntries = null)
    {
        $this->AccountEntries = $accountEntries;
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
     * @return \StructType\GetAccountResponseType
     */
    public function setPaginationResult(\StructType\PaginationResultType $paginationResult = null)
    {
        $this->PaginationResult = $paginationResult;
        return $this;
    }
    /**
     * Get HasMoreEntries value
     * @return bool|null
     */
    public function getHasMoreEntries()
    {
        return $this->HasMoreEntries;
    }
    /**
     * Set HasMoreEntries value
     * @param bool $hasMoreEntries
     * @return \StructType\GetAccountResponseType
     */
    public function setHasMoreEntries($hasMoreEntries = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasMoreEntries) && !is_bool($hasMoreEntries)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasMoreEntries, true), gettype($hasMoreEntries)), __LINE__);
        }
        $this->HasMoreEntries = $hasMoreEntries;
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
     * @return \StructType\GetAccountResponseType
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
     * @return \StructType\GetAccountResponseType
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
