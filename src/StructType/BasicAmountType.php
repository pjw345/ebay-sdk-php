<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BasicAmountType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class BasicAmountType extends AbstractStructBase
{
    /**
     * The currencyID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - use: required
     * @var string
     */
    public $currencyID;
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * Constructor method for BasicAmountType
     * @uses BasicAmountType::setCurrencyID()
     * @uses BasicAmountType::set_()
     * @param string $currencyID
     * @param string $_
     */
    public function __construct($currencyID = null, $_ = null)
    {
        $this
            ->setCurrencyID($currencyID)
            ->set_($_);
    }
    /**
     * Get currencyID value
     * @return string
     */
    public function getCurrencyID()
    {
        return $this->currencyID;
    }
    /**
     * Set currencyID value
     * @uses \EnumType\CurrencyCodeType::valueIsValid()
     * @uses \EnumType\CurrencyCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $currencyID
     * @return \StructType\BasicAmountType
     */
    public function setCurrencyID($currencyID = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CurrencyCodeType::valueIsValid($currencyID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CurrencyCodeType', is_array($currencyID) ? implode(', ', $currencyID) : var_export($currencyID, true), implode(', ', \EnumType\CurrencyCodeType::getValidValues())), __LINE__);
        }
        $this->currencyID = $currencyID;
        return $this;
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
     * @return \StructType\BasicAmountType
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
}
