<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClassifiedAdPhoneCountDefinitionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Indicates which phone option the category supports for contacting the seller for Classified Ad format listings. Added for the For Sale By Owner format.
 * @subpackage Structs
 */
class ClassifiedAdPhoneCountDefinitionType extends AbstractStructBase
{
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ClassifiedAdPhoneCountDefinitionType
     * @uses ClassifiedAdPhoneCountDefinitionType::setAny()
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
     * @return \StructType\ClassifiedAdPhoneCountDefinitionType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
