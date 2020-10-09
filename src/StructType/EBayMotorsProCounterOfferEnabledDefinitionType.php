<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for eBayMotorsProCounterOfferEnabledDefinitionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>eBayMotorsProCounterOfferEnabled</b> field that is returned under the <b>FeatureDefinitions</b> container if <code>eBayMotorsProCounterOfferEnabled</code> is used as a <b>FeatureID</b> value in the request, or if
 * no <b>FeatureID</b> values are used in the request. This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support counter offers to Best Offers for eBay Motors Classified Ad listings. Only
 * eBay Motors Pro users are eligible to use eBay Motors Classified Ad listings. <br/><br/> To verify if a specific eBay site supports counter offers to Best Offers for eBay Motors Classified Ad listings (for most categories), look for a
 * <code>true</code> value in the <b>SiteDefaults.eBayMotorsProCounterOfferEnabled</b> field. <br/><br/> To verify if a specific category on a specific eBay site supports counter offers to Best Offers for eBay Motors Classified Ad listings, pass in a
 * <b>CategoryID</b> value in the request, and then look for a <code>true</code> value in the <b>eBayMotorsProCounterOfferEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs
 * were passed in the request).
 * @subpackage Structs
 */
class EBayMotorsProCounterOfferEnabledDefinitionType extends AbstractStructBase
{
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for eBayMotorsProCounterOfferEnabledDefinitionType
     * @uses EBayMotorsProCounterOfferEnabledDefinitionType::setAny()
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
     * @return \StructType\EBayMotorsProCounterOfferEnabledDefinitionType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
