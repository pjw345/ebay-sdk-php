<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetItemTransactionsRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This call retrieves details on one or more order line items for a specified eBay listing. Auctions and single-quantity, fixed-price listings can only have one order line item, but a multiple-quantity and/or multiple-variation,
 * fixed-priced listing can have numerous order line items. <br><br> To find one or more order line items for an eBay listing, an <b>ItemID</b> value can be passed in. If a user wanted to retrieve a specific order line item, an <b>ItemID</b> value and a
 * an <b>TransactionID</b> value can be passed in, or an <b>OrderLineItemID</b> value can be passed in instead of an <b>ItemID</b>/<b>TransactionID</b> pair. <br><br> The <b>NumberOfDays</b> or the <b>ModTimeFrom</b> and <b>ModTimeTo</b> date range
 * filters can be used to retrieve order line items generated (or last modified) within a specific range of time. The maximum date range that can be set is 30 days, and the <b>ModTimeFrom</b> date value cannot be set any further back than 90 days in the
 * past. If no date range filters are used, all order line items (associated with the specified listing) generated (or last modified) in the last 30 days are retrieved. Date ranges are generally only used for multiple-quantity or multiple-variation,
 * fixed-price listings that can have multiple order line items. <br><br> There are also pagination filters available that allow the user to control how many and which order line items are returned on each page of a results set.
 * @subpackage Structs
 */
class GetItemTransactionsRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for an eBay listing. A listing can have multiple order line items, but only one <b>ItemID</b>. When you use <b>ItemID</b> alone, eBay returns all order line items that are associated with the <b>ItemID</b>. If you
     * pair <b>ItemID</b> with a specific <b>TransactionID</b>, data on a specific order line item is returned. An <b>OrderLineItemID</b> value can be used instead of an <b>ItemID</b>/<b>TransactionID</b> pair to identify an order line item, and if an
     * <b>OrderLineItemID</b> is specified in the request, any <b>ItemID</b>/<b>TransactionID</b> pair specified in the same request is ignored. <br> <br> <span class="tablenote"><b>Note:</b> <b>GetItemTransactions</b> doesn't support SKU as an input
     * because this call requires an identifier that is unique across your active and ended listings. Even when <b>InventoryTrackingMethod</b> is set to <b>SKU</b> in a listing, the SKU is only unique across your active listings (not your ended listings).
     * To retrieve order line items by SKU, use <b>GetSellerTransactions</b> or <b>GetOrderTransactions</b> instead. </span> | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The ModTimeFrom
     * Meta information extracted from the WSDL
     * - documentation: The <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields specify a date range for retrieving order line items associated with the specified <b>ItemID</b> value. The <b>ModTimeFrom</b> field is the starting date range. All of the listing's
     * order line items that were generated (or last modified)within this date range are returned in the output. The maximum date range that may be specified is 30 days. This value cannot be set back more than 90 days in the past, as this call cannot
     * retrieve sales older than 90 days old. The maximum date range that may be specified is 30 days. This field is not applicable (and is ignored) if the user is looking for a specific order line item by either using an <b>ItemID</b>/<b>TransactionID</b>
     * pair, or an <b>OrderLineItemID</b> value.
     * - minOccurs: 0
     * @var string
     */
    public $ModTimeFrom;
    /**
     * The ModTimeTo
     * Meta information extracted from the WSDL
     * - documentation: The <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields specify a date range for retrieving order line items associated with the specified <b>ItemID</b> value. The <b>ModTimeTo</b> field is the ending date range. All eBay order line items
     * that were generated (or last modified) within this date range are returned in the output. The maximum date range that may be specified is 30 days. If the <b>ModTimeFrom</b> field is used and the <b>ModTimeTo</b> field is omitted, the <b>ModTimeTo</b>
     * value defaults to the present time or to 30 days after the date specified with the <b>ModTimeFrom</b> value (if <b>ModTimeFrom</b> value is more than 30 days in the past). This field is not applicable (and is ignored) if the user is looking for a
     * specific order line item by either using an <b>ItemID</b>/<b>TransactionID</b> pair, or an <b>OrderLineItemID</b> value.
     * - minOccurs: 0
     * @var string
     */
    public $ModTimeTo;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: Include a <b>TransactionID</b> field in the request if you want to retrieve the data for a specific order line item for the listing specified in the <b>ItemID</b> field. This field is really only applicable for a multiple-quantity or
     * multiple-variation, fixed-price listing that may have multiple sales. An auction listing or a single-quantity, fixed-price listing will only result in one order line item, so this field is not needed in these two cases. If an <b>OrderLineItemID</b>
     * value is used instead to identify an order line item, this field is ignored. <br><br> If this field is used, any specified date filter is ignored.
     * - minOccurs: 0
     * @var string
     */
    public $TransactionID;
    /**
     * The Pagination
     * Meta information extracted from the WSDL
     * - documentation: This container controls how many order line items should be returned per page of data, as well as which page of data to return (if there are multiple pages of order line items). Use the <b>EntriesPerPage</b> property to control the
     * number of order line items to return per call and the <b>PageNumber</b> property to specify the specific page of data to return. If multiple pages of order line items are returned based on input criteria and <b>Pagination</b> properties,
     * <b>GetItemTransactions</b> will need to be called multiple times (with the <b>PageNumber</b> value being increased by 1 each time) to scroll through all results.
     * - minOccurs: 0
     * @var \StructType\PaginationType
     */
    public $Pagination;
    /**
     * The IncludeFinalValueFee
     * Meta information extracted from the WSDL
     * - documentation: This field is included and set to <code>true</code> if the user wants to view the Final Value Fee (FVF) for all order line items in the response. The Final Value Fee is returned in the <b>Transaction.FinalValueFee</b> field. The
     * Final Value Fee is assessed right after the creation of an order line item. <br/><br/>
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeFinalValueFee;
    /**
     * The IncludeContainingOrder
     * Meta information extracted from the WSDL
     * - documentation: This field is included and set to <code>true</code> if the user wants to view order-level details, including the unique identifier of the order and the status of the order. The order-level details will be shown in the
     * <b>ContainingOrder</b> container in the response. <br/>
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeContainingOrder;
    /**
     * The Platform
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> This field is should no longer be used, as its purpose in the past was to give the user the ability to retrieve only eBay marketplace order line items or only Half.com listings, and since the
     * Half.com site no longer exists, this field is no longer relevant. </span>
     * - minOccurs: 0
     * @var string
     */
    public $Platform;
    /**
     * The NumberOfDays
     * Meta information extracted from the WSDL
     * - documentation: This date range filter specifies the number of days (24-hour periods) in the past to search for order line items. All eBay order line items that were either created or modified within this period are returned in the response. If
     * specified, <b>NumberOfDays</b> will override any date range specified with the <b>ModTimeFrom</b>/<b>ModTimeTo</b> date range filters. This field is not applicable if a specific order line item is specified either through an
     * <b>ItemID</b><b>TransactionID</b> pair or an <b>OrderLineItemID</b> value.
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfDays;
    /**
     * The IncludeVariations
     * Meta information extracted from the WSDL
     * - documentation: If this field is included in the request and set to <code>true</code>, details on all variations defined in the specified multiple-variation listing are returned, including variations that have no sales. If this field is not included
     * in the request or set to <code>false</code>, the variations with sales are still returned in separate <b>Transaction</b> nodes. This information is intended to help sellers to reconcile their local inventory with eBay's records, while processing
     * order line items (without requiring a separate call to <b>GetItem</b>).
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeVariations;
    /**
     * The OrderLineItemID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for an eBay order line item. This identifier is created once there is a commitment to buy (bidder wins the auction, buyer clicks buy button, or buyer purchases item through <b>PlaceOffer</b> call). If you want to
     * retrieve data on a specific order line item, you can use an <b>OrderLineItemID</b> value in the request instead of an <b>ItemID</b>/<b>TransactionID</b> pair. If an <b>OrderLineItemID</b> is provided, any specified date range filter is ignored.
     * - minOccurs: 0
     * @var string
     */
    public $OrderLineItemID;
    /**
     * Constructor method for GetItemTransactionsRequestType
     * @uses GetItemTransactionsRequestType::setItemID()
     * @uses GetItemTransactionsRequestType::setModTimeFrom()
     * @uses GetItemTransactionsRequestType::setModTimeTo()
     * @uses GetItemTransactionsRequestType::setTransactionID()
     * @uses GetItemTransactionsRequestType::setPagination()
     * @uses GetItemTransactionsRequestType::setIncludeFinalValueFee()
     * @uses GetItemTransactionsRequestType::setIncludeContainingOrder()
     * @uses GetItemTransactionsRequestType::setPlatform()
     * @uses GetItemTransactionsRequestType::setNumberOfDays()
     * @uses GetItemTransactionsRequestType::setIncludeVariations()
     * @uses GetItemTransactionsRequestType::setOrderLineItemID()
     * @param string $itemID
     * @param string $modTimeFrom
     * @param string $modTimeTo
     * @param string $transactionID
     * @param \StructType\PaginationType $pagination
     * @param bool $includeFinalValueFee
     * @param bool $includeContainingOrder
     * @param string $platform
     * @param int $numberOfDays
     * @param bool $includeVariations
     * @param string $orderLineItemID
     */
    public function __construct($itemID = null, $modTimeFrom = null, $modTimeTo = null, $transactionID = null, \StructType\PaginationType $pagination = null, $includeFinalValueFee = null, $includeContainingOrder = null, $platform = null, $numberOfDays = null, $includeVariations = null, $orderLineItemID = null)
    {
        $this
            ->setItemID($itemID)
            ->setModTimeFrom($modTimeFrom)
            ->setModTimeTo($modTimeTo)
            ->setTransactionID($transactionID)
            ->setPagination($pagination)
            ->setIncludeFinalValueFee($includeFinalValueFee)
            ->setIncludeContainingOrder($includeContainingOrder)
            ->setPlatform($platform)
            ->setNumberOfDays($numberOfDays)
            ->setIncludeVariations($includeVariations)
            ->setOrderLineItemID($orderLineItemID);
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
     * @return \StructType\GetItemTransactionsRequestType
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
     * Get ModTimeFrom value
     * @return string|null
     */
    public function getModTimeFrom()
    {
        return $this->ModTimeFrom;
    }
    /**
     * Set ModTimeFrom value
     * @param string $modTimeFrom
     * @return \StructType\GetItemTransactionsRequestType
     */
    public function setModTimeFrom($modTimeFrom = null)
    {
        // validation for constraint: string
        if (!is_null($modTimeFrom) && !is_string($modTimeFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modTimeFrom, true), gettype($modTimeFrom)), __LINE__);
        }
        $this->ModTimeFrom = $modTimeFrom;
        return $this;
    }
    /**
     * Get ModTimeTo value
     * @return string|null
     */
    public function getModTimeTo()
    {
        return $this->ModTimeTo;
    }
    /**
     * Set ModTimeTo value
     * @param string $modTimeTo
     * @return \StructType\GetItemTransactionsRequestType
     */
    public function setModTimeTo($modTimeTo = null)
    {
        // validation for constraint: string
        if (!is_null($modTimeTo) && !is_string($modTimeTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modTimeTo, true), gettype($modTimeTo)), __LINE__);
        }
        $this->ModTimeTo = $modTimeTo;
        return $this;
    }
    /**
     * Get TransactionID value
     * @return string|null
     */
    public function getTransactionID()
    {
        return $this->TransactionID;
    }
    /**
     * Set TransactionID value
     * @param string $transactionID
     * @return \StructType\GetItemTransactionsRequestType
     */
    public function setTransactionID($transactionID = null)
    {
        // validation for constraint: string
        if (!is_null($transactionID) && !is_string($transactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionID, true), gettype($transactionID)), __LINE__);
        }
        $this->TransactionID = $transactionID;
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
     * @return \StructType\GetItemTransactionsRequestType
     */
    public function setPagination(\StructType\PaginationType $pagination = null)
    {
        $this->Pagination = $pagination;
        return $this;
    }
    /**
     * Get IncludeFinalValueFee value
     * @return bool|null
     */
    public function getIncludeFinalValueFee()
    {
        return $this->IncludeFinalValueFee;
    }
    /**
     * Set IncludeFinalValueFee value
     * @param bool $includeFinalValueFee
     * @return \StructType\GetItemTransactionsRequestType
     */
    public function setIncludeFinalValueFee($includeFinalValueFee = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeFinalValueFee) && !is_bool($includeFinalValueFee)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeFinalValueFee, true), gettype($includeFinalValueFee)), __LINE__);
        }
        $this->IncludeFinalValueFee = $includeFinalValueFee;
        return $this;
    }
    /**
     * Get IncludeContainingOrder value
     * @return bool|null
     */
    public function getIncludeContainingOrder()
    {
        return $this->IncludeContainingOrder;
    }
    /**
     * Set IncludeContainingOrder value
     * @param bool $includeContainingOrder
     * @return \StructType\GetItemTransactionsRequestType
     */
    public function setIncludeContainingOrder($includeContainingOrder = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeContainingOrder) && !is_bool($includeContainingOrder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeContainingOrder, true), gettype($includeContainingOrder)), __LINE__);
        }
        $this->IncludeContainingOrder = $includeContainingOrder;
        return $this;
    }
    /**
     * Get Platform value
     * @return string|null
     */
    public function getPlatform()
    {
        return $this->Platform;
    }
    /**
     * Set Platform value
     * @uses \EnumType\TransactionPlatformCodeType::valueIsValid()
     * @uses \EnumType\TransactionPlatformCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $platform
     * @return \StructType\GetItemTransactionsRequestType
     */
    public function setPlatform($platform = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\TransactionPlatformCodeType::valueIsValid($platform)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TransactionPlatformCodeType', is_array($platform) ? implode(', ', $platform) : var_export($platform, true), implode(', ', \EnumType\TransactionPlatformCodeType::getValidValues())), __LINE__);
        }
        $this->Platform = $platform;
        return $this;
    }
    /**
     * Get NumberOfDays value
     * @return int|null
     */
    public function getNumberOfDays()
    {
        return $this->NumberOfDays;
    }
    /**
     * Set NumberOfDays value
     * @param int $numberOfDays
     * @return \StructType\GetItemTransactionsRequestType
     */
    public function setNumberOfDays($numberOfDays = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfDays) && !(is_int($numberOfDays) || ctype_digit($numberOfDays))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfDays, true), gettype($numberOfDays)), __LINE__);
        }
        $this->NumberOfDays = $numberOfDays;
        return $this;
    }
    /**
     * Get IncludeVariations value
     * @return bool|null
     */
    public function getIncludeVariations()
    {
        return $this->IncludeVariations;
    }
    /**
     * Set IncludeVariations value
     * @param bool $includeVariations
     * @return \StructType\GetItemTransactionsRequestType
     */
    public function setIncludeVariations($includeVariations = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeVariations) && !is_bool($includeVariations)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeVariations, true), gettype($includeVariations)), __LINE__);
        }
        $this->IncludeVariations = $includeVariations;
        return $this;
    }
    /**
     * Get OrderLineItemID value
     * @return string|null
     */
    public function getOrderLineItemID()
    {
        return $this->OrderLineItemID;
    }
    /**
     * Set OrderLineItemID value
     * @param string $orderLineItemID
     * @return \StructType\GetItemTransactionsRequestType
     */
    public function setOrderLineItemID($orderLineItemID = null)
    {
        // validation for constraint: string
        if (!is_null($orderLineItemID) && !is_string($orderLineItemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderLineItemID, true), gettype($orderLineItemID)), __LINE__);
        }
        $this->OrderLineItemID = $orderLineItemID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetItemTransactionsRequestType
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
