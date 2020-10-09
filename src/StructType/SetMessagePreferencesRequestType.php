<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetMessagePreferencesRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Enables a seller to add custom Ask Seller a Question (ASQ) subjects to their Ask a Question page, or to reset any custom subjects to their default values.
 * @subpackage Structs
 */
class SetMessagePreferencesRequestType extends AbstractRequestType
{
    /**
     * The ASQPreferences
     * Meta information extracted from the WSDL
     * - documentation: This container can be used to set customized ASQ subjects, or it can be used to reset the ASQ subjects to the eBay defaults. Up to nine customized ASQ subjects can be set.
     * - minOccurs: 0
     * @var \StructType\ASQPreferencesType
     */
    public $ASQPreferences;
    /**
     * Constructor method for SetMessagePreferencesRequestType
     * @uses SetMessagePreferencesRequestType::setASQPreferences()
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
     * @return \StructType\SetMessagePreferencesRequestType
     */
    public function setASQPreferences(\StructType\ASQPreferencesType $aSQPreferences = null)
    {
        $this->ASQPreferences = $aSQPreferences;
        return $this;
    }
}
