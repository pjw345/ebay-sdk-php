<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WarrantyTypeDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated, as product warranties are no longer applicable or supported in eBay APIs.
 * @subpackage Structs
 */
class WarrantyTypeDetailsType extends AbstractStructBase
{
    /**
     * The WarrantyTypeOption
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $WarrantyTypeOption;
    /**
     * The Description
     * Meta information extracted from the WSDL
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
     * Constructor method for WarrantyTypeDetailsType
     * @uses WarrantyTypeDetailsType::setWarrantyTypeOption()
     * @uses WarrantyTypeDetailsType::setDescription()
     * @uses WarrantyTypeDetailsType::setAny()
     * @param string $warrantyTypeOption
     * @param string $description
     * @param \DOMDocument $any
     */
    public function __construct($warrantyTypeOption = null, $description = null, \DOMDocument $any = null)
    {
        $this
            ->setWarrantyTypeOption($warrantyTypeOption)
            ->setDescription($description)
            ->setAny($any);
    }
    /**
     * Get WarrantyTypeOption value
     * @return string|null
     */
    public function getWarrantyTypeOption()
    {
        return $this->WarrantyTypeOption;
    }
    /**
     * Set WarrantyTypeOption value
     * @param string $warrantyTypeOption
     * @return \StructType\WarrantyTypeDetailsType
     */
    public function setWarrantyTypeOption($warrantyTypeOption = null)
    {
        // validation for constraint: string
        if (!is_null($warrantyTypeOption) && !is_string($warrantyTypeOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($warrantyTypeOption, true), gettype($warrantyTypeOption)), __LINE__);
        }
        $this->WarrantyTypeOption = $warrantyTypeOption;
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
     * @return \StructType\WarrantyTypeDetailsType
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
     * @return \StructType\WarrantyTypeDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
