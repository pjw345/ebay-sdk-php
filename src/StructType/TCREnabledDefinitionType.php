<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TCREnabledDefinitionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Defines the Transaction Confirmation Request feature. If the field is present, the corresponding feature applies to the category. The field is returned as an empty element (i.e., a boolean value is not returned).
 * @subpackage Structs
 */
class TCREnabledDefinitionType extends AbstractStructBase
{
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for TCREnabledDefinitionType
     * @uses TCREnabledDefinitionType::setAny()
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
     * @return \StructType\TCREnabledDefinitionType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
