<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetUserNotesResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The response of a <b>SetUserNotes</b> call only includes the standard response fields for Trading API calls, such as the <b>Ack</b> field (to indicate the success or failure of the call), the timestamp, and an <b>Errors</b> container
 * (if there were any errors and/or warnings).
 * @subpackage Structs
 */
class SetUserNotesResponseType extends AbstractResponseType
{
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SetUserNotesResponseType
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
