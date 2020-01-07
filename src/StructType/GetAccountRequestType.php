<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccountRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns a seller's invoice data for their eBay account, including the account's summary data.
 * @subpackage Structs
 */
class GetAccountRequestType extends AbstractRequestType
{
    /**
     * The AccountHistorySelection
     * Meta information extracted from the WSDL
     * - documentation: Specifies the report format in which to return account entries.
     * - minOccurs: 0
     * @var string
     */
    public $AccountHistorySelection;
    /**
     * The InvoiceDate
     * Meta information extracted from the WSDL
     * - documentation: This field is used to retrieve all account entries from a specific invoice, which is identified through this <b>InvoiceDate</b> field with the timestamp of the account invoice. This field is only applicable if the
     * <b>AccountHistorySelection</b> value is set to 'SpecifiedInvoice'; otherwise, this field will be ignored.
     * - minOccurs: 0
     * @var string
     */
    public $InvoiceDate;
    /**
     * The BeginDate
     * Meta information extracted from the WSDL
     * - documentation: This field is used to retrieve all account entries dating back to the timestamp passed into this <b>BeginDate</b> field up until the timestamp passed into the <b>EndDate</b> field. The <b>BeginDate</b> value can not be set back any
     * further than four months into the past. <br/><br/> The allowed date formats are <em>YYYY-MM-DD</em> and <em>YYYY-MM-DD HH:mm:ss</em> The <b>BeginDate</b> value must be less than or equal to the <b>EndDate</b> value. The user might use the same values
     * in both fields if that user wanted to retrieve all account entries from a specific day (if <em>YYYY-MM-DD</em> format used) or wanted to retrieve a specific account entry (if <em>YYYY-MM-DD HH:mm:ss</em> format used). <br/><br/> This field is only
     * applicable if the <b>AccountHistorySelection</b> value is set to 'BetweenSpecifiedDates'; otherwise, this field will be ignored. fiedDates' is used, both the <b>BeginDate</b> and <b>EndDate</b> must be included.
     * - minOccurs: 0
     * @var string
     */
    public $BeginDate;
    /**
     * The EndDate
     * Meta information extracted from the WSDL
     * - documentation: This field is used to retrieve all account entries dating up to the timestamp passed into this <b>EndDate</b> field dating back to the timestamp passed into the <b>BeginDate</b> field. The <b>EndDate</b> value can not be set for a
     * future date. <br/><br/> The allowed date formats are <em>YYYY-MM-DD</em> and <em>YYYY-MM-DD HH:mm:ss</em> The <b>EndDate</b> value must be more than or equal to the <b>BeginDate</b> value. The user might use the same values in both fields if that
     * user wanted to retrieve all account entries from a specific day (if <em>YYYY-MM-DD</em> format used) or wanted to retrieve a specific account entry (if <em>YYYY-MM-DD HH:mm:ss</em> format used). <br/><br/> This field is only applicable if the
     * <b>AccountHistorySelection</b> value is set to 'BetweenSpecifiedDates'; otherwise, this field will be ignored. If 'BetweenSpecifiedDates' is used, both the <b>BeginDate</b> and <b>EndDate</b> must be included.
     * - minOccurs: 0
     * @var string
     */
    public $EndDate;
    /**
     * The Pagination
     * Meta information extracted from the WSDL
     * - documentation: This container is used to control how many account entries are returned on each page of data in the response. <b>PaginationType</b> is used by numerous Trading API calls, and the default and maximum values for the
     * <b>EntriesPerPage</b> field differs with each call. For the <b>GetAccount</b> call, the default value is 500 (account entries) per page, and maximum allowed value is 2000 (account entries) per page.
     * - minOccurs: 0
     * @var \StructType\PaginationType
     */
    public $Pagination;
    /**
     * The ExcludeBalance
     * Meta information extracted from the WSDL
     * - documentation: By default, the current balance of the user's account will not be returned in the call response. To retrieve the current balance of their account, the user should include the <b>ExcludeBalance</b> flag in the request and set its
     * value to 'false'. The current balance on the account will be shown in the <b>AccountSummary.CurrentBalance</b> field in the call response.
     * - minOccurs: 0
     * @var bool
     */
    public $ExcludeBalance;
    /**
     * The ExcludeSummary
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether to return account summary information in an AccountSummary node. Default is true, to return AccountSummary.
     * - minOccurs: 0
     * @var bool
     */
    public $ExcludeSummary;
    /**
     * The IncludeConversionRate
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether to retrieve the rate used for the currency conversion for usage transactions.
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeConversionRate;
    /**
     * The AccountEntrySortType
     * Meta information extracted from the WSDL
     * - documentation: Specifies how account entries should be sorted in the response, by an element and then in ascending or descending order.
     * - minOccurs: 0
     * @var string
     */
    public $AccountEntrySortType;
    /**
     * The Currency
     * Meta information extracted from the WSDL
     * - documentation: Specifies the currency used in the account report. Do not specify Currency in the request unless the following conditions are met. First, the user has or had multiple accounts under the same UserID. Second, the account identified in
     * the request uses the currency you specify in the request. An error is returned if no account is found that uses the currency you specify in the request.
     * - minOccurs: 0
     * @var string
     */
    public $Currency;
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: Specifies the item ID for which to return account entries. If ItemID is used, all other filters in the request are ignored. If the specified item does not exist or if the requesting user is not the seller of the item, an error is
     * returned. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The OrderID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of an eBay order. This field must be included if the value of the <b>AccountHistorySelection</b> filter is set to <code>OrderId</code>. A user can filter by order ID to see if there specific account entries
     * related to a specific eBay order. <br><br> It is possible that no account entries will be found directly related to the specified order ID, and if this is the case, no <b>AccountEntries</b> container will be returned, and the <b>ack</b> value will
     * still be <code>Success</code>. <br><br> <span class="tablenote"><b>Note: </b> In June 2019, eBay introduced a new order ID format to both legacy (including Trading API) and REST-based APIs. At this time, both old and new format order IDs will be
     * accepted in legacy API request payloads to identify orders. In legacy API response payloads, order IDs will appear in the new format if the user is using a Trading WSDL version of '1113' (or newer), or if the user sets the
     * <code>X-EBAY-API-COMPATIBILITY-LEVEL</code> HTTP header to a value of '1113' (or newer). If the Trading WSDL version or compatibility level is less/older than '1113', old format order IDs will be returned in legacy API response payloads. Beginning as
     * soon as March 2020, only new format order IDs will be returned regardless of version number. </span>
     * - minOccurs: 0
     * @var string
     */
    public $OrderID;
    /**
     * Constructor method for GetAccountRequestType
     * @uses GetAccountRequestType::setAccountHistorySelection()
     * @uses GetAccountRequestType::setInvoiceDate()
     * @uses GetAccountRequestType::setBeginDate()
     * @uses GetAccountRequestType::setEndDate()
     * @uses GetAccountRequestType::setPagination()
     * @uses GetAccountRequestType::setExcludeBalance()
     * @uses GetAccountRequestType::setExcludeSummary()
     * @uses GetAccountRequestType::setIncludeConversionRate()
     * @uses GetAccountRequestType::setAccountEntrySortType()
     * @uses GetAccountRequestType::setCurrency()
     * @uses GetAccountRequestType::setItemID()
     * @uses GetAccountRequestType::setOrderID()
     * @param string $accountHistorySelection
     * @param string $invoiceDate
     * @param string $beginDate
     * @param string $endDate
     * @param \StructType\PaginationType $pagination
     * @param bool $excludeBalance
     * @param bool $excludeSummary
     * @param bool $includeConversionRate
     * @param string $accountEntrySortType
     * @param string $currency
     * @param string $itemID
     * @param string $orderID
     */
    public function __construct($accountHistorySelection = null, $invoiceDate = null, $beginDate = null, $endDate = null, \StructType\PaginationType $pagination = null, $excludeBalance = null, $excludeSummary = null, $includeConversionRate = null, $accountEntrySortType = null, $currency = null, $itemID = null, $orderID = null)
    {
        $this
            ->setAccountHistorySelection($accountHistorySelection)
            ->setInvoiceDate($invoiceDate)
            ->setBeginDate($beginDate)
            ->setEndDate($endDate)
            ->setPagination($pagination)
            ->setExcludeBalance($excludeBalance)
            ->setExcludeSummary($excludeSummary)
            ->setIncludeConversionRate($includeConversionRate)
            ->setAccountEntrySortType($accountEntrySortType)
            ->setCurrency($currency)
            ->setItemID($itemID)
            ->setOrderID($orderID);
    }
    /**
     * Get AccountHistorySelection value
     * @return string|null
     */
    public function getAccountHistorySelection()
    {
        return $this->AccountHistorySelection;
    }
    /**
     * Set AccountHistorySelection value
     * @uses \EnumType\AccountHistorySelectionCodeType::valueIsValid()
     * @uses \EnumType\AccountHistorySelectionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $accountHistorySelection
     * @return \StructType\GetAccountRequestType
     */
    public function setAccountHistorySelection($accountHistorySelection = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\AccountHistorySelectionCodeType::valueIsValid($accountHistorySelection)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\AccountHistorySelectionCodeType', is_array($accountHistorySelection) ? implode(', ', $accountHistorySelection) : var_export($accountHistorySelection, true), implode(', ', \EnumType\AccountHistorySelectionCodeType::getValidValues())), __LINE__);
        }
        $this->AccountHistorySelection = $accountHistorySelection;
        return $this;
    }
    /**
     * Get InvoiceDate value
     * @return string|null
     */
    public function getInvoiceDate()
    {
        return $this->InvoiceDate;
    }
    /**
     * Set InvoiceDate value
     * @param string $invoiceDate
     * @return \StructType\GetAccountRequestType
     */
    public function setInvoiceDate($invoiceDate = null)
    {
        // validation for constraint: string
        if (!is_null($invoiceDate) && !is_string($invoiceDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceDate, true), gettype($invoiceDate)), __LINE__);
        }
        $this->InvoiceDate = $invoiceDate;
        return $this;
    }
    /**
     * Get BeginDate value
     * @return string|null
     */
    public function getBeginDate()
    {
        return $this->BeginDate;
    }
    /**
     * Set BeginDate value
     * @param string $beginDate
     * @return \StructType\GetAccountRequestType
     */
    public function setBeginDate($beginDate = null)
    {
        // validation for constraint: string
        if (!is_null($beginDate) && !is_string($beginDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($beginDate, true), gettype($beginDate)), __LINE__);
        }
        $this->BeginDate = $beginDate;
        return $this;
    }
    /**
     * Get EndDate value
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }
    /**
     * Set EndDate value
     * @param string $endDate
     * @return \StructType\GetAccountRequestType
     */
    public function setEndDate($endDate = null)
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->EndDate = $endDate;
        return $this;
    }
    /**
     * Get Pagination value
     * @return \StructType\PaginationType|null
     */
    public function getPagination()
    {
        return $this->Pagination;
    }
    /**
     * Set Pagination value
     * @param \StructType\PaginationType $pagination
     * @return \StructType\GetAccountRequestType
     */
    public function setPagination(\StructType\PaginationType $pagination = null)
    {
        $this->Pagination = $pagination;
        return $this;
    }
    /**
     * Get ExcludeBalance value
     * @return bool|null
     */
    public function getExcludeBalance()
    {
        return $this->ExcludeBalance;
    }
    /**
     * Set ExcludeBalance value
     * @param bool $excludeBalance
     * @return \StructType\GetAccountRequestType
     */
    public function setExcludeBalance($excludeBalance = null)
    {
        // validation for constraint: boolean
        if (!is_null($excludeBalance) && !is_bool($excludeBalance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($excludeBalance, true), gettype($excludeBalance)), __LINE__);
        }
        $this->ExcludeBalance = $excludeBalance;
        return $this;
    }
    /**
     * Get ExcludeSummary value
     * @return bool|null
     */
    public function getExcludeSummary()
    {
        return $this->ExcludeSummary;
    }
    /**
     * Set ExcludeSummary value
     * @param bool $excludeSummary
     * @return \StructType\GetAccountRequestType
     */
    public function setExcludeSummary($excludeSummary = null)
    {
        // validation for constraint: boolean
        if (!is_null($excludeSummary) && !is_bool($excludeSummary)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($excludeSummary, true), gettype($excludeSummary)), __LINE__);
        }
        $this->ExcludeSummary = $excludeSummary;
        return $this;
    }
    /**
     * Get IncludeConversionRate value
     * @return bool|null
     */
    public function getIncludeConversionRate()
    {
        return $this->IncludeConversionRate;
    }
    /**
     * Set IncludeConversionRate value
     * @param bool $includeConversionRate
     * @return \StructType\GetAccountRequestType
     */
    public function setIncludeConversionRate($includeConversionRate = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeConversionRate) && !is_bool($includeConversionRate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeConversionRate, true), gettype($includeConversionRate)), __LINE__);
        }
        $this->IncludeConversionRate = $includeConversionRate;
        return $this;
    }
    /**
     * Get AccountEntrySortType value
     * @return string|null
     */
    public function getAccountEntrySortType()
    {
        return $this->AccountEntrySortType;
    }
    /**
     * Set AccountEntrySortType value
     * @uses \EnumType\AccountEntrySortTypeCodeType::valueIsValid()
     * @uses \EnumType\AccountEntrySortTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $accountEntrySortType
     * @return \StructType\GetAccountRequestType
     */
    public function setAccountEntrySortType($accountEntrySortType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\AccountEntrySortTypeCodeType::valueIsValid($accountEntrySortType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\AccountEntrySortTypeCodeType', is_array($accountEntrySortType) ? implode(', ', $accountEntrySortType) : var_export($accountEntrySortType, true), implode(', ', \EnumType\AccountEntrySortTypeCodeType::getValidValues())), __LINE__);
        }
        $this->AccountEntrySortType = $accountEntrySortType;
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
     * @return \StructType\GetAccountRequestType
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
     * @return \StructType\GetAccountRequestType
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
     * Get OrderID value
     * @return string|null
     */
    public function getOrderID()
    {
        return $this->OrderID;
    }
    /**
     * Set OrderID value
     * @param string $orderID
     * @return \StructType\GetAccountRequestType
     */
    public function setOrderID($orderID = null)
    {
        // validation for constraint: string
        if (!is_null($orderID) && !is_string($orderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderID, true), gettype($orderID)), __LINE__);
        }
        $this->OrderID = $orderID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetAccountRequestType
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
