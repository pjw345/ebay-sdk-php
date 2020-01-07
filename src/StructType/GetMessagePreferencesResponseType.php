<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMessagePreferencesResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the ASQ subjects for the user specified in the request.
 * @subpackage Structs
 */
class GetMessagePreferencesResponseType extends AbstractResponseType
{
    /**
     * The ASQPreferences
     * Meta information extracted from the WSDL
     * - documentation: Returns a seller's ASQ subjects, each in its own Subject node. If the seller has not customized the ASQ subjects using SetMessagePreferences, the call will return the current default values. Returned if IncludeASQPreferences = true
     * was specified in the request.
     * - minOccurs: 0
     * @var \StructType\ASQPreferencesType
     */
    public $ASQPreferences;
    /**
     * Constructor method for GetMessagePreferencesResponseType
     * @uses GetMessagePreferencesResponseType::setASQPreferences()
     * @param \StructType\ASQPreferencesType $aSQPreferences
     */
    public function __construct(\StructType\ASQPreferencesType $aSQPreferences = null)
    {
        $this
            ->setASQPreferences($aSQPreferences);
    }
    /**
     * Get ASQPreferences value
     * @return \StructType\ASQPreferencesType|null
     */
    public function getASQPreferences()
    {
        return $this->ASQPreferences;
    }
    /**
     * Set ASQPreferences value
     * @param \StructType\ASQPreferencesType $aSQPreferences
     * @return \StructType\GetMessagePreferencesResponseType
     */
    public function setASQPreferences(\StructType\ASQPreferencesType $aSQPreferences = null)
    {
        $this->ASQPreferences = $aSQPreferences;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetMessagePreferencesResponseType
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