<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InternationalReturnsAcceptedCodeType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type defines the available options the seller has for accepting international returns.
 * @subpackage Structs
 */
class InternationalReturnsAcceptedCodeType extends AbstractStructBase
{
    /**
     * The InternationalReturnsAccepted
     * Meta information extracted from the WSDL
     * - documentation: Defines the available options the seller has for accepting international returns in the specified marketplace and category.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $InternationalReturnsAccepted;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for InternationalReturnsAcceptedCodeType
     * @uses InternationalReturnsAcceptedCodeType::setInternationalReturnsAccepted()
     * @uses InternationalReturnsAcceptedCodeType::setAny()
     * @param string[] $internationalReturnsAccepted
     * @param \DOMDocument $any
     */
    public function __construct(array $internationalReturnsAccepted = array(), \DOMDocument $any = null)
    {
        $this
            ->setInternationalReturnsAccepted($internationalReturnsAccepted)
            ->setAny($any);
    }
    /**
     * Get InternationalReturnsAccepted value
     * @return string[]|null
     */
    public function getInternationalReturnsAccepted()
    {
        return $this->InternationalReturnsAccepted;
    }
    /**
     * This method is responsible for validating the values passed to the setInternationalReturnsAccepted method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInternationalReturnsAccepted method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInternationalReturnsAcceptedForArrayConstraintsFromSetInternationalReturnsAccepted(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $internationalReturnsAcceptedCodeTypeInternationalReturnsAcceptedItem) {
            // validation for constraint: enumeration
            if (!\EnumType\ReturnsAcceptedCodeType::valueIsValid($internationalReturnsAcceptedCodeTypeInternationalReturnsAcceptedItem)) {
                $invalidValues[] = is_object($internationalReturnsAcceptedCodeTypeInternationalReturnsAcceptedItem) ? get_class($internationalReturnsAcceptedCodeTypeInternationalReturnsAcceptedItem) : sprintf('%s(%s)', gettype($internationalReturnsAcceptedCodeTypeInternationalReturnsAcceptedItem), var_export($internationalReturnsAcceptedCodeTypeInternationalReturnsAcceptedItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ReturnsAcceptedCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\ReturnsAcceptedCodeType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set InternationalReturnsAccepted value
     * @uses \EnumType\ReturnsAcceptedCodeType::valueIsValid()
     * @uses \EnumType\ReturnsAcceptedCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $internationalReturnsAccepted
     * @return \StructType\InternationalReturnsAcceptedCodeType
     */
    public function setInternationalReturnsAccepted(array $internationalReturnsAccepted = array())
    {
        // validation for constraint: array
        if ('' !== ($internationalReturnsAcceptedArrayErrorMessage = self::validateInternationalReturnsAcceptedForArrayConstraintsFromSetInternationalReturnsAccepted($internationalReturnsAccepted))) {
            throw new \InvalidArgumentException($internationalReturnsAcceptedArrayErrorMessage, __LINE__);
        }
        $this->InternationalReturnsAccepted = $internationalReturnsAccepted;
        return $this;
    }
    /**
     * Add item to InternationalReturnsAccepted value
     * @uses \EnumType\ReturnsAcceptedCodeType::valueIsValid()
     * @uses \EnumType\ReturnsAcceptedCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\InternationalReturnsAcceptedCodeType
     */
    public function addToInternationalReturnsAccepted($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ReturnsAcceptedCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ReturnsAcceptedCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \EnumType\ReturnsAcceptedCodeType::getValidValues())), __LINE__);
        }
        $this->InternationalReturnsAccepted[] = $item;
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
     * @return \StructType\InternationalReturnsAcceptedCodeType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
