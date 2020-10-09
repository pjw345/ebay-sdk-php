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
}
