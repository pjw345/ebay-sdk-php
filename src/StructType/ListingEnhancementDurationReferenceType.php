<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListingEnhancementDurationReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note:</b> This type is no longer applicable, as the Featured Gallery listing feature is being deprecated for all sites. If a seller attempts to add Featured Gallery as a listing enhancement, it is allowed,
 * but a warning will be returned announcing the deprecation of the feature. This feature was wired off in September 2019. </span> <br> Type used by the <b>GalleryFeaturedDurations</b> container that is returned at the <b>SiteDefaults</b> and
 * <b>Category</b> level in a <b>GetCategoryFeatures</b> response. <b>GalleryFeaturedDurations</b> container consists of the supported time durations that a picture gallery can be featured
 * @subpackage Structs
 */
class ListingEnhancementDurationReferenceType extends AbstractStructBase
{
    /**
     * The Duration
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note:</b> <b>Duration</b> fields are currently still being returned in <b>GetCategoryFeatures</b> response, but Featured Gallery listing feature is deprecated for all sites. If a seller attempts to add
     * Featured Gallery as a listing enhancement, it is allowed, but a warning will be returned announcing the deprecation of the feature. </span> <br> Each returned <b>Duration</b> field indicates a supported time duration that a picture gallery can be
     * featured. The <code>Lifetime</code> value indicates that the Featured Gallery enhancement will be active for the lifetime of the listing.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Duration;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ListingEnhancementDurationReferenceType
     * @uses ListingEnhancementDurationReferenceType::setDuration()
     * @uses ListingEnhancementDurationReferenceType::setAny()
     * @param string[] $duration
     * @param \DOMDocument $any
     */
    public function __construct(array $duration = array(), \DOMDocument $any = null)
    {
        $this
            ->setDuration($duration)
            ->setAny($any);
    }
    /**
     * Get Duration value
     * @return string[]|null
     */
    public function getDuration()
    {
        return $this->Duration;
    }
    /**
     * This method is responsible for validating the values passed to the setDuration method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDuration method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDurationForArrayConstraintsFromSetDuration(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $listingEnhancementDurationReferenceTypeDurationItem) {
            // validation for constraint: itemType
            if (!is_string($listingEnhancementDurationReferenceTypeDurationItem)) {
                $invalidValues[] = is_object($listingEnhancementDurationReferenceTypeDurationItem) ? get_class($listingEnhancementDurationReferenceTypeDurationItem) : sprintf('%s(%s)', gettype($listingEnhancementDurationReferenceTypeDurationItem), var_export($listingEnhancementDurationReferenceTypeDurationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Duration property can only contain items of type token, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Duration value
     * @throws \InvalidArgumentException
     * @param string[] $duration
     * @return \StructType\ListingEnhancementDurationReferenceType
     */
    public function setDuration(array $duration = array())
    {
        // validation for constraint: array
        if ('' !== ($durationArrayErrorMessage = self::validateDurationForArrayConstraintsFromSetDuration($duration))) {
            throw new \InvalidArgumentException($durationArrayErrorMessage, __LINE__);
        }
        $this->Duration = $duration;
        return $this;
    }
    /**
     * Add item to Duration value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\ListingEnhancementDurationReferenceType
     */
    public function addToDuration($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Duration property can only contain items of type token, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Duration[] = $item;
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
     * @return \StructType\ListingEnhancementDurationReferenceType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
