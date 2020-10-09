<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreColorType StructType
 * Meta information extracted from the WSDL
 * - documentation: Store color set.
 * @subpackage Structs
 */
class StoreColorType extends AbstractStructBase
{
    /**
     * The Primary
     * Meta information extracted from the WSDL
     * - documentation: Primary color for the Store. Specified in 6-digit Hex format. For example: F6F6C9
     * - minOccurs: 0
     * @var string
     */
    public $Primary;
    /**
     * The Secondary
     * Meta information extracted from the WSDL
     * - documentation: Secondary color for the Store. Specified in 6-digit Hex format. For example: F6F6C9
     * - minOccurs: 0
     * @var string
     */
    public $Secondary;
    /**
     * The Accent
     * Meta information extracted from the WSDL
     * - documentation: Accent color for the Store. Specified in 6-digit Hex format. For example: F6F6C9
     * - minOccurs: 0
     * @var string
     */
    public $Accent;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for StoreColorType
     * @uses StoreColorType::setPrimary()
     * @uses StoreColorType::setSecondary()
     * @uses StoreColorType::setAccent()
     * @uses StoreColorType::setAny()
     * @param string $primary
     * @param string $secondary
     * @param string $accent
     * @param \DOMDocument $any
     */
    public function __construct($primary = null, $secondary = null, $accent = null, \DOMDocument $any = null)
    {
        $this
            ->setPrimary($primary)
            ->setSecondary($secondary)
            ->setAccent($accent)
            ->setAny($any);
    }
    /**
     * Get Primary value
     * @return string|null
     */
    public function getPrimary()
    {
        return $this->Primary;
    }
    /**
     * Set Primary value
     * @param string $primary
     * @return \StructType\StoreColorType
     */
    public function setPrimary($primary = null)
    {
        // validation for constraint: string
        if (!is_null($primary) && !is_string($primary)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($primary, true), gettype($primary)), __LINE__);
        }
        $this->Primary = $primary;
        return $this;
    }
    /**
     * Get Secondary value
     * @return string|null
     */
    public function getSecondary()
    {
        return $this->Secondary;
    }
    /**
     * Set Secondary value
     * @param string $secondary
     * @return \StructType\StoreColorType
     */
    public function setSecondary($secondary = null)
    {
        // validation for constraint: string
        if (!is_null($secondary) && !is_string($secondary)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($secondary, true), gettype($secondary)), __LINE__);
        }
        $this->Secondary = $secondary;
        return $this;
    }
    /**
     * Get Accent value
     * @return string|null
     */
    public function getAccent()
    {
        return $this->Accent;
    }
    /**
     * Set Accent value
     * @param string $accent
     * @return \StructType\StoreColorType
     */
    public function setAccent($accent = null)
    {
        // validation for constraint: string
        if (!is_null($accent) && !is_string($accent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accent, true), gettype($accent)), __LINE__);
        }
        $this->Accent = $accent;
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
     * @return \StructType\StoreColorType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
