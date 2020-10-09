<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CharityAffiliationDetailType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>CharityAffiliationDetail</b> container that is returned in the <b>GetUser</b> response. The <b>CharityAffiliationDetail</b> container consists of information on a nonprofit charity organization associated with
 * the seller's account. A separate <b>CharityAffiliationDetail</b> container is returned for each nonprofit charity organization associated with the seller's account.
 * @subpackage Structs
 */
class CharityAffiliationDetailType extends AbstractStructBase
{
    /**
     * The CharityID
     * Meta information extracted from the WSDL
     * - documentation: The eBay unique identifier of the nonprofit organization associated with the seller's account. Once a nonprofit organization comes aboard as an eBay for Charity organization, eBay creates and assigns this ID to the nonprofit
     * organization.
     * - minOccurs: 0
     * @var string
     */
    public $CharityID;
    /**
     * The AffiliationType
     * Meta information extracted from the WSDL
     * - documentation: The enumeration value returned here indicates whether the eBay user is just selling on the behalf of the nonprofit organization, or if the eBay user is directly affiliated with/representing the nonprofit organization, or the eBay
     * user has been added as a Direct Seller by the nonprofit organization.
     * - minOccurs: 0
     * @var string
     */
    public $AffiliationType;
    /**
     * The LastUsedTime
     * Meta information extracted from the WSDL
     * - documentation: This timestamp indicates when the eBay user last contributed to the nonprofit organization through the donated proceeds of an eBay sale.
     * - minOccurs: 0
     * @var string
     */
    public $LastUsedTime;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for CharityAffiliationDetailType
     * @uses CharityAffiliationDetailType::setCharityID()
     * @uses CharityAffiliationDetailType::setAffiliationType()
     * @uses CharityAffiliationDetailType::setLastUsedTime()
     * @uses CharityAffiliationDetailType::setAny()
     * @param string $charityID
     * @param string $affiliationType
     * @param string $lastUsedTime
     * @param \DOMDocument $any
     */
    public function __construct($charityID = null, $affiliationType = null, $lastUsedTime = null, \DOMDocument $any = null)
    {
        $this
            ->setCharityID($charityID)
            ->setAffiliationType($affiliationType)
            ->setLastUsedTime($lastUsedTime)
            ->setAny($any);
    }
    /**
     * Get CharityID value
     * @return string|null
     */
    public function getCharityID()
    {
        return $this->CharityID;
    }
    /**
     * Set CharityID value
     * @param string $charityID
     * @return \StructType\CharityAffiliationDetailType
     */
    public function setCharityID($charityID = null)
    {
        // validation for constraint: string
        if (!is_null($charityID) && !is_string($charityID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($charityID, true), gettype($charityID)), __LINE__);
        }
        $this->CharityID = $charityID;
        return $this;
    }
    /**
     * Get AffiliationType value
     * @return string|null
     */
    public function getAffiliationType()
    {
        return $this->AffiliationType;
    }
    /**
     * Set AffiliationType value
     * @uses \EnumType\CharityAffiliationTypeCodeType::valueIsValid()
     * @uses \EnumType\CharityAffiliationTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $affiliationType
     * @return \StructType\CharityAffiliationDetailType
     */
    public function setAffiliationType($affiliationType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CharityAffiliationTypeCodeType::valueIsValid($affiliationType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CharityAffiliationTypeCodeType', is_array($affiliationType) ? implode(', ', $affiliationType) : var_export($affiliationType, true), implode(', ', \EnumType\CharityAffiliationTypeCodeType::getValidValues())), __LINE__);
        }
        $this->AffiliationType = $affiliationType;
        return $this;
    }
    /**
     * Get LastUsedTime value
     * @return string|null
     */
    public function getLastUsedTime()
    {
        return $this->LastUsedTime;
    }
    /**
     * Set LastUsedTime value
     * @param string $lastUsedTime
     * @return \StructType\CharityAffiliationDetailType
     */
    public function setLastUsedTime($lastUsedTime = null)
    {
        // validation for constraint: string
        if (!is_null($lastUsedTime) && !is_string($lastUsedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastUsedTime, true), gettype($lastUsedTime)), __LINE__);
        }
        $this->LastUsedTime = $lastUsedTime;
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
     * @return \StructType\CharityAffiliationDetailType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
