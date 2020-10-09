<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Validate ServiceType
 * @subpackage Services
 */
class Validate extends AbstractSoapClientBase
{
    /**
     * Sets the RequesterCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \StructType\CustomSecurityHeaderType $requesterCredentials
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderRequesterCredentials(\StructType\CustomSecurityHeaderType $requesterCredentials, $nameSpace = 'urn:ebay:apis:eBLBaseComponents', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'RequesterCredentials', $requesterCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named ValidateChallengeInput
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ValidateChallengeInputRequestType $validateChallengeInputRequest
     * @return \StructType\ValidateChallengeInputResponseType|bool
     */
    public function ValidateChallengeInput(\StructType\ValidateChallengeInputRequestType $validateChallengeInputRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->ValidateChallengeInput($validateChallengeInputRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ValidateTestUserRegistration
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ValidateTestUserRegistrationRequestType $validateTestUserRegistrationRequest
     * @return \StructType\ValidateTestUserRegistrationResponseType|bool
     */
    public function ValidateTestUserRegistration(\StructType\ValidateTestUserRegistrationRequestType $validateTestUserRegistrationRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->ValidateTestUserRegistration($validateTestUserRegistrationRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\ValidateChallengeInputResponseType|\StructType\ValidateTestUserRegistrationResponseType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
