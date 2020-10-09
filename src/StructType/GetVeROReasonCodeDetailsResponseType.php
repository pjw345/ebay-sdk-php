<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVeROReasonCodeDetailsResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Base response of the <strong>GetVeROReasonCodeDetails</strong> call. This response will consists of one or more VeRO Program copyright/intellectual property infringement violation types.
 * @subpackage Structs
 */
class GetVeROReasonCodeDetailsResponseType extends AbstractResponseType
{
    /**
     * The VeROReasonCodeDetails
     * Meta information extracted from the WSDL
     * - documentation: This container consists of one or more VeRO Program copyright/intellectual property infringement violation types for one or more eBay sites.
     * - minOccurs: 0
     * @var \StructType\VeROReasonCodeDetailsType
     */
    public $VeROReasonCodeDetails;
    /**
     * Constructor method for GetVeROReasonCodeDetailsResponseType
     * @uses GetVeROReasonCodeDetailsResponseType::setVeROReasonCodeDetails()
     * @param \StructType\VeROReasonCodeDetailsType $veROReasonCodeDetails
     */
    public function __construct(\StructType\VeROReasonCodeDetailsType $veROReasonCodeDetails = null)
    {
        $this
            ->setVeROReasonCodeDetails($veROReasonCodeDetails);
    }
    /**
     * Get VeROReasonCodeDetails value
     * @return \StructType\VeROReasonCodeDetailsType|null
     */
    public function getVeROReasonCodeDetails()
    {
        return $this->VeROReasonCodeDetails;
    }
    /**
     * Set VeROReasonCodeDetails value
     * @param \StructType\VeROReasonCodeDetailsType $veROReasonCodeDetails
     * @return \StructType\GetVeROReasonCodeDetailsResponseType
     */
    public function setVeROReasonCodeDetails(\StructType\VeROReasonCodeDetailsType $veROReasonCodeDetails = null)
    {
        $this->VeROReasonCodeDetails = $veROReasonCodeDetails;
        return $this;
    }
}
