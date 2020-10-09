<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Respond ServiceType
 * @subpackage Services
 */
class Respond extends AbstractSoapClientBase
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
     * Method to call the operation originally named RespondToBestOffer
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RespondToBestOfferRequestType $respondToBestOfferRequest
     * @return \StructType\RespondToBestOfferResponseType|bool
     */
    public function RespondToBestOffer(\StructType\RespondToBestOfferRequestType $respondToBestOfferRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->RespondToBestOffer($respondToBestOfferRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named RespondToFeedback
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RespondToFeedbackRequestType $respondToFeedbackRequest
     * @return \StructType\RespondToFeedbackResponseType|bool
     */
    public function RespondToFeedback(\StructType\RespondToFeedbackRequestType $respondToFeedbackRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->RespondToFeedback($respondToFeedbackRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\RespondToBestOfferResponseType|\StructType\RespondToFeedbackResponseType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
