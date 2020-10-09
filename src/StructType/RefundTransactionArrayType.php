<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefundTransactionArrayType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class RefundTransactionArrayType extends AbstractStructBase
{
    /**
     * The RefundTransaction
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\RefundTransactionType[]
     */
    public $RefundTransaction;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for RefundTransactionArrayType
     * @uses RefundTransactionArrayType::setRefundTransaction()
     * @uses RefundTransactionArrayType::setAny()
     * @param \StructType\RefundTransactionType[] $refundTransaction
     * @param \DOMDocument $any
     */
    public function __construct(array $refundTransaction = array(), \DOMDocument $any = null)
    {
        $this
            ->setRefundTransaction($refundTransaction)
            ->setAny($any);
    }
    /**
     * Get RefundTransaction value
     * @return \StructType\RefundTransactionType[]|null
     */
    public function getRefundTransaction()
    {
        return $this->RefundTransaction;
    }
    /**
     * This method is responsible for validating the values passed to the setRefundTransaction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRefundTransaction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRefundTransactionForArrayConstraintsFromSetRefundTransaction(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $refundTransactionArrayTypeRefundTransactionItem) {
            // validation for constraint: itemType
            if (!$refundTransactionArrayTypeRefundTransactionItem instanceof \StructType\RefundTransactionType) {
                $invalidValues[] = is_object($refundTransactionArrayTypeRefundTransactionItem) ? get_class($refundTransactionArrayTypeRefundTransactionItem) : sprintf('%s(%s)', gettype($refundTransactionArrayTypeRefundTransactionItem), var_export($refundTransactionArrayTypeRefundTransactionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RefundTransaction property can only contain items of type \StructType\RefundTransactionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RefundTransaction value
     * @throws \InvalidArgumentException
     * @param \StructType\RefundTransactionType[] $refundTransaction
     * @return \StructType\RefundTransactionArrayType
     */
    public function setRefundTransaction(array $refundTransaction = array())
    {
        // validation for constraint: array
        if ('' !== ($refundTransactionArrayErrorMessage = self::validateRefundTransactionForArrayConstraintsFromSetRefundTransaction($refundTransaction))) {
            throw new \InvalidArgumentException($refundTransactionArrayErrorMessage, __LINE__);
        }
        $this->RefundTransaction = $refundTransaction;
        return $this;
    }
    /**
     * Add item to RefundTransaction value
     * @throws \InvalidArgumentException
     * @param \StructType\RefundTransactionType $item
     * @return \StructType\RefundTransactionArrayType
     */
    public function addToRefundTransaction(\StructType\RefundTransactionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\RefundTransactionType) {
            throw new \InvalidArgumentException(sprintf('The RefundTransaction property can only contain items of type \StructType\RefundTransactionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->RefundTransaction[] = $item;
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
     * @return \StructType\RefundTransactionArrayType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
