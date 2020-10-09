<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreThemeType StructType
 * Meta information extracted from the WSDL
 * - documentation: Store theme.
 * @subpackage Structs
 */
class StoreThemeType extends AbstractStructBase
{
    /**
     * The ThemeID
     * Meta information extracted from the WSDL
     * - documentation: Store theme ID (use GetStoreOptions to get the list of valid theme IDs).
     * - minOccurs: 0
     * @var int
     */
    public $ThemeID;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Store theme name. Provides a user-friendly name for the theme.
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The ColorScheme
     * Meta information extracted from the WSDL
     * - documentation: Theme color scheme.
     * - minOccurs: 0
     * @var \StructType\StoreColorSchemeType
     */
    public $ColorScheme;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for StoreThemeType
     * @uses StoreThemeType::setThemeID()
     * @uses StoreThemeType::setName()
     * @uses StoreThemeType::setColorScheme()
     * @uses StoreThemeType::setAny()
     * @param int $themeID
     * @param string $name
     * @param \StructType\StoreColorSchemeType $colorScheme
     * @param \DOMDocument $any
     */
    public function __construct($themeID = null, $name = null, \StructType\StoreColorSchemeType $colorScheme = null, \DOMDocument $any = null)
    {
        $this
            ->setThemeID($themeID)
            ->setName($name)
            ->setColorScheme($colorScheme)
            ->setAny($any);
    }
    /**
     * Get ThemeID value
     * @return int|null
     */
    public function getThemeID()
    {
        return $this->ThemeID;
    }
    /**
     * Set ThemeID value
     * @param int $themeID
     * @return \StructType\StoreThemeType
     */
    public function setThemeID($themeID = null)
    {
        // validation for constraint: int
        if (!is_null($themeID) && !(is_int($themeID) || ctype_digit($themeID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($themeID, true), gettype($themeID)), __LINE__);
        }
        $this->ThemeID = $themeID;
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
     * @return \StructType\StoreThemeType
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
     * Get ColorScheme value
     * @return \StructType\StoreColorSchemeType|null
     */
    public function getColorScheme()
    {
        return $this->ColorScheme;
    }
    /**
     * Set ColorScheme value
     * @param \StructType\StoreColorSchemeType $colorScheme
     * @return \StructType\StoreThemeType
     */
    public function setColorScheme(\StructType\StoreColorSchemeType $colorScheme = null)
    {
        $this->ColorScheme = $colorScheme;
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
     * @return \StructType\StoreThemeType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
