<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RestockingFeeValueDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated, as sellers are no longer allowed to set a restocking fee through a listings's return policy.
 * @subpackage Structs
 */
class RestockingFeeValueDetailsType extends AbstractStructBase
{
    /**
     * The RestockingFeeValueOption
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RestockingFeeValueOption;
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
     * Constructor method for RestockingFeeValueDetailsType
     * @uses RestockingFeeValueDetailsType::setRestockingFeeValueOption()
     * @uses RestockingFeeValueDetailsType::setDescription()
     * @uses RestockingFeeValueDetailsType::setAny()
     * @param string $restockingFeeValueOption
     * @param string $description
     * @param \DOMDocument $any
     */
    public function __construct($restockingFeeValueOption = null, $description = null, \DOMDocument $any = null)
    {
        $this
            ->setRestockingFeeValueOption($restockingFeeValueOption)
            ->setDescription($description)
            ->setAny($any);
    }
    /**
     * Get RestockingFeeValueOption value
     * @return string|null
     */
    public function getRestockingFeeValueOption()
    {
        return $this->RestockingFeeValueOption;
    }
    /**
     * Set RestockingFeeValueOption value
     * @param string $restockingFeeValueOption
     * @return \StructType\RestockingFeeValueDetailsType
     */
    public function setRestockingFeeValueOption($restockingFeeValueOption = null)
    {
        // validation for constraint: string
        if (!is_null($restockingFeeValueOption) && !is_string($restockingFeeValueOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($restockingFeeValueOption, true), gettype($restockingFeeValueOption)), __LINE__);
        }
        $this->RestockingFeeValueOption = $restockingFeeValueOption;
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
     * @return \StructType\RestockingFeeValueDetailsType
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
     * @return \StructType\RestockingFeeValueDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
