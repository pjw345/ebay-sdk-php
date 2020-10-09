<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingServiceCostOverrideListType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>ShippingServiceCostOverrideList</b> container, which is used when the seller wants to override flat-rate shipping costs for one or more domestic and/or international shipping service options defined in the
 * Business Policies shipping profile referenced in the <b>SellerProfiles.SellerShippingProfile.ShippingProfileID</b> field of an Add/Revise/Relist call. <br/><br/> Shipping service cost overrides are a listing-level concept, and the shipping costs
 * specified through each <b>ShippingServiceCostOverrideList.ShippingServiceCostOverride</b> container will not change the shipping costs defined for the same shipping services in the Business Policies shipping profile.
 * @subpackage Structs
 */
class ShippingServiceCostOverrideListType extends AbstractStructBase
{
    /**
     * The ShippingServiceCostOverride
     * Meta information extracted from the WSDL
     * - documentation: A <b>ShippingServiceCostOverride</b> container is required for each domestic and/or international shipping service option, defined in the <b>domesticShippingPolicyInfoService</b> and <b>intlShippingPolicyInfoService</b> containers of
     * the Business Policies shipping profile, that the seller wishes to override the shipping costs. Shipping costs include the cost to ship one item, the cost to ship each additional identical item, and any shipping surcharges applicable to domestic
     * shipping services. <br/><br/> Shipping service cost overrides are a listing-level concept, and the shipping costs specified through each <b>ShippingServiceCostOverride</b> container will not change the shipping costs defined for the same shipping
     * service options in the Business Policies shipping profile. <br/><br/> To override the shipping costs for any domestic shipping service option in the Business Policies shipping profile, the <b>ShippingServiceType</b> field should be set to 'Domestic',
     * and to override the shipping costs for any international shipping service option, the <b>ShippingServiceType</b> field should be set to 'International'. For both domestic and international shipping services, the <b>ShippingServicePriority</b> value
     * should match the <b>sortOrderId</b> value for the matching shipping service in the shipping profile. If any of the domestic and/or international shipping service priorities and shipping service options in the Add/Revise/Relist call and Business
     * Policies shipping profile do not match, an error occurs. <br/><br/> If shipping service cost overrides are used in a listing, the <b>ShippingServiceCostOverride</b> container will be returned in the <b>GetItem</b>, <b>GetSellerList</b>, and
     * <b>GetSellingManagerTemplates</b> calls.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ShippingServiceCostOverrideType[]
     */
    public $ShippingServiceCostOverride;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ShippingServiceCostOverrideListType
     * @uses ShippingServiceCostOverrideListType::setShippingServiceCostOverride()
     * @uses ShippingServiceCostOverrideListType::setAny()
     * @param \StructType\ShippingServiceCostOverrideType[] $shippingServiceCostOverride
     * @param \DOMDocument $any
     */
    public function __construct(array $shippingServiceCostOverride = array(), \DOMDocument $any = null)
    {
        $this
            ->setShippingServiceCostOverride($shippingServiceCostOverride)
            ->setAny($any);
    }
    /**
     * Get ShippingServiceCostOverride value
     * @return \StructType\ShippingServiceCostOverrideType[]|null
     */
    public function getShippingServiceCostOverride()
    {
        return $this->ShippingServiceCostOverride;
    }
    /**
     * This method is responsible for validating the values passed to the setShippingServiceCostOverride method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShippingServiceCostOverride method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShippingServiceCostOverrideForArrayConstraintsFromSetShippingServiceCostOverride(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingServiceCostOverrideListTypeShippingServiceCostOverrideItem) {
            // validation for constraint: itemType
            if (!$shippingServiceCostOverrideListTypeShippingServiceCostOverrideItem instanceof \StructType\ShippingServiceCostOverrideType) {
                $invalidValues[] = is_object($shippingServiceCostOverrideListTypeShippingServiceCostOverrideItem) ? get_class($shippingServiceCostOverrideListTypeShippingServiceCostOverrideItem) : sprintf('%s(%s)', gettype($shippingServiceCostOverrideListTypeShippingServiceCostOverrideItem), var_export($shippingServiceCostOverrideListTypeShippingServiceCostOverrideItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ShippingServiceCostOverride property can only contain items of type \StructType\ShippingServiceCostOverrideType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ShippingServiceCostOverride value
     * @throws \InvalidArgumentException
     * @param \StructType\ShippingServiceCostOverrideType[] $shippingServiceCostOverride
     * @return \StructType\ShippingServiceCostOverrideListType
     */
    public function setShippingServiceCostOverride(array $shippingServiceCostOverride = array())
    {
        // validation for constraint: array
        if ('' !== ($shippingServiceCostOverrideArrayErrorMessage = self::validateShippingServiceCostOverrideForArrayConstraintsFromSetShippingServiceCostOverride($shippingServiceCostOverride))) {
            throw new \InvalidArgumentException($shippingServiceCostOverrideArrayErrorMessage, __LINE__);
        }
        $this->ShippingServiceCostOverride = $shippingServiceCostOverride;
        return $this;
    }
    /**
     * Add item to ShippingServiceCostOverride value
     * @throws \InvalidArgumentException
     * @param \StructType\ShippingServiceCostOverrideType $item
     * @return \StructType\ShippingServiceCostOverrideListType
     */
    public function addToShippingServiceCostOverride(\StructType\ShippingServiceCostOverrideType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ShippingServiceCostOverrideType) {
            throw new \InvalidArgumentException(sprintf('The ShippingServiceCostOverride property can only contain items of type \StructType\ShippingServiceCostOverrideType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ShippingServiceCostOverride[] = $item;
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
     * @return \StructType\ShippingServiceCostOverrideListType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
