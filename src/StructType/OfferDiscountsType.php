<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferDiscountsType StructType
 * Meta information extracted from the WSDL
 * - documentation: <b>DO NOT USE THIS TYPE</b>. This type is only for internal or future use.
 * @subpackage Structs
 */
class OfferDiscountsType extends AbstractStructBase
{
    /**
     * The SellerMarketing
     * Meta information extracted from the WSDL
     * - documentation: <b>DO NOT USE THIS FIELD</b>. This field is only for internal or future use.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $SellerMarketing;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for OfferDiscountsType
     * @uses OfferDiscountsType::setSellerMarketing()
     * @uses OfferDiscountsType::setAny()
     * @param \StructType\AmountType $sellerMarketing
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\AmountType $sellerMarketing = null, \DOMDocument $any = null)
    {
        $this
            ->setSellerMarketing($sellerMarketing)
            ->setAny($any);
    }
    /**
     * Get SellerMarketing value
     * @return \StructType\AmountType|null
     */
    public function getSellerMarketing()
    {
        return $this->SellerMarketing;
    }
    /**
     * Set SellerMarketing value
     * @param \StructType\AmountType $sellerMarketing
     * @return \StructType\OfferDiscountsType
     */
    public function setSellerMarketing(\StructType\AmountType $sellerMarketing = null)
    {
        $this->SellerMarketing = $sellerMarketing;
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
     * @return \StructType\OfferDiscountsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
