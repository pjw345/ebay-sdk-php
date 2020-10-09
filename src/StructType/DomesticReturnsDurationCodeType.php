<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DomesticReturnsDurationCodeType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type defines the available options for the return durations for domestic returns.
 * @subpackage Structs
 */
class DomesticReturnsDurationCodeType extends AbstractStructBase
{
    /**
     * The DomesticReturnsDuration
     * Meta information extracted from the WSDL
     * - documentation: Defines the available options for the return durations for domestic returns in the specified marketplace and category. This is the time the buyer has to initiate a return once they receive the item.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $DomesticReturnsDuration;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for DomesticReturnsDurationCodeType
     * @uses DomesticReturnsDurationCodeType::setDomesticReturnsDuration()
     * @uses DomesticReturnsDurationCodeType::setAny()
     * @param string[] $domesticReturnsDuration
     * @param \DOMDocument $any
     */
    public function __construct(array $domesticReturnsDuration = array(), \DOMDocument $any = null)
    {
        $this
            ->setDomesticReturnsDuration($domesticReturnsDuration)
            ->setAny($any);
    }
    /**
     * Get DomesticReturnsDuration value
     * @return string[]|null
     */
    public function getDomesticReturnsDuration()
    {
        return $this->DomesticReturnsDuration;
    }
    /**
     * This method is responsible for validating the values passed to the setDomesticReturnsDuration method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDomesticReturnsDuration method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDomesticReturnsDurationForArrayConstraintsFromSetDomesticReturnsDuration(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $domesticReturnsDurationCodeTypeDomesticReturnsDurationItem) {
            // validation for constraint: enumeration
            if (!\EnumType\ReturnsDurationCodeType::valueIsValid($domesticReturnsDurationCodeTypeDomesticReturnsDurationItem)) {
                $invalidValues[] = is_object($domesticReturnsDurationCodeTypeDomesticReturnsDurationItem) ? get_class($domesticReturnsDurationCodeTypeDomesticReturnsDurationItem) : sprintf('%s(%s)', gettype($domesticReturnsDurationCodeTypeDomesticReturnsDurationItem), var_export($domesticReturnsDurationCodeTypeDomesticReturnsDurationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ReturnsDurationCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\ReturnsDurationCodeType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DomesticReturnsDuration value
     * @uses \EnumType\ReturnsDurationCodeType::valueIsValid()
     * @uses \EnumType\ReturnsDurationCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $domesticReturnsDuration
     * @return \StructType\DomesticReturnsDurationCodeType
     */
    public function setDomesticReturnsDuration(array $domesticReturnsDuration = array())
    {
        // validation for constraint: array
        if ('' !== ($domesticReturnsDurationArrayErrorMessage = self::validateDomesticReturnsDurationForArrayConstraintsFromSetDomesticReturnsDuration($domesticReturnsDuration))) {
            throw new \InvalidArgumentException($domesticReturnsDurationArrayErrorMessage, __LINE__);
        }
        $this->DomesticReturnsDuration = $domesticReturnsDuration;
        return $this;
    }
    /**
     * Add item to DomesticReturnsDuration value
     * @uses \EnumType\ReturnsDurationCodeType::valueIsValid()
     * @uses \EnumType\ReturnsDurationCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\DomesticReturnsDurationCodeType
     */
    public function addToDomesticReturnsDuration($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ReturnsDurationCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ReturnsDurationCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \EnumType\ReturnsDurationCodeType::getValidValues())), __LINE__);
        }
        $this->DomesticReturnsDuration[] = $item;
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
     * @return \StructType\DomesticReturnsDurationCodeType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
