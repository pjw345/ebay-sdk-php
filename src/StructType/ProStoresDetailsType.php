<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProStoresDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ProStoresDetailsType extends AbstractStructBase
{
    /**
     * The SellerThirdPartyUsername
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $SellerThirdPartyUsername;
    /**
     * The StoreName
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $StoreName;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ProStoresDetailsType
     * @uses ProStoresDetailsType::setSellerThirdPartyUsername()
     * @uses ProStoresDetailsType::setStoreName()
     * @uses ProStoresDetailsType::setStatus()
     * @uses ProStoresDetailsType::setAny()
     * @param string $sellerThirdPartyUsername
     * @param string $storeName
     * @param string $status
     * @param \DOMDocument $any
     */
    public function __construct($sellerThirdPartyUsername = null, $storeName = null, $status = null, \DOMDocument $any = null)
    {
        $this
            ->setSellerThirdPartyUsername($sellerThirdPartyUsername)
            ->setStoreName($storeName)
            ->setStatus($status)
            ->setAny($any);
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
     * @return \StructType\ProStoresDetailsType
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
     * Get StoreName value
     * @return string|null
     */
    public function getStoreName()
    {
        return $this->StoreName;
    }
    /**
     * Set StoreName value
     * @param string $storeName
     * @return \StructType\ProStoresDetailsType
     */
    public function setStoreName($storeName = null)
    {
        // validation for constraint: string
        if (!is_null($storeName) && !is_string($storeName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($storeName, true), gettype($storeName)), __LINE__);
        }
        $this->StoreName = $storeName;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \EnumType\EnableCodeType::valueIsValid()
     * @uses \EnumType\EnableCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \StructType\ProStoresDetailsType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\EnableCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EnableCodeType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \EnumType\EnableCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
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
     * @return \StructType\ProStoresDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
