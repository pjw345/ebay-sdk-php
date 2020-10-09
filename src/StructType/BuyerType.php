<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BuyerType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by various <b>Get</b> calls, including <b>GetItem</b> and <b>GetOrders</b>. Only the order management calls return the <b>BuyerTaxIdentifier</b> container, and each call that uses <b>BuyerType</b> uses the
 * <b>ShippingAddress</b> container a little differently.
 * @subpackage Structs
 */
class BuyerType extends AbstractStructBase
{
    /**
     * The ShippingAddress
     * Meta information extracted from the WSDL
     * - documentation: This container shows the buyer's shipping address. <br> <br> <span class="tablenote"><b>Note:</b> For an Authenticity Guarantee program order returned in <b>GetItemTransactions</b> or <b>GetSellerTransactions</b>, this is the address
     * of the authenticator's warehouse. The authenticator is responsible for delivery to the buyer's shipping address. </span>
     * - minOccurs: 0
     * @var \StructType\AddressType
     */
    public $ShippingAddress;
    /**
     * The BuyerTaxIdentifier
     * Meta information extracted from the WSDL
     * - documentation: This container consists of taxpayer identification for the buyer. Although this container may be used for other purposes at a later date, it is currently used by sellers selling on the Italy or Spain site to retrieve the taxpayer ID
     * of the buyer. <br/><br/> It is now required that buyers registered on the Italy site provide their Codice Fiscale ID (similar to the Social Security Number for US citizens) before buying an item on the Italy site. <br/><br/> On the Spain site, a
     * Spanish seller has the option to require that Spanish buyers (registered on Spain site) provide a tax ID before checkout. This option is set by the seller at the account level. Once a Spanish buyer provides a tax ID, this tax ID is associated with
     * his/her account, and once a tax ID is associated with the account, Spanish buyer will be asked to provide the tax ID during checkout on all eBay sites. Buyers with a registered address outside of Spain will not be asked to provide a tax ID during
     * checkout. <br/><br/> This container is only returned for Spanish or Italian sellers when the buyer was asked to provide tax identifier information during checkout. A <strong>BuyerTaxIdentifier</strong> will be returned for each tax ID that is
     * associated with the buyer's account.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\TaxIdentifierType[]
     */
    public $BuyerTaxIdentifier;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for BuyerType
     * @uses BuyerType::setShippingAddress()
     * @uses BuyerType::setBuyerTaxIdentifier()
     * @uses BuyerType::setAny()
     * @param \StructType\AddressType $shippingAddress
     * @param \StructType\TaxIdentifierType[] $buyerTaxIdentifier
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\AddressType $shippingAddress = null, array $buyerTaxIdentifier = array(), \DOMDocument $any = null)
    {
        $this
            ->setShippingAddress($shippingAddress)
            ->setBuyerTaxIdentifier($buyerTaxIdentifier)
            ->setAny($any);
    }
    /**
     * Get ShippingAddress value
     * @return \StructType\AddressType|null
     */
    public function getShippingAddress()
    {
        return $this->ShippingAddress;
    }
    /**
     * Set ShippingAddress value
     * @param \StructType\AddressType $shippingAddress
     * @return \StructType\BuyerType
     */
    public function setShippingAddress(\StructType\AddressType $shippingAddress = null)
    {
        $this->ShippingAddress = $shippingAddress;
        return $this;
    }
    /**
     * Get BuyerTaxIdentifier value
     * @return \StructType\TaxIdentifierType[]|null
     */
    public function getBuyerTaxIdentifier()
    {
        return $this->BuyerTaxIdentifier;
    }
    /**
     * This method is responsible for validating the values passed to the setBuyerTaxIdentifier method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBuyerTaxIdentifier method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBuyerTaxIdentifierForArrayConstraintsFromSetBuyerTaxIdentifier(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $buyerTypeBuyerTaxIdentifierItem) {
            // validation for constraint: itemType
            if (!$buyerTypeBuyerTaxIdentifierItem instanceof \StructType\TaxIdentifierType) {
                $invalidValues[] = is_object($buyerTypeBuyerTaxIdentifierItem) ? get_class($buyerTypeBuyerTaxIdentifierItem) : sprintf('%s(%s)', gettype($buyerTypeBuyerTaxIdentifierItem), var_export($buyerTypeBuyerTaxIdentifierItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BuyerTaxIdentifier property can only contain items of type \StructType\TaxIdentifierType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set BuyerTaxIdentifier value
     * @throws \InvalidArgumentException
     * @param \StructType\TaxIdentifierType[] $buyerTaxIdentifier
     * @return \StructType\BuyerType
     */
    public function setBuyerTaxIdentifier(array $buyerTaxIdentifier = array())
    {
        // validation for constraint: array
        if ('' !== ($buyerTaxIdentifierArrayErrorMessage = self::validateBuyerTaxIdentifierForArrayConstraintsFromSetBuyerTaxIdentifier($buyerTaxIdentifier))) {
            throw new \InvalidArgumentException($buyerTaxIdentifierArrayErrorMessage, __LINE__);
        }
        $this->BuyerTaxIdentifier = $buyerTaxIdentifier;
        return $this;
    }
    /**
     * Add item to BuyerTaxIdentifier value
     * @throws \InvalidArgumentException
     * @param \StructType\TaxIdentifierType $item
     * @return \StructType\BuyerType
     */
    public function addToBuyerTaxIdentifier(\StructType\TaxIdentifierType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\TaxIdentifierType) {
            throw new \InvalidArgumentException(sprintf('The BuyerTaxIdentifier property can only contain items of type \StructType\TaxIdentifierType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BuyerTaxIdentifier[] = $item;
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
     * @return \StructType\BuyerType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
