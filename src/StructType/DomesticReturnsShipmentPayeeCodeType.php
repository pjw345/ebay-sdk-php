<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DomesticReturnsShipmentPayeeCodeType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type defines the available options for who pays the return shipping costs for domestic returns.
 * @subpackage Structs
 */
class DomesticReturnsShipmentPayeeCodeType extends AbstractStructBase
{
    /**
     * The DomesticReturnsShipmentPayee
     * Meta information extracted from the WSDL
     * - documentation: Defines the available options for who pays the return shipping costs for domestic returns in the specified marketplace and category.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $DomesticReturnsShipmentPayee;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for DomesticReturnsShipmentPayeeCodeType
     * @uses DomesticReturnsShipmentPayeeCodeType::setDomesticReturnsShipmentPayee()
     * @uses DomesticReturnsShipmentPayeeCodeType::setAny()
     * @param string[] $domesticReturnsShipmentPayee
     * @param \DOMDocument $any
     */
    public function __construct(array $domesticReturnsShipmentPayee = array(), \DOMDocument $any = null)
    {
        $this
            ->setDomesticReturnsShipmentPayee($domesticReturnsShipmentPayee)
            ->setAny($any);
    }
    /**
     * Get DomesticReturnsShipmentPayee value
     * @return string[]|null
     */
    public function getDomesticReturnsShipmentPayee()
    {
        return $this->DomesticReturnsShipmentPayee;
    }
    /**
     * This method is responsible for validating the values passed to the setDomesticReturnsShipmentPayee method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDomesticReturnsShipmentPayee method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDomesticReturnsShipmentPayeeForArrayConstraintsFromSetDomesticReturnsShipmentPayee(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $domesticReturnsShipmentPayeeCodeTypeDomesticReturnsShipmentPayeeItem) {
            // validation for constraint: enumeration
            if (!\EnumType\ReturnsShipmentPayeeCodeType::valueIsValid($domesticReturnsShipmentPayeeCodeTypeDomesticReturnsShipmentPayeeItem)) {
                $invalidValues[] = is_object($domesticReturnsShipmentPayeeCodeTypeDomesticReturnsShipmentPayeeItem) ? get_class($domesticReturnsShipmentPayeeCodeTypeDomesticReturnsShipmentPayeeItem) : sprintf('%s(%s)', gettype($domesticReturnsShipmentPayeeCodeTypeDomesticReturnsShipmentPayeeItem), var_export($domesticReturnsShipmentPayeeCodeTypeDomesticReturnsShipmentPayeeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ReturnsShipmentPayeeCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\ReturnsShipmentPayeeCodeType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DomesticReturnsShipmentPayee value
     * @uses \EnumType\ReturnsShipmentPayeeCodeType::valueIsValid()
     * @uses \EnumType\ReturnsShipmentPayeeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $domesticReturnsShipmentPayee
     * @return \StructType\DomesticReturnsShipmentPayeeCodeType
     */
    public function setDomesticReturnsShipmentPayee(array $domesticReturnsShipmentPayee = array())
    {
        // validation for constraint: array
        if ('' !== ($domesticReturnsShipmentPayeeArrayErrorMessage = self::validateDomesticReturnsShipmentPayeeForArrayConstraintsFromSetDomesticReturnsShipmentPayee($domesticReturnsShipmentPayee))) {
            throw new \InvalidArgumentException($domesticReturnsShipmentPayeeArrayErrorMessage, __LINE__);
        }
        $this->DomesticReturnsShipmentPayee = $domesticReturnsShipmentPayee;
        return $this;
    }
    /**
     * Add item to DomesticReturnsShipmentPayee value
     * @uses \EnumType\ReturnsShipmentPayeeCodeType::valueIsValid()
     * @uses \EnumType\ReturnsShipmentPayeeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\DomesticReturnsShipmentPayeeCodeType
     */
    public function addToDomesticReturnsShipmentPayee($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ReturnsShipmentPayeeCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ReturnsShipmentPayeeCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \EnumType\ReturnsShipmentPayeeCodeType::getValidValues())), __LINE__);
        }
        $this->DomesticReturnsShipmentPayee[] = $item;
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
     * @return \StructType\DomesticReturnsShipmentPayeeCodeType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
