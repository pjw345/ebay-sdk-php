<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetPromotionalSaleListingsResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> While the Trading API continues to support item promotions for an eBay store owner, the Trading API will no longer be enhanced with any new item promotion capabilities as they are developed by
 * eBay. In addition, Promoted Listings are also not supported by the Trading API. For these two reasons, it is recommended that sellers/developers make plans to migrate to the <a
 * href="https://developer.ebay.com/api-docs/sell/marketing/overview.html">Marketing API</a>, which provides all Promotions Manager and Promoted Listings capabilities, and this API will continue to be improved and enhanced as more marketing features
 * become available to sellers. </span> The base response of the <b>SetPromotionalSaleListings</b> call. Contains the status of a promotional sale.
 * @subpackage Structs
 */
class SetPromotionalSaleListingsResponseType extends AbstractResponseType
{
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: The enumeration value in this field indicates the status of the promotional sale action (add or delete). See <b>PromotionalSaleStatusCodeType</b> for more information on status values.
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * Constructor method for SetPromotionalSaleListingsResponseType
     * @uses SetPromotionalSaleListingsResponseType::setStatus()
     * @param string $status
     */
    public function __construct($status = null)
    {
        $this
            ->setStatus($status);
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \EnumType\PromotionalSaleStatusCodeType::valueIsValid()
     * @uses \EnumType\PromotionalSaleStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \StructType\SetPromotionalSaleListingsResponseType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PromotionalSaleStatusCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\PromotionalSaleStatusCodeType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \EnumType\PromotionalSaleStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
}
