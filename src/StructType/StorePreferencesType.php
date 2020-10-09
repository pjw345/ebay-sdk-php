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
}
