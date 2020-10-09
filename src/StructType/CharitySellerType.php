<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CharitySellerType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains information about one seller associated with a registered eBay for Charity nonprofit organization.
 * @subpackage Structs
 */
class CharitySellerType extends AbstractStructBase
{
    /**
     * The CharitySellerStatus
     * Meta information extracted from the WSDL
     * - documentation: Indicates the status of the seller's charity seller account.
     * - minOccurs: 0
     * @var string
     */
    public $CharitySellerStatus;
    /**
     * The CharityAffiliation
     * Meta information extracted from the WSDL
     * - documentation: Indicates the affiliation status for nonprofit charity organizations registered with the PayPal Giving Fund.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\CharityAffiliationType[]
     */
    public $CharityAffiliation;
    /**
     * The TermsAndConditionsAccepted
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the seller has accepted the PayPal Giving Fund Terms and Conditions.
     * - minOccurs: 0
     * @var bool
     */
    public $TermsAndConditionsAccepted;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for CharitySellerType
     * @uses CharitySellerType::setCharitySellerStatus()
     * @uses CharitySellerType::setCharityAffiliation()
     * @uses CharitySellerType::setTermsAndConditionsAccepted()
     * @uses CharitySellerType::setAny()
     * @param string $charitySellerStatus
     * @param \StructType\CharityAffiliationType[] $charityAffiliation
     * @param bool $termsAndConditionsAccepted
     * @param \DOMDocument $any
     */
    public function __construct($charitySellerStatus = null, array $charityAffiliation = array(), $termsAndConditionsAccepted = null, \DOMDocument $any = null)
    {
        $this
            ->setCharitySellerStatus($charitySellerStatus)
            ->setCharityAffiliation($charityAffiliation)
            ->setTermsAndConditionsAccepted($termsAndConditionsAccepted)
            ->setAny($any);
    }
    /**
     * Get CharitySellerStatus value
     * @return string|null
     */
    public function getCharitySellerStatus()
    {
        return $this->CharitySellerStatus;
    }
    /**
     * Set CharitySellerStatus value
     * @uses \EnumType\CharitySellerStatusCodeType::valueIsValid()
     * @uses \EnumType\CharitySellerStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $charitySellerStatus
     * @return \StructType\CharitySellerType
     */
    public function setCharitySellerStatus($charitySellerStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CharitySellerStatusCodeType::valueIsValid($charitySellerStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CharitySellerStatusCodeType', is_array($charitySellerStatus) ? implode(', ', $charitySellerStatus) : var_export($charitySellerStatus, true), implode(', ', \EnumType\CharitySellerStatusCodeType::getValidValues())), __LINE__);
        }
        $this->CharitySellerStatus = $charitySellerStatus;
        return $this;
    }
    /**
     * Get CharityAffiliation value
     * @return \StructType\CharityAffiliationType[]|null
     */
    public function getCharityAffiliation()
    {
        return $this->CharityAffiliation;
    }
    /**
     * This method is responsible for validating the values passed to the setCharityAffiliation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCharityAffiliation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCharityAffiliationForArrayConstraintsFromSetCharityAffiliation(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $charitySellerTypeCharityAffiliationItem) {
            // validation for constraint: itemType
            if (!$charitySellerTypeCharityAffiliationItem instanceof \StructType\CharityAffiliationType) {
                $invalidValues[] = is_object($charitySellerTypeCharityAffiliationItem) ? get_class($charitySellerTypeCharityAffiliationItem) : sprintf('%s(%s)', gettype($charitySellerTypeCharityAffiliationItem), var_export($charitySellerTypeCharityAffiliationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CharityAffiliation property can only contain items of type \StructType\CharityAffiliationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set CharityAffiliation value
     * @throws \InvalidArgumentException
     * @param \StructType\CharityAffiliationType[] $charityAffiliation
     * @return \StructType\CharitySellerType
     */
    public function setCharityAffiliation(array $charityAffiliation = array())
    {
        // validation for constraint: array
        if ('' !== ($charityAffiliationArrayErrorMessage = self::validateCharityAffiliationForArrayConstraintsFromSetCharityAffiliation($charityAffiliation))) {
            throw new \InvalidArgumentException($charityAffiliationArrayErrorMessage, __LINE__);
        }
        $this->CharityAffiliation = $charityAffiliation;
        return $this;
    }
    /**
     * Add item to CharityAffiliation value
     * @throws \InvalidArgumentException
     * @param \StructType\CharityAffiliationType $item
     * @return \StructType\CharitySellerType
     */
    public function addToCharityAffiliation(\StructType\CharityAffiliationType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CharityAffiliationType) {
            throw new \InvalidArgumentException(sprintf('The CharityAffiliation property can only contain items of type \StructType\CharityAffiliationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CharityAffiliation[] = $item;
        return $this;
    }
    /**
     * Get TermsAndConditionsAccepted value
     * @return bool|null
     */
    public function getTermsAndConditionsAccepted()
    {
        return $this->TermsAndConditionsAccepted;
    }
    /**
     * Set TermsAndConditionsAccepted value
     * @param bool $termsAndConditionsAccepted
     * @return \StructType\CharitySellerType
     */
    public function setTermsAndConditionsAccepted($termsAndConditionsAccepted = null)
    {
        // validation for constraint: boolean
        if (!is_null($termsAndConditionsAccepted) && !is_bool($termsAndConditionsAccepted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($termsAndConditionsAccepted, true), gettype($termsAndConditionsAccepted)), __LINE__);
        }
        $this->TermsAndConditionsAccepted = $termsAndConditionsAccepted;
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
     * @return \StructType\CharitySellerType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
