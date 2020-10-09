<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ModifyNameArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>ModifyNameList</b> container in a <b>ReviseFixedPriceItem</b> or <b>RelistFixedPriceItem</b> call to rename one or more Variation Specific names for a multiple-variation listing.
 * @subpackage Arrays
 */
class ModifyNameArrayType extends AbstractStructArrayBase
{
    /**
     * The ModifyName
     * Meta information extracted from the WSDL
     * - documentation: A <b>ModifyName</b> container is needed for each Variation Specific name that the seller wishes to change in a multiple-variation listing. <br><br> You cannot change the name of an Item Specific that is required for the listing
     * category. Use the <b>GetCategoryFeatures</b> or <b>GetCategorySpecifics</b> calls to determine which Item Specifics names are required for a category. <br><br> To get a current list of Variation Specifics defined for a multiple-variation listing, the
     * seller can use <b>GetItem</b>, and then view all Variation Specific names in the <b>VariationSpecificsSet</b> container in the response.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ModifyNameType[]
     */
    public $ModifyName;
    /**
     * Constructor method for ModifyNameArrayType
     * @uses ModifyNameArrayType::setModifyName()
     * @param \StructType\ModifyNameType[] $modifyName
     */
    public function __construct(array $modifyName = array())
    {
        $this
            ->setModifyName($modifyName);
    }
    /**
     * Get ModifyName value
     * @return \StructType\ModifyNameType[]|null
     */
    public function getModifyName()
    {
        return $this->ModifyName;
    }
    /**
     * This method is responsible for validating the values passed to the setModifyName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setModifyName method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateModifyNameForArrayConstraintsFromSetModifyName(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $modifyNameArrayTypeModifyNameItem) {
            // validation for constraint: itemType
            if (!$modifyNameArrayTypeModifyNameItem instanceof \StructType\ModifyNameType) {
                $invalidValues[] = is_object($modifyNameArrayTypeModifyNameItem) ? get_class($modifyNameArrayTypeModifyNameItem) : sprintf('%s(%s)', gettype($modifyNameArrayTypeModifyNameItem), var_export($modifyNameArrayTypeModifyNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ModifyName property can only contain items of type \StructType\ModifyNameType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ModifyName value
     * @throws \InvalidArgumentException
     * @param \StructType\ModifyNameType[] $modifyName
     * @return \ArrayType\ModifyNameArrayType
     */
    public function setModifyName(array $modifyName = array())
    {
        // validation for constraint: array
        if ('' !== ($modifyNameArrayErrorMessage = self::validateModifyNameForArrayConstraintsFromSetModifyName($modifyName))) {
            throw new \InvalidArgumentException($modifyNameArrayErrorMessage, __LINE__);
        }
        $this->ModifyName = $modifyName;
        return $this;
    }
    /**
     * Add item to ModifyName value
     * @throws \InvalidArgumentException
     * @param \StructType\ModifyNameType $item
     * @return \ArrayType\ModifyNameArrayType
     */
    public function addToModifyName(\StructType\ModifyNameType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ModifyNameType) {
            throw new \InvalidArgumentException(sprintf('The ModifyName property can only contain items of type \StructType\ModifyNameType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ModifyName[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ModifyNameType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ModifyNameType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ModifyNameType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ModifyNameType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ModifyNameType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ModifyName
     */
    public function getAttributeName()
    {
        return 'ModifyName';
    }
}
