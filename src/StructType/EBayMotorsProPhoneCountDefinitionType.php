<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for eBayMotorsProPhoneCountDefinitionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Indicates which phone option the site supports for contacting the seller about Classified Ad format listings. Added for EbayMotors Pro users.
 * @subpackage Structs
 */
class EBayMotorsProPhoneCountDefinitionType extends AbstractStructBase
{
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for eBayMotorsProPhoneCountDefinitionType
     * @uses EBayMotorsProPhoneCountDefinitionType::setAny()
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
     * @return \StructType\EBayMotorsProPhoneCountDefinitionType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
