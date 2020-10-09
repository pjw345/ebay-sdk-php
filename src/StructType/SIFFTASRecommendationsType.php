<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SIFFTASRecommendationsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class SIFFTASRecommendationsType extends AbstractStructBase
{
    /**
     * The AttributeSetArray
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \ArrayType\AttributeSetArrayType
     */
    public $AttributeSetArray;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SIFFTASRecommendationsType
     * @uses SIFFTASRecommendationsType::setAttributeSetArray()
     * @uses SIFFTASRecommendationsType::setAny()
     * @param \ArrayType\AttributeSetArrayType $attributeSetArray
     * @param \DOMDocument $any
     */
    public function __construct(\ArrayType\AttributeSetArrayType $attributeSetArray = null, \DOMDocument $any = null)
    {
        $this
            ->setAttributeSetArray($attributeSetArray)
            ->setAny($any);
    }
    /**
     * Get AttributeSetArray value
     * @return \ArrayType\AttributeSetArrayType|null
     */
    public function getAttributeSetArray()
    {
        return $this->AttributeSetArray;
    }
    /**
     * Set AttributeSetArray value
     * @param \ArrayType\AttributeSetArrayType $attributeSetArray
     * @return \StructType\SIFFTASRecommendationsType
     */
    public function setAttributeSetArray(\ArrayType\AttributeSetArrayType $attributeSetArray = null)
    {
        $this->AttributeSetArray = $attributeSetArray;
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
     * @return \StructType\SIFFTASRecommendationsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
