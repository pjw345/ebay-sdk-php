<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreThemeArrayType StructType
 * Meta information extracted from the WSDL
 * - documentation: Set of Store themes.
 * @subpackage Structs
 */
class StoreThemeArrayType extends AbstractStructBase
{
    /**
     * The Theme
     * Meta information extracted from the WSDL
     * - documentation: A Store theme.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\StoreThemeType[]
     */
    public $Theme;
    /**
     * The GenericColorSchemeArray
     * Meta information extracted from the WSDL
     * - documentation: Set of color schemes. This set is for use with those themes that do not explicitly list a color scheme in the theme definition (these themes are also known as advanced themes).
     * - minOccurs: 0
     * @var \ArrayType\StoreColorSchemeArrayType
     */
    public $GenericColorSchemeArray;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for StoreThemeArrayType
     * @uses StoreThemeArrayType::setTheme()
     * @uses StoreThemeArrayType::setGenericColorSchemeArray()
     * @uses StoreThemeArrayType::setAny()
     * @param \StructType\StoreThemeType[] $theme
     * @param \ArrayType\StoreColorSchemeArrayType $genericColorSchemeArray
     * @param \DOMDocument $any
     */
    public function __construct(array $theme = array(), \ArrayType\StoreColorSchemeArrayType $genericColorSchemeArray = null, \DOMDocument $any = null)
    {
        $this
            ->setTheme($theme)
            ->setGenericColorSchemeArray($genericColorSchemeArray)
            ->setAny($any);
    }
    /**
     * Get Theme value
     * @return \StructType\StoreThemeType[]|null
     */
    public function getTheme()
    {
        return $this->Theme;
    }
    /**
     * This method is responsible for validating the values passed to the setTheme method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTheme method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateThemeForArrayConstraintsFromSetTheme(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $storeThemeArrayTypeThemeItem) {
            // validation for constraint: itemType
            if (!$storeThemeArrayTypeThemeItem instanceof \StructType\StoreThemeType) {
                $invalidValues[] = is_object($storeThemeArrayTypeThemeItem) ? get_class($storeThemeArrayTypeThemeItem) : sprintf('%s(%s)', gettype($storeThemeArrayTypeThemeItem), var_export($storeThemeArrayTypeThemeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Theme property can only contain items of type \StructType\StoreThemeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Theme value
     * @throws \InvalidArgumentException
     * @param \StructType\StoreThemeType[] $theme
     * @return \StructType\StoreThemeArrayType
     */
    public function setTheme(array $theme = array())
    {
        // validation for constraint: array
        if ('' !== ($themeArrayErrorMessage = self::validateThemeForArrayConstraintsFromSetTheme($theme))) {
            throw new \InvalidArgumentException($themeArrayErrorMessage, __LINE__);
        }
        $this->Theme = $theme;
        return $this;
    }
    /**
     * Add item to Theme value
     * @throws \InvalidArgumentException
     * @param \StructType\StoreThemeType $item
     * @return \StructType\StoreThemeArrayType
     */
    public function addToTheme(\StructType\StoreThemeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\StoreThemeType) {
            throw new \InvalidArgumentException(sprintf('The Theme property can only contain items of type \StructType\StoreThemeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Theme[] = $item;
        return $this;
    }
    /**
     * Get GenericColorSchemeArray value
     * @return \ArrayType\StoreColorSchemeArrayType|null
     */
    public function getGenericColorSchemeArray()
    {
        return $this->GenericColorSchemeArray;
    }
    /**
     * Set GenericColorSchemeArray value
     * @param \ArrayType\StoreColorSchemeArrayType $genericColorSchemeArray
     * @return \StructType\StoreThemeArrayType
     */
    public function setGenericColorSchemeArray(\ArrayType\StoreColorSchemeArrayType $genericColorSchemeArray = null)
    {
        $this->GenericColorSchemeArray = $genericColorSchemeArray;
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
     * @return \StructType\StoreThemeArrayType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
