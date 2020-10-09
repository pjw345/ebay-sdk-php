<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultiLegShippingDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type provides information about the domestic leg of a Global Shipping Program shipment. <br/><br/> <span class="tablenote"> <strong>Note:</strong> The <strong>LogisticsProviderShipmentToBuyer</strong> field is reserved for the
 * exclusive use of the international shipping provider. </span>
 * @subpackage Structs
 */
class MultiLegShippingDetailsType extends AbstractStructBase
{
    /**
     * The SellerShipmentToLogisticsProvider
     * Meta information extracted from the WSDL
     * - documentation: Contains information about the domestic leg of a Global Shipping Programn shipment, including the seller-selected shipping service, the domestic shipping cost, the domestic address of the international shipping provider, and the
     * estimated shipping time range.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\MultiLegShipmentType
     */
    public $SellerShipmentToLogisticsProvider;
    /**
     * The LogisticsProviderShipmentToBuyer
     * Meta information extracted from the WSDL
     * - documentation: Reserved for use by the international shipping provider.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\MultiLegShipmentType
     */
    public $LogisticsProviderShipmentToBuyer;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MultiLegShippingDetailsType
     * @uses MultiLegShippingDetailsType::setSellerShipmentToLogisticsProvider()
     * @uses MultiLegShippingDetailsType::setLogisticsProviderShipmentToBuyer()
     * @uses MultiLegShippingDetailsType::setAny()
     * @param \StructType\MultiLegShipmentType $sellerShipmentToLogisticsProvider
     * @param \StructType\MultiLegShipmentType $logisticsProviderShipmentToBuyer
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\MultiLegShipmentType $sellerShipmentToLogisticsProvider = null, \StructType\MultiLegShipmentType $logisticsProviderShipmentToBuyer = null, \DOMDocument $any = null)
    {
        $this
            ->setSellerShipmentToLogisticsProvider($sellerShipmentToLogisticsProvider)
            ->setLogisticsProviderShipmentToBuyer($logisticsProviderShipmentToBuyer)
            ->setAny($any);
    }
    /**
     * Get SellerShipmentToLogisticsProvider value
     * @return \StructType\MultiLegShipmentType|null
     */
    public function getSellerShipmentToLogisticsProvider()
    {
        return $this->SellerShipmentToLogisticsProvider;
    }
    /**
     * Set SellerShipmentToLogisticsProvider value
     * @param \StructType\MultiLegShipmentType $sellerShipmentToLogisticsProvider
     * @return \StructType\MultiLegShippingDetailsType
     */
    public function setSellerShipmentToLogisticsProvider(\StructType\MultiLegShipmentType $sellerShipmentToLogisticsProvider = null)
    {
        $this->SellerShipmentToLogisticsProvider = $sellerShipmentToLogisticsProvider;
        return $this;
    }
    /**
     * Get LogisticsProviderShipmentToBuyer value
     * @return \StructType\MultiLegShipmentType|null
     */
    public function getLogisticsProviderShipmentToBuyer()
    {
        return $this->LogisticsProviderShipmentToBuyer;
    }
    /**
     * Set LogisticsProviderShipmentToBuyer value
     * @param \StructType\MultiLegShipmentType $logisticsProviderShipmentToBuyer
     * @return \StructType\MultiLegShippingDetailsType
     */
    public function setLogisticsProviderShipmentToBuyer(\StructType\MultiLegShipmentType $logisticsProviderShipmentToBuyer = null)
    {
        $this->LogisticsProviderShipmentToBuyer = $logisticsProviderShipmentToBuyer;
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
     * @return \StructType\MultiLegShippingDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
