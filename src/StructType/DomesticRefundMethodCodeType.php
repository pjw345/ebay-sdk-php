<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DomesticRefundMethodCodeType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type defines the available options the seller has for handling domestic returns.
 * @subpackage Structs
 */
class DomesticRefundMethodCodeType extends AbstractStructBase
{
    /**
     * The DomesticRefundMethod
     * Meta information extracted from the WSDL
     * - documentation: Defines the available options the seller has for handling domestic returns in the specified marketplace and category.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $DomesticRefundMethod;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for DomesticRefundMethodCodeType
     * @uses DomesticRefundMethodCodeType::setDomesticRefundMethod()
     * @uses DomesticRefundMethodCodeType::setAny()
     * @param string[] $domesticRefundMethod
     * @param \DOMDocument $any
     */
    public function __construct(array $domesticRefundMethod = array(), \DOMDocument $any = null)
    {
        $this
            ->setDomesticRefundMethod($domesticRefundMethod)
            ->setAny($any);
    }
    /**
     * Get DomesticRefundMethod value
     * @return string[]|null
     */
    public function getDomesticRefundMethod()
    {
        return $this->DomesticRefundMethod;
    }
    /**
     * This method is responsible for validating the values passed to the setDomesticRefundMethod method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDomesticRefundMethod method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDomesticRefundMethodForArrayConstraintsFromSetDomesticRefundMethod(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $domesticRefundMethodCodeTypeDomesticRefundMethodItem) {
            // validation for constraint: enumeration
            if (!\EnumType\ReturnsRefundMethodCodeType::valueIsValid($domesticRefundMethodCodeTypeDomesticRefundMethodItem)) {
                $invalidValues[] = is_object($domesticRefundMethodCodeTypeDomesticRefundMethodItem) ? get_class($domesticRefundMethodCodeTypeDomesticRefundMethodItem) : sprintf('%s(%s)', gettype($domesticRefundMethodCodeTypeDomesticRefundMethodItem), var_export($domesticRefundMethodCodeTypeDomesticRefundMethodItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ReturnsRefundMethodCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\ReturnsRefundMethodCodeType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DomesticRefundMethod value
     * @uses \EnumType\ReturnsRefundMethodCodeType::valueIsValid()
     * @uses \EnumType\ReturnsRefundMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $domesticRefundMethod
     * @return \StructType\DomesticRefundMethodCodeType
     */
    public function setDomesticRefundMethod(array $domesticRefundMethod = array())
    {
        // validation for constraint: array
        if ('' !== ($domesticRefundMethodArrayErrorMessage = self::validateDomesticRefundMethodForArrayConstraintsFromSetDomesticRefundMethod($domesticRefundMethod))) {
            throw new \InvalidArgumentException($domesticRefundMethodArrayErrorMessage, __LINE__);
        }
        $this->DomesticRefundMethod = $domesticRefundMethod;
        return $this;
    }
    /**
     * Add item to DomesticRefundMethod value
     * @uses \EnumType\ReturnsRefundMethodCodeType::valueIsValid()
     * @uses \EnumType\ReturnsRefundMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\DomesticRefundMethodCodeType
     */
    public function addToDomesticRefundMethod($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ReturnsRefundMethodCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ReturnsRefundMethodCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \EnumType\ReturnsRefundMethodCodeType::getValidValues())), __LINE__);
        }
        $this->DomesticRefundMethod[] = $item;
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
     * @return \StructType\DomesticRefundMethodCodeType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
