<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingEstimatedDeliveryInfoType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is not currently in use.
 * @subpackage Structs
 */
class ShippingEstimatedDeliveryInfoType extends AbstractStructBase
{
    /**
     * The OriginalDeliveryEstimatedTimeMin
     * Meta information extracted from the WSDL
     * - documentation: This field is not currently in use.
     * - minOccurs: 0
     * @var string
     */
    public $OriginalDeliveryEstimatedTimeMin;
    /**
     * The OriginalDeliveryEstimatedTimeMax
     * Meta information extracted from the WSDL
     * - documentation: This field is not currently in use.
     * - minOccurs: 0
     * @var string
     */
    public $OriginalDeliveryEstimatedTimeMax;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ShippingEstimatedDeliveryInfoType
     * @uses ShippingEstimatedDeliveryInfoType::setOriginalDeliveryEstimatedTimeMin()
     * @uses ShippingEstimatedDeliveryInfoType::setOriginalDeliveryEstimatedTimeMax()
     * @uses ShippingEstimatedDeliveryInfoType::setAny()
     * @param string $originalDeliveryEstimatedTimeMin
     * @param string $originalDeliveryEstimatedTimeMax
     * @param \DOMDocument $any
     */
    public function __construct($originalDeliveryEstimatedTimeMin = null, $originalDeliveryEstimatedTimeMax = null, \DOMDocument $any = null)
    {
        $this
            ->setOriginalDeliveryEstimatedTimeMin($originalDeliveryEstimatedTimeMin)
            ->setOriginalDeliveryEstimatedTimeMax($originalDeliveryEstimatedTimeMax)
            ->setAny($any);
    }
    /**
     * Get OriginalDeliveryEstimatedTimeMin value
     * @return string|null
     */
    public function getOriginalDeliveryEstimatedTimeMin()
    {
        return $this->OriginalDeliveryEstimatedTimeMin;
    }
    /**
     * Set OriginalDeliveryEstimatedTimeMin value
     * @param string $originalDeliveryEstimatedTimeMin
     * @return \StructType\ShippingEstimatedDeliveryInfoType
     */
    public function setOriginalDeliveryEstimatedTimeMin($originalDeliveryEstimatedTimeMin = null)
    {
        // validation for constraint: string
        if (!is_null($originalDeliveryEstimatedTimeMin) && !is_string($originalDeliveryEstimatedTimeMin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalDeliveryEstimatedTimeMin, true), gettype($originalDeliveryEstimatedTimeMin)), __LINE__);
        }
        $this->OriginalDeliveryEstimatedTimeMin = $originalDeliveryEstimatedTimeMin;
        return $this;
    }
    /**
     * Get OriginalDeliveryEstimatedTimeMax value
     * @return string|null
     */
    public function getOriginalDeliveryEstimatedTimeMax()
    {
        return $this->OriginalDeliveryEstimatedTimeMax;
    }
    /**
     * Set OriginalDeliveryEstimatedTimeMax value
     * @param string $originalDeliveryEstimatedTimeMax
     * @return \StructType\ShippingEstimatedDeliveryInfoType
     */
    public function setOriginalDeliveryEstimatedTimeMax($originalDeliveryEstimatedTimeMax = null)
    {
        // validation for constraint: string
        if (!is_null($originalDeliveryEstimatedTimeMax) && !is_string($originalDeliveryEstimatedTimeMax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalDeliveryEstimatedTimeMax, true), gettype($originalDeliveryEstimatedTimeMax)), __LINE__);
        }
        $this->OriginalDeliveryEstimatedTimeMax = $originalDeliveryEstimatedTimeMax;
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
     * @return \StructType\ShippingEstimatedDeliveryInfoType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
