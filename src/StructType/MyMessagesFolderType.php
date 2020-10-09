<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyMessagesFolderType StructType
 * Meta information extracted from the WSDL
 * - documentation: Details relating to a My Messages folder.
 * @subpackage Structs
 */
class MyMessagesFolderType extends AbstractStructBase
{
    /**
     * The FolderID
     * Meta information extracted from the WSDL
     * - documentation: An ID that uniquely identifies a My Messages folder.
     * - minOccurs: 0
     * @var int
     */
    public $FolderID;
    /**
     * The FolderName
     * Meta information extracted from the WSDL
     * - documentation: The name of a specified My Messages folder.
     * - minOccurs: 0
     * @var string
     */
    public $FolderName;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MyMessagesFolderType
     * @uses MyMessagesFolderType::setFolderID()
     * @uses MyMessagesFolderType::setFolderName()
     * @uses MyMessagesFolderType::setAny()
     * @param int $folderID
     * @param string $folderName
     * @param \DOMDocument $any
     */
    public function __construct($folderID = null, $folderName = null, \DOMDocument $any = null)
    {
        $this
            ->setFolderID($folderID)
            ->setFolderName($folderName)
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
     * @return \StructType\MyMessagesFolderType
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
     * @return \StructType\MyMessagesFolderType
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
     * @return \StructType\MyMessagesFolderType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
