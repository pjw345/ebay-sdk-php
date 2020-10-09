<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WarrantyDurationDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated, as product warranties are no longer applicable or supported in eBay APIs.
 * @subpackage Structs
 */
class WarrantyDurationDetailsType extends AbstractStructBase
{
    /**
     * The WarrantyDurationOption
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $WarrantyDurationOption;
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
     * Constructor method for WarrantyDurationDetailsType
     * @uses WarrantyDurationDetailsType::setWarrantyDurationOption()
     * @uses WarrantyDurationDetailsType::setDescription()
     * @uses WarrantyDurationDetailsType::setAny()
     * @param string $warrantyDurationOption
     * @param string $description
     * @param \DOMDocument $any
     */
    public function __construct($warrantyDurationOption = null, $description = null, \DOMDocument $any = null)
    {
        $this
            ->setWarrantyDurationOption($warrantyDurationOption)
            ->setDescription($description)
            ->setAny($any);
    }
    /**
     * Get WarrantyDurationOption value
     * @return string|null
     */
    public function getWarrantyDurationOption()
    {
        return $this->WarrantyDurationOption;
    }
    /**
     * Set WarrantyDurationOption value
     * @param string $warrantyDurationOption
     * @return \StructType\WarrantyDurationDetailsType
     */
    public function setWarrantyDurationOption($warrantyDurationOption = null)
    {
        // validation for constraint: string
        if (!is_null($warrantyDurationOption) && !is_string($warrantyDurationOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($warrantyDurationOption, true), gettype($warrantyDurationOption)), __LINE__);
        }
        $this->WarrantyDurationOption = $warrantyDurationOption;
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
     * @return \StructType\WarrantyDurationDetailsType
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
     * @return \StructType\WarrantyDurationDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
