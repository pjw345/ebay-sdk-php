<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetStoreCustomPageResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response for the <b>SetStoreCustomPage</b> call. This serves as confirmation that the custom page was successfully submitted.
 * @subpackage Structs
 */
class SetStoreCustomPageResponseType extends AbstractResponseType
{
    /**
     * The CustomPage
     * Meta information extracted from the WSDL
     * - documentation: This container consists of details for the newly-added or modified eBay Store custom page.
     * - minOccurs: 0
     * @var \StructType\StoreCustomPageType
     */
    public $CustomPage;
    /**
     * Constructor method for SetStoreCustomPageResponseType
     * @uses SetStoreCustomPageResponseType::setCustomPage()
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
     * @return \StructType\SetStoreCustomPageResponseType
     */
    public function setCustomPage(\StructType\StoreCustomPageType $customPage = null)
    {
        $this->CustomPage = $customPage;
        return $this;
    }
}
