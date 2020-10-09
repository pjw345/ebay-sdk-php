<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MaximumBuyerPolicyViolationsDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Although the <b>MaximumBuyerPolicyViolations</b> container is still returned in <b>GeteBayDetails</b>, a Maximum Buyer Policy Violations threshold value can no longer be set at the account or listing level, so this type is no longer
 * applicable.
 * @subpackage Structs
 */
class MaximumBuyerPolicyViolationsDetailsType extends AbstractStructBase
{
    /**
     * The NumberOfPolicyViolations
     * Meta information extracted from the WSDL
     * - documentation: As a Maximum Buyer Policy Violations threshold value can no longer be set at the account or listing level, this field is no longer applicable.
     * - minOccurs: 0
     * @var \StructType\NumberOfPolicyViolationsDetailsType
     */
    public $NumberOfPolicyViolations;
    /**
     * The PolicyViolationDuration
     * Meta information extracted from the WSDL
     * - documentation: As a Maximum Buyer Policy Violations threshold value can no longer be set at the account or listing level, this field is no longer applicable.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\PolicyViolationDurationDetailsType[]
     */
    public $PolicyViolationDuration;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MaximumBuyerPolicyViolationsDetailsType
     * @uses MaximumBuyerPolicyViolationsDetailsType::setNumberOfPolicyViolations()
     * @uses MaximumBuyerPolicyViolationsDetailsType::setPolicyViolationDuration()
     * @uses MaximumBuyerPolicyViolationsDetailsType::setAny()
     * @param \StructType\NumberOfPolicyViolationsDetailsType $numberOfPolicyViolations
     * @param \StructType\PolicyViolationDurationDetailsType[] $policyViolationDuration
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\NumberOfPolicyViolationsDetailsType $numberOfPolicyViolations = null, array $policyViolationDuration = array(), \DOMDocument $any = null)
    {
        $this
            ->setNumberOfPolicyViolations($numberOfPolicyViolations)
            ->setPolicyViolationDuration($policyViolationDuration)
            ->setAny($any);
    }
    /**
     * Get NumberOfPolicyViolations value
     * @return \StructType\NumberOfPolicyViolationsDetailsType|null
     */
    public function getNumberOfPolicyViolations()
    {
        return $this->NumberOfPolicyViolations;
    }
    /**
     * Set NumberOfPolicyViolations value
     * @param \StructType\NumberOfPolicyViolationsDetailsType $numberOfPolicyViolations
     * @return \StructType\MaximumBuyerPolicyViolationsDetailsType
     */
    public function setNumberOfPolicyViolations(\StructType\NumberOfPolicyViolationsDetailsType $numberOfPolicyViolations = null)
    {
        $this->NumberOfPolicyViolations = $numberOfPolicyViolations;
        return $this;
    }
    /**
     * Get PolicyViolationDuration value
     * @return \StructType\PolicyViolationDurationDetailsType[]|null
     */
    public function getPolicyViolationDuration()
    {
        return $this->PolicyViolationDuration;
    }
    /**
     * This method is responsible for validating the values passed to the setPolicyViolationDuration method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPolicyViolationDuration method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePolicyViolationDurationForArrayConstraintsFromSetPolicyViolationDuration(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $maximumBuyerPolicyViolationsDetailsTypePolicyViolationDurationItem) {
            // validation for constraint: itemType
            if (!$maximumBuyerPolicyViolationsDetailsTypePolicyViolationDurationItem instanceof \StructType\PolicyViolationDurationDetailsType) {
                $invalidValues[] = is_object($maximumBuyerPolicyViolationsDetailsTypePolicyViolationDurationItem) ? get_class($maximumBuyerPolicyViolationsDetailsTypePolicyViolationDurationItem) : sprintf('%s(%s)', gettype($maximumBuyerPolicyViolationsDetailsTypePolicyViolationDurationItem), var_export($maximumBuyerPolicyViolationsDetailsTypePolicyViolationDurationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PolicyViolationDuration property can only contain items of type \StructType\PolicyViolationDurationDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set PolicyViolationDuration value
     * @throws \InvalidArgumentException
     * @param \StructType\PolicyViolationDurationDetailsType[] $policyViolationDuration
     * @return \StructType\MaximumBuyerPolicyViolationsDetailsType
     */
    public function setPolicyViolationDuration(array $policyViolationDuration = array())
    {
        // validation for constraint: array
        if ('' !== ($policyViolationDurationArrayErrorMessage = self::validatePolicyViolationDurationForArrayConstraintsFromSetPolicyViolationDuration($policyViolationDuration))) {
            throw new \InvalidArgumentException($policyViolationDurationArrayErrorMessage, __LINE__);
        }
        $this->PolicyViolationDuration = $policyViolationDuration;
        return $this;
    }
    /**
     * Add item to PolicyViolationDuration value
     * @throws \InvalidArgumentException
     * @param \StructType\PolicyViolationDurationDetailsType $item
     * @return \StructType\MaximumBuyerPolicyViolationsDetailsType
     */
    public function addToPolicyViolationDuration(\StructType\PolicyViolationDurationDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PolicyViolationDurationDetailsType) {
            throw new \InvalidArgumentException(sprintf('The PolicyViolationDuration property can only contain items of type \StructType\PolicyViolationDurationDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PolicyViolationDuration[] = $item;
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
     * @return \StructType\MaximumBuyerPolicyViolationsDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
