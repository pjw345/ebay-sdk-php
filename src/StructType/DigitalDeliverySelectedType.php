<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DigitalDeliverySelectedType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>DigitalDeliverySelected</b> container that is returned by <b>GetOrders</b> and other order management calls. The <b>DigitalDeliverySelected</b> container is only applicable and returned if the buyer
 * purchased a digital gift card for themselves, or is giving the digital gift card to someone else as a gift.
 * @subpackage Structs
 */
class DigitalDeliverySelectedType extends AbstractStructBase
{
    /**
     * The DeliveryMethod
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the method in which the digital gift card will be delivered to the buyer or to the person whom the purchaser is giving the digital gift card to. Currently, the only supported delivery method is by email.
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryMethod;
    /**
     * The DeliveryStatus
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the current status of whatever delivery method is being used (indicated in the <b>DigitalDeliverySelected.DeliveryMethod</b> field). Currently, the only supported delivery method is by email.
     * - minOccurs: 0
     * @var \StructType\DeliveryStatusType
     */
    public $DeliveryStatus;
    /**
     * The DeliveryDetails
     * Meta information extracted from the WSDL
     * - documentation: This container is returned by <b>GetOrders</b> and other order management calls to provide details on the recipient of a digital gift card that was purchased. The <b>DeliveryDetails</b> container is only returned if the buyer is
     * buying a digital gift card and giving that gift card to another person.
     * - minOccurs: 0
     * @var \StructType\DeliveryDetailsType
     */
    public $DeliveryDetails;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for DigitalDeliverySelectedType
     * @uses DigitalDeliverySelectedType::setDeliveryMethod()
     * @uses DigitalDeliverySelectedType::setDeliveryStatus()
     * @uses DigitalDeliverySelectedType::setDeliveryDetails()
     * @uses DigitalDeliverySelectedType::setAny()
     * @param string $deliveryMethod
     * @param \StructType\DeliveryStatusType $deliveryStatus
     * @param \StructType\DeliveryDetailsType $deliveryDetails
     * @param \DOMDocument $any
     */
    public function __construct($deliveryMethod = null, \StructType\DeliveryStatusType $deliveryStatus = null, \StructType\DeliveryDetailsType $deliveryDetails = null, \DOMDocument $any = null)
    {
        $this
            ->setDeliveryMethod($deliveryMethod)
            ->setDeliveryStatus($deliveryStatus)
            ->setDeliveryDetails($deliveryDetails)
            ->setAny($any);
    }
    /**
     * Get DeliveryMethod value
     * @return string|null
     */
    public function getDeliveryMethod()
    {
        return $this->DeliveryMethod;
    }
    /**
     * Set DeliveryMethod value
     * @param string $deliveryMethod
     * @return \StructType\DigitalDeliverySelectedType
     */
    public function setDeliveryMethod($deliveryMethod = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryMethod) && !is_string($deliveryMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryMethod, true), gettype($deliveryMethod)), __LINE__);
        }
        $this->DeliveryMethod = $deliveryMethod;
        return $this;
    }
    /**
     * Get DeliveryStatus value
     * @return \StructType\DeliveryStatusType|null
     */
    public function getDeliveryStatus()
    {
        return $this->DeliveryStatus;
    }
    /**
     * Set DeliveryStatus value
     * @param \StructType\DeliveryStatusType $deliveryStatus
     * @return \StructType\DigitalDeliverySelectedType
     */
    public function setDeliveryStatus(\StructType\DeliveryStatusType $deliveryStatus = null)
    {
        $this->DeliveryStatus = $deliveryStatus;
        return $this;
    }
    /**
     * Get DeliveryDetails value
     * @return \StructType\DeliveryDetailsType|null
     */
    public function getDeliveryDetails()
    {
        return $this->DeliveryDetails;
    }
    /**
     * Set DeliveryDetails value
     * @param \StructType\DeliveryDetailsType $deliveryDetails
     * @return \StructType\DigitalDeliverySelectedType
     */
    public function setDeliveryDetails(\StructType\DeliveryDetailsType $deliveryDetails = null)
    {
        $this->DeliveryDetails = $deliveryDetails;
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
     * @return \StructType\DigitalDeliverySelectedType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
