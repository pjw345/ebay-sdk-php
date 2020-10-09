<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for eBayPaymentMismatchDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class EBayPaymentMismatchDetailsType extends AbstractStructBase
{
    /**
     * The MismatchType
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MismatchType;
    /**
     * The ActionRequiredBy
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ActionRequiredBy;
    /**
     * The MismatchAmount
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $MismatchAmount;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for eBayPaymentMismatchDetailsType
     * @uses EBayPaymentMismatchDetailsType::setMismatchType()
     * @uses EBayPaymentMismatchDetailsType::setActionRequiredBy()
     * @uses EBayPaymentMismatchDetailsType::setMismatchAmount()
     * @uses EBayPaymentMismatchDetailsType::setAny()
     * @param string $mismatchType
     * @param string $actionRequiredBy
     * @param \StructType\AmountType $mismatchAmount
     * @param \DOMDocument $any
     */
    public function __construct($mismatchType = null, $actionRequiredBy = null, \StructType\AmountType $mismatchAmount = null, \DOMDocument $any = null)
    {
        $this
            ->setMismatchType($mismatchType)
            ->setActionRequiredBy($actionRequiredBy)
            ->setMismatchAmount($mismatchAmount)
            ->setAny($any);
    }
    /**
     * Get MismatchType value
     * @return string|null
     */
    public function getMismatchType()
    {
        return $this->MismatchType;
    }
    /**
     * Set MismatchType value
     * @uses \EnumType\MismatchTypeCodeType::valueIsValid()
     * @uses \EnumType\MismatchTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $mismatchType
     * @return \StructType\EBayPaymentMismatchDetailsType
     */
    public function setMismatchType($mismatchType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\MismatchTypeCodeType::valueIsValid($mismatchType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\MismatchTypeCodeType', is_array($mismatchType) ? implode(', ', $mismatchType) : var_export($mismatchType, true), implode(', ', \EnumType\MismatchTypeCodeType::getValidValues())), __LINE__);
        }
        $this->MismatchType = $mismatchType;
        return $this;
    }
    /**
     * Get ActionRequiredBy value
     * @return string|null
     */
    public function getActionRequiredBy()
    {
        return $this->ActionRequiredBy;
    }
    /**
     * Set ActionRequiredBy value
     * @param string $actionRequiredBy
     * @return \StructType\EBayPaymentMismatchDetailsType
     */
    public function setActionRequiredBy($actionRequiredBy = null)
    {
        // validation for constraint: string
        if (!is_null($actionRequiredBy) && !is_string($actionRequiredBy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($actionRequiredBy, true), gettype($actionRequiredBy)), __LINE__);
        }
        $this->ActionRequiredBy = $actionRequiredBy;
        return $this;
    }
    /**
     * Get MismatchAmount value
     * @return \StructType\AmountType|null
     */
    public function getMismatchAmount()
    {
        return $this->MismatchAmount;
    }
    /**
     * Set MismatchAmount value
     * @param \StructType\AmountType $mismatchAmount
     * @return \StructType\EBayPaymentMismatchDetailsType
     */
    public function setMismatchAmount(\StructType\AmountType $mismatchAmount = null)
    {
        $this->MismatchAmount = $mismatchAmount;
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
     * @return \StructType\EBayPaymentMismatchDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
