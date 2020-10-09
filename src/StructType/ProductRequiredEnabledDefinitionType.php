<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductRequiredEnabledDefinitionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>ProductRequiredEnabled</b> field that is returned under the <b>FeatureDefinitions</b> container of the <b>GetCategoryFeatures</b> response (as long as <b>ProductRequiredEnabled</b> is included as a <a
 * href="types/FeatureIDCodeType.html">FeatureID</a> value in the call request or no <b>FeatureID</b> values are passed into the call request). The <b>ProductRequiredEnabled</b> field is returned as an empty element (a boolean value is not returned) if
 * one or more eBay API-enabled sites support the Product-Based Shopping Experience. <br> <br> <span class="tablenote"><b>Note:</b> Due to the rollback of the Product-Based Shopping Experience mandate for all eBay categories, the
 * <b>FeatureDefinitions.ProductRequiredEnabled</b> field no longer has any practical use. Due to this fact, the <b>ProductRequiredEnabledDefinitionType</b> is currently not applicable. </span>
 * @subpackage Structs
 */
class ProductRequiredEnabledDefinitionType extends AbstractStructBase
{
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ProductRequiredEnabledDefinitionType
     * @uses ProductRequiredEnabledDefinitionType::setAny()
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
     * @return \StructType\ProductRequiredEnabledDefinitionType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
