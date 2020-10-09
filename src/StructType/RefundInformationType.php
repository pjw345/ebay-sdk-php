<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefundInformationType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <strong>Refunds</strong> container, which contains an array of <strong>Refund</strong> containers. A <strong>Refund</strong> container consists of detailed information on an In-Store Pickup item refund. <br/><br/>
 * <span class="tablenote"> <strong>Note:</strong> At this time, the In-Store Pickup feature is generally only available to large retail merchants on the US site, and can only be applied to multi-quantity, fixed-price listings. </span>
 * @subpackage Structs
 */
class RefundInformationType extends AbstractStructBase
{
    /**
     * The Refund
     * Meta information extracted from the WSDL
     * - documentation: This container consists of detailed information on an In-Store Pickup item refund. This container is only returned if the merchant is refunding (or providing a store credit) the buyer for an In-Store Pickup item. A separate
     * <strong>Refund</strong> container will be returned for each <strong>ORDER.RETURNED</strong> notification that the merchant sends to eBay through the <strong>Inbound Notifications API</strong>. <br/><br/> <span class="tablenote">
     * <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature to list an item that is eligible for In-Store Pickup. At this time, the In-Store Pickup feature is generally only available to large retail merchants on the US site, and
     * can only be applied to multi-quantity, fixed-price listings. Eligible Merchants/developers can test In-Store Pickup functionality in the Sandbox environment, including listing items enabled with the In-Store Pickup feature, creating store locations
     * and adding inventory to these stores using the Inventory Management API, and informing eBay of In-Store Pickup status changes using the Inbound Notifications API. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\RefundTransactionInfoType[]
     */
    public $Refund;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for RefundInformationType
     * @uses RefundInformationType::setRefund()
     * @uses RefundInformationType::setAny()
     * @param \StructType\RefundTransactionInfoType[] $refund
     * @param \DOMDocument $any
     */
    public function __construct(array $refund = array(), \DOMDocument $any = null)
    {
        $this
            ->setRefund($refund)
            ->setAny($any);
    }
    /**
     * Get Refund value
     * @return \StructType\RefundTransactionInfoType[]|null
     */
    public function getRefund()
    {
        return $this->Refund;
    }
    /**
     * This method is responsible for validating the values passed to the setRefund method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRefund method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRefundForArrayConstraintsFromSetRefund(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $refundInformationTypeRefundItem) {
            // validation for constraint: itemType
            if (!$refundInformationTypeRefundItem instanceof \StructType\RefundTransactionInfoType) {
                $invalidValues[] = is_object($refundInformationTypeRefundItem) ? get_class($refundInformationTypeRefundItem) : sprintf('%s(%s)', gettype($refundInformationTypeRefundItem), var_export($refundInformationTypeRefundItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Refund property can only contain items of type \StructType\RefundTransactionInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Refund value
     * @throws \InvalidArgumentException
     * @param \StructType\RefundTransactionInfoType[] $refund
     * @return \StructType\RefundInformationType
     */
    public function setRefund(array $refund = array())
    {
        // validation for constraint: array
        if ('' !== ($refundArrayErrorMessage = self::validateRefundForArrayConstraintsFromSetRefund($refund))) {
            throw new \InvalidArgumentException($refundArrayErrorMessage, __LINE__);
        }
        $this->Refund = $refund;
        return $this;
    }
    /**
     * Add item to Refund value
     * @throws \InvalidArgumentException
     * @param \StructType\RefundTransactionInfoType $item
     * @return \StructType\RefundInformationType
     */
    public function addToRefund(\StructType\RefundTransactionInfoType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\RefundTransactionInfoType) {
            throw new \InvalidArgumentException(sprintf('The Refund property can only contain items of type \StructType\RefundTransactionInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Refund[] = $item;
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
     * @return \StructType\RefundInformationType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
