<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProStoresCheckoutPreferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ProStoresCheckoutPreferenceType extends AbstractStructBase
{
    /**
     * The CheckoutRedirectProStores
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $CheckoutRedirectProStores;
    /**
     * The ProStoresDetails
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: 0
     * - minOccurs: 0
     * @var \StructType\ProStoresDetailsType
     */
    public $ProStoresDetails;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ProStoresCheckoutPreferenceType
     * @uses ProStoresCheckoutPreferenceType::setCheckoutRedirectProStores()
     * @uses ProStoresCheckoutPreferenceType::setProStoresDetails()
     * @uses ProStoresCheckoutPreferenceType::setAny()
     * @param bool $checkoutRedirectProStores
     * @param \StructType\ProStoresDetailsType $proStoresDetails
     * @param \DOMDocument $any
     */
    public function __construct($checkoutRedirectProStores = null, \StructType\ProStoresDetailsType $proStoresDetails = null, \DOMDocument $any = null)
    {
        $this
            ->setCheckoutRedirectProStores($checkoutRedirectProStores)
            ->setProStoresDetails($proStoresDetails)
            ->setAny($any);
    }
    /**
     * Get CheckoutRedirectProStores value
     * @return bool|null
     */
    public function getCheckoutRedirectProStores()
    {
        return $this->CheckoutRedirectProStores;
    }
    /**
     * Set CheckoutRedirectProStores value
     * @param bool $checkoutRedirectProStores
     * @return \StructType\ProStoresCheckoutPreferenceType
     */
    public function setCheckoutRedirectProStores($checkoutRedirectProStores = null)
    {
        // validation for constraint: boolean
        if (!is_null($checkoutRedirectProStores) && !is_bool($checkoutRedirectProStores)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($checkoutRedirectProStores, true), gettype($checkoutRedirectProStores)), __LINE__);
        }
        $this->CheckoutRedirectProStores = $checkoutRedirectProStores;
        return $this;
    }
    /**
     * Get ProStoresDetails value
     * @return \StructType\ProStoresDetailsType|null
     */
    public function getProStoresDetails()
    {
        return $this->ProStoresDetails;
    }
    /**
     * Set ProStoresDetails value
     * @param \StructType\ProStoresDetailsType $proStoresDetails
     * @return \StructType\ProStoresCheckoutPreferenceType
     */
    public function setProStoresDetails(\StructType\ProStoresDetailsType $proStoresDetails = null)
    {
        $this->ProStoresDetails = $proStoresDetails;
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
     * @return \StructType\ProStoresCheckoutPreferenceType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
