<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NameValueRelationshipType StructType
 * Meta information extracted from the WSDL
 * - documentation: Information about a parent name-value pair that indicates the relationships between Item Specifics.
 * @subpackage Structs
 */
class NameValueRelationshipType extends AbstractStructBase
{
    /**
     * The ParentName
     * Meta information extracted from the WSDL
     * - documentation: The name of another Item Specific that the current value depends on. For example, in a clothing category, "Size Type" could be recommended as a parent of Size.
     * - minOccurs: 0
     * @var string
     */
    public $ParentName;
    /**
     * The ParentValue
     * Meta information extracted from the WSDL
     * - documentation: The value of another Item Specific that the current value depends on. For example, in a clothing category, if "Size Type" is the <b>ParentName</b>, then "Petite" could be recommended as a parent value for <b>Size</b> =
     * <code>Medium</code>.
     * - minOccurs: 0
     * @var string
     */
    public $ParentValue;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for NameValueRelationshipType
     * @uses NameValueRelationshipType::setParentName()
     * @uses NameValueRelationshipType::setParentValue()
     * @uses NameValueRelationshipType::setAny()
     * @param string $parentName
     * @param string $parentValue
     * @param \DOMDocument $any
     */
    public function __construct($parentName = null, $parentValue = null, \DOMDocument $any = null)
    {
        $this
            ->setParentName($parentName)
            ->setParentValue($parentValue)
            ->setAny($any);
    }
    /**
     * Get ParentName value
     * @return string|null
     */
    public function getParentName()
    {
        return $this->ParentName;
    }
    /**
     * Set ParentName value
     * @param string $parentName
     * @return \StructType\NameValueRelationshipType
     */
    public function setParentName($parentName = null)
    {
        // validation for constraint: string
        if (!is_null($parentName) && !is_string($parentName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parentName, true), gettype($parentName)), __LINE__);
        }
        $this->ParentName = $parentName;
        return $this;
    }
    /**
     * Get ParentValue value
     * @return string|null
     */
    public function getParentValue()
    {
        return $this->ParentValue;
    }
    /**
     * Set ParentValue value
     * @param string $parentValue
     * @return \StructType\NameValueRelationshipType
     */
    public function setParentValue($parentValue = null)
    {
        // validation for constraint: string
        if (!is_null($parentValue) && !is_string($parentValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parentValue, true), gettype($parentValue)), __LINE__);
        }
        $this->ParentValue = $parentValue;
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
     * @return \StructType\NameValueRelationshipType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
