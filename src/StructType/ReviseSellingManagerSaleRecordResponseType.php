<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReviseSellingManagerSaleRecordResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response of the <b>ReviseSellingManagerSaleRecord</b> call.
 * @subpackage Structs
 */
class ReviseSellingManagerSaleRecordResponseType extends AbstractResponseType
{
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReviseSellingManagerSaleRecordResponseType
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
