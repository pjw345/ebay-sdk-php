<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for OfferArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>BidArray</b> container that is returned in the <b>GetAllBidders</b> response. The <b>BidArray</b> container is an array of all bids made on an auction listing that is specified in the call request.
 * @subpackage Arrays
 */
class OfferArrayType extends AbstractStructArrayBase
{
    /**
     * The Offer
     * Meta information extracted from the WSDL
     * - documentation: Each <b>Offer</b> container consists of detailed information on each bid made on an auction listing that is specified in the call request. Information in this container includes the amount of the bid, the time of the bid, and data
     * for the user making the bid.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\OfferType[]
     */
    public $Offer;
    /**
     * Constructor method for OfferArrayType
     * @uses OfferArrayType::setOffer()
     * @param \StructType\OfferType[] $offer
     */
    public function __construct(array $offer = array())
    {
        $this
            ->setOffer($offer);
    }
    /**
     * Get Offer value
     * @return \StructType\OfferType[]|null
     */
    public function getOffer()
    {
        return $this->Offer;
    }
    /**
     * This method is responsible for validating the values passed to the setOffer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOffer method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOfferForArrayConstraintsFromSetOffer(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $offerArrayTypeOfferItem) {
            // validation for constraint: itemType
            if (!$offerArrayTypeOfferItem instanceof \StructType\OfferType) {
                $invalidValues[] = is_object($offerArrayTypeOfferItem) ? get_class($offerArrayTypeOfferItem) : sprintf('%s(%s)', gettype($offerArrayTypeOfferItem), var_export($offerArrayTypeOfferItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Offer property can only contain items of type \StructType\OfferType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Offer value
     * @throws \InvalidArgumentException
     * @param \StructType\OfferType[] $offer
     * @return \ArrayType\OfferArrayType
     */
    public function setOffer(array $offer = array())
    {
        // validation for constraint: array
        if ('' !== ($offerArrayErrorMessage = self::validateOfferForArrayConstraintsFromSetOffer($offer))) {
            throw new \InvalidArgumentException($offerArrayErrorMessage, __LINE__);
        }
        $this->Offer = $offer;
        return $this;
    }
    /**
     * Add item to Offer value
     * @throws \InvalidArgumentException
     * @param \StructType\OfferType $item
     * @return \ArrayType\OfferArrayType
     */
    public function addToOffer(\StructType\OfferType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\OfferType) {
            throw new \InvalidArgumentException(sprintf('The Offer property can only contain items of type \StructType\OfferType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Offer[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\OfferType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\OfferType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\OfferType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\OfferType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\OfferType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Offer
     */
    public function getAttributeName()
    {
        return 'Offer';
    }
}
