<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetApiAccessRulesRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base request type for the <b>GetApiAccessRules</b> call, which returns details on how many calls your application has made and is allowed to make per hour or day.
 * @subpackage Structs
 */
class GetApiAccessRulesRequestType extends AbstractRequestType
{
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetApiAccessRulesRequestType
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
