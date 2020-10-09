<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InternationalReturnsDurationCodeType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type defines the available options for the return durations for international returns.
 * @subpackage Structs
 */
class InternationalReturnsDurationCodeType extends AbstractStructBase
{
    /**
     * The InternationalReturnsDuration
     * Meta information extracted from the WSDL
     * - documentation: Defines the available options for the return durations for international returns in the specified marketplace and category. This is the time the buyer has to initiate a return once they receive the item.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $InternationalReturnsDuration;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for InternationalReturnsDurationCodeType
     * @uses InternationalReturnsDurationCodeType::setInternationalReturnsDuration()
     * @uses InternationalReturnsDurationCodeType::setAny()
     * @param string[] $internationalReturnsDuration
     * @param \DOMDocument $any
     */
    public function __construct(array $internationalReturnsDuration = array(), \DOMDocument $any = null)
    {
        $this
            ->setInternationalReturnsDuration($internationalReturnsDuration)
            ->setAny($any);
    }
    /**
     * Get InternationalReturnsDuration value
     * @return string[]|null
     */
    public function getInternationalReturnsDuration()
    {
        return $this->InternationalReturnsDuration;
    }
    /**
     * This method is responsible for validating the values passed to the setInternationalReturnsDuration method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInternationalReturnsDuration method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInternationalReturnsDurationForArrayConstraintsFromSetInternationalReturnsDuration(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $internationalReturnsDurationCodeTypeInternationalReturnsDurationItem) {
            // validation for constraint: enumeration
            if (!\EnumType\ReturnsDurationCodeType::valueIsValid($internationalReturnsDurationCodeTypeInternationalReturnsDurationItem)) {
                $invalidValues[] = is_object($internationalReturnsDurationCodeTypeInternationalReturnsDurationItem) ? get_class($internationalReturnsDurationCodeTypeInternationalReturnsDurationItem) : sprintf('%s(%s)', gettype($internationalReturnsDurationCodeTypeInternationalReturnsDurationItem), var_export($internationalReturnsDurationCodeTypeInternationalReturnsDurationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ReturnsDurationCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\ReturnsDurationCodeType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set InternationalReturnsDuration value
     * @uses \EnumType\ReturnsDurationCodeType::valueIsValid()
     * @uses \EnumType\ReturnsDurationCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $internationalReturnsDuration
     * @return \StructType\InternationalReturnsDurationCodeType
     */
    public function setInternationalReturnsDuration(array $internationalReturnsDuration = array())
    {
        // validation for constraint: array
        if ('' !== ($internationalReturnsDurationArrayErrorMessage = self::validateInternationalReturnsDurationForArrayConstraintsFromSetInternationalReturnsDuration($internationalReturnsDuration))) {
            throw new \InvalidArgumentException($internationalReturnsDurationArrayErrorMessage, __LINE__);
        }
        $this->InternationalReturnsDuration = $internationalReturnsDuration;
        return $this;
    }
    /**
     * Add item to InternationalReturnsDuration value
     * @uses \EnumType\ReturnsDurationCodeType::valueIsValid()
     * @uses \EnumType\ReturnsDurationCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\InternationalReturnsDurationCodeType
     */
    public function addToInternationalReturnsDuration($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ReturnsDurationCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ReturnsDurationCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \EnumType\ReturnsDurationCodeType::getValidValues())), __LINE__);
        }
        $this->InternationalReturnsDuration[] = $item;
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
     * @return \StructType\InternationalReturnsDurationCodeType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
