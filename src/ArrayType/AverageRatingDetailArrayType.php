<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for AverageRatingDetailArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: This type has been deprecated.
 * @subpackage Arrays
 */
class AverageRatingDetailArrayType extends AbstractStructArrayBase
{
    /**
     * The AverageRatingDetails
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\AverageRatingDetailsType[]
     */
    public $AverageRatingDetails;
    /**
     * Constructor method for AverageRatingDetailArrayType
     * @uses AverageRatingDetailArrayType::setAverageRatingDetails()
     * @param \StructType\AverageRatingDetailsType[] $averageRatingDetails
     */
    public function __construct(array $averageRatingDetails = array())
    {
        $this
            ->setAverageRatingDetails($averageRatingDetails);
    }
    /**
     * Get AverageRatingDetails value
     * @return \StructType\AverageRatingDetailsType[]|null
     */
    public function getAverageRatingDetails()
    {
        return $this->AverageRatingDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setAverageRatingDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAverageRatingDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAverageRatingDetailsForArrayConstraintsFromSetAverageRatingDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $averageRatingDetailArrayTypeAverageRatingDetailsItem) {
            // validation for constraint: itemType
            if (!$averageRatingDetailArrayTypeAverageRatingDetailsItem instanceof \StructType\AverageRatingDetailsType) {
                $invalidValues[] = is_object($averageRatingDetailArrayTypeAverageRatingDetailsItem) ? get_class($averageRatingDetailArrayTypeAverageRatingDetailsItem) : sprintf('%s(%s)', gettype($averageRatingDetailArrayTypeAverageRatingDetailsItem), var_export($averageRatingDetailArrayTypeAverageRatingDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AverageRatingDetails property can only contain items of type \StructType\AverageRatingDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set AverageRatingDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\AverageRatingDetailsType[] $averageRatingDetails
     * @return \ArrayType\AverageRatingDetailArrayType
     */
    public function setAverageRatingDetails(array $averageRatingDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($averageRatingDetailsArrayErrorMessage = self::validateAverageRatingDetailsForArrayConstraintsFromSetAverageRatingDetails($averageRatingDetails))) {
            throw new \InvalidArgumentException($averageRatingDetailsArrayErrorMessage, __LINE__);
        }
        $this->AverageRatingDetails = $averageRatingDetails;
        return $this;
    }
    /**
     * Add item to AverageRatingDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\AverageRatingDetailsType $item
     * @return \ArrayType\AverageRatingDetailArrayType
     */
    public function addToAverageRatingDetails(\StructType\AverageRatingDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AverageRatingDetailsType) {
            throw new \InvalidArgumentException(sprintf('The AverageRatingDetails property can only contain items of type \StructType\AverageRatingDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AverageRatingDetails[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AverageRatingDetailsType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AverageRatingDetailsType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AverageRatingDetailsType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AverageRatingDetailsType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AverageRatingDetailsType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AverageRatingDetails
     */
    public function getAttributeName()
    {
        return 'AverageRatingDetails';
    }
}
