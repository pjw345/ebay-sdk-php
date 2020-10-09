<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductFinderConstraintType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ProductFinderConstraintType extends AbstractStructBase
{
    /**
     * The DisplayName
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $DisplayName;
    /**
     * The DisplayValue
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $DisplayValue;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ProductFinderConstraintType
     * @uses ProductFinderConstraintType::setDisplayName()
     * @uses ProductFinderConstraintType::setDisplayValue()
     * @uses ProductFinderConstraintType::setAny()
     * @param string $displayName
     * @param string $displayValue
     * @param \DOMDocument $any
     */
    public function __construct($displayName = null, $displayValue = null, \DOMDocument $any = null)
    {
        $this
            ->setDisplayName($displayName)
            ->setDisplayValue($displayValue)
            ->setAny($any);
    }
    /**
     * Get DisplayName value
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \StructType\ProductFinderConstraintType
     */
    public function setDisplayName($displayName = null)
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayName, true), gettype($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        return $this;
    }
    /**
     * Get DisplayValue value
     * @return string|null
     */
    public function getDisplayValue()
    {
        return $this->DisplayValue;
    }
    /**
     * Set DisplayValue value
     * @param string $displayValue
     * @return \StructType\ProductFinderConstraintType
     */
    public function setDisplayValue($displayValue = null)
    {
        // validation for constraint: string
        if (!is_null($displayValue) && !is_string($displayValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayValue, true), gettype($displayValue)), __LINE__);
        }
        $this->DisplayValue = $displayValue;
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
     * @return \StructType\ProductFinderConstraintType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
