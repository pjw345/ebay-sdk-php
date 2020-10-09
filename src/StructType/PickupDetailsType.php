<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PickupDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type defines the <strong>PickupDetails</strong> container, which contains an array of <strong>PickupOptions</strong> containers. Each <strong>PickupOptions</strong> container consists of the pickup method and its priority.
 * <br/><br/> <span class="tablenote"> <strong>Note:</strong> At this time, the In-Store Pickup and Click and Collect features are generally only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings.
 * In-Store Pickup is only applicable to the US site, and Click and Collect is only applicable to the UK, Germany, and Australia sites. </span>
 * @subpackage Structs
 */
class PickupDetailsType extends AbstractStructBase
{
    /**
     * The PickupOptions
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of a pickup method and the priority of the pickup method. The priority of each pickup method controls the order (relative to other pickup methods) in which the corresponding pickup method will appear in the View
     * Item and Checkout page. <br/><br/> This container is always returned prior to order payment if the seller created/revised/relisted the item with the <strong>EligibleForPickupInStore</strong> and/or <strong>EligibleForPickupDropOff</strong> flag in
     * the call request set to 'true'. If and when the In-Store pickup method (US only) or 'Click and Collect' pickup method (UK and Australia only) is selected by the buyer and payment for the order is made, this container will no longer be returned in the
     * response, and will essentially be replaced by the <strong>PickupMethodSelected</strong> container. <br/><br/> <span class="tablenote"> <strong>Note:</strong> At this time, the In-Store Pickup and Click and Collect features are generally only
     * available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings. In-Store Pickup is only applicable to the US site, and Click and Collect is only applicable to the UK, Germany, and Australia sites. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\PickupOptionsType[]
     */
    public $PickupOptions;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PickupDetailsType
     * @uses PickupDetailsType::setPickupOptions()
     * @uses PickupDetailsType::setAny()
     * @param \StructType\PickupOptionsType[] $pickupOptions
     * @param \DOMDocument $any
     */
    public function __construct(array $pickupOptions = array(), \DOMDocument $any = null)
    {
        $this
            ->setPickupOptions($pickupOptions)
            ->setAny($any);
    }
    /**
     * Get PickupOptions value
     * @return \StructType\PickupOptionsType[]|null
     */
    public function getPickupOptions()
    {
        return $this->PickupOptions;
    }
    /**
     * This method is responsible for validating the values passed to the setPickupOptions method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPickupOptions method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePickupOptionsForArrayConstraintsFromSetPickupOptions(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $pickupDetailsTypePickupOptionsItem) {
            // validation for constraint: itemType
            if (!$pickupDetailsTypePickupOptionsItem instanceof \StructType\PickupOptionsType) {
                $invalidValues[] = is_object($pickupDetailsTypePickupOptionsItem) ? get_class($pickupDetailsTypePickupOptionsItem) : sprintf('%s(%s)', gettype($pickupDetailsTypePickupOptionsItem), var_export($pickupDetailsTypePickupOptionsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PickupOptions property can only contain items of type \StructType\PickupOptionsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set PickupOptions value
     * @throws \InvalidArgumentException
     * @param \StructType\PickupOptionsType[] $pickupOptions
     * @return \StructType\PickupDetailsType
     */
    public function setPickupOptions(array $pickupOptions = array())
    {
        // validation for constraint: array
        if ('' !== ($pickupOptionsArrayErrorMessage = self::validatePickupOptionsForArrayConstraintsFromSetPickupOptions($pickupOptions))) {
            throw new \InvalidArgumentException($pickupOptionsArrayErrorMessage, __LINE__);
        }
        $this->PickupOptions = $pickupOptions;
        return $this;
    }
    /**
     * Add item to PickupOptions value
     * @throws \InvalidArgumentException
     * @param \StructType\PickupOptionsType $item
     * @return \StructType\PickupDetailsType
     */
    public function addToPickupOptions(\StructType\PickupOptionsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PickupOptionsType) {
            throw new \InvalidArgumentException(sprintf('The PickupOptions property can only contain items of type \StructType\PickupOptionsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PickupOptions[] = $item;
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
     * @return \StructType\PickupDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
