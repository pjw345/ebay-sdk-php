<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PictureManagerPictureDisplayType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class PictureManagerPictureDisplayType extends AbstractStructBase
{
    /**
     * The DisplayType
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $DisplayType;
    /**
     * The URL
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $URL;
    /**
     * The Size
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $Size;
    /**
     * The Height
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $Height;
    /**
     * The Width
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $Width;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PictureManagerPictureDisplayType
     * @uses PictureManagerPictureDisplayType::setDisplayType()
     * @uses PictureManagerPictureDisplayType::setURL()
     * @uses PictureManagerPictureDisplayType::setSize()
     * @uses PictureManagerPictureDisplayType::setHeight()
     * @uses PictureManagerPictureDisplayType::setWidth()
     * @uses PictureManagerPictureDisplayType::setAny()
     * @param string $displayType
     * @param string $uRL
     * @param int $size
     * @param int $height
     * @param int $width
     * @param \DOMDocument $any
     */
    public function __construct($displayType = null, $uRL = null, $size = null, $height = null, $width = null, \DOMDocument $any = null)
    {
        $this
            ->setDisplayType($displayType)
            ->setURL($uRL)
            ->setSize($size)
            ->setHeight($height)
            ->setWidth($width)
            ->setAny($any);
    }
    /**
     * Get DisplayType value
     * @return string|null
     */
    public function getDisplayType()
    {
        return $this->DisplayType;
    }
    /**
     * Set DisplayType value
     * @uses \EnumType\PictureManagerPictureDisplayTypeCodeType::valueIsValid()
     * @uses \EnumType\PictureManagerPictureDisplayTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $displayType
     * @return \StructType\PictureManagerPictureDisplayType
     */
    public function setDisplayType($displayType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PictureManagerPictureDisplayTypeCodeType::valueIsValid($displayType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\PictureManagerPictureDisplayTypeCodeType', is_array($displayType) ? implode(', ', $displayType) : var_export($displayType, true), implode(', ', \EnumType\PictureManagerPictureDisplayTypeCodeType::getValidValues())), __LINE__);
        }
        $this->DisplayType = $displayType;
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
     * @return \StructType\PictureManagerPictureDisplayType
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
     * Get Size value
     * @return int|null
     */
    public function getSize()
    {
        return $this->Size;
    }
    /**
     * Set Size value
     * @param int $size
     * @return \StructType\PictureManagerPictureDisplayType
     */
    public function setSize($size = null)
    {
        // validation for constraint: int
        if (!is_null($size) && !(is_int($size) || ctype_digit($size))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($size, true), gettype($size)), __LINE__);
        }
        $this->Size = $size;
        return $this;
    }
    /**
     * Get Height value
     * @return int|null
     */
    public function getHeight()
    {
        return $this->Height;
    }
    /**
     * Set Height value
     * @param int $height
     * @return \StructType\PictureManagerPictureDisplayType
     */
    public function setHeight($height = null)
    {
        // validation for constraint: int
        if (!is_null($height) && !(is_int($height) || ctype_digit($height))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($height, true), gettype($height)), __LINE__);
        }
        $this->Height = $height;
        return $this;
    }
    /**
     * Get Width value
     * @return int|null
     */
    public function getWidth()
    {
        return $this->Width;
    }
    /**
     * Set Width value
     * @param int $width
     * @return \StructType\PictureManagerPictureDisplayType
     */
    public function setWidth($width = null)
    {
        // validation for constraint: int
        if (!is_null($width) && !(is_int($width) || ctype_digit($width))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($width, true), gettype($width)), __LINE__);
        }
        $this->Width = $width;
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
     * @return \StructType\PictureManagerPictureDisplayType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
