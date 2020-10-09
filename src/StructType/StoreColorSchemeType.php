<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreColorSchemeType StructType
 * Meta information extracted from the WSDL
 * - documentation: Store color scheme.
 * @subpackage Structs
 */
class StoreColorSchemeType extends AbstractStructBase
{
    /**
     * The ColorSchemeID
     * Meta information extracted from the WSDL
     * - documentation: Store color scheme ID. (use GetStoreOptions to get the list of valid theme color scheme IDs).
     * - minOccurs: 0
     * @var int
     */
    public $ColorSchemeID;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Store color scheme name. Provides a user-friendly name for the color scheme.
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Color
     * Meta information extracted from the WSDL
     * - documentation: Store color set.
     * - minOccurs: 0
     * @var \StructType\StoreColorType
     */
    public $Color;
    /**
     * The Font
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of the Store's font properties. This container is not returned if an eBay predefined store theme is used 'as is'. Use the <b>GetStoreOptions</b> call to retrieve the complete set of data for the list of
     * predefined eBay Stores options, including the themes and color schemes.
     * - minOccurs: 0
     * @var \StructType\StoreFontType
     */
    public $Font;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for StoreColorSchemeType
     * @uses StoreColorSchemeType::setColorSchemeID()
     * @uses StoreColorSchemeType::setName()
     * @uses StoreColorSchemeType::setColor()
     * @uses StoreColorSchemeType::setFont()
     * @uses StoreColorSchemeType::setAny()
     * @param int $colorSchemeID
     * @param string $name
     * @param \StructType\StoreColorType $color
     * @param \StructType\StoreFontType $font
     * @param \DOMDocument $any
     */
    public function __construct($colorSchemeID = null, $name = null, \StructType\StoreColorType $color = null, \StructType\StoreFontType $font = null, \DOMDocument $any = null)
    {
        $this
            ->setColorSchemeID($colorSchemeID)
            ->setName($name)
            ->setColor($color)
            ->setFont($font)
            ->setAny($any);
    }
    /**
     * Get ColorSchemeID value
     * @return int|null
     */
    public function getColorSchemeID()
    {
        return $this->ColorSchemeID;
    }
    /**
     * Set ColorSchemeID value
     * @param int $colorSchemeID
     * @return \StructType\StoreColorSchemeType
     */
    public function setColorSchemeID($colorSchemeID = null)
    {
        // validation for constraint: int
        if (!is_null($colorSchemeID) && !(is_int($colorSchemeID) || ctype_digit($colorSchemeID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($colorSchemeID, true), gettype($colorSchemeID)), __LINE__);
        }
        $this->ColorSchemeID = $colorSchemeID;
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
     * @return \StructType\StoreColorSchemeType
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
     * Get Color value
     * @return \StructType\StoreColorType|null
     */
    public function getColor()
    {
        return $this->Color;
    }
    /**
     * Set Color value
     * @param \StructType\StoreColorType $color
     * @return \StructType\StoreColorSchemeType
     */
    public function setColor(\StructType\StoreColorType $color = null)
    {
        $this->Color = $color;
        return $this;
    }
    /**
     * Get Font value
     * @return \StructType\StoreFontType|null
     */
    public function getFont()
    {
        return $this->Font;
    }
    /**
     * Set Font value
     * @param \StructType\StoreFontType $font
     * @return \StructType\StoreColorSchemeType
     */
    public function setFont(\StructType\StoreFontType $font = null)
    {
        $this->Font = $font;
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
     * @return \StructType\StoreColorSchemeType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
