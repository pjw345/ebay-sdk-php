<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductSuggestionsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Provides a list of products recommended by eBay, which match the item information provided by the seller.
 * @subpackage Structs
 */
class ProductSuggestionsType extends AbstractStructBase
{
    /**
     * The ProductSuggestion
     * Meta information extracted from the WSDL
     * - documentation: Contains details for one or more individual product suggestions. The product details include the EPID, Title, Stock photo url and whether or not the product is an exact match for the submitted item. This product information can be
     * used to list subsequent items.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ProductSuggestionType[]
     */
    public $ProductSuggestion;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ProductSuggestionsType
     * @uses ProductSuggestionsType::setProductSuggestion()
     * @uses ProductSuggestionsType::setAny()
     * @param \StructType\ProductSuggestionType[] $productSuggestion
     * @param \DOMDocument $any
     */
    public function __construct(array $productSuggestion = array(), \DOMDocument $any = null)
    {
        $this
            ->setProductSuggestion($productSuggestion)
            ->setAny($any);
    }
    /**
     * Get ProductSuggestion value
     * @return \StructType\ProductSuggestionType[]|null
     */
    public function getProductSuggestion()
    {
        return $this->ProductSuggestion;
    }
    /**
     * This method is responsible for validating the values passed to the setProductSuggestion method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProductSuggestion method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductSuggestionForArrayConstraintsFromSetProductSuggestion(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $productSuggestionsTypeProductSuggestionItem) {
            // validation for constraint: itemType
            if (!$productSuggestionsTypeProductSuggestionItem instanceof \StructType\ProductSuggestionType) {
                $invalidValues[] = is_object($productSuggestionsTypeProductSuggestionItem) ? get_class($productSuggestionsTypeProductSuggestionItem) : sprintf('%s(%s)', gettype($productSuggestionsTypeProductSuggestionItem), var_export($productSuggestionsTypeProductSuggestionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProductSuggestion property can only contain items of type \StructType\ProductSuggestionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ProductSuggestion value
     * @throws \InvalidArgumentException
     * @param \StructType\ProductSuggestionType[] $productSuggestion
     * @return \StructType\ProductSuggestionsType
     */
    public function setProductSuggestion(array $productSuggestion = array())
    {
        // validation for constraint: array
        if ('' !== ($productSuggestionArrayErrorMessage = self::validateProductSuggestionForArrayConstraintsFromSetProductSuggestion($productSuggestion))) {
            throw new \InvalidArgumentException($productSuggestionArrayErrorMessage, __LINE__);
        }
        $this->ProductSuggestion = $productSuggestion;
        return $this;
    }
    /**
     * Add item to ProductSuggestion value
     * @throws \InvalidArgumentException
     * @param \StructType\ProductSuggestionType $item
     * @return \StructType\ProductSuggestionsType
     */
    public function addToProductSuggestion(\StructType\ProductSuggestionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ProductSuggestionType) {
            throw new \InvalidArgumentException(sprintf('The ProductSuggestion property can only contain items of type \StructType\ProductSuggestionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ProductSuggestion[] = $item;
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
     * @return \StructType\ProductSuggestionsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
