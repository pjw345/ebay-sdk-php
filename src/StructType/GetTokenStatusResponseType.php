<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTokenStatusResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response of the <b>GetTokenStatus</b> call. This call retrieves the status of a user token.
 * @subpackage Structs
 */
class GetTokenStatusResponseType extends AbstractResponseType
{
    /**
     * The TokenStatus
     * Meta information extracted from the WSDL
     * - documentation: This container value indicates the status and expiration date of a user token. If a user token was revoked, the date/time of the revocation is also returned under this container.
     * - minOccurs: 0
     * @var \StructType\TokenStatusType
     */
    public $TokenStatus;
    /**
     * Constructor method for GetTokenStatusResponseType
     * @uses GetTokenStatusResponseType::setTokenStatus()
     * @param \StructType\TokenStatusType $tokenStatus
     */
    public function __construct(\StructType\TokenStatusType $tokenStatus = null)
    {
        $this
            ->setTokenStatus($tokenStatus);
    }
    /**
     * Get TokenStatus value
     * @return \StructType\TokenStatusType|null
     */
    public function getTokenStatus()
    {
        return $this->TokenStatus;
    }
    /**
     * Set TokenStatus value
     * @param \StructType\TokenStatusType $tokenStatus
     * @return \StructType\GetTokenStatusResponseType
     */
    public function setTokenStatus(\StructType\TokenStatusType $tokenStatus = null)
    {
        $this->TokenStatus = $tokenStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetTokenStatusResponseType
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
