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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetVeROReasonCodeDetailsResponseType
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
