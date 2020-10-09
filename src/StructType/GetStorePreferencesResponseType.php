<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetStorePreferencesResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Base response of the <b>GetStorePreferences</b> call.
 * @subpackage Structs
 */
class GetStorePreferencesResponseType extends AbstractResponseType
{
    /**
     * The StorePreferences
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the seller's current eBay Store preferences. Currently, the only eBay Store preferences are related to putting an eBay Store on vacation mode, but more preferences may get added in the future.
     * - minOccurs: 0
     * @var \StructType\StorePreferencesType
     */
    public $StorePreferences;
    /**
     * Constructor method for GetStorePreferencesResponseType
     * @uses GetStorePreferencesResponseType::setStorePreferences()
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
     * @return \StructType\GetStorePreferencesResponseType
     */
    public function setStorePreferences(\StructType\StorePreferencesType $storePreferences = null)
    {
        $this->StorePreferences = $storePreferences;
        return $this;
    }
}
