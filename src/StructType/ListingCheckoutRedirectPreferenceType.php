<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListingCheckoutRedirectPreferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type has been deprecated, as Pro Stores and other third-party checkouts have been deprecated.
 * @subpackage Structs
 */
class ListingCheckoutRedirectPreferenceType extends AbstractStructBase
{
    /**
     * The ProStoresStoreName
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ProStoresStoreName;
    /**
     * The SellerThirdPartyUsername
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $SellerThirdPartyUsername;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ListingCheckoutRedirectPreferenceType
     * @uses ListingCheckoutRedirectPreferenceType::setProStoresStoreName()
     * @uses ListingCheckoutRedirectPreferenceType::setSellerThirdPartyUsername()
     * @uses ListingCheckoutRedirectPreferenceType::setAny()
     * @param string $proStoresStoreName
     * @param string $sellerThirdPartyUsername
     * @param \DOMDocument $any
     */
    public function __construct($proStoresStoreName = null, $sellerThirdPartyUsername = null, \DOMDocument $any = null)
    {
        $this
            ->setProStoresStoreName($proStoresStoreName)
            ->setSellerThirdPartyUsername($sellerThirdPartyUsername)
            ->setAny($any);
    }
    /**
     * Get ProStoresStoreName value
     * @return string|null
     */
    public function getProStoresStoreName()
    {
        return $this->ProStoresStoreName;
    }
    /**
     * Set ProStoresStoreName value
     * @param string $proStoresStoreName
     * @return \StructType\ListingCheckoutRedirectPreferenceType
     */
    public function setProStoresStoreName($proStoresStoreName = null)
    {
        // validation for constraint: string
        if (!is_null($proStoresStoreName) && !is_string($proStoresStoreName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($proStoresStoreName, true), gettype($proStoresStoreName)), __LINE__);
        }
        $this->ProStoresStoreName = $proStoresStoreName;
        return $this;
    }
    /**
     * Get SellerThirdPartyUsername value
     * @return string|null
     */
    public function getSellerThirdPartyUsername()
    {
        return $this->SellerThirdPartyUsername;
    }
    /**
     * Set SellerThirdPartyUsername value
     * @param string $sellerThirdPartyUsername
     * @return \StructType\ListingCheckoutRedirectPreferenceType
     */
    public function setSellerThirdPartyUsername($sellerThirdPartyUsername = null)
    {
        // validation for constraint: string
        if (!is_null($sellerThirdPartyUsername) && !is_string($sellerThirdPartyUsername)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerThirdPartyUsername, true), gettype($sellerThirdPartyUsername)), __LINE__);
        }
        $this->SellerThirdPartyUsername = $sellerThirdPartyUsername;
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
     * @return \StructType\ListingCheckoutRedirectPreferenceType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
