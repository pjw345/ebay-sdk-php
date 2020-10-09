<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingServiceOptionsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Container consisting of shipping costs and other details related to a domestic shipping service. A <b>ShippingServiceOptions</b> container is required for each domestic shipping service option that the seller will make available to
 * buyers in an Add/Revise/Relist call. Up to four domestic shipping service options can be offered per listing.
 * @subpackage Structs
 */
class ShippingServiceOptionsType extends AbstractStructBase
{
    /**
     * The ShippingInsuranceCost
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable as it is not longer possible for a seller to offer a buyer shipping insurance.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $ShippingInsuranceCost;
    /**
     * The ShippingService
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates a specific domestic shipping service option being offered by the seller to ship an item to a buyer who is located within the same country as the item. This field is required to identify each domestic
     * shipping service option that is specified with a <b>ShippingServiceOptions</b> container. <br><br> For a list of valid <b>ShippingService</b> values, call <b>GeteBayDetails</b> with <b>DetailName</b> set to <code>ShippingServiceDetails</code>. The
     * <b>ShippingServiceDetails.ValidForSellingFlow</b> flag must also be present. Otherwise, that particular shipping service option is no longer valid and cannot be offered to buyers through a listing. <br><br> To view the full list of domestic shipping
     * service options in the response, look for the <b>ShippingServiceDetails.ShippingService</b> fields. Domestic shipping service options will not have a <b>InternationalService</b> = <code>true</code> field, as this indicates that the
     * <b>ShippingService</b> value is an International shipping service option.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingService;
    /**
     * The ShippingServiceCost
     * Meta information extracted from the WSDL
     * - documentation: The base cost of shipping one unit of the item using the shipping service specified in the corresponding <b>ShippingService</b> field. <br> <br> In the case of a multiple-quantity, fixed-price listing, the
     * <b>ShippingServiceAdditionalCost</b> field also becomes applicable, and shows the cost to ship each additional unit of the item if the buyer purchases multiple quantity of the same line item. <br> <br> <span class="tablenote"><strong>Note:</strong>
     * If the corresponding shipping service option is set as a 'free shipping' option (<b>FreeShipping=true</b>), the seller still needs to include this <b>ShippingServiceCost</b> field and set its value to <code>0.0</code>, as eBay will not do this
     * automatically. </span> When returned by <b>GetItemShipping</b>, it includes the packaging and handling cost. <br> <br> Note that if <b>ShippingService</b> is set to <code>LocalPickup</code>, <b>ShippingServiceCost</b> must be set to <code>0.0</code>.
     * Also, if a shipping service has been specified (even <b>LocalPickup</b>), <b>GetItem</b> returns the shipping service cost, even if the cost is zero. <br> <br> If this is for calculated shipping for a listing that has not yet ended, note that the
     * cost cannot be determined until the listing has ended and the buyer has specified a postal code.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $ShippingServiceCost;
    /**
     * The ShippingServiceAdditionalCost
     * Meta information extracted from the WSDL
     * - documentation: The cost of shipping each additional item if the same buyer purchases multiple quantity of the same line item. This field is required when creating a multiple-quantity, fixed-price listing. Generally, the seller will give the buyer a
     * shipping discount if that buyer purchases multiple quantity of the item, so this value should usually be less than the value set for <b>ShippingServiceCost</b>. <br/><br/> The value of this field can even be set to <code>0</code> if the seller wants
     * to encourage buyers to buy multiple quantity of the item, or it could be that the seller can fit multiple quantities of the line item in a single shipping package, so the seller is just passing this shipping savings onto the buyer. This field is not
     * applicable for single-quantity listings.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $ShippingServiceAdditionalCost;
    /**
     * The ShippingServicePriority
     * Meta information extracted from the WSDL
     * - documentation: Controls the order (relative to other shipping services) in which the corresponding <b>ShippingService</b> will appear in the View Item and Checkout page. <br/><br/> Sellers can specify up to four domestic shipping services (with
     * four <b>ShippingServiceOptions</b> containers), so valid values are 1, 2, 3, and 4. A shipping service with a <b>ShippingServicePriority</b> value of 1 appears at the top. Conversely, a shipping service with a <b>ShippingServicePriority</b> value of
     * 4 appears at the bottom of a list of four shipping service options. <br><br> If this field is omitted from domestic shipping service options, the order of the shipping service options in View Item and Checkout pages will be determined by the order
     * that these shipping service options are presented in the request payload of an Add/Revise/Relist call.
     * - minOccurs: 0
     * @var int
     */
    public $ShippingServicePriority;
    /**
     * The ExpeditedService
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as <code>true</code> if the domestic shipping service is considered an expedited shipping service. An expedited service is typically a shipping service that can ship an order that will arrive at the buyer's
     * location within one to two business days.
     * - minOccurs: 0
     * @var bool
     */
    public $ExpeditedService;
    /**
     * The ShippingTimeMin
     * Meta information extracted from the WSDL
     * - documentation: The integer value returned here indicates the minimum number of business days that the shipping service (indicated in the corresponding <b>ShippingService</b> field) will take to be delivered to the buyer. <br><br> This minimum
     * shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier for shipment to the buyer. 'Business days' can vary by shipping carrier and by
     * country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
     * - minOccurs: 0
     * @var int
     */
    public $ShippingTimeMin;
    /**
     * The ShippingTimeMax
     * Meta information extracted from the WSDL
     * - documentation: The integer value returned here indicates the maximum number of business days that the shipping service (indicated in the corresponding <b>ShippingService</b> field) will take to be delivered to the buyer. <br><br> This maximum
     * shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier for shipment to the buyer. 'Business days' can vary by shipping carrier and by
     * country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
     * - minOccurs: 0
     * @var int
     */
    public $ShippingTimeMax;
    /**
     * The FreeShipping
     * Meta information extracted from the WSDL
     * - documentation: This boolean field indicates whether or not the corresponding domestic shipping service option is free to the buyer. In an Add/Revise/Relist call, free shipping can only be offered for the first specified shipping service (so, the
     * corresponding <b>ShippingServicePriority</b> value should be <code>1</code> or included first in the call request). If 'free shipping' is for any other shipping service, this field is ignored. <br/><br/> For 'Get' calls, including <b>GetItem</b>,
     * this field is only returned if <code>1</code>. <br/><br/> <span class="tablenote"><strong>Note:</strong> If a seller is specifying a shipping service option as 'free shipping', in addition to this <b>FreeShipping</b> boolean field, the seller will
     * also need to include the corresponding <b>ShippingServiceCost</b> field and set its value to <code>0.0</code>, as eBay will not do this automatically. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $FreeShipping;
    /**
     * The LocalPickup
     * Meta information extracted from the WSDL
     * - documentation: The <b>LocalPickup</b> flag is used by the <b>GetMyEbayBuying</b> and <b>GetMyEbaySelling</b> calls to indicate whether the buyer has selected local pickup as the shipping option or the seller has specified local pickup as the first
     * shipping option. The <b>LocalPickup</b> flag can also be used with other fields to indicate if there is no fee for local pickup. <br/><br/> For example, if the <b>LocalPickup</b> flag is used with the <b>ShippingServiceOptions</b> and
     * <b>ShippingServiceCost</b> fields, the seller can indicate that local pickup is an available option and that no is fee charged. This is the equivalent of free shipping.
     * - minOccurs: 0
     * @var bool
     */
    public $LocalPickup;
    /**
     * The ImportCharge
     * Meta information extracted from the WSDL
     * - documentation: The total cost of customs and taxes for the international leg of an order shipped using the Global Shipping Program. This amount is calculated and supplied for each item by the international shipping provider when a buyer views the
     * item properties.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $ImportCharge;
    /**
     * The ShippingPackageInfo
     * Meta information extracted from the WSDL
     * - documentation: This container is no longer applicable, and it was only applicable to eBay Now and 'eBay On Demand Delivery' orders, and neither of these features are available any longer.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ShippingPackageInfoType[]
     */
    public $ShippingPackageInfo;
    /**
     * The ShippingServiceCutOffTime
     * Meta information extracted from the WSDL
     * - documentation: The last time of day that an order using the specified shipping service will be accepted by the seller for the current listing. The cut off time applies and is returned only when the <strong>ShippingService</strong> field contains
     * the name of a qualifying time-sensitive shipping service, such as <code>eBayNowImmediateDelivery</code>. <br/><br/> The cut off time is set by eBay and determined in part by the policies and locations of the seller and the shipping carrier.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingServiceCutOffTime;
    /**
     * The LogisticPlanType
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * - minOccurs: 0
     * @var string
     */
    public $LogisticPlanType;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ShippingServiceOptionsType
     * @uses ShippingServiceOptionsType::setShippingInsuranceCost()
     * @uses ShippingServiceOptionsType::setShippingService()
     * @uses ShippingServiceOptionsType::setShippingServiceCost()
     * @uses ShippingServiceOptionsType::setShippingServiceAdditionalCost()
     * @uses ShippingServiceOptionsType::setShippingServicePriority()
     * @uses ShippingServiceOptionsType::setExpeditedService()
     * @uses ShippingServiceOptionsType::setShippingTimeMin()
     * @uses ShippingServiceOptionsType::setShippingTimeMax()
     * @uses ShippingServiceOptionsType::setFreeShipping()
     * @uses ShippingServiceOptionsType::setLocalPickup()
     * @uses ShippingServiceOptionsType::setImportCharge()
     * @uses ShippingServiceOptionsType::setShippingPackageInfo()
     * @uses ShippingServiceOptionsType::setShippingServiceCutOffTime()
     * @uses ShippingServiceOptionsType::setLogisticPlanType()
     * @uses ShippingServiceOptionsType::setAny()
     * @param \StructType\AmountType $shippingInsuranceCost
     * @param string $shippingService
     * @param \StructType\AmountType $shippingServiceCost
     * @param \StructType\AmountType $shippingServiceAdditionalCost
     * @param int $shippingServicePriority
     * @param bool $expeditedService
     * @param int $shippingTimeMin
     * @param int $shippingTimeMax
     * @param bool $freeShipping
     * @param bool $localPickup
     * @param \StructType\AmountType $importCharge
     * @param \StructType\ShippingPackageInfoType[] $shippingPackageInfo
     * @param string $shippingServiceCutOffTime
     * @param string $logisticPlanType
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\AmountType $shippingInsuranceCost = null, $shippingService = null, \StructType\AmountType $shippingServiceCost = null, \StructType\AmountType $shippingServiceAdditionalCost = null, $shippingServicePriority = null, $expeditedService = null, $shippingTimeMin = null, $shippingTimeMax = null, $freeShipping = null, $localPickup = null, \StructType\AmountType $importCharge = null, array $shippingPackageInfo = array(), $shippingServiceCutOffTime = null, $logisticPlanType = null, \DOMDocument $any = null)
    {
        $this
            ->setShippingInsuranceCost($shippingInsuranceCost)
            ->setShippingService($shippingService)
            ->setShippingServiceCost($shippingServiceCost)
            ->setShippingServiceAdditionalCost($shippingServiceAdditionalCost)
            ->setShippingServicePriority($shippingServicePriority)
            ->setExpeditedService($expeditedService)
            ->setShippingTimeMin($shippingTimeMin)
            ->setShippingTimeMax($shippingTimeMax)
            ->setFreeShipping($freeShipping)
            ->setLocalPickup($localPickup)
            ->setImportCharge($importCharge)
            ->setShippingPackageInfo($shippingPackageInfo)
            ->setShippingServiceCutOffTime($shippingServiceCutOffTime)
            ->setLogisticPlanType($logisticPlanType)
            ->setAny($any);
    }
    /**
     * Get ShippingInsuranceCost value
     * @return \StructType\AmountType|null
     */
    public function getShippingInsuranceCost()
    {
        return $this->ShippingInsuranceCost;
    }
    /**
     * Set ShippingInsuranceCost value
     * @param \StructType\AmountType $shippingInsuranceCost
     * @return \StructType\ShippingServiceOptionsType
     */
    public function setShippingInsuranceCost(\StructType\AmountType $shippingInsuranceCost = null)
    {
        $this->ShippingInsuranceCost = $shippingInsuranceCost;
        return $this;
    }
    /**
     * Get ShippingService value
     * @return string|null
     */
    public function getShippingService()
    {
        return $this->ShippingService;
    }
    /**
     * Set ShippingService value
     * @param string $shippingService
     * @return \StructType\ShippingServiceOptionsType
     */
    public function setShippingService($shippingService = null)
    {
        // validation for constraint: string
        if (!is_null($shippingService) && !is_string($shippingService)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingService, true), gettype($shippingService)), __LINE__);
        }
        $this->ShippingService = $shippingService;
        return $this;
    }
    /**
     * Get ShippingServiceCost value
     * @return \StructType\AmountType|null
     */
    public function getShippingServiceCost()
    {
        return $this->ShippingServiceCost;
    }
    /**
     * Set ShippingServiceCost value
     * @param \StructType\AmountType $shippingServiceCost
     * @return \StructType\ShippingServiceOptionsType
     */
    public function setShippingServiceCost(\StructType\AmountType $shippingServiceCost = null)
    {
        $this->ShippingServiceCost = $shippingServiceCost;
        return $this;
    }
    /**
     * Get ShippingServiceAdditionalCost value
     * @return \StructType\AmountType|null
     */
    public function getShippingServiceAdditionalCost()
    {
        return $this->ShippingServiceAdditionalCost;
    }
    /**
     * Set ShippingServiceAdditionalCost value
     * @param \StructType\AmountType $shippingServiceAdditionalCost
     * @return \StructType\ShippingServiceOptionsType
     */
    public function setShippingServiceAdditionalCost(\StructType\AmountType $shippingServiceAdditionalCost = null)
    {
        $this->ShippingServiceAdditionalCost = $shippingServiceAdditionalCost;
        return $this;
    }
    /**
     * Get ShippingServicePriority value
     * @return int|null
     */
    public function getShippingServicePriority()
    {
        return $this->ShippingServicePriority;
    }
    /**
     * Set ShippingServicePriority value
     * @param int $shippingServicePriority
     * @return \StructType\ShippingServiceOptionsType
     */
    public function setShippingServicePriority($shippingServicePriority = null)
    {
        // validation for constraint: int
        if (!is_null($shippingServicePriority) && !(is_int($shippingServicePriority) || ctype_digit($shippingServicePriority))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shippingServicePriority, true), gettype($shippingServicePriority)), __LINE__);
        }
        $this->ShippingServicePriority = $shippingServicePriority;
        return $this;
    }
    /**
     * Get ExpeditedService value
     * @return bool|null
     */
    public function getExpeditedService()
    {
        return $this->ExpeditedService;
    }
    /**
     * Set ExpeditedService value
     * @param bool $expeditedService
     * @return \StructType\ShippingServiceOptionsType
     */
    public function setExpeditedService($expeditedService = null)
    {
        // validation for constraint: boolean
        if (!is_null($expeditedService) && !is_bool($expeditedService)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($expeditedService, true), gettype($expeditedService)), __LINE__);
        }
        $this->ExpeditedService = $expeditedService;
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
     * @return \StructType\ShippingServiceOptionsType
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
     * @return \StructType\ShippingServiceOptionsType
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
     * Get FreeShipping value
     * @return bool|null
     */
    public function getFreeShipping()
    {
        return $this->FreeShipping;
    }
    /**
     * Set FreeShipping value
     * @param bool $freeShipping
     * @return \StructType\ShippingServiceOptionsType
     */
    public function setFreeShipping($freeShipping = null)
    {
        // validation for constraint: boolean
        if (!is_null($freeShipping) && !is_bool($freeShipping)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($freeShipping, true), gettype($freeShipping)), __LINE__);
        }
        $this->FreeShipping = $freeShipping;
        return $this;
    }
    /**
     * Get LocalPickup value
     * @return bool|null
     */
    public function getLocalPickup()
    {
        return $this->LocalPickup;
    }
    /**
     * Set LocalPickup value
     * @param bool $localPickup
     * @return \StructType\ShippingServiceOptionsType
     */
    public function setLocalPickup($localPickup = null)
    {
        // validation for constraint: boolean
        if (!is_null($localPickup) && !is_bool($localPickup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($localPickup, true), gettype($localPickup)), __LINE__);
        }
        $this->LocalPickup = $localPickup;
        return $this;
    }
    /**
     * Get ImportCharge value
     * @return \StructType\AmountType|null
     */
    public function getImportCharge()
    {
        return $this->ImportCharge;
    }
    /**
     * Set ImportCharge value
     * @param \StructType\AmountType $importCharge
     * @return \StructType\ShippingServiceOptionsType
     */
    public function setImportCharge(\StructType\AmountType $importCharge = null)
    {
        $this->ImportCharge = $importCharge;
        return $this;
    }
    /**
     * Get ShippingPackageInfo value
     * @return \StructType\ShippingPackageInfoType[]|null
     */
    public function getShippingPackageInfo()
    {
        return $this->ShippingPackageInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setShippingPackageInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShippingPackageInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShippingPackageInfoForArrayConstraintsFromSetShippingPackageInfo(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingServiceOptionsTypeShippingPackageInfoItem) {
            // validation for constraint: itemType
            if (!$shippingServiceOptionsTypeShippingPackageInfoItem instanceof \StructType\ShippingPackageInfoType) {
                $invalidValues[] = is_object($shippingServiceOptionsTypeShippingPackageInfoItem) ? get_class($shippingServiceOptionsTypeShippingPackageInfoItem) : sprintf('%s(%s)', gettype($shippingServiceOptionsTypeShippingPackageInfoItem), var_export($shippingServiceOptionsTypeShippingPackageInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ShippingPackageInfo property can only contain items of type \StructType\ShippingPackageInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ShippingPackageInfo value
     * @throws \InvalidArgumentException
     * @param \StructType\ShippingPackageInfoType[] $shippingPackageInfo
     * @return \StructType\ShippingServiceOptionsType
     */
    public function setShippingPackageInfo(array $shippingPackageInfo = array())
    {
        // validation for constraint: array
        if ('' !== ($shippingPackageInfoArrayErrorMessage = self::validateShippingPackageInfoForArrayConstraintsFromSetShippingPackageInfo($shippingPackageInfo))) {
            throw new \InvalidArgumentException($shippingPackageInfoArrayErrorMessage, __LINE__);
        }
        $this->ShippingPackageInfo = $shippingPackageInfo;
        return $this;
    }
    /**
     * Add item to ShippingPackageInfo value
     * @throws \InvalidArgumentException
     * @param \StructType\ShippingPackageInfoType $item
     * @return \StructType\ShippingServiceOptionsType
     */
    public function addToShippingPackageInfo(\StructType\ShippingPackageInfoType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ShippingPackageInfoType) {
            throw new \InvalidArgumentException(sprintf('The ShippingPackageInfo property can only contain items of type \StructType\ShippingPackageInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ShippingPackageInfo[] = $item;
        return $this;
    }
    /**
     * Get ShippingServiceCutOffTime value
     * @return string|null
     */
    public function getShippingServiceCutOffTime()
    {
        return $this->ShippingServiceCutOffTime;
    }
    /**
     * Set ShippingServiceCutOffTime value
     * @param string $shippingServiceCutOffTime
     * @return \StructType\ShippingServiceOptionsType
     */
    public function setShippingServiceCutOffTime($shippingServiceCutOffTime = null)
    {
        // validation for constraint: string
        if (!is_null($shippingServiceCutOffTime) && !is_string($shippingServiceCutOffTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingServiceCutOffTime, true), gettype($shippingServiceCutOffTime)), __LINE__);
        }
        $this->ShippingServiceCutOffTime = $shippingServiceCutOffTime;
        return $this;
    }
    /**
     * Get LogisticPlanType value
     * @return string|null
     */
    public function getLogisticPlanType()
    {
        return $this->LogisticPlanType;
    }
    /**
     * Set LogisticPlanType value
     * @param string $logisticPlanType
     * @return \StructType\ShippingServiceOptionsType
     */
    public function setLogisticPlanType($logisticPlanType = null)
    {
        // validation for constraint: string
        if (!is_null($logisticPlanType) && !is_string($logisticPlanType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($logisticPlanType, true), gettype($logisticPlanType)), __LINE__);
        }
        $this->LogisticPlanType = $logisticPlanType;
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
     * @return \StructType\ShippingServiceOptionsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
