<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PictureManagerPictureType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class PictureManagerPictureType extends AbstractStructBase
{
    /**
     * The PictureURL
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $PictureURL;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Date
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Date;
    /**
     * The DisplayFormat
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\PictureManagerPictureDisplayType[]
     */
    public $DisplayFormat;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PictureManagerPictureType
     * @uses PictureManagerPictureType::setPictureURL()
     * @uses PictureManagerPictureType::setName()
     * @uses PictureManagerPictureType::setDate()
     * @uses PictureManagerPictureType::setDisplayFormat()
     * @uses PictureManagerPictureType::setAny()
     * @param string $pictureURL
     * @param string $name
     * @param string $date
     * @param \StructType\PictureManagerPictureDisplayType[] $displayFormat
     * @param \DOMDocument $any
     */
    public function __construct($pictureURL = null, $name = null, $date = null, array $displayFormat = array(), \DOMDocument $any = null)
    {
        $this
            ->setPictureURL($pictureURL)
            ->setName($name)
            ->setDate($date)
            ->setDisplayFormat($displayFormat)
            ->setAny($any);
    }
    /**
     * Get PictureURL value
     * @return string|null
     */
    public function getPictureURL()
    {
        return $this->PictureURL;
    }
    /**
     * Set PictureURL value
     * @param string $pictureURL
     * @return \StructType\PictureManagerPictureType
     */
    public function setPictureURL($pictureURL = null)
    {
        // validation for constraint: string
        if (!is_null($pictureURL) && !is_string($pictureURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pictureURL, true), gettype($pictureURL)), __LINE__);
        }
        $this->PictureURL = $pictureURL;
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
     * @return \StructType\PictureManagerPictureType
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
     * Get Date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \StructType\PictureManagerPictureType
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->Date = $date;
        return $this;
    }
    /**
     * Get DisplayFormat value
     * @return \StructType\PictureManagerPictureDisplayType[]|null
     */
    public function getDisplayFormat()
    {
        return $this->DisplayFormat;
    }
    /**
     * This method is responsible for validating the values passed to the setDisplayFormat method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDisplayFormat method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDisplayFormatForArrayConstraintsFromSetDisplayFormat(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $pictureManagerPictureTypeDisplayFormatItem) {
            // validation for constraint: itemType
            if (!$pictureManagerPictureTypeDisplayFormatItem instanceof \StructType\PictureManagerPictureDisplayType) {
                $invalidValues[] = is_object($pictureManagerPictureTypeDisplayFormatItem) ? get_class($pictureManagerPictureTypeDisplayFormatItem) : sprintf('%s(%s)', gettype($pictureManagerPictureTypeDisplayFormatItem), var_export($pictureManagerPictureTypeDisplayFormatItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DisplayFormat property can only contain items of type \StructType\PictureManagerPictureDisplayType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DisplayFormat value
     * @throws \InvalidArgumentException
     * @param \StructType\PictureManagerPictureDisplayType[] $displayFormat
     * @return \StructType\PictureManagerPictureType
     */
    public function setDisplayFormat(array $displayFormat = array())
    {
        // validation for constraint: array
        if ('' !== ($displayFormatArrayErrorMessage = self::validateDisplayFormatForArrayConstraintsFromSetDisplayFormat($displayFormat))) {
            throw new \InvalidArgumentException($displayFormatArrayErrorMessage, __LINE__);
        }
        $this->DisplayFormat = $displayFormat;
        return $this;
    }
    /**
     * Add item to DisplayFormat value
     * @throws \InvalidArgumentException
     * @param \StructType\PictureManagerPictureDisplayType $item
     * @return \StructType\PictureManagerPictureType
     */
    public function addToDisplayFormat(\StructType\PictureManagerPictureDisplayType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PictureManagerPictureDisplayType) {
            throw new \InvalidArgumentException(sprintf('The DisplayFormat property can only contain items of type \StructType\PictureManagerPictureDisplayType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DisplayFormat[] = $item;
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
     * @return \StructType\PictureManagerPictureType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
