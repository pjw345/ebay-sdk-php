<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerVendorDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Describes vendor information.
 * @subpackage Structs
 */
class SellingManagerVendorDetailsType extends AbstractStructBase
{
    /**
     * The VendorName
     * Meta information extracted from the WSDL
     * - documentation: Primary vendor name. Vendor information is returned only if it has been set.
     * - minOccurs: 0
     * @var string
     */
    public $VendorName;
    /**
     * The VendorContactInfo
     * Meta information extracted from the WSDL
     * - documentation: Contact information of vendor. Vendor information is returned only if it has been set.
     * - minOccurs: 0
     * @var string
     */
    public $VendorContactInfo;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellingManagerVendorDetailsType
     * @uses SellingManagerVendorDetailsType::setVendorName()
     * @uses SellingManagerVendorDetailsType::setVendorContactInfo()
     * @uses SellingManagerVendorDetailsType::setAny()
     * @param string $vendorName
     * @param string $vendorContactInfo
     * @param \DOMDocument $any
     */
    public function __construct($vendorName = null, $vendorContactInfo = null, \DOMDocument $any = null)
    {
        $this
            ->setVendorName($vendorName)
            ->setVendorContactInfo($vendorContactInfo)
            ->setAny($any);
    }
    /**
     * Get VendorName value
     * @return string|null
     */
    public function getVendorName()
    {
        return $this->VendorName;
    }
    /**
     * Set VendorName value
     * @param string $vendorName
     * @return \StructType\SellingManagerVendorDetailsType
     */
    public function setVendorName($vendorName = null)
    {
        // validation for constraint: string
        if (!is_null($vendorName) && !is_string($vendorName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vendorName, true), gettype($vendorName)), __LINE__);
        }
        $this->VendorName = $vendorName;
        return $this;
    }
    /**
     * Get VendorContactInfo value
     * @return string|null
     */
    public function getVendorContactInfo()
    {
        return $this->VendorContactInfo;
    }
    /**
     * Set VendorContactInfo value
     * @param string $vendorContactInfo
     * @return \StructType\SellingManagerVendorDetailsType
     */
    public function setVendorContactInfo($vendorContactInfo = null)
    {
        // validation for constraint: string
        if (!is_null($vendorContactInfo) && !is_string($vendorContactInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vendorContactInfo, true), gettype($vendorContactInfo)), __LINE__);
        }
        $this->VendorContactInfo = $vendorContactInfo;
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
     * @return \StructType\SellingManagerVendorDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
