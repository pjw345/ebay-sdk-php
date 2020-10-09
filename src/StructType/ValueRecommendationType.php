<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValueRecommendationType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>ValueRecommendation</b> container to provide recommended names for recommended item specifics.
 * @subpackage Structs
 */
class ValueRecommendationType extends AbstractStructBase
{
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - documentation: A recommended value for the corresponding, recommended Item Specific. Only returned when a recommended value is available.
     * - minOccurs: 0
     * @var string
     */
    public $Value;
    /**
     * The ValidationRules
     * Meta information extracted from the WSDL
     * - documentation: Constraints that eBay places on this Item Specific value.<br> <br> Only returned when you configure your request to include relationships and/or confidence, and a recommended value is available. (Not returned when
     * <b>ExcludeRelationships</b> is <code>true</code> and <b>IncludeConfidence</b> is <code>false</code>.)
     * - minOccurs: 0
     * @var \StructType\RecommendationValidationRulesType
     */
    public $ValidationRules;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ValueRecommendationType
     * @uses ValueRecommendationType::setValue()
     * @uses ValueRecommendationType::setValidationRules()
     * @uses ValueRecommendationType::setAny()
     * @param string $value
     * @param \StructType\RecommendationValidationRulesType $validationRules
     * @param \DOMDocument $any
     */
    public function __construct($value = null, \StructType\RecommendationValidationRulesType $validationRules = null, \DOMDocument $any = null)
    {
        $this
            ->setValue($value)
            ->setValidationRules($validationRules)
            ->setAny($any);
    }
    /**
     * Get Value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \StructType\ValueRecommendationType
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->Value = $value;
        return $this;
    }
    /**
     * Get ValidationRules value
     * @return \StructType\RecommendationValidationRulesType|null
     */
    public function getValidationRules()
    {
        return $this->ValidationRules;
    }
    /**
     * Set ValidationRules value
     * @param \StructType\RecommendationValidationRulesType $validationRules
     * @return \StructType\ValueRecommendationType
     */
    public function setValidationRules(\StructType\RecommendationValidationRulesType $validationRules = null)
    {
        $this->ValidationRules = $validationRules;
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
     * @return \StructType\ValueRecommendationType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
