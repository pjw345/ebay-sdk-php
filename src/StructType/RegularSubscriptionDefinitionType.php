<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegularSubscriptionDefinitionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Indicates category support for listing of Local Market items by sellers subscribed to Local Market for Regular Vehicles. Each of the subscriptions will have following options, which will define "National" vs "Local" ad format
 * listing. "LocalOptional" : This will allow national and local listing. "LocalOnly" : Seller can have Local listings only. "NationalOnly" : Seller can not opt into local only exposure. It has to be national listing.
 * @subpackage Structs
 */
class RegularSubscriptionDefinitionType extends AbstractStructBase
{
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for RegularSubscriptionDefinitionType
     * @uses RegularSubscriptionDefinitionType::setAny()
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
     * @return \StructType\RegularSubscriptionDefinitionType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
