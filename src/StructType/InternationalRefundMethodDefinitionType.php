<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InternationalRefundMethodDefinitionType StructType
 * Meta information extracted from the WSDL
 * - documentation: In US, sellers can offer an item replacement for returns, in addition to offering money back returns. The values returned in this field indicate the availability of such options for the given marketplace and category. <br><br>The
 * values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values
 * returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
 * @subpackage Structs
 */
class InternationalRefundMethodDefinitionType extends AbstractStructBase
{
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for InternationalRefundMethodDefinitionType
     * @uses InternationalRefundMethodDefinitionType::setAny()
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
     * @return \StructType\InternationalRefundMethodDefinitionType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
