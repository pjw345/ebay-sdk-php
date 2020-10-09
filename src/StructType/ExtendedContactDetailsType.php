<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtendedContactDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used to provide contact hours for a seller of a Classified Ad listing, including motor vehicles. There is also a boolean field in this type that indicates whether or not potential buyer can contact the seller by email.
 * @subpackage Structs
 */
class ExtendedContactDetailsType extends AbstractStructBase
{
    /**
     * The ContactHoursDetails
     * Meta information extracted from the WSDL
     * - documentation: This containers consists of fields that allows the seller of a Classified Ad listing to tell potential buyers what days and times they may be contacted to inquire about the listing.
     * - minOccurs: 0
     * @var \StructType\ContactHoursDetailsType
     */
    public $ContactHoursDetails;
    /**
     * The ClassifiedAdContactByEmailEnabled
     * Meta information extracted from the WSDL
     * - documentation: A value of <code>true</code> in this field indicates that potential buyers can contact the seller of the Classified Ad listing by email.
     * - minOccurs: 0
     * @var bool
     */
    public $ClassifiedAdContactByEmailEnabled;
    /**
     * The PayPerLeadPhoneNumber
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $PayPerLeadPhoneNumber;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ExtendedContactDetailsType
     * @uses ExtendedContactDetailsType::setContactHoursDetails()
     * @uses ExtendedContactDetailsType::setClassifiedAdContactByEmailEnabled()
     * @uses ExtendedContactDetailsType::setPayPerLeadPhoneNumber()
     * @uses ExtendedContactDetailsType::setAny()
     * @param \StructType\ContactHoursDetailsType $contactHoursDetails
     * @param bool $classifiedAdContactByEmailEnabled
     * @param string $payPerLeadPhoneNumber
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\ContactHoursDetailsType $contactHoursDetails = null, $classifiedAdContactByEmailEnabled = null, $payPerLeadPhoneNumber = null, \DOMDocument $any = null)
    {
        $this
            ->setContactHoursDetails($contactHoursDetails)
            ->setClassifiedAdContactByEmailEnabled($classifiedAdContactByEmailEnabled)
            ->setPayPerLeadPhoneNumber($payPerLeadPhoneNumber)
            ->setAny($any);
    }
    /**
     * Get ContactHoursDetails value
     * @return \StructType\ContactHoursDetailsType|null
     */
    public function getContactHoursDetails()
    {
        return $this->ContactHoursDetails;
    }
    /**
     * Set ContactHoursDetails value
     * @param \StructType\ContactHoursDetailsType $contactHoursDetails
     * @return \StructType\ExtendedContactDetailsType
     */
    public function setContactHoursDetails(\StructType\ContactHoursDetailsType $contactHoursDetails = null)
    {
        $this->ContactHoursDetails = $contactHoursDetails;
        return $this;
    }
    /**
     * Get ClassifiedAdContactByEmailEnabled value
     * @return bool|null
     */
    public function getClassifiedAdContactByEmailEnabled()
    {
        return $this->ClassifiedAdContactByEmailEnabled;
    }
    /**
     * Set ClassifiedAdContactByEmailEnabled value
     * @param bool $classifiedAdContactByEmailEnabled
     * @return \StructType\ExtendedContactDetailsType
     */
    public function setClassifiedAdContactByEmailEnabled($classifiedAdContactByEmailEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($classifiedAdContactByEmailEnabled) && !is_bool($classifiedAdContactByEmailEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($classifiedAdContactByEmailEnabled, true), gettype($classifiedAdContactByEmailEnabled)), __LINE__);
        }
        $this->ClassifiedAdContactByEmailEnabled = $classifiedAdContactByEmailEnabled;
        return $this;
    }
    /**
     * Get PayPerLeadPhoneNumber value
     * @return string|null
     */
    public function getPayPerLeadPhoneNumber()
    {
        return $this->PayPerLeadPhoneNumber;
    }
    /**
     * Set PayPerLeadPhoneNumber value
     * @param string $payPerLeadPhoneNumber
     * @return \StructType\ExtendedContactDetailsType
     */
    public function setPayPerLeadPhoneNumber($payPerLeadPhoneNumber = null)
    {
        // validation for constraint: string
        if (!is_null($payPerLeadPhoneNumber) && !is_string($payPerLeadPhoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($payPerLeadPhoneNumber, true), gettype($payPerLeadPhoneNumber)), __LINE__);
        }
        $this->PayPerLeadPhoneNumber = $payPerLeadPhoneNumber;
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
     * @return \StructType\ExtendedContactDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
