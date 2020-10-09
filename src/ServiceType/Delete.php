<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends AbstractSoapClientBase
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
     * Method to call the operation originally named DeleteMyMessages
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DeleteMyMessagesRequestType $deleteMyMessagesRequest
     * @return \StructType\DeleteMyMessagesResponseType|bool
     */
    public function DeleteMyMessages(\StructType\DeleteMyMessagesRequestType $deleteMyMessagesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->DeleteMyMessages($deleteMyMessagesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * DeleteSellingManagerInventoryFolder
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DeleteSellingManagerInventoryFolderRequestType $deleteSellingManagerInventoryFolderRequest
     * @return \StructType\DeleteSellingManagerInventoryFolderResponseType|bool
     */
    public function DeleteSellingManagerInventoryFolder(\StructType\DeleteSellingManagerInventoryFolderRequestType $deleteSellingManagerInventoryFolderRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->DeleteSellingManagerInventoryFolder($deleteSellingManagerInventoryFolderRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * DeleteSellingManagerItemAutomationRule
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DeleteSellingManagerItemAutomationRuleRequestType $deleteSellingManagerItemAutomationRuleRequest
     * @return \StructType\DeleteSellingManagerItemAutomationRuleResponseType|bool
     */
    public function DeleteSellingManagerItemAutomationRule(\StructType\DeleteSellingManagerItemAutomationRuleRequestType $deleteSellingManagerItemAutomationRuleRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->DeleteSellingManagerItemAutomationRule($deleteSellingManagerItemAutomationRuleRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeleteSellingManagerProduct
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DeleteSellingManagerProductRequestType $deleteSellingManagerProductRequest
     * @return \StructType\DeleteSellingManagerProductResponseType|bool
     */
    public function DeleteSellingManagerProduct(\StructType\DeleteSellingManagerProductRequestType $deleteSellingManagerProductRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->DeleteSellingManagerProduct($deleteSellingManagerProductRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeleteSellingManagerTemplate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DeleteSellingManagerTemplateRequestType $deleteSellingManagerTemplateRequest
     * @return \StructType\DeleteSellingManagerTemplateResponseType|bool
     */
    public function DeleteSellingManagerTemplate(\StructType\DeleteSellingManagerTemplateRequestType $deleteSellingManagerTemplateRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->DeleteSellingManagerTemplate($deleteSellingManagerTemplateRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * DeleteSellingManagerTemplateAutomationRule
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DeleteSellingManagerTemplateAutomationRuleRequestType $deleteSellingManagerTemplateAutomationRuleRequest
     * @return \StructType\DeleteSellingManagerTemplateAutomationRuleResponseType|bool
     */
    public function DeleteSellingManagerTemplateAutomationRule(\StructType\DeleteSellingManagerTemplateAutomationRuleRequestType $deleteSellingManagerTemplateAutomationRuleRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->DeleteSellingManagerTemplateAutomationRule($deleteSellingManagerTemplateAutomationRuleRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\DeleteMyMessagesResponseType|\StructType\DeleteSellingManagerInventoryFolderResponseType|\StructType\DeleteSellingManagerItemAutomationRuleResponseType|\StructType\DeleteSellingManagerProductResponseType|\StructType\DeleteSellingManagerTemplateAutomationRuleResponseType|\StructType\DeleteSellingManagerTemplateResponseType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
