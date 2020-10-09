<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerProductSpecificsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>AddSellingManagerProduct</b> and <b>ReviseSellingManagerProduct</b> calls to add/revise listing-level Item Specifics and/or to define multiple variations for a new or existing Selling Manager Product
 * record. <br><br> This type is also used by the respone of the <b>GetSellingManagerInventory</b> call.
 * @subpackage Structs
 */
class SellingManagerProductSpecificsType extends AbstractStructBase
{
    /**
     * The PrimaryCategoryID
     * Meta information extracted from the WSDL
     * - documentation: This optional field sets the primary eBay listing category for the Selling Manager Product. If the primary eBay listing category ID is not specified with <b>AddSellingManagerProduct</b> or <b>ReviseSellingManagerProduct</b> call, the
     * seller can pass in this information with a subsequent <b>AddSellingManagerTemplate</b> call. <br><br> The <b>GetSuggestedCategories</b> or <b>GetCategories</b> call can be used to retrieve eBay leaf category IDs. <br><br> This field is returned in a
     * <b>GetSellingManagerInventory</b> call only if it is defined for the Selling Manager Product.
     * - minOccurs: 0
     * @var string
     */
    public $PrimaryCategoryID;
    /**
     * The Variations
     * Meta information extracted from the WSDL
     * - documentation: This container is used to define/revise multiple variations for a new or existing Selling Manager Product record. This container is only applicable if the new or existing Selling Manager Product record will ultimately be converted to
     * a multiple-variation, fixed-price listing on an eBay Marketplace. <br><br> Note that Item Specifics that all product variations share are actually set in the <b>ItemSpecifics</b> container, the <b>Variations.Pictures</b> container is used to specify
     * URLs for all pictures that will end up in the listing, the <b>Variations.VariationSpecificsSet</b> container is used to set all available options for the aspects that all product variations share (such as 'Color' and 'Size'), and a
     * <b>Variations.Variation</b> container is need to define each variation, including its defining aspects (such as 'Blue, Large'), quantity available, price, SKU value (if applicable) and any eBay Product ID (ePID) or GTIN (UPC, EAN, ISBN) value
     * asssociated with the variation. <br><br> Not all eBay listing categories support multiple-variation listings, so it might be a good idea to run a <b>GetCategoryFeatures</b> call on one or more categories, and include a <b>FeatureID</b> filter set to
     * a value of <code>ItemSpecificsEnabled</code>. If the listing category supports multiple-variation listings, a <code>ItemSpecificsEnabled</code> tag will get returned for the category with a value of <code>Enabled</code>. <br><br> This container is
     * returned in a <b>GetSellingManagerInventory</b> call only if variations are defined in the Selling Manager Product.
     * - minOccurs: 0
     * @var \StructType\VariationsType
     */
    public $Variations;
    /**
     * The ItemSpecifics
     * Meta information extracted from the WSDL
     * - documentation: This container is used to define/revise listing-level Item Specifics for a single-variation or multiple-variation listing. Item Specifics give sellers a structured way to describe details of their items through name-value pairs.
     * <br><br> Each Item Specific requires its own <b>ItemSpecifics.NameValueList</b> container, and it is possible that a single Item Specific can more than one applicable value. An example of this would be a 'Features' Item Specific. A product can have
     * multiple features, hence multiple features can be passed in through multiple <b>ItemSpecifics.NameValueList.Value</b> fields. <br><br> Many listing categories have mandatory Item Specifics, and just about all listing categories have recommended Item
     * Specifics. To retrieve mandatory and recommended Item Specifics for a category, the <b>GetCategorySpecifics</b> call can be used. <br><br> This container is returned in a <b>GetSellingManagerInventory</b> call only if Item Specifics are defined for
     * the Selling Manager Product.
     * - minOccurs: 0
     * @var \ArrayType\NameValueListArrayType
     */
    public $ItemSpecifics;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellingManagerProductSpecificsType
     * @uses SellingManagerProductSpecificsType::setPrimaryCategoryID()
     * @uses SellingManagerProductSpecificsType::setVariations()
     * @uses SellingManagerProductSpecificsType::setItemSpecifics()
     * @uses SellingManagerProductSpecificsType::setAny()
     * @param string $primaryCategoryID
     * @param \StructType\VariationsType $variations
     * @param \ArrayType\NameValueListArrayType $itemSpecifics
     * @param \DOMDocument $any
     */
    public function __construct($primaryCategoryID = null, \StructType\VariationsType $variations = null, \ArrayType\NameValueListArrayType $itemSpecifics = null, \DOMDocument $any = null)
    {
        $this
            ->setPrimaryCategoryID($primaryCategoryID)
            ->setVariations($variations)
            ->setItemSpecifics($itemSpecifics)
            ->setAny($any);
    }
    /**
     * Get PrimaryCategoryID value
     * @return string|null
     */
    public function getPrimaryCategoryID()
    {
        return $this->PrimaryCategoryID;
    }
    /**
     * Set PrimaryCategoryID value
     * @param string $primaryCategoryID
     * @return \StructType\SellingManagerProductSpecificsType
     */
    public function setPrimaryCategoryID($primaryCategoryID = null)
    {
        // validation for constraint: string
        if (!is_null($primaryCategoryID) && !is_string($primaryCategoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($primaryCategoryID, true), gettype($primaryCategoryID)), __LINE__);
        }
        $this->PrimaryCategoryID = $primaryCategoryID;
        return $this;
    }
    /**
     * Get Variations value
     * @return \StructType\VariationsType|null
     */
    public function getVariations()
    {
        return $this->Variations;
    }
    /**
     * Set Variations value
     * @param \StructType\VariationsType $variations
     * @return \StructType\SellingManagerProductSpecificsType
     */
    public function setVariations(\StructType\VariationsType $variations = null)
    {
        $this->Variations = $variations;
        return $this;
    }
    /**
     * Get ItemSpecifics value
     * @return \ArrayType\NameValueListArrayType|null
     */
    public function getItemSpecifics()
    {
        return $this->ItemSpecifics;
    }
    /**
     * Set ItemSpecifics value
     * @param \ArrayType\NameValueListArrayType $itemSpecifics
     * @return \StructType\SellingManagerProductSpecificsType
     */
    public function setItemSpecifics(\ArrayType\NameValueListArrayType $itemSpecifics = null)
    {
        $this->ItemSpecifics = $itemSpecifics;
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
     * @return \StructType\SellingManagerProductSpecificsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
