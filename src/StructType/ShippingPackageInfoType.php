<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingPackageInfoType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>ShippingPackageInfoType</b> container, which is returned in order management calls. The <b>ShippingPackageInfoType</b> container provides information on delivery times and tracking information for a shipping
 * package.
 * @subpackage Structs
 */
class ShippingPackageInfoType extends AbstractStructBase
{
    /**
     * The StoreID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the store from where the order will be delivered. This field is only applicable to 'In-Store Pickup' and 'Click and Collect' orders.
     * - minOccurs: 0
     * @var string
     */
    public $StoreID;
    /**
     * The ShippingTrackingEvent
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates whether or not the order has been picked up from the store indicated by the <b>StoreID</b> value. This field is only applicable to 'In-Store Pickup' and 'Click and Collect' orders.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingTrackingEvent;
    /**
     * The ScheduledDeliveryTimeMin
     * Meta information extracted from the WSDL
     * - documentation: The <b>ScheduledDeliveryTimeMin</b> and <b>ScheduledDeliveryTimeMax</b> timestamps indicate the delivery window for which the buyer can expect to receive the order. The <b>ScheduledDeliveryTimeMin</b> value indicates the earliest
     * time that the buyer can expect to receive the order. <br><br> The <b>ScheduledDeliveryTimeMin</b> and <b>ScheduledDeliveryTimeMax</b> fields will start being returned once the seller marks the order as shipped/provides tracking information. Until
     * then, the <b>EstimatedDeliveryTimeMin</b> and <b>EstimatedDeliveryTimeMax</b> dates are returned instead. <br><br> <span class="tablenote"><b>Note:</b> This field does not appear in Merchant Data API's <b>OrderReport</b> or <b>SoldReport</b>
     * responses, because once shipment tracking information is provided to the buyer, the order/order line item is considered acknowledged, and acknowledged orders do not show up in <b>OrderReport</b> or <b>SoldReport</b> responses. </span>
     * - minOccurs: 0
     * @var string
     */
    public $ScheduledDeliveryTimeMin;
    /**
     * The ScheduledDeliveryTimeMax
     * Meta information extracted from the WSDL
     * - documentation: The <b>ScheduledDeliveryTimeMin</b> and <b>ScheduledDeliveryTimeMax</b> timestamps indicate the delivery window for which the buyer can expect to receive the order. The <b>ScheduledDeliveryTimeMax</b> value indicates the latest time
     * that the buyer can expect to receive the order. <br><br> The <b>ScheduledDeliveryTimeMin</b> and <b>ScheduledDeliveryTimeMax</b> fields will start being returned once the seller marks the order as shipped/provides tracking information. Until then,
     * the <b>EstimatedDeliveryTimeMin</b> and <b>EstimatedDeliveryTimeMax</b> dates are returned instead. <br><br> <span class="tablenote"><b>Note:</b> This field does not appear in Merchant Data API's <b>OrderReport</b> or <b>SoldReport</b> responses,
     * because once shipment tracking information is provided to the buyer, the order/order line item is considered acknowledged, and acknowledged orders do not show up in <b>OrderReport</b> or <b>SoldReport</b> responses. </span>
     * - minOccurs: 0
     * @var string
     */
    public $ScheduledDeliveryTimeMax;
    /**
     * The ActualDeliveryTime
     * Meta information extracted from the WSDL
     * - documentation: This timestamp indicates when the order was actually delivered to the buyer. This field is only returned after the order has been delivered to the buyer. <br><br> <span class="tablenote"><b>Note:</b> This field does not appear in
     * Merchant Data API's <b>OrderReport</b> or <b>SoldReport</b> responses, because once shipment tracking information is provided to the buyer (or marked as shipped), the order/order line item is considered acknowledged, and acknowledged orders do not
     * show up in <b>OrderReport</b> or <b>SoldReport</b> responses. </span>
     * - minOccurs: 0
     * @var string
     */
    public $ActualDeliveryTime;
    /**
     * The EstimatedDeliveryTimeMin
     * Meta information extracted from the WSDL
     * - documentation: The <b>EstimatedDeliveryTimeMin</b> and <b>EstimatedDeliveryTimeMax</b> timestamps indicate the window during which the buyer can expect delivery. The <b>EstimatedDeliveryTimeMin</b> value indicates the earliest date and time that
     * the buyer can expect to receive the order. <br><br> The <b>EstimatedDeliveryTimeMin</b> and <b>EstimatedDeliveryTimeMax</b> dates are only estimates made by eBay, and their accuracy will depend on the seller meeting the handling time deadline. Once
     * the seller ships the order, and marks it as shipped/provides tracking information, the more accurate delivery dates can be found in the the <b>ScheduledDeliveryTimeMin</b> and <b>ScheduledDeliveryTimeMax</b> fields.
     * - minOccurs: 0
     * @var string
     */
    public $EstimatedDeliveryTimeMin;
    /**
     * The EstimatedDeliveryTimeMax
     * Meta information extracted from the WSDL
     * - documentation: The <b>EstimatedDeliveryTimeMin</b> and <b>EstimatedDeliveryTimeMax</b> timestamps indicate the window during which the buyer can expect delivery. The <b>EstimatedDeliveryTimeMax</b> value indicates the latest date and time that the
     * buyer can expect to receive the order. <br><br> The <b>EstimatedDeliveryTimeMin</b> and <b>EstimatedDeliveryTimeMax</b> dates are only estimates made by eBay, and their accuracy will depend on the seller meeting the handling time deadline. Once the
     * seller ships the order, and marks it as shipped/provides tracking information, the more accurate delivery dates can be found in the the <b>ScheduledDeliveryTimeMin</b> and <b>ScheduledDeliveryTimeMax</b> fields.
     * - minOccurs: 0
     * @var string
     */
    public $EstimatedDeliveryTimeMax;
    /**
     * The HandleByTime
     * Meta information extracted from the WSDL
     * - documentation: This timestamp indicates the latest date/time that the seller should ship the package to ensure that the package arrives to the buyer within the estimated delivery window. This date/time is calculated by adding the handling time (in
     * days) to the purchase time. <br><br> This field is applicable for domestic shipping services, and for Click and Collect orders in the UK and Australia.
     * - minOccurs: 0
     * @var string
     */
    public $HandleByTime;
    /**
     * The MinNativeEstimatedDeliveryTime
     * Meta information extracted from the WSDL
     * - documentation: The <b>MinNativeEstimatedDeliveryTime</b> and <b>MaxNativeEstimatedDeliveryTime</b> timestamps indicate the window during which the buyer can expect delivery based on the seller's handling time and selected shipping service. The
     * <b>MinNativeEstimatedDeliveryTime</b> value indicates the earliest date and time that the buyer can expect to receive the order. <br><br> This field is applicable for domestic shipping services, and for Click and Collect orders in the UK and
     * Australia.
     * - minOccurs: 0
     * @var string
     */
    public $MinNativeEstimatedDeliveryTime;
    /**
     * The MaxNativeEstimatedDeliveryTime
     * Meta information extracted from the WSDL
     * - documentation: The <b>MinNativeEstimatedDeliveryTime</b> and <b>MaxNativeEstimatedDeliveryTime</b> timestamps indicate the window during which the buyer can expect delivery based on the seller's handling time and selected shipping service. The
     * <b>MaxNativeEstimatedDeliveryTime</b> value indicates the latest date and time that the buyer can expect to receive the order. <br><br> This field is applicable for domestic shipping services, and for Click and Collect orders in the UK and Australia.
     * - minOccurs: 0
     * @var string
     */
    public $MaxNativeEstimatedDeliveryTime;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ShippingPackageInfoType
     * @uses ShippingPackageInfoType::setStoreID()
     * @uses ShippingPackageInfoType::setShippingTrackingEvent()
     * @uses ShippingPackageInfoType::setScheduledDeliveryTimeMin()
     * @uses ShippingPackageInfoType::setScheduledDeliveryTimeMax()
     * @uses ShippingPackageInfoType::setActualDeliveryTime()
     * @uses ShippingPackageInfoType::setEstimatedDeliveryTimeMin()
     * @uses ShippingPackageInfoType::setEstimatedDeliveryTimeMax()
     * @uses ShippingPackageInfoType::setHandleByTime()
     * @uses ShippingPackageInfoType::setMinNativeEstimatedDeliveryTime()
     * @uses ShippingPackageInfoType::setMaxNativeEstimatedDeliveryTime()
     * @uses ShippingPackageInfoType::setAny()
     * @param string $storeID
     * @param string $shippingTrackingEvent
     * @param string $scheduledDeliveryTimeMin
     * @param string $scheduledDeliveryTimeMax
     * @param string $actualDeliveryTime
     * @param string $estimatedDeliveryTimeMin
     * @param string $estimatedDeliveryTimeMax
     * @param string $handleByTime
     * @param string $minNativeEstimatedDeliveryTime
     * @param string $maxNativeEstimatedDeliveryTime
     * @param \DOMDocument $any
     */
    public function __construct($storeID = null, $shippingTrackingEvent = null, $scheduledDeliveryTimeMin = null, $scheduledDeliveryTimeMax = null, $actualDeliveryTime = null, $estimatedDeliveryTimeMin = null, $estimatedDeliveryTimeMax = null, $handleByTime = null, $minNativeEstimatedDeliveryTime = null, $maxNativeEstimatedDeliveryTime = null, \DOMDocument $any = null)
    {
        $this
            ->setStoreID($storeID)
            ->setShippingTrackingEvent($shippingTrackingEvent)
            ->setScheduledDeliveryTimeMin($scheduledDeliveryTimeMin)
            ->setScheduledDeliveryTimeMax($scheduledDeliveryTimeMax)
            ->setActualDeliveryTime($actualDeliveryTime)
            ->setEstimatedDeliveryTimeMin($estimatedDeliveryTimeMin)
            ->setEstimatedDeliveryTimeMax($estimatedDeliveryTimeMax)
            ->setHandleByTime($handleByTime)
            ->setMinNativeEstimatedDeliveryTime($minNativeEstimatedDeliveryTime)
            ->setMaxNativeEstimatedDeliveryTime($maxNativeEstimatedDeliveryTime)
            ->setAny($any);
    }
    /**
     * Get StoreID value
     * @return string|null
     */
    public function getStoreID()
    {
        return $this->StoreID;
    }
    /**
     * Set StoreID value
     * @param string $storeID
     * @return \StructType\ShippingPackageInfoType
     */
    public function setStoreID($storeID = null)
    {
        // validation for constraint: string
        if (!is_null($storeID) && !is_string($storeID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($storeID, true), gettype($storeID)), __LINE__);
        }
        $this->StoreID = $storeID;
        return $this;
    }
    /**
     * Get ShippingTrackingEvent value
     * @return string|null
     */
    public function getShippingTrackingEvent()
    {
        return $this->ShippingTrackingEvent;
    }
    /**
     * Set ShippingTrackingEvent value
     * @param string $shippingTrackingEvent
     * @return \StructType\ShippingPackageInfoType
     */
    public function setShippingTrackingEvent($shippingTrackingEvent = null)
    {
        // validation for constraint: string
        if (!is_null($shippingTrackingEvent) && !is_string($shippingTrackingEvent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingTrackingEvent, true), gettype($shippingTrackingEvent)), __LINE__);
        }
        $this->ShippingTrackingEvent = $shippingTrackingEvent;
        return $this;
    }
    /**
     * Get ScheduledDeliveryTimeMin value
     * @return string|null
     */
    public function getScheduledDeliveryTimeMin()
    {
        return $this->ScheduledDeliveryTimeMin;
    }
    /**
     * Set ScheduledDeliveryTimeMin value
     * @param string $scheduledDeliveryTimeMin
     * @return \StructType\ShippingPackageInfoType
     */
    public function setScheduledDeliveryTimeMin($scheduledDeliveryTimeMin = null)
    {
        // validation for constraint: string
        if (!is_null($scheduledDeliveryTimeMin) && !is_string($scheduledDeliveryTimeMin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scheduledDeliveryTimeMin, true), gettype($scheduledDeliveryTimeMin)), __LINE__);
        }
        $this->ScheduledDeliveryTimeMin = $scheduledDeliveryTimeMin;
        return $this;
    }
    /**
     * Get ScheduledDeliveryTimeMax value
     * @return string|null
     */
    public function getScheduledDeliveryTimeMax()
    {
        return $this->ScheduledDeliveryTimeMax;
    }
    /**
     * Set ScheduledDeliveryTimeMax value
     * @param string $scheduledDeliveryTimeMax
     * @return \StructType\ShippingPackageInfoType
     */
    public function setScheduledDeliveryTimeMax($scheduledDeliveryTimeMax = null)
    {
        // validation for constraint: string
        if (!is_null($scheduledDeliveryTimeMax) && !is_string($scheduledDeliveryTimeMax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scheduledDeliveryTimeMax, true), gettype($scheduledDeliveryTimeMax)), __LINE__);
        }
        $this->ScheduledDeliveryTimeMax = $scheduledDeliveryTimeMax;
        return $this;
    }
    /**
     * Get ActualDeliveryTime value
     * @return string|null
     */
    public function getActualDeliveryTime()
    {
        return $this->ActualDeliveryTime;
    }
    /**
     * Set ActualDeliveryTime value
     * @param string $actualDeliveryTime
     * @return \StructType\ShippingPackageInfoType
     */
    public function setActualDeliveryTime($actualDeliveryTime = null)
    {
        // validation for constraint: string
        if (!is_null($actualDeliveryTime) && !is_string($actualDeliveryTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($actualDeliveryTime, true), gettype($actualDeliveryTime)), __LINE__);
        }
        $this->ActualDeliveryTime = $actualDeliveryTime;
        return $this;
    }
    /**
     * Get EstimatedDeliveryTimeMin value
     * @return string|null
     */
    public function getEstimatedDeliveryTimeMin()
    {
        return $this->EstimatedDeliveryTimeMin;
    }
    /**
     * Set EstimatedDeliveryTimeMin value
     * @param string $estimatedDeliveryTimeMin
     * @return \StructType\ShippingPackageInfoType
     */
    public function setEstimatedDeliveryTimeMin($estimatedDeliveryTimeMin = null)
    {
        // validation for constraint: string
        if (!is_null($estimatedDeliveryTimeMin) && !is_string($estimatedDeliveryTimeMin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($estimatedDeliveryTimeMin, true), gettype($estimatedDeliveryTimeMin)), __LINE__);
        }
        $this->EstimatedDeliveryTimeMin = $estimatedDeliveryTimeMin;
        return $this;
    }
    /**
     * Get EstimatedDeliveryTimeMax value
     * @return string|null
     */
    public function getEstimatedDeliveryTimeMax()
    {
        return $this->EstimatedDeliveryTimeMax;
    }
    /**
     * Set EstimatedDeliveryTimeMax value
     * @param string $estimatedDeliveryTimeMax
     * @return \StructType\ShippingPackageInfoType
     */
    public function setEstimatedDeliveryTimeMax($estimatedDeliveryTimeMax = null)
    {
        // validation for constraint: string
        if (!is_null($estimatedDeliveryTimeMax) && !is_string($estimatedDeliveryTimeMax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($estimatedDeliveryTimeMax, true), gettype($estimatedDeliveryTimeMax)), __LINE__);
        }
        $this->EstimatedDeliveryTimeMax = $estimatedDeliveryTimeMax;
        return $this;
    }
    /**
     * Get HandleByTime value
     * @return string|null
     */
    public function getHandleByTime()
    {
        return $this->HandleByTime;
    }
    /**
     * Set HandleByTime value
     * @param string $handleByTime
     * @return \StructType\ShippingPackageInfoType
     */
    public function setHandleByTime($handleByTime = null)
    {
        // validation for constraint: string
        if (!is_null($handleByTime) && !is_string($handleByTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($handleByTime, true), gettype($handleByTime)), __LINE__);
        }
        $this->HandleByTime = $handleByTime;
        return $this;
    }
    /**
     * Get MinNativeEstimatedDeliveryTime value
     * @return string|null
     */
    public function getMinNativeEstimatedDeliveryTime()
    {
        return $this->MinNativeEstimatedDeliveryTime;
    }
    /**
     * Set MinNativeEstimatedDeliveryTime value
     * @param string $minNativeEstimatedDeliveryTime
     * @return \StructType\ShippingPackageInfoType
     */
    public function setMinNativeEstimatedDeliveryTime($minNativeEstimatedDeliveryTime = null)
    {
        // validation for constraint: string
        if (!is_null($minNativeEstimatedDeliveryTime) && !is_string($minNativeEstimatedDeliveryTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($minNativeEstimatedDeliveryTime, true), gettype($minNativeEstimatedDeliveryTime)), __LINE__);
        }
        $this->MinNativeEstimatedDeliveryTime = $minNativeEstimatedDeliveryTime;
        return $this;
    }
    /**
     * Get MaxNativeEstimatedDeliveryTime value
     * @return string|null
     */
    public function getMaxNativeEstimatedDeliveryTime()
    {
        return $this->MaxNativeEstimatedDeliveryTime;
    }
    /**
     * Set MaxNativeEstimatedDeliveryTime value
     * @param string $maxNativeEstimatedDeliveryTime
     * @return \StructType\ShippingPackageInfoType
     */
    public function setMaxNativeEstimatedDeliveryTime($maxNativeEstimatedDeliveryTime = null)
    {
        // validation for constraint: string
        if (!is_null($maxNativeEstimatedDeliveryTime) && !is_string($maxNativeEstimatedDeliveryTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($maxNativeEstimatedDeliveryTime, true), gettype($maxNativeEstimatedDeliveryTime)), __LINE__);
        }
        $this->MaxNativeEstimatedDeliveryTime = $maxNativeEstimatedDeliveryTime;
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
     * @return \StructType\ShippingPackageInfoType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
