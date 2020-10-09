<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocalSearchType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class LocalSearchType extends AbstractStructBase
{
    /**
     * The MaxDistance
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var int
     */
    public $MaxDistance;
    /**
     * The PostalCode
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var string
     */
    public $PostalCode;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for LocalSearchType
     * @uses LocalSearchType::setMaxDistance()
     * @uses LocalSearchType::setPostalCode()
     * @uses LocalSearchType::setAny()
     * @param int $maxDistance
     * @param string $postalCode
     * @param \DOMDocument $any
     */
    public function __construct($maxDistance = null, $postalCode = null, \DOMDocument $any = null)
    {
        $this
            ->setMaxDistance($maxDistance)
            ->setPostalCode($postalCode)
            ->setAny($any);
    }
    /**
     * Get MaxDistance value
     * @return int|null
     */
    public function getMaxDistance()
    {
        return $this->MaxDistance;
    }
    /**
     * Set MaxDistance value
     * @param int $maxDistance
     * @return \StructType\LocalSearchType
     */
    public function setMaxDistance($maxDistance = null)
    {
        // validation for constraint: int
        if (!is_null($maxDistance) && !(is_int($maxDistance) || ctype_digit($maxDistance))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxDistance, true), gettype($maxDistance)), __LINE__);
        }
        $this->MaxDistance = $maxDistance;
        return $this;
    }
    /**
     * Get PostalCode value
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }
    /**
     * Set PostalCode value
     * @param string $postalCode
     * @return \StructType\LocalSearchType
     */
    public function setPostalCode($postalCode = null)
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCode, true), gettype($postalCode)), __LINE__);
        }
        $this->PostalCode = $postalCode;
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
     * @return \StructType\LocalSearchType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
