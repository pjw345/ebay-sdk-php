<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPromotionalSaleDetailsResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> While the Trading API continues to support item promotions for an eBay store owner, the Trading API will no longer be enhanced with any new item promotion capabilities as they are developed by
 * eBay. In addition, Promoted Listings are also not supported by the Trading API. For these two reasons, it is recommended that sellers/developers make plans to migrate to the <a
 * href="https://developer.ebay.com/api-docs/sell/marketing/overview.html">Marketing API</a>, which provides all Promotions Manager and Promoted Listings capabilities, and this API will continue to be improved and enhanced as more marketing features
 * become available to sellers. </span> The base response type for the <b>GetPromotionalSaleDetails</b> call. This call retrieves information about promotional sales set up by an eBay store owner.
 * @subpackage Structs
 */
class GetPromotionalSaleDetailsResponseType extends AbstractResponseType
{
    /**
     * The PromotionalSaleDetails
     * Meta information extracted from the WSDL
     * - documentation: This container consists of an array of one or more promotional sales for an eBay store owner. A <b>PromotionalSaleDetails.PromotionalSale</b> container is returned for each promotional sale that matches the input criteria in the call
     * request.
     * - minOccurs: 0
     * @var \ArrayType\PromotionalSaleArrayType
     */
    public $PromotionalSaleDetails;
    /**
     * Constructor method for GetPromotionalSaleDetailsResponseType
     * @uses GetPromotionalSaleDetailsResponseType::setPromotionalSaleDetails()
     * @param \ArrayType\PromotionalSaleArrayType $promotionalSaleDetails
     */
    public function __construct(\ArrayType\PromotionalSaleArrayType $promotionalSaleDetails = null)
    {
        $this
            ->setPromotionalSaleDetails($promotionalSaleDetails);
    }
    /**
     * Get PromotionalSaleDetails value
     * @return \ArrayType\PromotionalSaleArrayType|null
     */
    public function getPromotionalSaleDetails()
    {
        return $this->PromotionalSaleDetails;
    }
    /**
     * Set PromotionalSaleDetails value
     * @param \ArrayType\PromotionalSaleArrayType $promotionalSaleDetails
     * @return \StructType\GetPromotionalSaleDetailsResponseType
     */
    public function setPromotionalSaleDetails(\ArrayType\PromotionalSaleArrayType $promotionalSaleDetails = null)
    {
        $this->PromotionalSaleDetails = $promotionalSaleDetails;
        return $this;
    }
}
