<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SalesTaxType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used to show sales tax-related details for a tax jurisdiction. The concept of 'sales tax' is only applicable to eBay US and Canada (English and French) sites.
 * @subpackage Structs
 */
class SalesTaxType extends AbstractStructBase
{
    /**
     * The SalesTaxPercent
     * Meta information extracted from the WSDL
     * - documentation: This float value is the sales tax percentage rate applicable to the corresponding tax jurisdiction (US state or Canadian province). Sellers are responsible for providing accurate sales tax rates for each jurisdiction. This sales tax
     * rate comes into play when a buyer from that tax jurisdiction makes a purchase from the seller. The value passed in is stored with a precision of 3 digits after the decimal point (##.###). <br><br> This field is only returned in order management calls
     * if sales tax applies to the order line item, and is only in <b>GetItem</b> (and other 'Get' calls) if sales tax is applicable to the listing or order line item, and the seller is the person making the call. <br><br> <span class="tablenote"><b>Note:
     * </b> As of November 1, 2019, buyers in over 30 US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. So, if a sales tax rate is applied
     * to the listing by the seller for a state that is subject to eBay 'Collect and Remit', the sales tax rate in this field is ignored by eBay during the checkout process. For a list of US states that are subject to eBay 'Collect and Remit' taxes (and
     * effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic. </span>
     * - minOccurs: 0
     * @var float
     */
    public $SalesTaxPercent;
    /**
     * The SalesTaxState
     * Meta information extracted from the WSDL
     * - documentation: This is the unique, two-digit identifier of the tax jurisdiction (such as 'CA' for California). To retrieve all two-digit identifiers for all states/territories/provinces for a site, a seller can either use a <b>GetTaxTable</b> call
     * with <b>DetailLevel</b> set to <code>ReturnAll</code>, or they can use the <b>GeteBayDetails</b> call with <b>DetailLevel</b> name set to <code>TaxJurisdiction</code>. Please note that both <b>GetTaxTable</b> and <b>GeteBayDetails</b> calls use a
     * <b>JurisdictionID</b> field to express these tax jurisdiction identifiers instead of <b>SalesTaxState</b>, but the values used in these fields are the same. <br/><br/> The <b>SalesTaxState</b> field is conditionallly required in an
     * Add/Revise/Relist/Verify call if the seller is applying sales tax to a listing, and is returned with each <b>SalesTax</b> container to identify the tax jurisdiction.
     * - minOccurs: 0
     * @var string
     */
    public $SalesTaxState;
    /**
     * The ShippingIncludedInTax
     * Meta information extracted from the WSDL
     * - documentation: This field is included in an Add/Revise/Relist/Verify call and set to <code>true</code> if the seller wants sales tax for the jurisdiction to apply to the cumulative amount of item cost and shipping charges. This value defaults to
     * <code>false</code> if not specified. <br><br> This field is always returned with the <b>SalesTax</b> container (whether <code>true</code> or <code>false</code>). <br><br> <span class="tablenote"><b>Note: </b> As of January 1, 2019, buyers in some US
     * states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. So, if a <code>true</code> value is set for this field for a state that is subject to
     * 'eBay Collect and Remit', this setting is ignored by eBay during checkout process. For a list of the US states that will become subject to 'eBay Collect and Remit' (and effective dates), see the <a
     * href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $ShippingIncludedInTax;
    /**
     * The SalesTaxAmount
     * Meta information extracted from the WSDL
     * - documentation: The amount of sales tax calculated for an order based on the item price and the sales tax rate for the buyer's tax jurisdiction. <br><br> GetItemTransactions can return incorrect sales tax if the name of a state is not abbreviated
     * (e.g. if the value is "Illinois" rather than "IL") in <b>TransactionArray.Transaction.Buyer.BuyerInfo.ShippingAddress.StateOrProvince</b>. If the name of a state is not abbreviated, sales tax should be obtained by using the <b>OrderLineItemID</b> to
     * call <b>GetOrderTransactions</b>.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $SalesTaxAmount;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SalesTaxType
     * @uses SalesTaxType::setSalesTaxPercent()
     * @uses SalesTaxType::setSalesTaxState()
     * @uses SalesTaxType::setShippingIncludedInTax()
     * @uses SalesTaxType::setSalesTaxAmount()
     * @uses SalesTaxType::setAny()
     * @param float $salesTaxPercent
     * @param string $salesTaxState
     * @param bool $shippingIncludedInTax
     * @param \StructType\AmountType $salesTaxAmount
     * @param \DOMDocument $any
     */
    public function __construct($salesTaxPercent = null, $salesTaxState = null, $shippingIncludedInTax = null, \StructType\AmountType $salesTaxAmount = null, \DOMDocument $any = null)
    {
        $this
            ->setSalesTaxPercent($salesTaxPercent)
            ->setSalesTaxState($salesTaxState)
            ->setShippingIncludedInTax($shippingIncludedInTax)
            ->setSalesTaxAmount($salesTaxAmount)
            ->setAny($any);
    }
    /**
     * Get SalesTaxPercent value
     * @return float|null
     */
    public function getSalesTaxPercent()
    {
        return $this->SalesTaxPercent;
    }
    /**
     * Set SalesTaxPercent value
     * @param float $salesTaxPercent
     * @return \StructType\SalesTaxType
     */
    public function setSalesTaxPercent($salesTaxPercent = null)
    {
        // validation for constraint: float
        if (!is_null($salesTaxPercent) && !(is_float($salesTaxPercent) || is_numeric($salesTaxPercent))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($salesTaxPercent, true), gettype($salesTaxPercent)), __LINE__);
        }
        $this->SalesTaxPercent = $salesTaxPercent;
        return $this;
    }
    /**
     * Get SalesTaxState value
     * @return string|null
     */
    public function getSalesTaxState()
    {
        return $this->SalesTaxState;
    }
    /**
     * Set SalesTaxState value
     * @param string $salesTaxState
     * @return \StructType\SalesTaxType
     */
    public function setSalesTaxState($salesTaxState = null)
    {
        // validation for constraint: string
        if (!is_null($salesTaxState) && !is_string($salesTaxState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($salesTaxState, true), gettype($salesTaxState)), __LINE__);
        }
        $this->SalesTaxState = $salesTaxState;
        return $this;
    }
    /**
     * Get ShippingIncludedInTax value
     * @return bool|null
     */
    public function getShippingIncludedInTax()
    {
        return $this->ShippingIncludedInTax;
    }
    /**
     * Set ShippingIncludedInTax value
     * @param bool $shippingIncludedInTax
     * @return \StructType\SalesTaxType
     */
    public function setShippingIncludedInTax($shippingIncludedInTax = null)
    {
        // validation for constraint: boolean
        if (!is_null($shippingIncludedInTax) && !is_bool($shippingIncludedInTax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($shippingIncludedInTax, true), gettype($shippingIncludedInTax)), __LINE__);
        }
        $this->ShippingIncludedInTax = $shippingIncludedInTax;
        return $this;
    }
    /**
     * Get SalesTaxAmount value
     * @return \StructType\AmountType|null
     */
    public function getSalesTaxAmount()
    {
        return $this->SalesTaxAmount;
    }
    /**
     * Set SalesTaxAmount value
     * @param \StructType\AmountType $salesTaxAmount
     * @return \StructType\SalesTaxType
     */
    public function setSalesTaxAmount(\StructType\AmountType $salesTaxAmount = null)
    {
        $this->SalesTaxAmount = $salesTaxAmount;
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
     * @return \StructType\SalesTaxType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SalesTaxType
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
