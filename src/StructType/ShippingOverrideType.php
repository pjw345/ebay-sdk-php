<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingOverrideType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is reserved for internal or future use.
 * @subpackage Structs
 */
class ShippingOverrideType extends AbstractStructBase
{
    /**
     * The ShippingServiceCostOverrideList
     * Meta information extracted from the WSDL
     * - documentation: This field is reserved for internal or future use.
     * - minOccurs: 0
     * @var \StructType\ShippingServiceCostOverrideListType
     */
    public $ShippingServiceCostOverrideList;
    /**
     * The DispatchTimeMaxOverride
     * Meta information extracted from the WSDL
     * - documentation: This field is reserved for internal or future use.
     * - minOccurs: 0
     * @var int
     */
    public $DispatchTimeMaxOverride;
    /**
     * Constructor method for ShippingOverrideType
     * @uses ShippingOverrideType::setShippingServiceCostOverrideList()
     * @uses ShippingOverrideType::setDispatchTimeMaxOverride()
     * @param \StructType\ShippingServiceCostOverrideListType $shippingServiceCostOverrideList
     * @param int $dispatchTimeMaxOverride
     */
    public function __construct(\StructType\ShippingServiceCostOverrideListType $shippingServiceCostOverrideList = null, $dispatchTimeMaxOverride = null)
    {
        $this
            ->setShippingServiceCostOverrideList($shippingServiceCostOverrideList)
            ->setDispatchTimeMaxOverride($dispatchTimeMaxOverride);
    }
    /**
     * Get ShippingServiceCostOverrideList value
     * @return \StructType\ShippingServiceCostOverrideListType|null
     */
    public function getShippingServiceCostOverrideList()
    {
        return $this->ShippingServiceCostOverrideList;
    }
    /**
     * Set ShippingServiceCostOverrideList value
     * @param \StructType\ShippingServiceCostOverrideListType $shippingServiceCostOverrideList
     * @return \StructType\ShippingOverrideType
     */
    public function setShippingServiceCostOverrideList(\StructType\ShippingServiceCostOverrideListType $shippingServiceCostOverrideList = null)
    {
        $this->ShippingServiceCostOverrideList = $shippingServiceCostOverrideList;
        return $this;
    }
    /**
     * Get DispatchTimeMaxOverride value
     * @return int|null
     */
    public function getDispatchTimeMaxOverride()
    {
        return $this->DispatchTimeMaxOverride;
    }
    /**
     * Set DispatchTimeMaxOverride value
     * @param int $dispatchTimeMaxOverride
     * @return \StructType\ShippingOverrideType
     */
    public function setDispatchTimeMaxOverride($dispatchTimeMaxOverride = null)
    {
        // validation for constraint: int
        if (!is_null($dispatchTimeMaxOverride) && !(is_int($dispatchTimeMaxOverride) || ctype_digit($dispatchTimeMaxOverride))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dispatchTimeMaxOverride, true), gettype($dispatchTimeMaxOverride)), __LINE__);
        }
        $this->DispatchTimeMaxOverride = $dispatchTimeMaxOverride;
        return $this;
    }
}
