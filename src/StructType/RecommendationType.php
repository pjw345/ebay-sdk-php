<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecommendationType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type was replaced by <b>ListingRecommendationType</b>
 * @subpackage Structs
 */
class RecommendationType extends AbstractStructBase
{
    /**
     * The FieldGroup
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FieldGroup;
    /**
     * The FieldName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FieldName;
    /**
     * The RecommendationCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RecommendationCode;
    /**
     * The RecommendedValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $RecommendedValue;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Message;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for RecommendationType
     * @uses RecommendationType::setFieldGroup()
     * @uses RecommendationType::setFieldName()
     * @uses RecommendationType::setRecommendationCode()
     * @uses RecommendationType::setRecommendedValue()
     * @uses RecommendationType::setMessage()
     * @uses RecommendationType::setAny()
     * @param string $fieldGroup
     * @param string $fieldName
     * @param string $recommendationCode
     * @param string[] $recommendedValue
     * @param string $message
     * @param \DOMDocument $any
     */
    public function __construct($fieldGroup = null, $fieldName = null, $recommendationCode = null, array $recommendedValue = array(), $message = null, \DOMDocument $any = null)
    {
        $this
            ->setFieldGroup($fieldGroup)
            ->setFieldName($fieldName)
            ->setRecommendationCode($recommendationCode)
            ->setRecommendedValue($recommendedValue)
            ->setMessage($message)
            ->setAny($any);
    }
    /**
     * Get FieldGroup value
     * @return string|null
     */
    public function getFieldGroup()
    {
        return $this->FieldGroup;
    }
    /**
     * Set FieldGroup value
     * @param string $fieldGroup
     * @return \StructType\RecommendationType
     */
    public function setFieldGroup($fieldGroup = null)
    {
        // validation for constraint: string
        if (!is_null($fieldGroup) && !is_string($fieldGroup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fieldGroup, true), gettype($fieldGroup)), __LINE__);
        }
        $this->FieldGroup = $fieldGroup;
        return $this;
    }
    /**
     * Get FieldName value
     * @return string|null
     */
    public function getFieldName()
    {
        return $this->FieldName;
    }
    /**
     * Set FieldName value
     * @param string $fieldName
     * @return \StructType\RecommendationType
     */
    public function setFieldName($fieldName = null)
    {
        // validation for constraint: string
        if (!is_null($fieldName) && !is_string($fieldName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fieldName, true), gettype($fieldName)), __LINE__);
        }
        $this->FieldName = $fieldName;
        return $this;
    }
    /**
     * Get RecommendationCode value
     * @return string|null
     */
    public function getRecommendationCode()
    {
        return $this->RecommendationCode;
    }
    /**
     * Set RecommendationCode value
     * @param string $recommendationCode
     * @return \StructType\RecommendationType
     */
    public function setRecommendationCode($recommendationCode = null)
    {
        // validation for constraint: string
        if (!is_null($recommendationCode) && !is_string($recommendationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recommendationCode, true), gettype($recommendationCode)), __LINE__);
        }
        $this->RecommendationCode = $recommendationCode;
        return $this;
    }
    /**
     * Get RecommendedValue value
     * @return string[]|null
     */
    public function getRecommendedValue()
    {
        return $this->RecommendedValue;
    }
    /**
     * This method is responsible for validating the values passed to the setRecommendedValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRecommendedValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRecommendedValueForArrayConstraintsFromSetRecommendedValue(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $recommendationTypeRecommendedValueItem) {
            // validation for constraint: itemType
            if (!is_string($recommendationTypeRecommendedValueItem)) {
                $invalidValues[] = is_object($recommendationTypeRecommendedValueItem) ? get_class($recommendationTypeRecommendedValueItem) : sprintf('%s(%s)', gettype($recommendationTypeRecommendedValueItem), var_export($recommendationTypeRecommendedValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RecommendedValue property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RecommendedValue value
     * @throws \InvalidArgumentException
     * @param string[] $recommendedValue
     * @return \StructType\RecommendationType
     */
    public function setRecommendedValue(array $recommendedValue = array())
    {
        // validation for constraint: array
        if ('' !== ($recommendedValueArrayErrorMessage = self::validateRecommendedValueForArrayConstraintsFromSetRecommendedValue($recommendedValue))) {
            throw new \InvalidArgumentException($recommendedValueArrayErrorMessage, __LINE__);
        }
        $this->RecommendedValue = $recommendedValue;
        return $this;
    }
    /**
     * Add item to RecommendedValue value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\RecommendationType
     */
    public function addToRecommendedValue($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The RecommendedValue property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->RecommendedValue[] = $item;
        return $this;
    }
    /**
     * Get Message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \StructType\RecommendationType
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->Message = $message;
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
     * @return \StructType\RecommendationType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
