<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnitOfMeasurementType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class UnitOfMeasurementType extends AbstractStructBase
{
    /**
     * The AlternateText
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $AlternateText;
    /**
     * The SuggestedText
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $SuggestedText;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for UnitOfMeasurementType
     * @uses UnitOfMeasurementType::setAlternateText()
     * @uses UnitOfMeasurementType::setSuggestedText()
     * @uses UnitOfMeasurementType::setAny()
     * @param string[] $alternateText
     * @param string $suggestedText
     * @param \DOMDocument $any
     */
    public function __construct(array $alternateText = array(), $suggestedText = null, \DOMDocument $any = null)
    {
        $this
            ->setAlternateText($alternateText)
            ->setSuggestedText($suggestedText)
            ->setAny($any);
    }
    /**
     * Get AlternateText value
     * @return string[]|null
     */
    public function getAlternateText()
    {
        return $this->AlternateText;
    }
    /**
     * This method is responsible for validating the values passed to the setAlternateText method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAlternateText method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAlternateTextForArrayConstraintsFromSetAlternateText(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $unitOfMeasurementTypeAlternateTextItem) {
            // validation for constraint: itemType
            if (!is_string($unitOfMeasurementTypeAlternateTextItem)) {
                $invalidValues[] = is_object($unitOfMeasurementTypeAlternateTextItem) ? get_class($unitOfMeasurementTypeAlternateTextItem) : sprintf('%s(%s)', gettype($unitOfMeasurementTypeAlternateTextItem), var_export($unitOfMeasurementTypeAlternateTextItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AlternateText property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set AlternateText value
     * @throws \InvalidArgumentException
     * @param string[] $alternateText
     * @return \StructType\UnitOfMeasurementType
     */
    public function setAlternateText(array $alternateText = array())
    {
        // validation for constraint: array
        if ('' !== ($alternateTextArrayErrorMessage = self::validateAlternateTextForArrayConstraintsFromSetAlternateText($alternateText))) {
            throw new \InvalidArgumentException($alternateTextArrayErrorMessage, __LINE__);
        }
        $this->AlternateText = $alternateText;
        return $this;
    }
    /**
     * Add item to AlternateText value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\UnitOfMeasurementType
     */
    public function addToAlternateText($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The AlternateText property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AlternateText[] = $item;
        return $this;
    }
    /**
     * Get SuggestedText value
     * @return string|null
     */
    public function getSuggestedText()
    {
        return $this->SuggestedText;
    }
    /**
     * Set SuggestedText value
     * @param string $suggestedText
     * @return \StructType\UnitOfMeasurementType
     */
    public function setSuggestedText($suggestedText = null)
    {
        // validation for constraint: string
        if (!is_null($suggestedText) && !is_string($suggestedText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($suggestedText, true), gettype($suggestedText)), __LINE__);
        }
        $this->SuggestedText = $suggestedText;
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
     * @return \StructType\UnitOfMeasurementType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
