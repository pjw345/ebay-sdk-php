<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxIdentifierAttributeType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used to display the value of the <b>name</b> attribute of the <b>BuyerTaxIdentifier.Attribute</b> field.
 * @subpackage Structs
 */
class TaxIdentifierAttributeType extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - documentation: The only supported value for this attribute is 'IssuingCountry', but in the future, other attributes related to the tax ID may be supported.
     * @var string
     */
    public $name;
    /**
     * Constructor method for TaxIdentifierAttributeType
     * @uses TaxIdentifierAttributeType::set_()
     * @uses TaxIdentifierAttributeType::setName()
     * @param string $_
     * @param string $name
     */
    public function __construct($_ = null, $name = null)
    {
        $this
            ->set_($_)
            ->setName($name);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \StructType\TaxIdentifierAttributeType
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @uses \EnumType\TaxIdentifierAttributeCodeType::valueIsValid()
     * @uses \EnumType\TaxIdentifierAttributeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $name
     * @return \StructType\TaxIdentifierAttributeType
     */
    public function setName($name = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\TaxIdentifierAttributeCodeType::valueIsValid($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TaxIdentifierAttributeCodeType', is_array($name) ? implode(', ', $name) : var_export($name, true), implode(', ', \EnumType\TaxIdentifierAttributeCodeType::getValidValues())), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
}
