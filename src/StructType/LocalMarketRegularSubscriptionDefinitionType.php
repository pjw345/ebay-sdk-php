<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocalMarketRegularSubscriptionDefinitionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Defines the LocalMarketRegularSubscription feature. If this field is present, the corresponding feature applies to the category. The field is returned as an empty element (i.e., a boolean value is not returned). A subscription for
 * Local Market for Vehicles will be returned by GetUser if a dealer has subscribed to any of the following Local Market Regular sub-types: Vehicles Regular Six Months, Vehicles Regular Special Promotion, Vehicles Regular Multistore Level S, Vehicles
 * Regular Multistore Level M, or Vehicles Regular Multistore Level L. Each of these sub-types has a separate discount and billing cycle.
 * @subpackage Structs
 */
class LocalMarketRegularSubscriptionDefinitionType extends AbstractStructBase
{
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for LocalMarketRegularSubscriptionDefinitionType
     * @uses LocalMarketRegularSubscriptionDefinitionType::setAny()
     * @param \DOMDocument $any
     */
    public function __construct(\DOMDocument $any = null)
    {
        $this
            ->setAny($any);
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
     * @return \StructType\LocalMarketRegularSubscriptionDefinitionType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
