<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressAttributeType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used to display the value of the <b>type</b> attribute of the <b>AddressAttribute</b> field.
 * @subpackage Structs
 */
class AddressAttributeType extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - documentation: The only supported value for this attribute is <code>ReferenceNumber</code>, but in the future, other address attributes may be supported. The <code>ReferenceNumber</code> is a unique identifier for a 'Click and Collect' order. Click
     * and Collect orders are only available on the eBay UK and eBay Australia sites.
     * @var string
     */
    public $type;
    /**
     * Constructor method for AddressAttributeType
     * @uses AddressAttributeType::set_()
     * @uses AddressAttributeType::setType()
     * @param string $_
     * @param string $type
     */
    public function __construct($_ = null, $type = null)
    {
        $this
            ->set_($_)
            ->setType($type);
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
     * @return \StructType\AddressAttributeType
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
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses \EnumType\AddressAttributeCodeType::valueIsValid()
     * @uses \EnumType\AddressAttributeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \StructType\AddressAttributeType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\AddressAttributeCodeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\AddressAttributeCodeType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \EnumType\AddressAttributeCodeType::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
}
