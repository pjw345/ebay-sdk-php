<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NumberOfPolicyViolationsDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated, as the maximum number of policy violations for a buyer is no longer a valid Buyer Requirement at the account or listing level.
 * @subpackage Structs
 */
class NumberOfPolicyViolationsDetailsType extends AbstractStructBase
{
    /**
     * The Count
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    public $Count;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for NumberOfPolicyViolationsDetailsType
     * @uses NumberOfPolicyViolationsDetailsType::setCount()
     * @uses NumberOfPolicyViolationsDetailsType::setAny()
     * @param int[] $count
     * @param \DOMDocument $any
     */
    public function __construct(array $count = array(), \DOMDocument $any = null)
    {
        $this
            ->setCount($count)
            ->setAny($any);
    }
    /**
     * Get Count value
     * @return int[]|null
     */
    public function getCount()
    {
        return $this->Count;
    }
    /**
     * This method is responsible for validating the values passed to the setCount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCount method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCountForArrayConstraintsFromSetCount(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $numberOfPolicyViolationsDetailsTypeCountItem) {
            // validation for constraint: itemType
            if (!(is_int($numberOfPolicyViolationsDetailsTypeCountItem) || ctype_digit($numberOfPolicyViolationsDetailsTypeCountItem))) {
                $invalidValues[] = is_object($numberOfPolicyViolationsDetailsTypeCountItem) ? get_class($numberOfPolicyViolationsDetailsTypeCountItem) : sprintf('%s(%s)', gettype($numberOfPolicyViolationsDetailsTypeCountItem), var_export($numberOfPolicyViolationsDetailsTypeCountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Count property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Count value
     * @throws \InvalidArgumentException
     * @param int[] $count
     * @return \StructType\NumberOfPolicyViolationsDetailsType
     */
    public function setCount(array $count = array())
    {
        // validation for constraint: array
        if ('' !== ($countArrayErrorMessage = self::validateCountForArrayConstraintsFromSetCount($count))) {
            throw new \InvalidArgumentException($countArrayErrorMessage, __LINE__);
        }
        $this->Count = $count;
        return $this;
    }
    /**
     * Add item to Count value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \StructType\NumberOfPolicyViolationsDetailsType
     */
    public function addToCount($item)
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new \InvalidArgumentException(sprintf('The Count property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Count[] = $item;
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
     * @return \StructType\NumberOfPolicyViolationsDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\NumberOfPolicyViolationsDetailsType
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
