<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxIdentifierType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type defines the <b>BuyerTaxIdentifier</b> container that is returned in order management calls. This container consists of taxpayer identification information for the buyer and it is currently used by sellers selling on the
 * Italy or Spain site to retrieve the taxpayer ID of buyers registered on the Italy or Spain sites.
 * @subpackage Structs
 */
class TaxIdentifierType extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value identifies the type of tax ID that was supplied by the buyer during the checkout process.
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: This value is the actual tax ID for the buyer. The type of tax ID is shown in the <b>Type</b> field.
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Attribute
     * Meta information extracted from the WSDL
     * - documentation: This field shows an attribute, and its corresponding value for the buyer's tax identification card. Currently, this field is only used to indicate which country issued the buyer's tax ID, but in the future, other attributes related
     * to the tax ID may be returned in this field. This field's value will be an <a href="http://en.wikipedia.org/wiki/ISO_3166-1" target="_blank">ISO 3166-1 two-digit code</a> that represents the issuing country.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\TaxIdentifierAttributeType[]
     */
    public $Attribute;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for TaxIdentifierType
     * @uses TaxIdentifierType::setType()
     * @uses TaxIdentifierType::setID()
     * @uses TaxIdentifierType::setAttribute()
     * @uses TaxIdentifierType::setAny()
     * @param string $type
     * @param string $iD
     * @param \StructType\TaxIdentifierAttributeType[] $attribute
     * @param \DOMDocument $any
     */
    public function __construct($type = null, $iD = null, array $attribute = array(), \DOMDocument $any = null)
    {
        $this
            ->setType($type)
            ->setID($iD)
            ->setAttribute($attribute)
            ->setAny($any);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \EnumType\ValueTypeCodeType::valueIsValid()
     * @uses \EnumType\ValueTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \StructType\TaxIdentifierType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ValueTypeCodeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ValueTypeCodeType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \EnumType\ValueTypeCodeType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \StructType\TaxIdentifierType
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get Attribute value
     * @return \StructType\TaxIdentifierAttributeType[]|null
     */
    public function getAttribute()
    {
        return $this->Attribute;
    }
    /**
     * This method is responsible for validating the values passed to the setAttribute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAttribute method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAttributeForArrayConstraintsFromSetAttribute(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $taxIdentifierTypeAttributeItem) {
            // validation for constraint: itemType
            if (!$taxIdentifierTypeAttributeItem instanceof \StructType\TaxIdentifierAttributeType) {
                $invalidValues[] = is_object($taxIdentifierTypeAttributeItem) ? get_class($taxIdentifierTypeAttributeItem) : sprintf('%s(%s)', gettype($taxIdentifierTypeAttributeItem), var_export($taxIdentifierTypeAttributeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Attribute property can only contain items of type \StructType\TaxIdentifierAttributeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Attribute value
     * @throws \InvalidArgumentException
     * @param \StructType\TaxIdentifierAttributeType[] $attribute
     * @return \StructType\TaxIdentifierType
     */
    public function setAttribute(array $attribute = array())
    {
        // validation for constraint: array
        if ('' !== ($attributeArrayErrorMessage = self::validateAttributeForArrayConstraintsFromSetAttribute($attribute))) {
            throw new \InvalidArgumentException($attributeArrayErrorMessage, __LINE__);
        }
        $this->Attribute = $attribute;
        return $this;
    }
    /**
     * Add item to Attribute value
     * @throws \InvalidArgumentException
     * @param \StructType\TaxIdentifierAttributeType $item
     * @return \StructType\TaxIdentifierType
     */
    public function addToAttribute(\StructType\TaxIdentifierAttributeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\TaxIdentifierAttributeType) {
            throw new \InvalidArgumentException(sprintf('The Attribute property can only contain items of type \StructType\TaxIdentifierAttributeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Attribute[] = $item;
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
     * @return \StructType\TaxIdentifierType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
