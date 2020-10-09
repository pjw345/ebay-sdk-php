<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BusinessSellerDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>BusinessSellerDetails</b> container, which is returned in an <b>Item</b> node if the item's seller is registered on eBay as a Business Seller.
 * @subpackage Structs
 */
class BusinessSellerDetailsType extends AbstractStructBase
{
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - documentation: This field shows the address on file for the Business Seller.
     * - minOccurs: 0
     * @var \StructType\AddressType
     */
    public $Address;
    /**
     * The Fax
     * Meta information extracted from the WSDL
     * - documentation: This field shows the Fax number on file for the Business Seller. This field is only returned if known and available.
     * - minOccurs: 0
     * @var string
     */
    public $Fax;
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - documentation: This field shows the email address on file for the Business Seller.
     * - minOccurs: 0
     * @var string
     */
    public $Email;
    /**
     * The AdditionalContactInformation
     * Meta information extracted from the WSDL
     * - documentation: This field shows any additional contact for the Business Seller in free-form text. This field is only returned if known and available.
     * - minOccurs: 0
     * @var string
     */
    public $AdditionalContactInformation;
    /**
     * The TradeRegistrationNumber
     * Meta information extracted from the WSDL
     * - documentation: This field shows the Trade Registration Number for the Business Seller.
     * - minOccurs: 0
     * @var string
     */
    public $TradeRegistrationNumber;
    /**
     * The LegalInvoice
     * Meta information extracted from the WSDL
     * - documentation: This boolean field is returned as <code>true</code> if the Business Seller provides legal invoices to buyers.
     * - minOccurs: 0
     * @var bool
     */
    public $LegalInvoice;
    /**
     * The TermsAndConditions
     * Meta information extracted from the WSDL
     * - documentation: This free-form text field provides the Business Seller's terms and conditions for doing business.
     * - minOccurs: 0
     * @var string
     */
    public $TermsAndConditions;
    /**
     * The VATDetails
     * Meta information extracted from the WSDL
     * - documentation: This container provides Value-Added Tax (VAT) details for the Business Seller, including the seller's VAT ID and the VAT percentage rate applicable to the item. VAT is similar to a sales and/or consumption tax, and it is only
     * applicable to sellers selling on European sites.
     * - minOccurs: 0
     * @var \StructType\VATDetailsType
     */
    public $VATDetails;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for BusinessSellerDetailsType
     * @uses BusinessSellerDetailsType::setAddress()
     * @uses BusinessSellerDetailsType::setFax()
     * @uses BusinessSellerDetailsType::setEmail()
     * @uses BusinessSellerDetailsType::setAdditionalContactInformation()
     * @uses BusinessSellerDetailsType::setTradeRegistrationNumber()
     * @uses BusinessSellerDetailsType::setLegalInvoice()
     * @uses BusinessSellerDetailsType::setTermsAndConditions()
     * @uses BusinessSellerDetailsType::setVATDetails()
     * @uses BusinessSellerDetailsType::setAny()
     * @param \StructType\AddressType $address
     * @param string $fax
     * @param string $email
     * @param string $additionalContactInformation
     * @param string $tradeRegistrationNumber
     * @param bool $legalInvoice
     * @param string $termsAndConditions
     * @param \StructType\VATDetailsType $vATDetails
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\AddressType $address = null, $fax = null, $email = null, $additionalContactInformation = null, $tradeRegistrationNumber = null, $legalInvoice = null, $termsAndConditions = null, \StructType\VATDetailsType $vATDetails = null, \DOMDocument $any = null)
    {
        $this
            ->setAddress($address)
            ->setFax($fax)
            ->setEmail($email)
            ->setAdditionalContactInformation($additionalContactInformation)
            ->setTradeRegistrationNumber($tradeRegistrationNumber)
            ->setLegalInvoice($legalInvoice)
            ->setTermsAndConditions($termsAndConditions)
            ->setVATDetails($vATDetails)
            ->setAny($any);
    }
    /**
     * Get Address value
     * @return \StructType\AddressType|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \StructType\AddressType $address
     * @return \StructType\BusinessSellerDetailsType
     */
    public function setAddress(\StructType\AddressType $address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get Fax value
     * @return string|null
     */
    public function getFax()
    {
        return $this->Fax;
    }
    /**
     * Set Fax value
     * @param string $fax
     * @return \StructType\BusinessSellerDetailsType
     */
    public function setFax($fax = null)
    {
        // validation for constraint: string
        if (!is_null($fax) && !is_string($fax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fax, true), gettype($fax)), __LINE__);
        }
        $this->Fax = $fax;
        return $this;
    }
    /**
     * Get Email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return \StructType\BusinessSellerDetailsType
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->Email = $email;
        return $this;
    }
    /**
     * Get AdditionalContactInformation value
     * @return string|null
     */
    public function getAdditionalContactInformation()
    {
        return $this->AdditionalContactInformation;
    }
    /**
     * Set AdditionalContactInformation value
     * @param string $additionalContactInformation
     * @return \StructType\BusinessSellerDetailsType
     */
    public function setAdditionalContactInformation($additionalContactInformation = null)
    {
        // validation for constraint: string
        if (!is_null($additionalContactInformation) && !is_string($additionalContactInformation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($additionalContactInformation, true), gettype($additionalContactInformation)), __LINE__);
        }
        $this->AdditionalContactInformation = $additionalContactInformation;
        return $this;
    }
    /**
     * Get TradeRegistrationNumber value
     * @return string|null
     */
    public function getTradeRegistrationNumber()
    {
        return $this->TradeRegistrationNumber;
    }
    /**
     * Set TradeRegistrationNumber value
     * @param string $tradeRegistrationNumber
     * @return \StructType\BusinessSellerDetailsType
     */
    public function setTradeRegistrationNumber($tradeRegistrationNumber = null)
    {
        // validation for constraint: string
        if (!is_null($tradeRegistrationNumber) && !is_string($tradeRegistrationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tradeRegistrationNumber, true), gettype($tradeRegistrationNumber)), __LINE__);
        }
        $this->TradeRegistrationNumber = $tradeRegistrationNumber;
        return $this;
    }
    /**
     * Get LegalInvoice value
     * @return bool|null
     */
    public function getLegalInvoice()
    {
        return $this->LegalInvoice;
    }
    /**
     * Set LegalInvoice value
     * @param bool $legalInvoice
     * @return \StructType\BusinessSellerDetailsType
     */
    public function setLegalInvoice($legalInvoice = null)
    {
        // validation for constraint: boolean
        if (!is_null($legalInvoice) && !is_bool($legalInvoice)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($legalInvoice, true), gettype($legalInvoice)), __LINE__);
        }
        $this->LegalInvoice = $legalInvoice;
        return $this;
    }
    /**
     * Get TermsAndConditions value
     * @return string|null
     */
    public function getTermsAndConditions()
    {
        return $this->TermsAndConditions;
    }
    /**
     * Set TermsAndConditions value
     * @param string $termsAndConditions
     * @return \StructType\BusinessSellerDetailsType
     */
    public function setTermsAndConditions($termsAndConditions = null)
    {
        // validation for constraint: string
        if (!is_null($termsAndConditions) && !is_string($termsAndConditions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($termsAndConditions, true), gettype($termsAndConditions)), __LINE__);
        }
        $this->TermsAndConditions = $termsAndConditions;
        return $this;
    }
    /**
     * Get VATDetails value
     * @return \StructType\VATDetailsType|null
     */
    public function getVATDetails()
    {
        return $this->VATDetails;
    }
    /**
     * Set VATDetails value
     * @param \StructType\VATDetailsType $vATDetails
     * @return \StructType\BusinessSellerDetailsType
     */
    public function setVATDetails(\StructType\VATDetailsType $vATDetails = null)
    {
        $this->VATDetails = $vATDetails;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        $domDocument = null;
        if (!empty($this->any) && !$asString) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asString ? $this->any : $domDocument;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument $any
     * @return \StructType\BusinessSellerDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
