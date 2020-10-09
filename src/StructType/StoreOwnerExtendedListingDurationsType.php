<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreOwnerExtendedListingDurationsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used to specify the additional listing durations that are available to sellers who have eBay Store subscriptions. The <b>StoreOwnerExtendedListingDurations</b> container is only returned under the <b>SiteDefaults</b>
 * node if the eBay marketplace supports additional listing durations for eBay Store owners, and this container is only returned under a <b>Category</b> node if this eBay category supports additional listing durations for eBay Store owners (other than
 * the durations that are already supported for the category).
 * @subpackage Structs
 */
class StoreOwnerExtendedListingDurationsType extends AbstractStructBase
{
    /**
     * The Duration
     * Meta information extracted from the WSDL
     * - documentation: Specifies the additional listing duration(s) (in days) supported by the eBay site and/or category. A <b>Duration</b> field is returned for each additional listing duration that the eBay marketplace or category supports.
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
     * Constructor method for StoreOwnerExtendedListingDurationsType
     * @uses StoreOwnerExtendedListingDurationsType::setDuration()
     * @uses StoreOwnerExtendedListingDurationsType::setAny()
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
        foreach ($values as $storeOwnerExtendedListingDurationsTypeDurationItem) {
            // validation for constraint: itemType
            if (!is_string($storeOwnerExtendedListingDurationsTypeDurationItem)) {
                $invalidValues[] = is_object($storeOwnerExtendedListingDurationsTypeDurationItem) ? get_class($storeOwnerExtendedListingDurationsTypeDurationItem) : sprintf('%s(%s)', gettype($storeOwnerExtendedListingDurationsTypeDurationItem), var_export($storeOwnerExtendedListingDurationsTypeDurationItem, true));
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
     * @return \StructType\StoreOwnerExtendedListingDurationsType
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
     * @return \StructType\StoreOwnerExtendedListingDurationsType
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
     * @return \StructType\StoreOwnerExtendedListingDurationsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
