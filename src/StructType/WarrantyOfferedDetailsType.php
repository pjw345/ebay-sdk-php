<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WarrantyOfferedDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated, as product warranties are no longer applicable or supported in eBay APIs.
 * @subpackage Structs
 */
class WarrantyOfferedDetailsType extends AbstractStructBase
{
    /**
     * The WarrantyOfferedOption
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $WarrantyOfferedOption;
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
     * Constructor method for WarrantyOfferedDetailsType
     * @uses WarrantyOfferedDetailsType::setWarrantyOfferedOption()
     * @uses WarrantyOfferedDetailsType::setDescription()
     * @uses WarrantyOfferedDetailsType::setAny()
     * @param string $warrantyOfferedOption
     * @param string $description
     * @param \DOMDocument $any
     */
    public function __construct($warrantyOfferedOption = null, $description = null, \DOMDocument $any = null)
    {
        $this
            ->setWarrantyOfferedOption($warrantyOfferedOption)
            ->setDescription($description)
            ->setAny($any);
    }
    /**
     * Get WarrantyOfferedOption value
     * @return string|null
     */
    public function getWarrantyOfferedOption()
    {
        return $this->WarrantyOfferedOption;
    }
    /**
     * Set WarrantyOfferedOption value
     * @param string $warrantyOfferedOption
     * @return \StructType\WarrantyOfferedDetailsType
     */
    public function setWarrantyOfferedOption($warrantyOfferedOption = null)
    {
        // validation for constraint: string
        if (!is_null($warrantyOfferedOption) && !is_string($warrantyOfferedOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($warrantyOfferedOption, true), gettype($warrantyOfferedOption)), __LINE__);
        }
        $this->WarrantyOfferedOption = $warrantyOfferedOption;
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
     * @return \StructType\WarrantyOfferedDetailsType
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
     * @return \StructType\WarrantyOfferedDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
