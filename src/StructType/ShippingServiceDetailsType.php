<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingServiceDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>ShippingServiceDetails</b> containers that are returned in the <b>GeteBayDetails</b> response. Each <b>ShippingServiceDetails</b> container consists of detailed information about each shipping service option
 * available for the specified country. These details include the shipping service enumeration value to use when specifying shipping service options in an Add/Revise/Relist call, the shipping carrier, the shipping category (e.g. expedited, economy,
 * etc.), the shipping packages that can be used, and the shipping delivery window. <br/><br/> <b>ShippingServiceDetails</b> containers are returned if a <b>DetailName</b> field is included in the call request and set to
 * <code>ShippingServiceDetails</code>, or if no <b>DetailName</b> field is included in the call request.
 * @subpackage Structs
 */
class ShippingServiceDetailsType extends AbstractStructBase
{
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: Display string that applications can use to present a list of shipping service options in a more user-friendly format (such as in a drop-down list).
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The ExpeditedService
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether a domestic shipping service option is an expedited shipping service. This field is only returned under a <b>ShippingServiceDetails</b> if <code>true</code>. Expedited generally means that the shipment of the order
     * can arrive at the buyer's location within one or two business days.
     * - minOccurs: 0
     * @var bool
     */
    public $ExpeditedService;
    /**
     * The InternationalService
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the shipping service is an international shipping service. An international shipping service option is required if an item is being shipped from one country (origin) to another (destination).
     * - minOccurs: 0
     * @var bool
     */
    public $InternationalService;
    /**
     * The ShippingService
     * Meta information extracted from the WSDL
     * - documentation: The name of shipping service option. The ShippingServiceDetails.<strong>ValidForSellingFlow</strong> flag must also be present and <code>true</code>. Otherwise, that particular shipping service option is no longer valid and cannot be
     * offered to buyers through a listing. <br/><br/> This token value is the text that a seller will provide in the ShippingDetails.ShippingServiceOptions.<strong>ShippingService</strong> field when creating a listing.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingService;
    /**
     * The ShippingServiceID
     * Meta information extracted from the WSDL
     * - documentation: Numeric identifier. A value greater than 50000 represents an international shipping service (confirmed by <strong>InternationalShippingService</strong> being true). Some applications use this ID to look up shipping services more
     * efficiently.
     * - minOccurs: 0
     * @var int
     */
    public $ShippingServiceID;
    /**
     * The ShippingTimeMax
     * Meta information extracted from the WSDL
     * - documentation: The integer value returned here indicates the maximum number of business days that the shipping carrier (indicated in the corresponding <b>ShippingCarrier</b> field) will take to ship an item using the corresponding shipping service
     * option (indicated in the <b>ShippingService</b> field). <br><br> This maximum shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier
     * for shipment to the buyer. 'Business days' can vary by shipping carrier and by country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
     * <br><br> For sellers opted into and using eBay Guaranteed Delivery, they should be looking at this value, and this value plus their handling time stated in the listing cannot be greater than 4 business days in order for that listing to be eligible
     * for eBay Guaranteed Delivery.
     * - minOccurs: 0
     * @var int
     */
    public $ShippingTimeMax;
    /**
     * The ShippingTimeMin
     * Meta information extracted from the WSDL
     * - documentation: The integer value returned here indicates the minimum number of business days that the shipping carrier (indicated in the corresponding <b>ShippingCarrier</b> field) will take to ship an item using the corresponding shipping service
     * option (indicated in the <b>ShippingService</b> field). <br><br> This minimum shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier
     * for shipment to the buyer. 'Business days' can vary by shipping carrier and by country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
     * - minOccurs: 0
     * @var int
     */
    public $ShippingTimeMin;
    /**
     * The ShippingServiceCode
     * Meta information extracted from the WSDL
     * - documentation: For future use.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingServiceCode;
    /**
     * The ServiceType
     * Meta information extracted from the WSDL
     * - documentation: The shipping cost types that this shipping service option supports, such as flat-rate or calculated. A <strong>ServiceType</strong> field is returned for each shipping cost type supported by the shipping service option.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ServiceType;
    /**
     * The ShippingPackage
     * Meta information extracted from the WSDL
     * - documentation: The shipping packages that can be used for this shipping service option. A <strong>ShippingPackage</strong> field is returned for each shipping package supported by the shipping service option.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ShippingPackage;
    /**
     * The DimensionsRequired
     * Meta information extracted from the WSDL
     * - documentation: This field is only returned if the shipping service option requires that package dimensions are provided by the seller. This field is only returned if 'true'.
     * - minOccurs: 0
     * @var bool
     */
    public $DimensionsRequired;
    /**
     * The ValidForSellingFlow
     * Meta information extracted from the WSDL
     * - documentation: If this field is returned as 'true', the shipping service option can be used in a Add/Revise/Relist API call. If this field is returned as 'false', the shipping service option is not currently supported and cannot be used in a
     * Add/Revise/Relist API call.
     * - minOccurs: 0
     * @var bool
     */
    public $ValidForSellingFlow;
    /**
     * The SurchargeApplicable
     * Meta information extracted from the WSDL
     * - documentation: This field is only returned if 'true', and indicates that a shipping surcharge is applicable for this shipping service option.
     * - minOccurs: 0
     * @var bool
     */
    public $SurchargeApplicable;
    /**
     * The ShippingCarrier
     * Meta information extracted from the WSDL
     * - documentation: The enumeration value for the shipping carrier associated with the shipping service option. <br/><br/> <span class="tablenote"> <strong>Note:</strong> Commonly used shipping carriers can also be found by calling <b>GeteBayDetails</b>
     * with <b>DetailName</b> set to <code>ShippingCarrierDetails</code> and examining the returned <b>ShippingCarrierDetails.ShippingCarrier</b> field. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ShippingCarrier;
    /**
     * The CODService
     * Meta information extracted from the WSDL
     * - documentation: This field is only returned if'true', and indicates that the corresponding <b>ShippingServiceDetails.ShippingService</b> value is a COD (Cash-On-Delivery) service. <br/><br/> COD shipping services are not supported by all sites.
     * - minOccurs: 0
     * @var bool
     */
    public $CODService;
    /**
     * The DeprecationDetails
     * Meta information extracted from the WSDL
     * - documentation: A mechanism by which details about deprecation of a shipping service is announced. See also MappedToShippingServiceID. If this container is empty, it means that there is no mapping for this shipping service and that the shipping
     * service will be dropped from the listing without an accompanying warning message from the eBay API.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\AnnouncementMessageType[]
     */
    public $DeprecationDetails;
    /**
     * The MappedToShippingServiceID
     * Meta information extracted from the WSDL
     * - documentation: The ID of another shipping service that will be used when a shipping service is deprecated. See also DeprecationDetails.
     * - minOccurs: 0
     * @var int
     */
    public $MappedToShippingServiceID;
    /**
     * The CostGroupFlat
     * Meta information extracted from the WSDL
     * - documentation: If returned, this is the shipping service group to which the shipping service belongs. Valid values are found in CostGroupFlatCodeType.
     * - minOccurs: 0
     * @var string
     */
    public $CostGroupFlat;
    /**
     * The ShippingServicePackageDetails
     * Meta information extracted from the WSDL
     * - documentation: Shipping Package level details for the enclosing shipping service, this complex type replaces the existing ShippingPackage type.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ShippingServicePackageDetailsType[]
     */
    public $ShippingServicePackageDetails;
    /**
     * The WeightRequired
     * Meta information extracted from the WSDL
     * - documentation: If true, a seller who selects this package type for the listing and then offers this shipping service must specify WeightMajor and WeightMinor in the item definition. If not returned, WeightRequired is false.
     * - minOccurs: 0
     * @var bool
     */
    public $WeightRequired;
    /**
     * The DetailVersion
     * Meta information extracted from the WSDL
     * - documentation: Returns the latest version number for this field. The version can be used to determine if and when to refresh cached client data.
     * - minOccurs: 0
     * @var string
     */
    public $DetailVersion;
    /**
     * The UpdateTime
     * Meta information extracted from the WSDL
     * - documentation: Gives the time in GMT that the feature flags for the details were last updated. This timestamp can be used to determine if and when to refresh cached client data.
     * - minOccurs: 0
     * @var string
     */
    public $UpdateTime;
    /**
     * The ShippingCategory
     * Meta information extracted from the WSDL
     * - documentation: Indicates the shipping category. Shipping categories include the following: <code>ECONOMY</code>, <code>STANDARD</code>, <code>EXPEDITED</code>, <code>ONE_DAY</code>, <code>PICKUP</code>, <code>OTHER</code>, and <code>NONE</code>.
     * International shipping services are generally grouped into the <code>NONE</code> category. For more information about these shipping categories, see the <a href="http://pages.ebay.com/sellerinformation/shipping/chooseservice.html">Shipping Basics</a>
     * page on the eBay Shipping Center site. <br/><br/> <span class="tablenote"> <strong>Note:</strong> This field is returned only for those sites that support shipping categories: US (0), CA (2), CAFR (210), UK (3), AU (15), FR (71), DE (77), IT (101)
     * and ES (186). </span>
     * - minOccurs: 0
     * @var string
     */
    public $ShippingCategory;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ShippingServiceDetailsType
     * @uses ShippingServiceDetailsType::setDescription()
     * @uses ShippingServiceDetailsType::setExpeditedService()
     * @uses ShippingServiceDetailsType::setInternationalService()
     * @uses ShippingServiceDetailsType::setShippingService()
     * @uses ShippingServiceDetailsType::setShippingServiceID()
     * @uses ShippingServiceDetailsType::setShippingTimeMax()
     * @uses ShippingServiceDetailsType::setShippingTimeMin()
     * @uses ShippingServiceDetailsType::setShippingServiceCode()
     * @uses ShippingServiceDetailsType::setServiceType()
     * @uses ShippingServiceDetailsType::setShippingPackage()
     * @uses ShippingServiceDetailsType::setDimensionsRequired()
     * @uses ShippingServiceDetailsType::setValidForSellingFlow()
     * @uses ShippingServiceDetailsType::setSurchargeApplicable()
     * @uses ShippingServiceDetailsType::setShippingCarrier()
     * @uses ShippingServiceDetailsType::setCODService()
     * @uses ShippingServiceDetailsType::setDeprecationDetails()
     * @uses ShippingServiceDetailsType::setMappedToShippingServiceID()
     * @uses ShippingServiceDetailsType::setCostGroupFlat()
     * @uses ShippingServiceDetailsType::setShippingServicePackageDetails()
     * @uses ShippingServiceDetailsType::setWeightRequired()
     * @uses ShippingServiceDetailsType::setDetailVersion()
     * @uses ShippingServiceDetailsType::setUpdateTime()
     * @uses ShippingServiceDetailsType::setShippingCategory()
     * @uses ShippingServiceDetailsType::setAny()
     * @param string $description
     * @param bool $expeditedService
     * @param bool $internationalService
     * @param string $shippingService
     * @param int $shippingServiceID
     * @param int $shippingTimeMax
     * @param int $shippingTimeMin
     * @param string $shippingServiceCode
     * @param string[] $serviceType
     * @param string[] $shippingPackage
     * @param bool $dimensionsRequired
     * @param bool $validForSellingFlow
     * @param bool $surchargeApplicable
     * @param string[] $shippingCarrier
     * @param bool $cODService
     * @param \StructType\AnnouncementMessageType[] $deprecationDetails
     * @param int $mappedToShippingServiceID
     * @param string $costGroupFlat
     * @param \StructType\ShippingServicePackageDetailsType[] $shippingServicePackageDetails
     * @param bool $weightRequired
     * @param string $detailVersion
     * @param string $updateTime
     * @param string $shippingCategory
     * @param \DOMDocument $any
     */
    public function __construct($description = null, $expeditedService = null, $internationalService = null, $shippingService = null, $shippingServiceID = null, $shippingTimeMax = null, $shippingTimeMin = null, $shippingServiceCode = null, array $serviceType = array(), array $shippingPackage = array(), $dimensionsRequired = null, $validForSellingFlow = null, $surchargeApplicable = null, array $shippingCarrier = array(), $cODService = null, array $deprecationDetails = array(), $mappedToShippingServiceID = null, $costGroupFlat = null, array $shippingServicePackageDetails = array(), $weightRequired = null, $detailVersion = null, $updateTime = null, $shippingCategory = null, \DOMDocument $any = null)
    {
        $this
            ->setDescription($description)
            ->setExpeditedService($expeditedService)
            ->setInternationalService($internationalService)
            ->setShippingService($shippingService)
            ->setShippingServiceID($shippingServiceID)
            ->setShippingTimeMax($shippingTimeMax)
            ->setShippingTimeMin($shippingTimeMin)
            ->setShippingServiceCode($shippingServiceCode)
            ->setServiceType($serviceType)
            ->setShippingPackage($shippingPackage)
            ->setDimensionsRequired($dimensionsRequired)
            ->setValidForSellingFlow($validForSellingFlow)
            ->setSurchargeApplicable($surchargeApplicable)
            ->setShippingCarrier($shippingCarrier)
            ->setCODService($cODService)
            ->setDeprecationDetails($deprecationDetails)
            ->setMappedToShippingServiceID($mappedToShippingServiceID)
            ->setCostGroupFlat($costGroupFlat)
            ->setShippingServicePackageDetails($shippingServicePackageDetails)
            ->setWeightRequired($weightRequired)
            ->setDetailVersion($detailVersion)
            ->setUpdateTime($updateTime)
            ->setShippingCategory($shippingCategory)
            ->setAny($any);
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \StructType\ShippingServiceDetailsType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
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
     * @return \StructType\ShippingServiceDetailsType
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
     * Get InternationalService value
     * @return bool|null
     */
    public function getInternationalService()
    {
        return $this->InternationalService;
    }
    /**
     * Set InternationalService value
     * @param bool $internationalService
     * @return \StructType\ShippingServiceDetailsType
     */
    public function setInternationalService($internationalService = null)
    {
        // validation for constraint: boolean
        if (!is_null($internationalService) && !is_bool($internationalService)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($internationalService, true), gettype($internationalService)), __LINE__);
        }
        $this->InternationalService = $internationalService;
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
     * @return \StructType\ShippingServiceDetailsType
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
     * Get ShippingServiceID value
     * @return int|null
     */
    public function getShippingServiceID()
    {
        return $this->ShippingServiceID;
    }
    /**
     * Set ShippingServiceID value
     * @param int $shippingServiceID
     * @return \StructType\ShippingServiceDetailsType
     */
    public function setShippingServiceID($shippingServiceID = null)
    {
        // validation for constraint: int
        if (!is_null($shippingServiceID) && !(is_int($shippingServiceID) || ctype_digit($shippingServiceID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shippingServiceID, true), gettype($shippingServiceID)), __LINE__);
        }
        $this->ShippingServiceID = $shippingServiceID;
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
     * @return \StructType\ShippingServiceDetailsType
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
     * @return \StructType\ShippingServiceDetailsType
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
     * Get ShippingServiceCode value
     * @return string|null
     */
    public function getShippingServiceCode()
    {
        return $this->ShippingServiceCode;
    }
    /**
     * Set ShippingServiceCode value
     * @uses \EnumType\ShippingServiceCodeType::valueIsValid()
     * @uses \EnumType\ShippingServiceCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $shippingServiceCode
     * @return \StructType\ShippingServiceDetailsType
     */
    public function setShippingServiceCode($shippingServiceCode = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ShippingServiceCodeType::valueIsValid($shippingServiceCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ShippingServiceCodeType', is_array($shippingServiceCode) ? implode(', ', $shippingServiceCode) : var_export($shippingServiceCode, true), implode(', ', \EnumType\ShippingServiceCodeType::getValidValues())), __LINE__);
        }
        $this->ShippingServiceCode = $shippingServiceCode;
        return $this;
    }
    /**
     * Get ServiceType value
     * @return string[]|null
     */
    public function getServiceType()
    {
        return $this->ServiceType;
    }
    /**
     * This method is responsible for validating the values passed to the setServiceType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setServiceType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServiceTypeForArrayConstraintsFromSetServiceType(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingServiceDetailsTypeServiceTypeItem) {
            // validation for constraint: enumeration
            if (!\EnumType\ShippingTypeCodeType::valueIsValid($shippingServiceDetailsTypeServiceTypeItem)) {
                $invalidValues[] = is_object($shippingServiceDetailsTypeServiceTypeItem) ? get_class($shippingServiceDetailsTypeServiceTypeItem) : sprintf('%s(%s)', gettype($shippingServiceDetailsTypeServiceTypeItem), var_export($shippingServiceDetailsTypeServiceTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ShippingTypeCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\ShippingTypeCodeType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ServiceType value
     * @uses \EnumType\ShippingTypeCodeType::valueIsValid()
     * @uses \EnumType\ShippingTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $serviceType
     * @return \StructType\ShippingServiceDetailsType
     */
    public function setServiceType(array $serviceType = array())
    {
        // validation for constraint: array
        if ('' !== ($serviceTypeArrayErrorMessage = self::validateServiceTypeForArrayConstraintsFromSetServiceType($serviceType))) {
            throw new \InvalidArgumentException($serviceTypeArrayErrorMessage, __LINE__);
        }
        $this->ServiceType = $serviceType;
        return $this;
    }
    /**
     * Add item to ServiceType value
     * @uses \EnumType\ShippingTypeCodeType::valueIsValid()
     * @uses \EnumType\ShippingTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\ShippingServiceDetailsType
     */
    public function addToServiceType($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ShippingTypeCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ShippingTypeCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \EnumType\ShippingTypeCodeType::getValidValues())), __LINE__);
        }
        $this->ServiceType[] = $item;
        return $this;
    }
    /**
     * Get ShippingPackage value
     * @return string[]|null
     */
    public function getShippingPackage()
    {
        return $this->ShippingPackage;
    }
    /**
     * This method is responsible for validating the values passed to the setShippingPackage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShippingPackage method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShippingPackageForArrayConstraintsFromSetShippingPackage(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingServiceDetailsTypeShippingPackageItem) {
            // validation for constraint: enumeration
            if (!\EnumType\ShippingPackageCodeType::valueIsValid($shippingServiceDetailsTypeShippingPackageItem)) {
                $invalidValues[] = is_object($shippingServiceDetailsTypeShippingPackageItem) ? get_class($shippingServiceDetailsTypeShippingPackageItem) : sprintf('%s(%s)', gettype($shippingServiceDetailsTypeShippingPackageItem), var_export($shippingServiceDetailsTypeShippingPackageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ShippingPackageCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\ShippingPackageCodeType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ShippingPackage value
     * @uses \EnumType\ShippingPackageCodeType::valueIsValid()
     * @uses \EnumType\ShippingPackageCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $shippingPackage
     * @return \StructType\ShippingServiceDetailsType
     */
    public function setShippingPackage(array $shippingPackage = array())
    {
        // validation for constraint: array
        if ('' !== ($shippingPackageArrayErrorMessage = self::validateShippingPackageForArrayConstraintsFromSetShippingPackage($shippingPackage))) {
            throw new \InvalidArgumentException($shippingPackageArrayErrorMessage, __LINE__);
        }
        $this->ShippingPackage = $shippingPackage;
        return $this;
    }
    /**
     * Add item to ShippingPackage value
     * @uses \EnumType\ShippingPackageCodeType::valueIsValid()
     * @uses \EnumType\ShippingPackageCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\ShippingServiceDetailsType
     */
    public function addToShippingPackage($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ShippingPackageCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ShippingPackageCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \EnumType\ShippingPackageCodeType::getValidValues())), __LINE__);
        }
        $this->ShippingPackage[] = $item;
        return $this;
    }
    /**
     * Get DimensionsRequired value
     * @return bool|null
     */
    public function getDimensionsRequired()
    {
        return $this->DimensionsRequired;
    }
    /**
     * Set DimensionsRequired value
     * @param bool $dimensionsRequired
     * @return \StructType\ShippingServiceDetailsType
     */
    public function setDimensionsRequired($dimensionsRequired = null)
    {
        // validation for constraint: boolean
        if (!is_null($dimensionsRequired) && !is_bool($dimensionsRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dimensionsRequired, true), gettype($dimensionsRequired)), __LINE__);
        }
        $this->DimensionsRequired = $dimensionsRequired;
        return $this;
    }
    /**
     * Get ValidForSellingFlow value
     * @return bool|null
     */
    public function getValidForSellingFlow()
    {
        return $this->ValidForSellingFlow;
    }
    /**
     * Set ValidForSellingFlow value
     * @param bool $validForSellingFlow
     * @return \StructType\ShippingServiceDetailsType
     */
    public function setValidForSellingFlow($validForSellingFlow = null)
    {
        // validation for constraint: boolean
        if (!is_null($validForSellingFlow) && !is_bool($validForSellingFlow)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($validForSellingFlow, true), gettype($validForSellingFlow)), __LINE__);
        }
        $this->ValidForSellingFlow = $validForSellingFlow;
        return $this;
    }
    /**
     * Get SurchargeApplicable value
     * @return bool|null
     */
    public function getSurchargeApplicable()
    {
        return $this->SurchargeApplicable;
    }
    /**
     * Set SurchargeApplicable value
     * @param bool $surchargeApplicable
     * @return \StructType\ShippingServiceDetailsType
     */
    public function setSurchargeApplicable($surchargeApplicable = null)
    {
        // validation for constraint: boolean
        if (!is_null($surchargeApplicable) && !is_bool($surchargeApplicable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($surchargeApplicable, true), gettype($surchargeApplicable)), __LINE__);
        }
        $this->SurchargeApplicable = $surchargeApplicable;
        return $this;
    }
    /**
     * Get ShippingCarrier value
     * @return string[]|null
     */
    public function getShippingCarrier()
    {
        return $this->ShippingCarrier;
    }
    /**
     * This method is responsible for validating the values passed to the setShippingCarrier method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShippingCarrier method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShippingCarrierForArrayConstraintsFromSetShippingCarrier(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingServiceDetailsTypeShippingCarrierItem) {
            // validation for constraint: enumeration
            if (!\EnumType\ShippingCarrierCodeType::valueIsValid($shippingServiceDetailsTypeShippingCarrierItem)) {
                $invalidValues[] = is_object($shippingServiceDetailsTypeShippingCarrierItem) ? get_class($shippingServiceDetailsTypeShippingCarrierItem) : sprintf('%s(%s)', gettype($shippingServiceDetailsTypeShippingCarrierItem), var_export($shippingServiceDetailsTypeShippingCarrierItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ShippingCarrierCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\ShippingCarrierCodeType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ShippingCarrier value
     * @uses \EnumType\ShippingCarrierCodeType::valueIsValid()
     * @uses \EnumType\ShippingCarrierCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $shippingCarrier
     * @return \StructType\ShippingServiceDetailsType
     */
    public function setShippingCarrier(array $shippingCarrier = array())
    {
        // validation for constraint: array
        if ('' !== ($shippingCarrierArrayErrorMessage = self::validateShippingCarrierForArrayConstraintsFromSetShippingCarrier($shippingCarrier))) {
            throw new \InvalidArgumentException($shippingCarrierArrayErrorMessage, __LINE__);
        }
        $this->ShippingCarrier = $shippingCarrier;
        return $this;
    }
    /**
     * Add item to ShippingCarrier value
     * @uses \EnumType\ShippingCarrierCodeType::valueIsValid()
     * @uses \EnumType\ShippingCarrierCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\ShippingServiceDetailsType
     */
    public function addToShippingCarrier($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ShippingCarrierCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ShippingCarrierCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \EnumType\ShippingCarrierCodeType::getValidValues())), __LINE__);
        }
        $this->ShippingCarrier[] = $item;
        return $this;
    }
    /**
     * Get CODService value
     * @return bool|null
     */
    public function getCODService()
    {
        return $this->CODService;
    }
    /**
     * Set CODService value
     * @param bool $cODService
     * @return \StructType\ShippingServiceDetailsType
     */
    public function setCODService($cODService = null)
    {
        // validation for constraint: boolean
        if (!is_null($cODService) && !is_bool($cODService)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cODService, true), gettype($cODService)), __LINE__);
        }
        $this->CODService = $cODService;
        return $this;
    }
    /**
     * Get DeprecationDetails value
     * @return \StructType\AnnouncementMessageType[]|null
     */
    public function getDeprecationDetails()
    {
        return $this->DeprecationDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setDeprecationDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDeprecationDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDeprecationDetailsForArrayConstraintsFromSetDeprecationDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingServiceDetailsTypeDeprecationDetailsItem) {
            // validation for constraint: itemType
            if (!$shippingServiceDetailsTypeDeprecationDetailsItem instanceof \StructType\AnnouncementMessageType) {
                $invalidValues[] = is_object($shippingServiceDetailsTypeDeprecationDetailsItem) ? get_class($shippingServiceDetailsTypeDeprecationDetailsItem) : sprintf('%s(%s)', gettype($shippingServiceDetailsTypeDeprecationDetailsItem), var_export($shippingServiceDetailsTypeDeprecationDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DeprecationDetails property can only contain items of type \StructType\AnnouncementMessageType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DeprecationDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\AnnouncementMessageType[] $deprecationDetails
     * @return \StructType\ShippingServiceDetailsType
     */
    public function setDeprecationDetails(array $deprecationDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($deprecationDetailsArrayErrorMessage = self::validateDeprecationDetailsForArrayConstraintsFromSetDeprecationDetails($deprecationDetails))) {
            throw new \InvalidArgumentException($deprecationDetailsArrayErrorMessage, __LINE__);
        }
        $this->DeprecationDetails = $deprecationDetails;
        return $this;
    }
    /**
     * Add item to DeprecationDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\AnnouncementMessageType $item
     * @return \StructType\ShippingServiceDetailsType
     */
    public function addToDeprecationDetails(\StructType\AnnouncementMessageType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AnnouncementMessageType) {
            throw new \InvalidArgumentException(sprintf('The DeprecationDetails property can only contain items of type \StructType\AnnouncementMessageType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DeprecationDetails[] = $item;
        return $this;
    }
    /**
     * Get MappedToShippingServiceID value
     * @return int|null
     */
    public function getMappedToShippingServiceID()
    {
        return $this->MappedToShippingServiceID;
    }
    /**
     * Set MappedToShippingServiceID value
     * @param int $mappedToShippingServiceID
     * @return \StructType\ShippingServiceDetailsType
     */
    public function setMappedToShippingServiceID($mappedToShippingServiceID = null)
    {
        // validation for constraint: int
        if (!is_null($mappedToShippingServiceID) && !(is_int($mappedToShippingServiceID) || ctype_digit($mappedToShippingServiceID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mappedToShippingServiceID, true), gettype($mappedToShippingServiceID)), __LINE__);
        }
        $this->MappedToShippingServiceID = $mappedToShippingServiceID;
        return $this;
    }
    /**
     * Get CostGroupFlat value
     * @return string|null
     */
    public function getCostGroupFlat()
    {
        return $this->CostGroupFlat;
    }
    /**
     * Set CostGroupFlat value
     * @param string $costGroupFlat
     * @return \StructType\ShippingServiceDetailsType
     */
    public function setCostGroupFlat($costGroupFlat = null)
    {
        // validation for constraint: string
        if (!is_null($costGroupFlat) && !is_string($costGroupFlat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($costGroupFlat, true), gettype($costGroupFlat)), __LINE__);
        }
        $this->CostGroupFlat = $costGroupFlat;
        return $this;
    }
    /**
     * Get ShippingServicePackageDetails value
     * @return \StructType\ShippingServicePackageDetailsType[]|null
     */
    public function getShippingServicePackageDetails()
    {
        return $this->ShippingServicePackageDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setShippingServicePackageDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShippingServicePackageDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShippingServicePackageDetailsForArrayConstraintsFromSetShippingServicePackageDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingServiceDetailsTypeShippingServicePackageDetailsItem) {
            // validation for constraint: itemType
            if (!$shippingServiceDetailsTypeShippingServicePackageDetailsItem instanceof \StructType\ShippingServicePackageDetailsType) {
                $invalidValues[] = is_object($shippingServiceDetailsTypeShippingServicePackageDetailsItem) ? get_class($shippingServiceDetailsTypeShippingServicePackageDetailsItem) : sprintf('%s(%s)', gettype($shippingServiceDetailsTypeShippingServicePackageDetailsItem), var_export($shippingServiceDetailsTypeShippingServicePackageDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ShippingServicePackageDetails property can only contain items of type \StructType\ShippingServicePackageDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ShippingServicePackageDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\ShippingServicePackageDetailsType[] $shippingServicePackageDetails
     * @return \StructType\ShippingServiceDetailsType
     */
    public function setShippingServicePackageDetails(array $shippingServicePackageDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($shippingServicePackageDetailsArrayErrorMessage = self::validateShippingServicePackageDetailsForArrayConstraintsFromSetShippingServicePackageDetails($shippingServicePackageDetails))) {
            throw new \InvalidArgumentException($shippingServicePackageDetailsArrayErrorMessage, __LINE__);
        }
        $this->ShippingServicePackageDetails = $shippingServicePackageDetails;
        return $this;
    }
    /**
     * Add item to ShippingServicePackageDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\ShippingServicePackageDetailsType $item
     * @return \StructType\ShippingServiceDetailsType
     */
    public function addToShippingServicePackageDetails(\StructType\ShippingServicePackageDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ShippingServicePackageDetailsType) {
            throw new \InvalidArgumentException(sprintf('The ShippingServicePackageDetails property can only contain items of type \StructType\ShippingServicePackageDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ShippingServicePackageDetails[] = $item;
        return $this;
    }
    /**
     * Get WeightRequired value
     * @return bool|null
     */
    public function getWeightRequired()
    {
        return $this->WeightRequired;
    }
    /**
     * Set WeightRequired value
     * @param bool $weightRequired
     * @return \StructType\ShippingServiceDetailsType
     */
    public function setWeightRequired($weightRequired = null)
    {
        // validation for constraint: boolean
        if (!is_null($weightRequired) && !is_bool($weightRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($weightRequired, true), gettype($weightRequired)), __LINE__);
        }
        $this->WeightRequired = $weightRequired;
        return $this;
    }
    /**
     * Get DetailVersion value
     * @return string|null
     */
    public function getDetailVersion()
    {
        return $this->DetailVersion;
    }
    /**
     * Set DetailVersion value
     * @param string $detailVersion
     * @return \StructType\ShippingServiceDetailsType
     */
    public function setDetailVersion($detailVersion = null)
    {
        // validation for constraint: string
        if (!is_null($detailVersion) && !is_string($detailVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailVersion, true), gettype($detailVersion)), __LINE__);
        }
        $this->DetailVersion = $detailVersion;
        return $this;
    }
    /**
     * Get UpdateTime value
     * @return string|null
     */
    public function getUpdateTime()
    {
        return $this->UpdateTime;
    }
    /**
     * Set UpdateTime value
     * @param string $updateTime
     * @return \StructType\ShippingServiceDetailsType
     */
    public function setUpdateTime($updateTime = null)
    {
        // validation for constraint: string
        if (!is_null($updateTime) && !is_string($updateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updateTime, true), gettype($updateTime)), __LINE__);
        }
        $this->UpdateTime = $updateTime;
        return $this;
    }
    /**
     * Get ShippingCategory value
     * @return string|null
     */
    public function getShippingCategory()
    {
        return $this->ShippingCategory;
    }
    /**
     * Set ShippingCategory value
     * @param string $shippingCategory
     * @return \StructType\ShippingServiceDetailsType
     */
    public function setShippingCategory($shippingCategory = null)
    {
        // validation for constraint: string
        if (!is_null($shippingCategory) && !is_string($shippingCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingCategory, true), gettype($shippingCategory)), __LINE__);
        }
        $this->ShippingCategory = $shippingCategory;
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
     * @return \StructType\ShippingServiceDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
