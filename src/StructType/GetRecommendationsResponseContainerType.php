<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRecommendationsResponseContainerType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class GetRecommendationsResponseContainerType extends AbstractStructBase
{
    /**
     * The ListingAnalyzerRecommendations
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\ListingAnalyzerRecommendationsType
     */
    public $ListingAnalyzerRecommendations;
    /**
     * The SIFFTASRecommendations
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\SIFFTASRecommendationsType
     */
    public $SIFFTASRecommendations;
    /**
     * The PricingRecommendations
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\PricingRecommendationsType
     */
    public $PricingRecommendations;
    /**
     * The AttributeRecommendations
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\AttributeRecommendationsType
     */
    public $AttributeRecommendations;
    /**
     * The ProductRecommendations
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\ProductRecommendationsType
     */
    public $ProductRecommendations;
    /**
     * The CorrelationID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $CorrelationID;
    /**
     * The Recommendations
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\RecommendationsType
     */
    public $Recommendations;
    /**
     * The ProductListingDetails
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\ProductListingDetailsType
     */
    public $ProductListingDetails;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for GetRecommendationsResponseContainerType
     * @uses GetRecommendationsResponseContainerType::setListingAnalyzerRecommendations()
     * @uses GetRecommendationsResponseContainerType::setSIFFTASRecommendations()
     * @uses GetRecommendationsResponseContainerType::setPricingRecommendations()
     * @uses GetRecommendationsResponseContainerType::setAttributeRecommendations()
     * @uses GetRecommendationsResponseContainerType::setProductRecommendations()
     * @uses GetRecommendationsResponseContainerType::setCorrelationID()
     * @uses GetRecommendationsResponseContainerType::setRecommendations()
     * @uses GetRecommendationsResponseContainerType::setProductListingDetails()
     * @uses GetRecommendationsResponseContainerType::setTitle()
     * @uses GetRecommendationsResponseContainerType::setAny()
     * @param \StructType\ListingAnalyzerRecommendationsType $listingAnalyzerRecommendations
     * @param \StructType\SIFFTASRecommendationsType $sIFFTASRecommendations
     * @param \StructType\PricingRecommendationsType $pricingRecommendations
     * @param \StructType\AttributeRecommendationsType $attributeRecommendations
     * @param \StructType\ProductRecommendationsType $productRecommendations
     * @param string $correlationID
     * @param \StructType\RecommendationsType $recommendations
     * @param \StructType\ProductListingDetailsType $productListingDetails
     * @param string $title
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\ListingAnalyzerRecommendationsType $listingAnalyzerRecommendations = null, \StructType\SIFFTASRecommendationsType $sIFFTASRecommendations = null, \StructType\PricingRecommendationsType $pricingRecommendations = null, \StructType\AttributeRecommendationsType $attributeRecommendations = null, \StructType\ProductRecommendationsType $productRecommendations = null, $correlationID = null, \StructType\RecommendationsType $recommendations = null, \StructType\ProductListingDetailsType $productListingDetails = null, $title = null, \DOMDocument $any = null)
    {
        $this
            ->setListingAnalyzerRecommendations($listingAnalyzerRecommendations)
            ->setSIFFTASRecommendations($sIFFTASRecommendations)
            ->setPricingRecommendations($pricingRecommendations)
            ->setAttributeRecommendations($attributeRecommendations)
            ->setProductRecommendations($productRecommendations)
            ->setCorrelationID($correlationID)
            ->setRecommendations($recommendations)
            ->setProductListingDetails($productListingDetails)
            ->setTitle($title)
            ->setAny($any);
    }
    /**
     * Get ListingAnalyzerRecommendations value
     * @return \StructType\ListingAnalyzerRecommendationsType|null
     */
    public function getListingAnalyzerRecommendations()
    {
        return $this->ListingAnalyzerRecommendations;
    }
    /**
     * Set ListingAnalyzerRecommendations value
     * @param \StructType\ListingAnalyzerRecommendationsType $listingAnalyzerRecommendations
     * @return \StructType\GetRecommendationsResponseContainerType
     */
    public function setListingAnalyzerRecommendations(\StructType\ListingAnalyzerRecommendationsType $listingAnalyzerRecommendations = null)
    {
        $this->ListingAnalyzerRecommendations = $listingAnalyzerRecommendations;
        return $this;
    }
    /**
     * Get SIFFTASRecommendations value
     * @return \StructType\SIFFTASRecommendationsType|null
     */
    public function getSIFFTASRecommendations()
    {
        return $this->SIFFTASRecommendations;
    }
    /**
     * Set SIFFTASRecommendations value
     * @param \StructType\SIFFTASRecommendationsType $sIFFTASRecommendations
     * @return \StructType\GetRecommendationsResponseContainerType
     */
    public function setSIFFTASRecommendations(\StructType\SIFFTASRecommendationsType $sIFFTASRecommendations = null)
    {
        $this->SIFFTASRecommendations = $sIFFTASRecommendations;
        return $this;
    }
    /**
     * Get PricingRecommendations value
     * @return \StructType\PricingRecommendationsType|null
     */
    public function getPricingRecommendations()
    {
        return $this->PricingRecommendations;
    }
    /**
     * Set PricingRecommendations value
     * @param \StructType\PricingRecommendationsType $pricingRecommendations
     * @return \StructType\GetRecommendationsResponseContainerType
     */
    public function setPricingRecommendations(\StructType\PricingRecommendationsType $pricingRecommendations = null)
    {
        $this->PricingRecommendations = $pricingRecommendations;
        return $this;
    }
    /**
     * Get AttributeRecommendations value
     * @return \StructType\AttributeRecommendationsType|null
     */
    public function getAttributeRecommendations()
    {
        return $this->AttributeRecommendations;
    }
    /**
     * Set AttributeRecommendations value
     * @param \StructType\AttributeRecommendationsType $attributeRecommendations
     * @return \StructType\GetRecommendationsResponseContainerType
     */
    public function setAttributeRecommendations(\StructType\AttributeRecommendationsType $attributeRecommendations = null)
    {
        $this->AttributeRecommendations = $attributeRecommendations;
        return $this;
    }
    /**
     * Get ProductRecommendations value
     * @return \StructType\ProductRecommendationsType|null
     */
    public function getProductRecommendations()
    {
        return $this->ProductRecommendations;
    }
    /**
     * Set ProductRecommendations value
     * @param \StructType\ProductRecommendationsType $productRecommendations
     * @return \StructType\GetRecommendationsResponseContainerType
     */
    public function setProductRecommendations(\StructType\ProductRecommendationsType $productRecommendations = null)
    {
        $this->ProductRecommendations = $productRecommendations;
        return $this;
    }
    /**
     * Get CorrelationID value
     * @return string|null
     */
    public function getCorrelationID()
    {
        return $this->CorrelationID;
    }
    /**
     * Set CorrelationID value
     * @param string $correlationID
     * @return \StructType\GetRecommendationsResponseContainerType
     */
    public function setCorrelationID($correlationID = null)
    {
        // validation for constraint: string
        if (!is_null($correlationID) && !is_string($correlationID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($correlationID, true), gettype($correlationID)), __LINE__);
        }
        $this->CorrelationID = $correlationID;
        return $this;
    }
    /**
     * Get Recommendations value
     * @return \StructType\RecommendationsType|null
     */
    public function getRecommendations()
    {
        return $this->Recommendations;
    }
    /**
     * Set Recommendations value
     * @param \StructType\RecommendationsType $recommendations
     * @return \StructType\GetRecommendationsResponseContainerType
     */
    public function setRecommendations(\StructType\RecommendationsType $recommendations = null)
    {
        $this->Recommendations = $recommendations;
        return $this;
    }
    /**
     * Get ProductListingDetails value
     * @return \StructType\ProductListingDetailsType|null
     */
    public function getProductListingDetails()
    {
        return $this->ProductListingDetails;
    }
    /**
     * Set ProductListingDetails value
     * @param \StructType\ProductListingDetailsType $productListingDetails
     * @return \StructType\GetRecommendationsResponseContainerType
     */
    public function setProductListingDetails(\StructType\ProductListingDetailsType $productListingDetails = null)
    {
        $this->ProductListingDetails = $productListingDetails;
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \StructType\GetRecommendationsResponseContainerType
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->Title = $title;
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
     * @return \StructType\GetRecommendationsResponseContainerType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
