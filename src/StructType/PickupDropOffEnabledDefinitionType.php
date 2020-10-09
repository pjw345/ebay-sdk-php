<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PickupDropOffEnabledDefinitionType StructType
 * Meta information extracted from the WSDL
 * - documentation: The <b>PickupDropOffEnabled</b> field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the "Click and Collect" feature. This field will be returned as long as
 * 'PickupDropOffEnabled' is included as a <b>FeatureID</b> value in the call request or no <b>FeatureID</b> values are passed into the call request. <br/><br/> The 'Click and Collect' feature is only available to large merchants on the eBay UK (site ID
 * - 3), eBay Australia (Site ID - 15), and eBay Germany (Site ID - 77) sites. <br/><br/> To verify if a specific category supports the the "Click and Collect" feature, pass in a <b>CategoryID</b> value in the request, and then look for a 'true' value
 * in the <b>PickupDropOffEnabled</b> field of the corresponding Category node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request). <br> <br> <span class="tablenote"><b>Note:</b> For Click and Collect
 * eligible sellers, the Click and Collect feature can only be enabled at the account level, and then each of the seller's listings within an Click and Collect enabled category will be automatically evaluated for Click and Collect eligibility. </span>
 * @subpackage Structs
 */
class PickupDropOffEnabledDefinitionType extends AbstractStructBase
{
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PickupDropOffEnabledDefinitionType
     * @uses PickupDropOffEnabledDefinitionType::setAny()
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
     * @return \StructType\PickupDropOffEnabledDefinitionType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
