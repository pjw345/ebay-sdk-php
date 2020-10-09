<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ShipmentStatusCodeType EnumType
 * @subpackage Enumerations
 */
class ShipmentStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Active'
     * @return string 'Active'
     */
    const VALUE_ACTIVE = 'Active';
    /**
     * Constant for value 'Canceled'
     * @return string 'Canceled'
     */
    const VALUE_CANCELED = 'Canceled';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_ACTIVE
     * @uses self::VALUE_CANCELED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ACTIVE,
            self::VALUE_CANCELED,
            self::VALUE_CUSTOM_CODE,
        );
    }
}
