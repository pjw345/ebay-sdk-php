<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListingRecommendationsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>ListingRecommendations</b> container that is conditionally returned in all Add/Revise/Relist/Verify API calls. A <b>ListingRecommendations</b> container consists of one or more <b>Recommendation</b> containers,
 * and each <b>Recommendation</b> container provides a message to the seller on how a listing can be improved or brought up to standard in regards to top-rated seller/listing requirements, mandated or recommended Item Specifics, picture quality
 * requirements, pricing and/or listing format recommendations, recommended keywords and/or Item Specifics in a Title, and/or a recommendation to use Fast 'N Free shipping. <br><br> The <b>ListingRecommendations</b> container is only returned if the
 * <b>IncludeRecommendations</b> flag is included and set to 'true' in the API call request.
 * @subpackage Structs
 */
class ListingRecommendationsType extends AbstractStructBase
{
    /**
     * The Recommendation
     * Meta information extracted from the WSDL
     * - documentation: Each <b>Recommendation</b> container provides a message to the seller on how a listing can be improved or brought up to standard in regards to top-rated seller/listing requirements, mandated or recommended Item Specifics, picture
     * quality requirements, pricing and/or listing format recommendations, recommended keywords and/or Item Specifics in a Title, and/or a recommendation to use Fast 'N Free shipping. <br><br> One or more <b>Recommendation</b> containers can be returned
     * for each listing.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ListingRecommendationType[]
     */
    public $Recommendation;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ListingRecommendationsType
     * @uses ListingRecommendationsType::setRecommendation()
     * @uses ListingRecommendationsType::setAny()
     * @param \StructType\ListingRecommendationType[] $recommendation
     * @param \DOMDocument $any
     */
    public function __construct(array $recommendation = array(), \DOMDocument $any = null)
    {
        $this
            ->setRecommendation($recommendation)
            ->setAny($any);
    }
    /**
     * Get Recommendation value
     * @return \StructType\ListingRecommendationType[]|null
     */
    public function getRecommendation()
    {
        return $this->Recommendation;
    }
    /**
     * This method is responsible for validating the values passed to the setRecommendation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRecommendation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRecommendationForArrayConstraintsFromSetRecommendation(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $listingRecommendationsTypeRecommendationItem) {
            // validation for constraint: itemType
            if (!$listingRecommendationsTypeRecommendationItem instanceof \StructType\ListingRecommendationType) {
                $invalidValues[] = is_object($listingRecommendationsTypeRecommendationItem) ? get_class($listingRecommendationsTypeRecommendationItem) : sprintf('%s(%s)', gettype($listingRecommendationsTypeRecommendationItem), var_export($listingRecommendationsTypeRecommendationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Recommendation property can only contain items of type \StructType\ListingRecommendationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Recommendation value
     * @throws \InvalidArgumentException
     * @param \StructType\ListingRecommendationType[] $recommendation
     * @return \StructType\ListingRecommendationsType
     */
    public function setRecommendation(array $recommendation = array())
    {
        // validation for constraint: array
        if ('' !== ($recommendationArrayErrorMessage = self::validateRecommendationForArrayConstraintsFromSetRecommendation($recommendation))) {
            throw new \InvalidArgumentException($recommendationArrayErrorMessage, __LINE__);
        }
        $this->Recommendation = $recommendation;
        return $this;
    }
    /**
     * Add item to Recommendation value
     * @throws \InvalidArgumentException
     * @param \StructType\ListingRecommendationType $item
     * @return \StructType\ListingRecommendationsType
     */
    public function addToRecommendation(\StructType\ListingRecommendationType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ListingRecommendationType) {
            throw new \InvalidArgumentException(sprintf('The Recommendation property can only contain items of type \StructType\ListingRecommendationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Recommendation[] = $item;
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
     * @return \StructType\ListingRecommendationsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
