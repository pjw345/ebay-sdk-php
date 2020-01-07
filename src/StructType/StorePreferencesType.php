<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StorePreferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Store Preferences type.
 * @subpackage Structs
 */
class StorePreferencesType extends AbstractStructBase
{
    /**
     * The VacationPreferences
     * Meta information extracted from the WSDL
     * - documentation: Store vacation hold preferences.
     * - minOccurs: 0
     * @var \StructType\StoreVacationPreferencesType
     */
    public $VacationPreferences;
    /**
     * Constructor method for StorePreferencesType
     * @uses StorePreferencesType::setVacationPreferences()
     * @param \StructType\StoreVacationPreferencesType $vacationPreferences
     */
    public function __construct(\StructType\StoreVacationPreferencesType $vacationPreferences = null)
    {
        $this
            ->setVacationPreferences($vacationPreferences);
    }
    /**
     * Get VacationPreferences value
     * @return \StructType\StoreVacationPreferencesType|null
     */
    public function getVacationPreferences()
    {
        return $this->VacationPreferences;
    }
    /**
     * Set VacationPreferences value
     * @param \StructType\StoreVacationPreferencesType $vacationPreferences
     * @return \StructType\StorePreferencesType
     */
    public function setVacationPreferences(\StructType\StoreVacationPreferencesType $vacationPreferences = null)
    {
        $this->VacationPreferences = $vacationPreferences;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\StorePreferencesType
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
