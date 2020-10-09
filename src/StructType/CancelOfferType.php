<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelOfferType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class CancelOfferType extends AbstractStructBase
{
    /**
     * The Offer
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\OfferType
     */
    public $Offer;
    /**
     * The Explanation
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Explanation;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for CancelOfferType
     * @uses CancelOfferType::setOffer()
     * @uses CancelOfferType::setExplanation()
     * @uses CancelOfferType::setAny()
     * @param \StructType\OfferType $offer
     * @param string $explanation
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\OfferType $offer = null, $explanation = null, \DOMDocument $any = null)
    {
        $this
            ->setOffer($offer)
            ->setExplanation($explanation)
            ->setAny($any);
    }
    /**
     * Get Offer value
     * @return \StructType\OfferType|null
     */
    public function getOffer()
    {
        return $this->Offer;
    }
    /**
     * Set Offer value
     * @param \StructType\OfferType $offer
     * @return \StructType\CancelOfferType
     */
    public function setOffer(\StructType\OfferType $offer = null)
    {
        $this->Offer = $offer;
        return $this;
    }
    /**
     * Get Explanation value
     * @return string|null
     */
    public function getExplanation()
    {
        return $this->Explanation;
    }
    /**
     * Set Explanation value
     * @param string $explanation
     * @return \StructType\CancelOfferType
     */
    public function setExplanation($explanation = null)
    {
        // validation for constraint: string
        if (!is_null($explanation) && !is_string($explanation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($explanation, true), gettype($explanation)), __LINE__);
        }
        $this->Explanation = $explanation;
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
     * @return \StructType\CancelOfferType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
