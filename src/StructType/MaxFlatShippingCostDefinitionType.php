<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MaxFlatShippingCostDefinitionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>MaxFlatShippingCost</b> field that is returned under the <b>FeatureDefinitions</b> container. The <b>MaxFlatShippingCost</b> field is returned as empty and indicates that a maximum flat-rate shipping cost
 * threshold is enforced for some categories on the corresponding eBay site. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <b>MaxFlatShippingCost</b> is not one of the values passed into
 * those <b>FeatureID</b> fields.
 * @subpackage Structs
 */
class MaxFlatShippingCostDefinitionType extends AbstractStructBase
{
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MaxFlatShippingCostDefinitionType
     * @uses MaxFlatShippingCostDefinitionType::setAny()
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
     * @return \StructType\MaxFlatShippingCostDefinitionType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
