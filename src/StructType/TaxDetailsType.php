<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>TaxDetails</b> container, which consists of detailed tax information for an order line item, including the tax type and description, tax on the item cost, and tax related to shipping and handling. The information
 * in this container supercedes/overrides the sales tax information in the <b>ShippingDetails.SalesTax</b> container (if returned).
 * @subpackage Structs
 */
class TaxDetailsType extends AbstractStructBase
{
    /**
     * The Imposition
     * Meta information extracted from the WSDL
     * - documentation: This field indicates the tax type. A separate <b>TaxDetails</b> container is returned for each unique imposition (tax type).
     * - minOccurs: 0
     * @var string
     */
    public $Imposition;
    /**
     * The TaxDescription
     * Meta information extracted from the WSDL
     * - documentation: This enumeration indicates the type of tax.
     * - minOccurs: 0
     * @var string
     */
    public $TaxDescription;
    /**
     * The TaxAmount
     * Meta information extracted from the WSDL
     * - documentation: This value is the total amount of sales tax for the order line item for the corresponding impositiion (tax type). <br><br> <b>TaxAmount</b> = <b>TaxOnSubtotalAmount</b> + <b>TaxOnShippingAmount</b> + <b>TaxOnHandlingAmount</b>
     * <br><br> <span class="tablenote"><b>Note: </b> If the corresponding tax type is <code>GST</code> or <code>SalesTax</code> (if found under both the <b>eBayCollectAndRemitTaxes.TaxDetails</b> and <b>Taxes.TaxDetails</b> containers), the order is
     * subject to 'eBay Collect and Remit' tax, and a change in logic has been rolled out as of early November 2019. For orders that are subject to 'eBay Collect and Remit' tax, which includes US sales tax for numerous states, and 'Good and Services' tax
     * that is applicable to Australian and New Zealand sellers, the tax amount in this field will be included in the <b>Order.Total</b>, <b>Order.AmountPaid</b>, and <b>Transaction.AmountPaid</b> fields. <br><br> Sellers should be aware that the sales tax
     * that the buyer pays for the order will initially be included when the order funds are distributed to their PayPal account, but that PayPal will pull out the sales tax amount shortly after the payment clears, and will distribute the sales tax to the
     * appropriate taxing authority. Previous to this change, PayPal would strip out the 'Collect and Remit' tax before distributing order funds to the seller's account. <br><br> This logic change does not apply to sellers who are in eBay managed payments,
     * so the amount in this field will never reflect any 'Collect and Remit' tax, even if the order is subject to 'Collect and Remit' tax. </span>
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $TaxAmount;
    /**
     * The TaxOnSubtotalAmount
     * Meta information extracted from the WSDL
     * - documentation: This value is the amount of sales tax applied based on the unit cost of the order line item for the corresponding impositiion (tax type).
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $TaxOnSubtotalAmount;
    /**
     * The TaxOnShippingAmount
     * Meta information extracted from the WSDL
     * - documentation: This value is the amount of sales tax applied based on shipping costs for the order line item for the corresponding impositiion (tax type).
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $TaxOnShippingAmount;
    /**
     * The TaxOnHandlingAmount
     * Meta information extracted from the WSDL
     * - documentation: This value is the amount of sales tax applied based on handling costs for the order line item for the corresponding impositiion (tax type).
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $TaxOnHandlingAmount;
    /**
     * The TaxCode
     * Meta information extracted from the WSDL
     * - documentation: This value is the actual tax ID for the buyer. This field will generally only be returned if a seller on the Italy or Spain sites required that the buyer supply a tax ID during the checkout process. If the
     * <b>Order.BuyerTaxIdentifier</b> container is returned, the type of tax ID can be found in the <b>BuyerTaxIdentifier.Type</b> field.
     * - minOccurs: 0
     * @var string
     */
    public $TaxCode;
    /**
     * The CollectionMethod
     * Meta information extracted from the WSDL
     * - documentation: This field indicates the collection method used to collect the 'Collect and Remit' or 'Good and Services' tax for the order. This field is always returned for orders subject to 'Collect and Remit' or 'Good and Services' tax, and its
     * value is always <code>NET</code>. <br> <br> <span class="tablenote"><b>Note: </b> Although the <b>CollectionMethod</b> field is returned for all orders subject to 'Collect and Remit' sales tax or 'Good and Services' tax, the <b>CollectionMethod</b>
     * field and <b>CollectionMethodCodeType</b> are not currently of any practical use, although this field may have use in the future. If and when the logic of this field is changed, this note will be updated and a note will also be added to the Release
     * Notes. </span>
     * - minOccurs: 0
     * @var string
     */
    public $CollectionMethod;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for TaxDetailsType
     * @uses TaxDetailsType::setImposition()
     * @uses TaxDetailsType::setTaxDescription()
     * @uses TaxDetailsType::setTaxAmount()
     * @uses TaxDetailsType::setTaxOnSubtotalAmount()
     * @uses TaxDetailsType::setTaxOnShippingAmount()
     * @uses TaxDetailsType::setTaxOnHandlingAmount()
     * @uses TaxDetailsType::setTaxCode()
     * @uses TaxDetailsType::setCollectionMethod()
     * @uses TaxDetailsType::setAny()
     * @param string $imposition
     * @param string $taxDescription
     * @param \StructType\AmountType $taxAmount
     * @param \StructType\AmountType $taxOnSubtotalAmount
     * @param \StructType\AmountType $taxOnShippingAmount
     * @param \StructType\AmountType $taxOnHandlingAmount
     * @param string $taxCode
     * @param string $collectionMethod
     * @param \DOMDocument $any
     */
    public function __construct($imposition = null, $taxDescription = null, \StructType\AmountType $taxAmount = null, \StructType\AmountType $taxOnSubtotalAmount = null, \StructType\AmountType $taxOnShippingAmount = null, \StructType\AmountType $taxOnHandlingAmount = null, $taxCode = null, $collectionMethod = null, \DOMDocument $any = null)
    {
        $this
            ->setImposition($imposition)
            ->setTaxDescription($taxDescription)
            ->setTaxAmount($taxAmount)
            ->setTaxOnSubtotalAmount($taxOnSubtotalAmount)
            ->setTaxOnShippingAmount($taxOnShippingAmount)
            ->setTaxOnHandlingAmount($taxOnHandlingAmount)
            ->setTaxCode($taxCode)
            ->setCollectionMethod($collectionMethod)
            ->setAny($any);
    }
    /**
     * Get Imposition value
     * @return string|null
     */
    public function getImposition()
    {
        return $this->Imposition;
    }
    /**
     * Set Imposition value
     * @uses \EnumType\TaxTypeCodeType::valueIsValid()
     * @uses \EnumType\TaxTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $imposition
     * @return \StructType\TaxDetailsType
     */
    public function setImposition($imposition = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\TaxTypeCodeType::valueIsValid($imposition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TaxTypeCodeType', is_array($imposition) ? implode(', ', $imposition) : var_export($imposition, true), implode(', ', \EnumType\TaxTypeCodeType::getValidValues())), __LINE__);
        }
        $this->Imposition = $imposition;
        return $this;
    }
    /**
     * Get TaxDescription value
     * @return string|null
     */
    public function getTaxDescription()
    {
        return $this->TaxDescription;
    }
    /**
     * Set TaxDescription value
     * @uses \EnumType\TaxDescriptionCodeType::valueIsValid()
     * @uses \EnumType\TaxDescriptionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $taxDescription
     * @return \StructType\TaxDetailsType
     */
    public function setTaxDescription($taxDescription = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\TaxDescriptionCodeType::valueIsValid($taxDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TaxDescriptionCodeType', is_array($taxDescription) ? implode(', ', $taxDescription) : var_export($taxDescription, true), implode(', ', \EnumType\TaxDescriptionCodeType::getValidValues())), __LINE__);
        }
        $this->TaxDescription = $taxDescription;
        return $this;
    }
    /**
     * Get TaxAmount value
     * @return \StructType\AmountType|null
     */
    public function getTaxAmount()
    {
        return $this->TaxAmount;
    }
    /**
     * Set TaxAmount value
     * @param \StructType\AmountType $taxAmount
     * @return \StructType\TaxDetailsType
     */
    public function setTaxAmount(\StructType\AmountType $taxAmount = null)
    {
        $this->TaxAmount = $taxAmount;
        return $this;
    }
    /**
     * Get TaxOnSubtotalAmount value
     * @return \StructType\AmountType|null
     */
    public function getTaxOnSubtotalAmount()
    {
        return $this->TaxOnSubtotalAmount;
    }
    /**
     * Set TaxOnSubtotalAmount value
     * @param \StructType\AmountType $taxOnSubtotalAmount
     * @return \StructType\TaxDetailsType
     */
    public function setTaxOnSubtotalAmount(\StructType\AmountType $taxOnSubtotalAmount = null)
    {
        $this->TaxOnSubtotalAmount = $taxOnSubtotalAmount;
        return $this;
    }
    /**
     * Get TaxOnShippingAmount value
     * @return \StructType\AmountType|null
     */
    public function getTaxOnShippingAmount()
    {
        return $this->TaxOnShippingAmount;
    }
    /**
     * Set TaxOnShippingAmount value
     * @param \StructType\AmountType $taxOnShippingAmount
     * @return \StructType\TaxDetailsType
     */
    public function setTaxOnShippingAmount(\StructType\AmountType $taxOnShippingAmount = null)
    {
        $this->TaxOnShippingAmount = $taxOnShippingAmount;
        return $this;
    }
    /**
     * Get TaxOnHandlingAmount value
     * @return \StructType\AmountType|null
     */
    public function getTaxOnHandlingAmount()
    {
        return $this->TaxOnHandlingAmount;
    }
    /**
     * Set TaxOnHandlingAmount value
     * @param \StructType\AmountType $taxOnHandlingAmount
     * @return \StructType\TaxDetailsType
     */
    public function setTaxOnHandlingAmount(\StructType\AmountType $taxOnHandlingAmount = null)
    {
        $this->TaxOnHandlingAmount = $taxOnHandlingAmount;
        return $this;
    }
    /**
     * Get TaxCode value
     * @return string|null
     */
    public function getTaxCode()
    {
        return $this->TaxCode;
    }
    /**
     * Set TaxCode value
     * @param string $taxCode
     * @return \StructType\TaxDetailsType
     */
    public function setTaxCode($taxCode = null)
    {
        // validation for constraint: string
        if (!is_null($taxCode) && !is_string($taxCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taxCode, true), gettype($taxCode)), __LINE__);
        }
        $this->TaxCode = $taxCode;
        return $this;
    }
    /**
     * Get CollectionMethod value
     * @return string|null
     */
    public function getCollectionMethod()
    {
        return $this->CollectionMethod;
    }
    /**
     * Set CollectionMethod value
     * @uses \EnumType\CollectionMethodCodeType::valueIsValid()
     * @uses \EnumType\CollectionMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $collectionMethod
     * @return \StructType\TaxDetailsType
     */
    public function setCollectionMethod($collectionMethod = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CollectionMethodCodeType::valueIsValid($collectionMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CollectionMethodCodeType', is_array($collectionMethod) ? implode(', ', $collectionMethod) : var_export($collectionMethod, true), implode(', ', \EnumType\CollectionMethodCodeType::getValidValues())), __LINE__);
        }
        $this->CollectionMethod = $collectionMethod;
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
     * @return \StructType\TaxDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
