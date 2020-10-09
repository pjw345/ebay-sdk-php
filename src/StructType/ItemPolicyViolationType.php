<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemPolicyViolationType StructType
 * Meta information extracted from the WSDL
 * - documentation: Specifies the details of policy violations if the item was administratively canceled. The details are the policy ID and the policy text.
 * @subpackage Structs
 */
class ItemPolicyViolationType extends AbstractStructBase
{
    /**
     * The PolicyID
     * Meta information extracted from the WSDL
     * - documentation: Policy ID of the violated policy which resulted in item being administratively canceled.
     * - minOccurs: 0
     * @var int
     */
    public $PolicyID;
    /**
     * The PolicyText
     * Meta information extracted from the WSDL
     * - documentation: Brief information of the violated policy which resulted in item being administratively canceled.
     * - minOccurs: 0
     * @var string
     */
    public $PolicyText;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ItemPolicyViolationType
     * @uses ItemPolicyViolationType::setPolicyID()
     * @uses ItemPolicyViolationType::setPolicyText()
     * @uses ItemPolicyViolationType::setAny()
     * @param int $policyID
     * @param string $policyText
     * @param \DOMDocument $any
     */
    public function __construct($policyID = null, $policyText = null, \DOMDocument $any = null)
    {
        $this
            ->setPolicyID($policyID)
            ->setPolicyText($policyText)
            ->setAny($any);
    }
    /**
     * Get PolicyID value
     * @return int|null
     */
    public function getPolicyID()
    {
        return $this->PolicyID;
    }
    /**
     * Set PolicyID value
     * @param int $policyID
     * @return \StructType\ItemPolicyViolationType
     */
    public function setPolicyID($policyID = null)
    {
        // validation for constraint: int
        if (!is_null($policyID) && !(is_int($policyID) || ctype_digit($policyID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($policyID, true), gettype($policyID)), __LINE__);
        }
        $this->PolicyID = $policyID;
        return $this;
    }
    /**
     * Get PolicyText value
     * @return string|null
     */
    public function getPolicyText()
    {
        return $this->PolicyText;
    }
    /**
     * Set PolicyText value
     * @param string $policyText
     * @return \StructType\ItemPolicyViolationType
     */
    public function setPolicyText($policyText = null)
    {
        // validation for constraint: string
        if (!is_null($policyText) && !is_string($policyText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($policyText, true), gettype($policyText)), __LINE__);
        }
        $this->PolicyText = $policyText;
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
     * @return \StructType\ItemPolicyViolationType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
