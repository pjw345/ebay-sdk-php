<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefundFundingSourceArrayType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class RefundFundingSourceArrayType extends AbstractStructBase
{
    /**
     * The RefundFundingSource
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\RefundFundingSourceType[]
     */
    public $RefundFundingSource;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for RefundFundingSourceArrayType
     * @uses RefundFundingSourceArrayType::setRefundFundingSource()
     * @uses RefundFundingSourceArrayType::setAny()
     * @param \StructType\RefundFundingSourceType[] $refundFundingSource
     * @param \DOMDocument $any
     */
    public function __construct(array $refundFundingSource = array(), \DOMDocument $any = null)
    {
        $this
            ->setRefundFundingSource($refundFundingSource)
            ->setAny($any);
    }
    /**
     * Get RefundFundingSource value
     * @return \StructType\RefundFundingSourceType[]|null
     */
    public function getRefundFundingSource()
    {
        return $this->RefundFundingSource;
    }
    /**
     * This method is responsible for validating the values passed to the setRefundFundingSource method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRefundFundingSource method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRefundFundingSourceForArrayConstraintsFromSetRefundFundingSource(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $refundFundingSourceArrayTypeRefundFundingSourceItem) {
            // validation for constraint: itemType
            if (!$refundFundingSourceArrayTypeRefundFundingSourceItem instanceof \StructType\RefundFundingSourceType) {
                $invalidValues[] = is_object($refundFundingSourceArrayTypeRefundFundingSourceItem) ? get_class($refundFundingSourceArrayTypeRefundFundingSourceItem) : sprintf('%s(%s)', gettype($refundFundingSourceArrayTypeRefundFundingSourceItem), var_export($refundFundingSourceArrayTypeRefundFundingSourceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RefundFundingSource property can only contain items of type \StructType\RefundFundingSourceType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RefundFundingSource value
     * @throws \InvalidArgumentException
     * @param \StructType\RefundFundingSourceType[] $refundFundingSource
     * @return \StructType\RefundFundingSourceArrayType
     */
    public function setRefundFundingSource(array $refundFundingSource = array())
    {
        // validation for constraint: array
        if ('' !== ($refundFundingSourceArrayErrorMessage = self::validateRefundFundingSourceForArrayConstraintsFromSetRefundFundingSource($refundFundingSource))) {
            throw new \InvalidArgumentException($refundFundingSourceArrayErrorMessage, __LINE__);
        }
        $this->RefundFundingSource = $refundFundingSource;
        return $this;
    }
    /**
     * Add item to RefundFundingSource value
     * @throws \InvalidArgumentException
     * @param \StructType\RefundFundingSourceType $item
     * @return \StructType\RefundFundingSourceArrayType
     */
    public function addToRefundFundingSource(\StructType\RefundFundingSourceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\RefundFundingSourceType) {
            throw new \InvalidArgumentException(sprintf('The RefundFundingSource property can only contain items of type \StructType\RefundFundingSourceType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->RefundFundingSource[] = $item;
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
     * @return \StructType\RefundFundingSourceArrayType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
