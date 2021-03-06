<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DomesticReturnsAcceptedDefinitionType StructType
 * Meta information extracted from the WSDL
 * - documentation: The values returned in this field indicate whether or not the seller accepts domestic returns for items listed in the associated marketplace and category. <br><br>While most categories return the <b>ReturnsAccepted</b> flag
 * (indicating the category supports returns), some categories will also return the <b>ReturnsNotAccepted</b> flag to indicate the seller can choose to not accept returns for an item listed in that category. <br><br>The values returned in this field are
 * pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. Here, it's worth noting that not accepting
 * returns is a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
 * @subpackage Structs
 */
class DomesticReturnsAcceptedDefinitionType extends AbstractStructBase
{
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for DomesticReturnsAcceptedDefinitionType
     * @uses DomesticReturnsAcceptedDefinitionType::setAny()
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
     * @return \StructType\DomesticReturnsAcceptedDefinitionType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
