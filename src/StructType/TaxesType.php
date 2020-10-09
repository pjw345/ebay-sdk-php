<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the Taxes container, which contains detailed sales tax information for an order line item. The Taxes container is only returned if the seller is using the Vertex- based Premium Sales Tax Engine solution. The information
 * in this container supercedes/overrides the sales tax information in the ShippingDetails.SalesTax container.
 * @subpackage Structs
 */
class TaxesType extends AbstractStructBase
{
    /**
     * The TotalTaxAmount
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the total tax amount for the order line item, for all tax types, which may include sales tax (seller-applied or 'eBay Collect and Remit'), 'Goods and Services' tax (for Australian or New Zealand sellers), or
     * other fees like an electronic waste recycling fee. <br><br> <span class="tablenote"><b>Note: </b> If the corresponding tax type is <code>GST</code> or <code>SalesTax</code> (if found under both the <b>eBayCollectAndRemitTaxes</b> and <b>Taxes</b>
     * containers), the order is subject to 'eBay Collect and Remit' tax, and a change in logic has rolled out as of early November 2019. For orders that are subject to eBay 'Collect and Remit' tax, which includes US sales tax for numerous states, and 'Good
     * and Services' tax that is applicable to Australian and New Zealand sellers, the tax amount in this field will be included in the <b>Order.Total</b>, <b>Order.AmountPaid</b>, and <b>Transaction.AmountPaid</b> fields. <br><br> Sellers should be aware
     * that the sales tax that the buyer pays for the order will initially be included when the order funds are distributed to their PayPal account, but that PayPal will pull out the sales tax amount shortly after the payment clears, and will distribute the
     * sales tax to the appropriate taxing authority. Previous to this change, PayPal would strip out the 'Collect and Remit' tax before distributing order funds to the seller's account. <br><br> This logic change does not apply to sellers who are in eBay
     * managed payments, so the amount in this field will never reflect any 'Collect and Remit' tax, even if the order is subject to 'Collect and Remit' tax. </span>
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $TotalTaxAmount;
    /**
     * The TaxDetails
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of detailed sales tax information for an order line item, including the tax type and description, sales tax on the item cost, and sales tax related to shipping and handling.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\TaxDetailsType[]
     */
    public $TaxDetails;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for TaxesType
     * @uses TaxesType::setTotalTaxAmount()
     * @uses TaxesType::setTaxDetails()
     * @uses TaxesType::setAny()
     * @param \StructType\AmountType $totalTaxAmount
     * @param \StructType\TaxDetailsType[] $taxDetails
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\AmountType $totalTaxAmount = null, array $taxDetails = array(), \DOMDocument $any = null)
    {
        $this
            ->setTotalTaxAmount($totalTaxAmount)
            ->setTaxDetails($taxDetails)
            ->setAny($any);
    }
    /**
     * Get TotalTaxAmount value
     * @return \StructType\AmountType|null
     */
    public function getTotalTaxAmount()
    {
        return $this->TotalTaxAmount;
    }
    /**
     * Set TotalTaxAmount value
     * @param \StructType\AmountType $totalTaxAmount
     * @return \StructType\TaxesType
     */
    public function setTotalTaxAmount(\StructType\AmountType $totalTaxAmount = null)
    {
        $this->TotalTaxAmount = $totalTaxAmount;
        return $this;
    }
    /**
     * Get TaxDetails value
     * @return \StructType\TaxDetailsType[]|null
     */
    public function getTaxDetails()
    {
        return $this->TaxDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setTaxDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTaxDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaxDetailsForArrayConstraintsFromSetTaxDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $taxesTypeTaxDetailsItem) {
            // validation for constraint: itemType
            if (!$taxesTypeTaxDetailsItem instanceof \StructType\TaxDetailsType) {
                $invalidValues[] = is_object($taxesTypeTaxDetailsItem) ? get_class($taxesTypeTaxDetailsItem) : sprintf('%s(%s)', gettype($taxesTypeTaxDetailsItem), var_export($taxesTypeTaxDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TaxDetails property can only contain items of type \StructType\TaxDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set TaxDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\TaxDetailsType[] $taxDetails
     * @return \StructType\TaxesType
     */
    public function setTaxDetails(array $taxDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($taxDetailsArrayErrorMessage = self::validateTaxDetailsForArrayConstraintsFromSetTaxDetails($taxDetails))) {
            throw new \InvalidArgumentException($taxDetailsArrayErrorMessage, __LINE__);
        }
        $this->TaxDetails = $taxDetails;
        return $this;
    }
    /**
     * Add item to TaxDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\TaxDetailsType $item
     * @return \StructType\TaxesType
     */
    public function addToTaxDetails(\StructType\TaxDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\TaxDetailsType) {
            throw new \InvalidArgumentException(sprintf('The TaxDetails property can only contain items of type \StructType\TaxDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TaxDetails[] = $item;
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
     * @return \StructType\TaxesType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
