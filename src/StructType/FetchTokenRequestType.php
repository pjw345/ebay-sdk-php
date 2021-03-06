<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FetchTokenRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieves an authentication token for a user.
 * @subpackage Structs
 */
class FetchTokenRequestType extends AbstractRequestType
{
    /**
     * The SecretID
     * Meta information extracted from the WSDL
     * - documentation: A value associated with the token retrieval request. SecretID is defined by the application, and is passed in the redirect URL to the eBay sign-in page. eBay recommends using a UUID for the secret ID value. You must also set Username
     * (part of the RequesterCredentials) for the particular user of interest. SecretID and Username are not required if SessionID is present.
     * - minOccurs: 0
     * @var string
     */
    public $SecretID;
    /**
     * The SessionID
     * Meta information extracted from the WSDL
     * - documentation: A value associated with the token retrieval request. eBay generates the session ID when the application makes a GetSessionID request. SessionID is passed in the redirect URL to the eBay sign-in page. The advantage of using SessionID
     * is that it does not require UserID as part of the FetchToken request. SessionID is not required if SecretID is present.
     * - minOccurs: 0
     * @var string
     */
    public $SessionID;
    /**
     * Constructor method for FetchTokenRequestType
     * @uses FetchTokenRequestType::setSecretID()
     * @uses FetchTokenRequestType::setSessionID()
     * @param string $secretID
     * @param string $sessionID
     */
    public function __construct($secretID = null, $sessionID = null)
    {
        $this
            ->setSecretID($secretID)
            ->setSessionID($sessionID);
    }
    /**
     * Get SecretID value
     * @return string|null
     */
    public function getSecretID()
    {
        return $this->SecretID;
    }
    /**
     * Set SecretID value
     * @param string $secretID
     * @return \StructType\FetchTokenRequestType
     */
    public function setSecretID($secretID = null)
    {
        // validation for constraint: string
        if (!is_null($secretID) && !is_string($secretID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($secretID, true), gettype($secretID)), __LINE__);
        }
        $this->SecretID = $secretID;
        return $this;
    }
    /**
     * Get SessionID value
     * @return string|null
     */
    public function getSessionID()
    {
        return $this->SessionID;
    }
    /**
     * Set SessionID value
     * @param string $sessionID
     * @return \StructType\FetchTokenRequestType
     */
    public function setSessionID($sessionID = null)
    {
        // validation for constraint: string
        if (!is_null($sessionID) && !is_string($sessionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sessionID, true), gettype($sessionID)), __LINE__);
        }
        $this->SessionID = $sessionID;
        return $this;
    }
}
