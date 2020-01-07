<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellingManagerTemplateAutomationRuleResponseType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the set of automation rules associated with the specified template.
 * @subpackage Structs
 */
class GetSellingManagerTemplateAutomationRuleResponseType extends AbstractResponseType
{
    /**
     * The AutomatedListingRule
     * Meta information extracted from the WSDL
     * - documentation: The information for the automated listing rule associated with the template.
     * - minOccurs: 0
     * @var \StructType\SellingManagerAutoListType
     */
    public $AutomatedListingRule;
    /**
     * The AutomatedRelistingRule
     * Meta information extracted from the WSDL
     * - documentation: The information for the automated relisting rule associated with the template.
     * - minOccurs: 0
     * @var \StructType\SellingManagerAutoRelistType
     */
    public $AutomatedRelistingRule;
    /**
     * The AutomatedSecondChanceOfferRule
     * Meta information extracted from the WSDL
     * - documentation: The information for the automated Second Chance Offer rule associated with the template.
     * - minOccurs: 0
     * @var \StructType\SellingManagerAutoSecondChanceOfferType
     */
    public $AutomatedSecondChanceOfferRule;
    /**
     * The Fees
     * Meta information extracted from the WSDL
     * - documentation: Contains fees that may be incurred when items are listed using the automation rule (e.g., a scheduled listing fee). Use of an automation rule does not in itself have a fee, but use can result in a fee.
     * - minOccurs: 0
     * @var \StructType\FeesType
     */
    public $Fees;
    /**
     * Constructor method for GetSellingManagerTemplateAutomationRuleResponseType
     * @uses GetSellingManagerTemplateAutomationRuleResponseType::setAutomatedListingRule()
     * @uses GetSellingManagerTemplateAutomationRuleResponseType::setAutomatedRelistingRule()
     * @uses GetSellingManagerTemplateAutomationRuleResponseType::setAutomatedSecondChanceOfferRule()
     * @uses GetSellingManagerTemplateAutomationRuleResponseType::setFees()
     * @param \StructType\SellingManagerAutoListType $automatedListingRule
     * @param \StructType\SellingManagerAutoRelistType $automatedRelistingRule
     * @param \StructType\SellingManagerAutoSecondChanceOfferType $automatedSecondChanceOfferRule
     * @param \StructType\FeesType $fees
     */
    public function __construct(\StructType\SellingManagerAutoListType $automatedListingRule = null, \StructType\SellingManagerAutoRelistType $automatedRelistingRule = null, \StructType\SellingManagerAutoSecondChanceOfferType $automatedSecondChanceOfferRule = null, \StructType\FeesType $fees = null)
    {
        $this
            ->setAutomatedListingRule($automatedListingRule)
            ->setAutomatedRelistingRule($automatedRelistingRule)
            ->setAutomatedSecondChanceOfferRule($automatedSecondChanceOfferRule)
            ->setFees($fees);
    }
    /**
     * Get AutomatedListingRule value
     * @return \StructType\SellingManagerAutoListType|null
     */
    public function getAutomatedListingRule()
    {
        return $this->AutomatedListingRule;
    }
    /**
     * Set AutomatedListingRule value
     * @param \StructType\SellingManagerAutoListType $automatedListingRule
     * @return \StructType\GetSellingManagerTemplateAutomationRuleResponseType
     */
    public function setAutomatedListingRule(\StructType\SellingManagerAutoListType $automatedListingRule = null)
    {
        $this->AutomatedListingRule = $automatedListingRule;
        return $this;
    }
    /**
     * Get AutomatedRelistingRule value
     * @return \StructType\SellingManagerAutoRelistType|null
     */
    public function getAutomatedRelistingRule()
    {
        return $this->AutomatedRelistingRule;
    }
    /**
     * Set AutomatedRelistingRule value
     * @param \StructType\SellingManagerAutoRelistType $automatedRelistingRule
     * @return \StructType\GetSellingManagerTemplateAutomationRuleResponseType
     */
    public function setAutomatedRelistingRule(\StructType\SellingManagerAutoRelistType $automatedRelistingRule = null)
    {
        $this->AutomatedRelistingRule = $automatedRelistingRule;
        return $this;
    }
    /**
     * Get AutomatedSecondChanceOfferRule value
     * @return \StructType\SellingManagerAutoSecondChanceOfferType|null
     */
    public function getAutomatedSecondChanceOfferRule()
    {
        return $this->AutomatedSecondChanceOfferRule;
    }
    /**
     * Set AutomatedSecondChanceOfferRule value
     * @param \StructType\SellingManagerAutoSecondChanceOfferType $automatedSecondChanceOfferRule
     * @return \StructType\GetSellingManagerTemplateAutomationRuleResponseType
     */
    public function setAutomatedSecondChanceOfferRule(\StructType\SellingManagerAutoSecondChanceOfferType $automatedSecondChanceOfferRule = null)
    {
        $this->AutomatedSecondChanceOfferRule = $automatedSecondChanceOfferRule;
        return $this;
    }
    /**
     * Get Fees value
     * @return \StructType\FeesType|null
     */
    public function getFees()
    {
        return $this->Fees;
    }
    /**
     * Set Fees value
     * @param \StructType\FeesType $fees
     * @return \StructType\GetSellingManagerTemplateAutomationRuleResponseType
     */
    public function setFees(\StructType\FeesType $fees = null)
    {
        $this->Fees = $fees;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetSellingManagerTemplateAutomationRuleResponseType
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
