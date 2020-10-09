<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InternationalReturnsShipmentPayeeCodeType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type defines the available options for who pays the return shipping costs for international returns.
 * @subpackage Structs
 */
class InternationalReturnsShipmentPayeeCodeType extends AbstractStructBase
{
    /**
     * The InternationalReturnsShipmentPayee
     * Meta information extracted from the WSDL
     * - documentation: Defines the available options for who pays the return shipping costs for international returns in the specified marketplace and category.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $InternationalReturnsShipmentPayee;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for InternationalReturnsShipmentPayeeCodeType
     * @uses InternationalReturnsShipmentPayeeCodeType::setInternationalReturnsShipmentPayee()
     * @uses InternationalReturnsShipmentPayeeCodeType::setAny()
     * @param string[] $internationalReturnsShipmentPayee
     * @param \DOMDocument $any
     */
    public function __construct(array $internationalReturnsShipmentPayee = array(), \DOMDocument $any = null)
    {
        $this
            ->setInternationalReturnsShipmentPayee($internationalReturnsShipmentPayee)
            ->setAny($any);
    }
    /**
     * Get InternationalReturnsShipmentPayee value
     * @return string[]|null
     */
    public function getInternationalReturnsShipmentPayee()
    {
        return $this->InternationalReturnsShipmentPayee;
    }
    /**
     * This method is responsible for validating the values passed to the setInternationalReturnsShipmentPayee method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInternationalReturnsShipmentPayee method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInternationalReturnsShipmentPayeeForArrayConstraintsFromSetInternationalReturnsShipmentPayee(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $internationalReturnsShipmentPayeeCodeTypeInternationalReturnsShipmentPayeeItem) {
            // validation for constraint: enumeration
            if (!\EnumType\ReturnsShipmentPayeeCodeType::valueIsValid($internationalReturnsShipmentPayeeCodeTypeInternationalReturnsShipmentPayeeItem)) {
                $invalidValues[] = is_object($internationalReturnsShipmentPayeeCodeTypeInternationalReturnsShipmentPayeeItem) ? get_class($internationalReturnsShipmentPayeeCodeTypeInternationalReturnsShipmentPayeeItem) : sprintf('%s(%s)', gettype($internationalReturnsShipmentPayeeCodeTypeInternationalReturnsShipmentPayeeItem), var_export($internationalReturnsShipmentPayeeCodeTypeInternationalReturnsShipmentPayeeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ReturnsShipmentPayeeCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\ReturnsShipmentPayeeCodeType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set InternationalReturnsShipmentPayee value
     * @uses \EnumType\ReturnsShipmentPayeeCodeType::valueIsValid()
     * @uses \EnumType\ReturnsShipmentPayeeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $internationalReturnsShipmentPayee
     * @return \StructType\InternationalReturnsShipmentPayeeCodeType
     */
    public function setInternationalReturnsShipmentPayee(array $internationalReturnsShipmentPayee = array())
    {
        // validation for constraint: array
        if ('' !== ($internationalReturnsShipmentPayeeArrayErrorMessage = self::validateInternationalReturnsShipmentPayeeForArrayConstraintsFromSetInternationalReturnsShipmentPayee($internationalReturnsShipmentPayee))) {
            throw new \InvalidArgumentException($internationalReturnsShipmentPayeeArrayErrorMessage, __LINE__);
        }
        $this->InternationalReturnsShipmentPayee = $internationalReturnsShipmentPayee;
        return $this;
    }
    /**
     * Add item to InternationalReturnsShipmentPayee value
     * @uses \EnumType\ReturnsShipmentPayeeCodeType::valueIsValid()
     * @uses \EnumType\ReturnsShipmentPayeeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\InternationalReturnsShipmentPayeeCodeType
     */
    public function addToInternationalReturnsShipmentPayee($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ReturnsShipmentPayeeCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ReturnsShipmentPayeeCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \EnumType\ReturnsShipmentPayeeCodeType::getValidValues())), __LINE__);
        }
        $this->InternationalReturnsShipmentPayee[] = $item;
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
     * @return \StructType\InternationalReturnsShipmentPayeeCodeType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
