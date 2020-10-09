<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserIdentityType StructType
 * Meta information extracted from the WSDL
 * - documentation: Based on the context of the field, this type defines the user is sending or receiving a payment.
 * @subpackage Structs
 */
class UserIdentityType extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - documentation: This attribute indicates if the payer or payee is an eBay user or an eBay partner.
     * @var string
     */
    public $type;
    /**
     * Constructor method for UserIdentityType
     * @uses UserIdentityType::set_()
     * @uses UserIdentityType::setType()
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
     * @return \StructType\UserIdentityType
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
     * @uses \EnumType\UserIdentityCodeType::valueIsValid()
     * @uses \EnumType\UserIdentityCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \StructType\UserIdentityType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\UserIdentityCodeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\UserIdentityCodeType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \EnumType\UserIdentityCodeType::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
}
