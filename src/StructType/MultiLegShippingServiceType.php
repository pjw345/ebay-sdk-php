<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultiLegShippingServiceType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type specifies the shipping service and cost of the domestic leg of a Global Shipping Program shipment.
 * @subpackage Structs
 */
class MultiLegShippingServiceType extends AbstractStructBase
{
    /**
     * The ShippingService
     * Meta information extracted from the WSDL
     * - documentation: The shipping service specified for the domestic leg of a Global Shipping Program shipment. For the domestic leg, the value of this field can be any available shipping service that ships to the domestic address of the international
     * shipping provider.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ShippingService;
    /**
     * The TotalShippingCost
     * Meta information extracted from the WSDL
     * - documentation: The total shipping cost of the domestic leg of a Global Shipping Program shipment.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $TotalShippingCost;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MultiLegShippingServiceType
     * @uses MultiLegShippingServiceType::setShippingService()
     * @uses MultiLegShippingServiceType::setTotalShippingCost()
     * @uses MultiLegShippingServiceType::setAny()
     * @param string $shippingService
     * @param \StructType\AmountType $totalShippingCost
     * @param \DOMDocument $any
     */
    public function __construct($shippingService = null, \StructType\AmountType $totalShippingCost = null, \DOMDocument $any = null)
    {
        $this
            ->setShippingService($shippingService)
            ->setTotalShippingCost($totalShippingCost)
            ->setAny($any);
    }
    /**
     * Get ShippingService value
     * @return string|null
     */
    public function getShippingService()
    {
        return $this->ShippingService;
    }
    /**
     * Set ShippingService value
     * @param string $shippingService
     * @return \StructType\MultiLegShippingServiceType
     */
    public function setShippingService($shippingService = null)
    {
        // validation for constraint: string
        if (!is_null($shippingService) && !is_string($shippingService)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingService, true), gettype($shippingService)), __LINE__);
        }
        $this->ShippingService = $shippingService;
        return $this;
    }
    /**
     * Get TotalShippingCost value
     * @return \StructType\AmountType|null
     */
    public function getTotalShippingCost()
    {
        return $this->TotalShippingCost;
    }
    /**
     * Set TotalShippingCost value
     * @param \StructType\AmountType $totalShippingCost
     * @return \StructType\MultiLegShippingServiceType
     */
    public function setTotalShippingCost(\StructType\AmountType $totalShippingCost = null)
    {
        $this->TotalShippingCost = $totalShippingCost;
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
     * @return \StructType\MultiLegShippingServiceType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
