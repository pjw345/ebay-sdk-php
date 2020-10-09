<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentsInformationCodeType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class PaymentsInformationCodeType extends AbstractStructBase
{
    /**
     * The Payments
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\PaymentInformationCodeType
     */
    public $Payments;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PaymentsInformationCodeType
     * @uses PaymentsInformationCodeType::setPayments()
     * @uses PaymentsInformationCodeType::setAny()
     * @param \StructType\PaymentInformationCodeType $payments
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\PaymentInformationCodeType $payments = null, \DOMDocument $any = null)
    {
        $this
            ->setPayments($payments)
            ->setAny($any);
    }
    /**
     * Get Payments value
     * @return \StructType\PaymentInformationCodeType|null
     */
    public function getPayments()
    {
        return $this->Payments;
    }
    /**
     * Set Payments value
     * @param \StructType\PaymentInformationCodeType $payments
     * @return \StructType\PaymentsInformationCodeType
     */
    public function setPayments(\StructType\PaymentInformationCodeType $payments = null)
    {
        $this->Payments = $payments;
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
     * @return \StructType\PaymentsInformationCodeType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
