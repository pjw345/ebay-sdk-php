<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeliveryURLDetailType StructType
 * Meta information extracted from the WSDL
 * - documentation: Defines settings for a notification URL (including the URL name in DeliveryURLName).
 * @subpackage Structs
 */
class DeliveryURLDetailType extends AbstractStructBase
{
    /**
     * The DeliveryURLName
     * Meta information extracted from the WSDL
     * - documentation: The name of a notification delivery URL. You can list up to 25 instances of DeliveryURLName, and then subscribe these URLs to notifications by listing them in comma- separated format in the DeliveryURLName element outside of
     * ApplicationDeliveryPreferences.
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryURLName;
    /**
     * The DeliveryURL
     * Meta information extracted from the WSDL
     * - documentation: The address of a notification delivery URL. This address applies to the DeliveryURLName within the same ApplicationDeliveryPreferences.DeliveryURLDetails container. For delivery to a server, the URL must begin with
     * "<code>https://</code>" and must be well formed. Use a URL that is functional at the time of the call.
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryURL;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: The status of a notification delivery URL. This status applies to the DeliveryURLName and delivery URL within the same ApplicationDeliveryPreferences.DeliveryURLDetails container. If the status is disabled, then notifications will
     * not be sent to the delivery URL.
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for DeliveryURLDetailType
     * @uses DeliveryURLDetailType::setDeliveryURLName()
     * @uses DeliveryURLDetailType::setDeliveryURL()
     * @uses DeliveryURLDetailType::setStatus()
     * @uses DeliveryURLDetailType::setAny()
     * @param string $deliveryURLName
     * @param string $deliveryURL
     * @param string $status
     * @param \DOMDocument $any
     */
    public function __construct($deliveryURLName = null, $deliveryURL = null, $status = null, \DOMDocument $any = null)
    {
        $this
            ->setDeliveryURLName($deliveryURLName)
            ->setDeliveryURL($deliveryURL)
            ->setStatus($status)
            ->setAny($any);
    }
    /**
     * Get DeliveryURLName value
     * @return string|null
     */
    public function getDeliveryURLName()
    {
        return $this->DeliveryURLName;
    }
    /**
     * Set DeliveryURLName value
     * @param string $deliveryURLName
     * @return \StructType\DeliveryURLDetailType
     */
    public function setDeliveryURLName($deliveryURLName = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryURLName) && !is_string($deliveryURLName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryURLName, true), gettype($deliveryURLName)), __LINE__);
        }
        $this->DeliveryURLName = $deliveryURLName;
        return $this;
    }
    /**
     * Get DeliveryURL value
     * @return string|null
     */
    public function getDeliveryURL()
    {
        return $this->DeliveryURL;
    }
    /**
     * Set DeliveryURL value
     * @param string $deliveryURL
     * @return \StructType\DeliveryURLDetailType
     */
    public function setDeliveryURL($deliveryURL = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryURL) && !is_string($deliveryURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryURL, true), gettype($deliveryURL)), __LINE__);
        }
        $this->DeliveryURL = $deliveryURL;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \EnumType\EnableCodeType::valueIsValid()
     * @uses \EnumType\EnableCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \StructType\DeliveryURLDetailType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\EnableCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EnableCodeType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \EnumType\EnableCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
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
     * @return \StructType\DeliveryURLDetailType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
