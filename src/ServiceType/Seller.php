<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Seller ServiceType
 * @subpackage Services
 */
class Seller extends AbstractSoapClientBase
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
     * Method to call the operation originally named SellerReverseDispute
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SellerReverseDisputeRequestType $sellerReverseDisputeRequest
     * @return \StructType\SellerReverseDisputeResponseType|bool
     */
    public function SellerReverseDispute(\StructType\SellerReverseDisputeRequestType $sellerReverseDisputeRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->SellerReverseDispute($sellerReverseDisputeRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\SellerReverseDisputeResponseType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
