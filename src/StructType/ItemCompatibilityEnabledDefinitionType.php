<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemCompatibilityEnabledDefinitionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Defines the parts compatibility feature. If the field is present, the corresponding feature applies to the site. The field is returned as an empty element (e.g., a boolean value is not returned). <br><br> Parts compatibility listings
 * contain information to determine the assemblies with which a part is compatible. For example, an automotive part or accessory listed witih parts compatibility can be matched with vehicles (e.g., specific years, makes, and models) with which the part
 * or accessory can be used. <br><br> There are two ways to enter parts compatibility: by application and by specification. <ul> <li> Entering parts compatibility by application specifies the assemblies (e.g., a specific year, make, and model of car) to
 * which the item applies. This can be done automatically by listing with a catalog product that supports parts compatibility, or manually, using <b class="con">Item.ItemCompatibilityList</b> when listing or revising an item. </li> <li>Entering parts
 * compatibility by specification involves specifying the part's relevant dimensions and characteristics necessary to determine the assemblies with which the part is compatible (e.g., Section Width, Aspect Ratio, Rim Diammeter, Load Index, and Speed
 * Rating values for a tire) using attributes.</li> </ul>
 * @subpackage Structs
 */
class ItemCompatibilityEnabledDefinitionType extends AbstractStructBase
{
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ItemCompatibilityEnabledDefinitionType
     * @uses ItemCompatibilityEnabledDefinitionType::setAny()
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
     * @return \StructType\ItemCompatibilityEnabledDefinitionType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
