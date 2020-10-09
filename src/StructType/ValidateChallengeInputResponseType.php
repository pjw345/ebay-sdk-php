<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateChallengeInputResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Base response of the <b>ValidateChallengeInput</b> call. The response indicates whether the botblock challenge was successful.
 * @subpackage Structs
 */
class ValidateChallengeInputResponseType extends AbstractResponseType
{
    /**
     * The ValidToken
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the token is valid.
     * - minOccurs: 0
     * @var bool
     */
    public $ValidToken;
    /**
     * Constructor method for ValidateChallengeInputResponseType
     * @uses ValidateChallengeInputResponseType::setValidToken()
     * @param bool $validToken
     */
    public function __construct($validToken = null)
    {
        $this
            ->setValidToken($validToken);
    }
    /**
     * Get ValidToken value
     * @return bool|null
     */
    public function getValidToken()
    {
        return $this->ValidToken;
    }
    /**
     * Set ValidToken value
     * @param bool $validToken
     * @return \StructType\ValidateChallengeInputResponseType
     */
    public function setValidToken($validToken = null)
    {
        // validation for constraint: boolean
        if (!is_null($validToken) && !is_bool($validToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($validToken, true), gettype($validToken)), __LINE__);
        }
        $this->ValidToken = $validToken;
        return $this;
    }
}
