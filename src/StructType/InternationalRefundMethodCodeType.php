<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InternationalRefundMethodCodeType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type defines the available options the seller has for handling international returns.
 * @subpackage Structs
 */
class InternationalRefundMethodCodeType extends AbstractStructBase
{
    /**
     * The InternationalRefundMethod
     * Meta information extracted from the WSDL
     * - documentation: Defines the available options the seller has for handling international returns in the specified marketplace and category.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $InternationalRefundMethod;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for InternationalRefundMethodCodeType
     * @uses InternationalRefundMethodCodeType::setInternationalRefundMethod()
     * @uses InternationalRefundMethodCodeType::setAny()
     * @param string[] $internationalRefundMethod
     * @param \DOMDocument $any
     */
    public function __construct(array $internationalRefundMethod = array(), \DOMDocument $any = null)
    {
        $this
            ->setInternationalRefundMethod($internationalRefundMethod)
            ->setAny($any);
    }
    /**
     * Get InternationalRefundMethod value
     * @return string[]|null
     */
    public function getInternationalRefundMethod()
    {
        return $this->InternationalRefundMethod;
    }
    /**
     * This method is responsible for validating the values passed to the setInternationalRefundMethod method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInternationalRefundMethod method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInternationalRefundMethodForArrayConstraintsFromSetInternationalRefundMethod(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $internationalRefundMethodCodeTypeInternationalRefundMethodItem) {
            // validation for constraint: enumeration
            if (!\EnumType\ReturnsRefundMethodCodeType::valueIsValid($internationalRefundMethodCodeTypeInternationalRefundMethodItem)) {
                $invalidValues[] = is_object($internationalRefundMethodCodeTypeInternationalRefundMethodItem) ? get_class($internationalRefundMethodCodeTypeInternationalRefundMethodItem) : sprintf('%s(%s)', gettype($internationalRefundMethodCodeTypeInternationalRefundMethodItem), var_export($internationalRefundMethodCodeTypeInternationalRefundMethodItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ReturnsRefundMethodCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\ReturnsRefundMethodCodeType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set InternationalRefundMethod value
     * @uses \EnumType\ReturnsRefundMethodCodeType::valueIsValid()
     * @uses \EnumType\ReturnsRefundMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $internationalRefundMethod
     * @return \StructType\InternationalRefundMethodCodeType
     */
    public function setInternationalRefundMethod(array $internationalRefundMethod = array())
    {
        // validation for constraint: array
        if ('' !== ($internationalRefundMethodArrayErrorMessage = self::validateInternationalRefundMethodForArrayConstraintsFromSetInternationalRefundMethod($internationalRefundMethod))) {
            throw new \InvalidArgumentException($internationalRefundMethodArrayErrorMessage, __LINE__);
        }
        $this->InternationalRefundMethod = $internationalRefundMethod;
        return $this;
    }
    /**
     * Add item to InternationalRefundMethod value
     * @uses \EnumType\ReturnsRefundMethodCodeType::valueIsValid()
     * @uses \EnumType\ReturnsRefundMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\InternationalRefundMethodCodeType
     */
    public function addToInternationalRefundMethod($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ReturnsRefundMethodCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ReturnsRefundMethodCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \EnumType\ReturnsRefundMethodCodeType::getValidValues())), __LINE__);
        }
        $this->InternationalRefundMethod[] = $item;
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
     * @return \StructType\InternationalRefundMethodCodeType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
