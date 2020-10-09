<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductFamilyType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ProductFamilyType extends AbstractStructBase
{
    /**
     * The ParentProduct
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\ProductType
     */
    public $ParentProduct;
    /**
     * The FamilyMembers
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ProductType[]
     */
    public $FamilyMembers;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * The hasMoreChildren
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var bool
     */
    public $hasMoreChildren;
    /**
     * Constructor method for ProductFamilyType
     * @uses ProductFamilyType::setParentProduct()
     * @uses ProductFamilyType::setFamilyMembers()
     * @uses ProductFamilyType::setAny()
     * @uses ProductFamilyType::setHasMoreChildren()
     * @param \StructType\ProductType $parentProduct
     * @param \StructType\ProductType[] $familyMembers
     * @param \DOMDocument $any
     * @param bool $hasMoreChildren
     */
    public function __construct(\StructType\ProductType $parentProduct = null, array $familyMembers = array(), \DOMDocument $any = null, $hasMoreChildren = null)
    {
        $this
            ->setParentProduct($parentProduct)
            ->setFamilyMembers($familyMembers)
            ->setAny($any)
            ->setHasMoreChildren($hasMoreChildren);
    }
    /**
     * Get ParentProduct value
     * @return \StructType\ProductType|null
     */
    public function getParentProduct()
    {
        return $this->ParentProduct;
    }
    /**
     * Set ParentProduct value
     * @param \StructType\ProductType $parentProduct
     * @return \StructType\ProductFamilyType
     */
    public function setParentProduct(\StructType\ProductType $parentProduct = null)
    {
        $this->ParentProduct = $parentProduct;
        return $this;
    }
    /**
     * Get FamilyMembers value
     * @return \StructType\ProductType[]|null
     */
    public function getFamilyMembers()
    {
        return $this->FamilyMembers;
    }
    /**
     * This method is responsible for validating the values passed to the setFamilyMembers method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFamilyMembers method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFamilyMembersForArrayConstraintsFromSetFamilyMembers(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $productFamilyTypeFamilyMembersItem) {
            // validation for constraint: itemType
            if (!$productFamilyTypeFamilyMembersItem instanceof \StructType\ProductType) {
                $invalidValues[] = is_object($productFamilyTypeFamilyMembersItem) ? get_class($productFamilyTypeFamilyMembersItem) : sprintf('%s(%s)', gettype($productFamilyTypeFamilyMembersItem), var_export($productFamilyTypeFamilyMembersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FamilyMembers property can only contain items of type \StructType\ProductType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set FamilyMembers value
     * @throws \InvalidArgumentException
     * @param \StructType\ProductType[] $familyMembers
     * @return \StructType\ProductFamilyType
     */
    public function setFamilyMembers(array $familyMembers = array())
    {
        // validation for constraint: array
        if ('' !== ($familyMembersArrayErrorMessage = self::validateFamilyMembersForArrayConstraintsFromSetFamilyMembers($familyMembers))) {
            throw new \InvalidArgumentException($familyMembersArrayErrorMessage, __LINE__);
        }
        $this->FamilyMembers = $familyMembers;
        return $this;
    }
    /**
     * Add item to FamilyMembers value
     * @throws \InvalidArgumentException
     * @param \StructType\ProductType $item
     * @return \StructType\ProductFamilyType
     */
    public function addToFamilyMembers(\StructType\ProductType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ProductType) {
            throw new \InvalidArgumentException(sprintf('The FamilyMembers property can only contain items of type \StructType\ProductType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FamilyMembers[] = $item;
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
     * @return \StructType\ProductFamilyType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
    /**
     * Get hasMoreChildren value
     * @return bool|null
     */
    public function getHasMoreChildren()
    {
        return $this->hasMoreChildren;
    }
    /**
     * Set hasMoreChildren value
     * @param bool $hasMoreChildren
     * @return \StructType\ProductFamilyType
     */
    public function setHasMoreChildren($hasMoreChildren = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasMoreChildren) && !is_bool($hasMoreChildren)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasMoreChildren, true), gettype($hasMoreChildren)), __LINE__);
        }
        $this->hasMoreChildren = $hasMoreChildren;
        return $this;
    }
}
