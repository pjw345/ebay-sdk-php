<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingCostPaidByDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type defines the <b>ShippingCostPaidBy</b> container that is returned in <b>GeteBayDetails</b> if <b>ReturnPolicyDetails</b> is set as a <b>DetailName</b> value (or if no value is included in the request). <br><br> <span
 * class="tablenote"><b>Note:</b> The <b>GeteBayDetails</b> call returns site-default Return Policy settings. For most categories within a given eBay site, the supported Return Policy options/values are the same, but there a few exceptions. To discover
 * what return shipping 'payee' values that a particular category supports, call <b>GetCategoryFeatures</b> and include <code>DomesticReturnsShipmentPayeeValues</code> and/or <code>InternationalReturnsShipmentPayeeValues</code> as <b>FeatureID</b>
 * values to see the return shipping 'payee' values available for domestic and international returns, respectively. </span>
 * @subpackage Structs
 */
class ShippingCostPaidByDetailsType extends AbstractStructBase
{
    /**
     * The ShippingCostPaidByOption
     * Meta information extracted from the WSDL
     * - documentation: The party who pays the shipping cost for a returned item. This value can be passed in the Add/Revise/Relist calls.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingCostPaidByOption;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: Display string that applications can use to present <b>ShippingCostPaidByOption</b> in a more user-friendly format (such as in a drop-down list). Not applicable as input to the Add/Revise/Relist calls. (Use <b>ShippingCostPaidBy</b>
     * instead.)
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ShippingCostPaidByDetailsType
     * @uses ShippingCostPaidByDetailsType::setShippingCostPaidByOption()
     * @uses ShippingCostPaidByDetailsType::setDescription()
     * @uses ShippingCostPaidByDetailsType::setAny()
     * @param string $shippingCostPaidByOption
     * @param string $description
     * @param \DOMDocument $any
     */
    public function __construct($shippingCostPaidByOption = null, $description = null, \DOMDocument $any = null)
    {
        $this
            ->setShippingCostPaidByOption($shippingCostPaidByOption)
            ->setDescription($description)
            ->setAny($any);
    }
    /**
     * Get ShippingCostPaidByOption value
     * @return string|null
     */
    public function getShippingCostPaidByOption()
    {
        return $this->ShippingCostPaidByOption;
    }
    /**
     * Set ShippingCostPaidByOption value
     * @param string $shippingCostPaidByOption
     * @return \StructType\ShippingCostPaidByDetailsType
     */
    public function setShippingCostPaidByOption($shippingCostPaidByOption = null)
    {
        // validation for constraint: string
        if (!is_null($shippingCostPaidByOption) && !is_string($shippingCostPaidByOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingCostPaidByOption, true), gettype($shippingCostPaidByOption)), __LINE__);
        }
        $this->ShippingCostPaidByOption = $shippingCostPaidByOption;
        return $this;
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
     * @return \StructType\ShippingCostPaidByDetailsType
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
     * @return \StructType\ShippingCostPaidByDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
