<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuggestedBidValueType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>SuggestedBidValues</b> container that is returned if the buyer is attempting to bid on an auction item through the <b>PlaceOffer</b> call.
 * @subpackage Structs
 */
class SuggestedBidValueType extends AbstractStructBase
{
    /**
     * The BidValue
     * Meta information extracted from the WSDL
     * - documentation: The <b>SuggestedBidValues</b> container is only returned if the buyer is attempting to bid on an auction item. A <b>BidValue</b> field is returned for each incremental bid value (up to the dollar value specified in the
     * <b>Offer.MaxBid</b> field in the request) that eBay will bid on behalf of the buyer each time that buyer is outbid for the auction item. How many <b>BidValue</b> fields that appear will depend on the current winning bid amount, the required bid
     * increment, and the buyer's specified max bid amount.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\AmountType[]
     */
    public $BidValue;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SuggestedBidValueType
     * @uses SuggestedBidValueType::setBidValue()
     * @uses SuggestedBidValueType::setAny()
     * @param \StructType\AmountType[] $bidValue
     * @param \DOMDocument $any
     */
    public function __construct(array $bidValue = array(), \DOMDocument $any = null)
    {
        $this
            ->setBidValue($bidValue)
            ->setAny($any);
    }
    /**
     * Get BidValue value
     * @return \StructType\AmountType[]|null
     */
    public function getBidValue()
    {
        return $this->BidValue;
    }
    /**
     * This method is responsible for validating the values passed to the setBidValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBidValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBidValueForArrayConstraintsFromSetBidValue(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $suggestedBidValueTypeBidValueItem) {
            // validation for constraint: itemType
            if (!$suggestedBidValueTypeBidValueItem instanceof \StructType\AmountType) {
                $invalidValues[] = is_object($suggestedBidValueTypeBidValueItem) ? get_class($suggestedBidValueTypeBidValueItem) : sprintf('%s(%s)', gettype($suggestedBidValueTypeBidValueItem), var_export($suggestedBidValueTypeBidValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BidValue property can only contain items of type \StructType\AmountType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set BidValue value
     * @throws \InvalidArgumentException
     * @param \StructType\AmountType[] $bidValue
     * @return \StructType\SuggestedBidValueType
     */
    public function setBidValue(array $bidValue = array())
    {
        // validation for constraint: array
        if ('' !== ($bidValueArrayErrorMessage = self::validateBidValueForArrayConstraintsFromSetBidValue($bidValue))) {
            throw new \InvalidArgumentException($bidValueArrayErrorMessage, __LINE__);
        }
        $this->BidValue = $bidValue;
        return $this;
    }
    /**
     * Add item to BidValue value
     * @throws \InvalidArgumentException
     * @param \StructType\AmountType $item
     * @return \StructType\SuggestedBidValueType
     */
    public function addToBidValue(\StructType\AmountType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AmountType) {
            throw new \InvalidArgumentException(sprintf('The BidValue property can only contain items of type \StructType\AmountType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BidValue[] = $item;
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
     * @return \StructType\SuggestedBidValueType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
