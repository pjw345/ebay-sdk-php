<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SMSSubscriptionType StructType
 * Meta information extracted from the WSDL
 * - documentation: User data related to notifications. Note that SMS is currently reserved for future use.
 * @subpackage Structs
 */
class SMSSubscriptionType extends AbstractStructBase
{
    /**
     * The SMSPhone
     * Meta information extracted from the WSDL
     * - documentation: The wireless phone number to be used for receiving SMS messages. Max length of phone number varies by country.
     * - minOccurs: 0
     * @var string
     */
    public $SMSPhone;
    /**
     * The UserStatus
     * Meta information extracted from the WSDL
     * - documentation: Registered/Unregistered/Pending.
     * - minOccurs: 0
     * @var string
     */
    public $UserStatus;
    /**
     * The CarrierID
     * Meta information extracted from the WSDL
     * - documentation: The wireless carrier ID.
     * - minOccurs: 0
     * @var string
     */
    public $CarrierID;
    /**
     * The ErrorCode
     * Meta information extracted from the WSDL
     * - documentation: Reason for SMS subscription error (postback from thired-party integrator).
     * - minOccurs: 0
     * @var string
     */
    public $ErrorCode;
    /**
     * The ItemToUnsubscribe
     * Meta information extracted from the WSDL
     * - documentation: ID of item to unsubscribe from SMS notification. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $ItemToUnsubscribe;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SMSSubscriptionType
     * @uses SMSSubscriptionType::setSMSPhone()
     * @uses SMSSubscriptionType::setUserStatus()
     * @uses SMSSubscriptionType::setCarrierID()
     * @uses SMSSubscriptionType::setErrorCode()
     * @uses SMSSubscriptionType::setItemToUnsubscribe()
     * @uses SMSSubscriptionType::setAny()
     * @param string $sMSPhone
     * @param string $userStatus
     * @param string $carrierID
     * @param string $errorCode
     * @param string $itemToUnsubscribe
     * @param \DOMDocument $any
     */
    public function __construct($sMSPhone = null, $userStatus = null, $carrierID = null, $errorCode = null, $itemToUnsubscribe = null, \DOMDocument $any = null)
    {
        $this
            ->setSMSPhone($sMSPhone)
            ->setUserStatus($userStatus)
            ->setCarrierID($carrierID)
            ->setErrorCode($errorCode)
            ->setItemToUnsubscribe($itemToUnsubscribe)
            ->setAny($any);
    }
    /**
     * Get SMSPhone value
     * @return string|null
     */
    public function getSMSPhone()
    {
        return $this->SMSPhone;
    }
    /**
     * Set SMSPhone value
     * @param string $sMSPhone
     * @return \StructType\SMSSubscriptionType
     */
    public function setSMSPhone($sMSPhone = null)
    {
        // validation for constraint: string
        if (!is_null($sMSPhone) && !is_string($sMSPhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sMSPhone, true), gettype($sMSPhone)), __LINE__);
        }
        $this->SMSPhone = $sMSPhone;
        return $this;
    }
    /**
     * Get UserStatus value
     * @return string|null
     */
    public function getUserStatus()
    {
        return $this->UserStatus;
    }
    /**
     * Set UserStatus value
     * @uses \EnumType\SMSSubscriptionUserStatusCodeType::valueIsValid()
     * @uses \EnumType\SMSSubscriptionUserStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $userStatus
     * @return \StructType\SMSSubscriptionType
     */
    public function setUserStatus($userStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SMSSubscriptionUserStatusCodeType::valueIsValid($userStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SMSSubscriptionUserStatusCodeType', is_array($userStatus) ? implode(', ', $userStatus) : var_export($userStatus, true), implode(', ', \EnumType\SMSSubscriptionUserStatusCodeType::getValidValues())), __LINE__);
        }
        $this->UserStatus = $userStatus;
        return $this;
    }
    /**
     * Get CarrierID value
     * @return string|null
     */
    public function getCarrierID()
    {
        return $this->CarrierID;
    }
    /**
     * Set CarrierID value
     * @uses \EnumType\WirelessCarrierIDCodeType::valueIsValid()
     * @uses \EnumType\WirelessCarrierIDCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $carrierID
     * @return \StructType\SMSSubscriptionType
     */
    public function setCarrierID($carrierID = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\WirelessCarrierIDCodeType::valueIsValid($carrierID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\WirelessCarrierIDCodeType', is_array($carrierID) ? implode(', ', $carrierID) : var_export($carrierID, true), implode(', ', \EnumType\WirelessCarrierIDCodeType::getValidValues())), __LINE__);
        }
        $this->CarrierID = $carrierID;
        return $this;
    }
    /**
     * Get ErrorCode value
     * @return string|null
     */
    public function getErrorCode()
    {
        return $this->ErrorCode;
    }
    /**
     * Set ErrorCode value
     * @uses \EnumType\SMSSubscriptionErrorCodeCodeType::valueIsValid()
     * @uses \EnumType\SMSSubscriptionErrorCodeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $errorCode
     * @return \StructType\SMSSubscriptionType
     */
    public function setErrorCode($errorCode = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SMSSubscriptionErrorCodeCodeType::valueIsValid($errorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SMSSubscriptionErrorCodeCodeType', is_array($errorCode) ? implode(', ', $errorCode) : var_export($errorCode, true), implode(', ', \EnumType\SMSSubscriptionErrorCodeCodeType::getValidValues())), __LINE__);
        }
        $this->ErrorCode = $errorCode;
        return $this;
    }
    /**
     * Get ItemToUnsubscribe value
     * @return string|null
     */
    public function getItemToUnsubscribe()
    {
        return $this->ItemToUnsubscribe;
    }
    /**
     * Set ItemToUnsubscribe value
     * @param string $itemToUnsubscribe
     * @return \StructType\SMSSubscriptionType
     */
    public function setItemToUnsubscribe($itemToUnsubscribe = null)
    {
        // validation for constraint: string
        if (!is_null($itemToUnsubscribe) && !is_string($itemToUnsubscribe)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemToUnsubscribe, true), gettype($itemToUnsubscribe)), __LINE__);
        }
        $this->ItemToUnsubscribe = $itemToUnsubscribe;
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
     * @return \StructType\SMSSubscriptionType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
