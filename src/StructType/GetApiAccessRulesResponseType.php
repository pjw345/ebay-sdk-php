<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetApiAccessRulesResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Responds to a call to GetApiAccessRules.
 * @subpackage Structs
 */
class GetApiAccessRulesResponseType extends AbstractResponseType
{
    /**
     * The ApiAccessRule
     * Meta information extracted from the WSDL
     * - documentation: Each returned <b>ApiAccessRule</b> container includes the application's current daily, hourly, and periodic usage of a call, and the maximum amount of times that the application can make that call during the given period.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ApiAccessRuleType[]
     */
    public $ApiAccessRule;
    /**
     * Constructor method for GetApiAccessRulesResponseType
     * @uses GetApiAccessRulesResponseType::setApiAccessRule()
     * @param \StructType\ApiAccessRuleType[] $apiAccessRule
     */
    public function __construct(array $apiAccessRule = array())
    {
        $this
            ->setApiAccessRule($apiAccessRule);
    }
    /**
     * Get ApiAccessRule value
     * @return \StructType\ApiAccessRuleType[]|null
     */
    public function getApiAccessRule()
    {
        return $this->ApiAccessRule;
    }
    /**
     * This method is responsible for validating the values passed to the setApiAccessRule method
     * This method is willingly generated in order to preserve the one-line inline validation within the setApiAccessRule method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateApiAccessRuleForArrayConstraintsFromSetApiAccessRule(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getApiAccessRulesResponseTypeApiAccessRuleItem) {
            // validation for constraint: itemType
            if (!$getApiAccessRulesResponseTypeApiAccessRuleItem instanceof \StructType\ApiAccessRuleType) {
                $invalidValues[] = is_object($getApiAccessRulesResponseTypeApiAccessRuleItem) ? get_class($getApiAccessRulesResponseTypeApiAccessRuleItem) : sprintf('%s(%s)', gettype($getApiAccessRulesResponseTypeApiAccessRuleItem), var_export($getApiAccessRulesResponseTypeApiAccessRuleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ApiAccessRule property can only contain items of type \StructType\ApiAccessRuleType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ApiAccessRule value
     * @throws \InvalidArgumentException
     * @param \StructType\ApiAccessRuleType[] $apiAccessRule
     * @return \StructType\GetApiAccessRulesResponseType
     */
    public function setApiAccessRule(array $apiAccessRule = array())
    {
        // validation for constraint: array
        if ('' !== ($apiAccessRuleArrayErrorMessage = self::validateApiAccessRuleForArrayConstraintsFromSetApiAccessRule($apiAccessRule))) {
            throw new \InvalidArgumentException($apiAccessRuleArrayErrorMessage, __LINE__);
        }
        $this->ApiAccessRule = $apiAccessRule;
        return $this;
    }
    /**
     * Add item to ApiAccessRule value
     * @throws \InvalidArgumentException
     * @param \StructType\ApiAccessRuleType $item
     * @return \StructType\GetApiAccessRulesResponseType
     */
    public function addToApiAccessRule(\StructType\ApiAccessRuleType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ApiAccessRuleType) {
            throw new \InvalidArgumentException(sprintf('The ApiAccessRule property can only contain items of type \StructType\ApiAccessRuleType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ApiAccessRule[] = $item;
        return $this;
    }
}
