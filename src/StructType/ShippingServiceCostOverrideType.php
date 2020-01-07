<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingServiceCostOverrideType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <strong>ShippingServiceCostOverride</strong> container, which is used to override the flat shipping costs for a domestic and/or international shipping service option that is defined in the
 * <strong>domesticShippingPolicyInfoService</strong> and <strong>intlShippingPolicyInfoService</strong> containers of the Business Policies shipping profile. Shipping costs include the cost to ship one item, the cost to ship each additional identical
 * item, and any shipping surcharges applicable to domestic shipping services. A <strong>ShippingServiceCostOverride</strong> container is required for each domestic and/or international shipping service option whose costs the seller wishes to override.
 * @subpackage Structs
 */
class ShippingServiceCostOverrideType extends AbstractStructBase
{
    /**
     * The ShippingServicePriority
     * Meta information extracted from the WSDL
     * - documentation: This integer value maps the particular instance of the <strong>ShippingServiceCostOverride</strong> container to the <strong>domesticShippingPolicyInfoService</strong> or <strong>intlShippingPolicyInfoService</strong> container of
     * the Business Policies shipping profile. The <strong>ShippingServicePriority</strong> value should match the <strong>sortOrderId</strong> value for the matching shipping service in the Business Policies shipping profile. If overriding the shipping
     * costs for a domestic shipping service, the <strong>ShippingServiceType</strong> field should be set to 'Domestic', and to override the shipping costs for an international shipping service, the <strong>ShippingServiceType</strong> field should be set
     * to 'International'. <br/><br/> If any of the domestic and/or international shipping service priorities and shipping service options in the Add/Revise/Relist call and Business Policies shipping profile do not match, an error occurs.
     * - minOccurs: 0
     * @var int
     */
    public $ShippingServicePriority;
    /**
     * The ShippingServiceType
     * Meta information extracted from the WSDL
     * - documentation: This enumerated value indicates whether the shipping costs of a domestic or an international shipping costs are being overridden. To override the shipping costs for any domestic shipping service in the Business Policies shipping
     * profile, this field should be set to 'Domestic', and to override the shipping costs for any international shipping service, this field should be set to 'International'.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingServiceType;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * The ShippingServiceCost
     * Meta information extracted from the WSDL
     * - documentation: This dollar value indicates the shipping service cost to ship one item to the buyer. If the shipping service costs override operation is successful, this value will override the corresponding <strong>shippingServiceCost</strong>
     * value set in the <strong>domesticShippingPolicyInfoService</strong> (domestic shipping service) or <strong>intlShippingPolicyInfoService</strong> (international shipping service) containers in the Business Policies shipping profile.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $ShippingServiceCost;
    /**
     * The ShippingServiceAdditionalCost
     * Meta information extracted from the WSDL
     * - documentation: This dollar value indicates the cost to ship each additional identical item to the buyer. If the shipping service costs override operation is successful, this value will override the corresponding
     * <strong>shippingServiceAdditionalCost</strong> value set in the <strong>domesticShippingPolicyInfoService</strong> (domestic shipping service) or <strong>intlShippingPolicyInfoService</strong> (international shipping service) containers in the
     * Business Policies shipping profile. <br/><br/> This field is only applicable to multi-quantity, fixed-price listings.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $ShippingServiceAdditionalCost;
    /**
     * The ShippingSurcharge
     * Meta information extracted from the WSDL
     * - documentation: This dollar value indicates the shipping surcharge applicable to the domestic shipping service. If the shipping service costs override operation is successful, this value will override the corresponding
     * <strong>shippingSurcharge</strong> value set in the <strong>domesticShippingPolicyInfoService</strong> container in the Business Policies shipping profile. <br/><br/> This field can only be used if the shipping surcharges are applicable for the
     * corresponding shipping service.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $ShippingSurcharge;
    /**
     * Constructor method for ShippingServiceCostOverrideType
     * @uses ShippingServiceCostOverrideType::setShippingServicePriority()
     * @uses ShippingServiceCostOverrideType::setShippingServiceType()
     * @uses ShippingServiceCostOverrideType::setAny()
     * @uses ShippingServiceCostOverrideType::setShippingServiceCost()
     * @uses ShippingServiceCostOverrideType::setShippingServiceAdditionalCost()
     * @uses ShippingServiceCostOverrideType::setShippingSurcharge()
     * @param int $shippingServicePriority
     * @param string $shippingServiceType
     * @param \DOMDocument $any
     * @param \StructType\AmountType $shippingServiceCost
     * @param \StructType\AmountType $shippingServiceAdditionalCost
     * @param \StructType\AmountType $shippingSurcharge
     */
    public function __construct($shippingServicePriority = null, $shippingServiceType = null, \DOMDocument $any = null, \StructType\AmountType $shippingServiceCost = null, \StructType\AmountType $shippingServiceAdditionalCost = null, \StructType\AmountType $shippingSurcharge = null)
    {
        $this
            ->setShippingServicePriority($shippingServicePriority)
            ->setShippingServiceType($shippingServiceType)
            ->setAny($any)
            ->setShippingServiceCost($shippingServiceCost)
            ->setShippingServiceAdditionalCost($shippingServiceAdditionalCost)
            ->setShippingSurcharge($shippingSurcharge);
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
     * @return \StructType\ShippingServiceCostOverrideType
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
     * Get ShippingServiceType value
     * @return string|null
     */
    public function getShippingServiceType()
    {
        return $this->ShippingServiceType;
    }
    /**
     * Set ShippingServiceType value
     * @uses \EnumType\ShippingServiceType::valueIsValid()
     * @uses \EnumType\ShippingServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $shippingServiceType
     * @return \StructType\ShippingServiceCostOverrideType
     */
    public function setShippingServiceType($shippingServiceType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ShippingServiceType::valueIsValid($shippingServiceType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ShippingServiceType', is_array($shippingServiceType) ? implode(', ', $shippingServiceType) : var_export($shippingServiceType, true), implode(', ', \EnumType\ShippingServiceType::getValidValues())), __LINE__);
        }
        $this->ShippingServiceType = $shippingServiceType;
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
     * @return \StructType\ShippingServiceCostOverrideType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
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
     * @return \StructType\ShippingServiceCostOverrideType
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
     * @return \StructType\ShippingServiceCostOverrideType
     */
    public function setShippingServiceAdditionalCost(\StructType\AmountType $shippingServiceAdditionalCost = null)
    {
        $this->ShippingServiceAdditionalCost = $shippingServiceAdditionalCost;
        return $this;
    }
    /**
     * Get ShippingSurcharge value
     * @return \StructType\AmountType|null
     */
    public function getShippingSurcharge()
    {
        return $this->ShippingSurcharge;
    }
    /**
     * Set ShippingSurcharge value
     * @param \StructType\AmountType $shippingSurcharge
     * @return \StructType\ShippingServiceCostOverrideType
     */
    public function setShippingSurcharge(\StructType\AmountType $shippingSurcharge = null)
    {
        $this->ShippingSurcharge = $shippingSurcharge;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ShippingServiceCostOverrideType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
