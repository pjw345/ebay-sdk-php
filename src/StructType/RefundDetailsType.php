<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefundDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>ReturnPolicyDetails.Refund</b> container that is returned in <b>GeteBayDetails</b>. All of the values (along with descriptions for each value) that can be used as a Refund Option when listing an item is returned
 * under the <b>ReturnPolicyDetails.Refund</b> container. <br><br> <span class="tablenote"><b>Note:</b> The <b>GeteBayDetails</b> call returns site-default Return Policy settings. For most categories within a given eBay site, the supported Return Policy
 * options/values are the same, but there a few exceptions. To discover what refund options that a particular category supports, call <b>GetCategoryFeatures</b> and include <code>DomesticRefundMethodValues</code> and/or
 * <code>InternationalRefundMethodValues</code> as <b>FeatureID</b> values to see the refund options available for domestic and international returns, respectively. </span>
 * @subpackage Structs
 */
class RefundDetailsType extends AbstractStructBase
{
    /**
     * The RefundOption
     * Meta information extracted from the WSDL
     * - documentation: Indicates how the seller will compensate the buyer for a returned item. This value can be passed in the Add/Revise/Relist/VerifyAdd API calls. <br/><br/> Currently, on the US site (and many other sites), the seller must offer either
     * a <b>MoneyBack</b> or a <b>MoneyBackOrExchange</b> refund option. Consider using the <b>MoneyBackOrExchange</b> option when you have the depth of inventory to support replacement of the original item. Otherwise, use the <b>MoneyBack</b> option if you
     * have limited inventory.
     * - minOccurs: 0
     * @var string
     */
    public $RefundOption;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: Display string that applications can use to present <b>RefundOption</b> in a more user-friendly format (such as in a drop-down list). Not applicable as input to the AddItem family of calls. (Use <b>RefundOption</b> instead.)
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
     * Constructor method for RefundDetailsType
     * @uses RefundDetailsType::setRefundOption()
     * @uses RefundDetailsType::setDescription()
     * @uses RefundDetailsType::setAny()
     * @param string $refundOption
     * @param string $description
     * @param \DOMDocument $any
     */
    public function __construct($refundOption = null, $description = null, \DOMDocument $any = null)
    {
        $this
            ->setRefundOption($refundOption)
            ->setDescription($description)
            ->setAny($any);
    }
    /**
     * Get RefundOption value
     * @return string|null
     */
    public function getRefundOption()
    {
        return $this->RefundOption;
    }
    /**
     * Set RefundOption value
     * @param string $refundOption
     * @return \StructType\RefundDetailsType
     */
    public function setRefundOption($refundOption = null)
    {
        // validation for constraint: string
        if (!is_null($refundOption) && !is_string($refundOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refundOption, true), gettype($refundOption)), __LINE__);
        }
        $this->RefundOption = $refundOption;
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
     * @return \StructType\RefundDetailsType
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
     * @return \StructType\RefundDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
