<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LineItemType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type provides information about one order line item in a Global Shipping package. The package can contain multiple units of a given order line item.
 * @subpackage Structs
 */
class LineItemType extends AbstractStructBase
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for the eBay listing associated with the order line item. A multiple-quantity listing can have multiple order line items, but only one <b>ItemID</b> value. Unless an <b>OrderLineItemID</b> or <b>SKU</b> value is
     * specified in the same node, this field is required for each <b>ItemTransactionID</b> node included in the request. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 1
     * @var string
     */
    public $ItemID;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for an eBay order line item (transaction). The <b>TransactionID</b> should match the <b>ItemID</b> specified in each <b>ItemTransactionID</b> node included in the request. Optionally, an <b>OrderLineItemID</b> value
     * can substitute for the <b>ItemID</b>/<b>TransactionID</b> pair.
     * - minOccurs: 1
     * @var string
     */
    public $TransactionID;
    /**
     * The Quantity
     * Meta information extracted from the WSDL
     * - documentation: The number of units of the order line item in this package; this is required for customs. The seller must ensure that this matches the quantity of the order line item enclosed in the package. <br/><br/> This value must be a positive
     * integer, and it can't be greater than the quantity of this item specified in the original transaction.
     * - minOccurs: 0
     * @var int
     */
    public $Quantity;
    /**
     * The CountryOfOrigin
     * Meta information extracted from the WSDL
     * - documentation: The Country of Manufacture for the order line item; this is required for customs. This should identify the country in which more than 50% of the value of the item was created. <br/><br/> This value must conform to the ISO 3166
     * two-letter country code standard. To see the list of currently supported codes, and the English names associated with each code (e.g., KY="Cayman Islands"), call <b>GeteBayDetails</b> with <b>DetailName</b> set to <b>CountryDetails</b>.
     * - minOccurs: 0
     * @var string
     */
    public $CountryOfOrigin;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: The item description of the order line item, based on its <strong>ItemID</strong>.
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for LineItemType
     * @uses LineItemType::setItemID()
     * @uses LineItemType::setTransactionID()
     * @uses LineItemType::setQuantity()
     * @uses LineItemType::setCountryOfOrigin()
     * @uses LineItemType::setDescription()
     * @uses LineItemType::setAny()
     * @param string $itemID
     * @param string $transactionID
     * @param int $quantity
     * @param string $countryOfOrigin
     * @param string $description
     * @param \DOMDocument $any
     */
    public function __construct($itemID = null, $transactionID = null, $quantity = null, $countryOfOrigin = null, $description = null, \DOMDocument $any = null)
    {
        $this
            ->setItemID($itemID)
            ->setTransactionID($transactionID)
            ->setQuantity($quantity)
            ->setCountryOfOrigin($countryOfOrigin)
            ->setDescription($description)
            ->setAny($any);
    }
    /**
     * Get ItemID value
     * @return string
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \StructType\LineItemType
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
     * Get TransactionID value
     * @return string
     */
    public function getTransactionID()
    {
        return $this->TransactionID;
    }
    /**
     * Set TransactionID value
     * @param string $transactionID
     * @return \StructType\LineItemType
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
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \StructType\LineItemType
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: int
        if (!is_null($quantity) && !(is_int($quantity) || ctype_digit($quantity))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Get CountryOfOrigin value
     * @return string|null
     */
    public function getCountryOfOrigin()
    {
        return $this->CountryOfOrigin;
    }
    /**
     * Set CountryOfOrigin value
     * @param string $countryOfOrigin
     * @return \StructType\LineItemType
     */
    public function setCountryOfOrigin($countryOfOrigin = null)
    {
        // validation for constraint: string
        if (!is_null($countryOfOrigin) && !is_string($countryOfOrigin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryOfOrigin, true), gettype($countryOfOrigin)), __LINE__);
        }
        $this->CountryOfOrigin = $countryOfOrigin;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \StructType\LineItemType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
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
     * @return \StructType\LineItemType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
