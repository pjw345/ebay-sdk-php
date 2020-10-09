<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DomesticReturnsAcceptedCodeType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type defines the available options the seller has for accepting domestic returns.
 * @subpackage Structs
 */
class DomesticReturnsAcceptedCodeType extends AbstractStructBase
{
    /**
     * The DomesticReturnsAccepted
     * Meta information extracted from the WSDL
     * - documentation: Defines the available options the seller has for accepting domestic returns in the specified marketplace and category.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $DomesticReturnsAccepted;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for DomesticReturnsAcceptedCodeType
     * @uses DomesticReturnsAcceptedCodeType::setDomesticReturnsAccepted()
     * @uses DomesticReturnsAcceptedCodeType::setAny()
     * @param string[] $domesticReturnsAccepted
     * @param \DOMDocument $any
     */
    public function __construct(array $domesticReturnsAccepted = array(), \DOMDocument $any = null)
    {
        $this
            ->setDomesticReturnsAccepted($domesticReturnsAccepted)
            ->setAny($any);
    }
    /**
     * Get DomesticReturnsAccepted value
     * @return string[]|null
     */
    public function getDomesticReturnsAccepted()
    {
        return $this->DomesticReturnsAccepted;
    }
    /**
     * This method is responsible for validating the values passed to the setDomesticReturnsAccepted method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDomesticReturnsAccepted method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDomesticReturnsAcceptedForArrayConstraintsFromSetDomesticReturnsAccepted(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $domesticReturnsAcceptedCodeTypeDomesticReturnsAcceptedItem) {
            // validation for constraint: enumeration
            if (!\EnumType\ReturnsAcceptedCodeType::valueIsValid($domesticReturnsAcceptedCodeTypeDomesticReturnsAcceptedItem)) {
                $invalidValues[] = is_object($domesticReturnsAcceptedCodeTypeDomesticReturnsAcceptedItem) ? get_class($domesticReturnsAcceptedCodeTypeDomesticReturnsAcceptedItem) : sprintf('%s(%s)', gettype($domesticReturnsAcceptedCodeTypeDomesticReturnsAcceptedItem), var_export($domesticReturnsAcceptedCodeTypeDomesticReturnsAcceptedItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ReturnsAcceptedCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\ReturnsAcceptedCodeType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DomesticReturnsAccepted value
     * @uses \EnumType\ReturnsAcceptedCodeType::valueIsValid()
     * @uses \EnumType\ReturnsAcceptedCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $domesticReturnsAccepted
     * @return \StructType\DomesticReturnsAcceptedCodeType
     */
    public function setDomesticReturnsAccepted(array $domesticReturnsAccepted = array())
    {
        // validation for constraint: array
        if ('' !== ($domesticReturnsAcceptedArrayErrorMessage = self::validateDomesticReturnsAcceptedForArrayConstraintsFromSetDomesticReturnsAccepted($domesticReturnsAccepted))) {
            throw new \InvalidArgumentException($domesticReturnsAcceptedArrayErrorMessage, __LINE__);
        }
        $this->DomesticReturnsAccepted = $domesticReturnsAccepted;
        return $this;
    }
    /**
     * Add item to DomesticReturnsAccepted value
     * @uses \EnumType\ReturnsAcceptedCodeType::valueIsValid()
     * @uses \EnumType\ReturnsAcceptedCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\DomesticReturnsAcceptedCodeType
     */
    public function addToDomesticReturnsAccepted($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ReturnsAcceptedCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ReturnsAcceptedCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \EnumType\ReturnsAcceptedCodeType::getValidValues())), __LINE__);
        }
        $this->DomesticReturnsAccepted[] = $item;
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
     * @return \StructType\DomesticReturnsAcceptedCodeType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
