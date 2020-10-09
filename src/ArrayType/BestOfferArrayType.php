<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for BestOfferArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: An array of one or more Best Offers. This type is used in the responses of the <b>GetBestOffers</b> and <b>RespondToBestOffer</b> calls.
 * @subpackage Arrays
 */
class BestOfferArrayType extends AbstractStructArrayBase
{
    /**
     * The BestOffer
     * Meta information extracted from the WSDL
     * - documentation: For <b>GetBestOffers</b>, each <b>BestOffer</b> container consists of detailed information on the Best Offer/Counter Offer, including the type of Best Offer (Best Offer, Buyer/Seller Counter Offer), amount of the Best Offer/Counter
     * Offer, and status of Best Offer/Counter Offer. <br/><br/> For <b>RespondToBestOffer</b>, each <b>BestOffer</b> container provides the status ('Success' or 'Failure') of the Best Offer action (Accept, Counter, or Decline), which are defined in <a
     * href="types/BestOfferActionCodeType.html">BestOfferActionCodeType</a>.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\BestOfferType[]
     */
    public $BestOffer;
    /**
     * Constructor method for BestOfferArrayType
     * @uses BestOfferArrayType::setBestOffer()
     * @param \StructType\BestOfferType[] $bestOffer
     */
    public function __construct(array $bestOffer = array())
    {
        $this
            ->setBestOffer($bestOffer);
    }
    /**
     * Get BestOffer value
     * @return \StructType\BestOfferType[]|null
     */
    public function getBestOffer()
    {
        return $this->BestOffer;
    }
    /**
     * This method is responsible for validating the values passed to the setBestOffer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBestOffer method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBestOfferForArrayConstraintsFromSetBestOffer(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $bestOfferArrayTypeBestOfferItem) {
            // validation for constraint: itemType
            if (!$bestOfferArrayTypeBestOfferItem instanceof \StructType\BestOfferType) {
                $invalidValues[] = is_object($bestOfferArrayTypeBestOfferItem) ? get_class($bestOfferArrayTypeBestOfferItem) : sprintf('%s(%s)', gettype($bestOfferArrayTypeBestOfferItem), var_export($bestOfferArrayTypeBestOfferItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BestOffer property can only contain items of type \StructType\BestOfferType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set BestOffer value
     * @throws \InvalidArgumentException
     * @param \StructType\BestOfferType[] $bestOffer
     * @return \ArrayType\BestOfferArrayType
     */
    public function setBestOffer(array $bestOffer = array())
    {
        // validation for constraint: array
        if ('' !== ($bestOfferArrayErrorMessage = self::validateBestOfferForArrayConstraintsFromSetBestOffer($bestOffer))) {
            throw new \InvalidArgumentException($bestOfferArrayErrorMessage, __LINE__);
        }
        $this->BestOffer = $bestOffer;
        return $this;
    }
    /**
     * Add item to BestOffer value
     * @throws \InvalidArgumentException
     * @param \StructType\BestOfferType $item
     * @return \ArrayType\BestOfferArrayType
     */
    public function addToBestOffer(\StructType\BestOfferType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\BestOfferType) {
            throw new \InvalidArgumentException(sprintf('The BestOffer property can only contain items of type \StructType\BestOfferType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BestOffer[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\BestOfferType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\BestOfferType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\BestOfferType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\BestOfferType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\BestOfferType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BestOffer
     */
    public function getAttributeName()
    {
        return 'BestOffer';
    }
}
