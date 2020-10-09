<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Revise ServiceType
 * @subpackage Services
 */
class Revise extends AbstractSoapClientBase
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
     * Method to call the operation originally named ReviseCheckoutStatus
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReviseCheckoutStatusRequestType $reviseCheckoutStatusRequest
     * @return \StructType\ReviseCheckoutStatusResponseType|bool
     */
    public function ReviseCheckoutStatus(\StructType\ReviseCheckoutStatusRequestType $reviseCheckoutStatusRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->ReviseCheckoutStatus($reviseCheckoutStatusRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReviseFixedPriceItem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReviseFixedPriceItemRequestType $reviseFixedPriceItemRequest
     * @return \StructType\ReviseFixedPriceItemResponseType|bool
     */
    public function ReviseFixedPriceItem(\StructType\ReviseFixedPriceItemRequestType $reviseFixedPriceItemRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->ReviseFixedPriceItem($reviseFixedPriceItemRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReviseInventoryStatus
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReviseInventoryStatusRequestType $reviseInventoryStatusRequest
     * @return \StructType\ReviseInventoryStatusResponseType|bool
     */
    public function ReviseInventoryStatus(\StructType\ReviseInventoryStatusRequestType $reviseInventoryStatusRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->ReviseInventoryStatus($reviseInventoryStatusRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReviseItem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReviseItemRequestType $reviseItemRequest
     * @return \StructType\ReviseItemResponseType|bool
     */
    public function ReviseItem(\StructType\ReviseItemRequestType $reviseItemRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->ReviseItem($reviseItemRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReviseMyMessages
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReviseMyMessagesRequestType $reviseMyMessagesRequest
     * @return \StructType\ReviseMyMessagesResponseType|bool
     */
    public function ReviseMyMessages(\StructType\ReviseMyMessagesRequestType $reviseMyMessagesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->ReviseMyMessages($reviseMyMessagesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReviseMyMessagesFolders
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReviseMyMessagesFoldersRequestType $reviseMyMessagesFoldersRequest
     * @return \StructType\ReviseMyMessagesFoldersResponseType|bool
     */
    public function ReviseMyMessagesFolders(\StructType\ReviseMyMessagesFoldersRequestType $reviseMyMessagesFoldersRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->ReviseMyMessagesFolders($reviseMyMessagesFoldersRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * ReviseSellingManagerInventoryFolder
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReviseSellingManagerInventoryFolderRequestType $reviseSellingManagerInventoryFolderRequest
     * @return \StructType\ReviseSellingManagerInventoryFolderResponseType|bool
     */
    public function ReviseSellingManagerInventoryFolder(\StructType\ReviseSellingManagerInventoryFolderRequestType $reviseSellingManagerInventoryFolderRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->ReviseSellingManagerInventoryFolder($reviseSellingManagerInventoryFolderRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReviseSellingManagerProduct
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReviseSellingManagerProductRequestType $reviseSellingManagerProductRequest
     * @return \StructType\ReviseSellingManagerProductResponseType|bool
     */
    public function ReviseSellingManagerProduct(\StructType\ReviseSellingManagerProductRequestType $reviseSellingManagerProductRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->ReviseSellingManagerProduct($reviseSellingManagerProductRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReviseSellingManagerSaleRecord
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReviseSellingManagerSaleRecordRequestType $reviseSellingManagerSaleRecordRequest
     * @return \StructType\ReviseSellingManagerSaleRecordResponseType|bool
     */
    public function ReviseSellingManagerSaleRecord(\StructType\ReviseSellingManagerSaleRecordRequestType $reviseSellingManagerSaleRecordRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->ReviseSellingManagerSaleRecord($reviseSellingManagerSaleRecordRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReviseSellingManagerTemplate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReviseSellingManagerTemplateRequestType $reviseSellingManagerTemplateRequest
     * @return \StructType\ReviseSellingManagerTemplateResponseType|bool
     */
    public function ReviseSellingManagerTemplate(\StructType\ReviseSellingManagerTemplateRequestType $reviseSellingManagerTemplateRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->ReviseSellingManagerTemplate($reviseSellingManagerTemplateRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\ReviseCheckoutStatusResponseType|\StructType\ReviseFixedPriceItemResponseType|\StructType\ReviseInventoryStatusResponseType|\StructType\ReviseItemResponseType|\StructType\ReviseMyMessagesFoldersResponseType|\StructType\ReviseMyMessagesResponseType|\StructType\ReviseSellingManagerInventoryFolderResponseType|\StructType\ReviseSellingManagerProductResponseType|\StructType\ReviseSellingManagerSaleRecordResponseType|\StructType\ReviseSellingManagerTemplateResponseType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
