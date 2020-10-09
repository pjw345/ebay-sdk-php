<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for XSLFileType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class XSLFileType extends AbstractStructBase
{
    /**
     * The FileName
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $FileName;
    /**
     * The FileVersion
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $FileVersion;
    /**
     * The FileContent
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $FileContent;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for XSLFileType
     * @uses XSLFileType::setFileName()
     * @uses XSLFileType::setFileVersion()
     * @uses XSLFileType::setFileContent()
     * @uses XSLFileType::setAny()
     * @param string $fileName
     * @param string $fileVersion
     * @param string $fileContent
     * @param \DOMDocument $any
     */
    public function __construct($fileName = null, $fileVersion = null, $fileContent = null, \DOMDocument $any = null)
    {
        $this
            ->setFileName($fileName)
            ->setFileVersion($fileVersion)
            ->setFileContent($fileContent)
            ->setAny($any);
    }
    /**
     * Get FileName value
     * @return string|null
     */
    public function getFileName()
    {
        return $this->FileName;
    }
    /**
     * Set FileName value
     * @param string $fileName
     * @return \StructType\XSLFileType
     */
    public function setFileName($fileName = null)
    {
        // validation for constraint: string
        if (!is_null($fileName) && !is_string($fileName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileName, true), gettype($fileName)), __LINE__);
        }
        $this->FileName = $fileName;
        return $this;
    }
    /**
     * Get FileVersion value
     * @return string|null
     */
    public function getFileVersion()
    {
        return $this->FileVersion;
    }
    /**
     * Set FileVersion value
     * @param string $fileVersion
     * @return \StructType\XSLFileType
     */
    public function setFileVersion($fileVersion = null)
    {
        // validation for constraint: string
        if (!is_null($fileVersion) && !is_string($fileVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileVersion, true), gettype($fileVersion)), __LINE__);
        }
        $this->FileVersion = $fileVersion;
        return $this;
    }
    /**
     * Get FileContent value
     * @return string|null
     */
    public function getFileContent()
    {
        return $this->FileContent;
    }
    /**
     * Set FileContent value
     * @param string $fileContent
     * @return \StructType\XSLFileType
     */
    public function setFileContent($fileContent = null)
    {
        // validation for constraint: string
        if (!is_null($fileContent) && !is_string($fileContent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileContent, true), gettype($fileContent)), __LINE__);
        }
        $this->FileContent = $fileContent;
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
     * @return \StructType\XSLFileType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
