<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DataElementSetType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class DataElementSetType extends AbstractStructBase
{
    /**
     * The DataElement
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $DataElement;
    /**
     * The DataElementID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $DataElementID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * The attributeSetID
     * Meta information extracted from the WSDL
     * - documentation: This attribute is deprecated.
     * @var int
     */
    public $attributeSetID;
    /**
     * Constructor method for DataElementSetType
     * @uses DataElementSetType::setDataElement()
     * @uses DataElementSetType::setDataElementID()
     * @uses DataElementSetType::setAny()
     * @uses DataElementSetType::setAttributeSetID()
     * @param string $dataElement
     * @param int $dataElementID
     * @param \DOMDocument $any
     * @param int $attributeSetID
     */
    public function __construct($dataElement = null, $dataElementID = null, \DOMDocument $any = null, $attributeSetID = null)
    {
        $this
            ->setDataElement($dataElement)
            ->setDataElementID($dataElementID)
            ->setAny($any)
            ->setAttributeSetID($attributeSetID);
    }
    /**
     * Get DataElement value
     * @return string|null
     */
    public function getDataElement()
    {
        return $this->DataElement;
    }
    /**
     * Set DataElement value
     * @param string $dataElement
     * @return \StructType\DataElementSetType
     */
    public function setDataElement($dataElement = null)
    {
        // validation for constraint: string
        if (!is_null($dataElement) && !is_string($dataElement)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataElement, true), gettype($dataElement)), __LINE__);
        }
        $this->DataElement = $dataElement;
        return $this;
    }
    /**
     * Get DataElementID value
     * @return int|null
     */
    public function getDataElementID()
    {
        return $this->DataElementID;
    }
    /**
     * Set DataElementID value
     * @param int $dataElementID
     * @return \StructType\DataElementSetType
     */
    public function setDataElementID($dataElementID = null)
    {
        // validation for constraint: int
        if (!is_null($dataElementID) && !(is_int($dataElementID) || ctype_digit($dataElementID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dataElementID, true), gettype($dataElementID)), __LINE__);
        }
        $this->DataElementID = $dataElementID;
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
     * @return \StructType\DataElementSetType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
    /**
     * Get attributeSetID value
     * @return int|null
     */
    public function getAttributeSetID()
    {
        return $this->attributeSetID;
    }
    /**
     * Set attributeSetID value
     * @param int $attributeSetID
     * @return \StructType\DataElementSetType
     */
    public function setAttributeSetID($attributeSetID = null)
    {
        // validation for constraint: int
        if (!is_null($attributeSetID) && !(is_int($attributeSetID) || ctype_digit($attributeSetID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($attributeSetID, true), gettype($attributeSetID)), __LINE__);
        }
        $this->attributeSetID = $attributeSetID;
        return $this;
    }
}
