<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerFolderDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains information about a Selling Manager folder.
 * @subpackage Structs
 */
class SellingManagerFolderDetailsType extends AbstractStructBase
{
    /**
     * The FolderID
     * Meta information extracted from the WSDL
     * - documentation: Unique ID of the folder. Originally returned in the AddSellingManagerInventoryFolder response.
     * - minOccurs: 0
     * @var int
     */
    public $FolderID;
    /**
     * The ParentFolderID
     * Meta information extracted from the WSDL
     * - documentation: Unique ID of the parent folder. If it exists, it is returned.
     * - minOccurs: 0
     * @var int
     */
    public $ParentFolderID;
    /**
     * The FolderLevel
     * Meta information extracted from the WSDL
     * - documentation: Level of this folder in the folder tree hierarchy. Root folder is at level 1.
     * - minOccurs: 0
     * @var int
     */
    public $FolderLevel;
    /**
     * The FolderName
     * Meta information extracted from the WSDL
     * - documentation: Name assigned to the folder by the user in the AddSellingManagerInventoryFolder or the ReviseSellingManagerInventoryFolder call.
     * - minOccurs: 0
     * @var string
     */
    public $FolderName;
    /**
     * The FolderComment
     * Meta information extracted from the WSDL
     * - documentation: Comments associated with the folder. Returned if it exists.
     * - minOccurs: 0
     * @var string
     */
    public $FolderComment;
    /**
     * The ChildFolder
     * Meta information extracted from the WSDL
     * - documentation: Container for sub-folder information. Returned if requested.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\SellingManagerFolderDetailsType[]
     */
    public $ChildFolder;
    /**
     * The CreationTime
     * Meta information extracted from the WSDL
     * - documentation: Date when this folder was created.
     * - minOccurs: 0
     * @var string
     */
    public $CreationTime;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellingManagerFolderDetailsType
     * @uses SellingManagerFolderDetailsType::setFolderID()
     * @uses SellingManagerFolderDetailsType::setParentFolderID()
     * @uses SellingManagerFolderDetailsType::setFolderLevel()
     * @uses SellingManagerFolderDetailsType::setFolderName()
     * @uses SellingManagerFolderDetailsType::setFolderComment()
     * @uses SellingManagerFolderDetailsType::setChildFolder()
     * @uses SellingManagerFolderDetailsType::setCreationTime()
     * @uses SellingManagerFolderDetailsType::setAny()
     * @param int $folderID
     * @param int $parentFolderID
     * @param int $folderLevel
     * @param string $folderName
     * @param string $folderComment
     * @param \StructType\SellingManagerFolderDetailsType[] $childFolder
     * @param string $creationTime
     * @param \DOMDocument $any
     */
    public function __construct($folderID = null, $parentFolderID = null, $folderLevel = null, $folderName = null, $folderComment = null, array $childFolder = array(), $creationTime = null, \DOMDocument $any = null)
    {
        $this
            ->setFolderID($folderID)
            ->setParentFolderID($parentFolderID)
            ->setFolderLevel($folderLevel)
            ->setFolderName($folderName)
            ->setFolderComment($folderComment)
            ->setChildFolder($childFolder)
            ->setCreationTime($creationTime)
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
     * @return \StructType\SellingManagerFolderDetailsType
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
     * Get ParentFolderID value
     * @return int|null
     */
    public function getParentFolderID()
    {
        return $this->ParentFolderID;
    }
    /**
     * Set ParentFolderID value
     * @param int $parentFolderID
     * @return \StructType\SellingManagerFolderDetailsType
     */
    public function setParentFolderID($parentFolderID = null)
    {
        // validation for constraint: int
        if (!is_null($parentFolderID) && !(is_int($parentFolderID) || ctype_digit($parentFolderID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parentFolderID, true), gettype($parentFolderID)), __LINE__);
        }
        $this->ParentFolderID = $parentFolderID;
        return $this;
    }
    /**
     * Get FolderLevel value
     * @return int|null
     */
    public function getFolderLevel()
    {
        return $this->FolderLevel;
    }
    /**
     * Set FolderLevel value
     * @param int $folderLevel
     * @return \StructType\SellingManagerFolderDetailsType
     */
    public function setFolderLevel($folderLevel = null)
    {
        // validation for constraint: int
        if (!is_null($folderLevel) && !(is_int($folderLevel) || ctype_digit($folderLevel))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($folderLevel, true), gettype($folderLevel)), __LINE__);
        }
        $this->FolderLevel = $folderLevel;
        return $this;
    }
    /**
     * Get FolderName value
     * @return string|null
     */
    public function getFolderName()
    {
        return $this->FolderName;
    }
    /**
     * Set FolderName value
     * @param string $folderName
     * @return \StructType\SellingManagerFolderDetailsType
     */
    public function setFolderName($folderName = null)
    {
        // validation for constraint: string
        if (!is_null($folderName) && !is_string($folderName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($folderName, true), gettype($folderName)), __LINE__);
        }
        $this->FolderName = $folderName;
        return $this;
    }
    /**
     * Get FolderComment value
     * @return string|null
     */
    public function getFolderComment()
    {
        return $this->FolderComment;
    }
    /**
     * Set FolderComment value
     * @param string $folderComment
     * @return \StructType\SellingManagerFolderDetailsType
     */
    public function setFolderComment($folderComment = null)
    {
        // validation for constraint: string
        if (!is_null($folderComment) && !is_string($folderComment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($folderComment, true), gettype($folderComment)), __LINE__);
        }
        $this->FolderComment = $folderComment;
        return $this;
    }
    /**
     * Get ChildFolder value
     * @return \StructType\SellingManagerFolderDetailsType[]|null
     */
    public function getChildFolder()
    {
        return $this->ChildFolder;
    }
    /**
     * This method is responsible for validating the values passed to the setChildFolder method
     * This method is willingly generated in order to preserve the one-line inline validation within the setChildFolder method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateChildFolderForArrayConstraintsFromSetChildFolder(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sellingManagerFolderDetailsTypeChildFolderItem) {
            // validation for constraint: itemType
            if (!$sellingManagerFolderDetailsTypeChildFolderItem instanceof \StructType\SellingManagerFolderDetailsType) {
                $invalidValues[] = is_object($sellingManagerFolderDetailsTypeChildFolderItem) ? get_class($sellingManagerFolderDetailsTypeChildFolderItem) : sprintf('%s(%s)', gettype($sellingManagerFolderDetailsTypeChildFolderItem), var_export($sellingManagerFolderDetailsTypeChildFolderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ChildFolder property can only contain items of type \StructType\SellingManagerFolderDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ChildFolder value
     * @throws \InvalidArgumentException
     * @param \StructType\SellingManagerFolderDetailsType[] $childFolder
     * @return \StructType\SellingManagerFolderDetailsType
     */
    public function setChildFolder(array $childFolder = array())
    {
        // validation for constraint: array
        if ('' !== ($childFolderArrayErrorMessage = self::validateChildFolderForArrayConstraintsFromSetChildFolder($childFolder))) {
            throw new \InvalidArgumentException($childFolderArrayErrorMessage, __LINE__);
        }
        $this->ChildFolder = $childFolder;
        return $this;
    }
    /**
     * Add item to ChildFolder value
     * @throws \InvalidArgumentException
     * @param \StructType\SellingManagerFolderDetailsType $item
     * @return \StructType\SellingManagerFolderDetailsType
     */
    public function addToChildFolder(\StructType\SellingManagerFolderDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\SellingManagerFolderDetailsType) {
            throw new \InvalidArgumentException(sprintf('The ChildFolder property can only contain items of type \StructType\SellingManagerFolderDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ChildFolder[] = $item;
        return $this;
    }
    /**
     * Get CreationTime value
     * @return string|null
     */
    public function getCreationTime()
    {
        return $this->CreationTime;
    }
    /**
     * Set CreationTime value
     * @param string $creationTime
     * @return \StructType\SellingManagerFolderDetailsType
     */
    public function setCreationTime($creationTime = null)
    {
        // validation for constraint: string
        if (!is_null($creationTime) && !is_string($creationTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTime, true), gettype($creationTime)), __LINE__);
        }
        $this->CreationTime = $creationTime;
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
     * @return \StructType\SellingManagerFolderDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
