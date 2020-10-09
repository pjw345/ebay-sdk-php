<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Disable ServiceType
 * @subpackage Services
 */
class Disable extends AbstractSoapClientBase
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
     * Method to call the operation originally named DisableUnpaidItemAssistance
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DisableUnpaidItemAssistanceRequestType $disableUnpaidItemAssistanceRequest
     * @return \StructType\DisableUnpaidItemAssistanceResponseType|bool
     */
    public function DisableUnpaidItemAssistance(\StructType\DisableUnpaidItemAssistanceRequestType $disableUnpaidItemAssistanceRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->DisableUnpaidItemAssistance($disableUnpaidItemAssistanceRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\DisableUnpaidItemAssistanceResponseType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
