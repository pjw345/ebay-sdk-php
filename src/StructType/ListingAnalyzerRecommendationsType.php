<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListingAnalyzerRecommendationsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ListingAnalyzerRecommendationsType extends AbstractStructBase
{
    /**
     * The ListingTipArray
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \ArrayType\ListingTipArrayType
     */
    public $ListingTipArray;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ListingAnalyzerRecommendationsType
     * @uses ListingAnalyzerRecommendationsType::setListingTipArray()
     * @uses ListingAnalyzerRecommendationsType::setAny()
     * @param \ArrayType\ListingTipArrayType $listingTipArray
     * @param \DOMDocument $any
     */
    public function __construct(\ArrayType\ListingTipArrayType $listingTipArray = null, \DOMDocument $any = null)
    {
        $this
            ->setListingTipArray($listingTipArray)
            ->setAny($any);
    }
    /**
     * Get ListingTipArray value
     * @return \ArrayType\ListingTipArrayType|null
     */
    public function getListingTipArray()
    {
        return $this->ListingTipArray;
    }
    /**
     * Set ListingTipArray value
     * @param \ArrayType\ListingTipArrayType $listingTipArray
     * @return \StructType\ListingAnalyzerRecommendationsType
     */
    public function setListingTipArray(\ArrayType\ListingTipArrayType $listingTipArray = null)
    {
        $this->ListingTipArray = $listingTipArray;
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
     * @return \StructType\ListingAnalyzerRecommendationsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
