<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetStorePreferencesRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Sets the preferences for a user's eBay Store. Sellers must have an eBay Store subscription in order to use this call.
 * @subpackage Structs
 */
class SetStorePreferencesRequestType extends AbstractRequestType
{
    /**
     * The StorePreferences
     * Meta information extracted from the WSDL
     * - documentation: This container is used to set the eBay Store's preferences. Currently, the only applicable eBay Store preferences are Store vacation preferences.
     * - minOccurs: 0
     * @var \StructType\StorePreferencesType
     */
    public $StorePreferences;
    /**
     * Constructor method for SetStorePreferencesRequestType
     * @uses SetStorePreferencesRequestType::setStorePreferences()
     * @param \StructType\StorePreferencesType $storePreferences
     */
    public function __construct(\StructType\StorePreferencesType $storePreferences = null)
    {
        $this
            ->setStorePreferences($storePreferences);
    }
    /**
     * Get StorePreferences value
     * @return \StructType\StorePreferencesType|null
     */
    public function getStorePreferences()
    {
        return $this->StorePreferences;
    }
    /**
     * Set StorePreferences value
     * @param \StructType\StorePreferencesType $storePreferences
     * @return \StructType\SetStorePreferencesRequestType
     */
    public function setStorePreferences(\StructType\StorePreferencesType $storePreferences = null)
    {
        $this->StorePreferences = $storePreferences;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SetStorePreferencesRequestType
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
