<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for SellerRatingSummaryArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>SellerRatingSummaryArray</b> container that is returned in the <b>GetFeedback</b> response. The <b>SellerRatingSummaryArray</b> container consists of an array of <b>AverageRatingSummary</b> containers, which
 * provide details on Detailed Seller Ratings (DSRs), including the type of rating (Communication, Item As Described, Shipping and Handling Charges, or Shipping Time), the seller's average rating for that DSR type, the total number of DSR ratings, and
 * the period in which those ratings were received (the last year or the last 30 days).
 * @subpackage Arrays
 */
class SellerRatingSummaryArrayType extends AbstractStructArrayBase
{
    /**
     * The AverageRatingSummary
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of a seller's Detailed Seller Rating (DSR) for each type of rating (Communication, Item As Described, Shipping and Handling Charges, or Shipping Time), the seller's average rating for each DSR type, the total
     * number of DSR ratings for each DSR type, and the period in which those ratings were received (the last year or the last 30 days).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\AverageRatingSummaryType[]
     */
    public $AverageRatingSummary;
    /**
     * Constructor method for SellerRatingSummaryArrayType
     * @uses SellerRatingSummaryArrayType::setAverageRatingSummary()
     * @param \StructType\AverageRatingSummaryType[] $averageRatingSummary
     */
    public function __construct(array $averageRatingSummary = array())
    {
        $this
            ->setAverageRatingSummary($averageRatingSummary);
    }
    /**
     * Get AverageRatingSummary value
     * @return \StructType\AverageRatingSummaryType[]|null
     */
    public function getAverageRatingSummary()
    {
        return $this->AverageRatingSummary;
    }
    /**
     * This method is responsible for validating the values passed to the setAverageRatingSummary method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAverageRatingSummary method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAverageRatingSummaryForArrayConstraintsFromSetAverageRatingSummary(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sellerRatingSummaryArrayTypeAverageRatingSummaryItem) {
            // validation for constraint: itemType
            if (!$sellerRatingSummaryArrayTypeAverageRatingSummaryItem instanceof \StructType\AverageRatingSummaryType) {
                $invalidValues[] = is_object($sellerRatingSummaryArrayTypeAverageRatingSummaryItem) ? get_class($sellerRatingSummaryArrayTypeAverageRatingSummaryItem) : sprintf('%s(%s)', gettype($sellerRatingSummaryArrayTypeAverageRatingSummaryItem), var_export($sellerRatingSummaryArrayTypeAverageRatingSummaryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AverageRatingSummary property can only contain items of type \StructType\AverageRatingSummaryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set AverageRatingSummary value
     * @throws \InvalidArgumentException
     * @param \StructType\AverageRatingSummaryType[] $averageRatingSummary
     * @return \ArrayType\SellerRatingSummaryArrayType
     */
    public function setAverageRatingSummary(array $averageRatingSummary = array())
    {
        // validation for constraint: array
        if ('' !== ($averageRatingSummaryArrayErrorMessage = self::validateAverageRatingSummaryForArrayConstraintsFromSetAverageRatingSummary($averageRatingSummary))) {
            throw new \InvalidArgumentException($averageRatingSummaryArrayErrorMessage, __LINE__);
        }
        $this->AverageRatingSummary = $averageRatingSummary;
        return $this;
    }
    /**
     * Add item to AverageRatingSummary value
     * @throws \InvalidArgumentException
     * @param \StructType\AverageRatingSummaryType $item
     * @return \ArrayType\SellerRatingSummaryArrayType
     */
    public function addToAverageRatingSummary(\StructType\AverageRatingSummaryType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AverageRatingSummaryType) {
            throw new \InvalidArgumentException(sprintf('The AverageRatingSummary property can only contain items of type \StructType\AverageRatingSummaryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AverageRatingSummary[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AverageRatingSummaryType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AverageRatingSummaryType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AverageRatingSummaryType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AverageRatingSummaryType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AverageRatingSummaryType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AverageRatingSummary
     */
    public function getAttributeName()
    {
        return 'AverageRatingSummary';
    }
}
