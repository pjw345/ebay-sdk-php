<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DomesticRefundMethodDefinitionType StructType
 * Meta information extracted from the WSDL
 * - documentation: On the EBAY_US marketplace only, sellers can offer item replacement in addition to offering money back returns. This flag defines the availability of such options for the given US marketplace category. Sellers can offer item
 * replacements only if returns are enabled (<b>returnPolicyEnabled</b> is set to <code>true</code>) for the item. You can specify item replacement in the AddItem family of calls and in the return policy settings of the Account API.
 * @subpackage Structs
 */
class DomesticRefundMethodDefinitionType extends AbstractStructBase
{
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for DomesticRefundMethodDefinitionType
     * @uses DomesticRefundMethodDefinitionType::setAny()
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
     * @return \StructType\DomesticRefundMethodDefinitionType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
