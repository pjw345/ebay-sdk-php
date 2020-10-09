<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellingManagerTemplateAutomationRuleRequestType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieves the set of Selling Manager automation rules associated with a Selling Manager template. This call is subject to change without notice; the deprecation process is inapplicable to this call. The user must have a Selling
 * Manager Pro subscription to use this call.
 * @subpackage Structs
 */
class GetSellingManagerTemplateAutomationRuleRequestType extends AbstractRequestType
{
    /**
     * The SaleTemplateID
     * Meta information extracted from the WSDL
     * - documentation: The unique ID of the Selling Manager Template whose Selling Manager automation rules you want to retrieve. You can obtain a <b>SaleTemplateID</b> by calling <b>GetSellingManagerInventory</b>.
     * - minOccurs: 0
     * @var int
     */
    public $SaleTemplateID;
    /**
     * Constructor method for GetSellingManagerTemplateAutomationRuleRequestType
     * @uses GetSellingManagerTemplateAutomationRuleRequestType::setSaleTemplateID()
     * @param int $saleTemplateID
     */
    public function __construct($saleTemplateID = null)
    {
        $this
            ->setSaleTemplateID($saleTemplateID);
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
     * @return \StructType\GetSellingManagerTemplateAutomationRuleRequestType
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
}
