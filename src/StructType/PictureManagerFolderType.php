<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PictureManagerFolderType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class PictureManagerFolderType extends AbstractStructBase
{
    /**
     * The FolderID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $FolderID;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Picture
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\PictureManagerPictureType[]
     */
    public $Picture;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PictureManagerFolderType
     * @uses PictureManagerFolderType::setFolderID()
     * @uses PictureManagerFolderType::setName()
     * @uses PictureManagerFolderType::setPicture()
     * @uses PictureManagerFolderType::setAny()
     * @param int $folderID
     * @param string $name
     * @param \StructType\PictureManagerPictureType[] $picture
     * @param \DOMDocument $any
     */
    public function __construct($folderID = null, $name = null, array $picture = array(), \DOMDocument $any = null)
    {
        $this
            ->setFolderID($folderID)
            ->setName($name)
            ->setPicture($picture)
            ->setAny($any);
    }
    /**
     * Get FolderID value
     * @return int|null
     */
    public function getFolderID()
    {
        return $this->FolderID;
    }
    /**
     * Set FolderID value
     * @param int $folderID
     * @return \StructType\PictureManagerFolderType
     */
    public function setFolderID($folderID = null)
    {
        // validation for constraint: int
        if (!is_null($folderID) && !(is_int($folderID) || ctype_digit($folderID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($folderID, true), gettype($folderID)), __LINE__);
        }
        $this->FolderID = $folderID;
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
     * @return \StructType\PictureManagerFolderType
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
     * Get Picture value
     * @return \StructType\PictureManagerPictureType[]|null
     */
    public function getPicture()
    {
        return $this->Picture;
    }
    /**
     * This method is responsible for validating the values passed to the setPicture method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPicture method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePictureForArrayConstraintsFromSetPicture(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $pictureManagerFolderTypePictureItem) {
            // validation for constraint: itemType
            if (!$pictureManagerFolderTypePictureItem instanceof \StructType\PictureManagerPictureType) {
                $invalidValues[] = is_object($pictureManagerFolderTypePictureItem) ? get_class($pictureManagerFolderTypePictureItem) : sprintf('%s(%s)', gettype($pictureManagerFolderTypePictureItem), var_export($pictureManagerFolderTypePictureItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Picture property can only contain items of type \StructType\PictureManagerPictureType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Picture value
     * @throws \InvalidArgumentException
     * @param \StructType\PictureManagerPictureType[] $picture
     * @return \StructType\PictureManagerFolderType
     */
    public function setPicture(array $picture = array())
    {
        // validation for constraint: array
        if ('' !== ($pictureArrayErrorMessage = self::validatePictureForArrayConstraintsFromSetPicture($picture))) {
            throw new \InvalidArgumentException($pictureArrayErrorMessage, __LINE__);
        }
        $this->Picture = $picture;
        return $this;
    }
    /**
     * Add item to Picture value
     * @throws \InvalidArgumentException
     * @param \StructType\PictureManagerPictureType $item
     * @return \StructType\PictureManagerFolderType
     */
    public function addToPicture(\StructType\PictureManagerPictureType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PictureManagerPictureType) {
            throw new \InvalidArgumentException(sprintf('The Picture property can only contain items of type \StructType\PictureManagerPictureType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Picture[] = $item;
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
     * @return \StructType\PictureManagerFolderType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
