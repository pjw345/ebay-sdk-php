<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>Shipment</b> container, which is used by the seller in <b>CompleteSale</b> to provide shipping information. The <b>Shipment</b> container is also returned in the <b>GetSellingManagerSaleRecord</b> response.
 * @subpackage Structs
 */
class ShipmentType extends AbstractStructBase
{
    /**
     * The EstimatedDeliveryDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EstimatedDeliveryDate;
    /**
     * The InsuredValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $InsuredValue;
    /**
     * The PackageDepth
     * Meta information extracted from the WSDL
     * - documentation: Depth dimension of the package needed to ship the item after it is sold. <br> For calculated shipping only.
     * - minOccurs: 0
     * @var \StructType\MeasureType
     */
    public $PackageDepth;
    /**
     * The PackageLength
     * Meta information extracted from the WSDL
     * - documentation: Length dimension of the package needed to ship the item after it is sold. <br> For calculated shipping only.
     * - minOccurs: 0
     * @var \StructType\MeasureType
     */
    public $PackageLength;
    /**
     * The PackageWidth
     * Meta information extracted from the WSDL
     * - documentation: Width dimension of the package needed to ship the item after it is sold. <br> For calculated shipping only.
     * - minOccurs: 0
     * @var \StructType\MeasureType
     */
    public $PackageWidth;
    /**
     * The PayPalShipmentID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PayPalShipmentID;
    /**
     * The ShipmentID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ShipmentID;
    /**
     * The PostageTotal
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $PostageTotal;
    /**
     * The PrintedTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PrintedTime;
    /**
     * The ShipFromAddress
     * Meta information extracted from the WSDL
     * - documentation: The address from which the item is being shipped.
     * - minOccurs: 0
     * @var \StructType\AddressType
     */
    public $ShipFromAddress;
    /**
     * The ShippingAddress
     * Meta information extracted from the WSDL
     * - documentation: The address to which the item is to be shipped.
     * - minOccurs: 0
     * @var \StructType\AddressType
     */
    public $ShippingAddress;
    /**
     * The ShippingCarrierUsed
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingCarrierUsed;
    /**
     * The ShippingFeature
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ShippingFeature;
    /**
     * The ShippingPackage
     * Meta information extracted from the WSDL
     * - documentation: The size of the package used to ship the item(s). See ShippingPackageCodeType for its possible values. Input.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingPackage;
    /**
     * The ShippingServiceUsed
     * Meta information extracted from the WSDL
     * - documentation: The size of the package used to ship the item(s). See ShippingPackageCodeType for its possible values. Input.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingServiceUsed;
    /**
     * The ShipmentTrackingNumber
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ShipmentTrackingNumber;
    /**
     * The WeightMajor
     * Meta information extracted from the WSDL
     * - documentation: The 'unit' attribute can have a value of lbs.
     * - minOccurs: 0
     * @var \StructType\MeasureType
     */
    public $WeightMajor;
    /**
     * The WeightMinor
     * Meta information extracted from the WSDL
     * - documentation: The 'unit' attribute is optional and assumed to be the minor compared to the value of 'unit' in WeightMajor.
     * - minOccurs: 0
     * @var \StructType\MeasureType
     */
    public $WeightMinor;
    /**
     * The ItemTransactionID
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ItemTransactionIDType[]
     */
    public $ItemTransactionID;
    /**
     * The DeliveryDate
     * Meta information extracted from the WSDL
     * - documentation: Revise only
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryDate;
    /**
     * The DeliveryStatus
     * Meta information extracted from the WSDL
     * - documentation: Revise only
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryStatus;
    /**
     * The RefundGrantedTime
     * Meta information extracted from the WSDL
     * - documentation: Revise only
     * - minOccurs: 0
     * @var string
     */
    public $RefundGrantedTime;
    /**
     * The RefundRequestedTime
     * Meta information extracted from the WSDL
     * - documentation: Revise only
     * - minOccurs: 0
     * @var string
     */
    public $RefundRequestedTime;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: Status, for revise only
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The ShippedTime
     * Meta information extracted from the WSDL
     * - documentation: The date and time that the seller handed off the package(s) to the shipping carrier. If this field is not included in the request, the timestamp of the call execution is used as the shipped time. Note that sellers have the ability to
     * set this value up to 3 calendar days in the future.
     * - minOccurs: 0
     * @var string
     */
    public $ShippedTime;
    /**
     * The Notes
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> This field is only applicable for Half.com listings, and since API support for Half.com listings is being deprecated, this field is no longer applicable. </span> This string field allows a seller
     * to provide notes to the buyer regarding shipment of a Half.com item. Only alphanumeric characters can be used in this field. This is an optional field that is only applicable to Half.com items.
     * - minOccurs: 0
     * @var string
     */
    public $Notes;
    /**
     * The ShipmentTrackingDetails
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of the tracking number and shipping carrier associated with the shipment of one item (package). <br><br> Because an order can have multiple line items and/or packages, there can be multiple
     * <b>ShipmentTrackingDetails</b> containers under the <b>Shipment</b> container.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ShipmentTrackingDetailsType[]
     */
    public $ShipmentTrackingDetails;
    /**
     * The ShipmentLineItem
     * Meta information extracted from the WSDL
     * - documentation: Contains information about one or more order line items in a Global Shipping Program package. Required or returned if the value of <strong>ShippingCarrierUsed</strong> is <code>PBI</code>.
     * - minOccurs: 0
     * @var \StructType\ShipmentLineItemType
     */
    public $ShipmentLineItem;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ShipmentType
     * @uses ShipmentType::setEstimatedDeliveryDate()
     * @uses ShipmentType::setInsuredValue()
     * @uses ShipmentType::setPackageDepth()
     * @uses ShipmentType::setPackageLength()
     * @uses ShipmentType::setPackageWidth()
     * @uses ShipmentType::setPayPalShipmentID()
     * @uses ShipmentType::setShipmentID()
     * @uses ShipmentType::setPostageTotal()
     * @uses ShipmentType::setPrintedTime()
     * @uses ShipmentType::setShipFromAddress()
     * @uses ShipmentType::setShippingAddress()
     * @uses ShipmentType::setShippingCarrierUsed()
     * @uses ShipmentType::setShippingFeature()
     * @uses ShipmentType::setShippingPackage()
     * @uses ShipmentType::setShippingServiceUsed()
     * @uses ShipmentType::setShipmentTrackingNumber()
     * @uses ShipmentType::setWeightMajor()
     * @uses ShipmentType::setWeightMinor()
     * @uses ShipmentType::setItemTransactionID()
     * @uses ShipmentType::setDeliveryDate()
     * @uses ShipmentType::setDeliveryStatus()
     * @uses ShipmentType::setRefundGrantedTime()
     * @uses ShipmentType::setRefundRequestedTime()
     * @uses ShipmentType::setStatus()
     * @uses ShipmentType::setShippedTime()
     * @uses ShipmentType::setNotes()
     * @uses ShipmentType::setShipmentTrackingDetails()
     * @uses ShipmentType::setShipmentLineItem()
     * @uses ShipmentType::setAny()
     * @param string $estimatedDeliveryDate
     * @param \StructType\AmountType $insuredValue
     * @param \StructType\MeasureType $packageDepth
     * @param \StructType\MeasureType $packageLength
     * @param \StructType\MeasureType $packageWidth
     * @param string $payPalShipmentID
     * @param int $shipmentID
     * @param \StructType\AmountType $postageTotal
     * @param string $printedTime
     * @param \StructType\AddressType $shipFromAddress
     * @param \StructType\AddressType $shippingAddress
     * @param string $shippingCarrierUsed
     * @param string[] $shippingFeature
     * @param string $shippingPackage
     * @param string $shippingServiceUsed
     * @param string $shipmentTrackingNumber
     * @param \StructType\MeasureType $weightMajor
     * @param \StructType\MeasureType $weightMinor
     * @param \StructType\ItemTransactionIDType[] $itemTransactionID
     * @param string $deliveryDate
     * @param string $deliveryStatus
     * @param string $refundGrantedTime
     * @param string $refundRequestedTime
     * @param string $status
     * @param string $shippedTime
     * @param string $notes
     * @param \StructType\ShipmentTrackingDetailsType[] $shipmentTrackingDetails
     * @param \StructType\ShipmentLineItemType $shipmentLineItem
     * @param \DOMDocument $any
     */
    public function __construct($estimatedDeliveryDate = null, \StructType\AmountType $insuredValue = null, \StructType\MeasureType $packageDepth = null, \StructType\MeasureType $packageLength = null, \StructType\MeasureType $packageWidth = null, $payPalShipmentID = null, $shipmentID = null, \StructType\AmountType $postageTotal = null, $printedTime = null, \StructType\AddressType $shipFromAddress = null, \StructType\AddressType $shippingAddress = null, $shippingCarrierUsed = null, array $shippingFeature = array(), $shippingPackage = null, $shippingServiceUsed = null, $shipmentTrackingNumber = null, \StructType\MeasureType $weightMajor = null, \StructType\MeasureType $weightMinor = null, array $itemTransactionID = array(), $deliveryDate = null, $deliveryStatus = null, $refundGrantedTime = null, $refundRequestedTime = null, $status = null, $shippedTime = null, $notes = null, array $shipmentTrackingDetails = array(), \StructType\ShipmentLineItemType $shipmentLineItem = null, \DOMDocument $any = null)
    {
        $this
            ->setEstimatedDeliveryDate($estimatedDeliveryDate)
            ->setInsuredValue($insuredValue)
            ->setPackageDepth($packageDepth)
            ->setPackageLength($packageLength)
            ->setPackageWidth($packageWidth)
            ->setPayPalShipmentID($payPalShipmentID)
            ->setShipmentID($shipmentID)
            ->setPostageTotal($postageTotal)
            ->setPrintedTime($printedTime)
            ->setShipFromAddress($shipFromAddress)
            ->setShippingAddress($shippingAddress)
            ->setShippingCarrierUsed($shippingCarrierUsed)
            ->setShippingFeature($shippingFeature)
            ->setShippingPackage($shippingPackage)
            ->setShippingServiceUsed($shippingServiceUsed)
            ->setShipmentTrackingNumber($shipmentTrackingNumber)
            ->setWeightMajor($weightMajor)
            ->setWeightMinor($weightMinor)
            ->setItemTransactionID($itemTransactionID)
            ->setDeliveryDate($deliveryDate)
            ->setDeliveryStatus($deliveryStatus)
            ->setRefundGrantedTime($refundGrantedTime)
            ->setRefundRequestedTime($refundRequestedTime)
            ->setStatus($status)
            ->setShippedTime($shippedTime)
            ->setNotes($notes)
            ->setShipmentTrackingDetails($shipmentTrackingDetails)
            ->setShipmentLineItem($shipmentLineItem)
            ->setAny($any);
    }
    /**
     * Get EstimatedDeliveryDate value
     * @return string|null
     */
    public function getEstimatedDeliveryDate()
    {
        return $this->EstimatedDeliveryDate;
    }
    /**
     * Set EstimatedDeliveryDate value
     * @param string $estimatedDeliveryDate
     * @return \StructType\ShipmentType
     */
    public function setEstimatedDeliveryDate($estimatedDeliveryDate = null)
    {
        // validation for constraint: string
        if (!is_null($estimatedDeliveryDate) && !is_string($estimatedDeliveryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($estimatedDeliveryDate, true), gettype($estimatedDeliveryDate)), __LINE__);
        }
        $this->EstimatedDeliveryDate = $estimatedDeliveryDate;
        return $this;
    }
    /**
     * Get InsuredValue value
     * @return \StructType\AmountType|null
     */
    public function getInsuredValue()
    {
        return $this->InsuredValue;
    }
    /**
     * Set InsuredValue value
     * @param \StructType\AmountType $insuredValue
     * @return \StructType\ShipmentType
     */
    public function setInsuredValue(\StructType\AmountType $insuredValue = null)
    {
        $this->InsuredValue = $insuredValue;
        return $this;
    }
    /**
     * Get PackageDepth value
     * @return \StructType\MeasureType|null
     */
    public function getPackageDepth()
    {
        return $this->PackageDepth;
    }
    /**
     * Set PackageDepth value
     * @param \StructType\MeasureType $packageDepth
     * @return \StructType\ShipmentType
     */
    public function setPackageDepth(\StructType\MeasureType $packageDepth = null)
    {
        $this->PackageDepth = $packageDepth;
        return $this;
    }
    /**
     * Get PackageLength value
     * @return \StructType\MeasureType|null
     */
    public function getPackageLength()
    {
        return $this->PackageLength;
    }
    /**
     * Set PackageLength value
     * @param \StructType\MeasureType $packageLength
     * @return \StructType\ShipmentType
     */
    public function setPackageLength(\StructType\MeasureType $packageLength = null)
    {
        $this->PackageLength = $packageLength;
        return $this;
    }
    /**
     * Get PackageWidth value
     * @return \StructType\MeasureType|null
     */
    public function getPackageWidth()
    {
        return $this->PackageWidth;
    }
    /**
     * Set PackageWidth value
     * @param \StructType\MeasureType $packageWidth
     * @return \StructType\ShipmentType
     */
    public function setPackageWidth(\StructType\MeasureType $packageWidth = null)
    {
        $this->PackageWidth = $packageWidth;
        return $this;
    }
    /**
     * Get PayPalShipmentID value
     * @return string|null
     */
    public function getPayPalShipmentID()
    {
        return $this->PayPalShipmentID;
    }
    /**
     * Set PayPalShipmentID value
     * @param string $payPalShipmentID
     * @return \StructType\ShipmentType
     */
    public function setPayPalShipmentID($payPalShipmentID = null)
    {
        // validation for constraint: string
        if (!is_null($payPalShipmentID) && !is_string($payPalShipmentID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($payPalShipmentID, true), gettype($payPalShipmentID)), __LINE__);
        }
        $this->PayPalShipmentID = $payPalShipmentID;
        return $this;
    }
    /**
     * Get ShipmentID value
     * @return int|null
     */
    public function getShipmentID()
    {
        return $this->ShipmentID;
    }
    /**
     * Set ShipmentID value
     * @param int $shipmentID
     * @return \StructType\ShipmentType
     */
    public function setShipmentID($shipmentID = null)
    {
        // validation for constraint: int
        if (!is_null($shipmentID) && !(is_int($shipmentID) || ctype_digit($shipmentID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shipmentID, true), gettype($shipmentID)), __LINE__);
        }
        $this->ShipmentID = $shipmentID;
        return $this;
    }
    /**
     * Get PostageTotal value
     * @return \StructType\AmountType|null
     */
    public function getPostageTotal()
    {
        return $this->PostageTotal;
    }
    /**
     * Set PostageTotal value
     * @param \StructType\AmountType $postageTotal
     * @return \StructType\ShipmentType
     */
    public function setPostageTotal(\StructType\AmountType $postageTotal = null)
    {
        $this->PostageTotal = $postageTotal;
        return $this;
    }
    /**
     * Get PrintedTime value
     * @return string|null
     */
    public function getPrintedTime()
    {
        return $this->PrintedTime;
    }
    /**
     * Set PrintedTime value
     * @param string $printedTime
     * @return \StructType\ShipmentType
     */
    public function setPrintedTime($printedTime = null)
    {
        // validation for constraint: string
        if (!is_null($printedTime) && !is_string($printedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printedTime, true), gettype($printedTime)), __LINE__);
        }
        $this->PrintedTime = $printedTime;
        return $this;
    }
    /**
     * Get ShipFromAddress value
     * @return \StructType\AddressType|null
     */
    public function getShipFromAddress()
    {
        return $this->ShipFromAddress;
    }
    /**
     * Set ShipFromAddress value
     * @param \StructType\AddressType $shipFromAddress
     * @return \StructType\ShipmentType
     */
    public function setShipFromAddress(\StructType\AddressType $shipFromAddress = null)
    {
        $this->ShipFromAddress = $shipFromAddress;
        return $this;
    }
    /**
     * Get ShippingAddress value
     * @return \StructType\AddressType|null
     */
    public function getShippingAddress()
    {
        return $this->ShippingAddress;
    }
    /**
     * Set ShippingAddress value
     * @param \StructType\AddressType $shippingAddress
     * @return \StructType\ShipmentType
     */
    public function setShippingAddress(\StructType\AddressType $shippingAddress = null)
    {
        $this->ShippingAddress = $shippingAddress;
        return $this;
    }
    /**
     * Get ShippingCarrierUsed value
     * @return string|null
     */
    public function getShippingCarrierUsed()
    {
        return $this->ShippingCarrierUsed;
    }
    /**
     * Set ShippingCarrierUsed value
     * @param string $shippingCarrierUsed
     * @return \StructType\ShipmentType
     */
    public function setShippingCarrierUsed($shippingCarrierUsed = null)
    {
        // validation for constraint: string
        if (!is_null($shippingCarrierUsed) && !is_string($shippingCarrierUsed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingCarrierUsed, true), gettype($shippingCarrierUsed)), __LINE__);
        }
        $this->ShippingCarrierUsed = $shippingCarrierUsed;
        return $this;
    }
    /**
     * Get ShippingFeature value
     * @return string[]|null
     */
    public function getShippingFeature()
    {
        return $this->ShippingFeature;
    }
    /**
     * This method is responsible for validating the values passed to the setShippingFeature method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShippingFeature method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShippingFeatureForArrayConstraintsFromSetShippingFeature(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $shipmentTypeShippingFeatureItem) {
            // validation for constraint: enumeration
            if (!\EnumType\ShippingFeatureCodeType::valueIsValid($shipmentTypeShippingFeatureItem)) {
                $invalidValues[] = is_object($shipmentTypeShippingFeatureItem) ? get_class($shipmentTypeShippingFeatureItem) : sprintf('%s(%s)', gettype($shipmentTypeShippingFeatureItem), var_export($shipmentTypeShippingFeatureItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ShippingFeatureCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\ShippingFeatureCodeType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ShippingFeature value
     * @uses \EnumType\ShippingFeatureCodeType::valueIsValid()
     * @uses \EnumType\ShippingFeatureCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $shippingFeature
     * @return \StructType\ShipmentType
     */
    public function setShippingFeature(array $shippingFeature = array())
    {
        // validation for constraint: array
        if ('' !== ($shippingFeatureArrayErrorMessage = self::validateShippingFeatureForArrayConstraintsFromSetShippingFeature($shippingFeature))) {
            throw new \InvalidArgumentException($shippingFeatureArrayErrorMessage, __LINE__);
        }
        $this->ShippingFeature = $shippingFeature;
        return $this;
    }
    /**
     * Add item to ShippingFeature value
     * @uses \EnumType\ShippingFeatureCodeType::valueIsValid()
     * @uses \EnumType\ShippingFeatureCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\ShipmentType
     */
    public function addToShippingFeature($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ShippingFeatureCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ShippingFeatureCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \EnumType\ShippingFeatureCodeType::getValidValues())), __LINE__);
        }
        $this->ShippingFeature[] = $item;
        return $this;
    }
    /**
     * Get ShippingPackage value
     * @return string|null
     */
    public function getShippingPackage()
    {
        return $this->ShippingPackage;
    }
    /**
     * Set ShippingPackage value
     * @uses \EnumType\ShippingPackageCodeType::valueIsValid()
     * @uses \EnumType\ShippingPackageCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $shippingPackage
     * @return \StructType\ShipmentType
     */
    public function setShippingPackage($shippingPackage = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ShippingPackageCodeType::valueIsValid($shippingPackage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ShippingPackageCodeType', is_array($shippingPackage) ? implode(', ', $shippingPackage) : var_export($shippingPackage, true), implode(', ', \EnumType\ShippingPackageCodeType::getValidValues())), __LINE__);
        }
        $this->ShippingPackage = $shippingPackage;
        return $this;
    }
    /**
     * Get ShippingServiceUsed value
     * @return string|null
     */
    public function getShippingServiceUsed()
    {
        return $this->ShippingServiceUsed;
    }
    /**
     * Set ShippingServiceUsed value
     * @param string $shippingServiceUsed
     * @return \StructType\ShipmentType
     */
    public function setShippingServiceUsed($shippingServiceUsed = null)
    {
        // validation for constraint: string
        if (!is_null($shippingServiceUsed) && !is_string($shippingServiceUsed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingServiceUsed, true), gettype($shippingServiceUsed)), __LINE__);
        }
        $this->ShippingServiceUsed = $shippingServiceUsed;
        return $this;
    }
    /**
     * Get ShipmentTrackingNumber value
     * @return string|null
     */
    public function getShipmentTrackingNumber()
    {
        return $this->ShipmentTrackingNumber;
    }
    /**
     * Set ShipmentTrackingNumber value
     * @param string $shipmentTrackingNumber
     * @return \StructType\ShipmentType
     */
    public function setShipmentTrackingNumber($shipmentTrackingNumber = null)
    {
        // validation for constraint: string
        if (!is_null($shipmentTrackingNumber) && !is_string($shipmentTrackingNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipmentTrackingNumber, true), gettype($shipmentTrackingNumber)), __LINE__);
        }
        $this->ShipmentTrackingNumber = $shipmentTrackingNumber;
        return $this;
    }
    /**
     * Get WeightMajor value
     * @return \StructType\MeasureType|null
     */
    public function getWeightMajor()
    {
        return $this->WeightMajor;
    }
    /**
     * Set WeightMajor value
     * @param \StructType\MeasureType $weightMajor
     * @return \StructType\ShipmentType
     */
    public function setWeightMajor(\StructType\MeasureType $weightMajor = null)
    {
        $this->WeightMajor = $weightMajor;
        return $this;
    }
    /**
     * Get WeightMinor value
     * @return \StructType\MeasureType|null
     */
    public function getWeightMinor()
    {
        return $this->WeightMinor;
    }
    /**
     * Set WeightMinor value
     * @param \StructType\MeasureType $weightMinor
     * @return \StructType\ShipmentType
     */
    public function setWeightMinor(\StructType\MeasureType $weightMinor = null)
    {
        $this->WeightMinor = $weightMinor;
        return $this;
    }
    /**
     * Get ItemTransactionID value
     * @return \StructType\ItemTransactionIDType[]|null
     */
    public function getItemTransactionID()
    {
        return $this->ItemTransactionID;
    }
    /**
     * This method is responsible for validating the values passed to the setItemTransactionID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemTransactionID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemTransactionIDForArrayConstraintsFromSetItemTransactionID(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $shipmentTypeItemTransactionIDItem) {
            // validation for constraint: itemType
            if (!$shipmentTypeItemTransactionIDItem instanceof \StructType\ItemTransactionIDType) {
                $invalidValues[] = is_object($shipmentTypeItemTransactionIDItem) ? get_class($shipmentTypeItemTransactionIDItem) : sprintf('%s(%s)', gettype($shipmentTypeItemTransactionIDItem), var_export($shipmentTypeItemTransactionIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ItemTransactionID property can only contain items of type \StructType\ItemTransactionIDType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ItemTransactionID value
     * @throws \InvalidArgumentException
     * @param \StructType\ItemTransactionIDType[] $itemTransactionID
     * @return \StructType\ShipmentType
     */
    public function setItemTransactionID(array $itemTransactionID = array())
    {
        // validation for constraint: array
        if ('' !== ($itemTransactionIDArrayErrorMessage = self::validateItemTransactionIDForArrayConstraintsFromSetItemTransactionID($itemTransactionID))) {
            throw new \InvalidArgumentException($itemTransactionIDArrayErrorMessage, __LINE__);
        }
        $this->ItemTransactionID = $itemTransactionID;
        return $this;
    }
    /**
     * Add item to ItemTransactionID value
     * @throws \InvalidArgumentException
     * @param \StructType\ItemTransactionIDType $item
     * @return \StructType\ShipmentType
     */
    public function addToItemTransactionID(\StructType\ItemTransactionIDType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ItemTransactionIDType) {
            throw new \InvalidArgumentException(sprintf('The ItemTransactionID property can only contain items of type \StructType\ItemTransactionIDType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ItemTransactionID[] = $item;
        return $this;
    }
    /**
     * Get DeliveryDate value
     * @return string|null
     */
    public function getDeliveryDate()
    {
        return $this->DeliveryDate;
    }
    /**
     * Set DeliveryDate value
     * @param string $deliveryDate
     * @return \StructType\ShipmentType
     */
    public function setDeliveryDate($deliveryDate = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryDate) && !is_string($deliveryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryDate, true), gettype($deliveryDate)), __LINE__);
        }
        $this->DeliveryDate = $deliveryDate;
        return $this;
    }
    /**
     * Get DeliveryStatus value
     * @return string|null
     */
    public function getDeliveryStatus()
    {
        return $this->DeliveryStatus;
    }
    /**
     * Set DeliveryStatus value
     * @uses \EnumType\ShipmentDeliveryStatusCodeType::valueIsValid()
     * @uses \EnumType\ShipmentDeliveryStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $deliveryStatus
     * @return \StructType\ShipmentType
     */
    public function setDeliveryStatus($deliveryStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ShipmentDeliveryStatusCodeType::valueIsValid($deliveryStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ShipmentDeliveryStatusCodeType', is_array($deliveryStatus) ? implode(', ', $deliveryStatus) : var_export($deliveryStatus, true), implode(', ', \EnumType\ShipmentDeliveryStatusCodeType::getValidValues())), __LINE__);
        }
        $this->DeliveryStatus = $deliveryStatus;
        return $this;
    }
    /**
     * Get RefundGrantedTime value
     * @return string|null
     */
    public function getRefundGrantedTime()
    {
        return $this->RefundGrantedTime;
    }
    /**
     * Set RefundGrantedTime value
     * @param string $refundGrantedTime
     * @return \StructType\ShipmentType
     */
    public function setRefundGrantedTime($refundGrantedTime = null)
    {
        // validation for constraint: string
        if (!is_null($refundGrantedTime) && !is_string($refundGrantedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refundGrantedTime, true), gettype($refundGrantedTime)), __LINE__);
        }
        $this->RefundGrantedTime = $refundGrantedTime;
        return $this;
    }
    /**
     * Get RefundRequestedTime value
     * @return string|null
     */
    public function getRefundRequestedTime()
    {
        return $this->RefundRequestedTime;
    }
    /**
     * Set RefundRequestedTime value
     * @param string $refundRequestedTime
     * @return \StructType\ShipmentType
     */
    public function setRefundRequestedTime($refundRequestedTime = null)
    {
        // validation for constraint: string
        if (!is_null($refundRequestedTime) && !is_string($refundRequestedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refundRequestedTime, true), gettype($refundRequestedTime)), __LINE__);
        }
        $this->RefundRequestedTime = $refundRequestedTime;
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
     * @uses \EnumType\ShipmentStatusCodeType::valueIsValid()
     * @uses \EnumType\ShipmentStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \StructType\ShipmentType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ShipmentStatusCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ShipmentStatusCodeType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \EnumType\ShipmentStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get ShippedTime value
     * @return string|null
     */
    public function getShippedTime()
    {
        return $this->ShippedTime;
    }
    /**
     * Set ShippedTime value
     * @param string $shippedTime
     * @return \StructType\ShipmentType
     */
    public function setShippedTime($shippedTime = null)
    {
        // validation for constraint: string
        if (!is_null($shippedTime) && !is_string($shippedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippedTime, true), gettype($shippedTime)), __LINE__);
        }
        $this->ShippedTime = $shippedTime;
        return $this;
    }
    /**
     * Get Notes value
     * @return string|null
     */
    public function getNotes()
    {
        return $this->Notes;
    }
    /**
     * Set Notes value
     * @param string $notes
     * @return \StructType\ShipmentType
     */
    public function setNotes($notes = null)
    {
        // validation for constraint: string
        if (!is_null($notes) && !is_string($notes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notes, true), gettype($notes)), __LINE__);
        }
        $this->Notes = $notes;
        return $this;
    }
    /**
     * Get ShipmentTrackingDetails value
     * @return \StructType\ShipmentTrackingDetailsType[]|null
     */
    public function getShipmentTrackingDetails()
    {
        return $this->ShipmentTrackingDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setShipmentTrackingDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShipmentTrackingDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShipmentTrackingDetailsForArrayConstraintsFromSetShipmentTrackingDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $shipmentTypeShipmentTrackingDetailsItem) {
            // validation for constraint: itemType
            if (!$shipmentTypeShipmentTrackingDetailsItem instanceof \StructType\ShipmentTrackingDetailsType) {
                $invalidValues[] = is_object($shipmentTypeShipmentTrackingDetailsItem) ? get_class($shipmentTypeShipmentTrackingDetailsItem) : sprintf('%s(%s)', gettype($shipmentTypeShipmentTrackingDetailsItem), var_export($shipmentTypeShipmentTrackingDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ShipmentTrackingDetails property can only contain items of type \StructType\ShipmentTrackingDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ShipmentTrackingDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\ShipmentTrackingDetailsType[] $shipmentTrackingDetails
     * @return \StructType\ShipmentType
     */
    public function setShipmentTrackingDetails(array $shipmentTrackingDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($shipmentTrackingDetailsArrayErrorMessage = self::validateShipmentTrackingDetailsForArrayConstraintsFromSetShipmentTrackingDetails($shipmentTrackingDetails))) {
            throw new \InvalidArgumentException($shipmentTrackingDetailsArrayErrorMessage, __LINE__);
        }
        $this->ShipmentTrackingDetails = $shipmentTrackingDetails;
        return $this;
    }
    /**
     * Add item to ShipmentTrackingDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\ShipmentTrackingDetailsType $item
     * @return \StructType\ShipmentType
     */
    public function addToShipmentTrackingDetails(\StructType\ShipmentTrackingDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ShipmentTrackingDetailsType) {
            throw new \InvalidArgumentException(sprintf('The ShipmentTrackingDetails property can only contain items of type \StructType\ShipmentTrackingDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ShipmentTrackingDetails[] = $item;
        return $this;
    }
    /**
     * Get ShipmentLineItem value
     * @return \StructType\ShipmentLineItemType|null
     */
    public function getShipmentLineItem()
    {
        return $this->ShipmentLineItem;
    }
    /**
     * Set ShipmentLineItem value
     * @param \StructType\ShipmentLineItemType $shipmentLineItem
     * @return \StructType\ShipmentType
     */
    public function setShipmentLineItem(\StructType\ShipmentLineItemType $shipmentLineItem = null)
    {
        $this->ShipmentLineItem = $shipmentLineItem;
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
     * @return \StructType\ShipmentType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
