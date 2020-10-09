<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSellingManagerItemAutomationRuleResponseType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the set of automation rules associated with the specified item.
 * @subpackage Structs
 */
class DeleteSellingManagerItemAutomationRuleResponseType extends AbstractResponseType
{
    /**
     * The AutomatedListingRule
     * Meta information extracted from the WSDL
     * - documentation: This container is returned if automated listing rules are set up for the Selling Manager item.
     * - minOccurs: 0
     * @var \StructType\SellingManagerAutoListType
     */
    public $AutomatedListingRule;
    /**
     * The AutomatedRelistingRule
     * Meta information extracted from the WSDL
     * - documentation: This container is returned if automated relisting rules are set up for the Selling Manager item.
     * - minOccurs: 0
     * @var \StructType\SellingManagerAutoRelistType
     */
    public $AutomatedRelistingRule;
    /**
     * The AutomatedSecondChanceOfferRule
     * Meta information extracted from the WSDL
     * - documentation: This container is returned if automated Second Chance Offer rules are set up for the Selling Manager item.
     * - minOccurs: 0
     * @var \StructType\SellingManagerAutoSecondChanceOfferType
     */
    public $AutomatedSecondChanceOfferRule;
    /**
     * The Fees
     * Meta information extracted from the WSDL
     * - documentation: Contains fees that may be incurred when items are listed using the automation rules (e.g., a scheduled listing fee). Use of an automation rule does not in itself have a fee, but use can result in a fee.
     * - minOccurs: 0
     * @var \StructType\FeesType
     */
    public $Fees;
    /**
     * Constructor method for DeleteSellingManagerItemAutomationRuleResponseType
     * @uses DeleteSellingManagerItemAutomationRuleResponseType::setAutomatedListingRule()
     * @uses DeleteSellingManagerItemAutomationRuleResponseType::setAutomatedRelistingRule()
     * @uses DeleteSellingManagerItemAutomationRuleResponseType::setAutomatedSecondChanceOfferRule()
     * @uses DeleteSellingManagerItemAutomationRuleResponseType::setFees()
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
     * @return \StructType\DeleteSellingManagerItemAutomationRuleResponseType
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
     * @return \StructType\DeleteSellingManagerItemAutomationRuleResponseType
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
     * @return \StructType\DeleteSellingManagerItemAutomationRuleResponseType
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
     * @return \StructType\DeleteSellingManagerItemAutomationRuleResponseType
     */
    public function setFees(\StructType\FeesType $fees = null)
    {
        $this->Fees = $fees;
        return $this;
    }
}
