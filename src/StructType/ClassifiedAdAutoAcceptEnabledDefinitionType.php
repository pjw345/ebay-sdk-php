<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClassifiedAdAutoAcceptEnabledDefinitionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>ClassifiedAdAutoAcceptEnabled</b> field that is returned under the <b>FeatureDefinitions</b> container of the <b>GetCategoryFeatures</b> response (as long as 'ClassifiedAdAutoAcceptEnabled' or
 * 'ClassifiedAdAutoDeclineEnabled' is included as a <b>FeatureID</b> value in the call request or no <b>FeatureID</b> values are passed into the call request). This field is returned as an empty element (a boolean value is not returned) if one or more
 * eBay API-enabled sites support the Classified Ad Auto Accept feature. <br/><br/> To verify if a specific eBay site supports the Classified Ad Auto Accept feature (for most categories), look for a 'true' value in the
 * <b>SiteDefaults.ClassifiedAdAutoAcceptEnabled</b> field. <br/><br/> To verify if a specific category on a specific eBay site supports the Classified Ad Auto Accept feature, pass in a <b>CategoryID</b> value in the request, and then look for a 'true'
 * value in the <b>ClassifiedAdAutoAcceptEnabled</b> field of the corresponding Category node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
 * @subpackage Structs
 */
class ClassifiedAdAutoAcceptEnabledDefinitionType extends AbstractStructBase
{
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ClassifiedAdAutoAcceptEnabledDefinitionType
     * @uses ClassifiedAdAutoAcceptEnabledDefinitionType::setAny()
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
     * @return \StructType\ClassifiedAdAutoAcceptEnabledDefinitionType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
