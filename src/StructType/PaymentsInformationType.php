<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentsInformationType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type defines the <strong>MonetaryDetails</strong> container, which consists of detailed information about one or more exchanges of funds that occur between the buyer, seller, eBay, and eBay partners during the lifecycle of an
 * order, as well as detailed information about a merchant's refund (or store credit) to a buyer who has returned an In-Store Pickup item. <br/><br/> <span class="tablenote"> <strong>Note:</strong> At this time, the In-Store Pickup feature is generally
 * only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings. </span>
 * @subpackage Structs
 */
class PaymentsInformationType extends AbstractStructBase
{
    /**
     * The Payments
     * Meta information extracted from the WSDL
     * - documentation: Contains information about how different portions of the funds exchanged for a specified order are allocated among payees. Each allocated portion is represented by a <strong>Payment</strong> container.
     * - minOccurs: 0
     * @var \StructType\PaymentInformationType
     */
    public $Payments;
    /**
     * The Refunds
     * Meta information extracted from the WSDL
     * - documentation: This container consists of an array of one or more <strong>Refund</strong> containers, and each <strong>Refund</strong> container consists of detailed information about a merchant's refund (or store credit) to a buyer who has
     * returned an In-Store Pickup item. <br/><br/> This container is only returned if the buyer has returned an In-Store Pickup item to the merchant at a physical store, and the merchant has notified eBay through the <strong>ORDER.RETURNED</strong>
     * notification of the Inbound Notifications API. <br/><br/> <span class="tablenote"> <strong>Note:</strong> At this time, the In-Store Pickup feature is generally only available to large retail merchants, and can only be applied to multi-quantity,
     * fixed-price listings. </span>
     * - minOccurs: 0
     * @var \StructType\RefundInformationType
     */
    public $Refunds;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PaymentsInformationType
     * @uses PaymentsInformationType::setPayments()
     * @uses PaymentsInformationType::setRefunds()
     * @uses PaymentsInformationType::setAny()
     * @param \StructType\PaymentInformationType $payments
     * @param \StructType\RefundInformationType $refunds
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\PaymentInformationType $payments = null, \StructType\RefundInformationType $refunds = null, \DOMDocument $any = null)
    {
        $this
            ->setPayments($payments)
            ->setRefunds($refunds)
            ->setAny($any);
    }
    /**
     * Get Payments value
     * @return \StructType\PaymentInformationType|null
     */
    public function getPayments()
    {
        return $this->Payments;
    }
    /**
     * Set Payments value
     * @param \StructType\PaymentInformationType $payments
     * @return \StructType\PaymentsInformationType
     */
    public function setPayments(\StructType\PaymentInformationType $payments = null)
    {
        $this->Payments = $payments;
        return $this;
    }
    /**
     * Get Refunds value
     * @return \StructType\RefundInformationType|null
     */
    public function getRefunds()
    {
        return $this->Refunds;
    }
    /**
     * Set Refunds value
     * @param \StructType\RefundInformationType $refunds
     * @return \StructType\PaymentsInformationType
     */
    public function setRefunds(\StructType\RefundInformationType $refunds = null)
    {
        $this->Refunds = $refunds;
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
     * @return \StructType\PaymentsInformationType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
