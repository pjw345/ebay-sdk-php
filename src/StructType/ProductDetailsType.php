<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type defines the <b>ProductDetails</b> container that is returned in the <b>GeteBayDetails</b> response if the <code>ProductDetails</code> value is used in a <b>DetailName</b> field (or no <b>DetailName</b> fields are used).
 * <br><br> The <b>ProductDetails</b> container shows the substitute text that can be used in place of an actual product identifier (e.g. EAN, ISBNs, UPC, or MPN) in case the product does not have a product identifier and/or the product identifier is
 * not known by the seller.
 * @subpackage Structs
 */
class ProductDetailsType extends AbstractStructBase
{
    /**
     * The ProductIdentifierUnavailableText
     * Meta information extracted from the WSDL
     * - documentation: This field contains the actual text that should be passed into the relevant product identifier fields (e.g. <b>ProductListingDetails.UPC</b> in an <b>AddItem<.b> call) when creating a listing. Some eBay categories require one or more
     * Global Trade Item Numbers (GTINs), so either the actual GTIN or this substitute text must be passed into the relevant fields.
     * - minOccurs: 0
     * @var string
     */
    public $ProductIdentifierUnavailableText;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ProductDetailsType
     * @uses ProductDetailsType::setProductIdentifierUnavailableText()
     * @uses ProductDetailsType::setAny()
     * @param string $productIdentifierUnavailableText
     * @param \DOMDocument $any
     */
    public function __construct($productIdentifierUnavailableText = null, \DOMDocument $any = null)
    {
        $this
            ->setProductIdentifierUnavailableText($productIdentifierUnavailableText)
            ->setAny($any);
    }
    /**
     * Get ProductIdentifierUnavailableText value
     * @return string|null
     */
    public function getProductIdentifierUnavailableText()
    {
        return $this->ProductIdentifierUnavailableText;
    }
    /**
     * Set ProductIdentifierUnavailableText value
     * @param string $productIdentifierUnavailableText
     * @return \StructType\ProductDetailsType
     */
    public function setProductIdentifierUnavailableText($productIdentifierUnavailableText = null)
    {
        // validation for constraint: string
        if (!is_null($productIdentifierUnavailableText) && !is_string($productIdentifierUnavailableText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productIdentifierUnavailableText, true), gettype($productIdentifierUnavailableText)), __LINE__);
        }
        $this->ProductIdentifierUnavailableText = $productIdentifierUnavailableText;
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
     * @return \StructType\ProductDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
