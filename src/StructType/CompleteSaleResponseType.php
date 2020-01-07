<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompleteSaleResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type defines the response of the <b>CompleteSale</b> call. There are no call-specific fields in this response, but the seller should look for an <b>Ack</b> value of <Success>true</code> in the response, as this value will
 * indicate that the action(s) in the <b>CompleteSale</b> call were successful. If any other <b>Ack</b> value besides <Success>true</code> is returned, the seller should look for any returned error messages or warnings.
 * @subpackage Structs
 */
class CompleteSaleResponseType extends AbstractResponseType
{
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CompleteSaleResponseType
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
