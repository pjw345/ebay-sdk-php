<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreFontType StructType
 * Meta information extracted from the WSDL
 * - documentation: Store font set.
 * @subpackage Structs
 */
class StoreFontType extends AbstractStructBase
{
    /**
     * The NameFace
     * Meta information extracted from the WSDL
     * - documentation: Font for the Store name.
     * - minOccurs: 0
     * @var string
     */
    public $NameFace;
    /**
     * The NameSize
     * Meta information extracted from the WSDL
     * - documentation: Font size for the Store name.
     * - minOccurs: 0
     * @var string
     */
    public $NameSize;
    /**
     * The NameColor
     * Meta information extracted from the WSDL
     * - documentation: Font color for the Store name. Specified in 6-digit Hex format. For example: F6F6C9
     * - minOccurs: 0
     * @var string
     */
    public $NameColor;
    /**
     * The TitleFace
     * Meta information extracted from the WSDL
     * - documentation: Font for the Store section title.
     * - minOccurs: 0
     * @var string
     */
    public $TitleFace;
    /**
     * The TitleSize
     * Meta information extracted from the WSDL
     * - documentation: Font size for the Store section title.
     * - minOccurs: 0
     * @var string
     */
    public $TitleSize;
    /**
     * The TitleColor
     * Meta information extracted from the WSDL
     * - documentation: Font color for the Store section title. Specified in 6-digit Hex format. For example: F6F6C9
     * - minOccurs: 0
     * @var string
     */
    public $TitleColor;
    /**
     * The DescFace
     * Meta information extracted from the WSDL
     * - documentation: Font for the Store description.
     * - minOccurs: 0
     * @var string
     */
    public $DescFace;
    /**
     * The DescSize
     * Meta information extracted from the WSDL
     * - documentation: Font size for the Store description.
     * - minOccurs: 0
     * @var string
     */
    public $DescSize;
    /**
     * The DescColor
     * Meta information extracted from the WSDL
     * - documentation: Font color for the Store description. Specified in 6-digit Hex format. For example: F6F6C9
     * - minOccurs: 0
     * @var string
     */
    public $DescColor;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for StoreFontType
     * @uses StoreFontType::setNameFace()
     * @uses StoreFontType::setNameSize()
     * @uses StoreFontType::setNameColor()
     * @uses StoreFontType::setTitleFace()
     * @uses StoreFontType::setTitleSize()
     * @uses StoreFontType::setTitleColor()
     * @uses StoreFontType::setDescFace()
     * @uses StoreFontType::setDescSize()
     * @uses StoreFontType::setDescColor()
     * @uses StoreFontType::setAny()
     * @param string $nameFace
     * @param string $nameSize
     * @param string $nameColor
     * @param string $titleFace
     * @param string $titleSize
     * @param string $titleColor
     * @param string $descFace
     * @param string $descSize
     * @param string $descColor
     * @param \DOMDocument $any
     */
    public function __construct($nameFace = null, $nameSize = null, $nameColor = null, $titleFace = null, $titleSize = null, $titleColor = null, $descFace = null, $descSize = null, $descColor = null, \DOMDocument $any = null)
    {
        $this
            ->setNameFace($nameFace)
            ->setNameSize($nameSize)
            ->setNameColor($nameColor)
            ->setTitleFace($titleFace)
            ->setTitleSize($titleSize)
            ->setTitleColor($titleColor)
            ->setDescFace($descFace)
            ->setDescSize($descSize)
            ->setDescColor($descColor)
            ->setAny($any);
    }
    /**
     * Get NameFace value
     * @return string|null
     */
    public function getNameFace()
    {
        return $this->NameFace;
    }
    /**
     * Set NameFace value
     * @uses \EnumType\StoreFontFaceCodeType::valueIsValid()
     * @uses \EnumType\StoreFontFaceCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $nameFace
     * @return \StructType\StoreFontType
     */
    public function setNameFace($nameFace = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\StoreFontFaceCodeType::valueIsValid($nameFace)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\StoreFontFaceCodeType', is_array($nameFace) ? implode(', ', $nameFace) : var_export($nameFace, true), implode(', ', \EnumType\StoreFontFaceCodeType::getValidValues())), __LINE__);
        }
        $this->NameFace = $nameFace;
        return $this;
    }
    /**
     * Get NameSize value
     * @return string|null
     */
    public function getNameSize()
    {
        return $this->NameSize;
    }
    /**
     * Set NameSize value
     * @uses \EnumType\StoreFontSizeCodeType::valueIsValid()
     * @uses \EnumType\StoreFontSizeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $nameSize
     * @return \StructType\StoreFontType
     */
    public function setNameSize($nameSize = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\StoreFontSizeCodeType::valueIsValid($nameSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\StoreFontSizeCodeType', is_array($nameSize) ? implode(', ', $nameSize) : var_export($nameSize, true), implode(', ', \EnumType\StoreFontSizeCodeType::getValidValues())), __LINE__);
        }
        $this->NameSize = $nameSize;
        return $this;
    }
    /**
     * Get NameColor value
     * @return string|null
     */
    public function getNameColor()
    {
        return $this->NameColor;
    }
    /**
     * Set NameColor value
     * @param string $nameColor
     * @return \StructType\StoreFontType
     */
    public function setNameColor($nameColor = null)
    {
        // validation for constraint: string
        if (!is_null($nameColor) && !is_string($nameColor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nameColor, true), gettype($nameColor)), __LINE__);
        }
        $this->NameColor = $nameColor;
        return $this;
    }
    /**
     * Get TitleFace value
     * @return string|null
     */
    public function getTitleFace()
    {
        return $this->TitleFace;
    }
    /**
     * Set TitleFace value
     * @uses \EnumType\StoreFontFaceCodeType::valueIsValid()
     * @uses \EnumType\StoreFontFaceCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $titleFace
     * @return \StructType\StoreFontType
     */
    public function setTitleFace($titleFace = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\StoreFontFaceCodeType::valueIsValid($titleFace)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\StoreFontFaceCodeType', is_array($titleFace) ? implode(', ', $titleFace) : var_export($titleFace, true), implode(', ', \EnumType\StoreFontFaceCodeType::getValidValues())), __LINE__);
        }
        $this->TitleFace = $titleFace;
        return $this;
    }
    /**
     * Get TitleSize value
     * @return string|null
     */
    public function getTitleSize()
    {
        return $this->TitleSize;
    }
    /**
     * Set TitleSize value
     * @uses \EnumType\StoreFontSizeCodeType::valueIsValid()
     * @uses \EnumType\StoreFontSizeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $titleSize
     * @return \StructType\StoreFontType
     */
    public function setTitleSize($titleSize = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\StoreFontSizeCodeType::valueIsValid($titleSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\StoreFontSizeCodeType', is_array($titleSize) ? implode(', ', $titleSize) : var_export($titleSize, true), implode(', ', \EnumType\StoreFontSizeCodeType::getValidValues())), __LINE__);
        }
        $this->TitleSize = $titleSize;
        return $this;
    }
    /**
     * Get TitleColor value
     * @return string|null
     */
    public function getTitleColor()
    {
        return $this->TitleColor;
    }
    /**
     * Set TitleColor value
     * @param string $titleColor
     * @return \StructType\StoreFontType
     */
    public function setTitleColor($titleColor = null)
    {
        // validation for constraint: string
        if (!is_null($titleColor) && !is_string($titleColor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($titleColor, true), gettype($titleColor)), __LINE__);
        }
        $this->TitleColor = $titleColor;
        return $this;
    }
    /**
     * Get DescFace value
     * @return string|null
     */
    public function getDescFace()
    {
        return $this->DescFace;
    }
    /**
     * Set DescFace value
     * @uses \EnumType\StoreFontFaceCodeType::valueIsValid()
     * @uses \EnumType\StoreFontFaceCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $descFace
     * @return \StructType\StoreFontType
     */
    public function setDescFace($descFace = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\StoreFontFaceCodeType::valueIsValid($descFace)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\StoreFontFaceCodeType', is_array($descFace) ? implode(', ', $descFace) : var_export($descFace, true), implode(', ', \EnumType\StoreFontFaceCodeType::getValidValues())), __LINE__);
        }
        $this->DescFace = $descFace;
        return $this;
    }
    /**
     * Get DescSize value
     * @return string|null
     */
    public function getDescSize()
    {
        return $this->DescSize;
    }
    /**
     * Set DescSize value
     * @uses \EnumType\StoreFontSizeCodeType::valueIsValid()
     * @uses \EnumType\StoreFontSizeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $descSize
     * @return \StructType\StoreFontType
     */
    public function setDescSize($descSize = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\StoreFontSizeCodeType::valueIsValid($descSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\StoreFontSizeCodeType', is_array($descSize) ? implode(', ', $descSize) : var_export($descSize, true), implode(', ', \EnumType\StoreFontSizeCodeType::getValidValues())), __LINE__);
        }
        $this->DescSize = $descSize;
        return $this;
    }
    /**
     * Get DescColor value
     * @return string|null
     */
    public function getDescColor()
    {
        return $this->DescColor;
    }
    /**
     * Set DescColor value
     * @param string $descColor
     * @return \StructType\StoreFontType
     */
    public function setDescColor($descColor = null)
    {
        // validation for constraint: string
        if (!is_null($descColor) && !is_string($descColor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descColor, true), gettype($descColor)), __LINE__);
        }
        $this->DescColor = $descColor;
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
     * @return \StructType\StoreFontType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
