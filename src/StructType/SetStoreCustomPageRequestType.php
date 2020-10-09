<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetStoreCustomPageRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Creates or updates a custom page on a user's eBay Store. Sellers must have an eBay Store subscription in order to use this call.
 * @subpackage Structs
 */
class SetStoreCustomPageRequestType extends AbstractRequestType
{
    /**
     * The CustomPage
     * Meta information extracted from the WSDL
     * - documentation: This container is used to create a new eBay Store custom page or modify an existing custom page.
     * - minOccurs: 0
     * @var \StructType\StoreCustomPageType
     */
    public $CustomPage;
    /**
     * Constructor method for SetStoreCustomPageRequestType
     * @uses SetStoreCustomPageRequestType::setCustomPage()
     * @param \StructType\StoreCustomPageType $customPage
     */
    public function __construct(\StructType\StoreCustomPageType $customPage = null)
    {
        $this
            ->setCustomPage($customPage);
    }
    /**
     * Get CustomPage value
     * @return \StructType\StoreCustomPageType|null
     */
    public function getCustomPage()
    {
        return $this->CustomPage;
    }
    /**
     * Set CustomPage value
     * @param \StructType\StoreCustomPageType $customPage
     * @return \StructType\SetStoreCustomPageRequestType
     */
    public function setCustomPage(\StructType\StoreCustomPageType $customPage = null)
    {
        $this->CustomPage = $customPage;
        return $this;
    }
}
