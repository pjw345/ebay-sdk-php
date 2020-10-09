<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultiLegShipmentType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type provides information about the shipping service, cost, address, and delivery estimates for the domestic leg of a Global Shipping Program shipment. This type is only applicable for international shipments using the GSP
 * program.
 * @subpackage Structs
 */
class MultiLegShipmentType extends AbstractStructBase
{
    /**
     * The ShippingServiceDetails
     * Meta information extracted from the WSDL
     * - documentation: Contains information about the shipping service and cost of the domestic leg of a Global Shipping Program shipment.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\MultiLegShippingServiceType
     */
    public $ShippingServiceDetails;
    /**
     * The ShipToAddress
     * Meta information extracted from the WSDL
     * - documentation: Contains shipping address information for the domestic leg of a Global Shipping Program shipment. This container includes the ReferenceID field, which can be printed on the package to give the international shipping provider a unique
     * identifier for the order.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AddressType
     */
    public $ShipToAddress;
    /**
     * The ShippingTimeMin
     * Meta information extracted from the WSDL
     * - documentation: The integer value returned here indicates the minimum number of business days that the corresponding shipping service (indicated in <b>ShippingServiceDetails.ShippingService</b> field) will take to be delivered to eBay's domestic
     * shipping partner. <br><br> This minimum shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier for shipment to eBay's domestic shipping
     * partner. 'Business days' can vary by shipping carrier and by country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $ShippingTimeMin;
    /**
     * The ShippingTimeMax
     * Meta information extracted from the WSDL
     * - documentation: The integer value returned here indicates the maximum number of business days that the corresponding shipping service (indicated in <b>ShippingServiceDetails.ShippingService</b> field) will take to be delivered to eBay's domestic
     * shipping partner. <br><br> This maximum shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier for shipment to eBay's domestic shipping
     * partner. 'Business days' can vary by shipping carrier and by country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $ShippingTimeMax;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MultiLegShipmentType
     * @uses MultiLegShipmentType::setShippingServiceDetails()
     * @uses MultiLegShipmentType::setShipToAddress()
     * @uses MultiLegShipmentType::setShippingTimeMin()
     * @uses MultiLegShipmentType::setShippingTimeMax()
     * @uses MultiLegShipmentType::setAny()
     * @param \StructType\MultiLegShippingServiceType $shippingServiceDetails
     * @param \StructType\AddressType $shipToAddress
     * @param int $shippingTimeMin
     * @param int $shippingTimeMax
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\MultiLegShippingServiceType $shippingServiceDetails = null, \StructType\AddressType $shipToAddress = null, $shippingTimeMin = null, $shippingTimeMax = null, \DOMDocument $any = null)
    {
        $this
            ->setShippingServiceDetails($shippingServiceDetails)
            ->setShipToAddress($shipToAddress)
            ->setShippingTimeMin($shippingTimeMin)
            ->setShippingTimeMax($shippingTimeMax)
            ->setAny($any);
    }
    /**
     * Get ShippingServiceDetails value
     * @return \StructType\MultiLegShippingServiceType|null
     */
    public function getShippingServiceDetails()
    {
        return $this->ShippingServiceDetails;
    }
    /**
     * Set ShippingServiceDetails value
     * @param \StructType\MultiLegShippingServiceType $shippingServiceDetails
     * @return \StructType\MultiLegShipmentType
     */
    public function setShippingServiceDetails(\StructType\MultiLegShippingServiceType $shippingServiceDetails = null)
    {
        $this->ShippingServiceDetails = $shippingServiceDetails;
        return $this;
    }
    /**
     * Get ShipToAddress value
     * @return \StructType\AddressType|null
     */
    public function getShipToAddress()
    {
        return $this->ShipToAddress;
    }
    /**
     * Set ShipToAddress value
     * @param \StructType\AddressType $shipToAddress
     * @return \StructType\MultiLegShipmentType
     */
    public function setShipToAddress(\StructType\AddressType $shipToAddress = null)
    {
        $this->ShipToAddress = $shipToAddress;
        return $this;
    }
    /**
     * Get ShippingTimeMin value
     * @return int|null
     */
    public function getShippingTimeMin()
    {
        return $this->ShippingTimeMin;
    }
    /**
     * Set ShippingTimeMin value
     * @param int $shippingTimeMin
     * @return \StructType\MultiLegShipmentType
     */
    public function setShippingTimeMin($shippingTimeMin = null)
    {
        // validation for constraint: int
        if (!is_null($shippingTimeMin) && !(is_int($shippingTimeMin) || ctype_digit($shippingTimeMin))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shippingTimeMin, true), gettype($shippingTimeMin)), __LINE__);
        }
        $this->ShippingTimeMin = $shippingTimeMin;
        return $this;
    }
    /**
     * Get ShippingTimeMax value
     * @return int|null
     */
    public function getShippingTimeMax()
    {
        return $this->ShippingTimeMax;
    }
    /**
     * Set ShippingTimeMax value
     * @param int $shippingTimeMax
     * @return \StructType\MultiLegShipmentType
     */
    public function setShippingTimeMax($shippingTimeMax = null)
    {
        // validation for constraint: int
        if (!is_null($shippingTimeMax) && !(is_int($shippingTimeMax) || ctype_digit($shippingTimeMax))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shippingTimeMax, true), gettype($shippingTimeMax)), __LINE__);
        }
        $this->ShippingTimeMax = $shippingTimeMax;
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
     * @return \StructType\MultiLegShipmentType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
