<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefundFailureReasonType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class RefundFailureReasonType extends AbstractStructBase
{
    /**
     * The RefundFailureCode
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $RefundFailureCode;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for RefundFailureReasonType
     * @uses RefundFailureReasonType::setRefundFailureCode()
     * @uses RefundFailureReasonType::setAny()
     * @param string $refundFailureCode
     * @param \DOMDocument $any
     */
    public function __construct($refundFailureCode = null, \DOMDocument $any = null)
    {
        $this
            ->setRefundFailureCode($refundFailureCode)
            ->setAny($any);
    }
    /**
     * Get RefundFailureCode value
     * @return string|null
     */
    public function getRefundFailureCode()
    {
        return $this->RefundFailureCode;
    }
    /**
     * Set RefundFailureCode value
     * @uses \EnumType\RefundFailureCodeType::valueIsValid()
     * @uses \EnumType\RefundFailureCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $refundFailureCode
     * @return \StructType\RefundFailureReasonType
     */
    public function setRefundFailureCode($refundFailureCode = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\RefundFailureCodeType::valueIsValid($refundFailureCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\RefundFailureCodeType', is_array($refundFailureCode) ? implode(', ', $refundFailureCode) : var_export($refundFailureCode, true), implode(', ', \EnumType\RefundFailureCodeType::getValidValues())), __LINE__);
        }
        $this->RefundFailureCode = $refundFailureCode;
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
     * @return \StructType\RefundFailureReasonType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
