<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreCustomCategoryType StructType
 * Meta information extracted from the WSDL
 * - documentation: Configuration of a store custom category.
 * @subpackage Structs
 */
class StoreCustomCategoryType extends AbstractStructBase
{
    /**
     * The CategoryID
     * Meta information extracted from the WSDL
     * - documentation: Custom category ID. For SetStoreCategories, required only if Action is set to Rename, Move or Delete.
     * @var int
     */
    public $CategoryID;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Name of the custom category.
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Order
     * Meta information extracted from the WSDL
     * - documentation: Order in which the custom category appears in the list of store categories.
     * - minOccurs: 0
     * @var int
     */
    public $Order;
    /**
     * The ChildCategory
     * Meta information extracted from the WSDL
     * - documentation: Contains the properties of a custom subcategory for an eBay Store. eBay Stores support three category levels.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\StoreCustomCategoryType[]
     */
    public $ChildCategory;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for StoreCustomCategoryType
     * @uses StoreCustomCategoryType::setCategoryID()
     * @uses StoreCustomCategoryType::setName()
     * @uses StoreCustomCategoryType::setOrder()
     * @uses StoreCustomCategoryType::setChildCategory()
     * @uses StoreCustomCategoryType::setAny()
     * @param int $categoryID
     * @param string $name
     * @param int $order
     * @param \StructType\StoreCustomCategoryType[] $childCategory
     * @param \DOMDocument $any
     */
    public function __construct($categoryID = null, $name = null, $order = null, array $childCategory = array(), \DOMDocument $any = null)
    {
        $this
            ->setCategoryID($categoryID)
            ->setName($name)
            ->setOrder($order)
            ->setChildCategory($childCategory)
            ->setAny($any);
    }
    /**
     * Get CategoryID value
     * @return int|null
     */
    public function getCategoryID()
    {
        return $this->CategoryID;
    }
    /**
     * Set CategoryID value
     * @param int $categoryID
     * @return \StructType\StoreCustomCategoryType
     */
    public function setCategoryID($categoryID = null)
    {
        // validation for constraint: int
        if (!is_null($categoryID) && !(is_int($categoryID) || ctype_digit($categoryID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($categoryID, true), gettype($categoryID)), __LINE__);
        }
        $this->CategoryID = $categoryID;
        return $this;
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
     * @return \StructType\StoreCustomCategoryType
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
     * Get Order value
     * @return int|null
     */
    public function getOrder()
    {
        return $this->Order;
    }
    /**
     * Set Order value
     * @param int $order
     * @return \StructType\StoreCustomCategoryType
     */
    public function setOrder($order = null)
    {
        // validation for constraint: int
        if (!is_null($order) && !(is_int($order) || ctype_digit($order))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($order, true), gettype($order)), __LINE__);
        }
        $this->Order = $order;
        return $this;
    }
    /**
     * Get ChildCategory value
     * @return \StructType\StoreCustomCategoryType[]|null
     */
    public function getChildCategory()
    {
        return $this->ChildCategory;
    }
    /**
     * This method is responsible for validating the values passed to the setChildCategory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setChildCategory method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateChildCategoryForArrayConstraintsFromSetChildCategory(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $storeCustomCategoryTypeChildCategoryItem) {
            // validation for constraint: itemType
            if (!$storeCustomCategoryTypeChildCategoryItem instanceof \StructType\StoreCustomCategoryType) {
                $invalidValues[] = is_object($storeCustomCategoryTypeChildCategoryItem) ? get_class($storeCustomCategoryTypeChildCategoryItem) : sprintf('%s(%s)', gettype($storeCustomCategoryTypeChildCategoryItem), var_export($storeCustomCategoryTypeChildCategoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ChildCategory property can only contain items of type \StructType\StoreCustomCategoryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ChildCategory value
     * @throws \InvalidArgumentException
     * @param \StructType\StoreCustomCategoryType[] $childCategory
     * @return \StructType\StoreCustomCategoryType
     */
    public function setChildCategory(array $childCategory = array())
    {
        // validation for constraint: array
        if ('' !== ($childCategoryArrayErrorMessage = self::validateChildCategoryForArrayConstraintsFromSetChildCategory($childCategory))) {
            throw new \InvalidArgumentException($childCategoryArrayErrorMessage, __LINE__);
        }
        $this->ChildCategory = $childCategory;
        return $this;
    }
    /**
     * Add item to ChildCategory value
     * @throws \InvalidArgumentException
     * @param \StructType\StoreCustomCategoryType $item
     * @return \StructType\StoreCustomCategoryType
     */
    public function addToChildCategory(\StructType\StoreCustomCategoryType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\StoreCustomCategoryType) {
            throw new \InvalidArgumentException(sprintf('The ChildCategory property can only contain items of type \StructType\StoreCustomCategoryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ChildCategory[] = $item;
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
     * @return \StructType\StoreCustomCategoryType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
