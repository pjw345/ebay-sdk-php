<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EpidSupportedDefinitionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>EpidSupported</b> field that is returned under the <b>FeatureDefinitions</b> container of the <b>GetCategoryFeatures</b> response (as long as <b>EpidSupported</b> is included as a <b>FeatureID</b> value in the
 * call request, or no <b>FeatureID</b> values are passed into the call request). The <b>EpidSupported</b> field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support specifying parts
 * compatibility through an eBay product ID (ePID). <br><br> At this time, this feature is only supported for motorcycle and scooter listings on the Germany and UK sites. <br><br> To verify if a specific category supports specifying parts compatibility
 * through an ePID, pass in a <b>EpidSupported</b> value in the request, and then look for a <code>true</code> value in the <b>EpidSupported</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one
 * category ID was passed in the request).
 * @subpackage Structs
 */
class EpidSupportedDefinitionType extends AbstractStructBase
{
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for EpidSupportedDefinitionType
     * @uses EpidSupportedDefinitionType::setAny()
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
     * @return \StructType\EpidSupportedDefinitionType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
