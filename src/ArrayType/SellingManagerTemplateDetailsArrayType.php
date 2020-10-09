<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for SellingManagerTemplateDetailsArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <strong>SellingManagerTemplateDetailsArray</strong> container that is returned in the <strong>GetSellingManagerInventory</strong> and <strong>GetSellingManagerTemplates</strong> calls. The
 * <strong>SellingManagerTemplateDetailsArray</strong> container consists of one or more Selling Manager Templates that match the input criteria.
 * @subpackage Arrays
 */
class SellingManagerTemplateDetailsArrayType extends AbstractStructArrayBase
{
    /**
     * The SellingManagerTemplateDetails
     * Meta information extracted from the WSDL
     * - documentation: This container consists of detailed information for one Selling Manager Template. <br/><br/> <strong>For GetSellingManagerTemplates</strong>: A <strong>SellingManagerTemplateDetails</strong> container is returned for each Selling
     * Manager Template that matches the input criteria. <br/><br/> <strong>For GetSellingManagerInventory</strong>: A <strong>SellingManagerTemplateDetails</strong> container is returned for each Selling Manager Template that is associated with the
     * corresponding Selling Manager Product (if any).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\SellingManagerTemplateDetailsType[]
     */
    public $SellingManagerTemplateDetails;
    /**
     * Constructor method for SellingManagerTemplateDetailsArrayType
     * @uses SellingManagerTemplateDetailsArrayType::setSellingManagerTemplateDetails()
     * @param \StructType\SellingManagerTemplateDetailsType[] $sellingManagerTemplateDetails
     */
    public function __construct(array $sellingManagerTemplateDetails = array())
    {
        $this
            ->setSellingManagerTemplateDetails($sellingManagerTemplateDetails);
    }
    /**
     * Get SellingManagerTemplateDetails value
     * @return \StructType\SellingManagerTemplateDetailsType[]|null
     */
    public function getSellingManagerTemplateDetails()
    {
        return $this->SellingManagerTemplateDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setSellingManagerTemplateDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSellingManagerTemplateDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSellingManagerTemplateDetailsForArrayConstraintsFromSetSellingManagerTemplateDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sellingManagerTemplateDetailsArrayTypeSellingManagerTemplateDetailsItem) {
            // validation for constraint: itemType
            if (!$sellingManagerTemplateDetailsArrayTypeSellingManagerTemplateDetailsItem instanceof \StructType\SellingManagerTemplateDetailsType) {
                $invalidValues[] = is_object($sellingManagerTemplateDetailsArrayTypeSellingManagerTemplateDetailsItem) ? get_class($sellingManagerTemplateDetailsArrayTypeSellingManagerTemplateDetailsItem) : sprintf('%s(%s)', gettype($sellingManagerTemplateDetailsArrayTypeSellingManagerTemplateDetailsItem), var_export($sellingManagerTemplateDetailsArrayTypeSellingManagerTemplateDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SellingManagerTemplateDetails property can only contain items of type \StructType\SellingManagerTemplateDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SellingManagerTemplateDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\SellingManagerTemplateDetailsType[] $sellingManagerTemplateDetails
     * @return \ArrayType\SellingManagerTemplateDetailsArrayType
     */
    public function setSellingManagerTemplateDetails(array $sellingManagerTemplateDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($sellingManagerTemplateDetailsArrayErrorMessage = self::validateSellingManagerTemplateDetailsForArrayConstraintsFromSetSellingManagerTemplateDetails($sellingManagerTemplateDetails))) {
            throw new \InvalidArgumentException($sellingManagerTemplateDetailsArrayErrorMessage, __LINE__);
        }
        $this->SellingManagerTemplateDetails = $sellingManagerTemplateDetails;
        return $this;
    }
    /**
     * Add item to SellingManagerTemplateDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\SellingManagerTemplateDetailsType $item
     * @return \ArrayType\SellingManagerTemplateDetailsArrayType
     */
    public function addToSellingManagerTemplateDetails(\StructType\SellingManagerTemplateDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\SellingManagerTemplateDetailsType) {
            throw new \InvalidArgumentException(sprintf('The SellingManagerTemplateDetails property can only contain items of type \StructType\SellingManagerTemplateDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SellingManagerTemplateDetails[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\SellingManagerTemplateDetailsType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\SellingManagerTemplateDetailsType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\SellingManagerTemplateDetailsType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\SellingManagerTemplateDetailsType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\SellingManagerTemplateDetailsType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SellingManagerTemplateDetails
     */
    public function getAttributeName()
    {
        return 'SellingManagerTemplateDetails';
    }
}
