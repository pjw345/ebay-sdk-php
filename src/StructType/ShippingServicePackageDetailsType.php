<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingServicePackageDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Packages supported by the enclosing shipping service.
 * @subpackage Structs
 */
class ShippingServicePackageDetailsType extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: The name of the package type.
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The DimensionsRequired
     * Meta information extracted from the WSDL
     * - documentation: This field is only returned if package dimensions are required for the corresponding package type (<b>ShippingServicePackageDetails.Name</b> value) supported by the corresponding shipping service option
     * (<b>ShippingServiceDetails.ShippingService</b> value).
     * - minOccurs: 0
     * @var bool
     */
    public $DimensionsRequired;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ShippingServicePackageDetailsType
     * @uses ShippingServicePackageDetailsType::setName()
     * @uses ShippingServicePackageDetailsType::setDimensionsRequired()
     * @uses ShippingServicePackageDetailsType::setAny()
     * @param string $name
     * @param bool $dimensionsRequired
     * @param \DOMDocument $any
     */
    public function __construct($name = null, $dimensionsRequired = null, \DOMDocument $any = null)
    {
        $this
            ->setName($name)
            ->setDimensionsRequired($dimensionsRequired)
            ->setAny($any);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @uses \EnumType\ShippingPackageCodeType::valueIsValid()
     * @uses \EnumType\ShippingPackageCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $name
     * @return \StructType\ShippingServicePackageDetailsType
     */
    public function setName($name = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ShippingPackageCodeType::valueIsValid($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ShippingPackageCodeType', is_array($name) ? implode(', ', $name) : var_export($name, true), implode(', ', \EnumType\ShippingPackageCodeType::getValidValues())), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get DimensionsRequired value
     * @return bool|null
     */
    public function getDimensionsRequired()
    {
        return $this->DimensionsRequired;
    }
    /**
     * Set DimensionsRequired value
     * @param bool $dimensionsRequired
     * @return \StructType\ShippingServicePackageDetailsType
     */
    public function setDimensionsRequired($dimensionsRequired = null)
    {
        // validation for constraint: boolean
        if (!is_null($dimensionsRequired) && !is_bool($dimensionsRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dimensionsRequired, true), gettype($dimensionsRequired)), __LINE__);
        }
        $this->DimensionsRequired = $dimensionsRequired;
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
     * @return \StructType\ShippingServicePackageDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
