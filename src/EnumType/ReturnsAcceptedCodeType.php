<?php

namespace EnumType;

/**
 * This class stands for ReturnsAcceptedCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enum defines the different options that are available for specifying whether or not the seller accepts returns.
 * @subpackage Enumerations
 */
class ReturnsAcceptedCodeType
{
    /**
     * Constant for value 'ReturnsAccepted'
     * Meta information extracted from the WSDL
     * - documentation: <code>ReturnsAccepted</code> indicates the seller does accept returns.
     * @return string 'ReturnsAccepted'
     */
    const VALUE_RETURNS_ACCEPTED = 'ReturnsAccepted';
    /**
     * Constant for value 'ReturnsNotAccepted'
     * Meta information extracted from the WSDL
     * - documentation: <code>ReturnsNotAccepted</code> indicates the seller does <i>not</i> accept returns.
     * @return string 'ReturnsNotAccepted'
     */
    const VALUE_RETURNS_NOT_ACCEPTED = 'ReturnsNotAccepted';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_RETURNS_ACCEPTED
     * @uses self::VALUE_RETURNS_NOT_ACCEPTED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_RETURNS_ACCEPTED,
            self::VALUE_RETURNS_NOT_ACCEPTED,
        );
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
