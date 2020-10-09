<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConditionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>ConditionValues.Condition</b> container that is returned at the category level in the <b>GetCategoryFeatures</b> response if 'ConditionValues' is specified as a <b>FeatureID</b> value, or if no <b>FeatureID</b>
 * values are specified. A <b>ConditionValues.Condition</b> container is returned for each supported item condition value for each eBay category returned in the response. <br> <br> <span class="tablenote"><strong>Note:</strong> Starting in mid-September
 * 2020, the 'Manufacturer Refurbished' item condition (Condition ID 2000) will no longer be supported on the US and Australian marketplaces. Active listings on these two marketplaces will automatically be updated by eBay to the 'Seller Refurbished'
 * item condition (Condition ID 2500). Once this change happens, if a seller attempts to create a new listing or revise an existing listing with the Inventory or Trading APIs using the 'Manufacturer Refurbished' item condition, the listing or revision
 * will be blocked. </span>
 * @subpackage Structs
 */
class ConditionType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: The numeric ID of a condition (e.g., 1000). Use the ID in AddItem and related calls.
     * - minOccurs: 0
     * @var int
     */
    public $ID;
    /**
     * The DisplayName
     * Meta information extracted from the WSDL
     * - documentation: The human-readable label for the condition (e.g., "New"). This value is typically localized for each site. The display name can vary by category. For example, condition ID 1000 could be called "New: with Tags" in one category and
     * "Brand New" in another.
     * - minOccurs: 0
     * @var string
     */
    public $DisplayName;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ConditionType
     * @uses ConditionType::setID()
     * @uses ConditionType::setDisplayName()
     * @uses ConditionType::setAny()
     * @param int $iD
     * @param string $displayName
     * @param \DOMDocument $any
     */
    public function __construct($iD = null, $displayName = null, \DOMDocument $any = null)
    {
        $this
            ->setID($iD)
            ->setDisplayName($displayName)
            ->setAny($any);
    }
    /**
     * Get ID value
     * @return int|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param int $iD
     * @return \StructType\ConditionType
     */
    public function setID($iD = null)
    {
        // validation for constraint: int
        if (!is_null($iD) && !(is_int($iD) || ctype_digit($iD))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get DisplayName value
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \StructType\ConditionType
     */
    public function setDisplayName($displayName = null)
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayName, true), gettype($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        return $this;
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
     * @return \StructType\ConditionType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
