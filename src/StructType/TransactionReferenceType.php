<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <strong>ReferenceID</strong> element, which is used to display the unique identifier of a payment (and payment type through the <strong>type</strong> attribute.
 * @subpackage Structs
 */
class TransactionReferenceType extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - documentation: This attribute indicates the type of payment.
     * @var string
     */
    public $type;
    /**
     * Constructor method for TransactionReferenceType
     * @uses TransactionReferenceType::set_()
     * @uses TransactionReferenceType::setType()
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
     * @return \StructType\TransactionReferenceType
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
     * @uses \EnumType\TransactionReferenceCodeType::valueIsValid()
     * @uses \EnumType\TransactionReferenceCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \StructType\TransactionReferenceType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\TransactionReferenceCodeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TransactionReferenceCodeType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \EnumType\TransactionReferenceCodeType::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
}
