<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreLogoType StructType
 * Meta information extracted from the WSDL
 * - documentation: Store logo.
 * @subpackage Structs
 */
class StoreLogoType extends AbstractStructBase
{
    /**
     * The LogoID
     * Meta information extracted from the WSDL
     * - documentation: Store logo ID (use GetStoreOptions to get the list of valid logo IDs).
     * - minOccurs: 0
     * @var int
     */
    public $LogoID;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Store logo name. Provides a user-friendly name for the logo.
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The URL
     * Meta information extracted from the WSDL
     * - documentation: URL of the logo. Must have a .gif or .jpg extention. Specified when you are using a customized logo.
     * - minOccurs: 0
     * @var string
     */
    public $URL;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for StoreLogoType
     * @uses StoreLogoType::setLogoID()
     * @uses StoreLogoType::setName()
     * @uses StoreLogoType::setURL()
     * @uses StoreLogoType::setAny()
     * @param int $logoID
     * @param string $name
     * @param string $uRL
     * @param \DOMDocument $any
     */
    public function __construct($logoID = null, $name = null, $uRL = null, \DOMDocument $any = null)
    {
        $this
            ->setLogoID($logoID)
            ->setName($name)
            ->setURL($uRL)
            ->setAny($any);
    }
    /**
     * Get LogoID value
     * @return int|null
     */
    public function getLogoID()
    {
        return $this->LogoID;
    }
    /**
     * Set LogoID value
     * @param int $logoID
     * @return \StructType\StoreLogoType
     */
    public function setLogoID($logoID = null)
    {
        // validation for constraint: int
        if (!is_null($logoID) && !(is_int($logoID) || ctype_digit($logoID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($logoID, true), gettype($logoID)), __LINE__);
        }
        $this->LogoID = $logoID;
        return $this;
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
     * @param string $name
     * @return \StructType\StoreLogoType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get URL value
     * @return string|null
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param string $uRL
     * @return \StructType\StoreLogoType
     */
    public function setURL($uRL = null)
    {
        // validation for constraint: string
        if (!is_null($uRL) && !is_string($uRL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uRL, true), gettype($uRL)), __LINE__);
        }
        $this->URL = $uRL;
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
     * @return \StructType\StoreLogoType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
