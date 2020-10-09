<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Verify ServiceType
 * @subpackage Services
 */
class Verify extends AbstractSoapClientBase
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
     * Method to call the operation originally named VerifyAddFixedPriceItem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\VerifyAddFixedPriceItemRequestType $verifyAddFixedPriceItemRequest
     * @return \StructType\VerifyAddFixedPriceItemResponseType|bool
     */
    public function VerifyAddFixedPriceItem(\StructType\VerifyAddFixedPriceItemRequestType $verifyAddFixedPriceItemRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->VerifyAddFixedPriceItem($verifyAddFixedPriceItemRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named VerifyAddItem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\VerifyAddItemRequestType $verifyAddItemRequest
     * @return \StructType\VerifyAddItemResponseType|bool
     */
    public function VerifyAddItem(\StructType\VerifyAddItemRequestType $verifyAddItemRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->VerifyAddItem($verifyAddItemRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named VerifyAddSecondChanceItem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\VerifyAddSecondChanceItemRequestType $verifyAddSecondChanceItemRequest
     * @return \StructType\VerifyAddSecondChanceItemResponseType|bool
     */
    public function VerifyAddSecondChanceItem(\StructType\VerifyAddSecondChanceItemRequestType $verifyAddSecondChanceItemRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->VerifyAddSecondChanceItem($verifyAddSecondChanceItemRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named VerifyRelistItem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\VerifyRelistItemRequestType $verifyRelistItemRequest
     * @return \StructType\VerifyRelistItemResponseType|bool
     */
    public function VerifyRelistItem(\StructType\VerifyRelistItemRequestType $verifyRelistItemRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->VerifyRelistItem($verifyRelistItemRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\VerifyAddFixedPriceItemResponseType|\StructType\VerifyAddItemResponseType|\StructType\VerifyAddSecondChanceItemResponseType|\StructType\VerifyRelistItemResponseType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
