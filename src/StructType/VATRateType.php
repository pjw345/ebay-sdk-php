<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VATRateType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>VATRateType</b> container, which is used by <b>ReviseSellingManagerSaleRecord</b> to modify the VAT percentage for an order line item. This container is also retrieved by <b>GetSellingManagerSaleRecord</b> if
 * Value-Added Tax has been applied to the order line item.
 * @subpackage Structs
 */
class VATRateType extends AbstractStructBase
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for an eBay listing. A listing can have multiple order line items (transactions), but only one <b>ItemID</b>. An <b>ItemID</b> can be paired up with a corresponding <b>TransactionID</b> and used as an input filter
     * for <b>ReviseSellingManagerSaleRecord</b>. However, if <b>OrderID</b> is passed in as an input filter for <b>ReviseSellingManagerSaleRecord</b>, the <b>ItemID</b>/<b>TransactionID</b> pair is ignored. | Type that represents the unique identifier for
     * an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for an eBay sales transaction. This identifier is created once there is a commitment from a buyer to purchase an item. Along with its corresponding <b>ItemID</b>, a <b>TransactionID</b> is used and referenced during
     * an order checkout flow and after checkout has been completed. The <b>ItemID</b>/<b>TransactionID</b> pair can be used as an input filter for <b>ReviseSellingManagerSaleRecord</b>. However, if <b>OrderID</b> is passed in as an input filter for
     * <b>ReviseSellingManagerSaleRecord</b>, the <b>ItemID</b>/<b>TransactionID</b> pair is ignored.
     * - minOccurs: 0
     * @var string
     */
    public $TransactionID;
    /**
     * The VATPercent
     * Meta information extracted from the WSDL
     * - documentation: The VAT (Value-Added Tax) rate for the order line item. When the <b>VATPercent</b> is specified, the item's VAT information appears on the item's listing page. In addition, the seller can choose to print an invoice that includes the
     * item's net price, VAT percent, VAT amount, and total price. Since VAT rates vary depending on the item and on the user's country of residence, a seller is responsible for entering the correct VAT rate; it is not calculated by eBay. To specify a
     * <b>VATPercent</b>, a seller must have a VAT-ID registered with eBay and must be listing the item on a VAT-enabled site. Max applicable length is 6 characters, including the decimal (e.g., 12.345). The scale is 3 decimal places. (If you pass in
     * 12.3456, eBay may round up the value to 12.346.) Note: The View Item page may display the precision to 2 decimal places with no trailing zeros. However, the full value you send in is stored.
     * - minOccurs: 0
     * @var float
     */
    public $VATPercent;
    /**
     * The OrderLineItemID
     * Meta information extracted from the WSDL
     * - documentation: <b>OrderLineItemID</b> is a unique identifier for an eBay order line item If a VAT rate is specified in the <b>ReviseSellingManagerSaleRecord</b> request, <b>OrderLineItemID</b> can be used instead of <b>ItemID</b> and
     * <b>TransactionID</b>.
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
     * Constructor method for VATRateType
     * @uses VATRateType::setItemID()
     * @uses VATRateType::setTransactionID()
     * @uses VATRateType::setVATPercent()
     * @uses VATRateType::setOrderLineItemID()
     * @uses VATRateType::setAny()
     * @param string $itemID
     * @param string $transactionID
     * @param float $vATPercent
     * @param string $orderLineItemID
     * @param \DOMDocument $any
     */
    public function __construct($itemID = null, $transactionID = null, $vATPercent = null, $orderLineItemID = null, \DOMDocument $any = null)
    {
        $this
            ->setItemID($itemID)
            ->setTransactionID($transactionID)
            ->setVATPercent($vATPercent)
            ->setOrderLineItemID($orderLineItemID)
            ->setAny($any);
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
     * @return \StructType\VATRateType
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
     * @return string|null
     */
    public function getTransactionID()
    {
        return $this->TransactionID;
    }
    /**
     * Set TransactionID value
     * @param string $transactionID
     * @return \StructType\VATRateType
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
     * Get VATPercent value
     * @return float|null
     */
    public function getVATPercent()
    {
        return $this->VATPercent;
    }
    /**
     * Set VATPercent value
     * @param float $vATPercent
     * @return \StructType\VATRateType
     */
    public function setVATPercent($vATPercent = null)
    {
        // validation for constraint: float
        if (!is_null($vATPercent) && !(is_float($vATPercent) || is_numeric($vATPercent))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vATPercent, true), gettype($vATPercent)), __LINE__);
        }
        $this->VATPercent = $vATPercent;
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
     * @return \StructType\VATRateType
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
     * @return \StructType\VATRateType
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
     * @return \StructType\VATRateType
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
