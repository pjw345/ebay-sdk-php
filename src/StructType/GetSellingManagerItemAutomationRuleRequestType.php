<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellingManagerItemAutomationRuleRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieves the set of Selling Manager automation rules associated with an item. This call is subject to change without notice; the deprecation process is inapplicable to this call. The user must have a Selling Manager Pro subscription
 * to use this call.
 * @subpackage Structs
 */
class GetSellingManagerItemAutomationRuleRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the listing whose Selling Manager automation rules you want to retrieve. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * Constructor method for GetSellingManagerItemAutomationRuleRequestType
     * @uses GetSellingManagerItemAutomationRuleRequestType::setItemID()
     * @param string $itemID
     */
    public function __construct($itemID = null)
    {
        $this
            ->setItemID($itemID);
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \StructType\GetSellingManagerItemAutomationRuleRequestType
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemID, true), gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
}
