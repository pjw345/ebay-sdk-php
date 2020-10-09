<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerSoldTransactionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains information about a single line item (transaction) in an order created through Selling Manager.
 * @subpackage Structs
 */
class SellingManagerSoldTransactionType extends AbstractStructBase
{
    /**
     * The InvoiceNumber
     * Meta information extracted from the WSDL
     * - documentation: Seller's customized invoice number.
     * - minOccurs: 0
     * @var string
     */
    public $InvoiceNumber;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for an eBay order line item. An order line item is created once there is a commitment from a buyer to purchase an item. Since an auction listing can only have one order line item during the duration of the listing,
     * the <b>TransactionID</b> for auction listings is always 0. Along with its corresponding <b>ItemID</b>, a <b>TransactionID</b> is used and referenced during an order checkout flow and after checkout has been completed.
     * - minOccurs: 0
     * @var int
     */
    public $TransactionID;
    /**
     * The SaleRecordID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for a Selling Manager sale record. This field is created at the same time as the order line item (transaction). A sale record is displayed in the Sold view in Selling Manager and contains information on the buyer
     * and shipping. In the <b>GetItemTransactions</b>, <b>GetSellerTransactions</b>, <b>GetOrders</b>, and <b>GetOrderTransactions</b> calls, the <b>SaleRecordID</b> value is reflected in the <b>ShippingDetails.SellingManagerSalesRecordNumber</b> field.
     * <br/><br/> For orders that occurred within the last 30 days, passing only the SaleRecordID into the GetSellingManagerSoldListings request will return the sale record. However, for sales that occurred more than 30 days ago, the SaleDateRange container
     * must also be used, passing in a date range that includes the date on which the specific sale occurred.
     * - minOccurs: 0
     * @var int
     */
    public $SaleRecordID;
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for an eBay listing. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The QuantitySold
     * Meta information extracted from the WSDL
     * - documentation: Total number of identical items sold in the order line item.
     * - minOccurs: 0
     * @var int
     */
    public $QuantitySold;
    /**
     * The ItemPrice
     * Meta information extracted from the WSDL
     * - documentation: Price per item.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $ItemPrice;
    /**
     * The SubtotalAmount
     * Meta information extracted from the WSDL
     * - documentation: This value is calculated by multplying the <b>ItemPrice</b> value by the <b>QuantitySold</b> value.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $SubtotalAmount;
    /**
     * The ItemTitle
     * Meta information extracted from the WSDL
     * - documentation: The title of the item listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemTitle;
    /**
     * The ListingType
     * Meta information extracted from the WSDL
     * - documentation: The item listing type.
     * - minOccurs: 0
     * @var string
     */
    public $ListingType;
    /**
     * The Relisted
     * Meta information extracted from the WSDL
     * - documentation: Boolean value indicating whether the item is a relisted item.
     * - minOccurs: 0
     * @var bool
     */
    public $Relisted;
    /**
     * The WatchCount
     * Meta information extracted from the WSDL
     * - documentation: Number of users watching the item.
     * - minOccurs: 0
     * @var int
     */
    public $WatchCount;
    /**
     * The StartPrice
     * Meta information extracted from the WSDL
     * - documentation: Start price of the item.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $StartPrice;
    /**
     * The ReservePrice
     * Meta information extracted from the WSDL
     * - documentation: Reserve Price of the item (if a Reserve Price was set for the item).
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $ReservePrice;
    /**
     * The SecondChanceOfferSent
     * Meta information extracted from the WSDL
     * - documentation: Boolean value indicating whether or not a Second Chance offer was sent by the seller to an eligible bidder.
     * - minOccurs: 0
     * @var bool
     */
    public $SecondChanceOfferSent;
    /**
     * The CustomLabel
     * Meta information extracted from the WSDL
     * - documentation: Custom label associated with this order line item.
     * - minOccurs: 0
     * @var string
     */
    public $CustomLabel;
    /**
     * The SoldOn
     * Meta information extracted from the WSDL
     * - documentation: The platform on which the item was sold.
     * - minOccurs: 0
     * @var string
     */
    public $SoldOn;
    /**
     * The ListedOn
     * Meta information extracted from the WSDL
     * - documentation: The platform on which the item was listed.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ListedOn;
    /**
     * The Shipment
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of tracking information for the shipment.
     * - minOccurs: 0
     * @var \StructType\ShipmentType
     */
    public $Shipment;
    /**
     * The CharityListing
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as 'true' if the item is listed as a charity item.
     * - minOccurs: 0
     * @var bool
     */
    public $CharityListing;
    /**
     * The Variation
     * Meta information extracted from the WSDL
     * - documentation: In a fixed-priced listing, a seller can offer variations of the same item. For example, the seller could create a fixed-priced listing for a t-shirt design and offer the shirt in different colors and sizes. In this case, each color
     * and size combination is a separate variation. Each variation can have a different quantity and price. Due to the possible price differentiation, buyers can buy multiple items from this listing at the same time, but all of the items must be of the
     * same variation. One order line item is created whether one or multiple items of the same variation are purchased. <br><br> The <b>Variation</b> node contains information about which variation was purchased. Therefore, applications that process order
     * line items should always check to see if this node is present.
     * - minOccurs: 0
     * @var \StructType\VariationType
     */
    public $Variation;
    /**
     * The OrderLineItemID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for an eBay order line item. .
     * - minOccurs: 0
     * @var string
     */
    public $OrderLineItemID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellingManagerSoldTransactionType
     * @uses SellingManagerSoldTransactionType::setInvoiceNumber()
     * @uses SellingManagerSoldTransactionType::setTransactionID()
     * @uses SellingManagerSoldTransactionType::setSaleRecordID()
     * @uses SellingManagerSoldTransactionType::setItemID()
     * @uses SellingManagerSoldTransactionType::setQuantitySold()
     * @uses SellingManagerSoldTransactionType::setItemPrice()
     * @uses SellingManagerSoldTransactionType::setSubtotalAmount()
     * @uses SellingManagerSoldTransactionType::setItemTitle()
     * @uses SellingManagerSoldTransactionType::setListingType()
     * @uses SellingManagerSoldTransactionType::setRelisted()
     * @uses SellingManagerSoldTransactionType::setWatchCount()
     * @uses SellingManagerSoldTransactionType::setStartPrice()
     * @uses SellingManagerSoldTransactionType::setReservePrice()
     * @uses SellingManagerSoldTransactionType::setSecondChanceOfferSent()
     * @uses SellingManagerSoldTransactionType::setCustomLabel()
     * @uses SellingManagerSoldTransactionType::setSoldOn()
     * @uses SellingManagerSoldTransactionType::setListedOn()
     * @uses SellingManagerSoldTransactionType::setShipment()
     * @uses SellingManagerSoldTransactionType::setCharityListing()
     * @uses SellingManagerSoldTransactionType::setVariation()
     * @uses SellingManagerSoldTransactionType::setOrderLineItemID()
     * @uses SellingManagerSoldTransactionType::setAny()
     * @param string $invoiceNumber
     * @param int $transactionID
     * @param int $saleRecordID
     * @param string $itemID
     * @param int $quantitySold
     * @param \StructType\AmountType $itemPrice
     * @param \StructType\AmountType $subtotalAmount
     * @param string $itemTitle
     * @param string $listingType
     * @param bool $relisted
     * @param int $watchCount
     * @param \StructType\AmountType $startPrice
     * @param \StructType\AmountType $reservePrice
     * @param bool $secondChanceOfferSent
     * @param string $customLabel
     * @param string $soldOn
     * @param string[] $listedOn
     * @param \StructType\ShipmentType $shipment
     * @param bool $charityListing
     * @param \StructType\VariationType $variation
     * @param string $orderLineItemID
     * @param \DOMDocument $any
     */
    public function __construct($invoiceNumber = null, $transactionID = null, $saleRecordID = null, $itemID = null, $quantitySold = null, \StructType\AmountType $itemPrice = null, \StructType\AmountType $subtotalAmount = null, $itemTitle = null, $listingType = null, $relisted = null, $watchCount = null, \StructType\AmountType $startPrice = null, \StructType\AmountType $reservePrice = null, $secondChanceOfferSent = null, $customLabel = null, $soldOn = null, array $listedOn = array(), \StructType\ShipmentType $shipment = null, $charityListing = null, \StructType\VariationType $variation = null, $orderLineItemID = null, \DOMDocument $any = null)
    {
        $this
            ->setInvoiceNumber($invoiceNumber)
            ->setTransactionID($transactionID)
            ->setSaleRecordID($saleRecordID)
            ->setItemID($itemID)
            ->setQuantitySold($quantitySold)
            ->setItemPrice($itemPrice)
            ->setSubtotalAmount($subtotalAmount)
            ->setItemTitle($itemTitle)
            ->setListingType($listingType)
            ->setRelisted($relisted)
            ->setWatchCount($watchCount)
            ->setStartPrice($startPrice)
            ->setReservePrice($reservePrice)
            ->setSecondChanceOfferSent($secondChanceOfferSent)
            ->setCustomLabel($customLabel)
            ->setSoldOn($soldOn)
            ->setListedOn($listedOn)
            ->setShipment($shipment)
            ->setCharityListing($charityListing)
            ->setVariation($variation)
            ->setOrderLineItemID($orderLineItemID)
            ->setAny($any);
    }
    /**
     * Get InvoiceNumber value
     * @return string|null
     */
    public function getInvoiceNumber()
    {
        return $this->InvoiceNumber;
    }
    /**
     * Set InvoiceNumber value
     * @param string $invoiceNumber
     * @return \StructType\SellingManagerSoldTransactionType
     */
    public function setInvoiceNumber($invoiceNumber = null)
    {
        // validation for constraint: string
        if (!is_null($invoiceNumber) && !is_string($invoiceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceNumber, true), gettype($invoiceNumber)), __LINE__);
        }
        $this->InvoiceNumber = $invoiceNumber;
        return $this;
    }
    /**
     * Get TransactionID value
     * @return int|null
     */
    public function getTransactionID()
    {
        return $this->TransactionID;
    }
    /**
     * Set TransactionID value
     * @param int $transactionID
     * @return \StructType\SellingManagerSoldTransactionType
     */
    public function setTransactionID($transactionID = null)
    {
        // validation for constraint: int
        if (!is_null($transactionID) && !(is_int($transactionID) || ctype_digit($transactionID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionID, true), gettype($transactionID)), __LINE__);
        }
        $this->TransactionID = $transactionID;
        return $this;
    }
    /**
     * Get SaleRecordID value
     * @return int|null
     */
    public function getSaleRecordID()
    {
        return $this->SaleRecordID;
    }
    /**
     * Set SaleRecordID value
     * @param int $saleRecordID
     * @return \StructType\SellingManagerSoldTransactionType
     */
    public function setSaleRecordID($saleRecordID = null)
    {
        // validation for constraint: int
        if (!is_null($saleRecordID) && !(is_int($saleRecordID) || ctype_digit($saleRecordID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($saleRecordID, true), gettype($saleRecordID)), __LINE__);
        }
        $this->SaleRecordID = $saleRecordID;
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
     * @return \StructType\SellingManagerSoldTransactionType
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
     * Get QuantitySold value
     * @return int|null
     */
    public function getQuantitySold()
    {
        return $this->QuantitySold;
    }
    /**
     * Set QuantitySold value
     * @param int $quantitySold
     * @return \StructType\SellingManagerSoldTransactionType
     */
    public function setQuantitySold($quantitySold = null)
    {
        // validation for constraint: int
        if (!is_null($quantitySold) && !(is_int($quantitySold) || ctype_digit($quantitySold))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantitySold, true), gettype($quantitySold)), __LINE__);
        }
        $this->QuantitySold = $quantitySold;
        return $this;
    }
    /**
     * Get ItemPrice value
     * @return \StructType\AmountType|null
     */
    public function getItemPrice()
    {
        return $this->ItemPrice;
    }
    /**
     * Set ItemPrice value
     * @param \StructType\AmountType $itemPrice
     * @return \StructType\SellingManagerSoldTransactionType
     */
    public function setItemPrice(\StructType\AmountType $itemPrice = null)
    {
        $this->ItemPrice = $itemPrice;
        return $this;
    }
    /**
     * Get SubtotalAmount value
     * @return \StructType\AmountType|null
     */
    public function getSubtotalAmount()
    {
        return $this->SubtotalAmount;
    }
    /**
     * Set SubtotalAmount value
     * @param \StructType\AmountType $subtotalAmount
     * @return \StructType\SellingManagerSoldTransactionType
     */
    public function setSubtotalAmount(\StructType\AmountType $subtotalAmount = null)
    {
        $this->SubtotalAmount = $subtotalAmount;
        return $this;
    }
    /**
     * Get ItemTitle value
     * @return string|null
     */
    public function getItemTitle()
    {
        return $this->ItemTitle;
    }
    /**
     * Set ItemTitle value
     * @param string $itemTitle
     * @return \StructType\SellingManagerSoldTransactionType
     */
    public function setItemTitle($itemTitle = null)
    {
        // validation for constraint: string
        if (!is_null($itemTitle) && !is_string($itemTitle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemTitle, true), gettype($itemTitle)), __LINE__);
        }
        $this->ItemTitle = $itemTitle;
        return $this;
    }
    /**
     * Get ListingType value
     * @return string|null
     */
    public function getListingType()
    {
        return $this->ListingType;
    }
    /**
     * Set ListingType value
     * @uses \EnumType\ListingTypeCodeType::valueIsValid()
     * @uses \EnumType\ListingTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $listingType
     * @return \StructType\SellingManagerSoldTransactionType
     */
    public function setListingType($listingType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ListingTypeCodeType::valueIsValid($listingType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ListingTypeCodeType', is_array($listingType) ? implode(', ', $listingType) : var_export($listingType, true), implode(', ', \EnumType\ListingTypeCodeType::getValidValues())), __LINE__);
        }
        $this->ListingType = $listingType;
        return $this;
    }
    /**
     * Get Relisted value
     * @return bool|null
     */
    public function getRelisted()
    {
        return $this->Relisted;
    }
    /**
     * Set Relisted value
     * @param bool $relisted
     * @return \StructType\SellingManagerSoldTransactionType
     */
    public function setRelisted($relisted = null)
    {
        // validation for constraint: boolean
        if (!is_null($relisted) && !is_bool($relisted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($relisted, true), gettype($relisted)), __LINE__);
        }
        $this->Relisted = $relisted;
        return $this;
    }
    /**
     * Get WatchCount value
     * @return int|null
     */
    public function getWatchCount()
    {
        return $this->WatchCount;
    }
    /**
     * Set WatchCount value
     * @param int $watchCount
     * @return \StructType\SellingManagerSoldTransactionType
     */
    public function setWatchCount($watchCount = null)
    {
        // validation for constraint: int
        if (!is_null($watchCount) && !(is_int($watchCount) || ctype_digit($watchCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($watchCount, true), gettype($watchCount)), __LINE__);
        }
        $this->WatchCount = $watchCount;
        return $this;
    }
    /**
     * Get StartPrice value
     * @return \StructType\AmountType|null
     */
    public function getStartPrice()
    {
        return $this->StartPrice;
    }
    /**
     * Set StartPrice value
     * @param \StructType\AmountType $startPrice
     * @return \StructType\SellingManagerSoldTransactionType
     */
    public function setStartPrice(\StructType\AmountType $startPrice = null)
    {
        $this->StartPrice = $startPrice;
        return $this;
    }
    /**
     * Get ReservePrice value
     * @return \StructType\AmountType|null
     */
    public function getReservePrice()
    {
        return $this->ReservePrice;
    }
    /**
     * Set ReservePrice value
     * @param \StructType\AmountType $reservePrice
     * @return \StructType\SellingManagerSoldTransactionType
     */
    public function setReservePrice(\StructType\AmountType $reservePrice = null)
    {
        $this->ReservePrice = $reservePrice;
        return $this;
    }
    /**
     * Get SecondChanceOfferSent value
     * @return bool|null
     */
    public function getSecondChanceOfferSent()
    {
        return $this->SecondChanceOfferSent;
    }
    /**
     * Set SecondChanceOfferSent value
     * @param bool $secondChanceOfferSent
     * @return \StructType\SellingManagerSoldTransactionType
     */
    public function setSecondChanceOfferSent($secondChanceOfferSent = null)
    {
        // validation for constraint: boolean
        if (!is_null($secondChanceOfferSent) && !is_bool($secondChanceOfferSent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($secondChanceOfferSent, true), gettype($secondChanceOfferSent)), __LINE__);
        }
        $this->SecondChanceOfferSent = $secondChanceOfferSent;
        return $this;
    }
    /**
     * Get CustomLabel value
     * @return string|null
     */
    public function getCustomLabel()
    {
        return $this->CustomLabel;
    }
    /**
     * Set CustomLabel value
     * @param string $customLabel
     * @return \StructType\SellingManagerSoldTransactionType
     */
    public function setCustomLabel($customLabel = null)
    {
        // validation for constraint: string
        if (!is_null($customLabel) && !is_string($customLabel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customLabel, true), gettype($customLabel)), __LINE__);
        }
        $this->CustomLabel = $customLabel;
        return $this;
    }
    /**
     * Get SoldOn value
     * @return string|null
     */
    public function getSoldOn()
    {
        return $this->SoldOn;
    }
    /**
     * Set SoldOn value
     * @uses \EnumType\TransactionPlatformCodeType::valueIsValid()
     * @uses \EnumType\TransactionPlatformCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $soldOn
     * @return \StructType\SellingManagerSoldTransactionType
     */
    public function setSoldOn($soldOn = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\TransactionPlatformCodeType::valueIsValid($soldOn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TransactionPlatformCodeType', is_array($soldOn) ? implode(', ', $soldOn) : var_export($soldOn, true), implode(', ', \EnumType\TransactionPlatformCodeType::getValidValues())), __LINE__);
        }
        $this->SoldOn = $soldOn;
        return $this;
    }
    /**
     * Get ListedOn value
     * @return string[]|null
     */
    public function getListedOn()
    {
        return $this->ListedOn;
    }
    /**
     * This method is responsible for validating the values passed to the setListedOn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setListedOn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateListedOnForArrayConstraintsFromSetListedOn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sellingManagerSoldTransactionTypeListedOnItem) {
            // validation for constraint: enumeration
            if (!\EnumType\TransactionPlatformCodeType::valueIsValid($sellingManagerSoldTransactionTypeListedOnItem)) {
                $invalidValues[] = is_object($sellingManagerSoldTransactionTypeListedOnItem) ? get_class($sellingManagerSoldTransactionTypeListedOnItem) : sprintf('%s(%s)', gettype($sellingManagerSoldTransactionTypeListedOnItem), var_export($sellingManagerSoldTransactionTypeListedOnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TransactionPlatformCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\TransactionPlatformCodeType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ListedOn value
     * @uses \EnumType\TransactionPlatformCodeType::valueIsValid()
     * @uses \EnumType\TransactionPlatformCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $listedOn
     * @return \StructType\SellingManagerSoldTransactionType
     */
    public function setListedOn(array $listedOn = array())
    {
        // validation for constraint: array
        if ('' !== ($listedOnArrayErrorMessage = self::validateListedOnForArrayConstraintsFromSetListedOn($listedOn))) {
            throw new \InvalidArgumentException($listedOnArrayErrorMessage, __LINE__);
        }
        $this->ListedOn = $listedOn;
        return $this;
    }
    /**
     * Add item to ListedOn value
     * @uses \EnumType\TransactionPlatformCodeType::valueIsValid()
     * @uses \EnumType\TransactionPlatformCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\SellingManagerSoldTransactionType
     */
    public function addToListedOn($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\TransactionPlatformCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TransactionPlatformCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \EnumType\TransactionPlatformCodeType::getValidValues())), __LINE__);
        }
        $this->ListedOn[] = $item;
        return $this;
    }
    /**
     * Get Shipment value
     * @return \StructType\ShipmentType|null
     */
    public function getShipment()
    {
        return $this->Shipment;
    }
    /**
     * Set Shipment value
     * @param \StructType\ShipmentType $shipment
     * @return \StructType\SellingManagerSoldTransactionType
     */
    public function setShipment(\StructType\ShipmentType $shipment = null)
    {
        $this->Shipment = $shipment;
        return $this;
    }
    /**
     * Get CharityListing value
     * @return bool|null
     */
    public function getCharityListing()
    {
        return $this->CharityListing;
    }
    /**
     * Set CharityListing value
     * @param bool $charityListing
     * @return \StructType\SellingManagerSoldTransactionType
     */
    public function setCharityListing($charityListing = null)
    {
        // validation for constraint: boolean
        if (!is_null($charityListing) && !is_bool($charityListing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($charityListing, true), gettype($charityListing)), __LINE__);
        }
        $this->CharityListing = $charityListing;
        return $this;
    }
    /**
     * Get Variation value
     * @return \StructType\VariationType|null
     */
    public function getVariation()
    {
        return $this->Variation;
    }
    /**
     * Set Variation value
     * @param \StructType\VariationType $variation
     * @return \StructType\SellingManagerSoldTransactionType
     */
    public function setVariation(\StructType\VariationType $variation = null)
    {
        $this->Variation = $variation;
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
     * @return \StructType\SellingManagerSoldTransactionType
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
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        $domDocument = null;
        if (!empty($this->any) && !$asString) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asString ? $this->any : $domDocument;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument $any
     * @return \StructType\SellingManagerSoldTransactionType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
