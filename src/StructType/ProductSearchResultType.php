<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductSearchResultType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ProductSearchResultType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The NumProducts
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $NumProducts;
    /**
     * The AttributeSet
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ResponseAttributeSetType[]
     */
    public $AttributeSet;
    /**
     * The DisplayStockPhotos
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $DisplayStockPhotos;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ProductSearchResultType
     * @uses ProductSearchResultType::setID()
     * @uses ProductSearchResultType::setNumProducts()
     * @uses ProductSearchResultType::setAttributeSet()
     * @uses ProductSearchResultType::setDisplayStockPhotos()
     * @uses ProductSearchResultType::setAny()
     * @param string $iD
     * @param string $numProducts
     * @param \StructType\ResponseAttributeSetType[] $attributeSet
     * @param bool $displayStockPhotos
     * @param \DOMDocument $any
     */
    public function __construct($iD = null, $numProducts = null, array $attributeSet = array(), $displayStockPhotos = null, \DOMDocument $any = null)
    {
        $this
            ->setID($iD)
            ->setNumProducts($numProducts)
            ->setAttributeSet($attributeSet)
            ->setDisplayStockPhotos($displayStockPhotos)
            ->setAny($any);
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \StructType\ProductSearchResultType
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get NumProducts value
     * @return string|null
     */
    public function getNumProducts()
    {
        return $this->NumProducts;
    }
    /**
     * Set NumProducts value
     * @param string $numProducts
     * @return \StructType\ProductSearchResultType
     */
    public function setNumProducts($numProducts = null)
    {
        // validation for constraint: string
        if (!is_null($numProducts) && !is_string($numProducts)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numProducts, true), gettype($numProducts)), __LINE__);
        }
        $this->NumProducts = $numProducts;
        return $this;
    }
    /**
     * Get AttributeSet value
     * @return \StructType\ResponseAttributeSetType[]|null
     */
    public function getAttributeSet()
    {
        return $this->AttributeSet;
    }
    /**
     * This method is responsible for validating the values passed to the setAttributeSet method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAttributeSet method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAttributeSetForArrayConstraintsFromSetAttributeSet(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $productSearchResultTypeAttributeSetItem) {
            // validation for constraint: itemType
            if (!$productSearchResultTypeAttributeSetItem instanceof \StructType\ResponseAttributeSetType) {
                $invalidValues[] = is_object($productSearchResultTypeAttributeSetItem) ? get_class($productSearchResultTypeAttributeSetItem) : sprintf('%s(%s)', gettype($productSearchResultTypeAttributeSetItem), var_export($productSearchResultTypeAttributeSetItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AttributeSet property can only contain items of type \StructType\ResponseAttributeSetType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set AttributeSet value
     * @throws \InvalidArgumentException
     * @param \StructType\ResponseAttributeSetType[] $attributeSet
     * @return \StructType\ProductSearchResultType
     */
    public function setAttributeSet(array $attributeSet = array())
    {
        // validation for constraint: array
        if ('' !== ($attributeSetArrayErrorMessage = self::validateAttributeSetForArrayConstraintsFromSetAttributeSet($attributeSet))) {
            throw new \InvalidArgumentException($attributeSetArrayErrorMessage, __LINE__);
        }
        $this->AttributeSet = $attributeSet;
        return $this;
    }
    /**
     * Add item to AttributeSet value
     * @throws \InvalidArgumentException
     * @param \StructType\ResponseAttributeSetType $item
     * @return \StructType\ProductSearchResultType
     */
    public function addToAttributeSet(\StructType\ResponseAttributeSetType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ResponseAttributeSetType) {
            throw new \InvalidArgumentException(sprintf('The AttributeSet property can only contain items of type \StructType\ResponseAttributeSetType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AttributeSet[] = $item;
        return $this;
    }
    /**
     * Get DisplayStockPhotos value
     * @return bool|null
     */
    public function getDisplayStockPhotos()
    {
        return $this->DisplayStockPhotos;
    }
    /**
     * Set DisplayStockPhotos value
     * @param bool $displayStockPhotos
     * @return \StructType\ProductSearchResultType
     */
    public function setDisplayStockPhotos($displayStockPhotos = null)
    {
        // validation for constraint: boolean
        if (!is_null($displayStockPhotos) && !is_bool($displayStockPhotos)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($displayStockPhotos, true), gettype($displayStockPhotos)), __LINE__);
        }
        $this->DisplayStockPhotos = $displayStockPhotos;
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
     * @return \StructType\ProductSearchResultType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
