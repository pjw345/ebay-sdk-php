<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeeType StructType
 * Meta information extracted from the WSDL
 * - documentation: Identifies the name and cost of a listing feature that a member pays to eBay. These listing feature names, fees, and possible discounts are intended only as an aid to help estimate the fees for a listing.
 * @subpackage Structs
 */
class FeeType extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: This is the name of the listing feature, such as <code>ListingFee</code>, <code>SubtitleFee</code>, or <code>BoldFee</code>.
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Fee
     * Meta information extracted from the WSDL
     * - documentation: Amount of the fee that eBay will charge the member for the associated listing feature.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $Fee;
    /**
     * The PromotionalDiscount
     * Meta information extracted from the WSDL
     * - documentation: This field exists in the response when the user has selected a feature that participates in a promotional discount. <br/><br/> <span class="tablenote"><b>Note: </b> Verify calls might not return the PromotionalDiscount fee in the
     * response. </span>
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $PromotionalDiscount;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for FeeType
     * @uses FeeType::setName()
     * @uses FeeType::setFee()
     * @uses FeeType::setPromotionalDiscount()
     * @uses FeeType::setAny()
     * @param string $name
     * @param \StructType\AmountType $fee
     * @param \StructType\AmountType $promotionalDiscount
     * @param \DOMDocument $any
     */
    public function __construct($name = null, \StructType\AmountType $fee = null, \StructType\AmountType $promotionalDiscount = null, \DOMDocument $any = null)
    {
        $this
            ->setName($name)
            ->setFee($fee)
            ->setPromotionalDiscount($promotionalDiscount)
            ->setAny($any);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\FeeType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Fee value
     * @return \StructType\AmountType|null
     */
    public function getFee()
    {
        return $this->Fee;
    }
    /**
     * Set Fee value
     * @param \StructType\AmountType $fee
     * @return \StructType\FeeType
     */
    public function setFee(\StructType\AmountType $fee = null)
    {
        $this->Fee = $fee;
        return $this;
    }
    /**
     * Get PromotionalDiscount value
     * @return \StructType\AmountType|null
     */
    public function getPromotionalDiscount()
    {
        return $this->PromotionalDiscount;
    }
    /**
     * Set PromotionalDiscount value
     * @param \StructType\AmountType $promotionalDiscount
     * @return \StructType\FeeType
     */
    public function setPromotionalDiscount(\StructType\AmountType $promotionalDiscount = null)
    {
        $this->PromotionalDiscount = $promotionalDiscount;
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
     * @return \StructType\FeeType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
