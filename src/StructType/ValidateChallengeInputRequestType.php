<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateChallengeInputRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Validates the user response to a <b class="con">GetChallengeToken</b> botblock challenge.
 * @subpackage Structs
 */
class ValidateChallengeInputRequestType extends AbstractRequestType
{
    /**
     * The ChallengeToken
     * Meta information extracted from the WSDL
     * - documentation: Botblock token that was returned by <b>GetChallengeToken</b>.
     * - minOccurs: 0
     * @var string
     */
    public $ChallengeToken;
    /**
     * The UserInput
     * Meta information extracted from the WSDL
     * - documentation: User response to a bot block challenge.
     * - minOccurs: 0
     * @var string
     */
    public $UserInput;
    /**
     * The KeepTokenValid
     * Meta information extracted from the WSDL
     * - documentation: This boolean field is included and set to 'true' if the challenge token should remain valid for up to two minutes.
     * - minOccurs: 0
     * @var bool
     */
    public $KeepTokenValid;
    /**
     * Constructor method for ValidateChallengeInputRequestType
     * @uses ValidateChallengeInputRequestType::setChallengeToken()
     * @uses ValidateChallengeInputRequestType::setUserInput()
     * @uses ValidateChallengeInputRequestType::setKeepTokenValid()
     * @param string $challengeToken
     * @param string $userInput
     * @param bool $keepTokenValid
     */
    public function __construct($challengeToken = null, $userInput = null, $keepTokenValid = null)
    {
        $this
            ->setChallengeToken($challengeToken)
            ->setUserInput($userInput)
            ->setKeepTokenValid($keepTokenValid);
    }
    /**
     * Get ChallengeToken value
     * @return string|null
     */
    public function getChallengeToken()
    {
        return $this->ChallengeToken;
    }
    /**
     * Set ChallengeToken value
     * @param string $challengeToken
     * @return \StructType\ValidateChallengeInputRequestType
     */
    public function setChallengeToken($challengeToken = null)
    {
        // validation for constraint: string
        if (!is_null($challengeToken) && !is_string($challengeToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($challengeToken, true), gettype($challengeToken)), __LINE__);
        }
        $this->ChallengeToken = $challengeToken;
        return $this;
    }
    /**
     * Get UserInput value
     * @return string|null
     */
    public function getUserInput()
    {
        return $this->UserInput;
    }
    /**
     * Set UserInput value
     * @param string $userInput
     * @return \StructType\ValidateChallengeInputRequestType
     */
    public function setUserInput($userInput = null)
    {
        // validation for constraint: string
        if (!is_null($userInput) && !is_string($userInput)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userInput, true), gettype($userInput)), __LINE__);
        }
        $this->UserInput = $userInput;
        return $this;
    }
    /**
     * Get KeepTokenValid value
     * @return bool|null
     */
    public function getKeepTokenValid()
    {
        return $this->KeepTokenValid;
    }
    /**
     * Set KeepTokenValid value
     * @param bool $keepTokenValid
     * @return \StructType\ValidateChallengeInputRequestType
     */
    public function setKeepTokenValid($keepTokenValid = null)
    {
        // validation for constraint: boolean
        if (!is_null($keepTokenValid) && !is_bool($keepTokenValid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($keepTokenValid, true), gettype($keepTokenValid)), __LINE__);
        }
        $this->KeepTokenValid = $keepTokenValid;
        return $this;
    }
}
