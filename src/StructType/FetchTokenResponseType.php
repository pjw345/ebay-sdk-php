<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FetchTokenResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Includes the authentication token for the user and the date it expires.
 * @subpackage Structs
 */
class FetchTokenResponseType extends AbstractResponseType
{
    /**
     * The eBayAuthToken
     * Meta information extracted from the WSDL
     * - documentation: The authentication token for the user.
     * - minOccurs: 0
     * @var string
     */
    public $eBayAuthToken;
    /**
     * The HardExpirationTime
     * Meta information extracted from the WSDL
     * - documentation: Date and time at which the token returned in eBayAuthToken expires and can no longer be used to authenticate the user for that application.
     * - minOccurs: 0
     * @var string
     */
    public $HardExpirationTime;
    /**
     * The RESTToken
     * Meta information extracted from the WSDL
     * - documentation: The REST authentication token for the user.
     * - minOccurs: 0
     * @var string
     */
    public $RESTToken;
    /**
     * Constructor method for FetchTokenResponseType
     * @uses FetchTokenResponseType::setEBayAuthToken()
     * @uses FetchTokenResponseType::setHardExpirationTime()
     * @uses FetchTokenResponseType::setRESTToken()
     * @param string $eBayAuthToken
     * @param string $hardExpirationTime
     * @param string $rESTToken
     */
    public function __construct($eBayAuthToken = null, $hardExpirationTime = null, $rESTToken = null)
    {
        $this
            ->setEBayAuthToken($eBayAuthToken)
            ->setHardExpirationTime($hardExpirationTime)
            ->setRESTToken($rESTToken);
    }
    /**
     * Get eBayAuthToken value
     * @return string|null
     */
    public function getEBayAuthToken()
    {
        return $this->eBayAuthToken;
    }
    /**
     * Set eBayAuthToken value
     * @param string $eBayAuthToken
     * @return \StructType\FetchTokenResponseType
     */
    public function setEBayAuthToken($eBayAuthToken = null)
    {
        // validation for constraint: string
        if (!is_null($eBayAuthToken) && !is_string($eBayAuthToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eBayAuthToken, true), gettype($eBayAuthToken)), __LINE__);
        }
        $this->eBayAuthToken = $eBayAuthToken;
        return $this;
    }
    /**
     * Get HardExpirationTime value
     * @return string|null
     */
    public function getHardExpirationTime()
    {
        return $this->HardExpirationTime;
    }
    /**
     * Set HardExpirationTime value
     * @param string $hardExpirationTime
     * @return \StructType\FetchTokenResponseType
     */
    public function setHardExpirationTime($hardExpirationTime = null)
    {
        // validation for constraint: string
        if (!is_null($hardExpirationTime) && !is_string($hardExpirationTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hardExpirationTime, true), gettype($hardExpirationTime)), __LINE__);
        }
        $this->HardExpirationTime = $hardExpirationTime;
        return $this;
    }
    /**
     * Get RESTToken value
     * @return string|null
     */
    public function getRESTToken()
    {
        return $this->RESTToken;
    }
    /**
     * Set RESTToken value
     * @param string $rESTToken
     * @return \StructType\FetchTokenResponseType
     */
    public function setRESTToken($rESTToken = null)
    {
        // validation for constraint: string
        if (!is_null($rESTToken) && !is_string($rESTToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rESTToken, true), gettype($rESTToken)), __LINE__);
        }
        $this->RESTToken = $rESTToken;
        return $this;
    }
}
