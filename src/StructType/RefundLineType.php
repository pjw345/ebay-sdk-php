<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefundLineType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class RefundLineType extends AmountType
{
    /**
     * The _
     * @var \StructType\AmountType
     */
    public $_;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var string
     */
    public $type;
    /**
     * Constructor method for RefundLineType
     * @uses RefundLineType::set_()
     * @uses RefundLineType::setType()
     * @param \StructType\AmountType $_
     * @param string $type
     */
    public function __construct(\StructType\AmountType $_ = null, $type = null)
    {
        $this
            ->set_($_)
            ->setType($type);
    }
    /**
     * Get _ value
     * @return \StructType\AmountType|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param \StructType\AmountType $_
     * @return \StructType\RefundLineType
     */
    public function set_(\StructType\AmountType $_ = null)
    {
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
     * @uses \EnumType\RefundLineTypeCodeType::valueIsValid()
     * @uses \EnumType\RefundLineTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \StructType\RefundLineType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\RefundLineTypeCodeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\RefundLineTypeCodeType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \EnumType\RefundLineTypeCodeType::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\RefundLineType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
