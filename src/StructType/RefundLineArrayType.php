<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefundLineArrayType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class RefundLineArrayType extends AbstractStructBase
{
    /**
     * The RefundLine
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\RefundLineType[]
     */
    public $RefundLine;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for RefundLineArrayType
     * @uses RefundLineArrayType::setRefundLine()
     * @uses RefundLineArrayType::setAny()
     * @param \StructType\RefundLineType[] $refundLine
     * @param \DOMDocument $any
     */
    public function __construct(array $refundLine = array(), \DOMDocument $any = null)
    {
        $this
            ->setRefundLine($refundLine)
            ->setAny($any);
    }
    /**
     * Get RefundLine value
     * @return \StructType\RefundLineType[]|null
     */
    public function getRefundLine()
    {
        return $this->RefundLine;
    }
    /**
     * This method is responsible for validating the values passed to the setRefundLine method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRefundLine method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRefundLineForArrayConstraintsFromSetRefundLine(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $refundLineArrayTypeRefundLineItem) {
            // validation for constraint: itemType
            if (!$refundLineArrayTypeRefundLineItem instanceof \StructType\RefundLineType) {
                $invalidValues[] = is_object($refundLineArrayTypeRefundLineItem) ? get_class($refundLineArrayTypeRefundLineItem) : sprintf('%s(%s)', gettype($refundLineArrayTypeRefundLineItem), var_export($refundLineArrayTypeRefundLineItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RefundLine property can only contain items of type \StructType\RefundLineType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RefundLine value
     * @throws \InvalidArgumentException
     * @param \StructType\RefundLineType[] $refundLine
     * @return \StructType\RefundLineArrayType
     */
    public function setRefundLine(array $refundLine = array())
    {
        // validation for constraint: array
        if ('' !== ($refundLineArrayErrorMessage = self::validateRefundLineForArrayConstraintsFromSetRefundLine($refundLine))) {
            throw new \InvalidArgumentException($refundLineArrayErrorMessage, __LINE__);
        }
        $this->RefundLine = $refundLine;
        return $this;
    }
    /**
     * Add item to RefundLine value
     * @throws \InvalidArgumentException
     * @param \StructType\RefundLineType $item
     * @return \StructType\RefundLineArrayType
     */
    public function addToRefundLine(\StructType\RefundLineType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\RefundLineType) {
            throw new \InvalidArgumentException(sprintf('The RefundLine property can only contain items of type \StructType\RefundLineType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->RefundLine[] = $item;
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
     * @return \StructType\RefundLineArrayType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
