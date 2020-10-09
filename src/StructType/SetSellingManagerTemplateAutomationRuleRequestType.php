<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetSellingManagerTemplateAutomationRuleRequestType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Revises, or adds to, the Selling Manager automation rules associated with a template. <br> <br> This call is subject to change without notice; the deprecation process is inapplicable to this call. You must have a Selling Manager Pro
 * subscription to use this call. <br> <br> Using this call, you can add either an automated listing or relisting rule, but not both. You also can add a Second Chance Offer rule. <br> <br> This call also enables you to specify particular information
 * about automation rules. <br> <br> If a node is not passed in the call, the setting for the corresponding automation rule remains unchanged.
 * @subpackage Structs
 */
class SetSellingManagerTemplateAutomationRuleRequestType extends AbstractRequestType
{
    /**
     * The SaleTemplateID
     * Meta information extracted from the WSDL
     * - documentation: The ID of the Selling Manager template whose automation rules you want to change. You can obtain a <b>SaleTemplateID</b> by calling <b>GetSellingManagerInventory</b>.
     * - minOccurs: 0
     * @var int
     */
    public $SaleTemplateID;
    /**
     * The AutomatedListingRule
     * Meta information extracted from the WSDL
     * - documentation: The information for the automated listing rule to be associated with the template.
     * - minOccurs: 0
     * @var \StructType\SellingManagerAutoListType
     */
    public $AutomatedListingRule;
    /**
     * The AutomatedRelistingRule
     * Meta information extracted from the WSDL
     * - documentation: The information for the automated relisting rule to be associated with the template.
     * - minOccurs: 0
     * @var \StructType\SellingManagerAutoRelistType
     */
    public $AutomatedRelistingRule;
    /**
     * The AutomatedSecondChanceOfferRule
     * Meta information extracted from the WSDL
     * - documentation: The information for the automated Second Chance Offer rule to be associated with the template.
     * - minOccurs: 0
     * @var \StructType\SellingManagerAutoSecondChanceOfferType
     */
    public $AutomatedSecondChanceOfferRule;
    /**
     * Constructor method for SetSellingManagerTemplateAutomationRuleRequestType
     * @uses SetSellingManagerTemplateAutomationRuleRequestType::setSaleTemplateID()
     * @uses SetSellingManagerTemplateAutomationRuleRequestType::setAutomatedListingRule()
     * @uses SetSellingManagerTemplateAutomationRuleRequestType::setAutomatedRelistingRule()
     * @uses SetSellingManagerTemplateAutomationRuleRequestType::setAutomatedSecondChanceOfferRule()
     * @param int $saleTemplateID
     * @param \StructType\SellingManagerAutoListType $automatedListingRule
     * @param \StructType\SellingManagerAutoRelistType $automatedRelistingRule
     * @param \StructType\SellingManagerAutoSecondChanceOfferType $automatedSecondChanceOfferRule
     */
    public function __construct($saleTemplateID = null, \StructType\SellingManagerAutoListType $automatedListingRule = null, \StructType\SellingManagerAutoRelistType $automatedRelistingRule = null, \StructType\SellingManagerAutoSecondChanceOfferType $automatedSecondChanceOfferRule = null)
    {
        $this
            ->setSaleTemplateID($saleTemplateID)
            ->setAutomatedListingRule($automatedListingRule)
            ->setAutomatedRelistingRule($automatedRelistingRule)
            ->setAutomatedSecondChanceOfferRule($automatedSecondChanceOfferRule);
    }
    /**
     * Get SaleTemplateID value
     * @return int|null
     */
    public function getSaleTemplateID()
    {
        return $this->SaleTemplateID;
    }
    /**
     * Set SaleTemplateID value
     * @param int $saleTemplateID
     * @return \StructType\SetSellingManagerTemplateAutomationRuleRequestType
     */
    public function setSaleTemplateID($saleTemplateID = null)
    {
        // validation for constraint: int
        if (!is_null($saleTemplateID) && !(is_int($saleTemplateID) || ctype_digit($saleTemplateID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($saleTemplateID, true), gettype($saleTemplateID)), __LINE__);
        }
        $this->SaleTemplateID = $saleTemplateID;
        return $this;
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
     * @return \StructType\SetSellingManagerTemplateAutomationRuleRequestType
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
     * @return \StructType\SetSellingManagerTemplateAutomationRuleRequestType
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
     * @return \StructType\SetSellingManagerTemplateAutomationRuleRequestType
     */
    public function setAutomatedSecondChanceOfferRule(\StructType\SellingManagerAutoSecondChanceOfferType $automatedSecondChanceOfferRule = null)
    {
        $this->AutomatedSecondChanceOfferRule = $automatedSecondChanceOfferRule;
        return $this;
    }
}
