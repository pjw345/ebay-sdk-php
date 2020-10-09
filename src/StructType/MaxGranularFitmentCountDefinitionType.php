<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MaxGranularFitmentCountDefinitionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>MaxGranularFitmentCount</b> field that is returned under the <b>FeatureDefinitions</b> container. The <b>MaxGranularFitmentCount</b> field is returned as empty and indicates that a maximum parts compatibility
 * threshold is applicable to some motor vehicle parts and accessory categories on the corresponding eBay site. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <b>MaxGranularFitmentCount</b> is
 * not one of the values passed into those <b>FeatureID</b> fields.
 * @subpackage Structs
 */
class MaxGranularFitmentCountDefinitionType extends AbstractStructBase
{
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MaxGranularFitmentCountDefinitionType
     * @uses MaxGranularFitmentCountDefinitionType::setAny()
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
     * @return \StructType\MaxGranularFitmentCountDefinitionType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
