<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxTableType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used to express sales tax details for one or more tax jurisdictions. The concept of 'sales tax' is only applicable to eBay US and Canada (English and French) sites.
 * @subpackage Structs
 */
class TaxTableType extends AbstractStructBase
{
    /**
     * The TaxJurisdiction
     * Meta information extracted from the WSDL
     * - documentation: In a <b>SetTaxTable</b>, a <b>TaxJurisdiction</b> container is required for each tax jurisdiction that the seller wishes to make additions/changes. Sales tax details for zero or more jurisdictions (states, provinces, etc). This can
     * be just one jurisdiction, up to all jurisdictions defined for the site's country. Any values specified through a <b>TaxJurisdiction</b> container will override any existing values defined in the seller's Sales Tax Table. <br><br> If
     * <b>GetTaxTable</b> is called without the <b>DetailLevel</b> field, only tax jurisdictions where sales tax rates have been set up are returned. However, if the <b>DetailLevel</b> field is included in the request and set to <code>ReturnAll</code>, all
     * tax jurisdictions are returned, regardless of whether or not the seller has modified settings for any/all of these jurisdictions. <br><br> This container is only returned in order-related 'Get' calls if sales tax is applicable to the order line item.
     * <br><br> <span class="tablenote"><b>Note: </b> As of January 1, 2019, buyers in some US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's
     * behalf. So, if a sales tax rate is established for a state that is subject to 'eBay Collect and Remit', this sales tax rate will be ignored by eBay during checkout process. For a list of the US states that will become subject to 'eBay Collect and
     * Remit' (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\TaxJurisdictionType[]
     */
    public $TaxJurisdiction;
    /**
     * Constructor method for TaxTableType
     * @uses TaxTableType::setTaxJurisdiction()
     * @param \StructType\TaxJurisdictionType[] $taxJurisdiction
     */
    public function __construct(array $taxJurisdiction = array())
    {
        $this
            ->setTaxJurisdiction($taxJurisdiction);
    }
    /**
     * Get TaxJurisdiction value
     * @return \StructType\TaxJurisdictionType[]|null
     */
    public function getTaxJurisdiction()
    {
        return $this->TaxJurisdiction;
    }
    /**
     * This method is responsible for validating the values passed to the setTaxJurisdiction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTaxJurisdiction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaxJurisdictionForArrayConstraintsFromSetTaxJurisdiction(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $taxTableTypeTaxJurisdictionItem) {
            // validation for constraint: itemType
            if (!$taxTableTypeTaxJurisdictionItem instanceof \StructType\TaxJurisdictionType) {
                $invalidValues[] = is_object($taxTableTypeTaxJurisdictionItem) ? get_class($taxTableTypeTaxJurisdictionItem) : sprintf('%s(%s)', gettype($taxTableTypeTaxJurisdictionItem), var_export($taxTableTypeTaxJurisdictionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TaxJurisdiction property can only contain items of type \StructType\TaxJurisdictionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set TaxJurisdiction value
     * @throws \InvalidArgumentException
     * @param \StructType\TaxJurisdictionType[] $taxJurisdiction
     * @return \StructType\TaxTableType
     */
    public function setTaxJurisdiction(array $taxJurisdiction = array())
    {
        // validation for constraint: array
        if ('' !== ($taxJurisdictionArrayErrorMessage = self::validateTaxJurisdictionForArrayConstraintsFromSetTaxJurisdiction($taxJurisdiction))) {
            throw new \InvalidArgumentException($taxJurisdictionArrayErrorMessage, __LINE__);
        }
        $this->TaxJurisdiction = $taxJurisdiction;
        return $this;
    }
    /**
     * Add item to TaxJurisdiction value
     * @throws \InvalidArgumentException
     * @param \StructType\TaxJurisdictionType $item
     * @return \StructType\TaxTableType
     */
    public function addToTaxJurisdiction(\StructType\TaxJurisdictionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\TaxJurisdictionType) {
            throw new \InvalidArgumentException(sprintf('The TaxJurisdiction property can only contain items of type \StructType\TaxJurisdictionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TaxJurisdiction[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\TaxTableType
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
